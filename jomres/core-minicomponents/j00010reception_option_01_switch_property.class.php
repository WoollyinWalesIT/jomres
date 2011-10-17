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
class j00010reception_option_01_switch_property {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00010reception_option_01_switch_property($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=TRUE; return;
			}
		$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=switch_active_property", 'switch_property.png', jr_gettext('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY,false,false),null,jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "dashboard" ,false,false) );
		}
	
	function touch_template_language()
		{
		$output=array();

		$output[]	= jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "dashboard");
		$output[]	= jr_gettext( "_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY" , _JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>