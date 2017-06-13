<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.4
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001mark_booking_invoice_paid
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!$thisJRUser->userIsManager) {
            return;
        }

        $invoice_id = intval(jomresGetParam($_REQUEST, 'id', 0));

        if ($invoice_id == 0) {
            return;
        }

        $property_uid = getDefaultProperty();

        $query = 'SELECT contract_id FROM #__jomresportal_invoices WHERE id = '.$invoice_id.' AND property_uid = '.(int) $property_uid; // Need to associate the invoice id and the property uid. If we don't, then it could be a commission type invoice, which is not associated with a property uid and we don't want managers marking them as paid.
        $result = doSelectSql($query, 1);

        if (!$result || (int) $result < 1) { //invoice could be a subscription or commission one, so contract id must be > 0
            trigger_error('Unable to view invoice, cannot corrolate id with property uid.', E_USER_ERROR);

            return;
        }

        jr_import('jrportal_invoice');
        $invoice = new jrportal_invoice();
        $invoice->id = $invoice_id;
        $invoice->getInvoice();
        $invoice->mark_invoice_paid();

        addBookingNote($invoice->contract_id, $property_uid, jr_gettext('_JOMRES_INVOICE_MARKEDASPAID', '_JOMRES_INVOICE_MARKEDASPAID', false, false));
        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$invoice_id), '');
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
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
