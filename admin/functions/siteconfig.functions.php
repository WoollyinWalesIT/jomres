<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

//===============================
// Site Config Functions
//===============================

/**
#
 * Compiles data in preperation for showing the site configuration panel
#
 */
function showSiteConfig(  )
	{
	global $version;

	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();

	$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
	$jrtb  = $jrtbar->startTable();
	$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
	$link = JOMRES_SITEPAGE_URL_ADMIN;
	$jrtb .= $jrtbar->customToolbarItem('saveSiteConfig',$link,_JOMRES_COM_MR_SAVE,$submitOnClick=true,$submitTask="saveSiteConfig",$image);
	$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
	$jrtb .= $jrtbar->endTable();

	if (!isset($jrConfig['load_jquery_ui']))
		$jrConfig['load_jquery_ui'] = "1";
	
	$lists = array();
	$list = array();
	// make a standard yes/no list
	$yesno = array();
	$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
	$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );

	$langDropdown=getJomresLanguagesDropdown();

	$editoryesno = array();
	$editoryesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
	$editoryesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
	
	$sortArray = array();  // The search order dropdown list, this configure's the default.
	$sortArray[]=jomresHTML::makeOption("1", jr_gettext('_JOMRES_SORTORDER_DEFAULT',_JOMRES_SORTORDER_DEFAULT,false,false));
	$sortArray[]=jomresHTML::makeOption("2", jr_gettext('_JOMRES_SORTORDER_PROPERTYNAME',_JOMRES_SORTORDER_PROPERTYNAME,false,false));
	$sortArray[]=jomresHTML::makeOption("3", jr_gettext('_JOMRES_SORTORDER_PROPERTYREGION',_JOMRES_SORTORDER_PROPERTYREGION,false,false));
	$sortArray[]=jomresHTML::makeOption("4", jr_gettext('_JOMRES_SORTORDER_PROPERTYTOWN',_JOMRES_SORTORDER_PROPERTYTOWN,false,false));
	$sortArray[]=jomresHTML::makeOption("5", jr_gettext('_JOMRES_SORTORDER_STARS',_JOMRES_SORTORDER_STARS,false,false));
	$sortArrayDropdown = jomresHTML::selectList( $sortArray, 'cfg_search_order_default', 'id="sortby" size="1"', 'value', 'text', $jrConfig['search_order_default'] );
	
	
	$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
	$licensekey=doSelectSql($query,1);

	$jsInputDateFormats[] =  jomresHTML::makeOption("%d/%m/%Y", "01/02/2006 - 1st February 2006");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%Y/%m/%d", "2006/02/01");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%m/%d/%Y", "02/01/2006");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%d-%m-%Y", "01-02-2006");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%Y-%m-%d", "2006-02-01");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%m-%d-%Y", "02-01-2006");
	$jsInputFormatDropdownList= jomresHTML::selectList($jsInputDateFormats, 'cfg_cal_input', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['cal_input']);

	$jqueryUIthemes = array();
	$cssFiles=searchCSSThemesDirForCSSFiles();
	foreach ($cssFiles as $file)
		{
		if (isset($file['customPath']))
			$jqueryUIthemes[] =  jomresHTML::makeOption($file['subdir']."^".$file['cssfile']."^".$file['customPath'], $file['subdir']);
		else
			$jqueryUIthemes[] =  jomresHTML::makeOption($file['subdir']."^".$file['cssfile'], $file['subdir']);
		}
	
	$jqueryUIthemesDropdownList= jomresHTML::selectList($jqueryUIthemes, 'cfg_jquery_ui_theme_detected', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['jquery_ui_theme_detected']);

	if (!isset($jrConfig['cssColourScheme']) )
		$jrConfig['cssColourScheme']="blue";

	jr_import('jrportal_crate_functions');
	$crateFunctions=new jrportal_crate_functions();
	$crateList=$crateFunctions->getAllUnarchivedCrates();
	$crateOptions=array();
	foreach ($crateList as $c)
		{
		$crateOptions[] = jomresHTML::makeOption( $c['id'], $c['title'] );
		}
	$lists['defaultCrate']	= jomresHTML::selectList( $crateOptions, 'cfg_defaultCrate','class="inputbox" size="1"', 'value', 'text', $jrConfig['defaultCrate']);
	$lists['menusAsImages']				= jomresHTML::selectList( $yesno, 'cfg_menusAsImages','class="inputbox" size="1"', 'value', 'text', $jrConfig['menusAsImages']);
	$lists['errorChecking']				= jomresHTML::selectList( $yesno, 'cfg_errorChecking','class="inputbox" size="1"', 'value', 'text', $jrConfig['errorChecking']);
	$lists['useGlobalCurrency']			= jomresHTML::selectList( $yesno, 'cfg_useGlobalCurrency','class="inputbox" size="1"', 'value', 'text', $jrConfig['useGlobalCurrency']);
	$lists['editingModeAffectsAllProperties'] = jomresHTML::selectList( $yesno, 'cfg_editingModeAffectsAllProperties','class="inputbox" size="1"', 'value', 'text', $jrConfig['editingModeAffectsAllProperties'] 	);
	$lists['useGlobalPFeatures'] 		= jomresHTML::selectList( $yesno, 'cfg_useGlobalPFeatures','class="inputbox" size="1"', 'value', 'text', $jrConfig['useGlobalPFeatures'] 	);
	$lists['useGlobalRoomTypes'] 		= jomresHTML::selectList( $yesno, 'cfg_useGlobalRoomTypes','class="inputbox" size="1"', 'value', 'text', $jrConfig['useGlobalRoomTypes'] 	);
	$lists['selfRegistrationAllowed']	= jomresHTML::selectList( $yesno, 'cfg_selfRegistrationAllowed','class="inputbox" size="1"', 'value', 'text', $jrConfig['selfRegistrationAllowed']);
	$lists['isInIframe']				= jomresHTML::selectList( $yesno, 'cfg_isInIframe','class="inputbox" size="1"', 'value', 'text', $jrConfig['isInIframe']);
	$lists['allowHTMLeditor']			= jomresHTML::selectList( $editoryesno, 'cfg_allowHTMLeditor','class="inputbox" size="1"', 'value', 'text', $jrConfig['allowHTMLeditor']);
	$lists['dumpTemplate'] 				= jomresHTML::selectList( $yesno, 'cfg_dumpTemplate', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['dumpTemplate'] );
	$lists['useSSLinBookingform']	= jomresHTML::selectList( $yesno, 'cfg_useSSLinBookingform', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useSSLinBookingform'] );
	$lists['emailErrors'] 				= jomresHTML::selectList( $yesno, 'cfg_emailErrors', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['emailErrors'] );
	$lists['minimalconfiguration'] 		= jomresHTML::selectList( $yesno, 'cfg_minimalconfiguration', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['minimalconfiguration'] );
	$lists['useJomresEmailCheck'] 		= jomresHTML::selectList( $yesno, 'cfg_useJomresEmailCheck', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useJomresEmailCheck'] );
	$lists['autoDetectJSCalendarLang']	= jomresHTML::selectList( $yesno, 'cfg_autoDetectJSCalendarLang', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['autoDetectJSCalendarLang'] );
	$lists['composite_property_details']	= jomresHTML::selectList( $yesno, 'cfg_composite_property_details', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['composite_property_details'] );

	$lists['sef_property_url_country'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_country'] );
	$lists['sef_property_url_region'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_region', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_region'] );
	$lists['sef_property_url_town'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_town'] );
	$lists['sef_property_url_ptype'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_ptype'] );
	$lists['sef_property_url_propertyname']	= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_propertyname', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_propertyname'] );
	$lists['sef_property_url_property_id']	= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_property_id', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_property_id'] );
	$lists['sef_search_url_country'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_country'] );
	$lists['sef_search_url_region'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_region', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_region'] );
	$lists['sef_search_url_town']			= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_town'] );
	$lists['sef_search_url_ptype']			= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_ptype'] );

	$lists['loggingBooking']		= jomresHTML::selectList( $yesno, 'cfg_loggingBooking', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingBooking'] );
	$lists['loggingGateway']		= jomresHTML::selectList( $yesno, 'cfg_loggingGateway', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingGateway'] );
	$lists['loggingSystem']			= jomresHTML::selectList( $yesno, 'cfg_loggingSystem', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingSystem'] );
	$lists['loggingRequest']		= jomresHTML::selectList( $yesno, 'cfg_loggingRequest', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingRequest'] );
	$lists['loggingPortal']			= jomresHTML::selectList( $yesno, 'cfg_loggingPortal', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingPortal'] );
	
	$lists['show_booking_form_in_property_details']		= jomresHTML::selectList( $yesno, 'cfg_show_booking_form_in_property_details', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['show_booking_form_in_property_details'] );
	
	$geosearchList = array();
	$geosearchList[] = jomresHTML::makeOption( '', '' );
	$geosearchList[] = jomresHTML::makeOption( 'town', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN );
	$geosearchList[] = jomresHTML::makeOption( 'region', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION );
	$geosearchDropdownList = jomresHTML::selectList($geosearchList, 'cfg_integratedSearch_geosearchtype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_geosearchtype']);

	$calendarStartDays = array();
	$calendarStartDays[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_WEEKDAYS_SUNDAY );
	$calendarStartDays[] = jomresHTML::makeOption( '2', _JOMRES_COM_MR_WEEKDAYS_MONDAY );
	$calendarStartDaysDropdownList = jomresHTML::selectList($calendarStartDays, 'cfg_calendarstartofweekday', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['calendarstartofweekday']);

	if (!isset( $jrConfig['guestnumbersearch']))
		$jrConfig['guestnumbersearch'] = "equal";

	$guestnumbersearchList = array();
	$guestnumbersearchList[] = jomresHTML::makeOption( 'lessthan', '<=' );
	$guestnumbersearchList[] = jomresHTML::makeOption( 'equal', '=' );
	$guestnumbersearchList[] = jomresHTML::makeOption( 'greaterthan', '>=' );
	$guestnumbersearchDropdownList = jomresHTML::selectList($guestnumbersearchList, 'cfg_guestnumbersearch', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['guestnumbersearch']);

	
	jr_import("currency_codes");
	$c_codes = new currency_codes($jrConfig['globalCurrencyCode'],true);
	$currency_codes_dropdown = $c_codes->makeCodesDropdown();
	
	$query="SELECT ptype,ptype_desc FROM #__jomres_ptypes";
	$result = doSelectSql($query);
	
	$language_context = array();
	$language_context[] =jomresHTML::makeOption('','');
	if (count($result)>0)
		{
		foreach ($result as $lang)
			{
			$language_context[] = jomresHTML::makeOption($lang->ptype_desc,$lang->ptype);
			}
		}
	$language_context_dropdown = jomresHTML::selectList($language_context, 'cfg_language_context', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['language_context']);

	$lists['integratedSearch_enable']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_enable', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_enable'] );
	$lists['integratedSearch_useCols']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_useCols', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_useCols'] );
	$lists['integratedSearch_selectcombo']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_selectcombo', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_selectcombo'] );
	$lists['integratedSearch_propertyname']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_propertyname', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_propertyname'] );
	$lists['integratedSearch_propertyname_dropdown']= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_propertyname_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_propertyname_dropdown'] );
	$lists['integratedSearch_ptype']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_ptype'] );
	$lists['integratedSearch_ptype_dropdown']		= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_ptype_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_ptype_dropdown'] );
	$lists['integratedSearch_geosearchtype_dropdown']= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_geosearchtype_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_geosearchtype_dropdown'] );
	$lists['integratedSearch_town']					= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_town'] );
	$lists['integratedSearch_town_dropdown']		= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_town_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_town_dropdown'] );
	
	$lists['integratedSearch_room_type']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_room_type', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_room_type'] );
	$lists['integratedSearch_room_type_dropdown']	= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_room_type_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_room_type_dropdown'] );
	$lists['integratedSearch_features']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_features', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_features'] );
	$lists['integratedSearch_features_dropdown']	= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_features_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_features_dropdown'] );
	$lists['integratedSearch_description']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_description', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_description'] );
	$lists['integratedSearch_availability']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_availability', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_availability'] );
	$lists['integratedSearch_priceranges']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_priceranges', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_priceranges'] );
	
	$lists['integratedSearch_guestnumber']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_guestnumber', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_guestnumber'] );
	$lists['integratedSearch_stars']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_stars', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_stars'] );
	
	
	$lists['useCaching']							= jomresHTML::selectList( $yesno, 'cfg_useCaching', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useCaching'] );
	$lists['showLangDropdown']						= jomresHTML::selectList( $yesno, 'cfg_showLangDropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['showLangDropdown'] );
	$lists['useJomresMessaging']					= jomresHTML::selectList( $yesno, 'cfg_useJomresMessaging', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useJomresMessaging'] );
	$lists['useSubscriptions']						= jomresHTML::selectList( $yesno, 'cfg_useSubscriptions', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useSubscriptions'] );
	$lists['useNewusers']							= jomresHTML::selectList( $yesno, 'cfg_useNewusers', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useNewusers'] );
	$lists['outputHeadersInline']					= jomresHTML::selectList( $yesno, 'cfg_outputHeadersInline', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['outputHeadersInline'] );
	$lists['contact_owner_emails_to_alternative']	= jomresHTML::selectList( $yesno, 'cfg_contact_owner_emails_to_alternative', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['contact_owner_emails_to_alternative'] );
	$lists['is_single_property_installation']		= jomresHTML::selectList( $yesno, 'cfg_is_single_property_installation', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['is_single_property_installation'] );
	$lists['use_html_purifier']						= jomresHTML::selectList( $yesno, 'cfg_use_html_purifier', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_html_purifier'] );
	$lists['limit_property_country']				= jomresHTML::selectList( $yesno, 'cfg_limit_property_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['limit_property_country'] );
	
	$lists['use_reviews']							= jomresHTML::selectList( $yesno, 'cfg_use_reviews', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_reviews'] );
	$lists['autopublish_reviews']					= jomresHTML::selectList( $yesno, 'cfg_autopublish_reviews', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['autopublish_reviews'] );
	$lists['reviews_test_mode']						= jomresHTML::selectList( $yesno, 'cfg_reviews_test_mode', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['reviews_test_mode'] );
	$lists['show_search_order']						= jomresHTML::selectList( $yesno, 'cfg_show_search_order', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['show_search_order'] );
	
	$lists['only_guests_can_review']				= jomresHTML::selectList( $yesno, 'cfg_only_guests_can_review', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['only_guests_can_review'] );
	$lists['use_timezone_switcher']					= jomresHTML::selectList( $yesno, 'cfg_use_timezone_switcher', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_timezone_switcher'] );
	$lists['load_jquery']							= jomresHTML::selectList( $yesno, 'cfg_load_jquery', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['load_jquery'] );
	$lists['use_commission']						= jomresHTML::selectList( $yesno, 'cfg_use_commission', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_commission'] );
	$lists['manager_bookings_trigger_commission']	= jomresHTML::selectList( $yesno, 'cfg_manager_bookings_trigger_commission', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['manager_bookings_trigger_commission'] );
	$lists['commission_autosuspend_on_overdue']		= jomresHTML::selectList( $yesno, 'cfg_commission_autosuspend_on_overdue', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['commission_autosuspend_on_overdue'] );
	$lists['advanced_site_config']					= jomresHTML::selectList( $yesno, 'cfg_advanced_site_config', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['advanced_site_config'] );
	$lists['load_jquery_ui']						= jomresHTML::selectList( $yesno, 'cfg_load_jquery_ui', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['load_jquery_ui'] );
	$lists['load_jquery_ui_css']					= jomresHTML::selectList( $yesno, 'cfg_load_jquery_ui_css', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['load_jquery_ui_css'] );
	$lists['use_conversion_feature']				= jomresHTML::selectList( $yesno, 'cfg_use_conversion_feature', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_conversion_feature'] );
	$lists['javascript_caching_enabled']			= jomresHTML::selectList( $yesno, 'cfg_javascript_caching_enabled', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['javascript_caching_enabled'] );
	$lists['booking_form_modal_popup']				= jomresHTML::selectList( $yesno, 'cfg_booking_form_modal_popup', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['booking_form_modal_popup'] );
	$lists['booking_form_totals_panel_as_slider']	= jomresHTML::selectList( $yesno, 'cfg_booking_form_totals_panel_as_slider', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['booking_form_totals_panel_as_slider'] );
	$lists['useNewusers_sendemail']					= jomresHTML::selectList( $yesno, 'cfg_useNewusers_sendemail', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useNewusers_sendemail'] );
	$lists['show_tax_in_totals_summary']			= jomresHTML::selectList( $yesno, 'cfg_show_tax_in_totals_summary', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['show_tax_in_totals_summary'] );
	$lists['alternate_smtp_use_settings']			= jomresHTML::selectList( $yesno, 'cfg_alternate_smtp_use_settings', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['alternate_smtp_use_settings'] );
	$lists['alternate_smtp_authentication']			= jomresHTML::selectList( $yesno, 'cfg_alternate_smtp_authentication', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['alternate_smtp_authentication'] );
	$lists['alternate_mainmenu']					= jomresHTML::selectList( $yesno, 'cfg_alternate_mainmenu', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['alternate_mainmenu'] );
	$lists['full_access_control']					= jomresHTML::selectList( $yesno, 'cfg_full_access_control', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['full_access_control'] );
	$lists['mobile_redirect']						= jomresHTML::selectList( $yesno, 'cfg_mobile_redirect', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['mobile_redirect'] );
	$lists['css_caching_enabled']					= jomresHTML::selectList( $yesno, 'cfg_css_caching_enabled', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['css_caching_enabled'] );
	$lists['use_cleardate_checkbox']				= jomresHTML::selectList( $yesno, 'cfg_use_cleardate_checkbox', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_cleardate_checkbox'] );
	$lists['use_cookie_policy']						= jomresHTML::selectList( $yesno, 'cfg_use_cookie_policy', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_cookie_policy'] );
	$lists['mobile_simulation']						= jomresHTML::selectList( $yesno, 'cfg_mobile_simulation', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['mobile_simulation'] );
	$lists['safe_mode']								= jomresHTML::selectList( $yesno, 'cfg_safe_mode', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['safe_mode'] );
	$lists['use_jomres_own_editor']					= jomresHTML::selectList( $yesno, 'cfg_use_jomres_own_editor', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_jomres_own_editor'] );
	$lists['use_bootstrap']							= jomresHTML::selectList( $yesno, 'cfg_use_bootstrap', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['use_bootstrap'] );

	HTML_jomres::showSiteConfig( $jrConfig, $lists,$jsInputFormatDropdownList,$licensekey,$jrtb,$langDropdown,$geosearchDropdownList,$currency_codes_dropdown,$jqueryUIthemesDropdownList,$sortArrayDropdown,$calendarStartDaysDropdownList,$language_context_dropdown,$guestnumbersearchDropdownList);
	}

/**
#
 * Saves the site configuration data
#
 */
function saveSiteConfig (  )
	{
	ignore_user_abort(true);
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	foreach ($_POST as $k=>$v)
		{
		if (strpos( $k, 'cfg_' ) === 0)
			{
			if ($k=="cfg_licensekey")
				{
				$lkey = trim($v);
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
				$settingsList=doSelectSql($query);
				if (count($settingsList)==0)
					$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('0','jomres_licensekey','$lkey')";
				else
					$query="UPDATE #__jomres_settings SET `value`='".$lkey."' WHERE property_uid = '0' and akey = 'jomres_licensekey'";
				$result=doInsertSql($query,'');
				}
			else
				{
				//echo "K: ".$k." & V: ".$v."<br>";
				$v=jomresGetParam( $_POST, $k, "" );
				$dirty = (string) $k;
				$k=addslashes($dirty);
				$v = filter_var($v,FILTER_SANITIZE_SPECIAL_CHARS);

				$query="SELECT id FROM #__jomres_site_settings WHERE akey = '".substr( $k, 4 )."'";
				$result=doSelectSql($query);
				if (count($result)==0)
					$query="INSERT INTO #__jomres_site_settings (akey,value) VALUES ('".substr( $k, 4 )."','".$v."')";
				else
					$query="UPDATE #__jomres_site_settings SET `value`='".$v."' WHERE akey = '".substr( $k, 4 )."'";
				//echo $query."<br>";
				doInsertSql($query,"");
				}
			}
		}
	jr_import('minicomponent_registry');
	$registry = new minicomponent_registry(false);
	$registry->regenerate_registry();
	jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=showSiteConfig", "Configuration saved" );
	}

function getJomresLanguagesDropdown()
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$langs=array();

	$d = @dir(JOMRESPATH_BASE."/language");
	$docs = array();
	if($d)
		{
		while (FALSE !== ($entry = $d->read()))
			{
			$filename = $entry;
			if( substr($entry,0,1) != '.' && !is_dir(JOMRESPATH_BASE."/language/".$entry) )
				{
				$docs[] =$entry;
				}
			}
		$d->close();
		if (count($docs)>0)
			{
			sort($docs);
			foreach ($docs as $f)
				{
				$langs[]=jomresHTML::makeOption( $f, $f );
				}
			$langDropdown = jomresHTML::selectList( $langs, 'cfg_siteLang','class="inputbox" size="1"', 'value', 'text', $jrConfig['siteLang']);
			return $langDropdown;
			}
		}
	}

	
	function searchCSSThemesDirForCSSFiles()
		{
		$cssFiles = array();
		$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'css'.JRDS.'jquery_ui_themes'.JRDS;
		$d = @dir($jrePath);
		$docs = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.' )
					{
					$docs[] =$entry;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				sort($docs);
				foreach ($docs as $doc)
					{
					$listdir=$jrePath.$doc.JRDS;
					$dr = @dir($listdir);
					if($dr)
						{
						while (FALSE !== ($entry = $dr->read()))
							{
							$filename = $entry;
							$tmpArr = explode(".",$filename);
							$extension = $tmpArr[count($tmpArr)-1];
							if ($extension == "css")
								$cssFiles[] = array("cssfile"=>$filename,"subdir"=>$doc);
							}
						$dr->close();
						}
					}
				}
			}
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		$colourSchemeDataArray=$MiniComponents->triggerEvent('00021'); // optional
		
		if (is_array($colourSchemeDataArray))
			$cssFiles = array_merge($cssFiles,$colourSchemeDataArray) ;
		return $cssFiles;
		}
?>