<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

//===============================
// Site Config Functions
//===============================

/**
 * Compiles data in preparation for showing the site configuration panel.
 */
function showSiteConfig()
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

    $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
    $jrtb = $jrtbar->startTable();
    $image = $jrtbar->makeImageValid('/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/Save.png');
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
        if (isset($file[ 'customPath' ])) {
            $jqueryUIthemes[ ] = jomresHTML::makeOption($file[ 'subdir' ].'^'.$file[ 'cssfile' ].'^'.$file[ 'customPath' ], $file[ 'subdir' ]);
        } else {
            $jqueryUIthemes[ ] = jomresHTML::makeOption($file[ 'subdir' ].'^'.$file[ 'cssfile' ], $file[ 'subdir' ]);
        }
    }

    $jqueryUIthemesDropdownList = jomresHTML::selectList($jqueryUIthemes, 'cfg_jquery_ui_theme_detected', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'jquery_ui_theme_detected' ]);

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
    $lists[ 'isInIframe' ] = jomresHTML::selectList($yesno, 'cfg_isInIframe', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'isInIframe' ]);
    $lists[ 'allowHTMLeditor' ] = jomresHTML::selectList($editoryesno, 'cfg_allowHTMLeditor', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'allowHTMLeditor' ]);
    $lists[ 'dumpTemplate' ] = jomresHTML::selectList($yesno, 'cfg_dumpTemplate', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'dumpTemplate' ]);
    $lists[ 'useSSLinBookingform' ] = jomresHTML::selectList($yesno, 'cfg_useSSLinBookingform', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useSSLinBookingform' ]);
    $lists[ 'emailErrors' ] = jomresHTML::selectList($yesno, 'cfg_emailErrors', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'emailErrors' ]);
    $lists[ 'minimalconfiguration' ] = jomresHTML::selectList($yesno, 'cfg_minimalconfiguration', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'minimalconfiguration' ]);
    $lists[ 'useJomresEmailCheck' ] = jomresHTML::selectList($yesno, 'cfg_useJomresEmailCheck', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useJomresEmailCheck' ]);
    $lists[ 'autoDetectJSCalendarLang' ] = jomresHTML::selectList($yesno, 'cfg_autoDetectJSCalendarLang', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'autoDetectJSCalendarLang' ]);
    $lists[ 'composite_property_details' ] = jomresHTML::selectList($yesno, 'cfg_composite_property_details', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'composite_property_details' ]);

    $lists[ 'sef_property_url_country' ] = jomresHTML::selectList($yesno, 'cfg_sef_property_url_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_property_url_country' ]);
    $lists[ 'sef_property_url_region' ] = jomresHTML::selectList($yesno, 'cfg_sef_property_url_region', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_property_url_region' ]);
    $lists[ 'sef_property_url_town' ] = jomresHTML::selectList($yesno, 'cfg_sef_property_url_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_property_url_town' ]);
    $lists[ 'sef_property_url_ptype' ] = jomresHTML::selectList($yesno, 'cfg_sef_property_url_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_property_url_ptype' ]);
    $lists[ 'sef_property_url_propertyname' ] = jomresHTML::selectList($yesno, 'cfg_sef_property_url_propertyname', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_property_url_propertyname' ]);
    $lists[ 'sef_property_url_property_id' ] = jomresHTML::selectList($yesno, 'cfg_sef_property_url_property_id', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_property_url_property_id' ]);
    $lists[ 'sef_search_url_country' ] = jomresHTML::selectList($yesno, 'cfg_sef_search_url_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_search_url_country' ]);
    $lists[ 'sef_search_url_region' ] = jomresHTML::selectList($yesno, 'cfg_sef_search_url_region', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_search_url_region' ]);
    $lists[ 'sef_search_url_town' ] = jomresHTML::selectList($yesno, 'cfg_sef_search_url_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_search_url_town' ]);
    $lists[ 'sef_search_url_ptype' ] = jomresHTML::selectList($yesno, 'cfg_sef_search_url_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'sef_search_url_ptype' ]);

    $lists[ 'show_booking_form_in_property_details' ] = jomresHTML::selectList($yesno, 'cfg_show_booking_form_in_property_details', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'show_booking_form_in_property_details' ]);

    $geosearchList = array();
    $geosearchList[ ] = jomresHTML::makeOption('', '');
    $geosearchList[ ] = jomresHTML::makeOption('town', jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', false));
    $geosearchList[ ] = jomresHTML::makeOption('region', jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false));
    $geosearchDropdownList = jomresHTML::selectList($geosearchList, 'cfg_integratedSearch_geosearchtype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'integratedSearch_geosearchtype' ]);

    $mapWeatherTempGrad = array();
    $mapWeatherTempGrad[ ] = jomresHTML::makeOption('CELCIUS', jr_gettext('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', false));
    $mapWeatherTempGrad[ ] = jomresHTML::makeOption('FAHRENHEIT', jr_gettext('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', false));
    $mapWeatherTempGradDropdownList = jomresHTML::selectList($mapWeatherTempGrad, 'cfg_gmap_layer_temperature_grad', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_temperature_grad' ]);

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

    $language_context = array();
    $ptype_descs = array();
    $language_context[ ] = jomresHTML::makeOption('', '');

    if (count($basic_property_details->all_property_types) > 0) {
        foreach ($basic_property_details->all_property_types as $k => $v) {
            $ptype_descs[] = $v;
        }
        $ptype_descs = array_unique($ptype_descs);
        foreach ($ptype_descs as $desc) {
            $language_context[ ] = jomresHTML::makeOption($desc, $desc);
        }
    }
    $language_context_dropdown = jomresHTML::selectList($language_context, 'cfg_language_context', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'language_context' ], false);

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
    $navbar_location[ ] = jomresHTML::makeOption('navbar-fixed-bottom', jr_gettext('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', '_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', false));
    $navbar_location_dropdown = jomresHTML::selectList($navbar_location, 'cfg_navbar_location', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'navbar_location' ]);

    if (!isset($jrConfig[ 'bootstrap_version' ])) {
        $jrConfig[ 'bootstrap_version' ] = '';
    }

    $bootstrap_ver_opt = array();
    $bootstrap_ver_opt[ ] = jomresHTML::makeOption('', 'Bootstrap 2');
    $bootstrap_ver_opt[ ] = jomresHTML::makeOption('3', 'Bootstrap 3');
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

    $lists[ 'useArrayCaching' ] = jomresHTML::selectList($yesno, 'cfg_useArrayCaching', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useArrayCaching' ]);
    $lists[ 'showLangDropdown' ] = jomresHTML::selectList($yesno, 'cfg_showLangDropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'showLangDropdown' ]);
    $lists[ 'useNewusers' ] = jomresHTML::selectList($yesno, 'cfg_useNewusers', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useNewusers' ]);
    $lists[ 'outputHeadersInline' ] = jomresHTML::selectList($yesno, 'cfg_outputHeadersInline', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'outputHeadersInline' ]);
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
    $lists[ 'advanced_site_config' ] = jomresHTML::selectList($yesno, 'cfg_advanced_site_config', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'advanced_site_config' ]);
    $lists[ 'load_jquery_ui' ] = jomresHTML::selectList($yesno, 'cfg_load_jquery_ui', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'load_jquery_ui' ]);
    $lists[ 'load_jquery_ui_css' ] = jomresHTML::selectList($yesno, 'cfg_load_jquery_ui_css', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'load_jquery_ui_css' ]);
    $lists[ 'use_conversion_feature' ] = jomresHTML::selectList($yesno, 'cfg_use_conversion_feature', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_conversion_feature' ]);
    $lists[ 'booking_form_modal_popup' ] = jomresHTML::selectList($yesno, 'cfg_booking_form_modal_popup', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'booking_form_modal_popup' ]);
    $lists[ 'booking_form_totals_panel_as_slider' ] = jomresHTML::selectList($yesno, 'cfg_booking_form_totals_panel_as_slider', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'booking_form_totals_panel_as_slider' ]);
    $lists[ 'useNewusers_sendemail' ] = jomresHTML::selectList($yesno, 'cfg_useNewusers_sendemail', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'useNewusers_sendemail' ]);
    $lists[ 'show_tax_in_totals_summary' ] = jomresHTML::selectList($yesno, 'cfg_show_tax_in_totals_summary', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'show_tax_in_totals_summary' ]);
    $lists[ 'alternate_smtp_use_settings' ] = jomresHTML::selectList($yesno, 'cfg_alternate_smtp_use_settings', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'alternate_smtp_use_settings' ]);
    $lists[ 'alternate_smtp_authentication' ] = jomresHTML::selectList($yesno, 'cfg_alternate_smtp_authentication', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'alternate_smtp_authentication' ]);
    $lists[ 'alternate_mainmenu' ] = jomresHTML::selectList($yesno, 'cfg_alternate_mainmenu', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'alternate_mainmenu' ]);
    $lists[ 'full_access_control' ] = jomresHTML::selectList($yesno, 'cfg_full_access_control', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'full_access_control' ]);
    $lists[ 'safe_mode' ] = jomresHTML::selectList($yesno, 'cfg_safe_mode', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'safe_mode' ]);
    $lists[ 'use_jomres_own_editor' ] = jomresHTML::selectList($yesno, 'cfg_use_jomres_own_editor', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'use_jomres_own_editor' ]);
    $lists[ 'property_details_in_tabs' ] = jomresHTML::selectList($yesno, 'cfg_property_details_in_tabs', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'property_details_in_tabs' ]);

    $lists[ 'gmap_layer_weather' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_weather', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_weather' ]);
    $lists[ 'gmap_layer_panoramio' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_panoramio', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_panoramio' ]);
    $lists[ 'gmap_layer_transit' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_transit', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_transit' ]);
    $lists[ 'gmap_layer_traffic' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_traffic', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_traffic' ]);
    $lists[ 'gmap_layer_bicycling' ] = jomresHTML::selectList($yesno, 'cfg_gmap_layer_bicycling', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_layer_bicycling' ]);
    $lists[ 'gmap_pois' ] = jomresHTML::selectList($yesno, 'cfg_gmap_pois', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'gmap_pois' ]);

    if (!isset($jrConfig[ 'send_tracking_data' ])) {
        $jrConfig[ 'send_tracking_data' ] = '0';
    }

    $lists[ 'send_tracking_data' ] = jomresHTML::selectList($yesno, 'cfg_send_tracking_data', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'send_tracking_data' ]);

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
    $lists[ 'show_cumulative_price_overlay' ] = jomresHTML::selectList($yesno, 'cfg_show_cumulative_price_overlay', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'show_cumulative_price_overlay' ]);

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

	$method = array();
	$method[ ] = jomresHTML::makeOption('Minicomponent', 'Minicomponent');
	$method[ ] = jomresHTML::makeOption('Cron', 'Cron job');
	$lists[ 'cron_method' ] = jomresHTML::selectList($method, 'method', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'cron_method' ]);

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
    $componentArgs[ 'mapWeatherTempGradDropdownList' ] = $mapWeatherTempGradDropdownList;
    $componentArgs[ 'production_development_dropdown' ] = $production_development_dropdown;
    $componentArgs[ 'navbar_location_dropdown' ] = $navbar_location_dropdown;
    $componentArgs[ 'bootstrap_ver_dropdown' ] = $bootstrap_ver_dropdown;
    $componentArgs[ 'map_styles_dropdown' ] = $map_styles_dropdown;

    ob_start(); ?>
	<h2 class="page-header">Jomres <?php echo jr_gettext('_JOMRES_A', '_JOMRES_A', false); ?></h2>
	<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="post" name="adminForm">

	<?php
    echo $jrtb;

    $configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel');

    $componentArgs[ 'configurationPanel' ] = $configurationPanel;

    $configurationPanel->startTabs();

    $MiniComponents->triggerEvent('10501', $componentArgs); // Generate configuration options tabs

    $configurationPanel->endTabs(); ?>

	<input type="hidden" name="cfg_useGlobalPFeatures" value="<?php echo $jrConfig[ 'useGlobalPFeatures' ]; ?>"/>
	<input type="hidden" name="cfg_useGlobalRoomTypes" value="<?php echo $jrConfig[ 'useGlobalRoomTypes' ]; ?>"/>
	<input type="hidden" name="cfg_dynamicMinIntervalRecalculation" value="<?php echo $jrConfig[ 'dynamicMinIntervalRecalculation' ]; ?>"/>
	<input type="hidden" name="cfg_disableAudit" value="<?php echo $jrConfig[ 'disableAudit' ]; ?>"/>
	<input type="hidden" name="cfg_allowedTags" value="<?php echo $jrConfig[ 'allowedTags' ]; ?>"/>
	<input type="hidden" name="cfg_utfHTMLdecode" value="<?php echo $jrConfig[ 'utfHTMLdecode' ]; ?>"/>
	<input type="hidden" name="no_html" value="1"/>
	<input type="hidden" name="task" value="save_site_settings"/>
	<input type="hidden" name="option" value="com_jomres"/>
	</form>
	<?php
    ob_end_flush();
}

