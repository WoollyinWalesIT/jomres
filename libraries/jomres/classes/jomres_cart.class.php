<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_cart
{
    public function __construct()
    {
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        if (!isset($tmpBookingHandler->cart_data)) {
            $tmpBookingHandler->cart_data = array();
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $this->currency_code = $jrConfig[ 'globalCurrencyCode' ];
        $this->contract_total = 0.00;
        $this->deposit_required = 0.00;
        $this->number_of_bookings = 0;
        $this->items = array(); // Provides us with a simplified array with the individual bookings, and their currency converted total and deposit figures

        $this->calc_totals();
    }

    public function calc_totals()
    {
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $do_conversion = true;
        // if ($jrConfig['use_conversion_feature'] != "1")
        // $do_conversion = false;

        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        jr_import('jomres_currency_conversion');
        $conversion = new jomres_currency_conversion();
        if (count($tmpBookingHandler->cart_data) > 0) {
            //var_dump($tmpBookingHandler->cart_data);exit;
            foreach ($tmpBookingHandler->cart_data as $key => $data) {
                $contract_total = (float) $data[ 'contract_total' ];
                $deposit_required = (float) $data[ 'deposit_required' ];
                $currencycode = $data[ 'property_currencycode' ];
                if ($conversion->this_code_can_be_converted($currencycode) && $do_conversion) {
                    $contract_total = $conversion->convert_sum($contract_total, $currencycode, $this->currency_code);
                    $deposit_required = $conversion->convert_sum($deposit_required, $currencycode, $this->currency_code);
                }
                ++$this->number_of_bookings;
                $this->items[ $key ] = array('total' => $contract_total, 'deposit' => $deposit_required);
                $this->contract_total = $this->contract_total + $contract_total;
                $this->deposit_required = $this->deposit_required + $deposit_required;
            }
        }
    }

    public function move_from_temp_booking_to_cart_array()
    {
        $random_identifier = generateJomresRandomString(20);
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        set_booking_number();
        if (!isset($tmpBookingHandler->cart_data)) {
            $tmpBookingHandler->cart_data = array();
        }
        $tmpBookingHandler->cart_data[ $random_identifier ] = $tmpBookingHandler->tmpbooking;
        $tmpBookingHandler->cart_data[ $random_identifier ][ 'tmpguest' ] = $tmpBookingHandler->tmpguest;

        $tmpBookingHandler->resetTempBookingData();
        $tmpBookingHandler->resetTempGuestData();
        $tmpBookingHandler->saveAllData();
        // Have to do this here, because the redirect will exit the script from running before we get to the end of jomres.php, and the latter "close session" functionality will not be triggered
        $tmpBookingHandler->close_jomres_session();
        $this->calc_totals();
    }

    public function remove_from_cart($identifier)
    {
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        if (isset($tmpBookingHandler->cart_data[ $identifier ])) {
            unset($tmpBookingHandler->cart_data[ $identifier ]);
        }
        $tmpBookingHandler->saveAllData();
        // Have to do this here, because the redirect will exit the script from running before we get to the end of jomres.php, and the latter "close session" functionality will not be triggered
        $tmpBookingHandler->close_jomres_session();
        $this->calc_totals();
    }

    public function build_booking_form_data_for_payment_gateways()
    {
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        $tmpBookingHandler->resetTempBookingData();
        $tmpBookingHandler->updateBookingField('contract_total', $this->contract_total);
        $tmpBookingHandler->updateBookingField('deposit_required', $this->deposit_required);
        $tmpBookingHandler->updateBookingField('cart_payment', true);
        $tmpBookingHandler->updateBookingField('property_currencycode', $jrConfig[ 'globalCurrencyCode' ]);

        $tmpBookingHandler->saveAllData();
        $tmpBookingHandler->close_jomres_session();

        return array('contract_total' => $this->contract_total, 'deposit_required' => $this->deposit_required);
    }
}
