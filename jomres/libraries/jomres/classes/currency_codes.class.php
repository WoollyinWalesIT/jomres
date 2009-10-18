<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

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