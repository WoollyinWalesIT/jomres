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

class j00501tariff_editing_mode
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

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
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
