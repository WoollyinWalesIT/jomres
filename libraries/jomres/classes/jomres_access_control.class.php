<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
 * @package Jomres\Core\Classes
 *
 * Used by the access control plugin to determine what tasks can be controlled by the user.
 *
 * Disabled tasks are removed from the main menu, and the user is redirected to the cpanel if they try to access them.
 *
 * Jomres 10.7 Added the ability to have override scripts which can control which tasks are available based on the property type.
 *
 * An example of an override access_control_pattern.php would look like :
 *
 *
// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################


$this->controlled['api_documentation'] = -2;
$this->controlled['oauth'] = -2;
$this->controlled['webhooks_core'] = -2;
$this->controlled['webhooks_core_documentation'] = -2;
 *
 *
 */
#[AllowDynamicProperties]
class jomres_access_control
{
    private static $internal_debugging;

    /**
     *
     * constructor
     *
     */

    public function __construct()
    {
        self::$internal_debugging = false;

        //controlled eventPoints
        $this->controlled = array();

        //controllable eventPoints and min access level required for each
        $this->controllable_patterns = array(
            '06000' => '0', //public tasks
            '06001' => '50', //reception tasks
            '06002' => '70', //manager tasks
            '06005' => '1', //registered tasks
            '01004' => '0', //property list views
            '00035' => '0', //property details tabs
            '00501' => '70' //property configuration tabs
        );

        //uncontrollable task names
        $this->uncontrollable_tasks = array(
            'immediatepay',
            'editor',
            'confirmbooking',
            'completebk',
            'error',
            'background_process',
            'cpanel'
        );

        //uncontrollable task patterns. if task names match these patters, the tasks can`t be controlled manually by users
        $this->uncontrollable_patterns = array(
            'payment',
            'insertbooking',
            'handl',
            'cron',
            'ajax',
            'beds24',
            'oauth',
            'get_'
        );

        //access level dropdown options
        $this->options = false;

        //get currently controlled tasks
        $this->_init();
    }

    /**
     *
     * Sets the access level for a task
     *
     */

    public function __set($setting, $value)
    {
        if (self::$internal_debugging) {
            echo 'Setting '.$setting.' to '.$value.' <br>';
        }
        $this->$setting = $value;

        return true;
    }

    /**
     *
     * Gets the access level for a task
     *
     */

    public function __get($setting)
    {
        if (self::$internal_debugging) {
            echo 'Getting '.$setting.' which is '.$this->$setting.'<br>';
        }
        if (isset($this->$setting)) {
            return $this->$setting;
        }

        return null;
    }

    /**
     *
     * sets the state of tasks based on stored data
     *
     */

    private function _init()
    {
        $query = 'SELECT `id`, `scriptname`, `access_level` FROM #__jomres_access_control';
        $result = doSelectSql($query);

        if (!empty($result)) {
            foreach ($result as $r) {
                $this->controlled[ $r->scriptname ] = (int)$r->access_level;
            }
        }
    }

    /**
     *
     * Removes a task from the access control table
     *
     */

    private function delete_controlled_task($task = '')
    {
        if ($task == '') {
            return true;
        }

        $query = "DELETE FROM #__jomres_access_control WHERE `scriptname` = '".$task."'";

        if (!doInsertSql($query, '')) {
            trigger_error('Unable to delete from access control table, mysql db failure', E_USER_ERROR);
        }

        unset($this->controlled[$task]);

        return true;
    }

    /**
     *
     * Updates the access level for a task. Used by the access control plugin.
     *
     */

    public function update_task_access_level($task = '', $access_level = '-1')
    {
        if ($task == '') {
            return true;
        }

        if (isset($this->controlled[$task])) {
            //access level changed to default, so no need to have this task in the access control table anymore
            if ($access_level == '-1') {
                $this->delete_controlled_task($task);

                return true;
            } else { //update existing task access level
                $query = "UPDATE #__jomres_access_control SET `access_level` = '".$access_level."' WHERE `scriptname` = '".$task."'";

                if (!doInsertSql($query, '')) {
                    trigger_error("Error saving new access control level $new_level for $minicomp", 'mysql db failure', E_USER_ERROR);
                }

                $this->controlled[ $task ] = (int)$access_level;

                return true;
            }
        } else { //task wasn`t already controlled
            $query = "INSERT INTO #__jomres_access_control (`scriptname`, `access_level`) VALUES ('".$task."', '".$access_level."')";

            if (!doInsertSql($query, '')) {
                trigger_error('Unable to insert into access control table, mysql db failure', E_USER_ERROR);
            }

            $this->controlled[ $task ] = (int)$access_level;

            return true;
        }

        return false;
    }

