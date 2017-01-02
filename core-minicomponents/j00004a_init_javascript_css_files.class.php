<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
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

        if (!defined('JOMRES_JSCALLED')) {
            define('JOMRES_JSCALLED', 1);
        } else {
            return true;
        }

        if (AJAXCALL == '1') {
            return true;
        }

        if (defined('JOMRES_NOHTML') && JOMRES_NOHTML == '1') {
            return true;
        }

        if (!isset($jrConfig[ 'load_jquery_ui' ])) {
            $jrConfig[ 'load_jquery_ui' ] = '1';
        }
        if (!isset($jrConfig[ 'load_jquery_ui_css' ])) {
            $jrConfig[ 'load_jquery_ui_css' ] = '1';
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $management_view = jomresGetParam($_REQUEST, 'tmpl', false);

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        if (!isset($jrConfig[ 'jquery_ui_theme_detected' ])) {
            $jrConfig[ 'jquery_ui_theme_detected' ] = 'jomres^jquery-ui.css';
        }

        $themeArr = explode('^', $jrConfig[ 'jquery_ui_theme_detected' ]);
        $subdir = $themeArr[ 0 ];
        $filename = $themeArr[ 1 ];

        // 7.2.7 jq ui theme update means the .css filename's been changed. We'll check the current setting, if it includes 'custom' then it's an older setting and we'll change the filename automatically to jquery-ui.css
        if (strpos($filename, 'custom')) {
            $filename = 'jquery-ui.css';
        }

        if (isset($themeArr[ 2 ])) {
            $themePath = $themeArr[ 2 ].'/';
        } else {
            $themePath = JOMRES_ROOT_DIRECTORY.'/css/jquery_ui_themes/'.$subdir.'/';
        }

        $MiniComponents->triggerEvent('00021', $componentArgs); // Get the colour scheme

        $css_files = array();
        $javascript_files = array();

        if ($jrConfig[ 'load_jquery_ui' ] == '1' && !$management_view) {
            if ($jrConfig[ 'load_jquery_ui_css' ] == '1') {
                jomres_cmsspecific_addheaddata('css', $themePath, $filename); // Not minified due to how it's background images are stored
                //$css_files[]= array( $themePath, $filename);
            }
        }

        if (jomres_cmsspecific_areweinadminarea()) { // Regardless of the frontend setting, if we're in the admin area, we'll need the jquery UI
            jomres_cmsspecific_addheaddata('css', $themePath, $filename);
            //$css_files[]= array( $themePath, $filename);
        }

        if (jomres_cmsspecific_areweinadminarea() || ($jrConfig[ 'load_jquery_ui' ] == '1' && !$management_view)) {
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery-ui.js');
        }

        if (jomres_cmsspecific_areweinadminarea() && this_cms_is_wordpress()) {
            $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/css/', 'jomres_bootstrap_wrapper.css');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-modal.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-tooltip.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-popover.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-collapse.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-dropdown.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-tab.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-transition.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'jomres_bootstrap_wrapper.js');
        }

        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/', 'jomres.js');

        $jomreslang = jomres_singleton_abstract::getInstance('jomres_language');
        define('JOMRESDATEPICKERLANG', $jomreslang->datepicker_crossref[ $jomreslang->lang ]);
        $datepicker_localisation_file = 'jquery.ui.datepicker-'.JOMRESDATEPICKERLANG.'.js';

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

        if (get_showtime('task') == 'media_centre' || $_REQUEST['task'] == 'media_centre') {
            $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/css/',  'jquery.fileupload-ui.css');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'load-image.min.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'canvas-to-blob.min.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.iframe-transport.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload-process.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload-image.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'jquery.fileupload-validate.js');
            $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/media_centre/', 'tmpl.min.js');
        }

        //galleria js and css files TODO: find a better solution
        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria-1.4.2.min.js');
        $javascript_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria.classic.min.js');
        $css_files[] = array(JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria.classic.css');

        $ls = jomresGetDomain();
        if (stristr($ls, '.xn--', $ls) && !jomres_cmsspecific_areweinadminarea()) { // We check to see if we're in the admin area because our one and only client with an umlat in the domain name has found that the redirect function doesn't work in the administrator area if the domain's been converted.
            require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'idna_converter'.JRDS.'idna_convert.class.php';
            $IDN = new jomres_idna_convert();
            $ls = $IDN->decode($ls);
        }

        jr_import('javascript_cache');
        $cache = new javascript_cache();
        $cache->cache_javascript($javascript_files);
        $javascript_files = $cache->get_files();

        //now let`s add the js and css in the head
        foreach ($javascript_files as $file) {
            jomres_cmsspecific_addheaddata('javascript', $file[0], $file[1]);
        }

        foreach ($css_files as $file) {
            jomres_cmsspecific_addheaddata('css', $file[0], $file[1]);
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
