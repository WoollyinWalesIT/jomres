<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Configuration panel for miscelleneous options
 #
* @package Jomres
#
 */
class j00501propertydetailsoptions {
	/**
	#
	 * Constructor: Constructs and outputs miscelleneous options
	#
	 */
	function j00501propertydetailsoptions($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$configurationPanel=$componentArgs['configurationPanel'];
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$lists=$componentArgs['lists'];
		$configurationPanel->startPanel(_JOMRES_PATHWAY_PROPERTYDETAILS);
		
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(_JOMRES_COM_A_SHOWONLYAVLCAL);
			$configurationPanel->setmiddle($lists['showOnlyAvailabilityCalendar']);
			$configurationPanel->setright(_JOMRES_COM_A_SHOWONLYAVLCAL_DESC);
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS);
			$configurationPanel->setmiddle($lists['show_booking_form_in_property_details']);
			$configurationPanel->setright(_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC);
			$configurationPanel->insertSetting();
			}
		
		if (($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager) && $mrConfig['singleRoomProperty'] != "1" )
			{
			$configurationPanel->setleft(_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS);
			$configurationPanel->setmiddle($lists['roomslistinpropertydetails']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_SHOWROOMSLISTLINK);
			$configurationPanel->setmiddle($lists['showRoomsListingLink']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}

		$configurationPanel->setleft(_JOMRES_SHOWGOOGLECURRENCYLINKS);
		$configurationPanel->setmiddle($lists['showGoogleCurrencyLink']);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
			
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR);
			$configurationPanel->setmiddle($lists['showAvailabilityCalendar']);
			$configurationPanel->setright(_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC);
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE);
			$configurationPanel->setmiddle($lists['showSlideshowInline']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK);
			$configurationPanel->setmiddle($lists['showSlideshowLink']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE);
			$configurationPanel->setmiddle($lists['showTariffsInline']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK);
			$configurationPanel->setmiddle($lists['showTariffsLink']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
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