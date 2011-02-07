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

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);

global $jrConfig;
require_once( JOMRESCONFIG_ABSOLUTE_PATH .JRDS.'wp-config.php' );

if (isset($_REQUEST['no_html']) )
	$no_html = (int)$_REQUEST['no_html'];
else
	$no_html = 0;


if (!strstr($scriptname,'install_jomres.php'))
	{
	$jomresConfig_live_site=get_option( 'siteurl' );
	}

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (!strstr($scriptname,'install_jomres.php'))
	{
	$lang			= get_locale();
	$jomresConfig_lang = $lang;
	}
$showtime = jomres_getSingleton('showtime');

$showtime->error_reporting	= $CONFIG->error_reporting;

$showtime->lang				= $jomresConfig_lang;
$showtime->live_site		= $jomresConfig_live_site;
$showtime->offline			= false;
$showtime->db				= DB_NAME;
$showtime->user				= DB_USER;
$showtime->password			= DB_PASSWORD;
$showtime->db				= DB_NAME;
$showtime->host				= DB_HOST;
$showtime->secret			= AUTH_SALT;
global $table_prefix;
$showtime->dbprefix			= $table_prefix ;
$query = "SELECT * FROM #__options";
$result = doSelectSql($query);
foreach ($result as $CONFIG)
	{
	$showtime->sitename			= $CONFIG->blogname;
	//$showtime->lifetime			= $CONFIG->lifetime;
	//$showtime->MetaDesc			= $CONFIG->MetaDesc;
	//$showtime->MetaKeys			= $CONFIG->MetaKeys;
	//$showtime->MetaTitle			= $CONFIG->MetaTitle;
	//$showtime->MetaAuthor			= $CONFIG->MetaAuthor;
	//$showtime->debug				= $CONFIG->debug;
	//$showtime->mailer				= $CONFIG->mailer;
	//$showtime->mailfrom			= $CONFIG->mailfrom;
	//$showtime->fromname			= $CONFIG->fromname;
	$showtime->sendmail			= $CONFIG->sendmail;
	$showtime->smtpauth			= $CONFIG->smtpauth;
	$showtime->smtpuser			= $CONFIG->mailserver_login;
	$showtime->smtppass			= $CONFIG->mailserver_pass;
	$showtime->smtphost			= $CONFIG->mailserver_url;

	// $showtime->helpurl			= $CONFIG->helpurl;
	// $showtime->editor			= $CONFIG->editor;
	// $showtime->caching			= $CONFIG->caching;
	// $showtime->cachetime			= $CONFIG->cachetime;
	// $showtime->offset			= $CONFIG->offset;
	// $showtime->sef				= $CONFIG->sef;
	$showtime->gzip				= $CONFIG->gzipcompression;
	}