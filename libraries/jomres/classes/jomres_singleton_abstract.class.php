<?php
class jomres_singleton_abstract
	// ensure that only a single instance exists for each class.
	{
	function getInstance ($class, $arg1=null)
		// implements the 'singleton' design pattern.
		{
		static $instances = array();  // array of instance names
		if (array_key_exists($class, $instances)) 
			{
			// instance exists in array, so use it
			$instance =$instances[$class];
			}
		else
			{
			// load the class file (if not already loaded)
			if (!class_exists($class)) 
				{
				
				if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php") )
					{
					$result = require(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php");
					// instance does not exist, so create it
					$instances[$class] = new $class($arg1);
					$instance = $instances[$class];
					return $instance;
					}
				else
					trigger_error("Error, class ".$class." does not exist");
				} // if
			}
		} // getInstance
	} // singleton
	
class jomres_singleton_abstract2
	{
	protected static $_instances;

	function __construct()
		{
		}
  
	public static function getInstance($class, $arg1=null)
		{
		if(!isset(self::$_instances[$class]))
			{
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php") )
				{
				$result = require(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php");
				self::$_instances[$class] = new $class($arg1);
				}
			else
				{
				echo "Class file ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php"." doesn't exist";
				exit;
				}
			}
		//var_dump(self::$_instances);
		return self::$_instances[$class];
		}
}

function jomres_getSingleton($class,$args=array() )
	{
	$result = jomres_singleton_abstract2::getInstance($class,$args);
	return $result;
	}
?>