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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

global $jomresItemid;
$jomresConfig_live_site = get_showtime('live_site');

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (strstr($scriptname,'install_jomres.php'))
	$jomresConfig_live_site=str_replace("/jomres","",$jomresConfig_live_site);

$ssllink	= str_replace("https://","http://",$jomresConfig_live_site);

if (isset($_GET['format']) )
	{
	if ($_GET['format'] == "raw")
		define("JOMRES_WRAPPED",1);
	}

define("JOMRES_SITEPAGE_URL_NOHTML",$jomresConfig_live_site.'/jomres/index.php?no_html=1&a=k');
define("JOMRES_SITEPAGE_URL_ADMIN",$jomresConfig_live_site.'/jomres/index.php?admin');
define("JOMRES_SITEPAGE_URL_SSL",$ssllink.'/jomres/index.php?a=k');
define("JOMRES_SITEPAGE_URL",$jomresConfig_live_site."/jomres/index.php?a=k");
define("JOMRES_SITEPAGE_URL_RAW",get_showtime('live_site')."/jomres/index.php?a=k&format=raw");
?>
