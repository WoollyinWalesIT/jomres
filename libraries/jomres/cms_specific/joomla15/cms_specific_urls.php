<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

global $jomresConfig_live_site,$Itemid,$jrConfig;

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (strstr($scriptname,'install_jomres.php'))
	$jomresConfig_live_site=str_replace("/jomres","",$jomresConfig_live_site);

$ssllink	= str_replace("https://","http://",$jomresConfig_live_site);

define('JOMRES_ADMINISTRATORDIRECTORY',"administrator");

$jomresItemid = (int)jomresGetParam( $_REQUEST, 'Itemid', 0);

if ($jomresItemid == 0)
	{
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
	}

$index = "index.php";
$tmpl="";
if (!isset($_GET['tmpl']) )
	$_GET['tmpl']=false;

if ($jrConfig['isInIframe'] == (bool)"1" || strstr($scriptname,'index2.php') || $_GET['tmpl'] == (bool)'component' )
	{
	$index = "index2.php";
	$tmpl="&tmpl=component";
	define("JOMRES_WRAPPED",1);
	}
else
	define("JOMRES_WRAPPED",0);
	
define("JOMRES_SITEPAGE_URL_NOHTML",$jomresConfig_live_site.'/'."index2.php?option=com_jomres&tmpl=component&no_html=1&popup=1&Itemid=".$jomresItemid."");
define("JOMRES_SITEPAGE_URL_ADMIN",$jomresConfig_live_site.'/'.JOMRES_ADMINISTRATORDIRECTORY."/index.php?option=com_jomres");
define("JOMRES_SITEPAGE_URL_SSL",$ssllink."/index.php?option=com_jomres&Itemid=".$jomresItemid."");
define("JOMRES_SITEPAGE_URL",$jomresConfig_live_site."/".$index."?option=com_jomres&Itemid=".$jomresItemid.$tmpl);

?>
