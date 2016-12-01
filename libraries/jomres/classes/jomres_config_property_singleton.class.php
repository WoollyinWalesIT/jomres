<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_config_property_singleton
{
    // Store the single instance of Database
    private static $configInstance;

    public function __construct()
    {
        $this->property_uid = 0;
        $this->default_config = array();
        $this->property_config = array();
        $this->get_all_property_settings();
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function __clone()
    {
        trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
    }

    public function set($config)
    {
        $this->property_config = $config;
    }

    public function get()
    {
        return $this->property_config;
    }

    public function set_setting($setting, $value)
    {
        $this->property_config[ $setting ] = $value;
    }

    public function get_setting($setting)
    {
        return $this->property_config[ $setting ];
    }

    public function init($property_uid)
    {
        return $this->load_property_config($property_uid);
    }

    public function load_property_config($property_uid)
    {
        if ($property_uid > 0) {
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $jrConfig = $siteConfig->get();
            $temp_config = $this->default_config;
            $this->property_uid = (int) $property_uid;

            if (isset($this->all_property_settings[ (int) $property_uid ])) {
                $property_config = $this->all_property_settings[ (int) $property_uid ];
                if (is_null($property_config)) {
                    $property_config = array();
                }
            } else {
                $property_config = array();
            }

            $temp_config = array_merge($temp_config, $property_config);
            if ($jrConfig[ 'useGlobalCurrency' ] == '1') {
                $temp_config[ 'currency' ] = $jrConfig[ 'globalCurrency' ];
                $temp_config[ 'currencyCode' ] = $jrConfig[ 'globalCurrencyCode' ];
            }
            $this->property_config = $temp_config;

            return $this->property_config;
        } else {
            $this->property_config = $this->default_config;

            return $this->default_config;
        }
    }

    private function get_all_property_settings()
    {
        $this->all_property_settings = array();
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        //no more missing settings
        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'jomres_config.php')) {
            include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'jomres_config.php';
            $this->default_config = $mrConfig;
        }

        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');
        $all_mrconfig_settings = $c->retrieve('all_mrconfig_settings');

        if ($all_mrconfig_settings) {
            $this->default_config = array_merge($this->default_config, $all_mrconfig_settings['default_config']);
            $this->all_property_settings = $all_mrconfig_settings['all_property_settings'];
        } else {
            $query = 'SELECT property_uid,akey,value FROM #__jomres_settings';
            $settingsList = doSelectSql($query);
            if (count($settingsList) > 0) {
                foreach ($settingsList as $setting) {
                    $akey = $setting->akey;
                    $value = $setting->value;
                    $property_uid = $setting->property_uid;
                    if ($property_uid == 0) {
                        $this->default_config[ $akey ] = $value;
                    } else {
                        $this->all_property_settings[ $property_uid ][ $akey ] = $value;
                    }
                }
                if ($jrConfig[ 'useGlobalCurrency' ] == '1') {
                    $this->default_config[ 'currency' ] = $jrConfig[ 'globalCurrency' ];
                    $this->default_config[ 'currencyCode' ] = $jrConfig[ 'globalCurrencyCode' ];
                }
                $c->store('all_mrconfig_settings', array('default_config' => $this->default_config, 'all_property_settings' => $this->all_property_settings));
            }
        }
    }
}
