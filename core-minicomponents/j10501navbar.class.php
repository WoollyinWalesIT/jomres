<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501navbar
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
        $navbar_location_dropdown = $componentArgs[ 'navbar_location_dropdown' ];

        if ($jrConfig[ 'advanced_site_config' ] == 1) {
            $configurationPanel->startPanel(jr_gettext('_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB', '_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB', false));

            $configurationPanel->setleft(jr_gettext('_JOMRES_BOOTSTRAP_LOCATION', '_JOMRES_BOOTSTRAP_LOCATION', false));
            $configurationPanel->setmiddle($navbar_location_dropdown);
            $configurationPanel->setright();
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', '_JOMRES_BOOTSTRAP_LOCATION_INVERSE', false));
            $configurationPanel->setmiddle($lists[ 'navbar_inverse' ]);
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
