<?php
/**
#
 * Mini-component core file: Configuration panel plugin. Constructs availability calendar related configuration options
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
class j00501avlcal {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00501avlcal($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $configurationPanel,$jrConfig,$thisJRUser;
		$mrConfig=$componentArgs['mrConfig'];
		$lists=$componentArgs['lists'];
		//$tabs=$componentArgs['tabs'];
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$jsInputFormatDropdownList=$componentArgs['jsInputFormatDropdownList'];

			//$configurationPanel=$componentArgs['configurationPanel'];
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

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_TODAYCOLOUR);;
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_todaycolor',$mrConfig['avlcal_todaycolor']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_INMONTHFACE);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_inmonthface',$mrConfig['avlcal_inmonthface']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_OUTMONTHFACE);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_outmonface',$mrConfig['avlcal_outmonface']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_INBGCOLOUR);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_inbgcolour',$mrConfig['avlcal_inbgcolour']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_OUTBGCOLOUR);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_outbgcolour',$mrConfig['avlcal_outbgcolour']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_occupiedcolour',$mrConfig['avlcal_occupiedcolour']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_provisionalcolour',$mrConfig['avlcal_provisionalcolour']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_booking',$mrConfig['avlcal_booking']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_PASTCOLOUR);
			$configurationPanel->setmiddle('<script>initPicker(\'cfg_avlcal_pastcolour\',\''.$mrConfig['avlcal_pastcolour'].'\');</script>');
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_pastcolour',$mrConfig['avlcal_pastcolour']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_BLACKBOOKING);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_black',$mrConfig['avlcal_black']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_AVLCAL_WEEKENDBORDER);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('avlcal_weekendborder',$mrConfig['avlcal_weekendborder']));
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