<?php
/**
#
 * Controlling functions/switch for backend functionality
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
defined( '_JOMRES_INITCHECK_ADMIN' ) or die( 'Admin Access to '.__FILE__.' is not allowed.' );

@ini_set("memory_limit","64M");

global $xmlelements;
global $MiniComponents,$indexphp,$logFiles,$jrConfig;

require_once('integration.php');

$task = jomresGetParam( $_REQUEST, 'task', "" );

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'jomresxml.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'siteconfig.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertyfeatures.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'roomtypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertytypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'profiles.functions.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'admin.jomres.html.php');

$nohtml	= jomresGetParam( $_REQUEST, 'no_html',0 );

if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS.'admins_first_login.txt'))
	{
	echo '<font color="red" face="arial" size="2">Note, you haven\'t yet logged into the front end as "admin". Virtually all property configuration is performed from the front end so you should add Jomres to the main menu if you haven\'t already and log in to the front end now.</font><br/>';
	}

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

if (file_exists(JOMRESPATH_BASE.JRDS.'language'.JRDS.$jrConfig['siteLang']))
	{
	require_once(JOMRESPATH_BASE.JRDS.'language'.JRDS.$jrConfig['siteLang']);
	$jomresLangFile=JOMRESPATH_BASE.JRDS.'language'.JRDS.$jrConfig['siteLang'];
	}
else
	{
	if (file_exists(JOMRESPATH_BASE.JRDS.'language'.JRDS.'en-GB.php'))
		{
		require_once(JOMRESPATH_BASE.JRDS.'language'.JRDS.'en-GB.php');
		$jomresLangFile=JOMRESPATH_BASE.JRDS.'language'.JRDS.'en-GB.php';
		} //else no language file available... don't include it either...
	}


if (!JRPORTAL_AJAXCALL)
	{
	?>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jquery.js"></script>
	<script language="javascript">jQuery.noConflict();</script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jquery.cookee.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jomres.js"></script>
	<script language="javascript"type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/tablesort.js"></script>
	<script  language="javascript"type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/tablepaginator.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/graphs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jrportal.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $jomresConfig_live_site; ?>/jomres/javascript/jquery.jeditable.pack.js"></script>
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
	//case "listMosUsers":
	//	listMosUsers($option);
	//	break;
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