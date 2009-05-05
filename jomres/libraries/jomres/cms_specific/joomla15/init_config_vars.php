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

global $jrConfig;
require_once( JOMRESCONFIG_ABSOLUTE_PATH .JRDS.'configuration.php' );
$CONFIG = new JConfig();
if (isset($_REQUEST['no_html']) )
	$no_html = (int)$_REQUEST['no_html'];
else
	$no_html = 0;

$jomresConfig_offline			= $CONFIG->offline;
$jomresConfig_db				= $CONFIG->db;

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

$jomresConfig_live_site=str_replace("/administrator/","",$jomresConfig_live_site);
$jomresConfig_live_site=str_replace("/administrator","",$jomresConfig_live_site);
if(substr($jomresConfig_live_site, -1)=="/") $jomresConfig_live_site = substr($jomresConfig_live_site, 0, -1);

$lang			= @ JFactory::getLanguage();
$jomresConfig_lang = $lang->_lang;


$jomresConfig_sitename			= $CONFIG->sitename;
$jomresConfig_lifetime			= $CONFIG->lifetime;
$jomresConfig_MetaDesc			= $CONFIG->MetaDesc;
$jomresConfig_MetaKeys			= $CONFIG->MetaKeys;
$jomresConfig_MetaTitle			= $CONFIG->MetaTitle;
$jomresConfig_MetaAuthor		= $CONFIG->MetaAuthor;
$jomresConfig_debug				= $CONFIG->debug;
$jomresConfig_list_limit		= $jrConfig['property_list_limit'];
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

if ( !strstr($scriptname,'install_jomres.php') && $no_html == 0)
	{
	if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS.'admins_first_login.txt') )
		{
		echo '<font color="red" face="arial" size="2">Note, you haven\'t yet logged into the front end as "admin". Virtually all property configuration is performed from the front end so you should add Jomres to the main menu if you haven\'t already and log in to the front end now.</font><br/>';
		}
		
	if($CONFIG->session_handler !="none")
		{
		echo "You need to configure session handling to be set to 'none'. Go to administrator -> Global Configuration -> System -> Session Handler and set this to 'none'. Until you do this, your booking form will not work.<br>";
		}
	}





