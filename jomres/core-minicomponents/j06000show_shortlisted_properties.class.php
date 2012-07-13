<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$original_search_results = $tmpBookingHandler->tmpsearch_data['ajax_list_search_results'];
		$shortlist_items = $tmpBookingHandler->tmpsearch_data['shortlist_items'];
		
		if (count($shortlist_items)>0)
			{
			$MiniComponents->triggerEvent('01004',$componentArgs); // optional
			$MiniComponents->triggerEvent('01005',$componentArgs); // optional
			$MiniComponents->triggerEvent('01006',$componentArgs); // optional
			$MiniComponents->triggerEvent('01007',$componentArgs); // optional
			$componentArgs['propertys_uid'] = $shortlist_items;
			$componentArgs['live_scrolling_enabled'] = false;
			$MiniComponents->triggerEvent('01010',$componentArgs); // listPropertys
			//$tmpBookingHandler->tmpsearch_data['ajax_list_search_results'] = $original_search_results;
			}
		else
			echo jr_gettext( "_JOMRES_NOTHINGINSHORTLIST" , _JOMRES_NOTHINGINSHORTLIST,false,false); ;
		}

	function touch_template_language()
		{
		$output=array();

		$output[]	= jr_gettext( "_JOMRES_NOTHINGINSHORTLIST" , _JOMRES_NOTHINGINSHORTLIST);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
		
	function getRetVals()
		{
		return null;
		}
	}
