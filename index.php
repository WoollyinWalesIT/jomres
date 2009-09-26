<?php
ini_set('error_reporting', E_ALL|E_STRICT);
ini_set("display_errors",1);
$dir =  dirname(realpath(__FILE__));
if (!file_exists($dir.'/jomres_standalone_config.php'))
	die ("Not an SA installation");
ob_start();
session_start();

define('_JOMRES_INITCHECK', 1 );

require_once($dir.'/integration.php'); 

if (!defined('TEMPLATES_FRONTEND'))
	{
	define("TEMPLATES_ADMIN",_JOMRES_DETECTED_CMS_SPECIFIC_FILES."templates".JRDS."admin".JRDS);
	define("TEMPLATES_FRONTEND",_JOMRES_DETECTED_CMS_SPECIFIC_FILES."templates".JRDS."frontend".JRDS);
	define("TEMPLATES_CSS_REL_PATH",get_showtime('live_site')."/jomres/libraries/jomres/cms_specific/jomressa/templates/css/");
	}

$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
$jomresConfig = jomressa_getSingleton('jomressa_config');
$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');

$jomreslang =jomres_getSingleton('jomres_language');
if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'language'.JRDS.get_showtime('lang').'.php'))
	require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'language'.JRDS.get_showtime('lang').'.php');
else
	require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'language'.JRDS.'en-GB.php');

//jrsa_import('jomressa_language');
//$lang = new jomressa_language(get_showtime('lang'));

if (isset($_GET['action']) && $_GET['action'] == "log_out") 
	{
	$JSAuser->log_out(); // the method to log off
	}
if (isset($_REQUEST['admin']))
	jomressa_startTask("admin_page_render");
else
	jomressa_startTask("frontend_page_render");

ob_end_flush();
?>