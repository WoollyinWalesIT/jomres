<?php
/**
 * Core file
 *
 * @author  
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2017
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
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
		"api_url"				=> get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/',
		"jomres_url" 			=> JOMRES_SITEPAGE_URL_NOSEF,
		"property_count"		=> count($jomres_properties->all_property_uids['all_published_propertys'])
	);

	Flight::json( $response_name = "report" ,$data);
	});

