<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Stores and retrieves temporary booking information in session variables.
#
 *
 * @package Jomres
 * @since 2.6.1.1
#
 */
class jomres_temp_booking_handler
	{
	/**
	#
	 * Constructor. Sets the default variables
	#
	 */
	private static $configInstance = false;
	
	function __construct()
		{
		if (defined('AUTO_UPGRADE'))
			return false;

		$siteConfig          = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig            = $siteConfig->get();
		$this->task          = get_showtime( 'task' );
		
		$this->jomressession = '';

		$this->sessionfile	 = '';
		$this->timeout = (int) $jrConfig[ 'lifetime' ];
		$this->session_directory = JOMRESPATH_BASE . JRDS . "sessions" . JRDS;
		
		if ( !is_dir( $this->session_directory ) )
			{
			if ( !@mkdir( $this->session_directory ) )
				{
				echo "Error, unable to make folder " . $this->session_directory . " automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";
				exit;
				}
			}
		if ( !is_dir( $this->session_directory . JRDS . "admin" ) )
			{
			if ( !@mkdir( $this->session_directory . JRDS . "admin" ) )
				{
				echo "Error, unable to make folder " . $this->session_directory . JRDS . "admin" . " automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";
				exit;
				}
			}

		if ( jomres_cmsspecific_areweinadminarea() )
			{
			$this->session_directory .= "admin" . JRDS;
			}

		if ( !is_writable( $this->session_directory ) )
			{
			echo "Error, " . $this->session_directory . " is not writable therefore cannot store booking session data. Please ensure that it's writable by the web server";
			exit;
			}

		$this->tmpbooking = array ( "requestedRoom" => "", 
								   "rate_pernight" => "", 
								   "variancetypes" => "", 
								   "varianceuids" => "", 
								   "varianceqty" => "", 
								   "variancevals" => "",
								   "variancevals_nodiscount" => "",
								   "lastminute_id" => "", 
								   "agent_booking" => "", 
								   "arrivalDate" => "", 
								   "departureDate" => "", 
								   "stayDays" => "", 
								   "dateRangeString" => "", 
								   "guests_uid" => "", 
								   "property_uid" => "", 
								   "rates_uid" => "", 
								   "tag" => "", 
								   "resource" => "", 
								   "single_person_suppliment" => "", 
								   "deposit_required" => "", 
								   "contract_total" => "", 
								   "extrasvalue" => "", 
								   "extrasvalues_items" => array (), 
								   "extras" => "", 
								   "extrasquantities" => array (), 
								   "third_party_extras" => array (), 
								   "third_party_extras_private_data" => array (), 
								   "room_allocations" => array (), 
								   "room_allocations_note" => "", 
								   "total_discount" => "", 
								   "booking_discounted" => false, 
								   "depositpaidsuccessfully" => false, 
								   "tax" => "", 
								   "booker_class" => "", 
								   "ok_to_book" => "", 
								   "beds_available" => "", 
								   "referrer" => "", 
								   "error_log" => "", 
								   "total_in_party" => "", 
								   "room_total" => "",
								   "room_total_nodiscount" => "",
								   "lang" => "", 
								   "timestamp" => "", 
								   "wisepricediscount" => "", 
								   "lastminutediscount" => "", 
								   "confirmationSeen" => false, 
								   "mininterval" => "", 
								   "discounts" => array (), 
								   "coupon_id" => "", 
								   "coupon_code" => "", 
								   "coupon_details" => array (), 
								   "coupon_discount_value" => "", 
								   "cfg_showExtras" => false, 
								   "booking_notes" => array (), 
								   "additional_line_items" => array (), 
								   "booking_number" => 0, 
								   "room_feature_filter" => array (), 
								   "override_room_total" => null, 
								   "override_deposit" => null, 
								   "property_currencycode" => null, 
								   "booked_in" => 0, 
								   "sendGuestEmail" => true, 
								   "sendHotelEmail" => true , 
								   "secret_key_payment" => false
								   );

		$this->tmpguest = array ( "guests_uid" => "", 
								 "mos_userid" => "", 
								 "existing_id" => "", 
								 "firstname" => "", 
								 "surname" => "", 
								 "house" => "", 
								 "street" => "", 
								 "town" => "", 
								 "region" => "", 
								 "country" => "", 
								 "postcode" => "", 
								 "tel_landline" => "", 
								 "tel_mobile" => "", 
								 "tel_fax" => "", 
								 "ccard_no" => "", 
								 "ccard_issued" => "", 
								 "ccard_expiry" => "", 
								 "ccard_iss_no" => "", 
								 "ccard_name" => "", 
								 "ccv" => "", 
								 "type" => "", 
								 "property_uid" => "", 
								 "email" => "", 
								 "discount" => "0", 
								 "tag" => "", 
								 "timestamp" => "" 
								 );

		$this->cart_data = array ();

		$this->tmpsearch_data = array ( "jomsearch_availability" => "", "jomsearch_availability_departure" => "" );
		$this->previous_searches = array ();

		$this->tmplang       = array ( "jomreslang" => get_showtime( 'lang' ) );
		$this->user_settings = array ( "editing_on" => false, "property_management_view" => false, "last_viewed_property_uid" => 0 );

		$this->customFieldValues = array ();
		}
	
	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_temp_booking_handler();
			}

		return self::$configInstance;
		}

	function initCustomFields( $allCustomFields )
		{
		$data = array ();
		foreach ( $allCustomFields as $f )
			{
			$uid                 = $f[ 'uid' ];
			$newBookingfieldName = $f[ 'fieldname' ] . "_" . $uid;
			if ( !isset( $this->tmpbooking[ $newBookingfieldName ] ) ) $this->addNewBookingField( $newBookingfieldName );
			}
		}

	function saveCustomFields( $allCustomFields )
		{
		$data = array ();
		foreach ( $allCustomFields as $f )
			{
			$uid                 = $f[ 'uid' ];
			$newBookingfieldName = $f[ 'fieldname' ] . "_" . $uid;
			$data                = jomresGetParam( $_POST, $f[ 'fieldname' ] . "_" . $uid, '' );
			if ( !isset( $this->tmpbooking[ $newBookingfieldName ] ) ) $this->addNewBookingField( $newBookingfieldName );
			$this->updateBookingField( $newBookingfieldName, $data );
			}
		}

	function initBookingSession( $jomressession = '')
		{
		if ( isset( $_REQUEST[ 'jsid' ] ) ) // jsid is passed by gateway services sending response codes
			{
			$this->part = jomresGetParam( $_REQUEST, 'jsid', "" );
			}
		elseif ( strlen( $jomressession ) > 0 )
			$this->part = $jomressession;
		else
			{
			$this->part = jomres_cmsspecific_getsessionid();
			}
		
		if ( strlen( $this->part ) > 0 )
			{
			$this->jomressession = $this->part;
	
			$hash = sha1( $this->part );
			$this->sessionfile = $this->session_directory . $hash . ".txt";
	
			jr_import( 'jomres_custom_field_handler' );
			$custom_fields   = new jomres_custom_field_handler();
			$allCustomFields = $custom_fields->getAllCustomFields();
			$this->initCustomFields( $allCustomFields );
	
			$this->session_jomres_start();
			}
		}


	function session_jomres_start()
		{
		if ( file_exists( $this->sessionfile ) )
			{
			$data                 = file_get_contents( $this->sessionfile );
			$dataArrays           = unserialize( $data );
			$this->tmpbooking     = $dataArrays[ 'tmpbooking' ];
			$this->tmpguest       = $dataArrays[ 'tmpguest' ];
			$this->cart_data      = $dataArrays[ 'cart_data' ];
			$this->tmpsearch_data = $dataArrays[ 'tmpsearch_data' ];
			$this->tmplang        = $dataArrays[ 'tmplang' ];
			$this->user_settings  = $dataArrays[ 'user_settings' ];

			$data = array ( 'tmpbooking' => $this->tmpbooking, 'cart_data' => $this->cart_data, 'tmpguest' => $this->tmpguest, 'tmpsearch_data' => $this->tmpsearch_data, 'tmplang' => $this->tmplang, 'user_settings' => $this->user_settings );
			file_put_contents( $this->sessionfile, serialize( $data ) );
			}
		else // session file doesn't exist, let's create it
			{
			$data = array ( 'tmpbooking' => $this->tmpbooking, 'cart_data' => $this->cart_data, 'tmpguest' => $this->tmpguest, 'tmpsearch_data' => $this->tmpsearch_data, 'tmplang' => $this->tmplang, 'user_settings' => $this->user_settings );
			file_put_contents( $this->sessionfile, serialize( $data ) );
			}
		$this->_remove_old_jomres_sessions();
		}

	function close_jomres_session()
		{
		$data = array ( 'tmpbooking' => $this->tmpbooking, 'cart_data' => $this->cart_data, 'tmpguest' => $this->tmpguest, 'tmpsearch_data' => $this->tmpsearch_data, 'tmplang' => $this->tmplang, 'user_settings' => $this->user_settings );
		if ( $this->sessionfile != '' ) // In certain circumstances the session file might not have been created (typically administrator area functionality)
		file_put_contents( $this->sessionfile, serialize( $data ) );
		}

	function _remove_old_jomres_sessions()
		{
		$d    = @dir( $this->session_directory );
		$docs = array ();
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( is_file( $this->session_directory . $filename ) && substr( $entry, 0, 1 ) != '.' && strtolower( $entry ) !== 'cvs' )
					{
					$docs[ ] = $filename;
					}
				}
			$d->close();
			if ( count( $docs ) > 0 )
				{
				foreach ( $docs as $f )
					{
					$last_modified    = filemtime( $this->session_directory .JRDS . $f );
					$seconds_timediff = time() - $last_modified;
					//echo $seconds_timediff;
					if ( $seconds_timediff > $this->timeout ) unlink( $this->session_directory . JRDS . $f );
					}
				}
			}
		}

	function getJomressession()
		{
		return $this->jomressession;
		}

	function getBookingPropertyId()
		{
		return $this->tmpbooking[ 'property_uid' ];
		}

	function getBookingData()
		{
		return $this->tmpbooking;
		}

	function getGuestData()
		{
		return $this->tmpguest;
		}


	function saveBookingData()
		{
		$this->close_jomres_session();
		}

	function saveGuestData()
		{
		$this->close_jomres_session();
		}

	function getBookingFieldVal( $field )
		{
		if (isset($this->tmpbooking[ $field ]))
			return $this->tmpbooking[ $field ];
		else
			return null;
		}

	function saveAllData()
		{
		$this->saveBookingData();
		$this->saveGuestData();
		}

	function updateBookingField( $fieldname, $value )
		{
		if ( !isset( $this->tmpbooking[ $fieldname ] ) ) 
			$this->addNewBookingField( $fieldname );
		$this->tmpbooking[ $fieldname ] = $value;
		}

	function updateGuestField( $fieldname, $value )
		{
		$this->tmpguest[ $fieldname ] = $value;
		}

	function addNewBookingField( $fieldname )
		{
		$this->tmpbooking[ $fieldname ] = "";
		}

	function addNewGuestField( $fieldname )
		{
		$this->tmpguest[ $fieldname ] = "";
		}

	function resetCreditCardDetails()
		{
		$this->tmpguest = array ( "ccard_no" => "", 
								 "ccard_issued" => "", 
								 "ccard_expiry" => "", 
								 "ccard_iss_no" => "", 
								 "ccard_name" => "", 
								 "ccv" => "", 
								 "type" => "" 
								 );
		$this->saveGuestData();
		}

	function resetTempGuestData()
		{
		$this->tmpguest = array ( "guests_uid" => "", 
								 "mos_userid" => "", 
								 "existing_id" => "", 
								 "firstname" => "", 
								 "surname" => "", 
								 "house" => "", 
								 "street" => "", 
								 "town" => "", 
								 "region" => "", 
								 "country" => "", 
								 "postcode" => "", 
								 "tel_landline" => "", 
								 "tel_mobile" => "", 
								 "tel_fax" => "", 
								 "ccard_no" => "", 
								 "ccard_issued" => "", 
								 "ccard_expiry" => "", 
								 "ccard_iss_no" => "", 
								 "ccard_name" => "", 
								 "ccv" => "", 
								 "type" => "", 
								 "property_uid" => "", 
								 "email" => "", 
								 "discount" => "0", 
								 "tag" => "", 
								 "timestamp" => "" 
								 );
		$this->saveGuestData();
		}

	function resetTempBookingData()
		{
		$pid              = $this->tmpbooking[ 'property_uid' ];
		$this->tmpbooking = array ( "property_uid" => $pid, 
								   "requestedRoom" => "", 
								   "rate_pernight" => "", 
								   "variancetypes" => "", 
								   "varianceuids" => "", 
								   "varianceqty" => "", 
								   "variancevals" => "",
								   "variancevals_nodiscount" => "",
								   "lastminute_id" => "", 
								   "agent_booking" => "", 
								   "stayDays" => "", 
								   "dateRangeString" => "", 
								   "guests_uid" => "", 
								   "rates_uid" => "", 
								   "tag" => "", 
								   "resource" => "", 
								   "single_person_suppliment" => "", 
								   "deposit_required" => "", 
								   "contract_total" => "", 
								   "extrasvalue" => "", 
								   "extrasvalues_items" => array (), 
								   "extras" => "", 
								   "extrasquantities" => array (), 
								   "third_party_extras" => array (), 
								   "third_party_extras_private_data" => array (), 
								   "room_allocations" => array (), 
								   "room_allocations_note" => '', 
								   "total_discount" => "", 
								   "booking_discounted" => false, 
								   "depositpaidsuccessfully" => false, 
								   "tax" => "", 
								   "booker_class" => "", 
								   "ok_to_book" => "", 
								   "beds_available" => "", 
								   "referrer" => "", 
								   "error_log" => "", 
								   "total_in_party" => "", 
								   "room_total" => "", 
								   "room_total_nodiscount" => "", 
								   "lang" => "", 
								   "timestamp" => "", 
								   "wisepricediscount" => "", 
								   "lastminutediscount" => "", 
								   "confirmationSeen" => false, 
								   "mininterval" => "", 
								   "discounts" => array (), 
								   "coupon_id" => "", 
								   "coupon_code" => "", 
								   "coupon_details" => array (), 
								   "coupon_discount_value" => "", 
								   "cfg_showExtras" => false, 
								   "booking_notes" => array (), 
								   "additional_line_items" => array (), 
								   "booking_number" => 0, 
								   "room_feature_filter" => array (), 
								   "override_room_total" => null, 
								   "override_deposit" => null, 
								   "property_currencycode" => null, 
								   "booked_in" => 0, 
								   "sendGuestEmail" => true, 
								   "sendHotelEmail" => true, 
								   "secret_key_payment" => false );
		$this->saveBookingData();
		}

	function resetCart()
		{
		$this->cart_data = array ();
		$this->saveBookingData();
		}

	}
