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
	 * @package Jomres\Core\Minicomponents
	 *
	 * Includes the generateDateInput.php function script. Identified as a function that is regularly modified by users, it is delivered in this format so that  you don't need to be a coder to create your own version of this function.
	 *
	 */

class j00001functioncall_get_search_form_elements
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		require_once JOMRES_FUNCTIONS_ABSPATH.'get_search_form_element_autocomplete.php';
		require_once JOMRES_FUNCTIONS_ABSPATH.'get_search_form_element_stars.php';
	}

	public function getRetVals()
	{
		return null;
	}
}
