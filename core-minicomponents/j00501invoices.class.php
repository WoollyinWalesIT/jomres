<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.0
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
	 * Property Configuration page tabs. Offers invoice number related settings.
	 * 
	 */


class j00501invoices
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

		$configurationPanel = $componentArgs[ 'configurationPanel' ];

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$mrConfig = getPropertySpecificSettings();
		$lists = $componentArgs[ 'lists' ];

		$configurationPanel->startPanel(jr_gettext('_JOMRES_INVOICE_NUMBERS', '_JOMRES_INVOICE_NUMBERS', false));

		if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', '_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', false));
			$configurationPanel->setmiddle($lists[ 'use_custom_invoice_numbers' ]);
			$configurationPanel->setright(jr_gettext('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', '_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', '_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', false));
			$configurationPanel->setmiddle('<input type="url" class="inputbox form-control"  size="50" name="cfg_last_invoice_number" value="'.$mrConfig[ 'last_invoice_number' ].'" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', '_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', false));
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', '_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', false));
			$configurationPanel->setmiddle('<input type="url" class="inputbox form-control"  size="50" name="cfg_custom_invoice_pattern" value="'.$mrConfig[ 'custom_invoice_pattern' ].'" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', '_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', false));
			$configurationPanel->insertSetting();
		}

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
