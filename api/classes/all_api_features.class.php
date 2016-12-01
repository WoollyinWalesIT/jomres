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

// Remote file inclusion defence. We'll collect all possible API feature file names there. Later, when routing, if the file doesn't exist then boom, we don't include it.

class all_api_features
{
    public function __construct()
    {
        $this->api_feature_files = array();
        $this->get_all_api_features(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR);
        $this->get_all_api_features(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'remote_plugins'.DIRECTORY_SEPARATOR);
    }

    public function get()
    {
        return $this->api_feature_files;
    }

    private function get_all_api_features($path)
    {
        $core_plugins_dir_contents = scandir($path);
        $api_feature_directories = array();

        foreach ($core_plugins_dir_contents as $directory) {
            if (substr($directory, 0, 12) == 'api_feature_') {
                $api_feature_directories[] = $directory;
            }
        }

        if (count($api_feature_directories) > 0) {
            foreach ($api_feature_directories as $plugin) {
                $plugin_dir_contents = scandir($path.DIRECTORY_SEPARATOR.$plugin);
                if (count($plugin_dir_contents) > 0) {
                    foreach ($plugin_dir_contents as $method_dir) {
                        if ($method_dir === '.' or $method_dir === '..' or $method_dir === 'language') {
                            continue;
                        }

                        if (is_dir($path.DIRECTORY_SEPARATOR.$plugin.DIRECTORY_SEPARATOR.$method_dir)) {
                            $files = scandir($path.DIRECTORY_SEPARATOR.$plugin.DIRECTORY_SEPARATOR.$method_dir);
                            foreach ($files as $file) {
                                if ($file != '.' && $file != '..') {
                                    $this->api_feature_files[] = $file;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
