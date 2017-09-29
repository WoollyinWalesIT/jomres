<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.13
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j02202a_update_invoice
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $defaultProperty = getDefaultProperty();
        $contractUid = intval(jomresGetParam($_POST, 'contractUid', 0));
		$depositRef = getEscaped(jomresGetParam($_POST, 'depositRef', ''));

        if ($contractUid > 0) {
            // This is a security check because we don't have a property uid associated with invoices
            $query = 'SELECT contract_uid,deposit_required FROM #__jomres_contracts WHERE contract_uid = '.$contractUid.' AND property_uid = '.$defaultProperty;
            $result = doSelectSql($query);

            if (count($result) == 1) {
                $deposit_received = jomresGetParam($_POST, 'deposit_received', 0.00);

                $today = outputDate(date('Y/m/d'));

                jr_import('jrportal_invoice');
                $invoice = new jrportal_invoice();
                $invoice->id = $invoice->get_invoice_id_by_contract_uid($contractUid);
                $invoice->getInvoice();

                $line_items = array('tax_code_id' => 0,
                                         'name' => jr_gettext('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', false, false),
                                         'description' => '('.$today.' - Ref: '.$depositRef.')',
                                         'init_price' => 0 - $deposit_received,
                                         'init_qty' => 1,
                                         'init_discount' => 0,
                                         'is_payment' => 1,
                                         );
                $invoice->add_line_item($line_items);
                $invoice->commitUpdateInvoice();
            } else {
                error_logging("Couldn't corrolate contract uid with user's current property.");
            }
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
