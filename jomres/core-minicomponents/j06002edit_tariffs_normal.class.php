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

class j06002edit_tariffs_normal
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;return;
			}

		$mrConfig        = getPropertySpecificSettings();
		$output          = array ();
		$defaultProperty = getDefaultProperty();
		
		if ($mrConfig['tariffmode']!='0' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property'))
			return;

		$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$basic_property_details->gather_data( $defaultProperty );
		$property_type_id   = $basic_property_details->ptype_id;
		$room_classes_array = array ();
		if ( count( $basic_property_details->this_property_room_classes ) > 0 )
			{
			foreach ( $basic_property_details->this_property_room_classes as $key => $val )
				{
				if ( array_key_exists( $key, $basic_property_details->classAbbvs ) ) $room_classes_array[ ] = $key;
				}
			}
		if ( count ($room_classes_array) == 0 )
			{
			$message = "Error, there are no room types for this property type. You can fix this by visiting Administrator -> Jomres -> Site Structure -> and editing the room/resource types. Remember to set the Is SRP flag correctly.";
			throw new Exception( $message );
			return;
			}
		
		$propertyRowInfo = "";

		$query     = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,max_people FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $defaultProperty . "' ORDER BY room_number ";
		$roomsList = doSelectSql( $query );

		$query          = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,property_uid,srp_only FROM #__jomres_room_classes  WHERE property_uid = '0' AND room_classes_uid IN (".implode(',',$room_classes_array).") ORDER BY room_class_abbv ";
		$roomsClassList = doSelectSql( $query );
		
		//this is not used
		//$query         = "SELECT propertys_uid,property_name,property_street,property_town,property_postcode,property_region,property_country,property_tel,property_fax,property_email,property_features,published,apikey FROM #__jomres_propertys  WHERE propertys_uid = '" . (int) $defaultProperty . "' ORDER BY property_name ";
		//$propertysList = doSelectSql( $query );
		
		$query         = "SELECT `roomrateperday`,`roomclass_uid`,`maxpeople` FROM #__jomres_rates WHERE property_uid = '" . (int) $defaultProperty . "'";
		$tariffList    = doSelectSql( $query );

		if ( count( $roomsClassList ) == 0 )
			{
			echo "Error, can't find any room types for this property type. You will need to edit your room types and associate them with a property type first.";

			return;
			}

		$roomTypesArray        = array ();
		$allTariffsForRoomType = array ();

		if ( $mrConfig[ 'singleRoomProperty' ] == '1' && count( $roomsList ) > 1 ) // Looks like property manager has changed from MRP to SRP. Let's clean things up and start anew
			{
			$query      = "DELETE FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $defaultProperty . "'";
			$result     = doInsertSql( $query, "" );
			$query      = "DELETE FROM #__jomres_rates WHERE property_uid = '" . (int) $defaultProperty . "'";
			$result     = doInsertSql( $query, "" );
			$roomsList  = array ();
			$tariffList = array ();
			}

		foreach ( $roomsClassList as $roomType ) // First we need to gather some information about tariffs & rooms
			{
			if ( count( $roomsList ) > 0 )
				{
				foreach ( $roomsList as $room )
					{
					if ( $room->room_classes_uid == $roomType->room_classes_uid )
						{
						$count                                                               = $roomTypesArray[ $roomType->room_classes_uid ][ 'counter' ];
						$roomTypesArray[ $roomType->room_classes_uid ][ 'counter' ]          = $count + 1;
						$roomTypesArray[ $roomType->room_classes_uid ][ 'existingrooms' ][ ] = $room->room_uid;
						$roomTypesArray[ $roomType->room_classes_uid ][ 'max_people' ]       = $room->max_people;
						}
					}
				}
			if ( count( $tariffList ) > 0 )
				{
				foreach ( $tariffList as $tariff )
					{
					if ( $tariff->roomclass_uid == $roomType->room_classes_uid )
						{
						$count                                                                    = $allTariffsForRoomType[ $roomType->room_classes_uid ][ 'counter' ];
						$allTariffsForRoomType[ $roomType->room_classes_uid ][ 'counter' ]        = $count + 1;
						$allTariffsForRoomType[ $roomType->room_classes_uid ][ 'roomrateperday' ] = $tariff->roomrateperday;
						$allTariffsForRoomType[ $roomType->room_classes_uid ][ 'maxpeople' ]      = $tariff->maxpeople;
						}
					}
				}
			}


		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		
		//$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "" ), '' );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_normalmode_tariffs' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'PAGETITLE' ]         = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false, false ) . " &amp; " . jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false, false );
		$output[ 'HROOMCLASS' ]        = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', false );
		$output[ 'HNUMBEROFROOMS' ]    = jr_gettext( '_JOMRES_NUMBEROFROOMSAVAILABLE', '_JOMRES_NUMBEROFROOMSAVAILABLE', false );
		$output[ 'HROOMRATEPERDAY' ]   = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false );
		$output[ 'HPROPERTYTYPE' ]     = jr_gettext( 'JOMRES_PROPERTYTYPE', 'JOMRES_PROPERTYTYPE', false );
		$output[ 'HROOMTYPE' ]         = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', false );
		$output[ 'HMAXPEOPLE_ROOM' ]   = jr_gettext( 'JOMRES_MAXPEOPLEINROOM', 'JOMRES_MAXPEOPLEINROOM', false );
		$output[ 'HMAXPEOPLE_TARIFF' ] = jr_gettext( 'JOMRES_MAXPEOPLEINBOOKING', 'JOMRES_MAXPEOPLEINBOOKING', false );

		if ( $mrConfig[ 'singleRoomProperty' ] == '0' ) ///////////////////////////////////////////////////////////// MRPs
			{
			// Now we can start to create our rows
			$rows = array ();
			foreach ( $roomsClassList as $roomType ) // First we need to gather some information about tariffs & rooms
				{
				if ( $roomType->srp_only != 1 )
					{
					$roomtype_id = $roomType->room_classes_uid;
					$r           = array ();
					$roomtype_abbr = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV' . (int) $roomType->room_classes_uid, stripslashes( $roomType->room_class_abbv ), false, false );
					
					/* For dev purposes
					if ( is_null ( $roomTypesArray[ $roomtype_id ][ 'counter' ]) )
						{
						$roomTypesArray[ $roomtype_id ][ 'counter' ] = 2;
						$allTariffsForRoomType[ $roomType->room_classes_uid ][ 'roomrateperday' ] = 50;
						$roomTypesArray[ $roomType->room_classes_uid ][ 'max_people' ] = 2;
						$allTariffsForRoomType[ $roomtype_id ][ 'maxpeople' ] = 4;
						} */
						
					$r[ 'ROOM_CLASS_ABBV' ]    = $roomtype_abbr;
					$r[ 'ROOMNUMBERDROPDOWN' ] = jomresHTML::integerSelectList( 00, 300, 1, "numberofRooms[$roomtype_id]", 'class="input-mini"', $roomTypesArray[ $roomtype_id ][ 'counter' ], "%02d" );
					$r[ 'ROOMRATEPERDAY' ]     = '<input class="input-mini" type="number" name="roomrateperday[' . $roomtype_id . ']" value="' . $allTariffsForRoomType[ $roomType->room_classes_uid ][ 'roomrateperday' ] . '" />';
					$r[ 'MAX_PEOPLE_ROOM' ]    = jomresHTML::integerSelectList( 00, 100, 1, "max_people[$roomtype_id]", 'class="input-mini"', $roomTypesArray[ $roomType->room_classes_uid ][ 'max_people' ], "%02d" );
					$r[ 'MAX_PEOPLE_TARIFF' ]  = jomresHTML::integerSelectList( 01, 100, 1, "maxpeople_tariff[$roomtype_id]", 'class="input-mini"', $allTariffsForRoomType[ $roomtype_id ][ 'maxpeople' ], "%02d" );
					$existingrooms             = "";
					$counter                   = 1;
					$numberOfExistingRooms     = count( $roomTypesArray[ $roomType->room_classes_uid ][ 'existingrooms' ] );

					foreach ( $roomTypesArray[ $roomType->room_classes_uid ][ 'existingrooms' ] as $id )
						{
						$existingrooms .= $id;
						if ( $counter < $numberOfExistingRooms ) $existingrooms .= ",";
						$counter++;
						}
					$r[ 'existingrooms' ] = '<input type="hidden" name="existingrooms[' . $roomtype_id . ']" value="' . $existingrooms . '" />';
					$rows[ ]              = $r;
					}
				}

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_normalmode_roomtariffs.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
			}
		else //////////////////////////////////////////////////////////////////////////////// SRPs
			{

			foreach ( $roomTypesArray as $key => $val )
				{
				$type_id = $key;
				}

			if ( $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == "1" ) $output[ 'RATETEXT' ] = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', false );
			else
			$output[ 'RATETEXT' ] = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false );
			$output[ 'ROOMRATEPERDAY' ] = '<input class="input-mini" type="number" name="roomrateperday" value="' . $allTariffsForRoomType[ $type_id ][ 'roomrateperday' ] . '" />';
			$output[ 'MAX_PEOPLE' ]     = '<input class="input-mini" type="text" name="max_people" value="' . $roomTypesArray[ $type_id ][ 'max_people' ] . '" />';
			$rows                       = array ();
			foreach ( $roomsClassList as $roomType ) // First we need to gather some information about tariffs & rooms
				{
				$r           = array ();
				$roomtype_id = $roomType->room_classes_uid;
				$selected    = "";
				if ( $type_id == (int) $roomtype_id ) $selected = 'checked="checked"';
				
				$roomtype_abbr = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV' . (int) $roomType->room_classes_uid, stripslashes( $roomType->room_class_abbv ), false, false );
				
				$r[ 'ROOM_CLASS_ABBV' ]  = $roomtype_abbr;
				$r[ 'ROOM_CLASS_RADIO' ] = '<input type="radio" name="roomtype" id="' . $roomtype_id . '" value="' . $roomtype_id . '" ' . $selected . '>' . $r[ 'ROOM_CLASS_ABBV' ] . "</label>";
				$rows[ ]                 = $r;
				}

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_normalmode_roomtariffs_srp.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
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