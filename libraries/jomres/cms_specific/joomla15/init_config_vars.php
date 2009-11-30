<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
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
	$jomresConfig_hits,$jomresConfig_icons,$jomresConfig_favicon,$jomresConfig_fileperms,$jomresConfig_dirperms,$jomresConfig_helpurl,$jomresConfig_mbf_content,$jomresConfig_editor;
global $jomresConfig_user,$jomresConfig_password,$jomresConfig_dbprefix,$jomresConfig_host,$jomresConfig_db;

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);

global $jrConfig;
require_once( JOMRESCONFIG_ABSOLUTE_PATH .JRDS.'configuration.php' );
$CONFIG = new JConfig();
if (isset($_REQUEST['no_html']) )
	$no_html = (int)$_REQUEST['no_html'];
else
	$no_html = 0;



if (!strstr($scriptname,'install_jomres.php'))
	{
	if (class_exists('JURI'))
		{
		$jomresConfig_live_site=@JURI::base();
		}
	else
		{
		if ($IIS > 0) // Win NT, therefore $_SERVER['REQUEST_URI'] == null
			{
			$path_info =  $_SERVER['PATH_INFO'];
			$_URI = explode("/", $path_info);
			}
		else
			{
			list($path, $args) = explode("?", $_SERVER['REQUEST_URI']);
			$_URI = explode("/", $path);
			}
		array_shift($_URI);
		$_URI=array_slice($_URI,0,count($_URI)-1);
		array_unshift ($_URI,$_SERVER['SERVER_NAME'] );
		
		$jomresConfig_live_site="http://".implode("/",$_URI);
		}
	}
	
$jomresConfig_live_site=str_replace("/administrator/","",$jomresConfig_live_site);
$jomresConfig_live_site=str_replace("/administrator","",$jomresConfig_live_site);
if(substr($jomresConfig_live_site, -1)=="/") $jomresConfig_live_site = substr($jomresConfig_live_site, 0, -1);

$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
if (!strstr($scriptname,'install_jomres.php'))
	{
	$lang			= @ JFactory::getLanguage();
	$jomresConfig_lang = $lang->_lang;
	}
$showtime = jomres_getSingleton('showtime');

$showtime->error_reporting	= $CONFIG->error_reporting;

$showtime->lang				= $jomresConfig_lang;
$showtime->live_site		= $jomresConfig_live_site;
$showtime->offline			= $CONFIG->offline;
$showtime->db				= $CONFIG->db;
$showtime->sitename			= $CONFIG->sitename;
$showtime->lifetime			= $CONFIG->lifetime;
$showtime->MetaDesc			= $CONFIG->MetaDesc;
$showtime->MetaKeys			= $CONFIG->MetaKeys;
$showtime->MetaTitle		= $CONFIG->MetaTitle;
$showtime->MetaAuthor		= $CONFIG->MetaAuthor;
$showtime->debug			= $CONFIG->debug;
$showtime->mailer			= $CONFIG->mailer;
$showtime->mailfrom			= $CONFIG->mailfrom;
$showtime->fromname			= $CONFIG->fromname;
$showtime->sendmail			= $CONFIG->sendmail;
$showtime->smtpauth			= $CONFIG->smtpauth;
$showtime->smtpuser			= $CONFIG->smtpuser;
$showtime->smtppass			= $CONFIG->smtppass;
$showtime->smtphost			= $CONFIG->smtphost;
$showtime->secret			= $CONFIG->secret;
$showtime->dbprefix			= $CONFIG->dbprefix;
$showtime->user				= $CONFIG->user;
$showtime->password			= $CONFIG->password;
$showtime->db				= $CONFIG->db;
$showtime->host				= $CONFIG->host;
$showtime->helpurl			= $CONFIG->helpurl;
$showtime->editor			= $CONFIG->editor;
$showtime->caching			= $CONFIG->caching;
$showtime->cachetime			= $CONFIG->cachetime;
$showtime->offset			= $CONFIG->offset;
$showtime->sef				= $CONFIG->sef;
$showtime->gzip				= $CONFIG->gzip;


