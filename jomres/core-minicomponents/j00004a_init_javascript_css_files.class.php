<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
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

		if ( _JOMRES_DETECTED_CMS != "joomla30" && _JOMRES_DETECTED_CMS != "joomla31" && _JOMRES_DETECTED_CMS != "joomla32" && _JOMRES_DETECTED_CMS != "joomla33")
			{
			if ( !isset( $jrConfig[ 'jquery18_2_switch' ] ) )
				{
				$jrConfig[ 'jquery18_2_switch' ] = 0; // By default the 19_2 switch will be set to No, so that jq 1.8 will be loaded.
				}
			
			
			if ( $jrConfig[ 'jquery18_2_switch' ] == "1" ) 
				{
				if ( jomres_cmsspecific_areweinadminarea() || ( $jrConfig[ 'load_jquery' ] == "1" && !$management_view ) )
					{
					$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/", 'jquery-2.0.3.js');
					}
				}
			else
				{
				if ( jomres_cmsspecific_areweinadminarea() || ( $jrConfig[ 'load_jquery' ] == "1" && !$management_view ) )
					{
					$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery-1.8.2.js');
					}
				}
			}
		if ( jomres_cmsspecific_areweinadminarea() || ( $jrConfig[ 'load_jquery_ui' ] == "1" && !$management_view ) )
			{
			$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery-ui-1.9.2.custom.js");
			}
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jomres.js");
		
		$jomreslang = jomres_singleton_abstract::getInstance( 'jomres_language' );
		define( "JOMRESDATEPICKERLANG", $jomreslang->datepicker_crossref[ $jomreslang->lang ] );
		$datepicker_localisation_file = 'jquery.ui.datepicker-' . JOMRESDATEPICKERLANG . '.js';
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/jquery-ui-cal-localisation/", $datepicker_localisation_file);
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.cookee.js");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "heartbeat.js");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/',  "jquery.hoverIntent.js");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.validate.js");
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.jlabel-1.3.js");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.rating.js");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.validate.js");
		$css_files[]= array( JOMRES_ROOT_DIRECTORY."/css/","jquery.rating.css");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "list_properties.js");
		
		$css_files[]= array( JOMRES_ROOT_DIRECTORY."/css/","jquery.jgrowl.css");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.jgrowl.js");
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.tipsy.js");
		$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/","tipsy.css");
		
		$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/", "TableTools_JUI.css");
		$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/", "ColVis.css");
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.jeditable.js");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "excanvas.js");
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.chainedSelects.js");
		//$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.livequery.js");
		
		if ( $thisJRUser->userIsRegistered )
			{
			if ( $thisJRUser->userIsManager || jomres_cmsspecific_areweinadminarea() )
				{
				$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.dataTables.js");
				$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "TableTools.min.js");
				
				if ( using_bootstrap() )
					{
					$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/", "DT_bootstrap.css");
					$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/javascript/", "datatables_pagination.js");
					}
				$javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "ColVis.min.js");
				}

			if ( !using_bootstrap() )
				{
				$css_files[]= array(  JOMRES_ROOT_DIRECTORY."/css/", "tables_jui.css");
				}
			}
			
		// $javascript_files[]= array( JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.easing.compatibility.js"); Is this needed?
			
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
				if (jomres_bootstrap_version() == "3")
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
			
			
		 if ( 
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
			}
		
		$ls = jomresGetDomain();
		if ( stristr( $ls, ".xn--", $ls ) && !jomres_cmsspecific_areweinadminarea() ) // We check to see if we're in the admin area because our one and only client with an umlat in the domain name has found that the redirect function doesn't work in the administrator area if the domain's been converted.
			{
			require_once( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'idna_converter' . JRDS . 'idna_convert.class.php' );
			$IDN = new jomres_idna_convert();
			$ls  = $IDN->decode( $ls );
			}
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( get_showtime('property_uid') );
		
		$misc_url_defs = '
			var live_site_ajax = "'.JOMRES_SITEPAGE_URL_AJAX.'";
			var compare_url = "'.JOMRES_SITEPAGE_URL_NOSEF . "&task=compare" .'";
			var path_to_jomres_dir = "'.get_showtime( 'live_site' ).'";
			var module_pop_ajax_url = "'.JOMRES_SITEPAGE_URL_AJAX . '&task=module_popup&nofollowtmpl=1&id=";
			var jomres_template_version = "'.find_plugin_template_directory().'";
			var dataTables_sInfo = "'. jr_gettext( 'DATATABLES_SINFO', DATATABLES_SINFO, false ).'";
			var JOMRES_ROOT_DIRECTORY = "' .  JOMRES_ROOT_DIRECTORY.'";
			';
		
		if ( ( !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ) || $_SERVER['SERVER_PORT'] == 443)// We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
			{
			$temp_file =  $ls . "_ssl_" . get_showtime( 'lang' ) ."_". $current_property_details->property_type."_". "_misc_url_defs.js";
			}
		else
			{
			$temp_file =  $ls . "_" . get_showtime( 'lang' ) ."_". $current_property_details->property_type."_". "_misc_url_defs.js";
			}
		
		if (!file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . $temp_file ))
			file_put_contents(  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . $temp_file , $misc_url_defs );
		
		$javascript_files[]= array( JOMRES_ROOT_DIRECTORY."/temp/" ,$temp_file );
		
		if ( $jrConfig[ 'javascript_caching_enabled' ] =="0")
			{
			foreach ( $javascript_files as $file)
				{
				jomres_cmsspecific_addheaddata( "javascript",$file[0] , $file[1] );
				}
			}
		else
			{
			jr_import('jomres_javascript_cache');
			$jomres_javascript_cache = new jomres_javascript_cache();
			$jomres_javascript_cache->cache_javascript($javascript_files);
			}
		
		if ( $jrConfig[ 'css_caching_enabled' ] =="0")
			{
			foreach ( $css_files as $file)
				{
				jomres_cmsspecific_addheaddata( "css",$file[0] , $file[1] );
				}
			}
		else
			{
			jr_import('jomres_css_cache');
			$jomres_css_cache = new jomres_css_cache();
			$jomres_css_cache->cache_css($css_files);
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