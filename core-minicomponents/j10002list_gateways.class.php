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

class j10002list_gateways
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $MiniComponents->triggerEvent('10509');
        $mcOutput = $MiniComponents->getAllEventPointsData('10509');
        if (!empty($mcOutput)) {
            $htmlFuncs = jomres_singleton_abstract::getInstance('html_functions');
            $this->cpanelButton = $htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_gateways', 'listTemplates.png', jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false, false), '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/', jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', false, false));
        } else {
            $this->cpanelButton = '';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->cpanelButton;
    }
}
