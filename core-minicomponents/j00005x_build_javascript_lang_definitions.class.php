<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * This script will build language definition scripts for javascript files that need to be called AFTER all of the other language files have been read in.
	 * 
	 */

class j00005x_build_javascript_lang_definitions
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		if (AJAXCALL == '1') {
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$ls = jomresGetDomain();
		$javascript_files = array();

		$live_scrolling_enabled = 'true';
		if ($jrConfig['live_scrolling_enabled'] == '0' || jomres_cmsspecific_areweinadminarea()) {
			$live_scrolling_enabled = 'false';
		}

		if (jomres_cmsspecific_areweinadminarea()) {
			$jomres_sitepage_url_ajax = JOMRES_SITEPAGE_URL_ADMIN_AJAX;
		} else {
			$jomres_sitepage_url_ajax = JOMRES_SITEPAGE_URL_AJAX;
		}

		$misc_url_defs = '
			var live_site_ajax = "'.$jomres_sitepage_url_ajax.'";
			var compare_url = "'.JOMRES_SITEPAGE_URL_NOSEF.'&task=compare'.'";
			var path_to_jomres_dir = "'.get_showtime('live_site').'";
			var module_pop_ajax_url = "'.JOMRES_SITEPAGE_URL_AJAX.'&task=module_popup&nofollowtmpl=1&id=";
			';

		$misc_url_defs .= '
			var property_reviews_ajax_url = "'.JOMRES_SITEPAGE_URL_AJAX.'&task=show_property_reviews&nofollowtmpl=1&property_uid=";
			
			var JOMRES_ROOT_DIRECTORY = "' .JOMRES_ROOT_DIRECTORY.'";
			var live_scrolling_enabled = ' .$live_scrolling_enabled.';
			
			var dataTables_sEmptyTable		= "'.jr_gettext('DATATABLES_SEMPTYTABLE', 'DATATABLES_SEMPTYTABLE', false).'";
			var dataTables_sInfo			= "'.jr_gettext('DATATABLES_SINFO', 'DATATABLES_SINFO', false).'";
			var dataTables_sInfoEmpty		= "'.jr_gettext('DATATABLES_SINFOEMPTY', 'DATATABLES_SINFOEMPTY', false).'";
			var dataTables_sInfoFiltered	= "'.jr_gettext('DATATABLES_SINFOFILTERED', 'DATATABLES_SINFOFILTERED', false).'";
			var dataTables_sInfoPostFix		= "'.jr_gettext('DATATABLES_SINFOPOSTFIX', 'DATATABLES_SINFOPOSTFIX', false).'";
			var dataTables_sInfoThousands	= "'.jr_gettext('DATATABLES_SINFOTHOUSANDS', 'DATATABLES_SINFOTHOUSANDS', false).'";
			var dataTables_sLengthMenu		= "'.jr_gettext('DATATABLES_SLENGTHMENU', 'DATATABLES_SLENGTHMENU', false).'";
			var dataTables_sLoadingRecords	= "'.jr_gettext('DATATABLES_SLOADINGRECORDS', 'DATATABLES_SLOADINGRECORDS', false).'";
			var dataTables_sProcessing		= "'.jr_gettext('DATATABLES_SPROCESSING', 'DATATABLES_SPROCESSING', false).'";
			var dataTables_sSearch			= "'.jr_gettext('DATATABLES_SSEARCH', 'DATATABLES_SSEARCH', false).'";
			var dataTables_sZeroRecords		= "'.jr_gettext('DATATABLES_SZERORECORDS', 'DATATABLES_SZERORECORDS', false).'";
			var dataTables_sFirst			= "'.jr_gettext('DATATABLES_SFIRST', 'DATATABLES_SFIRST', false).'";
			var dataTables_sLast			= "'.jr_gettext('DATATABLES_SLAST', 'DATATABLES_SLAST', false).'";
			var dataTables_sNext			= "'.jr_gettext('DATATABLES_SNEXT', 'DATATABLES_SNEXT', false).'";
			var dataTables_sPrevious		= "'.jr_gettext('DATATABLES_SPREVIOUS', 'DATATABLES_SPREVIOUS', false).'";
			var dataTables_sSortAscending	= "'.jr_gettext('DATATABLES_SSORTASCENDING', 'DATATABLES_SSORTASCENDING', false).'";
			var dataTables_sSortDescending	= "'.jr_gettext('DATATABLES_SSORTDESCENDING', 'DATATABLES_SSORTDESCENDING', false).'";
			var dataTables_showhide			= "'.jr_gettext('DATATABLES_SHOWHIDE', 'DATATABLES_SHOWHIDE', false).'";
			var dataTables_sColVis			= "'.jr_gettext('DATATABLES_COLVIS', 'DATATABLES_COLVIS', false).'";

			var jomres_javascript_readmore = "' .jr_gettext('_JOMRES_JAVASCRIPT_READMORE', '_JOMRES_JAVASCRIPT_READMORE', false).'";
			var jomres_javascript_readless = "' .jr_gettext('_JOMRES_JAVASCRIPT_READLESS', '_JOMRES_JAVASCRIPT_READLESS', false).'";
			';

		if (get_showtime('property_uid') > 0) {
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data(get_showtime('property_uid'));

			$property_type = $current_property_details->property_type;
		} else {
			$property_type = 'nopropertytype';
		}

		if (!isset($_SERVER[ "SERVER_PORT" ])) { // CLI not isset variable fix
			$SERVER_PORT = '80';
		} else {
			$SERVER_PORT = $_SERVER[ "SERVER_PORT" ];
		}
		
		if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $SERVER_PORT == 443) {// We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
			$temp_file = $ls.'_ssl_'.get_showtime('lang').'_'.$property_type.'_';
		} else {
			$temp_file = $ls.'_'.get_showtime('lang').'_'.$property_type.'_';
		}

		if (jomres_cmsspecific_areweinadminarea()) {
			$temp_file .= '_misc_url_defs_admin.js';
		} else {
			$temp_file .= '_misc_url_defs.js';
		}
		if (!file_exists(JOMRES_TEMP_ABSPATH.$temp_file)) {
			$result = file_put_contents(JOMRES_TEMP_ABSPATH.$temp_file, $misc_url_defs);
			if (!$result) {
				throw new Exception('Tried to write  '.JOMRES_TEMP_ABSPATH.$temp_file.' but was not succcessful');
			}
		}

		jomres_cmsspecific_addheaddata('javascript', JOMRES_ROOT_DIRECTORY.'/temp/', $temp_file);
	}


	public function getRetVals()
	{
		return null;
	}
}
