<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * @package Jomres\Core\Classes
* Doesn't do anything by itself, instead it is a placeholder that plugins can override to provide their own machine translation features.
*
*/
class jomres_machine_translations
{
	
	private static $internal_debugging;
	
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		self::$internal_debugging = false;

		$this->init_service();
	}

		
	/**
	 *
	 *
	 *
	 */

	public function init_service()
	{
		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
	}

	
	/**
	 *
	 *
	 *
	 */

	public function get_translation($default_text, $constant, $target_language)
	{
		return $default_text;
	}
}
