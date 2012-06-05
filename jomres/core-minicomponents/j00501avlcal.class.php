<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00501avlcal {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00501avlcal($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$configurationPanel=$componentArgs['configurationPanel'];
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$lists=$componentArgs['lists'];
		//$tabs=$componentArgs['tabs'];
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$jsInputFormatDropdownList=$componentArgs['jsInputFormatDropdownList'];

			//
			$configurationPanel->startPanel(_JOMRES_COM_A_AVLCAL);

			$configurationPanel->setleft(_JOMRES_COM_MONTHSTOSHOW);
			$configurationPanel->setmiddle('<input type="text" class="inputbox" size="5" name="cfg_CalendarMonthsToShow" value="'.$mrConfig['CalendarMonthsToShow'].'"/>');
			$configurationPanel->setright(_JOMRES_COM_MONTHSTOSHOW_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_MONTHS_STARTOFYEAR);
			$configurationPanel->setmiddle($lists['calstartfrombeginningofyear']);
			$configurationPanel->setright(_JOMRES_COM_MONTHS_STARTOFYEAR_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_DATEFORMATSTYLE);
			$configurationPanel->setmiddle($lists['dateFormatStyle']);
			$configurationPanel->setright(_JOMRES_COM_A_DATEFORMATSTYLE_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_CALENDAROUTPUT);
			$configurationPanel->setmiddle('<input type="text" class="inputbox" size="10" name="cfg_cal_output" value="'.$mrConfig['cal_output'].'" />');
			$configurationPanel->setright(_JOMRES_COM_CALENDAROUTPUT_DESC);
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