<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Delete a room feature
 #
* @package Jomres
#
 */
class j04090deleteroomfeature {
	/**
	#
	 * Delete a room feature
	#
	 */
	function j04090deleteroomfeature($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomFeatureUid		= intval( jomresGetParam( $_REQUEST, 'roomFeatureUid', '' ) );
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		//Lets delete this room feature
		$saveMessage=jr_gettext('_JOMRES_COM_MR_ROOMFEATURE_DELETED',_JOMRES_COM_MR_ROOMFEATURE_DELETED,FALSE);
		// First we need to check that the feature isn't recorded against any rooms. If it is, we can't move forward
		$query="SELECT room_features_uid,propertys_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."'";
		$roomFeaturesList =doSelectSql($query);
		$safeToDelete=TRUE;
		foreach($roomFeaturesList as $roomFeature)
			{
			$roomFeaturesArray=explode(",",($roomFeature->room_features_uid));
			if (in_array($roomFeatureUid,$roomFeaturesArray ))
				$safeToDelete=FALSE;
			}
		if (!$safeToDelete)
			{
			echo _JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE;
			return;
			}
		else
			{
			$query="DELETE FROM #__jomres_room_features  WHERE room_features_uid='".(int)$roomFeatureUid."' AND property_uid='".(int)$defaultProperty."'";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE',_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE,FALSE)))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to delete from room features table, mysql db failure", E_USER_ERROR);
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