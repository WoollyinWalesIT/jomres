<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_property_list_prices
{
	public function __construct()
	{
		$this->lowest_prices = array();
		$this->stayDays = array();
		$this->today = date('Y/m/d');
		$this->arrivalDate = date('Y/m/d', strtotime($this->today.'+1 day'));
		$this->departureDate = date('Y/m/d', strtotime($this->arrivalDate.'+1 day'));
	}

	public function __set($setting, $value)
	{
		$this->$setting = $value;

		return true;
	}

	public function __get($setting)
	{
		return $this->$setting;
	}

	public function gather_lowest_prices_multi($property_uids = array(), $lowest_ever = false, $hide_rpn = false)
	{
		// First we need to extract those uids that are not already in the $this->lowest_prices var, this (may) reduce the number of properties we need to query
		$temp_array = array();
		foreach ($property_uids as $id) {
			if (!array_key_exists($id, $this->lowest_prices)) {
				$temp_array[ ] = $id;
			}
		}
		$property_uids = $temp_array;
		unset($temp_array);

		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$customTextObj = jomres_singleton_abstract::getInstance('custom_text');
		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data_multi($property_uids);

		if (!empty($property_uids)) {
			$property_uids_to_query = array();

			//save the original property uid and type so we can reset this after we`re done
			$original_property_uid = get_showtime('property_uid');
			$original_property_type = get_showtime('property_type');

			foreach ($property_uids as $property_uid) {
				$plugin_will_provide_lowest_price = false;
				$MiniComponents->triggerEvent('07015', array('property_uid' => $property_uid)); // Optional
				$mcOutput = $MiniComponents->getAllEventPointsData('07015');
				if (!empty($mcOutput)) {
					foreach ($mcOutput as $key => $val) {
						if ($val == true) {
							$plugin_will_provide_lowest_price = true;
							$controlling_plugin = $key;
						}
					}
				}

				$output_lowest = false;
				if ($plugin_will_provide_lowest_price) {
					$output_lowest = true;
					$plugin_price = $MiniComponents->specificEvent('07016', $controlling_plugin, array('property_uid' => $property_uid));
					if (!is_null($plugin_price)) {
						$this->lowest_prices[$property_uid]['PRE_TEXT'] = $plugin_price[ 'PRE_TEXT' ];
						$this->lowest_prices[$property_uid]['PRICE'] = $plugin_price[ 'PRICE' ];
						$this->lowest_prices[$property_uid]['POST_TEXT'] = $plugin_price[ 'POST_TEXT' ];
						$this->lowest_prices[$property_uid]['RAW_PRICE'] = preg_replace('/([^0-9\\.])/i', '', $plugin_price[ 'PRICE' ]);
					}
				} else {
					$property_uids_to_query[] = $property_uid;
				}
			}

			if (!empty($property_uids_to_query)) {
				$pricesFromArray = array();
				$searchDate = date('Y/m/d');
				$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

				//get arrival date
				if (isset($_REQUEST[ 'arrivalDate' ]) && $_REQUEST[ 'arrivalDate' ] != '') {
					$this->arrivalDate = JSCalConvertInputDates(jomresGetParam($_REQUEST, 'arrivalDate', ''));
				} elseif (!empty($tmpBookingHandler->tmpsearch_data)) {
					if (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) && trim($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) != '') {
						$this->arrivalDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ];
					} elseif (isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate']) && trim($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] != '')) {
						$this->arrivalDate = JSCalConvertInputDates($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'], $siteCal = true);
					}
				}

				//get departure date
				if (isset($_REQUEST[ 'departureDate' ]) && $_REQUEST[ 'departureDate' ] != '') {
					if ( $_REQUEST[ 'arrivalDate' ] != '' && $_REQUEST[ 'departureDate' ] == $_REQUEST[ 'arrivalDate' ] )  {
						$_REQUEST[ 'departureDate' ] =JSCalmakeInputDates(date( "Y/m/d", strtotime( JSCalConvertInputDates( $_REQUEST[ 'arrivalDate' ])." +1 day" ) ));
					}
					$this->departureDate = JSCalConvertInputDates(jomresGetParam($_REQUEST, 'departureDate', ''));

				} elseif (!empty($tmpBookingHandler->tmpsearch_data)) {
					if (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ]) && trim($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ]) != '') {
						$this->departureDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ];
					} elseif (isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate']) && trim($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'] != '')) {
						$this->departureDate = JSCalConvertInputDates($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'], $siteCal = true);
					}
				}

				$this->stayDays = dateDiff('d', $this->arrivalDate, $this->departureDate);

				$clause = '';
				if (!$lowest_ever) {
					$clause = "AND DATE_FORMAT('".$this->arrivalDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d')";
				}

				$query = 'SELECT property_uid, roomrateperday FROM #__jomres_rates WHERE property_uid IN ('.jomres_implode($property_uids).") AND roomrateperday > 0 $clause ";
				$tariffList = doSelectSql($query);

				foreach ($property_uids_to_query as $property_uid) {
					$pre_text = '';
					$post_text = '';
					$price = 0.00;
					$pricesFromArray = array();
					$grand_total = 0.00;

					set_showtime('property_uid', $property_uid);
					set_showtime('property_type', $basic_property_details->multi_query_result[ $property_uid ]['property_type']);

					$basic_property_details->gather_data($property_uid);

					$mrConfig = getPropertySpecificSettings($property_uid);

					$multiplier = 1;
					if (!isset($mrConfig[ 'booking_form_daily_weekly_monthly' ])) { // This shouldn't be needed, as the setting is automatically pulled from jomres_config.php, but there's always one weird server...
						$mrConfig[ 'booking_form_daily_weekly_monthly' ] = 'D';
					}

					switch ($mrConfig[ 'booking_form_daily_weekly_monthly' ]) {
						case 'D':
							$multiplier = 1;
							break;
						case 'W':
							if ($mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] != '1') {
								$multiplier = 7;
							}
							break;
						case 'M':
							$multiplier = 30;
							break;
						}

					if (!empty($tariffList)) {
						foreach ($tariffList as $t) {
							if (!isset($pricesFromArray[ $t->property_uid ])) {
								$pricesFromArray[ $t->property_uid ] = $t->roomrateperday;
							} elseif (isset($pricesFromArray[ $t->property_uid ]) && $pricesFromArray[ $t->property_uid ] > $t->roomrateperday) {
								$pricesFromArray[ $t->property_uid ] = $t->roomrateperday;
							}
						}
	
						if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
							if (isset($pricesFromArray[ $property_uid ])) {
								if ($mrConfig[ 'prices_inclusive' ] == '0') {
									$raw_price = $basic_property_details->get_gross_accommodation_price($pricesFromArray[ $property_uid ], $property_uid) * $multiplier;
									$price = output_price($basic_property_details->get_gross_accommodation_price($pricesFromArray[ $property_uid ], $property_uid) * $multiplier, '', true, true);
									$price_no_conversion = output_price($basic_property_details->get_gross_accommodation_price($pricesFromArray[ $property_uid ], $property_uid) * $multiplier, '', false, true);
								} else {
									$raw_price = $pricesFromArray[ $property_uid ] * $multiplier;
									$price = output_price($pricesFromArray[ $property_uid ] * $multiplier, '', true, true);
									$price_no_conversion = output_price($pricesFromArray[ $property_uid ] * $multiplier, '', false, true);
								}

								//grand total including extras
								if ((int) $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == 1 && (int) $mrConfig[ 'tariffmode' ] == 1) {
									$grand_total = output_price(((($raw_price / 7) / $multiplier) * $this->stayDays), '');
								} else {
									$grand_total = output_price((($raw_price / $multiplier) * $this->stayDays), '');
								}

								if ($mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == '1' && $mrConfig[ 'tariffmode' ] == '1') {
									$post_text = '&nbsp;'.jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK');
								} else {
									if ($mrConfig[ 'wholeday_booking' ] == '1') {
										if ($mrConfig[ 'perPersonPerNight' ] == '0') {
											$post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY');
										} else {
											$post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY');
										}
									} else {
										switch ($mrConfig[ 'booking_form_daily_weekly_monthly' ]) {
											case 'D':
												if ($mrConfig[ 'wholeday_booking' ] == '1') {
													$post_text = jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY');
												} else {
													if ($mrConfig[ 'perPersonPerNight' ] == '0') {
														$post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PN', '_JOMRES_FRONT_TARIFFS_PN');
													} else {
														$post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN', '_JOMRES_FRONT_TARIFFS_PPPN');
													}
												}
												break;
											case 'W':
												$post_text = jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY');
												break;
											case 'M':
												$post_text = jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY');
												break;
											}
									}
								}
								$pre_text = jr_gettext('_JOMRES_TARIFFSFROM', '_JOMRES_TARIFFSFROM', false, false);
							} else {
								if ($mrConfig['poa_price'] != '') {
									$poa_price = (float)$mrConfig['poa_price'];
									$pre_text = '';
									$price = output_price($poa_price);
									$raw_price = $poa_price;
									$grand_total = output_price((($raw_price / $multiplier) * $this->stayDays), '');
									$price_no_conversion = $poa_price;
									$post_text = '';
								}  else {
									$pre_text = '';
									$price = jr_gettext('_JOMRES_PRICE_ON_APPLICATION', '_JOMRES_PRICE_ON_APPLICATION', '', true, false);
									$post_text = '';
								}
							

							}
						} else {
							$pre_text = jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE', '_JOMRES_COM_MR_EXTRA_PRICE');
							$price = output_price($basic_property_details->real_estate_property_price, '', true, false);
							$raw_price = $basic_property_details->real_estate_property_price;
							$price_no_conversion = output_price($basic_property_details->real_estate_property_price, '', false, true);
							$post_text = '';
						}
					} else {
						if ($basic_property_details->real_estate_property_price == 0) {
								if ($mrConfig['poa_price'] != '') {
									$poa_price = (float)$mrConfig['poa_price'];
									$pre_text = '';
									$price = output_price($poa_price);
									$raw_price = $poa_price;
									$grand_total = output_price((($raw_price / $multiplier) * $this->stayDays), '');
									$price_no_conversion = $poa_price;
									$post_text = '';
								}  else {
									$pre_text = '';
									$price = jr_gettext('_JOMRES_PRICE_ON_APPLICATION', '_JOMRES_PRICE_ON_APPLICATION', '', true, false);
									$post_text = '';
								}
						} else {
							$pre_text = jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE', '_JOMRES_COM_MR_EXTRA_PRICE', '', true, false);
							$price = output_price($basic_property_details->real_estate_property_price);
							$raw_price = $basic_property_details->real_estate_property_price;
							$price_no_conversion = output_price($basic_property_details->real_estate_property_price, '', false, true);
							$post_text = '';
						}
					}
					if ($price == jr_gettext('_JOMRES_PRICE_ON_APPLICATION', '_JOMRES_PRICE_ON_APPLICATION', '', true, false)) {
						$raw_price = -1;
						$price_no_conversion = -1;
					}

					$this->lowest_prices[$property_uid] = array('PRE_TEXT' => $pre_text, 'PRICE' => $price, 'POST_TEXT' => $post_text, 'RAW_PRICE' => $raw_price, 'PRICE_NOCONVERSION' => $price_no_conversion, 'PRICE_CUMULATIVE' => $grand_total);
				}
			}

			//set back the initial property type and property uid
			set_showtime('property_uid', $original_property_uid);
			set_showtime('property_type', $original_property_type);
		}

		return $this->lowest_prices;
	}
}
