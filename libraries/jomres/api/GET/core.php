<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
	** Title | Report server url to Jomres and number of published properties
	** Description | Intended for use by the superserver that will produce a list of properties with Jomres installed, and the number of properties they offer
	** Plugin | core
	** Scope | properties_get
	** URL | core
	** Method | GET
	** URL Parameters | core/report
	** Data Parameters | None
	** Success Response |
	** Error Response |
	** Sample call |jomres/api/core/report
	** Notes |
*/

Flight::route('GET /core/report', function () {
	require_once("../framework.php");

	$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
	$jomres_properties->get_all_properties();

	$data[] = array (
		"api_url"				=> get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/',
		"jomres_url" 			=> JOMRES_SITEPAGE_URL_NOSEF,
		"property_count"		=> count($jomres_properties->all_property_uids['all_propertys'])
	);

	Flight::json($response_name = "report", $data);
});


/**
	** Title | Get a list of published properties - limited results
	** Description | Intended for use by syndicated sites, this returns a list of published properties. Items returned include the property name, it's location, url to the view property page, and whether or not it's an MRP or SRP
	** Plugin | core
	** Scope | properties_get
	** URL | core
	** Method | GET
	** URL Parameters | core/get_properties
	** Data Parameters | None
	** Success Response |
	** Error Response |
	** Sample call |jomres/api/core/get_properties
	** Notes |
*/
Flight::route('GET /core/get_properties', function () {
	require_once("../framework.php");

	$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
	$jomres_properties->get_all_properties();

	$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
	$current_property_details->gather_data_multi($jomres_properties->all_property_uids['all_published_propertys']);
		
	$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
	$jomres_media_centre_images->get_images_multi($jomres_properties->all_property_uids['all_published_propertys'], array('property'));
				
	$curr_jintour_properties = get_showtime('jintour_properties');
	
	if (!isset($curr_jintour_properties)) {
		$curr_jintour_properties = array();
	}
	
	$livesite = get_showtime('live_site');
	
	$all_published_propertys = array();
	if (count($current_property_details->multi_query_result) > 0) {
		foreach ($current_property_details->multi_query_result as $property) {
			if ($property['published'] == 1) {
				$jomres_media_centre_images->get_images($property['propertys_uid'], array('property'));
				if (isset($jomres_media_centre_images->images['property'][0][0]['large'])) {
					$thumbnail = $jomres_media_centre_images->images['property'][0][0]['small'];

					if (isset($property['rooms']) && count($property['rooms']) > 1) {
						$mrp = true;
					} else {
						$mrp = false;
					}
					
					if (!in_array($property['propertys_uid'], $curr_jintour_properties)) {
						$all_published_propertys[] = array (
							"view_property_url"		=> get_property_details_url($property['propertys_uid'], "nosef"),
							"booking_form_url"		=> get_booking_url($property['propertys_uid'], "nosef"),
							"propertys_uid"			=> (int)$property['propertys_uid'],
							"name"					=> $property['property_name'],
							"multi_room_property"	=> $mrp,
							"lat"					=> $property['lat'],
							"long"					=> $property['long'],
							"metadescription"		=> $property['metadescription'],
							"thumbnail_location"	=> $thumbnail
						);
					}
				}
			}
		}
	}

	$data[] = array (
		"api_url"				=> get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/',
		"jomres_url" 			=> JOMRES_SITEPAGE_URL_NOSEF,
		"properties"			=> $all_published_propertys
	);

	Flight::json($response_name = "properties", $data);
});


	Flight::route('GET /core/endpoints', function()
	{
		require_once("../framework.php");

		$core = get_directory_contents(JOMRES_LIBRARIES_ABSPATH.'jomres'.JRDS.'api');
		$core_plugins = get_directory_contents(JOMRES_COREPLUGINS_ABSPATH);
		$remote_plugins = get_directory_contents(JOMRES_REMOTEPLUGINS_ABSPATH);

		$endpoint_plugin_directories = array();

		foreach ($core as $plugin_dir){
			if (strpos($plugin_dir , 'api_feature_' ) !== false ) {
				$endpoint_plugin_directories[] = JOMRES_COREPLUGINS_ABSPATH.$plugin_dir;
			}
		}

		foreach ($core_plugins as $plugin_dir){
			if (strpos($plugin_dir , 'api_feature_' ) !== false ) {
				$endpoint_plugin_directories[] = JOMRES_COREPLUGINS_ABSPATH.$plugin_dir;
			}
		}

		if ($remote_plugins != false) {
			foreach ($remote_plugins as $plugin_dir){
				if (strpos($plugin_dir , 'api_feature_' ) !== false ) {
					$endpoint_plugin_directories[] = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_dir;
				}
			}
		}

		$endpoint_files = array();
		foreach ($endpoint_plugin_directories as $directory) {
			$subdirectories = get_directory_contents( $directory);
			if (!empty($subdirectories)) {
				foreach ( $subdirectories as $subdir ) {
					if ( $subdir == 'GET' || $subdir == 'POST' || $subdir == 'PUT' || $subdir == 'DELETE' ) {
						$files = get_directory_contents( $directory.JRDS.$subdir );
						if (!empty($files)) {
							foreach ( $files as $file ) {
								if ( $file != '.' && $file != '..' ) {
									$endpoint_files[] = $directory.JRDS.$subdir.JRDS.$file;
								}
							}
						}
					}
				}
			}
		}

		$endpoint_lines = array();
		if (!empty($endpoint_files)) {
			foreach ( $endpoint_files as $file ) {
				$contents = file_get_contents($file);
				$rows        = explode("\n", $contents);
				array_shift($rows);
				foreach($rows as $row => $data) {
					if (strpos($data , 'Flight::route(' ) !== false && strpos( $data , "if (strpos(") === false ) {
						$endpoint_lines[] = ltrim($data);
					}
				}
			}
		}

		$api_url = get_showtime('live_site')."/".JOMRES_ROOT_DIRECTORY."/api";

		$endpoints = array();
		if (!empty($endpoint_lines)) {
			foreach ( $endpoint_lines as $line ) {
				$string = trim(str_replace(["Flight::route( '" , "Flight::route(' " , "Flight::route('" ],'',$line));
				$bang = explode( ' ' , $string );
				if ( $bang[0] == 'GET' || $bang[0] == 'POST' || $bang[0] == 'PUT' || $bang[0] == 'DELETE' ) {
					$endpoint = rtrim($bang[1], '/');
					$endpoint = rtrim($endpoint, '/\',');
					$endpoint = rtrim($endpoint, '\',"');
					$endpoints[] = array("method" => $bang[0], "endpoint" => $api_url . $endpoint);
				}
			}
		}

		Flight::json("endpoints", $endpoints);

	});
