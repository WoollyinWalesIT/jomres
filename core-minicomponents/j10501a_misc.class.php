<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.14
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501a_misc
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $configurationPanel = $componentArgs[ 'configurationPanel' ];
        $lists = $componentArgs[ 'lists' ];
        $bootstrap_ver_dropdown = $componentArgs[ 'bootstrap_ver_dropdown' ];
        $jqueryUIthemesDropdownList = $componentArgs[ 'jqueryUIthemesDropdownList' ];
        $language_context_dropdown = $componentArgs[ 'language_context_dropdown' ];
		$navbar_location_dropdown = $componentArgs[ 'navbar_location_dropdown' ];
        $support_key_is_trial_license = '';
        $renewal_link = '';
		
		$jomres_check_support_key = jomres_singleton_abstract::getInstance('jomres_check_support_key');
		$jomres_check_support_key->check_license_key(true);

        if (trim($jrConfig['licensekey']) != '') {
            if ($jomres_check_support_key->key_valid) {
                if ($jomres_check_support_key->allows_plugins == '1') {
                    $support_key_message = '<p class="alert alert-success">'.jr_gettext('_JOMRES_SUPPORTKEY_DESC_VALID', '_JOMRES_SUPPORTKEY_DESC_VALID', false, false).'</p>';
                } else {
                    $support_key_message = '<p class="alert alert-success">'.jr_gettext('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', false, false).'</p>';
                }
            } else {
                $support_key_message = '<p class="alert alert-danger">'.jr_gettext('_JOMRES_SUPPORTKEY_DESC_INVALID', '_JOMRES_SUPPORTKEY_DESC_INVALID', false, false).'</p>';
                $renewal_link = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=stripe_subscribe">Subscribe now</a>';
            }

            $support_key_status = '<span class="badge">Status</span> '.$jomres_check_support_key->key_status.'';
            $support_key_owner = '<span class="badge">Owner</span> '.$jomres_check_support_key->owner.'<br/>';
            $support_key_expires = '<span class="badge">Expires</span> '.$jomres_check_support_key->expires.'';
			$support_key_license_name = '<span class="badge">License name</span> '.$jomres_check_support_key->license_name.'';

            if ($jomres_check_support_key->is_trial_license == '1') {
                $support_key_is_trial_license = '<span class="badge badge-warning">Trial license</span> ';
            }
        } else {
            $support_key_status = '';
            $support_key_owner = '';
            $support_key_message = '';
            $support_key_expires = '';
			$support_key_license_name = '';
			$support_key_property_limit = '';
        }
        $configurationPanel->startPanel(jr_gettext('_JOMRES_A_TABS_MISC', '_JOMRES_A_TABS_MISC', false));

        $configurationPanel->setleft(jr_gettext('_JOMRES_SUPPORTKEY', '_JOMRES_SUPPORTKEY', false));
        $configurationPanel->setmiddle('<input type="password" class="input-xlarge" name="cfg_licensekey" value="'.$jrConfig[ 'licensekey' ].'" /><br/>'.' '.$support_key_status.' '.$support_key_owner.' '.$support_key_expires.' '.$renewal_link.' '.$support_key_is_trial_license.' '.$support_key_license_name);
        $configurationPanel->setright(jr_gettext('_JOMRES_SUPPORTKEY_DESC', '_JOMRES_SUPPORTKEY_DESC', false).' '.$support_key_message);
        $configurationPanel->insertSetting();

        if ($jomres_check_support_key->shop_status == 'OPEN') {
            $configurationPanel->setleft(jr_gettext('_JOMRES_LICENSESERVER_USERNAME', '_JOMRES_LICENSESERVER_USERNAME', false));
            $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_license_server_username" value="'.$jrConfig[ 'license_server_username' ].'" />');
            $configurationPanel->setright(jr_gettext('_JOMRES_LICENSESERVER_USERNAME_DESC', '_JOMRES_LICENSESERVER_USERNAME_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_LICENSESERVER_PASSWORD', '_JOMRES_LICENSESERVER_PASSWORD', false));
            $configurationPanel->setmiddle('<input type="password" class="input-large" name="cfg_license_server_password" value="'.$jrConfig[ 'license_server_password' ].'" />');
            $configurationPanel->setright();
            $configurationPanel->insertSetting();
        }

        $configurationPanel->setleft(jr_gettext('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', false));
        $configurationPanel->setmiddle($lists[ 'use_bootstrap_in_frontend' ]);
        $configurationPanel->setright(jr_gettext('_JOMRES_BOOTSTRAPSWITCH_INFO', '_JOMRES_BOOTSTRAPSWITCH_INFO', false));
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('_JOMRES_BOOTSTRAP_VERSION', '_JOMRES_BOOTSTRAP_VERSION', false));
        $configurationPanel->setmiddle($bootstrap_ver_dropdown);
        $configurationPanel->setright(jr_gettext('_JOMRES_BOOTSTRAP_VERSION_DESC', '_JOMRES_BOOTSTRAP_VERSION_DESC', false));
        $configurationPanel->insertSetting();

		$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', false ) );
		$configurationPanel->setmiddle( $lists[ 'showLangDropdown' ] );
		$configurationPanel->setright( jr_gettext( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', false ) );
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', '_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', false));
		$configurationPanel->setmiddle($lists[ 'region_names_are_translatable' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', '_JOMRES_REGION_TRANSLATION_SWITCH_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_LANGUAGE_CONTEXT', '_JOMRES_COM_LANGUAGE_CONTEXT', false));
		$configurationPanel->setmiddle($language_context_dropdown);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_JRCONFIG_GLOBALEDITING', '_JOMRES_COM_JRCONFIG_GLOBALEDITING', false));
		$configurationPanel->setmiddle($lists[ 'editingModeAffectsAllProperties' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_JQUERY', '_JOMRES_CONFIG_JQUERY', false));
		$configurationPanel->setmiddle($lists[ 'load_jquery' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_JQUERY_DESC', '_JOMRES_CONFIG_JQUERY_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_JQUERY_UI', '_JOMRES_CONFIG_JQUERY_UI', false));
		$configurationPanel->setmiddle($lists[ 'load_jquery_ui' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_JQUERY_UI_DESC', '_JOMRES_CONFIG_JQUERY_UI_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_JQUERY_UI_CSS', '_JOMRES_CONFIG_JQUERY_UI_CSS', false));
		$configurationPanel->setmiddle($lists[ 'load_jquery_ui_css' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_JQUERYTHEME', '_JOMRES_JQUERYTHEME', false));
		$configurationPanel->setmiddle($jqueryUIthemesDropdownList);
		$configurationPanel->setright(jr_gettext('_JOMRES_JQUERYTHEME_DESC', '_JOMRES_JQUERYTHEME_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_FONTAWESOME', '_JOMRES_COM_FONTAWESOME', false));
		$configurationPanel->setmiddle($lists[ 'load_font_awesome' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_FONTAWESOME_DESC', '_JOMRES_COM_FONTAWESOME_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_BOOTSTRAP_LOCATION', '_JOMRES_BOOTSTRAP_LOCATION', false));
		$configurationPanel->setmiddle($navbar_location_dropdown);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', '_JOMRES_BOOTSTRAP_LOCATION_INVERSE', false));
		$configurationPanel->setmiddle($lists[ 'navbar_inverse' ]);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_SHOW_POWEREDBY', '_JOMRES_SHOW_POWEREDBY', false));
		$configurationPanel->setmiddle($lists[ 'show_powered_by' ]);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_SESSION_HANDLER', '_JOMRES_SESSION_HANDLER', false));
		$configurationPanel->setmiddle($lists[ 'session_handler' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_SESSION_HANDLER_DESC', '_JOMRES_SESSION_HANDLER_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_UNINSTALL_TABLES', '_JOMRES_UNINSTALL_TABLES', false));
		$configurationPanel->setmiddle($lists[ 'delete_all_data_on_uninstall' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_UNINSTALL_TABLES_DESC', '_JOMRES_UNINSTALL_TABLES_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->insertHeading('Frontend Control Panel');
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_CPANEL_GRID', '_JOMRES_CPANEL_GRID', false));
		$configurationPanel->setmiddle($lists[ 'front_cpanel_home_grid' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_CPANEL_GRID_DESC', '_JOMRES_CPANEL_GRID_DESC', false));
		$configurationPanel->insertSetting();

		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10521', $componentArgs);
		
        $configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
