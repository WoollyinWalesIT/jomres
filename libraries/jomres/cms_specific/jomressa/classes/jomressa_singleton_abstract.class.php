<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
class singleton
	{
	protected static $_instances;

	function __construct()
		{
		}
  
	public static function getInstance($class, $arg1=null)
		{
		if(!isset(self::$_instances[$class]))
			{
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'classes'.JRDS.$class.".class.php") )
				{
				$result = require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'classes'.JRDS.$class.".class.php");
				self::$_instances[$class] = new $class($arg1);
				}
			else
				{
				echo "Class file "._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'classes'.JRDS.$class.".class.php"." doesn't exist";
				exit;
				}
			}
		//var_dump(self::$_instances);
		return self::$_instances[$class];
		}
}
?>