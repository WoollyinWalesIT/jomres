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
	function currency_codes($code="")
		{
		$this->code='';
		if ($code != "")
			$this->code = trim($code);
			
		$this->codes=array(
			'AFA'=>'AFA Afghanistan Afghani',
			'ALL'=>'ALL Albanian Lek',
			'DZD'=>'DZD Algerian Dinar',
			'AON'=>'AON Angolan New Kwanza',
			'ANG'=>'ANG (Netherlands) Antillian Guilder',
			'AED'=>'AED (United) Arab Emirates Dirham',
			'ARS'=>'ARS Argentine Peso',
			'AWG'=>'AWG Aruban Florin (old guilder)',
			'AUD'=>'AUD Australian Dollar',
			'BSD'=>'BSD Bahamian Dollar',
			'BHD'=>'BHD Bahraini Dinar',
			'BDT'=>'BDT Bangladeshi Taka',
			'BBD'=>'BBD Barbados Dollar',
			'BZD'=>'BZD Belize Dollar',
			'XOF'=>'XOF Benin: CFA Franc BCEAO',
			'BMD'=>'BMD Bermudian Dollar',
			'BTN'=>'BTN Bhutan Ngultrum',
			'BOB'=>'BOB Bolivian Boliviano',
			'BWP'=>'BWP Botswana Pula',
			'BRL'=>'BRL Brazilian Real',
			'GBP'=>'GBP British Pound',
			'BND'=>'BND Brunei Dollar',
			'BGL'=>'BGL Bulgarian Lev',
			'BIF'=>'BIF Burundi Franc',
			'XOF'=>'XOF CFA Franc BCEAO',
			'XAF'=>'XAF CFA Franc BEAC',
			'KHR'=>'KHR Kampuchean (Cambodian) Riel',
			'CAD'=>'CAD Canadian Dollar',
			'CVE'=>'CVE Cape Verde Escudo ',
			'KYD'=>'KYD Cayman Islands Dollar',
			'XAF'=>'XAF CFA Franc BEAC',
			'CLP'=>'CLP Chilean Peso',
			'CNY'=>'CNY Chinese Yuan Renminbi',
			'COP'=>'COP Colombian Peso',
			'KMF'=>'KMF Comoros Franc',
			'XAF'=>'XAF Congo: CFA Franc BEAC',
			'CRC'=>'CRC Costa Rican Colon',
			'XOF'=>'XOF CFA Franc BCEAO',
			'HRK'=>'HRK Croatian Kuna',
			'CUP'=>'CUP Cuban Peso',
			'DKK'=>'DKK Danish Krone',
			'DJF'=>'DJF Djibouti Franc',
			'DOP'=>'DOP Dominican Peso',
			'EUR'=>'EUR Euro',
			'EGP'=>'EGP Egyption Pound',
			'SVC'=>'SVC El Salvador Colon',
			'EEK'=>'EEK Estonian Kroon',
			'ETB'=>'ETB Ethiopian Birr',
			'FKP'=>'FKP Falkland Islands Pound',
			'FJD'=>'FJD Fiji Dollar',
			'GMD'=>'GMD Gambian Dalasi',
			'GHC'=>'GHC Ghanaian Cedi',
			'GIP'=>'GIP Gibraltar Pound',
			'GTQ'=>'GTQ Guatemalan Quetzal',
			'GNF'=>'GNF Guiniea Franc',
			'GYD'=>'GYD Guyanan Dollar',
			'HTG'=>'HTG Haitian Gourde',
			'HNL'=>'HNL Honduran Lempira',
			'HKD'=>'HKD Hong Kong Dollar',
			'HUF'=>'HUF Hungarian Forint',
			'ISK'=>'ISK Iceland Krona',
			'INR'=>'INR Indian Rupee',
			'IDR'=>'IDR Indonesian Rupiah',
			'IRR'=>'IRR Iranian Rial',
			'IQD'=>'IQD Iraqi Dinar',
			'ILS'=>'ILS Israeili New Shekel',
			'JMD'=>'JMD Jamaican Dollar',
			'JPY'=>'JPY Japanese Yen',
			'JOD'=>'JOD Jordanian Dinar',
			'KZT'=>'KZT Kazakhstan Tenge',
			'KES'=>'KES Kenyan Schilling',
			'KRW'=>'KRW Korean Won',
			'KWD'=>'KWD Kuwaiti Dinar',
			'LAK'=>'LAK Lao Kip',
			'LVL'=>'LVL Latvian Lats',
			'LBP'=>'LBP Lebanese Pound',
			'LSL'=>'LSL Lesotho Loti ',
			'LRD'=>'LRD Liberian Dollar',
			'LYD'=>'LYD Libyan Dinar ',
			'LTL'=>'LTL Lithuanian Litas',
			'MOP'=>'MOP Macau Pataca',
			'MGA'=>'MGA Malagasy Franc ',
			'MWK'=>'MWK Malawi Kwacha',
			'MYR'=>'MYR Malaysian Ringgit',
			'MVR'=>'MVR Maldive Rufiyaa',
			'MRO'=>'MRO Mauritanian Ouguiya',
			'MUR'=>'MUR Mauritius Rupee',
			'MXN'=>'MXN Mexican Peso',
			'MNT'=>'MNT Mongolian Tugrik ',
			'MAD'=>'MAD Moroccan Dirham',
			'MZM'=>'MZM Mozambique Metical',
			'MMK'=>'MMK Myanmar Kyat',
			'ANG'=>'ANG Netherlands Antillian Guilder',
			'NAD'=>'NAD Namibian Dollar',
			'NPR'=>'NPR Nepalese Rupee',
			'NZD'=>'NZD New Zealand Dollar',
			'NIO'=>'NIO Nicaraguan Cordoba Oro',
			'NGN'=>'NGN Nigerian Naira',
			'KPW'=>'KPW North Korean Won',
			'NOK'=>'NOK Norwegian Kroner',
			'OMR'=>'OMR Omani Rial',
			'PKR'=>'PKR Pakistan Rupee ',
			'PAB'=>'PAB Panamanian Balboa',
			'PGK'=>'PGK Papua New Guinea Kina',
			'PYG'=>'PYG Paraguay Guarani',
			'PEN'=>'PEN Peruvian Neuevo Sol',
			'PHP'=>'PHP Philippine Peso',
			'PLZ'=>'PLZ Polish Zloty',
			'QAR'=>'QAR Qatari Rial',
			'ROL'=>'ROL Romanian Leu',
			'RUB'=>'RUB Russian Rouble',
			'WST'=>'WST Samoan Tala',
			'STD'=>'STD Sao Tome and Principe Dobra',
			'SAR'=>'SAR Saudi Riyal',
			'SCR'=>'SCR Seychelles Rupee',
			'SLL'=>'SLL Sierra Leone Leone',
			'SGD'=>'SGD Singapore Dollar',
			'SBD'=>'SBD Solomon Islands Dollar ',
			'SOS'=>'SOS Somali Schilling',
			'ZAR'=>'ZAR South African Rand',
			'LKR'=>'LKR Sri Lanka Rupee',
			'SHP'=>'SHP St. Helena Pound',
			'SDP'=>'SDP Sudanese Pound',
			'SZL'=>'SZL Swaziland Lilangeni',
			'SEK'=>'SEK Swedish Krona',
			'CHF'=>'CHF Swiss Franc',
			'SYP'=>'SYP Syrian Pound',
			'TWD'=>'TWD Taiwan Dollar',
			'THB'=>'THB Thai Baht',
			'TOP'=>'TOP Tongan Pa\'anga',
			'TTD'=>'TTD Trinidad and Tobago Dollar',
			'TND'=>'TND Tunisian Dinar',
			'TRL'=>'TRL Turkish Lira',
			'USD'=>'USD US Dollar',
			'UGS'=>'UGS Uganda Schilling',
			'UAG'=>'UAG Ukraine Hryvnia ',
			'UYP'=>'UYP Uruguayan Peso',
			'AED'=>'AED United Arab Emirates Dirham',
			'VUV'=>'VUV Vanuatu Vatu',
			'VEB'=>'VEB Venezuelan Bolivar',
			'VND'=>'VND Vietnamese Dong',
			'ZMK'=>'ZMK Zambian Kwacha',
			'ZWD'=>'ZWD Zimbabwe Dollar'
			);
			
		// Some of these symbols or their pre/post assignments may be wrong, if so, please email support@jomres.net and I'll put them right
		$this->symbols=array(
			'AFA'=>array("pre"=>"؋","post"=>"") ,
			'ALL'=>array("pre"=>"L","post"=>""),
			'DZD'=>array("pre"=>"دج","post"=>""),
			'AON'=>array("pre"=>"Kz","post"=>""),
			'ANG'=>array("pre"=>"NAƒ","post"=>""),
			'AED'=>array("pre"=>"د.إ","post"=>""),
			'ARS'=>array("pre"=>"$","post"=>""),
			'AWG'=>array("pre"=>"Afl.","post"=>""),
			'AUD'=>array("pre"=>"$","post"=>""),
			'BSD'=>array("pre"=>"$","post"=>""),
			'BHD'=>array("pre"=>".د.ب","post"=>""),
			'BDT'=>array("pre"=>"৳","post"=>""),
			'BBD'=>array("pre"=>"$","post"=>""),
			'BZD'=>array("pre"=>"BZ$","post"=>""),
			'XOF'=>array("pre"=>"CFA","post"=>""),
			'BMD'=>array("pre"=>"$","post"=>""),
			'BTN'=>array("pre"=>"Nu.","post"=>""),
			'BOB'=>array("pre"=>"Bs.","post"=>""),
			'BWP'=>array("pre"=>"P","post"=>""),
			'BRL'=>array("pre"=>"R$","post"=>""),
			'GBP'=>array("pre"=>"£","post"=>""),
			'BND'=>array("pre"=>"B$","post"=>""),
			'BGL'=>array("pre"=>"лв","post"=>""),
			'BIF'=>array("pre"=>"FBu","post"=>""),
			'XAF'=>array("pre"=>"FCFA","post"=>""),
			'KHR'=>array("pre"=>"riel","post"=>""),
			'CAD'=>array("pre"=>"$","post"=>""),
			'CVE'=>array("pre"=>"$","post"=>""),
			'KYD'=>array("pre"=>"$","post"=>""),
			'CLP'=>array("pre"=>"$","post"=>""),
			'CNY'=>array("pre"=>"¥","post"=>""),
			'COP'=>array("pre"=>"$","post"=>""),
			'KMF'=>array("pre"=>"CF","post"=>""),
			'CRC'=>array("pre"=>"₡","post"=>""),
			'HRK'=>array("pre"=>"kn","post"=>""),
			'CUP'=>array("pre"=>"₱","post"=>""),
			'DKK'=>array("pre"=>"","post"=>"kr"),
			'DJF'=>array("pre"=>"Fdj","post"=>""),
			'DOP'=>array("pre"=>"RD$","post"=>""),
			'EUR'=>array("pre"=>"","post"=>"€"),
			'EGP'=>array("pre"=>"£","post"=>""),
			'SVC'=>array("pre"=>"$","post"=>""),
			'EEK'=>array("pre"=>"","post"=>"kr"),
			'ETB'=>array("pre"=>"Br","post"=>""),
			'FKP'=>array("pre"=>"£","post"=>""),
			'FJD'=>array("pre"=>"$","post"=>""),
			'GMD'=>array("pre"=>"D","post"=>""),
			'GHC'=>array("pre"=>"¢","post"=>""),
			'GIP'=>array("pre"=>"£","post"=>""),
			'GTQ'=>array("pre"=>"Q","post"=>""),
			'GNF'=>array("pre"=>"FG","post"=>""),
			'GYD'=>array("pre"=>"$","post"=>""),
			'HTG'=>array("pre"=>"G","post"=>""),
			'HNL'=>array("pre"=>"L","post"=>""),
			'HKD'=>array("pre"=>"HK$","post"=>""),
			'HUF'=>array("pre"=>"Ft","post"=>""),
			'ISK'=>array("pre"=>"","post"=>"kr"),
			'INR'=>array("pre"=>"Rs","post"=>""),
			'IDR'=>array("pre"=>"Rp","post"=>""),
			'IRR'=>array("pre"=>"﷼","post"=>""),
			'IQD'=>array("pre"=>"ع.د","post"=>""),
			'ILS'=>array("pre"=>"₪","post"=>""),
			'JMD'=>array("pre"=>"J$","post"=>""),
			'JPY'=>array("pre"=>"¥","post"=>""),
			'JOD'=>array("pre"=>"JD","post"=>""),
			'KZT'=>array("pre"=>"лв","post"=>""),
			'KES'=>array("pre"=>"KSh","post"=>""),
			'KRW'=>array("pre"=>"₩","post"=>""),
			'KWD'=>array("pre"=>"د.ك","post"=>""),
			'LAK'=>array("pre"=>"₭","post"=>""),
			'LVL'=>array("pre"=>"Ls","post"=>""),
			'LBP'=>array("pre"=>"£","post"=>""),
			'LSL'=>array("pre"=>"M","post"=>""),
			'LRD'=>array("pre"=>"$","post"=>""),
			'LYD'=>array("pre"=>"ل.د","post"=>""),
			'LTL'=>array("pre"=>"Lt","post"=>""),
			'MOP'=>array("pre"=>"MOP$","post"=>""),
			'MGA'=>array("pre"=>"FMG","post"=>""),
			'MWK'=>array("pre"=>"MK","post"=>""),
			'MYR'=>array("pre"=>"RM","post"=>""),
			'MVR'=>array("pre"=>".ރ","post"=>""),
			'MRO'=>array("pre"=>"UM","post"=>""),
			'MUR'=>array("pre"=>"R","post"=>""),
			'MXN'=>array("pre"=>"$","post"=>""),
			'MNT'=>array("pre"=>"₮","post"=>""),
			'MAD'=>array("pre"=>"د.م.","post"=>""),
			'MZM'=>array("pre"=>"MT","post"=>""),
			'MMK'=>array("pre"=>"K","post"=>""),
			'ANG'=>array("pre"=>"NAƒ","post"=>""),
			'NAD'=>array("pre"=>"$","post"=>""),
			'NPR'=>array("pre"=>"रू.","post"=>""),
			'NZD'=>array("pre"=>"$","post"=>""),
			'NIO'=>array("pre"=>"C$","post"=>""),
			'NGN'=>array("pre"=>"₦","post"=>""),
			'KPW'=>array("pre"=>"₩","post"=>""),
			'NOK'=>array("pre"=>"","post"=>"kr"),
			'OMR'=>array("pre"=>"﷼","post"=>""),
			'PKR'=>array("pre"=>"Rs","post"=>""),
			'PAB'=>array("pre"=>"B/.","post"=>""),
			'PGK'=>array("pre"=>"K","post"=>""),
			'PYG'=>array("pre"=>"Gs","post"=>""),
			'PEN'=>array("pre"=>"S/.","post"=>""),
			'PHP'=>array("pre"=>"Php","post"=>""),
			'PLZ'=>array("pre"=>"zł","post"=>""),
			'QAR'=>array("pre"=>"ر.ق","post"=>""),
			'ROL'=>array("pre"=>"lei","post"=>""),
			'RUB'=>array("pre"=>"руб","post"=>""),
			'WST'=>array("pre"=>"WS$","post"=>""),
			'STD'=>array("pre"=>"Db","post"=>""),
			'SAR'=>array("pre"=>"﷼","post"=>""),
			'SCR'=>array("pre"=>"SRe","post"=>""),
			'SLL'=>array("pre"=>"Le","post"=>""),
			'SGD'=>array("pre"=>"$","post"=>""),
			'SBD'=>array("pre"=>"SI$","post"=>""),
			'SOS'=>array("pre"=>"S","post"=>""),
			'ZAR'=>array("pre"=>"R","post"=>""),
			'LKR'=>array("pre"=>"Rs","post"=>""),
			'SHP'=>array("pre"=>"£","post"=>""),
			'SDP'=>array("pre"=>"جنيه سوداني","post"=>""),
			'SZL'=>array("pre"=>"E","post"=>""),
			'SEK'=>array("pre"=>"","post"=>"kr"),
			'CHF'=>array("pre"=>"CHF","post"=>""),
			'SYP'=>array("pre"=>"£","post"=>""),
			'TWD'=>array("pre"=>"NT$","post"=>""),
			'THB'=>array("pre"=>"","post"=>"฿"),
			'TOP'=>array("pre"=>"T$","post"=>""),
			'TTD'=>array("pre"=>"$","post"=>""),
			'TND'=>array("pre"=>"د.ت","post"=>""),
			'TRL'=>array("pre"=>"TL","post"=>""),
			'USD'=>array("pre"=>"$","post"=>""),
			'UGS'=>array("pre"=>"Sh","post"=>""),
			'UAG'=>array("pre"=>"₴","post"=>""),
			'UYP'=>array("pre"=>"$","post"=>""),
			'AED'=>array("pre"=>"د.إ","post"=>""),
			'VUV'=>array("pre"=>"Vt","post"=>""),
			'VEB'=>array("pre"=>"Bs F","post"=>""),
			'VND'=>array("pre"=>"₫","post"=>""),
			'ZMK'=>array("pre"=>"ZK","post"=>""),
			'ZWD'=>array("pre"=>"$","post"=>"")
			);
		}
	
	function makeCodesDropdown()
		{
		$options = array();
		foreach ($this->codes as $k=>$v)
			{
			$options[] = jomresHTML::makeOption( $k, $v );
			}
		return jomresHTML::selectList( $options, 'cfg_property_currencycode','class="inputbox" size="1"', 'value', 'text', $this->code);
		}
	
	function getCode($code="")
		{
		if ($code=="")
			$code = $this->code;
		return $this->codes[$code];
		}
		
	function getSymbol($code="")
		{
		if ($code=="")
			$code = $this->code;
		return $this->symbols[$code];
		}
	}


?>