    /**
     *
     * check if a user can access a specific task
     *
     */

    public function this_user_can($task = '')
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if ($thisJRUser->userIsManager && !jomres_cmsspecific_areweinadminarea() ) {
            $property_uid = getDefaultProperty();
            $current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
            $current_property_details->gather_data( $property_uid );
            $property_type=$current_property_details->ptype_id;

            if (file_exists(get_override_directory(). $property_type.JRDS.'access_control_pattern.php')) {
                require_once(get_override_directory(). $property_type.JRDS.'access_control_pattern.php');
            }
        }

        if (in_array($task, $this->uncontrollable_tasks)) {
            return true;
        }

        if (empty($this->controlled)) {
            return true;
        }

        if (!isset($this->controlled[$task])) {
            return true;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $user_can_access = false;

        if (isset($this->controlled[$task])) {
            switch ($this->controlled[$task]) {
                case -1: //default
                    $user_can_access = true;
                    break;
                case 0: //public
                    $user_can_access = true;
                    break;
                case 1: //registered
                    if ($thisJRUser->accesslevel >= 1) {
                        $user_can_access = true;
                    }
                    break;
                case 50: //reception
                    if ($thisJRUser->accesslevel >= 50) {
                        $user_can_access = true;
                    }
                    break;
                case 70: //manager
                    if ($thisJRUser->accesslevel >= 70) {
                        $user_can_access = true;
                    }
                    break;
                case 90: //super property manager
                    if ($thisJRUser->accesslevel >= 90) {
                        $user_can_access = true;
                    }
                    break;
                case -2: //nobody
                    $user_can_access = false;
                    break;
                default:
                    $user_can_access = true;
                    break;
            }
        } else {
            $user_can_access = true;
        }

        return $user_can_access;
    }

    //
    /**
     *
     * not used but here is somebody wants to do this for some reason..
     *
     */

    public function recount_controlled_scripts()
    {
        $this->_init();
    }

    //access levels dropdown
    /**
     *
     * Used by the access control plugin to generate the access level dropdown
     *
     */

    public function generate_access_control_dropdown($task = '', $min_access_level = 0)
    {
        if ($task == '') {
            return '';
        }

        //check if access level dropdown options are set
        if (!$this->options) {
            $this->options = array();
            $this->options['-1'] = jomresHTML::makeOption('-1', jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT'));
            $this->options['0'] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY'));
            $this->options['1'] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED'));
            $this->options['50'] = jomresHTML::makeOption('50', jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST'));
            $this->options['70'] = jomresHTML::makeOption('70', jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER'));
            $this->options['90'] = jomresHTML::makeOption('90', jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER'));
            $this->options['-2'] = jomresHTML::makeOption('-2', jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY'));
        }

        $options = $this->options;

        //the dropdown should have only access levels valid for this task event point
        switch ((string)$min_access_level) {
            case '0':
                break;
            case '1':
                unset($options['0']);
                break;
            case '50':
                unset($options['0']);
                unset($options['1']);
                break;
            case '70':
                unset($options['0']);
                unset($options['1']);
                unset($options['50']);
                break;
            case '90':
                unset($options['0']);
                unset($options['1']);
                unset($options['50']);
                unset($options['70']);
                break;
            default:
                break;
        }

        if (isset($this->controlled[$task])) {
            $current_level = (string)$this->controlled[$task];
        } else {
            $current_level = '-1';
        }

        $javascript = 'onChange="change_access_level(\''.$task.'\',this.value)";';

        return jomresHTML::selectList($options, '', ' autocomplete="off" '.$javascript.'', 'value', 'text', $current_level);
    }

    /**
     *
     * check if a task is controllable (some tasks are not controllable). Used by the access control plugin admin feature
     *
     */

    public function is_controllable($task = '')
    {
        if ($task == '') {
            return false;
        }

        if (in_array($task, $this->uncontrollable_tasks)) {
            return false;
        }

        foreach ($this->uncontrollable_patterns as $pattern) {
            if (strpos($task, $pattern) !== false) {
                return false;
            }
        }

        return true;
    }
}
