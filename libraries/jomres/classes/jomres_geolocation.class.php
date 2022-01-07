<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.1.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_geolocation
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->config = array();
		$this->detected_country = 'DE';
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if ( !$jomres_gdpr_optin_consent->user_consents_to_storage() ) {
			 $this->detected_country = '--';
		}
		
		$this->temp_dir_abs = JOMRES_TEMP_ABSPATH.'geolocation'.JRDS;
		
		if (!is_dir($this->temp_dir_abs)) {
			if (!@mkdir($this->temp_dir_abs)) {
				throw new Exception('Error, unable to make directory '.$this->temp_dir_abs." automatically. Please create the directory manually and ensure that it's writable by the web server");
			}
		}
		
		$this->init();
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function init()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		if (isset($jrConfig[ 'geolocation_api_key' ]) && $jrConfig[ 'geolocation_api_key' ] != '') {
			$this->api_key = $jrConfig[ 'geolocation_api_key' ];
		} else {
			$this->api_key = '';
		}
		
		$this->determine_user_location();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function determine_user_location()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		
		if ($this->api_key != '') {
			if (!isset($tmpBookingHandler->user_settings[ 'geolocated_country' ])) {
/* 				if (!isset($tmpBookingHandler->user_settings[ 'optin_for_gdpr' ])) {
					function show_gdpr_modal();
					return;
				} */
				
				$ip = get_remote_ip_number();

				$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();

				$hash = md5($ip);
				
				if (file_exists($this->temp_dir_abs.$hash)) {
					$this->detected_country = file_get_contents($this->temp_dir_abs.$hash);
					$tmpBookingHandler->user_settings[ 'geolocated_country' ] = $this->detected_country;
				} else {
					if ($ip != '127.0.0.1' && $ip != '0.0.0.0' && $jomres_gdpr_optin_consent->user_consents_to_storage() ) {
						jr_import('jomres_ip2locationlite');
						$ipLite = new jomres_ip2location_lite();
						$ipLite->setKey($this->api_key);
						$locations = $ipLite->getCountry($ip);
						
						if ($locations[ 'statusCode' ] == 'OK') {
							$this->detected_country = $locations[ 'countryCode' ];
						}
						
						if ($this->detected_country == 'UK') {
							$this->detected_country = 'GB';
						} // Iso standards say that the UK code is GB, but ip2location returns UK, so we'll convert this to GB here. It's likely that other countries might need the same treatement. http://www.iso.org/iso/home/standards/country_codes/country_names_and_code_elements.htm
						
						$tmpBookingHandler->user_settings[ 'geolocated_country' ] = $this->detected_country;
					} else {
						$tmpBookingHandler->user_settings[ 'geolocated_country' ] = $this->detected_country;
					}
					
					file_put_contents($this->temp_dir_abs.$hash, $tmpBookingHandler->user_settings[ 'geolocated_country' ], LOCK_EX);
				}
			}
		} else {
			$tmpBookingHandler->user_settings[ 'geolocated_country' ] = $this->detected_country;
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function auto_set_user_currency_code()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		
		if (
			(isset($tmpBookingHandler->user_settings[ 'geolocated_country' ]) && $tmpBookingHandler->user_settings[ 'geolocated_country' ] != '') && 
			(isset($tmpBookingHandler->user_settings[ 'current_exchange_rate' ]) && $tmpBookingHandler->user_settings[ 'current_exchange_rate' ] != '') 
			) {
			return true;
		}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$currency_codes = jomres_singleton_abstract::getInstance('currency_codes');
		
		if (isset($currency_codes->country_codes_to_currency_codes[ $this->detected_country ])) {
			if ($this->api_key != '') {
				$currency_code = $currency_codes->country_codes_to_currency_codes[ $this->detected_country ];
			} else {
				$currency_code = $jrConfig['globalCurrencyCode'];
			}
		} else {
			$currency_code = 'EUR';
		}

		$jomres_currency_conversion = jomres_singleton_abstract::getInstance('jomres_currency_conversion');
		
		if ($jomres_currency_conversion->this_code_can_be_converted($currency_code)) {
			$tmpBookingHandler->user_settings[ 'current_exchange_rate' ] = $currency_code;
		} else {
			$tmpBookingHandler->user_settings[ 'current_exchange_rate' ] = 'EUR';
		}
	}
}
