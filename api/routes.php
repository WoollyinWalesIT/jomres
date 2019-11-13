<?php
/**
 * REST API feature handler
 *
 * Searches for REST API features when the API is called. index.php handles the authentication (OAuth2) and routing (Flight), then this is called to find the appropriate API feature to include, responds 404 if the API feature is not found.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	
	/**
	 * 
	 *
	 *
	 */

$request = Flight::request();

if (substr($request->url,0,6) == '/core/' ) {
	if (file_exists(JOMRES_CORE_API_ABSPATH.$request->method.DIRECTORY_SEPARATOR.$route.'.php')) {
		require_once JOMRES_CORE_API_ABSPATH.$request->method.DIRECTORY_SEPARATOR.$route.'.php';
	} else {
		Flight::halt(404, 'Request unknown');
	}
} else {
	$sub_filename = '';
	if (isset($bang[3])) {
		$sub_filename = $route.'_'.filter_var($bang[3], FILTER_SANITIZE_STRING);
	}

	$features_files = Flight::get('features_files');

	if (!in_array($route.'.php', $features_files) && !in_array($sub_filename.'.php', $features_files)) {
		
			
		/**
		 * 
		 *
		 *
		 */

		// We now need to include the Jomres framework and install the relevant api plugin, if available
		require_once("../framework.php");
		
		$remote_plugins = get_remote_plugin_data();

		foreach ($remote_plugins as $key => $val ) { // We'll make sure that the requested feature is a valid plugin from jomres.net
			$found = false;
			$plugin_name_prefix = substr($key, 0, 12);
			if ( isset($plugin_name_prefix) && $plugin_name_prefix == "api_feature_") {
				$found = true;
				break;
			}
		}

		if ( !isset($found) || !$found ) {
			Flight::halt(404, 'Request is not a feature of this API');
		}

		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		$result = $MiniComponents->specificEvent('16000', 'addplugin', array('plugin' => "api_feature_".$route, 'autoupgrade' => true));
		
		$features_files = Flight::get('features_files');
		
		if (!in_array($route.'.php', $features_files) && !in_array($sub_filename.'.php', $features_files)) {
			Flight::halt(404, 'Request is not a feature of this API');
		}
	}
	
		
	/**
	 * 
	 *
	 *
	 */

	// Improved tree to route mapping
	$potential_paths = JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR;
	$potential_paths_arr = array();
	foreach ($bang as $potential_path) {
		if (!trim($potential_path) == '' ) {
			$potential_paths_arr[] = $potential_paths .= $potential_path."_";
		}
	}
	
	$reversed = array_reverse($potential_paths_arr);
	$found = false;
	foreach ($reversed as $path ) {
		$test = substr($path, 0, -1).'.php';
		
		if ( file_exists( $test ) ) {
			$found = true;
			require_once($test);
			break;
		}
	}

		
	/**
	 * 
	 *
	 *
	 */

	// Fall back to the older way, which will still work for existing api features
	if (!$found) {
		if (file_exists(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$sub_filename.'.php')) {
			require_once JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$sub_filename.'.php';
		} elseif (file_exists(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'remote_plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$sub_filename.'.php')) {
			require_once JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'remote_plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$sub_filename.'.php';
		} elseif (file_exists(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$route.'.php')) {
			require_once JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$route.'.php';
		} elseif (file_exists(JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'remote_plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$route.'.php')) {
			require_once JOMRES_API_JOMRES_ROOT.DIRECTORY_SEPARATOR.'remote_plugins'.DIRECTORY_SEPARATOR.'api_feature_'.$route.DIRECTORY_SEPARATOR.$request->method.DIRECTORY_SEPARATOR.$route.'.php';
		} else {
			Flight::halt(404, 'Request unknown');
		}
	}

}


