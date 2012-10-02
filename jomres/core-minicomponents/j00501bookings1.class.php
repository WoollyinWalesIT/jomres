<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
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
class j00501bookings1 {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00501bookings1($componentArgs)
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
		$smokingOptionDropdownList=$componentArgs['smokingOptionDropdownList'];
		$weekenddayDropdown=$componentArgs['weekenddayDropdown'];
		$booking_form_rooms_list_style=$componentArgs['booking_form_rooms_list_style'];
		$booking_form_daily_weekly_monthly=$componentArgs['booking_form_daily_weekly_monthly'];
		
		
		$configurationPanel->startPanel(jr_gettext("_JOMRES_COM_A_BOOKING",_JOMRES_COM_A_BOOKING));
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(jr_gettext("_JOMRES_ROOMMSLIST_STYLE",_JOMRES_ROOMMSLIST_STYLE));
			$configurationPanel->setmiddle($booking_form_rooms_list_style);
			$configurationPanel->setright(jr_gettext("_JOMRES_ROOMMSLIST_STYLE_DESC",_JOMRES_ROOMMSLIST_STYLE_DESC));
			$configurationPanel->insertSetting();
			}
			
		$configurationPanel->setleft(jr_gettext("_JOMRES_WHOLEDAY_TITLE",_JOMRES_WHOLEDAY_TITLE));
		$configurationPanel->setmiddle($lists['wholeday_booking']);
		$configurationPanel->setright(jr_gettext("_JOMRES_WHOLEDAY_DESC",_JOMRES_WHOLEDAY_DESC));
		$configurationPanel->insertSetting();
			

			
		if ($mrConfig['wholeday_booking'] == "1")
			{
			$configurationPanel->setleft(jr_gettext("_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY",_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY));
			$configurationPanel->setmiddle($booking_form_daily_weekly_monthly);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
		
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY",_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY));
			$configurationPanel->setmiddle('<input type="text" class="inputbox" name="cfg_minimuminterval" size="5" value="'.$mrConfig['minimuminterval'].'" />');
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY",_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY));
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY",_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY));
			$configurationPanel->setmiddle('<input type="text" class="inputbox" name="cfg_mindaysbeforearrival" size="5" value="'.$mrConfig['mindaysbeforearrival'].'" />');
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY",_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY));
			$configurationPanel->insertSetting();
			}
		else
			{
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_BOOKINGFORM_PRICINGOUTPUT",_JOMRES_BOOKINGFORM_PRICINGOUTPUT));
			$configurationPanel->setmiddle($booking_form_daily_weekly_monthly);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
		
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_MINIMUMINTERVAL",_JOMRES_COM_A_MINIMUMINTERVAL));
			$configurationPanel->setmiddle('<input type="text" class="inputbox" name="cfg_minimuminterval" size="5" value="'.$mrConfig['minimuminterval'].'" />');
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_MINIMUMINTERVAL_DESC",_JOMRES_COM_A_MINIMUMINTERVAL_DESC));
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING",_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING));
			$configurationPanel->setmiddle('<input type="text" class="inputbox" name="cfg_mindaysbeforearrival" size="5" value="'.$mrConfig['mindaysbeforearrival'].'" />');
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC",_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC));
			$configurationPanel->insertSetting();
			}

		$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE",_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE));
		$configurationPanel->setmiddle('<input type="text" class="inputbox" name="cfg_defaultNumberOfFirstGuesttype" size="5" value="'.$mrConfig['defaultNumberOfFirstGuesttype'].'" />');
		$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC",_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC));
		$configurationPanel->insertSetting();
		
		
		$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_EXTRAS",_JOMRES_COM_A_EXTRAS));
		$configurationPanel->setmiddle($lists['showExtras']);
		$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_EXTRAS_DESC",_JOMRES_COM_A_EXTRAS_DESC));
		$configurationPanel->insertSetting();
		
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			if ( $mrConfig['singleRoomProperty'] != "1" )
				{
				$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_SMOKING",_JOMRES_COM_A_SMOKING));
				$configurationPanel->setmiddle($lists['showSmoking']);
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_SMOKING_DESC",_JOMRES_COM_A_SMOKING_DESC));
				$configurationPanel->insertSetting();
				
				
				$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_SMOKING_OPTION",_JOMRES_COM_A_SMOKING_OPTION));
				$configurationPanel->setmiddle($smokingOptionDropdownList);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();
				}
			}
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO",_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO));
			$configurationPanel->setmiddle($lists['limitAdvanceBookingsYesNo']);
			if ($mrConfig['wholeday_booking'] == "1")
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY",_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY));
			else
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC",_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS",_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS));
			$configurationPanel->setmiddle('<input type="text" class="inputbox" size="5" name="cfg_advanceBookingsLimit" value="'.$mrConfig['advanceBookingsLimit'].'">');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}

		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			if ($mrConfig['wholeday_booking'] == "1")
				{
				$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY",_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY));
				$configurationPanel->setmiddle($lists['showdepartureinput']);
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY",_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY));
				$configurationPanel->insertSetting();
				}
			else
				{
				$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_SHOWDEPARTUREINPUT",_JOMRES_COM_A_SHOWDEPARTUREINPUT));
				$configurationPanel->setmiddle($lists['showdepartureinput']);
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC",_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC));
				$configurationPanel->insertSetting();
				}
			}
			
		if ( $mrConfig['singleRoomProperty'] != "1" )
			{
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_LIMITROOMSLIST",_JOMRES_COM_LIMITROOMSLIST));
			$configurationPanel->setmiddle('<input type="text" class="inputbox" size="5" name="cfg_returnRoomsLimit" value="'.$mrConfig['returnRoomsLimit'].'">');
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_LIMITROOMSLIST_DESC",_JOMRES_COM_LIMITROOMSLIST_DESC));
			$configurationPanel->insertSetting();
			}
			
		$configurationPanel->setleft(jr_gettext("_JOMRES_COM_WEEKENDDAYS",_JOMRES_COM_WEEKENDDAYS));
		$configurationPanel->setmiddle($weekenddayDropdown);
		$configurationPanel->setright(jr_gettext("_JOMRES_COM_WEEKENDDAYS_DESC",_JOMRES_COM_WEEKENDDAYS_DESC));
		$configurationPanel->insertSetting();

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