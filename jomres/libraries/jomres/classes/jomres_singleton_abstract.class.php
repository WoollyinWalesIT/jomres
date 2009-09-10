<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

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