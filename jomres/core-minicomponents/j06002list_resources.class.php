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

class j06002list_resources
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return

		// $mrConfig['tariffmode'] 0 = normal
		// $mrConfig['tariffmode'] 1 = advanced
		// $mrConfig['tariffmode'] 2 = micromanage

		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true; return;
			}

		$defaultProperty = getDefaultProperty();
		$mrConfig   = getPropertySpecificSettings($defaultProperty);
		$output 	= array();

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		$jomres_media_centre_images->get_images($defaultProperty, array('rooms'));
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( $defaultProperty );
		
		$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
			
		$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $defaultProperty . "' ORDER BY propertys_uid,room_number ";
		$roomsList = doSelectSql( $query );
			
		$query = "SELECT room_features_uid,feature_description,property_uid FROM #__jomres_room_features WHERE property_uid = '" . (int) $defaultProperty . "' OR property_uid = '0' ORDER BY feature_description ";
		$roomFeaturesList = doSelectSql( $query );

		$output['JOMRESTOOLBAR'] = "";
		if ( $mrConfig[ 'singleRoomProperty' ] == '1' && count( $roomsList ) < 1 )
			{
			$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb   = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem( 'new', jomresURL( JOMRES_SITEPAGE_URL . "&task=edit_resource" ), '' );
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR'] = $jrtb;
			}
		if ( $mrConfig[ 'singleRoomProperty' ] == '0' )
			{
			$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb   = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem( 'new', jomresURL( JOMRES_SITEPAGE_URL . "&task=edit_resource" ), '' );
			$jrtb .= $jrtbar->toolbarItem( 'new', jomresURL( JOMRES_SITEPAGE_URL . "&task=create_multiple_resources" ), jr_gettext('_JOMRES_MULTIPLE_RESOURCES_TITLE',_JOMRES_MULTIPLE_RESOURCES_TITLE,FALSE) );
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR'] = $jrtb;
			}

		$roomRowInfo = array ();
		foreach ( $roomsList as $room )
			{
			$r = array ();
			
			$r[ 'ROOM_UID' ] = $room->room_uid;

			if (!using_bootstrap())
				{
				$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
				$jrtb   = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem( 'edit', jomresURL( JOMRES_SITEPAGE_URL . "&task=edit_resource&roomUid=" . $room->room_uid ), '' );
				if ( $mrConfig[ 'singleRoomProperty' ] == '1' && count( $roomsList ) < 1 )
					{
					$jrtb .= $jrtbar->toolbarItem( 'copy', jomresURL( JOMRES_SITEPAGE_URL . "&task=edit_resource&roomUid=" . $room->room_uid . "&clone=1" ), '' );
					$jrtb .= $jrtbar->toolbarItem( 'delete', jomresURL( JOMRES_SITEPAGE_URL . "&task=delete_resource&roomUid=" . $room->room_uid ), '' );
					}
				elseif ( $mrConfig[ 'singleRoomProperty' ] == '0' )
					{
					$jrtb .= $jrtbar->toolbarItem( 'copy', jomresURL( JOMRES_SITEPAGE_URL . "&task=edit_resource&roomUid=" . $room->room_uid . "&clone=1" ), '' );
					$jrtb .= $jrtbar->toolbarItem( 'delete', jomresURL( JOMRES_SITEPAGE_URL . "&task=delete_resource&roomUid=" . $room->room_uid ), '' );
					}
				$jrtb .= $jrtbar->endTable();
				$r[ 'BUTTONS' ]  = $jrtb;
				}
			else
				{
				$toolbar->newToolbar();
				$toolbar->addItem( 'icon-edit', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=edit_resource' . '&roomUid=' . $room->room_uid ), jr_gettext( 'COMMON_EDIT', COMMON_EDIT, false ) );
				if ( ( $mrConfig[ 'singleRoomProperty' ] == '1' && count( $roomsList ) < 1 ) || $mrConfig[ 'singleRoomProperty' ] == '0' )
					$toolbar->addSecondaryItem( 'icon-copy', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=edit_resource' . '&roomUid=' . $room->room_uid . '&clone=1' ), jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', _JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE, false ) );
				if ( $mrConfig[ 'singleRoomProperty' ] == '0' )
					$toolbar->addSecondaryItem( 'icon-trash', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=delete_resource' . '&roomUid=' . $room->room_uid ), jr_gettext( 'COMMON_DELETE', COMMON_DELETE, false ) );
				$r['BUTTONS']=$toolbar->getToolbar();
				}

			$r[ 'ROOM_TYPE' ]   = $current_property_details->room_types[$room->room_classes_uid]['abbv'];
			$r[ 'ROOM_NAME' ]   = stripslashes( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE' . $room->room_uid, stripslashes( $room->room_name ) ) );
			$r[ 'ROOM_NUMBER' ] = $room->room_number;
			$r[ 'ROOM_FLOOR' ]  = $room->room_floor;

			if ( $room->room_disabled_access ) 
				$disabledAccess = jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES, false );
			else
				$disabledAccess = jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO, false );
			
			$r[ 'DISABLED_ACCESS' ] = $disabledAccess;
			$r[ 'MAX_PEOPLE' ]      = $room->max_people;

			if ( $room->smoking ) 
				$smokingRoom = jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES, false );
			else
				$smokingRoom = jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO, false );

			$r[ 'SMOKING' ] = $smokingRoom;

			$r[ 'ROOM_IMAGE' ] = $jomres_media_centre_images->images['rooms'][$room->room_uid][0]['small'];

			$roomFeaturesString = $room->room_features_uid;
			$roomFeaturesArray  = explode( ",", $roomFeaturesString );
			$listTxt .= "";
			if ( count( $roomFeaturesList ) > 0 )
				{
				$listTxt = "<ul>";
				foreach ( $roomFeaturesList as $feature )
					{
					for ( $i = 0, $n = count( $roomFeaturesArray ); $i < $n; $i++ )
						{
						if ( $roomFeaturesArray[ $i ] == ( $feature->room_features_uid ) )
							{
							$fd = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMFEATURES' . (int) $feature->room_features_uid, $feature->feature_description );
							$listTxt .= "<li>" . $fd . "</li>
							";
							}
						}
					}
				$listTxt .= "</ul>
				";
				}

			$r[ 'ROOM_FEATURES' ] = $listTxt;
			$roomRowInfo[] = $r;
			}
		
		$output[ 'HROOM_TYPE' ]			  = jr_gettext( '_JOMRES_HRESOURCE_TYPE', _JOMRES_HRESOURCE_TYPE, false );
		$output[ 'HROOM_NAME' ]           = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME, false );
		$output[ 'HROOM_NUMBER' ]         = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER, false );
		$output[ 'HROOM_FLOOR' ]          = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR, false );
		$output[ 'HROOM_DISABLEDACCESS' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', _JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS, false );
		$output[ 'HROOM_MAXPEOPLE' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE, false );
		$output[ 'HROOM_ROOMSMOKING' ]    = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', _JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING, false );
		$output[ 'HROOM_IMAGE' ]      	  = jr_gettext( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', _JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE, false );
		$output[ 'HROOM_FEATURES' ]       = jr_gettext( '_JOMRES_HRESOURCE_FEATURES', _JOMRES_HRESOURCE_FEATURES, false );
		
		$pageoutput = array ();
		
		if ( $mrConfig[ 'singleRoomProperty' ] == "0" )
			{
			$output[ 'PAGETITLE' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOM', _JOMRES_COM_MR_VRCT_TAB_ROOM, false );
			
			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_resources.html' );
			$tmpl->addRows( 'rows', $roomRowInfo );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->displayParsedTemplate();
			}
		else
			{
			$output[ 'PAGETITLE' ] = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', _JOMRES_COM_MR_EB_ROOM_CLASS_ABBV, false );
			
			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_resources_srp.html' );
			$tmpl->addRows( 'rows', $roomRowInfo );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->displayParsedTemplate();
			}
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', _JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOM', _JOMRES_COM_MR_VRCT_TAB_ROOM );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', _JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', _JOMRES_COM_MR_LISTTARIFF_ROOMCLASS );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', _JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', _JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', _JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', _JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', _JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', _JOMRES_COM_MR_VRCT_TAB_ROOMTYPES );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', _JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', _JOMRES_COM_MR_LISTTARIFF_ROOMCLASS );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', _JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_TITLE', _JOMRES_COM_MR_LISTTARIFF_TITLE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', _JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', _JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', _JOMRES_COM_MR_VRCT_TAB_PROPERTYS );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', _JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE );

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
		return null;
		}
	}

?>