<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06000ajax_list_properties
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$MiniComponents->triggerEvent('01004');

		$number_of_results = (int) get_showtime('number_of_ajax_results_required');
		if ($number_of_results == 0) {
			$number_of_results = 1;
		}

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$last_id = 0;
		if (isset($_REQUEST[ 'lastID' ])) {
			$last_id = (int) $_REQUEST[ 'lastID' ];
		}
		if (isset($tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ])) {
			$original_search_results = $tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ];
		} else {
			$original_search_results = array();
		}

		$count = count($original_search_results);

		$this->resultBucket = array();
		for ($i = 0; $i <= $count; ++$i) {
			if (isset($original_search_results[ $i ])) {
				if ($original_search_results[ $i ] == $last_id) {
					for ($n = 1; $n <= $number_of_results; ++$n) {
						$counter = $i + $n;
						if (isset($original_search_results[ $counter ])) {
							$this->resultBucket[ ] = $original_search_results[ $counter ];
						}
					}
					break;
				}
			}
		}

		if (!empty($this->resultBucket)) {
			$componentArgs = array();
			$componentArgs[ 'propertys_uid' ] = $this->resultBucket;
			$MiniComponents->specificEvent('01010', 'listpropertys', $componentArgs);
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
