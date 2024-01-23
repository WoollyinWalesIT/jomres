<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Property Configuration page tabs. Offers the dropdown that allows the manager to change the property's tariff editing mode.
	 *
	 */


class j00501tariff_editing_mode
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
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$mrConfig = getPropertySpecificSettings();

		$tariffModeDD = $componentArgs[ 'tariffModeDD' ];

		if ($mrConfig[ 'is_real_estate_listing' ] != 0) {
			return;
		}

		/*if ($mrConfig[ 'tariffmode' ] == '2') {
			return;
		}*/

		$configurationPanel->startPanel(jr_gettext('JOMRES_COM_A_TARIFFMODE', 'JOMRES_COM_A_TARIFFMODE', false));

		$configurationPanel->setleft(jr_gettext('JOMRES_COM_A_TARIFFMODE', 'JOMRES_COM_A_TARIFFMODE', false));
		$configurationPanel->setmiddle($tariffModeDD);
		$configurationPanel->setright(jr_gettext('JOMRES_COM_A_TARIFFMODE_DESC', 'JOMRES_COM_A_TARIFFMODE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return null;
	}
}
