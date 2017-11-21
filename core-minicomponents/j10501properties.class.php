<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501properties
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

        $configurationPanel->startPanel(ucwords(jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', false)));

		$configurationPanel->setleft(jr_gettext('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', false));
		$configurationPanel->setmiddle($lists[ 'is_single_property_installation' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_SELFREGISTRATION', '_JOMRES_COM_SELFREGISTRATION', false));
		$configurationPanel->setmiddle($lists[ 'selfRegistrationAllowed' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_SELFREGISTRATION_DESC', '_JOMRES_COM_SELFREGISTRATION_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_APPROVALS_CONFIG_TITLE', '_JOMRES_APPROVALS_CONFIG_TITLE', false));
		$configurationPanel->setmiddle($lists[ 'automatically_approve_new_properties' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_APPROVALS_CONFIG_DESC', '_JOMRES_APPROVALS_CONFIG_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', false));
		$configurationPanel->setmiddle($lists[ 'limit_property_country' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', false));
		$configurationPanel->setmiddle(limitCountriesDropdown());
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', false));
        $configurationPanel->setmiddle($lists[ 'property_details_in_tabs' ]);
        $configurationPanel->setright(jr_gettext('_JOMRES_PROPERTYDETAILS_INTABS_DESC', '_JOMRES_PROPERTYDETAILS_INTABS_DESC', false));
        $configurationPanel->insertSetting();

		$configurationPanel->insertHeading(jr_gettext('_JOMRES_CONTACT_SETTINGS', '_JOMRES_CONTACT_SETTINGS', false));
		
		$configurationPanel->insertDescription(jr_gettext('_JOMRES_CONTACT_SETTINGS_DESC', '_JOMRES_CONTACT_SETTINGS_DESC', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', '_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', false));
		$configurationPanel->setmiddle($lists[ 'override_property_contact_details' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', '_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_override_property_contact_email" value="'.$jrConfig[ 'override_property_contact_email' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_override_property_contact_tel" value="'.$jrConfig[ 'override_property_contact_tel' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_override_property_contact_fax" value="'.$jrConfig[ 'override_property_contact_fax' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
	
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10527', $componentArgs);

		$configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
