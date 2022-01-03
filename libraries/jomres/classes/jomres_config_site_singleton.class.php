<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
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

class jomres_config_site_singleton
{
	public function __construct()
	{
		$this->config = array();


		$this->config_last_modified = 0;
		$this->config_file = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php';
		if ( file_exists($this->config_file)) {
			clearstatcache();
			$this->config_last_modified = filemtime($this->config_file);

		}

        $this->site_settings_table_exists = false;

		$this->init();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function set($config)
	{
		$this->config = $config;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get()
	{
		return $this->config;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function set_setting($setting, $value)
	{
		$this->config[ $setting ] = $value;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function save_config()
	{
		$config_to_save = $this->config;
		
		//we won`t store the version in configuration.php (or BC _site_settings table), so it will always be loaded from site_config.php
		if (isset($config_to_save['version'])) {
			unset($config_to_save['version']);
		}
		$result = file_put_contents($this->config_file,
			'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($config_to_save, true).';
');

		// On my Ubuntu box, and on some client boxes, there's a delay in saving the config file so we will wait, then wait a bit more after the file mod time has been updated
		// Might need to add a clause to not do this during api calls?
		do {
			sleep(1); // Writing the file could take a moment
			clearstatcache();
			$config_last_modified = filemtime($this->config_file);
		} while ( $config_last_modified <= $this->config_last_modified);

		sleep(2);

		if (!$result) {
			trigger_error('ERROR: '.$this->config_file.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
			exit;
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function insert_new_setting($k, $v)
	{
		//we won`t store the version in configuration.php (or BC _site_settings table), so it will always be loaded from site_config.php
		if ($k == 'version') {
			$this->config[$k] = $v;

			return true;
		}

		if (file_exists($this->config_file) || !$this->site_settings_table_exists ) {
            if (!file_exists($this->config_file) ) {
                touch($this->config_file);
            }
			include $this->config_file;
			if (!array_key_exists($k, $jrConfig)) {
				$jrConfig[ $k ] = $v;

				$result = file_put_contents($this->config_file,
					'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($jrConfig, true).';
');

				// On my Ubuntu box, and on some client boxes, there's a delay in saving the config file so we will wait, then wait a bit more after the file mod time has been updated
				// Might need to add a clause to not do this during api calls?
				do {
					sleep(1); // Writing the file could take a moment
					clearstatcache();
					$config_last_modified = filemtime($this->config_file);
				} while ( $config_last_modified <= $this->config_last_modified);

				sleep(2);

				if (!$result) {
					trigger_error('ERROR: '.$this->config_file.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
					exit;
				}

				$this->config[$k] = $v;
			}
		} else {
			$jomres_db = jomres_singleton_abstract::getInstance('jomres_database');
			if (!array_key_exists($k, $this->config)) {
				$query = "INSERT INTO #__jomres_site_settings (akey,value) VALUES ('".$k."','".$v."')";
				$jomres_db->setQuery($query);
				$jomres_db->query();

				$this->config[$k] = $v;
			}
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function update_setting($k, $v)
	{
		//we won`t store the version in configuration.php (or BC _site_settings table), so it will always be loaded from site_config.php
		if ($k == 'version') {
			$this->config[$k] = $v;

			return true;
		}

		if (file_exists($this->config_file) || !$this->site_settings_table_exists ) {
			include $this->config_file;

			$jrConfig[ $k ] = $v;

			$result = file_put_contents($this->config_file,
				'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($jrConfig, true).';
');

			// On my Ubuntu box, and on some client boxes, there's a delay in saving the config file so we will wait, then wait a bit more after the file mod time has been updated
			// Might need to add a clause to not do this during api calls?
			do {
				sleep(1); // Writing the file could take a moment
				clearstatcache();
				$config_last_modified = filemtime($this->config_file);
			} while ( $config_last_modified <= $this->config_last_modified);

			sleep(2);

			if (!$result) {
				trigger_error('ERROR: '.$this->config_file.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
				exit;
			}

			$this->config[$k] = $v;
		} else {
			$jomres_db = jomres_singleton_abstract::getInstance('jomres_database');

			$query = "UPDATE #__jomres_site_settings SET `value` = '".$v."' WHERE `akey` = '".$k."' ";
			$jomres_db->setQuery($query);
			$jomres_db->query();

			$this->config[$k] = $v;
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_setting($setting)
	{
		return $this->config[ $setting ];
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init()
	{
		include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'site_config.php';
		$tempConfigArr = $jrConfig;

		if (file_exists($this->config_file)) {
			include $this->config_file;
			$this->config = $jrConfig;

			foreach ($tempConfigArr as $k => $v) {
				if (!array_key_exists($k, $this->config)) {
					$this->insert_new_setting($k, $v);
				}
			}
		} else { //BC
			$this->config = array();


			// We need to bypass doSelectSql here because doSelectSql does $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton'); too, and that'll cause a fatal error.
			$jomres_db = jomres_singleton_abstract::getInstance('jomres_database');
            $jomresConfig_dbprefix = get_showtime('dbprefix');
            $jomresConfig_db = get_showtime('db');

            // Jomres probably hasn't been installed yet, does the site settings table exist yet?
            $tablesFound = false;
            $query = 'SHOW TABLES';
            $jomres_db->setQuery($query);
            $result = $jomres_db->loadObjectList();
            $string = 'Tables_in_'.$jomresConfig_db;
            if (!empty($result)) {
                foreach ($result as $r) {
                    if (strstr($r->$string, $jomresConfig_dbprefix.'jomres_site_settings')) {
                        $this->site_settings_table_exists = true;
                    }
                }
            }

            if ($this->site_settings_table_exists) {
                $query = 'SELECT akey,value FROM #__jomres_site_settings';
                $jomres_db->setQuery($query);
                $jomres_db->loadObjectList();
                if (!empty($jomres_db->result)) {
                    foreach ($jomres_db->result as $setting) {
                        $akey = $setting->akey;
                        $value = $setting->value;
                        $this->config[ $akey ] = $value;
                    }
                }
            }


			// Now we'll check to see if any new settings have been added to the jrConfig file. If they have they'll be added to the site settings table.
			if (empty($jomres_db->result)) {
				$jomresConfig_dbprefix = get_showtime('dbprefix');
				$jomresConfig_db = get_showtime('db');

				// Jomres probably hasn't been installed yet, does the site settings table exist yet?
				$tablesFound = false;
				$query = 'SHOW TABLES';
				$jomres_db->setQuery($query);
				$result = $jomres_db->loadObjectList();
				$string = 'Tables_in_'.$jomresConfig_db;
				if (!empty($result)) {
					foreach ($result as $r) {
						if (strstr($r->$string, $jomresConfig_dbprefix.'jomres_site_settings')) {
                            $this->site_settings_table_exists = true;
						}
					}
				}
				if (!$this->site_settings_table_exists) {
					// The site settings table doesn't exist yet, we'll dump out for now.
					//return false;
					//we`re installing Jomres for the first time
					$this->config = $tempConfigArr;
				}
			}

			// This creates new settings in the site settings according to any new options added to site_config.php. Usually, this is done on install but changing the file and adding a new index to the jrConfig array would result in that index being added to the table.
			foreach ($tempConfigArr as $k => $v) {
				if (!array_key_exists($k, $this->config)) {
					$this->insert_new_setting($k, $v);
				}
			}
		}

		return true;
	}
}