$jomresConfig_sitename			= $CONFIG->sitename;
$jomresConfig_lifetime			= $CONFIG->lifetime;
$jomresConfig_MetaDesc			= $CONFIG->MetaDesc;
$jomresConfig_MetaKeys			= $CONFIG->MetaKeys;
$jomresConfig_MetaTitle			= $CONFIG->MetaTitle;
$jomresConfig_MetaAuthor		= $CONFIG->MetaAuthor;
$jomresConfig_debug				= $CONFIG->debug;
$jomresConfig_mailer			= $CONFIG->mailer;
$jomresConfig_mailfrom			= $CONFIG->mailfrom;
$jomresConfig_fromname			= $CONFIG->fromname;
$jomresConfig_sendmail			= $CONFIG->sendmail;
$jomresConfig_smtpauth			= $CONFIG->smtpauth;
$jomresConfig_smtpuser			= $CONFIG->smtpuser;
$jomresConfig_smtppass			= $CONFIG->smtppass;
$jomresConfig_smtphost			= $CONFIG->smtphost;
$jomresConfig_secret			= $CONFIG->secret;
$jomresConfig_dbprefix			= $CONFIG->dbprefix;
$jomresConfig_user				= $CONFIG->user;
$jomresConfig_password			= $CONFIG->password;
$jomresConfig_db				= $CONFIG->db;
$jomresConfig_host				= $CONFIG->host;

//$jomresConfig_pagetitles					= $CONFIG->pagetitles;
//$jomresConfig_readmore					= $CONFIG->readmore;
//$jomresConfig_hits						= $CONFIG->hits;
//$jomresConfig_icons						= $CONFIG->icons;
//$jomresConfig_favicon					= $CONFIG->favicon;
//$jomresConfig_fileperms					= $CONFIG->fileperms;
//$jomresConfig_dirperms					= $CONFIG->dirperms;
$jomresConfig_helpurl				= $CONFIG->helpurl;
//$jomresConfig_multilingual_content			= $CONFIG->multilingual_content;
$jomresConfig_editor				= $CONFIG->editor;
//$jomresConfig_locale					= $CONFIG->locale;
//$jomresConfig_meta_pagetitle				= $CONFIG->meta_pagetitle;
//$jomresConfig_back_button				= $CONFIG->back_button;
//$jomresConfig_item_navigation				= $CONFIG->item_navigation;
$jomresConfig_caching				= $CONFIG->caching;
//$jomresConfig_cachepath					= $CONFIG->cachepath;
$jomresConfig_cachetime				= $CONFIG->cachetime;
//$jomresConfig_locale					= $CONFIG->locale;
$jomresConfig_offset				= $CONFIG->offset;
//$jomresConfig_offset_user				= $CONFIG->offset_user;
//$jomresConfig_hideAuthor					= $CONFIG->hideAuthor;
//$jomresConfig_hideCreateDate				= $CONFIG->hideCreateDate;
//$jomresConfig_hideModifyDate				= $CONFIG->hideModifyDate;
//$jomresConfig_hidePdf					= $CONFIG->hidePdf;
//$jomresConfig_hidePrint					= $CONFIG->hidePrint;
//$jomresConfig_hideEmail					= $CONFIG->hideEmail;
//$jomresConfig_enable_log_items				= $CONFIG->enable_log_items;
//$jomresConfig_enable_log_searches			= $CONFIG->enable_log_searches;
//$jomresConfig_enable_stats				= $CONFIG->enable_stats;
$jomresConfig_sef					= $CONFIG->sef;
//$jomresConfig_vote						= $CONFIG->vote;
$jomresConfig_gzip					= $CONFIG->gzip;
//$jomresConfig_allowUserRegistration			= $CONFIG->allowUserRegistration;
$jomresConfig_error_reporting		= $CONFIG->error_reporting;
//$jomresConfig_error_message				= $CONFIG->error_message;
//$jomresConfig_link_titles					= $CONFIG->link_titles;
//$jomresConfig_shownoauth					= $CONFIG->shownoauth;
//$jomresConfig_useractivation				= $CONFIG->useractivation;
//$jomresConfig_uniquemail					= $CONFIG->uniquemail;
//$jomresConfig_admin_site					= $CONFIG->admin_site;

//var_dump($jomresConfig_caching);exit;

if ( !strstr($scriptname,'install_jomres.php') && $no_html == 0)
	{
	/*
	removed in 4.2
	if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS.'admins_first_login.txt') )
		{
		echo '<font color="red" face="arial" size="2">Note, you haven\'t yet logged into the front end as "admin". Virtually all property configuration is performed from the front end so you should add Jomres to the main menu if you haven\'t already and log in to the front end now.</font><br/>';
		}
	*/
	if($CONFIG->session_handler !="none")
		{
		echo "You need to configure session handling to be set to 'none'. Go to administrator -> Site -> Global Configuration -> System -> Session Handler and set this to 'none'. Until you do this, your booking form will not work.<br>";
		}
	}



