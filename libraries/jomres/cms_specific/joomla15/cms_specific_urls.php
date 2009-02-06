<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

global $jomresConfig_live_site;
$ssllink	= str_replace("https://","http://",$jomresConfig_live_site);

define('JOMRES_ADMINISTRATORDIRECTORY',"administrator");

define("JOMRES_SITEPAGE_URL",$jomresConfig_live_site."index.php?option=com_jomres&");
define("JOMRES_SITEPAGE_URL_SSL",$ssllink."index.php?option=com_jomres&");
define("JOMRES_SITEPAGE_URL_NOTHML",$jomresConfig_live_site."index.php?option=com_jomres&tmpl=component&");
define("JOMRES_SITEPAGE_URL_ADMIN",$jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."index2.php?option=com_jomres&");
