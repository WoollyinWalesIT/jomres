<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.23
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
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
        $this->config = $config;
    }

    public function get()
    {
        return $this->config;
    }

    public function set_setting($setting, $value)
    {
        $this->config[ $setting ] = $value;
    }

    public function save_config()
    {
        if (!file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
        '<?php
		##################################################################
		defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
		##################################################################

		$jrConfig = ' .var_export($this->config, true).';
		')) {
            trigger_error('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
            exit;
        }
    }

    public function insert_new_setting($k, $v)
    {
        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
            include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php';
            if (!array_key_exists($k, $jrConfig)) {
                $jrConfig[ $k ] = $v;
                if (!file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($jrConfig, true).';
')) {
                    trigger_error('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
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

    public function update_setting($k, $v)
    {
        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
            include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php';

            $jrConfig[ $k ] = $v;

            if (!file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($jrConfig, true).';
')) {
                trigger_error('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
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

    public function get_setting($setting)
    {
        return $this->config[ $setting ];
    }

    private function init()
    {
        include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'site_config.php';
        $tempConfigArr = $jrConfig;

        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
            include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php';
            $this->config = $jrConfig;

            foreach ($tempConfigArr as $k => $v) {
                if (!array_key_exists($k, $this->config)) {
                    $this->insert_new_setting($k, $v);
                }
            }
        } else {
            $this->config = array();
            $query = 'SELECT akey,value FROM #__jomres_site_settings';

            // We need to bypass doSelectSql here because doSelectSql does $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton'); too, and that'll cause a fatal error.
            $jomres_db = jomres_singleton_abstract::getInstance('jomres_database');
            $jomres_db->setQuery($query);
            $jomres_db->loadObjectList();
            if (count($jomres_db->result) > 0) {
                foreach ($jomres_db->result as $setting) {
                    $akey = $setting->akey;
                    $value = $setting->value;
                    $this->config[ $akey ] = $value;
                }
            }

            // Now we'll check to see if any new settings have been added to the jrConfig file. If they have they'll be added to the site settings table.
            if (count($jomres_db->result) == 0) {
                $jomresConfig_dbprefix = get_showtime('dbprefix');
                $jomresConfig_db = get_showtime('db');

                // Jomres probably hasn't been installed yet, does the site settings table exist yet?
                $tablesFound = false;
                $query = 'SHOW TABLES';
                $jomres_db->setQuery($query);
                $result = $jomres_db->loadObjectList();
                $string = 'Tables_in_'.$jomresConfig_db;
                if (count($result) > 0) {
                    foreach ($result as $r) {
                        if (strstr($r->$string, $jomresConfig_dbprefix.'jomres_site_settings')) {
                            $tablesFound = true;
                        }
                    }
                }
                if (!$tablesFound) {
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
