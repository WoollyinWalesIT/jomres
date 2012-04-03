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

class j10002subscriptions
	{
	function j10002subscriptions()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$htmlFuncs =jomres_singleton_abstract::getInstance('html_functions');
		if ($jrConfig['useSubscriptions']=="0")
			return;

		if ($jrConfig['advanced_site_config'] == 1)
			{
			$this->cpanelButton=$htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_subscriptions', 'ViewDatabase.png', _JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE,"/jomres/images/jomresimages/small/",jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING" , "accounting" ,false,false),false,true);
			}
		}
	
	function touch_template_language()
		{
		$output=array();

		$output[]	= jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING" , "accounting");

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