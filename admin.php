<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


defined( '_JOMRES_INITCHECK' ) or die( '' );
defined( '_JOMRES_INITCHECK_ADMIN' ) or die( 'Admin Access to this file is not allowed.' );

ob_start("removeBOM");
@ini_set("memory_limit","128M");
@ini_set("max_execution_time","480");
@ini_set("display_errors",1);
//error_reporting(E_ALL);
@ini_set('error_reporting', E_ERROR | E_WARNING | E_PARSE);

require_once(dirname(__FILE__).'/integration.php');
$MiniComponents =jomres_getSingleton('mcHandler');
$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
$jrConfig=$siteConfig->get();

$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
$tmpBookingHandler->initBookingSession(get_showtime('jomressession'));
$jomressession  = $tmpBookingHandler->getJomressession();

$showSearchOptions=true;
$jomreslang =jomres_getSingleton('jomres_language');
$jomreslang->get_language();
$customTextObj =jomres_getSingleton('custom_text');

if (!defined('JOMRES_IMAGELOCATION_ABSPATH'))
	{
	define('JOMRES_IMAGELOCATION_ABSPATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS);
	define('JOMRES_IMAGELOCATION_RELPATH',get_showtime('live_site').'/jomres/uploadedimages/');
	}
$task = jomresGetParam( $_REQUEST, 'task', "" );
$task = str_replace("&#60;x&#62;","",$task);
set_showtime('task',$task);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'jomresxml.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'siteconfig.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertyfeatures.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'roomtypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertytypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'profiles.functions.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'admin.jomres.html.php');

$nohtml	= jomresGetParam( $_REQUEST, 'no_html',0 );

jr_import('jomres_obsolete_file_handling');
$obsolete_files = new jomres_obsolete_file_handling();
$obsolete_files->set_default_obs_files_array();
$obsolete_files->add_obs_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres_webinstall.php');
if (jomresGetDomain() != "localhost")
	$obsolete_files->add_obs_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'install_jomres.php');

if ($obsolete_files->ready_to_go() )
	{
	$obsolete_files->remove_obs_files();
	$obsolete_files->output_file_deletion_warning();
	}

if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins') && $nohtml == 0)
	{
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins');
	rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins');
	if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins') )
		echo '<font color="red" face="arial" size="1">Warning: directory '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins still exists. Please delete it.</font><br/>';
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS);
	}
	
if ($jrConfig['useSubscriptions']=="1" && $nohtml == "0")
	{
	$packages=subscriptions_packages_getallpackages();
	if (count($packages)==0)
		{
		echo '<font color="red" face="arial" size="1">Warning: You have enabled subscription handling, but not yet created any subscription packages therefore only Super Property Managers will be able to create propertys on your server.</font><br/>';
		}
	}

if (strstr($_SERVER['SCRIPT_NAME'],'index3.php') || $nohtml == "1")
	define('JRPORTAL_AJAXCALL',true);
else
	define('JRPORTAL_AJAXCALL',false);

$jomreslang =jomres_getSingleton('jomres_language');
$jomreslang->get_language($propertytype);
$customTextObj =jomres_getSingleton('custom_text');

$MiniComponents->triggerEvent('00005'); // Optional

if (!JRPORTAL_AJAXCALL)
	{
	echo $jomreslang->get_languageselection_dropdown()."<br/>";

	init_javascript();
	// And a couple that are only used in the admin area
	?>
	<script language="javascript"type="text/javascript" src="<?php echo get_showtime('live_site'); ?>/jomres/javascript/tablesort.js"></script>
	<script  language="javascript"type="text/javascript" src="<?php echo get_showtime('live_site'); ?>/jomres/javascript/tablepaginator.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_showtime('live_site'); ?>/jomres/javascript/graphs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_showtime('live_site'); ?>/jomres/javascript/jrportal.js"></script>
	<div id='jomresmenu_hint' style=color:red; >&nbsp;</div>
	<?php
	if (strlen(get_showtime('task'))>1)
		{
		jr_import('cpanel');
		$cpanel=new cpanel();
		}
	}
if (isset($_REQUEST['statoption']))
	{
	$statoption 	= jomresGetParam( $_REQUEST, 'statoption', '');
	SetCookie("statoption", $statoption, time()+60*60);	
	}
	
if (isset($_REQUEST['periodoption']))
	{
	$periodoption 	= jomresGetParam( $_REQUEST, 'periodoption', '');
	SetCookie("periodoption", $periodoption, time()+60*60);
	}

if (!JRPORTAL_AJAXCALL)
	{
	if (defined('_JOMRES_NEWJOOMLA'))
		$indexphp="index.php";
	else
		{
		echo '<script language="JavaScript" src="'.get_showtime('live_site').'/includes/js/joomla.javascript.js" type="text/javascript"></script>';
		$indexphp="index2.php";	
		}
	}
else
	$indexphp="index3.php";
	

switch (get_showtime('task')) {
	case "convertCustomTextAll":
		convertCustomTextAll();
		break;
	case "publishPropertyType":
		publishPropertyType();
		break;
	case "deletePropertyType":
		deletePropertyType();
		break;
	case "savePropertyType":
		savePropertyType();
		break;
	case "editPropertyType":
		editPropertyType();
		break;
	case "changeUserHotel":
		changeUserHotel($option);
		break;
	case "changeUserAccessLevel":
		changeUserAccessLevel();
		break;
	case "listMosUsers":
		$MiniComponents->specificEvent('16000','managers_choose');
		break;
	case "editProfile":
		editProfile();
		break;
	case "saveProfile":
		saveProfile();
		break;
	case "grantMosUser":
		grantMosUser($option);
		break;
	case "showSiteConfig":
		showSiteConfig(  );
		break;
	case "saveSiteConfig":
		saveSiteConfig(  );
		break;
	case "publishPfeature":
		publishPfeature();
		break;
	case 'cpanel':
		default:
		if ($MiniComponents->eventSpecificlyExistsCheck('16000',get_showtime('task')) )
			{
			$MiniComponents->specificEvent('16000',get_showtime('task')); // Custom task
			}
		else
			{
			$version=$mrConfig['version'];
			HTML_jomres::controlPanel($version);
			}
		break;
	}

$head_contents = '';
$MiniComponents->triggerEvent('16003');
if (is_array($MiniComponents->miniComponentData['16003']))
	{
	foreach ($MiniComponents->miniComponentData['16003'] as $concatenate)
		{
		$head_contents .= $concatenate;
		}
	}

if (defined("JOMRES_RETURNDATA") )
	{
	$contents = ob_get_contents();
	$contents = $head_contents.$contents;
	define("JOMRES_RETURNDATA_CONTENT", $contents ) ;
	unset($contents);
	ob_end_clean();
	}
else
	ob_end_flush();

// Jomres 4.7.8 strips BOM from all areas of the output, not just the beginning.
function removeBOM($str="")
	{
	$bom = pack("CCC",0xef,0xbb,0xbf);
	$str = str_replace($bom,"",$str);
	// if(substr($str, 0,3) == pack("CCC",0xef,0xbb,0xbf))
		// {
		// $str=substr($str, 3);
		// }
	return $str;
	}