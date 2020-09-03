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

class j06005new_property
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
			$this->shortcode_data = array(
				'task' => 'new_property',
				'info' => '_JOMRES_SHORTCODES_06005NEW_PROPERTY',
				'arguments' => array()
				);
			return;
		}
		jomres_cmsspecific_setmetadata('title', jomres_purify_html( jr_gettext('_JOMRES_USER_LISTMYPROPERTY', '_JOMRES_USER_LISTMYPROPERTY', false) ));
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if ( !$jomres_gdpr_optin_consent->user_consents_to_storage()&& !isset($_REQUEST['skip_consent_form'])  ) {
			echo $consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form' , array ('output_now' => false) );
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');

		if ($jrConfig['selfRegistrationAllowed'] == '0' && !$thisJRUser->superPropertyManager) {
			return;
		}
		
		// You can, by all means, remove this section of code but it's only here to ensure you don't lock yourself out of your own system accidentally
		if (function_exists("get_number_of_allowed_properties") ) {
			if (get_showtime('numberOfPropertiesInSystem') >= get_number_of_allowed_properties() ) {
				echo '<p class="alert alert-danger">Error, your license does not allow you to add more properties</p>';
				return;
			}
		}

			
		//get selected country
		$selectedCountry = jomresGetParam($_REQUEST, 'new_property_country', '');
		if ($selectedCountry == '') {
			$selectedCountry = $jrConfig['limit_property_country_country'];
		}

		$output = array();
		$propertyRegion = '';

		//setup countries and regions dropdowns
		if ($jrConfig['limit_property_country'] == '0') {
			$output['REGIONDROPDOWN'] = setupRegions($selectedCountry, $propertyRegion);
			$output['COUNTRIESDROPDOWN'] = createCountriesDropdown($selectedCountry, 'new_property_country', false);
		} else {
			$output['REGIONDROPDOWN'] = setupRegions($jrConfig['limit_property_country_country'], $propertyRegion);
			$output['COUNTRIESDROPDOWN'] = getSimpleCountry($jrConfig['limit_property_country_country']);
		}

		$output['PAGETITLE'] = jr_gettext('_JOMRES_COM_MR_NEWPROPERTY', '_JOMRES_COM_MR_NEWPROPERTY', false);
		$output['HCOUNTRY'] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
		$output['HREGION'] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
		$output['HNAME'] = jr_gettext('_JRPORTAL_PROPERTIES_PROPERTYNAME', '_JRPORTAL_PROPERTIES_PROPERTYNAME', false);
		$output['HEMAIL'] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', false);
		$output['_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED'] = jr_gettext('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', '_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', false);

		$output['JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE'] = jr_gettext('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', 'JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', false);
		$output['JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1'] = jr_gettext('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', false);
		$output['JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2'] = jr_gettext('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', 'JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', false);

		$output['DROPDOWN_MAX_OCCUPANCY'] = jomresHTML::integerSelectList(1, 1000, 1, 'max_occupancy', 'class="inputbox" size="1"', 6 );
		$output['JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY'] = jr_gettext('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', false);

		$output['HPROPERTY_TYPE'] = jr_gettext('_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false);
		$output['PROPERTY_TYPE_DROPDOWN'] = $jomres_property_types->getPropertyTypeDropdown('', true);

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('new_property.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
