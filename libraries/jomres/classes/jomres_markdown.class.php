<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// A wrapper class for parsing data through a markdown class
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_markdown {
	
	/**
	 * 
	 *
	 *
	 */

	public function __construct() {
		//require_once (JOMRES_LIBRARIES_ABSPATH.'Parsedown'.JRDS.'Parsedown.php');
		$this->Parsedown = new Parsedown();
		$this->Parsedown->setBreaksEnabled(true);
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_markdown($string) {
		return $this->Parsedown->text($string);
	}

}
