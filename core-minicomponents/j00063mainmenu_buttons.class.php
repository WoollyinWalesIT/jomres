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
class j00063mainmenu_buttons {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00063mainmenu_buttons()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
			
		$jomres_mainmenu_thirdparty_options	 = get_showtime('jomres_mainmenu_thirdparty_options');
		$jomres_mainmenu_reception_options	 = get_showtime('jomres_mainmenu_reception_options');
		$jomres_mainmenu_manager_options	 = get_showtime('jomres_mainmenu_manager_options');
		$jomres_mainmenu_user_options		 = get_showtime('jomres_mainmenu_user_options');
		
		
		$control_panel_buttons_categorised = array();
		if ( count($jomres_mainmenu_thirdparty_options) > 0)
			{
			foreach ($jomres_mainmenu_thirdparty_options as $button)
				{
				if ( isset($button['OPTIONS']) && $button['OPTIONS'] != "" )
					{
					$category=strtolower($button['OPTIONS']['category']);
					$control_panel_buttons_categorised[$category][]=$button['OPTIONS'];
					}
				}
			}
		
		if ( count($jomres_mainmenu_reception_options) > 0)
			{
			foreach ($jomres_mainmenu_reception_options as $button)
				{
				if ( isset($button['OPTIONS']) && $button['OPTIONS'] != "" )
					{
					$category=strtolower($button['OPTIONS']['category']);
					$control_panel_buttons_categorised[$category][]=$button['OPTIONS'];
					}
				}
			}
		
		if ( count($jomres_mainmenu_manager_options) > 0)
			{
			foreach ($jomres_mainmenu_manager_options as $button)
				{
				if ( isset($button['OPTIONS']) && $button['OPTIONS'] != "" )
					{
					$category=strtolower($button['OPTIONS']['category']);
					$control_panel_buttons_categorised[$category][]=$button['OPTIONS'];
					}
				}
			}
		
		if ( count($jomres_mainmenu_user_options) > 0)
			{
			foreach ($jomres_mainmenu_user_options as $button)
				{
				if ( isset($button['OPTIONS']) && $button['OPTIONS'] != "" )
					{
					$category=strtolower($button['OPTIONS']['category']);
					$control_panel_buttons_categorised[$category][]=$button['OPTIONS'];
					}
				}
			}
		//var_dump($control_panel_buttons_categorised);exit;
		ksort ($control_panel_buttons_categorised);

		$MiniComponents->triggerEvent('00064', array('jomres_mainmenu_buttons_categorised' => $control_panel_buttons_categorised) );
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