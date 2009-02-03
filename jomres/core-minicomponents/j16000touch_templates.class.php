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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

class j16000touch_templates
	{
	function j16000touch_templates()
		{
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $MiniComponents,$thisJRUser,$jomresConfig_live_site,$jomresConfig_lang;
		
		echo "<br/>Current lang ".$jomresConfig_lang."<br/>";
		
		$thisJRUser=$MiniComponents->triggerEvent('00002'); // Register user
		
		$MiniComponents->touch_templates();
		echo "<hr>";
		$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList= doSelectSql($query);
		foreach($propertyFeaturesList as $propertyFeature)
			{
			echo '<img src="'.$jomresConfig_live_site.'/'.$propertyFeature->image.'" />';
			echo "&nbsp;";
			echo jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_CAPTION'.$propertyFeature->image,stripslashes($propertyFeature->hotel_feature_abbv) );
			echo "&nbsp;";
			echo jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_DESCRIPTION'.$propertyFeature->image,stripslashes($propertyFeature->hotel_feature_full_desc) );
			echo "<br/>";
			}
		echo "<hr>";
		$query="SELECT room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE property_uid = 0";
		$roomtypes= doSelectSql($query);
		foreach($roomtypes as $rType)
			{
			echo '<img src="'.$jomresConfig_live_site.'/'.$rType->image.'" />';
			echo "&nbsp;";
			echo jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_CAPTION'.$rType->image,stripslashes($rType->room_class_abbv) );
			echo "&nbsp;";
			echo jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_DESCRIPTION'.$rType->image,stripslashes($rType->room_class_full_desc) );
			echo "<br/>";
			}
		}



	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}