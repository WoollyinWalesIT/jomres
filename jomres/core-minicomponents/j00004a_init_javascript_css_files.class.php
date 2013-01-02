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
class j00004a_init_javascript_css_files {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00004a_init_javascript_css_files($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (defined("JOMRES_JSCALLED") )
			return;

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if (!isset($jrConfig['jquery_ui_theme_detected']))
			$jrConfig['jquery_ui_theme_detected'] = "jomres^jquery-ui-1.8.16.custom.css";
		
		$themeArr = explode ("^",$jrConfig['jquery_ui_theme_detected']);
		$subdir = $themeArr[0];
		$filename = $themeArr[1];
		if (isset($themeArr[2]))
			$themePath = $themeArr[2]."/";
		else
			$themePath = 'jomres/css/jquery_ui_themes/'.$subdir.'/';
		
		set_showtime("jquery.ui.theme",$filename);
		set_showtime("jquery.ui.theme.relpath",$themePath);
		
		set_showtime("tables_jui.css","tables_jui.css");
		set_showtime("tables_jui.css.relpath","jomres/css/");
		
		if (using_bootstrap())
			{
			set_showtime("DT_bootstrap.css","DT_bootstrap.css");
			set_showtime("DT_bootstrap.css.relpath","jomres/css/");
			
			set_showtime("DT_bootstrap.js","DT_bootstrap.js");
			set_showtime("DT_bootstrap.js.relpath","jomres/javascript/");

			set_showtime("tables_jui.css","");
			set_showtime("tables_jui.css.relpath","jomres/css/");
			}
		
		$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
		define("JOMRESDATEPICKERLANG",$jomreslang->datepicker_crossref[$jomreslang->lang]);
		$datepicker_localisation_file = 'jquery.ui.datepicker-'.JOMRESDATEPICKERLANG.'.js';
		
		$management_view=jomresGetParam($_REQUEST,'tmpl',false);
		
		if (_JOMRES_DETECTED_CMS != "joomla30")
			{
			set_showtime("jquery.core.js",'jquery-1.8.2.min.js');
			set_showtime("jquery.core.js.relpath",'jomres/javascript/');
			}
		
		set_showtime("jquery.ui.js","jquery-ui-1.8.23.custom.min.js");
		set_showtime("jquery.ui.js.relpath",'jomres/javascript/');

			
		set_showtime("jquery.rating.css",'jquery.rating.css');
		set_showtime("jquery.rating.css.relpath",'jomres/css/');
		
		if (!using_bootstrap())
			{
			set_showtime("jquery.ui.potato.menu.css","jquery.ui.potato.menu.css");
			set_showtime("jquery.ui.potato.menu.css.relpath","jomres/css/");
			
			set_showtime("jquery.cookee.for_tabs.js","jquery.cookee.for_tabs.js");
			set_showtime("jquery.cookee.for_tabs.js.relpath","jomres/javascript/");
			}
			
		set_showtime("jomres.js","jomres.js");
		set_showtime("jomres.js.relpath","jomres/javascript/");

		set_showtime("datepicker_localisation_file",$datepicker_localisation_file);
		set_showtime("datepicker_localisation_file.relpath","jomres/javascript/jquery-ui-cal-localisation/");
		
		set_showtime("jquery.cookee.js","jquery.cookee.js");
		set_showtime("jquery.cookee.js.relpath","jomres/javascript/");

		set_showtime("heartbeat.js","heartbeat.js");
		set_showtime("heartbeat.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.bt.js","jquery.bt.js");
		set_showtime("jquery.bt.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.hoverIntent.js","jquery.hoverIntent.js");
		set_showtime("jquery.hoverIntent.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.rating.js","jquery.rating.js");
		set_showtime("jquery.rating.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.validate.js","jquery.validate.js");
		set_showtime("jquery.validate.js.relpath","jomres/javascript/");
		
		
		// Bootstrap toggle buttons
		if (using_bootstrap())
			{
			set_showtime("jquery.toggle.buttons.js","jquery.toggle.buttons.js");
			set_showtime("bootstrap-toggle-buttons.js.relpath","jomres/javascript/bootstrap-toggle-buttons/js/");
			
			set_showtime("jquery.toggle.buttons.css","jquery.toggle.buttons.css");
			set_showtime("jquery.toggle.buttons.css.relpath","jomres/javascript/bootstrap-toggle-buttons/css/");
			}
		
		if (!using_bootstrap())
			{
			set_showtime("x-editable.js","jqueryui-editable.min.js");
			set_showtime("x-editable.js.relpath","jomres/javascript/x-editable/jqueryui-editable/js/");
			
			set_showtime("x-editable.css","jqueryui-editable.css");
			set_showtime("x-editable.css.relpath","jomres/javascript/x-editable/jqueryui-editable/css/");
			}
		else
			{
			set_showtime("x-editable.js","bootstrap-editable.min.js");
			set_showtime("x-editable.js.relpath","jomres/javascript/x-editable/bootstrap-editable/js/");
			
			set_showtime("x-editable.css","bootstrap-editable.css");
			set_showtime("x-editable.css.relpath","jomres/javascript/x-editable/bootstrap-editable/css/");
			}
		
		set_showtime("jquery.jeditable.js","jquery.jeditable.js");
		set_showtime("jquery.jeditable.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.jgrowl.css","jquery.jgrowl.css");
		set_showtime("jquery.jgrowl.css.relpath","jomres/css/");
		
		set_showtime("jquery.jgrowl.js","jquery.jgrowl.js");
		set_showtime("jquery.jgrowl.js.relpath","jomres/javascript/");
		
		set_showtime("excanvas.js","excanvas.js");
		set_showtime("excanvas.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.chainedSelects.js","jquery.chainedSelects.js");
		set_showtime("jquery.chainedSelects.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.ui.potato.menu.js","jquery.ui.potato.menu.js");
		set_showtime("jquery.ui.potato.menu.js.relpath","jomres/javascript/");
		
		set_showtime("TableTools_JUI.css","TableTools_JUI.css");
		set_showtime("TableTools_JUI.css.relpath","jomres/css/");
		
		
		set_showtime("jquery.dataTables.min.js","jquery.dataTables.min.js");
		set_showtime("jquery.dataTables.min.js.relpath","jomres/javascript/");
		
		set_showtime("TableTools.min.js","TableTools.min.js");
		set_showtime("TableTools.min.js.relpath","jomres/javascript/");
		
		set_showtime("jquery.easing.compatibility.js","jquery.easing.compatibility.js");
		set_showtime("jquery.easing.compatibility.js.relpath","jomres/javascript/");

		$ls = jomresGetDomain();
		set_showtime("module_popup.js",$ls."_".get_showtime('lang')."_module_popup.js"); // We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
		set_showtime("module_popup.js.abspath",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS);
		set_showtime("module_popup.js.relpath","jomres/temp/");
		
		set_showtime("misc_url_definitions.js",$ls."_".get_showtime('lang')."_misc_url_definitions.js"); // We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
		set_showtime("misc_url_definitions.js.abspath",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS);
		set_showtime("misc_url_definitions.js.relpath","jomres/temp/");
		
		set_showtime("jomres_consolidated_files.js","jomres_consolidated_files.js");
		set_showtime("jomres_consolidated_files.js.relpath","jomres/javascript/");
		
		set_showtime("jomres_consolidated_files_min.js","jomres_consolidated_files_min.js");
		set_showtime("jomres_consolidated_files_min.js.relpath","jomres/javascript/");
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