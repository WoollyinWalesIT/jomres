<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.26
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * Stores and retrieves temporary booking information in session variables.
 #
 *
 * @since 2.6.1.1
 */
class jomres_temp_booking_handler
{
    /**
     * Constructor. Sets the default variables.
     */
    private static $configInstance = false;

    public function __construct()
    {
        if (defined('AUTO_UPGRADE')) {
            return false;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $this->task = get_showtime('task');

        $this->jomressession = '';

        $this->sessionfile = '';
        $this->timeout = (int) $jrConfig[ 'lifetime' ];
        $this->session_directory = JOMRES_SESSION_ABSPATH;

        if (!is_dir($this->session_directory)) {
            if (!@mkdir($this->session_directory)) {
                echo 'Error, unable to make folder '.$this->session_directory." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";
                exit;
            }
        }
        if (!is_dir($this->session_directory.JRDS.'admin')) {
            if (!@mkdir($this->session_directory.JRDS.'admin')) {
                echo 'Error, unable to make folder '.$this->session_directory.JRDS.'admin'." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";
                exit;
            }
        }

        if (jomres_cmsspecific_areweinadminarea()) {
            $this->session_directory .= 'admin'.JRDS;
        }

        if (!is_writable($this->session_directory)) {
            echo 'Error, '.$this->session_directory." is not writable therefore cannot store booking session data. Please ensure that it's writable by the web server";
            exit;
        }

        $this->tmpbooking = array('requestedRoom' => '',
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
                                   );

        $this->tmpguest = array('guests_uid' => '',
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
                                 'ccard_no' => '',
                                 'ccard_issued' => '',
                                 'ccard_expiry' => '',
                                 'ccard_iss_no' => '',
                                 'ccard_name' => '',
                                 'ccv' => '',
                                 'type' => '',
                                 'property_uid' => '',
                                 'email' => '',
                                 'discount' => '0',
                                 'tag' => '',
                                 'timestamp' => '',
                                 );

        $this->cart_data = array();

        $this->tmpsearch_data = array('jomsearch_availability' => '', 'jomsearch_availability_departure' => '');
        $this->previous_searches = array();

        $this->tmplang = array('jomreslang' => get_showtime('lang'));
        $this->user_settings = array('editing_on' => false, 'property_management_view' => false, 'last_viewed_property_uid' => 0);

        $this->customFieldValues = array();
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function initCustomFields($allCustomFields)
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

    public function saveCustomFields($allCustomFields)
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

    public function initBookingSession($jomressession = '')
    {
        if (isset($_REQUEST[ 'jsid' ])) { // jsid is passed by gateway services sending response codes
            $this->part = jomresGetParam($_REQUEST, 'jsid', '');
        } elseif (strlen($jomressession) > 0) {
            $this->part = $jomressession;
        } else {
            $this->part = jomres_cmsspecific_getsessionid();
        }

        if (strlen($this->part) > 0) {
            $this->jomressession = $this->part;

            $hash = sha1($this->part);
            $this->sessionfile = $this->session_directory.$hash.'.txt';

            $jomres_custom_field_handler = jomres_singleton_abstract::getInstance('jomres_custom_field_handler');
            $jomres_custom_field_handler->get_all_custom_fields();

            $this->initCustomFields($jomres_custom_field_handler->custom_fields);

            $this->session_jomres_start();
        }
    }

    public function session_jomres_start()
    {
        if (file_exists($this->sessionfile)) {
            $data = file_get_contents($this->sessionfile);
            $dataArrays = unserialize($data);
            $this->tmpbooking = $dataArrays[ 'tmpbooking' ];
            $this->tmpguest = $dataArrays[ 'tmpguest' ];
            $this->cart_data = $dataArrays[ 'cart_data' ];
            $this->tmpsearch_data = $dataArrays[ 'tmpsearch_data' ];
            $this->tmplang = $dataArrays[ 'tmplang' ];
            $this->user_settings = $dataArrays[ 'user_settings' ];

            $data = array('tmpbooking' => $this->tmpbooking, 'cart_data' => $this->cart_data, 'tmpguest' => $this->tmpguest, 'tmpsearch_data' => $this->tmpsearch_data, 'tmplang' => $this->tmplang, 'user_settings' => $this->user_settings);
            file_put_contents($this->sessionfile, serialize($data));
        } else { // session file doesn't exist, let's create it
            $data = array('tmpbooking' => $this->tmpbooking, 'cart_data' => $this->cart_data, 'tmpguest' => $this->tmpguest, 'tmpsearch_data' => $this->tmpsearch_data, 'tmplang' => $this->tmplang, 'user_settings' => $this->user_settings);
            file_put_contents($this->sessionfile, serialize($data));
        }
    }

    public function close_jomres_session()
    {
        $data = array('tmpbooking' => $this->tmpbooking, 'cart_data' => $this->cart_data, 'tmpguest' => $this->tmpguest, 'tmpsearch_data' => $this->tmpsearch_data, 'tmplang' => $this->tmplang, 'user_settings' => $this->user_settings);
        if ($this->sessionfile != '') { // In certain circumstances the session file might not have been created (typically administrator area functionality)
        file_put_contents($this->sessionfile, serialize($data));
        }
    }

    public function getJomressession()
    {
        return $this->jomressession;
    }

    public function getBookingPropertyId()
    {
        return $this->tmpbooking[ 'property_uid' ];
    }

    public function getBookingData()
    {
        return $this->tmpbooking;
    }

    public function getGuestData()
    {
        return $this->tmpguest;
    }

    public function saveBookingData()
    {
        $this->close_jomres_session();
    }

    public function saveGuestData()
    {
        $this->close_jomres_session();
    }

    public function getBookingFieldVal($field)
    {
        if (isset($this->tmpbooking[ $field ])) {
            return $this->tmpbooking[ $field ];
        } else {
            return null;
        }
    }

    public function saveAllData()
    {
        $this->saveBookingData();
        $this->saveGuestData();
    }

    public function updateBookingField($fieldname, $value)
    {
        if (!isset($this->tmpbooking[ $fieldname ])) {
            $this->addNewBookingField($fieldname);
        }
        $this->tmpbooking[ $fieldname ] = $value;
    }

    public function updateGuestField($fieldname, $value)
    {
        $this->tmpguest[ $fieldname ] = $value;
    }

    public function addNewBookingField($fieldname)
    {
        $this->tmpbooking[ $fieldname ] = '';
    }

    public function addNewGuestField($fieldname)
    {
        $this->tmpguest[ $fieldname ] = '';
    }

    public function resetCreditCardDetails()
    {
        $this->tmpguest = array('ccard_no' => '',
                                 'ccard_issued' => '',
                                 'ccard_expiry' => '',
                                 'ccard_iss_no' => '',
                                 'ccard_name' => '',
                                 'ccv' => '',
                                 'type' => '',
                                 );
        $this->saveGuestData();
    }

    public function resetTempGuestData()
    {
        $this->tmpguest = array('guests_uid' => '',
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
                                 'ccard_no' => '',
                                 'ccard_issued' => '',
                                 'ccard_expiry' => '',
                                 'ccard_iss_no' => '',
                                 'ccard_name' => '',
                                 'ccv' => '',
                                 'type' => '',
                                 'property_uid' => '',
                                 'email' => '',
                                 'discount' => '0',
                                 'tag' => '',
                                 'timestamp' => '',
                                 );
        $this->saveGuestData();
    }

    public function resetTempBookingData()
    {
        $pid = $this->tmpbooking[ 'property_uid' ];
        $this->tmpbooking = array('property_uid' => $pid,
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
                                   'secret_key_payment' => false, );
        $this->saveBookingData();
    }

    public function resetCart()
    {
        $this->cart_data = array();
        $this->saveBookingData();
    }
}
