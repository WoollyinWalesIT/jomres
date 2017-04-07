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
        
		//first check custom code dir
		if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.'.class.php')) {
			require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.'.class.php';
			
			self::$_instances[ $class ] = new $class($arg1);
			
			return self::$_instances[ $class ];
		}
		
		//include the list of classes from plugin dirs
		if (file_exists(JOMRES_TEMP_ABSPATH.'registry_classes.php')) {
			include JOMRES_TEMP_ABSPATH.'registry_classes.php';
		} else {
			//we don`t have the paths yet, let`s scan all core and remote plugins dirs
			$classes = search_core_and_remote_dirs_for_classfiles();
		}
		
		//check core and remote plugins dirs
		if (isset($classes[$class])) {
			require_once $classes[$class].$class.'.class.php';
			
			self::$_instances[ $class ] = new $class($arg1);
		
			return self::$_instances[ $class ];
		}
		
		//last place to check is jomres core classes dir
		if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.'.class.php')) {
			require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.'.class.php';
			
			self::$_instances[ $class ] = new $class($arg1);
			
			return self::$_instances[ $class ];
		}
		
		//class doesn`t exist so we`ll echo a message and exit
		echo 'Error, class '.$class." doesn't exist.";
		exit;
    }
}
