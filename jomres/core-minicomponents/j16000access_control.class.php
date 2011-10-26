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

class j16000access_control
	{
	function j16000access_control()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
			
		$jomres_access_control = jomres_getSingleton('jomres_access_control');

		$levels = array ("anybody","registered","manager","supermanager","nobody");
		
		// Minicomponents that should never be forbidden from running
		$uncontrollable_patterns = array(
			"00001",
			"00002",
			"00005",
			"01009",
			"01010",
			"16010",
			"16020",
			"99995",
			"99996",
			"99997",
			"99999",
			"10002",
			"16000"
			);
		
		$uncontrollable_scripts = array(
			"00001start",
			"00002usermanagement",
			"00006sanity_checks",
			"00012managelogs",
			"00012manager_first_run",
			"06000cron_exchangerates",
			"06000cron_invoice",
			"06000cron_optimise",
			"06000cron_subscriptions",
			"06000cronjobs",
			"00060toptemplate",
			"00061bottomtemplate",
			"05000bookingobject",
			"03020insertbooking"
			);

		$menu_patterns = array(
			"00009",
			"00010",
			"00011"
			);
			
		$controllable = array();
		
		$thisJRUser=$MiniComponents->triggerEvent('00002'); // Register user
		
		$count = count($MiniComponents->registeredClasses);
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

		foreach ($controllable as $minicomp)
			{
			$r = array();
			
			//$access_control
			$r['SCRIPTNAME'] = $minicomp['eventPoint'].$minicomp['eventName'];
			$r['DROPDOWN'] = $jomres_access_control->generate_access_control_dropdown($minicomp);
			
			$rows[]=$r;
			}

		$output = array();
		$output['AJAXURL'] = JOMRES_SITEPAGE_URL_AJAX_ADMIN;
		$output['_JOMRES_ACCESS_CONTROL_TITLE'] = _JOMRES_ACCESS_CONTROL_TITLE;
		$output['_JOMRES_ACCESS_CONTROL_DESC'] = _JOMRES_ACCESS_CONTROL_DESC;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'access_control.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}



	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}