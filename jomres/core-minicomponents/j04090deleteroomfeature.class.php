<?php
/**
#
 * Mini-component core file: Delete a room feature
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomFeatureUid		= intval( jomresGetParam( $_REQUEST, 'roomFeatureUid', '' ) );
		$defaultProperty=getDefaultProperty();
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
			trigger_error (_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE, E_USER_ERROR);
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