<?php
/**
#
 * Mini-component core file: Configuration panel plugin. Constructs various miscelleneous configuration options
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $cssStyle;
		global $configurationPanel,$jrConfig,$thisJRUser;
		$mrConfig=$componentArgs['mrConfig'];
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
			$configurationPanel->setleft(_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS);
			$configurationPanel->setmiddle($lists['showRoomsInPropertyDetails']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
			
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(_JOMRES_COM_A_SHOWROOMSLISTLINK);
			$configurationPanel->setmiddle($lists['showRoomsListingLink']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
			
		if (($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager) && $mrConfig['singleRoomProperty'] != "1" )
			{
			$configurationPanel->setleft(_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS);
			$configurationPanel->setmiddle($lists['roomslistinpropertydetails']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
			
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$configurationPanel->setleft(_JOMRES_COM_A_POPUPSALLOWED);
			$configurationPanel->setmiddle($lists['popupsAllowed']);
			$configurationPanel->setright(_JOMRES_COM_A_POPUPSALLOWED_DESC);
			$configurationPanel->insertSetting();
			
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