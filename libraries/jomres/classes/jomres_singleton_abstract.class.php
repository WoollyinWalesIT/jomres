<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.10
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_singleton_abstract
{
    protected static $_instances;

    public function __construct()
    {
    }

    public static function getInstance($class, $arg1 = null)
    {
		//instance already available
		if (isset(self::$_instances[ $class ])) {
			return self::$_instances[ $class ];
		}
        
		//classes registry
		global $classes;
		
		//check core and remote plugins dirs
		if (isset($classes[$class])) {
			require_once $classes[$class].$class.'.class.php';
			
			self::$_instances[ $class ] = new $class($arg1);
		
			return self::$_instances[ $class ];
		}
		
		//last place to check is jomres core classes dir
		if (file_exists(JOMRES_CLASSES_ABSPATH.$class.'.class.php')) {
			require_once JOMRES_CLASSES_ABSPATH.$class.'.class.php';
			
			self::$_instances[ $class ] = new $class($arg1);
			
			return self::$_instances[ $class ];
		}
		
		//class doesn`t exist so we`ll echo a message and exit
		echo 'Error, class '.$class." doesn't exist.";
        $trace = '';
            $backtrace = debug_backtrace();
            $trace = "<br/> File ".$backtrace[1]['file']." Line ".$backtrace[1]['line']. " Function ".$backtrace[1]['function']."<br/> ";
            $trace .= " File ".$backtrace[2]['file']." Line ".$backtrace[2]['line']. " Function ".$backtrace[2]['function']."<br/> ";
            $trace .= " File ".$backtrace[3]['file']." Line ".$backtrace[3]['line']. " Function ".$backtrace[3]['function']."<br/> "; 
        echo $trace;
		exit;
    }
}
