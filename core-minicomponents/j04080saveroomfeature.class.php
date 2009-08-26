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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomFeatureUid	= intval( jomresGetParam( $_POST, 'roomFeatureUid', 0 ) );
		$feature_description = getEscaped(  jomresGetParam( $_POST, 'feature_description', '' ) );
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		if ($roomFeatureUid==0)
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT',_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT,FALSE);
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message($saveMessage);
			$query="INSERT INTO #__jomres_room_features (`feature_description`,`property_uid` )VALUES ('$feature_description','".(int)$defaultProperty."')";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE',_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE,FALSE)))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to insert into room features table, mysql db failure", E_USER_ERROR);
			}
		else
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE',_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE,FALSE);
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message($saveMessage);
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