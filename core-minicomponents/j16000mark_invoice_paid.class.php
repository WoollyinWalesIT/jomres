<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000mark_invoice_paid
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $invoice_id = intval(jomresGetParam($_REQUEST, 'id', 0));

        if ($invoice_id == 0) {
            return;
        }

        jr_import('jrportal_invoice');
        $invoice = new jrportal_invoice();
        $invoice->id = $invoice_id;
        $invoice->getInvoice();

        if ($invoice->raised_date <= '1970-01-01 00:00:01') {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=view_invoice&id='.$invoice_id), 'You can`t mark an unissued invoice as paid.');
        }

        if ($invoice->subscription == '1') {
			jr_import('jrportal_subscriptions');
			$subscription = new jrportal_subscriptions();
			$subscription->subscription['id'] = $invoice->subscription_id;
			$subscription->getSubscription();
			$subscription->subscription['status'] = 1;
			$subscription->commitUpdateSubscription();
		}

        $invoice->mark_invoice_paid();

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=view_invoice&id='.$invoice_id), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
