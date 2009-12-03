<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


class currency_codes
	{
	function currency_codes()
		{
		$this->id='';
		$this->codes=array(
			'AUD'=>'AUD Australia Dollars',
			'CAD'=>'CAD Canada Dollars',
			'CHF'=>'CHF Switzerland Francs',
			'CNY'=>'CNY China Yuan Renminbi',
			'DKK'=>'DKK Denmark Kroner',
			'EUR'=>'EUR Euro',
			'GBP'=>'GBP United Kingdom Pounds',
			'HKD'=>'HKD Hong Kong Dollars',
			'HUF'=>'HUF Hungary Forint',
			'INR'=>'INR India Rupees',
			'JPY'=>'JPY Japan Yen',
			'MXN'=>'MXN Mexico Pesos',
			'MYR'=>'MYR Malaysia Ringgits',
			'NIS'=>'NIS New Sheqel',
			'NOK'=>'NOK Norway Kroner',
			'NZD'=>'NZD New Zealand Dollars',
			'PLN'=>'PLN Poland Zlotych',
			'PHP'=>'PHP Philipino Pesos',
			'RUB'=>'RUB Russia Rubles',
			'SEK'=>'SEK Sweden Kronor',
			'SGD'=>'SGD Singapore Dollars',
			'THB'=>'THB Thailand Baht',
			'USD'=>'USD United States Dollars',
			'ZAR'=>'ZAR South Africa Rand'
			);
		}
	
	function makeCodesDropdown()
		{
		$options = array();
		foreach ($this->codes as $k=>$v)
			{
			$options[] = jomresHTML::makeOption( $k, $v );
			}
		return jomresHTML::selectList( $options, 'currencycode','class="inputbox" size="1"', 'value', 'text', $this->id);
		}	
	
	function getCode()
		{
		return $this->codes[$this->id];
		}
	}

?>