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


class j06000show_shortlisted_properties
	{
	function j06000show_shortlisted_properties()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$original_search_results = $tmpBookingHandler->tmpsearch_data['ajax_list_search_results'];
		$shortlist_items = $tmpBookingHandler->tmpsearch_data['shortlist_items'];

		$MiniComponents->triggerEvent('01004',$componentArgs); // optional
		$MiniComponents->triggerEvent('01005',$componentArgs); // optional
		$MiniComponents->triggerEvent('01006',$componentArgs); // optional
		$MiniComponents->triggerEvent('01007',$componentArgs); // optional
		$componentArgs['propertys_uid'] = $shortlist_items;
		$MiniComponents->triggerEvent('01010',$componentArgs); // listPropertys
		$tmpBookingHandler->tmpsearch_data['ajax_list_search_results'] = $original_search_results;
		}

	function getRetVals()
		{
		return null;
		}
	}
