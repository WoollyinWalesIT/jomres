<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jomres_config_site_singleton
	{
	// Store the single instance of Database
	private static $configInstance;

	public function __construct() 
		{
		$this->config = array();
		$this->init();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new jomres_config_site_singleton();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	public function set($config)
		{
		$this->config = $config;
		}
		
	public function get()
		{
		return $this->config;
		}
		
	public function set_setting($setting,$value)
		{
		$this->config[$setting] = $value;
		}
		
	public function insert_new_setting($k,$v)
		{
		$jomres_db =jomres_getSingleton('jomres_database');
		if (!array_key_exists($k,$this->config) )
			{
			$query="INSERT INTO #__jomres_site_settings (akey,value) VALUES ('".$k."','".$v."')";
			$jomres_db->setQuery($query);
			$jomres_db->query();
			}
		}
		
	public function get_setting($setting)
		{
		return $this->config[$setting];
		}
		
	private function init()
		{
		//$mrConfig=getPropertySpecificSettings(0);
		require(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'site_config.php' );
		$tempConfigArr=$jrConfig;
		$jrConfig=array();
		$query="SELECT akey,value FROM #__jomres_site_settings";
		
		// We need to bypass doSelectSql here because doSelectSql does $siteConfig = jomres_getSingleton('jomres_config_site_singleton'); too, and that'll cause a fatal error.
		$jomres_db =jomres_getSingleton('jomres_database');
		$jomres_db->setQuery($query);
		$settingsList=$jomres_db->loadObjectList();
		if (count($settingsList)>0)
			{
			foreach ($settingsList as $setting)
				{
				$akey=$setting->akey;
				$value=$setting->value;
				$jrConfig[$akey]=$value;
				}
			}

		// Now we'll check to see if any new settings have been added to the jrConfig file. If they have they'll be added to the site settings table.
		if (count($settingsList)==0)
			{
			$jomresConfig_dbprefix = get_showtime('dbprefix');
			$jomresConfig_db = get_showtime('db');
			
			// Jomres probably hasn't been installed yet, does the site settings table exist yet?
			$tablesFound=false;
			$query="SHOW TABLES";
			$jomres_db->setQuery($query);
			$result=$jomres_db->loadObjectList();
			$string="Tables_in_".$jomresConfig_db;
			foreach ($result as $r)
				{
				if (strstr($r->$string, $jomresConfig_dbprefix.'jomres_site_settings') )
					{
					$tablesFound=true;
					}
				}
			if (!$tablesFound)
				{
				// The site settings table doesn't exist yet, we'll dump out for now.
				return;
				}
			}

		// This creates new settings in the site settings according to any new options added to site_config.php. Usually, this is done on install but changing the file and adding a new index to the jrConfig array would result in that index being added to the table.
		foreach ($tempConfigArr as $k=>$v)
			{
			if (!array_key_exists($k,$jrConfig) )
				{
				$this->insert_new_setting($k,$v);
				}
			}
		
		$this->config = $jrConfig;
		}
	}
?>