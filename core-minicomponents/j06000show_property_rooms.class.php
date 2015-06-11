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
		if ( $MiniComponents->template_touch ){$this->template_touchable = true;return;}

		if (isset($componentArgs[ 'property_uid' ]))
			$property_uid = (int) $componentArgs[ 'property_uid' ];
		elseif ( isset ( $_REQUEST['property_uid'] ))
			$property_uid = (int) $_REQUEST['property_uid'];
		else return;

		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		
		$jomres_property_room_features = jomres_singleton_abstract::getInstance( 'jomres_property_room_features' );
		
		$output = array();

		$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking FROM #__jomres_rooms WHERE propertys_uid = " . (int) $property_uid . " ORDER BY room_number,room_name";
		$roomList = doSelectSql( $query );

		if ( count( $roomList ) > 0 )
			{
			$current_property_details->gather_data($property_uid);
			$jomres_media_centre_images->get_images($property_uid, array('rooms'));

			$output[ 'HIMAGEHEADER' ]                        = "";
			$output[ 'COM_A_BASICTEMPLATE_SHOWROOMS' ]       = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS, false );
			$output[ 'COM_A_BASICTEMPLATE_SHOWROOMS_TITLE' ] = jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', _JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE, false );
			$output[ 'HEADER_ROOMNUMBER' ]                   = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER, false );
			$output[ 'HEADER_ROOMTYPE' ]                     = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE, false );
			$output[ 'HEADER_SMOKING' ]                      = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', _JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING, false );
			$output[ 'HEADER_ROOMNAME' ]                     = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME, false );
			$output[ 'HEADER_AVLCALLINK' ] = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false );
			$output[ 'HEADER_ROOMFLOOR' ]               = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR, false );
			$output[ 'HEADER_DISABLEDACCESS' ]          = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', _JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS, false );
			$output[ 'HEADER_MAXPEOPLE' ]               = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE, false );
			$output[ '_JOMRES_HRESOURCE_FEATURES' ]     = jr_gettext( '_JOMRES_HRESOURCE_FEATURES', _JOMRES_HRESOURCE_FEATURES, false );

			$rows = array();

			foreach ( $roomList as $room )
				{
				$r              = array ();

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

				$result = $MiniComponents->specificEvent( '01060', 'slideshow' , array( "images" => $jomres_media_centre_images->images['rooms'][$room_uid] ) );
				$r[ 'SLIDESHOW' ] = $result ['slideshow'];

				$classAbbv = $current_property_details->all_room_types[ (int) $room_classes_uid ]['room_class_abbv'];

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

				$r[ 'ROOM_FEATURES' ] = $jomres_property_room_features->get_room_feature_template($roomFeatureUidsArray) ;

				$r[ 'RANDOM_IDENTIFIER' ]  = generateJomresRandomString( 10 );

				$r[ 'IMAGELARGE' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
				$r[ 'IMAGEMEDIUM' ] = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
				$r[ 'IMAGETHUMB' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";

				if ($jomres_media_centre_images->images['rooms'][$room_uid][0]['large'] != "")
					{
					$r[ 'IMAGELARGE' ]  = $jomres_media_centre_images->images['rooms'][$room_uid][0]['large'];
					$r[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images['rooms'][$room_uid][0]['medium'];
					$r[ 'IMAGETHUMB' ]  = $jomres_media_centre_images->images['rooms'][$room_uid][0]['small'];
					}

				$r[ 'ROOMNUMBER' ] = $room_number;
				$r[ 'ROOMTYPE' ]   = $classAbbv;
				$r[ 'SMOKING' ]    = $smoking;
				$r[ 'ROOMNAME' ]   = $room_name;
				
				$r[ 'AVLCALLINK' ]  = jomresURL( JOMRES_SITEPAGE_URL . "&task=showRoomDetails&roomUid=$room_uid");
				$r[ 'AVLCALTITLE' ] = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false, false );

				$r[ 'ROOMFLOOR' ]      = $room_floor;
				$r[ 'DISABLEDACCESS' ] = $disabledAccess;
				$r[ 'MAXPEOPLE' ]      = $max_people;
				
				$r[ 'HEADER_AVLCALLINK' ] = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false );
				
				$rows[ ] = $r;
				}

			$pageoutput=array();
			$pageoutput[]=$output;
			
			$tmpl = new patTemplate();
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'show_property_rooms.html' );
			$result = $tmpl->getParsedTemplate();
			
			if ( isset ( $_REQUEST['property_uid'] ))
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