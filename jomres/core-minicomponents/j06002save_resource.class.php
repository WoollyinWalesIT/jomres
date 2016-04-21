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

class j06002save_resource
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$mrConfig = getPropertySpecificSettings();
		$defaultProperty = getDefaultProperty();

		if ( $mrConfig[ 'singleRoomProperty' ] == "0" )
			{
			$roomUid                 = intval( jomresGetParam( $_POST, 'roomUid', 0 ) );
			$roomClasses             = intval( jomresGetParam( $_POST, 'roomClasses', 0 ) );
			$max_people              = intval( jomresGetParam( $_POST, 'max_people', 0 ) );
			$room_name               = getEscaped( jomresGetParam( $_POST, 'room_name', "" ) );
			$room_number             = getEscaped( jomresGetParam( $_POST, 'room_number', "" ) );
			$room_floor              = getEscaped( jomresGetParam( $_POST, 'room_floor', "" ) );
			$singleperson_suppliment = (float) jomresGetParam( $_POST, 'singleperson_suppliment', 0.0 );

			if ( isset( $_POST[ 'features_list' ] ) )
				{
				$features_list = jomresGetParam( $_POST, 'features_list', array () );
				$featuresList  = implode( ",", $features_list );
				}

			if ( $roomUid == 0 )
				{
				$saveMessage      = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', false );
				$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
				$jomres_messaging->set_message( $saveMessage );
				$query = "INSERT INTO #__jomres_rooms (`room_classes_uid`,`propertys_uid`,`room_features_uid`,`room_name`,`room_number`,`room_floor`,`max_people`,`singleperson_suppliment`)VALUES ('" . (int) $roomClasses . "'," . (int) $defaultProperty . ",'$featuresList','$room_name','$room_number','$room_floor','" . (int) $max_people . "','" . $singleperson_suppliment . "')";
				if ( doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_INSERT_ROOM', '_JOMRES_MR_AUDIT_INSERT_ROOM', false ) ) )
					jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_resources" ), "" );
				trigger_error( "Sql error when saving new room", E_USER_ERROR );
				}
			else
				{
				//$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE',_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE,FALSE);
				$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
				$jomres_messaging->set_message( $saveMessage );
				$query = "UPDATE #__jomres_rooms SET `room_classes_uid`='$roomClasses',`room_features_uid`='$featuresList',`room_name`='$room_name',`room_number`='$room_number',`room_floor`='$room_floor',`max_people`='" . (int) $max_people . "',`singleperson_suppliment`='" . (float) $singleperson_suppliment . "' WHERE room_uid='" . (int) $roomUid . "' AND propertys_uid='" . (int) $defaultProperty . "'";
				if ( doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_UPDATE_ROOM', '_JOMRES_MR_AUDIT_UPDATE_ROOM', false ) ) ) 
					jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_resources" ), "" );
				trigger_error( "Sql error when updating room", E_USER_ERROR );
				}
			}
		else
			{
			$roomClass  = jomresGetParam( $_POST, 'roomClass', 0 );
			$max_people = intval( jomresGetParam( $_POST, 'max_people', 0 ) );
			if ( $roomClass > 0 )
				{
				$query    = "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $defaultProperty . "'";
				$room_uid = doSelectSql( $query, 1 );
				$query    = "UPDATE #__jomres_rooms SET `room_classes_uid`='$roomClass',`max_people`=" . $max_people . " WHERE room_uid='" . (int) $room_uid . "' AND propertys_uid='" . (int) $defaultProperty . "'";
				if ( !doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_UPDATE_ROOM', '_JOMRES_MR_AUDIT_UPDATE_ROOM', false ) ) ) trigger_error( "Sql error when updating room", E_USER_ERROR );

				$query = "UPDATE #__jomres_rates SET `roomclass_uid`='$roomClass' WHERE `property_uid`=" . (int) $defaultProperty;
				if ( !doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', '_JOMRES_MR_AUDIT_UPDATE_TARIFF', false ) ) ) trigger_error( "Sql error when updating room", E_USER_ERROR );

				$query = "UPDATE #__jomcomp_tarifftype_rate_xref SET `roomclass_uid`='$roomClass' WHERE `property_uid`=" . (int) $defaultProperty;
				if ( !doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', '_JOMRES_MR_AUDIT_UPDATE_TARIFF', false ) ) ) trigger_error( "Sql error when updating tariff type xref table", E_USER_ERROR );

				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_resources" ), "" );

				}
			else
				trigger_error( "Room class uid not set", E_USER_ERROR );
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