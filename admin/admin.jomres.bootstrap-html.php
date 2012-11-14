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
function showSiteConfig( $jrConfig, &$lists,$jsInputFormatDropdownList,$licensekey,$jrtb,$langDropdown,$geosearchDropdownList,$currency_codes_dropdown,$jqueryUIthemesDropdownList,$sortArrayDropdown,$calendarStartDaysDropdownList,$language_context_dropdown,$guestnumbersearchDropdownList,$filtering_level_dropdown,$layouts)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$contentPanel =jomres_singleton_abstract::getInstance('jomres_content_tabs');
	
		?>
        <h2 class="page-header">Jomres <?php echo jr_gettext(_JOMRES_A,'_JOMRES_A',false);; ?></h2>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
				</tr>
			</thead>
			<tbody>');
		
		
		$contentPanel->setcontent('<input type="hidden" name="cfg_alternate_mainmenu" value="1" />'); // For upgraders, we'll force them to use the "alternate" main menu, which is the newer bootstrapped menu.
		
		
		
		$contentPanel->setcontent('
		<tr>
			<td>'.jr_gettext(_JOMRES_COM_ADVANCED_SITE_CONFIG,'_JOMRES_COM_ADVANCED_SITE_CONFIG',false).'</td>
			<td>'.$lists['advanced_site_config'].'</td>
			<td>'.jr_gettext(_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC,'_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC',false).'</td>
		</tr>
		
		<tr>
			<td>'.jr_gettext(_JOMRES_SUPPORTKEY,'_JOMRES_SUPPORTKEY',false).'</td>
			<td><input type="text" class="input-large" name="cfg_licensekey" value="'.$licensekey.'" /></td>
			<td>'.jr_gettext(_JOMRES_SUPPORTKEY_DESC,'_JOMRES_SUPPORTKEY_DESC',false).'</td>
		</tr>
		<!--
		<tr>
			<td>'.jr_gettext(_JOMRES_LICENSESERVER_USERNAME,'_JOMRES_LICENSESERVER_USERNAME',false).'</td>
			<td><input type="text" class="input-large" name="cfg_license_server_username" value="'.$jrConfig['license_server_username'].'" /></td>
			<td>'.jr_gettext(_JOMRES_LICENSESERVER_USERNAME_DESC,'_JOMRES_LICENSESERVER_USERNAME_DESC',false).'</td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_LICENSESERVER_PASSWORD,'_JOMRES_LICENSESERVER_PASSWORD',false).'</td>
			<td><input type="password" class="input-large" name="cfg_license_server_password" value="'.$jrConfig['license_server_password'].'" /></td>
			<td></td>
		</tr>
		-->
		<tr>
			 <td>'.jr_gettext(_JOMRES_PROPERTYLIST_IMAGESASGIFS,'_JOMRES_PROPERTYLIST_IMAGESASGIFS',false).'</td>
			 <td>'.$lists['make_gifs_from_slideshows'].'</td>
			 <td></td>
		</tr>
		<tr>
			 <td>'.jr_gettext(_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY,'_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY',false).'</td>
			 <td>'.$lists['only_featured_properties_as_gifs'].'</td>
			 <td></td>
		</tr>
		
		<tr>
			 <td>'.jr_gettext(_JOMRES_BOOTSTRAPSWITCH_FRONTEND,'_JOMRES_BOOTSTRAPSWITCH_FRONTEND',false).'</td>
			 <td>'.$lists['use_bootstrap_in_frontend'].'</td>
			 <td>'.jr_gettext(_JOMRES_BOOTSTRAPSWITCH_INFO,'_JOMRES_BOOTSTRAPSWITCH_INFO',false).'</td>
		</tr>
		<tr>
			 <td>'.jr_gettext(_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR,'_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',false).'</td>
			 <td>'.$lists['use_bootstrap_in_admin'].'</td>
			 <td></td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_PROPERTYDETAILS_INTABS_TITLE,'_JOMRES_PROPERTYDETAILS_INTABS_TITLE',false).'</td>
			<td>'.$lists['property_details_in_tabs'].'</td>
			<td>'.jr_gettext(_JOMRES_PROPERTYDETAILS_INTABS_DESC,'_JOMRES_PROPERTYDETAILS_INTABS_DESC',false).'</td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_COOKIEPOLICY_TITLE,'_JOMRES_COOKIEPOLICY_TITLE',false).'</td>
			<td>'.$lists['use_cookie_policy'].'</td>
			<td>'.jr_gettext(_JOMRES_COOKIEPOLICY_DESC,'_JOMRES_COOKIEPOLICY_DESC',false).'</td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_DEFAULT_LAT_STARTPOINT,'_JOMRES_DEFAULT_LAT_STARTPOINT',false).'</td>
			<td><input type="text" class="input-large" name="cfg_default_lat" value="'.$jrConfig['default_lat'].'" /></td>
			<td>'.jr_gettext(_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC,'_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC',false).'</td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_DEFAULT_LONG_STARTPOINT,'_JOMRES_DEFAULT_LONG_STARTPOINT',false).'</td>
			<td><input type="text" class="input-large" name="cfg_default_long" value="'.$jrConfig['default_long'].'" /></td>
			<td></td>
		</tr>
		');
		

		$contentPanel->setcontent('
		<tr>
			<td>'.jr_gettext(_JOMRES_JQUERYTHEME,'_JOMRES_JQUERYTHEME',false).'</td>
			<td>'.$jqueryUIthemesDropdownList.'</td>
			<td>'.jr_gettext(_JOMRES_JQUERYTHEME_DESC,'_JOMRES_JQUERYTHEME_DESC',false).'</td>
		</tr>');

		$contentPanel->setcontent('<tr>
			<td>'.jr_gettext(_JOMRES_COM_LANGUAGE_CONTEXT,'_JOMRES_COM_LANGUAGE_CONTEXT',false).'</td>
			<td>'.$language_context_dropdown.'</td>
			<td>'.jr_gettext(_JOMRES_COM_LANGUAGE_CONTEXT_DESC,'_JOMRES_COM_LANGUAGE_CONTEXT_DESC',false).'</td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE,'_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE',false).'</td>
			<td>'.$lists['is_single_property_installation'].'</td>
			<td>'.jr_gettext(_JOMRES_SINGLEPROPERTYINSTALLATION_DESC,'_JOMRES_SINGLEPROPERTYINSTALLATION_DESC',false).'</td>
		</tr>
		<tr>
			<td>'.jr_gettext(JOMRES_COM_A_MAPSKEY,'JOMRES_COM_A_MAPSKEY',false).'</td>
			<td><input type="text" class="input-large" name="cfg_google_maps_api_key" value="'.$jrConfig['google_maps_api_key'].'" /></td>
			<td>'.jr_gettext(JOMRES_COM_A_MAPSKEY_DESC,'JOMRES_COM_A_MAPSKEY_DESC',false).'</td>
		</tr>
		<tr>
			 <td>'.jr_gettext(_JOMRES_COM_ALLOWHTMLEDITOR,'_JOMRES_COM_ALLOWHTMLEDITOR',false).'</td>
			 <td>'.$lists['allowHTMLeditor'].'</td>
			 <td>'.jr_gettext(_JOMRES_COM_ALLOWHTMLEDITOR_DESC,'_JOMRES_COM_ALLOWHTMLEDITOR_DESC',false).'</td>
		</tr>
		<!-- More trouble than it is worth atm, if somebody enters something that creates a javascript error the editor crashes and burns
		<tr>
			 <td>'.jr_gettext(_JOMRES_USE_JOMRESEDITOR,'_JOMRES_USE_JOMRESEDITOR',false).'</td>
			 <td>'.$lists['use_jomres_own_editor'].'</td>
			 <td>'.jr_gettext(_JOMRES_USE_JOMRESEDITOR_DESC,'_JOMRES_USE_JOMRESEDITOR_DESC',false).'</td>
		</tr>
		-->
		');
	

		if ($jrConfig['advanced_site_config'] == 1)
			$contentPanel->setcontent('
			<tr>
				<td>'.jr_gettext(_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO,'_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO',false).'</td>
				<td>'.$lists['limit_property_country'].'</td>
				<td>'.jr_gettext(_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC,'_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY,'_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY',false).'</td>
				<td>'.limitCountriesDropdown().'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN,'_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN',false).'</td>
				 <td>'.$lists['showLangDropdown'].'</td>
				 <td>'.jr_gettext(_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC,'_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_COM_GROWL,'_JOMRES_COM_GROWL',false).'</td>
				 <td>'.$lists['useJomresMessaging'].'</td>
				 <td>'.jr_gettext(_JOMRES_COM_GROWL_DESC,'_JOMRES_COM_GROWL_DESC',false).'</td>
			</tr>
			<!--
			<tr>
				 <td>'.jr_gettext(_JOMRES_MANAGEROPTIONSASIMAGES,'_JOMRES_MANAGEROPTIONSASIMAGES',false).'</td>
				 <td>'.$lists['menusAsImages'].'</td>
				 <td>&nbsp;</td>
			</tr>
			-->
			<tr>
				<td>'.jr_gettext(JOMRES_COM_A_MINIMALCONFIG,'JOMRES_COM_A_MINIMALCONFIG',false).'</td>
				<td>'.$lists['minimalconfiguration'].'</td>
				<td>'.jr_gettext(JOMRES_COM_A_MINIMALCONFIG_DESC,'JOMRES_COM_A_MINIMALCONFIG_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_COM_TIMEZONE_SWITCHER,'_JOMRES_COM_TIMEZONE_SWITCHER',false).'</td>
				 <td>'.$lists['use_timezone_switcher'].'</td>
				 <td>&nbsp;</td>
			</tr>
			'.$sslinput.'
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_CACHING,'_JOMRES_COM_CACHING',false).'</td>
				<td>'.$lists['useCaching'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_CACHING_DESC,'_JOMRES_COM_CACHING_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JRPORTAL_CONFIG_DEFAULT_CRATE,'_JRPORTAL_CONFIG_DEFAULT_CRATE',false).'</td>
				<td>'.$lists['defaultCrate'].'</td>
				<td>'.jr_gettext(_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC,'_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_JRCONFIG_GLOBALEDITING,'_JOMRES_COM_JRCONFIG_GLOBALEDITING',false).'</td>
				<td>'.$lists['editingModeAffectsAllProperties'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC,'_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_SELFREGISTRATION,'_JOMRES_COM_SELFREGISTRATION',false).'</td>
				<td>'.$lists['selfRegistrationAllowed'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_SELFREGISTRATION_DESC,'_JOMRES_COM_SELFREGISTRATION_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_CALENDAROUTPUT,'_JOMRES_COM_CALENDAROUTPUT',false).'</td>
				<td><input type="text" class="input-large" name="cfg_cal_output" value="'.$jrConfig['cal_output'].'" /></td>
				<td>'.jr_gettext(_JOMRES_COM_CALENDAROUTPUT_DESC,'_JOMRES_COM_CALENDAROUTPUT_DESC',false).'</td>
			</tr>
			
			<tr>
				<td>'.jr_gettext(_JOMRES_CONTACTOWNER_TO_ADMIN,'_JOMRES_CONTACTOWNER_TO_ADMIN',false).'</td>
				<td>'.$lists['contact_owner_emails_to_alternative'].'</td>
				<td>'.jr_gettext(_JOMRES_CONTACTOWNER_TO_ADMIN_DESC,'_JOMRES_CONTACTOWNER_TO_ADMIN_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE,'_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE',false).'</td>
				<td><input type="text" class="input-large" name="cfg_contact_owner_emails_to_alternative_email" value="'.$jrConfig['contact_owner_emails_to_alternative_email'].'" /></td>
				<td>&nbsp;</td>
			</tr>
			<!--
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_JOMRESEMAILCHECK,'_JOMRES_COM_JOMRESEMAILCHECK',false).'</td>
				<td>'.$lists['useJomresEmailCheck'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_JOMRESEMAILCHECK_DESC,'_JOMRES_COM_JOMRESEMAILCHECK_DESC',false).'</td>
			</tr> -->
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_JRCONFIG_ISWRAPPED,'_JOMRES_COM_JRCONFIG_ISWRAPPED',false).'</td>
				<td>'.$lists['isInIframe'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC,'_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC',false).'</td>
			</tr>
			<!--<tr>
				 <td>'.jr_gettext(_JOMRES_ACCESS_CONTROL_CONFIG_TITLE,'_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',false).'</td>
				 <td>'.$lists['full_access_control'].'</td>
				 <td>'.jr_gettext(_JOMRES_ACCESS_CONTROL_CONFIG_DESC,'_JOMRES_ACCESS_CONTROL_CONFIG_DESC',false).'</td>
			</tr>-->
			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_JQUERY,'_JOMRES_CONFIG_JQUERY',false).'</td>
				<td>'.$lists['load_jquery'].'</td>
				<td>'.jr_gettext(_JOMRES_CONFIG_JQUERY_DESC,'_JOMRES_CONFIG_JQUERY_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_JQUERY_UI_CSS,'_JOMRES_CONFIG_JQUERY_UI_CSS',false).'</td>
				<td>'.$lists['load_jquery_ui_css'].'</td>
				<td>'.jr_gettext(_JOMRES_CONFIG_JQUERY_UI_CSS_DESC,'_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_JQUERY_UI,'_JOMRES_CONFIG_JQUERY_UI',false).'</td>
				<td>'.$lists['load_jquery_ui'].'</td>
				<td>'.jr_gettext(_JOMRES_CONFIG_JQUERY_UI_DESC,'_JOMRES_CONFIG_JQUERY_UI_DESC',false).'</td>
			</tr>
			<!--<tr>
				<td>'.jr_gettext(_JOMRES_JAVASCRIPT_CACHING_TITLE,'_JOMRES_JAVASCRIPT_CACHING_TITLE',false).'</td>
				<td>'.$lists['javascript_caching_enabled'].'</td>
				<td>'.jr_gettext(_JOMRES_JAVASCRIPT_CACHING_DESC,'_JOMRES_JAVASCRIPT_CACHING_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CSS_CACHING_TITLE,'_JOMRES_CSS_CACHING_TITLE',false).'</td>
				<td>'.$lists['css_caching_enabled'].'</td>
				<td>'.jr_gettext(_JOMRES_CSS_CACHING_DESC,'_JOMRES_CSS_CACHING_DESC',false).'</td>
			</tr>-->
			');
		$contentPanel->setcontent('
		</tbody>
		</table>');
	$contentPanel->insertContent();
	$contentPanel->endPanel();
	

	if ($jrConfig['advanced_site_config'] == 1)
		{
		if (!isset($jrConfig['html_purifier_allowed_tags']))
			$jrConfig['html_purifier_allowed_tags'] = "p,b,strong,a[href],i,img[src]";
		if (!isset($jrConfig['inputs_allowing_html']))
			$jrConfig['inputs_allowing_html'] = "property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers";
		
		$contentPanel->startPanel(jr_gettext('_JOMRES_INPUTFILTERING',_JOMRES_INPUTFILTERING,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				 <td>'.jr_gettext(_JOMRES_INPUTFILTERING_LEVEL_TITLE,'_JOMRES_INPUTFILTERING_LEVEL_TITLE',false).'</td>
				 <td>'.$filtering_level_dropdown.'</td>
				 <td>'.jr_gettext(_JOMRES_INPUTFILTERING_LEVEL_DESC,'_JOMRES_INPUTFILTERING_LEVEL_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE,'_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',false).'</td>
				 <td><textarea type="text" class="input-large" name="cfg_html_purifier_allowed_tags" >'.$jrConfig['html_purifier_allowed_tags'].' </textarea></td>
				 <td>'.jr_gettext(_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC,'_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_INPUTFILTERING_INPUTS_TITLE,'_JOMRES_INPUTFILTERING_INPUTS_TITLE',false).'</td>
				<td><textarea class="input-large" name="cfg_inputs_allowing_html" >'.$jrConfig['inputs_allowing_html'].'</textarea></td>
				<td>'.jr_gettext(_JOMRES_INPUTFILTERING_INPUTS_DESC,'_JOMRES_INPUTFILTERING_INPUTS_DESC',false).'</td>
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
		$contentPanel->startPanel(jr_gettext('_JOMRES_MOBILE_SETTINGS',_JOMRES_MOBILE_SETTINGS,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_MOBILE_REDIRECT,'_JOMRES_MOBILE_REDIRECT',false).'</td>
				<td>'.$lists['mobile_redirect'].'</td>
				<td>'.jr_gettext(_JOMRES_MOBILE_REDIRECT_DESC,'_JOMRES_MOBILE_REDIRECT_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_SIMULATE_MOBILE,'_JOMRES_SIMULATE_MOBILE',false).'</td>
				<td>'.$lists['mobile_simulation'].'</td>
				<td>'.jr_gettext(_JOMRES_SIMULATE_MOBILE_DESC,'_JOMRES_SIMULATE_MOBILE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_SIMULATE_MOBILE_RESTRICTION,'_JOMRES_SIMULATE_MOBILE_RESTRICTION',false).'</td>
				<td><input type="text" class="input-large" name="cfg_mobile_simulation_ip_restriction" value="'.$jrConfig['mobile_simulation_ip_restriction'].'" /></td>
				<td>'.jr_gettext(_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC,'_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',false).'</td>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS,'_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS',false).'</td>
				<td>'.$lists['show_booking_form_in_property_details'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC,'_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_BOOKINGORM_MODALPOPUP,'_JOMRES_BOOKINGORM_MODALPOPUP',false).'</td>
				 <td>'.$lists['booking_form_modal_popup'].'</td>
				 <td>'.jr_gettext(_JOMRES_BOOKINGORM_MODALPOPUP_DESC,'_JOMRES_BOOKINGORM_MODALPOPUP_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_BOOKINGORM_TAX_OUTPUT,'_JOMRES_BOOKINGORM_TAX_OUTPUT',false).'</td>
				<td>'.$lists['show_tax_in_totals_summary'].'</td>
				<td>'.jr_gettext(_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC,'_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_COM_NEWUSER,'_JOMRES_COM_NEWUSER',false).'</td>
				 <td>'.$lists['useNewusers'].'</td>
				 <td>'.jr_gettext(_JOMRES_COM_NEWUSER_DESC,'_JOMRES_COM_NEWUSER_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS,'_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS',false).'</td>
				 <td>'.$lists['useNewusers_sendemail'].'</td>
				 <td>'.jr_gettext(_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC,'_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JOMRES_BOOKINGFORM_LOCK_TITLE,'_JOMRES_BOOKINGFORM_LOCK_TITLE',false).'</td>
				 <td><input type="text" class="input-large" name="cfg_room_lock_timeout" value="'.$jrConfig['room_lock_timeout'].'" /></td>
				 <td>'.jr_gettext(_JOMRES_BOOKINGFORM_LOCK_DESC,'_JOMRES_BOOKINGFORM_LOCK_DESC',false).'</td>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				 <td>'.jr_gettext(_JRPORTAL_SUBSCRIPTIONS_USE,'_JRPORTAL_SUBSCRIPTIONS_USE',false).'</td>
				 <td>'.$lists['useSubscriptions'].'</td>
				 <td>'.jr_gettext(_JRPORTAL_SUBSCRIPTIONS_USE,'_JRPORTAL_SUBSCRIPTIONS_USE',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JRPORTAL_INVOICES_COMMISSION_USE,'_JRPORTAL_INVOICES_COMMISSION_USE',false).'</td>
				 <td>'.$lists['use_commission'].'</td>
				 <td>'.jr_gettext(_JRPORTAL_INVOICES_COMMISSION_USE_DESC,'_JRPORTAL_INVOICES_COMMISSION_USE_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS,'_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',false).'</td>
				 <td>'.$lists['manager_bookings_trigger_commission'].'</td>
				 <td>'.jr_gettext(_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC,'_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',false).'</td>
			</tr>
			<tr>
				 <td>'.jr_gettext(_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND,'_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',false).'</td>
				 <td>'.$lists['commission_autosuspend_on_overdue'].'</td>
				 <td></td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD,'_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',false).'</td>
				<td><input type="text" class="input-large" name="cfg_commission_autosuspend_on_overdue_threashold" value="'.$jrConfig['commission_autosuspend_on_overdue_threashold'].'" /></td>
				<td>'.jr_gettext(_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC,'_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',false).'</td>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO,'_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO',false).'</td>
				<td>'.$lists['useGlobalCurrency'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC,'_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_CURRENCYCODE,'_JOMRES_COM_A_CURRENCYCODE',false).'</td>
				<td>'.$currency_codes_dropdown.'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CONVERSION_TITLE,'_JOMRES_CONVERSION_TITLE',false).'</td>
				<td>'.$lists['use_conversion_feature'].'</td>
				<td>'.jr_gettext(_JOMRES_CONVERSION_TITLE_DESC,'_JOMRES_CONVERSION_TITLE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_IP_DETECTION_API_KEY_TITLE,'_JOMRES_IP_DETECTION_API_KEY_TITLE',false).'</td>
				<td><input type="text" class="input-large" name="cfg_geolocation_api_key" value="'.$jrConfig['geolocation_api_key'].'" /></td>
				<td>'.jr_gettext(_JOMRES_IP_DETECTION_API_KEY_DESC,'_JOMRES_IP_DETECTION_API_KEY_DESC',false).'</td>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_REVIEWS_ADMIN_CONTROL,'_JOMRES_REVIEWS_ADMIN_CONTROL',false).'</td>
				<td>'.$lists['use_reviews'].'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH,'_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH',false).'</td>
				<td>'.$lists['autopublish_reviews'].'</td>
				<td>'.jr_gettext(_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC,'_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_REVIEWS_ADMIN_TESTMODE,'_JOMRES_REVIEWS_ADMIN_TESTMODE',false).'</td>
				<td>'.$lists['reviews_test_mode'].'</td>
				<td>'.jr_gettext(_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC,'_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_REVIEWS_ADMIN_GUESTSONLY,'_JOMRES_REVIEWS_ADMIN_GUESTSONLY',false).'</td>
				<td>'.$lists['only_guests_can_review'].'</td>
				<td>'.jr_gettext(_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC,'_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC',false).'</td>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>'.jr_gettext(_JOMRES_JSCALENDAR_USECLEARCHECKBOX,'_JOMRES_JSCALENDAR_USECLEARCHECKBOX',false).'</td>
			<td>'.$lists['use_cleardate_checkbox'].'</td>
			<td></td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_COM_CALENDARINPUT,'_JOMRES_COM_CALENDARINPUT',false).'</td>
			<td>'.$jsInputFormatDropdownList.'</td>
			<td>'.jr_gettext(_JOMRES_COM_CALENDARINPUT_DESC,'_JOMRES_COM_CALENDARINPUT_DESC',false).'</td>
		</tr>
		<tr>
			<td>'.jr_gettext(_JOMRES_COM_CALENDAR_STARTDAY,'_JOMRES_COM_CALENDAR_STARTDAY',false).'</td>
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
			<p>'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC',false).'</p>
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE,'_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE',false).'</td>
				<td>'.$lists['integratedSearch_enable'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS,'_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS',false).'</td>
				<td>'.$lists['integratedSearch_useCols'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO,'_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',false).'</td>
				<td>'.$lists['integratedSearch_selectcombo'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',false).'</td>
				<td>'.$lists['integratedSearch_propertyname'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',false).'</td>
				<td>'.$lists['integratedSearch_propertyname_dropdown'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION,'_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',false).'</td>
				<td>'.$geosearchDropdownList.'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN,'_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',false).'</td>
				<td>'.$lists['integratedSearch_geosearchtype_dropdown'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',false).'</td>
				<td>'.$lists['integratedSearch_ptype'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',false).'</td>
				<td>'.$lists['integratedSearch_ptype_dropdown'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE,'_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',false).'</td>
				<td>'.$lists['integratedSearch_room_type'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN,'_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',false).'</td>
				<td>'.$lists['integratedSearch_room_type_dropdown'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',false).'</td>
				<td>'.$lists['integratedSearch_features'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',false).'</td>
				<td>'.$lists['integratedSearch_features_dropdown'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',false).'</td>
				<td>'.$lists['integratedSearch_description'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',false).'</td>
				<td>'.$lists['integratedSearch_availability'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',false).'</td>
				<td>'.$lists['integratedSearch_priceranges'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS,'_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',false).'</td>
				<td><input type="text" class="input-large" name="cfg_integratedSearch_pricerange_increments" value="'.$jrConfig['integratedSearch_pricerange_increments'].'"></td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',false).'</td>
			<tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',false).'</td>
				<td>'.$lists['integratedSearch_guestnumber'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',false).'</td>
				<td>'.$lists['integratedSearch_stars'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC,'_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',false).'</td>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_THUMBNAIL_SMALL_WIDTH,'_JOMRES_COM_THUMBNAIL_SMALL_WIDTH',false).'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_list_max_width" value="'.$jrConfig['thumbnail_property_list_max_width'].'"></td>
				<td>'.jr_gettext(_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC,'_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT,'_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT',false).'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_list_max_height" value="'.$jrConfig['thumbnail_property_list_max_height'].'"></td>
				<td></td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_THUMBNAIL_MED_WIDTH,'_JOMRES_COM_THUMBNAIL_MED_WIDTH',false).'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_header_max_width" value="'.$jrConfig['thumbnail_property_header_max_width'].'"></td>
				<td></td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_THUMBNAIL_MED_HEIGHT,'_JOMRES_COM_THUMBNAIL_MED_HEIGHT',false).'</td>
				<td><input type="text" class="input-large" name="cfg_thumbnail_property_header_max_height" value="'.$jrConfig['thumbnail_property_header_max_height'].'"></td>
				<td></td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE,'_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE',false).'</td>
				<td><input type="text" class="input-large" name="cfg_maxwidth" value="'.$jrConfig['maxwidth'].'"></td>
				<td>'.jr_gettext(_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC,'_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_UPLOADS_FILESIZE,'_JOMRES_COM_A_UPLOADS_FILESIZE',false).' ('.$max_upload_size.' max)'.'</td>
				<td><input type="text" class="input-large" name="cfg_fileSize" value="'.$jrConfig['fileSize'].'"></td>
				<td>'.jr_gettext(_JOMRES_COM_A_UPLOADS_FILESIZE_DESC,'_JOMRES_COM_A_UPLOADS_FILESIZE_DESC',false).'</td>
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
		$contentPanel->startPanel(jr_gettext('JOMRES_COM_A_SEARCHOPTIONSTAB',JOMRES_COM_A_SEARCHOPTIONSTAB,FALSE));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_LAYOUTS_DEFAULT,'_JOMRES_COM_LAYOUTS_DEFAULT',false).'</td>
				<td>'.$layouts.'</td>
				<td></td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS,'_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS',false).'</td>
				<td>'.$guestnumbersearchDropdownList.'</td>
				<td>'.jr_gettext(_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC,'_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_PROPERTYLIST_FILTERS_SHOW,'_JOMRES_PROPERTYLIST_FILTERS_SHOW',false).'</td>
				<td>'.$lists['show_search_order'].'</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_PROPERTYLIST_FILTERS_DEFAULT,'_JOMRES_PROPERTYLIST_FILTERS_DEFAULT',false).'</td>
				<td>'.$sortArrayDropdown.'</td>
				<td>'.jr_gettext(_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC,'_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC',false).'</td>
			</tr>
			
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_PROPERTYLISTDESC,'_JOMRES_COM_PROPERTYLISTDESC',false).'</td>
				<td><input type="text" class="input-large" name="cfg_propertyListDescriptionLimit" value="'.$jrConfig['propertyListDescriptionLimit'].'" /></td>
				<td>'.jr_gettext(_JOMRES_COM_PROPERTYLISTDESC_DESC,'_JOMRES_COM_PROPERTYLISTDESC_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT,'_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT',false).'</td>
				<td><input type="text" class="input-large" name="cfg_randomsearchlimit" value="'.$jrConfig['randomsearchlimit'].'" /></td>
				<td>'.jr_gettext(_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC,'_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_LISTLIMIT,'_JOMRES_COM_A_LISTLIMIT',false).'</td>
				<td><input type="text" class="input-large" name="cfg_property_list_limit" value="'.$jrConfig['property_list_limit'].'" /></td>
				<td>'.jr_gettext(_JOMRES_COM_A_LISTLIMIT_DESC,'_JOMRES_COM_A_LISTLIMIT_DESC',false).'</td>
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
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_SAFEMODE,'_JOMRES_SAFEMODE',false).'</td>
				<td>'.$lists['safe_mode'].'</td>
				<td>'.jr_gettext(_JOMRES_SAFEMODE_DESC,'_JOMRES_SAFEMODE_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_A_ERRORCHECKING,'_JOMRES_COM_A_ERRORCHECKING',false).'</td>
				<td>'.$lists['errorChecking'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_A_ERRORCHECKING_DESC,'_JOMRES_COM_A_ERRORCHECKING_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_COM_DUMPTEMPLATEDATA,'_JOMRES_COM_DUMPTEMPLATEDATA',false).'</td>
				<td>'.$lists['dumpTemplate'].'</td>
				<td>'.jr_gettext(_JOMRES_COM_DUMPTEMPLATEDATA_DESC,'_JOMRES_COM_DUMPTEMPLATEDATA_DESC',false).'</td>
			</tr>
			</tbody>
			</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		
		$contentPanel->startPanel(jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE,"_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE",false));
		$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
			<thead>
			<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>'.jr_gettext(_JOMRES_SYSTEM_EMAILS,'_JOMRES_SYSTEM_EMAILS',false).'</td>
				<td><input type="text" class="input-large" name="cfg_default_from_address" value="'.$jrConfig['default_from_address'].'" /></td>
				<td>'.jr_gettext(_JOMRES_SYSTEM_EMAILS_DESC,'_JOMRES_SYSTEM_EMAILS_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE,'_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',false).'</td>
				<td>'.$lists['alternate_smtp_use_settings'].'</td>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_DESC,'_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_HOST,'_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',false).'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_host" value="'.$jrConfig['alternate_smtp_host'].'" /></td>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC,'_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',false).'</td>
			</tr>
 			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_PORT,'_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',false).'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_port" value="'.$jrConfig['alternate_smtp_port'].'" /></td>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC,'_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',false).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL,'_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',false).'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_protocol" value="'.$jrConfig['alternate_smtp_protocol'].'" /></td>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC,'_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',false).'</td>
			</tr>
 			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH,'_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',false).'</td>
				<td>'.$lists['alternate_smtp_authentication'].'</td>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC,'_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',false).'</td>
			</tr>
 			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME,'_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',false).'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_username" value="'.$jrConfig['alternate_smtp_username'].'" /></td>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC,'_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',false).'</td>
			</tr>
 			<tr>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD,'_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',false).'</td>
				<td><input type="text" class="input-large" name="cfg_alternate_smtp_password" value="'.$jrConfig['alternate_smtp_password'].'" /></td>
				<td>'.jr_gettext(_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC,'_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',false).'</td>
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
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM__JOMRES_COM_SEF_URL_PREFIXMR_NO,'_JOMRES_COM_SEF_URL_PREFIX',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_jomres_url_prefix" value="'.$jrConfig['sef_jomres_url_prefix'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_URL_PREFIX_DESC,'_JOMRES_COM_SEF_URL_PREFIX_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY,'_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_task_alias_viewproperty" value="'.$jrConfig['sef_task_alias_viewproperty'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC,'_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING,'_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_task_alias_dobooking" value="'.$jrConfig['sef_task_alias_dobooking'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC,'_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_TASK_ALIAS_SEARCH,'_JOMRES_COM_SEF_TASK_ALIAS_SEARCH',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_task_alias_search" value="'.$jrConfig['sef_task_alias_search'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC,'_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY,'_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY',false).'</td>
					<td>'.$lists['sef_property_url_country'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC,'_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_REGION,'_JOMRES_COM_SEF_PROPERTY_URL_REGION',false).'</td>
					<td>'.$lists['sef_property_url_region'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC,'_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_TOWN,'_JOMRES_COM_SEF_PROPERTY_URL_TOWN',false).'</td>
					<td>'.$lists['sef_property_url_town'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC,'_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_PTYPE,'_JOMRES_COM_SEF_PROPERTY_URL_PTYPE',false).'</td>
					<td>'.$lists['sef_property_url_ptype'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC,'_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME,'_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME',false).'</td>
					<td>'.$lists['sef_property_url_propertyname'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC,'_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID,'_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID',false).'</td>
					<td>'.$lists['sef_property_url_property_id'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC,'_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_COUNTRY,'_JOMRES_COM_SEF_SEARCH_URL_COUNTRY',false).'</td>
					<td>'.$lists['sef_search_url_country'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC,'_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_COUNTRY,'_JOMRES_COM_SEF_DEFAULT_COUNTRY',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_country" value="'.$jrConfig['sef_default_country'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC,'_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_REGION,'_JOMRES_COM_SEF_SEARCH_URL_REGION',false).'</td>
					<td>'.$lists['sef_search_url_region'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC,'_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_REGION,'_JOMRES_COM_SEF_DEFAULT_REGION',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_region" value="'.$jrConfig['sef_default_region'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_REGION_DESC,'_JOMRES_COM_SEF_DEFAULT_REGION_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_TOWN,'_JOMRES_COM_SEF_SEARCH_URL_TOWN',false).'</td>
					<td>'.$lists['sef_search_url_town'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC,'_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_TOWN,'_JOMRES_COM_SEF_DEFAULT_TOWN',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_town" value="'.$jrConfig['sef_default_town'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_TOWN_DESC,'_JOMRES_COM_SEF_DEFAULT_TOWN_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_PTYPE,'_JOMRES_COM_SEF_SEARCH_URL_PTYPE',false).'</td>
					<td>'.$lists['sef_search_url_ptype'].'</td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC,'_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC',false).'</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_PTYPE,'_JOMRES_COM_SEF_DEFAULT_PTYPE',false).'</td>
					<td><input type="text" class="input-large" name="cfg_sef_default_ptype" value="'.$jrConfig['sef_default_ptype'].'" /></td>
					<td>'.jr_gettext(_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC,'_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC',false).'</td>
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
			$contentPanel->startPanel(jr_gettext(_JOMRES_COM_LOGGING,'_JOMRES_COM_LOGGING',false));
			$contentPanel->setcontent('
			<p>'.jr_gettext(_JOMRES_COM_LOGGING_WARNING,'_JOMRES_COM_LOGGING_WARNING',false).'</p>
			<table class="table table-striped" width="100%">
				<thead>
				<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_LOGGING_BOOKING,'_JOMRES_COM_LOGGING_BOOKING',false).'</td>
					<td>'.$lists['loggingBooking'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_LOGGING_GATEWAY,'_JOMRES_COM_LOGGING_GATEWAY',false).'</td>
					<td>'.$lists['loggingGateway'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_LOGGING_SYSTEM,'_JOMRES_COM_LOGGING_SYSTEM',false).'</td>
					<td>'.$lists['loggingSystem'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_LOGGING_REQUEST,'_JOMRES_COM_LOGGING_REQUEST',false).'</td>
					<td>'.$lists['loggingRequest'].'</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_LOGGING_JRPORTAL,'_JOMRES_COM_LOGGING_JRPORTAL',false).'</td>
					<td>'.$lists['loggingPortal'].'</td>
					<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();

			$contentPanel->startPanel(jr_gettext(_JOMRES_COM_YOURBUSINESS,'_JOMRES_COM_YOURBUSINESS',false));
			$contentPanel->setcontent('
			<table class="table table-striped" width="100%">
				<thead>
				<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_YOURBUSINESS_NAME,'_JOMRES_COM_YOURBUSINESS_NAME',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_name" value="'.$jrConfig['business_name'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_YOURBUSINESS_VATNO,'_JOMRES_COM_YOURBUSINESS_VATNO',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_vat_number" value="'.$jrConfig['business_vat_number'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_YOURBUSINESSADDRESS,'_JOMRES_COM_YOURBUSINESSADDRESS',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_address" value="'.$jrConfig['business_address'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET,'_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_street" value="'.$jrConfig['business_street'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN,'_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_town" value="'.$jrConfig['business_town'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION,'_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_region" value="'.$jrConfig['business_region'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY,'_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_country" value="'.$jrConfig['business_country'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE,'_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_postcode" value="'.$jrConfig['business_postcode'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE,'_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_telephone" value="'.$jrConfig['business_telephone'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL,'_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',false).'</td>
					<td><input type="text" class="input-large" name="cfg_business_email" value="'.$jrConfig['business_email'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();
			}
			
			$contentPanel->startPanel(jr_gettext(RECAPTCHA_TITLE,'RECAPTCHA_TITLE',false));
			$contentPanel->setcontent('
			<p>'.RECAPTCHA_INFO.'</p>
			<table class="table table-striped" width="100%">
				<thead>
				<tr>
					<th width="20%">&nbsp;</th>
					<th width="20%">'.jr_gettext(_JOMRES_COM_A_CURRENT_SETTINGS,'_JOMRES_COM_A_CURRENT_SETTINGS',false).'</th>
					<th>'.jr_gettext(_JOMRES_COM_A_EXPLANATION,'_JOMRES_COM_A_EXPLANATION',false).'</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'.jr_gettext(RECAPTCHA_PUBLIC_KEY,'RECAPTCHA_PUBLIC_KEY',false).'</td>
					<td><input type="text" class="input-large" name="cfg_recaptcha_public_key" value="'.$jrConfig['recaptcha_public_key'].'" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>'.jr_gettext(RECAPTCHA_PRIVATE_KEY,'RECAPTCHA_PRIVATE_KEY',false).'</td>
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
		<table class="ui-widget-content ui-corner-all" border="0" width="75%">
		<tr>
			<th class="ui-widget-header ui-corner-all" colspan="9"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_TITLE,'_JOMRES_COM_MR_ASSIGNUSER_TITLE',false); ?></th>
		</tr>
		<tr>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_ID,'_JOMRES_COM_MR_ASSIGNUSER_ID',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_NAME,'_JOMRES_COM_MR_ASSIGNUSER_NAME',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_USERNAME,'_JOMRES_COM_MR_ASSIGNUSER_USERNAME',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER,'_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL,'_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS,'_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL,'_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS,'_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS',false); ?></th>
			<th class="ui-widget-header ui-corner-all"><?php echo jr_gettext(_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER,'_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER',false); ?></th>
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