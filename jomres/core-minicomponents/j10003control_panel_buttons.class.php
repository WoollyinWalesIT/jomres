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
class j10003control_panel_buttons {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j10003control_panel_buttons()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
			
		$control_panel_buttons = get_showtime('control_panel_buttons');
		
		$control_panel_buttons_categorised = array();
		foreach ($control_panel_buttons as $button)
			{
			$category=jr_strtolower($button['category']);
			$order = $button['order'];
			$control_panel_buttons_categorised[$category][]=$button;
			}
		ksort ($control_panel_buttons_categorised);

		// We need to find the dashboard category in this array, extract it then put it at the beginning.
		$dashboard_category = jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN" , _JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN ,false,false);
		$dashboard_category_contents = $control_panel_buttons_categorised[$dashboard_category];
		unset($control_panel_buttons_categorised[$dashboard_category]);
		$new_arr = array($dashboard_category=>$dashboard_category_contents );
		foreach ($control_panel_buttons_categorised as $key => $val)
			$new_arr[$key]=$val;
		$control_panel_buttons_categorised = $new_arr;
		
		$MiniComponents->triggerEvent('10004', array('control_panel_buttons_categorised' => $control_panel_buttons_categorised) );
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