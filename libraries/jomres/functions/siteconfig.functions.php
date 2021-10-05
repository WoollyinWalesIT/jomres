<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * @package Jomres\Core\Functions
 *
 * Compiles data in preparation for showing the site configuration panel.
 */
function showSiteConfig()
{
	
	//check jomres support key
	//$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
	//echo $MiniComponents->specificEvent('16000', 'show_license_message', array('output_now' => false, 'as_modal' => false));
		
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();

	$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

	$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
	$jrtb = $jrtbar->startTable();
	$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
	$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN, '');
	$jrtb .= $jrtbar->customToolbarItem('saveSiteConfig', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'save_site_settings', $image);
	$jrtb .= $jrtbar->endTable();

	if (!isset($jrConfig[ 'load_jquery_ui' ])) {
		$jrConfig[ 'load_jquery_ui' ] = '1';
	}

	$lists = array();
	// make a standard yes/no list
	$yesno = array();
	$yesno[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
	$yesno[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

	$editoryesno = array();
	$editoryesno[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
	$editoryesno[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

	$sortArray = array(); // The search order dropdown list, this configure's the default.
	$sortArray[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_SORTORDER_DEFAULT', '_JOMRES_SORTORDER_DEFAULT', false, false));
	$sortArray[ ] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_SORTORDER_PROPERTYNAME', '_JOMRES_SORTORDER_PROPERTYNAME', false, false));
	$sortArray[ ] = jomresHTML::makeOption('3', jr_gettext('_JOMRES_SORTORDER_PROPERTYREGION', '_JOMRES_SORTORDER_PROPERTYREGION', false, false));
	$sortArray[ ] = jomresHTML::makeOption('4', jr_gettext('_JOMRES_SORTORDER_PROPERTYTOWN', '_JOMRES_SORTORDER_PROPERTYTOWN', false, false));
	$sortArray[ ] = jomresHTML::makeOption('5', jr_gettext('_JOMRES_SORTORDER_STARS', '_JOMRES_SORTORDER_STARS', false, false));
	$sortArrayDropdown = jomresHTML::selectList($sortArray, 'cfg_search_order_default', 'id="sortby" size="1"', 'value', 'text', $jrConfig[ 'search_order_default' ]);

	$jsInputDateFormats[ ] = jomresHTML::makeOption('%d/%m/%Y', '01/02/2006 - 1st February 2006');
	$jsInputDateFormats[ ] = jomresHTML::makeOption('%Y/%m/%d', '2006/02/01');
	$jsInputDateFormats[ ] = jomresHTML::makeOption('%m/%d/%Y', '02/01/2006');
	$jsInputDateFormats[ ] = jomresHTML::makeOption('%d-%m-%Y', '01-02-2006');
	$jsInputDateFormats[ ] = jomresHTML::makeOption('%Y-%m-%d', '2006-02-01');
	$jsInputDateFormats[ ] = jomresHTML::makeOption('%m-%d-%Y', '02-01-2006');
	$jsInputFormatDropdownList = jomresHTML::selectList($jsInputDateFormats, 'cfg_cal_input', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'cal_input' ]);

	$jqueryUIthemes = array();
	$cssFiles = searchCSSThemesDirForCSSFiles();
	foreach ($cssFiles as $file) {
		$jqueryUIthemes[ ] = jomresHTML::makeOption($file[ 'subdir' ], $file[ 'subdir' ]);
	}
	
	if ($jrConfig[ 'jquery_ui_theme' ] == 'jomres') {
		$jrConfig[ 'jquery_ui_theme' ] = 'base';
	}

	$jqueryUIthemesDropdownList = jomresHTML::selectList($jqueryUIthemes, 'cfg_jquery_ui_theme', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'jquery_ui_theme' ]);

	if (!isset($jrConfig[ 'cssColourScheme' ])) {
		$jrConfig[ 'cssColourScheme' ] = 'blue';
	}

	jr_import('jrportal_commissions');
	$jrportal_commissions = new jrportal_commissions();
	$jrportal_commissions->getAllCrates();

	$crateOptions = array();
	foreach ($jrportal_commissions->crates as $c) {
		$crateOptions[ ] = jomresHTML::makeOption($c[ 'id' ], $c[ 'title' ]);
	}
	$lists[ 'defaultCrate' ] = jomresHTML::selectList($crateOptions, 'cfg_defaultCrate', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'defaultCrate' ]);
	$lists[ 'errorChecking' ] = jomresHTML::selectList($yesno, 'cfg_errorChecking', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'errorChecking' ]);
	$lists[ 'useGlobalCurrency' ] = jomresHTML::selectList($yesno, 'cfg_useGlobalCurrency', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useGlobalCurrency' ]);
	$lists[ 'editingModeAffectsAllProperties' ] = jomresHTML::selectList($yesno, 'cfg_editingModeAffectsAllProperties', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'editingModeAffectsAllProperties' ]);
	$lists[ 'useGlobalPFeatures' ] = jomresHTML::selectList($yesno, 'cfg_useGlobalPFeatures', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useGlobalPFeatures' ]);
	$lists[ 'useGlobalRoomTypes' ] = jomresHTML::selectList($yesno, 'cfg_useGlobalRoomTypes', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useGlobalRoomTypes' ]);
	$lists[ 'selfRegistrationAllowed' ] = jomresHTML::selectList($yesno, 'cfg_selfRegistrationAllowed', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'selfRegistrationAllowed' ]);
	$lists[ 'allowHTMLeditor' ] = jomresHTML::selectList($editoryesno, 'cfg_allowHTMLeditor', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'allowHTMLeditor' ]);
	$lists[ 'dumpTemplate' ] = jomresHTML::selectList($yesno, 'cfg_dumpTemplate', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'dumpTemplate' ]);
	$lists[ 'emailErrors' ] = jomresHTML::selectList($yesno, 'cfg_emailErrors', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'emailErrors' ]);
	$lists[ 'composite_property_details' ] = jomresHTML::selectList($yesno, 'cfg_composite_property_details', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'composite_property_details' ]);

	$lists[ 'show_booking_form_in_property_details' ] = jomresHTML::selectList($yesno, 'cfg_show_booking_form_in_property_details', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'show_booking_form_in_property_details' ]);

	$geosearchList = array();
	$geosearchList[ ] = jomresHTML::makeOption('', '');
	$geosearchList[ ] = jomresHTML::makeOption('town', jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', false));
	$geosearchList[ ] = jomresHTML::makeOption('region', jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false));
	$geosearchDropdownList = jomresHTML::selectList($geosearchList, 'cfg_integratedSearch_geosearchtype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_geosearchtype' ]);

	$calendarStartDays = array();
	$calendarStartDays[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));
	$calendarStartDays[ ] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY', '_JOMRES_COM_MR_WEEKDAYS_MONDAY', false));
	$calendarStartDaysDropdownList = jomresHTML::selectList($calendarStartDays, 'cfg_calendarstartofweekday', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'calendarstartofweekday' ]);

	if (!isset($jrConfig[ 'guestnumbersearch' ])) {
		$jrConfig[ 'guestnumbersearch' ] = 'equal';
	}

	$guestnumbersearchList = array();
	$guestnumbersearchList[ ] = jomresHTML::makeOption('lessthan', '<=');
	$guestnumbersearchList[ ] = jomresHTML::makeOption('equal', '=');
	$guestnumbersearchList[ ] = jomresHTML::makeOption('greaterthan', '>=');
	$guestnumbersearchDropdownList = jomresHTML::selectList($guestnumbersearchList, 'cfg_guestnumbersearch', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'guestnumbersearch' ]);

	$currency_codes = jomres_singleton_abstract::getInstance('currency_codes');
	$currency_codes_dropdown = $currency_codes->makeCodesDropdown($jrConfig[ 'globalCurrencyCode' ], true);

	$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
	$language_context_dropdown = $jomres_property_types->getPropertyTypeDescDropdown($jrConfig[ 'language_context' ], 'cfg_language_context');

	$filtering_level = array();
	$filtering_level[ ] = jomresHTML::makeOption('weak', jr_gettext('_JOMRES_INPUTFILTERING_LEVEL_WEAK', '_JOMRES_INPUTFILTERING_LEVEL_WEAK', false));
	$filtering_level[ ] = jomresHTML::makeOption('strong', jr_gettext('_JOMRES_INPUTFILTERING_LEVEL_STRONG', '_JOMRES_INPUTFILTERING_LEVEL_STRONG', false));
	$filtering_level_dropdown = jomresHTML::selectList($filtering_level, 'cfg_input_filtering', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'input_filtering' ]);

	$production_development = array();
	$production_development[ ] = jomresHTML::makeOption('production', jr_gettext('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', false));
	$production_development[ ] = jomresHTML::makeOption('development', jr_gettext('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', false));
	$production_development_dropdown = jomresHTML::selectList($production_development, 'cfg_development_production', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'development_production' ]);

	if (!isset($jrConfig[ 'navbar_location' ])) {
		$jrConfig[ 'navbar_location' ] = 'component_area';
	}
	$navbar_location = array();
	$navbar_location[ ] = jomresHTML::makeOption('component_area', jr_gettext('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', '_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', false));
	$navbar_location[ ] = jomresHTML::makeOption('navbar-fixed-top', jr_gettext('_JOMRES_BOOTSTRAP_LOCATION_TOP', '_JOMRES_BOOTSTRAP_LOCATION_TOP', false));
	// Disabled as looks like pants in BS3
	//$navbar_location[ ] = jomresHTML::makeOption('navbar-fixed-bottom', jr_gettext('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', '_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', false));
	$navbar_location_dropdown = jomresHTML::selectList($navbar_location, 'cfg_navbar_location', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'navbar_location' ]);

	if (!isset($jrConfig[ 'admin_options_level' ])) {
		$jrConfig[ 'admin_options_level' ] = 0;
	}
	$admin_options_level = array();
	$admin_options_level[ ] = jomresHTML::makeOption(0, jr_gettext('_JOMRES_CONFIG_LEVEL_BASIC', '_JOMRES_CONFIG_LEVEL_BASIC', false));
	$admin_options_level[ ] = jomresHTML::makeOption(1, jr_gettext('_JOMRES_CONFIG_LEVEL_COMMON', '_JOMRES_CONFIG_LEVEL_COMMON', false));
	$admin_options_level[ ] = jomresHTML::makeOption(2, jr_gettext('_JOMRES_CONFIG_LEVEL_EVERYTHING', '_JOMRES_CONFIG_LEVEL_EVERYTHING', false));
	$admin_options_level_dropdown = jomresHTML::selectList($admin_options_level, 'cfg_admin_options_level', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'admin_options_level' ]);



	if (!isset($jrConfig[ 'bootstrap_version' ])) {
		$jrConfig[ 'bootstrap_version' ] = '';
	}

	$bootstrap_ver_opt = array();
    $bootstrap_ver_opt[ ] = jomresHTML::makeOption('0', 'No bootstrap in theme');
	$bootstrap_ver_opt[ ] = jomresHTML::makeOption('', 'Bootstrap 2');
	$bootstrap_ver_opt[ ] = jomresHTML::makeOption('3', 'Bootstrap 3');
	$bootstrap_ver_opt[ ] = jomresHTML::makeOption('4', 'Bootstrap 4');
    $bootstrap_ver_opt[ ] = jomresHTML::makeOption('5', 'Bootstrap 5');
	$bootstrap_ver_dropdown = jomresHTML::selectList($bootstrap_ver_opt, 'cfg_bootstrap_version', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'bootstrap_version' ], false);

	$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
	$MiniComponents->triggerEvent('01004', array()); // optional
	$property_list_layouts = get_showtime('property_list_layouts');

	$layout = array();
	foreach ($property_list_layouts as $key => $val) {
		$layout[ ] = jomresHTML::makeOption($key, $val[ 'title' ]);
	}
	$layouts = jomresHTML::selectList($layout, 'cfg_property_list_layout_default', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'property_list_layout_default' ]);

	$lists[ 'integratedSearch_enable' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_enable', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_enable' ]);
	$lists[ 'integratedSearch_useCols' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_useCols', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_useCols' ]);
	$lists[ 'integratedSearch_selectcombo' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_selectcombo', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_selectcombo' ]);
	$lists[ 'integratedSearch_propertyname' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_propertyname', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_propertyname' ]);
	$lists[ 'integratedSearch_propertyname_dropdown' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_propertyname_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_propertyname_dropdown' ]);
	$lists[ 'integratedSearch_ptype' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_ptype' ]);
	$lists[ 'integratedSearch_category' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_category', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_category' ]);
	$lists[ 'integratedSearch_ptype_dropdown' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_ptype_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_ptype_dropdown' ]);
	$lists[ 'integratedSearch_geosearchtype_dropdown' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_geosearchtype_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_geosearchtype_dropdown' ]);

	if (!isset($jrConfig[ 'integratedSearch_town' ])) {
		$jrConfig[ 'integratedSearch_town' ] = '';
	}
	if (!isset($jrConfig[ 'integratedSearch_town_dropdown' ])) {
		$jrConfig[ 'integratedSearch_town_dropdown' ] = '';
	}

	$lists[ 'integratedSearch_town' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_town' ]);
	$lists[ 'integratedSearch_town_dropdown' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_town_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_town_dropdown' ]);

	$lists[ 'integratedSearch_room_type' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_room_type', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_room_type' ]);
	$lists[ 'integratedSearch_room_type_dropdown' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_room_type_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_room_type_dropdown' ]);
	$lists[ 'integratedSearch_features' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_features', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_features' ]);
	$lists[ 'integratedSearch_features_dropdown' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_features_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_features_dropdown' ]);
	$lists[ 'integratedSearch_description' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_description', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_description' ]);
	$lists[ 'integratedSearch_availability' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_availability', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_availability' ]);
	$lists[ 'integratedSearch_priceranges' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_priceranges', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_priceranges' ]);

	$lists[ 'integratedSearch_guestnumber' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_guestnumber', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_guestnumber' ]);
	$lists[ 'integratedSearch_stars' ] = jomresHTML::selectList($yesno, 'cfg_integratedSearch_stars', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_stars' ]);

	$lists[ 'showLangDropdown' ] = jomresHTML::selectList($yesno, 'cfg_showLangDropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'showLangDropdown' ]);
	
	$jrConfig[ 'useNewusers' ] = '1'; // For Jomres v9.11 and GDPR compliance we are now forcing the system to create new users whenever a booking is made. Leaving this here to clarify this point, however site config will no longer offer this option to be changed
	$lists[ 'useNewusers' ] = jomresHTML::selectList($yesno, 'cfg_useNewusers', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useNewusers' ]);
	
	$lists[ 'is_single_property_installation' ] = jomresHTML::selectList($yesno, 'cfg_is_single_property_installation', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'is_single_property_installation' ]);
	$lists[ 'use_html_purifier' ] = jomresHTML::selectList($yesno, 'cfg_use_html_purifier', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_html_purifier' ]);
	$lists[ 'limit_property_country' ] = jomresHTML::selectList($yesno, 'cfg_limit_property_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'limit_property_country' ]);

	$lists[ 'use_reviews' ] = jomresHTML::selectList($yesno, 'cfg_use_reviews', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_reviews' ]);
	$lists[ 'autopublish_reviews' ] = jomresHTML::selectList($yesno, 'cfg_autopublish_reviews', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'autopublish_reviews' ]);
	$lists[ 'reviews_test_mode' ] = jomresHTML::selectList($yesno, 'cfg_reviews_test_mode', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'reviews_test_mode' ]);
	$lists[ 'show_search_order' ] = jomresHTML::selectList($yesno, 'cfg_show_search_order', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'show_search_order' ]);

	$lists[ 'only_guests_can_review' ] = jomresHTML::selectList($yesno, 'cfg_only_guests_can_review', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'only_guests_can_review' ]);
	$lists[ 'use_timezone_switcher' ] = jomresHTML::selectList($yesno, 'cfg_use_timezone_switcher', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_timezone_switcher' ]);
	$lists[ 'load_jquery' ] = jomresHTML::selectList($yesno, 'cfg_load_jquery', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'load_jquery' ]);
	$lists[ 'use_commission' ] = jomresHTML::selectList($yesno, 'cfg_use_commission', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_commission' ]);
	$lists[ 'manager_bookings_trigger_commission' ] = jomresHTML::selectList($yesno, 'cfg_manager_bookings_trigger_commission', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'manager_bookings_trigger_commission' ]);
	$lists[ 'commission_autosuspend_on_overdue' ] = jomresHTML::selectList($yesno, 'cfg_commission_autosuspend_on_overdue', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'commission_autosuspend_on_overdue' ]);
	$lists[ 'load_jquery_ui' ] = jomresHTML::selectList($yesno, 'cfg_load_jquery_ui', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'load_jquery_ui' ]);
	$lists[ 'load_jquery_ui_css' ] = jomresHTML::selectList($yesno, 'cfg_load_jquery_ui_css', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'load_jquery_ui_css' ]);
	$lists[ 'use_conversion_feature' ] = jomresHTML::selectList($yesno, 'cfg_use_conversion_feature', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_conversion_feature' ]);
	$lists[ 'booking_form_modal_popup' ] = jomresHTML::selectList($yesno, 'cfg_booking_form_modal_popup', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'booking_form_modal_popup' ]);
	$lists[ 'useNewusers_sendemail' ] = jomresHTML::selectList($yesno, 'cfg_useNewusers_sendemail', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useNewusers_sendemail' ]);
	$lists[ 'show_tax_in_totals_summary' ] = jomresHTML::selectList($yesno, 'cfg_show_tax_in_totals_summary', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'show_tax_in_totals_summary' ]);
	$lists[ 'alternate_smtp_use_settings' ] = jomresHTML::selectList($yesno, 'cfg_alternate_smtp_use_settings', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'alternate_smtp_use_settings' ]);
	$lists[ 'alternate_smtp_authentication' ] = jomresHTML::selectList($yesno, 'cfg_alternate_smtp_authentication', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'alternate_smtp_authentication' ]);
	$lists[ 'alternate_mainmenu' ] = jomresHTML::selectList($yesno, 'cfg_alternate_mainmenu', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'alternate_mainmenu' ]);
	$lists[ 'safe_mode' ] = jomresHTML::selectList($yesno, 'cfg_safe_mode', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'safe_mode' ]);
	$lists[ 'use_jomres_own_editor' ] = jomresHTML::selectList($yesno, 'cfg_use_jomres_own_editor', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_jomres_own_editor' ]);
	$lists[ 'property_details_in_tabs' ] = jomresHTML::selectList($yesno, 'cfg_property_details_in_tabs', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'property_details_in_tabs' ]);

	$lists[ 'gmap_layer_weather' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_weather', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_weather' ]);
	$lists[ 'gmap_layer_panoramio' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_panoramio', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_panoramio' ]);
	$lists[ 'gmap_layer_transit' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_transit', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_transit' ]);
	$lists[ 'gmap_layer_traffic' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_traffic', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_traffic' ]);
	$lists[ 'gmap_layer_bicycling' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_bicycling', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_bicycling' ]);
	$lists[ 'gmap_pois' ] = jomresHTML::selectList($yesno, 'cfg_gmap_pois', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_pois' ]);

	$lists[ 'review_nag' ] = jomresHTML::selectList($yesno, 'cfg_review_nag', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'review_nag' ]);
	$lists[ 'optimize_images' ] = jomresHTML::selectList($yesno, 'cfg_optimize_images', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'optimize_images' ]);

	$lists[ 'frontend_room_type_editing_allowed' ] = jomresHTML::selectList($yesno, 'cfg_frontend_room_type_editing_allowed', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'frontend_room_type_editing_allowed' ]);
	
	$lists[ 'frontend_room_type_editing_show_property_room_types_in_search_options' ] = jomresHTML::selectList($yesno, 'cfg_frontend_room_type_editing_show_property_room_types_in_search_options', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'frontend_room_type_editing_show_property_room_types_in_search_options' ]);

	$lists[ 'useSyndication' ] = jomresHTML::selectList($yesno, 'cfg_useSyndication', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useSyndication' ]);

	if (!isset($jrConfig[ 'compatability_property_configuration' ])) { // New installations will automatically set this to Yes, therefore if it's not set this was an updated installation and we should by default set this to No and allow the site managers to decide if they want to enable the setting
		$jrConfig[ 'compatability_property_configuration' ] = 0;
	}
	$lists[ 'compatability_property_configuration' ] = jomresHTML::selectList($yesno, 'cfg_compatability_property_configuration', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'compatability_property_configuration' ]);

	if (!isset($jrConfig[ 'collect_analytics_allowed' ])) {
		$jrConfig[ 'collect_analytics_allowed' ] = 0;
	}
	$lists[ 'collect_analytics_allowed' ] = jomresHTML::selectList($yesno, 'cfg_collect_analytics_allowed', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'collect_analytics_allowed' ]);



	if (!isset($jrConfig['show_powered_by'])) {
		$jrConfig['show_powered_by'] = '0';
	}
	$lists[ 'show_powered_by' ] = jomresHTML::selectList($yesno, 'cfg_show_powered_by', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'show_powered_by' ]);

	$lists[ 'use_budget_feature' ] = jomresHTML::selectList($yesno, 'cfg_use_budget_feature', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_budget_feature' ]);

	if (!isset($jrConfig[ 'navbar_inverse' ])) {
		$jrConfig[ 'navbar_inverse' ] = 0;
	}

	$lists[ 'navbar_inverse' ] = jomresHTML::selectList($yesno, 'cfg_navbar_inverse', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'navbar_inverse' ]);

	if (!isset($jrConfig[ 'automatically_approve_new_properties' ])) {
		$jrConfig[ 'automatically_approve_new_properties' ] = '1';
	}

	$lists[ 'region_names_are_translatable' ] = jomresHTML::selectList($yesno, 'cfg_region_names_are_translatable', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'region_names_are_translatable' ]);

	$lists[ 'automatically_approve_new_properties' ] = jomresHTML::selectList($yesno, 'cfg_automatically_approve_new_properties', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'automatically_approve_new_properties' ]);

	if (!isset($jrConfig[ 'use_bootstrap_in_frontend' ])) {
		if (this_cms_is_joomla()) {
			$jrConfig[ 'use_bootstrap_in_frontend' ] = '1';
		} else {
			$jrConfig[ 'use_bootstrap_in_frontend' ] = '0';
		}
	}

	$lists[ 'use_bootstrap_in_frontend' ] = jomresHTML::selectList($yesno, 'cfg_use_bootstrap_in_frontend', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_bootstrap_in_frontend' ]);

	if (!isset($jrConfig['live_scrolling_enabled'])) {
		$jrConfig['live_scrolling_enabled'] = '1';
	}

	$lists[ 'live_scrolling_enabled' ] = jomresHTML::selectList($yesno, 'cfg_live_scrolling_enabled', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'live_scrolling_enabled' ]);

	if (!isset($jrConfig[ 'load_font_awesome' ])) {
		$jrConfig[ 'load_font_awesome' ] = '0';
	}
	$lists[ 'load_font_awesome' ] = jomresHTML::selectList($yesno, 'cfg_load_font_awesome', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'load_font_awesome' ]);
	$lists[ 'override_property_contact_details' ] = jomresHTML::selectList($yesno, 'cfg_override_property_contact_details', 'class="inputbox" size="1"', 'value', 'text', (int) $jrConfig[ 'override_property_contact_details' ]);

	$lists[ 'currency_symbol_swap' ] = jomresHTML::selectList($yesno, 'cfg_currency_symbol_swap', 'class="inputbox" size="1"', 'value', 'text', (int) $jrConfig[ 'currency_symbol_swap' ]);

	$map_styles = array();
	$map_style_files = get_map_styles();
	foreach ($map_style_files as $style_file) {
		$map_styles[ ] = jomresHTML::makeOption($style_file, $style_file);
	}
	$map_styles_dropdown = jomresHTML::selectList($map_styles, 'cfg_map_style', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'map_style' ]);

	$lists[ 'sendErrorEmails' ] = jomresHTML::selectList($yesno, 'cfg_sendErrorEmails', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sendErrorEmails' ]);
	$lists[ 'plist_images_as_slideshow' ] = jomresHTML::selectList($yesno, 'cfg_plist_images_as_slideshow', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'plist_images_as_slideshow' ]);
	$lists[ 'delete_all_data_on_uninstall' ] = jomresHTML::selectList($yesno, 'cfg_delete_all_data_on_uninstall', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'delete_all_data_on_uninstall' ]);

	$options = array();
	$options[ ] = jomresHTML::makeOption('Minicomponent', 'Minicomponent');
	$options[ ] = jomresHTML::makeOption('Cron', 'Cron job');
	$lists[ 'cron_method' ] = jomresHTML::selectList($options, 'cfg_cron_method', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'cron_method' ]);
	
	$options = array();
	$options[ ] = jomresHTML::makeOption('file', 'File');
	$options[ ] = jomresHTML::makeOption('database', 'Database');
	$lists[ 'session_handler' ] = jomresHTML::selectList($options, 'cfg_session_handler', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'session_handler' ]);
	
	$options = array();
	$options[] = jomresHTML::makeOption( 'ROADMAP', 'Roadmap' );
	$options[] = jomresHTML::makeOption( 'SATELLITE', 'Satellite' );
	$options[] = jomresHTML::makeOption( 'HYBRID', 'Hybrid' );
	$options[] = jomresHTML::makeOption( 'TERRAIN', 'Terrain' );
	$lists[ 'map_type' ] = jomresHTML::selectList($options, 'cfg_map_type', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'map_type' ]);
	
	//frontend cpanel home page grid options
	$options = array();
	$options[ ] = jomresHTML::makeOption('2/3 1/3', '2/3 | 1/3');
	$options[ ] = jomresHTML::makeOption('1/3 2/3', '1/3 | 2/3');
	$options[ ] = jomresHTML::makeOption('1/3 1/3 1/3', '1/3 | 1/3 | 1/3');
	$options[ ] = jomresHTML::makeOption('1/4 1/4 1/4 1/4', '1/4 | 1/4 | 1/4 | 1/4');
	$lists[ 'front_cpanel_home_grid' ] = jomresHTML::selectList($options, 'cfg_front_cpanel_home_grid', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'front_cpanel_home_grid' ]);
	
	$options = array();
	for ($i=1;$i<=23;$i++)
		{
		$options[] = jomresHTML::makeOption( $i, $i );
		}
	$lists[ 'map_zoom' ] = jomresHTML::selectList($options, 'cfg_map_zoom', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'map_zoom' ]);
	
	$lists[ 'send_email_copies_to_site_admins' ] = jomresHTML::selectList($yesno, 'cfg_send_email_copies_to_site_admins', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'send_email_copies_to_site_admins' ]);

	$lists[ 'enable_gdpr_compliant_fucntionality' ] = jomresHTML::selectList($yesno, 'cfg_enable_gdpr_compliant_fucntionality', 'class="inputbox" size="1"', 'value', 'text', (int) $jrConfig[ 'enable_gdpr_compliant_fucntionality' ]);
	
	
	$lists[ 'prioritise_sitewide_label_definitions' ] = jomresHTML::selectList($yesno, 'cfg_prioritise_sitewide_label_definitions', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'prioritise_sitewide_label_definitions' ]);
	
	$lists[ 'generate_random_emails' ] = jomresHTML::selectList($yesno, 'cfg_generate_random_emails', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'generate_random_emails' ]);

  	$lists[ 'use_groupby_fix' ] = jomresHTML::selectList($yesno, 'cfg_use_groupby_fix', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_groupby_fix' ]);

	$componentArgs = array();
	$componentArgs[ 'lists' ] = $lists;
	$componentArgs[ 'jsInputFormatDropdownList' ] = $jsInputFormatDropdownList;
	$componentArgs[ 'jrtb' ] = $jrtb;
	$componentArgs[ 'geosearchDropdownList' ] = $geosearchDropdownList;
	$componentArgs[ 'currency_codes_dropdown' ] = $currency_codes_dropdown;
	$componentArgs[ 'jqueryUIthemesDropdownList' ] = $jqueryUIthemesDropdownList;
	$componentArgs[ 'sortArrayDropdown' ] = $sortArrayDropdown;
	$componentArgs[ 'calendarStartDaysDropdownList' ] = $calendarStartDaysDropdownList;
	$componentArgs[ 'language_context_dropdown' ] = $language_context_dropdown;
	$componentArgs[ 'guestnumbersearchDropdownList' ] = $guestnumbersearchDropdownList;
	$componentArgs[ 'filtering_level_dropdown' ] = $filtering_level_dropdown;
	$componentArgs[ 'layouts' ] = $layouts;
	$componentArgs[ 'production_development_dropdown' ] = $production_development_dropdown;
	$componentArgs[ 'navbar_location_dropdown' ] = $navbar_location_dropdown;
	$componentArgs[ 'bootstrap_ver_dropdown' ] = $bootstrap_ver_dropdown;
	$componentArgs[ 'map_styles_dropdown' ] = $map_styles_dropdown;
	$componentArgs[ 'admin_options_level_dropdown' ] = $admin_options_level_dropdown;

	ob_start(); ?>
	<h2 class="page-header">Jomres <?php echo jr_gettext('_JOMRES_A', '_JOMRES_A', false); ?></h2>
	<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="post" name="adminForm">
		<input type="hidden" name="cfg_useGlobalPFeatures" value="<?php echo $jrConfig[ 'useGlobalPFeatures' ]; ?>"/>
		<input type="hidden" name="cfg_useGlobalRoomTypes" value="<?php echo $jrConfig[ 'useGlobalRoomTypes' ]; ?>"/>
		<input type="hidden" name="cfg_dynamicMinIntervalRecalculation" value="<?php echo $jrConfig[ 'dynamicMinIntervalRecalculation' ]; ?>"/>
		<input type="hidden" name="cfg_disableAudit" value="<?php echo $jrConfig[ 'disableAudit' ]; ?>"/>
		<input type="hidden" name="cfg_allowedTags" value="<?php echo $jrConfig[ 'allowedTags' ]; ?>"/>
		<input type="hidden" name="no_html" value="1"/>
		<input type="hidden" name="task" value="save_site_settings"/>
		<input type="hidden" name="option" value="com_jomres"/>
		<input type="hidden" name="jomres_csrf_token" value="<?php echo csrf::setToken(); ?>"/>

	<?php
	echo $jrtb;

    $bs_version = jomres_bootstrap_version();
    if ($bs_version == '2' || $bs_version == '') {
        $configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel');
    } elseif ($bs_version == '5') {
        $configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel_bootstrap5');
    }

	$componentArgs[ 'configurationPanel' ] = $configurationPanel;

	$configurationPanel->startTabs();

	$MiniComponents->triggerEvent('10501', $componentArgs); // Generate configuration options tabs

	$configurationPanel->endTabs();
	?>
	</form>
	<?php
	ob_end_flush();
}

