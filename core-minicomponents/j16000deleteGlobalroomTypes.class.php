<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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

class j16000deleteGlobalroomTypes
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

		$idarray = jomresGetParam($_POST, 'idarray', array());

		if (empty($idarray)) {
			return;
		}

		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$success = $jomres_room_types->delete_room_type($idarray);

		if ($success) {
			$save_message = jr_gettext('_JOMRES_COM_MR_ROOMCLASS_DELETED', '_JOMRES_COM_MR_ROOMCLASS_DELETED', false);
		} else {
			$save_message = 'Unable to delete room type. It may still be used by some properties.';
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listGlobalroomTypes'), $save_message);
	}


	public function getRetVals()
	{
		return null;
	}
}
