<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.12
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00004a_init_javascript_css_files
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		if (AJAXCALL) {
            return true;
        }

        if (defined('JOMRES_NOHTML') && JOMRES_NOHTML == 1) {
            return true;
        }
		
		if (!defined('JOMRES_JSCALLED')) {
            define('JOMRES_JSCALLED', 1);
        } else {
            return true;
        }
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		$management_view = jomresGetParam($_REQUEST, 'tmpl', false);

        if (!isset($jrConfig[ 'load_jquery_ui' ])) {
            $jrConfig[ 'load_jquery_ui' ] = '1';
        }
        if (!isset($jrConfig[ 'load_jquery_ui_css' ])) {
            $jrConfig[ 'load_jquery_ui_css' ] = '1';
        }

		if (!isset($jrConfig[ 'jquery_ui_theme' ])) {
            $jrConfig[ 'jquery_ui_theme' ] = 'base';
        }
		
		if ($jrConfig[ 'jquery_ui_theme' ] == 'jomres') {
			$jrConfig[ 'jquery_ui_theme' ] = 'base';
		}

        $themePath = JOMRES_ROOT_DIRECTORY.'/css/jquery_ui_themes/'.$jrConfig[ 'jquery_ui_theme' ].'/';

        $MiniComponents->triggerEvent('00021', $componentArgs); // Get the colour scheme

        $css_files = array();
        $javascript_files = array();

        if ($jrConfig[ 'load_jquery_ui' ] == '1' && !$management_view) {
            if ($jrConfig[ 'load_jquery_ui_css' ] == '1') {
                jomres_cmsspecific_addheaddata('css', $themePath, 'jquery-ui.min.css'); // Not minified due to how it's background images are stored
            }
        }

        if (jomres_cmsspecific_areweinadminarea()) { // Regardless of the frontend setting, if we're in the admin area, we'll need the jquery UI
            jomres_cmsspecific_addheaddata('css', $themePath, 'jquery-ui.min.css');
        }

        if (jomres_cmsspecific_areweinadminarea() || ($jrConfig[ 'load_jquery_ui' ] == '1' && !$management_view)) {
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery-ui.min.js');
        }

        if (jomres_cmsspecific_areweinadminarea()) {
            $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/css/', 'jomres_bootstrap_wrapper.css');
			
			if (this_cms_is_wordpress()) {
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-modal.js');
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-tooltip.js');
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-popover.js');
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-collapse.js');
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-dropdown.js');
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-tab.js');
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-transition.js');
				$javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'jomres_bootstrap_wrapper.js');
			}
        }

        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jomres.js');

        $datepicker_localisation_file = 'jquery.ui.datepicker-'.get_showtime('datepicker_lang').'.js';

        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/jquery-ui-cal-localisation/', $datepicker_localisation_file);

        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.validate.js');

        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.rating.js');

        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.tipsy.js');

        if (!isset($jrConfig[ 'load_font_awesome' ])) {
            $jrConfig[ 'load_font_awesome' ] = '0';
        }

        if ($jrConfig[ 'load_font_awesome' ] == '1' || jomres_cmsspecific_areweinadminarea()) {
            $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/css/', 'font-awesome.min.css');
        }

        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.chainedSelects.js');

        if (!isset($jrConfig['live_scrolling_enabled'])) {
            $jrConfig['live_scrolling_enabled'] = '1';
        }

        if ($jrConfig['live_scrolling_enabled'] == '1') {
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.livequery.js');
        }

        if ($thisJRUser->userIsRegistered || jomres_cmsspecific_areweinadminarea()) {
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'datatables.min.js');
            $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/css/', 'datatables.css');
        }

        if (!using_bootstrap()) {
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.ui.potato.menu.js');
            $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/css/', 'jquery.ui.potato.menu.css');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.cookee.for_tabs.js');
        }

        if (!using_bootstrap()) {
            if ($thisJRUser->userIsManager || jomres_cmsspecific_areweinadminarea()) {
                $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/x-editable/jqueryui-editable/js/', 'jqueryui-editable.js');
                $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/x-editable/jqueryui-editable/css/', 'jqueryui-editable.css');
            }
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.bt.js');
        } else {
            if ($thisJRUser->userIsManager || jomres_cmsspecific_areweinadminarea()) {
                $tail = '';
                if (jomres_bootstrap_version() == '3' && !jomres_cmsspecific_areweinadminarea()) {
                    $tail = '_bs3';
                }
                $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/x-editable/bootstrap-editable/js/', 'bootstrap-editable'.$tail.'.min.js');
                $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/x-editable/bootstrap-editable/css/', 'bootstrap-editable'.$tail.'.css');
            }
        }

        if (get_showtime('task') == 'media_centre' || jomresGetParam($_REQUEST, 'task', '') == 'media_centre') {
            $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/css/',  'jquery.fileupload-ui.css');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'load-image.all.min.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'canvas-to-blob.min.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.iframe-transport.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload-process.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload-image.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload-validate.js');
        }

        //galleria js and css files TODO: find a better solution
        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria-1.4.2.min.js');
        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria.classic.min.js');
        $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria.classic.css');

        $ls = jomresGetDomain();
        if (stristr($ls, '.xn--', $ls) && !jomres_cmsspecific_areweinadminarea()) { // We check to see if we're in the admin area because our one and only client with an umlat in the domain name has found that the redirect function doesn't work in the administrator area if the domain's been converted.
            //require_once JOMRES_LIBRARIES_ABSPATH.'idna_converter'.JRDS.'idna_convert.class.php';
            $IDN = new Mso\IdnaConvert\IdnaConvert();
            $ls = $IDN->decode($ls);
        }

        //now let`s add the js and css in the head
        foreach ($javascript_files as $file) {
            jomres_cmsspecific_addheaddata('javascript', $file[0], $file[1]);
        }

        foreach ($css_files as $file) {
            jomres_cmsspecific_addheaddata('css', $file[0], $file[1]);
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
