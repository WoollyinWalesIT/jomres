<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.19
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_empty_class
{
    private static $configInstance;

    public function __construct()
    {
		
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

	public function __call($name, $arguments) 
	{
        //throw new Exception("failed to call method ".$name);
    }
    
	public static function __callStatic($name, $arguments) 
	{
        //throw new Exception("failed to call static method ".$name);
    }
}
