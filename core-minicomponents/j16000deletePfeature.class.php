<?php
/**
#
 * Mini-component core file:
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

class j16000deletePfeature
	{
	function j16000deletePfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$idarray = jomresGetParam( $_POST, 'idarray', array() );
		if (count($idarray)>0)
			{
			$allDeleted=true;
			foreach ($idarray as $id)
				{
				$propertyFeatureUid=$id;
				$saveMessage=_JOMRES_COM_MR_PROPERTYFEATURE_DELETED;
				// First we need to check that the feature isn't recorded against any propertys. If it is, we can't move forward
				$query="SELECT property_features FROM #__jomres_propertys";
				$propertyFeaturesList =doSelectSql($query);
				$safeToDelete=TRUE;
				foreach($propertyFeaturesList as $feature)
					{
					$featuresArray=explode(",",($feature->property_features));
					if (in_array($propertyFeatureUid,$featuresArray ))
						{
						$safeToDelete=FALSE;
						$allDeleted=false;
						}
					}
			 	if (!$safeToDelete)
					{
			 		echo jr_gettext('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE',_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE,FALSE).$propertyFeatureUid.": <br>";
					}
			 	else
			 		{
					$query="DELETE FROM #__jomres_hotel_features  WHERE hotel_features_uid='".(int)$propertyFeatureUid."'";
					doInsertSql($query,'');
					}
				}
			}
		if ($allDeleted)
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."task=listPfeatures",$saveMessage);
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}