<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * @package Jomres\Core\Functions
 *
 *          Output a final price value with currency symbols.
 *
 *          Uses currency conversion settings to automatically convert prices to the selected price, determines the correct symbols to use for the selected currency.
 *
 */
function output_price($value, $currencycode = '', $do_conversion = true, $zeroOK = true, $just_code = false)
{
	$price = (float) number_format($value, 2, '.', '');

	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();
	if ($jrConfig[ 'use_conversion_feature' ] != '1') {
		$do_conversion = false;
	}

	$mrConfig = getPropertySpecificSettings();
	
	$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
	
	$currency_codes = jomres_singleton_abstract::getInstance('currency_codes');
	
	$jomres_currency_conversion = jomres_singleton_abstract::getInstance('jomres_currency_conversion');

	$currfmt = jomres_singleton_abstract::getInstance('jomres_currency_format');
	$currfmt->get_format();

	$wholepart = intval($price);
	$decimalpart = $price - $wholepart;

	// To resolve issues of rounding (not sure if this is the best way, we'll need to monitor it). If the cents/pence/etc value is greater than .99 then we'll simply add 1 to the whole part.
	if ($decimalpart > .99) {
		$price = $wholepart + 1;
	}

	if ($currencycode == '' || $currencycode === true) {
		if (!isset($mrConfig[ 'property_currencycode' ]) && isset($mrConfig[ 'currencyCode' ])) { // for v4.5 converting the old currencyCode value to property_currencycode
			$mrConfig[ 'property_currencycode' ] = $mrConfig[ 'currencyCode' ];
		}

		if (!isset($mrConfig[ 'property_currencycode' ])) {
			$mrConfig[ 'property_currencycode' ] = 'GBP';
		}
		$currencycode = $mrConfig[ 'property_currencycode' ];
	}
	
	if (!isset($jrConfig['currency_symbol_swap'])) {
		$jrConfig['currency_symbol_swap'] = '0';
	}

	if ($jrConfig[ 'useGlobalCurrency' ] == '1') {
		$currencycode = $jrConfig[ 'globalCurrencyCode' ];
		$mrConfig['currency_symbol_swap'] = $jrConfig[ 'currency_symbol_swap' ];
	}

	$converted_output_price = '';

	if (!isset($tmpBookingHandler->user_settings[ 'current_exchange_rate' ])) {
		$jomres_geolocation = jomres_singleton_abstract::getInstance('jomres_geolocation');
		$jomres_geolocation->auto_set_user_currency_code();
	}
	$foreign = $tmpBookingHandler->user_settings[ 'current_exchange_rate' ];

	if ($jomres_currency_conversion->this_code_can_be_converted($currencycode) && $currencycode != $foreign && $do_conversion && $foreign != '' && $price > 0.00) {
		$base = $currencycode;
		$converted_price = $jomres_currency_conversion->convert_sum($price, $base, $foreign);
		$converted_currencycode = $foreign;

		$symbols = $currency_codes->getSymbol($converted_currencycode);
		
		if (!isset($mrConfig['currency_symbol_swap'])) {
			$mrConfig['currency_symbol_swap'] = '0';
		}

		if ($mrConfig['currency_symbol_swap'] == '1') {
			$tmp_pre = $symbols[ 'pre' ];
			$tmp_post = $symbols[ 'post' ];
			$symbols[ 'pre' ] = $tmp_post;
			$symbols[ 'post' ] = $tmp_pre;
		}

		$converted_price = $currfmt->get_formatted($converted_price);
		$converted_output_price = $symbols[ 'pre' ].$converted_price.$symbols[ 'post' ];

		$symbols = $currency_codes->getSymbol($currencycode);

		$price = $currfmt->get_formatted($price);
		$price = $symbols[ 'pre' ].$price.$symbols[ 'post' ];

		$original_price_template = simple_template_output(JOMRES_TEMPLATEPATH_FRONTEND, 'output_price_native_price.html', $price);
		
		$price = ''.$converted_output_price.$original_price_template;
		//$price = $converted_output_price;
	} else {
		$symbols = $currency_codes->getSymbol($currencycode);
		
		if (!isset($mrConfig['currency_symbol_swap'])) {
			$mrConfig['currency_symbol_swap'] = '0';
		}

		if ($mrConfig['currency_symbol_swap'] == '1') {
			$tmp_pre = $symbols[ 'pre' ];
			$tmp_post = $symbols[ 'post' ];
			$symbols[ 'pre' ] = $tmp_post;
			$symbols[ 'post' ] = $tmp_pre;
		}

		if ($price > 0.00 || $zeroOK) {
			$price = $currfmt->get_formatted($price);
			$price = $symbols[ 'pre' ].$price.$symbols[ 'post' ];
		} else {
			if ($mrConfig['poa_price'] != '') {
				$poa_price = (float)$mrConfig['poa_price'];
				$price = $symbols[ 'pre' ].$poa_price.$symbols[ 'post' ];
			} else {
				$price = ' '.$symbols[ 'pre' ].jr_gettext('_JOMRES_PRICE_ON_APPLICATION', '_JOMRES_PRICE_ON_APPLICATION', false, false).$symbols[ 'post' ];
			}
		}
	}
	
	if ($just_code == true) {
		return $currencycode;
	} else {
		return $price;
	}
}
