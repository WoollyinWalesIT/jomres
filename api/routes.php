<?php
/**
 * REST API feature handler
 *
 * Searches for REST API features when the API is called. index.php handles the authentication (OAuth2) and routing (Flight), then this is called to find the appropriate API feature to include, responds 404 if the API feature is not found.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

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
		Flight::halt(404, 'Request not allowed');
	}

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


