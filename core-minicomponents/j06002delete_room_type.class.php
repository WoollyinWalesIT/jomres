<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.5
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

class j06002delete_room_type
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if ( $jrConfig[ 'frontend_room_type_editing_allowed' ] == 0 ) {
			return;
		}
		
		$property_uid = getDefaultProperty();
		
		$room_classes_uid = intval(jomresGetParam($_REQUEST, 'room_classes_uid', 0));
		
		if ($room_classes_uid < 1 ) {
			throw new Exception('Room class ID not passed');
		}
		
		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();
		
		$jomres_room_types->validate_manager_access_to_room_type($room_classes_uid);
		
		
		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$success = $jomres_room_types->delete_room_type( array($room_classes_uid) );

		if ($success) {
			$save_message = jr_gettext('_JOMRES_COM_MR_ROOMCLASS_DELETED', '_JOMRES_COM_MR_ROOMCLASS_DELETED', false);
		} else {
			$save_message = 'Unable to delete room type. It may still be used by some properties.';
		}
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_room_types'), jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', false));
	}


	public function getRetVals()
	{
		return null;
	}
}
