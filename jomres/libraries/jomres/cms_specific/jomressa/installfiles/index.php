<?php
ob_start();
session_start();
ini_set('error_reporting', E_ALL|E_STRICT);
define('_JOMRES_INITCHECK', 1 );

require_once("jomres/integration.php"); 

$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
$jomresConfig = jomressa_getSingleton('jomressa_config');
$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');

jrsa_import('jomressa_language');
$lang = new jomressa_language(get_showtime('lang'));

if (isset($_GET['action']) && $_GET['action'] == "log_out") 
	{
	$JSAuser->log_out(); // the method to log off
	}

jomressa_startTask("frontend_page_render");
ob_end_flush();
?>