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
                    'task' => 'cpanel',
                    'arguments' => array(),
                    'info' => '_JOMRES_SHORTCODES_06001CPANEL',
                );

            return;
        }

        $output = array();
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (isset($thisJRUser->params->settings->cpanel_plugins)) {
			$dashboard_plugins = $thisJRUser->params->settings->cpanel_plugins;
		} else {
			$dashboard_plugins = $thisJRUser->params->settings->cpanel_plugins_defaults;
		}
		
		$rows = array();
		if (!empty($dashboard_plugins)) {
			foreach ($dashboard_plugins as $plugin ) {
				$r = array();
				$r['PLUGIN_SHORTCODE'] = "{jomres_shortcode ".$plugin."}";
				$rows[] = $r;
			}
		}
		
        $pageoutput = array();

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
        $tmpl->readTemplatesFromInput('cpanel.html');
        $tmpl->displayParsedTemplate();
        
    }



    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
