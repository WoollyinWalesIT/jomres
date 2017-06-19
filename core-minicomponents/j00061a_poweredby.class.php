<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.5
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00061a_poweredby
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        if (AJAXCALL) {
            return;
        }
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (!isset($jrConfig['show_powered_by'])) {
            $jrConfig['show_powered_by'] = '0';
        }

        if ($jrConfig[ 'show_powered_by' ] == '1') {
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->readTemplatesFromInput('poweredby.html');
            $tmpl->displayParsedTemplate();
        }
    }

/**
 * Must be included in every mini-component.
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
