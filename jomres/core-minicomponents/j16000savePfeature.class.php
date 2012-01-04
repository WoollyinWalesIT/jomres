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

class j16000savePfeature
	{
	function j16000savePfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$propertyFeatureUid			= jomresGetParam( $_POST, 'propertyFeatureUid', 0 );
		$hotel_feature_abbv			= jomresGetParam( $_POST, 'feature_abbv', "" );
		$hotel_feature_full_desc	= jomresGetParam( $_POST, 'feature_description', "" );
		$propertyType				= jomresGetParam( $_POST, 'propertyType', 0 );
		
		$image						= jomresGetParam( $_POST, 'image', "" );
		if (empty($propertyFeatureUid) )
			{
			$query="INSERT INTO #__jomres_hotel_features (`hotel_feature_abbv`,`hotel_feature_full_desc`,`image`,`property_uid`,`ptype_id` )VALUES ('$hotel_feature_abbv','$hotel_feature_full_desc','$image','0',".(int)$propertyType.")";
			if (doInsertSql($query,''))
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listPfeatures",_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT);
			}
		else
			{
			$query="UPDATE #__jomres_hotel_features SET `image`='$image',`hotel_feature_abbv`='$hotel_feature_abbv',`hotel_feature_full_desc`='$hotel_feature_full_desc',`ptype_id`=".(int)$propertyType." WHERE hotel_features_uid='".(int)$propertyFeatureUid."' AND property_uid = '0'";
			if (doInsertSql($query,''))
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listPfeatures",_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE);
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}