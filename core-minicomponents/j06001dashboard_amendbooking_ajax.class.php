<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001dashboard_amendbooking_ajax
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $property_uid = jomresGetParam($_GET, 'property_uid', 0);
        if ($property_uid == 0) {
            $property_uid = getDefaultProperty();
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
            return;
        }

        $mrConfig = getPropertySpecificSettings($property_uid);
        if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
            return;
        }

        $amendSuccessful = false;

        jr_import('jomres_generic_booking_amend');
        $bkg = new jomres_generic_booking_amend();

        $event_id = jomresGetParam($_GET, 'event_id', '');
        $room_uid = (int) jomresGetParam($_GET, 'room_uid', 0);
        $new_room_uid = (int) jomresGetParam($_GET, 'new_room_uid', 0);
        $contract_uid = (int) jomresGetParam($_GET, 'contract_uid', 0);
        $this_contract_room_uids = jomresGetParam($_GET, 'this_contract_room_uids', array());

        //check if we have an event id, otherwise stop here
        if ($event_id == '') {
            $insertMessage = 'Error: Event id not set. Exitting.';
            echo json_encode(array('insertStatus' => 0, 'insertMessage' => $insertMessage));
            exit;
        }

        //OK, let`s move on and set the booking details
        $bkg->property_uid = $property_uid;
        $bkg->contract_uid = $contract_uid;
        $bkg->room_uid = $room_uid;
        $bkg->new_room_uid = $new_room_uid;
        $bkg->this_contract_room_uids = $this_contract_room_uids;
        $bkg->note = '';
        $bkg->arrival = date('Y/m/d', strtotime(jomresGetParam($_GET, 'event_start', '')));
        $bkg->departure = date('Y/m/d', strtotime(jomresGetParam($_GET, 'event_end', '')));

        if ((int) $mrConfig[ 'wholeday_booking' ] == 1) {
            $bkg->last_booked_date = date('Y/m/d', strtotime(jomresGetParam($_GET, 'event_end', '')));
        } else {
            $bkg->last_booked_date = date('Y/m/d', strtotime(jomresGetParam($_GET, 'event_end', '').'-1 day'));
        }

        $from = date('Y-m-d', strtotime($bkg->arrival)).'T12:00:00';
        $to = date('Y-m-d', strtotime($bkg->departure)).'T11:59:59';

        if ((int) $mrConfig[ 'wholeday_booking' ] == 1) {
            $from = date('Y-m-d', strtotime($bkg->arrival)).'T00:00:01';
            $to = date('Y-m-d', strtotime($bkg->departure)).'T23:59:59';
        }

        //Finally let`s amend the booking
        $amendSuccessful = $bkg->amend_booking();

        $new_id = $bkg->contract_uid.'_'.$bkg->new_room_uid;

        if ($amendSuccessful === true) {
            $insertMessage = 'Room changed successfully.';
            echo json_encode(
                            array(
                                'insertStatus' => 1,
                                'insertMessage' => $insertMessage,
                                'id' => $new_id,
                                'start' => $from,
                                'end' => $to,
                                'contract_uid' => $bkg->contract_uid,
                                'room_uid' => $bkg->new_room_uid,
                                'this_contract_room_uids' => $bkg->this_contract_room_uids,
                                )
                            );
        } else {
            $insertMessage = $amendSuccessful;
            echo json_encode(array('insertStatus' => 0, 'insertMessage' => $insertMessage));
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
