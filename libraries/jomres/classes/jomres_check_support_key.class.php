<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_check_support_key
{
    public function __construct($task, $force_check = false)
    {
        $this->task = $task;
        $this->key_valid = false;
        $this->force_check = $force_check;

        if (isset($_REQUEST[ 'support_key' ]) && strlen($_REQUEST[ 'support_key' ]) > 0) {
            $this->save_key($task);
        }

        if (!isset($_REQUEST['task'])) {
            $_REQUEST['task'] = '';
        }

        if ($_REQUEST['task'] == 'site_settings' || $_REQUEST['task'] == 'showplugins' || $_REQUEST['task'] == 'addplugin') {
            $this->force_check = true;
        }

        if (function_exists('curl_init')) {
            /*
            $this->get_shop_status();

            $siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
            $jrConfig   = $siteConfig->get();
            $this->license_server_username = $jrConfig[ 'license_server_username' ];
            $this->license_server_password = $jrConfig[ 'license_server_password' ];

            if ( trim($this->license_server_username) != "" && trim($this->license_server_password) != "")
                {
                $this->user_plugin_license_temp_file_name = "user_plugin_licenses.php";
                $this->remote_get_all_user_plugin_licenses();
                $this->get_user_plugin_licenses();
                } */
            $this->shop_status = 'CLOSED';
            $this->check_license_key();
        }
    }

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

    public function remove_plugin_licenses_file()
    {
        unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$this->user_plugin_license_temp_file_name);
    }

    public function remote_get_all_user_plugin_licenses()
    {
        $current_licenses = array();

        $request = 'request=get_license_numbers_for_user&username='.$this->license_server_username.'&password='.$this->license_server_password;
        $response = query_shop($request);

        if (!is_null($response) && $response->success) {
            foreach ($response->licenses as $license) {
                $current_licenses[ $license->name ] = array('key' => $license->license_key, 'status' => $license->status);
            }
        }

        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$this->user_plugin_license_temp_file_name)) {
            $last_modified = filemtime(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$this->user_plugin_license_temp_file_name);
            $seconds_timediff = time() - $last_modified;
            if ($seconds_timediff > 60) {
                unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$this->user_plugin_license_temp_file_name);
            } else {
                include_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$this->user_plugin_license_temp_file_name;
            }
        }

        if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$this->user_plugin_license_temp_file_name)) {
            $str = '';
            if (count($current_licenses) > 0) {
                foreach ($current_licenses as $key => $val) {
                    $str .= '$current_licenses["'.$key.'"] = array ( "key" => "'.$val['key'].'" , "status" => "'.$val['status'].'" );
';
                }
            } else {
                $str = ' // No current licenses
					';
            }
            $lic_data = '<?php
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
function plugin_licenses () {
$current_licenses = array();
'.$str.'
return $current_licenses;
}';
            file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'user_plugin_licenses.php', $lic_data);
        }
    }

    public function get_user_plugin_licenses()
    {
        include_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$this->user_plugin_license_temp_file_name;
        $this->plugin_licenses = plugin_licenses();
    }

    public function check_license_key()
    {
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $str = 'key='.$jrConfig['licensekey'];
        $this->key_hash = $jrConfig['licensekey'];

        $license_data = new stdClass();
        $license_data->expires = 'Unknown';
        $license_data->key_status = 'Unknown';
        $license_data->owner = 'Unknown';
        $license_data->license_valid = false;
        $license_data->allows_plugins = false;
        $license_data->is_trial_license = false;

        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'license_key_check_cache.php')) {
            $last_modified = filemtime(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'license_key_check_cache.php');
            $seconds_timediff = time() - $last_modified;
            if ($seconds_timediff > 3600) {
                unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'license_key_check_cache.php');
            } else {
                include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'license_key_check_cache.php';
            }
        }

        if (function_exists('curl_init') && !file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'license_key_check_cache.php') || $this->force_check) {
            $buffer = queryUpdateServer('check_key.php', $str, 'updates');
            if ($buffer != '') {
                $license_data = json_decode($buffer);

                if ($license_data->license_valid === true) {
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
$license_data->expires = "'.$license_data->expires.'";
$license_data->key_status = "'.$license_data->key_status.'";
$license_data->owner = "'.$license_data->owner.'";
$license_data->license_valid = "'.$license_data->license_valid.'";
$license_data->allows_plugins = "'.$license_data->allows_plugins.'";
$license_data->is_trial_license = "'.$license_data->is_trial_license.'";
';

                file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'license_key_check_cache.php', $lic_data);
            }
        }

        if (!empty($license_data)) { // Query failed for some reason, perhaps slow connection
            $this->expires = $license_data->expires;
            $this->key_status = $license_data->key_status;
            $this->owner = $license_data->owner;
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
