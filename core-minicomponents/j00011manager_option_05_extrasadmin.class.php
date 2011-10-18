<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00011manager_option_05_extrasadmin {
	function j00011manager_option_05_extrasadmin($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings($property_uid);
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=listExtras", 'EditOptions.png', jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS',_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS,false,false),null,jr_gettext(  "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS" , "settings" ,false,false),false,true );
		}

	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>