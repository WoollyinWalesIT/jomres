<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
	private static $configInstance;
	private static $internal_debugging;

	public function __construct() 
		{
		self::$internal_debugging = false;
		$this->get_format();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new jomres_currency_format();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}

	function get_format($cformat=false)
		{
		$mrConfig=getPropertySpecificSettings(get_showtime('property_uid'));
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