<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
$jrConfig=$siteConfig->get();

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (strstr($scriptname,'install_jomres.php'))
	set_showtime('live_site',str_replace("/jomres","",get_showtime('live_site')));

$ssllink	= str_replace("https://","http://",get_showtime('live_site'));

define('JOMRES_ADMINISTRATORDIRECTORY',"administrator");

//$jomresItemid = (int)jomresGetParam( $_REQUEST, 'Itemid', 0);

//if ($jomresItemid == 0)
//	{
	$query = "SELECT id"
		. "\n FROM #__menu"
		. "\n WHERE "
		. "\n published = 1"
		. "\n AND link LIKE 'index.php?option=com_jomres' LIMIT 1";
	$itemQueryRes = doSelectSql($query);
	if (count($itemQueryRes)>0)
		{
		foreach ($itemQueryRes as $i)
			{
			$jomresItemid = $i->id;
			}
		}
	else
		{if (isset($jrConfig['jomresItemid']))
			$jomresItemid = $jrConfig['jomresItemid'];
		else
			$jomresItemid = 0; //should only kick in on install
		}
//	}

	$jrConfig=$siteConfig->set_setting("jomresItemid",$jomresItemid);

$index = "index.php";
$tmpl="";
if (!isset($_GET['tmpl']) )
	$_GET['tmpl']=false;

if ( ($jrConfig['isInIframe'] == (bool)"1" || strstr($scriptname,'index2.php') || $_GET['tmpl'] == 'component' ) && !isset($_REQUEST['nofollowtmpl']) )
	{
	$index = "index.php";
	$tmpl="&tmpl=component";
	define("JOMRES_WRAPPED",1);
	}
else
	define("JOMRES_WRAPPED",0);
	
if (isset($_GET['format']) )
	{
	if ($_GET['format'] == "raw")
		define("JOMRES_WRAPPED",1);
	}

define("JOMRES_SITEPAGE_URL_NOHTML",get_showtime('live_site').'/'."index.php?option=com_jomres&tmpl=component&no_html=1&popup=1&Itemid=".$jomresItemid."");
define("JOMRES_SITEPAGE_URL_ADMIN",get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY."/index.php?option=com_jomres");
define("JOMRES_SITEPAGE_URL_SSL",$ssllink."/index.php?option=com_jomres&Itemid=".$jomresItemid."");

define("JOMRES_SITEPAGE_URL_AJAX",get_showtime('live_site').'/'."index.php?option=com_jomres&tmpl=component&jrajax=1&no_html=1&popup=1&Itemid=".$jomresItemid."");
define("JOMRES_SITEPAGE_URL_AJAX_ADMIN",get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY."/index.php?option=com_jomres&tmpl=component&jrajax=1&no_html=1&popup=1");


define("JOMRES_SITEPAGE_URL_RAW",get_showtime('live_site')."/index.php?option=com_jomres&format=raw");
define("JOMRES_SITEPAGE_URL_NOSEF",get_showtime('live_site')."/index.php?option=com_jomres");

if (class_exists('JFactory'))
	{
	$app =& JFactory::getApplication();  // Many thanks maakit
	if($app->getCfg('sef'))
		{
		//if (get_showtime('sef') == "1") // If SEF is enabled we need to set the sitepage url to the full url, otherwise Jomres can't detect when we need to rewrite urls overwritng http:// with https//
		//	define("JOMRES_SITEPAGE_URL", get_showtime('live_site')."/".$index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl);
		//else
			define("JOMRES_SITEPAGE_URL", $index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl);
		}
	else
		define("JOMRES_SITEPAGE_URL",get_showtime('live_site')."/".$index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl);
	}
else
	define("JOMRES_SITEPAGE_URL",get_showtime('live_site')."/".$index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl);


?>
