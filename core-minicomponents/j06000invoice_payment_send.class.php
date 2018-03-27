<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000invoice_payment_send
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $invoice_number = intval(jomresGetParam($_REQUEST, 'invoice_id', 0));
        $gateway = jomresGetParam($_REQUEST, 'gateway', '');

        if ($invoice_number == '' || $gateway == '') {
            return;
        }

        jr_import('jrportal_payment_reference');
        $jrportal_payment_reference = new jrportal_payment_reference();

        $jrportal_payment_reference->gateway = $gateway;
        $jrportal_payment_reference->invoice_id = $invoice_number;
        $jrportal_payment_reference->set_payment_refence($invoice_number);

        $obj = $jrportal_payment_reference->get_invoice_data($invoice_number);

        $path_to_classfile = $MiniComponents->registeredClasses['10510'][$gateway]['filepath'];
        require_once $path_to_classfile.'invoice_payment_send.class.php';

        try {
            $send = new invoice_payment_send($obj);
        } catch (Exception $e) {
            output_fatal_error($e);
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
