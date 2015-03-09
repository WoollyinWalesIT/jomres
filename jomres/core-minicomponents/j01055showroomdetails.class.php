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

/**
#
 * Shows room details/availability calendar in property details/popup depending on property configuration
#
 *
 * @package Jomres
#
 */
class j01055showroomdetails
	{
	/**
	#
	 * Constructor: If this is a single room property it will show the availability calendar for the property, else if "all" it will list all rooms, else it will show the availability and details of just one room
	#
	 */
	function j01055showroomdetails( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$all = $componentArgs[ 'all' ];
		if ( $all ) 
			$property_uid = (int) $componentArgs[ 'property_uid' ];
		global $noshowroom;
		$mrConfig                 = getPropertySpecificSettings();
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		$this->retVals            = '';
		$roomUid                  = intval( jomresGetParam( $_REQUEST, 'roomUid', 0 ) );
		$featureList              = array ();
		$output = array();
		
		if ( !$all ) 
			$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking FROM #__jomres_rooms WHERE room_uid = '" . (int) $roomUid . "'";
		else
			$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $property_uid . "' ORDER BY room_number,room_name";
		$roomList = doSelectSql( $query );
		
		if ( count( $roomList ) > 0 )
			{
			if ( !$all )
				{
				foreach ( $roomList as $room )
					{
					$property_uid = (int) $room->propertys_uid;
					}
				getPropertySpecificSettings( $property_uid );
				//property_header($property_uid);
				}
			
			$current_property_details->gather_data($property_uid);
			$jomres_media_centre_images->get_images($property_uid, array('rooms'));
			
			$headersList[ 'HIMAGEHEADER' ]                        = "";
			$headersList[ 'COM_A_BASICTEMPLATE_SHOWROOMS' ]       = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS, false );
			$headersList[ 'COM_A_BASICTEMPLATE_SHOWROOMS_TITLE' ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE, false );
			$headersList[ 'HEADER_ROOMNUMBER' ]                   = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER, false );
			$headersList[ 'HEADER_ROOMTYPE' ]                     = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE, false );
			$headersList[ 'HEADER_SMOKING' ]                      = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', _JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING, false );
			$headersList[ 'HEADER_ROOMNAME' ]                     = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME, false );
			if ( $all && !isset( $_REQUEST[ 'tmpl' ] ) )
				{
				$headersList[ 'HEADER_AVLCALLINK' ] = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false );
				}
			else
				{
				$headersList[ 'HEADER_AVLCALLINK' ] = "";
				}
			$headersList[ 'HEADER_ROOMFLOOR' ]               = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR, false );
			$headersList[ 'HEADER_DISABLEDACCESS' ]          = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', _JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS, false );
			$headersList[ 'HEADER_MAXPEOPLE' ]               = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE, false );
			$headersList[ '_JOMRES_HRESOURCE_FEATURES' ]     = jr_gettext( '_JOMRES_HRESOURCE_FEATURES', _JOMRES_HRESOURCE_FEATURES, false );
			
			

			foreach ( $roomList as $room )
				{
				$roomRow              = array ();
				$room_uid             = $room->room_uid;
				$room_classes_uid     = $room->room_classes_uid;
				$propertys_uid        = $room->propertys_uid;
				$room_features_uid    = $room->room_features_uid;
				$room_name            = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE' . $room_uid, stripslashes( $room->room_name ), false );
				$room_number          = stripslashes( $room->room_number );
				$room_floor           = stripslashes( $room->room_floor );
				$room_disabled_access = $room->room_disabled_access;
				$max_people           = $room->max_people;
				$smoking              = $room->smoking;

				if (!$all)
					{
					if (count($jomres_media_centre_images->images['rooms'][$room_uid])>0)
						{
						$result = $MiniComponents->specificEvent( '01060', 'slideshow' , array( "images" => $jomres_media_centre_images->images['rooms'][$room_uid] ) );
						$output[ 'SLIDESHOW' ] = $result ['slideshow'];
						}
					else
						{
						$output[ 'SLIDESHOW' ] = '';
						}
					}
				
				$avl_link  = jomresURL( JOMRES_SITEPAGE_URL . "&task=showRoomDetails&roomUid=$room_uid" );
				$avl_title = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false, false );
				$classAbbv = $current_property_details->all_room_types[ (int) $room_classes_uid ]['room_class_abbv'];

				//$propertyName getPropertyNameNoTables($property_uid)
				if ( $room_disabled_access == 1 ) 
					$disabledAccess = jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES, false );
				else
					$disabledAccess = jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO, false );
				if ( $smoking == 1 ) 
					$smoking = jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES, false );
				else
					$smoking = jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO, false );

				$roomFeatureDescriptionsArray = array ();
				$roomFeatureUidsArray         = explode( ",", $room_features_uid );
				$featurelist                  = array ();
				foreach ( $roomFeatureUidsArray as $featureUid )
					{
					if ( (int) $featureUid > 0 )
						{
						$roomFeatureDescriptionsArray[ 'ROOMFEATURE' ] = $current_property_details->room_features[ $property_uid ][ $featureUid ][ 'desc' ];
						$featurelist[ ]                                = $roomFeatureDescriptionsArray;
						}
					}
				
				$roomRow[ 'RANDOM_IDENTIFIER' ]  = generateJomresRandomString( 10 );
				
				$roomRow[ 'IMAGELARGE' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
				$roomRow[ 'IMAGEMEDIUM' ] = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
				$roomRow[ 'IMAGETHUMB' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";

				if ($jomres_media_centre_images->images['rooms'][$room_uid][0]['large'] != "")
					{
					$roomRow[ 'IMAGELARGE' ]  = $jomres_media_centre_images->images['rooms'][$room_uid][0]['large'];
					$roomRow[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images['rooms'][$room_uid][0]['medium'];
					$roomRow[ 'IMAGETHUMB' ]  = $jomres_media_centre_images->images['rooms'][$room_uid][0]['small'];
					}
				
				
				$roomRow[ 'ROOMNUMBER' ] = $room_number;
				$roomRow[ 'ROOMTYPE' ]   = $classAbbv;
				$roomRow[ 'SMOKING' ]    = $smoking;
				$roomRow[ 'ROOMNAME' ]   = $room_name;
				if ( $all )
					{
					$roomRow[ 'AVLCALLINK' ]  = $avl_link;
					$roomRow[ 'AVLCALTITLE' ] = $avl_title;
					}
				else
					{
					$roomRow[ 'AVLCALLINK' ]  = '';
					$roomRow[ 'AVLCALTITLE' ] = '';
					}
				$roomRow[ 'ROOMFLOOR' ]      = $room_floor;
				$roomRow[ 'DISABLEDACCESS' ] = $disabledAccess;
				$roomRow[ 'MAXPEOPLE' ]      = $max_people;

				$rows[ ] = $roomRow;
				$counter++;
				}
			$headers[ ] = $headersList;

			$tmpl = new patTemplate();
			if ( $featurelist[ 0 ] )
				{
				$tmpl->addRows( 'room_features', $featurelist );
				}
			
			$pageoutput=array();
			$pageoutput[]=$output;
			$tmpl->addRows( 'pageoutput', $pageoutput );
			
			$tmpl->addRows( 'room_headers', $headers );
			$tmpl->addRows( 'room_details', $rows );
			$mcOutput = $MiniComponents->getAllEventPointsData( '01050' );
			if ( count( $mcOutput ) > 0 )
				{
				foreach ( $mcOutput as $key => $val )
					{
					$tmpl->addRows( 'customOutput_' . $key, array ( $val ) );
					}
				}
			$componentArgs = array ( 'tmpl' => $tmpl );
			if ( !$all )
				{
				if ( $MiniComponents->eventFileExistsCheck( '00240' ) )
					{
					$MiniComponents->triggerEvent( '00240', $componentArgs ); //
					}
				else
					{
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'show_room.html' );
					$tmpl->displayParsedTemplate();
					}
				}
			else
				{
				if ( !$noshowroom )
					{
					if ( $MiniComponents->eventFileExistsCheck( '00238' ) )
						{
						$MiniComponents->triggerEvent( '00238', $componentArgs ); //
						}
					else
						{
						$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
						$tmpl->readTemplatesFromInput( 'show_rooms.html' );
						$output_now = (bool) jomresGetParam( $_REQUEST, 'op', false );
						if ( $output_now ) $tmpl->displayParsedTemplate();
						else
						$this->retVals = $tmpl->getParsedTemplate();
						}
					}
				}

			if ( !$all && $mrConfig[ 'showAvailabilityCalendar' ] != "0" ) // This shows the room and it's availability if the user clicks on the availability link in the rooms list template.
				{
				showAvailability( $room_uid, "", $propertys_uid, 6, $room_avl_enquiry = true );
				}
			}
		}


	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS );
		$output[ ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', _JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', _JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}

?>