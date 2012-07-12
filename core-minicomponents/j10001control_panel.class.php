<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10001control_panel
	{
	function j10001control_panel()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		if (JRPORTAL_AJAXCALL)
			return;
		
		$output = array();
		$page_output = array();
		
		$output['LIVESITE']=get_showtime('live_site');
		$output['WRITABILITY_TESTS']=control_panel_writability_tests();

		$configfile = JOMRESPATH_BASE.JRDS."jomres_config.php";  // This is to pull in the Jomres version from mrConfig
		include($configfile);

		$configSets=parseConfiguration();
		$localFopen=$configSets["PHP Core"]['allow_url_fopen'][0];
		$masterFopen=$configSets["PHP Core"]['allow_url_fopen'][1];

		if (function_exists("curl_init"))
			{
			$curl_handle=curl_init();
			curl_setopt($curl_handle,CURLOPT_URL,"http://updates.jomres4.net/versions.php");
			curl_setopt($curl_handle,CURLOPT_TIMEOUT, 8);
			curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
			curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
			$buffer = curl_exec($curl_handle);
			curl_close($curl_handle);
			if (empty($buffer))
				$output['LATEST_JOMRES_VERSION'] .= "Sorry, could not get latest version of Jomres, is there a firewall preventing communication with http://updates.jomres4.net ?<p>";
			else
				{
				$latest_jomres_version = explode(".",$buffer);
				$this_jomres_version = explode(".",$mrConfig['version']);
				
				if (!isset( $latest_jomres_version[2]))		$latest_jomres_version[2] = 0;
				if (!isset( $this_jomres_version[2]))		$this_jomres_version[2] = 0;
				
				$latest_major_version = $latest_jomres_version[0];
				$latest_minor_version = $latest_jomres_version[1];
				$latest_revis_version = $latest_jomres_version[2];
				
				$current_major_version = $this_jomres_version[0];
				$current_minor_version = $this_jomres_version[1];
				$current_revis_version = $this_jomres_version[2];
				
				$best_before_expired = false;
				$output['HIGHLIGHT'] = "";
				$output['ALERT'] = "";
				$output['EFFECT'] = "";
				if ($latest_major_version >=0 && $latest_minor_version >=0 && $latest_revis_version >=0)
					{
					if (
						$current_major_version < $latest_major_version
						)
						$best_before_expired = true;

					if (
						$current_major_version <= $latest_major_version &&
						$current_minor_version <= $latest_minor_version &&
						$current_revis_version < $latest_revis_version
						)
						$best_before_expired = true;
					
					if (
						$current_major_version <= $latest_major_version &&
						$current_minor_version < $latest_minor_version
						)
						$best_before_expired = true;
					
					if ($best_before_expired)
						{
						$output['HIGHLIGHT'] = "ui-state-error";
						$output['ALERT'] = _JOMRES_VERSIONCHECK_VERSIONWARNING;
						$output['EFFECT'] = "<script>jomresJquery(document).ready(function() { jomresJquery( \"#version_check_warning\" ).effect( 'highlight' ); });</script> ";
						}
					}
				$output['_JOMRES_VERSIONCHECK_THISJOMRESVERSION'] = _JOMRES_VERSIONCHECK_THISJOMRESVERSION;
				$output['_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION'] = _JOMRES_VERSIONCHECK_LATESTJOMRESVERSION;
				
				
				$output['LATEST_JOMRES_VERSION'] = (int)$latest_major_version.".".(int)$latest_minor_version.".".(int)$latest_revis_version;
				$output['THIS_JOMRES_VERSION'] = (int)$current_major_version.".".(int)$current_minor_version.".".(int)$current_revis_version;
				
				
				}
			}

		$output['PLUGIN_CHECK'] = plugin_check();
		
		$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
		$licensekey=doSelectSql($query,1);
		$licensekey = '';
		$output['PRODUCT_INFORMATION']='';
		if (trim($licensekey)=="")
			{
			$output['_JOMRES_PRODUCT_INFORMATION']=_JOMRES_PRODUCT_INFORMATION;
			$output['_JOMRES_PRODUCT_INFORMATION2']=_JOMRES_PRODUCT_INFORMATION2;
			}
		
		$output['CACHE_WARNING']="";
		$output['CACHE_HIGHLIGHT'] = "";
		if ( this_cms_is_joomla() )
			{
			if (_JOMRES_DETECTED_CMS == "joomla15" )
				$query = "SELECT id FROM #__plugins WHERE `element`='cache' AND published = '1'";
			else
				$query = "SELECT extension_id FROM #__extensions WHERE `name`='plg_system_cache' AND `enabled`='1' ";
			$cache=doSelectSql($query);

			if (count($cache)>0)
				{
				$output['CACHE_WARNING']= _JOMRES_WARNING_SYSTEM_CACHE;
				$output['CACHE_HIGHLIGHT'] = "ui-state-error";
				}
			}

		$output['ACCESS_CONTROL_HIGHLIGHT'] = '';
		$output['ACCESS_CONTROL_ALERT'] = '';
		$access_control_check = jomresAccessControlSanityCheck();
		if (!$access_control_check['result'])
			{
			$output['ACCESS_CONTROL_HIGHLIGHT'] = "ui-state-error";
			$output['ACCESS_CONTROL_ALERT'] = $access_control_check['message'];
			}
		
		$curl_handle=curl_init();
		curl_setopt($curl_handle,CURLOPT_URL,"http://updates.jomres4.net/news.php");
		curl_setopt($curl_handle,CURLOPT_TIMEOUT, 8);
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);
		if (empty($buffer))
			$output['LATEST_JOMRES_VERSION'] .= "Sorry, could not get latest Jomres news, is there a firewall preventing communication with http://updates.jomres4.net ?<p>";
		else
			{
			$news_rows = array();
			$news = json_decode($buffer);
			foreach ($news as $row)
				{
				$news_rows[] = array("DATE"=>filter_var($row->date,FILTER_SANITIZE_SPECIAL_CHARS),"NEWS"=>filter_var($row->news,FILTER_SANITIZE_SPECIAL_CHARS),"STATE"=>filter_var($row->state,FILTER_SANITIZE_SPECIAL_CHARS),"TITLE"=>filter_var($row->title,FILTER_SANITIZE_SPECIAL_CHARS),"URL"=>filter_var($row->url,FILTER_SANITIZE_URL),"URL_TEXT"=>filter_var($row->url_text,FILTER_SANITIZE_SPECIAL_CHARS)); // Filter var added here so that in the unlikely event that the updates server is compromised, no naughty data is downloaded from the updates server to be executed on this server/user's browser.
				}
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'news_rows',$news_rows);
		$tmpl->readTemplatesFromInput( 'control_panel.html' );
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}	
	}
	
