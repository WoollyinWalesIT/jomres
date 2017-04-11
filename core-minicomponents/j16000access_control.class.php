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

class j16000access_control
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

        $levels = array('anybody', 'registered', 'manager', 'supermanager', 'nobody');

        $controllable = array();

        $thisJRUser = $MiniComponents->triggerEvent('00002'); // Register user

        foreach ($MiniComponents->registeredClasses as $eventPoint => $ev) {
			foreach ($ev as $eventName => $eventDetails) {
				if (!in_array($eventPoint.$eventName, $jomres_access_control->uncontrollable_scripts)) {
					if ($jomres_access_control->limit_to_menus_only && in_array($eventPoint, $jomres_access_control->menu_patterns) && !in_array($eventPoint, $jomres_access_control->uncontrollable_patterns)) {
						$controllable[ $eventPoint.$eventName ] = $eventDetails;
					} elseif (!in_array($eventPoint, $jomres_access_control->uncontrollable_patterns) && !$jomres_access_control->limit_to_menus_only) {
						$controllable[ $eventPoint.$eventName ] = $eventDetails;
					}
				}
			}
        }

        foreach ($controllable as $k => $v) {
            $r = array();

            //$access_control
            $r[ 'SCRIPTNAME' ] = $k;
            $r[ 'DROPDOWN' ] = $jomres_access_control->generate_access_control_dropdown($k);

            $rows[ ] = $r;
        }

        $output = array();
        $output[ 'AJAXURL' ] = JOMRES_SITEPAGE_URL_ADMIN_AJAX;
        if ($jrConfig[ 'full_access_control' ] == '0') {
            $output[ '_JOMRES_ACCESS_CONTROL_TITLE' ] = jr_gettext('_JOMRES_ACCESS_CONTROL_TITLE', '_JOMRES_ACCESS_CONTROL_TITLE', false);
            $output[ '_JOMRES_ACCESS_CONTROL_DESC' ] = jr_gettext('_JOMRES_ACCESS_CONTROL_DESC', '_JOMRES_ACCESS_CONTROL_DESC', false);
            $output[ '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM' ] = jr_gettext('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', false);
        } else {
            $output[ '_JOMRES_ACCESS_CONTROL_TITLE' ] = jr_gettext('_JOMRES_ACCESS_CONTROL_TITLE_FULL', '_JOMRES_ACCESS_CONTROL_TITLE_FULL', false);
            $output[ '_JOMRES_ACCESS_CONTROL_DESC' ] = jr_gettext('_JOMRES_ACCESS_CONTROL_DESC_FULL', '_JOMRES_ACCESS_CONTROL_DESC_FULL', false);
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('access_control.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
