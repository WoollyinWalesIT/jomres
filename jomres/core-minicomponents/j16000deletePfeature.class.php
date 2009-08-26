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

class j16000deletePfeature
	{
	function j16000deletePfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
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