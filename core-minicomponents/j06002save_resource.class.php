<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06002save_resource
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$defaultProperty = getDefaultProperty();

		$mrConfig = getPropertySpecificSettings();
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		jr_import('jrportal_rooms');
		$jrportal_rooms = new jrportal_rooms();

		$jrportal_rooms->propertys_uid				= $defaultProperty;
		$jrportal_rooms->room_uid					= (int) jomresGetParam($_POST, 'roomUid', 0);
		$jrportal_rooms->room_classes_uid			= (int) jomresGetParam($_POST, 'roomClasses', 0);
		 $jrportal_rooms->max_people					= (int) jomresGetParam($_POST, 'max_people', 0);
		$jrportal_rooms->max_adults					= (int) jomresGetParam($_POST, 'max_adults', 0);
		$jrportal_rooms->max_children				= (int) jomresGetParam($_POST, 'max_children', 0);

		if ($mrConfig[ 'singleRoomProperty' ] == '1') { // It's an SRP
			$jrportal_rooms->max_adults = (int) jomresGetParam($_POST, 'max_people', 0);
			$jrportal_rooms->max_children				= 0;
		}

		$jrportal_rooms->room_name					= getEscaped(jomresGetParam($_POST, 'room_name', ''));
		$jrportal_rooms->room_number				= getEscaped(jomresGetParam($_POST, 'room_number', ''));
		$jrportal_rooms->room_floor					= getEscaped(jomresGetParam($_POST, 'room_floor', ''));
		$jrportal_rooms->singleperson_suppliment	= (float) jomresGetParam($_POST, 'singleperson_suppliment', 0.0);
		$jrportal_rooms->room_features_uid			= jomresGetParam($_POST, 'features_list', array());
		$jrportal_rooms->tagline					= getEscaped(jomresGetParam($_POST, 'room_tagline', ''));
		$jrportal_rooms->surcharge					= (float) jomresGetParam($_POST, 'surcharge', 0.0);
		
		//html editor fields
		if ($jrConfig[ 'allowHTMLeditor' ] == '0') {
			$jrportal_rooms->description			= $this->convert_greaterthans(jomresGetParam($_POST, 'room_description', ''));
			$jrportal_rooms->description			= strip_tags($jrportal_rooms->description);
		} else {
			$jrportal_rooms->description			= jomresGetParam($_POST, 'room_description', '');
		}

		if ($jrportal_rooms->room_uid > 0) {
			$jrportal_rooms->commit_update_room();
		} else {
			$jrportal_rooms->commit_new_room();
		}

		$the_correct_room_type_id = $jrportal_rooms->room_classes_uid; // This value will be reset when we make a new instance of jrportal_rooms

		if ($mrConfig[ 'singleRoomProperty' ] == '1') {
			$jrportal_rooms = new jrportal_rooms();

			$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
			$basic_room_details->get_all_rooms($defaultProperty);

			jr_import('jomres_occupancy_levels');
			$jomres_occupancy_levels = new jomres_occupancy_levels($defaultProperty);
			foreach ($jomres_occupancy_levels->occupancy_levels as $key => $val) {
				if ($key != $the_correct_room_type_id) {
					unset($jomres_occupancy_levels->occupancy_levels[$key]);
				}
			}

			$jomres_occupancy_levels->set_occupancy_level($the_correct_room_type_id,(int) jomresGetParam($_POST, 'max_people', 0),  0,  (int) jomresGetParam($_POST, 'max_people', 0) );
			$jomres_occupancy_levels->save_occupancy_levels($the_correct_room_type_id);
		}

		jr_import('jomres_calculate_accommodates_value');
		$jomres_calculate_accommodates_value = new jomres_calculate_accommodates_value($defaultProperty);
		$jomres_calculate_accommodates_value->calculate_accommodates_value();

		$webhook_notification						   	= new stdClass();
		$webhook_notification->webhook_event			= 'property_state_change';
		$webhook_notification->webhook_event_description= 'A catchall webhook notification which notes that the property state has changed. Primarily designed for caching features to remove/refresh cache elements';
		$webhook_notification->data					 	= new stdClass();
		$webhook_notification->data->property_uid	   	=  $defaultProperty;
		add_webhook_notification($webhook_notification);

		if ($mrConfig[ 'singleRoomProperty' ] == '1') {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_occupancy_levels'), '');
		} else {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), '');
		}
	}

	public function convert_greaterthans($string)
	{
		$string = str_replace('&#38;gt;', '>', $string);

		return $string;
	}
	

	public function getRetVals()
	{
		return null;
	}
}
