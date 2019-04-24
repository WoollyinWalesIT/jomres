<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j19995menu
{
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
		
		$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');
		
		//define the core admin sections
		$jomres_menu->add_admin_section(1, 'Dashboard');
		$jomres_menu->add_admin_section(10, 'Users');
		$jomres_menu->add_admin_section(20, 'Commission');
		$jomres_menu->add_admin_section(30, 'Subscriptions');
		$jomres_menu->add_admin_section(40, 'Invoices');
		$jomres_menu->add_admin_section(50, 'Portal');
		$jomres_menu->add_admin_section(60, 'Translations');
		$jomres_menu->add_admin_section(70, 'Tools');
		$jomres_menu->add_admin_section(80, 'Reports');
		$jomres_menu->add_admin_section(90, 'Settings');
		$jomres_menu->add_admin_section(100, 'Help');
		
		//define the core admin menu items
		//dashboard section menus
		$jomres_menu->add_admin_item(1, jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', false), '', 'fa-tachometer');
		$jomres_menu->add_admin_item(1, jr_gettext('_JOMRES_CUSTOMCODE_PLUGINMANAGER', '_JOMRES_CUSTOMCODE_PLUGINMANAGER', false), 'showplugins', 'fa-cloud-download');
		//$jomres_menu->add_admin_item(1, jr_gettext('_JOMRES_CUSTOMCODE_UPGRADES', '_JOMRES_CUSTOMCODE_UPGRADES', false), 'updates', 'fa-cloud-download');
		
		//users section menus
		$jomres_menu->add_admin_item(10, jr_gettext('_JOMRES_COM_MR_SHOWPROFILES', '_JOMRES_COM_MR_SHOWPROFILES', false), 'list_users', 'fa-user');
		$jomres_menu->add_admin_item(10, jr_gettext('_JOMRES_HLIST_GUESTS_MENU', '_JOMRES_HLIST_GUESTS_MENU', false), 'list_guests', 'fa-list');
		
		//invoices section menus
		if ($jrConfig[ 'use_commission' ] == '1' || $jrConfig[ 'useSubscriptions' ] == '1') {
			$jomres_menu->add_admin_item(40, jr_gettext('_JRPORTAL_INVOICES_TITLE', '_JRPORTAL_INVOICES_TITLE', false), 'list_invoices', 'fa-file-text-o');
		}
		
		//portal section menus
		$jomres_menu->add_admin_item(50, jr_gettext('_JOMRES_APPROVALS_MENU_NAME', '_JOMRES_APPROVALS_MENU_NAME', false), 'property_approvals', 'fa-check-circle');
		$jomres_menu->add_admin_item(50, jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false), 'list_reviews', 'fa-thumbs-up');
		
		//translations section menus
		$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_TOUCHTEMPLATES', '_JOMRES_TOUCHTEMPLATES', false), 'touch_templates', 'fa-globe');
		$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', '_JOMRES_COM_TRANSLATE_LANGUAGEFILES', false), 'translate_lang_file_strings', 'fa-globe');
		$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', '_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', false), 'translate_locales', 'fa-globe');
		$jomres_menu->add_admin_item(60, jr_gettext('_JOMRES_EXPORT_DEFINITIONS', '_JOMRES_EXPORT_DEFINITIONS', false), 'export_definitions', 'fa-floppy-o');
		
		//tools section menus
		$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_SHORTCODES', '_JOMRES_SHORTCODES', false), 'asamodule_report', 'fa-code');
		//$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_DATA_ARCHIVE_TITLE', '_JOMRES_DATA_ARCHIVE_TITLE', false), 'booking_data_archive', 'fa-archive');
		$jomres_menu->add_admin_item(70, 'Changelog', 'changelog', 'fa-file-code-o');
		$jomres_menu->add_admin_item(70, jr_gettext('INTEGRITY_CHECK', 'INTEGRITY_CHECK', false), 'filesystem_integrity_check', 'fa-check-square-o');
		$jomres_menu->add_admin_item(70, jr_gettext('DATABASE_INTEGRITY_CHECK', 'DATABASE_INTEGRITY_CHECK', false), 'database_integrity_check', 'fa-check-square-o');
		$jomres_menu->add_admin_item(70, jr_gettext('OBSOLETE_FILES_CHECK', 'OBSOLETE_FILES_CHECK', false), 'obsolete_files_check', 'fa-check-square-o');
		$jomres_menu->add_admin_item(70, jr_gettext('FIREWALL_CHECK', 'FIREWALL_CHECK', false), $task = 'firewall_check', 'fa-check-square-o');
		$jomres_menu->add_admin_item(70, jr_gettext('JOMRES_COM_A_AVAILABLELOGS', 'JOMRES_COM_A_AVAILABLELOGS', false), 'list_error_logs', 'fa-exclamation-triangle');
		$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_REGISTRYREBUILD', '_JOMRES_REGISTRYREBUILD', false), 'rebuildregistry', 'fa-refresh');
		$jomres_menu->add_admin_item(70, jr_gettext('EMPTY_TEMP_DIR', 'EMPTY_TEMP_DIR', false), 'empty_temp_directory', 'fa-trash');
		
		
		
		$template_packages = get_showtime('template_packages');
		if (!empty($template_packages)) { // There are some override packages installed, we can go ahead and show the override manager menu option
			$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_TEMPLATE_PACKAGES', '_JOMRES_TEMPLATE_PACKAGES', false), 'list_template_overrides', 'fa-puzzle-piece');
		}
		
		if ($jrConfig[ 'images_imported_to_db' ] == '1') {
			$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', false), jomresUrl(JOMRES_SITEPAGE_URL_ADMIN).'&task=media_centre_dbimport&force=1', 'fa-database', true, true);
		}
		
		if ($jrConfig[ 'images_imported_to_s3' ] == '1' && $jrConfig[ 'amazon_s3_active' ] == '1') {
			$jomres_menu->add_admin_item(70, jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', false), jomresUrl(JOMRES_SITEPAGE_URL_ADMIN).'&task=media_centre_s3import&force=1', 'fa-amazon', true, true);
		}
		
		//reports section menus
		$jomres_menu->add_admin_item(80, jr_gettext('_JOMRES_CHARTS', '_JOMRES_CHARTS', false), 'charts', 'fa-line-chart');
		
		//settings section menus
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_A', '_JOMRES_A', false), 'site_settings', 'fa-cogs');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_PTYPES_LIST_TITLE', '_JOMRES_COM_PTYPES_LIST_TITLE', false), 'list_property_types', 'fa-building');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_PROPERTY_HCATEGORIES', '_JOMRES_PROPERTY_HCATEGORIES', false), 'list_property_categories', 'fa-list');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', false), 'listGlobalroomTypes', 'fa-bed');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', false), 'listPfeatures', 'fa-list');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_PROPERTYFEATURES_HCATEGORIES', '_JOMRES_PROPERTYFEATURES_HCATEGORIES', false), 'listPfeaturesCategories', 'fa-list-ul');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false), 'list_gateways', 'fa-money');
		$jomres_menu->add_admin_item(90, jr_gettext('_JRPORTAL_TAXRATES_TITLE', '_JRPORTAL_TAXRATES_TITLE', false), 'list_taxrates', 'fa-percent');
		//$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_TAX_RULES_LIST', '_JOMRES_TAX_RULES_LIST', false), 'list_tax_rules', 'fa-cogs');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_LISTCOUNTRIES', '_JOMRES_COM_LISTCOUNTRIES', false), 'list_countries', 'fa-globe');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_COM_LISTREGIONS', '_JOMRES_COM_LISTREGIONS', false), 'list_regions', 'fa-globe');
		$jomres_menu->add_admin_item(90, jr_gettext('_JOMRES_MEDIA_CENTRE_TITLE', '_JOMRES_MEDIA_CENTRE_TITLE', false), 'media_centre', 'fa-picture-o');
		
		//help section menus
		$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_PRICES', '_JOMRES_PRICES', false), 'stripe_subscribe', 'fa-id-card');
		$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', '_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', false), 'getting_started', 'fa-book');
		$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_FAQ', '_JOMRES_FAQ', false), 'faq', 'fa-question');
		$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_CUSTOMCODE_MANUAL', '_JOMRES_CUSTOMCODE_MANUAL', false), 'https://www.jomres.net/manual/', 'fa-book', true, true);
		$jomres_menu->add_admin_item(100, 'Shortcodes', 'http://www.jomres.net/manual/developers-guide/305-shortcodes', 'fa-book', true, true);
		$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', '_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', false), 'https://license-server.jomres.net/index.php', 'fa-book', true, true);
		$jomres_menu->add_admin_item(100, jr_gettext('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', '_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', false), 'http://www.jomres.net/manual/developers-guide/60-jomres-manual/intro/344-about-jomres', 'fa-book', true, true);
		$jomres_menu->add_admin_item(100, 'Jomres Partners', 'partners', 'fa-book');
		$jomres_menu->add_admin_item(100, jr_gettext('API_METHODS_TITLE', 'API_METHODS_TITLE', false), 'https://api.jomres.net/', 'fa-book', true, true);
		$jomres_menu->add_admin_item(100, jr_gettext('VIDEO_TUTORIALS', 'VIDEO_TUTORIALS', false), 'videos', 'fa-youtube-play');
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