/**
 * @package Jomres\Core\Functions
 *
 * Saves the site configuration data.
 */
function saveSiteConfig($overrides = array())
{

	ignore_user_abort(true);

	if (file_exists(JOMRES_TEMP_ABSPATH.'key.php')) {
		unlink(JOMRES_TEMP_ABSPATH.'key.php');
	}

	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
		include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php';
		$tmpConfig = $jrConfig;
	} else {
		include JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'site_config.php';
		$tmpConfig = $jrConfig;
	}
	if (!empty($overrides)) {
		foreach ($overrides as $key => $val) {
			$tmpConfig[$key] = $val;
		}
	}

	foreach ($_POST as $k => $v) {
		if (strpos($k, 'cfg_') !== false && !is_array($v) ) {
			$v = jomresGetParam($_POST, $k, '');
			
			$dirty = (string) $k;
			$k = substr(addslashes($dirty), 4);
			$v = filter_var($v, FILTER_SANITIZE_SPECIAL_CHARS);

			$tmpConfig[ $k ] = $v;
		} elseif (strpos($k, 'cfgArr_') !== false) {
			$v = jomresGetParam($_POST, $k, array());
			$v = implode(',',$v);
			
			$dirty = (string) $k;
			$k = substr(addslashes($dirty), 7);
			$v = filter_var($v, FILTER_SANITIZE_SPECIAL_CHARS);

			$tmpConfig[ $k ] = $v;
		} elseif (is_array($v)) { // Adds support for multi-dimensional arrays being used for channel manager framework
			$dirty = (string) $k;
			$k = substr(addslashes($dirty), 4);
			if (is_array($v)) {
				foreach ( $v as $a=>$b) {
					if (is_array($b)) {
						foreach ($b as $c=>$d) {
							
							$a = (string)filter_var($a, FILTER_SANITIZE_SPECIAL_CHARS);
							$c = (string)filter_var($c, FILTER_SANITIZE_SPECIAL_CHARS);
							$d = (string)filter_var($d, FILTER_SANITIZE_SPECIAL_CHARS);

							$tmpConfig[$k][$a][$c] = $d;
						}
					}
				}
			}
		}
	}

	//save config to file
	$config_last_modified = filemtime(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php');

	$result = file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
		'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($tmpConfig, true).';
');

	// On my Ubuntu box, and on some client boxes, there's a delay in saving the config file so we will wait, then wait a bit more after the file mod time has been updated

	do {
		sleep(1); // Writing the file could take a moment
		clearstatcache();
		$newest_last_modified_check = filemtime(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php');
	} while ( $newest_last_modified_check <= $config_last_modified);

	sleep(2);

	if (!$result) {
		trigger_error('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
		exit;
	}

	//cleanup
	$registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
	$registry->regenerate_registry();

	
	if (file_exists(JOMRES_TEMP_ABSPATH.'latest_version.php')) { 
		unlink(JOMRES_TEMP_ABSPATH.'latest_version.php');
	}
	
	if (empty($overrides)) { // If we've come from the Site Config page, we want to redirect the user back to the site configuration page, otherwise we don't redirect.
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=site_settings'), 'Configuration saved');
	}
}

/**
 * @package Jomres\Core\Functions
 *
 *  Colour schemes for google maps
 */
function searchCSSThemesDirForCSSFiles()
{
	$cssFiles = array();
	$jrePath = JOMRES_NODE_MODULES_ABSPATH.'jquery-ui-themes'.JRDS.'themes'.JRDS;
	$d = @dir($jrePath);
	$docs = array();
	if ($d) {
		while (false !== ($entry = $d->read())) {
			if (substr($entry, 0, 1) != '.') {
				$docs[ ] = $entry;
			}
		}
		$d->close();
		if (!empty($docs)) {
			sort($docs);
			foreach ($docs as $doc) {
				$listdir = $jrePath.$doc.JRDS;
				$dr = @dir($listdir);
				if ($dr) {
					while (false !== ($entry = $dr->read())) {
						$filename = $entry;
						$tmpArr = explode('.', $filename);
						$extension = $tmpArr[ count($tmpArr) - 1 ];
						if ($filename == 'jquery-ui.min.css') {
							$cssFiles[ ] = array('cssfile' => $filename, 'subdir' => $doc);
						}
					}
					$dr->close();
				}
			}
		}
	}
	$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
	$colourSchemeDataArray = $MiniComponents->triggerEvent('00021'); // optional

	if (is_array($colourSchemeDataArray)) {
		$cssFiles = array_merge($cssFiles, $colourSchemeDataArray);
	}

	return $cssFiles;
}

/**
 * @package Jomres\Core\Functions
 *
 *  Find google map styles
 */
function get_map_styles()
{
	$map_style_dir = JOMRES_ASSETS_ABSPATH.'map_styles'.JRDS;
	$styles = array();
	foreach (new DirectoryIterator($map_style_dir) as $file) {
		if ($file->isFile()) {
			$bang = explode('.', $file->getfilename());
			$styles[] = $bang[0];
		}
	}
	natsort($styles);

	return $styles;
}
