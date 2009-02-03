<?php
/**
#
 * Mini-component core file: Configuration panel plugin. Constructs various suppliment related configuration options
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00501suppliments {
	/**
	#
	 * Constructor: xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00501suppliments($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $configurationPanel;
		$mrConfig=$componentArgs['mrConfig'];
		$lists=$componentArgs['lists'];
		if ($mrConfig['singleRoomProperty'] != "1" )
			{
			$configurationPanel->startPanel(_JOMRES_COM_A_SUPPLIMENTS);

			$configurationPanel->setleft(_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON);
			$configurationPanel->setmiddle($lists['singlePersonSuppliment']);
			$configurationPanel->setright(_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE);
			$configurationPanel->setmiddle($lists['supplimentChargeIsPercentage']);
			$configurationPanel->setright(_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_singlePersonSupplimentCost" value="'.$mrConfig['singlePersonSupplimentCost'].'" />');
			$configurationPanel->setright();
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