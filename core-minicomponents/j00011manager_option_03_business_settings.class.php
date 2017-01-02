<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00011manager_option_03_business_settings
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $this->cpanelButton = jomres_mainmenu_option(jomresURL(JOMRES_SITEPAGE_URL.'&task=business_settings'), 'EditConfiguration.png', jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC', '_JOMRES_COM_MR_GENERALCONFIGDESC', false, false), null, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', false, false));
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->cpanelButton;
    }
}
