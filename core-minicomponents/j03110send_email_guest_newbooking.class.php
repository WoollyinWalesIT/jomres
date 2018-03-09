<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j03110send_email_guest_newbooking
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $email_type = 'email_guest_newbooking';

        $mrConfig = getPropertySpecificSettings();
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

        $property_uid = $componentArgs[ 'property_uid' ];
        $contract_uid = $componentArgs[ 'contract_uid' ];
        $secret_key_payment = $tmpBookingHandler->getBookingFieldVal('secret_key_payment');

        if (!isset($componentArgs[ 'email_when_done' ])) {
            $email_when_done = true;
        } else {
            $email_when_done = $componentArgs[ 'email_when_done' ];
        } // Optional. We'll set email_when_done by default to true, otherwise we'll set it in the componentArgs variable. This allows us to call this script independantly which in turn allows us to view the email as it's contructed, rather than when sent.

        if (!$componentArgs[ 'sendGuestEmail']) {
            return;
        }

        if ((int) $mrConfig['requireApproval'] == 1 && !$thisJRUser->userIsManager && !$secret_key_payment) {
            return;
        }

        $booking_email_details = jomres_singleton_abstract::getInstance('jomres_generic_booking_email');
        $booking_email_details->gather_data($contract_uid, $property_uid);
        $booking_email_details->parse_email($email_type, $contract_uid);

        if ($email_when_done) {
            if (!jomresMailer($booking_email_details->data[$contract_uid]['PROPERTY_EMAIL'],
                                $booking_email_details->data[$contract_uid]['PROPERTY_NAME'],
                                $booking_email_details->data[$contract_uid]['EMAIL'],
                                $booking_email_details->parsed_email['subject'],
                                $booking_email_details->parsed_email['text'],
                                $mode = 1,
                                $booking_email_details->parsed_email['attachments'])
                ) {
                error_logging('Failure in sending new booking email to guest. Target address: '.$booking_email_details->data[$contract_uid]['EMAIL'].' Subject '.$booking_email_details->parsed_email['subject'].$booking_email_details->parsed_email['text']);
            }
        } else {
            echo $booking_email_details->parsed_email['text'];
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
