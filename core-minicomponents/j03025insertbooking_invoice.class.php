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

class j03025insertbooking_invoice
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $mrConfig = getPropertySpecificSettings();
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $this->results = array();
        if (isset($componentArgs[ 'contract_uid' ])) {
            $contract_uid = $componentArgs[ 'contract_uid' ];
        }
        if (isset($componentArgs[ 'secret_key_payment' ])) {
            $secret_key_payment = $componentArgs[ 'secret_key_payment' ];
        }

        if (isset($tmpBookingHandler->tmpbooking[ 'amend_contract' ])) {
            $amend_contract = $tmpBookingHandler->getBookingFieldVal('amend_contract');
            $amend_contractuid = $tmpBookingHandler->getBookingFieldVal('amend_contractuid');
        } else {
            $amend_contract = false;
        }

        jr_import('jrportal_invoice');

        $arrivalDate = $tmpBookingHandler->getBookingFieldVal('arrivalDate');
        $departureDate = $tmpBookingHandler->getBookingFieldVal('departureDate');
        $stayDays = $tmpBookingHandler->getBookingFieldVal('stayDays');
        $single_person_suppliment = $tmpBookingHandler->getBookingFieldVal('single_person_suppliment');
        $deposit_required = $tmpBookingHandler->getBookingFieldVal('deposit_required');
        $extras = $tmpBookingHandler->getBookingFieldVal('extras');
        $extrasquantities = $tmpBookingHandler->getBookingFieldVal('extrasquantities');
        $third_party_extras = unserialize($tmpBookingHandler->getBookingFieldVal('third_party_extras'));
        $room_total = $tmpBookingHandler->getBookingFieldVal('room_total');
        $room_total_nodiscount = $tmpBookingHandler->getBookingFieldVal('room_total_nodiscount');
        $tax = $tmpBookingHandler->getBookingFieldVal('tax');
        $discounts = $tmpBookingHandler->getBookingFieldVal('discounts');
        $resource = $tmpBookingHandler->getBookingFieldVal('resource');
        $property_uid = $tmpBookingHandler->getBookingFieldVal('property_uid');
        $extrasvalues_items = unserialize($tmpBookingHandler->getBookingFieldVal('extrasvalues_items'));
        $depositpaidsuccessfully = $tmpBookingHandler->getBookingFieldVal('depositpaidsuccessfully');
        $additional_line_items = unserialize($tmpBookingHandler->getBookingFieldVal('additional_line_items'));
        $total_in_party = $tmpBookingHandler->getBookingFieldVal('total_in_party');
        $room_allocations = unserialize($tmpBookingHandler->getBookingFieldVal('room_allocations'));

        //we`ll need this if wise price is enabled and we charge per person per night
        $guests_by_room = array();
        $guests_by_room_array_index = 0;
        if ($room_allocations != '') {
            foreach ($room_allocations as $k) {
                if (isset($k['number_allocated'])) {
                    $guests_by_room[] = $k['number_allocated'];
                }
            }
        }

        if ($resource == '1') {
            $depositPaid = true;
        } else {
            $depositPaid = false;
        }

        if ($depositpaidsuccessfully) {
            $depositPaid = true;
        }

        $new_contract_total = 0.00;
        if ($amend_contract && $amend_contractuid != 0 && $thisJRUser->userIsManager) {
            $new_contract_total = (float) $tmpBookingHandler->getBookingFieldVal('override_contract_total');
        }

        $line_items = array();

        if ($new_contract_total == 0.00) { //contract total is not overridden
            //Accommodation line item

            //Get the initial discount (wiseprice, lastminute, personal, partner, coupon discounts)
            $discount_amount = 0.00;
            $totalDiscountForRoom = 0.00;

            if (count($discounts) > 0) {
                foreach ($discounts as $d) {
                    $discount_amount = (float) $d[ 'discountfrom' ] - (float) $d[ 'discountto' ];

                    if ($d['type'] == 'MRP') { //wiseprice
                        if ($mrConfig['perPersonPerNight'] == '1') {
                            if ((int) $guests_by_room[$guests_by_room_array_index] > 0) {
                                $discount_amount = $discount_amount * (int) $guests_by_room[$guests_by_room_array_index];
                                ++$guests_by_room_array_index;
                            }
                        }

                        $discount_amount = $discount_amount * $stayDays;
                    }

                    $totalDiscountForRoom += $discount_amount;
                }
            }
            if (get_showtime('include_room_booking_functionality')) {
                $line_items[] = array('tax_code_id' => (int) $mrConfig[ 'accommodation_tax_code' ],
                                        'name' => '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',
                                        'description' => '('.outputDate($arrivalDate).' - '.outputDate($departureDate).')',
                                        'init_price' => $room_total_nodiscount,
                                        'init_qty' => 1,
                                        'init_discount' => 0 - $totalDiscountForRoom,
                                        );
            }

            //Deposit line item
            if ($depositPaid) {
                $line_items[] = array('tax_code_id' => 0,
                                       'name' => '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',
                                       'description' => '',
                                       'init_price' => 0 - $deposit_required,
                                       'init_qty' => 1,
                                       'init_discount' => 0,
                                       'is_payment' => 1,
                                       );
            }

            // Discount line items
            /*if ( count( $discounts ) > 0 )
                {
                foreach ( $discounts as $d )
                    {
                    $totalDiscountForRoom = (float) $d[ 'discountfrom' ] - (float) $d[ 'discountto' ];
                    $line_items[] = array ( 'tax_code_id' => 0,
                                            'name' => jr_gettext( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', '_JOMRES_AJAXFORM_BILLING_DISCOUNT', false, false ),
                                            'description' => '',
                                            'init_price' => "-" . $totalDiscountForRoom,
                                            'init_qty' => "1",
                                            'init_discount' => "0"
                                            );
                    }
                }*/

            //Single Person Supplement line item
            if ($single_person_suppliment > 0) {
                $line_items[] = array('tax_code_id' => (int) $mrConfig[ 'accommodation_tax_code' ],
                                        'name' => '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',
                                        'description' => '',
                                        'init_price' => $single_person_suppliment,
                                        'init_qty' => 1,
                                        'init_discount' => 0,
                                        );
            }

            //Extras and Extras taxes
            $jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');
            $extrasArray = explode(',', $extras);
            foreach ($extrasArray as $extraUid) {
                $query = "SELECT name,price,tax_rate FROM #__jomres_extras WHERE uid = '".(int) $extraUid."' ORDER BY name";
                $extrasList = doSelectSql($query);
                foreach ($extrasList as $theExtras) {
                    $query = "SELECT `model` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '".(int) $extraUid."'";
                    $model = doSelectSql($query, 1);

                    if ($model != '100') { // Model 10 is for commission
                        $quantity_multiplier = (float) $extrasvalues_items[ (int) $extraUid ][ 'quantity_multiplier' ];
                        $quant = $extrasquantities[ $extraUid ];
                        $quantities = $quantity_multiplier * $quant;
                        $extra_price = $theExtras->price;
                    } else {
                        $quantities = 1;
                        $extra_price = ($room_total / 100) * $theExtras->price;
                    }

                    if ($mrConfig[ 'prices_inclusive' ] == 1) {
                        if ($jrportal_taxrate->gather_data($theExtras->tax_rate)) {
                            $rate = (float) $jrportal_taxrate->rate;
                            $divisor = ($rate / 100) + 1;
                            $nett_price = $extra_price / $divisor;
                            $extra_price = $nett_price;
                        }
                    }

                    $line_items[] = array('tax_code_id' => $theExtras->tax_rate,
                        'name' => '_JOMRES_CUSTOMTEXT_EXTRANAME'.(string) $extraUid,
                        'description' => '',
                        'init_price' => $extra_price,
                        'init_qty' => $quantities,
                        'init_discount' => 0,
                        );
                }
            }

            //3rd party extras like Jintour tours
            if (count($third_party_extras) > 0 && $third_party_extras !== false) {
                foreach ($third_party_extras as $plugin) {
                    foreach ($plugin as $tpe) {
                        if (!isset($tpe[ 'tax_code_id' ])) {
                            $tpe[ 'tax_code_id' ] = 0;
                        }

                        $line_items[] = array('tax_code_id' => $tpe[ 'tax_code_id' ],
                                                'name' => $tpe[ 'description' ],
                                                'description' => $tpe[ 'description' ],
                                                'init_price' => $tpe[ 'untaxed_grand_total' ],
                                                'init_qty' => 1,
                                                'init_discount' => 0,
                                                );
                    }
                }
            }

            //Additional line items created by other plugins
            if (count($additional_line_items) > 0 && $additional_line_items !== false) {
                foreach ($additional_line_items as $plugin) {
                    foreach ($plugin as $tpe) {
                        if (!isset($tpe[ 'tax_code_id' ])) {
                            $tpe[ 'tax_code_id' ] = 0;
                        }

                        $line_items[] = array('tax_code_id' => $tpe[ 'tax_code_id' ],
                                                'name' => $tpe[ 'description' ],
                                                'description' => $tpe[ 'description' ],
                                                'init_price' => $tpe[ 'untaxed_grand_total' ],
                                                'init_qty' => 1,
                                                'init_discount' => 0,
                                                );
                    }
                }
            }
        } else { //contract total is overridden by the manager
            $line_items[] = array('tax_code_id' => (int) $mrConfig[ 'accommodation_tax_code' ],
                                    'name' => '_JOMRES_AJAXFORM_BILLING_TOTAL',
                                    'description' => '',
                                    'init_price' => number_format($new_contract_total, 2, '.', ''),
                                    'init_qty' => 1,
                                    'init_discount' => 0,
                                    );
        }

        //amending the invoice
        if ($amend_contract && $amend_contractuid != 0 && $thisJRUser->userIsManager) {
            $query = 'SELECT id FROM #__jomresportal_invoices WHERE contract_id = '.$amend_contractuid;
            $invoice_id = (int) doSelectSql($query, 1);

            $query = 'SELECT service_description,service_value,tax_code,service_qty FROM  #__jomres_extraservices WHERE contract_uid = '.$amend_contractuid.'';
            $extra_services = doSelectSql($query);

            if (count($extra_services) > 0) {
                foreach ($extra_services as $es) {
                    $line_items[] = array('tax_code_id' => (int) $es->tax_code,
                                            'name' => $es->service_description,
                                            'description' => '',
                                            'init_price' => number_format($es->service_value, 2, '.', ''),
                                            'init_qty' => number_format($es->service_qty, 2, '.', ''),
                                            'init_discount' => 0,
                                            );
                }
            }

            $invoice = new jrportal_invoice();
            $invoice->id = $invoice_id;
            $invoice->getInvoice();

            $invoice_data = array();
            $invoice_data[ 'id' ] = $invoice_id;
            $invoice->update_invoice($invoice_data, $line_items);
            $this->results = array('invoice_id' => $invoice->id);
        } else { //creating a new invoice
            $invoice_data = array();
            $invoice_data[ 'cms_user_id' ] = $tmpBookingHandler->tmpguest[ 'mos_userid' ];

            $invoice_data[ 'subscription' ] = false;

            if ($jrConfig[ 'useGlobalCurrency' ] == '1') {
                $invoice_data[ 'currencycode' ] = $jrConfig[ 'globalCurrencyCode' ];
            } else {
                $invoice_data[ 'currencycode' ] = $mrConfig[ 'property_currencycode' ];
            }

            $invoice = new jrportal_invoice();
            $invoice->contract_id = $contract_uid;
            $invoice->property_uid = $property_uid;

            if (!$secret_key_payment) {
                $invoice->create_new_invoice($invoice_data, $line_items);

                $query = 'UPDATE #__jomres_contracts SET invoice_uid = '.$invoice->id.' WHERE contract_uid = '.$contract_uid;
                doInsertSql($query, '');
            } elseif ($depositPaid) {
                //Deposit line item
                $deposit_paid_line_item_data = array('tax_code_id' => 0,
                                                      'name' => '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',
                                                      'description' => '',
                                                      'init_price' => 0 - $deposit_required,
                                                      'init_qty' => 1,
                                                      'init_discount' => 0,
                                                      );

                $query = 'SELECT id FROM #__jomresportal_invoices WHERE contract_id = '.$contract_uid;
                $invoice->id = (int) doSelectSql($query, 1);

                $invoice->getInvoice();
                $invoice->add_line_item($deposit_paid_line_item_data);
                $invoice->commitUpdateInvoice();
            }

            set_showtime('inserted_booking_invoice_id', $invoice->id);

            $tmp_init_total = number_format((float) $invoice->init_total, 2, '.', '');

            //Mark invoice pending or paid
            if ($depositpaidsuccessfully && $tmp_init_total == 0.00) {
                $invoice->mark_invoice_paid();
            } else {
                $invoice->mark_invoice_pending();
            }

            $this->results = array('invoice_id' => $invoice->id);
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
        return $this->results;
    }
}
