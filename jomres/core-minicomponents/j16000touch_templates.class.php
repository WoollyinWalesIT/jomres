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

class j16000touch_templates
	{
	function j16000touch_templates()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		echo "<br/>Current lang ".get_showtime('lang')."<br/>";
		
		$thisJRUser=$MiniComponents->triggerEvent('00002'); // Register user
		echo "<hr>";
		$query="SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE property_uid = 0";
		$roomtypes= doSelectSql($query);
		foreach($roomtypes as $rType)
			{
			$roomtype_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rType->room_classes_uid,		stripslashes($rType->room_class_abbv) );
			$roomtype_desc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rType->room_classes_uid,		stripslashes($rType->room_class_full_desc) );
			echo '<img src="'.get_showtime('live_site').'/'.$rType->image.'" />';
			echo "&nbsp;";
			echo $roomtype_abbv;
			echo "&nbsp;";
			echo $roomtype_desc;
			echo "<br/>";
			}
		echo "<hr>";
		$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList= doSelectSql($query);
		foreach($propertyFeaturesList as $propertyFeature)
			{
			$feature_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.$propertyFeature->hotel_features_uid,stripslashes($propertyFeature->hotel_feature_abbv) );
			$feature_desc = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.$propertyFeature->hotel_features_uid,stripslashes($propertyFeature->hotel_feature_full_desc) );
			
			echo '<img src="'.get_showtime('live_site').'/'.$propertyFeature->image.'" />';
			echo "&nbsp;";
			echo $feature_abbv;
			echo "&nbsp;";
			echo $feature_desc;
			echo "<br/>";
			}
		echo "<hr>";
		$MiniComponents->touch_templates();

		}



	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}