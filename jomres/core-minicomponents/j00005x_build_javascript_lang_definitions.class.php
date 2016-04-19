<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

// This script will build language definition scripts for javascript files that need to be called AFTER all of the other language files have been read in.

class j00005x_build_javascript_lang_definitions
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false; return;
			}
		
		if ( AJAXCALL == "1" )
			return;

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		$ls = jomresGetDomain();
		$javascript_files = array();
		
		$live_scrolling_enabled = "true";
		if ( $jrConfig['live_scrolling_enabled'] == "0" || jomres_cmsspecific_areweinadminarea())
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
			
			var dataTables_sEmptyTable		= "'. jr_gettext( 'DATATABLES_SEMPTYTABLE', '', false ).'";
			var dataTables_sInfo			= "'. jr_gettext( 'DATATABLES_SINFO', '', false ).'";
			var dataTables_sInfoEmpty		= "'. jr_gettext( 'DATATABLES_SINFOEMPTY', '', false ).'";
			var dataTables_sInfoFiltered	= "'. jr_gettext( 'DATATABLES_SINFOFILTERED', '', false ).'";
			var dataTables_sInfoPostFix		= "'. jr_gettext( 'DATATABLES_SINFOPOSTFIX', '', false ).'";
			var dataTables_sInfoThousands	= "'. jr_gettext( 'DATATABLES_SINFOTHOUSANDS', '', false ).'";
			var dataTables_sLengthMenu		= "'. jr_gettext( 'DATATABLES_SLENGTHMENU', '', false ).'";
			var dataTables_sLoadingRecords	= "'. jr_gettext( 'DATATABLES_SLOADINGRECORDS', '', false ).'";
			var dataTables_sProcessing		= "'. jr_gettext( 'DATATABLES_SPROCESSING', '', false ).'";
			var dataTables_sSearch			= "'. jr_gettext( 'DATATABLES_SSEARCH', '', false ).'";
			var dataTables_sZeroRecords		= "'. jr_gettext( 'DATATABLES_SZERORECORDS', '', false ).'";
			var dataTables_sFirst			= "'. jr_gettext( 'DATATABLES_SFIRST', '', false ).'";
			var dataTables_sLast			= "'. jr_gettext( 'DATATABLES_SLAST', '', false ).'";
			var dataTables_sNext			= "'. jr_gettext( 'DATATABLES_SNEXT', '', false ).'";
			var dataTables_sPrevious		= "'. jr_gettext( 'DATATABLES_SPREVIOUS', '', false ).'";
			var dataTables_sSortAscending	= "'. jr_gettext( 'DATATABLES_SSORTASCENDING', '', false ).'";
			var dataTables_sSortDescending	= "'. jr_gettext( 'DATATABLES_SSORTDESCENDING', '', false ).'";
			var dataTables_showhide			= "'. jr_gettext( 'DATATABLES_SHOWHIDE', '', false ).'";

			';
			
		if (get_showtime('property_uid') > 0)
			{
			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$current_property_details->gather_data( get_showtime('property_uid') );

			$property_type = $current_property_details->property_type;
			}
		else
			{
			$property_type = "nopropertytype";
			}
		
		if ( ( !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ) || $_SERVER['SERVER_PORT'] == 443)// We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
			{
			$temp_file =  $ls . "_ssl_" . get_showtime( 'lang' ) ."_". $property_type."_";
			}
		else
			{
			$temp_file =  $ls . "_" . get_showtime( 'lang' ) ."_". $property_type."_";
			}
		
		if (jomres_cmsspecific_areweinadminarea())
			$temp_file .= '_misc_url_defs_admin.js';
		else
			$temp_file .= '_misc_url_defs.js';
		;
		if (!file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . $temp_file ))
			{
			$result = file_put_contents(  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . $temp_file , $misc_url_defs );
			if (!$result)
				{
				throw new Exception("Tried to write  ".JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . $temp_file . " but was not succcessful");
				}
			}

			
		jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/temp/', $temp_file );
		
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
