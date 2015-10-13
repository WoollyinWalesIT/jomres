<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00004a_init_javascript_css_files
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false; return;
			}
		
		if ( !defined( "JOMRES_JSCALLED" ) )
			define ( 'JOMRES_JSCALLED', 1 );
		else
			return;

		if ( AJAXCALL )
			return;
		
		if ( defined( JOMRES_NOHTML ) )
			return;
		
		
		if ( !isset( $jrConfig[ 'load_jquery_ui' ] ) ) $jrConfig[ 'load_jquery_ui' ] = "1";
		if ( !isset( $jrConfig[ 'load_jquery_ui_css' ] ) ) $jrConfig[ 'load_jquery_ui_css' ] = "1";
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$management_view = jomresGetParam( $_REQUEST, 'tmpl', false );

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if ( !isset( $jrConfig[ 'jquery_ui_theme_detected' ] ) ) 
			$jrConfig[ 'jquery_ui_theme_detected' ] = "jomres^jquery-ui.css";

		$themeArr = explode( "^", $jrConfig[ 'jquery_ui_theme_detected' ] );
		$subdir   = $themeArr[ 0 ];
		$filename = $themeArr[ 1 ];

		// 7.2.7 jq ui theme update means the .css filename's been changed. We'll check the current setting, if it includes 'custom' then it's an older setting and we'll change the filename automatically to jquery-ui.css
		if ( strpos( $filename, "custom" ) )
			{
			$filename = "jquery-ui.css";
			}

		if ( isset( $themeArr[ 2 ] ) ) 
			$themePath = $themeArr[ 2 ] . "/";
		else
			$themePath = JOMRES_ROOT_DIRECTORY.'/css/jquery_ui_themes/' . $subdir . '/';
		
		$MiniComponents->triggerEvent( '00021', $componentArgs ); // Get the colour scheme

		$css_files = array();
		$javascript_files = array();

		if ( $jrConfig[ 'load_jquery_ui' ] == "1" && !$management_view)
			{
			if ( $jrConfig[ 'load_jquery_ui_css' ] == "1" ) 
				{
				jomres_cmsspecific_addheaddata( "css", $themePath, $filename ); // Not minified due to how it's background images are stored
				//$css_files[]= array( $themePath, $filename);
				}
			}
		
		if ( jomres_cmsspecific_areweinadminarea() ) // Regardless of the frontend setting, if we're in the admin area, we'll need the jquery UI
			{
			jomres_cmsspecific_addheaddata( "css", $themePath, $filename );
			//$css_files[]= array( $themePath, $filename);
			}

		
		if ( !isset( $jrConfig[ 'jquery18_2_switch' ] ) )
			{
			$jrConfig[ 'jquery18_2_switch' ] = 0; // By default the 19_2 switch will be set to No, so that jq 1.8 will be loaded.
			}
		
		
		if ( $jrConfig[ 'jquery18_2_switch' ] == "1" ) 
			{
			if ( jomres_cmsspecific_areweinadminarea() || ( $jrConfig[ 'load_jquery' ] == "1" && !$management_view ) )
				{
				if ( _JOMRES_DETECTED_CMS != "joomla33" && _JOMRES_DETECTED_CMS != "joomla34" && _JOMRES_DETECTED_CMS != "wordpress3" )
					$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/", 'jquery-2.0.3.js');
				}
			}
		else
			{
			if ( jomres_cmsspecific_areweinadminarea() || ( $jrConfig[ 'load_jquery' ] == "1" && !$management_view ) )
				{
				if ( _JOMRES_DETECTED_CMS != "joomla33" && _JOMRES_DETECTED_CMS != "joomla34" && _JOMRES_DETECTED_CMS != "wordpress3" )
					$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery-1.11.1.js');
				}
			}
			
		if ( jomres_cmsspecific_areweinadminarea() || ( $jrConfig[ 'load_jquery_ui' ] == "1" && !$management_view ) )
			{
			$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery-ui.js");
			}
		
		if ( jomres_cmsspecific_areweinadminarea() && (this_cms_is_wordpress() || _JOMRES_DETECTED_CMS == "joomla25") )
			{
			jomres_cmsspecific_addheaddata( "css", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/css/', 'jomres_bootstrap_wrapper.css' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-modal.js' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-tooltip.js' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-popover.js' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-collapse.js' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-dropdown.js' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-tab.js' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'bootstrap-transition.js' );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/jomres_bootstrap_wrapper/js/', 'jomres_bootstrap_wrapper.js' );
			}
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jomres.js");
		
		$jomreslang = jomres_singleton_abstract::getInstance( 'jomres_language' );
		define( "JOMRESDATEPICKERLANG", $jomreslang->datepicker_crossref[ $jomreslang->lang ] );
		$datepicker_localisation_file = 'jquery.ui.datepicker-' . JOMRESDATEPICKERLANG . '.js';
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/jquery-ui-cal-localisation/", $datepicker_localisation_file);
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.validate.js");
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.rating.js");
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.tipsy.js");
		
		if (!isset( $jrConfig[ 'load_font_awesome' ]))
			$jrConfig[ 'load_font_awesome' ] = "0";
		
		if ( $jrConfig[ 'load_font_awesome' ] == "1" || jomres_cmsspecific_areweinadminarea() )
			$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/", "font-awesome.min.css");

		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.chainedSelects.js");
		
		if (!isset($jrConfig['live_scrolling_enabled']))
			$jrConfig['live_scrolling_enabled'] = "1";
		
		if ($jrConfig['live_scrolling_enabled'] == "1")
			$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.livequery.js");
		
		if ( $thisJRUser->userIsRegistered || jomres_cmsspecific_areweinadminarea() )
			{
			$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "datatables.min.js");
			$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/", "datatables.css");
			}
			
		if ( !using_bootstrap() )
			{
			$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.ui.potato.menu.js");
			$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/", "jquery.ui.potato.menu.css");
			$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.cookee.for_tabs.js");
			}

		
		
		if ( !using_bootstrap() )
			{
			if ( $thisJRUser->userIsManager || jomres_cmsspecific_areweinadminarea() )
				{
				$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/x-editable/jqueryui-editable/js/", "jqueryui-editable.js");
				$css_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/x-editable/jqueryui-editable/css/","jqueryui-editable.css");
				}
			$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.bt.js");
			}
		else
			{
			if ( $thisJRUser->userIsManager || jomres_cmsspecific_areweinadminarea() )
				{
				$tail = "";
				if (jomres_bootstrap_version() == "3" && !jomres_cmsspecific_areweinadminarea() )
					$tail = "_bs3";
				$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/x-editable/bootstrap-editable/js/","bootstrap-editable".$tail.".min.js");
				$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/javascript/x-editable/bootstrap-editable/css/", "bootstrap-editable".$tail.".css");
				}
			}
		
		if (get_showtime ( "task" ) == "media_centre" || $_REQUEST["task"] == "media_centre" )
			{
			$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/",  "jquery.fileupload-ui.css");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "load-image.min.js");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "canvas-to-blob.min.js");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "jquery.iframe-transport.js");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "jquery.fileupload.js");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "jquery.fileupload-process.js");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "jquery.fileupload-image.js");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "jquery.fileupload-validate.js");
			$javascript_files[]= array(JOMRES_ROOT_DIRECTORY."/javascript/media_centre/", "tmpl.min.js");
			}
			
			
		/* if ( 
			using_bootstrap() && 
			!jomres_cmsspecific_areweinadminarea() &&
			( $thisJRUser->userIsManager ) ||
			( $thisJRUser->userIsRegistered && get_showtime("task") == 'registerProp_step1' ) ||
			( $thisJRUser->userIsRegistered && get_showtime("task") == 'registerProp_step2' )
			)
			{
			if ( $_GET[ 'tmpl' ] == get_showtime("tmplcomponent") )
				{
				$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/',"bootstrap-tour-standalone.js");
				}
			else
				{
				$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "bootstrap-tour.js");
				}
			}*/
		
		$ls = jomresGetDomain();
		if ( stristr( $ls, ".xn--", $ls ) && !jomres_cmsspecific_areweinadminarea() ) // We check to see if we're in the admin area because our one and only client with an umlat in the domain name has found that the redirect function doesn't work in the administrator area if the domain's been converted.
			{
			require_once( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'idna_converter' . JRDS . 'idna_convert.class.php' );
			$IDN = new jomres_idna_convert();
			$ls  = $IDN->decode( $ls );
			}
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( get_showtime('property_uid') );
		
		$live_scrolling_enabled = "true";
		if ( $jrConfig['live_scrolling_enabled'] == "0")
			$live_scrolling_enabled = "false";
		
		$misc_url_defs = '
			var live_site_ajax = "'.JOMRES_SITEPAGE_URL_AJAX.'";
			var compare_url = "'.JOMRES_SITEPAGE_URL_NOSEF . "&task=compare" .'";
			var path_to_jomres_dir = "'.get_showtime( 'live_site' ).'";
			var module_pop_ajax_url = "'.JOMRES_SITEPAGE_URL_AJAX . '&task=module_popup&nofollowtmpl=1&id=";
			';
		
		$template_dir = find_plugin_template_directory();
		
		if (jomres_cmsspecific_areweinadminarea() && $template_dir != 'jquery_ui')
			$template_dir = 'bootstrap';
			
		$misc_url_defs .= '
			var jomres_template_version = "'.$template_dir.'";
			var property_reviews_ajax_url = "'.JOMRES_SITEPAGE_URL_AJAX . '&task=show_property_reviews&nofollowtmpl=1&property_uid=";
			
			var JOMRES_ROOT_DIRECTORY = "' . JOMRES_ROOT_DIRECTORY.'";
			var live_scrolling_enabled = ' . $live_scrolling_enabled.';
			
			var dataTables_sEmptyTable		= "'. jr_gettext( 'DATATABLES_SEMPTYTABLE', DATATABLES_SEMPTYTABLE, false ).'";
			var dataTables_sInfo			= "'. jr_gettext( 'DATATABLES_SINFO', DATATABLES_SINFO, false ).'";
			var dataTables_sInfoEmpty		= "'. jr_gettext( 'DATATABLES_SINFOEMPTY', DATATABLES_SINFOEMPTY, false ).'";
			var dataTables_sInfoFiltered	= "'. jr_gettext( 'DATATABLES_SINFOFILTERED', DATATABLES_SINFOFILTERED, false ).'";
			var dataTables_sInfoPostFix		= "'. jr_gettext( 'DATATABLES_SINFOPOSTFIX', DATATABLES_SINFOPOSTFIX, false ).'";
			var dataTables_sInfoThousands	= "'. jr_gettext( 'DATATABLES_SINFOTHOUSANDS', DATATABLES_SINFOTHOUSANDS, false ).'";
			var dataTables_sLengthMenu		= "'. jr_gettext( 'DATATABLES_SLENGTHMENU', DATATABLES_SLENGTHMENU, false ).'";
			var dataTables_sLoadingRecords	= "'. jr_gettext( 'DATATABLES_SLOADINGRECORDS', DATATABLES_SLOADINGRECORDS, false ).'";
			var dataTables_sProcessing		= "'. jr_gettext( 'DATATABLES_SPROCESSING', DATATABLES_SPROCESSING, false ).'";
			var dataTables_sSearch			= "'. jr_gettext( 'DATATABLES_SSEARCH', DATATABLES_SSEARCH, false ).'";
			var dataTables_sZeroRecords		= "'. jr_gettext( 'DATATABLES_SZERORECORDS', DATATABLES_SZERORECORDS, false ).'";
			var dataTables_sFirst			= "'. jr_gettext( 'DATATABLES_SFIRST', DATATABLES_SFIRST, false ).'";
			var dataTables_sLast			= "'. jr_gettext( 'DATATABLES_SLAST', DATATABLES_SLAST, false ).'";
			var dataTables_sNext			= "'. jr_gettext( 'DATATABLES_SNEXT', DATATABLES_SNEXT, false ).'";
			var dataTables_sPrevious		= "'. jr_gettext( 'DATATABLES_SPREVIOUS', DATATABLES_SPREVIOUS, false ).'";
			var dataTables_sSortAscending	= "'. jr_gettext( 'DATATABLES_SSORTASCENDING', DATATABLES_SSORTASCENDING, false ).'";
			var dataTables_sSortDescending	= "'. jr_gettext( 'DATATABLES_SSORTDESCENDING', DATATABLES_SSORTDESCENDING, false ).'";
			var dataTables_showhide			= "'. jr_gettext( 'DATATABLES_SHOWHIDE', DATATABLES_SHOWHIDE, false ).'";

			';

		if ( ( !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ) || $_SERVER['SERVER_PORT'] == 443)// We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
			{
			$temp_file =  $ls . "_ssl_" . get_showtime( 'lang' ) ."_". $current_property_details->property_type."_";
			}
		else
			{
			$temp_file =  $ls . "_" . get_showtime( 'lang' ) ."_". $current_property_details->property_type."_";
			}
		
		if (jomres_cmsspecific_areweinadminarea())
			$temp_file .= '_misc_url_defs_admin.js';
		else
			$temp_file .= '_misc_url_defs.js';
		
		if (!file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . $temp_file ))
			file_put_contents(  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . $temp_file , $misc_url_defs );
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/temp/" ,$temp_file );
		
		//if ( $jrConfig[ 'javascript_caching_enabled' ] =="0")
			//{
			foreach ( $javascript_files as $file)
				{
				jomres_cmsspecific_addheaddata( "javascript",$file[0] , $file[1] );
				}
			//}
		//else
			//{
