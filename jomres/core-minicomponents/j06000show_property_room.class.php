<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000show_property_room
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;
			return;
			}

		if (isset($componentArgs[ 'id' ]))
			$room_uid = (int) $componentArgs[ 'id' ];
		elseif ( isset ( $_REQUEST['id'] ))
			$room_uid = (int) $_REQUEST['id'];
		else 
			return;

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		
		//get all room details
		$basic_room_details = jomres_singleton_abstract::getInstance( 'basic_room_details' );
		$basic_room_details->get_room($room_uid);
		
		$output = array();
		$pageoutput = array();

		if ( count( $basic_room_details->room ) > 0 )
			{
			$property_uid = $basic_room_details->room['propertys_uid'];
		
			if (!user_can_view_this_property($property_uid))
				return;
			
			$mrConfig = getPropertySpecificSettings($property_uid);
			
			property_header( $property_uid );
			
			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$current_property_details->gather_data( $property_uid );
			
			//get room and room feature images
			$jomres_media_centre_images->get_images($property_uid, array('rooms','room_features'));
		
			if (count($jomres_media_centre_images->images['rooms'][$room_uid])>0)
				{
				$result = $MiniComponents->specificEvent( '01060', 'slideshow' , array( "images" => $jomres_media_centre_images->images['rooms'][$room_uid] ) );
				$output[ 'SLIDESHOW' ] = $result ['slideshow'];
				}
			else
				$output['SLIDESHOW'] = '';
			
			$output[ 'HEADER_ROOMFLOOR' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', false );
			$output[ 'HEADER_MAXPEOPLE' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', false );
			$output[ 'AVLCALTITLE' ] 		   	= jr_gettext( '_JOMRES_FRONT_AVAILABILITY', '_JOMRES_FRONT_AVAILABILITY', false, false );
			$output[ 'HROOM_FEATURES' ]     	= jr_gettext( '_JOMRES_HRESOURCE_FEATURES', '_JOMRES_HRESOURCE_FEATURES', false );

							
			$output[ 'ROOMNAME' ]      = $basic_room_details->room['room_name'];
			$output[ 'ROOMNUMBER' ]    = stripslashes( $basic_room_details->room['room_number'] );
			$output[ 'ROOMFLOOR' ]     = stripslashes( $basic_room_details->room['room_floor'] );
			$output[ 'MAXPEOPLE' ]     = $basic_room_details->room['max_people'];

			$output[ 'ROOMTYPE' ] = $current_property_details->all_room_types[ $basic_room_details->room['room_classes_uid'] ]['room_class_abbv'];

			$roomFeatureDescriptionsArray = array ();
			$roomFeatureUidsArray         = explode( ",", $basic_room_details->room['room_features_uid'] );
			
			//room features
			$output[ 'ROOM_FEATURES' ] = "";
			
			foreach ($roomFeatureUidsArray as $f)
				{
				if ($f != '')
					{
					$output[ 'ROOM_FEATURES' ] .= $basic_room_details->all_room_features[ $f ]['tooltip'];
					}
				}

			$output[ 'RANDOM_IDENTIFIER' ]  = generateJomresRandomString( 10 );

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'show_room.html' );
			$tmpl->displayParsedTemplate();
			
			//availability calendar
			if ( (int)$mrConfig[ 'showAvailabilityCalendar' ] == 1 )
				{
				$MiniComponents->specificEvent( '06000', 'srp_calendar', array('output_now'=>true, 'property_uid'=>$property_uid , 'months_to_show' => 24 , 'show_just_month' => false , 'room_uid' => $room_uid ) );
				}
			}
		}


	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS' );
		$output[ ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', '_JOMRES_FRONT_AVAILABILITY' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE' );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
