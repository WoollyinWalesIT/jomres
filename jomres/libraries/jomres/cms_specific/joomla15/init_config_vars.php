<?php 

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

	//global $mainframe;
	global $config;
	require_once( JOMRESCONFIG_ABSOLUTE_PATH .JRDS.'config.php' );
	
	
//$config['db_hostname'] = 'localhost';
//$config['db_username'] = 'root';
//$config['db_password'] = '';
//$config['db_name'] = 'cmsms';
#Change this param only if you know what you are doing
//$config["db_port"] = '';


#If app needs to coexist with other tables in the same db,
#put a prefix here.  e.g. "cms_"
//$config['db_prefix'] = 'cms_';
	
	

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
		
	//var_dump($tmpConfig);exit;
	
	$jomresConfig_sitename			= $tmpConfig['sitename'];
	//$jomresConfig_lifetime			= $tmpConfig[''];
	//$jomresConfig_MetaDesc			= $tmpConfig[''];
	//$jomresConfig_MetaKeys			= $tmpConfig[''];
	//$jomresConfig_MetaTitle			= $tmpConfig[''];
	//$jomresConfig_MetaAuthor			= $tmpConfig[''];
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
	


	/*
	$CONFIG = new JConfig();
	$no_html = (int)$_REQUEST['no_html'];

	if($CONFIG->session_handler !="none" && $no_html == 0)
		{
		echo "You need to configure session handling to be set to 'none'. Go to administrator -> Global Configuration -> System -> Session Handler and set this to 'none'. Until you do this, your booking form will not work.<br>";
		}

	$jomresConfig_offline			= $CONFIG->offline;
	$jomresConfig_db				= $CONFIG->db;
	/*

	*/
	
	// if (class_exists('JURI'))
		// {
		// $jomresConfig_live_site=JURI::base();
		// }
	// else
		// {
		// if ($IIS > 0) // Win NT, therefore $_SERVER['REQUEST_URI'] == null
			// {
			// $path_info =  $_SERVER['PATH_INFO'];
			// $_URI = explode("/", $path_info);
			// }
		// else
			// {

			// list($path, $args) = explode("?", $_SERVER['REQUEST_URI']);
			// $_URI = explode("/", $path);
			// }
		// array_shift($_URI);
		// $_URI=array_slice($_URI,0,count($_URI)-1);
		// array_unshift ($_URI,$_SERVER['SERVER_NAME'] );
		// $jomresConfig_live_site="http://".implode("/",$_URI);
		// }
	// $jomresConfig_live_site=str_replace("/administrator/","",$jomresConfig_live_site);
	// $jomresConfig_live_site=str_replace("/administrator","",$jomresConfig_live_site);
	// if(substr($jomresConfig_live_site, -1)=="/") $jomresConfig_live_site = substr($jomresConfig_live_site, 0, -1);
	// $jomresConfig_sitename			= $CONFIG->sitename;
	// $jomresConfig_lifetime			= $CONFIG->lifetime;
	// $jomresConfig_MetaDesc			= $CONFIG->MetaDesc;
	// $jomresConfig_MetaKeys			= $CONFIG->MetaKeys;
	// $jomresConfig_MetaTitle			= $CONFIG->MetaTitle;
	// $jomresConfig_MetaAuthor		= $CONFIG->MetaAuthor;
	// $jomresConfig_debug				= $CONFIG->debug;
	// $jomresConfig_list_limit		= $CONFIG->list_limit;
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
	//$jomresConfig_favicon				= $CONFIG->favicon;
	//$jomresConfig_fileperms			= $CONFIG->fileperms;
	//$jomresConfig_dirperms			= $CONFIG->dirperms;
	//$jomresConfig_helpurl				= $CONFIG->helpurl;
	//$jomresConfig_multilingual_content 	= $CONFIG->multilingual_content;
	//$jomresConfig_editor				= $CONFIG->editor;
	//$jomresConfig_locale				= $CONFIG->locale;
	//$jomresConfig_meta_pagetitle		= $CONFIG->meta_pagetitle;
	//$jomresConfig_back_button			= $CONFIG->back_button;
	//$jomresConfig_item_navigation		= $CONFIG->item_navigation;
	//$jomresConfig_caching			= $CONFIG->caching;
	//$jomresConfig_cachepath			= $CONFIG->cachepath;
	//$jomresConfig_cachetime			= $CONFIG->cachetime;
	//$jomresConfig_locale				= $CONFIG->locale;
	//$jomresConfig_offset				= $CONFIG->offset;
	//$jomresConfig_offset_user			= $CONFIG->offset_user;
	//$jomresConfig_hideAuthor			= $CONFIG->hideAuthor;
	//$jomresConfig_hideCreateDate		= $CONFIG->hideCreateDate;
	//$jomresConfig_hideModifyDate		= $CONFIG->hideModifyDate;
	//$jomresConfig_hidePdf				= $CONFIG->hidePdf;
	//$jomresConfig_hidePrint			= $CONFIG->hidePrint;
	//$jomresConfig_hideEmail			= $CONFIG->hideEmail;
	//$jomresConfig_enable_log_items		= $CONFIG->enable_log_items;
	//$jomresConfig_enable_log_searches		= $CONFIG->enable_log_searches;
	//$jomresConfig_enable_stats			= $CONFIG->enable_stats;
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

	// define('_JOMRES_NEWJOOMLA','1');
	// $jomresPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres";
	// $jomresAdminPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres";
	
	// $Itemids = array();
	// $query = "SELECT id"
	// . "\n FROM #__menu"
	// . "\n WHERE "
	// . "\n published = 1"
	// . "\n AND link LIKE 'index.php?option=com_jomres' LIMIT 1";
	// $itemQueryRes = doSelectSql($query);
	// if (count($itemQueryRes)>0)
		// {
		// foreach ($itemQueryRes as $i)
			// {
			// $Itemids[] = $i->id;
			// }
		// }
	// if (!in_array((int)$jrConfig['jomresItemid'],$Itemids))
		// echo '<font color="red" face="arial" size="1">Warning: Your Jomres Itemid and the Itemid stored in Site Config are different, this may result in unpredictable behaviour. It is recommended that you modify your Site Config Itemid to match that in the main menu. See <a href="http://tickets.jomres.net/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=96&nav=0,3" target="_blank"> this article for more information</a></font>';








