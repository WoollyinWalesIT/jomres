<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.23
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001dashboard_cancelbooking_ajax
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

        $cancellationSuccessful = false;

        jr_import('jomres_generic_booking_cancel');
        $bkg = new jomres_generic_booking_cancel();

        $contract_uid = (int) jomresGetParam($_GET, 'contract_uid', '0');

        //Let`s check that we have a contract_uid, otherwise stop here
        if ($contract_uid == 0) {
            $insertMessage = 'Error: Contract uid not set. Exitting.';
            echo json_encode(array('insertStatus' => 0, 'insertMessage' => $insertMessage));
        }

        //OK, let`s move on and set the booking details
        $bkg->property_uid = $property_uid;
        $bkg->contract_uid = $contract_uid;
        $bkg->reason = '';
        $bkg->note = jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLED', '_JOMRES_COM_MR_EB_GUEST_CANCELLED', false);

        //Finally let`s cancel the booking
        $cancellationSuccessful = $bkg->cancel_booking();

        if ($cancellationSuccessful === true) {
            $insertMessage = 'Booking cancelled.';
            echo json_encode(array('insertStatus' => 1, 'insertMessage' => $insertMessage));
        } else {
            $insertMessage = $cancellationSuccessful;
            echo json_encode(array('insertStatus' => 0, 'insertMessage' => $insertMessage));
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
