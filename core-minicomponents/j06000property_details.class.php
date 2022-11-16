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
	 *
	 */

class j06000property_details
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

		$property_uid = intval(jomresGetParam($_REQUEST, 'property_uid', 0));
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		if ($property_uid > 0) {
			if ($current_property_details->published == 1 || in_array($property_uid, $thisJRUser->authorisedProperties)) {
				/*property_header($property_uid);*/
				$MiniComponents->triggerEvent('00016', array('property_uid' => $property_uid));
			}
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
