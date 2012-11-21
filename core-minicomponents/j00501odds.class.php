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
 * Configuration panel for miscelleneous options
 #
* @package Jomres
#
 */
class j00501odds {
	/**
	#
	 * Constructor: Constructs and outputs miscelleneous options
	#
	 */
	function j00501odds($componentArgs)
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
			
		if (!isset($mrConfig['property_language']))
			$mrConfig['property_language']="en-GB";
		
		$lists=$componentArgs['lists'];
		$editIconSize=$componentArgs['editIconSize'];
		$configurationPanel->startPanel(jr_gettext("_JOMRES_COM_A_ODDS",_JOMRES_COM_A_ODDS));
		
		$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
		$configurationPanel->setleft(jr_gettext("_JOMRES_PROPERTY_LANG",_JOMRES_PROPERTY_LANG));
		$configurationPanel->setmiddle($jomreslang->get_languageselection_dropdown(true,$mrConfig['property_language']));
		$configurationPanel->setright(jr_gettext("_JOMRES_PROPERTY_LANG_DESC",_JOMRES_PROPERTY_LANG_DESC));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext("_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT",_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT));
		$configurationPanel->setmiddle($lists['auto_detect_country_for_booking_form']);
		$configurationPanel->setright(jr_gettext("_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC",_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext("_JOMRES_COM_CONFIGCOUNTRIES",_JOMRES_COM_CONFIGCOUNTRIES));
		$configurationPanel->setmiddle(configCountries());
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$threashold_dropdown = jomresHTML::integerSelectList( 0,100,1, 'cfg_cancellation_threashold','class="inputbox" size="1"', (int)$mrConfig['cancellation_threashold']);

			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD",_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD));
			$configurationPanel->setmiddle($threashold_dropdown);
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC",_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC));
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_VISITORSCANBOOKONLINE",_JOMRES_COM_A_VISITORSCANBOOKONLINE));
			$configurationPanel->setmiddle($lists['visitorscanbookonline']);
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC",_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK",_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK));
			$configurationPanel->setmiddle($lists['registeredUsersOnlyCanBook']);
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