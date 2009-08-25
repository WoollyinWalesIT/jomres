<?php
class singleton
	// ensure that only a single instance exists for each class.
	{
	function &getInstance ($class, $arg1=null)
		// implements the 'singleton' design pattern.
		{
		static $instances = array();  // array of instance names
		if (array_key_exists($class, $instances)) 
			{
			// instance exists in array, so use it
			$instance =& $instances[$class];
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
					$instance =& $instances[$class];
					return $instance;
					}
				else
					trigger_error("Error, class ".$class." does not exist");
				} // if
			}
		} // getInstance
	} // singleton
	
function jomres_getSingleton($class)
	{
	$result =& singleton::getInstance($class);
	return $result;
	}
?>