<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
 *
 * @copyright	2005-2022 Vince Wooll
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

class jomres_generic_black_booking_insert
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

	private function init()
	{
		$this->contract_uid = 0;									//this will be populated after the new black booking insert
		$this->property_uid = 0;

		$this->arrival = date('Y/m/d');								//date required
		$this->departure = date('Y/m/d', strtotime('+1 day'));		//date required
		$this->date_range = array();								//date range will be found later based on arrival - departure
		$this->room_uids = array();									//array of room uids, required
		$this->special_reqs = '';									//text, not required
		$this->booking_number = '';									//string, if not set will be generated automatically
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function create_black_booking()
	{
		try {
			if (!$this->validate()) {
				return false;
			}
			
			if (!$this->check_availability()) {
				return false;
			}
			
			$this->insert_black_booking();
			
			return true;
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
		if ($this->arrival == '') {
			throw new Exception(' Arrival date is not valid');
		}
		
		if ($this->departure == '') {
			throw new Exception(' Departure date is not valid');
		}
		
		if (!is_array($this->room_uids) || empty($this->room_uids)) {
			throw new Exception(' Room uids array not set');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception(' Error property_uid is not valid');
		}

		if ($this->booking_number == '') {
			$this->booking_number = set_booking_number();
		}

		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	private function check_availability()
	{
		jr_import('jrportal_availability');
		$availability = new jrportal_availability($this->property_uid, $this->arrival, $this->departure, $this->room_uids);
		
		if (!$availability->check_availability()) {
			return false;
		}
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	private function insert_black_booking()
	{
		$this->date_range = findDateRangeForDates($this->arrival, $this->departure);
		array_pop($this->date_range);
		
		$this->insert_contract_details();
		$this->insert_room_bookings();
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'blackbooking_created';
		$webhook_notification->webhook_event_description	= 'Logs when black bookings are created.';
		$webhook_notification->webhook_event_plugin		 = 'black_bookings';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		$webhook_notification->data->contract_uid		   = $this->contract_uid;
		add_webhook_notification($webhook_notification);
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	private function insert_contract_details()
	{
		$query = "INSERT INTO #__jomres_contracts (
							`arrival`,
							`departure`,
							`special_reqs`,
							`date_range_string`,
							`property_uid`,
							`tag`
							)
					VALUES (
							'".$this->arrival."',
							'".$this->departure."',
							'".$this->special_reqs."',
							'".implode(',', $this->date_range)."',
							".(int)$this->property_uid.",
							'".$this->booking_number."'
							)";
		
		$this->contract_uid = doInsertSql($query,'');
		
		if (!$this->contract_uid) {
			throw new Exception('Error: New contract insert failed.');
		}
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	private function insert_room_bookings()
	{
		$query = "INSERT INTO #__jomres_room_bookings (
							`room_uid`,
							`date`,
							`contract_uid`,
							`black_booking`,
							`internet_booking`,
							`reception_booking`,
							`property_uid`
							)
					VALUES ";
		
		foreach ($this->room_uids as $room_uid) {
			foreach ($this->date_range as $date) {
				$query .= "(
							".(int)$room_uid.",
							'".$date."',
							".(int)$this->contract_uid.",
							1,
							0,
							0,
							".(int)$this->property_uid."
							),";
			}
		}
		
		$query = rtrim($query, ',');
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Room bookings insert failed.');
		}
		
		return true;
	}
}
