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

class j06001edit_guest
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = true;

			return;
		}
		
		$id = (int)jomresGetParam($_REQUEST, 'id', 0);
		$defaultProperty = getDefaultProperty();

		$vat_validation = array();
		$output = array();
		
		jr_import( 'jrportal_guests' );
		$jrportal_guests = new jrportal_guests();
		$jrportal_guests->id = $id;
		$jrportal_guests->property_uid = $defaultProperty;

		if ($id > 0 && $jrportal_guests->get_guest()) {
			$output[ 'FIRSTNAME' ] = $jrportal_guests->firstname;
			$output[ 'SURNAME' ] = $jrportal_guests->surname;
			$output[ 'HOUSE' ] = $jrportal_guests->house;
			$output[ 'STREET' ] = $jrportal_guests->street;
			$output[ 'TOWN' ] = $jrportal_guests->town;
			$output[ 'REGION' ] = setupRegions($jrportal_guests->country, $jrportal_guests->region);
			$output[ 'COUNTRY' ] = createSimpleCountriesDropdown($jrportal_guests->country);
			$output[ 'POSTCODE' ] = $jrportal_guests->postcode;
			$output[ 'LANDLINE' ] = $jrportal_guests->tel_landline;
			$output[ 'MOBILE' ] = $jrportal_guests->tel_mobile;
			$output[ 'EMAIL' ] = $jrportal_guests->email;
			$output[ 'VAT_NUMBER' ] = $jrportal_guests->vat_number;

			$yesno = array();
			$yesno[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
			$yesno[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
			$output[ 'BLACKLISTED' ] = jomresHTML::selectList($yesno, 'blacklisted', 'class="inputbox" size="1"', 'value', 'text', $jrportal_guests->blacklisted );

			$output[ 'DISCOUNT' ] = jomresHTML::integerSelectList(0, 99, 1, 'discount', 'class="inputbox" size="1"', $jrportal_guests->discount);

			//validation message
			if (trim($jrportal_guests->vat_number_validation_response) != '') {
				$vat_validation[0][ 'VAT_NUMBER_VALIDATION_STATUS'] = $jrportal_guests->vat_number_validation_response;
				if ($jrportal_guests->vat_number_validated) {
					if (using_bootstrap()) {
						$vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-success';
					} else {
						$vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-highlight';
					}
				} else {
					if (using_bootstrap()) {
						$vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-error alert-danger';
					} else {
						$vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-error ';
					}
				}
			}
		} else {
			$id = 0;
			$output[ 'REGION' ] = setupRegions('GB');
			$output[ 'COUNTRY' ] = createSimpleCountriesDropdown('GB');
			$output[ 'DISCOUNT' ] = jomresHTML::integerSelectList(0, 99, 1, 'discount', 'class="inputbox" size="1"', 0);
		}

		$output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME');
		$output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
		$output[ 'HHOUSE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE');
		$output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET');
		$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');
		$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
		$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
		$output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE');
		$output[ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE');
		$output[ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE');
		$output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX');
		$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
		$output[ 'HDISCOUNT' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT', '_JOMRES_AJAXFORM_BILLING_DISCOUNT');
		$output[ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO', false);
		$output[ '_JOMRES_GUEST_BLACKLISTED' ] = jr_gettext('_JOMRES_GUEST_BLACKLISTED', '_JOMRES_GUEST_BLACKLISTED', false);
		$output[ '_JOMRES_GUEST_BLACKLISTED_DESC' ] = jr_gettext('_JOMRES_GUEST_BLACKLISTED_DESC', '_JOMRES_GUEST_BLACKLISTED_DESC', false);
		
		if ($id == 0) {
			$output[ '_JOMRES_GUEST_BLACKLISTED' ] = '';
			$output[ '_JOMRES_GUEST_BLACKLISTED_DESC' ] = '';
		}
		
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();

		$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_guests'), '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_guest');
		if ($id != 0) {
			$jrtb .= $jrtbar->toolbarItem('delete', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_guest'."&id=$id"), '');
		}
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS');
		$output[ 'GUESTUID' ] = $id;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_guest.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('validation', $vat_validation);
		$tmpl->displayParsedTemplate();
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_MR_CREDITCARD_EDIT', '_JOMRES_MR_CREDITCARD_EDIT');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
		$output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
