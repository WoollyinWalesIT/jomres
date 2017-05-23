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

class j06001toggle_cpanel_plugin
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $plugin = (string) jomresGetParam($_GET, 'plugin', '');
        $show_label = (int) jomresGetParam($_GET, 'show_label', 0);
        $result = '';

        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if ($thisJRUser->accesslevel < 50 ) { // Not a receptionist or higher
			return;
		}
		
		if (!$thisJRUser->is_cpanel_plugin($plugin) ) {
			$thisJRUser->params->settings->cpanel_plugins[] = $plugin;
			$template_file = "cpanel_added.html";
		} else {
			$key = array_search($plugin , $thisJRUser->params->settings->cpanel_plugins );
			unset($thisJRUser->params->settings->cpanel_plugins[$key]);
			$thisJRUser->params->settings->cpanel_plugins = array_values($thisJRUser->params->settings->cpanel_plugins);
			$template_file = "cpanel_removed.html";
		}
		
		$thisJRUser->save_manager_settings();
		
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->readTemplatesFromInput($template_file);
        //$tmpl->addRows('pageoutput', $pageoutput);
        $result = $tmpl->getParsedTemplate();


        echo $result;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
