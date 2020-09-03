<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.2
 *
 * @copyright	2005-2020 Vince Wooll
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

class jomres_generic_booking_insert
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->init();

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function create_booking()
	{
		$jomressession = get_showtime('jomressession');
		$insertSuccessful = false;
		try {
			$this->validate();
			$this->apply_booking_details();
			$this->apply_guest_details();
			$insertSuccessful = insertInternetBooking($jomressession, $this->booking_details['depositpaidsuccessfully'], false, '', false);

			return $insertSuccessful;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function validate()
	{
		if ($this->guest_details['firstname'] == '') {
			throw new Exception(' Error firstname is not valid');
		}
		if ($this->guest_details['surname'] == '') {
			throw new Exception(' Error surname is not valid');
		}
		if ($this->guest_details['email'] == '') {
			throw new Exception(' Error email is not valid');
		}
		if ($this->booking_details['property_uid'] == 0) {
			throw new Exception(' Error property_uid is not valid');
		}
		if ($this->booking_details['requestedRoom'] == '') {
			throw new Exception(' Error requestedRoom is not valid');
		}
		//if ( $this->booking_details['deposit_required'] == 0.00 )
//			{
//			throw new Exception(" Error deposit_required is not valid");
//			}
		if ($this->booking_details['contract_total'] == 0.00) {
			throw new Exception(' Error contract_total is not valid');
		}
		//if ( $this->booking_details['tax'] == 0.00 )
//			{
//			throw new Exception(" Error tax is not valid");
//			}
		if ($this->booking_details['room_total'] == 0.00) {
			throw new Exception(' Error room_total is not valid');
		}
		if ($this->booking_details['room_total_nodiscount'] == 0.00) {
			throw new Exception(' Error room_total_nodiscount is not valid');
		}
		if ($this->booking_details['currency_code'] == '') {
			throw new Exception(' Error currency_code is not set');
		}
		if ($this->booking_details['arrivalDate'] == '') {
			throw new Exception(' Error arrivalDate is not valid');
		}
		if ($this->booking_details['departureDate'] == '') {
			throw new Exception(' Error departureDate is not valid');
		}
		if ($this->booking_details['booking_number'] == '') {
			throw new Exception(' Error booking_number is not set');
		}

		$query = "SELECT contract_uid FROM #__jomres_contracts WHERE tag LIKE '".$this->booking_details['booking_number']."' LIMIT 1";
		$bklist = doSelectSql($query);
		if (!empty($bklist) && $this->booking_details['channel_manager_booking'] =! "1" ) { // Channels can create multiple bookings with the same booking number
			throw new Exception(' Error booking_number '.$this->booking_details['booking_number'].' already exists in the database.');
		}

		$this->booking_details['ok_to_book'] == true;

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function init()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$tmpBookingHandler->resetTempBookingData();
		$tmpBookingHandler->resetTempGuestData();
		$tmpBookingHandler->resetCreditCardDetails();

		$this->booking_details = array(
			'property_uid' => 0,					// 1 ***** Required *****
			'requestedRoom' => '',					// "48^1522,49^1522" A HAT separated list of rooms combined with tariffs ***** Required *****
			'dateRangeString' => '',				// Comma seperated list of all dates in booking
			'guests_uid' => '',						// If is empty or zero then a new guest will be created from the guest details array
			'single_person_suppliment' => 0.00,		// float(10)
			'deposit_required' => 0.00,				// float(220)
			'contract_total' => 0.00,				// float(400) ***** Required *****
			/* "extrasvalue"				=> 0.00,// float(40)
			"extrasvalues_items"		=> array(),	// "a:1:{i:1;a:1:{s:19:"quantity_multiplier";i:1;}}"
			"extras"					=> "",		// "1,"
			"extrasquantities"			=> array(),	// array(1) { [1]=>int(2) } */
			'depositpaidsuccessfully' => false,		// True or false (e.g. if the payment was at the front desk, this would be set to true) ***** Required *****
			'tax' => 0.00,							// float(30)  ***** Required ***** ????
			'booker_class' => '100',				// Unused
			'ok_to_book' => false,					// Do not set, this class will set this flag once it's performed it's pre-insertion checks ***** Required *****
			'total_in_party' => 0,					// int(2)
			'room_total' => 0.00,					// float(150) NET PRICE!!!! (price without tax) ***** Required *****
			'room_total_nodiscount' => 0.00,		// float(150) NET PRICE!!!! (price without tax) ***** Required *****
			'currency_code' => '',					// string (EUR) ***** Required *****
			'coupon_id' => '',						// "1"
			'coupon_code' => '',					// "rDRkpUSKBbqFTCU"
			'coupon_details' => array(),			// array(5) { ["amount"]=>string(2) "20" ["is_percentage"]=>string(1) "1" ["coupon_id"]=> string(1) "1" ["booking_valid_from"]=> string(10) "2013-06-20" ["booking_valid_to"]=> string(10) "2014-06-01" }
			'booking_notes' => array(),				// array(1) { ["Coupon"]=>string(70) "Booking discounted. Coupon code/discount value/coupon settings :  N/A "}
			'booking_number' => '',					// int(14063067) ***** Required *****
			'property_currencycode' => '',			// Not required, will be set later
			'arrivalDate' => '',					// "2013/12/13" ***** Required *****
			'departureDate' => '',					// "2013/12/16" ***** Required *****
			'booked_in' => 0,						// (int) 1 if guest is set as booked in
			'sendGuestEmail' => true,				// (bool) true if should send a booking email to guest
			'sendHotelEmail' => true,				// (book) true if should send a booking email to hotel
			'referrer' => '',						// "AN Other channel"
			'channel_manager_booking' => 0,			// (int) is this booking from a channel manager? yes/no"
			);

		$this->guest_details = array(
			'existing_id' => '',					// If not set a new guest will be created
			'mos_userid' => '',						// The CMS user id. If MOS ID is set then that existing CMS user will be used.
			'firstname' => '',						// "Maj`or" ***** Required *****
			'surname' => '',						// "Gowen" ***** Required *****
			'house' => '',							// "Watery Fowls"
			'street' => '',							// "a Street"
			'town' => '',							// "Wherever"
			'region' => '',							// "566"
			'country' => '',						// "CH"
			'postcode' => '',						// "XXNN NXX"
			'tel_landline' => '',					// "01000 123456"
			'tel_mobile' => '',						// "01777 123456"
			'email' => '',							// "notify@jomres.net" ***** Required *****
			);

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function apply_booking_details()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		$tmpBookingHandler->tmpbooking['property_uid'] = $this->booking_details['property_uid'];
		$tmpBookingHandler->tmpbooking['requestedRoom'] = $this->booking_details['requestedRoom'];
		$tmpBookingHandler->tmpbooking['dateRangeString'] = $this->booking_details['dateRangeString'];
		$tmpBookingHandler->tmpbooking['guests_uid'] = $this->booking_details['guests_uid'];
		$tmpBookingHandler->tmpbooking['single_person_suppliment'] = $this->booking_details['single_person_suppliment'];
		$tmpBookingHandler->tmpbooking['deposit_required'] = $this->booking_details['deposit_required'];
		$tmpBookingHandler->tmpbooking['contract_total'] = $this->booking_details['contract_total'];
		$tmpBookingHandler->tmpbooking['depositpaidsuccessfully'] = $this->booking_details['depositpaidsuccessfully'];
		$tmpBookingHandler->tmpbooking['tax'] = $this->booking_details['tax'];
		$tmpBookingHandler->tmpbooking['booker_class'] = $this->booking_details['booker_class'];
		$tmpBookingHandler->tmpbooking['ok_to_book'] = $this->booking_details['ok_to_book'];
		$tmpBookingHandler->tmpbooking['total_in_party'] = $this->booking_details['total_in_party'];
		$tmpBookingHandler->tmpbooking['room_total'] = $this->booking_details['room_total'];
		$tmpBookingHandler->tmpbooking['room_total_nodiscount'] = $this->booking_details['room_total_nodiscount'];
		$tmpBookingHandler->tmpbooking['coupon_id'] = $this->booking_details['coupon_id'];
		$tmpBookingHandler->tmpbooking['coupon_code'] = $this->booking_details['coupon_code'];
		$tmpBookingHandler->tmpbooking['coupon_details'] = $this->booking_details['coupon_details'];
		$tmpBookingHandler->tmpbooking['booking_notes'] = $this->booking_details['booking_notes'];
		$tmpBookingHandler->tmpbooking['booking_number'] = $this->booking_details['booking_number'];
		$tmpBookingHandler->tmpbooking['property_currencycode'] = $this->booking_details['property_currencycode'];
		$tmpBookingHandler->tmpbooking['arrivalDate'] = $this->booking_details['arrivalDate'];
		$tmpBookingHandler->tmpbooking['departureDate'] = $this->booking_details['departureDate'];
		$tmpBookingHandler->tmpbooking['booked_in'] = $this->booking_details['booked_in'];
		$tmpBookingHandler->tmpbooking['sendGuestEmail'] = $this->booking_details['sendGuestEmail'];
		$tmpBookingHandler->tmpbooking['sendHotelEmail'] = $this->booking_details['sendHotelEmail'];
		$tmpBookingHandler->tmpbooking['referrer'] = $this->booking_details['referrer'];
		$tmpBookingHandler->tmpbooking['channel_manager_booking'] = $this->booking_details['channel_manager_booking'];

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function apply_guest_details()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		$tmpBookingHandler->tmpguest['existing_id'] = $this->guest_details['existing_id'];
		$tmpBookingHandler->tmpguest['mos_userid'] = $this->guest_details['mos_userid'];
		$tmpBookingHandler->tmpguest['firstname'] = $this->guest_details['firstname'];
		$tmpBookingHandler->tmpguest['surname'] = $this->guest_details['surname'];
		$tmpBookingHandler->tmpguest['house'] = $this->guest_details['house'];
		$tmpBookingHandler->tmpguest['street'] = $this->guest_details['street'];
		$tmpBookingHandler->tmpguest['town'] = $this->guest_details['town'];
		$tmpBookingHandler->tmpguest['region'] = $this->guest_details['region'];
		$tmpBookingHandler->tmpguest['country'] = $this->guest_details['country'];
		$tmpBookingHandler->tmpguest['postcode'] = $this->guest_details['postcode'];
		$tmpBookingHandler->tmpguest['tel_landline'] = $this->guest_details['tel_landline'];
		$tmpBookingHandler->tmpguest['tel_mobile'] = $this->guest_details['tel_mobile'];
		$tmpBookingHandler->tmpguest['email'] = $this->guest_details['email'];

		return true;
	}
}
