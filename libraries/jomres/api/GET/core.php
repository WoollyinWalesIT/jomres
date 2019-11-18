<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/*
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

Flight::route('GET /core/report', function() 
	{
	require_once("../framework.php");

	$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
	$jomres_properties->get_all_properties();

  	$data[] = array ( 
		"api_url"				=> urlencode(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/'),
		"jomres_url" 			=> urlencode(JOMRES_SITEPAGE_URL_NOSEF),
		"property_count"		=> count($jomres_properties->all_property_uids['all_propertys'])
	);

	Flight::json( $response_name = "report" ,$data);
	});


/*
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
Flight::route('GET /core/get_properties', function() 
	{
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
 	if ( count($current_property_details->multi_query_result) > 0 ) {
		foreach ($current_property_details->multi_query_result as $property) {
			if ($property['published'] == 1 ) {
				
				$jomres_media_centre_images->get_images($property['propertys_uid'], array('property'));
				if (isset($jomres_media_centre_images->images['property'][0][0]['large'])) {
					$thumbnail = $jomres_media_centre_images->images['property'][0][0]['small'];

					if (count($property['rooms']) > 1) {
						$mrp = true;
					} else {
						$mrp = false;
					}
					
					if (!in_array($property['propertys_uid'] , $curr_jintour_properties )) {
						$all_published_propertys[] = array (
							"view_property_url"		=> get_property_details_url($property['propertys_uid'] , "nosef"),
							"booking_form_url"		=> get_booking_url($property['propertys_uid'] , "nosef"),
							"propertys_uid"			=> (int)$property['propertys_uid'],
							"name"					=> $property['property_name'],
							"multi_room_property"	=> $mrp,
							"lat"					=> $property['lat'],
							"long"					=> $property['long'],
							"metadescription"		=> $property['metadescription'],
							"thumbnail_location"	=> $livesite.$thumbnail
						); 
					}
				}
			}
		}
	}

	$data[] = array ( 
		"api_url"				=> urlencode(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/'),
		"jomres_url" 			=> urlencode(JOMRES_SITEPAGE_URL_NOSEF),
		"properties"			=> $all_published_propertys
	);

	Flight::json( $response_name = "properties" ,$data);
	});


	