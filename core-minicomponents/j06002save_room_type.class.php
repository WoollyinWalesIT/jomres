<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.15.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002save_room_type
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if ( $jrConfig[ 'frontend_room_type_editing_allowed' ] == 0 ) {
			return;
		}
		
		$property_uid = getDefaultProperty();
		
		$room_classes_uid = intval(jomresGetParam($_REQUEST, 'room_classes_uid', 0));

		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();
		

		$feedback_message = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', false);
		
		if ($room_classes_uid > 0 ) {
			$jomres_room_types->validate_manager_access_to_room_type($room_classes_uid);
			$feedback_message = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', false);
		}
		
		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data($property_uid);

		$jomres_room_types->room_type['room_classes_uid'] = (int)$room_classes_uid;
		$jomres_room_types->room_type['property_uid'] = (int) $property_uid;
		$jomres_room_types->room_type['room_class_abbv'] = jomresGetParam($_POST, 'room_class_abbv', '');
		$jomres_room_types->room_type['room_class_full_desc'] = jomresGetParam($_POST, 'room_class_desc', '');
		$jomres_room_types->room_type['ptype_xref'] = array ( "0" => $basic_property_details->multi_query_result[$property_uid]['ptype_id']) ;
		$jomres_room_types->room_type['image'] = jomresGetParam($_POST, 'image', '');

		$jomres_room_types->save_room_type();

		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_room_types'), $feedback_message );
		
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
