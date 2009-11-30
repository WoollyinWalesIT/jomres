<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


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