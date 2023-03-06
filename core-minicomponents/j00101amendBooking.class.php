<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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
	 * Sets up the $tmpBookingHandler with data required to amend an existing booking, then displays the original booking information at the top of the booking form.
	 *
	 */

class j00101amendBooking
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
			$this->template_touchable = true;

			return;
		}
		$mrConfig = getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$selectedProperty = (int)jomresGetParam($_REQUEST, 'selectedProperty', 0);

		if (!$thisJRUser->userIsManager || ($selectedProperty > 0 && !in_array($selectedProperty, $thisJRUser->authorisedProperties))) {
			return;
		}

		$amend = intval(jomresGetParam($_REQUEST, 'amend', 0));

		if ($amend) {
			$contract_uid = intval(jomresGetParam($_REQUEST, 'contractuid', 0));
			$selectedProperty = intval(jomresGetParam($_REQUEST, 'selectedProperty', 0));

			if (isset($tmpBookingHandler->tmpbooking[ 'override_contract_deposit' ])) {
				$tmpBookingHandler->updateBookingField('override_contract_deposit', '');
			}

			if (isset($tmpBookingHandler->tmpbooking[ 'override_contract_total' ])) {
				$tmpBookingHandler->updateBookingField('override_contract_total', '');
			}

			if (isset($contract_uid) && !empty($contract_uid)) {
				$tmpBookingHandler->updateBookingField('amend_contract', true);
				$tmpBookingHandler->updateBookingField('amend_contractuid', $contract_uid);

				jr_import('jomres_encryption');
				$jomres_encryption = new jomres_encryption();
	
				$query = "SELECT * FROM #__jomres_contracts WHERE contract_uid = '".(int) $contract_uid."' LIMIT 1";
				$contract = doSelectSql($query);
				
				$original_rooms = array();
				
				foreach ($contract as $c) {
					$tmpBookingHandler->updateBookingField('amend_deposit_required', $c->deposit_required);
					$tmpBookingHandler->updateBookingField('amend_deposit_paid', $c->deposit_paid);
					$tmpBookingHandler->updateBookingField('amend_property_uid', $c->property_uid);
					$tmpBookingHandler->updateBookingField('amend_contract_total', $c->contract_total);
					$tmpBookingHandler->updateBookingField('amend_contract_extras', $c->extrasvalue);
					$tmpBookingHandler->updateBookingField('amend_contract_extrasquantities', $c->extrasquantities);
					$tmpBookingHandler->updateBookingField('amend_contract_tax', $c->tax);
					$tmpBookingHandler->updateBookingField('amend_contract_roomtotal', $c->room_total);
					$tmpBookingHandler->updateBookingField('amend_contract_arrival', $c->arrival);
					$tmpBookingHandler->updateBookingField('amend_contract_departure', $c->departure);
					$tmpBookingHandler->updateBookingField('confirmationSeen', true);

					$variances = $c->rate_rules;

					$varianceArray = explode(',', $variances);
					$totalinparty = 0;
					$tmpBookingHandler->tmpbooking[ 'variancetypes' ] = '';
					$tmpBookingHandler->tmpbooking[ 'varianceuids' ] = '';
					$tmpBookingHandler->tmpbooking[ 'varianceqty' ] = '';
					$tmpBookingHandler->tmpbooking[ 'variancevals' ] = '';
					foreach ($varianceArray as $v) {
						$vDeets = explode('_', $v);
						if ($vDeets[ 0 ] == 'guesttype') {
							$tmpBookingHandler->tmpbooking[ 'variancetypes' ] .= ','.$vDeets[ 0 ];
							$tmpBookingHandler->tmpbooking[ 'varianceuids' ] .= ','.$vDeets[ 1 ];
							$tmpBookingHandler->tmpbooking[ 'varianceqty' ] .= ','.$vDeets[ 2 ];
							$tmpBookingHandler->tmpbooking[ 'variancevals' ] .= ','.$vDeets[ 3 ];
							$totalinparty = $totalinparty + $vDeets[ 2 ];
						}
					}

					$query = "SELECT * FROM #__jomres_guests WHERE guests_uid = '".(int) $c->guest_uid."' LIMIT 1";
					$guest = doSelectSql($query);
					foreach ($guest as $g) {
						$tmpBookingHandler->tmpguest[ 'guests_uid' ] = $g->guests_uid;
						$tmpBookingHandler->tmpguest[ 'mos_userid' ] = $g->mos_userid;
						$tmpBookingHandler->tmpguest[ 'existing_id' ] = $g->guests_uid;
						$tmpBookingHandler->tmpguest[ 'firstname' ] = getEscaped($jomres_encryption->decrypt($g->enc_firstname));
						$tmpBookingHandler->tmpguest[ 'surname' ] = getEscaped($jomres_encryption->decrypt($g->enc_surname));
						$tmpBookingHandler->tmpguest[ 'house' ] = getEscaped($jomres_encryption->decrypt($g->enc_house));
						$tmpBookingHandler->tmpguest[ 'street' ] = getEscaped($jomres_encryption->decrypt($g->enc_street));
						$tmpBookingHandler->tmpguest[ 'town' ] = getEscaped($jomres_encryption->decrypt($g->enc_town));
						$tmpBookingHandler->tmpguest[ 'region' ] = getEscaped($jomres_encryption->decrypt($g->enc_county));
						$tmpBookingHandler->tmpguest[ 'country' ] = getEscaped($jomres_encryption->decrypt($g->enc_country));
						$tmpBookingHandler->tmpguest[ 'postcode' ] = getEscaped($jomres_encryption->decrypt($g->enc_postcode));
						$tmpBookingHandler->tmpguest[ 'tel_landline' ] = getEscaped($jomres_encryption->decrypt($g->enc_tel_landline));
						$tmpBookingHandler->tmpguest[ 'tel_mobile' ] = getEscaped($jomres_encryption->decrypt($g->enc_tel_mobile));
						$tmpBookingHandler->tmpguest[ 'email' ] = getEscaped($jomres_encryption->decrypt($g->enc_email));
					}

					if ($c->property_uid != $selectedProperty) {
						//Can only carry over certain fields if the property is changed
						$tmpBookingHandler->tmpbooking[ 'rate_pernight' ] = '';
						$tmpBookingHandler->tmpbooking[ 'variancetypes' ] = '';
						$tmpBookingHandler->tmpbooking[ 'varianceuids' ] = '';
						$tmpBookingHandler->tmpbooking[ 'varianceqty' ] = '';
						$tmpBookingHandler->tmpbooking[ 'variancevals' ] = '';
						$tmpBookingHandler->tmpbooking[ 'coupon_id' ] = '';
						$tmpBookingHandler->tmpbooking[ 'coupon' ] = '';
						$tmpBookingHandler->tmpbooking[ 'lastminute_id' ] = '';
						$tmpBookingHandler->tmpbooking[ 'arrivalDate' ] = (string) $c->arrival;
						$tmpBookingHandler->tmpbooking[ 'departureDate' ] = (string) $c->departure;
						$tmpBookingHandler->tmpbooking[ 'stayDays' ] = '';
						$tmpBookingHandler->tmpbooking[ 'dateRangeString' ] = (string) $c->date_range_string;
						$tmpBookingHandler->tmpbooking[ 'guests_uid' ] = (int) $c->guest_uid;
						$tmpBookingHandler->tmpbooking[ 'property_uid' ] = (int) $selectedProperty;
						$tmpBookingHandler->tmpbooking[ 'rates_uid' ] = '';
						$tmpBookingHandler->tmpbooking[ 'resource' ] = '';
						$tmpBookingHandler->tmpbooking[ 'single_person_suppliment' ] = '';
						$tmpBookingHandler->tmpbooking[ 'deposit_required' ] = (float) $c->deposit_required;
						$tmpBookingHandler->tmpbooking[ 'contract_total' ] = (float) $c->contract_total;
						$tmpBookingHandler->tmpbooking[ 'extrasvalue' ] = '';
						$tmpBookingHandler->tmpbooking[ 'extras' ] = '';
						$tmpBookingHandler->tmpbooking[ 'total_discount' ] = '';
						$tmpBookingHandler->tmpbooking[ 'depositpaidsuccessfully' ] = (int) $c->deposit_paid;
						$tmpBookingHandler->tmpbooking[ 'tax' ] = '';
						$tmpBookingHandler->tmpbooking[ 'booker_class' ] = '100';
						$tmpBookingHandler->tmpbooking[ 'ok_to_book' ] = false;
						$tmpBookingHandler->tmpbooking[ 'beds_available' ] = '';
						$tmpBookingHandler->tmpbooking[ 'referrer' ] = '';
						$tmpBookingHandler->tmpbooking[ 'error_log' ] = (string) $c->special_reqs;
						$tmpBookingHandler->tmpbooking[ 'total_in_party' ] = (int) $totalinparty;
						$tmpBookingHandler->tmpbooking[ 'room_total' ] = (float) $c->room_total;
						$tmpBookingHandler->tmpbooking[ 'lang' ] = (string) get_showtime('lang');
						$tmpBookingHandler->tmpbooking[ 'timestamp' ] = '';
						$tmpBookingHandler->tmpbooking[ 'mininterval' ] = '';
					} else {
						//Same property so carry over all possible fields
						
						$original_room_ids = array();
						$original_rooms_bang = array();
						if (isset($c->rooms_tariffs)) {
							$original_rooms_bang = explode(",", $c->rooms_tariffs);
							foreach ($original_rooms_bang as $room_tariff_combo) {
								$combo_bang = explode("^", $room_tariff_combo);
								$original_room_ids[] = $combo_bang[0];
							}
							
							$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
							$basic_room_details->get_all_rooms($c->property_uid);
							
							foreach ($original_room_ids as $room_id) {
								$or = array ();
								$or['ORIGINAL_ROOM'] = $basic_room_details->rooms[$room_id]['room_number'].' '.$basic_room_details->rooms[$room_id]['room_name'];
								
								$original_rooms[] = $or;
							}
						}
						
						$tmpBookingHandler->tmpbooking[ 'requestedRoom' ] = '';
						$tmpBookingHandler->tmpbooking[ 'rate_pernight' ] = '';
						if ((int) $c->coupon_id > 0) {
							$tmpBookingHandler->tmpbooking[ 'coupon_id' ] = (int) $c->coupon_id;
							if (isset($c->coupon)) {
								$tmpBookingHandler->tmpbooking[ 'coupon' ] = (string) $c->coupon;
							}
						} else {
							$tmpBookingHandler->tmpbooking[ 'coupon_id' ] = '';
							$tmpBookingHandler->tmpbooking[ 'coupon' ] = '';
						}

						$tmpBookingHandler->tmpbooking[ 'lastminute_id' ] = '';
						$tmpBookingHandler->tmpbooking[ 'arrivalDate' ] = (string) $c->arrival;
						$tmpBookingHandler->tmpbooking[ 'departureDate' ] = (string) $c->departure;
						$tmpBookingHandler->tmpbooking[ 'stayDays' ] = ''; //hbw
						$tmpBookingHandler->tmpbooking[ 'dateRangeString' ] = (string) $c->date_range_string;
						$tmpBookingHandler->tmpbooking[ 'guests_uid' ] = (int) $c->guest_uid;
						$tmpBookingHandler->tmpbooking[ 'property_uid' ] = (int) $selectedProperty;
						$tmpBookingHandler->tmpbooking[ 'rates_uid' ] = $c->rates_uid;
						$tmpBookingHandler->tmpbooking[ 'resource' ] = '';
						$tmpBookingHandler->tmpbooking[ 'single_person_suppliment' ] = (float) $c->single_person_suppliment;
						$tmpBookingHandler->tmpbooking[ 'deposit_required' ] = (int) $c->deposit_required;
						$tmpBookingHandler->tmpbooking[ 'contract_total' ] = (float) $c->contract_total;
						$tmpBookingHandler->tmpbooking[ 'extrasvalue' ] = (float) $c->extrasvalue;
						$tmpBookingHandler->tmpbooking[ 'extras' ] = (string) $c->extras;
						$tmpBookingHandler->tmpbooking[ 'extrasquantities' ] = unserialize($c->extrasquantities);
						$tmpBookingHandler->tmpbooking[ 'total_discount' ] = $c->discount;
						$tmpBookingHandler->tmpbooking[ 'depositpaidsuccessfully' ] = (string) $c->deposit_paid;
						$tmpBookingHandler->tmpbooking[ 'tax' ] = (float) $c->tax;
						$tmpBookingHandler->tmpbooking[ 'booker_class' ] = '100';
						$tmpBookingHandler->tmpbooking[ 'ok_to_book' ] = false;
						$tmpBookingHandler->tmpbooking[ 'beds_available' ] = '';
						$tmpBookingHandler->tmpbooking[ 'referrer' ] = '';
						$tmpBookingHandler->tmpbooking[ 'error_log' ] = (string) $c->special_reqs;
						$tmpBookingHandler->tmpbooking[ 'total_in_party' ] = (int) $totalinparty;
						$tmpBookingHandler->tmpbooking[ 'room_total' ] = (string) $c->room_total;
						$tmpBookingHandler->tmpbooking[ 'lang' ] = (string) get_showtime('lang');
						$tmpBookingHandler->tmpbooking[ 'timestamp' ] = '';
						$tmpBookingHandler->tmpbooking[ 'mininterval' ] = '';
					}
				}

				$currfmt = jomres_singleton_abstract::getInstance('jomres_currency_format');
				$mrConfig = getPropertySpecificSettings($tmpBookingHandler->tmpbooking[ 'amend_property_uid' ]);
				$output[ 'HEADER' ] = jr_gettext('_JOMCOMP_AMEND_HEADER', '_JOMCOMP_AMEND_HEADER');
				$output[ 'HTOTAL' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL', '_JOMRES_AJAXFORM_BILLING_TOTAL');
				$output[ 'TOTAL' ] = output_price($c->contract_total);
				$output[ 'HROOMTOTAL' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL');
				$output[ 'ROOMTOTAL' ] = output_price($c->room_total);
				$output[ 'HARRIVAL' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL');
				$output[ 'ARRIVAL' ] = outputDate($c->arrival);
				$output[ 'HDEPARTURE' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE');
				$output[ 'DEPARTURE' ] = outputDate($c->departure);

				if ($totalinparty != 0) {
					$output[ 'HTOTALINPARTY' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY');
					$output[ 'TOTALINPARTY' ] = $totalinparty;
				}

				if ($mrConfig[ 'showExtras' ] == '1') {
					$output[ 'HEXTRAS' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS', '_JOMRES_AJAXFORM_BILLING_EXTRAS');
					$output[ 'EXTRAS' ] = output_price($c->extrasvalue);
				}

				if ($mrConfig[ 'roomTaxYesNo' ] == '1' || $mrConfig[ 'euroTaxYesNo' ] == '1') {
					$output[ 'HTAX' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX', '_JOMRES_AJAXFORM_BILLING_TAX');
					$output[ 'TAX' ] = output_price($c->tax);
				}

				if ($c->discount != 0) {
					$output[ 'HDISCOUNT' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT', '_JOMRES_AJAXFORM_BILLING_DISCOUNT');
					$output[ 'DISCOUNT' ] = output_price($c->discount);
				}

				if ($mrConfig[ 'chargeDepositYesNo' ] == '1') {
					if ($c->deposit_paid > 0) {
						$output[ 'HDEPOSIT' ] = jr_gettext('_JOMCOMP_AMEND_DEPOSITPAID', '_JOMCOMP_AMEND_DEPOSITPAID');
					} else {
						$output[ 'HDEPOSIT' ] = jr_gettext('_JOMCOMP_AMEND_DEPOSITDUE', '_JOMCOMP_AMEND_DEPOSITDUE');
					}

					$output[ 'DEPOSIT' ] = output_price($tmpBookingHandler->tmpbooking[ 'amend_deposit_required' ]);
				}

				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();

				$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
				$tmpl->readTemplatesFromInput('original_details.html');
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->addRows('original_rooms', $original_rooms);
				$tmpl->displayParsedTemplate();
			}
		} else {
			//Not amendment reset field
			if (isset($tmpBookingHandler->tmpbooking[ 'amend_contract' ])) {
				$tmpBookingHandler->updateBookingField('amend_contract', false);
			}

			if (isset($tmpBookingHandler->tmpbooking[ 'override_contract_deposit' ])) {
				$tmpBookingHandler->updateBookingField('override_contract_deposit', '');
			}

			if (isset($tmpBookingHandler->tmpbooking[ 'override_contract_total' ])) {
				$tmpBookingHandler->updateBookingField('override_contract_total', '');
			}
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMCOMP_AMEND_HEADER', '_JOMCOMP_AMEND_HEADER');
		$output[ ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL', '_JOMRES_AJAXFORM_BILLING_TOTAL');
		$output[ ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE');
		$output[ ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY');
		$output[ ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS', '_JOMRES_AJAXFORM_BILLING_EXTRAS');
		$output[ ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX', '_JOMRES_AJAXFORM_BILLING_TAX');
		$output[ ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT', '_JOMRES_AJAXFORM_BILLING_DISCOUNT');
		$output[ ] = jr_gettext('_JOMCOMP_AMEND_DEPOSITPAID', '_JOMCOMP_AMEND_DEPOSITPAID');
		$output[ ] = jr_gettext('_JOMCOMP_AMEND_DEPOSITDUE', '_JOMCOMP_AMEND_DEPOSITDUE');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

	/**
	 * Must be included in every mini-component.
	 #
	 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	 */
	public function getRetVals()
	{
		return null;
	}
}
