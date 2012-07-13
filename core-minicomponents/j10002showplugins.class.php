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

class j10002showplugins
	{
	function j10002showplugins()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$htmlFuncs =jomres_singleton_abstract::getInstance('html_functions');
		if (function_exists("curl_init"))
			{
			$this->cpanelButton=$htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins', 'plugin_button.png', "Plugin Manager","/jomres/images/jomresimages/small/",jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE" , "system maintenance" ,false,false));
			}
		else
			$this->cpanelButton=$htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN.'&task=nocurl', 'pluginManagerDisabled.png', "Plugin Manager","/jomres/images/jomresimages/small/",jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE" , "system maintenance" ,false,false));
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}	
	}