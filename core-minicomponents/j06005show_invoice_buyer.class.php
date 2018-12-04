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

class j06005show_invoice_buyer
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();
		
		$this->retVals = '';
		
		$invoice_id = (int)$componentArgs[ 'invoice_id' ]; // We will not allow setting of the invoice id thru the url, only thru the componentArgs value. If it's not set then this page wasn't called thru the view_invoice page therefore it should not be shown
		if ($invoice_id == 0 ) {
			throw new Exception('Error: Invoice id not set.');
		}
		
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsRegistered) {
			return;
		}

		jr_import('jrportal_invoice_pii_details');
		$jrportal_invoice_pii_details = new jrportal_invoice_pii_details();
		$jrportal_invoice_pii_details->invoice_id=$invoice_id;
		$sellerData = $jrportal_invoice_pii_details->get_pii_buyer();

		$output[ 'FIRSTNAME' ] = $sellerData['firstname'];
		$output[ 'SURNAME' ] = $sellerData['surname'];
		$output[ 'HOUSE' ] = $sellerData['house'];
		$output[ 'STREET' ] = $sellerData['street'];
		$output[ 'TOWN' ] = $sellerData['town'];
		$output[ 'REGION' ] = find_region_name($sellerData['county']);
		$output[ 'COUNTRY' ] = getSimpleCountry($sellerData['country']);
		$output[ 'POSTCODE' ] = $sellerData['postcode'];
		$output[ 'LANDLINE' ] = $sellerData['tel_landline'];
		$output[ 'MOBILE' ] = $sellerData['tel_mobile'];
		$output[ 'EMAIL' ] = $sellerData['email'];
		$vat_output[0][ 'VAT_NUMBER' ] = $sellerData['vat_number'];

		$output[ 'TITLE' ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST');
		$output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME');
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
		$vat_output[0][ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO');

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('show_invoice_buyer.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		if (trim($vat_output[0][ 'VAT_NUMBER' ]) != '') {
			$tmpl->addRows('vat_output', $vat_output);
		}
		$this->retVals = $tmpl->getParsedTemplate();
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->retVals;
	}
}