function plugin_check()
	{
	$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
	$recommended_plugins = array();
	$recommended_plugins['advanced_micromanage_tariff_editing_modes'] 	= array('minicomponent_name'=>'j02210listtariffs_advanced','message'=>'Offers the Advanced and Micromanage tariff editing modes, allowing property managers to construct much more detailed tariffs which mirror their real-world prices, for example different prices that cover different seasons.');
	$recommended_plugins['core_gateway_paypal'] 						= array('minicomponent_name'=>'j00605paypal','message'=>'Offers the ability for property managers to take payments online via paypal.');
	$recommended_plugins['guest_types'] 								= array('minicomponent_name'=>'j02114listcustomertypes','message'=>'If a property manager wants to charge per person per night, or if they don\'t want to charge per person per night but need to know numbers of guests, you will need this plugin to create guest types.');
	$recommended_plugins['optional_extras'] 							= array('minicomponent_name'=>'j02142listextras','message'=>'Optional extras can be added to bookings using the Optional Extras plugin. This provides the ability to create extras which can be charged using different models (e.g. per night, per booking, per guest etc).');
	$recommended_plugins['property_creation_plugins'] 					= array('minicomponent_name'=>'j02300regprop1','message'=>'If you need to create more properties then you will need the Property Creation Plugin.');

	$messages = '';
	foreach ($recommended_plugins as $plugin_name=>$plugin)
		{
		$event_point = substr($plugin['minicomponent_name'],1,strlen($plugin['minicomponent_name']) );
		if (!array_key_exists($event_point,$MiniComponents->registeredClasses) )
			{
			$messages .= "<div class='ui-state-highlight'><strong> Recommended plugin </strong>: ".$plugin_name."<strong><br/> Functionality : </strong>".$plugin['message']."</div>";
			}
		}
	if ($messages != "")
		{
		$messages = "<p><div class='ui-state-highlight'><br/> <strong>Note, we have detected that several important plugins are not installed. These plugins are generally considered to be required if you wish to create a booking portal. You do not <i>need</i> these plugins to use the system but you may be missing functionality that you wish to use. You can use the Jomres Plugin Manager to install any plugins you need. If in doubt, check the manual link in the plugin's information panel to see more detailed information about that plugin. If you do not have a download and support key you can use the Plugin Shop in the Jomres Plugin Manager to purchase plugins.</strong></p>".$messages;
		}
	return $messages;
	}

