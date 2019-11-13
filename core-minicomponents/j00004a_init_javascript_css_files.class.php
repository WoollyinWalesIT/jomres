<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
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

		$themePath = JOMRES_NODE_MODULES_RELPATH.'jquery-ui-themes/themes/'.$jrConfig[ 'jquery_ui_theme' ].'/';

		$MiniComponents->triggerEvent('00021', $componentArgs); // Get the colour scheme

		$css_files = array();
		$javascript_files = array();

		if (jomres_cmsspecific_areweinadminarea() || $jrConfig[ 'load_jquery_ui' ] == '1' && !$management_view) {
			jomres_cmsspecific_addheaddata('css', $themePath, 'jquery-ui.min.css');
		}

		if (jomres_cmsspecific_areweinadminarea() || ($jrConfig[ 'load_jquery_ui' ] == '1' && !$management_view)) {
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'jquery-ui-dist/', 'jquery-ui.min.js');
		}

		if (jomres_cmsspecific_areweinadminarea()) {
			if (_JOMRES_DETECTED_CMS != 'joomla4') {
				$css_files[] = array(JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/css/', 'jomres_bootstrap_wrapper.css');
			}
			
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

		$javascript_files[] = array(JOMRES_JS_RELPATH, 'jomres.js');

		$datepicker_localisation_file = 'datepicker-'.get_showtime('datepicker_lang').'.js';

		$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'jquery-ui/ui/i18n/', $datepicker_localisation_file);

		$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'jquery-validation/dist/', 'jquery.validate.min.js');

		$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'jquery-star-rating-plugin/', 'jquery.rating.pack.js');

		$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'jquery.tipsy/src/', 'jquery.tipsy.js');
		
		$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'bootstrap-notify/', 'bootstrap-notify.min.js');

		if (!isset($jrConfig[ 'load_font_awesome' ])) {
			$jrConfig[ 'load_font_awesome' ] = '0';
		}

		if ($jrConfig[ 'load_font_awesome' ] == '1' || jomres_cmsspecific_areweinadminarea()) {
			$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'font-awesome/css/', 'font-awesome.min.css');
		}

		//$javascript_files[] = array(JOMRES_JS_RELPATH, 'jquery.chainedSelects.js');

		if (!isset($jrConfig['live_scrolling_enabled'])) {
			$jrConfig['live_scrolling_enabled'] = '1';
		}

		if ($jrConfig['live_scrolling_enabled'] == '1') {
			$javascript_files[] = array(JOMRES_JS_RELPATH, 'jquery.livequery.js');
		}

		if ($thisJRUser->userIsRegistered || jomres_cmsspecific_areweinadminarea()) {
			if (_JOMRES_DETECTED_CMS != 'joomla4') {
				$javascript_files[] = array(JOMRES_JS_RELPATH, 'datatables.min.js');
				$css_files[] = array(JOMRES_CSS_RELPATH, 'datatables.css');
			} else {
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net/js/', 'jquery.dataTables.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-bs4/js/', 'dataTables.bootstrap4.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-buttons/js/', 'dataTables.buttons.min.js');
				$javascript_files[] = array(JOMRES_JS_RELPATH, 'jszip.min.js');
				$javascript_files[] = array(JOMRES_JS_RELPATH, 'pdfmake.min.js');
				$javascript_files[] = array(JOMRES_JS_RELPATH, 'vfs_fonts.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-buttons/js/', 'dataTables.buttons.min.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-buttons/js/', 'buttons.print.min.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-buttons/js/', 'buttons.html5.min.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-buttons/js/', 'buttons.colVis.min.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-buttons-bs4/js/', 'buttons.bootstrap4.min.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-responsive/js/', 'dataTables.responsive.min.js');
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-responsive-bs4/js/', 'responsive.bootstrap4.min.js');
				
				$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-bs4/css/', 'dataTables.bootstrap4.css');
				$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-buttons-bs4/css/', 'buttons.bootstrap4.min.css');
				$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'datatables.net-responsive-bs4/css/', 'responsive.bootstrap4.min.css');
			}
		}

		if (!using_bootstrap()) {
			$javascript_files[] = array(JOMRES_JS_RELPATH, 'jquery.ui.potato.menu.js');
			$css_files[] = array(JOMRES_CSS_RELPATH, 'jquery.ui.potato.menu.css');
		}

		if (!using_bootstrap()) {
			//if ($thisJRUser->userIsManager || jomres_cmsspecific_areweinadminarea()) {
				$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'x-editable/dist/jqueryui-editable/js/', 'jqueryui-editable.min.js');
				$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'x-editable/dist/jqueryui-editable/css/', 'jqueryui-editable.css');
			//}
			$javascript_files[] = array(JOMRES_JS_RELPATH, 'jquery.bt.js');
		} else {
			//if ($thisJRUser->userIsManager || jomres_cmsspecific_areweinadminarea()) {
				$tail = jomres_bootstrap_version();
				if ($tail == '4' ) {
					$javascript_files[] = array(JOMRES_JS_RELPATH , 'bootstrap4-editable.js');
					$css_files[] = array(JOMRES_CSS_RELPATH , 'bootstrap4-editable.css');
				} else {
					if ($tail == '2' || jomres_cmsspecific_areweinadminarea()) {
						$tail = '';
					}
					
					if (_JOMRES_DETECTED_CMS == 'joomla4') {
						$tail = '3';
					}

					$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'x-editable/dist/bootstrap'.$tail.'-editable/js/', 'bootstrap-editable.min.js');
					$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'x-editable/dist/bootstrap'.$tail.'-editable/css/', 'bootstrap-editable.css');
					}
				//}
			}

		if (get_showtime('task') == 'media_centre' || jomresGetParam($_REQUEST, 'task', '') == 'media_centre') {
			$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/css/',  'jquery.fileupload.css');
			$css_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/css/',  'jquery.fileupload-ui.css');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-load-image/js/', 'load-image.all.min.js');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-canvas-to-blob/js/', 'canvas-to-blob.js');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/js/', 'jquery.iframe-transport.js');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/js/', 'jquery.fileupload.js');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/js/', 'jquery.fileupload-ui.js');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/js/', 'jquery.fileupload-process.js');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/js/', 'jquery.fileupload-image.js');
			$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'blueimp-file-upload/js/', 'jquery.fileupload-validate.js');
		}

		//galleria js and css files TODO: find a better solution
		$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'galleria/dist/', 'galleria.min.js');
		$javascript_files[] = array(JOMRES_NODE_MODULES_RELPATH.'galleria/dist/themes/classic/', 'galleria.classic.min.js');
		$css_files[] = array(JOMRES_CSS_RELPATH, 'galleria.classic.css');

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
