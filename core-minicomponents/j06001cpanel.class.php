<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001cpanel
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                    'task' => 'dashboard',
                    'arguments' => array(),
                    'info' => '_JOMRES_SHORTCODES_06001DASHBOARD',
                );

            return;
        }

        $output = array();
        $pageoutput = array();

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->readTemplatesFromInput('cpanel.html');
        $tmpl->displayParsedTemplate();
        
    }



    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
