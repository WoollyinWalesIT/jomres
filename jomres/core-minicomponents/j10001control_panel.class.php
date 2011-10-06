<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$output = array();
		$page_output = array();
		
		$output['LIVESITE']=get_showtime('live_site');
		$output['WRITABILITY_TESTS']=control_panel_writability_tests();

		$configfile = JOMRESPATH_BASE.JRDS."jomres_config.php";  // This is to pull in the Jomres version from mrConfig
		include($configfile);

		$configSets=parseConfiguration();
		$localFopen=$configSets["PHP Core"]['allow_url_fopen'][0];
		$masterFopen=$configSets["PHP Core"]['allow_url_fopen'][1];

		$thisVersion=$mrConfig['version'];
		
		$output['VERSION_CHECK'] = "This Jomres version: $thisVersion<br />";
		
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
				$output['VERSION_CHECK'] .= "Sorry, could not get latest version of Jomres, is there a firewall preventing communication with http://updates.jomres.net ?<p>";
			else
				$output['VERSION_CHECK'] .= $buffer;
			}
			
		$output['PLUGIN_CHECK'] = plugin_check();

							
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput',$pageoutput);
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
	$MiniComponents =jomres_getSingleton('mcHandler');
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