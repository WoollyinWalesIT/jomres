<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000ajax_list_properties_awaiting_approval
	{
	function j16000ajax_list_properties_awaiting_approval()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$property_uid = jomresGetParam( $_REQUEST, 'property_uid', 0 );

		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( $property_uid );
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		$jomres_media_centre_images->get_images($property_uid, array('property'));

		$output = array ();

		$output[ 'IMAGE' ] = $jomres_media_centre_images->images ['property'][0][0]['large'];

		$output[ 'property_name' ]     = $current_property_details->property_name;
		$output[ 'property_street' ]   = $current_property_details->property_street;
		$output[ 'property_town' ]     = $current_property_details->property_town;
		$output[ 'property_postcode' ] = $current_property_details->property_postcode;
		$output[ 'property_region' ]   = $current_property_details->property_region;
		$output[ 'property_country' ]  = $current_property_details->property_country;
		$output[ 'property_tel' ]      = $current_property_details->property_tel;
		$output[ 'property_email' ]    = $current_property_details->property_email;

		$output[ 'property_description' ]          = $current_property_details->property_description;
		$output[ 'property_checkin_times' ]        = $current_property_details->property_checkin_times;
		$output[ 'property_area_activities' ]      = $current_property_details->property_area_activities;
		$output[ 'property_driving_directions' ]   = $current_property_details->property_driving_directions;
		$output[ 'property_airports' ]             = $current_property_details->property_airports;
		$output[ 'property_othertransport' ]       = $current_property_details->property_othertransport;
		$output[ 'property_policies_disclaimers' ] = $current_property_details->property_policies_disclaimers;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'preview_property.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}