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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00010reception_option_03_dobooking {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00010reception_option_03_dobooking($componentArgs)
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
	
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$output['BOOKAROOMLINK']=JOMRES_SITEPAGE_URL."&task=dobooking";
		if ( $jrConfig['useSSLinBookingform'] == "1" )
			$link=jomresURL($output['BOOKAROOMLINK'],1);
		else
			$link=jomresURL($output['BOOKAROOMLINK']);
			
		$this->cpanelButton=jomres_mainmenu_option($link, 'NewBooking.png', jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,false));
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>