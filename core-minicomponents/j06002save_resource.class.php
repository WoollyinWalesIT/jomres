<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
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

		if ($mrConfig[ 'compatability_property_configuration' ] == 1 ) {

			jr_import('jomres_calculate_accommodates_value');
			$jomres_calculate_accommodates_value = new jomres_calculate_accommodates_value( $defaultProperty );
			$jomres_calculate_accommodates_value->calculate_accommodates_value();

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
