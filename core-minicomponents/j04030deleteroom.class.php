<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomUid         = intval( jomresGetParam( $_REQUEST, 'roomUid', 0 ) );
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		$saveMessage=jr_gettext('_JOMRES_COM_MR_ROOM_DELETED',_JOMRES_COM_MR_ROOM_DELETED,FALSE);
		// First we need to check that the room isn't booked, if it is, we can't move forward
		$query="SELECT room_bookings_uid FROM #__jomres_room_bookings WHERE room_uid = '".(int)$roomUid."' AND property_uid = '".(int)$defaultProperty."' LIMIT 1";
		$roomList =doSelectSql($query);
		if (count($roomList)>0)
			{
			//echo "<script> alert('". jr_gettext('_JOMRES_COM_MR_ROOM_UNABLETODELETE',_JOMRES_COM_MR_ROOM_UNABLETODELETE,FALSE)."'); ; </script>\n";
			//trigger_error (_JOMRES_COM_MR_ROOM_UNABLETODELETE, E_USER_ERROR);
			echo _JOMRES_COM_MR_ROOM_UNABLETODELETE;
			}
		else
			{
			$query="SELECT property_uid FROM #__jomres_room_images WHERE roomid = '".(int)$roomUid."' AND property_uid = '".(int)$defaultProperty."'";
			$resultList =doSelectSql($query);
			if (count($resultList)>0)
			dropImage($defaultProperty,"room",$roomUid);
			$query="DELETE FROM #__jomres_rooms WHERE room_uid = '".(int)$roomUid."' AND propertys_uid = '".(int)$defaultProperty."'";
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