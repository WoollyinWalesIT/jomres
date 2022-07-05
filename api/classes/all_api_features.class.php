<?php
/**
 *
 *  @package Jomres\Core\REST_API
 *
 * Finds all API feature scripts. 
 *
 * Additionally finds auth-free API features, which are scripts that can be called by any site visitor, they do not need to be authenticated. For example, a basic search and response wouldn't normally need to be authenticated, so there's no OAuth2 key pair required to call that REST API path. 
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
* Remote file inclusion defence. We'll collect all possible API feature file names there. Later, when routing, if the file doesn't exist then boom, we don't include it.
*
 * @property array authentication_free_routes
 */

class all_api_features
{
    /**
     * @var array
     */
    private $api_feature_files;

    /**
	*
	* Constructor. Sets up arrays and finds API features
	*
	*/
    public function __construct()
    {
        $this->api_feature_files = array();
		$this->authentication_free_routes = array();
        $this->get_all_api_features(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR);
        $this->get_all_api_features(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'remote_plugins'.DIRECTORY_SEPARATOR);
    }

	/**
	*
	* Returns the API features found
	*
	*/
    public function get()
    {
        return $this->api_feature_files;
    }

	/**
	*
	* Returns the auth-free API features
	*
	*/
	public function get_authfree_routes() {
		return $this->authentication_free_routes;
	}

    /**
     *
     * Scans directories for API features in looking for plugins that are prefixed "api_feature_".
     *
     * @param $path the path of the directory to be scanned
     */
    private function get_all_api_features($path)
    {
        $core_plugins_dir_contents = scandir($path);
        $api_feature_directories = array();

        foreach ($core_plugins_dir_contents as $directory) {
            if (substr($directory, 0, 12) == 'api_feature_') {
                $api_feature_directories[] = $directory;
            }
        }

        if (!empty($api_feature_directories)) {
            foreach ($api_feature_directories as $plugin) {
				if (file_exists($path.$plugin.DIRECTORY_SEPARATOR.'auth_free.json') ) {
					$json = json_decode(file_get_contents($path.$plugin.DIRECTORY_SEPARATOR.'auth_free.json'));
					if($json->auth_free === true ) {
						$this->authentication_free_routes[] = str_replace("api_feature_" , "" , $plugin);
					}
				}
				
                $plugin_dir_contents = scandir($path.DIRECTORY_SEPARATOR.$plugin);
                if (!empty($plugin_dir_contents)) {
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
