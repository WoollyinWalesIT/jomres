<?php
/**
#
 * Mini-component core file: Deletes a room
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################


/**
#
 * Deletes a room
 #
* @package Jomres
#
 */
class j04030deleteroom {
	/**
	#
	 * Deletes a room
	#
	 */
	function j04030deleteroom($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomUid         = intval( jomresGetParam( $_REQUEST, 'roomUid', 0 ) );
		$defaultProperty=getDefaultProperty();
		$saveMessage=jr_gettext('_JOMRES_COM_MR_ROOM_DELETED',_JOMRES_COM_MR_ROOM_DELETED,FALSE);
		// First we need to check that the room isn't booked, if it is, we can't move forward
		$query="SELECT room_bookings_uid FROM #__jomres_room_bookings WHERE room_uid LIKE '".(int)$roomUid."' AND property_uid LIKE '".(int)$defaultProperty."' LIMIT 1";
		$roomList =doSelectSql($query);
		if (count($roomList)>0)
			{
			//echo "<script> alert('". jr_gettext('_JOMRES_COM_MR_ROOM_UNABLETODELETE',_JOMRES_COM_MR_ROOM_UNABLETODELETE,FALSE)."'); ; </script>\n";
			//trigger_error (_JOMRES_COM_MR_ROOM_UNABLETODELETE, E_USER_ERROR);
			echo _JOMRES_COM_MR_ROOM_UNABLETODELETE;
			}
		else
			{
			$query="SELECT property_uid FROM #__jomres_room_images WHERE roomid LIKE '".(int)$roomUid."' AND property_uid LIKE '".(int)$defaultProperty."'";
			$resultList =doSelectSql($query);
			if (count($resultList)>0)
			dropImage($defaultProperty,"room",$roomUid);
			$query="DELETE FROM #__jomres_rooms WHERE room_uid LIKE '".(int)$roomUid."' AND propertys_uid LIKE '".(int)$defaultProperty."'";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_ROOM',_JOMRES_MR_AUDIT_DELETE_ROOM,FALSE))) returnToPropertyConfig($saveMessage);
			trigger_error ("Sql error when deleting room", E_USER_ERROR);
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