<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta2.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

function get_property_price_for_display_in_lists($property_uid)
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

    $mrConfig = getPropertySpecificSettings($property_uid);

    set_showtime('property_uid', $property_uid);

    $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
    $current_property_details->gather_data($property_uid);

    $plugin_will_provide_lowest_price = false;

    $MiniComponents->triggerEvent('07015', array('property_uid' => $property_uid)); // Optional

    $mcOutput = $MiniComponents->getAllEventPointsData('07015');

    if (!empty($mcOutput)) {
        foreach ($mcOutput as $key => $val) {
            if ($val == true) {
                $plugin_will_provide_lowest_price = true;
                $controlling_plugin = $key;
            }
        }
    }

    $multiplier = 1;
    if (!isset($mrConfig[ 'booking_form_daily_weekly_monthly' ])) { // This shouldn't be needed, as the setting is automatically pulled from jomres_config.php, but there's always one weird server...
    $mrConfig[ 'booking_form_daily_weekly_monthly' ] = 'D';
    }

    switch ($mrConfig[ 'booking_form_daily_weekly_monthly' ]) {
        case 'D':
            $multiplier = 1;
            break;
        case 'W':
            if ($mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] != '1') {
                $multiplier = 7;
            }
            break;
        case 'M':
            $multiplier = 30;
            break;
    }

    $price = 0.00;
    $output_lowest = false;
    if ($plugin_will_provide_lowest_price) {
        $output_lowest = true;
        $plugin_price = $MiniComponents->specificEvent('07016', $controlling_plugin, array('property_uid' => $property_uid));
        if (!is_null($plugin_price)) {
            $pre_text = $plugin_price[ 'PRE_TEXT' ];
            $price = $plugin_price[ 'PRICE' ];
            $post_text = $plugin_price[ 'POST_TEXT' ];
        }
    } else {
        $pricesFromArray = array();
        $searchDate = date('Y/m/d');
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        if (isset($_REQUEST[ 'arrivalDate' ]) && $_REQUEST[ 'arrivalDate' ] != '') {
            $arrivalDate = jomresGetParam($_REQUEST, 'arrivalDate', '');
            if (isset($_REQUEST[ 'pdetails_cal' ])) {
                $arrivalDate = JSCalmakeInputDates($arrivalDate);
            }
            $searchDate = JSCalConvertInputDates($arrivalDate);
        } elseif (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) && trim($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) != '') {
            $searchDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ];
        }

        $query = 'SELECT property_uid, roomrateperday FROM #__jomres_rates WHERE property_uid = '.(int) $property_uid." AND DATE_FORMAT('".$searchDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d') AND roomrateperday > '0' ";
        $tariffList = doSelectSql($query);
        if (!empty($tariffList)) {
            foreach ($tariffList as $t) {
                if (!isset($pricesFromArray[ $t->property_uid ])) {
                    $pricesFromArray[ $t->property_uid ] = $t->roomrateperday;
                } elseif (isset($pricesFromArray[ $t->property_uid ]) && $pricesFromArray[ $t->property_uid ] > $t->roomrateperday) {
                    $pricesFromArray[ $t->property_uid ] = $t->roomrateperday;
                }
            }
        }
        if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
            if (isset($pricesFromArray[ $property_uid ])) {
                if ($mrConfig[ 'prices_inclusive' ] == '0') {
                    $price = output_price($current_property_details->get_gross_accommodation_price($pricesFromArray[ $property_uid ], $property_uid) * $multiplier, '', true, true);
                } else {
                    $price = output_price($pricesFromArray[ $property_uid ] * $multiplier, '', true, true);
                }

                if ($mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == '1' && $mrConfig[ 'tariffmode' ] == '1') {
                    $post_text = '&nbsp;'.jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK');
                } else {
                    if ($mrConfig[ 'wholeday_booking' ] == '1') {
                        if ($mrConfig[ 'perPersonPerNight' ] == '0') {
                            $post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY');
                        } else {
                            $post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY');
                        }
                    } else {
                        switch ($mrConfig[ 'booking_form_daily_weekly_monthly' ]) {
                            case 'D':
                                if ($mrConfig[ 'wholeday_booking' ] == '1') {
                                    $post_text = jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY');
                                } else {
                                    if ($mrConfig[ 'perPersonPerNight' ] == '0') {
                                        $post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PN', '_JOMRES_FRONT_TARIFFS_PN');
                                    } else {
                                        $post_text = '&nbsp;'.jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN', '_JOMRES_FRONT_TARIFFS_PPPN');
                                    }
                                }
                                break;
                            case 'W':
                                $post_text = jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY');
                                break;
                            case 'M':
                                $post_text = jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY');
                                break;
                        }
                    }
                }
                $pre_text = jr_gettext('_JOMRES_TARIFFSFROM', '_JOMRES_TARIFFSFROM', false, false);
            } else {
                $pre_text = jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE', '_JOMRES_COM_MR_EXTRA_PRICE');
                $price = output_price($current_property_details->real_estate_property_price, '', true, false);
                $post_text = '';
            }
        } else {
            $pre_text = jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE', '_JOMRES_COM_MR_EXTRA_PRICE', '', true, false);
            $price = output_price($current_property_details->real_estate_property_price);
            $post_text = '';
        }
    }

    return array('PRE_TEXT' => $pre_text, 'PRICE' => $price, 'POST_TEXT' => $post_text);
}
