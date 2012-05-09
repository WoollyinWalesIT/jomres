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

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00004x_init_javascript_css_files {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00004x_init_javascript_css_files($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!defined("JOMRES_JSCALLED") )
			{
			define ('JOMRES_JSCALLED',1);
			}
		else
			return;

		$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', false );

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');

		// Include all the various css & javascript files we need
		if (!$no_html)
			{
			if (!defined(JOMRES_NOHTML) )
				{
				if (!isset($jrConfig['load_jquery_ui']))
					$jrConfig['load_jquery_ui'] = "1";

				if (!isset($jrConfig['load_jquery_ui_css']))
					$jrConfig['load_jquery_ui_css'] = "1";

				if ($jrConfig['load_jquery_ui'] =="1")
					{
					if ($jrConfig['load_jquery_ui_css'] =="1")
						jomres_cmsspecific_addheaddata("css",get_showtime("jquery.ui.theme.relpath"),get_showtime("jquery.ui.theme"),$skip=true);
					}

				if (jomres_cmsspecific_areweinadminarea() && ($jrConfig['load_jquery_ui_css'] =="0" || $jrConfig['load_jquery_ui_css'] == "0") ) // Regardless of the frontend setting, if we're in the admin area, we'll need the jquery UI
					jomres_cmsspecific_addheaddata("css",get_showtime("jquery.ui.theme.relpath"),get_showtime("jquery.ui.theme"),$skip=true);

				jomres_cmsspecific_addheaddata("css",get_showtime("jquery.rating.css.relpath"),get_showtime("jquery.rating.css"));
				jomres_cmsspecific_addheaddata("css",get_showtime("jquery.ui.potato.menu.css.relpath"),get_showtime("jquery.ui.potato.menu.css"));

				if (jomres_cmsspecific_areweinadminarea())
					{
					jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.core.js.relpath"),get_showtime("jquery.core.js")); // The order here is important, jquery must come before the ui
					jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.ui.js.relpath"),get_showtime("jquery.ui.js"));
					}
				elseif ($jrConfig['load_jquery'] == "1")
					{
					jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.core.js.relpath"),get_showtime("jquery.core.js"));
					}

				jomres_cmsspecific_addheaddata("javascript",get_showtime("jomres.js.relpath"),get_showtime("jomres.js"));  // Needs to be directly after jquery call so that noconflict is set

				if ($jrConfig['load_jquery_ui'] =="1")
					{
					jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.ui.js.relpath"),get_showtime("jquery.ui.js"));
					}

				jomres_cmsspecific_addheaddata("javascript",get_showtime("datepicker_localisation_file.relpath"),get_showtime("datepicker_localisation_file"),true);
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.cookee.js.relpath"),get_showtime("jquery.cookee.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.cookee.for_tabs.js.relpath"),get_showtime("jquery.cookee.for_tabs.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("heartbeat.js.relpath"),get_showtime("heartbeat.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.bt.js.relpath"),get_showtime("jquery.bt.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.hoverIntent.js.relpath"),get_showtime("jquery.hoverIntent.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.rating.js.relpath"),get_showtime("jquery.rating.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.validate.js.relpath"),get_showtime("jquery.validate.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("excanvas.js.relpath"),get_showtime("excanvas.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.chainedSelects.js.relpath"),get_showtime("jquery.chainedSelects.js"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.ui.potato.menu.js.relpath"),get_showtime("jquery.ui.potato.menu.js"));
				jomres_cmsspecific_addheaddata("css",get_showtime("jquery.jgrowl.css.relpath"),get_showtime("jquery.jgrowl.css"));
				jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.jgrowl.js.relpath"),get_showtime("jquery.jgrowl.js"));

				if ($thisJRUser->userIsRegistered)
					{

					jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.jeditable.js.relpath"),get_showtime("jquery.jeditable.js"));
					jomres_cmsspecific_addheaddata("css",get_showtime("TableTools_JUI.css.relpath"),get_showtime("TableTools_JUI.css"));
					jomres_cmsspecific_addheaddata("css",get_showtime("tables_jui.css.relpath"),get_showtime("tables_jui.css"));
					jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.dataTables.min.js.relpath"),get_showtime("jquery.dataTables.min.js"));
					jomres_cmsspecific_addheaddata("javascript",get_showtime("TableTools.min.js.relpath"),get_showtime("TableTools.min.js"));
					}

				$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
				$colourSchemeDataArray=$MiniComponents->triggerEvent('00021',$componentArgs); // Get the colour scheme
				
				
				if (!file_exists(get_showtime("module_popup.js.abspath").get_showtime("module_popup.js")))
					{
					$module_popup_str = '
					var module_pop_ajax_url = "'.JOMRES_SITEPAGE_URL_AJAX.'&task=module_popup&nofollowtmpl=1&id=";
					';
					$fp=fopen(get_showtime("module_popup.js.abspath").get_showtime("module_popup.js"),'w');
					fwrite($fp, $module_popup_str );
					fclose($fp);
					}
				jomres_cmsspecific_addheaddata("javascript",get_showtime("module_popup.js.relpath"),get_showtime("module_popup.js"));
				}
			}
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