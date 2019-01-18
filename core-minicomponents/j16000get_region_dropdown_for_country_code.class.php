<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000get_region_dropdown_for_country_code
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$countryCode = jomresGetParam($_REQUEST, 'country', '');
		$currentRegion = jomresGetParam($_REQUEST, 'region', '');
		$input_name = jomresGetParam($_REQUEST, 'input_name', '');

		if ($input_name == '') {
			$input_name = 'region';
		}
		$dropdown = setupRegions($countryCode, $currentRegion, false, $input_name);

		// Might need this for required fields, not sure yet. Will leave it in but commented for now (15/07/2013)
/* 		if ($dropdown == '');
			{
			$dropdown = '<input type="hidden" id="'.$input_name.'" name="'.$input_name.'" value="">';
			} */
		echo $dropdown;
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
