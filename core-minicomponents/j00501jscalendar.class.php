<?php
/**
#
 * Mini-component core file: Configuration panel plugin. Constructs various javascript calendar related configuration options
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Configuration panel for javascript calendar -> property dependant
 #
* @package Jomres
#
 */
class j00501jscalendar {
	/**
	#
	 * Constructor: Outputs configuration options for the local javascript calendars
	#
	 */
	function j00501jscalendar($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		// The javascript calendar has been removed from frontend activation as it's confusing for many users. To re-enable it, uncomment the following code and see the generateDateInput functions in dobookings.class.php, and functions.php, and several lines in jomres.php
		/*
		global $configurationPanel,$jrConfig,$thisJRUser;
		if ($jrConfig['autoDetectJSCalendarLang'] == "0")
			{
			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				{
				$configurationPanel->startPanel(_JOMRES_COM_A_JSCALENDAR);
				$configurationPanel->setleft(_JOMRES_COM_A_CALENDARLANGUAGE);
				$configurationPanel->setmiddle(createJSLanguageDropdown());
				$configurationPanel->setright(_JOMRES_COM_A_CALENDARLANGUAGE_DESC);
				$configurationPanel->insertSetting();
				$configurationPanel->setleft(_JOMRES_COM_A_CALENDARCSS);
				$configurationPanel->setmiddle(createJSCSSDropdown());
				$configurationPanel->setright(_JOMRES_COM_A_CALENDARCSS_DESC);
				$configurationPanel->insertSetting();
				$configurationPanel->endPanel();
				}
			}
		*/
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