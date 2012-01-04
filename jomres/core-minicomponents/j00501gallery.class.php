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
 * Configuration panel for gallery link input
 #
* @package Jomres
#
 */
class j00501gallery {
	/**
	#
	 * Constructor: Outputs the gallery link config inputs
	#
	 */
	function j00501gallery($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$configurationPanel=$componentArgs['configurationPanel'];
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
			{
			$mrConfig=getPropertySpecificSettings();
			$configurationPanel->startPanel(_JOMRES_COM_A_GALLERYLINK);
			$configurationPanel->setleft(_JOMRES_COM_A_GALLERYLINK);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="50" name="cfg_galleryLink" value="'.$mrConfig['galleryLink'].'" />');
			$configurationPanel->setright(_JOMRES_COM_A_GALLERYLINK_DESC);
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