//			jr_import('jomres_javascript_cache');
//			$jomres_javascript_cache = new jomres_javascript_cache();
//			$jomres_javascript_cache->cache_javascript($javascript_files);
//			}
		
		//if ( $jrConfig[ 'css_caching_enabled' ] =="0")
			//{
			foreach ( $css_files as $file)
				{
				jomres_cmsspecific_addheaddata( "css",$file[0] , $file[1] );
				}
			//}
		//else
//			{
//			jr_import('jomres_css_cache');
//			$jomres_css_cache = new jomres_css_cache();
//			$jomres_css_cache->cache_css($css_files);
//			}
		
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
		
	function delete_old_md5s($folder) 
		{
		$olddate=time()-3600;
		$dircontent = scandir($folder);
		foreach($dircontent as $filename) 
			{
			if (strlen($filename)==32 && filemtime($folder.$filename) && filemtime($folder.$filename)<$olddate) 
				unlink($folder.$filename);
			}
		}

	function md5_of_dir($folder) 
		{
		$dircontent = scandir($folder);
		$ret='';
		foreach($dircontent as $filename) 
			{
			if ($filename != '.' && $filename != '..') 
				{
				if (filemtime($folder.$filename) === false) 
					return false;
			  $ret.=date("YmdHis", filemtime($folder.$filename)).$filename;
				}
			}
		return md5($ret);
		}
	}


?>