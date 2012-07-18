<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig=$siteConfig->get();
$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (strstr($scriptname,'install_jomres.php'))
	set_showtime('live_site',str_replace("/jomres","",get_showtime('live_site')));

$ssllink	= str_replace("https://","http://",get_showtime('live_site'));
define('JOMRES_ADMINISTRATORDIRECTORY',"administrator");

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (!strstr($scriptname,'install_jomres.php'))
	{
	$query = "SELECT id"
		. "\n FROM #__menu"
		. "\n WHERE "
		. "\n published = 1"
		. "\n AND link LIKE 'index.php?option=com_jomres&view=default%' AND language LIKE '".get_showtime('lang')."' LIMIT 1 ";

	$itemQueryRes = doSelectSql($query,1);
	if ($itemQueryRes)
		{
		$jomresItemid = $itemQueryRes;
		}
	else
		{
		$query = "SELECT id"
		. "\n FROM #__menu"
		. "\n WHERE "
		. "\n published = 1"
		. "\n AND link LIKE 'index.php?option=com_jomres&view=default%' LIMIT 1 ";

		$itemQueryRes = doSelectSql($query,1);
		if ($itemQueryRes)
			{
			$jomresItemid = $itemQueryRes;
			}
		else
			{
			if (isset($jrConfig['jomresItemid']))
				$jomresItemid = $jrConfig['jomresItemid'];
			else
				$jomresItemid = 0;
			}
		}
	}
else
	{
	$jomresItemid = 0; //should only kick in on install
	}

$jrConfig=$siteConfig->set_setting("jomresItemid",$jomresItemid);

$index = "index.php";
$tmpl="";
if (!isset($_GET['tmpl']) )
	$_GET['tmpl']=false;

if (isset($_GET['format']) )
	{
	if ($_GET['format'] == "raw")
		define("JOMRES_WRAPPED",1);
	else
		define("JOMRES_WRAPPED",0);
	}
else
	{
	if ( ($jrConfig['isInIframe'] == (bool)"1" || $_GET['tmpl'] == 'component' ) && !isset($_REQUEST['nofollowtmpl']) )
		{
		$index = "index.php";
		$tmpl="&tmpl=component";
		define("JOMRES_WRAPPED",1);
		}
	else
		define("JOMRES_WRAPPED",0);
	}

if ( isset($_REQUEST['is_wrapped']) )
	{
	if ( $_REQUEST['is_wrapped']=="1" )
		$tmpl .= $tmpl."&is_wrapped=1";
	}

if ( isset($_REQUEST['menuoff']) )
	{
	if ( $_REQUEST['menuoff']=="1" )
		{
		$tmpl .= $tmpl."&menuoff=1";
		set_showtime('menuoff',true);
		}
	else
		{
		$tmpl .= $tmpl."&menuoff=0";
		set_showtime('menuoff',false);
		}
	}

if ( isset($_REQUEST['topoff']) )
	{
	if ( $_REQUEST['topoff']=="1" )
		{
		$tmpl .= $tmpl."&topoff=1";
		set_showtime('topoff',true);
		}
	else
		{
		$tmpl .= $tmpl."&topoff=0";
		set_showtime('topoff',false);
		}
	}

$lang=substr(get_showtime('lang'),0,2);
	
define("JOMRES_SITEPAGE_URL_NOSEF",get_showtime('live_site')."/index.php?option=com_jomres&lang=".$lang);
define("JOMRES_SITEPAGE_URL_AJAX",get_showtime('live_site').'/'."index.php?option=com_jomres&tmpl=component&jrajax=1&no_html=1&Itemid=".$jomresItemid."&lang=".$lang);
define("JOMRES_SITEPAGE_URL_ADMIN",get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY."/index.php?option=com_jomres".$tmpl);
define("JOMRES_SITEPAGE_URL_ADMIN_AJAX",get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY."/index.php?option=com_jomres&tmpl=component&jrajax=1&format=raw");

if (class_exists('JFactory'))
	{
	$app = JFactory::getApplication();  // Many thanks maakit
	if($app->getCfg('sef'))
		define("JOMRES_SITEPAGE_URL", $index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl."&lang=".$lang);
	else
		define("JOMRES_SITEPAGE_URL",get_showtime('live_site')."/".$index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl."&lang=".$lang);
	}
else
	define("JOMRES_SITEPAGE_URL",get_showtime('live_site')."/".$index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl."&lang=".$lang);

