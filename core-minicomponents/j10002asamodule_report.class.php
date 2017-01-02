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

class j10002asamodule_report
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $this->cpanelButton = null;

        if ($jrConfig[ 'advanced_site_config' ] == '1') {
            $htmlFuncs = jomres_singleton_abstract::getInstance('html_functions');
            $this->cpanelButton = $htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN.'&task=asamodule_report', 'EditText.png', jr_gettext('_JOMRES_SHORTCODES', '_JOMRES_SHORTCODES', false, false), '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/', jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', false, false));
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->cpanelButton;
    }
}
