<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

define('_COMPONENT_JOMRES_INTEGRATIONCALLED','1');

global $jomresPath,$license_key,$jomresConfig_absolute_path,$MiniComponents;
global $mrConfig,$jrConfig,$jomres_systemLog_path;


if (!defined('JOMRESPATH_BASE'))
	{
	if (!defined('JRDS'))
		{
		$apacheSig =false;

		$detect_os = strtoupper($_SERVER["SERVER_SOFTWARE"]); // converted to uppercase
		$isWin32 = strpos($detect_os, "WIN32");
		$IIS = strpos($detect_os, "IIS");
		if (isset($_SERVER["SERVER_SIGNATURE"]))
			{
			$signature = strtoupper($_SERVER["SERVER_SIGNATURE"]);
			$apacheSig = strpos($signature, "APACHE");
			}
		$dir =  dirname(realpath(__FILE__));
		if ( strpos($dir,":\\" ) )
			define("JRDS" , "\\");
		else
			{
			if ( $isWin32 === false  || $apacheSig == true)
				define("JRDS" , "/");
			else
				define("JRDS" , "\\");
			}
		}
	if (isset($_SERVER['SCRIPT_FILENAME']))
		$dir_path = str_replace( $_SERVER['SCRIPT_FILENAME'], "", dirname(realpath(__FILE__)) ) ;
	else
		$dir_path = str_replace( $_SERVER['SCRIPT_NAME'], "", dirname(realpath(__FILE__)) ) ;
	define('JOMRESPATH_BASE', $dir_path );
	}

$jomresConfig_absolute_path = substr(JOMRESPATH_BASE, 0, strlen(JOMRESPATH_BASE)-7);
define('JOMRESCONFIG_ABSOLUTE_PATH',$jomresConfig_absolute_path);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'database.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'input_filtering.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'multibye_functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'jr_gettext.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomres_singleton_abstract.class.php');

jr_import('jomresHTML');

$showtime = jomres_singleton_abstract::getInstance('showtime');
$performance_monitor =jomres_singleton_abstract::getInstance('jomres_performance_monitor');
$performance_monitor->set_point("pre-inclusions");
$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."site_config.php");
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."detect_cms.php");
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."init_config_vars.php");

define('JOMRES_SYSTEMLOG_PATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.'temp'.JRDS);

$jomresConfig_dbtype = 'mysql';

if (!function_exists ('adodb_date_test_date') )
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'adodb'.JRDS.'adodb-time.inc.php');

if (!class_exists('patTemplate') )
	require_once('libraries'.JRDS.'phptools'.JRDS.'patTemplate.php');
if (!class_exists('patErrorManager') )
	require_once('libraries'.JRDS.'phptools'.JRDS.'patErrorManager.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'PHPMailer_v5.1'.JRDS.'class.phpmailer.php');

//require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomSearch.class.php');

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php') )
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php');
else
	{
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.'countries.php') )
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.'countries.php');
	else
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'countries.php');
	}

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'imagehandling.php');
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_functions.php");

$performance_monitor->set_point("post-inclusions");

$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig=$siteConfig->get();

if (isset($jrConfig['loggingBooking']))
	{
	define('LOGGINGBOOKING',$jrConfig['loggingBooking']);
	define('LOGGINGGATEWAY',$jrConfig['loggingGateway']);
	define('LOGGINGSYSTEM',$jrConfig['loggingSystem']);
	define('LOGGINGREQUEST',$jrConfig['loggingRequest']);
	define('LOGGINGPORTAL',$jrConfig['loggingPortal']);
	}

if (isset($_REQUEST['jrajax']))
	{
	if ((int)$_REQUEST['jrajax'] == 1)
		define('AJAXCALL',true);
	else
		define('AJAXCALL',false);
	}
else
	define('AJAXCALL',false);
	
	
// loads en language file by default
if ($jomresConfig_lang=='')
	{
	set_showtime('lang','en-GB');
	$jomresConfig_lang = 'en-GB';
	}

$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
$MiniComponents->triggerEvent('00001'); // Start

$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

if (!defined('JOMRES_CSSRELPATH'))
	define('JOMRES_CSSRELPATH','jomres/css/');
	
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_urls.php");

set_error_handler('errorHandler');
jomres_parseRequest();

if (!defined('JOMRES_IMAGELOCATION_ABSPATH'))
	{
	define('JOMRES_IMAGELOCATION_ABSPATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS);
	define('JOMRES_IMAGELOCATION_RELPATH',get_showtime('live_site').'/jomres/uploadedimages/');
	}

// In case somebody removes the above lines, we still need to set this define otherwise folks will not be able to create new properties
if (!defined('JOMRES_SINGLEPROPERTY'))
	define('JOMRES_SINGLEPROPERTY',false);
	
$performance_monitor->set_point("end integration run");
// Stops here






 




