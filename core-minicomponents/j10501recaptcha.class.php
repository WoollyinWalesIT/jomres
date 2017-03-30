<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501recaptcha
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

        if ($jrConfig[ 'advanced_site_config' ] == 1) {
            $configurationPanel->startPanel(jr_gettext('RECAPTCHA_TITLE', 'RECAPTCHA_TITLE', false));

            $configurationPanel->insertDescription(jr_gettext('RECAPTCHA_INFO', 'RECAPTCHA_INFO', false));

            $configurationPanel->setleft(jr_gettext('RECAPTCHA_PUBLIC_KEY', 'RECAPTCHA_PUBLIC_KEY', false));
            $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_recaptcha_public_key" value="'.$jrConfig[ 'recaptcha_public_key' ].'" />');
            $configurationPanel->setright();
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('RECAPTCHA_PRIVATE_KEY', 'RECAPTCHA_PRIVATE_KEY', false));
            $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_recaptcha_private_key" value="'.$jrConfig[ 'recaptcha_private_key' ].'" />');
            $configurationPanel->setright();
            $configurationPanel->insertSetting();

            $configurationPanel->endPanel();
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
