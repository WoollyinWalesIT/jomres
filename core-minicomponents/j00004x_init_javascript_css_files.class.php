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
class j00004x_init_javascript_css_files
	{

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00004x_init_javascript_css_files( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		if ( !defined( "JOMRES_JSCALLED" ) )
			{
			define ( 'JOMRES_JSCALLED', 1 );
			}
		else
		return;

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

		// Include all the various css & javascript files we need
		if ( !AJAXCALL )
			{
			if ( !defined( JOMRES_NOHTML ) )
				{
				if ( !isset( $jrConfig[ 'load_jquery_ui' ] ) ) $jrConfig[ 'load_jquery_ui' ] = "1";

				if ( !isset( $jrConfig[ 'load_jquery_ui_css' ] ) ) $jrConfig[ 'load_jquery_ui_css' ] = "1";

				if ( $jrConfig[ 'load_jquery_ui' ] == "1" )
					{
					if ( $jrConfig[ 'load_jquery_ui_css' ] == "1" ) jomres_cmsspecific_addheaddata( "css", get_showtime( "jquery.ui.theme.relpath" ), get_showtime( "jquery.ui.theme" ), $skip = true );
					}

				if ( jomres_cmsspecific_areweinadminarea() ) // Regardless of the frontend setting, if we're in the admin area, we'll need the jquery UI
				jomres_cmsspecific_addheaddata( "css", get_showtime( "jquery.ui.theme.relpath" ), get_showtime( "jquery.ui.theme" ), $skip = true );


				if ( jomres_cmsspecific_areweinadminarea() )
					{
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.core.js.relpath" ), get_showtime( "jquery.core.js" ) ); // The order here is important, jquery must come before the ui
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.ui.js.relpath" ), get_showtime( "jquery.ui.js" ) );
					}
				elseif ( $jrConfig[ 'load_jquery' ] == "1" )
					{
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.core.js.relpath" ), get_showtime( "jquery.core.js" ) );
					}

				jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jomres.js.relpath" ), get_showtime( "jomres.js" ) ); // Needs to be directly after jquery call so that noconflict is set

				if ( $jrConfig[ 'load_jquery_ui' ] == "1" )
					{
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.ui.js.relpath" ), get_showtime( "jquery.ui.js" ) );
					}

				jomres_cmsspecific_addheaddata( "javascript", get_showtime( "datepicker_localisation_file.relpath" ), get_showtime( "datepicker_localisation_file" ), true );

				//jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.cookee.js.relpath"),get_showtime("jquery.cookee.js"));
				//jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.cookee.for_tabs.js.relpath"),get_showtime("jquery.cookee.for_tabs.js"));
				//jomres_cmsspecific_addheaddata("javascript",get_showtime("heartbeat.js.relpath"),get_showtime("heartbeat.js"));
				//jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.hoverIntent.js.relpath"),get_showtime("jquery.hoverIntent.js"));
				//jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.validate.js.relpath"),get_showtime("jquery.validate.js"));
				//jomres_cmsspecific_addheaddata("javascript",get_showtime("excanvas.js.relpath"),get_showtime("excanvas.js"));
				//jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.chainedSelects.js.relpath"),get_showtime("jquery.chainedSelects.js"));

				// Tipsy tooltips were added to Jomres 7.2.8 because beautytips don't work in jquery 1.9.2
				jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.tipsy.js.relpath" ), get_showtime( "jquery.tipsy.js" ) );
				jomres_cmsspecific_addheaddata( "css", get_showtime( "tipsy.css.relpath" ), get_showtime( "tipsy.css" ) );

				//jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.easing.compatibility.js.relpath"),get_showtime("jquery.easing.compatibility.js"));

				// This contains the contents of the commented out scripts above, all in one file
				//jomres_cmsspecific_addheaddata("javascript",get_showtime("jomres_consolidated_files.js.relpath"),get_showtime("jomres_consolidated_files.js"));

				// And this is that file, minified
				jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jomres_consolidated_files_min.js.relpath" ), get_showtime( "jomres_consolidated_files_min.js" ) );

				if ( $thisJRUser->userIsRegistered )
					{
					//jomres_cmsspecific_addheaddata("javascript",get_showtime("jquery.jeditable.js.relpath"),get_showtime("jquery.jeditable.js")); // replaced with x-editable below

					$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
					if ( !isset( $tmpBookingHandler->user_settings[ 'editing_on' ] ) ) $tmpBookingHandler->user_settings[ 'editing_on' ] = false;

					if ( $tmpBookingHandler->user_settings[ 'editing_on' ] == true || jomres_cmsspecific_areweinadminarea() )
						{
						jomres_cmsspecific_addheaddata( "javascript", get_showtime( "x-editable.js.relpath" ), get_showtime( "x-editable.js" ) );
						jomres_cmsspecific_addheaddata( "css", get_showtime( "x-editable.css.relpath" ), get_showtime( "x-editable.css" ) );
						}

					jomres_cmsspecific_addheaddata( "css", get_showtime( "TableTools_JUI.css.relpath" ), get_showtime( "TableTools_JUI.css" ) );
					jomres_cmsspecific_addheaddata( "css", get_showtime( "tables_jui.css.relpath" ), get_showtime( "tables_jui.css" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.dataTables.min.js.relpath" ), get_showtime( "jquery.dataTables.min.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "TableTools.min.js.relpath" ), get_showtime( "TableTools.min.js" ) );
					}

				if ( using_bootstrap() )
					{
					if ( $thisJRUser->userIsRegistered )
						{
						jomres_cmsspecific_addheaddata( "css", get_showtime( "DT_bootstrap.css.relpath" ), get_showtime( "DT_bootstrap.css" ) );
						jomres_cmsspecific_addheaddata( "javascript", get_showtime( "DT_bootstrap.js.relpath" ), get_showtime( "DT_bootstrap.js" ) );
						
						jomres_cmsspecific_addheaddata( "javascript", get_showtime( "ColVis.min.js.relpath" ), get_showtime( "ColVis.min.js" ) );
						jomres_cmsspecific_addheaddata( "css", get_showtime( "ColVis.css.relpath" ), get_showtime( "ColVis.css" ) );
						}
					}
				else
					{
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.ui.potato.menu.js.relpath" ), get_showtime( "jquery.ui.potato.menu.js" ) );
					jomres_cmsspecific_addheaddata( "css", get_showtime( "jquery.ui.potato.menu.css.relpath" ), get_showtime( "jquery.ui.potato.menu.css" ) );
					}
				
				$MiniComponents        = jomres_singleton_abstract::getInstance( 'mcHandler' );
				$colourSchemeDataArray = $MiniComponents->triggerEvent( '00021', $componentArgs ); // Get the colour scheme

				if ( !file_exists( get_showtime( "misc_url_defs.js.abspath" ) . get_showtime( "misc_url_defs.js" ) ) )
					{
					$livesite_ajax = '
					var live_site_ajax = \'' . JOMRES_SITEPAGE_URL_AJAX . '\';
					';
					$compare_url   = '
					var compare_url = \'' . jomresURL( JOMRES_SITEPAGE_URL . "&task=compare" ) . '\';
					';
					$compare_url .= '
					var path_to_jomres_dir = \'' . get_showtime( 'live_site' ) . '/\';
					';
					$module_popup_str = '
					var module_pop_ajax_url = "' . JOMRES_SITEPAGE_URL_AJAX . '&task=module_popup&nofollowtmpl=1&id=";
					';
					file_put_contents( get_showtime( "misc_url_defs.js.abspath" ) . get_showtime( "misc_url_defs.js" ), $livesite_ajax . $compare_url . $module_popup_str);
					}
				jomres_cmsspecific_addheaddata( "javascript", get_showtime( "misc_url_defs.js.relpath" ), get_showtime( "misc_url_defs.js" ) );
				//add_gmaps_source();

				if (get_showtime ( "task" ) == "media_centre")
					{
					jomres_cmsspecific_addheaddata( "css", get_showtime( "jquery.fileupload-ui.css.relpath" ), get_showtime( "jquery.fileupload-ui.css" ) );

					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "load-image.min.js.relpath" ), get_showtime( "load-image.min.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "canvas-to-blob.min.js.relpath" ), get_showtime( "canvas-to-blob.min.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.iframe-transport.js.relpath" ), get_showtime( "jquery.iframe-transport.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.fileupload.js.relpath" ), get_showtime( "jquery.fileupload.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.fileupload-process.js.relpath" ), get_showtime( "jquery.fileupload-process.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.fileupload-image.js.relpath" ), get_showtime( "jquery.fileupload-image.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.fileupload-validate.js.relpath" ), get_showtime( "jquery.fileupload-validate.js" ) );
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.fileupload-validate.js.relpath" ), get_showtime( "tmpl.min.js" ) );
					}
				
				 if (using_bootstrap())
					{
					jomres_cmsspecific_addheaddata( "javascript", get_showtime( "bootstrap-tour.js.relpath" ), get_showtime( "bootstrap-tour.js" ) );
					//jomres_cmsspecific_addheaddata( "javascript", get_showtime( "jquery.cookie.js.relpath" ), get_showtime( "jquery.cookie.js" ) );
					}
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