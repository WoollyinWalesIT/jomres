<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

defined( '_JOMRES_INITCHECK' ) or die( '' );

class HTML_jomres {

function controlPanel($version)
		{
		?>
		<table class="adminheading" border="0">
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
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$contentPanel =jomres_getSingleton('jomres_content_tabs');
		?>
		<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="post" name="adminForm">
		<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname">Jomres <?php echo _JOMRES_A; ?></td>
		</tr>
		</table>
		<?php
		echo '<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
		echo $jrtb;
		$sslinput="";
		
		// Disabled due to joomla's url rewriting making it virtually impossible to modify urls for ssl handling AND sef with any confidence.
		// $sslinput=
			// '<tr align="center" valign="middle">
			// <td class="jradmin_subheader_la" valign="top">'.JOMRES_COM_A_USE_SSL.'</td>
			// <td class="jradmin_subheader_la" valign="top">'.$lists['useSSLinBookingform'].'</td>
			// <td class="jradmin_subheader_la" valign="top">'.JOMRES_COM_A_USE_SSL_DESC.get_showtime('live_site').'</td>
			// </tr>';

		$contentPanel->startTabs();
		$contentPanel->startPanel(jr_gettext('_JOMRES_A_TABS_MISC',_JOMRES_A_TABS_MISC,FALSE));
		$contentPanel->setcontent('
		<table  class="jradmin_table" border="0">
		<tr align="center" valign="middle">
			<th width="20%" class="jomres_title">&nbsp;</th>
			<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
			<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_ADVANCED_SITE_CONFIG.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$lists['advanced_site_config'].'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_ADVANCED_SITE_CONFIG_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_SUPPORTKEY.'</td>
			<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" size="30" name="cfg_licensekey" value="'.$licensekey.'" /></td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_SUPPORTKEY_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONFIG_JQUERY.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$lists['load_jquery'].'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONFIG_JQUERY_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONFIG_JQUERY_UI_CSS.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$lists['load_jquery_ui_css'].'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONFIG_JQUERY_UI_CSS_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONFIG_JQUERY_UI.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$lists['load_jquery_ui'].'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONFIG_JQUERY_UI_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_LANGUAGE_CONTEXT.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$language_context_dropdown.'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_LANGUAGE_CONTEXT_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_SINGLEPROPERTYINSTALLATION_TITLE.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$lists['is_single_property_installation'].'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_SINGLEPROPERTYINSTALLATION_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'.JOMRES_COM_A_MAPSKEY.'</td>
			<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" size="30" name="cfg_google_maps_api_key" value="'.$jrConfig['google_maps_api_key'].'" /></td>
			<td class="jradmin_subheader_la" valign="top">'.JOMRES_COM_A_MAPSKEY_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_ALLOWHTMLEDITOR.'</td>
			 <td class="jradmin_subheader_la" valign="top">'.$lists['allowHTMLeditor'].'</td>
			 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_ALLOWHTMLEDITOR_DESC.'</td>
		</tr>
		
		');
		if ($jrConfig['advanced_site_config'] == 1)
			$contentPanel->setcontent('
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['show_booking_form_in_property_details'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['limit_property_country'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY.'</td>
				<td class="jradmin_subheader_la" valign="top">'.limitCountriesDropdown().'</td>
				<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_JQUERYTHEME.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$jqueryUIthemesDropdownList.'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_JQUERYTHEME_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_REVIEWS_ADMIN_CONTROL.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['use_reviews'].'</td>
				<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_REVIEWS_ADMIN_AUTOPUBLISH.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['autopublish_reviews'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_REVIEWS_ADMIN_TESTMODE.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['reviews_test_mode'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_REVIEWS_ADMIN_TESTMODE_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_REVIEWS_ADMIN_GUESTSONLY.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['only_guests_can_review'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_HTMP_PURIFIER.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['use_html_purifier'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_HTMP_PURIFIER_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['useGlobalCurrency'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_CURRENCYCODE.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$currency_codes_dropdown.'</td>
				<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['showLangDropdown'].'</td>
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_GROWL.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['useJomresMessaging'].'</td>
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_GROWL_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_NEWUSER.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['useNewusers'].'</td>
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_NEWUSER_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_MANAGEROPTIONSASIMAGES.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['menusAsImages'].'</td>
				 <td class="jradmin_subheader_la" valign="top">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'.JOMRES_COM_A_MINIMALCONFIG.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['minimalconfiguration'].'</td>
				<td class="jradmin_subheader_la" valign="top">'.JOMRES_COM_A_MINIMALCONFIG_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_TIMEZONE_SWITCHER.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['use_timezone_switcher'].'</td>
				 <td class="jradmin_subheader_la" valign="top">&nbsp;</td>
			</tr>
			'.$sslinput.'
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CACHING.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['useCaching'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CACHING_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JRPORTAL_CONFIG_DEFAULT_CRATE.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['defaultCrate'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JRPORTAL_CONFIG_DEFAULT_CRATE_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JRCONFIG_GLOBALEDITING.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['editingModeAffectsAllProperties'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SELFREGISTRATION.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['selfRegistrationAllowed'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SELFREGISTRATION_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CALENDAROUTPUT.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_cal_output" value="'.$jrConfig['cal_output'].'" /></td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CALENDAROUTPUT_DESC.'</td>
			</tr>
			
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONTACTOWNER_TO_ADMIN.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['contact_owner_emails_to_alternative'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONTACTOWNER_TO_ADMIN_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_contact_owner_emails_to_alternative_email" value="'.$jrConfig['contact_owner_emails_to_alternative_email'].'" /></td>
				<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JOMRESEMAILCHECK.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['useJomresEmailCheck'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JOMRESEMAILCHECK_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JRCONFIG_ISWRAPPED.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['isInIframe'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_JRCONFIG_ISWRAPPED_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_ERRORCHECKING.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['errorChecking'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_ERRORCHECKING_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_EMAILERRORS.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['emailErrors'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_EMAILERRORS_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_DUMPTEMPLATEDATA.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['dumpTemplate'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_DUMPTEMPLATEDATA_DESC.'</td>
			</tr>');
		$contentPanel->setcontent('
		<tr align="center" valign="middle">
			<th colspan="3">&nbsp;</th>
		</tr>
		</table>');
	$contentPanel->insertContent();
	$contentPanel->endPanel();
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JRPORTAL_ROI_TAB',_JRPORTAL_ROI_TAB,FALSE));
		$contentPanel->setcontent('
			<table  class="jradmin_table" border="0">
			<tr align="center" valign="middle">
				<th width="20%" class="jomres_title">&nbsp;</th>
				<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JRPORTAL_SUBSCRIPTIONS_USE.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['useSubscriptions'].'</td>
				 <td class="jradmin_subheader_la" valign="top">'._JRPORTAL_SUBSCRIPTIONS_USE.'</td>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JRPORTAL_INVOICES_COMMISSION_USE.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['use_commission'].'</td>
				 <td class="jradmin_subheader_la" valign="top">'._JRPORTAL_INVOICES_COMMISSION_USE_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['manager_bookings_trigger_commission'].'</td>
				 <td class="jradmin_subheader_la" valign="top">'._JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC.'</td>
			</tr>
			
			
			<tr align="center" valign="middle">
				 <td class="jradmin_subheader_la" valign="top">'._JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND.'</td>
				 <td class="jradmin_subheader_la" valign="top">'.$lists['commission_autosuspend_on_overdue'].'</td>
				 <td class="jradmin_subheader_la" valign="top"></td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_commission_autosuspend_on_overdue_threashold" value="'.$jrConfig['commission_autosuspend_on_overdue_threashold'].'" /></td>
				<td class="jradmin_subheader_la" valign="top">'._JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<th colspan="3">&nbsp;</th>
			</tr>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
	
	
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
		<table  class="jradmin_table" border="0">
		<tr align="center" valign="middle">
			<th width="20%" class="jomres_title">&nbsp;</th>
			<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
			<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
		</tr>
		<!--<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_CALENDARLANGUAGE_AUTO.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$lists['autoDetectJSCalendarLang'].'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_CALENDARLANGUAGE.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$jsCalLangfile.'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_CALENDARLANGUAGE_DESC.'</td>
		</tr>
		<tr>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_CALENDARCSS.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$jsCalCSSfile.'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_CALENDARCSS_DESC.'</td>
		</tr>
		-->
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CALENDARINPUT.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$jsInputFormatDropdownList.'</td>
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CALENDARINPUT_DESC.'</td>
		</tr>
		<tr align="center" valign="middle">
			<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_CALENDAR_STARTDAY.'</td>
			<td class="jradmin_subheader_la" valign="top">'.$calendarStartDaysDropdownList.'</td>
			<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
		</tr>
		
		<tr align="center" valign="middle">
			<th colspan="3">&nbsp;</th>
		</tr>
		</table>');
	$contentPanel->insertContent();
	$contentPanel->endPanel();

	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE',_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE,FALSE));
		$contentPanel->setcontent('
			<table  class="jradmin_table" border="0">
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">'._JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<th width="20%" class="jomres_title">&nbsp;</th>
				<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_enable'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_useCols'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_selectcombo'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_propertyname'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_propertyname_dropdown'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$geosearchDropdownList.'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_geosearchtype_dropdown'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_ptype'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_ptype_dropdown'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_room_type'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_room_type_dropdown'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_features'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_features_dropdown'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_description'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_availability'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top" colspan="3">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_priceranges'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_integratedSearch_pricerange_increments" value="'.$jrConfig['integratedSearch_pricerange_increments'].'"></td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC.'</td>
			<tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_guestnumber'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['integratedSearch_stars'].'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC.'</td>
			</tr>
			
			');
		$contentPanel->setcontent('
			<tr align="center" valign="middle">
				<th colspan="3">&nbsp;</th>
			</tr>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
		
		
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$max_upload_size = ini_get('upload_max_filesize');

		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_A_JOMRES_FILE_UPLOADS',_JOMRES_COM_A_JOMRES_FILE_UPLOADS,FALSE));
		$contentPanel->setcontent('
			<table  class="jradmin_table" border="0">
			<tr align="center" valign="middle">
				<th width="20%" class="jomres_title">&nbsp;</th>
				<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_THUMBNAIL_SMALL_WIDTH.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_thumbnail_property_list_max_width" value="'.$jrConfig['thumbnail_property_list_max_width'].'"></td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_THUMBNAIL_SMALL_HEIGHT.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_thumbnail_property_list_max_height" value="'.$jrConfig['thumbnail_property_list_max_height'].'"></td>
				<td class="jradmin_subheader_la" valign="top"></td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_THUMBNAIL_MED_WIDTH.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_thumbnail_property_header_max_width" value="'.$jrConfig['thumbnail_property_header_max_width'].'"></td>
				<td class="jradmin_subheader_la" valign="top"></td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_THUMBNAIL_MED_HEIGHT.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_thumbnail_property_header_max_height" value="'.$jrConfig['thumbnail_property_header_max_height'].'"></td>
				<td class="jradmin_subheader_la" valign="top"></td>
			</tr>
			
			
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_maxwidth" value="'.$jrConfig['maxwidth'].'"></td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC.'</td>
			</tr>
			<tr>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_UPLOADS_FILESIZE.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_fileSize" value="'.$jrConfig['fileSize'].'"> ( '.$max_upload_size.' max )</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_UPLOADS_FILESIZE_DESC.'</td>
			</tr>
			<tr>');
		$contentPanel->setcontent('
			<tr align="center" valign="middle">
				<th colspan="3">&nbsp;</th>
			</tr>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
		
	if ($jrConfig['advanced_site_config'] == 1)
		{
		$contentPanel->startPanel(jr_gettext('_JOMRES_CUSTOMTEXT_ADMIN_SEARCHOPTIONS',JOMRES_COM_A_SEARCHOPTIONSTAB,FALSE));
		$contentPanel->setcontent('
			<table  class="jradmin_table" border="0">
			<tr align="center" valign="middle">
				<th width="20%" class="jomres_title">&nbsp;</th>
				<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
				<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$guestnumbersearchDropdownList.'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_PROPERTYLIST_FILTERS_SHOW.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$lists['show_search_order'].'</td>
				<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_PROPERTYLIST_FILTERS_DEFAULT.'</td>
				<td class="jradmin_subheader_la" valign="top">'.$sortArrayDropdown.'</td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC.'</td>
			</tr>
			
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_PROPERTYLISTDESC.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_propertyListDescriptionLimit" value="'.$jrConfig['propertyListDescriptionLimit'].'" /></td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_PROPERTYLISTDESC_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_randomsearchlimit" value="'.$jrConfig['randomsearchlimit'].'" /></td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_LISTLIMIT.'</td>
				<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_property_list_limit" value="'.$jrConfig['property_list_limit'].'" /></td>
				<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_A_LISTLIMIT_DESC.'</td>
			</tr>
			<tr align="center" valign="middle">
				<th colspan="3">&nbsp;</th>
			</tr>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		}
		
		if (_JOMRES_DETECTED_CMS == "joomla15")
			{
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext'.JRDS.'com_jomres.php'))
				{
				$contentPanel->startPanel("SEF");
				$contentPanel->setcontent('
				<table  class="jradmin_table" border="0">
				<tr align="center" valign="middle">
					<th width="20%" class="jomres_title">&nbsp;</th>
					<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_URL_PREFIX.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_jomres_url_prefix" value="'.$jrConfig['sef_jomres_url_prefix'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_URL_PREFIX_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_task_alias_viewproperty" value="'.$jrConfig['sef_task_alias_viewproperty'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_task_alias_dobooking" value="'.$jrConfig['sef_task_alias_dobooking'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_TASK_ALIAS_SEARCH.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_task_alias_search" value="'.$jrConfig['sef_task_alias_search'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_COUNTRY.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_property_url_country'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_REGION.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_property_url_region'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_TOWN.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_property_url_town'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_PTYPE.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_property_url_ptype'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_property_url_propertyname'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_property_url_property_id'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_COUNTRY.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_search_url_country'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_COUNTRY.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_default_country" value="'.$jrConfig['sef_default_country'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_REGION.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_search_url_region'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_REGION_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_REGION.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_default_region" value="'.$jrConfig['sef_default_region'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_REGION_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_TOWN.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_search_url_town'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_TOWN.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_default_town" value="'.$jrConfig['sef_default_town'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_TOWN_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_PTYPE.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['sef_search_url_ptype'].'</td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_PTYPE.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_sef_default_ptype" value="'.$jrConfig['sef_default_ptype'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_SEF_DEFAULT_PTYPE_DESC.'</td>
				</tr>

				<tr align="center" valign="middle">
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
			<table  class="jradmin_table" border="0">
				<tr align="center" valign="middle">
					<th width="20%" class="jomres_title">&nbsp;</th>
					<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top" colspan="3">'._JOMRES_COM_LOGGING_WARNING.'</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_LOGGING_BOOKING.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['loggingBooking'].'</td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_LOGGING_GATEWAY.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['loggingGateway'].'</td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_LOGGING_SYSTEM.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['loggingSystem'].'</td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_LOGGING_REQUEST.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['loggingRequest'].'</td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_LOGGING_JRPORTAL.'</td>
					<td class="jradmin_subheader_la" valign="top">'.$lists['loggingPortal'].'</td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<th colspan="3">&nbsp;</th>
				</tr>
				</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();

			$contentPanel->startPanel(_JOMRES_COM_YOURBUSINESS);
			$contentPanel->setcontent('
			<table  class="jradmin_table" border="0">
				<tr align="center" valign="middle">
					<th width="20%" class="jomres_title">&nbsp;</th>
					<th width="20%" class="jomres_title">'._JOMRES_COM_A_CURRENT_SETTINGS.'</th>
					<th width="60%" class="jomres_title">'._JOMRES_COM_A_EXPLANATION.'</th>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_YOURBUSINESS_NAME.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_name" value="'.$jrConfig['business_name'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_YOURBUSINESS_VATNO.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_vat_number" value="'.$jrConfig['business_vat_number'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_YOURBUSINESSADDRESS.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_address" value="'.$jrConfig['business_address'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>

				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_street" value="'.$jrConfig['business_street'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_town" value="'.$jrConfig['business_town'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_region" value="'.$jrConfig['business_region'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_country" value="'.$jrConfig['business_country'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_postcode" value="'.$jrConfig['business_postcode'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_telephone" value="'.$jrConfig['business_telephone'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<td class="jradmin_subheader_la" valign="top">'._JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL.'</td>
					<td class="jradmin_subheader_la" valign="top"><input type="text" class="inputbox" name="cfg_business_email" value="'.$jrConfig['business_email'].'" /></td>
					<td class="jradmin_subheader_la" valign="top">&nbsp;</td>
				</tr>
				<tr align="center" valign="middle">
					<th colspan="3">&nbsp;</th>
				</tr>
				</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();
			}
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
 * Shows the list property types output
#
 */
function listpropertyTypes_html($pList,$rowInfo,$counter,$jrtb)
		{
		echo $jrtb;
		?>
		<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="POST" name="adminForm">
		<input type="hidden" name="jomrestoken" value="<?php echo jomresSetToken();?>">
		<table  class="jradmin_table" border="0">
			<tr>
				<th class="jomres_title" colspan="5"><?php echo $pList['PAGETITLE']; ?></td>
			</tr>
			<tr>
				<th class="jomres_title"><input type="checkbox" name="toggle" value="" onclick="jomres_checkAll(<?php echo $counter+1; ?>);" /></th>
				<th class="jomres_title">&nbsp;</th>
				<th class="jomres_title"><?php echo $pList['HPTYPE']; ?></th>
				<th class="jomres_title"><?php echo $pList['HPTYPE_DESC']; ?></th>
				<th class="jomres_title"><?php echo $pList['HPUBLISHED']; ?></th>
			</tr>
		<?php echo $rowInfo; ?>
		</table>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="option" value="com_jomres" />
		<input type="hidden" name="boxchecked" value="0">
		</form>
		<?php
		}//end function List property types

/**
#
 * Shows the edit property type form
#
 */
function editpropertyType_html($pList,$rowInfo,$hidden,$jrtb)
		{
		?>
	<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="POST" name="adminForm">
	<?php echo $jrtb;?>
	<table class="jradmin_table" border="0">
		<tr>
			<th class="jomres_title" colspan="2"><?php echo $pList['PAGETITLE']; ?></td>
		</tr>
		<tr>
			<th class="jomres_title"><?php echo $pList['HPTYPE']; ?></th><th class="jomres_title"><?php echo $pList['HPTYPE_DESC']; ?></th>
		</tr>
		<?php echo $rowInfo; ?>
	</table>
	<input type="hidden" name="jomrestoken" value="<?php echo jomresSetToken();?>">
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_jomres" />
	<?php echo $hidden ; ?>
		</form>
		<?php
		echo $pList['FURTHER'];
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
		<table  class="jradmin_table" border="0">
		<tr>
			<th class="jomres_title" colspan="9"><?php echo _JOMRES_COM_MR_ASSIGNUSER_TITLE; ?></th>
		</tr>
		<tr>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_ID; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_NAME; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_USERNAME; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS; ?></th>
			<th class="jomres_title"><?php echo _JOMRES_COM_USERIS_SUPERPROPERTYMANAGER; ?></th>
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