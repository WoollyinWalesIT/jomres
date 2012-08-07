<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

defined( '_JOMRES_INITCHECK' ) or die( '' );

class HTML_jomres {

function controlPanel($version)
		{
		?>
		<table class="adminheading" width="100%">
		<tr>
		<th class="cpanel">Jomres Control Panel</th>
		</tr>
		</table>
		<?php
		if (file_exists( JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'jomres_cpanel.php' ))
			{
			require JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'jomres_cpanel.php';
			}
	else
		{
		echo '<br />File does not exist: '.$path.' .... help!!';
		//mosLoadAdminModules( 'cpanel', 1 );
		}
	}

/**
#
 * Outputs the site configuration panel
#
 */
function showSiteConfig( $jrConfig, &$lists,$jsInputFormatDropdownList,$licensekey,$jrtb,$langDropdown,$geosearchDropdownList,$currency_codes_dropdown,$jqueryUIthemesDropdownList,$sortArrayDropdown,$calendarStartDaysDropdownList,$language_context_dropdown,$guestnumbersearchDropdownList)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$contentPanel =jomres_singleton_abstract::getInstance('jomres_content_tabs');
	
		?>
        <h2 class="page-header">Jomres <?php echo _JOMRES_A; ?></h2>
		<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="post" name="adminForm">
		
		<?php
		echo $jrtb;
		
		$sslinput="";
		
		// Disabled due to joomla's url rewriting making it virtually impossible to modify urls for ssl handling AND sef with any confidence.
		// $sslinput=
			// '<tr>
			// <td>'.JOMRES_COM_A_USE_SSL.'</td>
			// <td>'.$lists['useSSLinBookingform'].'</td>
			// <td>'.JOMRES_COM_A_USE_SSL_DESC.get_showtime('live_site').'</td>
			// </tr>';

