<?php
ob_start();
session_start();
ini_set('error_reporting', E_ALL|E_STRICT);
define('_JOMRES_INITCHECK', 1 );

require_once("jomres/integration.php"); 

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
require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'language'.JRDS.get_showtime('lang').'.php');

jrsa_import('jomressa_language');
$lang = new jomressa_language(get_showtime('lang'));

if (isset($_GET['action']) && $_GET['action'] == "log_out") 
	{
	$JSAuser->log_out(); // the method to log off
	}

jomressa_startTask("admin_page_render");
ob_end_flush();
?>