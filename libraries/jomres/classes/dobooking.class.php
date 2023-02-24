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
	 * This file is the main code block that manages the booking engine.
	#
	 * @package Jomres\Core\Classes
	#
	 * It is not designed to be implemented or called directly. Instead it is called by the j05000bookingobject.class.php file which inherits from this file.
	 */

	#[AllowDynamicProperties]

	class dobooking
	{
		/**
		 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table.
		 */
		public function __construct()
		{
			$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$this->jrConfig = $jrConfig; // Importing the site config settings

			jr_import('jomres_encryption');
			$this->jomres_encryption = new jomres_encryption();

			$this->suppress_output = true;
			if (get_showtime('task') == 'handlereq' || get_showtime('task') == 'dobooking') {
				$this->suppress_output = false;
			}

			$this->requestedRoom				= array();
			$this->rate_pernight				= 0.00;
			$this->rate_pernight_nodiscount		= 0.00;
			$this->room_total_nodiscount		= 0.00;
			$this->discounts					= array();
			$this->total_in_party				= 0;
			$this->variancetypes				= array();
			$this->varianceuids					= array();
			$this->varianceqty					= array();
			$this->variancevals					= array();
			$this->variancevals_nodiscount		= array();
			$this->lastminute_id				= '';
			$this->arrivalDate					= '';
			$this->departureDate				= '';
			$this->stayDays						= 1;
			$this->dateRangeString				= '';
			$this->guests_uid					= '';
			$this->property_uid					= '';
			$this->rates_uid					= '';
			$this->tag							= '';
			$this->resource						= '';
			$this->rate_rules					= 0.00;
			$this->single_person_suppliment		= 0.00;
			$this->deposit_required				= 0.00;
			$this->contract_total				= 0.00;

			$this->extrasvalue					= 0.00;
			$this->tax							= 0.00;
			$this->extras						= '';
			$this->third_party_extras			= array();
			$this->third_party_extras_private_data	= array();
			$this->total_discount				= 0.00;
			$this->depositpaidsuccessfully		= false;
			$this->booker_class					= '000';
			$this->ok_to_book					= false;
			$this->referrer						= '';
			$this->error_log					= '';
			$this->total_in_party				= 0;
			$this->mininterval					= 1;
			$this->unixArrivalDate				= null;
			$this->unixDepartureDate			= null;
			$this->beds_available				= 0;
			$this->monitoringMessages			= array();
			$this->room_feature_filter			= array();
			$this->vt = '';
			$this->vu = '';
			$this->vq = '';
			$this->vv = '';
			$this->rr = '';
			$this->standard_guest_numbers		= 0;
			$this->extra_guest_numbers			= 0;
			$this->child_numbers				= array();
			$this->child_prices					= array();

			$this->city_tax						= 0;
			$this->cleaning_fee					= 0;

			$this->extra_guest_price			= 0.00;

			$this->existing_id					= '';
			$this->mos_userid					= 0;
			$this->firstname					= '';
			$this->surname						= '';
			$this->house						= '';
			$this->street						= '';
			$this->town							= '';
			$this->region						= '';
			$this->postcode						= '';
			$this->tel_landline					= '';
			$this->tel_mobile					= '';
			$this->email						= '';
			$this->guest_specific_discount		= 0;
			$this->additional_line_items		= array();

			// Should be better at detecting today's date subject DST
			$this->today = date('Y/m/d', mktime(0, 0, 0, date('m'), date('d'), date('Y')));

			$this->error						= '';
			$this->error_code					= '';
			$this->billing_roomtotal			= 0.00;

			$this->resetPricingOutput			= false;
			$this->roomImageHTML				= '';
			$this->allPropertyRooms				= array();
			$this->allPropertyRoomUids			= array();
			$this->allPropertyTariffs			= array();
			$this->allFeatureDetails			= array();
			$this->allFeatureIds				= array();
			$this->allRoomClasses				= array();
			$this->allRoomClassIds				= array();
			$this->allBookings					= array();
			$this->rebuildIgnoreList			= array();
			$this->currentField					= '';
			$this->singlePersonSupplimentCalculated	= false;
			$this->email_address_can_be_used	= true;

			$bookingDeets = $this->getTmpBookingData();

			$this->setErrorLog('Queried session data for existing booking');
			if (!empty($bookingDeets)) {
				if (!isset($bookingDeets[ 'email_address_can_be_used' ])) {
					$bookingDeets[ 'email_address_can_be_used' ] = true;
				}
				$this->email_address_can_be_used = $bookingDeets[ 'email_address_can_be_used' ];
				$this->rr = $bookingDeets[ 'requestedRoom' ];
				$this->rate_pernight = $bookingDeets[ 'rate_pernight' ];
				$this->vt = $bookingDeets[ 'variancetypes' ];
				$this->vu = $bookingDeets[ 'varianceuids' ];
				$this->vq = $bookingDeets[ 'varianceqty' ];
				$this->vv = $bookingDeets[ 'variancevals' ];
				$this->vv_nodiscount = $bookingDeets[ 'variancevals_nodiscount' ];
				//$this->coupon_id				= $bookingDeets['coupon_id'];
				//$this->coupon					= $bookingDeets['coupon'];
				$this->lastminute_id			= $bookingDeets[ 'lastminute_id' ];
				if (!isset($bookingDeets[ 'arrivalDate' ])) {
					$bookingDeets[ 'arrivalDate' ]		= '';
					$bookingDeets[ 'departureDate' ]	= '';
				}
				$this->arrivalDate				= $bookingDeets[ 'arrivalDate' ];
				$this->departureDate			= $bookingDeets[ 'departureDate' ];
				$this->stayDays					= $bookingDeets[ 'stayDays' ];
				$this->dateRangeString			= $bookingDeets[ 'dateRangeString' ];
				$this->guests_uid				= $bookingDeets[ 'guests_uid' ];
				$this->property_uid				= (int) $bookingDeets[ 'property_uid' ];
				if ($this->property_uid==0 && isset($_GET['property_uid_check'])) {
					$this->property_uid	= (int)$_GET['property_uid_check'];
				}
				$this->rates_uid				= $bookingDeets[ 'rates_uid' ];
				$this->resource					= $bookingDeets[ 'resource' ];
				$this->single_person_suppliment	= $bookingDeets[ 'single_person_suppliment' ];
				$this->deposit_required			= $bookingDeets[ 'deposit_required' ];
				$this->contract_total			= $bookingDeets[ 'contract_total' ];
				$this->extrasvalue				= $bookingDeets[ 'extrasvalue' ];

				if (isset($bookingDeets[ 'standard_guest_numbers' ])) {
					$this->standard_guest_numbers	= $bookingDeets[ 'standard_guest_numbers' ];
				}

				if (isset($bookingDeets[ 'extra_guest_numbers' ])) {
					$this->extra_guest_numbers		= $bookingDeets[ 'extra_guest_numbers' ];
				}

				if (isset($bookingDeets[ 'child_numbers' ])) {
					$this->child_numbers			= $bookingDeets[ 'child_numbers' ];
				}

				if (isset($bookingDeets[ 'child_prices' ])) {
					$this->child_prices				= $bookingDeets[ 'child_prices' ];
				}

				$this->extra_guest_price			= 0;
				if (isset($bookingDeets[ 'extra_guest_price' ])) {
					$this->extra_guest_price		= $bookingDeets[ 'extra_guest_price' ];
				}

				$this->city_tax						= 0;
				if (isset($bookingDeets[ 'city_tax' ])) {
					$this->city_tax = $bookingDeets['city_tax'];
				}

				$this->cleaning_fee					= 0;
				if (isset($bookingDeets[ 'cleaning_fee' ])) {
					$this->cleaning_fee				= $bookingDeets[ 'cleaning_fee' ];
				}


				if ($jrConfig['session_handler'] == 'database') {
					if (is_array($bookingDeets[ 'extrasvalues_items' ])) {
						$this->extrasvalues_items	= $bookingDeets[ 'extrasvalues_items' ];
					} else {
						$this->extrasvalues_items	= array();
					}

					if (is_array($bookingDeets[ 'third_party_extras' ])) {
						$this->third_party_extras	= $bookingDeets[ 'third_party_extras' ];
					} else {
						$this->third_party_extras	= array();
					}

					if (is_array($bookingDeets[ 'third_party_extras_private_data' ])) {
						$this->third_party_extras_private_data = $bookingDeets[ 'third_party_extras_private_data' ];
					} else {
						$this->third_party_extras_private_data = array();
					}

					if (is_array($bookingDeets[ 'room_allocations' ])) {
						$this->room_allocations = $bookingDeets[ 'room_allocations' ];
					} else {
						$this->room_allocations = array();
					}

					if (is_array($bookingDeets[ 'additional_line_items' ])) {
						$this->additional_line_items = $bookingDeets[ 'additional_line_items' ];
					} else {
						$this->additional_line_items = array();
					}

					if (is_array($bookingDeets[ 'room_feature_filter' ])) {
						$this->room_feature_filter = $bookingDeets[ 'room_feature_filter' ];
					} else {
						$this->room_feature_filter = array();
					}
				} else {
					$this->extrasvalues_items				= unserialize($bookingDeets[ 'extrasvalues_items' ]);
					$this->third_party_extras				= unserialize($bookingDeets[ 'third_party_extras' ]);
					$this->third_party_extras_private_data	= unserialize($bookingDeets[ 'third_party_extras_private_data' ]);
					$this->room_allocations					= unserialize($bookingDeets[ 'room_allocations' ]);
					$this->additional_line_items			= unserialize($bookingDeets[ 'additional_line_items' ]);
					$this->room_feature_filter				= unserialize($bookingDeets[ 'room_feature_filter' ]);
				}

				$this->room_allocations_note		= $bookingDeets[ 'room_allocations_note' ];
				$this->property_currencycode		= $bookingDeets[ 'property_currencycode' ];

				$this->tax							= $bookingDeets[ 'tax' ];
				$this->extras						= $bookingDeets[ 'extras' ];
				$this->extrasquantities				= $bookingDeets[ 'extrasquantities' ];
				$this->total_discount				= $bookingDeets[ 'total_discount' ];
				$this->depositpaidsuccessfully		= $bookingDeets[ 'depositpaidsuccessfully' ];
				$this->booker_class					= $bookingDeets[ 'booker_class' ];
				$this->ok_to_book					= $bookingDeets[ 'ok_to_book' ];
				$this->beds_available				= $bookingDeets[ 'beds_available' ];
				$this->referrer						= $bookingDeets[ 'referrer' ];
				$this->error						= $bookingDeets[ 'error_log' ];
				$this->room_total					= $bookingDeets[ 'room_total' ];
				$this->room_total_nodiscount		= $bookingDeets[ 'room_total_nodiscount' ];
				//$this->discounts			   		= $bookingDeets[ 'discounts' ];
				$this->total_in_party				= $bookingDeets[ 'total_in_party' ];

				$this->amend_contract				= false;
				if (isset($bookingDeets[ 'amend_contract' ])) {
					$this->amend_contract		= $bookingDeets[ 'amend_contract' ];
				}
				$this->coupon_id					= $bookingDeets[ 'coupon_id' ];
				$this->coupon_code					= $bookingDeets[ 'coupon_code' ];
				$this->coupon_details				= $bookingDeets[ 'coupon_details' ];
				$this->coupon_discount_value		= $bookingDeets[ 'coupon_discount_value' ];
				$this->booking_notes				= $bookingDeets[ 'booking_notes' ];
				$this->override_room_total			= $bookingDeets[ 'override_room_total' ];
				$this->override_deposit				= $bookingDeets[ 'override_deposit' ];
				if (isset($bookingDeets[ 'thirdparty_vars' ])) {
					$this->thirdparty_vars		= $bookingDeets[ 'thirdparty_vars' ];
				}

				$MiniComponents = jomres_getSingleton('mcHandler');
				$this->wiseprice_installed = false;
				if (isset($MiniComponents->registeredClasses['00501']['xwiseprice'])) { // A check to see if the wiseprice config tab plugin is installed. If it is not, we will not use the setting elsewhere in the engine
					$this->wiseprice_installed = true;
				}
			}

			$dbdata = serialize($bookingDeets);
			$dbdata = str_replace(';', ' ', $dbdata);
			$this->setErrorLog("<font color='grey'>Constructor::Data pulled from Session variables  ".$dbdata.'</font>');

			if (!empty($this->rr)) {
				$this->requestedRoom = explode(',', $this->rr);
			}
			$this->variancetypes = explode(',', $this->vt);
			$this->varianceuids = explode(',', $this->vu);
			$this->varianceqty = explode(',', $this->vq);
			$this->variancevals = explode(',', $this->vv);
			$this->variancevals_nodiscount = explode(',', $this->vv_nodiscount);

			foreach ($this->varianceuids as $key => $variance_uid) {
				if ((int) $variance_uid == 0 || !$this->checkGuestVariantIdAndQty($variance_uid, 1)) {
					$this->setErrorLog('init::Unsetting variances with key '.$key);
					unset($this->variancetypes[ $key ]);
					unset($this->varianceuids[ $key ]);
					unset($this->varianceqty[ $key ]);
					unset($this->variancevals[ $key ]);
					unset($this->variancevals_nodiscount[ $key ]);
				}
			}

			$userDeets = $this->getTmpGuestData();

			//$this->errorLog( "Set booking variables " );
			$this->mos_userid = $userDeets[ 'mos_userid' ];
			$this->existing_id = $userDeets[ 'existing_id' ];
			$this->firstname = $userDeets[ 'firstname' ];
			$this->surname = $userDeets[ 'surname' ];
			$this->house = $userDeets[ 'house' ];
			$this->street = $userDeets[ 'street' ];
			$this->town = $userDeets[ 'town' ];
			$this->region = $userDeets[ 'region' ];
			$this->country = $userDeets[ 'country' ];
			$this->postcode = $userDeets[ 'postcode' ];
			$this->tel_landline = $userDeets[ 'tel_landline' ];
			$this->tel_mobile = $userDeets[ 'tel_mobile' ];
			$this->email = $userDeets[ 'email' ];

			$this->guest_specific_discount = 0;
			if (isset($userDeets[ 'discount' ])) {
				$this->guest_specific_discount = $userDeets[ 'discount' ];
			}


			$mrConfig = getPropertySpecificSettings($this->property_uid);

			jr_import('jomres_occupancy_levels');
			$this->jomres_occupancy_levels = new jomres_occupancy_levels($this->property_uid);

			$this->mrConfig = $mrConfig;
			if (isset($mrConfig[ 'margin' ]) && !empty($mrConfig[ 'margin' ])) {
				$this->margin = $mrConfig[ 'margin' ];
			} else {
				$this->margin = '0.00';
			}
			$this->tariffModel = $mrConfig[ 'newTariffModels' ];
			if ($this->tariffModel != '1' && $this->tariffModel != '2') {
				$this->tariffModel = '1';
			}
			if (!isset($mrConfig[ 'cal_input' ])) {
				echo "Error: Configuration settings don't appear to be set. There are ".count($mrConfig).' elements in the mrConfig var and '.count($jrConfig).' in the jrConfig var. If you have just installed Jomres you should log into the frontend as a property manager. This will set up sufficient data so that you can proceed.';
				exit;
			}
			$this->cfg_tariffmode = $mrConfig[ 'tariffmode' ];
			$this->cfg_errorChecking = $mrConfig[ 'errorChecking' ];
			$this->cfg_singlePersonSuppliment = $mrConfig[ 'singlePersonSuppliment' ];
			$this->cfg_supplimentChargeIsPercentage = $mrConfig[ 'supplimentChargeIsPercentage' ];
			$this->cfg_singlePersonSupplimentCost = $mrConfig[ 'singlePersonSupplimentCost' ];
			$this->cfg_perPersonPerNight = $mrConfig[ 'perPersonPerNight' ];
			$this->cfg_depositIsPercentage = $mrConfig[ 'depositIsPercentage' ];
			$this->cfg_depositValue = $mrConfig[ 'depositValue' ];
			$this->cfg_visitorscanbookonline = $mrConfig[ 'visitorscanbookonline' ];
			$this->cfg_fixedPeriodBookings = $mrConfig[ 'fixedPeriodBookings' ];
			$this->cfg_fixedPeriodBookingsNumberOfDays = $mrConfig[ 'fixedPeriodBookingsNumberOfDays' ];
			$this->cfg_numberofFixedPeriods = $mrConfig[ 'numberofFixedPeriods' ];
			$this->cfg_fixedArrivalDateYesNo = $mrConfig[ 'fixedArrivalDateYesNo' ];
			$this->cfg_fixedArrivalDay = $mrConfig[ 'fixedArrivalDay' ];
			$this->cfg_fixedPeriodBookingsShortYesNo = $mrConfig[ 'fixedPeriodBookingsShortYesNo' ];
			$this->cfg_fixedPeriodBookingsShortNumberOfDays = $mrConfig[ 'fixedPeriodBookingsShortNumberOfDays' ];
			$this->cfg_singleRoomProperty = $mrConfig[ 'singleRoomProperty' ];
			$this->cfg_cal_output = $mrConfig[ 'cal_output' ];
			$this->cfg_cal_input = $jrConfig[ 'cal_input' ];

			$this->cfg_templatePack = 'basic';
			$this->cfg_limitAdvanceBookingsYesNo = $mrConfig[ 'limitAdvanceBookingsYesNo' ];
			$this->cfg_advanceBookingsLimit = $mrConfig[ 'advanceBookingsLimit' ];
			$this->cfg_roomTaxYesNo = $mrConfig[ 'roomTaxYesNo' ];
			$this->cfg_roomTaxFixed = $mrConfig[ 'roomTaxFixed' ];
			$this->cfg_roomTaxPercentage = $mrConfig[ 'roomTaxPercentage' ];
			$this->cfg_euroTaxYesNo = $mrConfig[ 'euroTaxYesNo' ];
			$this->cfg_euroTaxPercentage = $mrConfig[ 'euroTaxPercentage' ];
			$this->cfg_depAmount = $mrConfig[ 'depAmount' ];
			$this->cfg_showdepartureinput = $mrConfig[ 'showdepartureinput' ];
			$this->cfg_ratemultiplier = $mrConfig[ 'ratemultiplier' ];
			$this->cfg_dateFormatStyle = $mrConfig[ 'dateFormatStyle' ];

			$this->cfg_inputBoxErrorBackground = $mrConfig[ 'inputBoxErrorBackground' ];

			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');

			if (!isset($mrConfig[ 'auto_detect_country_for_booking_form' ])) {
				$mrConfig[ 'auto_detect_country_for_booking_form' ] = '1';
			}

			if ($mrConfig[ 'auto_detect_country_for_booking_form' ] == '1' && isset($tmpBookingHandler->user_settings[ 'geolocated_country' ])) {
				$this->cfg_defaultcountry = $tmpBookingHandler->user_settings[ 'geolocated_country' ];
			} else {
				$this->cfg_defaultcountry = $mrConfig[ 'defaultcountry' ];
			}

			//if ($this->booker_class == "100")
			//	$this->cfg_minimuminterval						= 1;
			//else
			$this->cfg_minimuminterval = $mrConfig[ 'minimuminterval' ];
			$this->cfg_showDeposit = $mrConfig[ 'chargeDepositYesNo' ];
			$this->cfg_showRoomImageInBookingFormOverlib = $mrConfig[ 'showRoomImageInBookingFormOverlib' ];

			if ($this->booker_class == '100') {
				$this->cfg_mindaysbeforearrival = 0;
			} else {
				$this->cfg_mindaysbeforearrival = $mrConfig[ 'mindaysbeforearrival' ];
			}

			$this->cfg_defaultNumberOfFirstGuesttype = $mrConfig[ 'defaultNumberOfFirstGuesttype' ];
			$this->cfg_roundupDepositYesNo = $mrConfig[ 'roundupDepositYesNo' ];
			$this->cfg_chargeDepositYesNo = $mrConfig[ 'chargeDepositYesNo' ];
			$this->cfg_tariffChargesStoredWeeklyYesNo = $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ];
			$this->cfg_fixedArrivalDatesRecurring = $mrConfig[ 'fixedArrivalDatesRecurring' ];
			$this->cfg_returnRoomsLimit = $mrConfig[ 'returnRoomsLimit' ];
			if (!isset($mrConfig[ 'cfg_weekenddays' ])) {
				$mrConfig[ 'cfg_weekenddays' ] = '5,6';
			}
			$this->cfg_weekenddays = explode(',', $mrConfig[ 'weekenddays' ]);
			$this->cfg_bookingform_roomlist_showroomno = $mrConfig[ 'bookingform_roomlist_showroomno' ];
			$this->cfg_bookingform_roomlist_showroomname = $mrConfig[ 'bookingform_roomlist_showroomname' ];

			$this->cfg_bookingform_roomlist_showdisabled = $mrConfig[ 'bookingform_roomlist_showdisabled' ];
			$this->cfg_bookingform_roomlist_showmaxpeople = $mrConfig[ 'bookingform_roomlist_showmaxpeople' ];

			$this->cfg_bookingform_requiredfields_name = $mrConfig[ 'bookingform_requiredfields_name' ];
			$this->cfg_bookingform_requiredfields_surname = $mrConfig[ 'bookingform_requiredfields_surname' ];
			$this->cfg_bookingform_requiredfields_houseno = $mrConfig[ 'bookingform_requiredfields_houseno' ];
			$this->cfg_bookingform_requiredfields_street = $mrConfig[ 'bookingform_requiredfields_street' ];
			$this->cfg_bookingform_requiredfields_town = $mrConfig[ 'bookingform_requiredfields_town' ];
			$this->cfg_bookingform_requiredfields_postcode = $mrConfig[ 'bookingform_requiredfields_postcode' ];
			$this->cfg_bookingform_requiredfields_region = $mrConfig[ 'bookingform_requiredfields_region' ];
			$this->cfg_bookingform_requiredfields_country = $mrConfig[ 'bookingform_requiredfields_country' ];
			$this->cfg_bookingform_requiredfields_tel = $mrConfig[ 'bookingform_requiredfields_tel' ];
			$this->cfg_bookingform_requiredfields_mobile = $mrConfig[ 'bookingform_requiredfields_mobile' ];

			$mrConfig[ 'bookingform_requiredfields_email' ] = "1"; // For GDPR compliance, bookings will always require an email address and the property manager will not be allowed to change this setting
			$this->cfg_bookingform_requiredfields_email = $mrConfig[ 'bookingform_requiredfields_email' ];

			$this->property_currencycode = $mrConfig[ 'property_currencycode' ];

			if (!isset($mrConfig[ 'booking_form_rooms_list_style' ])) {
				$mrConfig[ 'booking_form_rooms_list_style' ] = '1';
			}

			if (!isset($mrConfig[ 'booking_form_daily_weekly_monthly' ])) {
				$mrConfig[ 'booking_form_daily_weekly_monthly' ] = 'D';
			}
			$this->cfg_booking_form_daily_weekly_monthly = $mrConfig[ 'booking_form_daily_weekly_monthly' ];

			$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');

			if ($amend_contract) {
				$mrConfig[ 'booking_form_rooms_list_style' ] = '1';
			}

			$this->cfg_booking_form_rooms_list_style = $mrConfig[ 'booking_form_rooms_list_style' ];

			$mrConfig = $this->mrConfig;
			$this->accommodation_tax_rate = 0.0;
			if (isset($mrConfig[ 'accommodation_tax_code' ]) && (int) $mrConfig[ 'accommodation_tax_code' ] > 0) {
				$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');
				$cfgcode = $mrConfig[ 'accommodation_tax_code' ];
				$this->accommodation_tax_rate = (float) $jrportal_taxrate->taxrates[ $cfgcode ][ 'rate' ];
			}

			// Let's get the room, tariff, room type (class) and room feature information for this property

			if (get_showtime('include_room_booking_functionality')) {
				$this->getAllRoomsData();
				$this->getAllTariffsData();
				$this->getAllRoomFeatureDetails();
				$this->getAllRoomClasses();
				$this->getAllRoomFeatures();
				$this->getAllBookings();
				$this->getAllTaxRates();
				$this->get_all_tariff_types();

				$this->checkAllGuestsAllocatedToRooms();
			}

			$this->checkAllGuestsAllocatedToRooms();

			return true;
		}

		/**
		 *Queries the database for the temporary booking data.
		 */
		public function getTmpBookingData()
		{
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$bookingDeets = $tmpBookingHandler->getBookingData();
			if (!isset($bookingDeets[ 'show_extras' ])) {
				$bookingDeets[ 'show_extras' ] = '1';
			}

			$this->cfg_showExtras = $bookingDeets[ 'show_extras' ];

			return $bookingDeets;
		}

		/**
		 *Queries the database for the temporary booking data.
		 */
		public function getTmpGuestData()
		{
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$userDeets = $tmpBookingHandler->getGuestData();

			return $userDeets;
		}

		/**
		 * Save the details of the booking object.
		 */
		public function storeBookingDetails()
		{
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$this->writeToLogfile("<font color='grey'>".serialize($tmpBookingHandler->tmpguest).'</font>');

			$tmpBookingHandler->tmpguest[ 'mos_userid' ] = $this->mos_userid;
			$tmpBookingHandler->tmpguest[ 'existing_id' ] = (int)$this->existing_id;
			$tmpBookingHandler->tmpguest[ 'firstname' ] = $this->firstname;
			$tmpBookingHandler->tmpguest[ 'surname' ] = $this->surname;
			$tmpBookingHandler->tmpguest[ 'house' ] = $this->house;
			$tmpBookingHandler->tmpguest[ 'street' ] = $this->street;
			$tmpBookingHandler->tmpguest[ 'town' ] = $this->town;
			$tmpBookingHandler->tmpguest[ 'region' ] = $this->region;
			$tmpBookingHandler->tmpguest[ 'country' ] = $this->country;
			$tmpBookingHandler->tmpguest[ 'postcode' ] = $this->postcode;
			$tmpBookingHandler->tmpguest[ 'tel_landline' ] = $this->tel_landline;
			$tmpBookingHandler->tmpguest[ 'tel_mobile' ] = $this->tel_mobile;
			$tmpBookingHandler->tmpguest[ 'email' ] = $this->email;
			$tmpBookingHandler->tmpguest[ 'discount' ] = getEscaped($this->guest_specific_discount);

			$rr = implode(',', $this->requestedRoom);
			$this->implodeVariances();

			$this->writeToLogfile($this->error);
			$this->error = '';

			$tmpBookingHandler->tmpbooking[ 'requestedRoom' ]				= $rr;
			$tmpBookingHandler->tmpbooking[ 'rate_pernight' ]				= $this->rate_pernight;
			$tmpBookingHandler->tmpbooking[ 'variancetypes' ]				= $this->vt;
			$tmpBookingHandler->tmpbooking[ 'varianceuids' ]				= $this->vu;
			$tmpBookingHandler->tmpbooking[ 'varianceqty' ]					= $this->vq;
			$tmpBookingHandler->tmpbooking[ 'variancevals' ]				= $this->vv;
			$tmpBookingHandler->tmpbooking[ 'variancevals_nodiscount' ] 	= $this->vv_nodiscount;
			//$tmpBookingHandler->tmpbooking["coupon_id"]					= $this->coupon_id;
			//$tmpBookingHandler->tmpbooking["coupon"]						= $this->coupon;
			$tmpBookingHandler->tmpbooking[ 'lastminute_id' ]				= $this->lastminute_id;
			$tmpBookingHandler->tmpbooking[ 'arrivalDate' ]					= $this->arrivalDate;
			$tmpBookingHandler->tmpbooking[ 'departureDate' ]				= $this->departureDate;
			$tmpBookingHandler->tmpbooking[ 'stayDays' ]					= $this->stayDays;
			$tmpBookingHandler->tmpbooking[ 'dateRangeString' ]				= $this->dateRangeString;
			$tmpBookingHandler->tmpbooking[ 'guests_uid' ]					= $this->guests_uid;
			$tmpBookingHandler->tmpbooking[ 'property_uid' ]				= $this->property_uid;
			$tmpBookingHandler->tmpbooking[ 'rates_uid' ]					= $this->rates_uid;
			$tmpBookingHandler->tmpbooking[ 'resource' ]					= $this->resource;
			$tmpBookingHandler->tmpbooking[ 'single_person_suppliment' ]	= $this->single_person_suppliment;
			$tmpBookingHandler->tmpbooking[ 'deposit_required' ]			= $this->deposit_required;
			$tmpBookingHandler->tmpbooking[ 'contract_total' ]				= $this->contract_total;
			$tmpBookingHandler->tmpbooking[ 'extrasvalue' ]					= $this->extrasvalue;
			$tmpBookingHandler->tmpbooking[ 'extras' ]						= $this->extras;
			$tmpBookingHandler->tmpbooking[ 'extrasquantities' ]			= $this->extrasquantities;
			$tmpBookingHandler->tmpbooking[ 'standard_guest_numbers' ]		= $this->standard_guest_numbers;
			$tmpBookingHandler->tmpbooking[ 'extra_guest_numbers' ]			= $this->extra_guest_numbers;
			$tmpBookingHandler->tmpbooking[ 'child_numbers' ]				= $this->child_numbers;
			$tmpBookingHandler->tmpbooking[ 'child_prices' ]				= $this->child_prices;


			$tmpBookingHandler->tmpbooking[ 'extra_guest_price' ]			= $this->extra_guest_price;
			$tmpBookingHandler->tmpbooking[ 'city_tax' ]					= $this->city_tax;
			$tmpBookingHandler->tmpbooking[ 'cleaning_fee' ]				= $this->cleaning_fee;

			if ($jrConfig['session_handler'] == 'database') {
				$tmpBookingHandler->tmpbooking[ 'extrasvalues_items' ]				= $this->extrasvalues_items;
				$tmpBookingHandler->tmpbooking[ 'third_party_extras' ]				= $this->third_party_extras;
				$tmpBookingHandler->tmpbooking[ 'third_party_extras_private_data' ]	= $this->third_party_extras_private_data;
				$tmpBookingHandler->tmpbooking[ 'room_allocations' ]				= $this->room_allocations;
				$tmpBookingHandler->tmpbooking[ 'room_allocations_note' ]			= $this->room_allocations_note;
				$tmpBookingHandler->tmpbooking[ 'additional_line_items' ]			= $this->additional_line_items;
				$tmpBookingHandler->tmpbooking[ 'room_feature_filter' ]					= $this->room_feature_filter;
			} else {
				$tmpBookingHandler->tmpbooking[ 'extrasvalues_items' ]				= serialize($this->extrasvalues_items);
				$tmpBookingHandler->tmpbooking[ 'third_party_extras' ]				= serialize($this->third_party_extras);
				$tmpBookingHandler->tmpbooking[ 'third_party_extras_private_data' ]	= serialize($this->third_party_extras_private_data);
				$tmpBookingHandler->tmpbooking[ 'room_allocations' ]				= serialize($this->room_allocations);
				$tmpBookingHandler->tmpbooking[ 'room_allocations_note' ]			= serialize($this->room_allocations_note);
				$tmpBookingHandler->tmpbooking[ 'additional_line_items' ]			= serialize($this->additional_line_items);
				$tmpBookingHandler->tmpbooking[ 'room_feature_filter' ]				= serialize($this->room_feature_filter);
			}

			$tmpBookingHandler->tmpbooking[ 'total_discount' ]						= $this->total_discount;
			$tmpBookingHandler->tmpbooking[ 'depositpaidsuccessfully' ]				= $this->depositpaidsuccessfully;
			$tmpBookingHandler->tmpbooking[ 'tax' ]									= $this->tax;
			$tmpBookingHandler->tmpbooking[ 'booker_class' ]						= $this->booker_class;
			$tmpBookingHandler->tmpbooking[ 'ok_to_book' ]							= $this->ok_to_book;
			$tmpBookingHandler->tmpbooking[ 'beds_available' ]						= $this->beds_available;
			$tmpBookingHandler->tmpbooking[ 'referrer' ]							= $this->referrer;
			$tmpBookingHandler->tmpbooking[ 'error_log' ]							= $this->error;
			$tmpBookingHandler->tmpbooking[ 'total_in_party' ]						= $this->total_in_party;
			$tmpBookingHandler->tmpbooking[ 'room_total' ]							= $this->room_total;
			$tmpBookingHandler->tmpbooking[ 'room_total_nodiscount' ]				= $this->room_total_nodiscount;
			$tmpBookingHandler->tmpbooking[ 'discounts' ]							= $this->discounts;
			$tmpBookingHandler->tmpbooking[ 'timestamp' ]							= date('Y-m-d H:i:s');
			$tmpBookingHandler->tmpbooking[ 'mininterval' ]							= $this->mininterval;
			$tmpBookingHandler->tmpbooking[ 'coupon_id' ]							= $this->coupon_id;
			$tmpBookingHandler->tmpbooking[ 'coupon_code' ]							= $this->coupon_code;
			$tmpBookingHandler->tmpbooking[ 'coupon_details' ]						= $this->coupon_details;
			$tmpBookingHandler->tmpbooking[ 'coupon_discount_value' ]				= $this->coupon_discount_value;
			$tmpBookingHandler->tmpbooking[ 'booking_notes' ]						= $this->booking_notes;
			$tmpBookingHandler->tmpbooking[ 'override_room_total' ]					= $this->override_room_total;
			$tmpBookingHandler->tmpbooking[ 'override_deposit' ]					= $this->override_deposit;

			$tmpBookingHandler->tmpbooking[ 'show_extras' ]							= $this->cfg_showExtras;
			$tmpBookingHandler->tmpbooking[ 'property_currencycode' ]				= $this->property_currencycode;
			$tmpBookingHandler->tmpbooking[ 'email_address_can_be_used' ]			= $this->email_address_can_be_used;

			if (isset($this->thirdparty_vars)) {
				$tmpBookingHandler->tmpbooking[ 'thirdparty_vars' ]					= $this->thirdparty_vars;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function getAllRoomsData()
		{
			$room_type_filter = (int)jomresGetParam($_REQUEST, 'room_type_filter', 0);

			$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
			$basic_room_details->get_all_rooms($this->property_uid);

			jr_import('jomres_markdown');
			$jomres_markdown = new jomres_markdown();

			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$images = $jomres_media_centre_images->get_images($this->property_uid, array('rooms')); // Gets the rooms images

			$room_images = $images [ 'rooms' ];

			foreach ($basic_room_details->rooms as $r) {
				if ($room_type_filter == 0 || $r['room_classes_uid'] == $room_type_filter) {
					$this->allPropertyRooms[ $r['room_uid'] ] = array(
						'room_uid' => $r['room_uid'],
						'room_classes_uid' => $r['room_classes_uid'],
						'propertys_uid' => $r['propertys_uid'],
						'room_features_uid' => $r['room_features_uid'],
						'room_name' => $r['room_name'],
						'room_number' => $r['room_number'],
						'room_floor' => $r['room_floor'],
						'max_people' => $r['max_people'],
						'singleperson_suppliment' => $r['singleperson_suppliment'],
						'tagline' => $r['tagline'],
						'description' => $jomres_markdown->get_markdown($r['description']),
						'surcharge' => $r['surcharge'],
						'small_room_image' => $room_images [ $r['room_uid'] ] [0] ['small'],
						'medium_room_image' => $room_images [ $r['room_uid'] ] [0] ['medium'],
						'large_room_image' => $room_images [ $r['room_uid'] ] [0] ['large'],
					);

					$this->allPropertyRoomUids[ ] = $r['room_uid'];

					if (!in_array($r['room_classes_uid'], $this->allRoomClassIds)) {
						$this->allRoomClassIds[ ] = $r['room_classes_uid'];
					}
				}
			}

			if (!empty($basic_room_details->all_room_features)) {
				$this->allFeatureIds = array_keys($basic_room_details->all_room_features);
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function getAllTariffsData()
		{
			$query = "SELECT `rates_uid`,`rate_title`,`rate_description`,`validfrom`,`validto`,
			`roomrateperday`, `extra_guests_price`,  `modifiers`, `mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
			`ignore_pppn`,`allow_ph`,`allow_we`,`weekendonly`,`dayofweek`,`minrooms_alreadyselected`,`maxrooms_alreadyselected`
			FROM #__jomres_rates WHERE property_uid = '$this->property_uid'
			AND DATE_FORMAT(`validto`, '%Y/%m/%d') >= DATE_FORMAT('".$this->today."', '%Y/%m/%d')
			";

			$tariffs = doSelectSql($query);

			//$this->setErrorLog("getAllTariffsData:: ".$query );
			//$this->setErrorLog("Finding tariffs");
			//$this->setErrorLog($query);
			//$this->setErrorLog(serialize($tariffs) );

			$interval = new DateInterval('P1D');
			foreach ($tariffs as $t) {
				if (is_null($t->modifiers)) {
					$t->modifiers = '';
				}

				$roomrate = $this->get_nett_price($t->roomrateperday, $this->accommodation_tax_rate);
				$dates = $this->get_periods($t->validfrom, $t->validto.' 23:59:59', $interval);
				$this->allPropertyTariffs[ $t->rates_uid ] = array(
					'rates_uid' => $t->rates_uid,
					'rate_title' => $t->rate_title,
					'rate_description' => $t->rate_description,
					'validfrom' => $t->validfrom,
					'validto' => $t->validto,
					'roomrateperday' => $roomrate,
					'extra_guests_price' => $t->extra_guests_price ,
					'modifiers' => json_decode(base64_decode($t->modifiers)) ,
					'mindays' => $t->mindays,
					'maxdays' => $t->maxdays,
					'minpeople' => $t->minpeople,
					'maxpeople' => $t->maxpeople,
					'roomclass_uid' => $t->roomclass_uid,
					'ignore_pppn' => $t->ignore_pppn,
					'allow_ph' => $t->allow_ph,
					'allow_we' => $t->allow_we,
					'weekendonly' => $t->weekendonly,
					'dayofweek' => $t->dayofweek,
					'minrooms_alreadyselected' => $t->minrooms_alreadyselected,
				'maxrooms_alreadyselected' => $t->maxrooms_alreadyselected,
				'tariff_dates' => $dates,
			);

			if (!empty($this->allPropertyTariffs)) {
				$mindays_array = array();
				foreach ($this->allPropertyTariffs as $tariff) {
					$mindays = $tariff['mindays'];
					if (!isset($mindays_array[$mindays] )) {
						$mindays_array[] = $mindays;
					}
				}
				if (count($mindays_array) == 1) {
					$this->mininterval = (int) $mindays;
				} else {
					$this->mininterval = min($mindays_array);
				}
			}
		}
	}

		/**
		 *
		 *
		 *
		 */

		public function getAllRoomFeatureDetails()
		{
			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images($this->property_uid, array('room_features'));

			$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
			$basic_room_details->get_all_rooms($this->property_uid);

			foreach ($basic_room_details->all_room_features as $f) {
				$this->allFeatureDetails[ $f['room_features_uid'] ] = array('room_features_uid' => $f['room_features_uid'], 'feature_description' => $f['feature_description'], 'image' => $f['image'], 'tooltip' => $f['tooltip']);
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function getAllRoomClasses()
		{
			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images($this->property_uid);
			$jomres_media_centre_images->get_site_images('rmtypes'); // These are administrator created room type images. If the property manager doesn't upload images for a room type (which is quite possible if they aren't given the option) then we'll "fallback" to admin created images instead

			$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

			$resource_type = 'room_types';

			$query = 'SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE room_classes_uid IN ('.jomres_implode($this->allRoomClassIds).') ';
			$roomClasses = doSelectSql($query);
			foreach ($roomClasses as $c) {
				$roomtype_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int) $c->room_classes_uid, stripslashes($c->room_class_abbv), false, false);
				$roomtype_desc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int) $c->room_classes_uid, stripslashes($c->room_class_full_desc), false, false);

				$resource_id = $c->room_classes_uid;

				if (isset($jomres_media_centre_images->images [$resource_type] [$resource_id])) {
					$images = $jomres_media_centre_images->images [$resource_type] [$resource_id];
				} else {
					if (isset($basic_property_details->this_property_room_classes[$resource_id]['image']) && file_exists(JOMRES_IMAGELOCATION_ABSPATH.'rmtypes/'.$basic_property_details->this_property_room_classes[$resource_id]['image'])) {
						$images = array( array ( "large" => JOMRES_IMAGELOCATION_RELPATH.'rmtypes/'.$basic_property_details->this_property_room_classes[$resource_id]['image']) );
					} else {
						$images = array ( array(
							"large" => $jomres_media_centre_images->multi_query_images['noimage-large'],
							"medium" => $jomres_media_centre_images->multi_query_images['noimage-medium'],
							"small" => $jomres_media_centre_images->multi_query_images['noimage-small']
						) );
					}
				}

				$this->allRoomClasses[ $c->room_classes_uid ] = array('room_class_abbv' => $roomtype_abbv, 'room_class_full_desc' => $roomtype_desc, 'image' => $c->image , 'images' => $images);
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function getAllRoomFeatures()
		{
			$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
			$basic_room_details->get_all_rooms($this->property_uid);

			if (!empty($basic_room_details->all_room_features)) {
				foreach ($basic_room_details->all_room_features as $f) {
					$this->allRoomFeatures[ $f['room_features_uid'] ] = $f['feature_description'];
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function getAllBookings()
		{
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');
			$amend_contractuid = $tmpBookingHandler->getBookingFieldVal('amend_contractuid');
			if (!$amend_contract) {
				$query = "SELECT room_uid,date FROM #__jomres_room_bookings WHERE property_uid = '$this->property_uid' AND room_uid IN (".jomres_implode($this->allPropertyRoomUids).') ';
			} else {
				$query = "SELECT room_uid,date FROM #__jomres_room_bookings WHERE property_uid = '$this->property_uid' AND contract_uid != '$amend_contractuid' AND room_uid IN (".jomres_implode($this->allPropertyRoomUids).') ';
			}
			$bookings = doSelectSql($query);
			foreach ($bookings as $c) {
				//$date=str_replace("/","",$c->date);
				$this->allBookings[ $c->date ][ $c->room_uid ] = array('room_uid' => $c->room_uid);
			}
			if (!empty($this->allBookings)) {
				ksort($this->allBookings);
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function get_all_tariff_types()
		{
			$mrConfig = $this->mrConfig;
			$this->all_tariff_types_to_tariff_id_xref = array();
			$this->all_tariff_id_to_tariff_type_xref = array();
			if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {
				$query = "SELECT tarifftype_id,tariff_id FROM #__jomcomp_tarifftype_rate_xref  WHERE property_uid = '$this->property_uid'";
				$tariff_type_list = doSelectSql($query);
				if (!empty($tariff_type_list)) {
					foreach ($tariff_type_list as $type) {
						$this->all_tariff_types_to_tariff_id_xref[ $type->tarifftype_id ][ ] = $type->tariff_id;
						$this->all_tariff_id_to_tariff_type_xref[ $type->tariff_id ][ ] = $type->tarifftype_id;
					}
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function getAllTaxRates()
		{
			$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');
			$this->taxrates = $jrportal_taxrate->taxrates;
			//$this->setErrorLog( "Init found tax rates " . serialize( $this->taxrates ) );
		}

		/**
		 *
		 *
		 *
		 */

		public function sanitise_for_eval($string)
		{
			$string = str_replace('"', '\"', $string);
			$string = str_replace("'", "\'", $string);
			$string = trim(preg_replace('/\s+/', ' ', $string)); // strips carriage returns from strings generated through templates
			return $string;
		}

		/**
		 *
		 *
		 *
		 */

		public function get_fullybooked_dates()
		{
			$fully_booked_dates = array();
			$MiniComponents = jomres_getSingleton('mcHandler');
			if ($MiniComponents->eventFileExistsCheck('05060')) {
				$result = $MiniComponents->triggerEvent('05060', $this);
				if (isset($result[ 'plugin_manages_fully_booked_dates' ]) && $result[ 'plugin_manages_fully_booked_dates' ]) {
					$booked_dates = $result[ 'fully_booked_dates' ];
					foreach ($booked_dates as $date) {
						$tmpdate = date('Y-n-j', strtotime($date));
						$fully_booked_dates[ ] = $tmpdate;
					}
				}
			}
			if (!isset($result[ 'plugin_manages_fully_booked_dates' ])) {
				$total_number_of_rooms = count($this->allPropertyRooms);

				foreach ($this->allBookings as $date => $bookings) {
					$number_of_bookings_this_date = count($bookings);
					if ($number_of_bookings_this_date == $total_number_of_rooms) {
						$tmpdate = date('Y-n-j', strtotime($date));
						$fully_booked_dates[ ] = $tmpdate;
					}
				}
				$all_tariffs_are_specific_days_of_week = true;
				foreach ($this->allPropertyTariffs as $tariff) {
					if ($tariff[ 'dayofweek' ] == 7) {
						$all_tariffs_are_specific_days_of_week = false;
					}
				}
				if ($all_tariffs_are_specific_days_of_week) {
					$days_of_week_allowed = array();
					foreach ($this->allPropertyTariffs as $tariff) {
						$days_of_week_allowed[ ] = $tariff[ 'dayofweek' ];
					}
					$days_of_week_allowed = array_unique($days_of_week_allowed);
					$start = date('Y/m/d');
					$end = date('Y/m/d', strtotime('+4 years'));
					$dates = $this->findDateRangeForDates($start, $end);
					$count = count($dates);
					for ($i = 0; $i <= $count; ++$i) {
						$date = $dates[ $i ];
						$day_of_week_of_date = $this->getDayOfWeek($date);
						if (in_array($day_of_week_of_date, $days_of_week_allowed)) {
							unset($dates[ $i ]);
						}
					}
					foreach ($dates as $d) {
						$tmpdate = date('Y-n-j', strtotime($d));
						$fully_booked_dates[ ] = $tmpdate;
					}
				}
			}

			return $fully_booked_dates;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Generic variant handling

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/**
		 *Sanitises the input from the ajax query.
		 */
		public function sanitiseInput($type, $value)
		{
			switch ($type) {
				case 'int':
					$value = (int) $value;
					break;
				case 'string':
					$value = $this->makeStringSafe($value);
					break;
				case 'date':
					$tmpDate = explode('/', $value);
					if (count($tmpDate) != 3) {
						$value = null;
					}
					break;
				default:
					$value = null;
					break;
			}

			return $value;
		}

		/**
		 * Sanitises the output before it's sent to the form. As the third phase of the form is generated from evaluated javascript queries any ' characters etc have to be stripped out before they're returned to the booking form.
		 */
		public function sanitiseOutput($data)
		{
			//$this->error($data);
			//$data=str_replace("&#39;","\&#39;",$data);  // These two lines commented out for 4.7.8 as they were removing ' from translated/editing mode stuff such as extras.
			//$data=str_replace("'","\'",$data);
			//$data=htmlentities($data);
			return $data;
		}

		/**
		 * Make the string escaped.
		 */
		public function makeStringSafe($data)
		{
			$data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);

			return $data;
		}

		/**
		 * Resets the requested room array to nuthin. When the currently available rooms list is re-generated the available rooms list is completely re-calculated.
		 */
		public function resetRequestedRoom()
		{
			jr_import('jomres_roomlocks');
			$room_locker = new jomres_roomlocks();
			$room_locker->unlock_all_rooms_for_session();
			$this->requestedRoom = array();
		}

		/**
		 * Returns whether or not error checking flag is on or off.
		 */
		public function errorChecking()
		{
			if ($this->cfg_errorChecking == '1') {
				return true;
			} else {
				return false;
			}
		}

		/**
		 * Receives debugging messages and stores them in an array $this->error.
		 */
		public function setErrorLog($errorText)
		{
			$this->error .= $errorText.' <br/> ';
		}

		public function setErrorLogFirst($title)
		{
			$this->error = '<b>'.$title.'</b><br/>'.$this->error;
		}

		/**
		 * Returns the contents of $this->error.
		 */
		public function getErrorLog()
		{
			$errorString = '';
			$errorString .= htmlentities($this->error);

			return $this->error;
		}

		/**
		 *
		 *
		 *
		 */

		public function writeToLogfile($text)
		{
			logging::log_message($text, 'Dobooking', 'DEBUG');
		}

		/**
		 *
		 *
		 *
		 */

		public function getGrowlMessages()
		{
			$messages = ';';
			if ($this->jrConfig[ 'useJomresMessaging' ] == '1') {
				if (isset($this->growlmessages[ 'messages' ]) && !empty($this->growlmessages[ 'messages' ])) {
					foreach ($this->growlmessages[ 'messages' ] as $message) {
						if ($message != '') {
							$messages .= 'jomresJquery.jGrowl(\''.$message.'\', { life: 20000,sticky:true });';
						}
					}
				}
				if (isset($this->growlmessages[ 'guest_feedback' ]) && !empty($this->growlmessages[ 'guest_feedback' ])) {
					$messages .= 'jomresJquery.jGrowl(\''.$this->growlmessages[ 'guest_feedback' ].'\', { life: 10000 });';
				}
				$messages = substr($messages, 0, -1);

				return $messages;
			} elseif (isset($this->growlmessages[ 'messages' ]) && !empty($this->growlmessages[ 'messages' ])) { // normal messages are useful when developing the booking engine, so even if popups are disabled by default, we still want to see messages coded by the developer.
				foreach ($this->growlmessages[ 'messages' ] as $message) {
					if ($message != '') {
						$messages .= 'jomresJquery.jGrowl(\''.$message.'\', { life: 20000,sticky:true });';
					}
				}

				return $messages;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function setPopupMessage($message)
		{
			$msg = $this->sanitiseOutput($message);
			if ($_REQUEST[ 'field' ] != 'property_uid_check') {
				$this->growlmessages[ 'messages' ][ ] = $msg;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function setGuestPopupMessage($message)
		{
			$msg = $this->sanitiseOutput($message);
			if (isset($_REQUEST[ 'field' ]) && $_REQUEST[ 'field' ] != 'property_uid_check') {
				$this->growlmessages[ 'guest_feedback' ] = $msg;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function echo_populate_div($message)
		{
			if (!$this->suppress_output) {
				echo $message;
			}
		}

		/**
		 * Returns true if this property is an SRP.
		 */
		public function getSingleRoomPropertyStatus()
		{
			if ($this->cfg_singleRoomProperty == '1') {
				return true;
			} else {
				return false;
			}
		}

		/**
		 * Make the Optional Extras.
		 */
		public function makeExtras($selectedProperty)
		{
			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images($this->property_uid, array('extras'));

			$thisJRUser = jomres_getSingleton('jr_user');

			$mrConfig = $this->mrConfig;
			$extra_details = array();

			if ($mrConfig[ 'showExtras' ] == '1') {
				$query = "SELECT `uid`,`name`,`desc`,`maxquantity`,`price`,`auto_select`,`tax_rate`,`chargabledaily`,`property_uid`,`published`,`validfrom`,`validto`,`limited_to_room_type` FROM `#__jomres_extras` where property_uid = '$selectedProperty' AND published = '1' ORDER BY name";
				$exList = doSelectSql($query);

				$selected_rooms_room_types = array();
				if (!empty($this->requestedRoom)) {
					foreach ($this->requestedRoom as $rm) {
						$room = explode('^', $rm);
						$tariff_id = $room[ 1 ];
						$booking_room_type_id = $this->allPropertyTariffs[ $tariff_id ] ['roomclass_uid'];
						$selected_rooms_room_types [] = $booking_room_type_id;
					}
				}

				foreach ($exList as $ex) {
					$show_extra = true;

					$arrival_ts = strtotime(str_replace('/', '-', $this->arrivalDate));
					$validfrom_ts = strtotime($ex->validfrom);
					$validto_ts = strtotime($ex->validto);

					if ($ex->validfrom > '1970-01-01 00:00:01' && !is_null($ex->validfrom) && $ex->validfrom != '1999-11-30 00:00:00') { // takes into account older optional extras
						if (!(($arrival_ts >= $validfrom_ts) && ($arrival_ts <= $validto_ts))) {
							$show_extra = false;
						}
					}

					// add checks for room types

					if ((int) $ex->limited_to_room_type > 0 && !empty($selected_rooms_room_types)) {
						if (!in_array((int) $ex->limited_to_room_type, $selected_rooms_room_types)) {
							$show_extra = false;
						}
					}

					if (!$show_extra) {
						$this->removeExtra($ex->uid);
					} else {
						$extra_deets[ 'UID' ] = $ex->uid;
						$query = "SELECT `force`,`model` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '$ex->uid'";
						$model = doSelectSql($query, 2);

						switch ($model[ 'model' ]) {
							case '1': // Per week
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK'));
								break;
							case '2': // per days
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS'));
								break;
							case '3': // per booking
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING'));
								break;
							case '4': // per person per booking
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING'));
								break;
							case '5': // per person per day
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY'));
								break;
							case '6': // per person per week
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK'));
								break;
							case '7': // per person per days min days
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS'));
								break;
							case '8': // per days per room
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM'));
								break;
							case '9': // per room
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING'));
								break;
							case '100': // commission
								$model_text = $this->sanitiseOutput(jr_gettext('_JOMRES_COMMISSION', '_JOMRES_COMMISSION'));
								break;
						}

						if (isset($this->taxrates[ $ex->tax_rate ][ 'rate' ])) {
							$rate = (float) $this->taxrates[ $ex->tax_rate ][ 'rate' ];
						} else { // An older tax rate may have been deleted
							$rate = 0;
						}

						if ($model[ 'model' ] != '100') { // Model 10 is commission, so it's a percentage.
							$price = $ex->price;

							if ($mrConfig[ 'prices_inclusive' ] == 1) {
								$divisor = ($rate / 100) + 1;
								$price = $price / $divisor;
							}
							$tax = ($price / 100) * $rate;
							$inc_price = $price + $tax;
						} else {
							$inc_price = ($this->room_total / 100) * $ex->price;
							$commission_rate = $ex->price;
						}

						$tax_output = '';
						if ($rate > 0) {
							$tax_output = ' ('.$rate.'%)';
						}
						$extra_deets[ 'NAME' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$ex->uid, jomres_decode($ex->name)));
						$extra_deets[ 'MODELTEXT' ] = $tax_output.' ( '.$model_text.' )';
						if ($model[ 'model' ] != '100') {
							$extra_deets[ 'PRICE' ] = output_price($inc_price);
						} else {
							$extra_deets[ 'PRICE' ] = output_price($inc_price).' ('.$commission_rate.'%)';
						}

						$extra_deets[ 'EXTRA_IMAGE' ] = $jomres_media_centre_images->multi_query_images['noimage-small'];
						if (isset($jomres_media_centre_images->images['extras'][$ex->uid][0]['small'])) {
							$extra_deets[ 'EXTRA_IMAGE' ] = $jomres_media_centre_images->images['extras'][$ex->uid][0]['small'];
						}

						if ($mrConfig[ 'wholeday_booking' ] == '1') {
							if ($ex->chargabledaily == '1') {
								$extra_deets[ 'PERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', false, true));
							} else {
								$extra_deets[ 'PERNIGHT' ] = '';
							}
						} else {
							if ($ex->chargabledaily == '1') {
								$extra_deets[ 'PERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_PERDAY', '_JOMRES_COM_PERDAY', false, true));
							} else {
								$extra_deets[ 'PERNIGHT' ] = '';
							}
						}
						$extra_deets[ 'DESCRIPTION' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid, jomres_decode($ex->desc)));

						$descriptionForOverlib = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid, jomres_decode($ex->desc), false, true);

						$extra_deets[ 'OVERLIB_DESCRIPTION' ] = $descriptionForOverlib;

						$checked = '';
						if ($this->extraAlreadySelected($ex->uid) || (int) $ex->auto_select == 1) {
							$checked = ' checked ';
							$this->setExtras($ex->uid);
							$extraDefaultQuantity = $this->extrasquantities[ $ex->uid ];
						} else {
							$extraDefaultQuantity = 1;
						}
						$inputId = preg_replace('/[^A-Za-z0-9_-]+/', '', $ex->name);
						if (strlen($inputId) == 0) {
							$inputId = generateJomresRandomString(10);
						}
						$firstChar = $inputId[ 0 ]; // We'll add a simple test here to change the first char to X if the first character's actually a number, otherwise the getResponse_extras will not work.
						if ($firstChar == '0' || $firstChar == '1' || $firstChar == '2' || $firstChar == '3' || $firstChar == '4' || $firstChar == '5' || $firstChar == '6' || $firstChar == '7' || $firstChar == '8' || $firstChar == '9') {
							$inputId = 'X'.$inputId;
						}

						$clickUnlock = '';
						if ($model[ 'force' ] != '1' || $thisJRUser->userIsManager) {
							$extra_deets[ 'INPUTBOX' ] = '<input id="extras_'.$ex->uid.'" type="checkbox" class="form-check-input" name="extras['.$ex->uid.']" value="'.$ex->uid.'" '.$checked.' autocomplete="off"  onClick="'.$clickUnlock.'getResponse_extras(\'extras\',this.value,'.$ex->uid.');" />';
						} else {
							$this->forcedExtras[ ] = $ex->uid;
							$this->setExtras($ex->uid);
							$extra_deets[ 'INPUTBOX' ] = '<input id="extras_'.$ex->uid.'" type="checkbox" class="form-check-input" checked disabled=" " onclick="return false;" name="extras['.$ex->uid.']" value="'.$ex->uid.'" />';
						}
						$extra_deets[ 'FIELDNAME' ] = 'extras['.$ex->uid.']';

						$extra_quantity_dropdown_disabled = ' disabled=" " ';
						if ($this->extraAlreadySelected($ex->uid)) {
							$extra_quantity_dropdown_disabled = ' ';
						}

						if ($ex->maxquantity > 1) {
							$extra_deets[ 'INPUTBOX' ] =
								$extra_deets[ 'INPUTBOX' ].'&nbsp;&nbsp;'.
								jomresHTML::integerSelectList(01, $ex->maxquantity, 1, 'quantity'.$ex->uid, 'size="1" class="input-mini"  autocomplete="off" '.$extra_quantity_dropdown_disabled.' onchange="getResponse_extrasquantity(\'extrasquantity\',this.value,'.$ex->uid.');"', $extraDefaultQuantity, '%02d', $use_bootstrap_radios = false);
						}

						$extra_deets[ 'AJAXFORM_EXTRAS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS', '_JOMRES_AJAXFORM_EXTRAS'));
						$extra_deets[ 'AJAXFORM_EXTRAS_DESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS_DESC', '_JOMRES_AJAXFORM_EXTRAS_DESC', false));
						$extra_deets[ 'EXTRAS_TOTAL' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS_TOTAL', '_JOMRES_AJAXFORM_EXTRAS_TOTAL'));

						$extra_details[ ] = $extra_deets;
					}
				}
			}

			if (!empty($extra_details)) {
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->addRows('extras', $extra_details);
				$tmpl->readTemplatesFromInput('dobooking_extras.html');
				$extras_template = $tmpl->getParsedTemplate();
			} else {
				$extras_template = $this->sanitiseOutput(jr_gettext('_JOMRES_EXTRAS_NOEXTRAS', '_JOMRES_EXTRAS_NOEXTRAS'));
			}

			return array('core_extras' => $extras_template);
		}

		/**
		 *
		 *
		 *
		 */

		public function makeThirdPartyExtras($selectedProperty)
		{
			$third_party_extras = array();

			$MiniComponents = jomres_getSingleton('mcHandler');
			if ($MiniComponents->eventFileExistsCheck('05030')) {
				$MiniComponents->triggerEvent('05030', $this);

				$mcOutput = $MiniComponents->getAllEventPointsData('05030');

				if (!empty($mcOutput)) {
					foreach ($mcOutput as $key => $val) {
						$tpe = array();
						$tpe[ 'THIRD_PARTY_EXTRA' ] = $val;
						$third_party_extras[ ] = $tpe;
					}
				}
			}

			return array('third_party_extras' => $third_party_extras);
		}

		/**
		 * Make the Output text, put them into an array for patTemplate and return the array.
		 */
		public function makeOutputText()
		{
			$mrConfig = $this->mrConfig;

			$thisJRUser = jomres_getSingleton('jr_user');

			$tax_output = '';
			if ($this->accommodation_tax_rate > 0) {
				$tax_output = ' ('.$this->accommodation_tax_rate.'%)';
			}

			$output = array();
			if ($mrConfig[ 'wholeday_booking' ] == '1') {
				$output[ 'HARRIVALDATE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY'));
			} else {
				$output[ 'HARRIVALDATE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL'));
			}
			if ($mrConfig[ 'showdepartureinput' ] == '1') {
				if ($mrConfig[ 'fixedPeriodBookings' ] == '1') {
					$output[ 'HDEPARTUREDATE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_FIXEDPRIOD1', '_JOMRES_FRONT_MR_FIXEDPRIOD1'));
				} else {
					if ($mrConfig[ 'wholeday_booking' ] == '1') {
						$output[ 'HDEPARTUREDATE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY'));
					} else {
						$output[ 'HDEPARTUREDATE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE'));
					}
				}
			} else {
				$output[ 'HDEPARTUREDATE' ] = '&nbsp;';
			}

			$output[ 'BOOKINGHEADER' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRESDESC', '_JOMRES_COM_MR_QUICKRESDESC'));
			$output[ 'ADDRESSHEADER' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS'));
			$output[ 'HEXTITLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP'));

			$output[ 'REQUIREDTEXT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_JAVASCRIPT_', '_JOMRES_JAVASCRIPT_'));
			if ($mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == '0') {
				if ($mrConfig[ 'wholeday_booking' ] == '1') {
					$output[ 'BILLING_ROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY'));
				} else {
					$output[ 'BILLING_ROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM', '_JOMRES_AJAXFORM_BILLING_ROOM'));
				}
			}
			$output[ 'BILLING_ROOMTOTAL' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL'));
			if ($mrConfig[ 'showExtras' ] == '1') {
				$output[ 'BILLING_EXTRAS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS', '_JOMRES_AJAXFORM_BILLING_EXTRAS'));
			}
			if (get_showtime('include_room_booking_functionality')) {
				$output[ 'BILLING_TAX' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX', '_JOMRES_AJAXFORM_BILLING_TAX'));
			}

			$output[ 'BILLING_DISCOUNT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT', '_JOMRES_AJAXFORM_BILLING_DISCOUNT'));

			$output[ 'BILLING_TOTAL' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL', '_JOMRES_AJAXFORM_BILLING_TOTAL'));
			if ($mrConfig[ 'chargeDepositYesNo' ] == '1') {
				$output[ 'DEPOSIT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED'));
			}
			//$output['CURRENCY_SYMBOL']		=$mrConfig['currency'];
			$output[ 'BILLING_TOTALINPARTY' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY'));
			$output[ 'AJAXFORM_PARTICULARS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_PARTICULARS', '_JOMRES_AJAXFORM_PARTICULARS'));
			$output[ 'AJAXFORM_PARTICULARS_DESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_PARTICULARS_DESC', '_JOMRES_AJAXFORM_PARTICULARS_DESC'));
			$output[ 'AJAXFORM_AVAILABLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLE', '_JOMRES_AJAXFORM_AVAILABLE'));
			if ($thisJRUser->is_partner) {
				$output[ 'AJAXFORM_ADDRESS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_PARTNERS_GUEST_ADDRESS', '_JOMRES_PARTNERS_GUEST_ADDRESS'));
			} else {
				$output[ 'AJAXFORM_ADDRESS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ADDRESS', '_JOMRES_AJAXFORM_ADDRESS'));
			}
			$output[ 'AJAXFORM_ADDRESS_DESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ADDRESS_DESC', '_JOMRES_AJAXFORM_ADDRESS_DESC', false));
			$output[ 'AJAXFORM_AVAILABLEROOMS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS', '_JOMRES_AJAXFORM_AVAILABLEROOMS'));
			$output[ 'AJAXFORM_SELECTEDROOMS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS', '_JOMRES_AJAXFORM_SELECTEDROOMS', false));

			if ($mrConfig[ 'singleRoomProperty' ] == '0') {
				$output[ 'AJAXFORM_AVAILABLEROOMS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS', '_JOMRES_AJAXFORM_AVAILABLEROOMS'));
				$output[ 'AJAXFORM_SELECTEDROOMS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS', '_JOMRES_AJAXFORM_SELECTEDROOMS', false));
				$output[ 'AJAXFORM_AVAILABLE_DESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLE_DESC', '_JOMRES_AJAXFORM_AVAILABLE_DESC', false));
				$output[ 'AJAXFORM_INSTRUCTIONS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_INSTRUCTIONS', '_JOMRES_AJAXFORM_INSTRUCTIONS'));
			} else {
				$output[ 'AJAXFORM_AVAILABLEROOMS' ] = '';
				$output[ 'AJAXFORM_SELECTEDROOMS' ] = '';
				$output[ 'AJAXFORM_AVAILABLE_DESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', false));
				$output[ 'AJAXFORM_INSTRUCTIONS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP'));
			}

			$output[ 'ACCOMMODATION_TOTAL' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL')).$tax_output;

			switch ($this->cfg_booking_form_daily_weekly_monthly) {
				case 'D':
					if ($mrConfig[ 'wholeday_booking' ] == '1') {
						$output[ 'ACCOMMODATION_NIGHTS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY'));
					} else {
						$output[ 'ACCOMMODATION_NIGHTS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS'));
					}
					break;
				case 'W':
					$output[ 'ACCOMMODATION_NIGHTS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS'));
					break;
				case 'M':
					$output[ 'ACCOMMODATION_NIGHTS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS'));
					break;
			}

			/* 			if ($mrConfig['perPersonPerNight'] == "0" )
			$output['ACCOMMODATION_PERROOM']=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM));
		else
			$output['ACCOMMODATION_PERROOM']=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON)); */

			if ($mrConfig[ 'perPersonPerNight' ] == '0') {
				switch ($this->cfg_booking_form_daily_weekly_monthly) {
					case 'D':
						if ($mrConfig[ 'wholeday_booking' ] == '1') {
							$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY'));
						} else {
							$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY'));
						}
						break;
					case 'W':
						$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY'));
						break;
					case 'M':
						$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY'));
						break;
				}
			} else {
				switch ($this->cfg_booking_form_daily_weekly_monthly) {
					case 'D':
						if ($mrConfig[ 'wholeday_booking' ] == '1') {
							$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PERPERSON', '_JOMRES_BOOKINGFORM_PERPERSON')).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY'));
						} else {
							$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PERPERSON', '_JOMRES_BOOKINGFORM_PERPERSON')).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY'));
						}
						break;
					case 'W':
						$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PERPERSON', '_JOMRES_BOOKINGFORM_PERPERSON')).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY'));
						break;
					case 'M':
						$output[ 'ACCOMMODATION_PERROOM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PERPERSON', '_JOMRES_BOOKINGFORM_PERPERSON')).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY'));
						break;
				}
			}

			$output[ 'PRICE_SUMMARY' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_PRICE_SUMMARY', '_JOMRES_AJAXFORM_PRICE_SUMMARY'));

			$output[ 'ERRORBACKGROUNDCOLOUR' ] = $mrConfig[ 'inputBoxErrorBackground' ];
			$output[ 'INPUTOKTOBOOK_BACKGROUND' ] = $mrConfig[ 'inputBoxOktobookBackground' ];

			if ($mrConfig[ 'wholeday_booking' ] == '1') {
				if ($mrConfig[ 'booking_form_daily_weekly_monthly' ] == 'D') {
					$output[ 'STAYDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY'));
				} elseif ($mrConfig[ 'booking_form_daily_weekly_monthly' ] == 'W') {
					$output[ 'STAYDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS'));
				} else {
					$output[ 'STAYDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS'));
				}
			} else {
				if ($mrConfig[ 'booking_form_daily_weekly_monthly' ] == 'D') {
					$output[ 'STAYDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS'));
				} elseif ($mrConfig[ 'booking_form_daily_weekly_monthly' ] == 'W') {
					$output[ 'STAYDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS'));
				} else {
					$output[ 'STAYDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS'));
				}
			}

			if ($mrConfig[ 'requireApproval' ] == '1' && !$thisJRUser->userIsManager) {
				$output[ 'SUBMIT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKING_ENQUIRY_REVIEW', '_JOMRES_BOOKING_ENQUIRY_REVIEW', false, false));
			} else {
				$output[ 'SUBMIT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_REVIEWBOOKING', '_JOMRES_FRONT_MR_REVIEWBOOKING', false, false));
			}

			$output[ 'LOOKRIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_LOOKRIGHT', '_JOMRES_BOOKINGFORM_LOOKRIGHT', false, false));
			$output[ 'ROOM_TOTAL_INC_TAX' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', false, false));
			if ($this->jrConfig[ 'show_tax_in_totals_summary' ] == '1') {
				$output[ 'ROOM_TOTAL_EX_TAX' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', false, false));
				$output[ 'ROOM_TOTAL_ACCOM_TAX' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', false, false));
				$output[ 'EXTRAS_TAX' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS'));
			}
			$output[ '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', false, false));
			$output[ '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', false, false));
			if ($mrConfig[ 'chargeDepositYesNo' ] == '1') {
				$output[ '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', false, false));
			}
			$output[ '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', false, false));

			if (get_showtime('include_room_booking_functionality') && $this->cfg_singlePersonSuppliment == '1') {
				$output[ 'SINGLE_PERSON_SUPPLIMENT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST'));
			}

			$output[ 'ESTIMATEWARNING' ] = $this->sanitiseOutput(jr_gettext('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING'));

			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', false, false));
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', false, false));

			$output[ 'JOMRES_CHILDREN_BOOKING_FORM_LABEL' ] = $this->sanitiseOutput(jr_gettext('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'JOMRES_CHILDREN_BOOKING_FORM_LABEL', false, false));
			$output[ 'JOMRES_GUEST_BOOKING_FORM_LABEL' ] = $this->sanitiseOutput(jr_gettext('JOMRES_GUEST_BOOKING_FORM_LABEL', 'JOMRES_GUEST_BOOKING_FORM_LABEL', false, false));
			$output[ 'JOMRES_GUEST_BOOKING_FORM_LABELINFO' ] = $this->sanitiseOutput(jr_gettext('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'JOMRES_GUEST_BOOKING_FORM_LABELINFO', false, false));

			if (!isset($mrConfig['city_tax_value'])) {
				$mrConfig['city_tax_value'] = 0;
			}

			$city_tax_model_string = '';

			if ($mrConfig['city_tax_value'] > 0) {
				if (!isset($mrConfig[ 'city_tax_models' ])) {
					$mrConfig[ 'city_tax_models' ] = 'single';
				}


				switch ($mrConfig[ 'city_tax_models' ]) {
					case 'single':
						$city_tax_model_string = jr_gettext('JOMRES_CITY_TAX_MODEL_SINGLE', 'JOMRES_CITY_TAX_MODEL_SINGLE', false);
						break;
					case 'pernight':
						$city_tax_model_string = jr_gettext('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'JOMRES_CITY_TAX_MODEL_PER_NIGHT', false) ;
						break;
					case 'perguest':
						$city_tax_model_string = jr_gettext('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'JOMRES_CITY_TAX_MODEL_PER_GUEST', false) ;
						break;
					case 'perguestpernight':
						$city_tax_model_string = jr_gettext('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', false) ;
						break;
					case 'percentbookingtotal':
						$city_tax_model_string = jr_gettext('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', false);
						break;
				}

				$city_tax_model_string .= " (".$mrConfig['city_tax_value'].")" ;
			}

			$output[ 'JOMRES_CITY_TAX_HEADING' ] = $this->sanitiseOutput(jr_gettext('JOMRES_CITY_TAX_HEADING', 'JOMRES_CITY_TAX_HEADING', false, false))." : ".$city_tax_model_string;
			$output[ 'JOMRES_CLEANING_FEE_HEADING' ] = $this->sanitiseOutput(jr_gettext('JOMRES_CLEANING_FEE_HEADING', 'JOMRES_CLEANING_FEE_HEADING', false, false));
			$output[ 'JOMRES_BOOKING_FORM_CHILDREN_AGES' ] = $this->sanitiseOutput(jr_gettext('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'JOMRES_BOOKING_FORM_CHILDREN_AGES', false, false));

			return $output;
		}

		/**
		 * Implodes the variances ready for storing in the database.
		 */
		public function implodeVariances()
		{
			/*
		if (
		count($this->variancetypes) != count($this->varianceuids) ||
		count($this->variancetypes) != count($this->varianceqty) ||
		count($this->variancetypes) != count($this->variancevals)
		)
		return false;
		*/
			$this->vt = implode(',', $this->variancetypes);
			$this->vu = implode(',', $this->varianceuids);
			$this->vq = implode(',', $this->varianceqty);
			$this->vv = implode(',', $this->variancevals);
			$this->vv_nodiscount = implode(',', $this->variancevals_nodiscount);

			return true;
		}

		/**
		 * Generic variant handling. Sets the variant to the specified values.
		 */
		public function setVariant($type = '', $id = '', $qty = 0, $val = 0.00, $val_nodiscount = 0.00)
		{
			if (empty($type) || empty($id)) {
				return false;
			}
			$found = false;
			$n = count($this->variancetypes);
			for ($i = 0; $i <= $n; ++$i) {
				if (isset($this->variancetypes[ $i ])) {
					if ($this->variancetypes[ $i ] == $type && $this->varianceuids[ $i ] == $id) {
						//$this->setErrorLog("Setting variant with qty ".$qty." and value ".$val );
						$found = true;
						$this->varianceqty[ $i ] = $qty;
						$this->variancevals[ $i ] = $val;
						$this->variancevals_nodiscount[ $i ] = $val_nodiscount;
					}
				}
			}
			if (!$found) {
				$this->variancetypes[ ] = $type;
				$this->varianceuids[ ] = $id;
				$this->varianceqty[ ] = $qty;
				$this->variancevals[ ] = $val;
				$this->variancevals_nodiscount[ ] = $val_nodiscount;
			}

			return true;
		}

		/**
		 * Generic variant handling. Returns the variant quantity and value given the variant type and it's id.
		 */
		public function getVariant($type = '', $id = '')
		{
			if (empty($type) || empty($id)) {
				return false;
			}
			$n = count($this->variancetypes);
			for ($i = 0; $i <= $n; ++$i) {
				if (isset($this->variancetypes[$i])) {
					if ($this->variancetypes[ $i ] == $type && $this->varianceuids[ $i ] == $id) {
						$qty = $this->varianceqty[ $i ];
						$val = $this->variancevals[ $i ];
						$val_nodiscount = 0;
						if (isset($this->variancevals_nodiscount[ $i ])) {
							$val_nodiscount = $this->variancevals_nodiscount[ $i ];
						}

						return array('quantity' => $qty, 'value' => $val, 'val_nodiscount' => $val_nodiscount);
					}
				}
			}

			return false;
		}

		/**
		 * Generic variant handling. Return all variants of a given type.
		 */
		public function getVariantsOfType($type = '')
		{
			$tmpArray = array();
			if (!isset($type) || empty($type)) {
				return false;
			}
			//$this->setErrorLog("There are : ".count($this->variancetypes)." examples of variant type ".$type." in the object." );
			//$this->setErrorLog("Variable variancetypes is : ".gettype($this->variancetypes) );

			$n = count($this->variancetypes);
			for ($i = 0; $i <= $n; ++$i) {
				if (isset($this->variancetypes[ $i ]) && $this->variancetypes[ $i ] == $type) {
					$id = $this->varianceuids[ $i ];
					$qty = $this->varianceqty[ $i ];
					$val = $this->variancevals[ $i ];
					$val_nodiscount = 0;
					if (isset($this->variancevals_nodiscount[ $i ])) {
						$val_nodiscount = $this->variancevals_nodiscount[ $i ];
					}
					$tmpArray[ ] = array('id' => $id, 'qty' => $qty, 'val' => $val, 'val_nodiscount' => $val_nodiscount);
				}
			}

			return $tmpArray;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Room feature filtering

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 *
		 *
		 *
		 */

		public function initRoomFeatureFiltering()
		{
			$this->room_feature_checkboxes = array();
			$this->room_feature_filtering_enabled = false;
			if (isset($this->allRoomFeatures) && !empty($this->allRoomFeatures)) {
				$this->room_feature_filtering_enabled = true;

				foreach ($this->allRoomFeatures as $feature_id => $feature) {
					$arr = array();
					$arr[ 'ID' ] = $feature_id;
					$arr[ 'INPUTBOX' ] = '<input id="'.$feature_id.'" type="checkbox"  class="form-check-input" name="room_features['.$feature_id.']" value="'.$feature_id.'" autocomplete="off"  onClick="getResponse_room_features(\'room_features\',this.value,'.$feature_id.');" />';
					$arr[ 'DESCRIPTION' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $feature_id, $feature);
					$this->room_feature_checkboxes[ ] = $arr;
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function toggleRoomFilterId($id)
		{
			if (isset($this->room_feature_filter[ $id ])) {
				unset($this->room_feature_filter[ $id ]);
			} else {
				$this->room_feature_filter[ $id ] = $id;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function check_room_has_selected_room_feature($room_id)
		{
			$bang = explode(',', $this->allPropertyRooms[ $room_id ][ 'room_features_uid' ]);
			$feature_ids = array();
			foreach ($bang as $f) {
				if ($f != '') {
					$feature_ids[ ] = (int) $f;
				}
			}
			if (empty($feature_ids)) {
				return false;
			}
			$count = 0;
			foreach ($this->room_feature_filter as $feature_id) {
				if (in_array($feature_id, $feature_ids)) {
					++$count;
				}
			}
			if ($count == count($this->room_feature_filter)) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function room_acceptable_according_to_room_filter($room_id)
		{
			if (empty($this->room_feature_filter)) { // If the all room features array is empty, we'll return true as we don't want to do any filtering because no feature's been selected yet
				return true;
			}
			if (empty($this->allRoomFeatures)) { // There aren't any room features for this property
				return true;
			}

			return $this->check_room_has_selected_room_feature($room_id);
		}

		/**
		 *
		 *
		 *
		 */

		public function checkRoomFeatureOption($freeRoomsArray)
		{
			$tmpArr = array();
			foreach ($freeRoomsArray as $room_id) {
				if ($this->room_acceptable_according_to_room_filter($room_id)) {
					$tmpArr[ ] = $room_id;
				}
			}

			return $tmpArr;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Room total overrides

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 *
		 *
		 *
		 */

		public function saveOverride($values)
		{
			$thisJRUser = jomres_getSingleton('jr_user');
			if ($thisJRUser->userIsManager) {
				$bang = explode('^', $values);
				$this->override_room_total = (float) $bang[ 0 ];
				$this->override_deposit = (float) $bang[ 1 ];
				//return "OK!";
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Coupons

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/**
		 * Coupons initialise the coupon variables.
		 */
		public function initCoupons()
		{
			$this->use_coupons = false;
			$query = 'SELECT `coupon_id` FROM #__jomres_coupons WHERE (`property_uid` = '.(int) $this->property_uid." OR `property_uid` = 0) AND DATE_FORMAT(`valid_to`, '%Y/%m/%d') >= DATE_FORMAT(NOW(), '%Y/%m/%d') ";
			$result = doSelectSql($query);
			if (!empty($result)) {
				$this->setErrorLog('initCoupons:: Found '.count($result).' coupons for property uid '.$this->property_uid.'. Enabling coupon output');
				$this->use_coupons = true;
			} else {
				$this->setErrorLog('initCoupons:: No coupons found for '.$this->property_uid.' property ');
			}
			$this->coupon_id = '';
			$this->coupon_code = '';
			$this->coupon_details = array();
			$this->coupon_discount_value = '';
			//$this->addBookingNote( "Coupon", "" );
		}

		/**
		 * Coupons saveCoupon and return a success/failure message.
		 */
		public function saveCoupon($coupon_code)
		{
			$thisJRUser = jomres_getSingleton('jr_user');
			$today = date('Y-m-d');
			$query = "SELECT `coupon_id`,`amount`,`is_percentage`,`rooms_only`,`booking_valid_from`,`booking_valid_to`,`guest_uid` FROM #__jomres_coupons WHERE coupon_code = '$coupon_code' AND `valid_from` <= '$today' AND `valid_to` >= '$today' AND (property_uid = $this->property_uid OR property_uid = 0) ";
			$response = doSelectSql($query, 2);

			$guest_uid = 0;
			if ($thisJRUser->userIsRegistered) {
				$query = "SELECT guests_uid FROM #__jomres_guests WHERE property_uid = $this->property_uid AND mos_userid =".(int) $thisJRUser->id;
				$guest_uid = (int) doSelectSql($query, 1);
			}

			if ($response && ((int) $response[ 'guest_uid' ] == $guest_uid || (int) $response[ 'guest_uid' ] == 0)) {
				$this->coupon_id = $response[ 'coupon_id' ];
				$this->coupon_code = $coupon_code;
				$this->coupon_details = array('amount' => $response[ 'amount' ], 'is_percentage' => $response[ 'is_percentage' ], 'coupon_id' => $response[ 'coupon_id' ], 'booking_valid_from' => $response[ 'booking_valid_from' ], 'booking_valid_to' => $response[ 'booking_valid_to' ]);

				return $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', '_JOMRES_AJAXFORM_COUPON_COUPONSAVED'));
			} else {
				$this->coupon_id = 0;
				$this->coupon_code = '';
				$this->coupon_details = array();
				$this->coupon_discount_value = '';

				return $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND'));
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Guest type variants

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Guest type variants:  return the total number of guest type variants.
		 */
		public function getGuestVariantCount()
		{
			$result = $this->getVariantsOfType('guesttype');

			return count($result);
		}

		/**
		 *
		 *
		 *
		 */

		public function getNumberOfGuestsSelected()
		{
			$result = $this->getVariantsOfType('guesttype');
			$qty = 0;
			if (!empty($result)) {
				foreach ($result as $r) {
					$qty = $qty + $r[ 'qty' ];
				}
			}

			return $qty;
		}

		/**
		 * Guest type variants:  return the details of a given guest type when passed it's id.
		 */
		public function getGuestVariantDetails($id)
		{
			$result = $this->getVariant('guesttype', $id);
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}

		/**
		 * Guest type variants: Sets a guest type variant based on the id and quantity passed.
		 */
		public function setGuestVariantDetails($id, $qty)
		{
			$this->setErrorLog('setGuestVariantDetails: Setting guest type variant '.$id);

			$result = $this->setVariant('guesttype', $id, $qty, 0.00);

			if ($result) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 * Guest type variants: Initialises a guest type variant based on the id and quantity passed.
		 */
		public function initGuestVariant($id, $qty)
		{
			$this->setErrorLog('initGuestVariant: Initialising guest type variant '.$id.' Quantity '.$qty);

			$result = $this->setVariant('guesttype', $id, $qty, 0.00);

			if ($result) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 * Guest type variants: Checks a guest type variant
		 * Will fail if id is not set
		 * Will fail if the id doesn't tally with the ids for this property
		 * Will fail if the quantity is greater than the maximum quantity allowed for that variant.
		 */
		public function checkGuestVariantIdAndQty($id, $qty)
		{
			if (!isset($id) || empty($id)) {
				$this->setErrorLog('Variant id not valid.');

				return false;
			}
			$query = "SELECT maximum FROM #__jomres_customertypes WHERE property_uid = '$this->property_uid' AND id = '$id' AND published = '1' ";
			$result = doSelectSql($query, 1);
			//$this->setErrorLog("Variant maximum found =".$result);
			if (!$result) {
				$this->setErrorLog('checkGuestVariantIdAndQty::Variant id could not be reconciled with property uid or the guest type is not published');

				return false;
			}
			if ($qty > $result) {
				$this->setErrorLog('checkGuestVariantIdAndQty::Variant quantity sent greater than quantity allowed');

				return false;
			}

			return true;
		}

		/**
		 * Make the customer type dropdowns.
		 */
		public function makeCustomerTypes($selectedProperty)
		{
			$mrConfig = $this->mrConfig;
			$cust = array();
			$query = "SELECT `id`,`type`,`maximum` , `is_child` FROM `#__jomres_customertypes` where property_uid = '$selectedProperty' AND published = '1' ORDER BY `order`";
			$exList = doSelectSql($query);

			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');

			if (isset($_REQUEST['numadult']) || isset($_REQUEST['numchild'])) {
				foreach ($exList as $ct) {
					if ($ct->is_child == '0') {
						if (is_null($adult_customer_type)) {
							$adult_customer_type = $ct->id;
							$number = (int) $_REQUEST['numadult'];
							if ((int) $ct->maximum > $number) {
								$this->setGuestVariantDetails($adult_customer_type, $number);
							} else {
								$this->setGuestVariantDetails($adult_customer_type, (int) $ct->maximum);
							}
						} else {
							$this->setGuestVariantDetails($ct->id, 0);
						}
					} else { // is child is true
						if (is_null($child_customer_type)) {
							$child_customer_type = $ct->id;
							$number = (int) $_REQUEST['numchild'];
							if ((int) $ct->maximum > $number) {
								$this->setGuestVariantDetails($child_customer_type, $number);
							} else {
								$this->setGuestVariantDetails($child_customer_type, (int) $ct->maximum);
							}
						} else {
							$this->setGuestVariantDetails($ct->id, 0);
						}
					}
				}
			}

			$default_number_of_first_guest_type_set = false;

			foreach ($exList as $ct) {
				$customerTypes = array();
				$customerTypes[ 'ID' ] = $ct->id;
				$customerTypes[ 'TEXT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$ct->id, htmlspecialchars(trim(stripslashes($ct->type)), ENT_QUOTES)));
				$current = $this->getGuestVariantDetails($ct->id);

				if ($current != false) {
					if (!$default_number_of_first_guest_type_set &&
						isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['guestnumbers'][0]) &&
						$ct->maximum >= (int)$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['guestnumbers'][0] &&
						(int) $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['guestnumbers'][0] > 0
					) {
						$defNo = (int)$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['guestnumbers'][0];
						$default_number_of_first_guest_type_set = true;
					} else {
						$defNo = $current[ 'quantity' ];
					}

					$this->setGuestVariantDetails($ct->id, $defNo);
					$this->total_in_party = $this->total_in_party + $defNo;
				} else {
					if (empty($cust)) {
						$defNo = $mrConfig[ 'defaultNumberOfFirstGuesttype' ];
					} else {
						$defNo = 0;
					}
				}
				$default_start = 1;
				if (count($exList) > 1) {
					$default_start = 0;
				}

				$customerTypes[ 'DROPDOWN' ] = jomresHTML::integerSelectList($default_start, $ct->maximum, 1, 'guesttype'.$ct->id, 'size="1" onchange="getResponse_guesttype(\''.$ct->id.'\',this.value);"', $defNo, '0', $use_bootstrap_radios = false);
				$customerTypes[ 'FIELDNAME' ] = 'guesttype'.$ct->id;
				$cust[ ] = $customerTypes;
			}

			return $cust;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Extra guests

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Receives the extra guest number and stores it
		 */
		public function setStandardGuests($value)
		{
			$value = (int)$value;
			$default_number_of_guests = 2;

			if (!isset($this->standard_guest_numbers)) {
				$this->standard_guest_numbers = 2;
				$this->extra_guest_numbers = 0;
			}

			if ($value < $default_number_of_guests ) {
				$this->standard_guest_numbers = $value;
				$this->extra_guest_numbers = 0;
			}

			if ($value == $default_number_of_guests ) {
				$this->standard_guest_numbers =  $default_number_of_guests;
				$this->extra_guest_numbers = 0;
			}

			if ($value > $default_number_of_guests ) {
				$this->extra_guest_numbers =  $value - $this->standard_guest_numbers;
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Extras

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Initialises the Extras selected to empty.
		 */
		public function initExtras()
		{
			$this->extras = '';

			return $this->extras;
		}

		/**
		 * Returns the extras currently selected (string).
		 */
		public function getExtras()
		{
			return $this->extras;
		}

		/**
		 * Receives an extra's uid and appends it to the existing selected extras list.
		 */
		public function setExtras($extra)
		{
			$this->setErrorLog('setExtras::Starting');
			$currentExtras = explode(',', $this->extras);
			if (in_array($extra, $currentExtras)) {
				return false;
			}
			if (!empty($this->extras)) {
				$this->extras .= $extra.',';
			} else {
				$this->extras = $extra.',';
			}
			if (!is_array($this->extrasquantities)) {
				$this->extrasquantities = array();
			}
			$this->extrasquantities[ $extra ] = 1;
		}

		/**
		 * Removes the selected extra from the list of currently selected extras.
		 */
		public function removeExtra($extra)
		{
			if (!isset($this->forcedExtras)) { // There aren't any, so let's just create an empty array here
				$this->forcedExtras = array();
			}

			$this->setErrorLog('removeExtra::Starting');
			$tmpArray = array();
			$currentExtras = explode(',', $this->extras);
			foreach ($currentExtras as $ex) {
				if (!in_array($ex, $this->forcedExtras)) {
					if ($ex != $extra) {
						$tmpArray[ ] = $ex;
					}
				}
			}
			$this->extras = implode(',', $tmpArray);
		}

		/**
		 * Check the id of the extra passed from the Ajax query
		 * Will fail if the extra id not set
		 * Will fail if the extra cannot be tallied with the property uid.
		 */
		public function checkExtra($extra)
		{
			if (!isset($extra) || empty($extra)) {
				$this->setErrorLog('checkExtra::Extra sent in incorrect format');

				return false;
			}
			$query = "SELECT name FROM #__jomres_extras WHERE property_uid = '$this->property_uid' AND uid = '$extra' ";
			$result = doSelectSql($query);
			if (count($result) == 1) {
				return true;
			}
			$this->setErrorLog('checkExtra::Extra could not be reconciled with property uid');

			return false;
		}

		/**
		 * Returns true if the extra has already been selected.
		 */
		public function extraAlreadySelected($extra)
		{
			$currentExtras = explode(',', $this->extras);
			if (in_array($extra, $currentExtras)) {
				return true;
			}

			return false;
		}

		/**
		 * Receives an extra's uid and an integer and modifys the extra's quantity.
		 */
		public function modifyExtraQuantity($value, $extraID)
		{
			$this->setErrorLog('modifyExtraQuantity::Starting');
			$currentExtras = explode(',', $this->extras);
			if (!in_array($extraID, $currentExtras)) {
				return false;
			}
			$this->extrasquantities[ $extraID ] = $value;
			$this->setErrorLog('modifyExtraQuantity::Extras quantities = '.serialize($this->extrasquantities));
		}

		// New for v4.3.3
		/**
		 *
		 *
		 *
		 */

		public function add_third_party_extra($plugin, $id = 0, $description = 'No description', $total_value = 0.00, $tax_code_id = 0)
		{
			//if ($id == 0) return false;
			//if ( (float) $total_value ==0.00)
			//	return false;
			$this->third_party_extras[ $plugin ][ $id ] = array('id' => $id, 'description' => jr_gettext('_JINTOUR_TOUR_TITLE_CUSTOM_TEXT'.$id, $description, false, false), 'untaxed_grand_total' => (float) $total_value);
			if ($tax_code_id > 0) {
				$this->third_party_extras[ $plugin ][ $id ][ 'tax_code_id' ] = $tax_code_id;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function remove_third_party_extra($plugin, $id)
		{
			if (isset($this->third_party_extras[ $plugin ][ $id ])) {
				unset($this->third_party_extras[ $plugin ][ $id ]);
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function reset_choices_for_plugin($plugin)
		{
			if (isset($this->third_party_extras[ $plugin ])) {
				unset($this->third_party_extras[ $plugin ]);
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Additional line items

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 *
		 *
		 *
		 */

		public function add_additiional_line_item($context = 'UNKNOWN', $id = 0, $description = 'No description', $total_value = 0.00, $tax_code_id = 0)
		{
			$this->additional_line_items[ $context ][ $id ] = array('id' => $id, 'description' => $description, 'untaxed_grand_total' => (float) $total_value);
			if ($tax_code_id > 0) {
				$this->additional_line_items[ $context ][ $id ][ 'tax_code_id' ] = $tax_code_id;
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Arrival Date

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Initialise the arrival date.
		 */
		public function initArrivalDate() // Set a basic arrival date
		{
			if (empty($this->cfg_mindaysbeforearrival)) {
				$this->cfg_mindaysbeforearrival = 0;
			}
			$arrivalDate = $this->today;
			//$ad=str_replace("/","-",$arrivalDate);
			//$arrivalDate=mosFormatDate($ad);
			$arrivalDate = str_replace('-', '/', $arrivalDate);
			$date_elements = explode('/', $arrivalDate);
			$this->unixArrivalDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $this->cfg_mindaysbeforearrival, $date_elements[ 0 ]);
			$arrivalDate = date('Y/m/d', $this->unixArrivalDate);

			$this->setArrivalDate($arrivalDate);
			$this->setErrorLog('initArrivalDate::Initialising Arrival date to '.$arrivalDate);

			return $this->arrivalDate;
		}

		/**
		 * Find the next date that the property has a room available.
		 */
		public function nextDatePropertyHasRoomFree($arrivalDate)
		{
			// Lets check that at least one room is available on this date. If it's not, we'll offer the next date that a room is available
			if (empty($arrivalDate)) {
				$arrivalDate = $this->today;
			}

			$totalNumberOfRooms = count($this->allPropertyRoomUids);
			$current = strtotime($arrivalDate);
			$last = strtotime($arrivalDate.' 5 years ');

			while ($current <= $last) {
				$d = date('Y/m/d', $current);
				if (isset($this->allBookings[ $d ])) {
					if (count($this->allBookings[ $d ]) < $totalNumberOfRooms) {
						$arrivalDate = $d;
						break;
					}
				} else {
					$arrivalDate = $d;
					break;
				}
				$current = strtotime('+1 day', $current);
			}

			return $arrivalDate;
		}

		/**
		 * Checks that the given date isn't earlier than today, or later than the latest possible date (according to limit advance bookings flag).
		 */
		public function checkArrivalDate($arrivalDate)
		{
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');
			$thisJRUser = jomres_getSingleton('jr_user');

			if (empty($this->cfg_mindaysbeforearrival) || $thisJRUser->userIsManager) {
				$this->cfg_mindaysbeforearrival = 0;
			}
			$date_elements = explode('/', $this->today);
			if (count($date_elements) != 3) {
				$this->setErrorLog('checkArrivalDate:: Arrival date check failed, date elements is not = 3. ');

				return false;
			}
			if ($this->cfg_limitAdvanceBookingsYesNo == '1') {
				$unixLatestArrivalDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $this->cfg_advanceBookingsLimit, $date_elements[ 0 ]);
			}

			$unixArrivalDate = $this->getMkTime($arrivalDate);
			$date_elements = explode('/', $this->today);
			$unixEarliestArrivalDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $this->cfg_mindaysbeforearrival, $date_elements[ 0 ]);

			if (!isset($arrivalDate)) {
				$this->setErrorLog("checkArrivalDate:: Arrival date check failed, arrivalDate isn't set. ");

				return false;
			}
			if (empty($arrivalDate)) {
				$this->setErrorLog('checkArrivalDate:: Arrival date check failed, arrivalDate is empty. ');

				return false;
			}
			if (!$amend_contract) {
				if ($this->cfg_limitAdvanceBookingsYesNo == 1 && ($unixArrivalDate > $unixLatestArrivalDate)) {
					$this->setErrorLog('checkArrivalDate:: Arrival date check failed, limitAdvanceBooking option failing arrival date. ');

					return false;
				}
				$this->setErrorLog('Earliest arrival date: '.$unixEarliestArrivalDate);
				$this->setErrorLog('Arrival date '.$unixArrivalDate);
				if ($unixEarliestArrivalDate > $unixArrivalDate) {
					$this->setErrorLog('checkArrivalDate:: Arrival date check failed, unix earliest arrival > unixarrivaldate. ');

					return false;
				}
			}

			return true;
		}

		/**
		 * Set the arrival date to YYYY/MM/DD.
		 */
		public function setArrivalDate($arrivalDate)
		{
			$this->setErrorLog('setArrivalDate::Setting Arrival date to '.$arrivalDate);
			$this->arrivalDate = $arrivalDate;
			$date_elements = explode('/', $arrivalDate);
			$this->unixArrivalDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			if ($this->cfg_fixedPeriodBookings == '1') {
				$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
				$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');
				if ($amend_contract && $this->stayDays == '') {
					$this->stayDays = dateDiff('d', $tmpBookingHandler->tmpbooking[ 'amend_contract_arrival' ], $tmpBookingHandler->tmpbooking[ 'amend_contract_departure' ]);
				}

				$departureDate = $this->getFixedPeriodDepartureDate($this->stayDays);
				$this->setErrorLog('setArrivalDate::Property uses fixed periods, so setting departure date to: '.$departureDate);
				$this->setDepartureDate($departureDate);
			}
		}

		/**
		 * Returns the current arrival date.
		 */
		public function getArrivalDate()
		{
			return $this->arrivalDate;
		}

		/**
		 * Makes the arrival date output. Depending on configuration options this can be either a javascript popup or a dropdown.
		 */
		public function makeArrivalDateOutput($arrivalDate)
		{
			if ($this->cfg_fixedArrivalDateYesNo == '1' && $this->cfg_fixedPeriodBookings == '1') {
				$selectionMethod = $this->fixedDaysArrivaldateDropdown($arrivalDate);
			} else {
				$selectionMethod = $this->generateDateInput('arrivalDate', $arrivalDate, 'ad');
			}

			return $selectionMethod;
		}

		/**
		 * Make the arrival date dropdown for properties that have a fixed arrival day (eg Saturday). Finds only those dates that match AND have a slot available after them.
		 */
		public function fixedDaysArrivaldateDropdown($arrivalDate)
		{
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');

			$date_elements = explode('/', $arrivalDate);
			$day = $date_elements[ 2 ];
			$month = $date_elements[ 1 ];
			$year = $date_elements[ 0 ];
			//$day=$day-14;
			$requiredDay = $this->cfg_fixedArrivalDay;
			if (!$requiredDay) {
				$requiredDay = '0';
			}
			for ($i = 0, $n = 7; $i < $n; ++$i) {
				$unixArrivalDate = mktime(0, 0, 0, $month, $day, $year);
				$currentDoW = date('w', $unixArrivalDate);
				if ($currentDoW == $requiredDay) {
					$arrivalDate = date('Y/m/d', mktime(0, 0, 0, $month, $day, $year));
					break;
				} else {
					$day++;
				}
			}
			$datesListArray = $this->calcPeriods($arrivalDate);
			$fixedPeriodDropdown = '<select class="input-medium form-select" name="arrivalDate" onchange="getResponse_particulars(\'arrival_period\',this.value)";>';
			$counter = 0;
			//$selectedDateisNthDate=1;
			$selectedDate = $arrivalDate;
			$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');

			foreach ($datesListArray as $thisDate) {
				unset($this->fixedDaysArrivaldateDropdown_checkdates);
				$selected = '';
				$okToAddDate = true;
				// If fixed period bookings are used, we need to ensure that all dates within a period are free
				if ($this->cfg_fixedPeriodBookings == '1' && $this->cfg_singleRoomProperty == '1') {
					$stayDays = $this->cfg_fixedPeriodBookingsNumberOfDays;
					$dateRangeArray = array();
					$arrivalDate = $thisDate;
					$date_elements = explode('/', $arrivalDate);
					$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
					$secondsInDay = 86400;
					//$currentUnixDay=$unixCurrentDate;
					$currentDay = $arrivalDate;
					for ($i = 0, $n = $stayDays; $i < $n; ++$i) {
						$currentDay = date('Y/m/d', $unixCurrentDate);
						$dateRangeArray[ ] = $currentDay;
						$unixCurrentDate = $unixCurrentDate + $secondsInDay;
					}

					if (!$amend_contract) {
						if (!isset($this->fixedDaysArrivaldateDropdown_checkdates)) {
							$query = 'SELECT room_bookings_uid FROM #__jomres_room_bookings WHERE `date` IN ('.jomres_implode($dateRangeArray, false).") AND property_uid = '$this->property_uid'";
							$datelist = doSelectSql($query);
							$this->fixedDaysArrivaldateDropdown_checkdates = $datelist;
						} else {
							$datelist = $this->fixedDaysArrivaldateDropdown_checkdates;
						}

						if (!empty($datelist)) {
							$okToAddDate = false;
						}
					} else {
						if (isset($this->allBookings[ $eachDate ][ $this->allPropertyRoomUids[ 0 ] ])) {
							$okToAddDate = false;
						}
					}
				}
				if ($okToAddDate) {
					++$counter;
					if ($counter == 1) {
						$this->setArrivalDate($thisDate);
					}
					if ($thisDate == $selectedDate) {
						$this->setArrivalDate($thisDate);
						$selected = 'selected';
					}
					$fixedPeriodDropdown .= '<option value="'.$this->JSCalmakeInputDates($thisDate).'" '.$selected.' >'.$this->JSCalmakeInputDates($thisDate).'</option>';
				}
			}
			$fixedPeriodDropdown .= '</select>';

			return $fixedPeriodDropdown;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Departure Date

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Initialise the departure date, which can vary based on if configuration options define that there's a minimum number of days between the arrival date and the departure date.
		 */
		public function initDepartureDate()
		{
			$arrivalDate = $this->getArrivalDate();
			$interval = (int) $this->cfg_minimuminterval;
			if ($this->cfg_fixedPeriodBookings == '1') {
				if ($this->cfg_fixedPeriodBookingsShortYesNo == '1') {
					$interval = $this->cfg_fixedPeriodBookingsShortNumberOfDays;
				} else {
					$interval = $this->cfg_fixedPeriodBookingsNumberOfDays;
				}
			}
			$departureDate = date('Y/m/d', strtotime($arrivalDate.' +'.$interval.' days'));

			$this->setDepartureDate($departureDate);
			$this->setErrorLog('initDepartureDate::Initialising Departure date to '.$departureDate);

			return $departureDate;
		}

		/**
		 * Set the departure date.
		 */
		public function setDepartureDate($departureDate)
		{
			$this->setErrorLog('setDepartureDate::Setting Departure date to '.$departureDate);
			$this->departureDate = $departureDate;
			$date_elements = explode('/', $departureDate);
			$this->unixDepartureDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
		}

		/**
		 * Sets the departure date to the day after the passed arrival date.
		 */
		public function setDepartureDateToNextDay($arrivalDate)
		{
			$interval = (int) $this->cfg_minimuminterval;
			$departureDate = date('Y/m/d', strtotime($arrivalDate.' +'.$interval.' day'));
			$this->setDepartureDate($departureDate);

			return $departureDate;
		}

		/**
		 * Ensure that the departure date is not < tomorrows date, or less than arrival date.
		 */
		public function checkDepartureDate($departureDate)
		{
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			//$this->setErrorLog("checkDepartureDate::Checking Departure date ".$departureDate);
			//$this->setErrorLog("checkDepartureDate::Booker class ".$this->booker_class);
			$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');
			/*
		if ($this->booker_class == "100")
		{
		$date_elements  = explode("/",$departureDate);
		$this->unixDepartureDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		if ($this->unixDepartureDate > $this->unixArrivalDate)
			return true;
		}
		*/
			$fixedPeriodMin = $this->cfg_fixedPeriodBookingsNumberOfDays;
			$fixedPeriodMax = $this->cfg_fixedPeriodBookingsNumberOfDays * $this->cfg_numberofFixedPeriods;
			$shortDays = $this->cfg_fixedPeriodBookingsShortNumberOfDays;
			$departurePeriod = $this->stayDays;

			if ($this->cfg_fixedPeriodBookingsShortYesNo == '1' && $this->cfg_fixedPeriodBookings == '1') {
				if ($departurePeriod < $shortDays && $shortDays < $fixedPeriodMin) {
					$this->setErrorLog('checkDepartureDate:: Departure date check failed, departure period shorter than shortdays. ');

					return false;
				}
				if ($departurePeriod > $shortDays && $departurePeriod < $fixedPeriodMin) {
					$this->setErrorLog('checkDepartureDate:: Departure date check failed, departure period shorter than shortdays and departure date less than fixed period minimum. ');

					return false;
				}
			} elseif ($this->cfg_fixedPeriodBookings == '1') {
				if ($departurePeriod < $fixedPeriodMin) {
					$this->setErrorLog('checkDepartureDate:: Departure period < fixed period minimum');

					return false;
				}
				if ($departurePeriod > $fixedPeriodMax) {
					$this->setErrorLog('checkDepartureDate:: Departure date check failed, departure period > fixed period maximum. ');

					return false;
				}
				//if (  $departurePeriod/$fixedPeriodMin != 0 )
				//	return false;
			}

			$date_elements = explode('/', $departureDate);
			$unixDepartureDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);

			if (!$amend_contract) {
				$date_elements = explode('/', $this->today);
				$interval = (int) $this->mininterval;

				$mrConfig = $this->mrConfig;
				if ($mrConfig[ 'wholeday_booking' ] == '1') {
					$interval = $interval - 1;
				}
				$unixTomorrowsDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $interval, $date_elements[ 0 ]);

				if ($unixDepartureDate < $unixTomorrowsDate) {
					$this->setErrorLog('checkDepartureDate:: Departure date check failed, unix departure date < unix tomorrows date. ');

					return false;
				}
			}
			if ($unixDepartureDate <= $this->unixArrivalDate) {
				$this->setErrorLog('checkDepartureDate:: Departure date check failed, unix departure <= unix arrival date. ');

				return false;
			}

			return true;
		}

		/**
		 * Gets a fix period's departure date. Passed the departure period, will return the appropriate date.
		 */
		public function getFixedPeriodDepartureDate($departurePeriod)
		{
			$departurePeriod = (int) $departurePeriod;
			//$departurePeriod=$departurePeriod++;
			$this->setErrorLog('getFixedPeriodDepartureDate::Setting fixed period departure to '.$departurePeriod);
			$arrivalDate = $this->arrivalDate;
			$date_elements = explode('/', $arrivalDate);
			//$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			$unixDepartureDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $departurePeriod, $date_elements[ 0 ]);
			$departureDate = date('Y/m/d', $unixDepartureDate);

			return $departureDate;
		}

		/**
		 * Return the departure date.
		 */
		public function getDepartureDate()
		{
			return $this->departureDate;
		}

		/**
		 * Make the departure date output
		 * This varies depending on configuration options, can be either a javascript calendar or dropdown.
		 */
		public function makeDepartureDateOutput($departureDate)
		{
			if ($this->cfg_fixedPeriodBookings == '0') {
				if ($this->cfg_showdepartureinput == '1') {
					return $this->generateDateInput('departureDate', $departureDate, 'dd');
				} else {
					return '<input type="hidden" name="departureDate" value="'.$departureDate.'">';
				}
			} else {
				$defaultPeriod = $this->cfg_fixedPeriodBookingsNumberOfDays;
				$periods = array();
				if ($this->cfg_fixedPeriodBookingsShortYesNo == '1') {
					$defaultPeriod = $this->cfg_fixedPeriodBookingsShortNumberOfDays;
					$periods[ ] = jomresHTML::makeOption($this->cfg_fixedPeriodBookingsShortNumberOfDays, $this->cfg_fixedPeriodBookingsShortNumberOfDays);
				}
				for ($i = 1, $n = $this->cfg_numberofFixedPeriods; $i <= $n; ++$i) {
					//$selected="";
					$step = $i * $this->cfg_fixedPeriodBookingsNumberOfDays;
					$periods[ ] = jomresHTML::makeOption($step, $step);
				}
				$fixedPeriodDropdown = jomresHTML::selectList($periods, 'fixedPeriod_periodsRequested', 'size="1" class="input-medium" onchange="getResponse_particulars(\'departure_period\',this.value)";', 'value', 'text', $defaultPeriod);

				return $fixedPeriodDropdown;
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Other date functions

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Returns true if any of the dates between arrival and departure fall on a weekend day.
		 */
		public function dateRangeIncludesWeekends()
		{
			$weekendDays = $this->cfg_weekenddays;
			if (!empty($this->dateRangeString)) {
				$dateRangeArray = explode(',', $this->dateRangeString);
			} else {
				return false;
			}
			for ($i = 0, $n = count($dateRangeArray); $i < $n; ++$i) {
				$thisDow = $this->getDayOfWeek($dateRangeArray[ $i ]);
				if (in_array($thisDow, $weekendDays)) { // In other words, one of the days falls on a weekend
					return true;
				}
			}

			return false;
		}

		/**
		 * Returns true all of the dates between arrival and departure fall on a weekend day.
		 */
		public function dateRangeIsAllWeekends()
		{
			$rangeDaysOfWeek = array();
			$weekendDays = $this->cfg_weekenddays;
			//$this->setErrorLog("dateRangeIsAllWeekends:: Weekend days ".serialize($weekendDays) );
			$tmpWEarray = array();
			foreach ($weekendDays as $val) {
				$tmpWEarray[ ] = intval($val);
			}
			$weekendDays = $tmpWEarray;
			if (!empty($this->dateRangeString)) {
				$dateRangeArray = explode(',', $this->dateRangeString);
			} else {
				return false;
			}
			for ($i = 0, $n = count($dateRangeArray); $i < $n; ++$i) {
				$rangeDaysOfWeek[ ] = $this->getDayOfWeek($dateRangeArray[ $i ]);
			}
			sort($weekendDays);
			sort($rangeDaysOfWeek);
			//$this->setErrorLog("dateRangeIsAllWeekends:: weekendDays ".serialize($weekendDays) );
			//$this->setErrorLog("dateRangeIsAllWeekends:: rangeDaysOfWeek ".serialize($rangeDaysOfWeek) );

			foreach ($rangeDaysOfWeek as $rdow) {
				if (!in_array($rdow, $weekendDays)) {
					//$this->setErrorLog("dateRangeIsAllWeekends:: <b>Not</b> all days are weekend days" );
					return false;
				}
			}

			//$this->setErrorLog("dateRangeIsAllWeekends:: All days are weekend days");
			return true;
		}

		/**
		 * Return the day of the week for a given date. Expects a day in yyyy/mm/dd format.
		 */
		public function getDayOfWeek($date)
		{
			$date_elements = explode('/', $date);
			$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			$dateArray = getdate($unixCurrentDate);

			return $dateArray[ 'wday' ];
		}

		/**
		 * Construct a string of dates based on the arrival and departure date. Populates the dateRangeString with the result and returns it.
		 */
		public function setDateRangeString()
		{
			$stayDays = (int) $this->getStayDays();
			$dateRangeArray = array();
			$currentDay = $this->getArrivalDate();
			$date_elements = explode('/', $currentDay);
			$unixCurrentDate = mktime(0, 0, 0, (int) $date_elements[ 1 ], (int) $date_elements[ 2 ], (int)$date_elements[ 0 ]);
			for ($i = 0, $n = $stayDays; $i < $n; ++$i) {
				$currentDay = date('Y/m/d', $unixCurrentDate);
				$dateRangeArray[ ] = $currentDay;
				$date_elements = explode('/', $currentDay);
				$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ]);
			}
			$this->dateRangeString = implode(',', $dateRangeArray);
			return $this->dateRangeString;
		}

		/**
		 * Construct a string of dates based on the arrival and departure date. Populates the dateRangeString with the result and returns it.
		 */
		public function findDateRangeForDates($d1, $d2)
		{
			$days = (int) $this->findDaysForDates($d1, $d2);
			$dateRangeArray = array();
			$currentDay = $d1;
			$date_elements = explode('/', $currentDay);
			$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			for ($i = 0, $n = $days; $i <= $n; ++$i) {
				$currentDay = date('Y/m/d', $unixCurrentDate);
				$dateRangeArray[ ] = $currentDay;
				$date_elements = explode('/', $currentDay);
				$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ]);
			}

			return $dateRangeArray;
		}

		/**
		 * Set the stay days, the number of days the booking covers, based on arrival date and departure date.
		 */
		public function findDaysForDates($d1, $d2)
		{
			$diff = dateDiff('d', $d1, $d2);

			return $diff;
		}

		/**
		 * Returns the unix timestamp for the arrival date.
		 */
		public function getUnixArrivalDate()
		{
			return $this->unixArrivalDate;
		}

		/**
		 * Returns the unix timestamp for the departure date.
		 */
		public function getUnixDepartureDate()
		{
			return $this->unixDepartureDate;
		}

		/**
		 * Set the stay days, the number of days the booking covers, based on arrival date and departure date.
		 */
		public function setStayDays()
		{
			$mrConfig = $this->mrConfig;
			if ($mrConfig[ 'wholeday_booking' ] == '1') {
				if ($this->cfg_fixedPeriodBookings == '1') {
					$this->stayDays = dateDiff('d', $this->arrivalDate, $this->departureDate);
				} else {
					$this->stayDays = dateDiff('d', $this->arrivalDate, $this->departureDate) + 1;
				}
			} else {
				$this->stayDays = dateDiff('d', $this->arrivalDate, $this->departureDate);
			}
			$this->setErrorLog('setStayDays::'.$this->stayDays);
		}

		/**
		 * Returns the number of days that the stay covers.
		 */
		public function getStayDays()
		{
			return $this->stayDays;
		}

		/**
		 *
		 *
		 *
		 */

		public function get_part_of_stay_period($staydays)
		{
			switch ($this->cfg_booking_form_daily_weekly_monthly) {
				case 'D':
					$num_period = $staydays;
					break;
				case 'W':
					$num_period = number_format($staydays / 7, 2, '.', '');
					break;
				case 'M':
					$month = date('m', $this->unixArrivalDate);
					$year = date('Y', $this->unixArrivalDate);
					$num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
					$num_period = number_format(($staydays / $num), 2, '.', '');
					break;
			}

			$arr = explode('.', $num_period);
			if (isset($arr[ 1 ]) && $arr[ 1 ] == '00') {
				$num_period = $arr[ 0 ];
			}

			return $num_period;
		}

		/**
		 *
		 *
		 *
		 */

		public function get_rate_per_night_converted_to_output_period($ratepernight)
		{
			switch ($this->cfg_booking_form_daily_weekly_monthly) {
				case 'D':
					$num_period = $ratepernight;
					break;
				case 'W':
					if ($this->cfg_tariffmode == '1' && $this->cfg_tariffChargesStoredWeeklyYesNo == '1') {
						$num_period = $ratepernight;
					} else {
						$num_period = $ratepernight * 7;
					}
					break;
				case 'M':
					$month = date('m', $this->unixArrivalDate);
					$year = date('Y', $this->unixArrivalDate);
					$num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
					$num_period = $ratepernight * $num;
					break;
			}

			return $num_period;
		}

		/**
		 * Receives a date in yyyy/mm/dd format and reformats it according to configuration options requested output.
		 */
		public function outputDate($thedate)
		{
			// Assumes the date $theDate comes from the system in the format yyyy/mm/dd
			$date_elements = explode('/', $thedate);
			$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			if ($this->cfg_dateFormatStyle == '1') {
				$formattedDate = date($this->cfg_cal_output, $unixDate);
			} else {
				$formattedDate = strftime($this->cfg_cal_output, $unixDate);
			}

			return $formattedDate;
		}

		/**
		 * Converts a date passed to it to the required format which is then displayed as part of the javascript calendar input.
		 */
		public function JSCalmakeInputDates($inputDate)
		{
			$date_elements = explode('/', $inputDate);
			$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			switch ($this->cfg_cal_input) {
				case '%d/%m/%Y':
					$theDate = date('d/m/Y', $unixDate);
					break;
				case '%Y/%m/%d':
					$theDate = date('Y/m/d', $unixDate);
					break;
				case '%m/%d/%Y':
					$theDate = date('m/d/Y', $unixDate);
					break;
				case '%d-%m-%Y':
					$theDate = date('d-m-Y', $unixDate);
					break;
				case '%Y-%m-%d':
					$theDate = date('Y-m-d', $unixDate);
					break;
				case '%m-%d-%Y':
					$theDate = date('m-d-Y', $unixDate);
					break;
				case '%d.%m.%Y':
					$theDate = date('d.m.Y', $unixDate);
					break;
				default:
					echo 'Error in date format. Cannot continue. If you have just installed Jomres you should log into the frontend as a property manager. This will set up sufficient data so that you can proceed.';
					exit;
					break;
			}

			return $theDate;
		}

		/**
		 * Converts a date passed from the javascript calendar into the yyyy/mm/dd format that Jomres expects to deal with.
		 */
		public function JSCalConvertInputDates($inputDate)
		{
			$inputFormat = $this->cfg_cal_input;
			switch ($inputFormat) {
				case '%d/%m/%Y':
					$date_elements = explode('/', $inputDate);
					$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
					break;
				case '%Y/%m/%d':
					$date_elements = explode('/', $inputDate);
					$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
					break;
				case '%m/%d/%Y':
					$date_elements = explode('/', $inputDate);
					$unixDate = mktime(0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ]);
					break;
				case '%d-%m-%Y':
					$date_elements = explode('-', $inputDate);
					$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
					break;
				case '%Y-%m-%d':
					$date_elements = explode('-', $inputDate);
					$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
					break;
				case '%m-%d-%Y':
					$date_elements = explode('-', $inputDate);
					$unixDate = mktime(0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ]);
					break;
				case '%d.%m.%Y':
					$date_elements = explode('.', $inputDate);
					$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
					break;
				default:
					echo 'Error in date format. Cannot continue.';
					exit;
					break;
			}
			$theDate = date('Y/m/d', $unixDate);

			return $theDate;
		}

		/**
		 * Returns an array of fixed period dates from arrival date for the number of times fixedArrivalDatesRecurring configuration option is set.
		 */

		public function calcPeriods($arrivalDate)
		{
			$increment = 7;
			$stmt = 'days';
			$t = 0;
			$date_elements = explode('/', $arrivalDate);
			$recurring = 0;
			$thisDate = $arrivalDate;
			while ($recurring <= $this->cfg_fixedArrivalDatesRecurring) {
				$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] - ($recurring * $increment), $date_elements[ 0 ]);
				$tempDate = date('Y/m/d', $unixCurrentDate);
				if ($tempDate < $this->today) {
					break;
				} else {
					$thisDate = $tempDate;
				}
				++$recurring;
			}

			$number_times_recurring = $this->cfg_fixedArrivalDatesRecurring + $this->cfg_fixedArrivalDatesRecurring;
			$datesArray = array();
			//will continue to loop as many times as the recurrence ($number_times_recurring)
			while ($t < ($number_times_recurring * $increment)) {
				//$calendar_startdate and $calendar_enddate are pre-determined and match the Y-m-d format
				$startdate = date('Y/m/d', strtotime($thisDate.' +'.$t.' '.$stmt));
				//$enddate = date("Y/m/d", strtotime($calendar_enddate." +".$t." ".$stmt));
				$t = ($t + $increment);
				$datesArray[ ] = $startdate;
			}

			return $datesArray;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Guest details

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * An existing guest is a user who already exists on the system. This method sets it.
		 */
		public function setGuest_existing_id($value)
		{
			$this->existing_id = $value;
		}

		/**
		 * Set the object's firstname variable.
		 */
		public function setGuest_firstname($value)
		{
			$this->firstname = $value;
		}

		/**
		 * Set the object's surname variable.
		 */
		public function setGuest_surname($value)
		{
			$this->surname = $value;
		}

		/**
		 * Set the object's house variable (typically house number).
		 */
		public function setGuest_house($value)
		{
			$this->house = $value;
		}

		/**
		 * Set the object's street variable.
		 */
		public function setGuest_street($value)
		{
			$this->street = $value;
		}

		/**
		 * Set the object's town variable.
		 */
		public function setGuest_town($value)
		{
			$this->town = $value;
		}

		/**
		 * Set the object's region variable.
		 */
		public function setGuest_region($value)
		{
			$this->region = $value;
		}

		/**
		 * Set the object's postcode variable.
		 */
		public function setGuest_postcode($value)
		{
			$this->postcode = $value;
		}

		/**
		 * Set the object's country variable. If not set then the country is reset to the default country set in configuration options.
		 */
		public function setGuest_country($value)
		{
			if (!isset($value) || empty($value)) {
				$value = $this->cfg_defaultcountry;
			}
			$this->country = $value;
		}

		/**
		 * Set the object's landline variable.
		 */
		public function setGuest_tel_landline($value)
		{
			$this->tel_landline = $value;
		}

		/**
		 * Set the object's mobile variable.
		 */
		public function setGuest_tel_mobile($value)
		{
			$this->tel_mobile = $value;
		}

		/**
		 * Set the object's email variable.
		 */
		public function setGuest_email($value)
		{
			$this->email = trim($value);
		}

		/**
		 * Set the object's discount variable.
		 */
		public function setGuest_discount($value)
		{
			$this->setErrorLog("setGuest_discount:: Setting guest's discount to ".$value);
			$this->guest_specific_discount = $value;
		}

		/**
		 * A simple email structure check.
		 */
		public function checkEmail($value)
		{
			if (preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $value)) {
				return true;
			}

			return false;
		}

		/**
		 * Passed an existing guest's uid.
		 * If the booker is known to be a manager then the object's guest details are retrieved from the guest's table and stored temporarily in the tmpguest by the store method.
		 * Will populate the object's guest data and return and array of same data.
		 */
		public function getExistingCustomerData($id)
		{
			$thisJRUser = jomres_getSingleton('jr_user');

			if ($thisJRUser->is_partner || $thisJRUser->userIsManager) {
				if ($thisJRUser->userIsManager) {
					$query = "SELECT guests_uid,mos_userid,enc_firstname,enc_surname,enc_house,enc_street,enc_town,enc_county ,enc_country,enc_postcode,enc_tel_landline,enc_tel_mobile,enc_email,discount FROM #__jomres_guests WHERE guests_uid = '$id' AND property_uid IN (".jomres_implode($thisJRUser->authorisedProperties).') LIMIT 1';
				} else {
					$query = 'SELECT guests_uid,mos_userid,enc_firstname,enc_surname,enc_house,enc_street,enc_town,enc_county ,enc_country,enc_postcode,enc_tel_landline,enc_tel_mobileenc_,email,discount FROM #__jomres_guests WHERE partner_id = '.$thisJRUser->id." AND guests_uid = '$id' LIMIT 1";
				}
				$result = doSelectSql($query, 2);
				if (!empty($result)) {
					if (empty($result[ 'country' ])) {
						$result[ 'country' ] = $this->cfg_defaultcountry;
					}
					$this->setGuest_existing_id($id);

					$this->mos_userid = $result[ 'mos_userid' ];
					$this->setGuest_firstname($this->jomres_encryption->decrypt($result[ 'enc_firstname' ]));
					$this->setGuest_surname($this->jomres_encryption->decrypt($result[ 'enc_surname' ]));
					$this->setGuest_house($this->jomres_encryption->decrypt($result[ 'enc_house' ]));
					$this->setGuest_street($this->jomres_encryption->decrypt($result[ 'enc_street' ]));
					$this->setGuest_town($this->jomres_encryption->decrypt($result[ 'enc_town' ]));
					$this->setGuest_region($this->jomres_encryption->decrypt($result[ 'enc_county' ]));
					$this->setGuest_country($this->jomres_encryption->decrypt($result[ 'enc_country' ]));
					$this->setGuest_postcode($this->jomres_encryption->decrypt($result[ 'enc_postcode' ]));
					$this->setGuest_tel_landline($this->jomres_encryption->decrypt($result[ 'enc_tel_landline' ]));
					$this->setGuest_tel_mobile($this->jomres_encryption->decrypt($result[ 'enc_tel_mobile' ]));
					if ($this->checkEmail($this->jomres_encryption->decrypt($result[ 'enc_email' ]))) {
						$this->setGuest_email($this->jomres_encryption->decrypt($result[ 'enc_email' ]));
					}
					$this->setGuest_discount($result[ 'discount' ]);

					return $result;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		/**
		 * Clear the guests data to empty values. Triggered by the guest dropdown being reset to empty.
		 */
		public function resetExistingCustomer()
		{
			$thisJRUser = jomres_getSingleton('jr_user');

			$this->setGuest_existing_id('');
			$this->setGuest_firstname('');
			$this->setGuest_surname('');
			$this->setGuest_house('');
			$this->setGuest_street('');
			$this->setGuest_town('');
			$this->setGuest_region('');
			$this->setGuest_country('');
			$this->setGuest_postcode('');
			$this->setGuest_tel_landline('');
			$this->setGuest_tel_mobile('');
			if (!$thisJRUser->is_partner) {
				$this->setGuest_email('');
			}
			$this->setGuest_discount(0);
		}

		/**
		 * Fill the variables of the Required fields.
		 */
		public function makeRequiredIcons()
		{
			$mrConfig = $this->mrConfig;
			$output = array();
			$icon = '*';
			$output[ 'VALIDATION_FIRSTNAME' ] = 'false';
			$output[ 'VALIDATION_SURNAME' ] = 'false';
			$output[ 'VALIDATION_HOUSENO' ] = 'false';
			$output[ 'VALIDATION_STREET' ] = 'false';
			$output[ 'VALIDATION_TOWN' ] = 'false';
			$output[ 'VALIDATION_POSTCODE' ] = 'false';
			$output[ 'VALIDATION_REGION' ] = 'false';
			$output[ 'VALIDATION_COUNTRY' ] = 'false';
			$output[ 'VALIDATION_LANDLINE' ] = 'false';
			$output[ 'VALIDATION_CELLMOBILE' ] = 'false';
			$output[ 'VALIDATION_EMAIL' ] = 'false';

			$output[ 'BOOTSTRAP_FIRSTNAME_WARNING' ] = '';
			$output[ 'BOOTSTRAP_SURNAME_WARNING' ] = '';
			$output[ 'BOOTSTRAP_HOUSENO_WARNING' ] = '';
			$output[ 'BOOTSTRAP_STREET_WARNING' ] = '';
			$output[ 'BOOTSTRAP_TOWN_WARNING' ] = '';
			$output[ 'BOOTSTRAP_POSTCODE_WARNING' ] = '';
			$output[ 'BOOTSTRAP_REGION_WARNING' ] = '';
			$output[ 'BOOTSTRAP_COUNTRY_WARNING' ] = '';
			$output[ 'BOOTSTRAP_LANDLINE_WARNING' ] = '';
			$output[ 'BOOTSTRAP_CELLMOBILE_WARNING' ] = '';
			$output[ 'BOOTSTRAP_EMAIL_WARNING' ] = '';

			$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_HOUSENO' ]		= 'style="display:none;"';
			$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_STREET' ]		= 'style="display:none;"';
			$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_TOWN' ]		= 'style="display:none;"';
			$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_POSTCODE' ]	= 'style="display:none;"';
			$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_TEL' ]			= 'style="display:none;"';
			$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_MOBILE' ]		= 'style="display:none;"';

			if ($mrConfig[ 'bookingform_requiredfields_name' ] == '1') {
				$output[ 'REQUIRED_FIRSTNAME' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_FIRSTNAME' ] = 'true';
				$output[ 'BOOTSTRAP_FIRSTNAME_WARNING' ] = ' warning';
			}
			if ($mrConfig[ 'bookingform_requiredfields_surname' ] == '1') {
				$output[ 'REQUIRED_SURNAME' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_SURNAME' ] = 'true';
				$output[ 'BOOTSTRAP_SURNAME_WARNING' ] = ' warning';
			}
			if ($mrConfig[ 'bookingform_requiredfields_houseno' ] == '1') {
				$output[ 'REQUIRED_HOUSENO' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_HOUSENO' ] = 'true';
				$output[ 'BOOTSTRAP_HOUSENO_WARNING' ] = ' warning';
				$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_HOUSENO' ]		= '';
			}
			if ($mrConfig[ 'bookingform_requiredfields_street' ] == '1') {
				$output[ 'REQUIRED_STREET' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_STREET' ] = 'true';
				$output[ 'BOOTSTRAP_STREET_WARNING' ] = ' warning';
				$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_STREET' ]		= '';
			}
			if ($mrConfig[ 'bookingform_requiredfields_town' ] == '1') {
				$output[ 'REQUIRED_TOWN' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_TOWN' ] = 'true';
				$output[ 'BOOTSTRAP_TOWN_WARNING' ] = ' warning';
				$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_TOWN' ]		= '';
			}
			if ($mrConfig[ 'bookingform_requiredfields_postcode' ] == '1') {
				$output[ 'REQUIRED_POSTCODE' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_POSTCODE' ] = 'true';
				$output[ 'BOOTSTRAP_POSTCODE_WARNING' ] = ' warning';
				$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_POSTCODE' ]	= '';
			}
			if ($mrConfig[ 'bookingform_requiredfields_region' ] == '1') {
				$output[ 'REQUIRED_REGION' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_REGION' ] = 'true';
				$output[ 'BOOTSTRAP_REGION_WARNING' ] = ' warning';
			}
			if ($mrConfig[ 'bookingform_requiredfields_country' ] == '1') {
				$output[ 'REQUIRED_COUNTRY' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_COUNTRY' ] = 'true';
				$output[ 'BOOTSTRAP_COUNTRY_WARNING' ] = ' warning';
			}
			if ($mrConfig[ 'bookingform_requiredfields_tel' ] == '1') {
				$output[ 'REQUIRED_LANDLINE' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_LANDLINE' ] = 'true';
				$output[ 'BOOTSTRAP_LANDLINE_WARNING' ] = ' warning';
				$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_TEL' ]			= '';
			}
			if ($mrConfig[ 'bookingform_requiredfields_mobile' ] == '1') {
				$output[ 'REQUIRED_CELLMOBILE' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_CELLMOBILE' ] = 'true';
				$output[ 'BOOTSTRAP_CELLMOBILE_WARNING' ] = ' warning';
				$output[ 'INPUT_FORM_REQUIRED_FIELD_HIDDEN_FIELD_MOBILE' ]		= '';
			}
			if ($mrConfig[ 'bookingform_requiredfields_email' ] == '1') {
				$output[ 'REQUIRED_EMAIL' ] = '<font color="red">'.$icon.'</font>';
				$output[ 'VALIDATION_EMAIL' ] = 'true';
				$output[ 'BOOTSTRAP_EMAIL_WARNING' ] = ' warning';
			}

			return $output;
		}

		/**
		 * Initialise the guests details. If the user is a registered user any existing data will be found for them and the appropriate fields prefilled.
		 * This function sets the booking object's details.
		 */
		public function initGuestDetails(&$bkg, $guest_deets)
		{
			$thisJRUser = jomres_getSingleton('jr_user');

			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');
			if ($amend_contract) {
				$this->existing_id = $this->guests_uid;
			} else {
				$bkg->setGuest_existing_id($guest_deets[ 'EXISTINGID' ]);
			}
			$bkg->setGuest_firstname($guest_deets[ 'FIRSTNAME' ]);
			$bkg->setGuest_surname($guest_deets[ 'SURNAME' ]);
			$bkg->setGuest_house($guest_deets[ 'HOUSENO' ]);
			$bkg->setGuest_street($guest_deets[ 'STREET' ]);
			$bkg->setGuest_town($guest_deets[ 'TOWN' ]);
			$bkg->setGuest_region($guest_deets[ 'REGION' ]);
			$bkg->setGuest_country($guest_deets[ 'HIDDENCOUNTRY' ]);
			$bkg->setGuest_postcode($guest_deets[ 'POSTCODE' ]);
			$bkg->setGuest_tel_landline($guest_deets[ 'TEL' ]);
			$bkg->setGuest_tel_mobile($guest_deets[ 'MOBILE' ]);
			if ($thisJRUser->is_partner) {
				$bkg->setGuest_email($thisJRUser->email);
			} else {
				$bkg->setGuest_email($guest_deets[ 'EMAIL' ]);
			}
			$bkg->setGuest_discount((int) $guest_deets[ 'DISCOUNT' ]);
		}

		/**
		 * Make the Guest, put them into an array for patTemplate and return the array.
		 */
		public function makeGuestData()
		{
			$thisJRUser = jomres_getSingleton('jr_user');
			$userIsManager = $thisJRUser->userIsManager;
			$guests_uid = 0;

			$guest_firstname = $this->firstname;
			$guest_surname = $this->surname;
			$guest_house = $this->house;
			$guest_street = $this->street;
			$guest_town = $this->town;
			$guest_region = $this->region;
			$guest_country = $this->country;
			$guest_postcode = $this->postcode;
			$guest_tel_landline = $this->tel_landline;
			$guest_tel_mobile = $this->tel_mobile;

			if ($thisJRUser->is_partner) {
				$guest_email = $thisJRUser->email;
			} else {
				$guest_email = $this->email;
			}

			$guest_discount = (int) $this->guest_specific_discount;

			//$this->mos_userid=$thisJRUser->id;
			$id = $thisJRUser->id;
			if ($userIsManager || $thisJRUser->is_partner) {
				$guest_deets[ 'GUESTDROPDOWN' ] = $this->AJgetGuestDropdown();
			}

			if ($id != 0 && !$userIsManager) {
				$query = "SELECT  cms_user_id,enc_firstname,enc_surname,enc_house,enc_street,enc_town,enc_county,enc_country,enc_postcode,enc_tel_landline,enc_tel_mobile,enc_email FROM #__jomres_guest_profile WHERE cms_user_id = '$id'";
				$guestList = doSelectSql($query);
				if (!empty($guestList)) {
					foreach ($guestList as $data) {
						$guests_uid = $data->cms_user_id;
						$guest_firstname = $this->jomres_encryption->decrypt($data->enc_firstname);
						$guest_surname = $this->jomres_encryption->decrypt($data->enc_surname);
						$guest_house = $this->jomres_encryption->decrypt($data->enc_house);
						$guest_street = $this->jomres_encryption->decrypt($data->enc_street);
						$guest_town = $this->jomres_encryption->decrypt($data->enc_town);
						$guest_region = $this->jomres_encryption->decrypt($data->enc_county);
						$guest_country = $this->jomres_encryption->decrypt($data->enc_country);
						$guest_postcode = $this->jomres_encryption->decrypt($data->enc_postcode);
						$guest_tel_landline = $this->jomres_encryption->decrypt($data->enc_tel_landline);
						$guest_tel_mobile = $this->jomres_encryption->decrypt($data->enc_tel_mobile);
						$guest_email = $this->jomres_encryption->decrypt($data->enc_email);

						$query = "SELECT discount FROM #__jomres_guests WHERE mos_userid = '$id' AND property_uid = '$this->property_uid' limit 1";
						$discount = doSelectSql($query, 1);
						$guest_specific_discount = $discount;
					}
				}
			}

			//$guest_deets['COUNTRY']=createSimpleCountriesDropdown($guest_country);
			$guest_deets[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', false);
			$guest_deets[ 'HSURNAME' ] = jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', false);
			$guest_deets[ 'HHOUSENO' ] = jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', false);
			$guest_deets[ 'HSTREET' ] = jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', false);
			$guest_deets[ 'HTOWN' ] = jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', false);
			$guest_deets[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', false);
			$guest_deets[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
			$guest_deets[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
			$guest_deets[ 'HTEL' ] = jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', false);
			$guest_deets[ 'HMOBILE' ] = jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', false);
			if ($thisJRUser->is_partner) {
				$guest_deets[ 'HEMAIL' ] = jr_gettext('_JOMRES_DEBUGGING_YOUREMAIL', '_JOMRES_DEBUGGING_YOUREMAIL', false);
			} else {
				$guest_deets[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false);
			}

			$guest_deets[ 'EXISTINGID' ] = $guests_uid;
			$guest_deets[ 'FIRSTNAME' ] = $guest_firstname;
			$guest_deets[ 'SURNAME' ] = $guest_surname;
			$guest_deets[ 'HOUSENO' ] = $guest_house;
			$guest_deets[ 'STREET' ] = $guest_street;
			$guest_deets[ 'TOWN' ] = $guest_town;
			$guest_deets[ 'POSTCODE' ] = $guest_postcode;
			if (strlen($guest_country) == 0 || is_null($guest_country) || $guest_country == 'null') {
				$guest_country = $this->cfg_defaultcountry;
			}
			$guest_deets[ 'HIDDENCOUNTRY' ] = $guest_country;
			$guest_deets[ 'COUNTRY' ] = $this->bookingCountriesDropdown($guest_country);
			$guest_deets[ 'REGION' ] = $guest_region;

			$guest_deets[ 'TEL' ] = $guest_tel_landline;
			$guest_deets[ 'MOBILE' ] = $guest_tel_mobile;
			$guest_deets[ 'EMAIL' ] = restore_task_specific_email_address($guest_email);
			if (isset($guest_specific_discount)) {
				$guest_deets[ 'DISCOUNT' ] = $guest_specific_discount;
			} else {
				$guest_deets[ 'DISCOUNT' ] = 0;
			}

			return $guest_deets;
		}

		/**
		 * Makes the guest dropdown that managers/receptions see so that they can autmatically fill the booking form with the guest's details.
		 */
		public function AJgetGuestDropdown()
		{
			$dropDownList = '';
			$existingCustomers = array();
			$thisJRUser = jomres_getSingleton('jr_user');

			if ($thisJRUser->is_partner) {
				$partners = jomres_singleton_abstract::getInstance('jomres_partners');
				$guest_ids = $partners->get_guest_uids_for_partner($thisJRUser->id);
				$query = 'SELECT guests_uid,enc_surname, enc_firstname FROM #__jomres_guests WHERE partner_id = '.$thisJRUser->id.'';
				$existingCustomers = doSelectSql($query);
			} elseif ($thisJRUser->userIsManager) {
				$query = 'SELECT guests_uid,enc_surname, enc_firstname FROM #__jomres_guests WHERE property_uid IN ('.jomres_implode($thisJRUser->authorisedProperties).')';
				$existingCustomers = doSelectSql($query);
			}

			jr_import('jomres_encryption');
			$jomres_encryption = new jomres_encryption();

			if (!empty($existingCustomers)) {
				$temp_arr = array();
				foreach ($existingCustomers as $customer) {
					$temp_arr[] = array ( "guests_uid" =>$customer->guests_uid , "firstname" => stripslashes($jomres_encryption->decrypt($customer->enc_firstname)) , "surname" => stripslashes($jomres_encryption->decrypt($customer->enc_surname)) );
				}

				usort($temp_arr, array($this,'sort_alphabetic'));

				$ec = array();
				$ec[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_CLEAR_GUEST_DETAILS', '_JOMRES_CLEAR_GUEST_DETAILS', false, false));
				foreach ($temp_arr as $customer) {
					if ($customer['surname'] != jr_gettext('_JOMRES_GDPR_REDACTION_STRING', '_JOMRES_GDPR_REDACTION_STRING', false, false)) {
						$ec[ ] = jomresHTML::makeOption($customer['guests_uid'], $customer['surname'].', '.$customer['firstname']);
					}
				}
				$dropDownList = jomresHTML::selectList($ec, 'existingCustomers', ' onchange="getResponse_existing(\'existingCustomers\',this.value);" size="1" class="input-medium"', 'value', 'text', 0);
			}

			return $dropDownList;
		}

		/**
		 *
		 *
		 *
		 */

		private static function sort_alphabetic($a, $b)
		{
			if ($a['surname'] > $b['surname']) {
				return 1;
			} elseif ($a['surname'] < $b['surname']) {
				return -1;
			} else {
				return 0;
			}
		}

		/**
		 * Makes the countries dropdown.
		 */
		public function bookingCountriesDropdown($selectedCountry)
		{
			if (!isset($selectedCountry) || empty($selectedCountry)) {
				$selectedCountry = $this->cfg_defaultcountry;
			}

			$selectedCountry = strtoupper($selectedCountry);
			//$countryNames=countryNameArray();
			$countryCodes = countryCodesArray();
			asort($countryCodes);
			foreach ($countryCodes as $k => $v) {
				$thecountryCodes[ ] = jomresHTML::makeOption($k, jr_gettext('_JOMRES_CUSTOMTEXT_COUNTRYNAMES_'.$v, $v, false, false));
			}
			$countryDropdown = jomresHTML::selectList($thecountryCodes, 'country', ' class="input-medium" ', 'value', 'text', $selectedCountry);

			return $countryDropdown;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Room update functions

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Updates the selected room with the room^tariff string
		 * If room^tariff are already in the requestedRoom array then it will be removed
		 * otherwise it is added.
		 */
		public function updateSelectedRoom($roomAndTariff)
		{
			jr_import('jomres_roomlocks');
			$room_locker = new jomres_roomlocks();
			if (!empty($this->requestedRoom)) { // The requestedRooms list is not empty, let's see of we're adding or removing this selection
				// See if we're actually removing a room from the list of those selected
				if (in_array($roomAndTariff, $this->requestedRoom)) {
					$this->checkExistingRoomsTariffsForRoomsTariffsWhereMinRoomSettingIsNoLongerMet($roomAndTariff);
					if ($this->removeFromSelectedRooms($roomAndTariff)) {
						return true;
					} else {
						return false;
					}
				} else { // We are adding the room to the list
					// Let's check that this tariff tallies with this room type
					if ($this->addToSelectedRooms($roomAndTariff)) {
						$room_locker->lock_room($roomAndTariff, $this->dateRangeString);

						return true;
					} else {
						return false;
					}
				}
			} else { // We've got to be adding the room to the currently empty list of requested rooms
				if ($this->addToSelectedRooms($roomAndTariff)) {
					$room_locker->lock_room($roomAndTariff, $this->dateRangeString);

					return true;
				} else {
					return false;
				}
			}
		}

		// Not currently used. Developed when the assignation code was first developed however it wasn't needed. I'll leave it in situ for now in case we decide to add the option for guests to choose the numbers in each room, however this is unlikely to be developed at this time.
		// Add/remove a number of guests to the $this->room_allocations variable, we'll use it later to calculate the single person supplements.
		/**
		 *
		 *
		 *
		 */

		public function updateRoomAllocation($add_allocation = true, $rm_id = 0, $num_of_guests = 0)
		{
			if ($rm_id == 0) {
				return false;
			}
			if ($add_allocation) {
				if ($num_of_guests <= (int) $this->allPropertyRooms[ $rm_id ][ 'max_people' ]) {
					$this->room_allocations[ $rm_id ] = $num_of_guests;

					return true;
				} else {
					return false;
				}
			} else {
				unset($this->room_allocations[ $rm_id ]);

				return true;
			}
		}

		// Sanity check the $this->room_allocations varaible. We'll count the number of guests and ensure that each selected room has at least one guest
		/**
		 *
		 *
		 *
		 */

		public function checkAllGuestsAllocatedToRooms()
		{
			$mrConfig = $this->mrConfig;

			$this->room_allocations = array();
			$guests = $this->getVariantsOfType('guesttype');

			if ($mrConfig[ 'tariffmode' ] == '5' || count($this->jomres_occupancy_levels->occupancy_levels) > 0 ) {
				$totalNumberOfGuests = $this->standard_guest_numbers + $this->extra_guest_numbers;
			} else {
				$totalNumberOfGuests = 0;
				$guests = $this->getVariantsOfType('guesttype');
			}

			if ($mrConfig[ 'tariffmode' ] == '3') { // dobooking has evolved to use a default number of guests of 2 (standard tariff mode). If an old micromanage tariff set has been created but guest types not created then micromanage bookings will not work now, so we'll set the default number of guests to 2
				if (empty($guests)) {
					$guests = array(array('qty' => $this->standard_guest_numbers ));
				}
			}

			$this->setErrorLog('checkAllGuestsAllocatedToRooms::Starting ');
			if (!empty($guests) || $mrConfig[ 'tariffmode' ] == '5' || count($this->jomres_occupancy_levels->occupancy_levels) > 0) {
				$this->setErrorLog('checkAllGuestsAllocatedToRooms:: count($guests) > 0 ');

				if (empty($this->requestedRoom)) {
					$this->setErrorLog('checkAllGuestsAllocatedToRooms:: No rooms have been selected yet');
					return true;
				}

				if (!empty($guests)) {
					foreach ($guests as $g) {
						$totalNumberOfGuests = $totalNumberOfGuests + $g[ 'qty' ];
					}
				} else {
					$totalNumberOfGuests = $this->standard_guest_numbers;
				}

				$this->city_tax_number_of_guests = $totalNumberOfGuests;

				// Let's find the max_people options for each room
				$allSelectedRoomsMaxPeople = array();
				$room_spread_array = array();
				foreach ($this->requestedRoom as $r) {
					$rm_idArr = explode('^', $r);
					$rm_id = $rm_idArr[ 0 ];
					$allSelectedRoomsMaxPeople[ $rm_id ] = $this->allPropertyRooms[ $rm_id ][ 'max_people' ];
					$max_count = (int) $this->allPropertyRooms[ $rm_id ][ 'max_people' ];
					for ($i = 1; $i <= $max_count; ++$i) {
						$key = $i.'_'.$rm_id;
						$room_spread_array[ $key ] = 0;
					}
				}

				ksort($room_spread_array);
				$numberOfSelectedRooms = count($allSelectedRoomsMaxPeople);
				// if $numberOfSelectedRooms == $totalNumberOfGuests then we can put one person in each room and return
				if ($numberOfSelectedRooms == $totalNumberOfGuests) {
					$this->setErrorLog('checkAllGuestsAllocatedToRooms::$numberOfSelectedRooms == $totalNumberOfGuests ');
					foreach ($allSelectedRoomsMaxPeople as $rm_id => $room) {
						$this->room_allocations[ $rm_id ][ 'number_allocated' ] = 1;
					}
					$this->setErrorLog('checkAllGuestsAllocatedToRooms:: $this->room_allocations > 0 '.serialize($this->room_allocations));

					return true;
				} else { // There are more guests than there are rooms, we'll need to put one person in each room, then see what's left over.
					// First we'll populate the room spread array. We've sorted the keys so that room 1 for each room is at the beginning of the array, ensuring that whereever possible there's at least one person in each room
					$remainingGuests = $totalNumberOfGuests;
					foreach ($room_spread_array as $key => $val) {
						if ($remainingGuests > 0) {
							$room_spread_array [ $key ] = 1;
							--$remainingGuests;
						}
					}

					foreach ($room_spread_array as $key => $val) {
						$tmp_arr = explode('_', $key);
						$room_index = $tmp_arr[ 0 ];
						$rm_id = $tmp_arr[ 1 ];
						if (!isset($this->room_allocations[ $rm_id ][ 'number_allocated' ])) {
							$this->room_allocations[ $rm_id ][ 'number_allocated' ] = 0;
						}
						$this->room_allocations[ $rm_id ][ 'number_allocated' ] = $this->room_allocations[ $rm_id ][ 'number_allocated' ] + $val;
					}
					$this->setErrorLog('checkAllGuestsAllocatedToRooms:: $this->room_allocations > 0 '.serialize($this->room_allocations));

					return true;
				}
			} else {
				$this->setErrorLog('checkAllGuestsAllocatedToRooms::No guest types selected ');
			}
		}

		/**
		 * Now we need to check and see if there are any mini-max room/tariff combinations selected. If there are and the current number of rooms selected < min or max, then we need to remove those particular rooms
		 * new for v4.4.1.
		 */
		public function checkExistingRoomsTariffsForRoomsTariffsWhereMinRoomSettingIsNoLongerMet($roomAndTariff)
		{
			$rtArray = explode('^', $roomAndTariff);
			$tariff_id_to_be_removed = $rtArray[ 1 ];
			$restrictions_in_place = false;
			$restricted_tariffs = array();
			foreach ($this->requestedRoom as $rt) {
				$rtArray = explode('^', $rt);
				$tariff_id = $rtArray[ 1 ];
				$this->setErrorLog('checkExistingRoomsTariffsForRoomsTariffsWhereMinMaxSettingIsNoLongerMet::tariff_id = '.$tariff_id);
				$min_rooms = $this->allPropertyTariffs[ $tariff_id ][ 'minrooms_alreadyselected' ];
				if ($min_rooms > 0) {
					$this->setErrorLog('checkExistingRoomsTariffsForRoomsTariffsWhereMinMaxSettingIsNoLongerMet::Restrictions are in place. One room in selection has a min rooms > 0 ');
					$restrictions_in_place = true;
				}
			}

			if ($restrictions_in_place) {
				$this->setErrorLog('checkExistingRoomsTariffsForRoomsTariffsWhereMinMaxSettingIsNoLongerMet::As one tariff has restrictions, and because a tariff is being removed, we are now clearing all selected rooms from the list ');
				foreach ($this->requestedRoom as $rt) {
					$rtArray = explode('^', $rt);
					$this->removeFromSelectedRooms($rt);
				}
			}
		}

		/**
		 * Rebuild the requestedRoom array excluding the one we don't want.
		 */
		public function removeFromSelectedRooms($roomAndTariff)
		{
			jr_import('jomres_roomlocks');
			$room_locker = new jomres_roomlocks();

			$tmpArray = array();
			foreach ($this->requestedRoom as $rt) {
				$this->setErrorLog("removeFromSelectedRooms::Checking to see if $rt is to be removed.");
				if ($rt != $roomAndTariff) {
					$tmpArray[ ] = $rt;
				} else {
					$room_locker->unlock_room($roomAndTariff, $this->dateRangeString);
				}
			}
			$this->requestedRoom = $tmpArray;
			$this->checkAllGuestsAllocatedToRooms();
		}

		/**
		 * Add room^tariff to requestedRoom.
		 */
		public function addToSelectedRooms($roomAndTariff)
		{
			$rtArray = explode('^', $roomAndTariff);
			if ($this->checkTariffTalliesWithRoom($rtArray)) {
				if ($this->checkRoomNotAlreadySelected($rtArray)) {
					$this->requestedRoom[ ] = $roomAndTariff;
					$this->checkAllGuestsAllocatedToRooms();

					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		/**
		 * Returns the number of currently selected rooms.
		 */
		public function numberOfCurrentlySelectedRooms()
		{
			return count($this->requestedRoom);
		}

		/**
		 * Checks that a room^tariff hasn't already been selected.
		 */
		public function checkRoomNotAlreadySelected($rtArray)
		{
			if (!empty($this->requestedRoom)) {
				$rmidsArray = array();
				$room = $rtArray[ 0 ];
				foreach ($this->requestedRoom as $rt) {
					$rm = explode('^', $rt);
					$rmid = $rm[ 0 ];
					$rmidsArray[ ] = $rmid;
				}
				if (!empty($rmidsArray)) {
					$rmidsArray = array_unique($rmidsArray);
				}
				if (in_array($room, $rmidsArray)) {
					return false;
				} else {
					return true;
				}
			}

			return true;
		}

		/**
		 * Checks that it is logical to select a room with a given tariff. Finds the room type then checks that the tariff has the same room type.
		 */
		public function checkTariffTalliesWithRoom($rtArray)
		{
			$room = $rtArray[ 0 ];
			/*
		$query="SELECT room_classes_uid FROM #__jomres_rooms WHERE room_uid = '".$room."'";
		$roomsList=doSelectSql($query);
		foreach ($roomsList as $roomClass)
		{
		$room_class=$roomClass->room_classes_uid;
		}
		$query="SELECT rates_uid FROM #__jomres_rates WHERE rates_uid = '".$rtArray[1]."' AND roomclass_uid = '".$room_class."' AND property_uid = '$this->property_uid' ";
		$ratesList=doSelectSql($query);
		*/
			$ratesList = array();
			if (isset($this->allPropertyRooms[ $room ])) {
				$room_class = $this->allPropertyRooms[ $room ][ 'room_classes_uid' ];
				foreach ($this->allPropertyTariffs as $tariff) {
					if ($tariff[ 'rates_uid' ] == $rtArray[ 1 ] && $tariff[ 'roomclass_uid' ] == $room_class) {
						$ratesList[ ] = $tariff[ 'rates_uid' ];
					}
				}
			}

			if (empty($ratesList)) {
				return false;
			} else {
				return true;
			}
		}

		/**
		 * String output of the currently selected rooms. Returns overlib'd output as a string.
		 */
		public function listCurrentlySelectedRooms()
		{
			$return_output = '';
			//if ( $this->cfg_booking_form_rooms_list_style == "1" )
			//	{
			$this->setErrorLog('listCurrentlySelectedRooms::Requested rooms: '.gettype($this->requestedRoom));

			if (!empty($this->requestedRoom)) {
				$return_output = '<div id="roombuttoncontainer_selected2"><div id="roombutton_selected">';
				$tariff_headers_array = $this->makeTariffHeaders();
				foreach ($this->requestedRoom as $rr) {
					$currentUids = explode('^', $rr);
					$result = $this->makeRoomTariffDetails($currentUids[ 0 ], $currentUids[ 1 ]);
					$roomTariffOutputId = $result[ 'requestedRoom' ];
					$roomTariffOutputText = $result[ 'roomandtariffinfo' ];
					$roomDeets[ ] = $this->makeRoomOverlibdata($currentUids[ 0 ], $currentUids[ 1 ], $roomTariffOutputId, $roomTariffOutputText, true);
				}
				$pageoutput = array();

				$pageoutput[ ] = $tariff_headers_array;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->addRows('rows', $roomDeets);
				$tmpl->readTemplatesFromInput('booking_form_classic_roomslist_selected.html');
				$template_output = $tmpl->getParsedTemplate();
				$return_output .= $template_output;

				$return_output .= '</div></div>';
			}
			//	}
			return $return_output;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Room listing functions

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Get all of the rooms for this property.
		 */
		public function getAllRoomUidsForProperty()
		{
			$room_uidsArray = array();
			$query = "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '$this->property_uid'";
			$roomsList = doSelectSql($query);
			foreach ($roomsList as $rooms) {
				$room_uidsArray[ ] = $rooms->room_uid;
			}

			//$this->setErrorLog("This property has these rooms: ".serialize($room_uidsArray) );
			return $room_uidsArray;
		}

		/**
		 * From the free rooms array, strips out any rooms that have already been selected.
		 */
		public function removeRoomuidsAlreadyInThisBooking($freeRoomsArray)
		{
			$ret_uids = array();
			$tmpArray = array();
			if (!empty($this->requestedRoom) && !empty($freeRoomsArray)) {
				foreach ($this->requestedRoom as $rr) {
					$currentUids = explode('^', $rr);
					$tmpArray[ ] = $currentUids[ 0 ];
				}
				$this->setErrorLog('removeRoomuidsAlreadyInThisBooking::Serialized tmpArray '.serialize($tmpArray));
				foreach ($freeRoomsArray as $id) {
					$this->setErrorLog('removeRoomuidsAlreadyInThisBooking:: id '.$id);
					if (!in_array($id, $tmpArray)) {
						$ret_uids[ ] = $id;
					}
				}
			} else {
				$ret_uids = $freeRoomsArray;
			}
			if (empty($ret_uids) && !empty($tmpArray)) {
				$this->setErrorLog('removeRoomuidsAlreadyInThisBooking::Rooms removed as already in booking');
			}

			return $ret_uids;
		}

		/**
		 * Find rooms that are free within the arrival and departure dates.
		 */
		public function findFreeRoomsInDateRange($freeRoomsArray)
		{
			//$this->setErrorLog("Contents of the freeRoomsArray when looking for free rooms: ".serialize($freeRoomsArray) );
			$tmpArray = array();
			if (!empty($this->dateRangeString)) {
				$dateRangeArray = explode(',', $this->dateRangeString);
			} else {
				$this->setErrorLog('findFreeRoomsInDateRange::Date range array empty');

				return false;
			}

			if (!empty($freeRoomsArray)) {
				foreach ($freeRoomsArray as $roomUid) {
					$roomIsFree = true;
					foreach ($dateRangeArray as $eachdate) {
						if (isset($this->allBookings[ $eachdate ][ $roomUid ])) {
							$roomIsFree = false;

							break;
						}
					}

					if ($roomIsFree) {
						$tmpArray[ ] = $roomUid;
					}
				}

				if (empty($tmpArray)) {
					$this->setErrorLog('findFreeRoomsInDateRange::No free rooms found in date range');
				}
			} else {
				$this->setErrorLog('findFreeRoomsInDateRange::Room uids array empty');
			}

			//$this->setErrorLog("Contents of the freeRoomsArray after looking for free rooms: ".serialize($tmpArray) );
			return $tmpArray;
		}

		/**
		 * Filters rooms out that have been locked.
		 */
		public function extractLockedRooms($freeRoomsArray)
		{
			jr_import('jomres_roomlocks');
			$room_locker = new jomres_roomlocks();
			$tmpArray = array();
			$this->setErrorLog('extractLockedRooms :: Looking for free rooms in date range: '.serialize($freeRoomsArray));
			if (!empty($freeRoomsArray)) {
				foreach ($freeRoomsArray as $roomUid) {
					$roomIsFree = true;
					if ($room_locker->is_room_locked($roomUid, $this->dateRangeString)) {
						$this->setErrorLog('extractLockedRooms :: Removing room: '.$roomUid.' As is locked.');
						$roomIsFree = false;
					}
					if ($roomIsFree) {
						$tmpArray[ ] = $roomUid;
					}
				}
				if (empty($tmpArray)) {
					$this->setErrorLog('extractLockedRooms::No free rooms found in date range');
				}
			} else {
				$this->setErrorLog('extractLockedRooms::Room uids array empty');
			}
			$this->setErrorLog('extractLockedRooms::Contents of the freeRoomsArray after looking for free rooms: '.serialize($tmpArray));

			return $tmpArray;
		}

		/**
		 * Finds the total number of beds that are unbooked in this property at this time.
		 */
		public function checkPeopleNumbers($freeRoomsArray)
		{
			$totalFreeBeds = 0;
			if (!empty($freeRoomsArray)) {
				$n = count($freeRoomsArray);
				$query = 'SELECT room_uid,max_people FROM #__jomres_rooms WHERE ';
				$query .= ' (room_uid = ';
				for ($i = 0; $i < $n; ++$i) {
					$query .= "'".$freeRoomsArray[ $i ]."'";
					if ($i < ($n - 1)) {
						$query .= ' OR room_uid = ';
					}
				}
				$query .= ') ';

				$freeRoomsCapacityList = doSelectSql($query);

				foreach ($freeRoomsCapacityList as $room) {
					$totalFreeBeds = $totalFreeBeds + (int) $room->max_people;
				}
			}

			$this->beds_available = $totalFreeBeds;
			$this->setErrorLog('checkPeopleNumbers::The number of beds available on this date '.$totalFreeBeds);

			return $freeRoomsArray;
		} // end function checkPeopleNumbers

		/**
		 * Adds the total selected guesttypes to find the total in the party. Returns the integer.
		 */
		public function getTotalInParty()
		{

			$n = count($this->variancetypes);
			// For older properties with guesttypes
			if ($n > 0) {
				$subtotal = 0;
				for ($i = 0; $i < $n; ++$i) {
					if (isset($this->variancetypes[ $i ]) && $this->variancetypes[ $i ] == 'guesttype') {
						$subtotal = $subtotal + $this->varianceqty[ $i ];
					}
				}
				$this->total_in_party = $subtotal;
			} else { // For newer properties with Standard mode (hopefully soon to be retired, but retaining the guest numbers aspect) guest types
				$this->total_in_party = $this->standard_guest_numbers +	$this->extra_guest_numbers ;
			}

			return $this->total_in_party;
		}

		/**
		 * Passed an array, it'll create an object and pass it back. v2.6.0.3 dobooking_functions was changed to reduce the number of queries by collecting much of the required data in a few quick queries when the booking object is created. This information is then stored in memory as an array because it's easy to access directly, however some of the code in dobooking_functions expects to be passed the array(obj) that was pulled from db queries so instead of rewriting bunches of code so that they now see basic arrays, we'll reconvert (in memory) the array found to an an object. The method calling this method will actually create the array(obj) to be passed back to it's parent method.
		 */
		public function convertArrayToObject($tmpArray)
		{
			$obj = new stdClass();
			foreach ($tmpArray as $key => $val) {
				$obj->$key = $val;
			}

			return $obj;
		}

		/**
		 * Pass a room uid, this method will return all tariffs for that room uid's class.
		 */
		public function getTariffsForRoomUidByClass($room_uid)
		{
			$result = array();

			if (isset($this->allPropertyRooms[ $room_uid ][ 'room_classes_uid' ])) {
				$roomType = $this->allPropertyRooms[ $room_uid ][ 'room_classes_uid' ];
			} else {
				$roomType = 0;
			}
			//$this->setErrorLog("getTariffsForRoomUidByClass::allPropertyRooms ".serialize($this->allPropertyRooms[$room_uid]));
			//$this->setErrorLog("getTariffsForRoomUidByClass::allPropertyTariffs ".serialize($this->allPropertyTariffs));
			foreach ($this->allPropertyTariffs as $t) {
				//$this->setErrorLog("getTariffsForRoomUidByClass::t['roomclass_uid'] ".$t['roomclass_uid']);
				//$this->setErrorLog("getTariffsForRoomUidByClass::roomType ".$roomType);
				if ($t[ 'roomclass_uid' ] == $roomType) {
					//$this->setErrorLog("getTariffsForRoomUidByClass::allPropertyRooms ".serialize($this->allPropertyRooms[$room_uid]));
					$result[ ] = $this->convertArrayToObject($t);
				}
			}

			return $result;
		}

		/**
		 * Pass a roomClass uid, this method will return all tariffs for that class.
		 */
		public function getTariffsForRoomClass($roomClass)
		{
			$result = array();
			foreach ($this->allPropertyTariffs as $t) {
				if ($t[ 'roomclass_uid' ] == $roomClass) {
					$result[ ] = $this->convertArrayToObject($t);
				}
			}

			return $result;
		}

		/**
		 * Find any tariffs that are valid for the available rooms
		 * Finds all tariffs for a given room type
		 * Checks that arrival and departure dates fall between the valid from -> to dates
		 * Checks that min & max days of the booking (stayDays) are applicable
		 * Checks that the min & max people in the party do are applicable to the tariff
		 * Checks to see if the tariff allows bookings that include weekends if the date range includes a weekend day
		 * Returns an array $roomAndTariffArray which is a multi-dimensional array of rooms and tariffs that can be applied to the room.
		 */
		public function getTariffsForRoomUids($freeRoomsArray)
		{
			$mrConfig = $this->mrConfig;
			$this->build_tariff_to_date_map();
			$roomAndTariffArray = array();
			$already_found_tariffs = array();
			$this->tariff_types_min_days = array();
			$dateRangeArray = explode(',', $this->dateRangeString);
			$dateRangeArray_count = count($dateRangeArray);
			$filtered_out_type_type_ids = array();
			$this->setErrorLog('getTariffsForRoomUids:: tariff map '.serialize($this->micromanage_tarifftype_to_date_map));
			$this->setErrorLog('--------------------------------------------');
			if (!empty($freeRoomsArray) && is_array($freeRoomsArray)) {
				$unixArrivalDate = $this->getMkTime($this->arrivalDate);
				$unixDepartureDate = $this->getMkTime($this->departureDate);

				foreach ($freeRoomsArray as $room_uid) {
					$rateDeets = $this->getTariffsForRoomUidByClass($room_uid);
					foreach ($rateDeets as $tariff) {
						$datesValid = $this->filter_tariffs_on_dates($tariff, $unixArrivalDate, $unixDepartureDate); // Does the tariff's from/to dates fall within the booking's dates? There will be some overlap here if we use Advanced or Micromanage mode. That's where the tariff_to_date_map will come into play
						$stayDaysValid = $this->filter_tariffs_staydays($tariff); // This will also use the map, it'll help to calculate also the minimum interval
						$roomsAlreadySelectedTests = $this->filter_tariffs_alreadyselectedcheck($tariff); // If the tariff can only be selected when N number of rooms have already been selected?
						$numberPeopleValid = $this->filter_tariffs_peoplenumbercheck($tariff); // If the total number of people in the booking fall within the tariff's min/max people range?
						$dowCheck = $this->filter_tariffs_dowcheck($tariff); // Does the tariff allow selections on the arrival date's day of week?

						$rates_uid = $tariff->rates_uid;
						$this->setErrorLog('getTariffsForRoomUids:: Checking tariff id '.$rates_uid.' ');

						if ($datesValid && $stayDaysValid && $numberPeopleValid && $dowCheck && $roomsAlreadySelectedTests && (float)$tariff->roomrateperday > 0.00) {
							$tariff_type_id = 0;
							if (isset($this->all_tariff_id_to_tariff_type_xref[ $rates_uid ][ 0 ])) {
								$tariff_type_id = $this->all_tariff_id_to_tariff_type_xref[ $rates_uid ][ 0 ];
							}
							if (!isset($already_found_tariffs[ $tariff_type_id.' '.$room_uid ]) && !in_array($tariff_type_id, $filtered_out_type_type_ids)) {
								$pass_price_check = true;
								if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') { // If tariffmode = 2, we need to finally scan $this->micromanage_tarifftype_to_date_map, to ensure that all dates have a price set
									if (empty($this->micromanage_tarifftype_to_date_map)) {
										$pass_price_check = false;
									} else {
										//$this->setPopupMessage( str_replace(";", " " ,serialize( $this->micromanage_tarifftype_to_date_map[$tariff_type_id] ) ) );
										if (is_array($this->micromanage_tarifftype_to_date_map[ $tariff_type_id ]) ) {
											$map_count = count($this->micromanage_tarifftype_to_date_map[$tariff_type_id]);
											foreach ($this->micromanage_tarifftype_to_date_map[$tariff_type_id] as $dates) {
												$this->setErrorLog('getTariffsForRoomUids:: Count dates ' . $map_count . ' Count daterange array ' . $dateRangeArray_count . ' ');
												if ($map_count != $dateRangeArray_count) { // There are more dates in the date range array than there are valid tariffs. This means that during the map building phase we passed the date of the last tariff found
													$this->setErrorLog('getTariffsForRoomUids:: tariff map count != dates count ');
													$pass_price_check = false;
												} else {
													if ((float)$dates['price'] == 0 && $dates['tariff_type_id'] == $tariff_type_id) {
														$pass_price_check = false;
														$this->setErrorLog('getTariffsForRoomUids:: Removing a tariff as at least one other tariff in the series is set to 0. Tariff type id = ' . $tariff_type_id);
														$filtered_out_type_type_ids[] = $tariff_type_id;
													}
												}
											}
										} else {
											$pass_price_check = false;
										}
									}
								}

								if ($pass_price_check) {
									if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {
										$already_found_tariffs[ $tariff_type_id.' '.$room_uid ] = 1;
									} // Without this there will be duplicates returned to the rooms list in the booking form
									$roomAndTariffArray[ ] = array($room_uid, $rates_uid);
								}
							}
						} elseif ($datesValid && !$stayDaysValid && $numberPeopleValid && $dowCheck && $roomsAlreadySelectedTests && $mrConfig[ 'tariffmode' ] == '1') { // Everything passed except the number of days in the booking
							$mindays = $this->simple_tariff_to_date_map[ $rates_uid ][ 'mindays' ];
							if ($mindays < $this->mininterval) {
								$this->mininterval = $mindays;
							}
						}
					}
				}
			} else {
				$this->setErrorLog('getTariffsForRoomUids::count(freeRoomsArray) = 0');
			}
			$this->setErrorLog('--------------------------------------------');

			if (empty($roomAndTariffArray) && ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig['tariffmode'] == '5' )) {
				if (!empty($this->tariff_types_min_days)) {
					$this->mininterval = 1000; // We MUST reset the minimum interval here, as it's going to be recalculated.
					foreach ($this->tariff_types_min_days as $mindays) {
						if ($mindays < $this->mininterval) {
							$this->mininterval = $mindays;
						}
					}
				}
			}

			return $roomAndTariffArray;
		}

		public function filter_tariffs_staydays($tariff)
		{
			$mrConfig = $this->mrConfig;
			$stayDays = $this->getStayDays();
			$stayDaysValid = false;

			$maxdays = $tariff->maxdays;

			if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {
				// We've been passed the tariff, we now need to find the tariff type for this tariff, then find all related tariffs
				$tariff_type_id = $this->all_tariff_id_to_tariff_type_xref[ $tariff->rates_uid ][ 0 ];
				$all_associated_tariff_ids = $this->all_tariff_types_to_tariff_id_xref[ $tariff_type_id ];

				$mindays = 1;
				foreach ($this->micromanage_tarifftype_to_date_map as $dates) {
					foreach ($dates as $d) {
						if ($d[ 'tariff_type_id' ] == $tariff_type_id) {
							if ((int) $d[ 'mindays' ] > $mindays) {
								$this->tariff_types_min_days[ $tariff_type_id ] = (int) $d[ 'mindays' ];
								$mindays = (int) $d[ 'mindays' ];
							}
						}
					}
				}

				if ($mindays < $this->mininterval) {
					$this->mininterval = $mindays;
				}

				if ($stayDays >= $mindays && $stayDays <= $maxdays) {
					$stayDaysValid = true;
				}
			} else {
				$mindays = $tariff->mindays;
				if ($stayDays >= $mindays && $stayDays <= $maxdays) {
					$stayDaysValid = true;
				}
			}
			if (!$stayDaysValid) {
				$this->setErrorLog('filter_tariffs_staydays:: Stay days not valid for tariff uid '.$tariff->rates_uid);
			}

			return $stayDaysValid;
		}

		/**
		 *
		 *
		 *
		 */

		public function filter_tariffs_on_dates($tariff, $unixArrivalDate, $unixDepartureDate)
		{
			$mrConfig = $this->mrConfig;
			$validFrom = $tariff->validfrom;
			$validTo = $tariff->validto;

			$unixValidFromDate = $this->getMkTime($validFrom);
			$unixValidToDate = $this->getMkTime($validTo);

			$mindays = $tariff->mindays;
			$maxdays = $tariff->maxdays;

			$datesValid = false;
			if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {// This is really a cursory check. Most of the time there will be/should be prices covering every day in the period in question, but if not we'll find out here
				$tariff_type_id = $this->all_tariff_id_to_tariff_type_xref[ $tariff->rates_uid ][ 0 ];
				$all_associated_tariff_ids = $this->all_tariff_types_to_tariff_id_xref[ $tariff_type_id ];
				$stayDays = $this->getStayDays();
				$datesValid = true;
			} else {
				if ($unixArrivalDate >= $unixValidFromDate && $unixArrivalDate <= $unixValidToDate) {
					$datesValid = true;
				}
			}
			if (!$datesValid) {
				$this->setErrorLog('filter_tariffs_on_dates:: Dates not valid for tariff uid '.$tariff->rates_uid);
			}

			return $datesValid;
		}

		/**
		 *
		 *
		 *
		 */

		public function filter_tariffs_alreadyselectedcheck($tariff)
		{
			$numberOfRoomsAlreadySelected = count($this->requestedRoom);
			$roomsAlreadySelectedTests = false;
			if (!isset($tariff->minrooms_alreadyselected) || $tariff->minrooms_alreadyselected == '') {
				$minrooms_alreadyselected = 0;
			} else {
				$minrooms_alreadyselected = $tariff->minrooms_alreadyselected;
			}
			if (!isset($tariff->maxrooms_alreadyselected) || $tariff->maxrooms_alreadyselected == '') {
				$maxrooms_alreadyselected = 100;
			} else {
				$maxrooms_alreadyselected = $tariff->maxrooms_alreadyselected;
			}

			if ($numberOfRoomsAlreadySelected >= $minrooms_alreadyselected && $numberOfRoomsAlreadySelected < $maxrooms_alreadyselected) {
				//$this->setErrorLog("getTariffsForRoomUids:: Passed test 1" );
				$roomsAlreadySelectedTests = true;
			} else {
				if ($numberOfRoomsAlreadySelected >= $minrooms_alreadyselected && $numberOfRoomsAlreadySelected < $maxrooms_alreadyselected) {
					//$this->setErrorLog("getTariffsForRoomUids:: Passed test 2" );
					$roomsAlreadySelectedTests = true;
				}
			}
			if (!$roomsAlreadySelectedTests) {
				$this->setErrorLog('filter_tariffs_alreadyselectedcheck:: Tariff already selected tariff uid '.$tariff->rates_uid);
			}

			return $roomsAlreadySelectedTests;
		}

		/**
		 *
		 *
		 *
		 */

		public function filter_tariffs_peoplenumbercheck($tariff)
		{
			$numberPeopleValid = false;

			$totalInParty = $this->getTotalInParty();
			$minpeople = $tariff->minpeople;
			$maxpeople = $tariff->maxpeople;

			if ($totalInParty > 0) {
				if ($totalInParty >= $minpeople && $totalInParty <= $maxpeople) {
					$numberPeopleValid = true;
				}
			} else {
				$numberPeopleValid = true;
			}
			if (!$numberPeopleValid) {
				$this->setErrorLog("filter_tariffs_peoplenumbercheck:: People numbers don't match for tariff uid ".$tariff->rates_uid);
			}

			return $numberPeopleValid;
		}

		/**
		 *
		 *
		 *
		 */

		public function filter_tariffs_dowcheck($tariff)
		{
			$dateRangeIncludesWeekend = $this->dateRangeIncludesWeekends();
			$dateRangeIsAllWeekends = $this->dateRangeIsAllWeekends();

			$allow_we = $tariff->allow_we;
			$weekendonly = $tariff->weekendonly;
			$tariff_dayofweek = $tariff->dayofweek;

			$dowCheck = true;
			if ($allow_we == '0' && $dateRangeIncludesWeekend) {
				//$this->setErrorLog("getTariffsForRoomUids::Allow WE =1 and dateRangeIncludesWeekend");
				$dowCheck = false;
			}

			if ($weekendonly == '1' && $dateRangeIsAllWeekends) {
				$dowCheck = true;
			} else {
				if ($weekendonly == '1' && !$dateRangeIsAllWeekends) {
					$dowCheck = false;
				}
			}

			//$this->setErrorLog("getTariffsForRoomUids::Day of week check, tariff dow = ".$tariff_dayofweek );
			//$this->setErrorLog("getTariffsForRoomUids::Day of week check, arrival date dow =".$this->getDayOfWeek($unixArrivalDate));
			if ($tariff_dayofweek < 7) {
				if ($this->getDayOfWeek($this->arrivalDate) == $tariff_dayofweek) {
					$dowCheck = true;
					//$this->setErrorLog("getTariffsForRoomUids::Day of week check, <b> TRUE </b>");
				} else {
					$dowCheck = false;
					//$this->setErrorLog("getTariffsForRoomUids::Day of week check, <b> FALSE </b>");
				}
			}
			if (!$dowCheck) {
				$this->setErrorLog('filter_tariffs_dowcheck:: Day of week check failed for tariff uid '.$tariff->rates_uid);
			}

			return $dowCheck;
		}

		/**
		 *
		 *
		 *
		 */

		public function build_tariff_to_date_map()
		{
			$this->simple_tariff_to_date_map = array();
			$this->micromanage_tarifftype_to_date_map = array();

			$mrConfig = $this->mrConfig;

			// for testing
			//$this->dateRangeString = "2012/10/30,2012/10/31,2012/11/01,2012/11/02";
			//$mrConfig['tariffmode']="1";

			$dateRangeArray = explode(',', $this->dateRangeString);
			foreach ($this->allPropertyTariffs as $tariff) {
				$tariff_uid = $tariff[ 'rates_uid' ];
				if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {
					$tariff_type_id = $this->all_tariff_id_to_tariff_type_xref[ $tariff_uid ][ 0 ];

					// Now we can get all of the tariff uids that are associated with this tariff type
					$all_associated_tariff_ids = $this->all_tariff_types_to_tariff_id_xref[ $tariff_type_id ];
					// We'll build a map of the dates in this booking, cross referenced to the tariff uids, and the prices
					foreach ($all_associated_tariff_ids as $t_id) {
						if (isset($this->allPropertyTariffs[ $t_id ])) {
							$tariff_info = $this->allPropertyTariffs[ $t_id ];
							if (isset($tariff_info[ 'tariff_dates' ])) {
								$dates = $tariff_info[ 'tariff_dates' ];
								foreach ($dates as $d) {
									if (in_array($d, $dateRangeArray) && isset($tariff_info[ 'roomrateperday' ])) {
										$this->micromanage_tarifftype_to_date_map[ $tariff_type_id ][ $d ] = array('price' => $tariff_info[ 'roomrateperday' ], 'mindays' => $tariff_info[ 'mindays' ], 'rates_uid' => $tariff_info[ 'rates_uid' ], 'tariff_type_id' => $tariff_type_id);
									}
								}
							}
						}
					}
				} else {
					$tariff_info = $this->allPropertyTariffs[ $tariff_uid ];
					if (isset($tariff_info[ 'tariff_dates' ])) {
						$dates = $tariff_info[ 'tariff_dates' ];
						foreach ($dates as $d) {
							if (in_array($d, $dateRangeArray) && isset($tariff_info[ 'roomrateperday' ])) {
								$this->simple_tariff_to_date_map[ $tariff_uid ] = array('price' => $tariff_info[ 'roomrateperday' ], 'mindays' => $tariff_info[ 'mindays' ], 'rates_uid' => $tariff_info[ 'rates_uid' ]);
							}
						}
					}
				}
			}
		}

		//
		/**
		 *
		 * This function is slower than the one that uses dateInterval. I will leave it in-situ as a reminder not to use it :)
		 *
		 */

		/*
	function get_periods($start,$end)
	{
	$current = strtotime($start);
	$last = strtotime($end);
	while( $current <= $last )
		{
		$dates[] = date('Y/m/d', $current);
		$current = strtotime('+1 day', $current);
		}
	return $dates;
	}
	*/

		/**
		 *
		 *
		 *
		 */

		public function get_periods($start, $end, $interval = null)
		{
			$start = new DateTime($start);
			$end = new DateTime($end);
			if (is_null($interval)) {
				$interval = new DateInterval('P1D');
			}

			$period = new DatePeriod($start, $interval, $end);
			$dates = array();
			foreach ($period as $date) {
				$d = $date->format('Y/m/d');
				$dates[ ] = $d;
			}

			return $dates;
		}

		/**
		 * Limits the number of rooms that can be displayed if the config option returnRoomsLimit is set to greater than 0.
		 */
		public function limitRoomsList($roomAndTariffArray)
		{
			if ($this->booker_class == '100') {
				return $roomAndTariffArray;
			}
			$returnRoomsLimit = (int) $this->cfg_returnRoomsLimit;
			$tmpArray = array();
			$tariffsArray = array();
			foreach ($roomAndTariffArray as $rt) {
				$roomuid = $rt[ 0 ];
				$tariffuid = $rt[ 1 ];
				$tariffsArray[ $tariffuid ][ ] = $roomuid;
			}

			foreach ($tariffsArray as $key => $val) {
				$tariffuid = $key;

				for ($i = 0; $i < $returnRoomsLimit; ++$i) {
					$roomuid = @$val[ $i ];
					if (isset($val[ $i ])) {
						$tmpArray[ ] = array($roomuid, $tariffuid);
					}
				}
			}

			return $tmpArray;
		}

		/**
		 * Generates the overlib rooms list and returns a string for display in the booking form.
		 */
		public function generateRoomsList($roomAndTariffArray)
		{

			$this->available_rooms_for_selected_dates = array();

			$return_output = '<div id="roombuttoncontainer2"><div id="roombutton">';
			if ((int) $this->cfg_returnRoomsLimit > 0 && $this->cfg_booking_form_rooms_list_style == '1') {
				$this->setErrorLog('generateRoomsList:: Limiting rooms list ');
				$roomAndTariffArray = $this->limitRoomsList($roomAndTariffArray);
			}
			$this->setErrorLog('generateRoomsList::Generating rooms list');

			$tariff_headers_array = $this->makeTariffHeaders();
			if ($this->checkArrivalDate($this->arrivalDate)) {
				if (!empty($roomAndTariffArray)) {
					// Now we're going to rejig ths roomandtariffarray so that it's ordered by the tariff uid, not the room uid
					/////
					$tmpArr = array();
					foreach ($roomAndTariffArray as $element) {
						$room_uid = $element[ 0 ];
						$this->available_rooms_for_selected_dates[] = $room_uid;
						$tariff_uid = $element[ 1 ];
						$tmpArr[ $tariff_uid.'_'.$room_uid ] = array($tariff_uid, $room_uid);
					}
					sort($tmpArr);
					$roomAndTariffArray = array();
					foreach ($tmpArr as $element) {
						$room_uid = $element[ 1 ];
						$tariff_uid = $element[ 0 ];
						$roomAndTariffArray[ ] = array($room_uid, $tariff_uid);
					}
					//////
					$roomDeets = array();
					$roomUidArray = array();
					$tariffUidArray = array();
					$number = count($roomAndTariffArray);
					for ($i = 0; $i < $number; ++$i) {
						$roomuid = $roomAndTariffArray[ $i ][ 0 ];
						//$this->setErrorLog("generateRoomsList::Room uid".$roomuid);
						$tariffuid = $roomAndTariffArray[ $i ][ 1 ];
						$result = $this->makeRoomTariffDetails($roomuid, $tariffuid);

						if ($this->cfg_singleRoomProperty == '0') {
							$roomTariffOutputId = $result[ 'requestedRoom' ];
							$roomTariffOutputText = $result[ 'roomandtariffinfo' ];
							$roomUidArray[ ] = $roomuid;
							$tariffUidArray[ ] = $tariffuid;
							if ($this->cfg_booking_form_rooms_list_style == '1') {
								$roomDeets[ ] = $this->makeRoomOverlibdata($roomuid, $tariffuid, $roomTariffOutputId, $roomTariffOutputText);
							}
							if ($this->cfg_booking_form_rooms_list_style == '2') {
								$this->makeRoomOverlibdata($roomuid, $tariffuid, $roomTariffOutputId, $roomTariffOutputText);
							}
						} else {
							$return_output = jr_gettext('_JOMRES_SRP_WEHAVEVACANCIES', '_JOMRES_SRP_WEHAVEVACANCIES', false, false).'<font color="white">~</font><div id="availRooms" class="roomslist"></div>';
							$this->addToSelectedRooms($result[ 'requestedRoom' ]);
						}
					}
					if ($this->cfg_singleRoomProperty == '0') {
						// Now we can make our template's output

						$pageoutput = array();
						$output = $tariff_headers_array;

						$pageoutput[ ] = $output;
						$tmpl = new patTemplate();
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
						$tmpl->addRows('pageoutput', $pageoutput);
						$tmpl->addRows('rows', $roomDeets);
						$tmpl->readTemplatesFromInput('booking_form_classic_roomslist.html');
						$template_output = $tmpl->getParsedTemplate();
						$return_output .= $template_output.'</div></div>';
					}
				} else {
					$this->setErrorLog('<b>generateRoomsList:: roomAndTariffArray is empty: </b>');
					if ($this->cfg_singleRoomProperty == '0') {
						if (empty($roomAndTariffArray) && empty($this->requestedRoom)) {
							$highlight = "alert alert-danger";
							if (!using_bootstrap()) {
								$highlight = "ui-state-highlight";
							}
							$return_output = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', false).'</div>';
						} else {
							$return_output = '';
						}
					} else {
						$return_output = '<div>'.jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES', '_JOMRES_SRP_WEHAVENOVACANCIES', false, false).'<font color="white">~</font><div></div id="availRooms" class="ui-state-error"></div>';
					}
				}
			}
			$this->setErrorLog('generateRoomsList::Returning rooms list');

			return $return_output;
		}

		/**
		 *
		 *
		 *
		 */

		public function generate_room_type_dropdowns()
		{
			$MiniComponents = jomres_getSingleton('mcHandler');

			$dropdown_output = array();

			// We need to strip out rooms from the available arrays if they've already
			// been selected in conjunction with another tariff
			if (isset($this->room_type_style_output)) {
				if (!empty($this->requestedRoom)) {
					// Parse each of the already selected rooms
					foreach ($this->requestedRoom as $rm) {
						$room = explode('^', $rm);
						$already_selected_tariff_id = $room[ 1 ];
						$already_selected_room_id = $room[ 0 ];
						// For each of the collected tariffs, let's go thru every roomTariffOutputId
						foreach ($this->room_type_style_output as $tariff_id => $tariff_and_roomtypes) {
							// If we're not in the collected tariffs set that are the part of the already selected set
							if ($tariff_id != $already_selected_tariff_id) {
								$current_room_count = count($tariff_and_roomtypes[ 'roomTariffOutputId' ]);
								// Loop thru tariff_and_roomtypes['roomTariffOutputId'] and strip out all rooms that have the same
								// id as already_selected_room_id
								foreach ($tariff_and_roomtypes[ 'roomTariffOutputId' ] as $key => $roomTariffOutputId) {
									$collected_room_data = explode('^', $roomTariffOutputId);
									$this_room_id = $collected_room_data[ 0 ];
									if ($this_room_id == $already_selected_room_id) {
										unset($this->room_type_style_output[ $tariff_id ][ 'roomTariffOutputId' ][ $key ]);
									}
								}
							}
						}
					}
				}

				//Fix any broken indecies
				foreach ($this->room_type_style_output as $tariff_id => $tariff_and_roomtypes) {
					$a_new_array = array();
					foreach ($this->room_type_style_output[ $tariff_id ][ 'roomTariffOutputId' ] as $roomTariffOutputId) {
						$a_new_array[ ] = $roomTariffOutputId;
					}
					$this->room_type_style_output[ $tariff_id ][ 'roomTariffOutputId' ] = $a_new_array;
				}

				ksort($this->room_type_style_output);

				foreach ($this->room_type_style_output as $tariff_id => $tariff_and_roomtypes) {
					$number_of_rooms = count($tariff_and_roomtypes[ 'roomTariffOutputId' ]);

					// This allows us to set the newly generated dropdown to the chosen number (1, 2, 3 etc)
					$already_selected_string = '';
					foreach ($this->requestedRoom as $rm) {
						$room = explode('^', $rm);
						$already_selected_tariff_id = $room[ 1 ];
						if ($already_selected_tariff_id == $tariff_id) {
							$already_selected_string .= $rm.',';
						}
					}

					//$this->setPopupMessage("room_type_style_output ".$tariff_id." ".serialize($already_selected_array));
					$room_and_tariff_outputIds_string = '';
					$rooms_list_style_dropdown = array();
					$rooms_list_style_dropdown[ ] = jomresHTML::makeOption('0^'.$tariff_id, sprintf('%02d', 0));
					for ($i = 1; $i <= $number_of_rooms; ++$i) {
						$room_and_tariff_outputIds_string .= $tariff_and_roomtypes[ 'roomTariffOutputId' ][ $i - 1 ].',';
						$rooms_list_style_dropdown[ ] = jomresHTML::makeOption($room_and_tariff_outputIds_string, sprintf('%02d', $i));
					}
					$dropdown_output[ $tariff_id ][ 'dropdown' ] = jomresHTML::selectList($rooms_list_style_dropdown, 'fred', 'class="input-medium form-control form-select" size="1"  autocomplete="off" onchange="getResponse_multiroom_select(\'multiroom_select\',this.value);"', 'value', 'text', $already_selected_string);
					$dropdown_output[ $tariff_id ][ 'room_type' ] = $tariff_and_roomtypes[ 'room_type' ];
					$dropdown_output[ $tariff_id ][ 'tariff_title' ] = $tariff_and_roomtypes[ 'tariff_title' ];
					$dropdown_output[ $tariff_id ][ 'room_type_images' ] = $tariff_and_roomtypes[ 'room_type_images' ];

					$dropdown_output[ $tariff_id ][ 'room_price_inc_tax' ] = output_price($tariff_and_roomtypes[ 'room_price_inc_tax' ]);

					if ($this->cfg_bookingform_roomlist_showmaxpeople == '1') {
						$dropdown_output[ $tariff_id ][ 'max_guests_per_room' ] = $tariff_and_roomtypes[ 'max_guests_per_room' ];
					}

					$dropdown_output[ $tariff_id ][ 'max_guests_per_booking' ] = $tariff_and_roomtypes[ 'max_guests_per_booking' ];
					$dropdown_output[ $tariff_id ][ 'number_of_rooms' ] = $number_of_rooms;
				}
			}

			$nor = jr_gettext('_JOMRES_NUMBER_OF_ROOMS', '_JOMRES_NUMBER_OF_ROOMS', false, false);
			$gpr_text = jr_gettext('_JOMRES_MAX_GUESTS_PER_ROOM', '_JOMRES_MAX_GUESTS_PER_ROOM', false, false);
			$rmtype_text = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', false, false);
			$tariffname_text = jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE', '_JOMRES_FRONT_TARIFFS_TITLE', false, false);

			if ($this->cfg_tariffChargesStoredWeeklyYesNo != '1') {
				if ($this->mrConfig[ 'wholeday_booking' ] == '1') {
					$rate_text = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', false, false));
				} else {
					$rate_text = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false, false));
				}
			} else {
				$rate_text = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', false, false));
			}

			$gpb_text = '';
			if ($this->cfg_bookingform_roomlist_showmaxpeople == '1') {
				$gpb_text = jr_gettext('_JOMRES_MAX_GUESTS_PER_BOOKING', '_JOMRES_MAX_GUESTS_PER_BOOKING', false, false);
			}

			// New for 6.6.6
			$pageoutput = array();
			$output = array();

			$output[ 'HGUESTPER_ROOM' ] = $gpr_text;
			$output[ 'HGUESTPER_BOOKING' ] = $gpb_text;
			$output[ 'HNUMBEROFROOMS' ] = $nor;
			$output[ 'HROOM_TYPE_TEXT' ] = $rmtype_text;
			$output[ 'HTARIFF_NAME_TEXT' ] = $tariffname_text;
			$output[ 'HRATE_TEXT' ] = $rate_text;

			$rows = array();
			foreach ($dropdown_output as $routput) {
				$r = array();
				$r[ 'GUESTPER_ROOM' ] = $routput[ 'max_guests_per_room' ];
				$r[ 'GUESTPER_BOOKING' ] = $routput[ 'max_guests_per_booking' ];
				$r[ 'NUMBEROFROOMS' ] = $routput[ 'dropdown' ];
				$r[ 'ROOM_TYPE_TEXT' ] = $routput[ 'room_type' ];
				$r[ 'TARIFF_NAME_TEXT' ] = $routput[ 'tariff_title' ];

				$r[ 'ROOM_TYPE_IMAGE' ] = $routput[ 'room_type_images' ][0]['large']; // Have to choose large here because thumbnails for admin uploaded room types may not exist

				$r[ 'RATE_TEXT' ] = $routput[ 'room_price_inc_tax' ];
				if ($routput[ 'number_of_rooms' ]<4) {
					$r[ 'NUMBER_OF_ROOMS' ] = $routput[ 'number_of_rooms' ];
					$r[ 'NUMBER_OF_ROOMS_PRE' ] = jr_gettext('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', false, false);
					$r[ 'NUMBER_OF_ROOMS_POST' ] = jr_gettext('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', false, false);
				} else {
					$r[ 'NUMBER_OF_ROOMS' ] = "";
					$r[ 'NUMBER_OF_ROOMS_PRE' ] = "";
					$r[ 'NUMBER_OF_ROOMS_POST' ] = "";
				}

				$rows[ ] = $r;
			}

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$tmpl->readTemplatesFromInput('booking_form_roomtype_roomslist.html');

			return $tmpl->getParsedTemplate();

			//return $return_output;
		}

		/**
		 * Find out if this tariff has already been selected.
		 */
		public function isAlreadyASelectedOption($roomTariffOutputId)
		{
			if (!empty($this->requestedRoom)) {
				$currentUidsArray = explode(',', $this->requestedRoom);
				foreach ($currentUidsArray as $room_tariff) {
					if ($roomTariffOutputId == $room_tariff) {
						return true;
					}
				}

				return false;
			} else {
				return false;
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Making the room and tariff output

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Receives the room and tariff uid. Constructs the room and tariff output depending on configuration settings.
		 */
		public function makeRoomTariffDetails($roomuid, $tariffuid)
		{
			$this->roomImagePath = $this->allPropertyRooms [ $roomuid ] [ 'small_room_image' ];
			$roomTariffOutputId = $roomuid.'^'.$tariffuid;
			$roomTariffOutputText = '';

			return array('requestedRoom' => $roomTariffOutputId, 'roomandtariffinfo' => $roomTariffOutputText);
		}

		/**
		 * Make the overlib data for the room & tariff. Returns a string.
		 */
		public function makeRoomOverlibdata($roomUid, $tariffUid, $roomTariffOutputId, $roomTariffOutputText, $removing = false)
		{
			$mrConfig = $this->mrConfig;

			$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
			$basic_room_details->get_all_rooms($this->property_uid);

			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images($this->property_uid, array('room_features'));

			if ($this->cfg_booking_form_rooms_list_style == '2') {
				if (!isset($this->rooms_list_style_roomstariffs)) {
					$this->rooms_list_style_roomstariffs = array();
					$this->rooms_list_style_roomstariffs_constructed_data = array();
					$this->room_type_style_output = array();
				}
			}

			$tariffStuff = $this->GetTariffDetails($tariffUid);
			$roomStuff = $this->GetRoomDetails($roomUid);
			if (!$removing) {
				$roomStuff[ 'ICON' ] = 'icon-plus-2';
				$roomStuff[ 'BUTTON_CLASS' ] = 'btn-success';
				$caption = sanitiseOverlibOutput(jr_gettext('_JOMRES_AJAXFORM_CLICKHERECAPTION', '_JOMRES_AJAXFORM_CLICKHERECAPTION', false, false));
			} else {
				$roomStuff[ 'ICON' ] = 'icon-minus-2';
				$roomStuff[ 'BUTTON_CLASS' ] = 'btn-danger';
				$caption = sanitiseOverlibOutput(jr_gettext('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', false, false));
			}

			if ($this->tariffModel == '2' && ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig['tariffmode'] == '5')) {
				$tariffStuff[ 'RATEPERNIGHT' ] = $this->estimate_AverageRate($roomUid, $tariffUid);
			}

			$room_price_inc_tax = $this->calculateRoomPriceIncVat($tariffStuff[ 'RATEPERNIGHT' ]);
			$this->room_type_style_output[ $tariffUid ][ 'room_price_inc_tax' ] = $room_price_inc_tax;

			$tariffStuff[ 'FORMATTED_PRICE' ] = output_price($this->get_rate_per_night_converted_to_output_period($room_price_inc_tax));
			$tariffStuff[ 'ROOMTARIFFOUTPUTID' ] = $roomTariffOutputId;
			$tariffStuff[ 'CAPTION' ] = $caption;

			$roomStuff[ 'ROOM_IMAGE' ] = $this->allPropertyRooms [ $roomUid ] [ 'small_room_image' ];
			$roomStuff[ 'ROOM_IMAGE_MEDIUM' ] = $this->allPropertyRooms [ $roomUid ] [ 'medium_room_image' ];
			$roomStuff[ 'ROOM_IMAGE_LARGE' ] = $this->allPropertyRooms [ $roomUid ] [ 'large_room_image' ];

			$roomStuff[ 'TAGLINE' ] = $this->allPropertyRooms [ $roomUid ] [ 'tagline' ];
			$roomStuff[ 'DESCRIPTION' ] = $this->allPropertyRooms [ $roomUid ] [ 'description' ];

			$roomStuff[ 'ROOM_TYPE_IMAGE' ] = $this->allRoomClasses[ $tariffStuff[ 'TARIFF_ROOMTYPE' ] ]['images'][0]['large'];

			$roomStuff[ 'SURCHARGE' ] = '';
			$roomStuff[ 'SURCHARGE_TEXT' ] = '';
			$sc = $this->allPropertyRooms [ $roomUid ] ['surcharge'];
			if ((float) $sc > 0) {
				$roomStuff[ 'SURCHARGE' ] =  output_price($sc);
				$roomStuff[ 'SURCHARGE_TEXT' ] = jr_gettext('_JOMRES_SURCHARGE_TITLE', '_JOMRES_SURCHARGE_TITLE', false);
			}

			if ($this->cfg_booking_form_rooms_list_style == '2') {
				$this->rooms_list_style_roomstariffs[ $tariffUid ] = array('room_type_id' => $tariffStuff[ 'TARIFF_ROOMTYPE' ], 'room_id' => $roomUid, 'tariff_id' => $tariffUid, 'roomTariffOutputId' => $roomTariffOutputId, 'tariffStuff' => $tariffStuff, 'roomStuff' => $roomStuff);

				foreach ($this->allRoomClasses as $room_type_id => $room_type) {
					foreach ($this->rooms_list_style_roomstariffs as $tariff_id => $room_and_tariff_data) {
						if ($room_and_tariff_data[ 'room_type_id' ] == $room_type_id) {
							$room_type_id = $room_and_tariff_data[ 'tariffStuff' ]['TARIFF_ROOMTYPE'];

							$this->room_type_style_output[ $tariff_id ][ 'room_type_images' ] = $this->allRoomClasses[$room_type_id]['images'];

							$this->room_type_style_output[ $tariff_id ][ 'tariff_title' ] = $room_and_tariff_data[ 'tariffStuff' ][ 'TITLE' ];
							$this->room_type_style_output[ $tariff_id ][ 'room_type' ] = $room_and_tariff_data[ 'roomStuff' ][ 'ROOMTYPE' ];
							$this->room_type_style_output[ $tariff_id ][ 'roomTariffOutputId' ][ ] = $room_and_tariff_data[ 'roomTariffOutputId' ];
							$this->room_type_style_output[ $tariff_id ][ 'roomTariffOutputId' ] = array_unique($this->room_type_style_output[ $tariff_id ][ 'roomTariffOutputId' ]);
							$this->room_type_style_output[ $tariff_id ][ 'max_guests_per_room' ] = $room_and_tariff_data[ 'roomStuff' ][ 'MAXPEOPLE_INROOM' ];
							$this->room_type_style_output[ $tariff_id ][ 'max_guests_per_booking' ] = $room_and_tariff_data[ 'tariffStuff' ][ 'MAXPEOPLE' ];
						}
					}
				}
			}

			if (using_bootstrap() && jomres_bootstrap_version() == '3') {
				$endrun_javascript_for_eval_by_handlereq = get_showtime('endrun_javascript_for_eval_by_handlereq');
				$endrun_javascript_for_eval_by_handlereq[$roomUid.'_'.$tariffUid] = ';jomresJquery(document).ready(function(){if (jomresJquery(\'body > #roomdetails'.$roomUid.'_'.$tariffUid.'\').length < 1){jomresJquery(\'#roomdetails'.$roomUid.'_'.$tariffUid.'\').appendTo("body");}else{jomresJquery(\'body > #roomdetails'.$roomUid.'_'.$tariffUid.'\').replaceWith(jomresJquery(\'#roomdetails'.$roomUid.'_'.$tariffUid.'\'));};jomresJquery(\'.jomres_bt_tooltip_features\').tipsy({html: true, fade: true, gravity: \'sw\', delayOut: 100});});';
				set_showtime('endrun_javascript_for_eval_by_handlereq', $endrun_javascript_for_eval_by_handlereq);
			}

			return array_merge($roomStuff, $tariffStuff);
		}

		/**
		 *
		 *
		 *
		 */

		public function calculateRoomPriceIncVat($price)
		{
			if ($this->accommodation_tax_rate > 0) {
				$this->setErrorLog('calculateRoomPriceIncVat::Tax rate detected as '.$this->accommodation_tax_rate);
				$percentageToAdd = $price * ($this->accommodation_tax_rate / 100);
				$price = $price + $percentageToAdd;
			}

			return $price;
		}

		/**
		 * Returns details of a given room according to the passed room id.
		 */
		public function GetRoomDetails($roomUid)
		{
			$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
			$basic_room_details->get_all_rooms($this->property_uid);

			$room = $this->allPropertyRooms[ $roomUid ];

			$room_classes_uid = $room[ 'room_classes_uid' ];
			$room_features_uid = $room[ 'room_features_uid' ];

			$classAbbv = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION'.$room_classes_uid, $this->allRoomClasses[ $room_classes_uid ][ 'room_class_abbv' ], false, false));

			$roomRow = array();
			$roomRow[ 'FEATURES' ] = '';
			$roomRow[ 'FEATURE_DESCRIPTIONS' ] = '';
			$roomFeatureUidsArray = explode(',', $room_features_uid);
			if ($roomFeatureUidsArray) {
				$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
				$jomres_media_centre_images->get_images($this->property_uid, array('room_features'));

				foreach ($roomFeatureUidsArray as $f) {
					if (isset($basic_room_details->all_room_features[ $f ]['tooltip'])) {
						$roomRow[ 'FEATURES' ] .=
							$basic_room_details->all_room_features[ $f ]['tooltip'];
						$roomRow[ 'FEATURE_DESCRIPTIONS' ] .=
							$basic_room_details->all_room_features[ $f ]['feature_description'].", ";
					}
				}
				$fd = $roomRow[ 'FEATURE_DESCRIPTIONS' ];
				$roomRow[ 'FEATURE_DESCRIPTIONS' ] = substr($fd, 0, strlen($fd) - 2);
			} else {
				$roomRow[ 'FEATURES' ] = '';
			}

			$roomRow[ 'HEADER_ROOMNUMBER' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', false, false));
			$roomRow[ 'HEADER_ROOMTYPE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', false, false));
			$roomRow[ 'HEADER_ROOMNAME' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', false, false));
			$roomRow[ 'HEADER_ROOMFLOOR' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', false, false));
			$roomRow[ 'HEADER_MAXPEOPLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', false, false));
			$roomRow[ 'HEADER_FEATURES' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', false, false));
			$roomRow[ 'HTITLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE', '_JOMRES_FRONT_TARIFFS_TITLE', false, false));
			$roomRow[ 'HMOREINFO' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', false, false));

			$roomRow[ 'ROOMUID' ] = $roomUid;
			$roomRow[ 'ROOMNUMBER' ] = $this->sanitiseOutput(stripslashes($room[ 'room_number' ]));
			$roomRow[ 'ROOMTYPE' ] = $classAbbv;
			//$roomRow['ROOMTYPEIMAGE']= $typeImage;
			$roomRow[ 'ROOMNAME' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE'.$roomUid, stripslashes($room[ 'room_name' ]), false, false));
			$roomRow[ 'ROOMFLOOR' ] = $this->sanitiseOutput(stripslashes($room[ 'room_floor' ]));
			$roomRow[ 'MAXPEOPLE_INROOM' ] = $this->sanitiseOutput($room[ 'max_people' ]);

			return $roomRow;
		}

		/**
		 * Returns details of a given tariff according to the passed tariff id.
		 */
		public function GetTariffDetails($tariffUid)
		{
			$mrConfig = $this->mrConfig;
			$tariff = $this->allPropertyTariffs[ $tariffUid ];

			$output[ 'TARIFFUID' ] = $tariffUid;

			$output[ 'HTITLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE', '_JOMRES_FRONT_TARIFFS_TITLE', false, false));
			$output[ 'HDESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_DESC', '_JOMRES_FRONT_TARIFFS_DESC', false, false));
			$output[ 'HSTARTS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS', '_JOMRES_FRONT_TARIFFS_STARTS', false, false));
			$output[ 'HENDS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS', '_JOMRES_FRONT_TARIFFS_ENDS', false, false));
			$output[ 'HMINDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS', '_JOMRES_FRONT_TARIFFS_MINDAYS', false, false));
			$output[ 'HMAXDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS', '_JOMRES_FRONT_TARIFFS_MAXDAYS', false, false));
			$output[ 'HMINPEEPS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS', '_JOMRES_FRONT_TARIFFS_MINPEEPS', false, false));
			$output[ 'HMAXPEEPS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS', '_JOMRES_FRONT_TARIFFS_MAXPEEPS', false, false));

			switch ($this->cfg_booking_form_daily_weekly_monthly) {
				case 'D':
					if ($mrConfig[ 'wholeday_booking' ] == '1') {
						$output[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', false, false));
					} else {
						if ($tariff[ 'ignore_pppn' ] || $this->cfg_perPersonPerNight == '0') {
							$output[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN', '_JOMRES_FRONT_TARIFFS_PN', false, false));
						} else {
							$output[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN', '_JOMRES_FRONT_TARIFFS_PPPN', false, false));
						}
					}
					break;
				case 'W':
					$output[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', false, false));
					break;
				case 'M':
					$output[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', false, false));
					break;
			}

			$output[ 'HROOM_DETAILS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_HROOM_DETAILS', '_JOMRES_COM_MR_EB_HROOM_DETAILS', false, false));
			$output[ 'HTARIFF_DETAILS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', false, false));

			if ($this->cfg_tariffmode == '2') {
				$query = 'SELECT tarifftype_id FROM #__jomcomp_tarifftype_rate_xref WHERE tariff_id = '.(int) $tariffUid;
				$tarifftypeid = doSelectSql($query, 1);
				$output[ 'TITLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID'.$tarifftypeid, stripslashes($tariff[ 'rate_title' ]), false, false));
				$output[ 'DESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFDESC'.$tarifftypeid, stripslashes($tariff[ 'rate_description' ]), false, false));
			} else {
				$output[ 'TITLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE'.$tariffUid, stripslashes($tariff[ 'rate_title' ]), false, false));
				$output[ 'DESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFDESC'.$tariffUid, stripslashes($tariff[ 'rate_description' ]), false, false));
			}
			$output[ 'VALIDFROM' ] = $this->outputDate($tariff[ 'validfrom' ]);
			$output[ 'VALIDTO' ] = $this->outputDate($tariff[ 'validto' ]);
			$output[ 'MINDAYS' ] = $this->sanitiseOutput($tariff[ 'mindays' ]);
			$output[ 'MAXDAYS' ] = $this->sanitiseOutput($tariff[ 'maxdays' ]);
			$output[ 'MINPEOPLE' ] = $this->sanitiseOutput($tariff[ 'minpeople' ]);
			$output[ 'MAXPEOPLE' ] = $this->sanitiseOutput($tariff[ 'maxpeople' ]);
			$output[ 'RATEPERNIGHT' ] = $this->sanitiseOutput($tariff[ 'roomrateperday' ]);

			$output[ 'TARIFF_ROOMTYPE' ] = $tariff[ 'roomclass_uid' ];

			if (empty($this->cfg_ratemultiplier)) {
				$this->cfg_ratemultiplier = 1;
			} else {
				$this->cfg_ratemultiplier += 0;
			}

			if ($mrConfig[ 'wholeday_booking' ] == '1') {
				if ($tariff[ 'ignore_pppn' ] || $this->cfg_perPersonPerNight == '0') {
					$output[ 'ROOMRATEPERDAY' ] = output_price(($this->cfg_ratemultiplier * $tariff[ 'roomrateperday' ])).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', false, false));
				} else {
					$output[ 'ROOMRATEPERDAY' ] = output_price(($this->cfg_ratemultiplier * $tariff[ 'roomrateperday' ])).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', false, false));
				}
			} else {
				if ($tariff[ 'ignore_pppn' ] || $this->cfg_perPersonPerNight == '0') {
					$output[ 'ROOMRATEPERDAY' ] = output_price(($this->cfg_ratemultiplier * $tariff[ 'roomrateperday' ])).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN', '_JOMRES_FRONT_TARIFFS_PN', false, false));
				} else {
					$output[ 'ROOMRATEPERDAY' ] = output_price(($this->cfg_ratemultiplier * $tariff[ 'roomrateperday' ])).' '.$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN', '_JOMRES_FRONT_TARIFFS_PPPN', false, false));
				}
			}

			if ($tariff[ 'allow_we' ] == '0') {
				$output[ 'NOTWEEKENDS' ] = jr_gettext('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', false, false);
			}

			return $output;
		}

		/**
		 * We will estimate the averate rate over the booking period using this modified and cut down version of the average calculation function.
		 */
		public function estimate_AverageRate($roomUid, $tariffUid)
		{
			//$this->setErrorLog("estimate_AverageRate:: Started");
			$dateRangeArray = explode(',', $this->dateRangeString);
			$numberOfGuestTypes = $this->getVariantsOfType('guesttype');
			$total = 0.00;
			$stayDays = $this->stayDays;

			$datesTilBooking = $this->findDateRangeForDates($this->today, $this->arrivalDate);

			$tariff_type_id = (int) $this->all_tariff_id_to_tariff_type_xref[$tariffUid][0];

			if ($tariff_type_id > 0) { // Micromanage mode tariffs
				if (!isset($this->micromanage_tarifftype_to_date_map)) {
					$this->build_tariff_to_date_map();
				}

				$dates = $this->micromanage_tarifftype_to_date_map[ $tariff_type_id ];

				$cumulative_price = 0.00;
				$num_dates = count($dateRangeArray);
				for ($i = 0; $i < $num_dates; ++$i) {
					$date = $dateRangeArray[$i];
					$cumulative_price += $dates[$date][ 'price' ];
				}

				$total = $cumulative_price;
			} else {
				$dateRangeArray = explode(',', $this->dateRangeString);
				$rclass = $this->allPropertyRooms[ $roomUid ][ 'room_classes_uid' ];
				$rateList = $this->getTariffsForRoomClass($rclass);

				foreach ($rateList as $rate) {
					$unixValidFromDate = $this->getMkTime($rate->validfrom);
					$unixValidToDate = $this->getMkTime($rate->validto);

					foreach ($dateRangeArray as $date) {
						$pass = false;
						$unixDay = $this->getMkTime($date);
						if (!empty($numberOfGuestTypes)) {
							if ($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays && $stayDays <= $rate->maxdays) && ($this->total_in_party >= $rate->minpeople && $this->total_in_party <= $rate->maxpeople)) {
								$pass = true;
							}
						} else {
							if ($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays && $stayDays <= $rate->maxdays)) {
								$pass = true;
							}
						}
						if ($pass) {
							$total += $rate->roomrateperday;
						}
					}
				}
			}

			$rpn = ($total) / $stayDays;
			if ($this->cfg_tariffChargesStoredWeeklyYesNo == '1' && empty($tarifftypeids)) {
				$rpn = $rpn / 7;
			}

			// Removed in 9.1.2 ( July 2015 )
			//$rpn = $this->get_rate_per_night_converted_to_output_period( $rpn );

			return $rpn;
		}

		/**
		 *
		 *
		 *
		 */

		public function makeTariffHeaders()
		{
			$mrConfig = $this->mrConfig;
			$return_output = '';
			if ($this->cfg_singleRoomProperty == '1') {
				return $return_output;
			}

			$tariffStuff[ 'HTITLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE', '_JOMRES_FRONT_TARIFFS_TITLE', false, false));
			$tariffStuff[ 'HDESC' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_DESC', '_JOMRES_FRONT_TARIFFS_DESC', false, false));
			$tariffStuff[ 'HSTARTS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS', '_JOMRES_FRONT_TARIFFS_STARTS', false, false));
			$tariffStuff[ 'HENDS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS', '_JOMRES_FRONT_TARIFFS_ENDS', false, false));
			$tariffStuff[ 'HMINDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS', '_JOMRES_FRONT_TARIFFS_MINDAYS', false, false));
			$tariffStuff[ 'HMAXDAYS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS', '_JOMRES_FRONT_TARIFFS_MAXDAYS', false, false));
			$tariffStuff[ 'HMINPEEPS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS', '_JOMRES_FRONT_TARIFFS_MINPEEPS', false, false));
			$tariffStuff[ 'HMAXPEEPS' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS', '_JOMRES_FRONT_TARIFFS_MAXPEEPS', false, false));
			if ($this->cfg_tariffChargesStoredWeeklyYesNo != '1') {
				if ($mrConfig[ 'wholeday_booking' ] == '1') {
					$tariffStuff[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', false, false));
				} else {
					$tariffStuff[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false, false));
				}
			} else {
				$tariffStuff[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', false, false));
			}

			$tariffStuff[ 'HRESOURCE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', false, false));
			$tariffStuff[ 'HBOOKNOW' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', false, false));

			switch ($this->cfg_booking_form_daily_weekly_monthly) {
				case 'D':
					if ($mrConfig[ 'wholeday_booking' ] == '1') {
						$tariffStuff[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', false, false));
					} else {
						$tariffStuff[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', false, false));
					}
					break;
				case 'W':
					$tariffStuff[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', false, false));
					break;
				case 'M':
					$tariffStuff[ 'HRATEPERNIGHT' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', false, false));
					break;
			}

			$roomRow[ 'HEADER_ROOMNUMBER' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', false, false));
			$roomRow[ 'HEADER_ROOMTYPE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', false, false));
			$roomRow[ 'HEADER_ROOMNAME' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', false, false));
			$roomRow[ 'HEADER_ROOMFLOOR' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', false, false));
			$roomRow[ 'HEADER_MAXPEOPLE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', false, false));
			$roomRow[ 'HEADER_FEATURES' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', false, false));

			// New for 6.6.6
			$roomRow[ 'HEADER_IMAGE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', false, false));
			$roomRow[ 'HEADER_ROOMTYPE' ] = $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', false, false));

			return array_merge($roomRow, $tariffStuff);
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Booking status monitoring

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Called in phase 3 of the ajax queries.
		 * Checks the state of the booking. If any of the checks fail the method setMonitoring is passed a message.
		 * If, at the end, the monitoringMessages array is empty then we know that it has passed all the tests and the booking is ready for confirmation. At that stage the ok_to_book flag is set to true.
		 */
		public function monitorBookingStatus()
		{
			$mrConfig = $this->mrConfig;
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');

			$this->setMonitoring = array();
			// Let's see if the form is ready to be booked.

			if (!empty($this->requestedRoom) && $this->email != '') {
				$this->email_usage_check($this->email);
				if (!$this->email_address_can_be_used) {
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', false, false)));
				}
			}

			if (get_showtime('include_room_booking_functionality')) {
				if ($this->mininterval == 1000) { // Probably a tariff wasn't found
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES', '_JOMRES_SRP_WEHAVENOVACANCIES', false, false)));
					$this->resetPricingOutput = true;
				}

				if ($this->stayDays < $this->mininterval && !$amend_contract && $this->mininterval < 1000 && empty($this->requestedRoom)) {
					$this->resetPricingOutput = true;
					if ($mrConfig[ 'wholeday_booking' ] == '1') {
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', false, false)).' '.$this->mininterval.' '.$this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', false).' '.($this->stayDays - 1)));
					} else {
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', false, false)).' '.$this->mininterval.' '.$this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', false).' '.$this->stayDays));
					}

					if ($this->jrConfig[ 'useJomresMessaging' ] == '1') {
						$this->build_tariff_to_date_map();
						if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {
							foreach ($this->micromanage_tarifftype_to_date_map as $dates) {
								$prices = array();
								foreach ($dates as $date) {
									$prices[ $date[ 'mindays' ] ] = $date[ 'price' ];
								}
								foreach ($prices as $key => $val) {
									if ($val > 0) {
										if ($this->cfg_perPersonPerNight == '1') {
											$pernight = jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN', '_JOMRES_FRONT_TARIFFS_PPPN', false);
										} else {
											$pernight = jr_gettext('_JOMRES_FRONT_TARIFFS_PN', '_JOMRES_FRONT_TARIFFS_PN', false);
										}
										//echo ';jomresJquery.jGrowl(\'' . jr_gettext( '_JOMRES_STAYFORAMINIMUMOF', _JOMRES_STAYFORAMINIMUMOF, false ) . " " . $key . " " . jr_gettext( '_JOMRES_NIGHTSFOR', _JOMRES_NIGHTSFOR, false ) . " " . output_price( $val ) . $pernight . '\', { life: 20000 });';
									}
								}
							}
						}

						if ($mrConfig[ 'tariffmode' ] == '1') {
							foreach ($this->simple_tariff_to_date_map as $tariff) {
								if ($this->cfg_perPersonPerNight == '1') {
									$pernight = jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN', '_JOMRES_FRONT_TARIFFS_PPPN', false);
								} else {
									$pernight = jr_gettext('_JOMRES_FRONT_TARIFFS_PN', '_JOMRES_FRONT_TARIFFS_PN', false);
								}
								//echo ';jomresJquery.jGrowl(\'' . jr_gettext( '_JOMRES_STAYFORAMINIMUMOF', _JOMRES_STAYFORAMINIMUMOF, false ) . " " . $tariff[ 'mindays' ] . " " . jr_gettext( '_JOMRES_NIGHTSFOR', _JOMRES_NIGHTSFOR, false ) . " " . output_price( $tariff[ 'price' ] ) . " " . $pernight . '\', { life: 20000 });';
							}
						}
					}
				}

				if (empty($this->requestedRoom) && $this->getSingleRoomPropertyStatus()) {
					$this->resetPricingOutput = true;
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES', '_JOMRES_SRP_WEHAVENOVACANCIES', false, false)));
				}

				if (isset($this->number_of_free_rooms)) { // $this->number_of_free_rooms might not be set, it depends on the "field" sent
					if ($this->number_of_free_rooms == 0 && ($this->currentField == 'arrivalDate' || $this->currentField == 'departureDate' || $this->currentField == 'guesttype')) {
						$this->resetPricingOutput = true;
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES', '_JOMRES_SRP_WEHAVENOVACANCIES', false, false)));
					}
				}

				if (!$this->checkArrivalDate($this->arrivalDate)) {
					$this->resetPricingOutput = true;
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', false, false)));
				}

				// if (!$this->checkDepartureDate($this->departureDate) )
				// {
				// $this->resetPricingOutput=true;
				// if ($mrConfig['wholeday_booking'] == "1")
				// $this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY',_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY,false,false)));
				// else
				// $this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID',_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID,false,false)));
				// }

				$numberOfGuestTypes = $this->getVariantsOfType('guesttype');

				$requestedRoom_count = count($this->requestedRoom);

				foreach ($numberOfGuestTypes as $r) {
					if (!$this->checkGuestVariantIdAndQty($r[ 'id' ], $r[ 'qty' ])) {
						$this->resetPricingOutput = true;
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', false, false)));
					}
				}
				if ($this->total_in_party < 1 && !empty($numberOfGuestTypes)) {
					$this->resetPricingOutput = true;
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', false, false)));
				}
				if (!empty($numberOfGuestTypes) && !$this->tariffsCanHostTotalInParty()) {
					$this->resetPricingOutput = true;
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', false, false)));
				}
				if ($this->total_in_party < $requestedRoom_count && !empty($numberOfGuestTypes)) {
					$this->resetPricingOutput = true;
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', false, false)));
				}
				//if ($this->total_in_party > $this->beds_available && count($result)>0 && count($this->requestedRoom ) > 0)
				if ($this->total_in_party > $this->beds_available && !empty($numberOfGuestTypes)) {
					$this->resetPricingOutput = true;
					if ($this->cfg_singleRoomProperty != '1') {
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', false, false)));
					} else {
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES', '_JOMRES_SRP_WEHAVENOVACANCIES', false, false)));
					}
				}
				if (!empty($numberOfGuestTypes) && $requestedRoom_count > 0 && !$this->selectedRoomsCanHostTotalInParty()) {
					$this->resetPricingOutput = true;
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', false, false)));
				}
				if (empty($this->requestedRoom)) {
					$this->resetPricingOutput = true;
					if ($this->cfg_singleRoomProperty != '1') {
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', false, false)));
					} else {
						$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', false, false)));
					}
				}
			}

			if (!get_showtime('include_room_booking_functionality')) {
				$quantity = 0;
				if (!empty($this->third_party_extras)) {
					foreach ($this->third_party_extras as $tpe) {
						if (!empty($tpe)) {
							$quantity = 1;
						} // We don't care how many extras there are, so long as at least one has been selected.
						//$this->setPopupMessage("jintour ".serialize($this->third_party_extras));
					}
				}
				$extrasArray = explode(',', $this->extras);
				foreach ($extrasArray as $extra) {
					if ($extra != '') {
						$quantity = $quantity + $this->extrasquantities[ $extra ];
					}
					//$this->setPopupMessage($quantity);
				}
				if ($quantity == 0) {
					$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS_SELECT', '_JOMRES_AJAXFORM_EXTRAS_SELECT', false, false)));
				}
			}

			//$this->setPopupMessage('');

			if ($this->getMonitoringNumberOfMessages() == 0) {
				$this->ok_to_book = true;
			}
		}

		/**
		 *
		 *
		 *
		 */

		public function outputZeroPrices()
		{
			if ($this->getGuestVariantCount() > 0) {
				$this->echo_populate_div('; populateDiv("totalinparty","'.$this->getTotalInParty().'")');
			}

			$staydays = $this->getStayDays();
			$num_period = $this->get_part_of_stay_period($staydays);
			$this->echo_populate_div('; populateDiv("staydays","'.$num_period.'")');
			if ($this->cfg_tariffChargesStoredWeeklyYesNo == '0') {
				$this->echo_populate_div('; populateDiv("roompernight","'.output_price('0.00').'")');
			}
			$this->echo_populate_div('; populateDiv("roomtotal","'.output_price('0.00').'")');
			if ($this->cfg_showExtras) {
				$this->echo_populate_div('; populateDiv("extrastotal","'.output_price('0.00').'")');
			}
			if ($this->jrConfig[ 'show_tax_in_totals_summary' ] == '1') {
				$this->echo_populate_div('; populateDiv("taxtotal","'.output_price('0.00').'")');
			}
			if ($this->cfg_singlePersonSuppliment == '1') {
				$this->echo_populate_div('; populateDiv("single_suppliment","'.output_price('0.00').'")');
			}
			$this->echo_populate_div('; populateDiv("grandtotal","'.output_price('0.00').'")');
			if ($this->cfg_showDeposit == '1') {
				$this->echo_populate_div('; populateDiv("deposit","'.output_price('0.00').'")');
			}
			$this->echo_populate_div('; populateDiv("discount","")');
			$this->echo_populate_div('; populateDiv("coupon_discount_value","")');
		}

		/**
		 * Sets the ok_to_book flag. Default is false.
		 */
		public function setOkToBook($val = false)
		{
			$this->ok_to_book = $val;
		}

		/**
		 * Returns the value of the ok_to_book flag. Used by the handlereq script.
		 */
		public function getOkToBook()
		{
			return $this->ok_to_book;
		}

		/**
		 * Inserts the message into the monitoringMessages array.
		 */
		public function setMonitoring($message)
		{
			if (!isset($message) || empty($message)) {
				$message = 'Empty message!';
			}
			$this->setErrorLog('setMonitoring::Monitoring message '.$message);
			$this->monitoringMessages[ ] = $message;
		}

		/**
		 * Returns the number of messages in the monitoringMessages array.
		 */
		public function getMonitoringNumberOfMessages()
		{
			return count($this->monitoringMessages);
		}

		/**
		 * Get the first message in the monitoringMessages array. This is the first test that the monitoring method failed the booking on.
		 */
		public function monitorGetFirstMessage()
		{
			return $this->monitoringMessages[ 0 ];
		}

		/**
		 * Return all the messages as a string.
		 */
		public function monitorGetAllMessages()
		{
			if (!empty($this->monitoringMessages)) {
				$messageString = '';
				foreach ($this->monitoringMessages as $message) {
					$messageString .= htmlentities($message).'<br/>';
				}

				return $this->error;
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// Other monitoring functions
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Check that the selected rooms can accomodate the total in the party.
		 */
		public function selectedRoomsCanHostTotalInParty()
		{
			$roomTotalBeds = 0;
			foreach ($this->requestedRoom as $rm) {
				$room = explode('^', $rm);
				$rmuid = $room[ 0 ];
				$query = "SELECT  max_people FROM #__jomres_rooms WHERE room_uid = '$rmuid'";
				$max = doSelectSql($query, 1);
				$roomTotalBeds += $max;
			}
			if ($roomTotalBeds < $this->total_in_party) {
				return false;
			} else {
				return true;
			}
		}

		/**
		 * Check that the selected tariff can accomodate the total in the party.
		 */
		public function tariffsCanHostTotalInParty()
		{
			$query = "SELECT maxpeople FROM #__jomres_rates WHERE property_uid = '$this->property_uid' ORDER by maxpeople desc LIMIT 1";
			$max = doSelectSql($query, 1);
			if ($max < $this->total_in_party) {
				return false;
			} else {
				return true;
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//	Billing

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/**
		 * Set the variant values, Returns true or false.
		 */
		public function setVariantValues()
		{
			if (!get_showtime('include_room_booking_functionality')) {
				return true;
			}

			if ($this->setGuestTypeVariantValues()) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 * Calculate how much to charge per person
		 * Find the value of the selected guest types, as a variation of the basic room per night of all the selected rooms
		 * Eg. you have two rooms, one and $20 and one at $40, the basic value of the rooms is $30 per night.
		 * The guest values are calculated as a 'variation' from the basic room value.
		 * Whilst this calculation is done every time, the decision as to whether or not to apply this variation is made elsewhere.
		 */
		public function setGuestTypeVariantValues()
		{
			$result = $this->getVariantsOfType('guesttype');
			$this->setErrorLog('setGuestTypeVariantValues::Found variants of guesttype: '.count($result));
			$mrConfig = $this->mrConfig;
			if (!empty($result)) {
				$ratePerNight = $this->rate_pernight;
				$ratePerNight_nodiscount = $this->rate_pernight_nodiscount;

				$this->setErrorLog('setGuestTypeVariantValues::Setting variant values');
				foreach ($result as $r) {
					$id = $r[ 'id' ];
					$qty = $r[ 'qty' ];
					$query = "SELECT `is_percentage`,`posneg`,`variance` FROM `#__jomres_customertypes` where id = '$id' ";
					$gt = doSelectSql($query, 2);
					if ($gt) {
						$variance = $gt[ 'variance' ];
						settype($variance, 'float');
						if ($gt[ 'is_percentage' ] == '0') {
							$rate = $this->accommodation_tax_rate;
							if ($mrConfig[ 'prices_inclusive' ] == 1) {
								$divisor = ($rate / 100) + 1;
								$variance = $variance / $divisor;
							}

							if ($gt[ 'posneg' ] == '1') {
								$val = $ratePerNight + $variance;
								$val_nodiscount = $ratePerNight_nodiscount + $variance;
							} else {
								$val = $ratePerNight - $variance;
								$val_nodiscount = $ratePerNight_nodiscount - $variance;
							}
						} else {
							if ($gt[ 'posneg' ] == '1') {
								$val = (($ratePerNight / 100) * $variance) + $ratePerNight;
								$val_nodiscount = (($ratePerNight_nodiscount / 100) * $variance) + $ratePerNight_nodiscount;
							} else {
								$val = $ratePerNight - (($ratePerNight / 100) * $variance);
								$val_nodiscount = $ratePerNight_nodiscount - (($ratePerNight_nodiscount / 100) * $variance);
							}
						}
						$this->setErrorLog('setGuestTypeVariantValues::Setting variant value '.$id.' to '.$val);
						$this->setVariant('guesttype', $id, $qty, $val, $val_nodiscount);
					} else {
						return false;
					}
				}
			} else {
				return true;
			}

			return true;
		}

		/**
		 * Calculates the value of the room charges per night
		 * If property is NOT set to charge Per Person Per Night then variances calculated in setGuestTypeVariantValues are ignored
		 * If property is set to charge Per Person Per Night and all tariffs in selection are set to Ignore PPPN then PPPN is ignored
		 * If property is set to charge Per Person Per Night and some tariffs in selection are set to Ignore PPPN then PPPN is calculated across the board because it's not possible to figure out how many people are in each room
		 * Sets $this->room_total to the total value of the rooms per night.
		 *
		 * @see setGuestTypeVariantValues
		 */
		public function makeNightlyRoomCharges()
		{
			$mrConfig = getPropertySpecificSettings($this->property_uid);
			if (!get_showtime('include_room_booking_functionality')) {
				$this->room_total = 0.00;
				$this->room_total_nodiscount = 0.00;

				return true;
			}

			$this->setErrorLog('makeNightlyRoomCharges:: Started');
			$total = 0.00;
			$this->allRoomsAreIgnorePPPN = true;
			foreach ($this->requestedRoom as $r) {
				$rm_idArr = explode('^', $r);
				$tariff_id = $rm_idArr[ 1 ];
				$ignore_pppn = $this->allPropertyTariffs[ $tariff_id ][ 'ignore_pppn' ];
				if ($ignore_pppn == '0') {
					$this->allRoomsAreIgnorePPPN = false;
				}
			}

			if ( $this->cfg_perPersonPerNight == '1') {
				$this->room_total = ($this->rate_pernight * $this->stayDays) *  $this->getTotalInParty();
				$this->room_total_nodiscount = ($this->rate_pernight_nodiscount * $this->stayDays) * $this->getTotalInParty();
			} else {
				$this->room_total = ($this->rate_pernight * $this->stayDays) * count($this->requestedRoom);
				$this->room_total_nodiscount = ($this->rate_pernight_nodiscount * $this->stayDays) * count($this->requestedRoom);
			}

			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');

			//Coupon discount
			if ($this->coupon_code != '') {
				$dateRangeArray = explode(',', $this->dateRangeString);
				$canonical_date_range_array = array();
				foreach ($dateRangeArray as $d) {
					$canonical_date_range_array[ ] = str_replace('/', '-', $d);
				}
				$coupon_range = $this->coupon_booking_date_ranges($this->coupon_details[ 'booking_valid_from' ], $this->coupon_details[ 'booking_valid_to' ]);
				$number_of_times_coupon_is_valid_for_booking_date_range = 0;
				foreach ($canonical_date_range_array as $date) {
					if (in_array($date, $coupon_range)) {
						++$number_of_times_coupon_is_valid_for_booking_date_range;
					}
				}

				$old_room_total = $this->room_total;
				if ($this->coupon_details[ 'booking_valid_from' ] != '') {
					$room_total_per_day = $this->room_total / count($canonical_date_range_array);
					$number_of_days_not_discounted = count($canonical_date_range_array) - $number_of_times_coupon_is_valid_for_booking_date_range;
					$discountable_room_total = $room_total_per_day * $number_of_times_coupon_is_valid_for_booking_date_range;
					$non_discountable_room_total = $room_total_per_day * $number_of_days_not_discounted;
				} else { // For BC with older, pre-4.7.8 coupons
					$discountable_room_total = $this->room_total;
					$non_discountable_room_total = 0;
				}

				$this->coupon_discount_value = 0.00;
				if ($number_of_times_coupon_is_valid_for_booking_date_range > 0) {
					if ($this->coupon_details[ 'is_percentage' ] == '1') {
						$this->coupon_discount_value = ($discountable_room_total / 100) * (float) $this->coupon_details[ 'amount' ];
						$this->room_total = ($discountable_room_total - $this->coupon_discount_value) + $non_discountable_room_total;
					} else {
						$this->coupon_discount_value = (float) $this->coupon_details[ 'amount' ];
						$this->room_total = ($discountable_room_total - $this->coupon_discount_value) + $non_discountable_room_total;
					}
				}

				$this->discounts[] = array('type' => 'Coupon', 'roomtypeabbr' => 'N/A', 'discountfrom' => $old_room_total, 'discountto' => $this->room_total);

				$fb1 = jr_gettext('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', false, false);
				$fb2 = jr_gettext('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', false, false);
				$feedback = $fb1.output_price($old_room_total).$fb2.output_price($this->room_total);
				$this->setGuestPopupMessage($feedback);
				$this->addBookingNote('Coupon feedback', $feedback);

				$note = jr_gettext('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', false).' '.$this->coupon_id.' / '.$this->coupon_code.' / '.jr_gettext('_JRPORTAL_COUPONS_AMOUNT', '_JRPORTAL_COUPONS_AMOUNT', false).' '.$this->coupon_discount_value.' / ';
				foreach ($this->coupon_details as $k => $v) {
					$note .= $k.' - '.$v.' :: ';
				}
				$this->addBookingNote('Coupon', $note);
			}

			if ( count($this->requestedRoom) > 0) {

				$modifiers = $this->get_modifiers();

				$discount = 0;

				if ($this->stayDays >= 7 && $this->stayDays < 30 && isset($modifiers->modifier_7_days) && $modifiers->modifier_7_days > 0) {
					if ($modifiers->modifier_is_percentage == 1) {
						$rate = (int)$modifiers->modifier_7_days/100;
						$discount = $rate * $this->room_total;
					} else {
						$discount = $modifiers->modifier_7_days;
					}

					$new_total = $this->room_total - $discount;

					$message =
						jr_gettext('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', false).
						output_price($this->room_total).
						jr_gettext('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', false).
						output_price($new_total).
						jr_gettext('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', false);


					$this->addBookingNote("booking_length", $message);
					$this->room_total = $new_total;
				}

				if ($this->stayDays >= 30 && isset($modifiers->modifier_30_days) && $modifiers->modifier_30_days > 0) {
					if ($modifiers->modifier_is_percentage == 1) {
						$rate = (int)$modifiers->modifier_30_days/100;
						$discount = $rate * $this->room_total;
					} else {
						$discount = $modifiers->modifier_30_days;
					}

					$new_total = $this->room_total - $discount;

					$message =
						jr_gettext('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', false).
						output_price($this->room_total).
						jr_gettext('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', false).
						output_price($new_total).
						jr_gettext('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', false);

					$this->addBookingNote("booking_length", $message);
					$this->room_total = $new_total;
				}

				if ($discount > 0) {
					$this->booking_length_discount = $message;
				}
			}


			//Personal (guest specific) discount
			if ($this->guest_specific_discount > 0) {
				$this->setErrorLog("makeNightlyRoomCharges:: Calculating guest's discount (VALUE) ".$this->guest_specific_discount);
				$this->setErrorLog('makeNightlyRoomCharges:: Original room price value '.$this->room_total);
				$old_room_total = $this->room_total;
				$percentage_to_remove = ($this->room_total / 100) * (int) $this->guest_specific_discount;
				$this->room_total = $this->room_total - $percentage_to_remove;
				$this->setErrorLog('makeNightlyRoomCharges:: Percentage to remove '.$percentage_to_remove);
				$this->setErrorLog('makeNightlyRoomCharges:: New room value '.$this->room_total);
				$this->echo_populate_div($this->sanitiseOutput('; populateDiv("personal_discount","'.output_price($percentage_to_remove).'")'));
				$note = jr_gettext('_JOMRES_PERSONAL_DISCOUNT', '_JOMRES_PERSONAL_DISCOUNT', false, false).' '.output_price($percentage_to_remove);
				$this->addBookingNote(jr_gettext('_JOMRES_PERSONAL_DISCOUNT', '_JOMRES_PERSONAL_DISCOUNT', false), $note);

				$this->discounts[] = array('type' => 'Personal', 'roomtypeabbr' => 'N/A', 'discountfrom' => $old_room_total, 'discountto' => $this->room_total);
			} else {
				$this->setErrorLog('makeNightlyRoomCharges:: Guest does not benefit from any discount');
			}

			//Partner discount
			$tmp_string = str_replace('/', '-', $this->dateRangeString);
			$dateRangeArray = explode(',', $tmp_string);
			$first_date = $dateRangeArray[ 0 ];
			$last_element = count($dateRangeArray) - 1;
			$last_date = $dateRangeArray[ $last_element ];
			$thisJRUser = jomres_getSingleton('jr_user');

			$query = 'SELECT discount FROM #__jomres_partners_discounts WHERE partner_id = '.(int) $thisJRUser->id.' AND property_id = '.(int) $this->property_uid." and valid_from <= '".$first_date."' AND valid_to >= '".$last_date."'";
			$result = doSelectSql($query);

			if (!empty($result)) {
				foreach ($result as $res) {
					$old_room_total = $this->room_total;
					$percentage_to_remove = ($this->room_total / 100) * (int) $res->discount;
					$this->room_total = $this->room_total - $percentage_to_remove;
					$note = jr_gettext('_JOMRES_PARTNER_DISCOUNT', '_JOMRES_PARTNER_DISCOUNT', false, false).' '.output_price($percentage_to_remove);
					$this->addBookingNote(jr_gettext('_JOMRES_PARTNER_DISCOUNT', '_JOMRES_PARTNER_DISCOUNT', false), $note);
					$this->setGuestPopupMessage($note);

					$this->discounts[] = array('type' => 'Partner', 'roomtypeabbr' => 'N/A', 'discountfrom' => $old_room_total, 'discountto' => $this->room_total);
				}
			}

			$tmpBookingHandler->updateBookingField('discounts', $this->discounts);

			// Bypassing all the other calculations, if the price has been over-ridden, we'll just set the room total here instead.
			if ($thisJRUser->userIsManager && (float) $this->override_room_total > 0) {
				$mrConfig = $this->mrConfig;
				$tmpRate = $this->override_room_total;
				if ($mrConfig[ 'prices_inclusive' ] == 1) {
					$divisor = ($this->accommodation_tax_rate / 100) + 1;
					$tmpRate = $tmpRate / $divisor;
				}
				$this->room_total = $tmpRate;
				$this->room_total_nodiscount = $tmpRate;
				$this->discounts = array();
				$tmpBookingHandler->updateBookingField('discounts', $this->discounts);
			}

			$this->setErrorLog('makeNightlyRoomCharges::Room total calculated as '.$this->room_total);
			$this->setErrorLog('makeNightlyRoomCharges:: Ended');

			return true;
		}

		/**
		 *
		 *
		 *
		 */

		public function coupon_booking_date_ranges($first, $last, $step = '+1 day', $format = 'Y-m-d')
		{
			$dates = array();
			$current = strtotime($first);
			$last = strtotime($last);
			while ($current <= $last) {
				$dates[ ] = date($format, $current);
				$current = strtotime($step, $current);
			}

			return $dates;
		}

		/**
		 * Calculates the total value of the booking.
		 * $this->room_total+$this->extrasvalue+$this->tax+$this->single_person_suppliment.
		 */
		// $this->coupon_details = array('amount'=>$response['amount'],'is_percentage'=>$response['is_percentage'],'rooms_only'=>$response['rooms_only']);

		public function calcTotals()
		{
			$this->setErrorLog('calcTotals:: Started');
			$this->setErrorLog('calcTotals:: room total '.$this->room_total);
			$this->setErrorLog('calcTotals:: tax '.$this->tax);
			$this->setErrorLog('calcTotals:: sps '.$this->single_person_suppliment);
			$this->setErrorLog('calcTotals:: extras '.$this->extrasvalue);

			$child_price = 0;
			if (isset($this->child_prices['total_price'])) {
				$child_price = $this->child_prices['total_price'];
			}

			$this->billing_grandtotal = ($this->room_total + $this->extrasvalue + $this->tax + $this->single_person_suppliment + $this->city_tax + $this->cleaning_fee + $child_price );
			$this->room_total_ex_tax = $this->room_total + $this->single_person_suppliment;
			$this->room_total_inc_tax = $this->room_total + $this->single_person_suppliment + $this->tax;
			$this->setErrorLog('calcTotals::Total: '.$this->billing_grandtotal);
			$this->contract_total = $this->billing_grandtotal;
			$this->setErrorLog('calcTotals:: Ended');
		}

		public function calcExtras()
		{
			$this->extra_taxs = array();
			$mrConfig = $this->mrConfig;
			$extrasTotal = 0.00;
			//$this->setErrorLog("calcExtras: Current extras: ".$this->extras);
			if (!empty($this->extras)) {
				$extrasArray = explode(',', $this->extras);
				foreach ($extrasArray as $extra) {
					if ( !empty($extra) ) {
						$this->setErrorLog('calcExtras: Getting data for extra: '.$extra);
						$query = "SELECT price,tax_rate FROM #__jomres_extras WHERE uid = '$extra'";
						$extraDeets = doSelectSql($query, 2);
						$thisPrice = $extraDeets[ 'price' ];
						$tax_rate_id = $extraDeets[ 'tax_rate' ];
						//$this->setErrorLog("<b>calcExtras:</b> Extra deets : ".serialize($extraDeets));
						$query = "SELECT `model`,`params` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '$extra'";
						$model = doSelectSql($query, 2);
						//$this->setErrorLog("calcExtras: Using model: ".$model['model']);
						//$this->setErrorLog("calcExtras: Parameters: ".$model['params']);
						switch ($model[ 'model' ]) {
							case '1': // Per week
								$numberOfWeeks = ceil($this->stayDays / 7);
								$calc = $numberOfWeeks * $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $numberOfWeeks;
								break;
							case '2': // per days
								$calc = $this->stayDays * $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $this->stayDays;
								break;
							case '3': // per booking
								$calc = $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = 1;
								break;
							case '4': // per person per booking
								$calc = $this->total_in_party * $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $this->total_in_party;
								break;
							case '5': // per person per day
								$calc = $this->total_in_party * $this->stayDays * $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $this->total_in_party * $this->stayDays;
								break;
							case '6': // per person per week
								$numberOfWeeks = ceil($this->stayDays / 7);
								$calc = $this->total_in_party * $numberOfWeeks * $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $this->total_in_party * $numberOfWeeks;
								break;
							case '7': // per person per days min days
								$mindays = $model[ 'params' ];
								if ($this->stayDays < $mindays) {
									$days = $mindays;
								} else {
									$days = $this->stayDays;
								}
								$calc = $days * $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $days;
								break;
							case '8': // per days per room
								$num_rooms = $this->numberOfCurrentlySelectedRooms();
								$calc = ($this->stayDays * $thisPrice) * $num_rooms;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $this->stayDays * $num_rooms;
								break;
							case '9': // per room
								$num_rooms = $this->numberOfCurrentlySelectedRooms();
								$calc = $thisPrice * $num_rooms;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = $num_rooms;
								break;
							case '100': // commission
								$calc = ($this->room_total / 100) * $thisPrice;
								$this->extrasvalues_items[ $extra ][ 'quantity_multiplier' ] = 1;
								break;
						}
						$quantity = $this->extrasquantities[ $extra ];

						$tmpTotal = $quantity * $calc;

						//$this->setErrorLog("calcExtras: tax_rate_id: ".$tax_rate_id);
						if ((int) $tax_rate_id > 0) {
							$rate = $this->taxrates[ $tax_rate_id ][ 'rate' ];
							$this->setErrorLog('calcExtras: rate is: '.$rate);
							if ($mrConfig[ 'prices_inclusive' ] == 1) {
								$divisor = ($rate / 100) + 1;
								$nett_price = $tmpTotal / $divisor;
								$thisTax = $tmpTotal - $nett_price;
								$tmpTotal = $nett_price;
							} else {
								$thisTax = ($tmpTotal / 100) * $rate;
							}

							$this->extra_taxs[ ] = $thisTax;
							$this->setErrorLog('calcExtras: Adding : '.$thisTax.' to original value '.$tmpTotal);
							$tmpTotal = $tmpTotal + $thisTax;
						} else {
							$this->setErrorLog('calcExtras: Tax rate not set ');
						}

						//$this->extrasvalues_items[$extra]=$tmpTotal;
						$extrasTotal = $extrasTotal + $tmpTotal;
						//$this->setErrorLog("<b>calcExtras: Extras totals plus Tax</a>: ".$extrasTotal );
						$this->setErrorLog('calcExtras: Extras totals: '.$extrasTotal);
					}
				}
			}
			//=array('id'=>$id,'description'=>$description,'untaxed_grand_total'=>$total_value,'tax_code_id'=>$tax_code_id);
			if (!empty($this->third_party_extras) && $this->third_party_extras !== false) {
				foreach ($this->third_party_extras as $plugin) {
					foreach ($plugin as $tpextra) {
						$tmpTotal = (float) $tpextra[ 'untaxed_grand_total' ];

						//Coupon discount
						if ($this->coupon_code != '' && get_showtime('is_jintour_property')) {
							$old_total = $tmpTotal;
							$dateRangeArray = explode(',', $this->dateRangeString);
							$canonical_date_range_array = array();
							foreach ($dateRangeArray as $d) {
								$canonical_date_range_array[ ] = str_replace('/', '-', $d);
							}
							$coupon_range = $this->coupon_booking_date_ranges($this->coupon_details[ 'booking_valid_from' ], $this->coupon_details[ 'booking_valid_to' ]);
							$number_of_times_coupon_is_valid_for_booking_date_range = 0;
							foreach ($canonical_date_range_array as $date) {
								if (in_array($date, $coupon_range)) {
									++$number_of_times_coupon_is_valid_for_booking_date_range;
								}
							}

							$this->coupon_discount_value = 0.00;
							if ($number_of_times_coupon_is_valid_for_booking_date_range > 0) {
								if ($this->coupon_details[ 'is_percentage' ] == '1') {
									$this->coupon_discount_value = ($tmpTotal / 100) * (float) $this->coupon_details[ 'amount' ];
									$tmpTotal = $tmpTotal - $this->coupon_discount_value;
								} else {
									$this->coupon_discount_value = (float) $this->coupon_details[ 'amount' ];
									$tmpTotal = $tmpTotal - $this->coupon_discount_value;
								}
							}

							$this->discounts[] = array('type' => 'TourCoupon', 'roomtypeabbr' => 'N/A', 'discountfrom' => $old_total, 'discountto' => $tmpTotal);

							$fb1 = jr_gettext('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', false, false);
							$fb2 = jr_gettext('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', false, false);
							$feedback = $fb1.output_price($old_total).$fb2.output_price($tmpTotal);
							$this->setGuestPopupMessage($feedback);
							$this->addBookingNote('Coupon feedback', $feedback);

							$note = jr_gettext('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', false).' '.$this->coupon_id.' / '.$this->coupon_code.' / '.jr_gettext('_JRPORTAL_COUPONS_AMOUNT', '_JRPORTAL_COUPONS_AMOUNT', false).' '.$this->coupon_discount_value.' / ';
							foreach ($this->coupon_details as $k => $v) {
								$note .= $k.' - '.$v.' :: ';
							}
							$this->addBookingNote('Coupon', $note);
						}

						if (isset($tpextra[ 'tax_code_id' ]) && (int) $tpextra[ 'tax_code_id' ] > 0) {
							$tax_rate_id = $tpextra[ 'tax_code_id' ];

							if (isset($this->taxrates[ $tax_rate_id ][ 'rate' ])) {
								$rate = $this->taxrates[ $tax_rate_id ][ 'rate' ];
							} else {
								$rate = 0;
							}
							$this->setErrorLog('calcExtras Third party: rate is: '.$rate);

							$thisTax = ($tmpTotal / 100) * $rate;
							$this->extra_taxs[ ] = $thisTax;
							$this->setErrorLog('calcExtras Third party: Adding : '.$thisTax.' to original value '.$tmpTotal);
							$tmpTotal = $tmpTotal + $thisTax;
						} else {
							$this->setErrorLog('calcExtras: Tax rate not set ');
						}
						$extrasTotal = $extrasTotal + $tmpTotal;
					}
				}
			}
			//$this->extrasvalueplustax=$extrasTotalPlusTax;
			//$this->extrasvalue = $extrasTotal;

			$this->extrasvalue = number_format($extrasTotal, 2, '.', '');


			$this->cleaning_fee = 0.00;
			if (!isset($mrConfig[ 'cleaning_fee' ])) {
				$mrConfig[ 'cleaning_fee' ] = 0;
			}
			if (count($this->requestedRoom) > 0 && $mrConfig[ 'cleaning_fee' ] > 0) {
				$this->cleaning_fee = count($this->requestedRoom) * $mrConfig[ 'cleaning_fee' ];
			} else {
				$this->cleaning_fee = 0;
			}
		}

		/**
		 * Calculates room &/or VAT.
		 */
		public function calcTax()
		{
			$this->setErrorLog('calcTax:: Started');
			$totalTax = 0.00;
			$totalBooking = $this->getRoomtotal();

			$totalBooking = $totalBooking + $this->single_person_suppliment;

			$rate = $this->accommodation_tax_rate;
			$this->setErrorLog('calcTax::Tax rate detected as '.$rate);
			$percentageToAdd = $totalBooking * ($rate / 100);
			$totalTax = $percentageToAdd;
			$this->setErrorLog('calcTax:: Total tax calculated as '.$totalTax);

			$this->tax = $totalTax;

			$city_tax = 0;
			$mrConfig = $this->mrConfig;

			if (!isset($mrConfig['city_tax_value'])) {
				$mrConfig['city_tax_value'] = 0;
			}

			if ((float)$mrConfig[ 'city_tax_value' ] > 0 && $totalBooking > 0) {
				if (!isset($mrConfig[ 'city_tax_models' ])) {
					$mrConfig[ 'city_tax_models' ] = 'single';
				}

				switch ($mrConfig[ 'city_tax_models' ]) {
					case 'single':
						$city_tax = (float)$mrConfig[ 'city_tax_value' ];
						break;
					case 'pernight':
						$city_tax = (float)$mrConfig[ 'city_tax_value' ] * $this->stayDays ;
						break;
					case 'perguest':
						$city_tax = (float)$mrConfig[ 'city_tax_value' ] * $this->city_tax_number_of_guests ;
						break;
					case 'perguestpernight':
						$city_tax = ((float)$mrConfig[ 'city_tax_value' ]  * $this->stayDays)  * $this->city_tax_number_of_guests ;
						break;
					case 'percentbookingtotal':
						$city_tax = $totalBooking * ((float)$mrConfig[ 'city_tax_value' ] / 100);
						break;
				}

				$this->city_tax = $city_tax;
			}



			$this->setErrorLog('calcTax:: Ended');
		}

		/**
		 * Discerns if single person suppliement applies, and if it does, how much should be charged.
		 */
		public function calcSinglePersonSuppliment()
		{
			$totalBooking = $this->getRoomtotal();
			$guests = $this->getVariantsOfType('guesttype');
			$totalNumberOfGuests = 0;

			if (empty($this->requestedRoom)) { // No rooms selected yet
				return;
			}

			if ( $this->getTotalInParty() == 0 && empty($guests) ) { // Guest numbers not chosen/used/selected yet
				return;
			}

			$use_propertywide_sps_setting = false;

			$this->single_person_suppliment = 0.00;

			$allRoomsMaxPeople = array();
			foreach ($this->requestedRoom as $r) {
				$rm_idArr = explode('^', $r);
				$rm_id = $rm_idArr[ 0 ];
				$allRoomsMaxPeople[ $rm_id ] = $this->allPropertyRooms[ $rm_id ][ 'max_people' ];
			}
			foreach ($guests as $g) {
				$totalNumberOfGuests = $totalNumberOfGuests + $g[ 'qty' ];
			}

			if ($this->cfg_singlePersonSuppliment == '1') { // Property-wide SPS
				$this->setErrorLog('calcSinglePersonSuppliment::calculating property-wide single person supplements ');
				if ($this->cfg_supplimentChargeIsPercentage == '1') {
					$perperson = $totalBooking / $totalNumberOfGuests / $this->stayDays;
					$this->setErrorLog('calcSinglePersonSuppliment::perperson: '.$perperson);
					$this->setErrorLog('calcSinglePersonSuppliment::perperson/100: '.$perperson / 100);
					$this->setErrorLog('calcSinglePersonSuppliment::cfg_singlePersonSupplimentCost: '.$this->cfg_singlePersonSupplimentCost);
					$this->setErrorLog('calcSinglePersonSuppliment::stayDays: '.$this->stayDays);
					$SPSChargePerPerson = (($perperson / 100) * $this->cfg_singlePersonSupplimentCost) * $this->stayDays;
				} else {
					$SPSChargePerPerson = $this->cfg_singlePersonSupplimentCost * $this->stayDays;
				}
				$use_propertywide_sps_setting = true;
			}

			foreach ($this->room_allocations as $rm_id => $allocation) {
				if (!$use_propertywide_sps_setting) {
					$this->setErrorLog('calcSinglePersonSuppliment::calculating room specific single person supplements ');
					if ((float) $this->allPropertyRooms[ $rm_id ][ 'singleperson_suppliment' ] > 0.00) {
						$suppliment = $this->allPropertyRooms[ $rm_id ][ 'singleperson_suppliment' ] * $this->stayDays;
						$this->setErrorLog('calcSinglePersonSuppliment::per room suppliment: '.$suppliment);
					} else {
						$suppliment = 0.00;
					}
				} else {
					$suppliment = $SPSChargePerPerson;
				}

				$this->setErrorLog('calcSinglePersonSuppliment::suppliment: '.$suppliment);

				if ($allRoomsMaxPeople[ $rm_id ] > 1 && $allocation[ 'number_allocated' ] == 1) {
					$this->room_allocations[ $rm_id ][ 'suppliment' ] = $suppliment;
				} else {
					$this->room_allocations[ $rm_id ][ 'suppliment' ] = 0.00;
				}
				$this->setErrorLog('calcSinglePersonSuppliment::$allRoomsMaxPeople[$rm_id]>1 && $allocation[\'number_allocated\']==1: '.$this->room_allocations[ $rm_id ][ 'suppliment' ]);
			}

			// Broken this down into two seperate steps, we could move it into the loop above, but this makes it easier to read
			foreach ($this->room_allocations as $rm_id => $allocation) {
				$suppliment = $allocation[ 'suppliment' ];
				$this->single_person_suppliment = $this->single_person_suppliment + $suppliment;
			}

			/* 		$mrConfig = $this->mrConfig;
		if ($mrConfig['prices_inclusive'] == 1)
		{
		$divisor    = ($this->accommodation_tax_rate/100)+1;
		$this->single_person_suppliment=$this->single_person_suppliment/$divisor;
		} */

			$this->singlePersonSupplimentCalculated = true;
			$this->setErrorLog('calcSinglePersonSuppliment::Single person suppliment charge: '.$this->single_person_suppliment);

			return true;
		}

		/**
		 * Calculates how much deposit should be charged.
		 */
		public function calcDeposit()
		{
			$mrConfig = $this->mrConfig;
			$datesTilBooking = $this->findDateRangeForDates($this->today, $this->arrivalDate);
			$this->setErrorLog('calcDeposit::Use variable deposits : '.$mrConfig[ 'use_variable_deposits' ]);
			$this->setErrorLog('calcDeposit::Variable deposit threashold : '.(int) $mrConfig[ 'variable_deposit_threashold' ]);
			$this->setErrorLog('calcDeposit::Days til booking : '.count($datesTilBooking));
			if ($mrConfig[ 'depositIsOneNight' ] == '1') {
				if ($this->stayDays == 1) {
					$depositValue = $this->billing_grandtotal;
				} else {
					$depositValue = $this->rate_pernight;
					// This line can be modified, if we want the deposit to be first night X number of rooms you'd change the above line to
					// $depositValue = $this->rate_pernight*count ($this->requestedRoom);

					$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

					$depositValue = $basic_property_details->get_gross_accommodation_price($depositValue, $this->property_uid);
				}
			} else {
				if ($mrConfig[ 'use_variable_deposits' ] == '1' && count($datesTilBooking) <= (int) $mrConfig[ 'variable_deposit_threashold' ]) {
					$depositValue = $this->contract_total;
				} else {
					// Calculate deposit
					$depositValue = 0;
					// Depreciating this next if, but leaving the stuff inside on. This is because a few folks are setting the show deposit to No, but still sending the deposit value to
					// paypal/gateway. Commenting out this if will mean that the deposit is still calculated.
					//if ($this->cfg_chargeDepositYesNo=="1")
					//	{
					$depositValue = $this->cfg_depositValue;
					$totalBooking = $this->contract_total;
					if ($this->cfg_depAmount == '1') {
						$depositValue = $this->contract_total;
					} else {
						if ($this->cfg_depositIsPercentage == '1') {
							if ($this->cfg_roundupDepositYesNo == '1') {
								$depositValue = ceil(($totalBooking / 100) * $depositValue);
							} else {
								$depositValue = ($totalBooking / 100) * $depositValue;
							}
						} else {
							if ($this->cfg_roundupDepositYesNo == '1') {
								$depositValue = ceil($depositValue);
							} else {
								$depositValue = $depositValue;
							}
						}
					}
					//}
				}
			}
			$this->deposit_required = $depositValue;

			if (!isset($mrConfig[ 'minimum_deposit_value' ])) {
				$mrConfig[ 'minimum_deposit_value' ] = 0;
			}

			if ($this->billing_grandtotal > $this->deposit_required && (float)$mrConfig[ 'minimum_deposit_value' ] >  $this->deposit_required) { // Minimum deposit. If less than grand total, and minimum deposit is greater than the calculated deposit, replace the deposit value with this figure
				$this->deposit_required = (float)$mrConfig[ 'minimum_deposit_value' ];
			}

			$thisJRUser = jomres_getSingleton('jr_user');
			if ($thisJRUser->userIsManager) {
				if (isset($this->override_deposit) && $this->override_deposit <= $this->billing_grandtotal) {
					$this->deposit_required = $this->override_deposit;
				}
			}
		}

		/**
		 * Returns the value of the deposit required to make the booking.
		 */
		public function getDeposit()
		{
			return $this->deposit_required;
		}

		/**
		 * Returns the total value of the extras selected.
		 */
		public function getExtrasTotal()
		{
			return $this->extrasvalue;
		}

		/**
		 * Returns the total value of the Tax calculated.
		 */
		public function getTax()
		{
			return $this->tax;
		}

		/**
		 * Returns the total value of the single person suppliment caluclated.
		 */
		public function getSinglePersonSuppliment()
		{
			return $this->single_person_suppliment;
		}

		/**
		 * Outputs the results of the automatic room allocations.
		 */
		public function getRoomAllocationOutput()
		{
			$numberOfGuestTypes = $this->getVariantsOfType('guesttype');
			if (empty($numberOfGuestTypes)) {
				return '';
			}
			if ($this->cfg_perPersonPerNight == '0') {
				return '';
			}

			$text_room = jr_gettext('_JOMRES_ROOMALLOCATIONS_ROOM', '_JOMRES_ROOMALLOCATIONS_ROOM', false, false);
			$text_guests = jr_gettext('_JOMRES_ROOMALLOCATIONS_GUESTS', '_JOMRES_ROOMALLOCATIONS_GUESTS', false, false);
			$text_information = jr_gettext('_JOMRES_ROOMALLOCATIONS_INFORMATION', '_JOMRES_ROOMALLOCATIONS_INFORMATION', false, false);

			if (empty($this->room_allocations)) {
				return ' ';
			}
			$output = '<table>';
			foreach ($this->room_allocations as $key => $val) {
				$rm_id = $key;
				$number_of_guests = $val[ 'number_allocated' ];
				if (isset($val[ 'price_per_night' ])) {
					$price = output_price($this->get_gross_price($val[ 'price_per_night' ] * $val[ 'number_allocated' ], $this->accommodation_tax_rate));
				} else {
					$price = '';
				}
				$room_number = '';
				$room_name = '';

				if ($this->cfg_booking_form_rooms_list_style == '2') {
					$room_type_id = $this->allPropertyRooms[ $rm_id ][ 'room_classes_uid' ];
					$room_type = $this->allRoomClasses[ $room_type_id ][ 'room_class_abbv' ];
					$output .= '<tr><td>'.$text_room.' : '.$room_type.'</td><td>X</td><td>'.$number_of_guests.' '.$text_guests.' '.$price.'</td></tr>';
				} else {
					if ($this->cfg_bookingform_roomlist_showroomno == '1') {
						$room_number = $this->allPropertyRooms[ $rm_id ][ 'room_number' ];
					}
					if ($this->cfg_bookingform_roomlist_showroomname == '1') {
						$room_name = $this->allPropertyRooms[ $rm_id ][ 'room_name' ];
					}
					//$this->setPopupMessage();
					$output .= '<tr><td>'.$text_room.' : '.$room_number.' '.$room_name.'</td><td>X</td><td>'.$number_of_guests.' '.$text_guests.' '.$price.'</td></tr>';
				}
			}
			// Don't let there be a carriage return in this output string, otherwise the javascript will bork.
			$output .= '</table><br/>'.$text_information;
			$this->addBookingNote('suppliment_note', $output);

			return $this->sanitiseOutput($output);
		}

		/**
		 * Returns the grand total calculated.
		 */
		public function getGrandTotal()
		{
			return $this->contract_total;
		}

		/**
		 * Returns the room per night calculated.
		 */
		public function getRoompernight()
		{
			return $this->rate_pernight;
		}

		/**
		 * Returns the room total for the booking.
		 */
		public function getRoomtotal()
		{
			return $this->room_total;
		}

		/**
		 * Resets all totals to 0.00.
		 */
		public function resetTotals()
		{
			$this->rate_pernight = 0.00;
			$this->contract_total = 0.00;
			$this->room_total = 0.00;
			$this->room_total_nodiscount = 0.00;
			$this->extrasvalue = 0.00;
			$this->tax = 0.00;
			$this->city_tax = 0.00;
			$this->extra_guest_price = 0;
			$this->cleaning_fee = 0.00;
			$this->single_person_suppliment = 0.00;
			$this->deposit_required = 0.00;
			$this->rate_pernight_nodiscount = 0.00;
		}

		/**
		 *
		 *
		 *
		 */

		public function makeRatePerNight()
		{
			if (!get_showtime('include_room_booking_functionality')) {
				return true;
			}

			$result = false;
			//$this->setErrorLog("makeRatePerNight::Currently selected rooms: ".count($this->requestedRoom) );
			if (!empty($this->requestedRoom)) {
				if ($this->tariffModel == '1') {
					$this->setErrorLog('Getting flat rate. ');
					$result = $this->setFlatRate();
				} else {
					$this->setErrorLog('Getting average rate. ');
					$result = $this->setAverageRate();
				}
			}

			return $result;
		}

		/**
		 * The default method of handling price calculations. When a booking is made the price for the entire period reflects the price of the booking.
		 */
		public function setFlatRate()
		{
			$mrConfig = $this->mrConfig;
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$disc = array();
			$tmpBookingHandler->updateBookingField('wiseprice_discount', $disc);
			$rpn = 0.00;
			$total = 0.00;
			$total_nodiscount = 0.00;
			$tariffs = array();
			$rates = array();
			$rates_nodiscount = array();
			if (!isset($mrConfig[ 'wisepriceactive' ]) || empty($mrConfig[ 'wisepriceactive' ])) {
				$mrConfig[ 'wisepriceactive' ] = '0';
			}
			if (!isset($mrConfig[ 'wisepricethreshold' ]) || empty($mrConfig[ 'wisepricethreshold' ])) {
				$mrConfig[ 'wisepricethreshold' ] = '60';
			}
			$wisepricethreshold = (int) $mrConfig[ 'wisepricethreshold' ];

			// If flat rate is set, but they're using micromanage then the tariff previously selected will be wrong. Instead of correcting that elsewhere (because of how complex the system is), we'll instead quickly go through the tariff map
			// and rebuild the $this->requestedRoom with the correct tariff uid, as this is an edge-case. MOST users will want to be using Average mode, if they're using Micromanage.
			// This problem appeared beause an SRP was using flat rate. Because the room/tariff combo is automatically selected the system didn't have a chance to find the correct tariff uid for the selected room.
			$this->build_tariff_to_date_map();

			if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {
				$dateRangeArray = explode(',', $this->dateRangeString);
				$first_date = $dateRangeArray[ 0 ];
				$tmp = array();
				foreach ($this->requestedRoom as $key => $room_tariff) {
					$currentTariffsArray = explode('^', $room_tariff);
					$room_uid = $currentTariffsArray[ 0 ];
					$tariff_uid = $currentTariffsArray[ 1 ];
					// Now we need to find the tariff type
					foreach ($this->allPropertyTariffs as $tariff) {
						if ($tariff[ 'rates_uid' ] == $tariff_uid) {
							$tariff_type_id = $this->all_tariff_id_to_tariff_type_xref[ $tariff_uid ][ 0 ];
							break;
						}
					}
					// Now that we've found the tariff type, we can find the correct tariff uid for the first date in the range
					$rates_uid = $this->micromanage_tarifftype_to_date_map[ $tariff_type_id ][ $first_date ][ 'rates_uid' ];
					$tmp[ $key ] = $room_uid.'^'.$rates_uid;
				}
				// Having found the correct tariffs, we can rebuild requestedRoom with the correct tariff uid(s)
				$this->requestedRoom = $tmp;
			}

			foreach ($this->requestedRoom as $rt) {
				$currentTariffsArray = explode('^', $rt);
				$tariffs[ ] = $currentTariffsArray[ 1 ];
			}
			if (empty($tariffs)) {
				return false;
			}
			$datesTilBooking = $this->findDateRangeForDates($this->today, $this->arrivalDate);

			foreach ($tariffs as $t) {
				if (count($datesTilBooking) <= $wisepricethreshold && $mrConfig[ 'wisepriceactive' ] == '1') {
					$tmpRate = $this->allPropertyTariffs[ $t ][ 'roomrateperday' ];
					$roomType = $this->allPropertyTariffs[ $t ][ 'roomclass_uid' ];
					$percentageBooked = $this->getPercentageOfRoomsBookedForRoomtype($roomType);
					$rate = $this->getDiscountedRoomrate($tmpRate, $percentageBooked);
					$isDiscounted = false;
					if ($rate < $tmpRate) {
						$isDiscounted = true;
						$tmpBookingHandler->updateBookingField('booking_discounted', true);
					}
					$disc[ ] = array('roomrate' => $tmpRate, 'discountedRate' => $rate, 'roomType' => $roomType, 'isDiscounted' => $isDiscounted);
				} else {
					$rate = $this->allPropertyTariffs[ $t ][ 'roomrateperday' ];
					$tmpRate = $this->allPropertyTariffs[ $t ][ 'roomrateperday' ];
				}
				$tmpBookingHandler->updateBookingField('wiseprice_discount', $disc);

				$rates[ ] = $rate;
				$rates_nodiscount[] = $tmpRate;
			}
			foreach ($rates as $r) {
				$total += $r;
			}
			$this->setErrorLog('Total calculated '.$total);
			$rpn = $total / (count($rates));
			$this->setErrorLog('Setting flat rate '.$rpn);
			if ($this->cfg_tariffChargesStoredWeeklyYesNo == '1') {
				$rpn = $rpn / 7;
			}
			$this->rate_pernight = $rpn;

			foreach ($rates_nodiscount as $r) {
				$total_nodiscount += $r;
			}
			$rpn_nodiscount = $total_nodiscount / (count($rates_nodiscount));
			if ($this->cfg_tariffChargesStoredWeeklyYesNo == '1') {
				$rpn_nodiscount = $rpn_nodiscount / 7;
			}
			$this->rate_pernight_nodiscount = $rpn_nodiscount;

			return true;
		}

		/**
		 *
		 *
		 *
		 */

		public function outputDiscounts()
		{
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$discountData = $tmpBookingHandler->getBookingFieldVal('wiseprice_discount');
			$discountOutput = '';
			if (!empty($discountData)) {
				$discountsForTmpdata = array();
				$tmpBookingHandler->updateBookingField('discounts', array());
				foreach ($discountData as $d) {
					if ($d[ 'isDiscounted' ]) {
						if (!isset($tmpBookingHandler->tmpbooking[ 'wisepricediscount' ])) {
							$tmpBookingHandler->addNewBookingField('wisepricediscount');
						}
						$roomtype = $d[ 'roomType' ];
						$roomtype_abbr = $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION'.$roomtype, $this->allRoomClasses[ $roomtype ][ 'room_class_abbv' ], false, false));
						$roomrate = $d[ 'roomrate' ];
						$roomrate_foroutput = $roomrate + (($roomrate / 100) * $this->accommodation_tax_rate);
						$discountedate_foroutput = $d[ 'discountedRate' ] + (($d[ 'discountedRate' ] / 100) * $this->accommodation_tax_rate);
						//$discountedRate=$d['discountedRate'];
						$discountOutput .= ' '.$roomtype_abbr.jr_gettext('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', false).output_price($roomrate_foroutput).jr_gettext('_JOMCOMP_WISEPRICE_TO', '_JOMCOMP_WISEPRICE_TO', false).output_price($discountedate_foroutput).' <br/>';
						$tmpBookingHandler->updateBookingField('wisepricediscount', $discountOutput);
						$this->discounts[ ] = array('type' => 'MRP', 'roomtypeabbr' => $roomtype_abbr, 'discountfrom' => $roomrate, 'discountto' => $d[ 'discountedRate' ]);
					} else {
						if ($this->wiseprice_installed) {
							$tmpBookingHandler->updateBookingField('wisepricediscount', jr_gettext('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', false));
						}
					}
				}
				$tmpBookingHandler->updateBookingField('discounts', $this->discounts);
			} else {
				if ($this->wiseprice_installed) {
					$tmpBookingHandler->updateBookingField('wisepricediscount', jr_gettext('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', false));
				}
				$this->echo_populate_div('; populateDiv("discount","")');
			}
			$this->echo_populate_div('; populateDiv("discount","'.$discountOutput.'")');
		}

		/**
		 *
		 *
		 *
		 */

		public function getPercentageOfRoomsBookedForRoomtype($roomtypeid)
		{
			$this->setErrorLog('getPercentageOfRoomsBookedForRoomtype:: Started');
			//$this->setErrorLog("getPercentageOfRoomsBookedForRoomtype:: Room type id ".$roomtypeid );
			$roomsOfThisType = array();
			$roomsOfThisTypeBooked = array();
			foreach ($this->allPropertyRooms as $key => $val) {
				if ($val[ 'room_classes_uid' ] == $roomtypeid) {
					$roomsOfThisType[ ] = $key;
				}
			}
			//$this->setErrorLog("getPercentageOfRoomsBookedForRoomtype:: this->allBookings : ". serialize($this->allBookings));
			foreach ($this->allBookings as $key => $val) {
				foreach ($val as $k => $v) {
					$roomid = $k;
					if ($key == $this->arrivalDate && $this->allPropertyRooms[ $roomid ][ 'room_classes_uid' ] == $roomtypeid) {
						$roomsOfThisTypeBooked[ ] = $roomid;
					}
				}
			}
			$totalRoomsOfType = count($roomsOfThisType);
			$totalRoomsOfTypeBooked = count($roomsOfThisTypeBooked);
			$percentageBooked = ($totalRoomsOfTypeBooked / $totalRoomsOfType) * 100;

			//$this->setErrorLog("<b>getPercentageOfRoomsBookedForRoomtype:: totalRoomsOfType: $totalRoomsOfType totalRoomsOfTypeBooked: $totalRoomsOfTypeBooked percentageBooked: $percentageBooked</b>");
			return $percentageBooked;
		}

		/**
		 *
		 *
		 *
		 */

		public function getDiscountedRoomrate($roomrate, $percentagebooked)
		{
			$mrConfig = $this->mrConfig;
			$this->setErrorLog('getDiscountedRoomrate:: Started');
			if (!isset($mrConfig[ 'wiseprice10discount' ]) || empty($mrConfig[ 'wiseprice10discount' ])) {
				$mrConfig[ 'wiseprice10discount' ] = '30';
			}
			if (!isset($mrConfig[ 'wiseprice25discount' ]) || empty($mrConfig[ 'wiseprice25discount' ])) {
				$mrConfig[ 'wiseprice25discount' ] = '20';
			}
			if (!isset($mrConfig[ 'wiseprice50discount' ]) || empty($mrConfig[ 'wiseprice50discount' ])) {
				$mrConfig[ 'wiseprice50discount' ] = '10';
			}
			if (!isset($mrConfig[ 'wiseprice75discount' ]) || empty($mrConfig[ 'wiseprice75discount' ])) {
				$mrConfig[ 'wiseprice75discount' ] = '5';
			}
			$this->setErrorLog("getDiscountedRoomrate:: room rate: $roomrate percentagebooked: $percentagebooked");
			if ($percentagebooked <= 75) {
				if ($percentagebooked <= 75 && $percentagebooked > 50) {
					$discountPercentage = (float) $mrConfig[ 'wiseprice75discount' ];
				}
				if ($percentagebooked <= 50 && $percentagebooked > 25) {
					$discountPercentage = (float) $mrConfig[ 'wiseprice50discount' ];
				}
				if ($percentagebooked <= 25 && $percentagebooked > 10) {
					$discountPercentage = (float) $mrConfig[ 'wiseprice25discount' ];
				}
				if ($percentagebooked <= 10) {
					$discountPercentage = (float) $mrConfig[ 'wiseprice10discount' ];
				}
				$discount = ($roomrate / 100) * $discountPercentage;
				$discountedRate = $roomrate - $discount;
				$this->setErrorLog('<b>getDiscountedRoomrate:: discounted rate '.$discountedRate.'</b>');
			} else {
				$discountedRate = $roomrate;
			}

			return $discountedRate;
		}

		/**
		 * The alterntive method of handling price calculations. When a booking is made the price for rooms is calculated as the sum of the value of the rooms for each night/number of rooms.
		 */
		public function setAverageRate()
		{
			$mrConfig = $this->mrConfig;
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');

			if ($mrConfig[ 'tariffmode' ] == '2' || $mrConfig[ 'tariffmode' ] == '5') {
				$this->setErrorLog('setAverageRate : going to te_setAverageRate');
				$this->te_setAverageRate(); // Tariffs enhanced averages instead of the bog standard method.
			} else {
				$disc = array();
				if (!isset($mrConfig[ 'wisepriceactive' ]) || empty($mrConfig[ 'wisepriceactive' ])) {
					$mrConfig[ 'wisepriceactive' ] = '0';
				}
				if (!isset($mrConfig[ 'wisepricethreshold' ]) || empty($mrConfig[ 'wisepricethreshold' ])) {
					$mrConfig[ 'wisepricethreshold' ] = '60';
				}
				$wisepricethreshold = (int) $mrConfig[ 'wisepricethreshold' ];
				$tmpBookingHandler->updateBookingField('wiseprice_discount', $disc);

				$this->setErrorLog('setAverageRate:: Started');
				//$datesToRateArray=array();
				//$rates=array();
				//$rmClassArray=array();
				$datesTilBooking = $this->findDateRangeForDates($this->today, $this->arrivalDate);
				foreach ($this->requestedRoom as $rt) {
					$rm = explode('^', $rt);
					$rmidsArray[ ] = $rm[ 0 ];
				}

				$roomAndClassArray = array();
				foreach ($rmidsArray as $rmid) {
					if (isset($this->allPropertyRooms[ $rmid ][ 'room_classes_uid' ])) {
						$roomClassUid = $this->allPropertyRooms[ $rmid ][ 'room_classes_uid' ];
						$roomAndClassArray[ $rmid ] = array('room_uid' => $rmid, 'room_class_uid' => $roomClassUid);
					}
				}

				$this->setErrorLog('setAverageRate:: Room & Class array contains: '.serialize($roomAndClassArray));
				$numberOfGuestTypes = $this->getVariantsOfType('guesttype');
				$total = 0.00;
				$total_nodiscount = 0.00;
				$stayDays = $this->stayDays;
				$dateRangeArray = explode(',', $this->dateRangeString);
				foreach ($roomAndClassArray as $rc) {
					$rclass = $rc[ 'room_class_uid' ];
					//$rid=$rc['room_uid'];
					$rateList = $this->getTariffsForRoomClass($rclass);

					foreach ($rateList as $rate) {
						// $date_elements  = explode("/",$rate->validfrom);
						// $unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
						// $date_elements  = explode("/",$rate->validto);
						// $unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

						$unixValidFromDate = $this->getMkTime($rate->validfrom);
						$unixValidToDate = $this->getMkTime($rate->validto);

						foreach ($dateRangeArray as $date) {
							$pass = false;
							$this->setErrorLog('setAverageRate::Searching date '.$date.' on current tariff uid: '.$rate->rates_uid);
							// $date_elements  = explode("/",$date);
							// $unixDay = mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
							$unixDay = $this->getMkTime($date);
							if (!empty($numberOfGuestTypes)) {
								if ($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays && $stayDays <= $rate->maxdays) && ($this->total_in_party >= $rate->minpeople && $this->total_in_party <= $rate->maxpeople)) {
									$pass = true;
								}
							} else {
								if ($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays && $stayDays <= $rate->maxdays)) {
									$pass = true;
								}
							}
							if ($pass) {
								if (count($datesTilBooking) <= $wisepricethreshold && $mrConfig[ 'wisepriceactive' ] == '1') {
									$tmpRate = $rate->roomrateperday;
									$roomType = $rclass;
									$percentageBooked = $this->getPercentageOfRoomsBookedForRoomtype($rclass);
									// Double check this :
									$r = $this->getDiscountedRoomrate($tmpRate, $percentageBooked);
									$total = $total + $r;
									$total_nodiscount = $total_nodiscount + $tmpRate;
									$isDiscounted = false;
									if ($r < $tmpRate) {
										$isDiscounted = true;
										$tmpBookingHandler->updateBookingField('booking_discounted', true);
									}
									$disc[ ] = array('roomrate' => $tmpRate, 'discountedRate' => $r, 'roomType' => $roomType, 'isDiscounted' => $isDiscounted);
									$tmpBookingHandler->updateBookingField('wiseprice_discount', $disc);
								} else {
									$total += $rate->roomrateperday;
									$total_nodiscount += $rate->roomrateperday;
								}
							}
						}
					}
				}
				$this->setErrorLog('setAverageRate::Total = '.$total.' Number of days = '.$this->stayDays.' Number of rooms '.count($this->requestedRoom));
				$rpn = ($total / count($this->requestedRoom)) / $stayDays;

				if ($this->cfg_tariffChargesStoredWeeklyYesNo == '1') {
					$this->setErrorLog('setAverageRate::Tariffs are stored weekly ');
					$rpn = $rpn / 7;
				}
				$this->rate_pernight = $rpn;
				$this->setErrorLog('setAverageRate::Setting average rate '.$rpn);

				$rpn_nodiscount = ($total_nodiscount / count($this->requestedRoom)) / $stayDays;

				if ($this->cfg_tariffChargesStoredWeeklyYesNo == '1') {
					$rpn_nodiscount = $rpn_nodiscount / 7;
				}
				$this->rate_pernight_nodiscount = $rpn_nodiscount;

				$this->setErrorLog('setAverageRate:: Ended');
			}

			return true;
		}

		/**
		 * The alterntive method of handling price calculations. When a booking is made the price for rooms is calculated as the sum of the value of the rooms for each night/number of rooms.
		 */
		public function te_setAverageRate()
		{
			$this->setErrorLog('te_setAverageRate:: Started');
			$mrConfig = $this->mrConfig;

			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			$disc = array();
			if (!isset($mrConfig[ 'wisepriceactive' ]) || empty($mrConfig[ 'wisepriceactive' ])) {
				$mrConfig[ 'wisepriceactive' ] = '0';
			}
			if (!isset($mrConfig[ 'wisepricethreshold' ]) || empty($mrConfig[ 'wisepricethreshold' ])) {
				$mrConfig[ 'wisepricethreshold' ] = '60';
			}
			$wisepricethreshold = (int) $mrConfig[ 'wisepricethreshold' ];
			$tmpBookingHandler->updateBookingField('wiseprice_discount', $disc);

			$datesTilBooking = $this->findDateRangeForDates($this->today, $this->arrivalDate);
			$dateRangeArray = explode(',', $this->dateRangeString);
			$stayDays = $this->stayDays;
			$this->build_tariff_to_date_map();

			foreach ($this->requestedRoom as $rt) {
				$calculated_price_per_room_per_day = 0.00;
				$rm = explode('^', $rt);
				$tariff_id = $rm[ 1 ];
				$room_id = $rm[ 0 ];

				$query = 'SELECT tarifftype_id FROM #__jomcomp_tarifftype_rate_xref WHERE tariff_id = '.(int) $tariff_id;
				//$this->setErrorLog("te_setAverageRate::Querying __jomcomp_tarifftype_rate_xref table ".$query);
				$tarifftypeid = doSelectSql($query, 1);

				if ($tarifftypeid != false) {
					$dates = $this->micromanage_tarifftype_to_date_map[ $tarifftypeid ];
					$cumulative_price = 0.00;
					$surcharge_base = $this->allPropertyRooms[$room_id]['surcharge'];
					$surcharge_nett = $this->get_nett_price($surcharge_base, $this->accommodation_tax_rate);

					foreach ($dateRangeArray as $date) {
						$cumulative_price += $dates[ $date ][ 'price' ];
						$cumulative_price = $cumulative_price  + $surcharge_nett;
					}

					$basic_room_rate = $cumulative_price / $stayDays;

					if (count($datesTilBooking) <= $wisepricethreshold && $mrConfig[ 'wisepriceactive' ] == '1') {
						$roomType = $this->allPropertyTariffs[ $tariff_id ][ 'roomclass_uid' ];
						$percentageBooked = $this->getPercentageOfRoomsBookedForRoomtype($roomType);

						$r = $this->getDiscountedRoomrate($basic_room_rate, $percentageBooked);
						//$this->setPopupMessage("Discount rate ".$r);
						$old_room_rate = $basic_room_rate;

						$isDiscounted = false;
						if ($r < $basic_room_rate) {
							$isDiscounted = true;
							$tmpBookingHandler->updateBookingField('booking_discounted', true);
						}
						$disc[ ] = array('roomrate' => $old_room_rate, 'discountedRate' => $r, 'roomType' => $roomType, 'isDiscounted' => $isDiscounted);
						$basic_room_rate = $r;
						$tmpBookingHandler->updateBookingField('wiseprice_discount', $disc);
						$tmpBookingHandler->saveBookingData();
					} else {
						$old_room_rate = $basic_room_rate;
					}
					$this->room_allocations[ $room_id ][ 'price_per_night' ] = $basic_room_rate;
					$this->room_allocations[ $room_id ][ 'price_per_night_nodiscount' ] = $old_room_rate;
				}
			}

			$total = 0.00;
			$total_nodiscount = 0.00;
			$total_number_of_guests = 0;

			foreach ($this->room_allocations as $room) {
				if (!isset($room[ 'number_allocated' ])) {
					$room[ 'number_allocated' ] = $this->standard_guest_numbers;
				}
				$total_number_of_guests += $room[ 'number_allocated' ];
				if ($this->cfg_perPersonPerNight == '0') {
					$total += $room[ 'price_per_night' ];
					$total_nodiscount += $room[ 'price_per_night_nodiscount' ];
				} else {
					$total += ($room[ 'price_per_night' ] * $room[ 'number_allocated' ]);
					$total_nodiscount += ($room[ 'price_per_night_nodiscount' ] * $room[ 'number_allocated' ]);
				}
			}

			if ($total_number_of_guests > 0) {
				if ($this->cfg_perPersonPerNight == '1') {
					$this->rate_pernight = $total / $total_number_of_guests;
					$this->rate_pernight_nodiscount = $total_nodiscount / $total_number_of_guests;
				} else {
					$this->rate_pernight = $total / count($this->room_allocations);
					$this->rate_pernight_nodiscount = $total_nodiscount / count($this->room_allocations);
				}
			}

			$this->setErrorLog('te_setAverageRate::Setting average rate '.$this->rate_pernight);
			$this->setErrorLog('te_setAverageRate:: Ended');

			return true;
		}

		/**
		 *
		 *
		 *
		 */

		public function get_nett_price($price, $tax_rate)
		{
			$mrConfig = $this->mrConfig;
			if ($mrConfig[ 'prices_inclusive' ] == 1) {
				$divisor = ($tax_rate / 100) + 1;
				$price = $price / $divisor;
			}

			return $price;
		}

		/**
		 *
		 *
		 *
		 */

		public function get_gross_price($price, $tax_rate)
		{
			$tax = ($price / 100) * $tax_rate;

			return $price + $tax;
		}

		/**
		 *
		 *
		 *
		 */

		public function calcLastMinuteDiscount()
		{
			$mrConfig = $this->mrConfig;
			$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
			if (isset($mrConfig[ 'lastminuteactive' ]) && $mrConfig[ 'lastminuteactive' ] == '1') {
				$datesTilBooking = $this->findDateRangeForDates($this->today, $this->arrivalDate);
				$lastminutediscount = (int) $mrConfig[ 'lastminutediscount' ];
				if (count($datesTilBooking) <= (int) $mrConfig[ 'lastminutethreshold' ]) {
					$original_total = $this->room_total;
					$discount = ($this->room_total / 100) * $lastminutediscount;
					$this->setErrorLog('<b>calcLastMinuteDiscount:: Discount calculated: '.$discount.'</b>');
					$this->room_total = $this->room_total - $discount;
					$this->total_discount = $discount;
					$this->setErrorLog('<b>calcLastMinuteDiscount:: Room total modified to: '.$this->room_total.'</b>');
					$disc_txt = jr_gettext('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', false).' '.jr_gettext('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', false).': '.output_price($this->get_gross_price($discount,$this->accommodation_tax_rate));
					$this->echo_populate_div('; populateDiv("discount","'.$disc_txt.'")');
					$tmpBookingHandler->updateBookingField('lastminutediscount', $disc_txt);
					$tmpBookingHandler->updateBookingField('booking_discounted', true);
					$this->discounts[] = array('type' => 'SRP', 'roomtypeabbr' => 'N/A', 'discountfrom' => $original_total, 'discountto' => $this->room_total);
				} else {
					$this->echo_populate_div('; populateDiv("discount","&nbsp;")');
					$tmpBookingHandler->updateBookingField('lastminutediscount', jr_gettext('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', false));
				}
				$tmpBookingHandler->updateBookingField('discounts', $this->discounts);
			} else {
				$this->echo_populate_div('; populateDiv("discount","&nbsp;")');
				$tmpBookingHandler->updateBookingField('lastminutediscount', jr_gettext('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', false));
			}
		}

		private function get_modifiers()
		{
			reset($this->allPropertyTariffs);
			$first_key = key($this->allPropertyTariffs);

			return $this->allPropertyTariffs[$first_key]["modifiers"];
		}


		/**
		 *
		 *
		 *
		 */

		public function generateBilling()
		{
			$this->setErrorLog('generateBilling:: Starting');
			$this->forcedExtras = array();

			$this->setErrorLog('generateBilling:: Checking requested room count ');
			if (!empty($this->requestedRoom) || !get_showtime('include_room_booking_functionality')) {
				$this->setErrorLog('generateBilling:: Starting makeRatePerNight');
				if ($this->makeRatePerNight()) {
					$this->setErrorLog('generateBilling:: Starting setVariantValues');
					if ($this->setVariantValues()) {
						$this->setErrorLog(':: Starting makeNightlyRoomCharges');
						if ($this->makeNightlyRoomCharges()) {
							$this->setErrorLog('generateBilling:: Starting calcSinglePersonSuppliment');
							$this->calcSinglePersonSuppliment();
							$this->setErrorLog('generateBilling:: Starting calcTax');
							$this->setErrorLog('generateBilling:: Starting calcLastMinuteDiscount');
							if ($this->cfg_singleRoomProperty == 1) {
								$this->calcLastMinuteDiscount();
							}
							$this->calcTax();

							$this->calcExtras();

							$this->setErrorLog('generateBilling:: Starting calcTotals');
							$this->calcTotals();

							$this->setErrorLog('generateBilling:: Starting calcDeposit');
							$this->calcDeposit();
							if ($this->cfg_singleRoomProperty == 0) {
								$this->outputDiscounts();
							}
						} else {
							$this->setErrorLog('<b>generateBilling:: Unable to make nightly room charges</b>');
						}
					} else {
						$this->setErrorLog('<b>generateBilling:: Unable to set Variant Values</b>');
					}
				} else {
					$this->setErrorLog('<b>generateBilling:: Unable to make rateper night</b>');
				}
			} else {
				$this->setErrorLog('<b>generateBilling:: Requested room count = 0</b>');
			}
			$this->setErrorLog('generateBilling:: Ending');
		}

		/**
		 *
		 *
		 *
		 */

		public function addBookingNote($context, $note)
		{
			$this->booking_notes[ $context ] = $note;
		}

		private static $mktimes = array();

		/**
		 *
		 *
		 *
		 */

		public function getMkTime($date)
		{
			if ($date =='') {
				return false;
			}
			if (!isset(self::$mktimes[ $date ])) {
				$date_elements = explode('/', $date);
				self::$mktimes[ $date ] = mktime(0, 0, 0, (int)$date_elements[ 1 ], (int)$date_elements[ 2 ], (int) $date_elements[ 0 ]);
			}

			return self::$mktimes[ $date ];
		}



		/**
		 *
		// This function is designed to check with the Jomres system to see if the email address this user is trying to use can be used.
		// Scenario :
		// If the system is configured to create a new user when a booking is made, then naturally the first time an email address is used, a new user is created.
		// If, then, somebody else comes along and tries to use the same email address a booking isn't correctly made.
		// This function will ping the handlereq task, sending the email address. handlereq will look to see if the system is configured to create new users. If it is, and the current user isn't logged in
		// but the email address is already in use by another user, then the booking form will not enable the submit button and the current user will be prompted to either log in, or use another email address.
		// If the system is not configured to create new users then a new user isn't created anyway, in which case Jomres will simply return that it's ok to use the email address
		// Managers can re-use email addresses
		 *
		 */

		public function email_usage_check($email)
		{
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			$thisJRUser = jomres_getSingleton('jr_user');

			$jrConfig[ 'useNewusers' ] = '1'; // For Jomres v9.11 and GDPR compliance we are now forcing the system to create new users whenever a booking is made

			if (trim($email) == '') { // Presumably, we're at the start of the booking and the email address hasn't been filled yet
				$this->email_address_can_be_used = true;
			}

			$jrConfig[ 'useNewusers' ] = '1'; // For Jomres v9.11 and GDPR compliance we are now forcing the system to create new users whenever a booking is made

			if ($this->amend_contract) { // Managers can re-use email addresses of guests.
				$this->email_address_can_be_used = true;
			} else {
				if ($jrConfig[ 'useNewusers' ] == '0') { // We don't create new users on bookings from non-registered bookers, so it's ok to re-use an email address.
					$this->email_address_can_be_used = true;
				} else {
					// We're going to ensure that registered users can't use another registered user's email.
					$all_users = jomres_cmsspecific_getCMSUsers();
					$email_found = false;
					foreach ($all_users as $user_id => $user) {
						if ($user[ 'email' ] == $email) {
							$email_found = true;
						}
					}

					if ($email_found) {
						if ($thisJRUser->userIsManager) { // At this point we have a manager who is using the dropdown to select a guest's details
							$this->email_address_can_be_used = true;
						} else {
							if ($thisJRUser->userIsRegistered) {
								$users_id = jomres_cmsspecific_getcurrentusers_id();
								$stored_email = $all_users[ $users_id ][ 'email' ];
								if ($stored_email == $email) {
									$this->email_address_can_be_used = true;
								} else {
									$this->email_address_can_be_used = false;
								}
							} else {
								$this->email_address_can_be_used = false;
							}
						}
					} else {
						$this->email_address_can_be_used = true;
					}
				}
			}

			unset($all_users);

			return $this->email_address_can_be_used;
		}


		public function build_adults_dropdown()
		{
			jr_import('booking_engine_adults_dropdown');
			$booking_engine_adults_dropdown = new booking_engine_adults_dropdown($this);
			return $booking_engine_adults_dropdown->build_adults_dropdown();
		}

		public function build_children_dropdowns()
		{
			jr_import('booking_engine_children_dropdown');
			$booking_engine_children_dropdown = new booking_engine_children_dropdown($this);
			return $booking_engine_children_dropdown->build_children_dropdowns();
		}

		public function set_child_selection($guest_index, $value)
		{
			$this->child_numbers[$guest_index] = $value;
		}

		public function build_children_selectors()
		{

			$child_dropdowns = $this->build_children_dropdowns();

			$tmpl = new patTemplate();
			$tmpl->addRows('child_dropdowns', $child_dropdowns);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('booking_form_child_selectors.html');
			return $tmpl->getParsedTemplate();
		}

		public function calculate_child_prices()
		{
			jr_import('booking_engine_calculate_child_prices');
			$booking_engine_calculate_child_prices = new booking_engine_calculate_child_prices($this);
			$this->child_prices = $booking_engine_calculate_child_prices->calculate_child_prices($this);


			$context = 'children_';
			foreach ($this->child_prices as $index => $child_set) {
				if ($index != "total_price") {
					$price = $child_set['price'];
					$number_of_children = $child_set['number_of_children'];
					$age_from = $child_set['rate']['age_from'];
					$age_to = $child_set['rate']['age_to'];

					if ($child_set['rate']['model'] == 'per_night') {
						$model = jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', false);
					} else {
						$model = jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', false);
					}
					$text_children = jr_gettext('_JOMRES_SEARCH_FORM_CHILDREN', '_JOMRES_SEARCH_FORM_CHILDREN', false);
					$text_age_from = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', false);
					$text_age_to = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', false);

					$description = $number_of_children." x ".$text_children." ".$text_age_from." ".$age_from." - ".$age_to." (".$model.")";
					$this->add_additiional_line_item(
						$context."_".$child_set['rate']['id'],
						$child_set['rate']['id'],
						$description,
						$total_value = $price,
						$tax_code_id =  $this->mrConfig[ 'accommodation_tax_code' ]
					);
				}
			}
		}
	}
