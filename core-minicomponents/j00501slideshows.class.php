<?php
/**
#
 * Mini-component core file: Configuration panel plugin. Constructs various slideshow related configuration options
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
 * Configuration panel for slideshows
 #
* @package Jomres
#
 */
class j00501slideshows {
	/**
	#
	 * Constructor: Outputs configuration options for slideshows
	#
	 */
	function j00501slideshows($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $configurationPanel,$jrConfig,$thisJRUser;
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$lists=$componentArgs['lists'];
			$configurationPanel->startPanel(_JOMRES_COM_A_SLIDESHOWS);

			$configurationPanel->setleft(_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK);
			$configurationPanel->setmiddle($lists['showSlideshowLink']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE);
			$configurationPanel->setmiddle($lists['showSlideshowInline']);
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