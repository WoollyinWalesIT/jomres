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
        
		$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

        $controllable = array();
		$output = array();
		$rows = array();

		foreach ($jomres_access_control->controllable_patterns as $eventPoint => $min_access_level) {
			foreach ($MiniComponents->registeredClasses[$eventPoint] as $eventName => $eventDetails) {
				if ($jomres_access_control->is_controllable($eventName)) {
					$controllable[] = array('name' => $eventName, 'min_access_level' => $min_access_level);
				}
			}
		}

        foreach ($controllable as $task) {
            $r = array();

            //$access_control
            $r[ 'TASKNAME' ] = $task['name'];
            $r[ 'DROPDOWN' ] = $jomres_access_control->generate_access_control_dropdown($task['name'], $task['min_access_level']);

            $rows[ ] = $r;
        }
        
		$output[ '_JOMRES_ACCESS_CONTROL_TITLE' ] = jr_gettext('_JOMRES_ACCESS_CONTROL_TITLE_FULL', '_JOMRES_ACCESS_CONTROL_TITLE_FULL', false);
        $output[ '_JOMRES_ACCESS_CONTROL_DESC' ] = jr_gettext('_JOMRES_ACCESS_CONTROL_DESC_FULL', '_JOMRES_ACCESS_CONTROL_DESC_FULL', false);

        $pageoutput[] = $output;
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
