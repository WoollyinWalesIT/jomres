<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


defined( '_JOMRES_INITCHECK' ) or die( '' );

$jrConfig['defaultCrate']	='default';
$jrConfig['property_list_limit']	='5';
$jrConfig['useGlobalCurrency']		='0';
$jrConfig['globalCurrency']			='€';
$jrConfig['globalCurrencyCode']		='EUR';
$jrConfig['menusAsImages']			='1';
$jrConfig['google_maps_api_key']	='';

$jrConfig['minimalconfiguration']	='1';
$jrConfig['useSSLinBookingform']	='0';
$jrConfig['editingModeAffectsAllProperties']='0';
$jrConfig['allowHTMLeditor']		='0';
$jrConfig['selfRegistrationAllowed']='1';
$jrConfig['cal_output']				='jS M Y';
$jrConfig['cal_input']				='%d/%m/%Y';
$jrConfig['isInIframe']				='0';
$jrConfig['errorChecking']			='0';
$jrConfig['dumpTemplate']			='0';
$jrConfig['jscalendarLangfile']		='calendar-en.js';
$jrConfig['jscalendarCSSfile']		='calendar-blue.css';
$jrConfig['maxwidth']				='300';
$jrConfig['fileSize']				='2000';
$jrConfig['slideshow']				='tooltips';
$jrConfig['propertyListDescriptionLimit']='200';
$jrConfig['randomsearchlimit']		='10';
$jrConfig['useGlobalPFeatures']		='1';
$jrConfig['useGlobalRoomTypes']		='1';
$jrConfig['dynamicMinIntervalRecalculation']='0';
$jrConfig['disableAudit']			='0';
$jrConfig['allowedTags']			='<h2>|<h3>|<h4>|<h5>|<b>|<i>|<a>|<ul>|<li>|<pre>|<hr>|<blockquote>|<img>|<p>';
$jrConfig['utfHTMLdecode']			='0';
$jrConfig['emailErrors']			='0';
$jrConfig['useJomresEmailCheck']	='0';
$jrConfig['siteLang']				='en-GB.php';
$jrConfig['autoDetectJSCalendarLang']='1';

// This is the first item displayed after the domain - Change to what you require - If you don't want to use it then  blank it out and leave '';
$jrConfig['sef_jomres_url_prefix']	='accommodation';
//These are the aliases that will be used for the different Jomres pages - amend as you require
$jrConfig['sef_task_alias_viewproperty']='details';
$jrConfig['sef_task_alias_dobooking']='book';
$jrConfig['sef_task_alias_search']	='search';
//Property URL Structure - This indicates how the property information will be translated 
//Set all fields to 1 to include or 0 to ignore
//Add country to url
$jrConfig['sef_property_url_country']=1;
//Add region to url
$jrConfig['sef_property_url_region']=1;
//Add town to url
$jrConfig['sef_property_url_town']	=1;
//Add property type to url
$jrConfig['sef_property_url_ptype']	=1;
//Add property name to url
$jrConfig['sef_property_url_propertyname']=1;
//Append property id to property name (if property name is set to 0 then the id will not be used) if set to yes then the url will look like fawlty_towers-1
$jrConfig['sef_property_url_property_id']=1;
//Search URL Structure - This indicates how the search information will be translated 
//Set all fields to 1 to include or 0 to ignore
//Add country to url
$jrConfig['sef_search_url_country']	=1;
//If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country
$jrConfig['sef_default_country']	="United Kingdom";
//Add region to url
$jrConfig['sef_search_url_region']	=1;
//If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region
$jrConfig['sef_default_region']		="Pembrokeshire";
//Add town to url
$jrConfig['sef_search_url_town']	=1;
//Used in url if search is for all towns
$jrConfig['sef_default_town']		="Tenby";
//Add property type to url
$jrConfig['sef_search_url_ptype']	=1;
//Used in url if search is for all property types
$jrConfig['sef_default_ptype']		="hotels";
  
// Hidden options. Switches editinplace on and off. Default is 1 (on)  
$jrConfig['editinplace']="1";

$jrConfig['composite_property_details']="1";

$jrConfig['loggingBooking']		='0';
$jrConfig['loggingGateway']		='0';
$jrConfig['loggingSystem']		='0';
$jrConfig['loggingRequest']		='0';
$jrConfig['loggingPortal']		='0';

