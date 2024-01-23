<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	#[AllowDynamicProperties]
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
