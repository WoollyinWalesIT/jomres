<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
class jomres_singleton_abstract
{
	protected static $_instances;
	
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
	}
	
	/**
	 *
	 *
	 *
	 */

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
			//specific check for minicomponent_registry class, to make sure it`s there
			//if it`s not where expected, redirect to jomres default frontpage so the classes and minicomponents registries will be rebuilt
			if ($class == 'minicomponent_registry') {
				if (!file_exists($classes[$class] . $class . '.class.php')) {
					//delete the classes regsitry
					if (file_exists(JOMRES_TEMP_ABSPATH . 'registry_classes.php')) {
						unlink(JOMRES_TEMP_ABSPATH . 'registry_classes.php');
					}
					
					//delete the minicomponents registry
					if (file_exists(JOMRES_TEMP_ABSPATH . 'registry.php')) {
						unlink(JOMRES_TEMP_ABSPATH . 'registry.php');

						jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL), '');
					}
				}
			}

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
		
		//class doesn`t exist so we`ll echo a message
		echo '<p class="alert alert-danger alert-error">Error, class '.$class.' doesn`t exist.</p>';

		$backtrace = debug_backtrace();
		$trace = "<br/> File ".$backtrace[0]['file']." Line ".$backtrace[0]['line']. " Function ".$backtrace[0]['function']."<br/> ";
		$trace .= "File ".$backtrace[1]['file']." Line ".$backtrace[1]['line']. " Function ".$backtrace[1]['function']."<br/> ";
		$trace .= " File ".$backtrace[2]['file']." Line ".$backtrace[2]['line']. " Function ".$backtrace[2]['function']."<br/> ";
		$trace .= " File ".$backtrace[3]['file']." Line ".$backtrace[3]['line']. " Function ".$backtrace[3]['function']."<br/> ";
		
		logging::log_message($trace, "Core", "CRITICAL");
		
		if (!isset(self::$_instances[ $class ])) {
			self::$_instances[ $class ] = new jomres_empty_class();
		}
		
		return self::$_instances[ $class ];
	}
}
