<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class booking_engine_children_dropdown
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( $bkg  )
	{
		if (isset($bkg->available_rooms_for_selected_dates) && !empty($bkg->available_rooms_for_selected_dates)) {
			$this->available_rooms	= $bkg->available_rooms_for_selected_dates;
		} else {
			$this->available_rooms	= [];
		}

		$this->property_uid		= $bkg->property_uid;
		$this->child_numbers	= $bkg->child_numbers;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function build_children_dropdowns ( )
	{
		$child_dropdowns = array();

		$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
		$basic_room_details->get_all_rooms($this->property_uid);

		$total_child_slots_available_these_dates = 0;

		foreach ($this->available_rooms as $room_id ) {
			if ( isset($basic_room_details->rooms[$room_id])) {
				$total_child_slots_available_these_dates = $total_child_slots_available_these_dates + $basic_room_details->rooms[$room_id]['max_children'];
			}
		}

		$total_slots_already_selected = 0;
		if ( !empty($this->child_numbers)) {
			foreach ($this->child_numbers as $child_selection) {
				$total_slots_already_selected = $total_slots_already_selected  + $child_selection;
			}
		}

		$remaining_slots_not_selected = $total_child_slots_available_these_dates - $total_slots_already_selected;
		if ($remaining_slots_not_selected < 0 ) {
			$remaining_slots_not_selected = 0;
		}

		jr_import('jomres_child_rates');
		$jomres_child_rates = new jomres_child_rates($this->property_uid);

		jr_import('jomres_child_policies');
		$jomres_child_policies = new jomres_child_policies($this->property_uid);

		if (!empty($jomres_child_rates->child_rates)) {
			$slots_remaining = $total_child_slots_available_these_dates;
			foreach ($jomres_child_rates->child_rates as $id=>$rate) {

				if ( $rate['age_from'] >= $jomres_child_policies->child_policies['child_min_age'] ) {

					if ( isset($this->child_numbers[$id])) { // Some child numbers have already been selected. Because we need to adjust the other child numbers to ensure that too many kids aren't chosen during booking time we need to adjust the remaining numbers
						$selected = $this->child_numbers[$id];
					} else {
						$selected = 0;
					}

					$slots_remaining = $slots_remaining - $selected;

					$guests_dropdown = jomresHTML::integerSelectList(0, $remaining_slots_not_selected + $selected, 1, 'child_dropdown['.$id.']', 'size="1" class="input-mini"  autocomplete="off" onchange="getResponse_children('.$id.');"', $selected, '%02d', $use_bootstrap_radios = false);

					if ( $rate['model'] == 'per_stay') {
						$price_text = output_price($rate['price'])." ".jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY');
					} else {
						$price_text = output_price($rate['price'])." ".jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT');
					}

					$child_dropdowns[] = array (
						"CHILD_DROPDOWN" => $guests_dropdown ,
						'TEXT' => jr_gettext('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'JOMRES_BOOKING_FORM_CHILDREN_AGE_DD') ." ".$rate["age_from"]." - ".$rate["age_to"]  ,
						'INFO' => $price_text
					);
				}
			}
		}

		return $child_dropdowns;
	}

	
}
