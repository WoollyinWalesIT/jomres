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

class j16000savePfeature
	{
	function j16000savePfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$propertyFeatureUid			= jomresGetParam( $_POST, 'propertyFeatureUid', 0 );
		$hotel_feature_abbv			= jomresGetParam( $_POST, 'feature_abbv', "" );
		$hotel_feature_full_desc	= jomresGetParam( $_POST, 'feature_description', "" );
		$image						= jomresGetParam( $_POST, 'image', "" );
		if (empty($propertyFeatureUid) )
			{
			$query="INSERT INTO #__jomres_hotel_features (`hotel_feature_abbv`,`hotel_feature_full_desc`,`image`,`property_uid` )VALUES ('$hotel_feature_abbv','$hotel_feature_full_desc','$image','0')";
			if (doInsertSql($query,''))
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listPfeatures",_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT);
			}
		else
			{
			$query="UPDATE #__jomres_hotel_features SET `image`='$image',`hotel_feature_abbv`='$hotel_feature_abbv',`hotel_feature_full_desc`='$hotel_feature_full_desc' WHERE hotel_features_uid='".(int)$propertyFeatureUid."' AND property_uid = '0'";
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