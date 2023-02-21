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
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
class jomres_roomlocks
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$property_uid = get_showtime('property_uid');
		$this->session_directory = JOMRES_SESSIONS_ABSPATH;

		if (!is_dir($this->session_directory)) {
			if (!@mkdir($this->session_directory)) {
				$this->setMessage('Error, unable to make folder '.$this->session_directory." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}
		
		$lock_filename = 'room_lock_'.(int) $property_uid.'.php';
		$this->sessionfile = $this->session_directory.$lock_filename;
		$this->clean_up_old_locks();
		$this->get_all_rooms_already_in_cart();
	}

	// If the lock is an hour old, we'll remove the lock.
	/**
	 *
	 *
	 *
	 */

	public function clean_up_old_locks()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if (!isset($jrConfig[ 'room_lock_timeout' ])) {
			$jrConfig[ 'room_lock_timeout' ] = 3600;
		}

		$now = strtotime('now');
		$dates_array = $this->init_lockfile();
		$all_sessions = array();
		if (!empty($dates_array)) {
			foreach ($dates_array as $sess => $d) {
				$all_sessions[ ] = $sess;
			}
		}

		if (!empty($dates_array)) {
			foreach ($dates_array as $sess_id => $session) {
				foreach ($session as $date => $room) {
					foreach ($room as $room_uid => $timestamp) {
						if (($now - $timestamp) > (int) $jrConfig[ 'room_lock_timeout' ]) {
							unset($dates_array[ $sess_id ][ $date ][ $room_uid ]);
						}
					}
				}
			}
		}
		$this->save_lockfile_data($dates_array);
	}
	
	/**
	 *
	 *
	 *
	 */

	public function lock_room($room_uid, $date_range_string)
	{
		$room_uid = $this->extract_room_uid($room_uid);
		$dates_array = $this->init_lockfile();
		if ( $dates_array === false ) {
			$dates_array = array();
		}
		$jomressession = get_showtime('jomressession');
		if (!isset($dates_array[ $jomressession ])) {
			$dates_array[ $jomressession ] = array();
		}
		$dateRangeArray = explode(',', $date_range_string);
		foreach ($dateRangeArray as $date) {
			$dates_array[ $jomressession ][ $date ][ $room_uid ] = strtotime('now');
		}
		$this->save_lockfile_data($dates_array);
	}
	
	/**
	 *
	 *
	 *
	 */

	public function unlock_room($room_uid, $date_range_string)
	{
		$room_uid = $this->extract_room_uid($room_uid);
		$dates_array = $this->init_lockfile();
		$jomressession = get_showtime('jomressession');
		$dateRangeArray = explode(',', $date_range_string);
		foreach ($dateRangeArray as $date) {
			unset($dates_array[ $jomressession ][ $date ][ $room_uid ]);
		}
		$this->save_lockfile_data($dates_array);
	}
	
	/**
	 *
	 *
	 *
	 */

	public function is_room_locked($room_uid, $date_range_string)
	{
		$room_uid = $this->extract_room_uid($room_uid);
		$dates_array = $this->init_lockfile();
		$all_sessions = array();
		if (!empty($dates_array)) {
			foreach ($dates_array as $sess => $d) {
				$all_sessions[ ] = $sess;
			}
		}


		$jomressession = get_showtime('jomressession');
		$dateRangeArray = explode(',', $date_range_string);

		if (!empty($dateRangeArray)) {
			foreach ($dateRangeArray as $date) {
				foreach ($all_sessions as $sess) {
					if (isset($dates_array[ $sess ][ $date ][ $room_uid ])) {
						return true;
					}
				}
				foreach ($this->rooms_already_in_cart as $cart_date_key => $cart_date_rooms) {
					if ($cart_date_key == $date && in_array($room_uid, $cart_date_rooms)) {
						return true;
					}
				}
			}
		}

		return false;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function unlock_all_rooms_for_session()
	{
		$dates_array = $this->init_lockfile();
		$jomressession = get_showtime('jomressession');
		if (isset($dates_array[ $jomressession ])) {
			unset($dates_array[ $jomressession ]);
		}

		$this->save_lockfile_data($dates_array);
	}
	
	/**
	 *
	 *
	 *
	 */

	public function init_lockfile()
	{
		if (!file_exists($this->sessionfile)) {
			touch($this->sessionfile);
			$dates_array = array();
		} else {
			$dates_array = unserialize(file_get_contents($this->sessionfile));
		}

		return $dates_array;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function save_lockfile_data($dates_array)
	{
		file_put_contents($this->sessionfile, serialize($dates_array));
	}
	
	/**
	 *
	 *
	 *
	 */

	// Allows us to pass either room uids or roomtariff strings (e.g. 4^3) to the class and extract the room uid for use within the class
	public function extract_room_uid($room_uid)
	{
		$findme = '^';
		$pos = strpos($room_uid, $findme);
		if ($pos === false) {
			return $room_uid;
		} else {
			$rtArray = explode('^', $room_uid);

			return $rtArray[ 0 ];
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function get_all_rooms_already_in_cart()
	{
		$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
		$jomressession = get_showtime('jomressession');
		$this->rooms_already_in_cart = array();
		if (!empty($tmpBookingHandler->cart_data)) {
			foreach ($tmpBookingHandler->cart_data as $cart) {
				$rooms = array();
				
				if (isset($cart['requestedRoom'])) {
					$requestedRooms = $cart['requestedRoom'];
					$roomBang = explode(',', $requestedRooms);
					
					foreach ($roomBang as $r) {
						$rooms[] = $this->extract_room_uid($r);
					}
				}

				if (isset($cart['dateRangeString'])) {
					$dateRangeString = $cart['dateRangeString'];
					$datesBang = explode(',', $dateRangeString);
					foreach ($datesBang as $date) {
						$this->rooms_already_in_cart [$date] = $rooms;
					}
				}
			}
		}
	}
}
