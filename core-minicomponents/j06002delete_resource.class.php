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

class j06002delete_resource
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
		$roomUid         = intval( jomresGetParam( $_REQUEST, 'roomUid', 0 ) );
		$defaultProperty = getDefaultProperty();
		$saveMessage = jr_gettext( '_JOMRES_COM_MR_ROOM_DELETED', '_JOMRES_COM_MR_ROOM_DELETED', false );
		// First we need to check that the room isn't booked, if it is, we can't move forward
		$query    = "SELECT room_bookings_uid FROM #__jomres_room_bookings WHERE room_uid = '" . (int) $roomUid . "' AND property_uid = '" . (int) $defaultProperty . "' AND `date` > now()";
		$roomList = doSelectSql( $query );
		if ( count( $roomList ) > 0 )
			{
			echo jr_gettext( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', '_JOMRES_COM_MR_ROOM_UNABLETODELETE', false );
			}
		else
			{
			$query      = "SELECT property_uid FROM #__jomres_room_images WHERE roomid = '" . (int) $roomUid . "' AND property_uid = '" . (int) $defaultProperty . "'";
			$resultList = doSelectSql( $query );
			if ( count( $resultList ) > 0 ) 
				dropImage( $defaultProperty, "room", $roomUid );
			$query = "DELETE FROM #__jomres_rooms WHERE room_uid = '" . (int) $roomUid . "' AND propertys_uid = '" . (int) $defaultProperty . "'";
			if ( doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_DELETE_ROOM', '_JOMRES_MR_AUDIT_DELETE_ROOM', false ) ) ) 
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_resources" ), "" );
			trigger_error( "Sql error when deleting room", E_USER_ERROR );
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