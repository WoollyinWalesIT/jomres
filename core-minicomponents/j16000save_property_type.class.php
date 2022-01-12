<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
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

class j16000save_property_type
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

		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');

		$jomres_property_types->property_type = array();
		$jomres_property_types->property_type['id'] = (int) jomresGetParam($_POST, 'id', 0);
		$jomres_property_types->property_type['ptype'] = jomresGetParam($_POST, 'ptype', '');
		$jomres_property_types->property_type['ptype_desc'] = strtolower(jomresGetParam($_POST, 'ptype_desc', ''));
		$jomres_property_types->property_type['ptype_desc'] = preg_replace('/[^A-Za-z0-9_-]+/', '', $jomres_property_types->property_type['ptype_desc']);
		$jomres_property_types->property_type['mrp_srp_flag'] = (int) jomresGetParam($_POST, 'mrp_srp_flag', 0);
		$jomres_property_types->property_type['marker'] = jomresGetParam($_POST, 'marker', '');
		$jomres_property_types->property_type['has_stars'] = (int)jomresGetParam($_POST, 'has_stars', '');

		$jomres_property_types->save_property_type();

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_types'), jr_gettext('_JOMRES_COM_PTYPES_SAVED', '_JOMRES_COM_PTYPES_SAVED', false));
	}


	public function getRetVals()
	{
		return null;
	}
}
