<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.11
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001save_deposit
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $MiniComponents->triggerEvent('02202'); // There is a 02202 script that will update the invoice
        
        $defaultProperty = getDefaultProperty();
        $contractUid = intval(jomresGetParam($_POST, 'contractUid', 0));
        $depositRef = getEscaped(jomresGetParam($_POST, 'depositRef', ''));

        if ($contractUid > 0) {
            $saveMessage = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', false);

            $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
            $jomres_messaging->set_message($saveMessage);

            $query = "UPDATE #__jomres_contracts SET `deposit_paid`='1',`deposit_ref`='$depositRef' WHERE contract_uid='".(int) $contractUid."' AND property_uid = '".(int) $defaultProperty."'";
            if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', false))) {
                trigger_error('Unable to update deposit entry, mysql db failure', E_USER_ERROR);
            }
            
            $webhook_notification                               = new stdClass();
            $webhook_notification->webhook_event                = 'deposit_saved';
            $webhook_notification->webhook_event_description    = 'Logs when deposit is added to a booking.';
            $webhook_notification->webhook_event_plugin         = 'core';
            $webhook_notification->data                         = new stdClass();
            $webhook_notification->data->contract_uid           = $contractUid;
            $webhook_notification->data->property_uid           = $defaultProperty;
            $webhook_notification->data->depositref             = $depositRef;
            add_webhook_notification($webhook_notification);
            
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.(int) $contractUid), $saveMessage);
        } else {
            trigger_error('Incorrect contract uid when saving deposit', E_USER_ERROR);
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
