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