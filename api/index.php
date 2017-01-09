<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// create a log channel
define('TRANSACTION_ID', time());
define('PRODUCTION', false); // Set this to true in a production environment
define('JOMRES_API_CMS_ROOT', dirname(dirname(dirname(__FILE__))));
define('JOMRES_API_JOMRES_ROOT', dirname(dirname(__FILE__)));

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

if (!PRODUCTION) {
    ini_set('display_errors', '1');
}



require 'vendor/autoload.php';
require 'classes/logging.class.php';

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


if (isset($_POST['grant_type']) && ($_POST['grant_type'] == 'client_credentials' || $_POST['grant_type'] == 'authorization_code')) {
    if (!isset($_POST['client_id'])) {
        $_POST['client_id'] = '';
    }

    $client_id = filter_var($_POST['client_id'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    logging::log_message('Received a token request from '.$client_id, 'API', 'INFO');
    require_once __DIR__.'/oauth/token.php';
} else {
    $request = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    logging::log_message(' Received a token which sent '.$request, 'API', 'INFO');
    require_once __DIR__.'/oauth/resource.php';
}

if (!defined('_JOMRES_INITCHECK')) {
    define('_JOMRES_INITCHECK', 1);
}

require 'classes/validate_scope.class.php';
require 'classes/validate_property_access.class.php';
require 'classes/call.class.php';
require 'classes/call_self.class.php';
require 'classes/all_api_features.class.php';

define('API_STARTED', true);

$token = $server->getAccessTokenData(OAuth2\Request::createFromGlobals());
$scopes = explode(',', $token['scope']);

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

    $api_features = new all_api_features();
    $features_files = $api_features->get();

    Flight::set('token', $token);
    Flight::set('user_id', $token['user_id']);
    Flight::set('scopes', explode(',', $token['scope']));
    Flight::set('dbprefix', JOMRES_API_DB_DB_PREFIX);
    Flight::set('features_files', $features_files);

    require 'custom_methods.php';
    require 'routes.php';

    Flight::start();
} catch (Exception $e) {
    $response = Flight::request_response();
    $backtrace = debug_backtrace();
    logging::log_message(json_encode($response), 'API', 'ERROR');
}
