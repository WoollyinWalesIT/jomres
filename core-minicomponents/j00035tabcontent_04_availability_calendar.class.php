<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00035tabcontent_04_availability_calendar
	{
	function j00035tabcontent_04_availability_calendar($componentArgs)
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$property_uid=(int)$componentArgs['property_uid'];  
		$mrConfig=getPropertySpecificSettings($property_uid);
		
		$output = $componentArgs['currrent_output'];  

		// j00017 SRP avl cal
		// j00018 MRP avl cal
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($mrConfig['showOnlyAvailabilityCalendar'])
				{
				if ($mrConfig['singleRoomProperty'])
					{
					echo $MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar'];
					}
				else
					{
					echo $MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar'];
					}
				return;
				}
			else
				{
				if (($mrConfig['showAvailabilityCalendar'] && $mrConfig['singleRoomProperty']) )
					{
					$anchor = jomres_generate_tab_anchor($output['TITLE_AVAILABILITYCALENDAR']);
					$tab = array(
						"TAB_ANCHOR"=>$anchor,
						"TAB_TITLE"=>$output['TITLE_AVAILABILITYCALENDAR'],
						"TAB_CONTENT"=>$MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar']
						);
					$this->retVals = $tab;
					}
				elseif ($mrConfig['showAvailabilityCalendar'])
					{
					$anchor = jomres_generate_tab_anchor($output['TITLE_AVAILABILITYCALENDAR']);
					$tab = array(
						"TAB_ANCHOR"=>$anchor,
						"TAB_TITLE"=>$output['TITLE_AVAILABILITYCALENDAR'],
						"TAB_CONTENT"=>$MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar']
						);
					$this->retVals = $tab;
					}
				}
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}

	}
?>