$jrConfig['integratedSearch_enable']				='1';
$jrConfig['integratedSearch_useCols']				='0';
$jrConfig['integratedSearch_featurecols']			='3';
$jrConfig['integratedSearch_selectcombo']			='1';
$jrConfig['integratedSearch_propertyname']			='0';
$jrConfig['integratedSearch_propertyname_dropdown']	='1';
$jrConfig['integratedSearch_geosearchtype']			='';
$jrConfig['integratedSearch_geosearchtype_dropdown']='1';
$jrConfig['integratedSearch_ptype']					='0';
$jrConfig['integratedSearch_ptype_dropdown']		='1';
$jrConfig['integratedSearch_room_type']				='0';
$jrConfig['integratedSearch_room_type_dropdown']	='1';
$jrConfig['integratedSearch_features']				='0';
$jrConfig['integratedSearch_features_dropdown']		='1';
$jrConfig['integratedSearch_description']			='0';
$jrConfig['integratedSearch_availability']			='0';
$jrConfig['integratedSearch_priceranges']			='0';
$jrConfig['integratedSearch_pricerange_increments']	='20';

$jrConfig['integratedSearch_guestnumber']			='0';
$jrConfig['integratedSearch_stars']					='0';

// Plugin settings

// Pseudocron settings
$pluginConfig['jomcompcronjobs']['method']			='0';
$pluginConfig['jomcompcronjobs']['displaylogging']	='0';
$pluginConfig['jomcompcronjobs']['logging']			='0';
$pluginConfig['jomcompcronjobs']['verbose']			='0';

// Invoices backend paypal settings
$pluginConfig['backend_paypal_settings']['usesandbox']	='1';
$pluginConfig['backend_paypal_settings']['currencycode']='EUR';
$pluginConfig['backend_paypal_settings']['email']		='';
$pluginConfig['backend_paypal_settings']['override']	='0';

$jrConfig['useCaching']			='0';
$jrConfig['showLangDropdown']	='1';
$jrConfig['thumbnail_width']	='50';
$jrConfig['useJomresMessaging'] = '1';
$jrConfig['useSubscriptions']="0";
$jrConfig['useNewusers']="0";

//$jrConfig['jomresItemid']			='40'; Removed for v4
$jrConfig['jomresItemid']			='40'; // Restored for v4.1
$jrConfig['outputHeadersInline'] = "0"; // Outputting headers within the body of the page instead of the headers seems to resolve the mootools conflict issues.

$jrConfig['lifetime']="18000";

$jrConfig['business_name']="BLANK";
$jrConfig['business_vat_number']="BLANK";
$jrConfig['business_address']="BLANK";
$jrConfig['business_street']="BLANK";
$jrConfig['business_town']="BLANK";
$jrConfig['business_region']="BLANK";
$jrConfig['business_country']="BLANK";
$jrConfig['business_postcode']="BLANK";
$jrConfig['business_telephone']="BLANK";
$jrConfig['business_email']="BLANK";

$jrConfig['contact_owner_emails_to_alternative'] ="0";
$jrConfig['contact_owner_emails_to_alternative_email'] ="";

$jrConfig['auto_translate']="0";
$jrConfig['is_single_property_installation'] ="0";
$jrConfig['use_html_purifier'] ="0";

$jrConfig['limit_property_country'] ="0";
$jrConfig['limit_property_country_country'] ="GB";

$jrConfig['jquery_ui_theme'] = "smoothness";

$jrConfig['use_reviews'] = "1";
$jrConfig['autopublish_reviews'] = "1";
$jrConfig['reviews_test_mode'] = "0";

$jrConfig['show_booking_form_in_property_details'] ="1"; // New for v4.5.2

$jrConfig['search_order_default'] = "1";
$jrConfig['show_search_order'] = "1";

$jrConfig['calendarstartofweekday'] = "1";

$jrConfig['only_guests_can_review'] = "0";

// We'll rename this setting from jquery_ui_theme to ensure that upgraded installations use the new functionality. If we don't, people who upgrade will find that their installatons will not have the appropriate css files included in the cms's headers and the forum will be full of posts on the subject. This way, at least some css will be included, even if it's not the css they'd previously configured. 
$jrConfig['jquery_ui_theme_detected'] = "smoothness^jquery-ui-1.8rc3.custom.css"; 
$jrConfig['use_timezone_switcher'] = "0";

$jrConfig['load_jquery'] = "1";
?>