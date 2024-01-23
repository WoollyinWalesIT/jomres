<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j19995menu
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
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		if (AJAXCALL) {
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig[ 'admin_options_level' ])) {
			$jrConfig[ 'admin_options_level' ] = 0;
		}

		$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');
		
		//define the core admin sections
		$jomres_menu->add_admin_section(1, jr_gettext('_ADMIN_MENU_SECTIONS_DASHBOARD', '_ADMIN_MENU_SECTIONS_DASHBOARD', false, false));
		$jomres_menu->add_admin_section(10, jr_gettext('_ADMIN_MENU_SECTIONS_USERS', '_ADMIN_MENU_SECTIONS_USERS', false, false));
		$jomres_menu->add_admin_section(20, jr_gettext('_ADMIN_MENU_SECTIONS_COMMISSION', '_ADMIN_MENU_SECTIONS_COMMISSION', false, false));
		$jomres_menu->add_admin_section(30, jr_gettext('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', '_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', false, false));
		$jomres_menu->add_admin_section(40, jr_gettext('_ADMIN_MENU_SECTIONS_INVOICES', '_ADMIN_MENU_SECTIONS_INVOICES', false, false));
		$jomres_menu->add_admin_section(50, jr_gettext('_ADMIN_MENU_SECTIONS_PORTAL', '_ADMIN_MENU_SECTIONS_PORTAL', false, false));
		$jomres_menu->add_admin_section(60, jr_gettext('_ADMIN_MENU_SECTIONS_TRANSLATIONS', '_ADMIN_MENU_SECTIONS_TRANSLATIONS', false, false));
		$jomres_menu->add_admin_section(70, jr_gettext('_ADMIN_MENU_SECTIONS_TOOLS', '_ADMIN_MENU_SECTIONS_TOOLS', false, false));
		$jomres_menu->add_admin_section(80, jr_gettext('_ADMIN_MENU_SECTIONS_REPORTS', '_ADMIN_MENU_SECTIONS_REPORTS', false, false));
		$jomres_menu->add_admin_section(90, jr_gettext('_ADMIN_MENU_SECTIONS_SETTINGS', '_ADMIN_MENU_SECTIONS_SETTINGS', false, false));
		$jomres_menu->add_admin_section(100, jr_gettext('_ADMIN_MENU_SECTIONS_HELP', '_ADMIN_MENU_SECTIONS_HELP', false, false));
		


		//define the core admin menu items
		//dashboard section menus
		$jomres_menu->add_admin_item(1, jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', false), '', 'fa-tachometer');
		$jomres_menu->add_admin_item(1, jr_gettext('_JOMRES_CUSTOMCODE_PLUGINMANAGER', '_JOMRES_CUSTOMCODE_PLUGINMANAGER', false), 'showplugins', 'fa-cloud-download');
		$jomres_menu->add_admin_item(1, jr_gettext('_JOMRES_CUSTOMCODE_UPGRADES', '_JOMRES_CUSTOMCODE_UPGRADES', false), 'updates', 'fa-cloud-download');
		
		//users section menus
		$jomres_menu->add_admin_item(10, jr_gettext('_JOMRES_COM_MR_SHOWPROFILES', '_JOMRES_COM_MR_SHOWPROFILES', false), 'list_users', 'fa-user');
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(10, jr_gettext('_JOMRES_HLIST_GUESTS_MENU', '_JOMRES_HLIST_GUESTS_MENU', false), 'list_guests', 'fa-list');
		}

		//invoices section menus
		if ($jrConfig[ 'use_commission' ] == '1' || $jrConfig[ 'useSubscriptions' ] == '1') {
			$jomres_menu->add_admin_item(40, jr_gettext('_JRPORTAL_INVOICES_TITLE', '_JRPORTAL_INVOICES_TITLE', false), 'list_invoices', 'fa-file-text-o');
		}
		
		//portal section menus
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(50, jr_gettext('_JOMRES_APPROVALS_MENU_NAME', '_JOMRES_APPROVALS_MENU_NAME', false), 'property_approvals', 'fa-check-circle');
			$jomres_menu->add_admin_item(50, jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false), 'list_reviews', 'fa-thumbs-up');
		}

		//translations section menus
		$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_TOUCHTEMPLATES', '_JOMRES_TOUCHTEMPLATES', false), 'touch_templates', 'fa-globe');
		$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', '_JOMRES_COM_TRANSLATE_LANGUAGEFILES', false), 'translate_lang_file_strings', 'fa-globe');
		if ($jrConfig[ 'admin_options_level' ] > 1) {
			$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', '_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', false), 'translate_locales', 'fa-globe');
			$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_EXPORT_DEFINITIONS', '_JOMRES_EXPORT_DEFINITIONS', false), 'export_definitions', 'fa-floppy-o');
		}

		//tools section menus
		$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_SHORTCODES', '_JOMRES_SHORTCODES', false), 'asamodule_report', 'fa-code');
		//$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_DATA_ARCHIVE_TITLE', '_JOMRES_DATA_ARCHIVE_TITLE', false), 'booking_data_archive', 'fa-archive');
		$jomres_menu->add_admin_item(70, 'Changelog', 'changelog', 'fa-file-code-o');
		//$jomres_menu->add_admin_item(70, jr_gettext('INTEGRITY_CHECK', 'INTEGRITY_CHECK', false), 'filesystem_integrity_check', 'fa-check-square-o');
		$jomres_menu->add_admin_item(70, jr_gettext('DATABASE_INTEGRITY_CHECK', 'DATABASE_INTEGRITY_CHECK', false), 'database_integrity_check', 'fa-check-square-o');

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(70, jr_gettext('OBSOLETE_FILES_CHECK', 'OBSOLETE_FILES_CHECK', false), 'obsolete_files_check', 'fa-check-square-o');
		}
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(70, jr_gettext('FIREWALL_CHECK', 'FIREWALL_CHECK', false), $task = 'firewall_check', 'fa-check-square-o');
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(70, jr_gettext('JOMRES_COM_A_AVAILABLELOGS', 'JOMRES_COM_A_AVAILABLELOGS', false), 'list_error_logs', 'fa-exclamation-triangle');
		}

		if ($jrConfig[ 'admin_options_level' ] > 1) {
			$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_REGISTRYREBUILD', '_JOMRES_REGISTRYREBUILD', false), 'rebuildregistry', 'fa-refresh');
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(70, jr_gettext('EMPTY_TEMP_DIR', 'EMPTY_TEMP_DIR', false), 'empty_temp_directory', 'fa-trash');
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST', '_JOMRES_REST_API_CONNECTIVITY_TEST', false), 'rest_api_connectivity_test', 'fa-arrows-h');
            $jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_RUN_PLUGIN_INSTALLATION_SCRIPTS', '_JOMRES_RUN_PLUGIN_INSTALLATION_SCRIPTS', false), 'run_installation_scripts', 'fa-arrows-h');
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_LIBRARY_PACKAGES', '_JOMRES_LIBRARY_PACKAGES', false), 'refresh_library_packages', 'fa-book');
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$template_packages = get_showtime('template_packages');
			if (!empty($template_packages)) { // There are some override packages installed, we can go ahead and show the override manager menu option
				$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_TEMPLATE_PACKAGES', '_JOMRES_TEMPLATE_PACKAGES', false), 'list_template_overrides', 'fa-puzzle-piece');
			}
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			if ($jrConfig[ 'images_imported_to_db' ] == '1') {
				$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', false), jomresUrl(JOMRES_SITEPAGE_URL_ADMIN).'&task=media_centre_dbimport&force=1', 'fa-database', true, true);
			}

			if ($jrConfig[ 'images_imported_to_s3' ] == '1' && $jrConfig[ 'amazon_s3_active' ] == '1') {
				$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', false), jomresUrl(JOMRES_SITEPAGE_URL_ADMIN).'&task=media_centre_s3import&force=1', 'fa-amazon', true, true);
			}
		}


		//reports section menus
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(80, jr_gettext('_JOMRES_CHARTS', '_JOMRES_CHARTS', false), 'charts', 'fa-line-chart');
		}


		//settings section menus
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_A', '_JOMRES_A', false), 'site_settings', 'fa-cogs');
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_PTYPES_LIST_TITLE', '_JOMRES_COM_PTYPES_LIST_TITLE', false), 'list_property_types', 'fa-building');
		}
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_PROPERTY_HCATEGORIES', '_JOMRES_PROPERTY_HCATEGORIES', false), 'list_property_categories', 'fa-list');
		}

		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', false), 'listGlobalroomTypes', 'fa-bed');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', false), 'listPfeatures', 'fa-list');
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_PROPERTYFEATURES_HCATEGORIES', '_JOMRES_PROPERTYFEATURES_HCATEGORIES', false), 'listPfeaturesCategories', 'fa-list-ul');
		}
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false), 'list_gateways', 'fa-money');
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(90, jr_gettext('_JRPORTAL_TAXRATES_TITLE', '_JRPORTAL_TAXRATES_TITLE', false), 'list_taxrates', 'fa-percent');
		}
		//$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_TAX_RULES_LIST', '_JOMRES_TAX_RULES_LIST', false), 'list_tax_rules', 'fa-cogs');
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_LISTCOUNTRIES', '_JOMRES_COM_LISTCOUNTRIES', false), 'list_countries', 'fa-globe');
		}
		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_LISTREGIONS', '_JOMRES_COM_LISTREGIONS', false), 'list_regions', 'fa-globe');
		}
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_MEDIA_CENTRE_TITLE', '_JOMRES_MEDIA_CENTRE_TITLE', false), 'media_centre', 'fas fa-images fa-picture-o');

		//help section menus
		$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', '_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', false), 'getting_started', 'fa-book');
		//$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_CUSTOMCODE_MANUAL', '_JOMRES_CUSTOMCODE_MANUAL', false), 'https://www.jomres.net/manual/', 'fa-book', true, true);
		//$jomres_menu->add_admin_item(100, 'Shortcodes', 'http://www.jomres.net/manual/developers-guide/305-shortcodes', 'fa-book', true, true);
		//$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', '_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', false), 'http://www.jomres.net/manual/developers-guide/60-jomres-manual/intro/344-about-jomres', 'fa-book', true, true);
		$jomres_menu->add_admin_item(100, 'Jomres Partners', 'partners', 'fa-book');
		$jomres_menu->add_admin_item(100, jr_gettext('API_METHODS_TITLE', 'API_METHODS_TITLE', false), 'https://api.jomres.net/', 'fa-book', true, true);
		$jomres_menu->add_admin_item(100, jr_gettext('VIDEO_TUTORIALS', 'VIDEO_TUTORIALS', false), 'videos', 'fa-youtube-play');
	}


	public function getRetVals()
	{
		return null;
	}
}
