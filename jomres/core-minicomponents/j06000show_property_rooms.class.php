<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000show_property_rooms
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

		if ( isset($componentArgs[ 'property_uid' ]) )
			$property_uid = $componentArgs[ 'property_uid' ];
		else
			{
			if( isset($_REQUEST['property_uid']) )
				$property_uid = (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
			else
				$property_uid = get_showtime('property_uid');
			}
		
		if ( $property_uid == 0 ) 
			return;
		
		$output_now = true;
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = (bool)$componentArgs[ 'output_now' ];
		
		if ($output_now)
			property_header( $property_uid );
		
		if (isset($componentArgs[ 'slideshow' ]))
			$display_slideshow = (bool)$componentArgs[ 'slideshow' ];
		else
			$display_slideshow = true;

		$show_slideshow = intval( jomresGetParam( $_REQUEST, 'show_rooms_list_slideshow', 1 ) );
		if ($show_slideshow == 0)
			$display_slideshow = false;
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		
		//get all room details
		$basic_room_details = jomres_singleton_abstract::getInstance( 'basic_room_details' );
		$basic_room_details->get_all_rooms($property_uid);
		
		$output = array();

		if ( count( $basic_room_details->rooms ) > 0 )
			{
			//get room and room feature images
			$jomres_media_centre_images->get_images($property_uid, array('rooms','room_features'));

			if ($display_slideshow)
				$output['ALLROOMSSLIDESHOW'] = $MiniComponents->specificEvent( '06000', 'show_property_rooms_slideshow' , array( "property_uid" => $property_uid , "size" => "large") );
			else
				$output['ALLROOMSSLIDESHOW'] = '';
			
			$rows = array();

			foreach ( $basic_room_details->rooms as $room )
				{
				$r = array ();
				
				$r[ 'HEADER_ROOMFLOOR' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR, false );
				$r[ 'HEADER_MAXPEOPLE' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE, false );
				$r[ 'AVLCALTITLE' ] 		   = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false, false );
								
				$r[ 'ROOMNAME' ]      = $room['room_name'];
				$r[ 'ROOMNUMBER' ]    = stripslashes( $room['room_number'] );
				$r[ 'ROOMFLOOR' ]     = stripslashes( $room['room_floor'] );
				$r[ 'MAXPEOPLE' ]     = $room['max_people'];

				$r[ 'ROOMTYPE' ] = $current_property_details->all_room_types[ $room['room_classes_uid'] ]['room_class_abbv'];

				$roomFeatureDescriptionsArray = array ();
				$roomFeatureUidsArray         = explode( ",", $room['room_features_uid'] );
				
				//room features
				$r[ 'ROOM_FEATURES' ] = "";
				foreach ($roomFeatureUidsArray as $f)
					{
					$r[ 'ROOM_FEATURES' ] .= $basic_room_details->all_room_features[ $f ]['tooltip'];
					}

				$r[ 'RANDOM_IDENTIFIER' ]  = generateJomresRandomString( 10 );
				
				$r[ 'IMAGELARGE' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
				$r[ 'IMAGEMEDIUM' ] = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
				$r[ 'IMAGETHUMB' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";

				if ($jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['large'] != "")
					{
					$r[ 'IMAGELARGE' ]  = $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['large'];
					$r[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['medium'];
					$r[ 'IMAGETHUMB' ]  = $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['small'];
					
					/*$all_room_images = array();
					foreach (  $jomres_media_centre_images->images['rooms'][$room['room_uid']] as $room )
						{
						
						$all_room_images[]=$room;
						}
					$result = $MiniComponents->specificEvent( '01060', 'slideshow' , array( "images" => $all_room_images , "size" => "small" ) );
					$r[ 'SLIDESHOW' ]  = $result ['slideshow'];*/
					}
				
				$r[ 'AVLCALLINK' ]  = jomresURL( JOMRES_SITEPAGE_URL . "&task=show_property_room&id=".$room['room_uid']);
				
				$rows[ ] = $r;
				}

			$pageoutput=array();
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'show_rooms.html' );
			$result = $tmpl->getParsedTemplate();
			
			if ( $output_now )
				echo $result;
			else
				$this->retVals = $result;
			}
		}


	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS );
		$output[ ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
