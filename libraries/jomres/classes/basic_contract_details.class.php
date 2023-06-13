<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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
	 *          A utility class for getting information about a booking
	 */

#[AllowDynamicProperties]

/*
 *
 */
class basic_contract_details
{

	/**
	 *
	 * Constructor. Sets up the encryption class which is used later to decrypt guest PII
	 *
	 */

	public function __construct()
	{
		$this->contract = array();
		
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
	}
	
	/**
	 *
	 * Pull booking information from the db
	 *
	 */

	public function gather_data($contract_uid = 0, $defaultProperty = 0)
	{
		if ($contract_uid == 0) {
			throw new Exception('Error: Contract uid not set.');
		}
		if ($defaultProperty == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		if (array_key_exists($contract_uid, $this->contract)) {
			return $this->contract[$contract_uid];
		}

		//contract and guest data combined into a single query
		$query = "SELECT 
						a.contract_uid,
						a.arrival,
						a.departure,
						a.guest_uid,
						a.rate_rules,
						a.rooms_tariffs,
						a.deposit_paid,
						a.contract_total,
						a.deposit_ref,
						a.payment_ref,
						a.special_reqs,
						a.deposit_required,
						a.date_range_string,
						a.booked_in,
						a.true_arrival,
						a.property_uid,
						a.single_person_suppliment,
						a.extras,
						a.extrasquantities,
						a.extrasvalue,
						a.tax,
						a.tag,
						a.timestamp,
						a.room_total,
						a.discount,
						a.currency_code,
						a.adults,
						a.children,
						a.cancelled,
						a.cancelled_timestamp,
						a.cancelled_reason,
						a.discount_details,
						a.username,
						a.coupon_id,
						a.bookedout,
						a.bookedout_timestamp,
						a.invoice_uid,
						a.channel_manager_booking,
						a.approved,
						a.booking_data_archive_id,
						a.secret_key,
						a.booking_language,
						a.last_changed,
						a.noshow_flag,
						a.network_stats,
						a.referrer,
						b.mos_userid,
						b.enc_firstname,
						b.enc_surname,
						b.enc_house,
						b.enc_street,
						b.enc_town,
						b.enc_county,
						b.enc_country,
						b.enc_postcode,
						b.enc_tel_landline,
						b.enc_tel_mobile,
						b.enc_email,
						b.discount,
						b.enc_vat_number,
						b.vat_number_validated,
						b.vat_number_validation_response
					FROM #__jomres_contracts a  
					LEFT JOIN #__jomres_guests b ON a.guest_uid = b.guests_uid 
					WHERE a.contract_uid = '" .(int) $contract_uid."' AND a.property_uid = '".(int) $defaultProperty."' ";
		$contractData = doSelectSql($query);

		if (empty($contractData)) {
			return false;
		}

		foreach ($contractData as $contract) {
			//contract details
			$this->contract[$contract_uid]['contractdeets']['contract_uid'] = $contract->contract_uid;
			$this->contract[$contract_uid]['contractdeets']['arrival'] = $contract->arrival;
			$this->contract[$contract_uid]['contractdeets']['departure'] = $contract->departure;
			$this->contract[$contract_uid]['contractdeets']['guest_uid'] = $contract->guest_uid;
			$this->contract[$contract_uid]['contractdeets']['rate_rules'] = $contract->rate_rules;
			$this->contract[$contract_uid]['contractdeets']['rooms_tariffs'] = $contract->rooms_tariffs;
			$this->contract[$contract_uid]['contractdeets']['deposit_paid'] = $contract->deposit_paid;
			$this->contract[$contract_uid]['contractdeets']['contract_total'] = $contract->contract_total;
			$this->contract[$contract_uid]['contractdeets']['deposit_ref'] = $contract->deposit_ref;
			$this->contract[$contract_uid]['contractdeets']['payment_ref'] = $contract->payment_ref;
			$this->contract[$contract_uid]['contractdeets']['special_reqs'] = $contract->special_reqs;
			$this->contract[$contract_uid]['contractdeets']['deposit_required'] = $contract->deposit_required;
			$this->contract[$contract_uid]['contractdeets']['date_range_string'] = $contract->date_range_string;
			$this->contract[$contract_uid]['contractdeets']['booked_in'] = $contract->booked_in;
			$this->contract[$contract_uid]['contractdeets']['true_arrival'] = $contract->true_arrival;
			$this->contract[$contract_uid]['contractdeets']['property_uid'] = $contract->property_uid;
			$this->contract[$contract_uid]['contractdeets']['single_person_suppliment'] = $contract->single_person_suppliment;
			$this->contract[$contract_uid]['contractdeets']['extras'] = $contract->extras;
			$this->contract[$contract_uid]['contractdeets']['extrasquantities'] = unserialize($contract->extrasquantities);
			$this->contract[$contract_uid]['contractdeets']['extrasvalue'] = $contract->extrasvalue;
			$this->contract[$contract_uid]['contractdeets']['tax'] = $contract->tax;
			$this->contract[$contract_uid]['contractdeets']['tag'] = $contract->tag;
			$this->contract[$contract_uid]['contractdeets']['timestamp'] = $contract->timestamp;
			$this->contract[$contract_uid]['contractdeets']['room_total'] = $contract->room_total;
			$this->contract[$contract_uid]['contractdeets']['discount'] = $contract->discount;
			$this->contract[$contract_uid]['contractdeets']['currency_code'] = $contract->currency_code;
			$this->contract[$contract_uid]['contractdeets']['adults'] = $contract->adults;
			$this->contract[$contract_uid]['contractdeets']['children'] = $contract->children;
			$this->contract[$contract_uid]['contractdeets']['cancelled'] = $contract->cancelled;
			$this->contract[$contract_uid]['contractdeets']['cancelled_timestamp'] = $contract->cancelled_timestamp;
			$this->contract[$contract_uid]['contractdeets']['cancelled_reason'] = $contract->cancelled_reason;
			$this->contract[$contract_uid]['contractdeets']['discount_details'] = $contract->discount_details;
			$this->contract[$contract_uid]['contractdeets']['username'] = $contract->username;
			$this->contract[$contract_uid]['contractdeets']['coupon_id'] = $contract->coupon_id;
			$this->contract[$contract_uid]['contractdeets']['bookedout'] = $contract->bookedout;
			$this->contract[$contract_uid]['contractdeets']['bookedout_timestamp'] = $contract->bookedout_timestamp;
			$this->contract[$contract_uid]['contractdeets']['invoice_uid'] = $contract->invoice_uid;
			$this->contract[$contract_uid]['contractdeets']['channel_manager_booking'] = $contract->channel_manager_booking;
			$this->contract[$contract_uid]['contractdeets']['approved'] = $contract->approved;
			$this->contract[$contract_uid]['contractdeets']['secret_key'] = $contract->secret_key;
			$this->contract[$contract_uid]['contractdeets']['booking_language'] = $contract->booking_language;
			$this->contract[$contract_uid]['contractdeets']['last_changed'] = $contract->last_changed ;
			$this->contract[$contract_uid]['contractdeets']['noshow_flag'] = $contract->noshow_flag ;
			$this->contract[$contract_uid]['contractdeets']['network_stats'] = $contract->network_stats ;
			$this->contract[$contract_uid]['contractdeets']['referrer'] = $contract->referrer;
			$this->contract[$contract_uid]['contractdeets']['booking_data_archive_id'] = $contract->booking_data_archive_id;

			//guest details
			$this->contract[$contract_uid]['guestdeets']['image'] = JOMRES_IMAGES_RELPATH.'noimage.svg';
			if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.'userimage_'.(int) $contract->mos_userid.'.jpg')) {
				$this->contract[$contract_uid]['guestdeets']['image'] = JOMRES_IMAGELOCATION_RELPATH.'userimages/userimage_'.(int) $contract->mos_userid.'_thumbnail.jpg';
			}

			$this->contract[$contract_uid]['guestdeets']['firstname'] = $this->jomres_encryption->decrypt($contract->enc_firstname);
			$this->contract[$contract_uid]['guestdeets']['surname'] = $this->jomres_encryption->decrypt($contract->enc_surname);
			$this->contract[$contract_uid]['guestdeets']['house'] = $this->jomres_encryption->decrypt($contract->enc_house);
			$this->contract[$contract_uid]['guestdeets']['street'] = $this->jomres_encryption->decrypt($contract->enc_street);
			$this->contract[$contract_uid]['guestdeets']['town'] = $this->jomres_encryption->decrypt($contract->enc_town);
			if (is_numeric($this->jomres_encryption->decrypt($contract->enc_county))) {
				$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
				$this->contract[$contract_uid]['guestdeets']['county'] = jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$this->jomres_encryption->decrypt($contract->enc_county), $jomres_regions->get_region_name($this->jomres_encryption->decrypt($contract->enc_county)), false);
			} else {
				$this->contract[$contract_uid]['guestdeets']['county'] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION'.$this->jomres_encryption->decrypt($contract->enc_county), $this->jomres_encryption->decrypt($contract->enc_county), false);
			}
			$this->contract[$contract_uid]['guestdeets']['country'] = getSimpleCountry($this->jomres_encryption->decrypt($contract->enc_country));
			$this->contract[$contract_uid]['guestdeets']['country_code'] = $this->jomres_encryption->decrypt($contract->enc_country);

