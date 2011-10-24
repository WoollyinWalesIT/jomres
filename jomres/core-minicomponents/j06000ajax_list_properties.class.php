<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000ajax_list_properties
	{
	function j06000ajax_list_properties()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$number_of_results = 3;
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$last_id = (int)$_REQUEST['lastID'];
		if (!isset($tmpBookingHandler->tmpsearch_data['ajax_list_properties_sets']) ) // We'll create some data sets now, that'll make it slightly quicker in subsequent calls
			{
			$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
			$jrConfig=$siteConfig->get();

			$original_search_results = $tmpBookingHandler->tmpsearch_data['ajax_list_search_results'];
			$counter = 0;

			array_splice($original_search_results, 0,(int)$jrConfig['property_list_limit']);

			$count = count($original_search_results);
			$tmp_sets = array_chunk($original_search_results,$number_of_results); // this is a new function for me. Even after all this time, there's always a first.

			$counter = 0;
			$sets = array();
			foreach ($tmp_sets as $set)
				{
				if ($counter == 0)
					$newkey = $last_id;
				else
					$newkey = $last_key;

				$sets[$newkey] = $set;
				$last_key = end($set);
				$counter++;

				}
			$tmpBookingHandler->tmpsearch_data['ajax_list_properties_sets'] = $sets;
			}

		$this->resultBucket=$tmpBookingHandler->tmpsearch_data['ajax_list_properties_sets'][$last_id];

		if (count($this->resultBucket) > 0)
			{
			$componentArgs=array();
			$componentArgs['propertys_uid']=$this->resultBucket;
			$MiniComponents->specificEvent('01010','listpropertys',$componentArgs); 
			}
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>