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
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06002save_child_policies
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}


		$defaultProperty = getDefaultProperty();

		$child_min_age				= (int) jomresGetParam($_POST, 'child_min_age', 0);

		jr_import('jomres_child_policies');
		$jomres_child_policies = new jomres_child_policies($defaultProperty);

		$jomres_child_policies->child_policies['child_min_age'] = $child_min_age;

		$jomres_child_policies->save_child_policies();

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=child_policies'), '');
	}

	public function convert_greaterthans($string)
	{
		$string = str_replace('&#38;gt;', '>', $string);

		return $string;
	}
	

	public function getRetVals()
	{
		return null;
	}
}
