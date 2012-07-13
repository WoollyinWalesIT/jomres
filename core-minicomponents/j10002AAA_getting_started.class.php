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

class j10002AAA_getting_started
	{
	function j10002AAA_getting_started()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $htmlFuncs;  // We'll leave this one instance of this variable as global here because some older plugins will need it, and as this plugin's the first to be run in administrator, this should fix it
		$htmlFuncs =jomres_singleton_abstract::getInstance('html_functions');
		
		
		$logfile=JOMRES_SYSTEMLOG_PATH.'admins_first_run.txt';
		$threshold = 25; // After this, we won't show the "getting started button" any more, the user should be well on their way by now.
		$count = (int)file_get_contents ($logfile);
		//if ($count <=$threshold)
			$this->cpanelButton=$htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN."&task=getting_started", 'Support_IT.png', jr_gettext( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Getting started",false,false),"/jomres/images/jomresimages/small/",jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help" ,false,false));
		}
	
	function touch_template_language()
		{
		$output=array();

		$output[]	= jr_gettext( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Getting started");

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