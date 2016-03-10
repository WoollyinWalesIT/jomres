<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

global $jomresConfig_lang, $jomresConfig_absolute_path, $jomresConfig_live_site, $jomresConfig_sitename, $jomresConfig_shownoauth, $jomresConfig_useractivation, $jomresConfig_uniquemail, $jomresConfig_offline_message, $jomresConfig_lifetime, $jomresConfig_MetaDesc, $jomresConfig_MetaKeys, $jomresConfig_MetaTitle, $jomresConfig_MetaAuthor, $jomresConfig_debug, $jomresConfig_locale, $jomresConfig_offset, $jomresConfig_offset_user, $jomresConfig_hideAuthor, $jomresConfig_hideCreateDate, $jomresConfig_hideModifyDate, $jomresConfig_hidePdf, $jomresConfig_hidePrint, $jomresConfig_hideEmail, $jomresConfig_enable_log_items, $jomresConfig_enable_log_searches, $jomresConfig_enable_stats, $jomresConfig_sef, $jomresConfig_vote, $jomresConfig_gzip, $jomresConfig_multipage_toc, $jomresConfig_allowUserRegistration, $jomresConfig_error_reporting, $jomresConfig_error_message, $jomresConfig_link_titles, $jomresConfig_list_limit, $jomresConfig_caching, $jomresConfig_cachepath, $jomresConfig_cachetime, $jomresConfig_mailer, $jomresConfig_mailfrom, $jomresConfig_fromname, $jomresConfig_sendmail, $jomresConfig_smtpauth, $jomresConfig_smtpuser, $jomresConfig_smtppass, $jomresConfig_smtphost, $jomresConfig_smtpport, $jomresConfig_back_button, $jomresConfig_item_navigation, $jomresConfig_secret, $jomresConfig_pagetitles, $jomresConfig_readmore, $jomresConfig_hits, $jomresConfig_icons, $jomresConfig_favicon, $jomresConfig_fileperms, $jomresConfig_dirperms, $jomresConfig_helpurl, $jomresConfig_mbf_content, $jomresConfig_editor;
global $jomresConfig_user, $jomresConfig_password, $jomresConfig_dbprefix, $jomresConfig_host, $jomresConfig_db;
global $jrConfig;

$scriptname = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );

require_once( JOMRESCONFIG_ABSOLUTE_PATH .JRDS.'wp-config.php' );

if ( isset( $_REQUEST[ 'no_html' ] ) ) 
	$no_html = (int) $_REQUEST[ 'no_html' ];
else
	$no_html = 0;

$jomresConfig_live_site=get_option( 'siteurl' );

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (!strstr($scriptname,'install_jomres.php'))
	{
	$lang			= get_locale();
	$jomresConfig_lang = str_replace("_","-",$lang);
	}

$showtime = jomres_getSingleton('showtime');

$showtime->error_reporting	= 0;

$showtime->lang				= $jomresConfig_lang;
$showtime->live_site		= $jomresConfig_live_site;
$showtime->offline			= false;
$showtime->db				= DB_NAME;
$showtime->user				= DB_USER;
$showtime->password			= DB_PASSWORD;
$showtime->host				= DB_HOST;
$showtime->secret			= AUTH_SALT;

global $table_prefix;
$showtime->dbprefix			= $table_prefix ;

$showtime->sitename			= get_option( 'blogname' );
$showtime->mailer     		= 'mail';
$showtime->smtpuser			= get_option( 'mailserver_login' );
$showtime->smtppass			= get_option( 'mailserver_pass' );
$showtime->smtphost			= get_option( 'mailserver_url' );
$showtime->smtpport			= get_option( 'mailserver_port' );
$showtime->gzip				= get_option( 'gzipcompression' );

//globals..to be removed completely in future versions
$jomresConfig_sitename = get_option( 'blogname' );
$jomresConfig_debug           = false;
$jomresConfig_mailer          = 'mail';
$jomresConfig_mailfrom        = $CONFIG->mailfrom;
$jomresConfig_fromname        = get_option( 'blogname' );
$jomresConfig_smtpuser        = get_option( 'mailserver_login' );
$jomresConfig_smtppass        = get_option( 'mailserver_pass' );
$jomresConfig_smtphost        = get_option( 'mailserver_url' );
$jomresConfig_smtpport        = get_option( 'mailserver_port' );
$jomresConfig_secret          = AUTH_SALT;
$jomresConfig_dbprefix        = $table_prefix;
$jomresConfig_user            = DB_USER;
$jomresConfig_password        = DB_PASSWORD;
$jomresConfig_db              = DB_NAME;
$jomresConfig_host            = DB_HOST;
$jomresConfig_gzip            = get_option( 'gzipcompression' );
$jomresConfig_error_reporting = 0;
	

