<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.3
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000handlereq
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        /**
         * Receives 2 calls from the booking form, processes them and returns stuff
         * Call 1: Notes the changed details. Sanitises and changes the booking's parameters to reflect the change
         * Call 2: Rebuilds the room list  (or simply outputs "We have bookings" in the case of SRPs) and returns the room list. This is parsed by the booking form as plain text in the room details field. Needs to be plain text as the overlib data returned will update javascript
         * Call 3: Calculates room prices and constructs any warnings. Sets background colours of the messages field and returns the calculated prices, the messages when are in turn parsed by javascript in the booking form and displayed.
         */
        $thisJRUser = jomres_getSingleton('jr_user');

        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        $bookingDeets = gettempBookingdata();
        $pid = $bookingDeets[ 'property_uid' ];

        $mrConfig = getPropertySpecificSettings($pid);
        //$tariffClass=$mrConfig['tariffClasses'];
        $showDeposit = $mrConfig[ 'chargeDepositYesNo' ];
        $tariffChargesStoredWeeklyYesNo = $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ];
        $showExtras = $mrConfig[ 'showExtras' ];
        $euroTaxYesNo = $mrConfig[ 'euroTaxYesNo' ];
        $roomTaxYesNo = $mrConfig[ 'roomTaxYesNo' ];
        $fixedPeriodBookings = $mrConfig[ 'fixedPeriodBookings' ];

        $messagesClass = '; document.getElementById("messages").className="messages";';
        $errorClass = '; document.getElementById("messages").className=error_class;';
        $oktobookClass = '; document.getElementById("messages").className=highlight_class;';

        $field = jomresGetParam($_GET, 'field', '', 'string');
        $field = getEscaped($field);
        $value = jomresGetParam($_GET, 'value', '', 'string');
        $value = getEscaped($value);
        $typeid = jomresGetParam($_GET, 'typeid', '', 'string');
        $typeid = getEscaped($typeid);
        $lastfield = jomresGetParam($_GET, 'lastfield', '', 'string');
        $lastfield = getEscaped($lastfield);
        $firstrun = jomresGetParam($_GET, 'firstrun', '', 'string');
        $firstrun = getEscaped($firstrun);

        $retText = '';

        $doNotRebuildRoomsListOnTheseFieldsArray = array('addressstring', 'existingCustomers', 'firstname', 'surname', 'house', 'street', 'town', 'region', 'country', 'postcode', 'tel_landline', 'tel_mobile', 'email', 'property_uid_check', 'email_usage_check');
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        $bkg = $MiniComponents->triggerEvent('05000'); // Create the booking object
        $isSingleRoomProperty = $bkg->getSingleRoomPropertyStatus();
        $bkg->rebuildIgnoreList = $doNotRebuildRoomsListOnTheseFieldsArray;
        $bkg->currentField = $field;

        switch ($field) {
            case 'email_usage_check':
                $ajrq = 'ajrq:::email_usage_check';
                $bkg->writeToLogfile('Checking that email address is ok to use');
                $value = $bkg->sanitiseInput('string', $value);
                $bkg->setGuest_email($value);
                if ($value != '') {
                    $bkg->email_usage_check($value);
                    if (!$bkg->email_address_can_be_used) {
                        //$bkg->setOkToBook(false);
                        echo 'false';
                    } else {
                        echo 'true';
                    }
                }
                break;
            case 'override':
                $ajrq = 'ajrq:::override';
                $value = $bkg->sanitiseInput('string', $value);
                $bkg->writeToLogfile('Starting override input');
                $response = $bkg->saveOverride($value);
                echo '; populateDiv("override_response","'.$response.'");';
                break;
            case 'room_features':
                // $this->room_feature_filter
                $value = $bkg->sanitiseInput('int', $value);
                $bkg->writeToLogfile('Starting room_features input');
                $bkg->toggleRoomFilterId($value);

                break;
            case 'coupon':
                $ajrq = 'ajrq:::coupon';
                $value = $bkg->sanitiseInput('string', $value);
                $bkg->writeToLogfile('Starting coupon input');
                $response = $bkg->saveCoupon($value);
                echo '; populateDiv("coupon_response","'.$response.'")';
                //echo '; document.getElementById("coupon_response").innerHTML = "'.$response.'" ; fadeIn("deposit",1000);';

                break;
            case 'addressstring':
                $ajrq = 'ajrq:::addressstring';
                $value = str_replace( "&#38;#39;", "'", $value ); // Apostrophes sent by ajax will be mangled, we need to unmangle them then santise them properly.
                $addressString = explode('~', $value);
                $firstname = $addressString[ 0 ];
                $surname = $addressString[ 1 ];
                $house = $addressString[ 2 ];
                $street = $addressString[ 3 ];
                $town = $addressString[ 4 ];
                $region = $addressString[ 5 ];
                $postcode = $addressString[ 6 ];
                $country = $addressString[ 7 ];
                $landline = $addressString[ 8 ];
                $mobile = $addressString[ 9 ];
                $email = $addressString[ 10 ];

                $firstname = $bkg->sanitiseInput('string', $firstname);
                $bkg->setGuest_firstname($firstname);
                $surname = $bkg->sanitiseInput('string', $surname);
                $bkg->setGuest_surname($surname);
                $house = $bkg->sanitiseInput('string', $house);
                $bkg->setGuest_house($house);
                $street = $bkg->sanitiseInput('string', $street);
                $bkg->setGuest_street($street);
                $town = $bkg->sanitiseInput('string', $town);
                $bkg->setGuest_town($town);
                $region = $bkg->sanitiseInput('string', $region);
                $bkg->setGuest_region($region);
                $postcode = $bkg->sanitiseInput('string', $postcode);
                $bkg->setGuest_postcode($postcode);
                $country = $bkg->sanitiseInput('string', $country);
                $bkg->setGuest_country($country);
                $landline = $bkg->sanitiseInput('string', $landline);
                $bkg->setGuest_tel_landline($landline);
                $mobile = $bkg->sanitiseInput('string', $mobile);
                $bkg->setGuest_tel_mobile($mobile);
                $email = $bkg->sanitiseInput('string', $email);
                $bkg->setGuest_email($email);
                break;
            case 'guesttype':
                $ajrq = 'ajrq:::guesttype';
                $bkg->setOkToBook(false);
                $typeid = $bkg->sanitiseInput('int', $typeid);
                $value = $bkg->sanitiseInput('int', $value);
                if (isset($typeid) && isset($value)) {
                    $bkg->setGuestVariantDetails($typeid, $value);
                    $bkg->resetRequestedRoom();
                    $bkg->checkAllGuestsAllocatedToRooms();
                }

                break;
            case 'arrivalDate':
                $ajrq = 'ajrq:::arrivalDate';
                $bkg->setOkToBook(false);
                $value = $bkg->JSCalConvertInputDates($value);
                $value = $bkg->sanitiseInput('date', $value);

                $arr_dep_date = $bkg->JSCalConvertInputDates($_GET[ 'arr_dep_date' ]);
                $arr_dep_date = $bkg->sanitiseInput('date', $arr_dep_date);

                if (isset($value)) {
                    $bkg->setArrivalDate($value);
                    if (isset($arr_dep_date) && $fixedPeriodBookings != '1' && get_showtime('include_room_booking_functionality') && $mrConfig[ 'showdepartureinput' ] != '0') {
                        $bkg->setDepartureDate($arr_dep_date);
                    } elseif (!get_showtime('include_room_booking_functionality') || $mrConfig[ 'showdepartureinput' ] == '0') {
                        $bkg->setDepartureDateToNextDay($value);
                    }
                }
                $bkg->resetRequestedRoom();
                break;
            case 'arrival_period':
                $ajrq = 'ajrq:::arrival_period';
                $bkg->setOkToBook(false);
                $value = $bkg->JSCalConvertInputDates($value);
                $value = $bkg->sanitiseInput('date', $value);
                if (isset($value)) {
                    $bkg->setArrivalDate($value);
                    $departurePeriod = $bkg->getStayDays();
                    $departureDate = $bkg->getFixedPeriodDepartureDate($departurePeriod);
                    $bkg->setDepartureDate($departureDate);
                    $bkg->JSCalmakeInputDates($bkg->getDepartureDate());
                }

                $bkg->resetRequestedRoom();
                break;
            case 'departureDate':
                $ajrq = 'ajrq:::departureDate';
                $bkg->setOkToBook(false);
                $value = $bkg->JSCalConvertInputDates($value);
                $value = $bkg->sanitiseInput('date', $value);
                if (isset($value)) {
                    $bkg->setDepartureDate($value);
                }
                $bkg->resetRequestedRoom();
                break;
            case 'departure_period':
                $ajrq = 'ajrq:::departure_period';
                $bkg->setOkToBook(false);
                $value = $bkg->sanitiseInput('int', $value);
                if (isset($value)) {
                    $departureDate = $bkg->getFixedPeriodDepartureDate($value);
                    $bkg->setDepartureDate($departureDate);
                }
                $bkg->resetRequestedRoom();
                break;
            case 'extras':
                $ajrq = 'ajrq:::extras';
                $bkg->setOkToBook(false);
                $value = $bkg->sanitiseInput('int', $value);
                $bkg->writeToLogfile('Starting extra input');
                if ($bkg->extraAlreadySelected($value)) {
                    $retText = 'Extra removed from booking';
                    $bkg->removeExtra($value);
                    echo 'jomresJquery("input[name=\'extras[theId]\']").prop("checked",false);';
                } else {
                    $retText = 'Extra added to booking';
                    $bkg->setExtras($value);
                    echo 'jomresJquery("input[name=\'extras[theId]\']").prop("checked",true);';
                }
                break;
            case 'extrasquantity':
                $ajrq = 'ajrq:::extrasquantity';
                $bkg->setOkToBook(false);
                $value = $bkg->sanitiseInput('int', $value);
                $theId = jomresGetParam($_GET, 'theId', 1);
                $theId = getEscaped($theId);
                $bkg->writeToLogfile('Starting extra quantity input : Value = '.$value.'Extra id ='.$theId);
                if ($bkg->extraAlreadySelected($theId)) {
                    $retText = 'Extra added to booking';
                    $bkg->setExtras($theId);
                    echo 'jomresJquery(theId).prop("checked", true);';
                    $bkg->modifyExtraQuantity($value, $theId);
                }

                break;
            case 'existingCustomers':
                $ajrq = 'ajrq:::existingCustomers';
                $value = $bkg->sanitiseInput('int', $value);
                if ($value != '0') {
                    $result = $bkg->getExistingCustomerData($value);
                    if ($result) {
                        $retText = 'Existing customer details selected';
                        $this->updateBookingFormAddressDetails($bkg);
                    } else {
                        $retText = 'User not authorised for this data';
                        $messagesClass = $errorClass;
                    }
                } else {
                    $retText = 'Existing customer details reset';
                    $bkg->resetExistingCustomer();
                    echo '; document.ajaxform.firstname.value=""';
                    echo '; document.ajaxform.surname.value=""';
                    echo '; document.ajaxform.house.value=""';
                    echo '; document.ajaxform.street.value=""';
                    echo '; document.ajaxform.town.value=""';
                    echo '; document.ajaxform.region.value=""';
                    echo '; document.ajaxform.postcode.value=""';
                    echo '; document.ajaxform.tel_landline.value=""';
                    echo '; document.ajaxform.tel_mobile.value=""';
                    if (!$thisJRUser->is_partner) {
                        echo '; document.ajaxform.eemail.value=""';
                    }
                }
                break;
            case 'requestedRoom':
                $ajrq = ' -- Selected a room -- ';
                $bkg->setOkToBook(false);
                $value = $bkg->sanitiseInput('string', $value);
                $bkg->updateSelectedRoom($value);

                break;
            case 'multiroom_select':
                $ajrq = ' -- Selected multiple rooms -- ';
                jr_import('jomres_roomlocks');
                $room_locker = new jomres_roomlocks();
                $bkg->setOkToBook(false);
                $value = $bkg->sanitiseInput('string', $value);
                $room_selections = explode(',', $value);

                foreach ($room_selections as $room) {
                    // We now need to remove all selected rooms from the $bkg->requestedRoom that are using this tariff id so that we can repopulat it with updateSelectedRoom
                    $selected_rooms = explode('^', $room);

                    if (isset($selected_rooms[ 1 ])) {
                        $clearing_tariff_id = (int) $selected_rooms[ 1 ];

                        if (!empty($bkg->requestedRoom)) {
                            foreach ($bkg->requestedRoom as $index => $rm) {
                                $currently_selected_rooms = explode('^', $rm);
                                $current_tariff_id = $currently_selected_rooms[ 1 ];
                                if ($current_tariff_id == $clearing_tariff_id) {
                                    //$bkg->setPopupMessage( "Removing ".$bkg->requestedRoom[$index]);
                                    unset($bkg->requestedRoom[ $index ]);
                                    $room_locker->unlock_room($currently_selected_rooms[ 0 ], $bkg->dateRangeString);
                                }
                            }
                        }
                    }
                    $room_id = (int) $selected_rooms[ 0 ];
                    if ($room_id == 0) {
                        $bkg->checkAllGuestsAllocatedToRooms();
                    }
                }
                foreach ($room_selections as $room) {
                    if ($room != '') {
                        $bkg->setErrorLog('handlereq::room type list style:: Adding '.$room);
                        $bkg->updateSelectedRoom($room);
                    }
                }
                $bkg->setErrorLog('handlereq::Currently selected rooms '.serialize($bkg->requestedRoom));
                break;
            case 'show_log':

                break;
            case 'heartbeat':
                echo '&nbsp;';
                break;
            default:
                if ($MiniComponents->eventSpecificlyExistsCheck('05040', $field)) {
                    $reply = $MiniComponents->specificEvent('05040', $field, $bkg); // Custom task
                    if (!isset($reply[ 'rebuild_rooms_list' ])) {
                        $doNotRebuildRoomsListOnTheseFieldsArray[ ] = $field;
                    }
                    if (isset($reply[ 'reply_to_echo' ])) {
                        echo $reply[ 'reply_to_echo' ];
                    }
                } else {
                    $ajrq = 'ajrq:::Invalid data sent';
                    $retText = 'Invalid data sent';
                    $messagesClass = $errorClass;
                }
                break;
        }

        // This is an optional trigger for third party plugins, intended to allow plugins to look at the last changed value (eg arrival or departure date) and if neccessary rebuild their output.
        // Tours will need this because if arrival or depature dates change, then available tours and spaces will also change. The plugin itself will echo any output required.
        if ($MiniComponents->eventFileExistsCheck('05050')) {
            $componentArgs = array('bkg' => $bkg, 'field' => $field, 'value' => $value);
            $MiniComponents->triggerEvent('05050', $componentArgs);
        }

        if (!in_array($field, $doNotRebuildRoomsListOnTheseFieldsArray) && isset($field) && !empty($field) && $field != 'show_log' && $field != 'extras' && $field != 'heartbeat' && $field != 'extrasquantity' && $field != 'coupon') {
            $this->bookingformlistRooms($isSingleRoomProperty, $bkg);
        }

        if ($field != 'heartbeat' && $field != 'show_log' && $field != 'email_usage_check') {
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $jrConfig = $siteConfig->get();

            $ajrq = 'show_log';
            $bkg->setErrorLog('handlereq::Generating billing data');

            $arrivalDate = $bkg->getArrivalDate();
            $departureDate = $bkg->getDepartureDate();
            if ($bkg->checkArrivalDate($arrivalDate)) {
                $bkg->setOkToBook(false);
                $bkg->writeToLogfile('Lastfield '.$lastfield);
                $bkg->setErrorLog('Lastfield '.$lastfield);

                if (!in_array($lastfield, $doNotRebuildRoomsListOnTheseFieldsArray)) {
                    $bkg->resetTotals();
                    $bkg->setErrorLog('handlereq:: Dates passed');
                    $bkg->generateBilling();
                    $bkg->setErrorLog('handlereq::Show deposit: '.$showDeposit);
                    if ($bkg->getGuestVariantCount() > 0) {
                        echo '; populateDiv("totalinparty","'.$bkg->getTotalInParty().'")';
                    }

                    $staydays = $bkg->getStayDays();
                    $num_period = $bkg->get_part_of_stay_period($staydays);
                    echo '; populateDiv("staydays","'.$num_period.'")';

                    if (get_showtime('include_room_booking_functionality')) {
                        $room_per_night = $bkg->getRoompernight();
                        $room_per_night = $bkg->calculateRoomPriceIncVat($room_per_night);
                        if ($bkg->cfg_tariffmode == '1' && $bkg->cfg_tariffChargesStoredWeeklyYesNo == '1') {
                            $room_per_night = $room_per_night * 7;
                        }
                        $room_per_night = $bkg->get_rate_per_night_converted_to_output_period($room_per_night);
                        if (get_showtime('include_room_booking_functionality')) {
                            echo '; populateDiv("roompernight","'.output_price($room_per_night).'")';
                        }

                        $room_total = $bkg->getRoomtotal();
                        $room_total = $bkg->calculateRoomPriceIncVat($room_total);
                        echo '; populateDiv("roomtotal","'.output_price($room_total).'")';
                    }

                    if ($bkg->cfg_showExtras) {
                        //only rebuild extras if dates change or a room/room type is selected
                        if ($field == 'arrivalDate' || $field == 'arrival_period' || $field == 'departureDate' || $field == 'departure_period' || $field == 'multiroom_select' || $field == 'requestedRoom') {
                            $ex = $bkg->makeExtras($pid);

                            $extra_details = $ex[ 'core_extras' ];

                            echo '; populateDiv("core_extras","'.$bkg->sanitise_for_eval($extra_details).'");';

                            $bkg->generateBilling();
                        }

                        echo '; populateDiv("extrastotal","'.output_price($bkg->getExtrasTotal()).'")';
                        echo '; populateDiv("extrastotal_totals_panel","'.output_price($bkg->getExtrasTotal()).'")';
                    }
                    $room_tax = $bkg->getTax();
                    $extra_tax = 0.00;
                    if (isset($bkg->extra_taxs)) {
                        if (!empty($bkg->extra_taxs)) {
                            foreach ($bkg->extra_taxs as $extax) {
                                $extra_tax = $extra_tax + $extax;
                            }
                        }
                    }
                    if ($jrConfig[ 'show_tax_in_totals_summary' ] == '1') {
                        if (isset($bkg->room_total_ex_tax)) {
                            echo '; populateDiv("room_total_ex_tax","'.output_price($bkg->room_total_ex_tax).'")';
                        } else {
                            echo '; populateDiv("room_total_ex_tax","")';
                        }
                        if (get_showtime('include_room_booking_functionality')) {
                            echo '; populateDiv("taxtotal","'.output_price($room_tax).'")';
                        }
                        echo '; populateDiv("extra_tax","'.output_price($extra_tax).'")';
                    }
                    echo '; populateDiv("grandtotal","'.output_price($bkg->getGrandTotal()).'")';

                    if (isset($bkg->room_total_inc_tax)) {
                        echo '; populateDiv("room_total_inc_tax","'.output_price($bkg->room_total_inc_tax).'")';
                    } else {
                        echo '; populateDiv("room_total_inc_tax","")';
                    }

                    if ($mrConfig[ 'chargeDepositYesNo' ] == '1') {
                        echo '; populateDiv("balance","'.output_price($bkg->getGrandTotal() - $bkg->getDeposit()).'")';
                    }
                    if ($showDeposit == '1') {
                        echo '; populateDiv("deposit","'.output_price($bkg->getDeposit()).'")';
                    }
                    if ($bkg->singlePersonSupplimentCalculated && $bkg->cfg_singlePersonSuppliment == '1') {
                        echo '; populateDiv("single_suppliment","'.output_price($bkg->getSinglePersonSuppliment()).'")';
                    }
                    if ($bkg->coupon_code != '') {
                        $discount = $bkg->coupon_discount_value;
                        if ($mrConfig[ 'prices_inclusive' ] == 1) {
                            $divisor = ($bkg->accommodation_tax_rate / 100) + 1;
                            $discount = $divisor * $discount;
                        }
                        echo '; populateDiv("coupon_discount_value","'.output_price($discount).'")';
                    }
                } else {
                    $bkg->setErrorLog('handlereq:: Field '.$lastfield.' exempt from pricing rebuild');
                }
            } else {
                $bkg->setErrorLog('handlereq:: bkg check of arrival or departure date failed');
            }
            $bkg->monitorBookingStatus();
            if ($bkg->resetPricingOutput) {
                $bkg->outputZeroPrices();
            }

            $disable_address = 'true';
            if ($field == 'email_usage_check') {
                $disable_address = 'false';
            }

            if ($bkg->getOkToBook()) {
                echo $oktobookClass;
                echo '; populateDiv("messages","'.$bkg->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_REVIEWBOOKING', '_JOMRES_FRONT_MR_REVIEWBOOKING', false, false)).'"); checkSelectRoomMessage(true,"'.$disable_address.'");';
                echo $bkg->setGuestPopupMessage(jr_gettext('_JOMRES_FRONT_MR_REVIEWBOOKING', '_JOMRES_FRONT_MR_REVIEWBOOKING', false, false));
                echo '; enableSubmitButton(document.ajaxform.confirmbooking); '; // Added timeout because if a user clicks on this button too soon they'll get taken to the review booking before oktobook has been saved, therefore getting themselves redirected back to here
            } else {
                $messagesClass = $errorClass;
                echo $messagesClass;
                echo '; populateDiv("messages","'.$bkg->sanitiseOutput($bkg->monitorGetFirstMessage()).'"); checkSelectRoomMessage(false,"'.$disable_address.'");';
                if ($firstrun != '1') {
                    echo $bkg->setGuestPopupMessage($bkg->monitorGetFirstMessage());
                }

                //echo ';jomresJquery("#bookingform_address").delay(800).fadeTo("slow", 1);';

                echo '; disableSubmitButton(document.ajaxform.confirmbooking); ';
            }
            if ($bkg->getErrorLog() != '' && $bkg->errorChecking()) {
                $errorLog = $bkg->getErrorLog();
            }
            echo '; populateDiv("room_allocations","'.$bkg->getRoomAllocationOutput().'");';

            $bkg->setErrorLogFirst($ajrq);
            $bkg->storeBookingDetails();
        }
    }


        function updateBookingFormAddressDetails(&$bkg)
        {
            $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
            $bkg->storeBookingDetails();
            $result = $tmpBookingHandler->getGuestData();
            echo '; document.ajaxform.firstname.value="'.jomres_decode($result[ 'firstname' ]).'"';
            echo '; document.ajaxform.surname.value="'.jomres_decode($result[ 'surname' ]).'"';
            echo '; document.ajaxform.house.value="'.jomres_decode($result[ 'house' ]).'"';
            echo '; document.ajaxform.street.value="'.jomres_decode($result[ 'street' ]).'"';
            echo '; document.ajaxform.town.value="'.jomres_decode($result[ 'town' ]).'"';
            //echo '; document.ajaxform.region.value="' . jomres_decode( $result[ 'region' ] ) . '"';
            echo '; document.ajaxform.country.value="'.jomres_decode($result[ 'country' ]).'"';
            echo '; document.ajaxform.postcode.value="'.jomres_decode($result[ 'postcode' ]).'"';
            echo '; document.ajaxform.tel_landline.value="'.jomres_decode($result[ 'tel_landline' ]).'"';
            echo '; document.ajaxform.tel_mobile.value="'.jomres_decode($result[ 'tel_mobile' ]).'"';
            echo '; populateDiv("guest_region_div","'.str_replace('"', '\"', setupRegions($result[ 'country' ], $result[ 'region' ])).'")';
            if ($bkg->checkEmail($result[ 'email' ])) {
                echo '; document.ajaxform.eemail.value="'.jomres_decode($result[ 'email' ]).'"';
            }
        }

        function bookingformlistRooms($isSingleRoomProperty, &$bkg)
        {
            if (get_showtime('include_room_booking_functionality')) {
                $bkg->writeToLogfile('Listing rooms');
                $arrivalDate = $bkg->getArrivalDate();
                $departureDate = $bkg->getDepartureDate();

                if ($isSingleRoomProperty) {
                    $bkg->requestedRoom = array();
                }
                //$bkg->setErrorLog("handlereq-bookingformlistRooms:: Building rooms list");
                $bkg->setStayDays();
                $bkg->setDateRangeString();
                $roomAndTariffArray = array();
                $freeRoomsArray = array();
                $dateRangeIncludesWeekend = $bkg->dateRangeIncludesWeekends();
                $freeRoomsArray = $bkg->getAllRoomUidsForProperty();
                $freeRoomsArray_count = count($freeRoomsArray);
                if (!empty($freeRoomsArray)) {
                    $freeRoomsArray = $bkg->findFreeRoomsInDateRange($freeRoomsArray);
                }

                $bkg->setErrorLog('handlereq-bookingformlistRooms:: Number of free rooms '.$freeRoomsArray_count);
                if (!empty($freeRoomsArray)) { // This must be before the rest of these functions
                $freeRoomsArray = $bkg->checkPeopleNumbers($freeRoomsArray);
                }
                $bkg->setErrorLog('handlereq-bookingformlistRooms:: Number of free rooms '.$freeRoomsArray_count);
                if (!empty($freeRoomsArray)) {
                    $freeRoomsArray = $bkg->checkRoomFeatureOption($freeRoomsArray);
                }

                $bkg->setErrorLog('handlereq-bookingformlistRooms:: Number of free rooms '.$freeRoomsArray_count);
                // Added to enable the room to remain in the selected rooms list if it's still available after a particular (date, guest numbers etc) has been changed
                $selectedRoomUids = array();
                foreach ($bkg->requestedRoom as $rt) {
                    $rtArray = explode('^', $rt);
                    $r[ $rtArray[ 0 ] ] = $rt;
                    $selectedRoomUids[ ] = $r;
                }
                foreach ($selectedRoomUids as $room_uid_holder) {
                    foreach ($room_uid_holder as $key => $room_uid) {
                        if (is_array($freeRoomsArray)) {
                            if (!in_array($key, $freeRoomsArray)) {
                                $bkg->removeFromSelectedRooms($room_uid);
                            }
                        }
                    }
                }
                if ($bkg->cfg_booking_form_rooms_list_style == '1') {
                    $bkg->setErrorLog('handlereq-bookingformlistRooms:: Number of free rooms '.$freeRoomsArray_count);
                    if (!empty($freeRoomsArray)) {
                        $freeRoomsArray = $bkg->removeRoomuidsAlreadyInThisBooking($freeRoomsArray);
                    }
                }
                if (!empty($freeRoomsArray)) {
                    $freeRoomsArray = $bkg->extractLockedRooms($freeRoomsArray);
                }
                $bkg->setErrorLog('handlereq-bookingformlistRooms:: Number of free rooms '.$freeRoomsArray_count);
                $bkg->number_of_free_rooms = $freeRoomsArray_count;
                if (!empty($freeRoomsArray)) {
                    $roomAndTariffArray = $bkg->getTariffsForRoomUids($freeRoomsArray);
                }

                $bkg->setErrorLog('handlereq-bookingformlistRooms:: Room and Tariff array count = '.count($roomAndTariffArray));
                $output = '';

                if (!$isSingleRoomProperty) {
                    $selected_rooms_text = '<div><h4 class="page-header">'.jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS', '_JOMRES_AJAXFORM_SELECTEDROOMS', false, false).'</h4></div>';

                    if ($bkg->numberOfCurrentlySelectedRooms() > 0) {
                        $currently_selected = '<div>'.$bkg->listCurrentlySelectedRooms().'</div>';
                    } else {
                        $currently_selected = '<div id="noroomsselected" >'.jr_gettext('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', false, false).'</div>';
                    }

                    $available_rooms_text = '<div><h4 class="page-header">'.jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS', '_JOMRES_AJAXFORM_AVAILABLEROOMS', false, false).'</h4></div><div id="rooms_listing"></div>';

                    $selected_rooms_text = $bkg->sanitise_for_eval($selected_rooms_text);
                    $currently_selected = $bkg->sanitise_for_eval($currently_selected);
                    $available_rooms_text = $bkg->sanitise_for_eval($available_rooms_text);

                    $output = "populateDiv('selectedRooms','".$selected_rooms_text.$currently_selected."');";
                    $output .= "populateDiv('availRooms','".$available_rooms_text."');";

                    if (!empty($freeRoomsArray)) {
                        $output .= ";jomresJquery('#availRooms').fadeIn();";
                    } else {
                        $output .= ";jomresJquery('#availRooms').fadeOut();";
                    }

                    if ($bkg->cfg_booking_form_rooms_list_style == '1') {
                        echo $output;
                    }
                } else {
                    $output .= '<div></div>';
                    $output .= '<div></div>';
                }

                $output = $bkg->generateRoomsList($roomAndTariffArray);
                $output = $bkg->sanitise_for_eval($output);
                $output = "populateDiv('rooms_listing','".$output."');";
                if ($bkg->cfg_booking_form_rooms_list_style == '2') {
                    $output = "populateDiv('availRooms','".$bkg->sanitise_for_eval($bkg->generate_room_type_dropdowns())."');";
                }

                echo $output;
            }
        }
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
