<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

// Gets the exchange rates and stores them in a temporary file. Updates the exchange rates daily, or whenever the exchange rate temp file doesn't exist.

class jomres_currency_exchange_rates
	{
	function jomres_currency_exchange_rates($base = '')
		{
		$this->exchange_rates = array();
		if ($base == "")
			$this->base_code = "GBP";
		else
			$this->base_code = $base;
		$this->exchange_rate_classfile = JOMRESPATH_BASE.JRDS.'temp'.JRDS.'exchangerates_'.$this->base_code.'.class.php';
		$this->init();
		}
	
	function init()
		{
		$update_exchange_rates = false;
		if ( !$this->exchange_rate_file_exists() )
			$update_exchange_rates = true;
		elseif ( $this->exchange_rate_file_expired() )
			$update_exchange_rates = true;
		if ($update_exchange_rates)
			{
			$this->update_exchange_rates();
			$this->save_rates();
			}
		$this->get_exchange_rates();
		}
	
	function get_exchange_rates()
		{
		require_once ($this->exchange_rate_classfile);
		$rates = new jomres_currency_exchange_rates_temp_data();
		set_showtime('temp_exchangerate_data', $rates->rates );
		}
	
	function exchange_rate_file_expired()
		{
		$expired = false;
		$last_modified = filemtime  ( $this->exchange_rate_classfile );
		$today = time();
		$seconds_timediff = $today - $last_modified;
		if ($seconds_timediff>86400)
			$expired = true;
		return $expired;
		}
	
	function exchange_rate_file_exists()
		{
		$exists = false;
		if (file_exists($this->exchange_rate_classfile))
			$exists = true;
		return $exists;
		}
	
	function update_exchange_rates()
		{
		
		$this->rates = array();
		jr_import('currency_codes');
		$currency_code_class = new currency_codes();
		$currency_codes = $currency_code_class->codes;
		foreach ($currency_codes as $code=>$rubbish)
			{
			$rate = $this->get_exchange_rate($this->base_code,$code);
			$this->rates[$this->base_code][$code]=$rate;
			}
		}
	
	function save_rates()
		{
		if (count($this->rates)==0)
			return false;
		$lines = '$this->rates = array();
		';
		foreach ($this->rates[$this->base_code] as $foreign=>$rate)
			{
			if ( (float)$rate > 0)
				{
				$lines .= '$this->rates["'.$this->base_code.'"]["'.$foreign.'"] = "'.$rate.'";
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
				'.$lines.'
				}
			}';

		$fp=fopen($this->exchange_rate_classfile,'w');
		fwrite($fp, $string);
		fclose($fp);
		}
	
	function get_exchange_rate($base,$foreign)
		{
		$url = 'http://download.finance.yahoo.com/d/quotes.csv?s='
			.$base .$foreign .'=X&f=l1';
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_HEADER, 0);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		$rate = doubleval(curl_exec($c));
		curl_close($c);
		return $rate;
		}
	
	}
	
?>