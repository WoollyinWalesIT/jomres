<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002save_property
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$property_uid = intval(jomresGetParam($_POST, 'property_uid', 0));

		if ($property_uid > 0 && !in_array($property_uid, $thisJRUser->authorisedProperties)) {
			$property_uid = getDefaultProperty();
		}

		if ($jrConfig[ 'selfRegistrationAllowed' ] == '0' && $property_uid == 0) {
			$property_uid = getDefaultProperty();
		}
		
		$published = 0;
		$approved = 0;
		
		//jomres properties object
		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
		
		//get property details
		if ($property_uid > 0) {
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data($property_uid);
			
			$published = $current_property_details->published;
			$approved = $current_property_details->approved;
		}

		$jomres_properties->propertys_uid = $property_uid;
		$jomres_properties->property_name = trim(jomresGetParam($_POST, 'property_name', ''));
		$jomres_properties->property_street = jomresGetParam($_POST, 'property_street', '');
		$jomres_properties->property_town = jomresGetParam($_POST, 'property_town', '');
		$jomres_properties->property_region = jomresGetParam($_POST, 'region', '');
		$jomres_properties->property_postcode = jomresGetParam($_POST, 'property_postcode', '');
		$jomres_properties->property_tel = jomresGetParam($_POST, 'property_tel', '');
		$jomres_properties->property_fax = jomresGetParam($_POST, 'property_fax', '');
		$jomres_properties->property_email = jomresGetParam($_POST, 'property_email', '');
		$jomres_properties->metatitle = jomresGetParam($_POST, 'metatitle', '');
		$jomres_properties->metadescription = jomresGetParam($_POST, 'metadescription', '');
		$jomres_properties->metakeywords = jomresGetParam($_POST, 'metakeywords', '');
		$jomres_properties->price = convert_entered_price_into_safe_float(jomresGetParam($_POST, 'price', ''));
		$jomres_properties->lat = jomresGetParam($_POST, 'lat', '');
		$jomres_properties->long = jomresGetParam($_POST, 'long', '');
		$jomres_properties->property_site_id = jomresGetParam($_POST, 'property_site_id', '');
		$jomres_properties->ptype_id = jomresGetParam($_POST, 'propertyType', 0);
		$jomres_properties->stars = jomresGetParam($_POST, 'stars', 0);
		$jomres_properties->superior = jomresGetParam($_POST, 'superior', 0);
		$jomres_properties->cat_id = jomresGetParam($_POST, 'cat_id', 0);
		$jomres_properties->permit_number = jomresGetParam($_POST, 'permit_number', '');
		$jomres_properties->property_features = jomresGetParam($_POST, 'pid', array());
		$jomres_properties->published = $published;
		$jomres_properties->approved = $approved;

		//property country
		if ($jrConfig[ 'limit_property_country' ] == '0') {
			$jomres_properties->property_country = jomresGetParam($_POST, 'country', '');
		} else {
			$jomres_properties->property_country = $jrConfig[ 'limit_property_country_country' ];
		}

		//html editor fields
		if ($jrConfig[ 'allowHTMLeditor' ] == '0') {
			$property_description = $this->convert_lessgreaterthans(jomresGetParam($_POST, 'property_description', ''));
			$property_checkin_times = $this->convert_lessgreaterthans(jomresGetParam($_POST, 'property_checkin_times', ''));
			$property_area_activities = $this->convert_lessgreaterthans(jomresGetParam($_POST, 'property_area_activities', ''));
			$property_driving_directions = $this->convert_lessgreaterthans(jomresGetParam($_POST, 'property_driving_directions', ''));
			$property_airports = $this->convert_lessgreaterthans(jomresGetParam($_POST, 'property_airports', ''));
			$property_othertransport = $this->convert_lessgreaterthans(jomresGetParam($_POST, 'property_othertransport', ''));
			$property_policies_disclaimers = $this->convert_lessgreaterthans(jomresGetParam($_POST, 'property_policies_disclaimers', ''));

			$jomres_properties->property_description = strip_tags($property_description, '<p><br>');
			$jomres_properties->property_checkin_times = strip_tags($property_checkin_times, '<p><br>');
			$jomres_properties->property_area_activities = strip_tags($property_area_activities, '<p><br>');
			$jomres_properties->property_driving_directions = strip_tags($property_driving_directions, '<p><br>');
			$jomres_properties->property_airports = strip_tags($property_airports, '<p><br>');
			$jomres_properties->property_othertransport = strip_tags($property_othertransport, '<p><br>');
			$jomres_properties->property_policies_disclaimers = strip_tags($property_policies_disclaimers, '<p><br>');
		} else {
			$jomres_properties->property_description = jomresGetParam($_POST, 'property_description', '');
			$jomres_properties->property_checkin_times = jomresGetParam($_POST, 'property_checkin_times', '');
			$jomres_properties->property_area_activities = jomresGetParam($_POST, 'property_area_activities', '');
			$jomres_properties->property_driving_directions = jomresGetParam($_POST, 'property_driving_directions', '');
			$jomres_properties->property_airports = jomresGetParam($_POST, 'property_airports', '');
			$jomres_properties->property_othertransport = jomresGetParam($_POST, 'property_othertransport', '');
			$jomres_properties->property_policies_disclaimers = jomresGetParam($_POST, 'property_policies_disclaimers', '');
		}

		//insert new property
		$jomres_properties->commit_update_property();

		//save message
		$jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messaging->set_message(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', false));

		//send approval email to site admin
		if ((int) $jrConfig['automatically_approve_new_properties'] == 0 && !$thisJRUser->superPropertyManager) {
			$link = JOMRES_SITEPAGE_URL_ADMIN.'&task=property_approvals';
			$subject = jr_gettext('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', '_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', false).' ('.$jomres_properties->property_name.') ';
			$message = jr_gettext('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', '_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', false).$link;
			sendAdminEmail($subject, $message);
		}

		//04902 trigger point (update or delete from jintour properties table)
		$componentArgs = array('property_uid' => $jomres_properties->propertys_uid);
		$MiniComponents->triggerEvent('04902', $componentArgs);

		//redirect back to edit property page
		jomresRedirect(jomresUrl(JOMRES_SITEPAGE_URL.'&task=edit_property'));
	}

	public function encode_lessgreaterthans($string)
	{
		$string = str_replace('<', '&#60;', $string);
		$string = str_replace('>', '&#62;', $string);

		return $string;
	}

	public function convert_lessgreaterthans($string)
	{
		$string = str_replace('&#60;', '<', $string);
		$string = str_replace('&#62;', '>', $string);

		return $string;
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
