<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.5.3
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	use Jaybizzle\CrawlerDetect\CrawlerDetect;

	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

	class jomres_temp_booking_handler
	{
		/**
		 *
		 *
		 *
		 */

		public function __construct()
		{

			// The purpose here is to prevent Jomres temp booking handler from storing sessions in the db, there's no point.
			// We are ok with crawlers visiting, after all we want our data to be indexed, but the session data will never be used, so let's not store it if with think it's a crawler
			$CrawlerDetect = new CrawlerDetect;
			$this->is_crawler = $CrawlerDetect->isCrawler();

			// Jomres asynchronous tasks for triggering scheduled tasks so we will also mark it as a bot to prevent it's session from being stored
			if (isset($_SERVER['HTTP_USER_AGENT']) && $_SERVER['HTTP_USER_AGENT'] == 'Jomres Asynchronous task trigger') {
				$this->is_crawler = true;
			}

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$this->task = get_showtime('task');
			$this->jomressession = '';
			$this->jomressession_db = '';
			$this->sessionfile = '';
			$this->session_directory = JOMRES_SESSIONS_ABSPATH;
			$this->session_handler = $jrConfig['session_handler'];

			//check and create the session dirs if necessary
			if ($this->session_handler == 'file') {
				if (!is_dir($this->session_directory)) {
					if (!@mkdir($this->session_directory)) {
						echo 'Error, unable to make folder '.$this->session_directory." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";
						exit;
					}
				}

				if (!is_writable($this->session_directory)) {
					echo 'Error, '.$this->session_directory." is not writable therefore cannot store booking session data. Please ensure that it's writable by the web server";
					exit;
				}
			}

			if (isset($_SERVER['REMOTE_ADDR'])) { // CLI not isset variable fix
				$this->ip = $_SERVER['REMOTE_ADDR'];
			} else {
				$this->ip = '127.0.0.1';
			}

			if ($this->ip == '::1') {
				$this->ip = '127.0.0.1';
			}

			if ( (!isset($_COOKIE['jomres_gdpr_consent_form_processed']) || (int)$_COOKIE['jomres_gdpr_consent_form_processed'] == 0) && !AJAXCALL  ){
				$this->ip = '0.0.0.0';
			}

			if (!isset($_SERVER['HTTP_USER_AGENT'])){
				$_SERVER['HTTP_USER_AGENT'] ="";
			}

			$this->user_agent = preg_replace("/[^A-Za-z0-9[:space:]]/", "", strip_tags(trim($_SERVER['HTTP_USER_AGENT'])));

			$current_url = getCurrentUrl(true);
			$this->current_url = filter_var( $current_url , FILTER_SANITIZE_STRING );

			//init arrays
			$this->_init();
		}

		/**
		 *
		 *
		 *
		 */

		private function _init()
		{
			$this->info = array(
				'ip' => $this->ip,
				'user_agent' => $this->user_agent
			);

			$this->tmpbooking = array(
				'requestedRoom' => '',
				'rate_pernight' => '',
				'variancetypes' => '',
				'varianceuids' => '',
				'varianceqty' => '',
				'variancevals' => '',
				'variancevals_nodiscount' => '',
				'lastminute_id' => '',
				'agent_booking' => '',
				'arrivalDate' => '',
				'departureDate' => '',
				'stayDays' => '',
				'dateRangeString' => '',
				'guests_uid' => '',
				'property_uid' => '',
				'rates_uid' => '',
				'tag' => '',
				'resource' => '',
				'single_person_suppliment' => '',
				'deposit_required' => '',
				'contract_total' => '',
				'extrasvalue' => '',
				'extrasvalues_items' => '',
				'extras' => '',
				'extrasquantities' => '',
				'third_party_extras' => '',
				'third_party_extras_private_data' => '',
				'room_allocations' => '',
				'room_allocations_note' => '',
				'total_discount' => '',
				'booking_discounted' => false,
				'depositpaidsuccessfully' => false,
				'tax' => '',
				'booker_class' => '',
				'ok_to_book' => '',
				'beds_available' => '',
				'referrer' => '',
				'error_log' => '',
				'total_in_party' => '',
				'room_total' => '',
				'room_total_nodiscount' => '',
				'lang' => '',
				'timestamp' => '',
				'wisepricediscount' => '',
				'lastminutediscount' => '',
				'confirmationSeen' => false,
				'mininterval' => '',
				'discounts' => array(),
				'coupon_id' => '',
				'coupon_code' => '',
				'coupon_details' => array(),
				'coupon_discount_value' => '',
				'cfg_showExtras' => false,
				'booking_notes' => array(),
				'additional_line_items' => '',
				'booking_number' => 0,
				'room_feature_filter' => '',
				'override_room_total' => null,
				'override_deposit' => null,
				'property_currencycode' => null,
				'booked_in' => 0,
				'sendGuestEmail' => true,
				'sendHotelEmail' => true,
				'secret_key_payment' => false,
				'channel_manager_booking' => 0
			);

			$this->tmpguest = array(
				'guests_uid' => '',
				'mos_userid' => '',
				'existing_id' => '',
				'firstname' => '',
				'surname' => '',
				'house' => '',
				'street' => '',
				'town' => '',
				'region' => '',
				'country' => '',
				'postcode' => '',
				'tel_landline' => '',
				'tel_mobile' => '',
				'tel_fax' => '',
				'property_uid' => '',
				'email' => '',
				'discount' => '0',
				'tag' => '',
				'timestamp' => '',
			);

			$this->tmpsearch_data = array(
				'jomsearch_availability' => '',
				'jomsearch_availability_departure' => ''
			);


			$this->tmplang = array(
				'jomreslang' => get_showtime('lang')
			);

			$this->user_settings = array(
				'editing_on' => false,
				'property_management_view' => false,
				'last_viewed_property_uid' => 0,
				'current_url' => $this->current_url
			);

			$this->cart_data = array();

			//we`ll store here the duplicates of the session data so we can compare with these for changes. If there are no changes, we don`t need to write the session data again
			$this->_info = $this->info;
			$this->_tmpbooking = $this->tmpbooking;
			$this->_tmpguest = $this->tmpguest;
			$this->_cart_data = $this->cart_data;
			$this->_tmpsearch_data = $this->tmpsearch_data;
			$this->_tmplang = $this->tmplang;
			$this->_user_settings = $this->user_settings;
		}

		/**
		 *
		 *
		 *
		 */

		//if the ip and user agent don`t match, exit here
		private function _preventHijacking()
		{
			if (!isset($this->info['ip']) || !isset($this->info['user_agent'])) {
				return true;
			}

			if ($this->info['ip'] != $this->ip) {
				return true;
			}

			if ($this->info['user_agent'] != $this->user_agent) {
				return true;
			}

			return false;
		}

		/**
		 *
		 *
		 *
		 */

		public function initCustomFields($allCustomFields = array())
		{
			$data = array();

			foreach ($allCustomFields as $f) {
				$uid = $f[ 'uid' ];
				$newBookingfieldName = $f[ 'fieldname' ].'_'.$uid;
				if (!isset($this->tmpbooking[ $newBookingfieldName ])) {
					$this->addNewBookingField($newBookingfieldName);
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function saveCustomFields($allCustomFields = array())
		{
			$data = array();
			foreach ($allCustomFields as $f) {
				$uid = $f[ 'uid' ];
				$newBookingfieldName = $f[ 'fieldname' ].'_'.$uid;
				$data = jomresGetParam($_POST, $f[ 'fieldname' ].'_'.$uid, '');
				if (!isset($this->tmpbooking[ $newBookingfieldName ])) {
					$this->addNewBookingField($newBookingfieldName);
				}
				$this->updateBookingField($newBookingfieldName, $data);
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function initBookingSession($jomressession = '')
		{
			// Allow the session to be discovered through headers, if available. Without this calling the booking form via a shortcode can result in the booking details being reset between initial triggering of the api call, loading of the framework, then re-initialising through an API call to the NBE Common plugin. Should resolve issues where you absolutely *know* a booking session something has been saved, and then on the next pass it's gone again, resulting in some serious headscratching.
			$all_headers = getallheaders();
			if (!empty($all_headers)) {
				foreach ($all_headers as $key => $val ) {
					$new_index = strtoupper($key);
					unset($all_headers[$key]);
					$all_headers[$new_index] = $val;
				}
			}

			if (isset($all_headers['X-JOMRES-BOOKING-SESSION-ID'])) {
				$jomressession = filter_var($all_headers['X-JOMRES-BOOKING-SESSION-ID'], FILTER_SANITIZE_SPECIAL_CHARS);
			}

			if (isset($_REQUEST['jsid']) && $jomressession == '') { // jsid is passed by gateway services sending response codes
				$session_id = jomresGetParam($_REQUEST, 'jsid', '');
			} elseif (strlen($jomressession) > 0) {
				$session_id = $jomressession;
			} else { // If the first two options don't result in the session id, we'll ask the CMS what it's session id is
				$session_id = jomres_cmsspecific_getsessionid();
			}

			//we`ll check to see if session id is set and if we haven`t already loaded it..
			if (strlen($session_id) > 0 && $this->jomressession != $session_id) {
				$this->jomressession = $session_id;

				$hash = sha1($this->jomressession);
				$this->sessionfile = $this->session_directory.$hash.'.txt';

				$this->jomressession_db = substr($this->jomressession, 0, 50);

				$jomres_custom_field_handler = jomres_singleton_abstract::getInstance('jomres_custom_field_handler');
				$jomres_custom_field_handler->get_all_custom_fields();

				$this->initCustomFields($jomres_custom_field_handler->custom_fields);

				$this->session_jomres_start();
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function session_jomres_start()
		{
			if ($this->session_handler == 'file') {
				$this->_jomres_session_start_file();
			} else {
				$this->_jomres_session_start_database();
			}
			$this->_replace_guest_data();
		}

		/**
		 *
		 *
		 *
		 */

		// Check various guest specific fields to see if the are not populated. If they are not, we will use the thisJRUser fields to populate them so that the booking form is pre-populated
		private function _replace_guest_data()
		{
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');


			if ($this->tmpguest['mos_userid'] == ''){
				$this->tmpguest['mos_userid'] = $thisJRUser->cms_user_id;
			}

			if ($this->tmpguest['firstname'] == ''){
				$this->tmpguest['firstname'] = $thisJRUser->firstname;
			}

			if ($this->tmpguest['surname'] == ''){
				$this->tmpguest['surname'] = $thisJRUser->surname;
			}

			if ($this->tmpguest['house'] == ''){
				$this->tmpguest['house'] = $thisJRUser->house;
			}

			if ($this->tmpguest['street'] == ''){
				$this->tmpguest['street'] = $thisJRUser->street;
			}

			if ($this->tmpguest['town'] == ''){
				$this->tmpguest['town'] = $thisJRUser->town;
			}

			if ($this->tmpguest['region'] == ''){
				$this->tmpguest['region'] = $thisJRUser->region;
			}

			if ($this->tmpguest['country'] == ''){
				$this->tmpguest['country'] = $thisJRUser->country;
			}

			if ($this->tmpguest['postcode'] == ''){
				$this->tmpguest['postcode'] = $thisJRUser->postcode;
			}

			if ($this->tmpguest['email'] == ''){
				$this->tmpguest['email'] = $thisJRUser->email;
			}

			if ($this->tmpguest['tel_landline'] == ''){
				$this->tmpguest['tel_landline'] = $thisJRUser->tel_landline;
			}

			if ($this->tmpguest['tel_mobile'] == ''){
				$this->tmpguest['tel_mobile'] = $thisJRUser->tel_mobile;
			}

		}

		/**
		 *
		 *
		 *
		 */

		private function _jomres_session_start_file()
		{
			if (file_exists($this->sessionfile)) {
				$data = file_get_contents($this->sessionfile);

				$data = json_decode(stripslashes($data), true);

				$this->info				= $data[ 'info' ];

				//session ip or user agent don`t match the visitor ip or user agent
				if ($this->_preventHijacking()) {
					$this->_init();
				}

				$this->tmpbooking 		= $data[ 'tmpbooking' ];
				$this->tmpguest 		= $data[ 'tmpguest' ];
				$this->cart_data 		= $data[ 'cart_data' ];
				$this->tmpsearch_data 	= $data[ 'tmpsearch_data' ];
				$this->tmplang 			= $data[ 'tmplang' ];
				$this->user_settings 	= $data[ 'user_settings' ];

				//we`ll store here the duplicates of the session data so we can compare with these for changes. If there are no changes, we don`t need to write the session data again
				$this->_info 			= $this->info;
				$this->_tmpbooking 		= $this->tmpbooking;
				$this->_tmpguest 		= $this->tmpguest;
				$this->_cart_data 		= $this->cart_data;
				$this->_tmpsearch_data 	= $this->tmpsearch_data;
				$this->_tmplang 		= $this->tmplang;
				$this->_user_settings 	= $this->user_settings;
			} else { // session file doesn't exist, let's create it
				$data = array(
					'info' => $this->info,
					'tmpbooking' => $this->tmpbooking,
					'cart_data' => $this->cart_data,
					'tmpguest' => $this->tmpguest,
					'tmpsearch_data' => $this->tmpsearch_data,
					'tmplang' => $this->tmplang,
					'user_settings' => $this->user_settings
				);

				$data = json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE);

				if ($this->sessionfile != '') {
					if (!file_put_contents($this->sessionfile, $data)) {
						throw new Exception('Error: Could not save session file');
					}
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		private function _jomres_session_start_database()
		{
			if ($this->is_crawler) {
				return;
			}

			$query = "SELECT `data` FROM #__jomres_sessions WHERE `session_id` = '".$this->jomressession_db."'";
			$result = doSelectSql($query);

			if (!empty($result)) {

				$result = json_decode(preg_replace('/^\s+|\n|\r|\s+$/m', '', stripslashes($result[0]->data) ), true);

				$this->info				= $result[ 'info' ];

				//session ip or user agent don`t match the visitor ip or user agent
				if ($this->_preventHijacking()) {
					$this->_init();
				}

				$this->tmpbooking 		= $result[ 'tmpbooking' ];
				$this->tmpguest 		= $result[ 'tmpguest' ];
				$this->cart_data 		= $result[ 'cart_data' ];
				$this->tmpsearch_data 	= $result[ 'tmpsearch_data' ];
				$this->tmplang 			= $result[ 'tmplang' ];
				$this->user_settings 	= $result[ 'user_settings' ];

				//we`ll store here the duplicates of the session data so we can compare with these for changes. If there are no changes, we don`t need to write the session data again
				$this->_info 			= $this->info;
				$this->_tmpbooking 		= $this->tmpbooking;
				$this->_tmpguest 		= $this->tmpguest;
				$this->_cart_data 		= $this->cart_data;
				$this->_tmpsearch_data 	= $this->tmpsearch_data;
				$this->_tmplang 		= $this->tmplang;
				$this->_user_settings 	= $this->user_settings;
			} else {
				$data = array(
					'info' => $this->info,
					'tmpbooking' => $this->tmpbooking,
					'cart_data' => $this->cart_data,
					'tmpguest' => $this->tmpguest,
					'tmpsearch_data' => $this->tmpsearch_data,
					'tmplang' => $this->tmplang,
					'user_settings' => $this->user_settings
				);

				$data = json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE);
				
				$query = "INSERT INTO #__jomres_sessions (`session_id`, `data` ) VALUES ('".$this->jomressession_db."', '".$data."' )";
				if (!doInsertSql($query, '')) {
					throw new Exception('Error: Could not save session data');
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function close_jomres_session()
		{
			if ($this->is_crawler) {
				return;
			}

			if (
				$this->info != $this->_info ||
				$this->tmpbooking != $this->_tmpbooking ||
				$this->cart_data != $this->_cart_data ||
				$this->tmpguest != $this->_tmpguest ||
				$this->tmpsearch_data != $this->_tmpsearch_data ||
				$this->tmplang != $this->_tmplang ||
				$this->user_settings != $this->_user_settings
			) {
				$data = array(
					'info' => $this->info,
					'tmpbooking' => $this->tmpbooking,
					'cart_data' => $this->cart_data,
					'tmpguest' => $this->tmpguest,
					'tmpsearch_data' => $this->tmpsearch_data,
					'tmplang' => $this->tmplang,
					'user_settings' => $this->user_settings
				);

				$data = json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE);

				$force_session = false;
				if ( defined("FORCE_JOMRES_SESSION") && FORCE_JOMRES_SESSION == true ) {
					$force_session = true;
				}

				if ($this->session_handler == 'file') {
					if (!file_put_contents($this->sessionfile, $data)) {
						throw new Exception('Error: Could not save session file');
					}
				} else {
					$query = "UPDATE #__jomres_sessions SET `data` = '".$data."' WHERE `session_id` = '".$this->jomressession_db."'";
					if (!doInsertSql($query, '')) {
						throw new Exception('Error: Could not update session data to database');
					}
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function getJomressession()
		{
			return $this->jomressession;
		}

		/**
		 *
		 *
		 *
		 */

		public function getBookingPropertyId()
		{
			return $this->tmpbooking[ 'property_uid' ];
		}

		/**
		 *
		 *
		 *
		 */

		public function getBookingData()
		{
			return $this->tmpbooking;
		}

		/**
		 *
		 *
		 *
		 */

		public function getGuestData()
		{
			return $this->tmpguest;
		}

		/**
		 *
		 *
		 *
		 */

		public function saveBookingData()
		{
			$this->close_jomres_session();
		}

		/**
		 *
		 *
		 *
		 */

		public function saveGuestData()
		{
			$this->close_jomres_session();
		}

		/**
		 *
		 *
		 *
		 */

		public function getBookingFieldVal($field)
		{
			if (isset($this->tmpbooking[ $field ])) {
				return $this->tmpbooking[ $field ];
			} else {
				return null;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function updateBookingField($fieldname, $value)
		{
			if (!isset($this->tmpbooking[ $fieldname ])) {
				$this->addNewBookingField($fieldname);
			}

			$this->tmpbooking[ $fieldname ] = $value;
		}

		/**
		 *
		 *
		 *
		 */

		public function updateGuestField($fieldname, $value)
		{
			$this->tmpguest[ $fieldname ] = $value;
		}

		/**
		 *
		 *
		 *
		 */

		public function addNewBookingField($fieldname)
		{
			$this->tmpbooking[ $fieldname ] = '';
		}

		/**
		 *
		 *
		 *
		 */

		public function addNewGuestField($fieldname)
		{
			$this->tmpguest[ $fieldname ] = '';
		}

		/**
		 *
		 *
		 *
		 */

		public function resetCreditCardDetails()
		{
			$this->tmpguest = array(
				'ccard_no' => '',
				'ccard_issued' => '',
				'ccard_expiry' => '',
				'ccard_iss_no' => '',
				'ccard_name' => '',
				'ccv' => '',
				'type' => '',
			);
		}

		/**
		 *
		 *
		 *
		 */

		public function resetTempGuestData()
		{
			$this->tmpguest = array(
				'guests_uid' => '',
				'mos_userid' => '',
				'existing_id' => '',
				'firstname' => '',
				'surname' => '',
				'house' => '',
				'street' => '',
				'town' => '',
				'region' => '',
				'country' => '',
				'postcode' => '',
				'tel_landline' => '',
				'tel_mobile' => '',
				'tel_fax' => '',
				'property_uid' => '',
				'email' => '',
				'discount' => '0',
				'tag' => '',
				'timestamp' => '',
			);
		}

		/**
		 *
		 *
		 *
		 */

		public function resetTempBookingData()
		{
			$pid = $this->tmpbooking[ 'property_uid' ];

			$this->tmpbooking = array(
				'property_uid' => $pid,
				'requestedRoom' => '',
				'rate_pernight' => '',
				'variancetypes' => '',
				'varianceuids' => '',
				'varianceqty' => '',
				'variancevals' => '',
				'variancevals_nodiscount' => '',
				'lastminute_id' => '',
				'agent_booking' => '',
				'stayDays' => '',
				'dateRangeString' => '',
				'guests_uid' => '',
				'rates_uid' => '',
				'tag' => '',
				'resource' => '',
				'single_person_suppliment' => '',
				'deposit_required' => '',
				'contract_total' => '',
				'extrasvalue' => '',
				'extrasvalues_items' => '',
				'extras' => '',
				'extrasquantities' => '',
				'third_party_extras' => '',
				'third_party_extras_private_data' => '',
				'room_allocations' => '',
				'room_allocations_note' => '',
				'total_discount' => '',
				'booking_discounted' => false,
				'depositpaidsuccessfully' => false,
				'tax' => '',
				'booker_class' => '',
				'ok_to_book' => '',
				'beds_available' => '',
				'referrer' => '',
				'error_log' => '',
				'total_in_party' => '',
				'room_total' => '',
				'room_total_nodiscount' => '',
				'lang' => '',
				'timestamp' => '',
				'wisepricediscount' => '',
				'lastminutediscount' => '',
				'confirmationSeen' => false,
				'mininterval' => '',
				'discounts' => array(),
				'coupon_id' => '',
				'coupon_code' => '',
				'coupon_details' => array(),
				'coupon_discount_value' => '',
				'cfg_showExtras' => false,
				'booking_notes' => array(),
				'additional_line_items' => '',
				'booking_number' => 0,
				'room_feature_filter' => '',
				'override_room_total' => null,
				'override_deposit' => null,
				'property_currencycode' => null,
				'booked_in' => 0,
				'sendGuestEmail' => true,
				'sendHotelEmail' => true,
				'secret_key_payment' => false
			);
		}

		/**
		 *
		 *
		 *
		 */

		public function resetCart()
		{
			$this->cart_data = array();
		}

		/**
		 *
		 *
		 *
		 */

		public function resetTmpSearchData()
		{
			$this->tmpsearch_data = array(
				'jomsearch_availability' => '',
				'jomsearch_availability_departure' => ''
			);
		}

		/**
		 *
		 *
		 *
		 */

		public function resetTmpUserData()
		{
			$this->user_settings = array(
				'editing_on' => false,
				'property_management_view' => false,
				'last_viewed_property_uid' => 0
			);
		}
	}
