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
 * Mini-component core file: Deletes a room type (Global room types off - else managed in backend)
 #
* @package Jomres
#
 */
class j04060deleteroomtype {
	/**
	#
	 * Deletes a room type (Global room types off - else managed in backend)
	#
	 */
	function j04060deleteroomtype($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomClassUid		 = intval(jomresGetParam( $_REQUEST, 'roomClassUid', 0 ) );
		$defaultProperty=getDefaultProperty();
		$saveMessage=jr_gettext('_JOMRES_COM_MR_ROOMCLASS_DELETED',_JOMRES_COM_MR_ROOMCLASS_DELETED,FALSE);
		// First we need to check that the room type isn't recorded against any rooms or tariffs. If it is, we can't move forward
		$safeToDelete=TRUE;
		$query="SELECT room_classes_uid FROM #__jomres_rooms WHERE room_classes_uid = '".(int)$roomClassUid."' AND propertys_uid = '".(int)$defaultProperty."' LIMIT 1";
		$propertyFeaturesList =doSelectSql($query);
		if (count($propertyFeaturesList))
			{
			$safeToDelete=FALSE;
			trigger_error (_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS, E_USER_ERROR);
			echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS',_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS,FALSE)."'); ; </script>\n";
			}
		$query="SELECT roomclass_uid FROM #__jomres_rates WHERE roomclass_uid = '".(int)$roomClassUid."' AND property_uid = '".(int)$defaultProperty."' LIMIT 1";
		$propertyFeaturesList =doSelectSql($query);
		if (count($propertyFeaturesList))
			{
			$safeToDelete=FALSE;
			trigger_error (_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS, E_USER_ERROR);
			echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS',_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS,FALSE)."'); ; </script>\n";
			}
	 	if ($safeToDelete)
	 		{
			$query="DELETE FROM #__jomres_room_classes  WHERE room_classes_uid = '".(int)$roomClassUid."' AND property_uid = '".(int)$defaultProperty."'";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE',_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE,FALSE)))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to delete from room classes table, mysql db failure", E_USER_ERROR);
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