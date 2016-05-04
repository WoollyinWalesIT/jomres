<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
 
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
define("TRANSACTION_ID" , time() );
define("PRODUCTION" , false ); // Set this to true in a production environment

$logger = new Logger('api');
$logger->pushHandler(new StreamHandler('../temp/monolog/jomres_api.log', Logger::DEBUG));

if (isset($_POST['grant_type']) && isset($_POST['grant_type']) == 'client_credentials')
	{
	$client_id = filter_var($_POST['client_id'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );
	$logger->addInfo('Received a token request from '.$client_id);
	require_once __DIR__.'/oauth/token.php';
	}
else
	{
	$request = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$logger->addInfo(TRANSACTION_ID.' Received a token which sent '.$request);
	require_once __DIR__.'/oauth/resource.php';
	}
 
if (!defined('_JOMRES_INITCHECK'))
	define('_JOMRES_INITCHECK', 1 );

$token = $server->getAccessTokenData(OAuth2\Request::createFromGlobals());
$scopes = explode("," , $token['scope']);

require 'classes/validate_scope.class.php';
require 'classes/response.class.php';
require 'classes/call.class.php';
require 'classes/call_self.class.php';
require 'classes/all_api_features.class.php';

try
	{
	$CONFIG = new JConfig();
	$dsn		= 'mysql:dbname='.$CONFIG->db.';host='.$CONFIG->host ;
	Flight::register(
		'db', 
		'PDO', 
		array(
			$dsn, 
			$CONFIG->user, 
			$CONFIG->password , 
			array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false
				)
			)
		);

	$api_features	= new all_api_features();
	$features_files	= $api_features->get();

	Flight::register( 'validate_scope', 'validate_scope' , array( $scopes));
	Flight::register( 'request_response', 'response' );

	Flight::set("token" , $token);
	Flight::set("user_id" , $token['user_id']);
	Flight::set("scopes" , explode("," , $token['scope']));
	Flight::set("dbprefix" , $CONFIG->dbprefix);
	Flight::set("features_files" , $features_files);

	require "routes.php";
	
	Flight::start();
	}
catch(Exception $e) 
	{
	$response = Flight::request_response();
	$backtrace = debug_backtrace();
	$response->set('success', false );
	$response->set('data', $e->getMessage() );
	echo json_encode($response);
	}
