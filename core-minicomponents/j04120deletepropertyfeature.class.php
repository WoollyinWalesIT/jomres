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
 * Delete a property feature (global property features off - else managed in backend)
 #
* @package Jomres
#
 */
class j04120deletepropertyfeature {
	/**
	#
	 * Delete a property feature (global property features off - else managed in backend)
	#
	 */
	function j04120deletepropertyfeature($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$propertyFeatureUid = intval(jomresGetParam( $_REQUEST, 'propertyFeatureUid', 0 ) );
		$defaultProperty=getDefaultProperty();
		$saveMessage=jr_gettext('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED',_JOMRES_COM_MR_PROPERTYFEATURE_DELETED,FALSE);
		// First we need to check that the feature isn't recorded against any propertys. If it is, we can't move forward
		$query="SELECT property_features FROM #__jomres_propertys WHERE propertys_uid = '".(int)$defaultProperty."'";
		$propertyFeaturesList =doSelectSql($query);
		$safeToDelete=TRUE;
		foreach($propertyFeaturesList as $feature)
			{
			$featuresArray=explode(",",($feature->property_features));
			if (in_array($propertyFeatureUid,$featuresArray ))
				$safeToDelete=FALSE;
			}
	 	if (!$safeToDelete)
			{
			trigger_error (_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE, E_USER_ERROR);
	 		echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE',_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE,FALSE)."'); ; </script>\n";
			}
	 	else
	 		{
			$query="DELETE FROM #__jomres_hotel_features  WHERE hotel_features_uid='".(int)$propertyFeatureUid."' AND property_uid='".(int)$defaultProperty."'";
			if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE',_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE,FALSE)))
				returnToPropertyConfig($saveMessage);
			trigger_error ("Unable to delete from hotel features table, mysql db failure", E_USER_ERROR);
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