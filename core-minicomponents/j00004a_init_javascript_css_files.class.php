<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
 *
 * @package Jomres
#
 */
class j00004a_init_javascript_css_files
	{

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00004a_init_javascript_css_files( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		if ( defined( "JOMRES_JSCALLED" ) ) return;

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if ( !isset( $jrConfig[ 'jquery_ui_theme_detected' ] ) ) $jrConfig[ 'jquery_ui_theme_detected' ] = "jomres^jquery-ui.css";

		$themeArr = explode( "^", $jrConfig[ 'jquery_ui_theme_detected' ] );
		$subdir   = $themeArr[ 0 ];
		$filename = $themeArr[ 1 ];

		// 7.2.7 jq ui theme update means the .css filename's been changed. We'll check the current setting, if it includes 'custom' then it's an older setting and we'll change the filename automatically to jquery-ui.css
		if ( strpos( $filename, "custom" ) )
			{
			$filename = "jquery-ui.css";
			}

		if ( isset( $themeArr[ 2 ] ) ) $themePath = $themeArr[ 2 ] . "/";
		else
		$themePath = 'jomres/css/jquery_ui_themes/' . $subdir . '/';

		set_showtime( "jquery.ui.theme", $filename );
		set_showtime( "jquery.ui.theme.relpath", $themePath );

		set_showtime( "tables_jui.css", "tables_jui.css" );
		set_showtime( "tables_jui.css.relpath", "jomres/css/" );

		if ( using_bootstrap() )
			{
			set_showtime( "DT_bootstrap.css", "DT_bootstrap.css" );
			set_showtime( "DT_bootstrap.css.relpath", "jomres/css/" );

			set_showtime( "DT_bootstrap.js", "datatables_pagination.js" );
			set_showtime( "DT_bootstrap.js.relpath", "jomres/javascript/" );

			set_showtime( "tables_jui.css", "" );
			set_showtime( "tables_jui.css.relpath", "jomres/css/" );
			}

		$jomreslang = jomres_singleton_abstract::getInstance( 'jomres_language' );
		define( "JOMRESDATEPICKERLANG", $jomreslang->datepicker_crossref[ $jomreslang->lang ] );
		$datepicker_localisation_file = 'jquery.ui.datepicker-' . JOMRESDATEPICKERLANG . '.js';

		$management_view = jomresGetParam( $_REQUEST, 'tmpl', false );

		if ( _JOMRES_DETECTED_CMS != "joomla30" && _JOMRES_DETECTED_CMS != "joomla31" && _JOMRES_DETECTED_CMS != "joomla32" || _JOMRES_DETECTED_CMS == "joomla33")
			{
			if ( !isset( $jrConfig[ 'jquery18_2_switch' ] ) ) $jrConfig[ 'jquery18_2_switch' ] = 0; // By default the 19_2 switch will be set to No, so that jq 1.8 will be loaded.

			if ( $jrConfig[ 'jquery18_2_switch' ] == "1" ) 
				{
				set_showtime( "jquery.core.js", 'jquery-2.0.3.min.js' );
				}
			else
				{
				set_showtime( "jquery.core.js", 'jquery-1.8.2.min.js' );
				}
			set_showtime( "jquery.core.js.relpath", 'jomres/javascript/' );
			}

		set_showtime( "jquery.ui.js", "jquery-ui-1.9.2.custom.min.js" );
		set_showtime( "jquery.ui.js.relpath", 'jomres/javascript/' );

		if ( !using_bootstrap() )
			{
			set_showtime( "jquery.ui.potato.menu.css", "jquery.ui.potato.menu.css" );
			set_showtime( "jquery.ui.potato.menu.css.relpath", "jomres/css/" );

			set_showtime( "jquery.cookee.for_tabs.js", "jquery.cookee.for_tabs.js" );
			set_showtime( "jquery.cookee.for_tabs.js.relpath", "jomres/javascript/" );
			}

		set_showtime( "jomres.js", "jomres.js" );
		set_showtime( "jomres.js.relpath", "jomres/javascript/" );

		set_showtime( "datepicker_localisation_file", $datepicker_localisation_file );
		set_showtime( "datepicker_localisation_file.relpath", "jomres/javascript/jquery-ui-cal-localisation/" );

		set_showtime( "jquery.cookee.js", "jquery.cookee.js" );
		set_showtime( "jquery.cookee.js.relpath", "jomres/javascript/" );

		set_showtime( "heartbeat.js", "heartbeat.js" );
		set_showtime( "heartbeat.js.relpath", "jomres/javascript/" );

		set_showtime( "jquery.bt.js", "jquery.bt.js" );
		set_showtime( "jquery.bt.js.relpath", "jomres/javascript/" );

		set_showtime( "jquery.hoverIntent.js", "jquery.hoverIntent.js" );
		set_showtime( "jquery.hoverIntent.js.relpath", "jomres/javascript/" );

		set_showtime( "jquery.validate.js", "jquery.validate.js" );
		set_showtime( "jquery.validate.js.relpath", "jomres/javascript/" );


		set_showtime( "jquery.tipsy.js", "jquery.tipsy.js" );
		set_showtime( "jquery.tipsy.js.relpath", "jomres/javascript/" );

		set_showtime( "tipsy.css", "tipsy.css" );
		set_showtime( "tipsy.css.relpath", "jomres/css/" );

		// Bootstrap toggle buttons
		if ( using_bootstrap() )
			{
			set_showtime( "jquery.toggle.buttons.js", "jquery.toggle.buttons.js" );
			set_showtime( "bootstrap-toggle-buttons.js.relpath", "jomres/javascript/bootstrap-toggle-buttons/js/" );

			set_showtime( "jquery.toggle.buttons.css", "jquery.toggle.buttons.css" );
			set_showtime( "jquery.toggle.buttons.css.relpath", "jomres/javascript/bootstrap-toggle-buttons/css/" );
			}

		if ( !using_bootstrap() )
			{

			set_showtime( "x-editable.js", "jqueryui-editable.min.js" );
			set_showtime( "x-editable.js.relpath", "jomres/javascript/x-editable/jqueryui-editable/js/" );

			
			set_showtime( "x-editable.css", "jqueryui-editable.css" );
			set_showtime( "x-editable.css.relpath", "jomres/javascript/x-editable/jqueryui-editable/css/" );
			}
		else
			{
			$tail = "";
			if (jomres_bootstrap_version() == "3")
				$tail = "_bs3";
			set_showtime( "x-editable.js", "bootstrap-editable".$tail.".min.js" );
			set_showtime( "x-editable.js.relpath", "jomres/javascript/x-editable/bootstrap-editable/js/" );

			set_showtime( "x-editable.css", "bootstrap-editable".$tail.".css" );
			set_showtime( "x-editable.css.relpath", "jomres/javascript/x-editable/bootstrap-editable/css/" );
			}

		set_showtime( "jquery.jeditable.js", "jquery.jeditable.js" );
		set_showtime( "jquery.jeditable.js.relpath", "jomres/javascript/" );

		set_showtime( "excanvas.js", "excanvas.js" );
		set_showtime( "excanvas.js.relpath", "jomres/javascript/" );

		set_showtime( "jquery.chainedSelects.js", "jquery.chainedSelects.js" );
		set_showtime( "jquery.chainedSelects.js.relpath", "jomres/javascript/" );

		set_showtime( "jquery.ui.potato.menu.js", "jquery.ui.potato.menu.js" );
		set_showtime( "jquery.ui.potato.menu.js.relpath", "jomres/javascript/" );

		set_showtime( "TableTools_JUI.css", "TableTools_JUI.css" );
		set_showtime( "TableTools_JUI.css.relpath", "jomres/css/" );

		set_showtime( "jquery.dataTables.min.js", "jquery.dataTables.min.js" );
		set_showtime( "jquery.dataTables.min.js.relpath", "jomres/javascript/" );

		set_showtime( "TableTools.min.js", "TableTools.min.js" );
		set_showtime( "TableTools.min.js.relpath", "jomres/javascript/" );
		
		set_showtime( "ColVis.min.js", "ColVis.min.js" );
		set_showtime( "ColVis.min.js.relpath", "jomres/javascript/" );
		
		set_showtime( "ColVis.css", "ColVis.css" );
		set_showtime( "ColVis.css.relpath", "jomres/css/" );

		set_showtime( "jquery.easing.compatibility.js", "jquery.easing.compatibility.js" );
		set_showtime( "jquery.easing.compatibility.js.relpath", "jomres/javascript/" );

		$ls = jomresGetDomain();
		if ( stristr( $ls, ".xn--", $ls ) && !jomres_cmsspecific_areweinadminarea() ) // We check to see if we're in the admin area because our one and only client with an umlat in the domain name has found that the redirect function doesn't work in the administrator area if the domain's been converted.
			{
			require_once( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'libraries' . JRDS . 'idna_converter' . JRDS . 'idna_convert.class.php' );
			$IDN = new jomres_idna_convert();
			$ls  = $IDN->decode( $ls );
			}
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( get_showtime('property_uid') );

		set_showtime( "misc_url_defs.js", $ls . "_" . get_showtime( 'lang' ) ."_". $current_property_details->property_type."_". "_misc_url_defs.js" ); // We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
		set_showtime( "misc_url_defs.js.abspath", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "jomres" . JRDS . "temp" . JRDS );
		set_showtime( "misc_url_defs.js.relpath", "jomres/temp/" );

		set_showtime( "jomres_consolidated_files.js", "jomres_consolidated_files.js" );
		set_showtime( "jomres_consolidated_files.js.relpath", "jomres/javascript/" );

		set_showtime( "jomres_consolidated_files_min.js", "jomres_consolidated_files_min.js" );
		set_showtime( "jomres_consolidated_files_min.js.relpath", "jomres/javascript/" );
		
		if (get_showtime ( "task" ) == "media_centre")
			{
			set_showtime( "jquery.fileupload-ui.css", "jquery.fileupload-ui.css" );
			set_showtime( "jquery.fileupload-ui.css.relpath",  "jomres/css/" );

			set_showtime( "load-image.min.js",                     "load-image.min.js" );
			set_showtime( "load-image.min.js.relpath",             "jomres/javascript/media_centre/" );
			set_showtime( "canvas-to-blob.min.js",                 "canvas-to-blob.min.js" );
			set_showtime( "canvas-to-blob.min.js.relpath",         "jomres/javascript/media_centre/" );
			set_showtime( "jquery.iframe-transport.js",            "jquery.iframe-transport.js" );
			set_showtime( "jquery.iframe-transport.js.relpath",    "jomres/javascript/media_centre/" );
			set_showtime( "jquery.fileupload.js",                  "jquery.fileupload.js" );
			set_showtime( "jquery.fileupload.js.relpath",          "jomres/javascript/media_centre/" );
			set_showtime( "jquery.fileupload-process.js",          "jquery.fileupload-process.js" );
			set_showtime( "jquery.fileupload-process.js.relpath",  "jomres/javascript/media_centre/" );
			set_showtime( "jquery.fileupload-image.js",            "jquery.fileupload-image.js" );
			set_showtime( "jquery.fileupload-image.js.relpath",    "jomres/javascript/media_centre/" );
			set_showtime( "jquery.fileupload-validate.js",         "jquery.fileupload-validate.js" );
			set_showtime( "jquery.fileupload-validate.js.relpath", "jomres/javascript/media_centre/" );
			set_showtime( "tmpl.min.js",							"tmpl.min.js" );
			set_showtime( "tmpl.min.js.relpath", 					"jomres/javascript/media_centre/" );
			}
			
		if (using_bootstrap())
			{
			if ( $_GET[ 'tmpl' ] == get_showtime("tmplcomponent") )
				set_showtime( "bootstrap-tour.js", "bootstrap-tour-standalone.min.js" );
			else
				set_showtime( "bootstrap-tour.js", "bootstrap-tour.min.js" );
			set_showtime( "bootstrap-tour.js.relpath", "jomres/javascript/" );
			
			//set_showtime( "jquery.cookie.js", "jquery.cookie.js" );
			//set_showtime( "jquery.cookie.js.relpath", "jomres/javascript/" );
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