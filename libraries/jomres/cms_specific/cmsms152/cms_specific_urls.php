<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

global $jomresConfig_live_site;
$ssllink	= str_replace("https://","http://",$jomresConfig_live_site);

$s = $_REQUEST['_s_'];

define('JOMRES_ADMINISTRATORDIRECTORY',"admin");

define("JOMRES_SITEPAGE_URL",$jomresConfig_live_site.'/'."index.php?page=jomres");
define("JOMRES_SITEPAGE_URL_SSL",$ssllink.'/'."index.php?page=jomres");
define("JOMRES_SITEPAGE_URL_NOHTML",$jomresConfig_live_site.'/'."index.php?page=jomres");
define("JOMRES_SITEPAGE_URL_ADMIN",$jomresConfig_live_site.'/'.JOMRES_ADMINISTRATORDIRECTORY."/moduleinterface.php?_s_=".$s."&module=jomres");


?>
