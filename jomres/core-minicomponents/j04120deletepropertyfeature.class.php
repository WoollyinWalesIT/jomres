<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


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