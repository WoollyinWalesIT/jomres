<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 * @version Jomres 10.2.0
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * When a user performs a search, those search options are saved to the $tmpBookingHandler session object to be used later when re-building search forms, ensuring that previously selected options are re-selected.
	 *
	 */

class j00005set_search_selections
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		// Do not store searched on elements if consent not given
		// This decision is now disabled. The optin consent has been moved to the booking form/property creation/contact areas explicitely, meaning that users do not get the option to change this setting til later.
		// Given that this temporary data storage is A. mandatory for site functioning and B doesn't store any PII and C deleted automatically 24hrs later, I will disable this decision.
		/* $jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if ( !$jomres_gdpr_optin_consent->user_consents_to_storage() ) {
			return;
		} */

		//////////////////////////////////// SLEEPS /////////////////////////////////////////////////////////

		if (isset($_REQUEST[ 'sleeps_adults' ])) {
			if (is_array($_REQUEST[ 'sleeps_adults' ])) {
				$sleeps_adults = jomresGetParam($_REQUEST, 'sleeps_adults', array());
			} else {
				$sleeps_adults = array(jomresGetParam($_REQUEST, 'sleeps_adults', ''));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['sleeps_adults'] = $sleeps_adults;
		}

		if (isset($_REQUEST[ 'sleeps_children' ])) {
			if (is_array($_REQUEST[ 'sleeps_children' ])) {
				$sleeps_children = jomresGetParam($_REQUEST, 'sleeps_children', array());
			} else {
				$sleeps_children = array(jomresGetParam($_REQUEST, 'sleeps_children', ''));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['sleeps_children'] = $sleeps_children;
		}

		//////////////////////////////////// STARS /////////////////////////////////////////////////////////

		if (isset($_REQUEST[ 'stars' ])) {
			if (is_array($_REQUEST[ 'stars' ])) {
				$stars = jomresGetParam($_REQUEST, 'stars', array());
			} else {
				$stars = array(jomresGetParam($_REQUEST, 'stars', ''));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['stars'] = $stars;
		}

		//////////////////////////////////// Price ranges /////////////////////////////////////////////////////////

		if (isset($_REQUEST[ 'pricerange_value_from' ])) {
			$pricerange_value_from = (int) jomresGetParam($_REQUEST, 'pricerange_value_from', 0);
			$pricerange_value_to = (int) jomresGetParam($_REQUEST, 'pricerange_value_to', 0);

			$priceranges = jomresGetParam($_REQUEST, 'priceranges', array());
			if (!empty($priceranges)) {
				$all_ranges = array();
				foreach ($priceranges as $ranges) {
					$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['priceranges'][] = $ranges;
					$bang = explode('-', $ranges);
					$all_ranges[] = (int) $bang[0];
					$all_ranges[] = (int) $bang[1];
				}
				$pricerange_value_from = min($all_ranges);
				$pricerange_value_to = max($all_ranges);
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['pricerange_value_from'] = $pricerange_value_from;
			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['pricerange_value_to'] = $pricerange_value_to;
		}

		//////////////////////////////////// FEATURES /////////////////////////////////////////////////////////
		if (isset($_REQUEST[ 'feature_uids' ])) {
			$feature_uids = jomresGetParam($_REQUEST, 'feature_uids', array());
			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['feature_uids'] = $feature_uids;
		}

		//////////////////////////////////// COUNTRIES /////////////////////////////////////////////////////////

		if (isset($_REQUEST[ 'countries' ]) || isset($_REQUEST[ 'country' ])) {
			if (isset($_REQUEST[ 'countries' ])) {
				$countries = jomresGetParam($_REQUEST, 'countries', array());
			} else {
				$countries = array(jomresGetParam($_REQUEST, 'country', ''));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['countries'] = $countries;
		}

		//////////////////////////////////// REGIONS /////////////////////////////////////////////////////////
		if (isset($_REQUEST[ 'regions' ]) || isset($_REQUEST[ 'region' ])) {
			if (isset($_REQUEST[ 'regions' ])) {
				$regions = jomresGetParam($_REQUEST, 'regions', array());
			} else {
				$regions = array(find_region_name(jomresGetParam($_REQUEST, 'region', '')));
			}
			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['regions'] = $regions;
		}

		//////////////////////////////////// TOWNS /////////////////////////////////////////////////////////
		if (isset($_REQUEST[ 'towns' ]) || isset($_REQUEST[ 'town' ])) {
			if (isset($_REQUEST[ 'towns' ])) {
				$towns = jomresGetParam($_REQUEST, 'towns', array());
			} else {
				$towns = array(jomresGetParam($_REQUEST, 'town', ''));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['towns'] = $towns;
		}

		//////////////////////////////////// ROOM TYPES /////////////////////////////////////////////////////////
		if (isset($_REQUEST[ 'room_type_uids' ]) || isset($_REQUEST[ 'room_type' ])) {
			if (isset($_REQUEST[ 'room_type_uids' ])) {
				$room_type_uids = jomresGetParam($_REQUEST, 'room_type_uids', array());
			} else {
				$room_type_uids = array(jomresGetParam($_REQUEST, 'room_type', 0));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['room_type_uids'] = $room_type_uids;
		}

		//////////////////////////////////// PROPERTY TYPES /////////////////////////////////////////////////////////
		if (isset($_REQUEST[ 'property_type_uids' ]) || isset($_REQUEST[ 'ptype' ])) {
			if (isset($_REQUEST[ 'room_type_uids' ])) {
				$property_type_uids = jomresGetParam($_REQUEST, 'property_type_uids', array());
			} else {
				$property_type_uids = array(jomresGetParam($_REQUEST, 'ptype', 0));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['property_type_uids'] = $property_type_uids;
		}

		//////////////////////////////////// GUEST NUMBERS /////////////////////////////////////////////////////////
		if (isset($_REQUEST[ 'guestnumbers' ]) || isset($_REQUEST[ 'guestnumber' ])) {
			if (isset($_REQUEST[ 'guestnumbers' ])) {
				$guestnumbers = jomresGetParam($_REQUEST, 'guestnumbers', array());
			} else {
				$guestnumbers = array(jomresGetParam($_REQUEST, 'guestnumber', 0));
			}

			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['guestnumbers'] = $guestnumbers;
		}
		//////////////////////////////////// DATES /////////////////////////////////////////////////////////
		if (isset($_REQUEST[ 'arrivalDate' ])) {
			$arrivalDate = jomresGetParam($_REQUEST, 'arrivalDate', '');

			$test = explode("-", $arrivalDate);
			if (count($test) ==3) { // It's an api date, the date needs to be converted from YYYY-MM-DD to YYYY/MM/DD format so that existing functionality can work with the booking's dates
				$arrivalDate = str_replace("-", '/', $arrivalDate);
			}

			if ($arrivalDate != '') {
				if (isset($_REQUEST['pdetails_cal'])) {
					$arrivalDate = JSCalmakeInputDates($arrivalDate, true);
				}

				$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] = $arrivalDate;
			}
		}

		if (isset($_REQUEST[ 'departureDate' ])) {
			$departureDate = jomresGetParam($_REQUEST, 'departureDate', '');

			$test = explode("-", $departureDate);
			if (count($test) ==3) { // It's an api date, the date needs to be converted from YYYY-MM-DD to YYYY/MM/DD format so that existing functionality can work with the booking's dates
				$departureDate = str_replace("-", '/', $departureDate);
			}

			if ($departureDate != '') {
				$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'] = $departureDate;
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
