<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-bob
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005cancelGuestBooking
{
    public function __construct()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return

        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        if ($thisJRUser->userIsRegistered) {
            $contract_uid = jomresGetParam($_REQUEST, 'contract_uid', 0);

            $pageoutput = array();
            $output = array();
            if ($contract_uid == 0) {
                return;
            }
            $allGuestUids = array();

            $query = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int) $thisJRUser->id."' ";
            $guests_uids = doSelectSql($query);
            // Because a new record is made in the guests table for each new property the guest registers in, we need to find all the guest uids for this user
            if (!empty($guests_uids)) {
                foreach ($guests_uids as $g) {
                    $allGuestUids[ ] = $g->guests_uid;
                }
            }
            $query = "SELECT * FROM #__jomres_contracts WHERE contract_uid = '".(int) $contract_uid."' AND guest_uid IN (".jomres_implode($allGuestUids).') ';

            $bookingData = doSelectSql($query);
            if (count($bookingData) == 1) {
                foreach ($bookingData as $booking) {
                    $guest_uid = (int) $booking->guest_uid;
                    $contract_uid = (int) $booking->contract_uid;
                    $property_uid = (int) $booking->property_uid;
                    $booking_arrival = $booking->arrival;
                }

                $mrConfig = getPropertySpecificSettings($property_uid);

                if (dateDiff($interval, date('Y/m/d'), $booking_arrival) > (int) $mrConfig[ 'cancellation_threashold' ]) {
                    $saveMessage = jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLED', '_JOMRES_COM_MR_EB_GUEST_CANCELLED', false);

                    /* $query = "SELECT tag FROM #__jomres_contracts WHERE contract_uid = '".(int) $contract_uid."' AND property_uid = '".(int) $property_uid."'";
                    $contractData = doSelectSql($query);
                    foreach ($contractData as $cancellation) {
                        $tag = $cancellation->tag;
                    }

                    $dateToDrop = $dateRangeArray[ $i ];
                    $query = "DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int) $contract_uid."' AND property_uid = '".(int) $property_uid."'";
                    if (!doInsertSql($query, '')) {
                        trigger_error('Unable to delete from room bookings table, mysql db failure', E_USER_ERROR);
                    }

                    $query = "UPDATE #__jomres_contracts SET `cancelled`='1', `cancelled_timestamp`='".date('Y-m-d H:i:s')."', `cancelled_reason`='".$reason."' WHERE contract_uid = '".(int) $contract_uid."' AND property_uid = '".(int) $property_uid."'";
                    if (!doInsertSql($query, '')) {
                        trigger_error('Unable to update cancellations data for contract'.(int) $contract_uid.', mysql db failure', E_USER_ERROR);
                    } */
					
					jr_import('jomres_generic_booking_cancel');
					$bkg = new jomres_generic_booking_cancel();

					$bkg->property_uid = $property_uid;
					$bkg->contract_uid = $contract_uid;
					$bkg->reason = '';
					$bkg->note = $saveMessage;

					$cancellationSuccessful = $bkg->cancel_booking();
			

                    $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
                    $current_property_details->gather_data($property_uid);

                    //update invoice details (set as cancelled)
                    $query = 'SELECT id FROM #__jomresportal_invoices 
								WHERE contract_id = ' .(int) $contract_uid.' 
								LIMIT 1
								';
                    $invoice_uid = doSelectSql($query, 1);
                    if ($invoice_uid > 0) {
                        jr_import('jrportal_invoice');
                        $invoice = new jrportal_invoice();
                        $invoice->id = $invoice_uid;
                        $invoice->getInvoice();
                        $invoice->mark_invoice_cancelled();
                    }

                    $query = 'SELECT email,firstname,surname FROM #__jomres_guests WHERE guests_uid = '.$guest_uid.' LIMIT 1';
                    $guestData = doSelectSql($query, 2);
                    $text = $tag.' - '.$saveMessage;

                    $componentArgs = array();
                    $componentArgs[ 'property_uid' ] = $property_uid;
                    $componentArgs[ 'contract_uid' ] = $contract_uid;
                    $MiniComponents->triggerEvent('02163', $componentArgs);

                    echo $saveMessage;
                } else {
                    error_logging('Hack attack: Tried to cancel a booking that was within the cancellation threashold.  Guest uid '.$guest_uid.' Booking uid '.$contract_uid.' Date diff '.dateDiff($interval, date('Y/m/d'), $booking_arrival));
                }
            }
        }
    }

    public function editBooking_html($contract_uid, $bookingData, $extraBillingData, $guestData, $roomBookingData, $roomInfo, $roomClass, $roomFeatures)
    {
        $popup = get_showtime('popup');
        $mrConfig = getPropertySpecificSettings();
        $defaultProperty = getDefaultProperty();
        if ($defaultProperty == '0') {
            $defaultProperty = '%';
        }
        //var_dump($guestData);
        $guest_firstname = 'N/A';
        $guest_surname = 'N/A';
        $guest_uid = 'N/A';
        $guest_mos_userid = 'N/A';
        $guest_house = 'N/A';
        $guest_street = 'N/A';
        $guest_town = 'N/A';
        $guest_region = 'N/A';
        $guest_country = 'N/A';
        $guest_postcode = 'N/A';
        $guest_tel_landline = 'N/A';
        $guest_tel_mobile = 'N/A';
        $guest_tel_fax = 'N/A';
        $guest_email = 'N/A';
        $guest_preferences = 'N/A';

        foreach ($guestData as $guest) {
            $guest_firstname = $guest->firstname;
            $guest_surname = $guest->surname;
            $guest_uid = $guest->guests_uid;
            $guest_mos_userid = $guest->mos_userid;
            $guest_house = $guest->house;
            $guest_street = $guest->street;
            $guest_town = $guest->town;
            $guest_region = $guest->county;
            $guest_country = $guest->country;
            $guest_postcode = $guest->postcode;
            $guest_tel_landline = $guest->tel_landline;
            $guest_tel_mobile = $guest->tel_mobile;
            $guest_tel_fax = $guest->tel_fax;
            $guest_email = $guest->email;
            $guest_preferences = $guest->preferences;
            $guest_car_regno = $guest->car_regno;
            $guest_ccard_no = $guest->ccard_no;
            $guest_ccard_issued = $guest->ccard_issued;
            $guest_ccard_expiry = $guest->ccard_expiry;
            $guest_ccard_iss_no = $guest->ccard_iss_no;
            $guest_ccard_name = $guest->ccard_name;
        }

        foreach ($bookingData as $booking) {
            $booking_tag = $booking->tag;
            $booking_contract_uid = $booking->contract_uid;
            $booking_arrival = $booking->arrival;
            $booking_departure = $booking->departure;
            $booking_rates_uid = $booking->rates_uid;
            $booking_rate_rules = $booking->rate_rules;
            $booking_deposit_paid = $booking->deposit_paid;
            $booking_contract_total = $booking->contract_total;
            $booking_deposit_required = $booking->deposit_required;
            $booking_deposit_required = str_replace(',', '', $booking_deposit_required);

            $booking_deposit_ref = $booking->deposit_ref;
            $booking_payment_ref = $booking->payment_ref;
            $booking_special_reqs = stripslashes($booking->special_reqs);
            $booking_newsletters = $booking->newsletters;
            $booking_currency = $booking->currency;
            $booking_date_range_string = $booking->date_range_string;
            $single_person_suppliment = $booking->single_person_suppliment;
            $extraOptionsList = $booking->extras;
            $extrasOptionsValue = $booking->extrasvalue;
            $tax = $booking->tax;
            $bookedin = $booking->booked_in;
            $variances = $booking->rate_rules;
        }

        $guesttypeOutput = array();
        $varianceArray = explode(',', $variances);
        foreach ($varianceArray as $v) {
            $vDeets = explode('_', $v);
            if ($vDeets[ 0 ] == 'guesttype') {
                $vu = $vDeets[ 1 ];
                $vq = $vDeets[ 2 ];
                $vv = $vDeets[ 3 ];
                $query = "SELECT `type` FROM `#__jomres_customertypes` where id = '".(int) $vu."' ";
                $vtitle = doSelectSql($query, 1);
                $guesttypeOutput[ ] = array('title' => $vtitle, 'qty' => $vq, 'value' => $vv);
            }
        }
        foreach ($roomBookingData as $roomBooking) {
            $roomBooking_uid = $roomBooking->contract_uid;
            $roomBooking_black_booking = $roomBooking->black_booking;
            $roomBooking_reception_booking = $roomBooking->reception_booking;
            $roomBooking_internet_booking = $roomBooking->internet_booking;
        }
        $rmInfo = array();
        foreach ($roomInfo as $rInfo) {
            $rInfo_uid = $rInfo->room_uid;
            $rInfo_name = $rInfo->room_name;
            $rInfo_number = $rInfo->room_number;
            $rInfo_room_floor = $rInfo->room_floor;
            $rInfo_max_people = $rInfo->max_people;
            $rInfo_type = $rInfo->room_classes_uid;
            $rmInfo[ ] = array('rInfo_name' => $rInfo_name, 'rInfo_number' => $rInfo_number, 'rInfo_room_floor' => $rInfo_room_floor, 'rInfo_max_people' => $rInfo_max_people, 'rInfo_type' => $rInfo_type);
        }
        foreach ($roomClass as $rClass) {
            $rClass_room_classes_uid = $rClass->room_classes_uid;
            $rClass_room_class_abbv = $rClass->room_class_abbv;
            $rClass_room_class_full_desc = $rClass->room_class_full_desc;
        }
        if ($booking_deposit_paid) {
            $depositPaid = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES');
        } else {
            $depositPaid = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO');
        }

        if (!$bookedin) {
            $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
            $jrtb = $jrtbar->startTable();
            $jrtb .= $jrtbar->toolbarItem('cancelbooking', jomresURL(JOMRES_SITEPAGE_URL_AJAX."&task=cancelGuestBooking&popup=1&contract_uid=$booking_contract_uid"), '');
            $jrtb .= $jrtbar->endTable();
            echo $jrtb;
        }

        echo "<div id='jomresmenu_hint' style=color:red; >&nbsp;</div>";
        jr_import('jomres_content_tabs');
        $contentPanel = new jomres_content_tabs();
        $contentPanel->startTabs();
        $contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', false));
        $contentPanel->setcontent('<table>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL').'</td>
				<td>' .ucfirst($guest_firstname).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL').'</td>
				<td>' .ucfirst($guest_surname).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL').'</td>
				<td>' .outputDate($booking_arrival).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE').'</td>
				<td>' .outputDate($booking_departure).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ').'</td>
				<td><b>' .ucfirst($booking_special_reqs).'</b></td>
			</tr>
		</table>');
        $contentPanel->insertContent();
        $contentPanel->endPanel();

        $contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', false));
        $contentPanel->setcontent('<table>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL').'</td>
				<td>' .ucfirst($guest_house).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL').'</td>
				<td>' .ucfirst($guest_street).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL').'</td>
				<td>' .ucfirst($guest_town).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION').'</td>
				<td>' .ucfirst($guest_region).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY').'</td>
				<td>' .ucfirst($guest_country).'</td>
			</tr>

			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL').'</td>
				<td>' .strtoupper($guest_postcode).'</td>
			</tr>
			<tr>
			<td>' .jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL').'</td>
				<td>' .$guest_tel_landline.'</td>
			</tr>
				<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL').'</td>
				<td>' .$guest_tel_mobile.'</td>
			</tr>
		</table>');
        $contentPanel->insertContent();
        $contentPanel->endPanel();

        $contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', false));
        $contentPanel->setcontent('<table>');
        if ($roomBooking_black_booking == '1') {
            $bookingType = jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK');
        } elseif ($roomBooking_reception_booking == '1') {
            $bookingType = jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION');
        } else {
            $bookingType = jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET');
        }
        $contentPanel->setcontent('
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL').'</td>
				<td>' .$bookingType.'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>');
        foreach ($rmInfo as $ri) {
            $contentPanel->setcontent('
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ROOM_NAME', '_JOMRES_COM_MR_EB_ROOM_NAME').'</td>
				<td>' .$ri[ 'rInfo_name' ].'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ROOM_NUMBER', '_JOMRES_COM_MR_EB_ROOM_NUMBER').'</td>
				<td>' .$ri[ 'rInfo_number' ].'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ROOM_FLOOR', '_JOMRES_COM_MR_EB_ROOM_FLOOR').'</td>
				<td>' .$ri[ 'rInfo_room_floor' ].'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE').'</td>
				<td>' .$ri[ 'rInfo_max_people' ].'</td>
			</tr>
			<tr>');
            $rit = $ri[ 'rInfo_type' ];
            $query = "SELECT room_class_abbv FROM #__jomres_room_classes WHERE room_classes_uid = '".(int) $rit."'";
            $type = doSelectSql($query, 1);
            $contentPanel->setcontent('
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV').'</td>
				<td>' .$type.'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>');
        }
        $contentPanel->setcontent('</table>');
        $contentPanel->insertContent();
        $contentPanel->endPanel();

        $otherServiceTotal = 0.00;
        $contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', false));
        $contentPanel->setcontent('<table>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID').'</td>
				<td>' .$depositPaid.'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED').'</td>
				<td>' .output_price($booking_deposit_required).'</td>
			</tr>
			<tr>
			<td>' .jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL').'</td>
				<td>' .output_price($booking_contract_total).'</td>
			</tr>
			<tr>
			<td>' .jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS').'</td>
				<td>' .count(explode(',', $booking_date_range_string)).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF').'</td>
				<td>' .$booking_deposit_ref.'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON').'</td>
				<td>' .output_price($single_person_suppliment).'</td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_FRONT_ROOMTAX', '_JOMRES_COM_FRONT_ROOMTAX').'</td>
				<td>' .output_price($tax).'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES').'</td>
				<td>&nbsp;</td>
			</tr>');
        foreach ($guesttypeOutput as $type) {
            $contentPanel->setcontent('<tr><td>'.$type[ 'title' ].'</td>');
            $contentPanel->setcontent('<td>'.$type[ 'qty' ].'&nbsp;'.'</td></tr>');
        }
        $contentPanel->setcontent('
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE', '_JOMRES_COM_MR_EXTRA_TITLE').'</td>
				<td>&nbsp;</td>
			</tr>');
        $extraOptionsArray = explode(',', $extraOptionsList);
        foreach ($extraOptionsArray as $extraUid) {
            $query = "SELECT name,price FROM #__jomres_extras WHERE uid = '".(int) $extraUid."' ORDER BY name";
            $extrasList = doSelectSql($query);
            foreach ($extrasList as $theExtras) {
                $contentPanel->setcontent('
					<tr>
						<td>&nbsp;</td>
						<td>' .($theExtras->name).',  '.output_price($theExtras->price).'</td>
					</tr>');
            }
        }
        $contentPanel->setcontent('
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE').'</td>
				<td>' .output_price($extrasOptionsValue).'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', '_JOMRES_COM_ADDSERVICE_BOOKINGDESC').'</td>
				<td>');
        if (!empty($extraBillingData)) {
            foreach ($extraBillingData as $extras) {
                $service_description = $extras->service_description;
                $service_value = $extras->service_value;
                $contentPanel->setcontent($service_description.' '.output_price($service_value).'<br>');
                $otherServiceTotal = $otherServiceTotal + $service_value;
            }
        }
        $contentPanel->setcontent('
				</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL').'</td>
				<td>' .output_price($otherServiceTotal + $booking_contract_total).'</td>
			</tr>');
        if ($booking_deposit_paid == '1') {
            $remaindertopay = ($otherServiceTotal + $booking_contract_total) - $booking_deposit_required;
        } else {
            $remaindertopay = $otherServiceTotal + $booking_contract_total;
        }
        $contentPanel->setcontent('
			<tr>
				<td>' .jr_gettext('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY').'</td>
				<td><b>' .output_price($remaindertopay).'</b></td>
			</tr>
		</table>');
        $contentPanel->insertContent();
        $contentPanel->endPanel();
        $contentPanel->endTabs();
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
