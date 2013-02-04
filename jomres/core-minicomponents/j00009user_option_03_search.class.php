<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
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
class j00009user_option_03_search {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00009user_option_03_search($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=search", 'find.png', jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH',_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH,false,false),null,jr_gettext( "_JOMRES_SEARCH_BUTTON" , _JOMRES_SEARCH_BUTTON ,false,false) );
		}
	
	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', _JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH);
		$output[]		=jr_gettext('_JOMRES_SEARCH_BUTTON',_JOMRES_SEARCH_BUTTON);
		
		

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