/**
 * Saves the site configuration data.
 */
function saveSiteConfig($overrides = array())
{
    ignore_user_abort(true);

    if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'key.php')) {
        unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'key.php');
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
        if (strpos($k, 'cfg_') !== false) {
            $v = jomresGetParam($_POST, $k, '');
            $dirty = (string) $k;
            $k = substr(addslashes($dirty), 4);
            $v = filter_var($v, FILTER_SANITIZE_SPECIAL_CHARS);

            $tmpConfig[ $k ] = $v;
        }
    }

    //save config to file
    if (!file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($tmpConfig, true).';
')) {
        trigger_error('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
        exit;
    }

    //cleanup
    $registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
    $registry->regenerate_registry();

    $c = jomres_singleton_abstract::getInstance('jomres_array_cache');
    $c->eraseAll();

    if (empty($overrides)) { // If we've come from the Site Config page, we want to redirect the user back to the site configuration page, otherwise we don't redirect.
        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=site_settings'), 'Configuration saved');
    }
}

function searchCSSThemesDirForCSSFiles()
{
    $cssFiles = array();
    $jrePath = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'css'.JRDS.'jquery_ui_themes'.JRDS;
    $d = @dir($jrePath);
    $docs = array();
    if ($d) {
        while (false !== ($entry = $d->read())) {
            if (substr($entry, 0, 1) != '.') {
                $docs[ ] = $entry;
            }
        }
        $d->close();
        if (count($docs) > 0) {
            sort($docs);
            foreach ($docs as $doc) {
                $listdir = $jrePath.$doc.JRDS;
                $dr = @dir($listdir);
                if ($dr) {
                    while (false !== ($entry = $dr->read())) {
                        $filename = $entry;
                        $tmpArr = explode('.', $filename);
                        $extension = $tmpArr[ count($tmpArr) - 1 ];
                        if ($filename == 'jquery-ui.css') {
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

function get_map_styles()
{
    $map_style_dir = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'map_styles'.JRDS;
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
