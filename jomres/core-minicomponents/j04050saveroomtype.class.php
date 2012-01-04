<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Mini-component core file: Save the room type - (Global rooms types off - else managed in backend)
 #
* @package Jomres
#
 */
class j04050saveroomtype {
	/**
	#
	 * Save the room type - (Global rooms types off - else managed in backend)
	#
	 */
	function j04050saveroomtype($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomClassUid		 	= intval(jomresGetParam( $_POST, 'roomClassUid', 0 ) );
		$room_class_abbv		= getEscaped( jomresGetParam( $_POST, 'room_class_abbv', "" ) );
		$room_class_full_desc	= getEscaped( jomresGetParam( $_POST, 'room_class_full_desc', "" ) );
		$defaultProperty=getDefaultProperty();
		if ($roomClassUid=="")
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT',_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT,FALSE);
			$query="INSERT INTO #__jomres_room_classes (`room_class_abbv`,`room_class_full_desc`,`property_uid` )VALUES ('$room_class_abbv','$room_class_full_desc','".(int)$defaultProperty."')";
			if (doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to insert into room type table, mysql db failure", E_USER_ERROR);
			}
		else
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE',_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE,FALSE);
			$query="UPDATE #__jomres_room_classes SET `room_class_abbv`='$room_class_abbv',`room_class_full_desc`='$room_class_full_desc' WHERE room_classes_uid='".(int)$roomClassUid."' AND property_uid = '".(int)$defaultProperty."'";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE',_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE,FALSE)))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to update room type table, mysql db failure", E_USER_ERROR);
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