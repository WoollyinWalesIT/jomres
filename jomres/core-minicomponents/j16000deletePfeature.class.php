<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000deletePfeature
	{
	function j16000deletePfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
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
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listPfeatures",$saveMessage);
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}