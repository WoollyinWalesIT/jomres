<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10501a_misc
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();

		$configurationPanel 		= $componentArgs[ 'configurationPanel' ];
		$lists 						= $componentArgs[ 'lists' ];
		$bootstrap_ver_dropdown 	= $componentArgs[ 'bootstrap_ver_dropdown' ];
		$jqueryUIthemesDropdownList = $componentArgs[ 'jqueryUIthemesDropdownList' ];
		$language_context_dropdown 	= $componentArgs[ 'language_context_dropdown' ];
		$support_key_is_trial_license = '';
		$renewal_link = '';
		
		if ( trim($jrConfig['licensekey']) != "")
			{
			jr_import('jomres_check_support_key');
			$jomres_check_support_key = new jomres_check_support_key('site_settings');
			$jomres_check_support_key->check_license_key();

			if ($jomres_check_support_key->key_valid)
				{
				if ($jomres_check_support_key->allows_plugins == "1")
					{
					$support_key_message = '<p class="alert alert-success">'.jr_gettext('_JOMRES_SUPPORTKEY_DESC_VALID','_JOMRES_SUPPORTKEY_DESC_VALID',false,false).'</p>';
					}
				else
					{
					$support_key_message = '<p class="alert alert-success">'.jr_gettext('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS','_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS',false,false).'</p>';
					}
				}
			else
				{
				$support_key_message =  '<p class="alert alert-danger">'.jr_gettext('_JOMRES_SUPPORTKEY_DESC_INVALID','_JOMRES_SUPPORTKEY_DESC_INVALID',false,false).'</p>';
				$renewal_link = '<a href="https://license-server.jomres.net/order.php?cmd=products/licenses/list&product_id=13" target="_blank">Renew now</a>';
				}
			$support_key_status = '<span class="badge">Status</span> '.$jomres_check_support_key->key_status.'';
			$support_key_owner = '<span class="badge">Owner</span> '.$jomres_check_support_key->owner.'<br/>';
			$support_key_expires = '<span class="badge">Expires</span> '.$jomres_check_support_key->expires.'';

			if ( $jomres_check_support_key->is_trial_license=="1")
				$support_key_is_trial_license = '<span class="badge badge-warning">Trial license</span> ';
			}
		else
			{
			$support_key_status = '';
			$support_key_owner = '';
			$support_key_message = '';
			$support_key_expires = '';
			}
		$configurationPanel->startPanel( jr_gettext( "_JOMRES_A_TABS_MISC", '_JOMRES_A_TABS_MISC', false ) );

		$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_ADVANCED_SITE_CONFIG', '_JOMRES_COM_ADVANCED_SITE_CONFIG', false ) );
		$configurationPanel->setmiddle( $lists[ 'advanced_site_config' ] );
		$configurationPanel->setright( jr_gettext( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', false ) );
		$configurationPanel->insertSetting();

		$configurationPanel->setleft( jr_gettext( '_JOMRES_SUPPORTKEY', '_JOMRES_SUPPORTKEY', false ) );
		$configurationPanel->setmiddle( '<input type="password" class="input-xlarge" name="cfg_licensekey" value="' . $jrConfig[ 'licensekey' ] . '" /><br/>'.' '.$support_key_status.' '.$support_key_owner.' '.$support_key_expires.' '.$renewal_link.' '.$support_key_is_trial_license );
		$configurationPanel->setright( jr_gettext( '_JOMRES_SUPPORTKEY_DESC', '_JOMRES_SUPPORTKEY_DESC', false ).' '.$support_key_message );
		$configurationPanel->insertSetting();

		jr_import( 'jomres_check_support_key' );
		$key_validation  = new jomres_check_support_key( JOMRES_SITEPAGE_URL_ADMIN . "&task=showplugins" );
		if ($key_validation->shop_status == "OPEN" )
			{
			$configurationPanel->setleft( jr_gettext( '_JOMRES_LICENSESERVER_USERNAME', '_JOMRES_LICENSESERVER_USERNAME', false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_license_server_username" value="' . $jrConfig[ 'license_server_username' ] . '" />' );
			$configurationPanel->setright( jr_gettext( '_JOMRES_LICENSESERVER_USERNAME_DESC', '_JOMRES_LICENSESERVER_USERNAME_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_LICENSESERVER_PASSWORD', '_JOMRES_LICENSESERVER_PASSWORD', false ) );
			$configurationPanel->setmiddle( '<input type="password" class="input-large" name="cfg_license_server_password" value="' . $jrConfig[ 'license_server_password' ] . '" />' );
			$configurationPanel->setright( );
			$configurationPanel->insertSetting();
			}
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_TRACKING_ENABLE', '_JOMRES_TRACKING_ENABLE', false ) );
		$configurationPanel->setmiddle( $lists[ 'send_tracking_data' ] );
		$configurationPanel->setright( jr_gettext( '_JOMRES_TRACKING_ENABLE_DESC', '_JOMRES_TRACKING_ENABLE_DESC', false ) );
		$configurationPanel->insertSetting();
		
		if ( $jrConfig[ 'advanced_site_config' ] == 1 ) 
			{
			$configurationPanel->setleft( jr_gettext( '_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', '_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', false ) );
			$configurationPanel->setmiddle( $lists[ 'region_names_are_translatable' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_REGION_TRANSLATION_SWITCH_DESC', '_JOMRES_REGION_TRANSLATION_SWITCH_DESC', false ) );
			$configurationPanel->insertSetting();
			}
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', false ) );
		$configurationPanel->setmiddle( $lists[ 'use_bootstrap_in_frontend' ] );
		$configurationPanel->setright( jr_gettext( '_JOMRES_BOOTSTRAPSWITCH_INFO', '_JOMRES_BOOTSTRAPSWITCH_INFO', false ) );
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_BOOTSTRAP_VERSION', '_JOMRES_BOOTSTRAP_VERSION', false ) );
		$configurationPanel->setmiddle( $bootstrap_ver_dropdown );
		$configurationPanel->setright( jr_gettext( '_JOMRES_BOOTSTRAP_VERSION_DESC', '_JOMRES_BOOTSTRAP_VERSION_DESC', false ) );
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', false ) );
		$configurationPanel->setmiddle( $lists[ 'property_details_in_tabs' ] );
		$configurationPanel->setright( jr_gettext( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', '_JOMRES_PROPERTYDETAILS_INTABS_DESC', false ) );
		$configurationPanel->insertSetting();
	
	if ( $jrConfig[ 'advanced_site_config' ] == 1 ) 
			{
			$configurationPanel->setleft( jr_gettext( '_JOMRES_APPROVALS_CONFIG_TITLE', '_JOMRES_APPROVALS_CONFIG_TITLE',false ) );
			$configurationPanel->setmiddle( $lists[ 'automatically_approve_new_properties' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_APPROVALS_CONFIG_DESC', '_JOMRES_APPROVALS_CONFIG_DESC',false ) );
			$configurationPanel->insertSetting();
			}
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_DEFAULT_LAT_STARTPOINT', '_JOMRES_DEFAULT_LAT_STARTPOINT', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_default_lat" value="' . $jrConfig[ 'default_lat' ] . '" />' );
		$configurationPanel->setright( jr_gettext( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', false ) );
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_DEFAULT_LONG_STARTPOINT', '_JOMRES_DEFAULT_LONG_STARTPOINT', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_default_long" value="' . $jrConfig[ 'default_long' ] . '" />' );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(  jr_gettext( '_JOMRES_JQUERYTHEME', '_JOMRES_JQUERYTHEME', false ) );
		$configurationPanel->setmiddle( $jqueryUIthemesDropdownList );
		$configurationPanel->setright( jr_gettext( '_JOMRES_JQUERYTHEME_DESC', '_JOMRES_JQUERYTHEME_DESC', false ) );
		$configurationPanel->insertSetting();
		
		if ( $jrConfig[ 'advanced_site_config' ] == 1 ) 
		{
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_LANGUAGE_CONTEXT', '_JOMRES_COM_LANGUAGE_CONTEXT', false ) );
			$configurationPanel->setmiddle( $language_context_dropdown );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', false ) );
			$configurationPanel->setmiddle( $lists[ 'is_single_property_installation' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_ALLOWHTMLEDITOR', '_JOMRES_COM_ALLOWHTMLEDITOR', false ) );
			$configurationPanel->setmiddle( $lists[ 'allowHTMLeditor' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', false ) );
			$configurationPanel->setmiddle( $lists[ 'limit_property_country' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', false ) );
			$configurationPanel->setmiddle( limitCountriesDropdown() );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			/* $configurationPanel->setleft( jr_gettext( _JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN, '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', false ) );
			$configurationPanel->setmiddle( $lists[ 'showLangDropdown' ] );
			$configurationPanel->setright( jr_gettext( _JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC, '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', false ) );
			$configurationPanel->insertSetting(); */
			
			$configurationPanel->setleft( jr_gettext( 'JOMRES_COM_A_MINIMALCONFIG', 'JOMRES_COM_A_MINIMALCONFIG', false ) );
			$configurationPanel->setmiddle( $lists[ 'minimalconfiguration' ] );
			$configurationPanel->setright( jr_gettext( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'JOMRES_COM_A_MINIMALCONFIG_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', '_JOMRES_COM_JRCONFIG_GLOBALEDITING', false ) );
			$configurationPanel->setmiddle( $lists[ 'editingModeAffectsAllProperties' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_SELFREGISTRATION', '_JOMRES_COM_SELFREGISTRATION', false ) );
			$configurationPanel->setmiddle( $lists[ 'selfRegistrationAllowed' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_SELFREGISTRATION_DESC', '_JOMRES_COM_SELFREGISTRATION_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_CALENDAROUTPUT', '_JOMRES_COM_CALENDAROUTPUT', false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_cal_output" value="' . $jrConfig[ 'cal_output' ] . '" />' );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_CALENDAROUTPUT_DESC', '_JOMRES_COM_CALENDAROUTPUT_DESC', false ) );
			$configurationPanel->insertSetting();
			
			if (!this_cms_is_wordpress())
				{
				$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_JRCONFIG_ISWRAPPED', '_JOMRES_COM_JRCONFIG_ISWRAPPED', false ) );
				$configurationPanel->setmiddle( $lists[ 'isInIframe' ] );
				$configurationPanel->setright( jr_gettext( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', false ) );
				$configurationPanel->insertSetting();
				}
			
			/*$configurationPanel->setleft( jr_gettext( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', false ) );
			$configurationPanel->setmiddle( $lists[ 'full_access_control' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', false ) );
			$configurationPanel->insertSetting();*/
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_CONFIG_JQUERY', '_JOMRES_CONFIG_JQUERY', false ) );
			$configurationPanel->setmiddle( $lists[ 'load_jquery' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_CONFIG_JQUERY_DESC', '_JOMRES_CONFIG_JQUERY_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_CONFIG_JQUERY_UI_CSS', '_JOMRES_CONFIG_JQUERY_UI_CSS', false ) );
			$configurationPanel->setmiddle( $lists[ 'load_jquery_ui_css' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_CONFIG_JQUERY_UI', '_JOMRES_CONFIG_JQUERY_UI', false ) );
			$configurationPanel->setmiddle( $lists[ 'load_jquery_ui' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_CONFIG_JQUERY_UI_DESC', '_JOMRES_CONFIG_JQUERY_UI_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_FONTAWESOME', '_JOMRES_COM_FONTAWESOME', false ) );
			$configurationPanel->setmiddle( $lists[ 'load_font_awesome' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_FONTAWESOME_DESC', '_JOMRES_COM_FONTAWESOME_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_CACHING', '_JOMRES_COM_CACHING', false ) );
			$configurationPanel->setmiddle( $lists[ 'useArrayCaching' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_CACHING_DESC', '_JOMRES_COM_CACHING_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_SHOW_POWEREDBY', '_JOMRES_SHOW_POWEREDBY', false ) );
			$configurationPanel->setmiddle( $lists[ 'show_powered_by' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}

		$configurationPanel->endPanel();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
