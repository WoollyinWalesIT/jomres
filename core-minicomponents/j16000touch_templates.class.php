<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000touch_templates
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		if (!translation_user_check()) {
			return;
		}
		echo '<h2>'.jr_gettext('_JOMRES_TOUCHTEMPLATES', '_JOMRES_TOUCHTEMPLATES', false).' - '.get_showtime('lang').'</h2><br/>';

		$basic_subscription_package_details = jomres_singleton_abstract::getInstance('basic_subscription_package_details');

		if (!empty($basic_subscription_package_details->allPackages)) {
			echo jr_gettext('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE' , false ).'<br/>';

			foreach ($basic_subscription_package_details->allPackages as $package) {
				$pack_name = jr_gettext('_JOMRES_CUSTOMTEXT_SUBSCRIPTIONPACKAGES_NAME'.$package[ 'id' ], stripslashes($package[ 'name' ]));
				$pack_desc = jr_gettext('_JOMRES_CUSTOMTEXT_SUBSCRIPTIONPACKAGES_DESC'.$package[ 'id' ], stripslashes($package[ 'description' ]));
				echo $pack_name;
				echo '&nbsp;';
				echo $pack_desc;
				echo '<br/>';
			}
		}

		echo '<hr/>';
		$query = "SELECT room_classes_uid,room_class_abbv FROM #__jomres_room_classes WHERE property_uid = '0' ";
		$roomtypes = doSelectSql($query);
        echo jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES' , false ).'<br/>';

        foreach ($roomtypes as $rType) {
			$roomtype_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rType->room_classes_uid, stripslashes($rType->room_class_abbv));
			//$roomtype_desc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rType->room_classes_uid,		stripslashes($rType->room_class_full_desc) );
			//echo '<img src="'.get_showtime('live_site').'/'.$rType->image.'" />'; // Do not re-enable this line, if you do then Jomres will not 'hold' the current language because for some reason showtime triggers the creation of a phantom session file in the root directory.
			echo '&nbsp;';
			echo $roomtype_abbv;
			//echo "&nbsp;";
			//echo $roomtype_desc;
			echo '<br/>';
		}
		echo '<hr/>';
		$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList = doSelectSql($query);
        echo jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK' , false ).'<br/>';

        foreach ($propertyFeaturesList as $propertyFeature) {
			$feature_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.$propertyFeature->hotel_features_uid, stripslashes($propertyFeature->hotel_feature_abbv));
			$feature_desc = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.$propertyFeature->hotel_features_uid, stripslashes($propertyFeature->hotel_feature_full_desc));

			//echo '<img src="'.get_showtime('live_site').'/'.$propertyFeature->image.'" />';  // Do not re-enable this line, if you do then Jomres will not 'hold' the current language because for some reason showtime triggers the creation of a phantom session file in the root directory.
			echo '&nbsp;';
			echo $feature_abbv;
			echo '&nbsp;';
			echo $feature_desc;
			echo '<br/>';
		}
		echo '<hr/>';

		//property features categories
		$query = 'SELECT `id`,`title` FROM #__jomres_hotel_features_categories ORDER BY title ';
		$result = doSelectSql($query);
		if (!empty($result)) {

 			echo jr_gettext('_JOMRES_PROPERTYFEATURES_HCATEGORIES', '_JOMRES_PROPERTYFEATURES_HCATEGORIES' , false ).'<br/>';
			foreach ($result as $r) {
				echo jr_gettext('_JOMRES_PROPERTY_FEATURES_CATEGORY'.(int) $r->id, stripslashes($r->title));
				echo '<br/>';
			}
		}
		echo '<hr/>';

        $jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
        $jomres_property_types->get_all_property_types();

        if (!empty($jomres_property_types->property_types)) {
            echo jr_gettext('_JOMRES_COM_PTYPES_LIST_TITLE', '_JOMRES_COM_PTYPES_LIST_TITLE' , false ).'<br/>';
            foreach ($jomres_property_types->property_types as $pt) {
               // $this->all_property_types[ $pt['id'] ] = $pt['ptype_desc'];
               // $this->all_property_type_titles[ $pt['id'] ] = $pt['ptype'];


               // foreach ($result as $r) {
                    echo jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPE'.(int) $pt['id'], stripslashes($pt['ptype']));
                    echo '<br/>';
              //  }

            }
        }


		//property categories
		$query = 'SELECT `id`,`title` FROM #__jomres_property_categories ORDER BY title ';
		$result = doSelectSql($query);
		if (!empty($result)) {
			echo jr_gettext('_JOMRES_PROPERTY_HCATEGORIES', '_JOMRES_PROPERTY_HCATEGORIES').'<br/>';
			foreach ($result as $r) {
				echo jr_gettext('_JOMRES_PROPERTY_CATEGORY'.(int) $r->id, stripslashes($r->title));
				echo '<br/>';
			}
		}
		echo '<hr/>';


		if ( isset($MiniComponents->registeredClasses["00005"]["custom_property_fields"])) {
			jr_import('jomres_custom_property_field_handler');

			if (class_exists('jomres_custom_property_field_handler')) {
				$custom_fields = new jomres_custom_property_field_handler();
				$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
				$jomres_property_types->get_all_property_types();
				echo jr_gettext('_JOMRES_CUSTOM_PROPERTY_FIELDS_TITLE', '_JOMRES_CUSTOM_PROPERTY_FIELDS_TITLE' , false ).'<br/>';
				$shown_fields = array();
				foreach ($jomres_property_types->property_types as $p) {
					$fields = $custom_fields->getAllCustomFields($p->id);
					if (!is_null($fields) && !empty($fields) ) {
						foreach ($fields as $t) {
							if (!in_array( $t['uid'],$shown_fields)){
								echo jr_gettext("CUSTOM_PROPERTY_FIELD_TITLE_".$t['fieldname'], $t['description'] );
								$shown_fields[] = $t['uid'];
							}
						}
					}
				}

			}
		}

		//$MiniComponents->touch_templates();
	}


	public function getRetVals()
	{
		return null;
	}
}
