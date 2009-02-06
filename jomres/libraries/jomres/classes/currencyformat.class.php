<?php
/**
#
 * Creates the Jomres currency format object
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Creates the Jomres currency format object
 #
* @package Jomres
* @since 2.6
#
*/
class jomres_currency_format
	{
	/**
	#
	* Constructor. Sets the required curency format
	#
	*/
	function jomres_currency_format($cformat=false)
		{
		global $mrConfig;
		if (!$cformat)
			$this->cformat  = $mrConfig['cformat'];
		else 
			$this->cformat  = $cformat;
		$this->currency_formats=array(
			'1'=>'123.456,00',
			'2'=>'123,456.00',
			'3'=>'123456.00',
			'4'=>'123 456.00',
			'5'=>'123 456,00',
			'6'=>'123456'
			);

		}

	/**
	#
	* Returns the number, formatted according to cformat variable
	#
	*/
	function get_formatted($number)
		{
		$retData="";
		switch ($this->cformat)
			{
			case '1':
				$retData=number_format($number, 2, ',', '.');
				break;
			case '2':
				$retData=number_format($number, 2, '.', ',');
				break;
			case '3':
				$retData=number_format($number, 2, '.', '');
				break;
			case '4':
				$retData=number_format($number, 2, '.', ' ');
				break;
			case '5':
				$retData=number_format($number, 2,  ',', ' ');
				break;
			case '6':
				$retData=number_format($number);
				break;
			default:
				$retData=number_format($number, 2, '.', ',');
				break;
			}
		return str_replace(" ", "&nbsp;", $retData);
		}

	/**
	#
	* Returns the currency format dropdown input
	#
	*/
	function get_currency_format_dropdowninput()
		{
		global $mrConfig;
		if (!isset($mrConfig['cformat']) )
			$mrConfig['cformat']='2';
		$fmts = array();
		foreach ($this->currency_formats as $key=>$format)
			{
			$fmts[] = jomresHTML::makeOption( $key, $format );
			}
		$dropdown= jomresHTML::selectList($fmts, 'cfg_cformat', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['cformat']);
		return $dropdown;
		}

	}
	
?>