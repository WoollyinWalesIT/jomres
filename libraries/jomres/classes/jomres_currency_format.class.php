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
		$mrConfig=getPropertySpecificSettings();
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
		$mrConfig=getPropertySpecificSettings();
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