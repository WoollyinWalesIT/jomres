<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// When sending invoice payments to gateways, some gateways will not let you send more than one return element in the url when passing back to ( for example ) Jomres.
// This class is used to create a payment reference between an invoice id & a gateway so that gateway process, receiving payment confirmation, can then query this table for the invoice number etc

class jrportal_payment_reference
{
    public function __construct()
    {
    }

    public function set_payment_refence()
    {
        $query ="SELECT id FROM #__jomres_invoice_payment_ref WHERE invoice_id =".$this->invoice_id." LIMIT 1";
        $payment_reference = doSelectSql($query,1);   
        if (!$payment_reference){
            $query = "INSERT INTO #__jomres_invoice_payment_ref ( `invoice_id` , `gateway` ) VALUES ( '".$this->invoice_id."' , '".$this->gateway."' ) ";
        }else{
            $query ="UPDATE #__jomres_invoice_payment_ref SET gateway = '".$this->gateway."' WHERE id=".(int)$payment_reference;
        }
        try {
            $this->payment_reference = doInsertSql($query);

            return $this->payment_reference;
        } catch (Exception $e) {
            output_fatal_error($e);
        }
    }

    public function get_invoice_details_for_reference($id)
    {
        $this->payment_reference = (int) $id;
        $query = 'SELECT `invoice_id` FROM #__jomres_invoice_payment_ref  WHERE id = '.(int) $id.' LIMIT 1';
        $invoice_id = doSelectSql($query, 1);
        if ($invoice_id != false) {
            return $this->get_invoice_data($invoice_id);
        } else {
            return false;
        }
    }

    public function get_invoice_data($invoice_id)
    {
        $gateway_active = false;
        $query = 'SELECT `id`,`invoice_id`,`gateway` FROM #__jomres_invoice_payment_ref  WHERE invoice_id = '.(int) $invoice_id.' LIMIT 1';
        $payment_details = doSelectSql($query, 2);

        $invoice = jomres_singleton_abstract::getInstance('basic_invoice_details');
        $invoice->gatherData($invoice_id);

        if ((int) $invoice->contract_id > 0) {
            $query = 'SELECT tag FROM #__jomres_contracts WHERE contract_uid = '.(int) $invoice->contract_id;
            $booking_number = trim(doSelectSql($query, 1));
        } else {
            $booking_number = false;
        }

        $settings = array();
        if ((int) $invoice->subscription_id > 0 || (int) $invoice->is_commission > 0) {
            $query = "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = '".$payment_details['gateway']."' ";
            $settingsList = doSelectSql($query);
            foreach ($settingsList as $set) {
                $settings[$set->setting] = $set->value;
            }
            if ($settings['active'] == '1') {
                $gateway_active = true;
            }
        } else {
            $settings = get_plugin_settings($payment_details['gateway'], $invoice->property_uid);
            if ($settings['active'] == '1') {
                $gateway_active = true;
            }
        }

        if ($payment_details['gateway'] == 'paypal') {
            $paypal_settings = jomres_singleton_abstract::getInstance('jrportal_paypal_settings');
            $paypal_settings->get_paypal_settings();
            if ($paypal_settings->paypalConfigOptions[ 'override' ] == '1') {
                $settings[ 'usesandbox' ] = trim($paypal_settings->paypalConfigOptions[ 'usesandbox' ]);
                $settings[ 'currencycode' ] = trim($paypal_settings->paypalConfigOptions[ 'currencycode' ]);
                $settings[ 'paypalemail' ] = trim($paypal_settings->paypalConfigOptions[ 'email' ]);
                $settings[ 'pendingok' ] = '0';
                $settings[ 'receiveIPNemail' ] = '1';
                $settings[ 'override' ] = trim($paypal_settings->paypalConfigOptions[ 'override' ]);

                $settings[ 'client_id' ] = trim($paypal_settings->paypalConfigOptions[ 'client_id' ]);
                $settings[ 'secret' ] = trim($paypal_settings->paypalConfigOptions[ 'secret' ]);
                $settings[ 'client_id_sandbox' ] = trim($paypal_settings->paypalConfigOptions[ 'client_id_sandbox' ]);
                $settings[ 'secret_sandbox' ] = trim($paypal_settings->paypalConfigOptions[ 'secret_sandbox' ]);
                $settings[ 'active' ] = trim($paypal_settings->paypalConfigOptions[ 'active' ]);
            }
        }

        if ($gateway_active) {
            if ((int) $invoice->contract_id > 0 && (int) $invoice->property_uid > 0) {
                $current_contract_details = jomres_singleton_abstract::getInstance('basic_contract_details');
                $current_contract_details->gather_data($invoice->contract_id, $invoice->property_uid);

                $payer = $current_contract_details->contract[$invoice->contract_id]['guestdeets'];
            } else {
                $payer = false;
            }

            $invoice_data = array();
            $invoice_data['invoice_number'] = $payment_details['invoice_id'];
            $invoice_data['currencycode'] = $invoice->currencycode;
            $invoice_data['balance'] = $invoice->balance;
            $invoice_data['line_items'] = $invoice->lineitems;
            $invoice_data['property_uid'] = $invoice->property_uid;

            if ($booking_number) {
                $invoice_data['booking_number'] = $booking_number;
            } else {
                $invoice_data['booking_number'] = '';
            }

            if ($payer) {
                $invoice_data['payer'] = $payer;
            } else {
                $invoice_data['payer'] = array();
            }

            $this->gateway_settings = $settings;
            $this->invoice_data = $invoice_data;

            $this->gateway = $payment_details['gateway'];
            $this->invoice_id = $payment_details['invoice_id'];

            return array('gateway' => $this->gateway, 'invoice_data' => $invoice_data, 'gateway_settings' => $this->gateway_settings, 'invoice_id' => $this->invoice_id, 'payment_reference' => $payment_details['id']);
        } else {
            return false;
        }
    }

    public function mark_payment_reference_paid()
    {
        if (isset($this->payment_reference)) {
            $query = 'UPDATE #__jomres_invoice_payment_ref SET `paid` = 1 WHERE id = '.(int) $this->payment_reference;
            try {
                doInsertSql($query);
            } catch (Exception $e) {
                output_fatal_error($e);
            }
        }
    }
}
