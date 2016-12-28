<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j02226deleteguest
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $guestUid = jomresGetParam($_REQUEST, 'guestUid', 0);
        $defaultProperty = getDefaultProperty();
        $saveMessage = jr_gettext('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', false);
        $query = "SELECT guest_uid,contract_uid FROM #__jomres_contracts WHERE guest_uid = '".(int) $guestUid."' AND property_uid = '".(int) $defaultProperty."' AND cancelled != 1";
        $bookingCountThisProperty = doSelectSql($query);
        $query = "SELECT guest_uid FROM #__jomres_contracts WHERE guest_uid = '".(int) $guestUid."' AND cancelled != 1";
        $bookingCountAllPropertys = doSelectSql($query);
        if (count($bookingCountThisProperty) == count($bookingCountAllPropertys)) {
            if (count($bookingCountThisProperty) > 0) {
                foreach ($bookingCountThisProperty as $contract_uid) {
                    //echo "Deleting room bookings";

                    $query = "DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int) $contract_uid->contract_uid."' AND property_uid = '".(int) $defaultProperty."'";
                    //echo $query;echo "<br>";
                    if (!doInsertSql($query, '')) {
                        trigger_error('Unable to delete from room bookings table, mysql db failure', E_USER_ERROR);
                    }

                    $query = "UPDATE #__jomres_contracts SET `cancelled`='1', `cancelled_timestamp`='".date('Y-m-d H:i:s')."', `cancelled_reason`='Guest deleted' WHERE contract_uid = '".(int) $contract_uid->contract_uid."' AND property_uid = '".(int) $defaultProperty."'";
                    //echo $query;echo "<br>";
                    if (!doInsertSql($query, '')) {
                        trigger_error('Unable to update cancellations data for contract'.(int) $contract_uid->contract_uid.', mysql db failure', E_USER_ERROR);
                    }
                }
            }
            //else
            //	echo "No bookings to delete";
            $query = "DELETE FROM #__jomres_guests WHERE guests_uid = '".(int) $guestUid."' AND property_uid = '".(int) $defaultProperty."'";
            //echo $query;
            if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_DELETE_GUEST', '_JOMRES_MR_AUDIT_DELETE_GUEST', false))) {
                trigger_error(jr_gettext('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', false), E_USER_ERROR);
            }
            
            $webhook_notification                               = new stdClass();
            $webhook_notification->webhook_event                = 'guest_delete';
            $webhook_notification->webhook_event_description    = 'Logs when a guest is deleted.';
            $webhook_notification->webhook_event_plugin         = 'core';
            $webhook_notification->data                         = new stdClass();
            $webhook_notification->data->guest_id               = $guestUid;
            $webhook_notification->data->property_uid           = $defaultProperty;
            add_webhook_notification($webhook_notification);
            
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listguests'), $saveMessage);
        } else {
            echo jr_gettext('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', false);
        }
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
