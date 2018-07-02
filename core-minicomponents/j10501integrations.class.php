<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501integrations
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

		$configurationPanel->startPanel(ucfirst(jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', false)));

		//recaptcha
		$configurationPanel->insertHeading('Google '.jr_gettext('RECAPTCHA_TITLE', 'RECAPTCHA_TITLE', false));

		$configurationPanel->insertDescription(jr_gettext('RECAPTCHA_INFO', 'RECAPTCHA_INFO', false));

		$configurationPanel->setleft(jr_gettext('RECAPTCHA_PUBLIC_KEY', 'RECAPTCHA_PUBLIC_KEY', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_recaptcha_public_key" value="'.$jrConfig[ 'recaptcha_public_key' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('RECAPTCHA_PRIVATE_KEY', 'RECAPTCHA_PRIVATE_KEY', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_recaptcha_private_key" value="'.$jrConfig[ 'recaptcha_private_key' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		//google maps
		$configurationPanel->insertHeading('Google Maps');

		$configurationPanel->setleft(jr_gettext('JOMRES_COM_A_MAPSKEY', 'JOMRES_COM_A_MAPSKEY', false));
        $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_google_maps_api_key" value="'.$jrConfig[ 'google_maps_api_key' ].'" />');
        $configurationPanel->setright(jr_gettext('JOMRES_COM_A_MAPSKEY_DESC', 'JOMRES_COM_A_MAPSKEY_DESC', false));
        $configurationPanel->insertSetting();
		
		//open exchange rates
		$configurationPanel->insertHeading('Open Exchange Rates');
		
		$configurationPanel->setleft(jr_gettext('_OPENEXCHANGE_API', '_OPENEXCHANGE_API', false));
        $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_openexchangerates_api_key" value="'.$jrConfig[ 'openexchangerates_api_key' ].'" />');
        $configurationPanel->setright(jr_gettext('_OPENEXCHANGE_API_DESC', '_OPENEXCHANGE_API_DESC', false));
        $configurationPanel->insertSetting();
		
		//ip info db
		$configurationPanel->insertHeading('IPInfoDB');
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_IP_DETECTION_API_KEY_TITLE', '_JOMRES_IP_DETECTION_API_KEY_TITLE', false));
        $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_geolocation_api_key" value="'.$jrConfig[ 'geolocation_api_key' ].'" />');
        $configurationPanel->setright(jr_gettext('_JOMRES_IP_DETECTION_API_KEY_DESC', '_JOMRES_IP_DETECTION_API_KEY_DESC', false));
        $configurationPanel->insertSetting();
		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10531', $componentArgs);

		$configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
