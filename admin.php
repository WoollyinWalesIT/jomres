<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
defined( '_JOMRES_INITCHECK_ADMIN' ) or die( 'Admin Access to '.__FILE__.' is not allowed.' );

@ini_set("memory_limit","64M");
@ini_set("max_execution_time","480");
@ini_set("display_errors",1);
//error_reporting(E_ALL);
@ini_set('error_reporting', E_ERROR | E_WARNING | E_PARSE);


global $xmlelements;
global $MiniComponents,$indexphp,$logFiles,$jrConfig;

require_once('integration.php');
if (!defined('JOMRES_IMAGELOCATION_ABSPATH'))
	{
	define('JOMRES_IMAGELOCATION_ABSPATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS);
	define('JOMRES_IMAGELOCATION_RELPATH',$jomresConfig_live_site.'/jomres/uploadedimages/');
	}
$task = jomresGetParam( $_REQUEST, 'task', "" );


require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'jomresxml.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'siteconfig.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertyfeatures.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'roomtypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertytypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'profiles.functions.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'admin.jomres.html.php');

$nohtml	= jomresGetParam( $_REQUEST, 'no_html',0 );



if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres_webinstall.php') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres_webinstall.php') )
		echo '<font color="red" face="arial" size="1">Warning: file jomres_webinstall.php still exists in the root of your CMS\'s directory. Please delete it.</font><br/>';
	}
	
if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'install_jomres.php') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'install_jomres.php') )
		echo '<font color="red" face="arial" size="1">Warning: file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'install_jomres.php still exists in the root of your CMS\'s directory. Please delete it.</font><br/>';
	}

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00011manager.class.php') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00011manager.class.php') )
		echo '<font color="red" face="arial" size="1">Warning: file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'core-minicomponents'.JRDS.'j00011manager.class.php still exists. Please delete it.</font><br/>';
	}
	
if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00010reception.class.php') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00010reception.class.php') )
		echo '<font color="red" face="arial" size="1">Warning: file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'core-minicomponents'.JRDS.'j00010reception.class.php still exists. Please delete it.</font><br/>';
	$registry = new minicomponent_registry(false);
	$registry->regenerate_registry();
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS);
	jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN);
	}

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00050mumenu.class.php') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00050mumenu.class.php') )
		echo '<font color="red" face="arial" size="1">Warning: file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'core-minicomponents'.JRDS.'j00050mumenu.class.php still exists. Please delete it.</font><br/>';
	}

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'templates'.JRDS.'jomres'.JRDS.'frontend'.JRDS.'menus.html') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'templates'.JRDS.'jomres'.JRDS.'frontend'.JRDS.'menus.html') )
		echo '<font color="red" face="arial" size="1">Warning: file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'templates'.JRDS.'jomres'.JRDS.'frontend'.JRDS.'menus.html still exists. Please delete it.</font><br/>';
	}
	
if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00012invoices_link.class.php') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS.'j00012invoices_link.class.php') )
		echo '<font color="red" face="arial" size="1">Warning: file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'core-minicomponents'.JRDS.'j00012invoices_link.class.php still exists. Please delete it.</font><br/>';
	}

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'templates'.JRDS.'jomres'.JRDS.'frontend'.JRDS.'invoices_link.html') && $nohtml == 0)
	{
	if (!@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'templates'.JRDS.'jomres'.JRDS.'frontend'.JRDS.'invoices_link.html') )
		echo '<font color="red" face="arial" size="1">Warning: file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'templates'.JRDS.'jomres'.JRDS.'frontend'.JRDS.'invoices_link.html still exists. Please delete it.</font><br/>';
	}
	
if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins') && $nohtml == 0)
	{
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins');
	rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins');
	if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins') )
		echo '<font color="red" face="arial" size="1">Warning: directory '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins still exists. Please delete it.</font><br/>';
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS);
	}
	
if (strstr($_SERVER['SCRIPT_NAME'],'index3.php') || $nohtml == "1")
	define('JRPORTAL_AJAXCALL',true);
else
	define('JRPORTAL_AJAXCALL',false);

global $customTextArray;
$customTextArray=array();
$query="SELECT constant,customtext FROM #__jomres_custom_text WHERE property_uid = 0 AND language = '$jomresConfig_lang'";
$customTextList=doSelectSql($query);
if (count($customTextList))
	{
	foreach ($customTextList as $text)
		{
		$customTextArray[$text->constant]=stripslashes($text->customtext);
		}
	}

$jomreslang= new jomres_language();
$jomreslang->get_language($propertytype);

if (!JRPORTAL_AJAXCALL)
	{
	echo $jomreslang->get_languageselection_dropdown()."<br/>";
	?>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jquery-1.3.2.min.js"></script>
	<script language="javascript" type="text/javascript">jQuery.noConflict();</script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jquery.cookee.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jomres.js"></script>
	<script language="javascript"type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/tablesort.js"></script>
	<script  language="javascript"type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/tablepaginator.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/graphs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jrportal.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jquery.jeditable.pack.js"></script>
	
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jquery.bt-0-9-3.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo $jomresConfig_live_site; ?>/jomres/css/jomrescss.css" title="" />
	<div id='jomresmenu_hint' style=color:red; >&nbsp;</div>
	<?php
	if (strlen($task)>1)
		$cpanel=new cpanel();
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
		echo '<script language="JavaScript" src="'.$jomresConfig_live_site.'/includes/js/joomla.javascript.js" type="text/javascript"></script>';
		$indexphp="index2.php";	
		}
	}
else
	$indexphp="index3.php";
	

switch ($task) {
	//case "clearLog":
	//	clearLog();
	//	break;
	//case "listLogs":
	//	listLogs();
	//	break;
	//case "showLog":
	//	showLog();
	//	break;
	//case "deleteGlobalroomTypes":
	//	deleteGlobalroomTypes();
	//	break;
	//case "saveGlobalRoomClass":
	//	saveGlobalRoomClass();
	//	break;
	//case "editGlobalroomTypes":
	//	editGlobalroomTypes();
	//	break;
	//case "listGlobalroomTypes":
	//	listGlobalroomTypes();
	//	break;
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
	//case "listPropertyTypes":
	//	listPropertyTypes();
	//	break;
	case "changeUserHotel":
		changeUserHotel($option);
		break;
	case "changeUserAccessLevel":
		changeUserAccessLevel();
		break;
	case "listMosUsers":
		listMosUsers($option);
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
	//case "listPfeatures":
	//	listPfeatures();
	//	break;
	case "publishPfeature":
		publishPfeature();
		break;
	//case "editPfeature":
	//	editPfeature();
	//	break;
	//case "newPfeature":
	//	editPfeature();
	//	break;
	//case "savePfeature":
	//	savePfeature();
	//	break;
	//case "deletePfeature":
	//	deletePfeature();
	//	break;
	case "portalcpanel":
		$cpanel=new cpanel();
		break;
	case 'cpanel':
		default:
		if ($MiniComponents->eventSpecificlyExistsCheck('16000',$task) )
			{
			$MiniComponents->specificEvent('16000',$task); // Custom task
			}
		else
			{
			if ( $task!="getLicenseKey" )
				{
				$version=$mrConfig['version'];
				HTML_jomres::controlPanel($version);
				}
			else
				echo '<font="red">Error, license key file not found. Please enter your key to continue</font>';
			}
		break;
	}
if (!JOMRES_LICVALID && JOMRES_ISADMINCALLED)
	{
	testConnectivity();
	}

?>