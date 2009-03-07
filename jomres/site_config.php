<?php

defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );

global $jomresConfig_absolute_path;
$jrConfig['property_list_limit']	='5';
$jrConfig['useGlobalCurrency']		='0';
$jrConfig['globalCurrency']			='€';
$jrConfig['globalCurrencyCode']		='EUR';
$jrConfig['menusAsImages']			='1';
$jrConfig['google_maps_api_key']	='';
//$jrConfig['jomresItemid']			='40'; Removed for v4
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
//$jrConfig['slideshow']				='tooltips';
//$jrConfig['ss_popup_width']			='550';
//$jrConfig['ss_popup_height']		='500';
$jrConfig['ss_imageLocation']		='/jomres/uploadedimages/';
$jrConfig['propertyListDescriptionLimit']='200';
$jrConfig['randomsearchlimit']		='10';
$jrConfig['useGlobalPFeatures']		='1';
$jrConfig['useGlobalRoomTypes']		='1';
$jrConfig['dynamicMinIntervalRecalculation']='0';
$jrConfig['disableAudit']			='0';
$jrConfig['allowedTags']			='<h2>|<h3>|<h4>|<h5>|<b>|<i>|<a>|<ul>|<li>|<pre>|<hr>|<blockquote>|<img>|<p>';
$jrConfig['utfHTMLdecode']			='0';
//$jrConfig['jomres_systemLog_path']	=$jomresConfig_absolute_path.JRDS.'media'.JRDS;
$jrConfig['emailErrors']			='0';
//$jrConfig['slideshowLocation']		='1';  // Removed in v4
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

$jrConfig['integratedSearch_enable']		='1';
$jrConfig['integratedSearch_useCols']		='0';
$jrConfig['integratedSearch_featurecols']		='3';
$jrConfig['integratedSearch_selectcombo']		='0';
$jrConfig['integratedSearch_propertyname']		='0';
$jrConfig['integratedSearch_propertyname_dropdown']		='1';
$jrConfig['integratedSearch_geosearchtype']		='';
$jrConfig['integratedSearch_geosearchtype_dropdown']		='1';
$jrConfig['integratedSearch_ptype']		='0';
$jrConfig['integratedSearch_ptype_dropdown']		='1';
$jrConfig['integratedSearch_room_type']		='0';
$jrConfig['integratedSearch_room_type_dropdown']		='1';
$jrConfig['integratedSearch_features']		='0';
$jrConfig['integratedSearch_features_dropdown']		='1';
$jrConfig['integratedSearch_description']		='0';
$jrConfig['integratedSearch_availability']		='0';
$jrConfig['integratedSearch_priceranges']		='0';
$jrConfig['integratedSearch_pricerange_increments']		='20';

// Pseudocron settings
$pluginConfig['jomcompcronjobs']['method']			='0';
$pluginConfig['jomcompcronjobs']['displaylogging']	='0';
$pluginConfig['jomcompcronjobs']['logging']		='0';
$pluginConfig['jomcompcronjobs']['verbose']		='0';



?>