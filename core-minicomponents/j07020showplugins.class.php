<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j07020showplugins
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$this->retVals = array();

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$remote_plugins = array();
		$remote_plugins_data = false;
		$installed_plugins = array();

		$remote_plugins = get_remote_plugin_data();

		if (!empty($remote_plugins)) {
			
			if (file_exists(JOMRES_TEMP_ABSPATH.'installed_plugins_data.php')) {
				$last_modified = filemtime(JOMRES_TEMP_ABSPATH.'installed_plugins_data.php');
				$seconds_timediff = time() - $last_modified;
				if ($seconds_timediff > 3600) {
					unlink(JOMRES_TEMP_ABSPATH.'installed_plugins_data.php');
				} else {
					$installed_plugins = json_decode(file_get_contents(JOMRES_TEMP_ABSPATH.'installed_plugins_data.php'));
				}
			}

			if (!file_exists(JOMRES_TEMP_ABSPATH.'installed_plugins_data.php')) {
				$jrcPath = JOMRES_COREPLUGINS_ABSPATH;
				$files = scandir_getfiles($jrcPath);
				$d = @dir($jrcPath);
				if ($d) {
					while (false !== ($entry = $d->read())) {
						$filename = $entry;

						if (substr($entry, 0, 1) != '.') {
							if (file_exists($jrcPath.$entry.JRDS.'plugin_info.php')) {
								include_once $jrcPath.$entry.JRDS.'plugin_info.php';
								$cname = 'plugin_info_'.$entry;
								if (class_exists($cname)) {
									$info = new $cname();
									$installed_plugins[ $info->data[ 'name' ] ] = $info->data;
								}
							}
						}
					}

					$tmp = new stdClass();
					foreach ($installed_plugins as $key => $val) {
						if (isset($remote_plugins->$key)) {
							$tmp->$key = (object)$val;
						}
					}
					$installed_plugins = $tmp;
					
					if ($installed_plugins != '') {
						file_put_contents(JOMRES_TEMP_ABSPATH.'installed_plugins_data.php', json_encode($installed_plugins));
					}
				}
			}

			if (!empty($installed_plugins)) {
				$count = 0;
				foreach ($installed_plugins as $ip) {
					$pluginname = $ip->name;
					$local_version = $ip->version;
					$remote_version = $remote_plugins->$pluginname->version;

					if ($remote_version > $local_version) {
						$count++;
					}
				}
				if ($count > 0) {
					$this->retVals = array('red' => $count);
				}
			}
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
