<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

// Gets the exchange rates and stores them in a temporary file. Updates the exchange rates daily, or whenever the exchange rate temp file doesn't exist.

class jomres_currency_exchange_rates
    {
    function jomres_currency_exchange_rates( $base = '', $update_now = false )
        {
        $this->update_now      = $update_now;
        $this->feature_enabled = true;
        $siteConfig            = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
        $jrConfig              = $siteConfig->get();
        // if ($jrConfig['use_conversion_feature'] != "1" )
        // $this->feature_enabled = false;

        $this->exchange_rates = array ();
        if ( $base == "" ) $this->base_code = "GBP";
        else
        $this->base_code = $base;
        $this->exchange_rate_classfile = JOMRESPATH_BASE . JRDS . 'temp' . JRDS . 'exchangerates_' . $this->base_code . '.class.php';
        $this->init();
        }

    function init()
        {
        if ( !$this->feature_enabled ) return;

        $current_rates = $this->get_exchange_rates();

        $update_exchange_rates = false;
        if ( !$this->exchange_rate_file_exists() ) $update_exchange_rates = true;
        elseif ( $this->exchange_rate_file_expired() ) $update_exchange_rates = true;
        elseif ( $this->update_now ) $update_exchange_rates = true;
        elseif ( count( $current_rates->rates ) == 0 ) $update_exchange_rates = true;

        if ( $update_exchange_rates )
            {
            $this->update_exchange_rates();
            $this->save_rates();
            }
        $rates = $this->get_exchange_rates();
        }

    function get_exchange_rates()
        {
        if ( !$this->feature_enabled ) return;
        if ( !file_exists( $this->exchange_rate_classfile ) )
            {
            $this->update_exchange_rates();
            $this->save_rates();
            }
        if ( file_exists( $this->exchange_rate_classfile ) )
            {
            require_once( $this->exchange_rate_classfile );
            $rates = new jomres_currency_exchange_rates_temp_data();
            set_showtime( 'temp_exchangerate_data', $rates->rates );

            return $rates;
            }
        else
        return array ();

        }

    function exchange_rate_file_expired()
        {
        if ( !$this->feature_enabled ) return;
        $expired       = false;
        $last_modified = date( "Y/m/d", filemtime( $this->exchange_rate_classfile ) );
        $today         = date( "Y/m/d", time() );
        if ( $today != $last_modified ) $expired = true;

        return $expired;
        }

    function exchange_rate_file_exists()
        {
        if ( !$this->feature_enabled ) return;
        $exists = false;
        if ( file_exists( $this->exchange_rate_classfile ) ) $exists = true;

        return $exists;
        }

    function update_exchange_rates()
        {
        if ( !$this->feature_enabled ) return;

        $this->rates     = array ();
        $currenciesArray = array ();
        $currencyQuery   = "";
        jr_import( 'currency_codes' );
        $currency_code_class = new currency_codes();
        $currency_codes      = $currency_code_class->codes;
        ignore_user_abort( true ); // Should stop a user from visiting another page when we're getting the exchange rates. At some point, it might be wiser to encourage managers to set this as a cron job.
        foreach ( $currency_codes as $code => $rubbish )
            {
            $currencyQuery .= $this->base_code . $code . "=X,";
            }
        $currencyQuery = substr( $currencyQuery, 0, -1 );
        $csv           = $this->csv_to_array( $this->get_exchange_rates_csv( $currencyQuery ), ',' );
        foreach ( $csv as $k )
            {
            $base_code                          = $k[ "from" ];
            $code                               = $k[ "to" ];
            $rate                               = $k[ "rate" ];
            $this->rates[ $base_code ][ $code ] = $rate;
            }
        ignore_user_abort( false );
        }

    function save_rates()
        {
        if ( !$this->feature_enabled ) return;

        if ( count( $this->rates ) == 0 ) return false;
        $lines = '$this->rates = array();
		';
        foreach ( $this->rates[ $this->base_code ] as $foreign => $rate )
            {
            if ( (float) $rate > 0 )
                {
                $lines .= '$this->rates["' . $this->base_code . '"]["' . $foreign . '"] = "' . $rate . '";
				';
                }
            }
        $string = '<?php

		// ################################################################
		defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
		// ################################################################
			
		class jomres_currency_exchange_rates_temp_data
			{
			function jomres_currency_exchange_rates_temp_data()
				{
				' . $lines . '
				}
			}';
        file_put_contents( $this->exchange_rate_classfile, $string );
        }

    function get_exchange_rates_csv( $currencyQuery )
        {
        if ( !$this->feature_enabled ) return;
        $url = 'http://download.finance.yahoo.com/d/quotes.csv?s=' . $currencyQuery . '&f=sl1d1t1ban&e=.csv';
        $c   = curl_init( $url );
        curl_setopt( $c, CURLOPT_HEADER, 0 );
        curl_setopt( $c, CURLOPT_USERAGENT, 'Jomres' );
        curl_setopt( $c, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $c, CURLOPT_TIMEOUT, 2000 );
        $csv = curl_exec( $c );

        curl_close( $c );

        return $csv;
        }

    function csv_to_array( $input, $delimiter = ',' )
        {
        $header  = null;
        $data    = array ();
        $csvData = str_getcsv( $input, "\n" );

        foreach ( $csvData as $csvLine )
            {
            if ( is_array( $csvLine ) ) $items = explode( $delimiter, $csvLine[ 0 ] );
            else
            $items = explode( $delimiter, $csvLine );
            if ( $items[ 4 ] != "N/A" )
                {
                $from_code = substr( $items[ 0 ], 0, 3 );
                $to_code   = substr( $items[ 0 ], 3, 3 );
                $data[ ]   = array ( "from" => $from_code, "to" => $to_code, "rate" => $items[ 4 ] );
                }
            }

        return $data;
        }
    }

// if(is_null($header))
// $header = explode($delimiter, $csvLine[0]);
// else
// {
// $items = explode($delimiter, $csvLine[0]);
// if ($items[0] == "G")
// {
// $items = explode($delimiter, $csvLine);
// $currencycode = substr($items[0],3,3);
// $data[][$currencycode] = $items[4];
// }
// else
// {
// $count = count($items);
// for($n = 0, $m = $count; $n < $m; $n++)
// {
// $prepareData[$header[$n]] = $items[$n];
// }
// $data[] = $prepareData;
// }

// }

if ( !function_exists( 'str_getcsv' ) )
    {
    function str_getcsv( $input, $delimiter = ',', $enclosure = '"', $escape = null, $eol = null )
        {
        $temp = fopen( "php://memory", "rw" );
        fwrite( $temp, $input );
        fseek( $temp, 0 );
        $r = array ();
        while ( ( $data = fgetcsv( $temp, 4096, $delimiter, $enclosure ) ) !== false )
            {
            $r[ ] = $data;
            }
        fclose( $temp );

        return $r;
        }
    }
?>