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


if (isset($_POST['grant_type']) && isset($_POST['grant_type']) == 'client_credentials')
	require_once __DIR__.'/oauth/token.php';
else
	require_once __DIR__.'/oauth/resource.php';

 
if (!defined('_JOMRES_INITCHECK'))
	define('_JOMRES_INITCHECK', 1 );

header('Content-type: application/json');

$token = $server->getAccessTokenData(OAuth2\Request::createFromGlobals());
$scopes = explode("," , $token['scope']);

require 'vendor/autoload.php';
require 'classes/validate_scope.class.php';
require 'classes/response.class.php';
require 'classes/call.class.php';
require 'classes/call_self.class.php';


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

	Flight::register( 'validate_scope', 'validate_scope' , array( $scopes));
	Flight::register( 'request_response', 'response' );

	Flight::set("token" , $token);
	Flight::set("user_id" , $token['user_id']);
	Flight::set("scopes" , explode("," , $token['scope']));
	Flight::set("dbprefix" , $CONFIG->dbprefix);

	//$request = Flight::request();
	//Flight::set("original_call" , $request->url);

	/*    $request = Flight::request();
	var_dump($request);exit;  */

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
