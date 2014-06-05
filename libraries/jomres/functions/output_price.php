<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

function output_price( $value, $currencycode = "", $do_conversion = true, $zeroOK = true )
	{
	$price = (float) $value;

	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	if ( $jrConfig[ 'use_conversion_feature' ] != "1" ) $do_conversion = false;

	$mrConfig = getPropertySpecificSettings();
	$currfmt  = jomres_singleton_abstract::getInstance( 'jomres_currency_format' );
	$currfmt->get_format();

	$wholepart   = intval( $price );
	$decimalpart = $price - $wholepart;

	// To resolve issues of rounding (not sure if this is the best way, we'll need to monitor it). If the cents/pence/etc value is greater than .99 then we'll simply add 1 to the whole part.
	if ( $decimalpart > .99 ) $price = $wholepart + 1;

	if ( $currencycode == "" || $currencycode === true )
		{
		if ( !isset( $mrConfig[ 'property_currencycode' ] ) ) // for v4.5 converting the old currencyCode value to property_currencycode
		$mrConfig[ 'property_currencycode' ] = $mrConfig[ 'currencyCode' ];
		if ( $mrConfig[ 'property_currencycode' ] == "" ) $mrConfig[ 'property_currencycode' ] = "GBP";
		$currencycode = $mrConfig[ 'property_currencycode' ];
		}

	jr_import( "currency_codes" );
	if ( $jrConfig[ 'useGlobalCurrency' ] == "1" ) $currencycode = $jrConfig[ 'globalCurrencyCode' ];

	$converted_output_price = '';
	jr_import( 'jomres_currency_conversion' );
	$conversion        = new jomres_currency_conversion();
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	if ( is_null( $tmpBookingHandler->user_settings[ 'current_exchange_rate' ] ) )
		{
		$jomres_geolocation = jomres_singleton_abstract::getInstance( 'jomres_geolocation' );
		$jomres_geolocation->auto_set_user_currency_code();
		}
	$foreign = $tmpBookingHandler->user_settings[ 'current_exchange_rate' ];
	if ( $conversion->this_code_can_be_converted( $currencycode ) && $currencycode != $foreign && $do_conversion && $foreign != "" && $price > 0.00 )
		{
		$base                   = $currencycode;
		$converted_price        = $conversion->convert_sum( $price, $base, $foreign );
		$converted_currencycode = $foreign;

		$c_codes                = new currency_codes( $converted_currencycode );
		$symbols                = $c_codes->getSymbol();
		$converted_price        = $currfmt->get_formatted( $converted_price );
		$converted_output_price = $symbols[ 'pre' ] . $converted_price . $symbols[ 'post' ];

		$c_codes = new currency_codes( $currencycode );
		$symbols = $c_codes->getSymbol();

		$price = $currfmt->get_formatted( $price );
		$price = $symbols[ 'pre' ] . $price . $symbols[ 'post' ];
		$price = "" . $converted_output_price . " <span>(" . $price . ")</span> ";
		}
	else
		{
		$c_codes = new currency_codes( $currencycode );
		$symbols = $c_codes->getSymbol();

		if ( $price > 0.00 || $zeroOK )
			{
			$price = $currfmt->get_formatted( $price );
			$price = $symbols[ 'pre' ] . $price . $symbols[ 'post' ];
			}
		else
			{
			$price = " " . $symbols[ 'pre' ] . jr_gettext( '_JOMRES_PRICE_ON_APPLICATION', _JOMRES_PRICE_ON_APPLICATION, false, false ) . $symbols[ 'post' ];
			}
		}

	return $price;
	}

	