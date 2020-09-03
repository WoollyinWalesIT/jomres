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

class j06002save_child_rate
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

		$id					= (int) $_REQUEST['id'];
		$age_from			= (int) $_REQUEST['age_from'];
		$age_to				= (int) $_REQUEST['age_to'];
		$price				= convert_entered_price_into_safe_float(jomresGetParam($_REQUEST, 'price', ''));
		$model				= (string) jomresGetParam($_REQUEST, 'model', '');

		if ($model != 'per_night' && $model != 'per_stay' ) {
			throw new Exception('Error: Invalid model sent, possible hack attempt');
		}

		jr_import('jomres_child_rates');
		$jomres_child_rates = new jomres_child_rates($defaultProperty);

		$jomres_child_rates->set_child_rate ( $id , $age_from , $age_to , $price , $model);
		$jomres_child_rates->save_child_rates();

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