function control_panel_writability_tests()
	{
	$test_output = '';
	$foldersToTestForWritability=array();
	if (_JOMRES_DETECTED_CMS == "joomla15")
		$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'sessions'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'updates'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS;
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS;

	$writabilityCheckPassImage=get_showtime('live_site')."/jomres/images/writability_check_passed.png";
	$writabilityCheckFailImage=get_showtime('live_site')."/jomres/images/writability_check_failed.png";
	
	foreach ($foldersToTestForWritability as $folder)
		{
		$result=jomresStatusTestFolderIsWritable($folder);
		$message=$result['message'];
		if ($result['result'])
			$image='<img src="'.$writabilityCheckPassImage.'" border="0" alt="Pass" />';
		else
			$image='<img src="'.$writabilityCheckFailImage.'" border="0" alt="'.$result['message'].'" />';
			
		$test_output .= $image." ".$folder."<br/>";
		if ($result['message']!="Pass")
			$test_output .= $result['message']."<br/>";
		}
	return $test_output;
	}

function jomresStatusTestFolderIsWritable($path)
	{
	$tmpFile="temp.txt";
	$tmpDir="jomres_test_dir";
	if (!is_dir($path) )
		return array("result"=>false,"message"=>"Directory ".$path." doesn't exist");
	if (!is_writable($path) )
		return array("result"=>false,"message"=>"Directory ".$path." isn't writable");
	if (!touch($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not write ".$path.$tmpFile);
	if (!file_exists($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not find ".$path.$tmpFile." after seeming to be able to create it.");
	if (!unlink($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not delete ".$path.$tmpFile);

	if (!mkdir($path.$tmpDir) )
		return array("result"=>false,"message"=>"Could not make temporary folder ".$path.$tmpDir);
	if (!rmdir($path.$tmpDir) )
		return array("result"=>false,"message"=>"Could not remove temporary folder ".$path.$tmpDir);
	return array("result"=>true,"message"=>"Pass");
	}
	
function jomresAccessControlSanityCheck()
	{
	$pass = false;
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	
	if ($jrConfig['full_access_control'] =="1")
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		jr_import('jomres_access_control_controlable');
		$jomres_access_control_controlable = new jomres_access_control_controlable();
		// Minicomponents that should never be forbidden from running
		$uncontrollable_patterns = $jomres_access_control_controlable->uncontrollable_patterns ;
		$uncontrollable_scripts =$jomres_access_control_controlable->uncontrollable_scripts ;
		$menu_patterns = $jomres_access_control_controlable->menu_patterns ;

		// First we'll find how many minicomponents should be controllable
		foreach ($MiniComponents->registeredClasses as $key=>$val)
			{
			if (!in_array($key,$uncontrollable_scripts) )
				{
				$pattern = substr($key,0,5);
				
				if ($jomres_access_control->limit_to_menus_only && in_array($pattern,$menu_patterns) && !in_array($pattern,$uncontrollable_patterns) )
					$controllable[$key]=$val;
					elseif (!in_array($pattern,$uncontrollable_patterns) && !$jomres_access_control->limit_to_menus_only)
						$controllable[$key]=$val;
				}
			}
		// Next we'll find how many minicomponents actually have settings in the access control table
		$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');
		
		
		// Now, it's possible that a minicomponent has been uninstalled, therefore we must go through the $jomres_access_control->controlled array and remove those records that refer to minicomps that aren't found in the $controllable array
		if (count($jomres_access_control->controlled) > 0)
			{
			foreach ($jomres_access_control->controlled as $key => $val)
				{
				if (!array_key_exists( $key,$controllable) )
					{
					$jomres_access_control->remove_minicomp_from_access_control_table($key);
					}
				}
			
			}
		else $pass=false;
		
		// Now that we've tidied up possible stray minicomps, we can compare the count, and if it doesn't marry up, we'll trigger a warning.
		$jomres_access_control->recount_controlled_scripts();
		if (count($jomres_access_control->controlled) == count($controllable) )
			$pass = true;
		}
	else $pass = true;
	
	
	return array("result"=>$pass,"message"=>_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING." Controlled ".count($jomres_access_control->controlled)." Controllable ".count($controllable));
	}