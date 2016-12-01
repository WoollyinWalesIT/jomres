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

class j06005list_gateways_for_invoice
{
    public function __construct($invoice_id = null)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if (is_null($invoice_id)) {
            $this->invoice_id = intval(jomresGetParam($_REQUEST, 'invoice_id', 0));
        } else {
            $this->invoice_id = (int) $invoice_id;
        }

        if ($this->invoice_id == 0) {
            return;
        }

        $invoice = jomres_singleton_abstract::getInstance('basic_invoice_details');
        $invoice->gatherData($this->invoice_id);

        if (!$thisJRUser->superPropertyManager) {
            if ($thisJRUser->id != $invoice->cms_user_id) {
                throw new Exception('User '.$thisJRUser->username.' is not authorised to view invoice id '.$this->invoice_id);
            }
        }

        $MiniComponents->triggerEvent('10509', array('invoice_id' => $this->invoice_id));
        $mcOutput = $MiniComponents->getAllEventPointsData('10509');
        if (count($mcOutput) > 0) {
            $output = array();
            $pageoutput = array();

            $rows = array();
            foreach ($mcOutput as $gateway) {
                $settings = get_plugin_settings($gateway['name'], $invoice->property_uid);

                if (isset($settings['active']) && $settings['active'] == '1') {
                    $r = $gateway;
                    $r['LINK'] = JOMRES_SITEPAGE_URL.'&task=invoice_payment_send&gateway='.$gateway['name'].'&invoice_id='.$this->invoice_id;
                    $r['PAYNOW'] = jr_gettext('_JRPORTAL_INVOICES_PAYNOW', '_JRPORTAL_INVOICES_PAYNOW', false);
                    $rows[] = $r;
                }
            }
            if (count($rows) > 0) {
                $output['PAGETITLE'] = jr_gettext('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', false);

                $pageoutput[ ] = $output;
                $tmpl = new patTemplate();
                $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
                $tmpl->readTemplatesFromInput('list_gateways_for_invoice.html');
                $tmpl->addRows('pageoutput', $pageoutput);
                $tmpl->addRows('rows', $rows);
                $this->retVals = $tmpl->getParsedTemplate();

                if (isset($_REQUEST['invoice_id'])) {
                    echo $this->retVals;
                }
            }
/* 			else
                {
                echo "<p class='alert alert-danger'>Error, no gateways have been configured.</p>";
                } */
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
