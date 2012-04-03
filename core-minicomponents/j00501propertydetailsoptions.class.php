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
		$lists=$componentArgs['lists'];
		$configurationPanel->startPanel(_JOMRES_PATHWAY_PROPERTYDETAILS);
		
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE);
			$configurationPanel->setmiddle($lists['showSlideshowInline']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK);
			$configurationPanel->setmiddle($lists['showSlideshowLink']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
		
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				{
				$configurationPanel->setleft(_JOMRES_COM_A_SHOWONLYAVLCAL);
				$configurationPanel->setmiddle($lists['showOnlyAvailabilityCalendar']);
				$configurationPanel->setright(_JOMRES_COM_A_SHOWONLYAVLCAL_DESC);
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
				
				$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE);
				$configurationPanel->setmiddle($lists['showTariffsInline']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();
				
				$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK);
				$configurationPanel->setmiddle($lists['showTariffsLink']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();
				
				$configurationPanel->setleft(JOMRES_COM_A_VERBOSETARIFFINTO);
				$configurationPanel->setmiddle($lists['verbosetariffinfo']);
				$configurationPanel->setright(JOMRES_COM_A_VERBOSETARIFFINTO_DESC);
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