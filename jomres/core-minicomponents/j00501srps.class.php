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
 * Configuration panel for Single room propertys
 #
* @package Jomres
#
 */
class j00501srps {
	/**
	#
	 * Constructor: Outputs inputs for configuring single room propertys
	#
	 */
	function j00501srps($componentArgs)
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
		$lists=$componentArgs['lists'];
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$weekdayDropdown=$componentArgs['weekdayDropdown'];
		$fixedArrivalDatesRecurring=$componentArgs['fixedArrivalDatesRecurring'];

		$configurationPanel->startPanel("SRPs");

		//if (JOMRES_SINGLEPROPERTY) // Allows Solo users to change the type from SRP to MRP and vice versa. Nobody else can do this.
		//	{
			$configurationPanel->setleft(_JOMRES_COM_A_SINGLEROOMPROPERTY);
			$configurationPanel->setmiddle($lists['singleRoomProperty']);
			$configurationPanel->setright(_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC);
			$configurationPanel->insertSetting();
		//	}
		
		if ($mrConfig['tariffmode'] == "1")
			{
			$configurationPanel->setleft(_JOMRES_COM_A_TARIFFPRICESAREWEEKLY);
			$configurationPanel->setmiddle($lists['tariffChargesStoredWeeklyYesNo']);
			$configurationPanel->setright(_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC);
			$configurationPanel->insertSetting();
			}

		if ($mrConfig['wholeday_booking'] == "1")
			{
			$configurationPanel->setleft(_JOMRES_COM_A_FIXEDPERIODBOOKINGS);
			$configurationPanel->setmiddle($lists['fixedPeriodBookings']);
			$configurationPanel->setright(_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY);
			$configurationPanel->insertSetting();
			}
		else
			{
			$configurationPanel->setleft(_JOMRES_COM_A_FIXEDPERIODBOOKINGS);
			$configurationPanel->setmiddle($lists['fixedPeriodBookings']);
			$configurationPanel->setright(_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC);
			$configurationPanel->insertSetting();
			}
			
		$configurationPanel->setleft(_JOMRES_COM_A_FIXEDPERIOD);
		$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_fixedPeriodBookingsNumberOfDays" value="'.$mrConfig['fixedPeriodBookingsNumberOfDays'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS);
		$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_numberofFixedPeriods" value="'.$mrConfig['numberofFixedPeriods'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT);
		$configurationPanel->setmiddle($lists['fixedPeriodBookingsShortYesNo']);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS);
		$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_fixedPeriodBookingsShortNumberOfDays" value="'.$mrConfig['fixedPeriodBookingsShortNumberOfDays'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		if ($mrConfig['wholeday_booking'] == "1")
			{
			$configurationPanel->setleft(_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY);
			$configurationPanel->setmiddle($lists['fixedArrivalDateYesNo']);
			$configurationPanel->setright(_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY);
			$configurationPanel->insertSetting();
		
			$configurationPanel->setleft(_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY);
			$configurationPanel->setmiddle($weekdayDropdown);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
		else
			{
			$configurationPanel->setleft(_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO);
			$configurationPanel->setmiddle($lists['fixedArrivalDateYesNo']);
			$configurationPanel->setright(_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC);
			$configurationPanel->insertSetting();
		
			$configurationPanel->setleft(_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY);
			$configurationPanel->setmiddle($weekdayDropdown);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
			
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			if ($mrConfig['wholeday_booking'] == "1")
				{
				$configurationPanel->setleft(_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY);
				$configurationPanel->setmiddle($fixedArrivalDatesRecurring);
				$configurationPanel->setright(_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY);
				$configurationPanel->insertSetting();
				}
			else
				{
				$configurationPanel->setleft(_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING);
				$configurationPanel->setmiddle($fixedArrivalDatesRecurring);
				$configurationPanel->setright(_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC);
				$configurationPanel->insertSetting();
				}

			}
			
		$configurationPanel->endPanel();
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