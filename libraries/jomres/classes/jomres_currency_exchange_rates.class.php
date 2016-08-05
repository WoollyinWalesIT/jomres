<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

// Gets the exchange rates and stores them in a temporary file. Updates the exchange rates daily, or whenever the exchange rate temp file doesn't exist.

class jomres_currency_exchange_rates
	{
	function __construct( $base = '', $update_now = false )
		{
		$this->update_now      = $update_now;
		$this->feature_enabled = true;
		$siteConfig            = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig              = $siteConfig->get();
		$this->app_id = trim($jrConfig['openexchangerates_api_key']);

		$this->exchange_rates = array ();
		$this->rates     = array ();
		
		if ( $base == "" ) 
			$this->base_code = "GBP";
		else
			$this->base_code = $base;
		$this->exchange_rate_classfile = JOMRESPATH_BASE . JRDS . 'temp' . JRDS . 'exchangerates_' . $this->base_code . '.class.php';
		$this->init();
		}

	function init()
		{
		if ( !$this->feature_enabled ) 
			return;

		$current_rates = $this->get_exchange_rates();

		$update_exchange_rates = false;
		if ( !$this->exchange_rate_file_exists() ) 
			$update_exchange_rates = true;
		elseif ( $this->exchange_rate_file_expired() ) 
			$update_exchange_rates = true;
		elseif ( $this->update_now ) 
			$update_exchange_rates = true;
		elseif ( count( $current_rates->rates ) == 0 ) 
			$update_exchange_rates = true;

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
		if ($this->app_id == "") return;
		
		$this->rates     = array ();
		jr_import( 'currency_codes' );
		$currency_code_class = new currency_codes();
		$currency_codes      = $currency_code_class->codes;
		ignore_user_abort( true ); // Should stop a user from visiting another page when we're getting the exchange rates. At some point, it might be wiser to encourage managers to set this as a cron job.
		$json           = $this->get_openexchangerates_rates();
		if (is_null($json))
			{
			$message = "After reading exchange rate file, the json variable is found to be NULL. The most likely cause is either CURL not working/firewalled, or the API isn't set/is wrong.";
			logging::log_message('Jomres started' , "Core" , "ERROR" );
			return;
			}

		// We can safely assume that there's a GBP exchange rate (at least, for the forseeable future. If there isn't, then the world has probably been invaded by aliens and exchange rates in Jomres is the least of our problems. Rule Britannia and all that. )
		$GBP_rate = $json->GBP;

		
		foreach ( $currency_codes as $k=>$v )
			{
			if (isset($json->$k) && $k != "GBP" )
				{
				$base_code                          = $this->base_code;
				$code                               = $k;
				$rate                               = number_format((float)$json->$k/$GBP_rate, 4, '.', '') ; // Cross exchange rate calculation. As the base exchange rate in Jomres is GBP we have to convert the 3rd change rate to GBP before saving it. The Base rate of Open Exchange Rates is USD
				$this->rates[ $base_code ][ $code ] = $rate;
				}
			}
		ignore_user_abort( false );
		}

	function save_rates()
		{
		if ( !$this->feature_enabled ) return;

		if ( count( $this->rates ) == 0 ) return false;
		$lines = '$this->rates = array();
		';
		$this->rates[ $this->base_code ][ $this->base_code ] = 1;
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
			function __construct()
				{
				' . $lines . '
				}
			}';
		file_put_contents( $this->exchange_rate_classfile, $string );
		}
	
	// 
	
	
	
	function get_openexchangerates_rates()
		{
		$url = 'http://openexchangerates.org/api/latest.json?app_id='.$this->app_id;
		if ( !$this->feature_enabled ) 
			return;
		
		logging::log_message('Starting curl call to '.$url , "Curl" , "DEBUG" );
		$logging_time_start = microtime(true);
		
		$c   = curl_init( $url );
		curl_setopt( $c, CURLOPT_HEADER, 0 );
		curl_setopt( $c, CURLOPT_USERAGENT, 'Jomres' );
		curl_setopt( $c, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $c, CURLOPT_TIMEOUT, 2000 );
		$json = curl_exec( $c );
		curl_close( $c );
		
		$logging_time_end = microtime(true);
		$logging_time = $logging_time_end - $logging_time_start;
		logging::log_message('Curl call took '.$logging_time. " seconds " , "Curl" , "DEBUG" );
		
		$result = json_decode($json);
		if (is_null($result) || ( isset($result->error) && $result->error == true ) )
			{
			if (is_null($result) )
				$message = "After reading exchange rate file, the json variable is found to be NULL. The most likely cause is either CURL not working/firewalled, or the API isn't set/is wrong.";
			else
				$message = $result->description;
			logging::log_message($message , "Core" , "ERROR" );
			return null ;
			}
		else
			return $result->rates;
		
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