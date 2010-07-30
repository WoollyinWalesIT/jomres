<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

global $jomresConfig_lang,$jomresConfig_absolute_path,$jomresConfig_live_site,$jomresConfig_sitename,$jomresConfig_shownoauth,$jomresConfig_useractivation,
	$jomresConfig_uniquemail,$jomresConfig_offline_message,$jomresConfig_lifetime,$jomresConfig_MetaDesc,$jomresConfig_MetaKeys,$jomresConfig_MetaTitle,
	$jomresConfig_MetaAuthor,$jomresConfig_debug,$jomresConfig_locale,$jomresConfig_offset,$jomresConfig_offset_user,$jomresConfig_hideAuthor,$jomresConfig_hideCreateDate,
	$jomresConfig_hideModifyDate,$jomresConfig_hidePdf,$jomresConfig_hidePrint,$jomresConfig_hideEmail,$jomresConfig_enable_log_items,$jomresConfig_enable_log_searches,
	$jomresConfig_enable_stats,$jomresConfig_sef,$jomresConfig_vote,$jomresConfig_gzip,$jomresConfig_multipage_toc,$jomresConfig_allowUserRegistration,
	$jomresConfig_error_reporting,$jomresConfig_error_message,$jomresConfig_link_titles,$jomresConfig_list_limit,$jomresConfig_caching,$jomresConfig_cachepath,
	$jomresConfig_cachetime,$jomresConfig_mailer,$jomresConfig_mailfrom,$jomresConfig_fromname,$jomresConfig_sendmail,$jomresConfig_smtpauth,$jomresConfig_smtpuser,
	$jomresConfig_smtppass,$jomresConfig_smtphost,$jomresConfig_back_button,$jomresConfig_item_navigation,$jomresConfig_secret,$jomresConfig_pagetitles,$jomresConfig_readmore,
	$jomresConfig_hits,$jomresConfig_icons,$jomresConfig_favicon,$jomresConfig_fileperms,$jomresConfig_dirperms,$jomresConfig_helpurl,$jomresConfig_mbf_content,$jomresConfig_editor,$jomresAdminPath;
global $jomresConfig_user,$jomresConfig_password,$jomresConfig_dbprefix,$jomresConfig_host,$jomresConfig_db;



$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'classes'.JRDS.'jomressa_singleton_abstract.class.php');
require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'functions'.JRDS.'functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'functions.php');
if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'jomres_standalone_config.php') ) // index.php doesn't exist, therefore we're not inside a CMS, so we'll assume that we're installing Jomres SA.
	{
	require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'install.php');
	}

global $jrConfig;

require_once( JOMRESCONFIG_ABSOLUTE_PATH .JRDS.'jomres'.JRDS.'jomres_standalone_config.php' );
$CONFIG = new jomres_standalone_config();
if (isset($_REQUEST['no_html']) )
	$no_html = (int)$_REQUEST['no_html'];
else
	$no_html = 0;

$jomresConfig = jomressa_getSingleton('jomressa_config');

