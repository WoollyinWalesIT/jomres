<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j03381rooms
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager) {
			return;
		}
		
		$dropdown = '';
		
		$defaultProperty = getDefaultProperty();
		
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($defaultProperty);
		
		$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
		$basic_room_details->get_all_rooms($defaultProperty);

		if (!empty($basic_room_details->rooms)) {
			$resource_options = array();
			
			foreach ($basic_room_details->rooms as $room) {
				$room_type = '';
				
				if ((int) $room['room_classes_uid'] > 0 && isset($current_property_details->room_types[ $room['room_classes_uid'] ]['abbv'])) {
					$room_type = $current_property_details->room_types[ $room['room_classes_uid'] ]['abbv'];
				} else {
					$room_type = '';
				}
				
				$resource_options[ ] = jomresHTML::makeOption($room['room_uid'], $room_type.' '.$room['room_number'].' '.$room['room_name']);
			}

			$dropdown = jomresHTML::selectList($resource_options, 'resource_id', ' autocomplete="off" class="btn btn-success btn-lg" size="1" ', 'value', 'text', '', false);
		}

		$this->ret_vals = $dropdown;
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->ret_vals;
	}
}
