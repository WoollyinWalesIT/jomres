<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
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

class jomres_check_support_key
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct($task = '')
	{
		$this->task = $task;
		$this->key_valid = false;

		$this->shop_status = 'CLOSED';
		$this->check_license_key();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_shop_status()
	{
		$request = 'request=shop_status';
		$response = query_shop($request);
		if (is_object($response)) {
			$this->shop_status = $response->status;
		} else {
			$this->shop_status = 'CLOSED';
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function remove_plugin_licenses_file()
	{
		unlink(JOMRES_TEMP_ABSPATH.$this->user_plugin_license_temp_file_name);
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_user_plugin_licenses()
	{
		include_once JOMRES_TEMP_ABSPATH.$this->user_plugin_license_temp_file_name;
		$this->plugin_licenses = plugin_licenses();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function check_license_key($force = false , $key = '' )
	{

		
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

        if (!isset($jrConfig['licensekey'])) { // Probably installing
            return;
        }

		if ( $key == '' )
			$str = 'key='.$jrConfig['licensekey'];
		else
			$str = 'key='.$key;
		$this->key_hash = $jrConfig['licensekey'];

		$license_data = new stdClass();
		
		$license_data->license_name = 'Unknown';
		$license_data->expires = 'Unknown';
		$license_data->key_status = 'Unknown';
		$license_data->owner = 'Unknown';
		$license_data->license_valid = false;
		$license_data->allows_plugins = false;
		$license_data->is_trial_license = false;

		if (file_exists(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php')) {
			$last_modified = filemtime(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php');
			$seconds_timediff = time() - $last_modified;
			if ($seconds_timediff > 86400) {
				unlink(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php');
			} else {
				include JOMRES_TEMP_ABSPATH.'license_key_check_cache.php';
			}
		}



		if (!file_exists(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php') || $force) {
			
			
			$buffer = queryUpdateServer('check_key.php', $str, 'updates');
			if ($buffer != '') {
				$license_data = json_decode($buffer);

				if ( !is_object($license_data)){
					$license_data = new stdClass();
				}
				if ( isset($license_data->license_valid ) && $license_data->license_valid === true) {
					$license_data->license_valid = '1';
				} else {
					$license_data->license_valid = '0';
				}

				if (is_null($license_data->expires)) {
					$license_data->expires = 'Unknown';
				}
				if (is_null($license_data->allows_plugins)) {
					$license_data->allows_plugins = 'Unknown';
				}
				if (is_null($license_data->is_trial_license)) {
					$license_data->is_trial_license = 'Unknown';
				}

				if (!isset($license_data->status)) {
					$license_data->key_status = 'Unknown';
				} else {
					$license_data->key_status = $license_data->status;
				}

				$lic_data = '<?php
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
$license_data	= new stdClass;
$license_data->license_name = "'.$license_data->license_name.'";
$license_data->expires = "'.$license_data->expires.'";
$license_data->key_status = "'.$license_data->key_status.'";
$license_data->owner = "'.$license_data->owner.'";
$license_data->license_valid = "'.$license_data->license_valid.'";
$license_data->allows_plugins = "'.$license_data->allows_plugins.'";
$license_data->is_trial_license = "'.$license_data->is_trial_license.'";
$license_data->allowed_plugins = "'.$license_data->allowed_plugins.'";
';
				
				file_put_contents(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php', $lic_data);
			}
		}

		if (!empty($license_data)) { // Query failed for some reason, perhaps slow connection
			$this->expires = $license_data->expires;
			$this->key_status = $license_data->key_status;
			$this->owner = $license_data->owner;
			$this->license_name = $license_data->license_name;
			if (isset($license_data->allowed_plugins)) {
				$this->allowed_plugins = explode("," , $license_data->allowed_plugins);
			} else {
				$this->allowed_plugins = array();
			}
			
			
			if ($license_data->license_valid == true) {
				$this->key_valid = true;
			}
			$this->allows_plugins = $license_data->allows_plugins;
			if ($license_data->is_trial_license == 'Unknown') {
				$license_data->is_trial_license = false;
			}

			$this->is_trial_license = (bool) $license_data->is_trial_license;
		}
	}
}
