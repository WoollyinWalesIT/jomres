<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.4
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// My little joke, "showtime" was my favourite server on Delta Force 2 when I used to play it back in the late nineties.

class showtime
{
    private static $configInstance;
    private static $internal_debugging;

    public function __construct()
    {
        self::$internal_debugging = false;
        $this->custom_paths = array();
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
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

    public function set_custom_path_for_template($templatename, $path)
    {
        $this->custom_paths[ $templatename ] = $path;
    }
}
