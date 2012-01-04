<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00035tabcontent_02_bookingform
	{
	function j00035tabcontent_02_bookingform($componentArgs)
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$property_uid=(int)$componentArgs['property_uid'];  
		$mrConfig=getPropertySpecificSettings($property_uid);
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$thisJRUser=jomres_getSingleton('jr_user');
		
		if ($mrConfig['registeredUsersOnlyCanBook'] == "1" && $thisJRUser->id == 0)
			{
			$this->retVals  = null;
			return;
			}
		
		$output = $componentArgs['currrent_output'];  
		// Booking form tab
		if ($mrConfig['is_real_estate_listing']==0 && $jrConfig['show_booking_form_in_property_details'] =="1" && $mrConfig['visitorscanbookonline']=='1' && !isset($_REQUEST['jr_printable']) )
			{
			define("DOBOOKING_IN_DETAILS",1);
			require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'dobooking.php');
			
			$book_now_text=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,false);
			if ($mrConfig['singleRoomProperty'] ==  '1')
				$book_now_text=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY',_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY,false,false);

			$anchor = jomres_generate_tab_anchor($book_now_text);
			$tab = array(
				"TAB_ANCHOR"=>$anchor,
				"TAB_TITLE"=>$book_now_text,
				"TAB_CONTENT"=>BOOKING_FORM_FOR_PROPERTY_DETAILS
				);
			$this->retVals = $tab;
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