<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// Gets the exchange rates and stores them in a temporary file. Updates the exchange rates daily, or whenever the exchange rate temp file doesn't exist.
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_currency_exchange_rates
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$this->feature_enabled = (bool) $jrConfig['use_conversion_feature'];

		$this->app_id = trim($jrConfig['openexchangerates_api_key']);

		$this->base_code = 'GBP';

		$this->update_now = false;

		$this->rates = array();

		$this->base_uri = 'http://openexchangerates.org/api/';
		$this->query_string = 'latest.json?app_id='.$this->app_id;

		$this->exchange_rate_classfile = JOMRES_TEMP_ABSPATH.'exchangerates_'.$this->base_code.'.php';

		if (file_exists($this->exchange_rate_classfile)) {
			//this populates $this->rates with the existing exchange rates array
			include_once $this->exchange_rate_classfile;

			if ($this->exchange_rate_file_expired()) {
				$this->update_now = true;
			}
		} else {
			$this->update_now = true;
		}

		if (empty($this->rates)) {
			$this->update_now = true;
		}

		if ($this->update_now) {
			if  ($this->update_exchange_rates()) {
				$this->save_rates();
			}
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	//check if exchange rates files is expired (it`s not from today)
	public function exchange_rate_file_expired()
	{
		$last_modified = date('Y/m/d', filemtime($this->exchange_rate_classfile));
		$today = date('Y/m/d', time());

		if ($today != $last_modified) {
			return true;
		}

		return false;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//update exchange rates
	public function update_exchange_rates()
	{
		if (!$this->feature_enabled) {
			return false;
		}

		if ($this->app_id == '') {
			return false;
		}

		$this->rates = array();

		$currency_codes = jomres_singleton_abstract::getInstance('currency_codes');

		ignore_user_abort(true); // Should stop a user from visiting another page when we're getting the exchange rates. At some point, it might be wiser to encourage managers to set this as a cron job.

		$json = $this->get_openexchangerates_rates();

		if (is_null($json) || !$json ) {
			$message = "After reading exchange rate file, the json variable is found to be NULL. The most likely cause is either CURL not working/firewalled, or the API isn't set/is wrong.";

			logging::log_message($message, 'Core', 'ERROR');

			return false;
		}

		// We can safely assume that there's a GBP exchange rate (at least, for the forseeable future. If there isn't, then the world has probably been invaded by aliens and exchange rates in Jomres is the least of our problems. Rule Britannia and all that. )
		$GBP_rate = $json->GBP;

		foreach ($currency_codes->codes as $k => $v) {
			if (isset($json->$k) && $k != 'GBP') {
				// Cross exchange rate calculation. As the base exchange rate in Jomres is GBP we have to convert the 3rd change rate to GBP before saving it. The Base rate of Open Exchange Rates is USD
				$rate = number_format((float) $json->$k / $GBP_rate, 4, '.', '');

				$this->rates[ $this->base_code ][ $k ] = $rate;
			}
		}

		// add GBP to GBP exchange rate = 1
		$this->rates[ $this->base_code ][ $this->base_code ] = 1;

		ignore_user_abort(false);
		
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//save exchange rates to file
	public function save_rates()
	{
		if (!$this->feature_enabled) {
			return false;
		}

		if (empty($this->rates)) {
			return false;
		}

		if (!file_put_contents($this->exchange_rate_classfile,
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$this->rates = ' .var_export($this->rates, true).';
')) {
			trigger_error('ERROR: '.$this->exchange_rate_classfile.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
			exit;
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	//get exchange rates json
	public function get_openexchangerates_rates()
	{
		if (!$this->feature_enabled) {
			return false;
		}
		
		$json = '';
		
		try {
			$client = new GuzzleHttp\Client([
				'base_uri' => $this->base_uri
			]);

			logging::log_message('Starting guzzle call to '.$this->base_uri.$this->query_string, 'Guzzle', 'DEBUG');

			$json = $client->request('GET', $this->query_string)->getBody()->getContents();
		}
		catch (Exception $e) {
			$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
			$jomres_user_feedback->construct_message(array('message'=>'Could not get currency exchange rates', 'css_class'=>'alert-danger alert-error'));
		}

		$result = json_decode($json);

		if (is_null($result) || (isset($result->error) && $result->error == true)) {
			if (is_null($result)) {
				$message = "After reading exchange rate file, the json variable is found to be NULL. The most likely cause is either CURL not working/firewalled, or the API isn't set/is wrong.";
			} else {
				$message = $result->description;
			}

			logging::log_message($message, 'Core', 'ERROR');

			return false;
		} else {
			return $result->rates;
		}

		return false;
	}
}
