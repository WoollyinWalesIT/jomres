<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable=false; return;
			}

		if ($componentArgs['is_channel_property']) {
			return;
		}

		$configurationPanel=$componentArgs['configurationPanel'];
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		if ($mrConfig['tariffmode'] == 2) {
			if (!isset($mrConfig['tariffsenhanceddefault']))
				$mrConfig['tariffsenhanceddefault']=100.00;
			if (!isset($mrConfig['tariffsenhancedyearstoshow']))
				$mrConfig['tariffsenhancedyearstoshow']=1;
			$configurationPanel->startPanel(jr_gettext('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','JOMRES_COM_A_TARIFFMODE_TARIFFTYPES',false));

			$configurationPanel->setleft(jr_gettext( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT" ,'_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT',false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_tariffsenhanceddefault" value="'.$mrConfig['tariffsenhanceddefault'].'" />');
			$configurationPanel->setright(jr_gettext( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC" , '_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC',false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW" , '_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW',false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_tariffsenhancedyearstoshow" value="'.$mrConfig['tariffsenhancedyearstoshow'].'" />');
			$configurationPanel->setright(jr_gettext( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC" , '_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC',false));
			$configurationPanel->insertSetting();

			$configurationPanel->endPanel();
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
