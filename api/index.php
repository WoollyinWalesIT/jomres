<?php
/**
 *
 *  @package Jomres\Core\REST_API
 * Handles REST API messages
 *
 * Uses Oauth2 and Flight libraries to handle authentication and routing respectively. REST API functionality is provided by API features which are Jomres plugins, this functionality hands off calls to those API features through the routes.php script. 
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 *
 *
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */

// create a log channel
define('TRANSACTION_ID', time());

define('JOMRES_API_CMS_ROOT', dirname(dirname(dirname(__FILE__))));
define('JOMRES_API_JOMRES_ROOT', dirname(dirname(__FILE__)));
define('JOMRES_CORE_API_ABSPATH', JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'jomres'.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'jomres'.DIRECTORY_SEPARATOR.'api'.DIRECTORY_SEPARATOR);
if (!defined('_JOMRES_INITCHECK')) {
    define('_JOMRES_INITCHECK', 1);
}

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    }
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    }
}
			
date_default_timezone_set('UTC');
require JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'jomres'.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

require 'classes/logging.class.php';
require 'oauth/inc_configs.php';

// Currently disabled as not setup right now to test this.
/* require_once(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'configuration.php');
if (!isset($jrConfig['api_force_ssl']))
    $jrConfig['api_force_ssl'] = true;
else
    $jrConfig['api_force_ssl'] = (bool) $jrConfig['api_force_ssl'] ;

$https = false;
if (isset($_SERVER['SERVER_PORT']) && // nginx
        ($_SERVER['SERVER_PORT'] === '443')) {
    $https = true;
} else if ( !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') { // Apache & IIS
    $https = false;
}
    
if ( $https == false && $jrConfig['api_force_ssl'] == true ) {
    Flight::halt( "403" ,"You cannot access this API via a non-encrypted url");
} */


	/**
	 * 
	 * We will parse the url and find out exactly what the call wishes to do.
     *
	 */

$request = Flight::request();
$bang = explode('/', $request->url);
if (strpos($bang[1], '?') !== false) { // Has the client appended the token to the url? If so, we'll detect it here and figure out the route based on explode
    $pop = explode('?', $bang[1]);
    $route = $pop[0];
} else {
    $route = filter_var($bang[1], FILTER_SANITIZE_STRING);
}

//
	/**
	 * 
	 * Let's see if the route chosen is auth-free, or if it requires authentication. If an API feature wants to be a "free" route ( one that does not require an authenticated client id & secret pair ) it must explicitely declare itself as "free" via a json file.
     *
	 */

require 'classes/all_api_features.class.php';
$api_features = new all_api_features();
$features_files = $api_features->get();
$auth_free_routes = $api_features->get_authfree_routes();

	
	/**
	 * 
	 * If it's not an auth-free route/endpoint then we will look to see if it's a token request. If a token is already sent, we'll verify it.
	 *
	 */

if (!in_array($route,$auth_free_routes) && $route != 'core' ) {
	if (isset($_POST['grant_type']) && ($_POST['grant_type'] == 'client_credentials' || $_POST['grant_type'] == 'authorization_code')) {
		if (!isset($_POST['client_id'])) {
			$_POST['client_id'] = '';
		}

		$client_id = filter_var($_POST['client_id'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		logging::log_message('Received a token request from '.$client_id, 'API', 'INFO');
		require_once __DIR__.'/oauth/token.php';
	} else if (isset($_GET['client_id'])) {
		$client_id = filter_var($_GET['client_id'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		logging::log_message('Received a token request from '.$client_id, 'API', 'INFO');
		require_once __DIR__.'/oauth/token.php';
	} else {
		$request = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		logging::log_message(' Received a token which sent '.$request, 'API', 'INFO');
		require_once __DIR__.'/oauth/resource.php';
	}
}

if (!PRODUCTION) {
    ini_set('display_errors', '1');
}

if (!defined('_JOMRES_INITCHECK')) {
    define('_JOMRES_INITCHECK', 1);
}

require 'classes/validate_scope.class.php';
require 'classes/validate_property_access.class.php';
require 'classes/call.class.php';
require 'classes/call_self.class.php';

define('API_STARTED', true);

	
	/**
	 * 
	 * $server will be null if authentication has not been used ( i.e. this is a "free" route, in which case token (which contains the access token, plus scope information ) is not relevant )
     * Individual api features ( should ) always validate that a user can perform a certain action through the "validate_scope::validate('search_get');" call.
     *
	 */


if (isset($server) && !is_null($server)) {
	$token = $server->getAccessTokenData(OAuth2\Request::createFromGlobals());
	$scopes = explode(',', $token['scope']);
} else {
	$token = array (
		"access_token" => null,
		"client_id" => null,
		"user_id" => 0,
		"expires" => 0,
		"scope" => ''
	);
}

	
	/**
	 * 
	 * A special script that creates a "new" PUT super global because PHP doesn't manage PUT requests natively, and the syntax of REST API assumes that PUT requests are for changing existing records.
	 *
	 */

require 'put_method_handling.php';

	
	/**
	 * 
	 * Let's fire up the database. The Jomres framework, even though it is optimised, still carries an overhead therefore the REST API functionality does not demand that the framework be loaded. This means that it can be super quick, however in most instances the framework is used because it's a massive time-saver.
	 *
	 */

try {
    $dsn = 'mysql:dbname='.JOMRES_API_DB_NAME.';host='.JOMRES_API_DB_HOST;
    Flight::register(
        'db',
        'PDO',
        array(
            $dsn,
            JOMRES_API_DB_USERNAME,
            JOMRES_API_DB_PASSWORD,
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                ),
            )
        );

    Flight::set('token', $token);
    Flight::set('user_id', $token['user_id']);
    Flight::set('scopes', explode(',', $token['scope']));
    Flight::set('dbprefix', JOMRES_API_DB_DB_PREFIX);
    Flight::set('features_files', $features_files);

    require 'custom_methods.php';

    require 'routes.php';

    Flight::start();
} catch (Exception $e) {
    if ($e->getMessage() != '' ) {
        $response = $e->getMessage();
        if (!PRODUCTION)
            echo json_encode($response);
        }
    else {
        $response = Flight::request_response();
        }
    
    $backtrace = debug_backtrace();
    logging::log_message(json_encode($response), 'API', 'ERROR');
}
