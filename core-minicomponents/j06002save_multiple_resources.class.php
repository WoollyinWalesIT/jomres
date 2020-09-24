<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
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

class j06002save_multiple_resources
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

		$mrConfig = getPropertySpecificSettings();

		jr_import('jrportal_rooms');
		$jrportal_rooms = new jrportal_rooms();

		$jrportal_rooms->rooms_generator['propertys_uid'] = (int) $defaultProperty;
		$jrportal_rooms->rooms_generator['number_of_rooms'] = (int) jomresGetParam($_POST, 'numberOfResources', 0);
		$jrportal_rooms->rooms_generator['room_classes_uid'] = (int) jomresGetParam($_POST, 'resourcesType', 0);
		$jrportal_rooms->rooms_generator['max_people'] = (int) jomresGetParam($_POST, 'maxGuests', 0);
		$jrportal_rooms->rooms_generator['delete_existing_rooms'] = (bool) jomresGetParam($_POST, 'deleteExistingResources', false);

		$jrportal_rooms->commit_new_rooms();

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
