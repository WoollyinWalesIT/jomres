<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_empty_class
{	
	/**
	 *
	 * @package Jomres\Core\Classes
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

	public function __call($name, $arguments) 
	{
		//throw new Exception("failed to call method ".$name);
	}
		
	/**
	 * 
	 *
	 *
	 */

	public static function __callStatic($name, $arguments) 
	{
		//throw new Exception("failed to call static method ".$name);
	}
}
