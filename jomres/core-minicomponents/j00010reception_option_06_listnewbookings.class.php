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
class j00010reception_option_06_listnewbookings {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00010reception_option_06_listnewbookings($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$property_uid=getDefaultProperty();
		$mrConfig=getPropertySpecificSettings($property_uid);
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=listNewBookings", 'ListNewBookings.png', jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS,false,false),null,jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS" , _JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS ,false,false) );
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>