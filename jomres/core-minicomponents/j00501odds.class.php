<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
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
		$editIconSize=$componentArgs['editIconSize'];
		$configurationPanel->startPanel(_JOMRES_COM_A_ODDS);

		$configurationPanel->setleft(_JOMRES_COM_CONFIGCOUNTRIES);
		$configurationPanel->setmiddle(configCountries());
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(_JOMRES_COM_INPUTERROR_BACKGROUND);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('inputBoxErrorBackground',$mrConfig['inputBoxErrorBackground']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND);
			$configurationPanel->setmiddle(jomres_makeColourPickerInput('inputBoxOktobookBackground',$mrConfig['inputBoxOktobookBackground']));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_EDITICON);
			$configurationPanel->setmiddle($editIconSize);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
			
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			// Disabled for v4 as the full url is passed to the make popup function
			/*
			$configurationPanel->setleft(_JOMRES_COM_A_POPUPSALLOWED);
			$configurationPanel->setmiddle($lists['popupsAllowed']);
			$configurationPanel->setright(_JOMRES_COM_A_POPUPSALLOWED_DESC);
			$configurationPanel->insertSetting();
			*/
			
			$configurationPanel->setleft(_JOMRES_COM_A_VISITORSCANBOOKONLINE);
			$configurationPanel->setmiddle($lists['visitorscanbookonline']);
			$configurationPanel->setright(_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK);
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