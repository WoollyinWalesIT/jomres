<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Inserts a booking after confirmation and payment, triggers a variety of configuration numbers, creates the guest user if required
	 */

class j03020insertbooking
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
	 
	public $insertSuccessful = true;
	public $insertBookingEventValues = array();
	public $secret_key_payment = false;

	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$mrConfig = getPropertySpecificSettings();
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$jrConfig[ 'useNewusers' ] = '1'; // For Jomres v9.11 and GDPR compliance we are now forcing the system to create new users whenever a booking is made
		
		$secret_key_payment = false;

		$depositPaid = $componentArgs[ 'depositPaid' ];
		if (isset($componentArgs[ 'usejomressessionasCartid' ])) {
			$usejomressessionasCartid = $componentArgs[ 'usejomressessionasCartid' ];
		} else {
			$usejomressessionasCartid = false;
		}
		$usejomressessionasCartid = false;
		$jomresProccessingBookingObject = getCurrentBookingData(get_showtime('jomressession'));
		$guestDetails = $jomresProccessingBookingObject->guestDetails;
		$tempBookingDataList = $jomresProccessingBookingObject->tempBookingDataList;
		system_log('j03020insertbooking :: Attempting to insert booking jsid: '.get_showtime('jomressession'));

		if ($jrConfig['useGlobalCurrency'] == 1) {
			$ccode = $jrConfig['globalCurrencyCode'];
		} else {
			$ccode = $mrConfig['property_currencycode'];
		}

		$datetime = date('Y-m-d H:i:s');

		if (empty($guestDetails)) {
			trigger_error('Failed to insert booking: No guest details ', E_USER_ERROR);
			$this->insertSuccessful = false;
		}
		if (empty($tempBookingDataList)) {
			system_log('j03020insertbooking :: Failed to insert booking: Booking data not found. Probably already booking inserted. '.get_showtime('jomressession'));
			$this->insertSuccessful = false;
			echo 'Booking already made';
		}

		if ($this->insertSuccessful) {
			if (isset($tmpBookingHandler->tmpbooking[ 'amend_contract' ])) {
				set_showtime('booking_amended', true);
				set_showtime('amended_contractuid', $tmpBookingHandler->getBookingFieldVal('amend_contractuid'));
				$amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');
				$amend_contractuid = $tmpBookingHandler->getBookingFieldVal('amend_contractuid');
			} else {
				set_showtime('booking_amended', false);
				$amend_contract = 0;
				$amend_contractuid = 0;
			}

			$adults = (int)$tmpBookingHandler->tmpbooking['standard_guest_numbers'] + $tmpBookingHandler->tmpbooking['extra_guest_numbers'];
			$children = 0;
			if (!empty($tmpBookingHandler->tmpbooking['child_numbers'])) {
				foreach ($tmpBookingHandler->tmpbooking['child_numbers'] as $child_type) {
					$children = $children + (int)$child_type;
				}
			}

			if ($amend_contract && $amend_contractuid != 0 && $thisJRUser->userIsManager) {
				//Booking amendment code
				system_log('j03020insertbooking :: Amending contract. '.$amend_contractuid.' for '.get_showtime('jomressession'));

				$guests_uid = insertGuestDeets(get_showtime('jomressession'));

				foreach ($tempBookingDataList as $tempBookingData) {
					$requestedRoom = $tempBookingData->requestedRoom;
					$arrivalDate = $tempBookingData->arrivalDate;
					$departureDate = $tempBookingData->departureDate;
					$dateRangeString = $tempBookingData->dateRangeString;
					$property_uid = $tempBookingData->property_uid;
					$rates_uid = $tempBookingData->rates_uid;
					$single_person_suppliment = $tempBookingData->single_person_suppliment;
					$deposit_required = $tempBookingData->deposit_required;
					$contract_total = $tempBookingData->contract_total;
					$extras = $tempBookingData->extras;
					$extrasquantities = $tempBookingData->extrasquantities;
					$extrasValue = $tempBookingData->extrasvalue;
					$specialReqs = addslashes($tempBookingData->error_log);
					$room_total = $tempBookingData->room_total;
					$tax = $tempBookingData->tax;

					// The extras quantites is passed with ALL extra uids and default quanties. At this point we will strip out the extra uid that weren't actually selected before adding the serialized extras quantities to the db
					$tmpextrasquantities = array();
					$currentExtras = explode(',', $extras);
					if (!empty($currentExtras) && is_array($extrasquantities)) {
						foreach ($extrasquantities as $id => $quan) {
							if (in_array($id, $currentExtras)) {
								$tmpextrasquantities[ $id ] = $quan;
							}
						}
						$extrasquantities = serialize($tmpextrasquantities);
					} else {
						$extrasquantities = '';
					}

					// Let's get our guest type data
					$tmpArray = array();
					$variancetypes = explode(',', $tempBookingData->variancetypes);
					$varianceuids = explode(',', $tempBookingData->varianceuids);
					$varianceqty = explode(',', $tempBookingData->varianceqty);
					$variancevals = explode(',', $tempBookingData->variancevals);
					$n = count($variancetypes);
					for ($i = 0; $i < $n; ++$i) {
						if ($variancetypes[ $i ] == 'guesttype' && $varianceqty[ $i ] > 0) {
							$id = $varianceuids[ $i ];
							$qty = $varianceqty[ $i ];
							$val = $variancevals[ $i ];
							$tmpArray[ ] = array('id' => $id, 'qty' => $qty, 'val' => $val);
						}
					}

					$rateRules = '';
					if (!empty($tmpArray)) {
						foreach ($tmpArray as $guestTypes) {
							$rateRules .= 'guesttype'.'_'.$guestTypes[ 'id' ].'_'.$guestTypes[ 'qty' ].'_'.$guestTypes[ 'val' ].',';
						}
					}

					$mrConfig = getPropertySpecificSettings($property_uid);
				}

				$query = "UPDATE #__jomres_contracts SET
					`arrival` 					= '$arrivalDate',
					`departure`					= '$departureDate',
					`rates_uid`					= '".(int) $rates_uid."',
					`guest_uid`					= '$guests_uid',
					`rate_rules`				= '$rateRules',
					`rooms_tariffs`				= '$requestedRoom',
					`contract_total`			= '$contract_total',
					`special_reqs`				= '$specialReqs',
					`deposit_required`			= '$deposit_required',
					`date_range_string`			= '$dateRangeString',
					`property_uid`				= '$property_uid',
					`single_person_suppliment`	= '$single_person_suppliment',
					`extras`					= '$extras',
					`extrasquantities`			= '$extrasquantities',
					`extrasvalue`				= '$extrasValue',
					`tax`						= '$tax',
					`room_total`				= '$room_total',
					`currency_code` 			= '$ccode',
					`adults`					= $adults,
					`children`					= $children,
					`discount_details` 			= '".serialize($tempBookingData->discounts)."',
					`approved`		 			= '1'
					WHERE contract_uid = '$amend_contractuid'";

				if (!doInsertSql($query, '', false)) {
					trigger_error('Failed to update contract details for booking amendment', E_USER_ERROR);
					$this->insertSuccessful = false;
				}

				jomres_audit(get_showtime('jomressession'), 'Amend booking - contract updated '.$amend_contractuid);
				$dt = date('Y-m-d H:i:s');
				$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $amend_contractuid."','".RemoveXSS('Amend booking - contract updated '.$amend_contractuid)."','$dt','".(int) $property_uid."')";
				doInsertSql($query, '');

				$rates_uids = array();
				if (get_showtime('include_room_booking_functionality')) {
					// Delete exisiting room booking - may be the same but easier to delete and insert
					$query = "DELETE FROM #__jomres_room_bookings WHERE contract_uid = '$amend_contractuid'";
					if (!doInsertSql($query, '')) {
						trigger_error('Unable to delete from room bookings table, mysql db failure', E_USER_ERROR);
					}

					$dateRangeArray = explode(',', $dateRangeString);
					for ($i = 0, $n = count($dateRangeArray); $i < $n; ++$i) {
						$roomBookedDate = $dateRangeArray[ $i ];
						$internetBooking = 0;
						$receptionBooking = 1;
						$selected = explode(',', $requestedRoom);
						foreach ($selected as $roomsRequested) {
							$rm = explode('^', $roomsRequested);
							$rmuid = $rm[ 0 ];
							$rates_uids[ ] = $rm[ 1 ];

							$query = "INSERT INTO #__jomres_room_bookings (`room_uid`,`date`,`contract_uid`,`internet_booking`,`reception_booking`,`property_uid`) VALUES ('$rmuid','$roomBookedDate','$amend_contractuid','$internetBooking','$receptionBooking','$property_uid')";
							if (!doInsertSql($query, '')) {
								trigger_error('Failed to insert booking when inserting to contracts table ', E_USER_ERROR);
								$this->insertSuccessful = false;
							}
						}
					}
				}

				$bookingNotes = $tempBookingData->booking_notes;
				foreach ($bookingNotes as $k => $v) {
					$note = ' '.strip_tags($k).' '.strip_tags($v).'<br/>';
					$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $amend_contractuid."','".$note."','$dt','".(int) $property_uid."')";
					doInsertSql($query, '');
				}
				
				jomres_audit(get_showtime('jomressession'), 'Amend booking - updated room booking '.$amend_contractuid);
				$jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
				$jomres_messaging->set_message('Amend booking - updated room booking '.$amend_contractuid);
				
				$rates_uids = array_unique($rates_uids);

				$this->insertBookingEventValues[ 'cartnumber' ] = $amend_contractuid;
				$this->insertBookingEventValues[ 'tempBookingDataList' ] = $tempBookingDataList;
				$this->insertBookingEventValues[ 'guestDetails' ] = $guestDetails;
				$this->insertBookingEventValues[ 'guests_uid' ] = $guests_uid;
				$this->insertBookingEventValues[ 'property_uid' ] = $property_uid;
				$this->insertBookingEventValues[ 'arrivalDate' ] = $arrivalDate;
				$this->insertBookingEventValues[ 'departureDate' ] = $departureDate;
				$this->insertBookingEventValues[ 'contract_total' ] = $contract_total;
				$this->insertBookingEventValues[ 'rates_uids' ] = $rates_uids;
				$this->insertBookingEventValues[ 'requestedRoom' ] = $roomsRequested;
				$this->insertBookingEventValues[ 'contract_uid' ] = $amend_contractuid;
				$this->insertBookingEventValues[ 'insertSuccessful' ] = $this->insertSuccessful;

				$MiniComponents->triggerEvent('03025', $componentArgs); // Generate invoice

				if ($this->insertSuccessful) {
					system_log('j03020insertbooking :: Booking amendment successful ');
				} else {
					system_log('j03020insertbooking :: Booking amendment failed ');
				}
				
				
				$webhook_notification							   = new stdClass();
				$webhook_notification->webhook_event				= 'booking_modified';
				$webhook_notification->webhook_event_description	= 'Logs when a booking is modified.';
				$webhook_notification->webhook_event_plugin		 = 'core';
				$webhook_notification->data						 = new stdClass();
				$webhook_notification->data->property_uid		   = $property_uid;
				$webhook_notification->data->contract_uid		   = $amend_contractuid;
				add_webhook_notification($webhook_notification);
				// End Amendment insertion
			} else {
				// New booking insertion
				$new_user_id = 0;

				if ($jrConfig[ 'useNewusers' ] == '1') {
					$all_cms_users = jomres_cmsspecific_getCMSUsers();
					
					$cms_user_id = 0;
					foreach ($all_cms_users as $id => $user) {  // It's possible that it's a manager making a booking, therefore we will search the existing cms users to find their cms_user_id. If found, we'll set the new_booking_user_id variable to this id
						if ($user['email'] == $guestDetails->email) {
							$cms_user_id = $id;
							set_showtime("new_booking_user_id", $cms_user_id);
						}
					}

					if ($cms_user_id == 0) {
						$cms_user_id = jomres_cmsspecific_createNewUser($guestDetails->email);
					}

					if ($cms_user_id > 0) {
						$new_booking_user_id = get_showtime("new_booking_user_id");
						if (!$thisJRUser->is_partner) {
							if (is_null($new_booking_user_id) && $thisJRUser->userIsRegistered == false) { // There's been some confusion (because I'm dim) as to who the cms_user_id refers to, it can either be a manager/receptionist, or the guest themselves so this is designed to definitively decide to make the $new_booking_user_id the newly created $cms_user_id
								$new_booking_user_id = $cms_user_id;
							}

							$already_exists =false;
							if ($thisJRUser->userIsRegistered) {
								$already_exists =true;
								$cms_user_id = $thisJRUser->id;
							} else {
								$query = "SELECT cms_user_id FROM #__jomres_guest_profile WHERE cms_user_id = ".(int)$new_booking_user_id;
								$cms_user_id = doSelectSql($query, 1);
								if ($cms_user_id> 0) {
									$already_exists =true;
								}
							}
							jr_import('jomres_encryption');
							$jomres_encryption = new jomres_encryption();
							
							if (!$already_exists) {
								$query = "INSERT INTO #__jomres_guest_profile (
									`cms_user_id`,
									`enc_firstname`,
									`enc_surname`,
									`enc_house`,
									`enc_street`,
									`enc_town`,
									`enc_county`,
									`enc_country`,
									`enc_postcode`,
									`enc_tel_landline`,
									`enc_tel_mobile`,
									`enc_email`
									) VALUES (
									'".(int)$new_booking_user_id."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['firstname'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['surname'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['house'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['street'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['town'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['region'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['country'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['postcode'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['tel_landline'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['tel_mobile'])."',
									'".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['email'])."'
									)";
								doInsertSql($query, '');
							} else {
								$query = "UPDATE #__jomres_guest_profile SET 
									`enc_firstname` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['firstname'])."',
									`enc_surname` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['surname'])."',
									`enc_house` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['house'])."',
									`enc_street` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['street'])."',
									`enc_town` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['town'])."',
									`enc_county` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['region'])."',
									`enc_country` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['country'])."',
									`enc_postcode` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['postcode'])."',
									`enc_tel_landline` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['tel_landline'])."',
									`enc_tel_mobile` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['tel_mobile'])."',
									`enc_email` = '".$jomres_encryption->encrypt($tmpBookingHandler->tmpguest['email'])."'
									WHERE 
									`cms_user_id` = ".(int)$new_booking_user_id;
								doInsertSql($query, '');
							}
							$thisJRUser->init_user($new_booking_user_id); // Reinitialise the JR User object
						}
						set_showtime("new_booking_user_id", $new_booking_user_id);
					} else {
						throw new Exception('Did not receive a valid user id after attempting to create/validate a new user in the insert booking script');
					}
				}

				$guests_uid = insertGuestDeets(get_showtime('jomressession'));

				$cartnumber = get_booking_number();

				if (trim($cartnumber) == '') {
					$cartnumber = jomresGetParam($_REQUEST, 'booking_number', '');
				}

				if ((int) $mrConfig['requireApproval'] == 1) {
					if ($thisJRUser->userIsManager) {
						$approved = 1;
					} else {
						$secret_key_payment = $tmpBookingHandler->getBookingFieldVal('secret_key_payment');
						$approved = 0;
					}
				} else {
					$approved = 1;
				}

				system_log('j03020insertbooking :: Setting cart number. '.$cartnumber.' for '.get_showtime('jomressession'));

				foreach ($tempBookingDataList as $tempBookingData) {
					$requestedRoom = $tempBookingData->requestedRoom;

					$arrivalDate = $tempBookingData->arrivalDate;
					$departureDate = $tempBookingData->departureDate;
					$dateRangeString = $tempBookingData->dateRangeString;
					$property_uid = (int) $tempBookingData->property_uid;
					$rates_uid = $tempBookingData->rates_uid;
					$single_person_suppliment = $tempBookingData->single_person_suppliment;
					$deposit_required = $tempBookingData->deposit_required;
					$contract_total = $tempBookingData->contract_total;
					$extras = $tempBookingData->extras;
					$extrasquantities = $tempBookingData->extrasquantities;
					$extrasValue = $tempBookingData->extrasvalue;
					$specialReqs = addslashes($tempBookingData->error_log);
					$discount = $tempBookingData->discounts;
					$room_total = $tempBookingData->room_total;
					$tax = $tempBookingData->tax;
					$coupon_id = $tempBookingData->coupon_id;
					$booked_in = $tempBookingData->booked_in;
					$sendGuestEmail = $tempBookingData->sendGuestEmail;
					$sendHotelEmail = $tempBookingData->sendHotelEmail;
					
					$channel_manager_booking = 0;
					if (isset($tempBookingData->channel_manager_booking)) {
						$channel_manager_booking = $tempBookingData->channel_manager_booking;
					}

					if ($thisJRUser->userIsRegistered) { // The user is already registered
						$user = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($thisJRUser->id);
						$bookersUsername = $user[ $thisJRUser->id ][ 'username' ];
					} elseif ($new_user_id > 0 && !$thisJRUser->userIsRegistered) { // If a new user isn't created, then $new_user_id will be -1. The idea here is to get the new username of the newly created users
						$user = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($new_user_id);
						$bookersUsername = $user[ $new_user_id ][ 'username' ];
					} else { // Booked by a non-logged in user
						$bookersUsername = $tmpBookingHandler->tmpguest['firstname'].' '.$tmpBookingHandler->tmpguest['surname'];
					}

					system_log('j03020insertbooking :: Basic details set ');

					// The extras quantites is passed with ALL extra uids and default quanties. At this point we will strip out the extra uid that weren't actually selected before adding the serialized extras quantities to the db
					$tmpextrasquantities = array();
					$currentExtras = explode(',', $extras);
					if (!empty($currentExtras) && is_array($extrasquantities)) {
						foreach ($extrasquantities as $id => $quan) {
							if (in_array($id, $currentExtras)) {
								$tmpextrasquantities[ $id ] = $quan;
							}
						}
						$extrasquantities = serialize($tmpextrasquantities);
					} else {
						$extrasquantities = '';
					}

					$resource = $tempBookingData->resource;
					if ($resource == '1') {
						$depositPaid = 1;
					}

					$discount_details = '';
					if (!empty($discount)) {
						foreach ($discount as $d) {
							$discount_details .= serialize($d);
						}
					}

					if (!$secret_key_payment) {
						system_log('j03020insertbooking :: Not a secret key booking ');
						// Now to double check that the rooms haven't been booked while this person was paying
						$dateRangeArray = explode(',', $dateRangeString);
						if (get_showtime('include_room_booking_functionality')) {
							for ($i = 0, $n = count($dateRangeArray); $i < $n; ++$i) {
								$roomBookedDate = $dateRangeArray[ $i ];
								$selected = explode(',', $requestedRoom);
								foreach ($selected as $roomsRequested) {
									$rm = explode('^', $roomsRequested);
									$rmuid = $rm[ 0 ];
									$rates_uids[ ] = $rm[ 1 ];
									$query = "SELECT room_bookings_uid FROM #__jomres_room_bookings WHERE `room_uid` = '".(int) $rmuid."' AND `date` = '".$roomBookedDate."'";
									$result = doSelectSql($query);
									if (!empty($result)) {
										system_log('j03020insertbooking :: Failed to insert booking looks like the room has been double booked ');
										if (get_showtime("task") == 'processpayment') { // We don't want to trigger errors if this script is being called by other sources such as channel manager import scripts.
											trigger_error('Failed to insert booking looks like the room has been double booked ', E_USER_ERROR);
										}
										$this->insertSuccessful = false;

										return false;
									}
								}
							}
							system_log('j03020insertbooking :: Room(s) have not been double booked ');
						}
					}

					system_log('j03020insertbooking :: Getting guest type data ');
					// Let's get our guest type data
					$tmpArray = array();
					$variancetypes = explode(',', $tempBookingData->variancetypes);
					$varianceuids = explode(',', $tempBookingData->varianceuids);
					$varianceqty = explode(',', $tempBookingData->varianceqty);
					$variancevals = explode(',', $tempBookingData->variancevals);
					$n = count($variancetypes);
					for ($i = 0; $i < $n; ++$i) {
						if ($variancetypes[ $i ] == 'guesttype' && $varianceqty[ $i ] > 0) {
							$id = $varianceuids[ $i ];
							$qty = $varianceqty[ $i ];
							$val = $variancevals[ $i ];
							$tmpArray[ ] = array('id' => $id, 'qty' => $qty, 'val' => $val);
						}
					}
					$rateRules = '';
					if (count($tmpArray) > 0) {
						foreach ($tmpArray as $guestTypes) {
							$rateRules .= 'guesttype'.'_'.$guestTypes[ 'id' ].'_'.$guestTypes[ 'qty' ].'_'.$guestTypes[ 'val' ].',';
						}
					}
					//$mrConfig = getPropertySpecificSettings( $property_uid );
				}

				jr_import('jomres_contract_secret_key');
				$jomres_contract_secret_key = new jomres_contract_secret_key();
				$secret_key = $jomres_contract_secret_key->generate_secret_key();

				$query = "SELECT id FROM #__jomres_booking_data_archive WHERE tag = '".$cartnumber."'";
				$booking_data_archive_id = (int) doSelectSql($query, 1);

				system_log('Referrer '.serialize($tmpBookingHandler->tmpbooking[ 'referrer' ]));

				if (!isset($tmpBookingHandler->tmpbooking[ 'referrer' ]) || $tmpBookingHandler->tmpbooking[ 'referrer' ] == '') {
					$tmpBookingHandler->tmpbooking[ 'referrer' ] = jr_gettext('_JOMRES_REFERRER_SYSTEM', '_JOMRES_REFERRER_SYSTEM', false);
				}

				if (!$secret_key_payment) {
					$query = "INSERT INTO #__jomres_contracts (
						`arrival`, 
						`departure`, 
						`rates_uid`, 
						`guest_uid`, 
						`rate_rules`, 
						`rooms_tariffs`, 
						`contract_total`, 
						`special_reqs`, 
						`deposit_paid`, 
						`deposit_required`, 
						`date_range_string`, 
						`booked_in`, 
						`booked_out`, 
						`property_uid`, 
						`single_person_suppliment`, 
						`extras`, 
						`extrasquantities`, 
						`extrasvalue`, 
						`tax`, 
						`tag`, 
						`timestamp`, 
						`room_total`, 
						`discount`, 
						`currency_code`, 
                        `adults` ,
						`children` ,
						`discount_details`, 
						`username`,
						`coupon_id`,
						`channel_manager_booking`,
						`approved`,
						`booking_data_archive_id`,
						`secret_key`,
						`booking_language`,
						`referrer`
						)
					VALUES (
						'$arrivalDate',
						'$departureDate',
						".(int) $rates_uid.",
						".(int) $guests_uid.",
						'$rateRules',
						'".(string) $requestedRoom."', 
						".(float) $contract_total.",
						'$specialReqs',
						".(int) $depositPaid.",
						".(float) $deposit_required.",
						'$dateRangeString',
						".(int) $booked_in.",
						0,
						" .(int) $property_uid.",
						".(float) $single_person_suppliment.",
						'$extras',
						'".(string) $extrasquantities."',
						".(float) $extrasValue.",
						".(float) $tax.",
						'$cartnumber',
						'$datetime',
						".(float) $room_total.",
						".(float) $discount.",
						'$ccode',
						".$adults.",
						".$children.",
						'".$discount_details."',
						'".$bookersUsername."',
						".(int) $coupon_id.",
						".(int) $channel_manager_booking.",
						".(int) $approved.",
						".(int) $booking_data_archive_id.", 
						'".$secret_key."', 
						'".get_showtime('lang')."', 
						'".$tmpBookingHandler->tmpbooking[ 'referrer' ]."'
						)";

					$contract_uid = doInsertSql($query, '');
					system_log('Insert query '.$query);
					if ($booking_data_archive_id > 0) { // Quick bookings will log a mysql error, but quick bookings don't use the booking data archive.
						$query = 'UPDATE #__jomres_booking_data_archive SET contract_uid = '.$contract_uid.' WHERE id = '.$booking_data_archive_id;
						doInsertSql($query, '');
					}

					if ($mrConfig[ 'singleRoomProperty' ] == 1) {
						$newtext = strip_tags($tmpBookingHandler->getBookingFieldVal('lastminutediscount'));
					} else {
						$newtext = strip_tags($tmpBookingHandler->getBookingFieldVal('wisepricediscount'));
					}

					if (trim($newtext) != '') {
						$dt = date('Y-m-d H:i:s');
						$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','".RemoveXSS($newtext)."','$dt','".(int) $property_uid."')";
						doInsertSql($query, '');
					}


					if (empty($contract_uid)) {
						trigger_error('Failed to insert booking when inserting to contracts table ', E_USER_ERROR);
						$this->insertSuccessful = false;
					}

					$rates_uids = array();
					if (get_showtime('include_room_booking_functionality')) {
						if ((int) $mrConfig['requireApproval'] == 0 || ((int) $mrConfig['requireApproval'] == 1 && $thisJRUser->userIsManager) || $secret_key_payment) {
							$dateRangeArray = explode(',', $dateRangeString);
							for ($i = 0, $n = count($dateRangeArray); $i < $n; ++$i) {
								$roomBookedDate = $dateRangeArray[ $i ];
								if ($thisJRUser->userIsManager) {
									$internetBooking = 0;
									$receptionBooking = 1;
								} else {
									$internetBooking = 1;
									$receptionBooking = 0;
								}
								$selected = explode(',', $requestedRoom);
								foreach ($selected as $roomsRequested) {
									$rm = explode('^', $roomsRequested);
									$rmuid = $rm[ 0 ];
									$rates_uids[ ] = $rm[ 1 ];
									$query = "INSERT INTO #__jomres_room_bookings (`room_uid`,`date`,`contract_uid`,`internet_booking`,`reception_booking`,`property_uid`) VALUES ('".(int) $rmuid."','$roomBookedDate','".(int) $contract_uid."','".(int) $internetBooking."','".(int) $receptionBooking."','".(int) $property_uid."')";
									if (!doInsertSql($query, '')) {
										trigger_error('Failed to insert booking when inserting to room bookings table ', E_USER_ERROR);
										$this->insertSuccessful = false;
									}
									jomres_audit(get_showtime('jomressession'), 'Booked room '.$cartnumber);
								}
							}
						}

						if ($thisJRUser->is_partner) {
							$query = 'INSERT INTO #__jomres_partner_bookings (`contract_uid`,`partner_id`) VALUES ('.(int) $contract_uid.' , '.$thisJRUser->id.' ) ';
							doInsertSql($query);
						}

						$rates_uids = array_unique($rates_uids);

						jomres_audit($cartnumber, jr_gettext('_JOMRES_MR_AUDIT_BOOKED_ROOM', '_JOMRES_MR_AUDIT_BOOKED_ROOM', false));
					}
				} else {
					$contract_uid = (int) $tmpBookingHandler->getBookingFieldVal('approval_contract_uid');

					if ((int) $depositPaid == 1) {
						$deposit_paid_clause = ", deposit_paid = '1'";
					}

					//mark the secret key as used
					$query = "UPDATE #__jomres_contracts SET secret_key_used = '1' $deposit_paid_clause WHERE contract_uid = '".$contract_uid."' ";
					doInsertSql($query, '');
					

					//add a booking note that the booking enquiry has been approved
					$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','".'Secret key payment made'."','".date('Y-m-d H:i:s')."','".(int) $property_uid."')";
					doInsertSql($query, '');

					$this->insertSuccessful = true;
				}

				// Update the contract with the number of bookings and number of no shows for this guest's email address. Doing it at this point means that this booking is not taken into account.
				jr_import('jomres_syndicate_guests');
				$jomres_syndicate_guests = new jomres_syndicate_guests();
				$response = $jomres_syndicate_guests->get_booking_stats_for_guest($tmpBookingHandler->tmpguest['email']);
					
				$query = "UPDATE #__jomres_contracts SET network_stats  = '".json_encode($response)."' WHERE contract_uid = '".$contract_uid."' ";
				doInsertSql($query, '');
				
				$componentArgs = array();
				$componentArgs[ 'cartnumber' ] = $cartnumber;
				$componentArgs[ 'tempBookingDataList' ] = $tempBookingDataList;
				$componentArgs[ 'guestDetails' ] = $guestDetails;
				$componentArgs[ 'guests_uid' ] = $guests_uid;
				$componentArgs[ 'property_uid' ] = $property_uid;
				$componentArgs[ 'arrivalDate' ] = $arrivalDate;
				$componentArgs[ 'departureDate' ] = $departureDate;
				$componentArgs[ 'contract_total' ] = $contract_total;
				$componentArgs[ 'extrasValue' ] = $extrasValue;
				$componentArgs[ 'room_total' ] = $room_total;
				$componentArgs[ 'rates_uids' ] = $rates_uids;
				$componentArgs[ 'requestedRoom' ] = $requestedRoom;
				$componentArgs[ 'contract_uid' ] = $contract_uid;
				$componentArgs[ 'specialReqs' ] = $specialReqs;
				$componentArgs[ 'extras' ] = $extras;
				$componentArgs[ 'deposit_required' ] = $deposit_required;
				$componentArgs[ 'sendGuestEmail' ] = $sendGuestEmail;
				$componentArgs[ 'sendHotelEmail' ] = $sendHotelEmail;
				$componentArgs[ 'approved' ] = $approved;
				$componentArgs[ 'channel_manager_booking' ] = $channel_manager_booking;

				if ($secret_key_payment) {
					$componentArgs[ 'secret_key_payment' ] = true;
				} else {
					$componentArgs[ 'secret_key_payment' ] = false;
				}

				if ($this->insertSuccessful) {
					$MiniComponents->triggerEvent('03025', $componentArgs); // Generate invoice
					$MiniComponents->triggerEvent('03100', $componentArgs); // Generate hotel confirmation email
					$MiniComponents->triggerEvent('03110', $componentArgs); // Generate guest confirmation email
					$MiniComponents->triggerEvent('03200', $componentArgs); // post insert booking functionality
				}

				jomres_audit('Cart number '.$cartnumber, jr_gettext('_JOMRES_MR_AUDIT_BOOKED_ROOM', '_JOMRES_MR_AUDIT_BOOKED_ROOM', false));
				$this->insertBookingEventValues[ 'cartnumber' ] = $cartnumber;
				$this->insertBookingEventValues[ 'tempBookingDataList' ] = $tempBookingDataList;
				$this->insertBookingEventValues[ 'guestDetails' ] = $guestDetails;
				$this->insertBookingEventValues[ 'guests_uid' ] = $guests_uid;
				$this->insertBookingEventValues[ 'property_uid' ] = $property_uid;
				$this->insertBookingEventValues[ 'arrivalDate' ] = $arrivalDate;
				$this->insertBookingEventValues[ 'departureDate' ] = $departureDate;
				$this->insertBookingEventValues[ 'contract_total' ] = $contract_total;
				$this->insertBookingEventValues[ 'rates_uids' ] = $rates_uids;
				$this->insertBookingEventValues[ 'requestedRoom' ] = $requestedRoom;
				$this->insertBookingEventValues[ 'contract_uid' ] = $contract_uid;

				$this->insertBookingEventValues[ 'insertSuccessful' ] = $this->insertSuccessful;
				system_log('j03020insertbooking insertBookingEventValues :: '.serialize($this->insertBookingEventValues));

				if ($this->insertSuccessful) {
					system_log('j03020insertbooking :: Booking insert Successful ');
				} else {
					system_log('j03020insertbooking :: Booking insert failed ');
				}
				
				if ($approved == 1) {
					$webhook_notification							   = new stdClass();
					$webhook_notification->webhook_event				= 'booking_added';
					$webhook_notification->webhook_event_description	= 'Logs when a booking is added.';
					$webhook_notification->webhook_event_plugin		 = 'core';
					$webhook_notification->data						 = new stdClass();
					$webhook_notification->data->property_uid		   = $property_uid;
					$webhook_notification->data->contract_uid		   = $contract_uid;
					add_webhook_notification($webhook_notification);
				}
			}

			if (!$secret_key_payment && $amend_contractuid == 0) {
				$bookingNotes = $tempBookingData->booking_notes;
				if (!empty($bookingNotes)) {
					$dt = date('Y-m-d H:i:s');
					foreach ($bookingNotes as $k => $v) {
						$note = ' '.strip_tags($k).' '.strip_tags($v).'<br/>';
						if (trim(strip_tags($v)) != '') {
							$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','".$note."','$dt','".(int) $property_uid."')";
							doInsertSql($query, '');
						}
					}
				}
			}

			if (isset($tmpBookingHandler->tmpbooking[ 'gateway' ])) {
				$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('" . (int) $contract_uid . "','" . jr_gettext('_JOMRES_PAYMENT_METHOD_USED', '_JOMRES_PAYMENT_METHOD_USED', false)." ". $tmpBookingHandler->tmpbooking[ 'gateway' ] . "','".date("Y-m-d H-i-s")."','" . (int) $property_uid . "')";
				doInsertSql($query, "");
			}
			

			//add rooms booked notes for guest bookings that require approvals
			if ((int) $mrConfig['requireApproval'] == 1 && !$thisJRUser->userIsManager && !$secret_key_payment) {
				$requestedRoom = $tempBookingData->requestedRoom;
				$selected = explode(',', $requestedRoom);
				$rmuids = array();
				foreach ($selected as $roomsRequested) {
					$rm = explode('^', $roomsRequested);
					$rmuids[] = $rm[ 0 ];
				}
				$query = 'SELECT room_uid, room_classes_uid, room_number, room_name FROM #__jomres_rooms WHERE room_uid IN ('.jomres_implode($rmuids).') ';
				$result = doSelectSql($query);

				$roomNote = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false).' ';
				foreach ($result as $r) {
					if ($r->room_number != '') {
						$roomNote .= $r->room_number.' - ';
					}
					if ($r->room_name != '') {
						$roomNote .= jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE'.$r->room_uid, stripslashes($r->room_name), false).' - ';
					}

					$roomNote .= $current_property_details->all_room_types[ (int) $r->room_classes_uid ]['room_class_abbv'];
					$roomNote .= ', ';
				}

				$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','".$roomNote."','$dt','".(int) $property_uid."')";
				doInsertSql($query, '');
			}

			//insert custom fields notes
			if (!$secret_key_payment && $amend_contractuid == 0) {
				$current_property_details->gather_data($property_uid);
				$ptype_id = $current_property_details->ptype_id;

				$jomres_custom_field_handler = jomres_singleton_abstract::getInstance('jomres_custom_field_handler');
				$allCustomFields = $jomres_custom_field_handler->getAllCustomFieldsByPtypeId($ptype_id);

				if (!empty($allCustomFields)) {
					$note = '';
					foreach ($allCustomFields as $f) {
						$formfieldname = $f[ 'fieldname' ].'_'.$f[ 'uid' ];
						if (isset($tmpBookingHandler->tmpbooking[ $formfieldname ])) {
							$note .= $f[ 'description' ].' '.$tmpBookingHandler->tmpbooking[ $formfieldname ].'<br/>';
						}
					}
					$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','".$note."','$dt','".(int) $property_uid."')";
					doInsertSql($query, '');
				}
			}

			$webhook_notification						   	= new stdClass();
			$webhook_notification->webhook_event			= 'property_state_change';
			$webhook_notification->webhook_event_description= 'A catchall webhook notification which notes that the property state has changed. Primarily designed for caching features to remove/refresh cache elements';
			$webhook_notification->data					 	= new stdClass();
			$webhook_notification->data->property_uid	   	=  $property_uid;
			add_webhook_notification($webhook_notification);

		}
	}


	public function getRetVals()
	{
		if ($this->insertSuccessful) {
			return $this->insertBookingEventValues;
		} else {
			return false;
		}
	}
}
