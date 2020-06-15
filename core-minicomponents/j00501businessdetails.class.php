<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Property Configuration page tabs. Offers business details related settings. These are details that are shown on the invoice and are different to those stored against the hotel.
	 * 
	 */


class j00501businessdetails
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

		if ($componentArgs['is_channel_property']) {
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		$mrConfig = getPropertySpecificSettings();
		
		if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
			return;
		}

		if (!isset($mrConfig['property_business_name'])) {
			$mrConfig['property_business_name'] = '';
		}
		if (!isset($mrConfig['property_vat_number'])) {
			$mrConfig['property_vat_number'] = '';
		}
		if (!isset($mrConfig['property_business_houseno'])) {
			$mrConfig['property_business_houseno'] = '';
		}
		if (!isset($mrConfig['property_business_street'])) {
			$mrConfig['property_business_street'] = '';
		}
		if (!isset($mrConfig['property_business_town'])) {
			$mrConfig['property_business_town'] = '';
		}
		if (!isset($mrConfig['property_business_region'])) {
			$mrConfig['property_business_region'] = '';
		}
		if (!isset($mrConfig['property_business_country'])) {
			$mrConfig['property_business_country'] = '';
		}
		if (!isset($mrConfig['property_business_postcode'])) {
			$mrConfig['property_business_postcode'] = '';
		}
		if (!isset($mrConfig['property_business_telephone'])) {
			$mrConfig['property_business_telephone'] = '';
		}
		if (!isset($mrConfig['property_business_email'])) {
			$mrConfig['property_business_email'] = '';
		}

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];
		$editIconSize = $componentArgs[ 'editIconSize' ];

		$configurationPanel->startPanel(jr_gettext('_JOMRES_COM_YOURBUSINESS', '_JOMRES_COM_YOURBUSINESS', false));

		$configurationPanel->insertDescription(jr_gettext( '_JOMRES_COM_YOURBUSINESS_DESC', '_JOMRES_COM_YOURBUSINESS_DESC', false ));
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_YOURBUSINESS_NAME', '_JOMRES_COM_YOURBUSINESS_NAME', false));
		$configurationPanel->setmiddle('<input type="text" class="inputbox form-control" size="50" name="cfg_property_business_name" value="'.jomres_decode($mrConfig['property_business_name']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		if (isset($mrConfig[ 'vat_number_validated' ]) && $mrConfig[ 'vat_number_validated' ] == '1') {
			$status = jr_gettext('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', '_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', false);
		} else {
			$status = jr_gettext('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', '_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', false);
		}
		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO', false));
		$configurationPanel->setmiddle('<input type="text" class="inputbox form-control" size="50" name="cfg_property_vat_number" value="'.$mrConfig[ 'property_vat_number' ].'" />'.$status);
		$configurationPanel->setright(jr_gettext('_JOMRES_VAT_PROPERTY_NUMBER_DESC', '_JOMRES_VAT_PROPERTY_NUMBER_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_YOURBUSINESSADDRESS', '_JOMRES_COM_YOURBUSINESSADDRESS', false));
		$configurationPanel->setmiddle('<input type="number" class="inputbox form-control" size="50" name="cfg_property_business_houseno" value="'.jomres_decode($mrConfig['property_business_houseno']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', false));
		$configurationPanel->setmiddle('<input type="text" class="inputbox form-control" size="50" name="cfg_property_business_street" value="'.jomres_decode($mrConfig['property_business_street']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', false));
		$configurationPanel->setmiddle('<input type="text" class="inputbox form-control" size="50" name="cfg_property_business_town" value="'.jomres_decode($mrConfig['property_business_town']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false));
		$configurationPanel->setmiddle('<input type="text" class="inputbox form-control" size="50" name="cfg_property_business_region" value="'.jomres_decode($mrConfig['property_business_region']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false));
		$configurationPanel->setmiddle('<input type="text" class="inputbox form-control" size="50" name="cfg_property_business_country" value="'.jomres_decode($mrConfig['property_business_country']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', false));
		$configurationPanel->setmiddle('<input type="text" class="inputbox form-control" size="50" name="cfg_property_business_postcode" value="'.jomres_decode($mrConfig['property_business_postcode']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', false));
		$configurationPanel->setmiddle('<input type="tel" class="inputbox form-control" size="50" name="cfg_property_business_telephone" value="'.jomres_decode($mrConfig['property_business_telephone']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false));
		$configurationPanel->setmiddle('<input type="email" class="inputbox form-control" size="50" name="cfg_property_business_email" value="'.jomres_decode($mrConfig['property_business_email']).'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return null;
	}
}
