<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class jomres_currency_conversion
	{
	function jomres_currency_conversion()
		{
		$this->rates = get_showtime('temp_exchangerate_data');
		if (is_null($this->rates))
			{
			jr_import('jomres_currency_exchange_rates');
			$jomres_currency_exchange_rates = new jomres_currency_exchange_rates();
			$jomres_currency_exchange_rates->update_exchange_rates();
			$this->rates = get_showtime('temp_exchangerate_data');
			}
		}
	
	function this_code_can_be_converted($target_code)
		{
		$valid=false;
		foreach ($this->rates as $base=>$currency_codes)
			{
			if ( array_key_exists($target_code,$currency_codes) )
				$valid = true;
			}
		return $valid;
		}
	
	function convert_sum($figure,$base,$foreign)
		{
		$base_rate = $this->rates["GBP"][$base];
		$foreign_rate = $this->rates["GBP"][$foreign];
		$sum_in_gbp = $figure/$base_rate;
		$foreign_sum = $sum_in_gbp*$foreign_rate;
		return $foreign_sum;
		}

	function get_exchange_rate_dropdown($base='')
		{
		if ($base == '')
			$base = 'GBP';
		if (!$this->check_currency_code_valid($base))
			$base = 'GBP';

		jr_import('currency_codes');
		$currency_code_class = new currency_codes();
		$fmts = array();
		foreach ($this->rates["GBP"] as $currency_code=>$rate)
			{
			if ($this->check_currency_code_valid($currency_code))
				{
				$text = $currency_code_class->codes[$currency_code];
				$fmts[] = jomresHTML::makeOption( $currency_code, $text );
				}
			}
		$javascript = 'onChange="switch_exchange_rate(\''.JOMRES_SITEPAGE_URL_AJAX.'\',this.value)";';
		$dropdown= jomresHTML::selectList($fmts, 'user_current_currency_code', 'class="inputbox" size="1"'.$javascript, 'value', 'text', $base);
		return $dropdown;
		}
	
	function check_currency_code_valid($code)
		{
		$valid = false;
		foreach ($this->rates as $base=>$currency_codes)
			{
			if ( array_key_exists($code,$currency_codes) )
				$valid = true;
			}
		return $valid;
		}
	}
	
?>