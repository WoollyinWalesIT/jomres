<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
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

class j11020property_types
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
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager) {
			return;
		}

		$this->ret_vals = '';

		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
		$jomres_property_types->get_all_property_types();

		if (!empty($jomres_property_types->property_types)) {
			$resource_options = array();
			foreach ($jomres_property_types->property_types as $ptype) {
				$resource_options[ ] = jomresHTML::makeOption($ptype['id'], $ptype['ptype']);
			}
			$use_bootstrap_radios = false;
			$dropdown = jomresHTML::selectList($resource_options, 'resource_id', ' autocomplete="off" ', 'value', 'text', '', $use_bootstrap_radios);
		}
		$this->ret_vals = $dropdown;
	}


	public function getRetVals()
	{
		return $this->ret_vals;
	}
}
