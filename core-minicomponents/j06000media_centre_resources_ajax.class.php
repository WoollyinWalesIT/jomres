<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
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

class j06000media_centre_resources_ajax
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

		$defaultProperty = getDefaultProperty();
		$resource_type = jomresGetParam($_REQUEST, 'resource_type', '');
		
		//if resource type is empty, return
		if ($resource_type == '')
			return;

		//resource_id_gathering_trigger
		if (jomres_cmsspecific_areweinadminarea()) {
			if ($MiniComponents->eventSpecificlyExistsCheck('11020', $resource_type)) {
				$result = $MiniComponents->specificEvent('11020', $resource_type);
				echo $result;
			}
		} else {
			if ($MiniComponents->eventSpecificlyExistsCheck('03381', $resource_type)) {
				$result = $MiniComponents->specificEvent('03381', $resource_type);
				echo $result;
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