			$this->contract[$contract_uid]['guestdeets']['postcode'] = $this->jomres_encryption->decrypt($contract->enc_postcode);
			$this->contract[$contract_uid]['guestdeets']['tel_landline'] = $this->jomres_encryption->decrypt($contract->enc_tel_landline);
			$this->contract[$contract_uid]['guestdeets']['tel_mobile'] = $this->jomres_encryption->decrypt($contract->enc_tel_mobile);
			$this->contract[$contract_uid]['guestdeets']['email'] = $this->jomres_encryption->decrypt($contract->enc_email);
			$this->contract[$contract_uid]['guestdeets']['discount'] = $contract->discount;
			$this->contract[$contract_uid]['guestdeets']['vat_number'] = $this->jomres_encryption->decrypt($contract->enc_vat_number);
			$this->contract[$contract_uid]['guestdeets']['vat_number_validated'] = $contract->vat_number_validated;
			$this->contract[$contract_uid]['guestdeets']['vat_number_validation_response'] = $contract->vat_number_validation_response;
		}

		//extra services data
		$query = "SELECT 
						a.extraservice_uid,
						a.service_description,
						a.service_value,
						a.tax_rate_val,
						a.tax_code,
						a.service_qty
					FROM #__jomres_extraservices a 
					WHERE a.contract_uid = '" .(int) $contract_uid."' ";
		$extraServicesData = doSelectSql($query);

		foreach ($extraServicesData as $extraService) {
			$this->contract[$contract_uid]['extraservice'][$extraService->extraservice_uid]['extraservice_uid'] = $extraService->extraservice_uid;
			$this->contract[$contract_uid]['extraservice'][$extraService->extraservice_uid]['service_description'] = $extraService->service_description;
			$this->contract[$contract_uid]['extraservice'][$extraService->extraservice_uid]['service_value'] = $extraService->service_value;
			$this->contract[$contract_uid]['extraservice'][$extraService->extraservice_uid]['tax_rate_val'] = $extraService->tax_rate_val;
			$this->contract[$contract_uid]['extraservice'][$extraService->extraservice_uid]['tax_code'] = $extraService->tax_code;
			$this->contract[$contract_uid]['extraservice'][$extraService->extraservice_uid]['service_qty'] = $extraService->service_qty;
		}

		//rooms data
		$query = "SELECT  
						DISTINCT(a.room_uid),
						a.black_booking,
						a.reception_booking,
						a.internet_booking,
						b.room_classes_uid,
						b.room_name,
						b.room_number,
						b.room_floor,
						b.max_people,
						b.singleperson_suppliment
					FROM #__jomres_room_bookings a 
					LEFT JOIN #__jomres_rooms b ON a.room_uid = b.room_uid
					WHERE a.contract_uid = '" .(int) $contract_uid."' AND a.property_uid = '".(int) $defaultProperty."' ";
		$roomBookingsData = doSelectSql($query);

		foreach ($roomBookingsData as $roomBooking) {
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['room_uid'] = $roomBooking->room_uid;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['black_booking'] = $roomBooking->black_booking;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['reception_booking'] = $roomBooking->reception_booking;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['internet_booking'] = $roomBooking->internet_booking;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['room_classes_uid'] = $roomBooking->room_classes_uid;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['room_name'] = $roomBooking->room_name;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['room_number'] = $roomBooking->room_number;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['room_floor'] = $roomBooking->room_floor;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['max_people'] = $roomBooking->max_people;
			$this->contract[$contract_uid]['roomdeets'][$roomBooking->room_uid]['singleperson_suppliment'] = $roomBooking->singleperson_suppliment;
		}

		//tariffs data
		$tariffs = array();
		$tariffNames = array();
		$room_and_tariff_info = explode(',', $this->contract[$contract_uid]['contractdeets']['rooms_tariffs']);
		foreach ($room_and_tariff_info as $e) {
			if ($e != '') {
				$rt = explode('^', $e);
				$tariffs[] = $rt[ 1 ];
			}
		}

		if (!empty($tariffs) && $room_and_tariff_info != array(0 => '')) {
			$query = 'SELECT `rates_uid`,`rate_title` FROM #__jomres_rates WHERE `rates_uid` IN ('.jomres_implode($tariffs).') ';
			$tariff_names = doSelectSql($query);

			foreach ($tariff_names as $t) {
				$tariffNames[$t->rates_uid] = $t->rate_title;
			}

			foreach ($room_and_tariff_info as $e) {
				$rt = explode('^', $e);
				if (isset($tariffNames[$rt[1]])) {
					$this->contract[$contract_uid]['roomdeets'][$rt[0]]['rate_title'] = jomres_decode($tariffNames[$rt[1]]);
				} else {
					$this->contract[$contract_uid]['roomdeets'][$rt[0]]['rate_title'] = '';
				}
			}
		}

		//guest types
		$guesttype_ids = array();
		$guesttypeNames = array();
		$varianceArray = explode(',', $this->contract[$contract_uid]['contractdeets']['rate_rules']);
		foreach ($varianceArray as $v) {
			$vDeets = explode('_', $v);
			if ($vDeets[0] == 'guesttype') {
				$guesttype_ids[] = $vDeets[1];
			}
		}

		if (!empty($guesttype_ids)) {
			$query = 'SELECT `id`, `type` FROM #__jomres_customertypes WHERE id IN ('.jomres_implode($guesttype_ids).') ';
			$guesttype_titles = doSelectSql($query);

			foreach ($guesttype_titles as $g) {
				$guesttypeNames[$g->id] = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$g->id, stripslashes($g->type), false);
			}

			foreach ($varianceArray as $v) {
				$vDeets = explode('_', $v);
				if ($vDeets[0] == 'guesttype') {
					$this->contract[$contract_uid]['guesttype'][$vDeets[1]]['id'] = $vDeets[1];
					if (!isset($guesttypeNames[$vDeets[1]])) {
						 $guesttypeNames[$vDeets[1]] = 'Unknown';
					}
					$this->contract[$contract_uid]['guesttype'][$vDeets[1]]['title'] = $guesttypeNames[$vDeets[1]];
					$this->contract[$contract_uid]['guesttype'][$vDeets[1]]['qty'] = $vDeets[2];
					$this->contract[$contract_uid]['guesttype'][$vDeets[1]]['value'] = $vDeets[3];
				}
			}
		} else {
			$this->contract[$contract_uid]['guesttype'] = array();
		}

		//optional extras
		$extras_rows = array();
		$extraOptionsArray = explode(',', $this->contract[$contract_uid]['contractdeets']['extras']);

		if (!empty($extraOptionsArray)) {
			foreach ($extraOptionsArray as $k => $v) {
				if ((int) $v == 0) {
					unset($extraOptionsArray[$k]);
				}
			}

			if (!empty($extraOptionsArray)) {
				$query = "SELECT 
								uid, 
								name,
								price,
								tax_rate 
							FROM #__jomres_extras 
							WHERE property_uid = '" .(int) $defaultProperty."' AND uid IN (".jomres_implode($extraOptionsArray).') 
							ORDER BY name ';
				$extrasList = doSelectSql($query);

				foreach ($extrasList as $e) {
					$this->contract[$contract_uid]['extradeets'][$e->uid]['uid'] = $e->uid;
					$this->contract[$contract_uid]['extradeets'][$e->uid]['name'] = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$e->uid, jomres_decode($e->name));
					$this->contract[$contract_uid]['extradeets'][$e->uid]['price'] = $e->price;
					$this->contract[$contract_uid]['extradeets'][$e->uid]['tax_rate'] = $e->tax_rate;
					$this->contract[$contract_uid]['extradeets'][$e->uid]['qty'] = $this->contract[$contract_uid]['contractdeets']['extrasquantities'][$e->uid];
				}
			}
		} else {
			$this->contract[$contract_uid]['extradeets'] = array();
		}

		//booking notes
		$query = "SELECT 
						id,
						timestamp,
						note 
					FROM #__jomcomp_notes 
					WHERE contract_uid = '" .(int) $contract_uid."' AND property_uid = '".(int) $defaultProperty."'";
		$notesData = doSelectSql($query);

		if (!empty($notesData)) {
			foreach ($notesData as $note) {
				$this->contract[$contract_uid]['notedeets'][$note->id]['id'] = $note->id;
				$this->contract[$contract_uid]['notedeets'][$note->id]['timestamp'] = $note->timestamp;
				$this->contract[$contract_uid]['notedeets'][$note->id]['note'] = $note->note;
			}
		} else {
			$this->contract[$contract_uid]['notedeets'] = array();
		}

		return true;
	}
}
