<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
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
	#[AllowDynamicProperties]
class jomres_api_capability_test
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{

	}

		/**
		 *
		 * Get jrconfig and see if the api_capable value is set. If it is, then we will return true. If not, we will
		 *
		 */

	public function is_system_capable()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if (!isset($jrConfig['api_capable']) || (bool)$jrConfig['api_capable'] === false) {
			$this->test_system_capable();
		} else {
			return true;
		}
	}

		/**
		 *
		 * find out if we can call core report and get a 200 response. If we can, we're capable
		 *
		 */
		public function test_system_capable()
		{
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			if (!isset($jrConfig['api_capable']) || (bool)$jrConfig['api_capable'] === false) {
				jr_import('jomres_call_api');
				$jomres_call_api = new jomres_call_api('system');
				try {
					$response = $jomres_call_api->send_request("GET", "core/report/");
				} catch (Exception $e) {
					// throw new Exception('Error: invalid response from local API, received '.$e->getMessage() );
				}
				if (isset($response->meta->code) && $response->meta->code == 200 ) {
					$this-> set_api_capable();
					$jrConfig = $siteConfig->get();
				} else {
					return false;
				}
			} else {
				return true;
			}
		}

		/**
		 *
		 * save the api_capable setting
		 *
		 */
		public function set_api_capable()
		{
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$siteConfig->update_setting('api_capable', true);
			$siteConfig->save_config();
		}


}
