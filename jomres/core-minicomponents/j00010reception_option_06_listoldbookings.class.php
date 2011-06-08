<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
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
class j00010reception_option_06_listoldbookings {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00010reception_option_06_listoldbookings($componentArgs)
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
		$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=listoldbookings", 'ReservationsHistoric.png', jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS',_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS,false,false));
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>