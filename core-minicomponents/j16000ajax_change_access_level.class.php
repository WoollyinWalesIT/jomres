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

class j16000ajax_change_access_level
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        
		$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

        $task = jomresGetParam($_GET, 'minicomp', '');
        $access_level = (int)jomresGetParam($_GET, 'new_level', -1);

		if ($task == '') {
			return;
		}

        if ($jomres_access_control->update_task_access_level($task, $access_level)) {
			echo json_encode(array('success'=>'1'));
		} else {
			echo json_encode(array('success'=>'0'));
		}

		exit();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
