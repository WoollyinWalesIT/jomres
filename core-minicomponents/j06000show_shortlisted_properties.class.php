<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
 *
 * @copyright	2005-2022 Vince Wooll
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

class j06000show_shortlisted_properties
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
			$this->template_touchable = true;
			$this->shortcode_data = array(
				'task' => 'show_shortlisted_properties',
				'info' => '_JOMRES_SHORTCODES_06000SHORTLIST',
				'arguments' => array()
					);
			return;
		}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		$original_search_results = array();
		if (isset($tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ])) {
			$original_search_results = $tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ];
		}

		$shortlist_items = array();
		if (isset($tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ])) {
			$shortlist_items = $tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ];
		}

		if ($thisJRUser->userIsRegistered) {
			$query = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE `my_id` = '".(int) $thisJRUser->id."'";
			$propys = doSelectSql($query);
			if (!empty($propys)) {
				foreach ($propys as $p) {
					if (!in_array($p->property_uid, $shortlist_items)) {
						$shortlist_items[] = (int) $p->property_uid;
					}
				}
			}
		}

		if (!empty($shortlist_items)) {
			$componentArgs = array();
			$MiniComponents->triggerEvent('01004', $componentArgs); // optional
			$MiniComponents->triggerEvent('01005', $componentArgs); // optional
			$MiniComponents->triggerEvent('01006', $componentArgs); // optional
			$MiniComponents->triggerEvent('01007', $componentArgs); // optional
			$componentArgs[ 'propertys_uid' ] = $shortlist_items;
			$componentArgs[ 'live_scrolling_enabled' ] = true;
			$MiniComponents->triggerEvent('01010', $componentArgs); // listPropertys
			//$tmpBookingHandler->tmpsearch_data['ajax_list_search_results'] = $original_search_results;
		} else {
			echo jr_gettext('_JOMRES_NOTHINGINSHORTLIST', '_JOMRES_NOTHINGINSHORTLIST', false, false);
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_NOTHINGINSHORTLIST', '_JOMRES_NOTHINGINSHORTLIST');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

	public function getRetVals()
	{
		return null;
	}
}
