<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00011manager_option_07_charts
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }
        $property_uid = getDefaultProperty();
        $mrConfig = getPropertySpecificSettings($property_uid);
        $this->cpanelButton = '';

        if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
            return;
        }

        $this->cpanelButton = jomres_mainmenu_option(JOMRES_SITEPAGE_URL.'&task=charts', 'ChartBarTrend.png', jr_gettext('_JOMRES_CHARTS', '_JOMRES_CHARTS', false, false), null, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', false, false));
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->cpanelButton;
    }
}
