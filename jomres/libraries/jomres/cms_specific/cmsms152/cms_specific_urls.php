<?php 
/*
This file licensed DILLYGAF. I care so much that I haven't even bothered to write a license.

The Jomres package is proprietary licensed, which means you can't be naughty and give it away, otherwise I'd never be able to make any money to keep developing it.

That said, the files in the /jomres/libraries/jomres/cms_specific/*** directories are licensed under a dillygaf license (just google "dillygaf"), which means I don't care what you do with them, if you want to copy my files and adapt them to make your own and license them solely for your use you can. Even better, you could re-write them to work with X CMS and release them for other people to use.  The only thing you can't do is claim copyright of the original files otherwise you could stop me from using and distributing my own files, and that would be silly. 

I'm hard working, I'm not a genius there are lots of CMSs out there I'm not familiar with and if you can modify this code to make Jomres work on the CMS of your choice then more power to your elbow.

*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

global $jomresConfig_live_site;
$ssllink	= str_replace("https://","http://",$jomresConfig_live_site);

$s = $_REQUEST['_s_'];

define('JOMRES_ADMINISTRATORDIRECTORY',"admin");

define("JOMRES_SITEPAGE_URL",$jomresConfig_live_site.'/'."index.php?page=jomres");
define("JOMRES_SITEPAGE_URL_SSL",$ssllink.'/'."index.php?page=jomres");
define("JOMRES_SITEPAGE_URL_NOHTML",$jomresConfig_live_site.'/'."index.php?page=jomres&amp;showtemplate=false&amp;no_html=1");
define("JOMRES_SITEPAGE_URL_ADMIN",$jomresConfig_live_site.'/'.JOMRES_ADMINISTRATORDIRECTORY."/moduleinterface.php?_s_=".$s."&amp;module=jomres");


?>
