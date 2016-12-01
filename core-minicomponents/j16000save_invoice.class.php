<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000save_invoice
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $line_items = array();
        $invoice_data = array();

        $id = jomresGetParam($_REQUEST, 'id', 0);
        $p_line_item = jomresGetParam($_REQUEST, 'line_item', array());
        $p_init_qty = jomresGetParam($_REQUEST, 'init_qty', array());
        $p_init_discount = jomresGetParam($_REQUEST, 'init_discount', array());
        $p_recur_qty = jomresGetParam($_REQUEST, 'recur_qty', array());
        $p_recur_discount = jomresGetParam($_REQUEST, 'recur_discount', array());
        $status = jomresGetParam($_REQUEST, 'status', 0);
        $due_date = jomresGetParam($_REQUEST, 'due_date', '');

        $invoice_data[ 'id' ] = $id;
        $invoice_data[ 'status' ] = $status;
        $invoice_data[ 'due_date' ] = $due_date;

        foreach ($p_line_item as $li_id) {
            $line_items[ ] = array('id' => $li_id,
                                    'init_qty' => (int) $p_init_qty[ $li_id ],
                                    'init_discount' => (float) $p_init_discount[ $li_id ],
                                    'recur_qty' => (int) $p_recur_qty[ $li_id ],
                                    'recur_discount' => (float) $p_recur_discount[ $li_id ],
                                    );
        }

        jr_import('jrportal_invoice');
        $invoice = new jrportal_invoice();
        $invoice->id = $id;
        $invoice->getInvoice();
        $invoice->init_total = 0.00;

        if ($invoice->subscription) {
            jr_import('jrportal_subscriptions');
            $subscription = new jrportal_subscriptions();
            $subscription->id = $invoice->subscription_id;
            $subscription->getSubscription();
            $subscription->status = $status;
            $subscription->commitUpdateSubscription();
        }

        foreach ($line_items as $li) {
            $line_item_id = $li[ 'id' ];
            jr_import('jrportal_lineitem');
            $line_item = new jrportal_lineitem();
            $line_item->id = $line_item_id;
            $line_item->getLineItem();
            $li[ 'tax_code_id' ] = $line_item->tax_code;
            $invoice->update_line_item($li);
        }

        $invoice->status = $status;
        $invoice->commitUpdateInvoice();

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices'), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
