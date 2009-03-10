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

	global $config,$jrConfig;
	require_once( JOMRESCONFIG_ABSOLUTE_PATH .JRDS.'config.php' );

	$jomresConfig_dbprefix			= $config['db_prefix'];
	$jomresConfig_user	 			= $config['db_username'];
	$jomresConfig_password	 		= $config['db_password'];
	$jomresConfig_db				= $config['db_name'];
	$jomresConfig_host				= $config['db_hostname'];
	
	$jomresConfig_debug				= $config['debug'];
	$jomresConfig_live_site			= $config['root_url'];
	
	$query="SELECT * FROM #__siteprefs";
	$result=doSelectSql($query);
	
	$tmpConfig=array();
	foreach ($result as $r)
		{
		$tmpConfig[$r->sitepref_name]=$r->sitepref_value;
		}

	$jomresConfig_sitename			= $tmpConfig['sitename'];
	$jomresConfig_list_limit		= 10;
	$jomresConfig_mailer			= $tmpConfig['CMSMailer_mapi_pref_mailer'];
	$jomresConfig_mailfrom			= $tmpConfig['CMSMailer_mapi_pref_from'];
	$jomresConfig_fromname			= $tmpConfig['CMSMailer_mapi_pref_fromuser'];
	$jomresConfig_sendmail			= $tmpConfig['CMSMailer_mapi_pref_sendmail'];
	$jomresConfig_smtpauth			= $tmpConfig['CMSMailer_mapi_pref_smtpauth'];
	$jomresConfig_smtpuser			= $tmpConfig['CMSMailer_mapi_pref_username'];
	$jomresConfig_smtppass			= $tmpConfig['CMSMailer_mapi_pref_password'];
	$jomresConfig_smtphost			= $tmpConfig['CMSMailer_mapi_pref_host'];
	$jomresConfig_secret			= 'ABC123';
	$jomresConfig_lifetime			= 1500;

	$jomresConfig_list_limit		= $jrConfig['property_list_limit'];
	

	/*
	Old Joomla settings, we can use them to copy into the new cms specific inti config vars files
	// $jomresConfig_sitename			= $CONFIG->sitename;
	// $jomresConfig_lifetime			= $CONFIG->lifetime;
	// $jomresConfig_MetaDesc			= $CONFIG->MetaDesc;
	// $jomresConfig_MetaKeys			= $CONFIG->MetaKeys;
	// $jomresConfig_MetaTitle			= $CONFIG->MetaTitle;
	// $jomresConfig_MetaAuthor		= $CONFIG->MetaAuthor;
	// $jomresConfig_debug			= $CONFIG->debug;
	// $jomresConfig_list_limit			= $CONFIG->list_limit;
	// $jomresConfig_mailer			= $CONFIG->mailer;
	// $jomresConfig_mailfrom			= $CONFIG->mailfrom;
	// $jomresConfig_fromname			= $CONFIG->fromname;
	// $jomresConfig_sendmail			= $CONFIG->sendmail;
	// $jomresConfig_smtpauth			= $CONFIG->smtpauth;
	// $jomresConfig_smtpuser			= $CONFIG->smtpuser;
	// $jomresConfig_smtppass			= $CONFIG->smtppass;
	// $jomresConfig_smtphost			= $CONFIG->smtphost;
	// $jomresConfig_secret			= $CONFIG->secret;
	// $jomresConfig_dbprefix			= $CONFIG->dbprefix;
	// $jomresConfig_user	 			= $CONFIG->user;
	// $jomresConfig_password	 		= $CONFIG->password;
	// $jomresConfig_db				= $CONFIG->db;
	// $jomresConfig_host				= $CONFIG->host;

	//$jomresConfig_pagetitles			= $CONFIG->pagetitles;
	//$jomresConfig_readmore			= $CONFIG->readmore;
	//$jomresConfig_hits				= $CONFIG->hits;
	//$jomresConfig_icons				= $CONFIG->icons;
	//$jomresConfig_favicon			= $CONFIG->favicon;
	//$jomresConfig_fileperms			= $CONFIG->fileperms;
	//$jomresConfig_dirperms			= $CONFIG->dirperms;
	//$jomresConfig_helpurl			= $CONFIG->helpurl;
	//$jomresConfig_multilingual_content 	= $CONFIG->multilingual_content;
	//$jomresConfig_editor			= $CONFIG->editor;
	//$jomresConfig_locale			= $CONFIG->locale;
	//$jomresConfig_meta_pagetitle		= $CONFIG->meta_pagetitle;
	//$jomresConfig_back_button		= $CONFIG->back_button;
	//$jomresConfig_item_navigation		= $CONFIG->item_navigation;
	//$jomresConfig_caching			= $CONFIG->caching;
	//$jomresConfig_cachepath			= $CONFIG->cachepath;
	//$jomresConfig_cachetime			= $CONFIG->cachetime;
	//$jomresConfig_locale			= $CONFIG->locale;
	//$jomresConfig_offset			= $CONFIG->offset;
	//$jomresConfig_offset_user		= $CONFIG->offset_user;
	//$jomresConfig_hideAuthor			= $CONFIG->hideAuthor;
	//$jomresConfig_hideCreateDate		= $CONFIG->hideCreateDate;
	//$jomresConfig_hideModifyDate		= $CONFIG->hideModifyDate;
	//$jomresConfig_hidePdf			= $CONFIG->hidePdf;
	//$jomresConfig_hidePrint			= $CONFIG->hidePrint;
	//$jomresConfig_hideEmail			= $CONFIG->hideEmail;
	//$jomresConfig_enable_log_items		= $CONFIG->enable_log_items;
	//$jomresConfig_enable_log_searches	= $CONFIG->enable_log_searches;
	//$jomresConfig_enable_stats		= $CONFIG->enable_stats;
	//$jomresConfig_sef				= $CONFIG->sef;
	//$jomresConfig_vote				= $CONFIG->vote;
	//$jomresConfig_gzip				= $CONFIG->gzip;
	//$jomresConfig_allowUserRegistration	= $CONFIG->allowUserRegistration;
	//$jomresConfig_error_reporting		= $CONFIG->error_reporting;
	//$jomresConfig_error_message		= $CONFIG->error_message;
	//$jomresConfig_link_titles			= $CONFIG->link_titles;
	//$jomresConfig_shownoauth			= $CONFIG->shownoauth;
	//$jomresConfig_useractivation		= $CONFIG->useractivation;
	//$jomresConfig_uniquemail			= $CONFIG->uniquemail;
	//$jomresConfig_admin_site			= $CONFIG->admin_site;
	*/
	
?>