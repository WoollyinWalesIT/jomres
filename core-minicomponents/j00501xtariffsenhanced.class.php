<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Configuration panel for enhanced tariffs
 #
* @package Jomres
#
 */
class j00501xtariffsenhanced {
	/**
	#
	 * Constructor: Outputs the enhanced tariffs
	#
	 */
	function j00501xtariffsenhanced($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $configurationPanel;
		$mrConfig=$componentArgs['mrConfig'];
		if ($mrConfig['tariffmode'] == 2)
			{
			if (!isset($mrConfig['tariffsenhanceddefault']))
				$mrConfig['tariffsenhanceddefault']=100.00;
			if (!isset($mrConfig['tariffsenhancedyearstoshow']))
				$mrConfig['tariffsenhancedyearstoshow']=2;
			$configurationPanel->startPanel(JOMRES_COM_A_TARIFFMODE_TARIFFTYPES);

			$configurationPanel->setleft("Tariff default");
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_tariffsenhanceddefault" value="'.$mrConfig['tariffsenhanceddefault'].'" />');
			$configurationPanel->setright("This only applies to new tariffs");
			$configurationPanel->insertSetting();

			$configurationPanel->setleft("Years to show");
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_tariffsenhancedyearstoshow" value="'.$mrConfig['tariffsenhancedyearstoshow'].'" />');
			$configurationPanel->setright("Defines the number of years to show when editing a tariff type");
			$configurationPanel->insertSetting();

			$configurationPanel->endPanel();
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>