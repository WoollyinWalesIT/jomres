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
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j16000editinplace
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

		$customText = jomresGetParam($_POST, 'value', '');
		
		$theConstant = filter_var($_POST[ 'pk' ], FILTER_SANITIZE_SPECIAL_CHARS);
		
		$language_context = jomresGetParam($_GET, 'language_context', '0');

		$result = updateCustomText($theConstant, $customText, true, 0, $language_context);

		if ($result) {
			header('Status: 200');
			echo jomres_decode($customText);
		} else {
			header('Status: 500');
			echo 'Something burped';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
