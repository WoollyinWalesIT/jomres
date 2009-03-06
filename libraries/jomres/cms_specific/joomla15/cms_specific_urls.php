<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

global $jomresConfig_live_site;

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (strstr($scriptname,'install_jomres.php'))
	$jomresConfig_live_site=str_replace("/jomres","",$jomresConfig_live_site);
$ssllink	= str_replace("https://","http://",$jomresConfig_live_site);

define('JOMRES_ADMINISTRATORDIRECTORY',"administrator");

$Itemid = (int)jomresGetParam( $_REQUEST, 'Itemid', (int)$_REQUEST['Itemid']);

/*
$query = "SELECT id"
	. "\n FROM #__menu"
	. "\n WHERE type = 'component'"
	. "\n AND published = 1"
	. "\n AND link = JOMRES_SITEPAGE_URL.'' LIMIT 1";
	$itemQueryRes = doSelectSql($query);
	if (count($itemQueryRes)>0)
		{
		foreach ($itemQueryRes as $i)
			{
			$Itemid = (int)$i->id;
			}
		}
	else $Itemid =(int) $jrConfig['jomresItemid'];
*/

define("JOMRES_SITEPAGE_URL",$jomresConfig_live_site.'/'."index.php?option=com_jomres&Itemid=".$Itemid."");
define("JOMRES_SITEPAGE_URL_SSL",$ssllink.'/'."index.php?option=com_jomres&Itemid=".$Itemid."");
define("JOMRES_SITEPAGE_URL_NOHTML",$jomresConfig_live_site.'/'."index.php?option=com_jomres&tmpl=component&no_html=1&Itemid=".$Itemid."");
define("JOMRES_SITEPAGE_URL_ADMIN",$jomresConfig_live_site.'/'.JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres");


?>
