<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
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

class j06005show_manager_details
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
		
		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();
		
		$this->retVals = '';
		
		$manager_profile_id = $componentArgs[ 'manager_profile_id' ];
		$invoice_id = $componentArgs[ 'invoice_id' ];
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsRegistered) {
			return;
		}

		if ($manager_profile_id == 0) {
			return false;
		}

		if (!$thisJRUser->superPropertyManager && $thisJRUser->id != $manager_profile_id) { // The user's not a super property manager, and this invoice isn't for their user id
			return false;
		}

		$query = 'SELECT enc_firstname,enc_surname,enc_house,enc_street,enc_town,enc_county,enc_country,enc_postcode,enc_tel_landline,enc_tel_mobile,enc_email,enc_vat_number FROM #__jomres_guest_profile WHERE cms_user_id = '.(int) $manager_profile_id.'';
		$managerData = doSelectSql($query);

		$numberOfReturns = count($managerData);
		$vat_output = array();
		if ($numberOfReturns > 0) {
			foreach ($managerData as $data) {
				$output[ 'FIRSTNAME' ] = $jomres_encryption->decrypt($data->enc_firstname);
				$output[ 'SURNAME' ] = $jomres_encryption->decrypt($data->enc_surname);
				$output[ 'HOUSE' ] = $jomres_encryption->decrypt($data->enc_house);
				$output[ 'STREET' ] = $jomres_encryption->decrypt($data->enc_street);
				$output[ 'TOWN' ] = $jomres_encryption->decrypt($data->enc_town);
				$output[ 'REGION' ] = find_region_name($jomres_encryption->decrypt($data->enc_county));
				$output[ 'COUNTRY' ] = getSimpleCountry($jomres_encryption->decrypt($data->enc_country));
				$output[ 'POSTCODE' ] = $jomres_encryption->decrypt($data->enc_postcode);
				$output[ 'LANDLINE' ] = $jomres_encryption->decrypt($data->enc_tel_landline);
				$output[ 'MOBILE' ] = $jomres_encryption->decrypt($data->enc_tel_mobile);
				$output[ 'EMAIL' ] = $jomres_encryption->decrypt($data->enc_email);
				$vat_output[0][ 'VAT_NUMBER' ] = $jomres_encryption->decrypt($data->enc_vat_number);
			}
		} else {
			return false;
		}
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
		$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
		$vat_output[0][ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO');

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('show_guest_details.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		if (trim($vat_output[0][ 'VAT_NUMBER' ]) != '') {
			$tmpl->addRows('vat_output', $vat_output);
		}
		$this->retVals = $tmpl->getParsedTemplate();
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
