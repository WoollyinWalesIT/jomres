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
		
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$last_id = (int)$_REQUEST['lastID'];
		$original_search_results = $tmpBookingHandler->tmpsearch_data['ajax_list_search_results'];
		$count = count($original_search_results);
		for ($i=0;$i<=$count;$i++)
			{
			if ($original_search_results[$i] == $last_id)
				{
				$this->resultBucket = array( $original_search_results[$i+1]);
				break;
				}
			}

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