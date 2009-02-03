<?php
/**
#
 * Mini-component core file: Save a room feature
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 *  Save a room feature
 #
* @package Jomres
#
 */
class j04080saveroomfeature {
	/**
	#
	 *  Save a room feature
	#
	 */
	function j04080saveroomfeature($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomFeatureUid	= intval( jomresGetParam( $_POST, 'roomFeatureUid', 0 ) );
		$feature_description = getEscaped(  jomresGetParam( $_POST, 'feature_description', '' ) );
		$defaultProperty=getDefaultProperty();
		if ($roomFeatureUid==0)
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT',_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT,FALSE);
			$query="INSERT INTO #__jomres_room_features (`feature_description`,`property_uid` )VALUES ('$feature_description','".(int)$defaultProperty."')";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE',_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE,FALSE)))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to insert into room features table, mysql db failure", E_USER_ERROR);
			}
		else
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE',_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE,FALSE);
			$query="UPDATE #__jomres_room_features SET `feature_description`='$feature_description' WHERE room_features_uid='".(int)$roomFeatureUid."' AND property_uid='".(int)$defaultProperty."'";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE',_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE,FALSE)))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to update room features table, mysql db failure", E_USER_ERROR);
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