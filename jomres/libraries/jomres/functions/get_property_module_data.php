<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


// Intended as a utility function used by Jomres modules to display information about a property in modules
function get_property_module_data( $property_uid_array, $alt_template_path = '', $alt_template_name = '' )
	{
	// for testing
	//$property_uid_array = array(1,12,43,14);
	//add_gmaps_source();
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	if ( !defined( '_JOMRES_COM_MR_SHOWPROFILES' ) )
		{
		$jomreslang = jomres_singleton_abstract::getInstance( 'jomres_language' );
		$jomreslang->get_language( '' );
		}

	$return_data = array ();

	$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
	$current_property_details->gather_data_multi( $property_uid_array );
	
	$jomres_property_list_prices = jomres_singleton_abstract::getInstance( 'jomres_property_list_prices' );
	$jomres_property_list_prices->gather_lowest_prices_multi($property_uid_array);
	
	$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
	$jomres_media_centre_images->get_images_multi($property_uid_array, array('property'));

	// Same as list properties
	$g_pids = genericOr( $property_uid_array, 'propertys_uid' );
	$g_pid  = genericOr( $property_uid_array, 'property_uid' );

	$customTextObj = jomres_singleton_abstract::getInstance( 'custom_text' );
	foreach ( $property_uid_array as $property_uid )
		{
		if ( $property_uid > 0 )
			{
			$property_data=$current_property_details->multi_query_result[ $property_uid ];
			$mrConfig      = getPropertySpecificSettings( $property_uid );

			$current_property_details->gather_data( $property_uid );

			set_showtime( 'property_type', $current_property_details->property_type );
			set_showtime( 'property_uid', $property_uid );
			$customTextObj->get_custom_text_for_property( $property_uid );
			
			$jomres_media_centre_images->get_images($property_uid, array('property'));

			$property_data[ 'THUMBNAIL' ] = $jomres_media_centre_images->images ['property'][0][0]['small'];

			$property_data[ 'IMAGELARGE' ]  = $jomres_media_centre_images->images ['property'][0][0]['large'];
			$property_data[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images ['property'][0][0]['medium'];
			$property_data[ 'IMAGETHUMB' ]  = $jomres_media_centre_images->images ['property'][0][0]['small'];
			
			
			$property_data[ 'PRICE_PRE_TEXT' ]  = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRE_TEXT' ];
			$property_data[ 'PRICE_PRICE' ]     = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRICE' ];
			$property_data[ 'PRICE_POST_TEXT' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'POST_TEXT' ];

			$property_data[ 'PROPERTY_UID' ]      = $property_uid;
			$property_data[ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString( 10 );

			$property_data[ 'LIVE_SITE' ]           = get_showtime( 'live_site' );
			$property_data[ 'MOREINFORMATION' ]     = jr_gettext( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', _JOMRES_COM_A_CLICKFORMOREINFORMATION, $editable = false, true );
			$property_data[ 'MOREINFORMATIONLINK' ] = jomresURL( JOMRES_SITEPAGE_URL . "&task=viewproperty&property_uid=" . $property_uid );
			$property_data[ 'STARSIMAGES' ]         = '';
			for ( $i = 1; $i <= $property_data[ 'stars' ]; $i++ )
				{
				$property_data[ 'STARSIMAGES' ] .= "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/star.png\" alt=\"star\" border=\"0\" />";
				}
			
			$property_data[ 'SUPERIOR' ] = '';
			if ( $property_data[ 'superior' ] == 1 ) 
				$property_data[ 'SUPERIOR' ] = "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/superior.png\" alt=\"superior\" border=\"0\" />";

			$pageoutput = array ( $property_data );
			$tmpl       = new patTemplate();
			if ( $alt_template_path != '' )
				$tmpl->setRoot( $alt_template_path );
			else
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			if ( count( $current_property_details->multi_query_result[ $property_uid ][ 'room_types' ] ) > 0 ) $tmpl->addRows( 'room_types', $current_property_details->multi_query_result[ $property_uid ][ 'room_types' ] );
			if ( count( $current_property_details->multi_query_result[ $property_uid ][ 'room_features' ] ) > 0 ) $tmpl->addRows( 'room_features', $current_property_details->multi_query_result[ $property_uid ][ 'room_features' ] );

			if ( $alt_template_name != '' ) 
				$tmpl->readTemplatesFromInput( $alt_template_name );
			else
				$tmpl->readTemplatesFromInput( 'basic_module_output.html' );
			$res[ $property_uid ][ 'template' ] = $tmpl->getParsedTemplate();
			$res[ $property_uid ][ 'data' ]     = $property_data;
			}
		}

	return $res;
	}