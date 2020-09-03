<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.2
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06005save_new_property
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if ( !$jomres_gdpr_optin_consent->user_consents_to_storage() ) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=opted_out&jr_redirect_url='.getCurrentUrl()), '');
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if ($jrConfig['selfRegistrationAllowed'] == '0' && !$thisJRUser->superPropertyManager) {
			return;
		}

		$property_name = trim(jomresGetParam($_POST, 'property_name', ''));
		if ($property_name == '') {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=new_property'), '');

			return;
		}

		$max_occupancy = (int)jomresGetParam($_POST, 'max_occupancy', 0);

		//jomres properties object
		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');

		$jomres_properties->property_name = $property_name;

		if ($jrConfig['limit_property_country'] == '0') {
			$jomres_properties->property_country = jomresGetParam($_POST, 'new_property_country', '');
		} else {
			$jomres_properties->property_country = $jrConfig['limit_property_country_country'];
		}

		$jomres_properties->property_region = jomresGetParam($_POST, 'region', '');
		$jomres_properties->property_email = jomresGetParam($_POST, 'property_email', '');
		$jomres_properties->property_site_id = jomresGetParam($_POST, 'property_site_id', '');
		$jomres_properties->ptype_id = (int) jomresGetParam($_POST, 'propertyType', 0);
		$jomres_properties->property_key = str_replace(',', '', jomresGetParam($_POST, 'price', ''));
		$jomres_properties->max_occupancy = $max_occupancy;

		//insert new property
		$jomres_properties->commit_new_property();

		$jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messaging->set_message(jr_gettext('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', false));

		//04901 trigger point (assign a default commission rate to the new property, new property welcome email, etc)
		$componentArgs = array('property_uid' => $jomres_properties->propertys_uid);
		$MiniComponents->triggerEvent('04901', $componentArgs);

		//send admin email if the new property requires approval. TODO: move to 04901 trigger point too
		if ($jomres_properties->approved == 0) {
			$link = JOMRES_SITEPAGE_URL_ADMIN.'&task=property_approvals';
			$subject = jr_gettext('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', '_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', false);
			$message = jr_gettext('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', '_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', false).$link;
			sendAdminEmail($subject, $message);
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&thisProperty='.$jomres_properties->propertys_uid), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
