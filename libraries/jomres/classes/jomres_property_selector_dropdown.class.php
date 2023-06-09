<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.7.1
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
	class jomres_property_selector_dropdown
	{

		/**
		 *
		 *
		 *
		 */

		public function get_dropdown($truncated_names = false)
		{
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

			$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$basic_property_details->get_property_name_multi($thisJRUser->authorisedProperties);

			$currentProperty = getDefaultProperty();
			$curr_url = parse_url(getCurrentUrl(true));

			// For the Edit X tasks, we need to swap the task to list whatever as property A wont have tariff B
			$swap_tasks = array(
				'oauth_edit_client'		=> [ 'new_task' => 'oauth', 'vars_to_unset' => [ 'client_id' ] ],
				'edit_integration'		=> [ 'new_task' => 'webhooks_core', 'vars_to_unset' => [ 'id' ] ],
				'edit_booking'			=> [ 'new_task' => 'list_bookings', 'vars_to_unset' => [ 'contract_uid' ] ],
				'edit_guest'			=> [ 'new_task' => 'list_guests', 'vars_to_unset' => [ 'id' ] ],
				'checkin'				=> [ 'new_task' => 'list_bookings', 'vars_to_unset' => [ 'contract_uid' ] ],
				'checkout'				=> [ 'new_task' => 'list_bookings', 'vars_to_unset' => [ 'contract_uid' ] ],
				'add_service_to_bill'	=> [ 'new_task' => 'list_bookings', 'vars_to_unset' => [ 'contract_uid' ] ],
				'addnote'				=> [ 'new_task' => 'list_bookings', 'vars_to_unset' => [ 'contract_uid' ] ],
				'view_invoice'			=> [ 'new_task' => 'list_bookings', 'vars_to_unset' => [ 'id' ] ],
				'show_black_booking'	=> [ 'new_task' => 'list_black_bookings', 'vars_to_unset' => [ 'contract_uid' ] ],
				'edit_resource'			=> [ 'new_task' => 'list_resources', 'vars_to_unset' => [ 'roomUid' ] ],
				'edit_occupancy_level'	=> [ 'new_task' => 'list_occupancy_levels', 'vars_to_unset' => [ 'id' ] ],
				'edit_child_rate'		=> [ 'new_task' => 'child_policies', 'vars_to_unset' => [ 'id' ] ],
				'jintour_edit_profile'	=> [ 'new_task' => 'jintour', 'vars_to_unset' => [ 'id' ] ],
				'editCoupon'			=> [ 'new_task' => 'listCoupons', 'vars_to_unset' => [ 'coupon_id' ] ],
				'edit_extra'			=> [ 'new_task' => 'list_extras', 'vars_to_unset' => [ 'uid' ] ],

				'edit_tariff_micromanage'	=> [ 'new_task' => 'list_tariffs', 'vars_to_unset' => [ 'tarifftypeid' ] ],
				'edit_tariff_advanced'		=> [ 'new_task' => 'list_tariffs', 'vars_to_unset' => [ 'tariffUid' ] ],
				'edit_tariff_standard'		=> [ 'new_task' => 'list_tariffs', 'vars_to_unset' => [ 'tarifftypeid' ] ],
				'edit_tariffs_normal'		=> [ 'new_task' => 'list_tariffs', 'vars_to_unset' => [ ] ],
				'list_tariffs_micromanage'	=> [ 'new_task' => 'list_tariffs', 'vars_to_unset' => [ ] ],
				'list_tariffs_advanced'		=> [ 'new_task' => 'list_tariffs', 'vars_to_unset' => [ ] ],
				'list_tariffs_standard'		=> [ 'new_task' => 'list_tariffs', 'vars_to_unset' => [  ] ],


			);

			// We need to parse $_REQUEST because getcurrenturl will return the sef'd url, not the "real" one that we want
			if (isset($_REQUEST['task']) && $_REQUEST['task'] == 'viewproperty') {
				$new_query = get_property_details_url($currentProperty , 'nosef' );
				$query = parse_url($new_query);
				$query_string = $query ["query"];
			} else {
				$arr = $_REQUEST;
				$query_string = '?x=1&';
				foreach ($arr as $key => $val) {
					if (is_string($val)) { // we don't care about keeping search query contents, this url is just for property management, not guests
						$query_string .=
							$key . '=' .
							$val . '&';
					}
				}
			}

			parse_str($query_string, $output);;
			if ( array_key_exists('thisProperty' , $output ) ) {
				unset($output['thisProperty']);
			}

			if ( array_key_exists('property_uid' , $output ) ) {
				unset($output['property_uid']);
			}

			$curr_task = get_showtime("task");

			if ( array_key_exists($curr_task , $swap_tasks ) ) {
				$output['task'] = $swap_tasks[$curr_task]['new_task'];
				if (isset($swap_tasks[$curr_task]['vars_to_unset']) && !empty($swap_tasks[$curr_task]['vars_to_unset']) ) {
					foreach ($swap_tasks[$curr_task]['vars_to_unset'] as $var) {
						if ( array_key_exists($var , $output ) ) {
							unset($output[$var]);
						}
					}
				}
			}

			$new_query = $curr_url["scheme"].'://'.$curr_url["host"].$curr_url["path"].'?'.http_build_query($output);

			$properties = array();
			foreach ($thisJRUser->authorisedProperties as $p) {
				$properties[$p] = $basic_property_details->property_names[$p];
			}

			natcasesort($properties);

			$options = array();
			foreach ($properties as $key => $val) {
				if ($truncated_names == true && strlen($val) > 31) {
					$val = jr_substr($val, 0, 30).'&hellip;';
				}
				if (isset($_REQUEST['task']) && $_REQUEST['task'] == 'viewproperty') {
					$url = get_property_details_url( $key );
				} else {
					$url = $new_query.'&thisProperty='.$key;
				}

				if ($key == $currentProperty) {
					$selected_property_url = $url;
				}
				$url = str_replace ( "?%3F" , "?" , $url );

				$options[] = jomresHTML::makeOption($url, $val.' ('.$key.')');
			}

			$javascript = 'onchange="window.location=this.value;"';
			$selected_property_url = str_replace ( "?%3F" , "?" , $selected_property_url );
			return jomresHTML::selectList($options, 'switch_property', ' autocomplete="off" '.$javascript.'', 'value', 'text', $selected_property_url, false);
		}
	}
