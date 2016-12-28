<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.23
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_access_control
{
    private static $configInstance;
    private static $internal_debugging;

    public function __construct()
    {
        self::$internal_debugging = false;
        if (jomres_cmsspecific_areweinadminarea()) {
            $this->feature_enabled = false;
        } else {
            $this->feature_enabled = true;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (!isset($jrConfig[ 'full_access_control' ])) {
            $jrConfig[ 'full_access_control' ] = '0';
        }

        $this->limit_to_menus_only = true;
        if ($jrConfig[ 'full_access_control' ] == '1') {
            $this->limit_to_menus_only = false;
        }

        jr_import('jomres_access_control_controlable');
        $jomres_access_control_controlable = new jomres_access_control_controlable();
        // Minicomponents that should never be forbidden from running
        $this->uncontrollable_patterns = $jomres_access_control_controlable->uncontrollable_patterns;
        $this->uncontrollable_scripts = $jomres_access_control_controlable->uncontrollable_scripts;

        $this->init();
    }

    public function remove_minicomp_from_access_control_table($minicomp)
    {
        $query = "DELETE FROM #__jomres_access_control WHERE scriptname = '".(string) $minicomp."' LIMIT 1 ";
        if (!doInsertSql($query, '')) {
            trigger_error('Unable to delete from access control table, mysql db failure', E_USER_ERROR);
        }
    }

    // We're not going to get too fancy with this, it's clear that it's easy to get too carried away with having insane levels of access control so we're going to keep this working
    // more or less similar to how Jomres already works, with a sliding scale of users : unregistered -> registered -> reception -> manager -> supermanager, with a Nobody option tagged on,
    // supermanagers > managers > registered users > reception > unregistered, as we already have it. After all, this feature's mainly designed to prevent options from showing without having to edit files,
    // with a side benefit from ensuring that users cannot access some scripts even if they know the urls.

    public function can_user_access_this_script($minicomp)
    {
        // some scripts simply shouldn't be controlled by access control (for example 00002 user management), therefore we'll return true
        $pattern = substr($minicomp, 0, 5);
        if (in_array($minicomp, $this->uncontrollable_scripts)) {
            return true;
        }
        if (in_array($pattern, $this->uncontrollable_patterns)) {
            return true;
        }

        if (defined('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT')) {
            $this->levels = array('default' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT'), 'anybody' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY'), 'registered' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED'), 'receptionist' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST'), 'manager' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER'), 'supermanager' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER'), 'nobody' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY'));
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!is_null($thisJRUser)) {
            if (!$this->feature_enabled) {
                return true;
            } else {
                $user_can_access = false;
                $users_access_level = $this->get_this_users_access_level();
                if (!$users_access_level) { // We cannot identify this user's level at all, should be at least "anybody" but we don't know, so we'll stop all running altogether
                exit;
                }

                if (count($this->controlled) > 0) {
                    if (array_key_exists($minicomp, $this->controlled)) {
                        //var_dump($minicomp." ".$this->controlled[$minicomp]['access_level']);exit;

                        switch ($this->controlled[ $minicomp ][ 'access_level' ]) {
                            case 'default':
                                $user_can_access = true;
                                break;
                            case 'anybody':
                                $user_can_access = true;
                                break;
                            case 'registered':
                                if ($users_access_level == 'supermanager' || $users_access_level == 'manager' || $users_access_level == 'reception' || $users_access_level == 'registered') {
                                    $user_can_access = true;
                                }
                                break;
                            case 'reception':
                                if ($users_access_level == 'supermanager' || $users_access_level == 'manager' || $users_access_level == 'reception') {
                                    $user_can_access = true;
                                }
                                break;
                            case 'manager':
                                if ($users_access_level == 'supermanager' || $users_access_level == 'manager') {
                                    $user_can_access = true;
                                }
                                break;
                            case 'supermanager':
                                if ($users_access_level == 'supermanager') {
                                    $user_can_access = true;
                                }
                                break;
                            case 'nobody':
                            default:
                                $user_can_access = false;
                        }
                    } else {
                        $user_can_access = true;
                    }
                } else {
                    $user_can_access = true;
                }

                return $user_can_access;
            }
        } else {
            return false;
        }
    }

    private function init()
    {
        $this->controlled = array();
        $controlled = false;
        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');
        if ($c->isCached('jomres_access_control_scripts')) {
            $controlled = $c->retrieve('jomres_access_control_scripts');
        }

        if ($controlled) {
            $this->controlled = $controlled;
        } else {
            $query = 'SELECT id,scriptname,access_level FROM #__jomres_access_control';
            $scripts = doSelectSql($query);
            if (count($scripts) > 0) {
                foreach ($scripts as $script) {
                    $this->controlled[ $script->scriptname ] = array('scriptname' => $script->scriptname, 'access_level' => $script->access_level);
                }
            }
            $c->store('jomres_access_control_scripts', $this->controlled);
        }
    }

    public function recount_controlled_scripts()
    {
        $this->init();
    }

    public function generate_access_control_dropdown($minicomp)
    {
        $this->levels = array('default' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT'), 'anybody' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY'), 'registered' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED'), 'receptionist' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST'), 'manager' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER'), 'supermanager' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER'), 'nobody' => jr_gettext('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY'));
        if (count($this->controlled) > 0) {
            if (array_key_exists($minicomp[ 'eventPoint' ].$minicomp[ 'eventName' ], $this->controlled)) {
                $current_level = $this->controlled[ $minicomp[ 'eventPoint' ].$minicomp[ 'eventName' ] ][ 'access_level' ];
            } else {
                $current_level = 'default';
            }
        } else {
            $current_level = 'default';
        } // the access control system doesn't come into play here. Instead the existing access restrictions already built into the system may still prevent a user from running a script

        $mode_options = array();
        if ($current_level == 'default') {
            $mode_options[ ] = jomresHTML::makeOption('default', $this->levels[ 'default' ]);
        }

        $mode_options[ ] = jomresHTML::makeOption('anybody', $this->levels[ 'anybody' ]);
        $mode_options[ ] = jomresHTML::makeOption('registered', $this->levels[ 'registered' ]);
        $mode_options[ ] = jomresHTML::makeOption('reception', $this->levels[ 'receptionist' ]);
        $mode_options[ ] = jomresHTML::makeOption('manager', $this->levels[ 'manager' ]);
        $mode_options[ ] = jomresHTML::makeOption('supermanager', $this->levels[ 'supermanager' ]);
        $mode_options[ ] = jomresHTML::makeOption('nobody', $this->levels[ 'nobody' ]);

        $javascript = 'onChange="change_access_level(\''.$minicomp[ 'eventPoint' ].$minicomp[ 'eventName' ].'\',this.value)";';

        return jomresHTML::selectList($mode_options, '', ' autocomplete="off" class="inputbox" size="1" '.$javascript.'', 'value', 'text', $current_level);
    }

    private function get_this_users_access_level()
    {
        $access_level = false;
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if ($thisJRUser->id == 0) {
            $access_level = 'anybody';
        } elseif ($thisJRUser->id > 0 && !$thisJRUser->userIsManager) {
            $access_level = 'registered';
        } elseif ($thisJRUser->userIsManager && $thisJRUser->accesslevel == 50 && !$thisJRUser->superPropertyManager) {
            $access_level = 'reception';
        } elseif ($thisJRUser->userIsManager && $thisJRUser->accesslevel == 70 && !$thisJRUser->superPropertyManager) {
            $access_level = 'manager';
        } elseif ($thisJRUser->superPropertyManager) {
            $access_level = 'supermanager';
        }

        return $access_level;
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new showtime();
        }

        return self::$configInstance;
    }

    public function __clone()
    {
        trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
    }

    public function __set($setting, $value)
    {
        if (self::$internal_debugging) {
            echo 'Setting '.$setting.' to '.$value.' <br>';
        }
        $this->$setting = $value;

        return true;
    }

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
}
