<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j02224saveguest
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $guests_uid = jomresGetParam($_REQUEST, 'guestUid', 0);
        if ($guests_uid == '0') {
            $guests_uid = false;
        }
        $defaultProperty = getDefaultProperty();

        $firstname = jomresGetParam($_REQUEST, 'firstname', '');
        $surname = jomresGetParam($_REQUEST, 'surname', '');
        $house = jomresGetParam($_REQUEST, 'house', '');
        $street = jomresGetParam($_REQUEST, 'street', '');
        $town = jomresGetParam($_REQUEST, 'town', '');
        $region = jomresGetParam($_REQUEST, 'region', '');
        $country = jomresGetParam($_REQUEST, 'guest_country', '');
        $postcode = jomresGetParam($_REQUEST, 'postcode', '');
        $landline = jomresGetParam($_REQUEST, 'landline', '');
        $mobile = jomresGetParam($_REQUEST, 'mobile', '');
        $fax = jomresGetParam($_REQUEST, 'fax', '');
        $email = jomresGetParam($_REQUEST, 'email', '');
        $vat_number = jomresGetParam($_REQUEST, 'vat_number', '');

        $discount = (int) jomresGetParam($_REQUEST, 'discount', 0);

        if ($guests_uid != 0) {
            $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
            $jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST', '_JOMRES_MR_AUDIT_UPDATE_GUEST', false));
            $query = "UPDATE #__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',`town`='$town',`county`='$region',`country`='$country',`postcode`='$postcode',`tel_landline`='$landline',`tel_mobile`='$mobile',`tel_fax`='$fax',`email`='$email',`discount`= $discount WHERE guests_uid = '".(int) $guests_uid."' AND `property_uid` = ".(int) $defaultProperty;
            if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST', '_JOMRES_MR_AUDIT_UPDATE_GUEST', false))) {
                trigger_error('Unable to update guest details, mysql db failure', E_USER_ERROR);
            }
        } else {
            $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
            $jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST', '_JOMRES_MR_AUDIT_INSERT_GUEST', false));
            $query = "INSERT INTO #__jomres_guests (`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`tel_fax`,`email`,`discount`,`property_uid`)VALUES ('$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$fax','$email',$discount,'".(int) $defaultProperty."')";
            $guests_uid = doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST', '_JOMRES_MR_AUDIT_INSERT_GUEST', false));
            
            if (!$guests_uid) {
                trigger_error('Unable to insert guest details, mysql db failure', E_USER_ERROR);
            }
        }

        // Guests will not always be associated with a CMS user, so we need a mechanism that checks and validates a VAT number, without necessarily saving those details to a system wide user
        if (trim($vat_number) != '') {
            jr_import('vat_number_validation');
            $validation = new vat_number_validation();
            $response = $validation->vies_check($vat_number);
            $validation->save_subject('guest_registered_byguest_id', array('property_uid' => $defaultProperty, 'guest_id' => $guests_uid));
        }

        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'guest_saved';
        $webhook_notification->webhook_event_description    = 'Logs when a guest\'s details are added/updated.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->guest_id               = $guests_uid;
        $webhook_notification->data->property_uid           = $defaultProperty;
        add_webhook_notification($webhook_notification);
            
        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listguests'));
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