		$contentPanel->startTabs();
		$contentPanel->startPanel(jr_gettext('_JOMRES_A_TABS_MISC',_JOMRES_A_TABS_MISC,FALSE));
		$contentPanel->setcontent('
		<table class="table table-striped" width="100%">
			<thead>
				<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th>'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
			</thead>
			<tbody>');
		
		//if (_JOMRES_DETECTED_CMS == "joomla25" )
		//	{
			$contentPanel->setcontent('<tr>
				 <td>'._JOMRES_BOOTSTRAPSWITCH.'</td>
				 <td>'.$lists['use_bootstrap'].'</td>
				 <td>'._JOMRES_BOOTSTRAPSWITCH_DESC.'</td>
			</tr>');
		//	}
		$contentPanel->setcontent('
		<tr>
			<td>'._JOMRES_COM_ADVANCED_SITE_CONFIG.'</td>
			<td>'.$lists['advanced_site_config'].'</td>
			<td>'._JOMRES_COM_ADVANCED_SITE_CONFIG_DESC.'</td>
		</tr>
		<tr>
			 <td>'._JOMRES_MENU_SHOW_TITLE.'</td>
			 <td>'.$lists['alternate_mainmenu'].'</td>
			 <td>'._JOMRES_MENU_SHOW_DESC.'</td>
		</tr>
		<tr>
			<td>'._JOMRES_SUPPORTKEY.'</td>
			<td><input type="text" class="input-large" name="cfg_licensekey" value="'.$licensekey.'" /></td>
			<td>'._JOMRES_SUPPORTKEY_DESC.'</td>
		</tr>
		<tr>
			<td>'._JOMRES_LICENSESERVER_USERNAME.'</td>
			<td><input type="text" class="input-large" name="cfg_license_server_username" value="'.$jrConfig['license_server_username'].'" /></td>
			<td>'._JOMRES_LICENSESERVER_USERNAME_DESC.'</td>
		</tr>
		<tr>
			<td>'._JOMRES_LICENSESERVER_PASSWORD.'</td>
			<td><input type="password" class="input-large" name="cfg_license_server_password" value="'.$jrConfig['license_server_password'].'" /></td>
			<td></td>
		</tr>
		<tr>
			<td>'._JOMRES_COOKIEPOLICY_TITLE.'</td>
			<td>'.$lists['use_cookie_policy'].'</td>
			<td>'._JOMRES_COOKIEPOLICY_DESC.'</td>
		</tr>
		<tr>
			<td>'._JOMRES_DEFAULT_LAT_STARTPOINT.'</td>
			<td><input type="text" class="input-large" name="cfg_default_lat" value="'.$jrConfig['default_lat'].'" /></td>
			<td>'._JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC.'</td>
		</tr>
		<tr>
			<td>'._JOMRES_DEFAULT_LONG_STARTPOINT.'</td>
			<td><input type="text" class="input-large" name="cfg_default_long" value="'.$jrConfig['default_long'].'" /></td>
			<td></td>
		</tr>
		');
		

		if (!using_bootstrap())
			{
			$contentPanel->setcontent('<tr>
				<td>'._JOMRES_JQUERYTHEME.'</td>
				<td>'.$jqueryUIthemesDropdownList.'</td>
				<td>'._JOMRES_JQUERYTHEME_DESC.'</td>
			</tr>');
			}
		$contentPanel->setcontent('<tr>
			<td>'._JOMRES_COM_LANGUAGE_CONTEXT.'</td>
			<td>'.$language_context_dropdown.'</td>
			<td>'._JOMRES_COM_LANGUAGE_CONTEXT_DESC.'</td>
		</tr>
		<tr>
			<td>'._JOMRES_SINGLEPROPERTYINSTALLATION_TITLE.'</td>
			<td>'.$lists['is_single_property_installation'].'</td>
			<td>'._JOMRES_SINGLEPROPERTYINSTALLATION_DESC.'</td>
		</tr>
		<tr>
			<td>'.JOMRES_COM_A_MAPSKEY.'</td>
			<td><input type="text" class="input-large" name="cfg_google_maps_api_key" value="'.$jrConfig['google_maps_api_key'].'" /></td>
			<td>'.JOMRES_COM_A_MAPSKEY_DESC.'</td>
		</tr>
		<tr>
			 <td>'._JOMRES_COM_ALLOWHTMLEDITOR.'</td>
			 <td>'.$lists['allowHTMLeditor'].'</td>
			 <td>'._JOMRES_COM_ALLOWHTMLEDITOR_DESC.'</td>
		</tr>
		<tr>
			 <td>'._JOMRES_USE_JOMRESEDITOR.'</td>
			 <td>'.$lists['use_jomres_own_editor'].'</td>
			 <td>'._JOMRES_USE_JOMRESEDITOR_DESC.'</td>
		</tr>
		');
	

		if ($jrConfig['advanced_site_config'] == 1)
			$contentPanel->setcontent('
			<tr>
				<td>'._JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO.'</td>
				<td>'.$lists['limit_property_country'].'</td>
				<td>'._JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY.'</td>
				<td>'.limitCountriesDropdown().'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				 <td>'._JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN.'</td>
				 <td>'.$lists['showLangDropdown'].'</td>
				 <td>'._JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JOMRES_COM_GROWL.'</td>
				 <td>'.$lists['useJomresMessaging'].'</td>
				 <td>'._JOMRES_COM_GROWL_DESC.'</td>
			</tr>
			<!--
			<tr>
				 <td>'._JOMRES_MANAGEROPTIONSASIMAGES.'</td>
				 <td>'.$lists['menusAsImages'].'</td>
				 <td>&nbsp;</td>
			</tr>
			-->
			<tr>
				<td>'.JOMRES_COM_A_MINIMALCONFIG.'</td>
				<td>'.$lists['minimalconfiguration'].'</td>
				<td>'.JOMRES_COM_A_MINIMALCONFIG_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JOMRES_COM_TIMEZONE_SWITCHER.'</td>
				 <td>'.$lists['use_timezone_switcher'].'</td>
				 <td>&nbsp;</td>
			</tr>
			'.$sslinput.'
			<tr>
				<td>'._JOMRES_COM_CACHING.'</td>
				<td>'.$lists['useCaching'].'</td>
				<td>'._JOMRES_COM_CACHING_DESC.'</td>
			</tr>
			<tr>
				<td>'._JRPORTAL_CONFIG_DEFAULT_CRATE.'</td>
				<td>'.$lists['defaultCrate'].'</td>
				<td>'._JRPORTAL_CONFIG_DEFAULT_CRATE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_JRCONFIG_GLOBALEDITING.'</td>
				<td>'.$lists['editingModeAffectsAllProperties'].'</td>
				<td>'._JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_SELFREGISTRATION.'</td>
				<td>'.$lists['selfRegistrationAllowed'].'</td>
				<td>'._JOMRES_COM_SELFREGISTRATION_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_CALENDAROUTPUT.'</td>
				<td><input type="text" class="input-large" name="cfg_cal_output" value="'.$jrConfig['cal_output'].'" /></td>
				<td>'._JOMRES_COM_CALENDAROUTPUT_DESC.'</td>
			</tr>
			
			<tr>
				<td>'._JOMRES_CONTACTOWNER_TO_ADMIN.'</td>
				<td>'.$lists['contact_owner_emails_to_alternative'].'</td>
				<td>'._JOMRES_CONTACTOWNER_TO_ADMIN_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE.'</td>
				<td><input type="text" class="input-large" name="cfg_contact_owner_emails_to_alternative_email" value="'.$jrConfig['contact_owner_emails_to_alternative_email'].'" /></td>
				<td>&nbsp;</td>
			</tr>
			<!--
			<tr>
				<td>'._JOMRES_COM_JOMRESEMAILCHECK.'</td>
				<td>'.$lists['useJomresEmailCheck'].'</td>
				<td>'._JOMRES_COM_JOMRESEMAILCHECK_DESC.'</td>
			</tr> -->
			<tr>
				<td>'._JOMRES_COM_JRCONFIG_ISWRAPPED.'</td>
				<td>'.$lists['isInIframe'].'</td>
				<td>'._JOMRES_COM_JRCONFIG_ISWRAPPED_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JOMRES_ACCESS_CONTROL_CONFIG_TITLE.'</td>
				 <td>'.$lists['full_access_control'].'</td>
				 <td>'._JOMRES_ACCESS_CONTROL_CONFIG_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONFIG_JQUERY.'</td>
				<td>'.$lists['load_jquery'].'</td>
				<td>'._JOMRES_CONFIG_JQUERY_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONFIG_JQUERY_UI_CSS.'</td>
				<td>'.$lists['load_jquery_ui_css'].'</td>
				<td>'._JOMRES_CONFIG_JQUERY_UI_CSS_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONFIG_JQUERY_UI.'</td>
				<td>'.$lists['load_jquery_ui'].'</td>
				<td>'._JOMRES_CONFIG_JQUERY_UI_DESC.'</td>
			</tr>
			<!--<tr>
				<td>'._JOMRES_JAVASCRIPT_CACHING_TITLE.'</td>
				<td>'.$lists['javascript_caching_enabled'].'</td>
				<td>'._JOMRES_JAVASCRIPT_CACHING_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CSS_CACHING_TITLE.'</td>
				<td>'.$lists['css_caching_enabled'].'</td>
				<td>'._JOMRES_CSS_CACHING_DESC.'</td>
			</tr>-->
			');
		$contentPanel->setcontent('
		</tbody>
		</table>');
	$contentPanel->insertContent();
	$contentPanel->endPanel();
	
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JOMRES_MOBILE_SETTINGS',_JOMRES_MOBILE_SETTINGS,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_MOBILE_REDIRECT.'</td>
				<td>'.$lists['mobile_redirect'].'</td>
				<td>'._JOMRES_MOBILE_REDIRECT_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_SIMULATE_MOBILE.'</td>
				<td>'.$lists['mobile_simulation'].'</td>
				<td>'._JOMRES_SIMULATE_MOBILE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_SIMULATE_MOBILE_RESTRICTION.'</td>
				<td><input type="text" class="input-large" name="cfg_mobile_simulation_ip_restriction" value="'.$jrConfig['mobile_simulation_ip_restriction'].'" /></td>
				<td>'._JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC.'</td>
			</tr>
			<tr>
				<th colspan="3">&nbsp;</th>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
	
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JOMRES_PATHWAY_BOOKINGFORM',_JOMRES_PATHWAY_BOOKINGFORM,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS.'</td>
				<td>'.$lists['show_booking_form_in_property_details'].'</td>
				<td>'._JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JOMRES_BOOKINGORM_MODALPOPUP.'</td>
				 <td>'.$lists['booking_form_modal_popup'].'</td>
				 <td>'._JOMRES_BOOKINGORM_MODALPOPUP_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_BOOKINGORM_TAX_OUTPUT.'</td>
				<td>'.$lists['show_tax_in_totals_summary'].'</td>
				<td>'._JOMRES_BOOKINGORM_TAX_OUTPUT_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JOMRES_BOOKINGORM_SLIDERENABLED.'</td>
				 <td>'.$lists['booking_form_totals_panel_as_slider'].'</td>
				 <td>'._JOMRES_BOOKINGORM_SLIDERENABLED_DESC.'</td>
			</tr>
			<!-- <tr>
				<td>'._JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION.'</td>
				<td><input type="text" class="input-large" name="cfg_booking_form_totalspanel_position" value="'.$jrConfig['booking_form_totalspanel_position'].'" /></td>
				<td>'._JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC.'</td>
			</tr>

			<tr>
				<td>'._JOMRES_BOOKINGFORMWIDTH.'</td>
				<td><input type="text" class="input-large" name="cfg_booking_form_width" value="'.$jrConfig['booking_form_width'].'" /></td>
				<td></td>
			</tr> -->
			<tr>
				 <td>'._JOMRES_COM_NEWUSER.'</td>
				 <td>'.$lists['useNewusers'].'</td>
				 <td>'._JOMRES_COM_NEWUSER_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS.'</td>
				 <td>'.$lists['useNewusers_sendemail'].'</td>
				 <td>'._JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JOMRES_BOOKINGFORM_LOCK_TITLE.'</td>
				 <td><input type="text" class="input-large" name="cfg_room_lock_timeout" value="'.$jrConfig['room_lock_timeout'].'" /></td>
				 <td>'._JOMRES_BOOKINGFORM_LOCK_DESC.'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
	
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JRPORTAL_ROI_TAB',_JRPORTAL_ROI_TAB,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				 <td>'._JRPORTAL_SUBSCRIPTIONS_USE.'</td>
				 <td>'.$lists['useSubscriptions'].'</td>
				 <td>'._JRPORTAL_SUBSCRIPTIONS_USE.'</td>
			</tr>
			<tr>
				 <td>'._JRPORTAL_INVOICES_COMMISSION_USE.'</td>
				 <td>'.$lists['use_commission'].'</td>
				 <td>'._JRPORTAL_INVOICES_COMMISSION_USE_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS.'</td>
				 <td>'.$lists['manager_bookings_trigger_commission'].'</td>
				 <td>'._JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC.'</td>
			</tr>
			<tr>
				 <td>'._JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND.'</td>
				 <td>'.$lists['commission_autosuspend_on_overdue'].'</td>
				 <td></td>
			</tr>
			<tr>
				<td>'._JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD.'</td>
				<td><input type="text" class="input-large" name="cfg_commission_autosuspend_on_overdue_threashold" value="'.$jrConfig['commission_autosuspend_on_overdue_threashold'].'" /></td>
				<td>'._JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC.'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
		
		
		$contentPanel->startPanel(jr_gettext('_JOMRES_CURRENCYCONVERSION_TAB',_JOMRES_CURRENCYCONVERSION_TAB,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO.'</td>
				<td>'.$lists['useGlobalCurrency'].'</td>
				<td>'._JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_CURRENCYCODE.'</td>
				<td>'.$currency_codes_dropdown.'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONVERSION_TITLE.'</td>
				<td>'.$lists['use_conversion_feature'].'</td>
				<td>'._JOMRES_CONVERSION_TITLE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_IP_DETECTION_API_KEY_TITLE.'</td>
				<td><input type="text" class="input-large" name="cfg_geolocation_api_key" value="'.$jrConfig['geolocation_api_key'].'" /></td>
				<td>'._JOMRES_IP_DETECTION_API_KEY_DESC.'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
	
	
		$contentPanel->startPanel(jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_REVIEWS_ADMIN_CONTROL.'</td>
				<td>'.$lists['use_reviews'].'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>'._JOMRES_REVIEWS_ADMIN_AUTOPUBLISH.'</td>
				<td>'.$lists['autopublish_reviews'].'</td>
				<td>'._JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_REVIEWS_ADMIN_TESTMODE.'</td>
				<td>'.$lists['reviews_test_mode'].'</td>
				<td>'._JOMRES_REVIEWS_ADMIN_TESTMODE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_REVIEWS_ADMIN_GUESTSONLY.'</td>
				<td>'.$lists['only_guests_can_review'].'</td>
				<td>'._JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC.'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		
	$currentLangFile=$jrConfig['jscalendarLangfile'];
	$calendarFileNamesArray=array("calendar-en.js","calendar-af.js","calendar-al.js","calendar-bg.js","calendar-big5.js","calendar-big5-utf8.js","calendar-br.js","calendar-ca.js","calendar-cs-utf8.js","calendar-cs-win.js","calendar-da.js","calendar-de.js","calendar-du.js","calendar-el.js","calendar-es.js","calendar-fi.js","calendar-fr.js","calendar-he-utf8.js","calendar-hr.js","calendar-hr-utf8.js","calendar-hu.js","calendar-it.js","calendar-jp.js","calendar-ko.js","calendar-ko-utf8.js","calendar-lt.js","calendar-lt-utf8.js","calendar-lv.js","calendar-nl.js","calendar-no.js","calendar-pl.js","calendar-pl-utf8.js","calendar-pt.js","calendar-ro.js","calendar-ru.js","calendar-ru_win_.js","calendar-si.js","calendar-sk.js","calendar-sp.js","calendar-sv.js","calendar-tr.js","calendar-zh.js","cn_utf8.js");
	$jsCalLangfile="<select class=\"inputbox\" name=\"cfg_jscalendarLangfile\">";
	foreach ($calendarFileNamesArray as $fileName)
		{
		$selected="";
		if ($fileName == $currentLangFile)
			$selected="selected";
		$jsCalLangfile .= "<option ".$selected." value=\"".$fileName."\" >".$fileName."</option>/n";
		}
	$jsCalLangfile .="</select>";

	$currentCSSFile=$jrConfig['jscalendarCSSfile'];
	$calendarFileNamesArray=array("calendar-win2k-cold-2.css","calendar-blue2.css","calendar-blue.css","calendar-brown.css","calendar-green.css","calendar-system.css","calendar-tas.css","calendar-win2k-1.css","calendar-win2k-2.css","calendar-win2k-cold-1.css");
	$jsCalCSSfile="<select class=\"inputbox\" name=\"cfg_jscalendarCSSfile\">";
	foreach ($calendarFileNamesArray as $fileName)
		{
		$selected="";
		if ($fileName == $currentCSSFile)
			$selected="selected";
		$jsCalCSSfile .= "<option ".$selected." value=\"".$fileName."\" >".$fileName."</option>/n";
		}
	$jsCalCSSfile .="</select>";

	$contentPanel->startPanel(jr_gettext('_JOMRES_COM_A_JSCALENDAR',_JOMRES_COM_A_JSCALENDAR,FALSE));
	$contentPanel->setcontent('
		<table class="table table-striped" width="100%">
		<thead>
		<tr>
			<th width="20%">&nbsp;</th>
			<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
			<th>'._JOMRES_COM_A_EXPLANATION.'</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>'._JOMRES_JSCALENDAR_USECLEARCHECKBOX.'</td>
			<td>'.$lists['use_cleardate_checkbox'].'</td>
			<td></td>
		</tr>
		<tr>
			<td>'._JOMRES_COM_CALENDARINPUT.'</td>
			<td>'.$jsInputFormatDropdownList.'</td>
			<td>'._JOMRES_COM_CALENDARINPUT_DESC.'</td>
		</tr>
		<tr>
			<td>'._JOMRES_COM_CALENDAR_STARTDAY.'</td>
			<td>'.$calendarStartDaysDropdownList.'</td>
			<td>&nbsp;</td>
		</tr>
		</tbody>
		</table>');
	$contentPanel->insertContent();
	$contentPanel->endPanel();

	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE',_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE,FALSE));
		$contentPanel->setcontent('
			<p>'._JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC.'</p>
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE.'</td>
				<td>'.$lists['integratedSearch_enable'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS.'</td>
				<td>'.$lists['integratedSearch_useCols'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO.'</td>
				<td>'.$lists['integratedSearch_selectcombo'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME.'</td>
				<td>'.$lists['integratedSearch_propertyname'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN.'</td>
				<td>'.$lists['integratedSearch_propertyname_dropdown'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION.'</td>
				<td>'.$geosearchDropdownList.'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN.'</td>
				<td>'.$lists['integratedSearch_geosearchtype_dropdown'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE.'</td>
				<td>'.$lists['integratedSearch_ptype'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN.'</td>
				<td>'.$lists['integratedSearch_ptype_dropdown'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE.'</td>
				<td>'.$lists['integratedSearch_room_type'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN.'</td>
				<td>'.$lists['integratedSearch_room_type_dropdown'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES.'</td>
				<td>'.$lists['integratedSearch_features'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN.'</td>
				<td>'.$lists['integratedSearch_features_dropdown'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION.'</td>
				<td>'.$lists['integratedSearch_description'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY.'</td>
				<td>'.$lists['integratedSearch_availability'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES.'</td>
				<td>'.$lists['integratedSearch_priceranges'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS.'</td>
				<td><input type="text" class="input-large" name="cfg_integratedSearch_pricerange_increments" value="'.$jrConfig['integratedSearch_pricerange_increments'].'"></td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC.'</td>
			<tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER.'</td>
				<td>'.$lists['integratedSearch_guestnumber'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS.'</td>
				<td>'.$lists['integratedSearch_stars'].'</td>
				<td>'._JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC.'</td>
			</tr>
			
			');
		$contentPanel->setcontent('
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
		
		
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$max_upload_size = ini_get('upload_max_filesize');

		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_A_JOMRES_FILE_UPLOADS',_JOMRES_COM_A_JOMRES_FILE_UPLOADS,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_COM_THUMBNAIL_SMALL_WIDTH.'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_list_max_width" value="'.$jrConfig['thumbnail_property_list_max_width'].'"></td>
				<td>'._JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_THUMBNAIL_SMALL_HEIGHT.'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_list_max_height" value="'.$jrConfig['thumbnail_property_list_max_height'].'"></td>
				<td></td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_THUMBNAIL_MED_WIDTH.'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_header_max_width" value="'.$jrConfig['thumbnail_property_header_max_width'].'"></td>
				<td></td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_THUMBNAIL_MED_HEIGHT.'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_header_max_height" value="'.$jrConfig['thumbnail_property_header_max_height'].'"></td>
				<td></td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE.'</td>
				<td><input type="text" class="input-large" name="cfg_maxwidth" value="'.$jrConfig['maxwidth'].'"></td>
				<td>'._JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_UPLOADS_FILESIZE.' ('.$max_upload_size.' max)'.'</td>
				<td><input type="text" class="input-large" name="cfg_fileSize" value="'.$jrConfig['fileSize'].'"></td>
				<td>'._JOMRES_COM_A_UPLOADS_FILESIZE_DESC.'</td>
			</tr>
			<tr>');
		$contentPanel->setcontent('
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
		
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JOMRES_CUSTOMTEXT_ADMIN_SEARCHOPTIONS',JOMRES_COM_A_SEARCHOPTIONSTAB,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS.'</td>
				<td>'.$guestnumbersearchDropdownList.'</td>
				<td>'._JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_PROPERTYLIST_FILTERS_SHOW.'</td>
				<td>'.$lists['show_search_order'].'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>'._JOMRES_PROPERTYLIST_FILTERS_DEFAULT.'</td>
				<td>'.$sortArrayDropdown.'</td>
				<td>'._JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC.'</td>
			</tr>
			
			<tr>
				<td>'._JOMRES_COM_PROPERTYLISTDESC.'</td>
				<td><input type="text" class="input-large" name="cfg_propertyListDescriptionLimit" value="'.$jrConfig['propertyListDescriptionLimit'].'" /></td>
				<td>'._JOMRES_COM_PROPERTYLISTDESC_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT.'</td>
				<td><input type="text" class="input-large" name="cfg_randomsearchlimit" value="'.$jrConfig['randomsearchlimit'].'" /></td>
				<td>'._JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_LISTLIMIT.'</td>
				<td><input type="text" class="input-large" name="cfg_property_list_limit" value="'.$jrConfig['property_list_limit'].'" /></td>
				<td>'._JOMRES_COM_A_LISTLIMIT_DESC.'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
		
		$contentPanel->startPanel(jr_gettext('_JOMRES_DEBUGGING_TAB',_JOMRES_DEBUGGING_TAB,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_SAFEMODE.'</td>
				<td>'.$lists['safe_mode'].'</td>
				<td>'._JOMRES_SAFEMODE_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_A_ERRORCHECKING.'</td>
				<td>'.$lists['errorChecking'].'</td>
				<td>'._JOMRES_COM_A_ERRORCHECKING_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_COM_DUMPTEMPLATEDATA.'</td>
				<td>'.$lists['dumpTemplate'].'</td>
				<td>'._JOMRES_COM_DUMPTEMPLATEDATA_DESC.'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		
		$contentPanel->startPanel("Mail settings");
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
				<th width="20%">&nbsp;</th>
				<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th>'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'._JOMRES_SYSTEM_EMAILS.'</td>
				<td><input type="text" class="input-large" name="cfg_default_from_address" value="'.$jrConfig['default_from_address'].'" /></td>
				<td>'._JOMRES_SYSTEM_EMAILS_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_TITLE.'</td>
				<td>'.$lists['alternate_smtp_use_settings'].'</td>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_HOST.'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_host" value="'.$jrConfig['alternate_smtp_host'].'" /></td>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC.'</td>
			</tr>
 			<tr>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_PORT.'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_port" value="'.$jrConfig['alternate_smtp_port'].'" /></td>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC.'</td>
			</tr>
			<tr>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL.'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_protocol" value="'.$jrConfig['alternate_smtp_protocol'].'" /></td>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC.'</td>
			</tr>
 			<tr>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_AUTH.'</td>
				<td>'.$lists['alternate_smtp_authentication'].'</td>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC.'</td>
			</tr>
 			<tr>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME.'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_username" value="'.$jrConfig['alternate_smtp_username'].'" /></td>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC.'</td>
			</tr>
 			<tr>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD.'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_password" value="'.$jrConfig['alternate_smtp_password'].'" /></td>
				<td>'._JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC.'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		
		if (_JOMRES_DETECTED_CMS == "joomla15" )
			{
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext'.JRDS.'com_jomres.php'))
				{
				$contentPanel->startPanel("SEF");
				$contentPanel->setcontent('
				<table class="table table-striped" width="100%">
				<tr>
					<th>&nbsp;</th>
					<th>'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th>'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_URL_PREFIX.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_jomres_url_prefix" value="'.$jrConfig['sef_jomres_url_prefix'].'" /></td>
					<td>'._JOMRES_COM_SEF_URL_PREFIX_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_task_alias_viewproperty" value="'.$jrConfig['sef_task_alias_viewproperty'].'" /></td>
					<td>'._JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_task_alias_dobooking" value="'.$jrConfig['sef_task_alias_dobooking'].'" /></td>
					<td>'._JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_TASK_ALIAS_SEARCH.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_task_alias_search" value="'.$jrConfig['sef_task_alias_search'].'" /></td>
					<td>'._JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_COUNTRY.'</td>
					<td>'.$lists['sef_property_url_country'].'</td>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_REGION.'</td>
					<td>'.$lists['sef_property_url_region'].'</td>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_TOWN.'</td>
					<td>'.$lists['sef_property_url_town'].'</td>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_PTYPE.'</td>
					<td>'.$lists['sef_property_url_ptype'].'</td>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME.'</td>
					<td>'.$lists['sef_property_url_propertyname'].'</td>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID.'</td>
					<td>'.$lists['sef_property_url_property_id'].'</td>
					<td>'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_COUNTRY.'</td>
					<td>'.$lists['sef_search_url_country'].'</td>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_DEFAULT_COUNTRY.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_country" value="'.$jrConfig['sef_default_country'].'" /></td>
					<td>'._JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_REGION.'</td>
					<td>'.$lists['sef_search_url_region'].'</td>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_REGION_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_DEFAULT_REGION.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_region" value="'.$jrConfig['sef_default_region'].'" /></td>
					<td>'._JOMRES_COM_SEF_DEFAULT_REGION_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_TOWN.'</td>
					<td>'.$lists['sef_search_url_town'].'</td>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_DEFAULT_TOWN.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_town" value="'.$jrConfig['sef_default_town'].'" /></td>
					<td>'._JOMRES_COM_SEF_DEFAULT_TOWN_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_PTYPE.'</td>
					<td>'.$lists['sef_search_url_ptype'].'</td>
					<td>'._JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC.'</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_SEF_DEFAULT_PTYPE.'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_ptype" value="'.$jrConfig['sef_default_ptype'].'" /></td>
					<td>'._JOMRES_COM_SEF_DEFAULT_PTYPE_DESC.'</td>
				</tr>

				<tr>
					<th colspan="3">&nbsp;</th>
				</tr>
				</table>');
				$contentPanel->insertContent();
				$contentPanel->endPanel();
				}
			else
				{
				$contentPanel->startPanel("SEF");
				$contentPanel->setcontent(_JOMRES_COM_SEF_NOTINSTALLED);
				$contentPanel->insertContent();
				$contentPanel->endPanel();
				}
			}
			
		if ($jrConfig['advanced_site_config'] == 1)
			{
			// Logging configuration
			$contentPanel->startPanel(_JOMRES_COM_LOGGING);
			$contentPanel->setcontent('
			<p>'._JOMRES_COM_LOGGING_WARNING.'</p>
			<table class="table table-striped" width="100%">
				<thead>
				<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th>'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'._JOMRES_COM_LOGGING_BOOKING.'</td>
					<td>'.$lists['loggingBooking'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_LOGGING_GATEWAY.'</td>
					<td>'.$lists['loggingGateway'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_LOGGING_SYSTEM.'</td>
					<td>'.$lists['loggingSystem'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_LOGGING_REQUEST.'</td>
					<td>'.$lists['loggingRequest'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_LOGGING_JRPORTAL.'</td>
					<td>'.$lists['loggingPortal'].'</td>
					<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();

			$contentPanel->startPanel(_JOMRES_COM_YOURBUSINESS);
			$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
				<thead>
				<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th>'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'._JOMRES_COM_YOURBUSINESS_NAME.'</td>
					<td><input type="text" class="input-large" name="cfg_business_name" value="'.$jrConfig['business_name'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_YOURBUSINESS_VATNO.'</td>
					<td><input type="text" class="input-large" name="cfg_business_vat_number" value="'.$jrConfig['business_vat_number'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_YOURBUSINESSADDRESS.'</td>
					<td><input type="text" class="input-large" name="cfg_business_address" value="'.$jrConfig['business_address'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET.'</td>
					<td><input type="text" class="input-large" name="cfg_business_street" value="'.$jrConfig['business_street'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN.'</td>
					<td><input type="text" class="input-large" name="cfg_business_town" value="'.$jrConfig['business_town'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION.'</td>
					<td><input type="text" class="input-large" name="cfg_business_region" value="'.$jrConfig['business_region'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY.'</td>
					<td><input type="text" class="input-large" name="cfg_business_country" value="'.$jrConfig['business_country'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE.'</td>
					<td><input type="text" class="input-large" name="cfg_business_postcode" value="'.$jrConfig['business_postcode'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE.'</td>
					<td><input type="text" class="input-large" name="cfg_business_telephone" value="'.$jrConfig['business_telephone'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'._JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL.'</td>
					<td><input type="text" class="input-large" name="cfg_business_email" value="'.$jrConfig['business_email'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();
			}
			
			$contentPanel->startPanel(RECAPTCHA_TITLE);
			$contentPanel->setcontent('
			<p>'.RECAPTCHA_INFO.'</p>
			<table class="table table-striped" width="100%">
				<thead>
				<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th>'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'.RECAPTCHA_PUBLIC_KEY.'</td>
					<td><input type="text" class="input-large" name="cfg_recaptcha_public_key" value="'.$jrConfig['recaptcha_public_key'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.RECAPTCHA_PRIVATE_KEY.'</td>
					<td><input type="text" class="input-large" name="cfg_recaptcha_private_key" value="'.$jrConfig['recaptcha_private_key'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();
			
		$contentPanel->endTabs();
		?>

		<input type="hidden" name="cfg_useGlobalPFeatures" value="<?php echo $jrConfig['useGlobalPFeatures'];?>" />
		<input type="hidden" name="cfg_useGlobalRoomTypes" value="<?php echo $jrConfig['useGlobalRoomTypes'];?>" />
		<input type="hidden" name="cfg_dynamicMinIntervalRecalculation" value="<?php echo $jrConfig['dynamicMinIntervalRecalculation'];?>" />
		<input type="hidden" name="cfg_disableAudit" value="<?php echo $jrConfig['disableAudit'];?>" />
		<input type="hidden" name="cfg_allowedTags" value="<?php echo $jrConfig['allowedTags'];?>" />
		<input type="hidden" name="cfg_utfHTMLdecode" value="<?php echo $jrConfig['utfHTMLdecode'];?>" />
		<input type="hidden" name="no_html" value="1" />
		<input type="hidden" name="task" value="saveSiteConfig" />
		<input type="hidden" name="option" value="com_jomres" />
		</form>
		<?php
		}

/**
#
 * Calls the edit property feature tempate file
#
 */
function editPfeature_html($output,$rows)
	{
	$pageoutput=array();
	$pageoutput[]=$output;
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
	$tmpl->readTemplatesFromInput( 'edit_property_feature.html');
	$tmpl->addRows( 'pageoutput',$pageoutput);
	$tmpl->addRows( 'rows',$rows);
	$tmpl->displayParsedTemplate();
	}



/**
#
 * Shows the edit property type form
#
 */
function editpropertyType_html($pList,$rowInfo,$hidden,$jrtb)
		{
		?>
        <h2><?php echo $pList['PAGETITLE']; ?></h2>
        <p><?php echo $pList['FURTHER'];?></p>
        <form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="POST" name="adminForm">
        <?php echo $jrtb;?>
        <table class="ui-widget-content ui-corner-all" width="100%" width="100%">
            <tr>
                <th class="ui-state-default"><?php echo $pList['HPTYPE']; ?></th>
                <th class="ui-state-default"><?php echo $pList['HPTYPE_DESC']; ?></th>
            </tr>
            <?php echo $rowInfo; ?>
        </table>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="option" value="com_jomres" />
        <?php echo $hidden ; ?>
        </form>
        <?php
        }//end function List property types

/**
#
 * Called, ultimately, by the show profiles option
#
 */
function listMosUsers_html($userRowInfo,$option)
		{
		?>
		<script type="text/javascript">
		function select_all(obj)
		{ var text_val=eval(obj);
		text_val.focus();
		text_val.select();
		if (!document.all) return; // IE only
		r= text_val.createTextRange();
		r.execCommand('copy');
		} </script>
		<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="POST" name="adminForm">
		<table class="ui-widget-content ui-corner-all" width="100%" width="75%">
		<tr>
			<th class="ui-widget-header ui-corner-all" colspan="9"><?php echo _JOMRES_COM_MR_ASSIGNUSER_TITLE; ?></th>
		</tr>
		<tr>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_ID; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_NAME; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_USERNAME; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS; ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_USERIS_SUPERPROPERTYMANAGER; ?></th>
		</tr>
				<?php echo $userRowInfo; ?>
		</table>
		<input type="hidden" name="jomrestoken" value="<?php echo jomresSetToken();?>">
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		</form>
	<?php
	}//end function List mos users

}

?>