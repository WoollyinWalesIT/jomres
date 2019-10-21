<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00501suppliments
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
		$mrConfig = getPropertySpecificSettings();
		if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
			return;
		}
		$lists = $componentArgs[ 'lists' ];
		if ($mrConfig[ 'singleRoomProperty' ] != '1') {
			$configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS', '_JOMRES_COM_A_SUPPLIMENTS', false));

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', false));
			$configurationPanel->setmiddle($lists[ 'singlePersonSuppliment' ]);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', false));
			$configurationPanel->setmiddle($lists[ 'supplimentChargeIsPercentage' ]);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', false));
			$configurationPanel->setmiddle('<input type="text" class="inputbox form-control"  size="5" name="cfg_singlePersonSupplimentCost" value="'.$mrConfig[ 'singlePersonSupplimentCost' ].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->endPanel();
		}
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
