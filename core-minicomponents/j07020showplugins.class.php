<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.21
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j07020showplugins
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $this->retVals = array();

        $remote_plugins = array();

        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'remote_plugins_data.php')) {
            $last_modified = filemtime(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'remote_plugins_data.php');
            $seconds_timediff = time() - $last_modified;
            if ($seconds_timediff > 3600) {
                unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'remote_plugins_data.php');
            } else {
                $remote_plugins_data = file_get_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'remote_plugins_data.php');
            }
        }

        if (function_exists('curl_init') && !file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'remote_plugins_data.php')) {
            include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'jomres_config.php';
            $current_version = $mrConfig[ 'version' ];

            $query_string = 'http://plugins.jomres4.net/index.php?r=dp&format=json&cms='._JOMRES_DETECTED_CMS.'&jomresver='.$current_version;

            logging::log_message('Starting curl call to '.$query_string, 'Curl', 'DEBUG');
            $logging_time_start = microtime(true);

            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, $query_string);
            curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Jomres');
            curl_setopt($curl_handle, CURLOPT_TIMEOUT, 8);
            curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 8);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
            $remote_plugins_data = curl_exec($curl_handle);
            curl_close($curl_handle);

            $logging_time_end = microtime(true);
            $logging_time = $logging_time_end - $logging_time_start;
            logging::log_message('Curl call took '.$logging_time.' seconds ', 'Curl', 'DEBUG');

            // Uncomment this to show all updates, including beta plugins.
            //$remote_plugins_data = queryUpdateServer( "", "r=dp&format=json&cms=" . _JOMRES_DETECTED_CMS  );

            if ($remote_plugins_data != '') {
                file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'remote_plugins_data.php', $remote_plugins_data);
            }
        }

        $rp_array = json_decode($remote_plugins_data);
        if (count($rp_array) > 0) {
            foreach ($rp_array as $rp) {
                $remote_plugins[ trim(jomres_sanitise_string(@$rp->name)) ] = array('name' => trim(jomres_sanitise_string(@$rp->name)), 'version' => (float) @$rp->version);
            }

            $installed_plugins = array();
            $jrcPath = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'core-plugins'.JRDS;
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

                $tmp = array();
                foreach ($installed_plugins as $key => $val) {
                    if (array_key_exists($key, $remote_plugins)) {
                        $tmp[ $key ] = $val;
                    }
                }
                $installed_plugins = $tmp;
            }

            if (count($installed_plugins) > 0) {
                $count = 0;
                foreach ($installed_plugins as $ip) {
                    $pluginname = $ip[ 'name' ];
                    $local_version = $ip[ 'version' ];
                    $remote_version = $remote_plugins[ $pluginname ][ 'version' ];

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

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
