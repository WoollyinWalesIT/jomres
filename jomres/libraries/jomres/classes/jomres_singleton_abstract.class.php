<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_singleton_abstract
	{
	protected static $_instances;

	function __construct()
		{
		}
  
	public static function getInstance($class, $arg1=null)
		{
		if(!isset(self::$_instances[$class]))
			{
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.".class.php") )
				{
				$result = require(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.".class.php");
				self::$_instances[$class] = new $class($arg1);
				}
			else
				{
				if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php") )
					{
					$result = require(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php");
					self::$_instances[$class] = new $class($arg1);
					}
				else
					{
					$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
					$d = @dir($jrePath);
					$docs = array();
					if($d)
						{
						while (FALSE !== ($entry = $d->read()))
							{
							$filename = $entry;
							if( substr($entry,0,1) != '.' )
								{
								$docs[] =$entry;
								}
							}
						$d->close();
						if (count($docs)>0)
							{
							$classfilefound = false;
							sort($docs);
							foreach ($docs as $doc)
								{
								$listdir=$jrePath.$doc.JRDS;
								if (file_exists($listdir.$class.".class.php") )
									{
									$result = require($listdir.$class.".class.php");
									self::$_instances[$class] = new $class($arg1);
									$classfilefound = true;
									}
								}
							}
						}
					if (!$classfilefound)
								{
								echo "Class file ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.".class.php"." doesn't exist";
								exit;
								}
					}
				}
			}
		//var_dump(self::$_instances);
		return self::$_instances[$class];
		}
}

function jomres_getSingleton($class,$args=array() )
	{
	$result = jomres_singleton_abstract::getInstance($class,$args);
	return $result;
	}
?>