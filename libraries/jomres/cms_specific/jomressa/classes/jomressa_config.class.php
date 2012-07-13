<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "" );
// ################################################################
class jomressa_config
	{
	// Store the single instance of Database
	private static $configInstance;

	public function __construct() 
		{
		$this->config = array();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new jomressa_config();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
	}
?>