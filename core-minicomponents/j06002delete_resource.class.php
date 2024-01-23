<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
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

class j06002delete_resource
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
		$roomUid = intval(jomresGetParam($_REQUEST, 'roomUid', 0));
		$defaultProperty = getDefaultProperty();

		$mrConfig = getPropertySpecificSettings();

		if ($mrConfig[ 'singleRoomProperty' ] == '1') {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), jr_gettext('_JOMRES_COM_MR_ROOM_UNABLETODELETE', '_JOMRES_COM_MR_ROOM_UNABLETODELETE', false));
		}

		jr_import('jrportal_rooms');
		$jrportal_rooms = new jrportal_rooms();
		$jrportal_rooms->room_uid = $roomUid;
		$jrportal_rooms->propertys_uid = $defaultProperty;

		$success = $jrportal_rooms->delete_room();

		if ($success) {
			$save_message = jr_gettext('_JOMRES_COM_MR_ROOM_DELETED', '_JOMRES_COM_MR_ROOM_DELETED', false);
		} else {
			$save_message = jr_gettext('_JOMRES_COM_MR_ROOM_UNABLETODELETE', '_JOMRES_COM_MR_ROOM_UNABLETODELETE', false);
		}
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'room_deleted';
		$webhook_notification->webhook_event_description	= 'Logs when a room is deleted.';
		$webhook_notification->webhook_event_plugin		 = 'core';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $defaultProperty;
		$webhook_notification->data->room_uid			   = $roomUid;
		add_webhook_notification($webhook_notification);

		$webhook_notification						   	= new stdClass();
		$webhook_notification->webhook_event			= 'property_state_change';
		$webhook_notification->webhook_event_description= 'A catchall webhook notification which notes that the property state has changed. Primarily designed for caching features to remove/refresh cache elements';
		$webhook_notification->data					 	= new stdClass();
		$webhook_notification->data->property_uid	   	= $defaultProperty;
		add_webhook_notification($webhook_notification);

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), $save_message);
	}


	public function getRetVals()
	{
		return null;
	}
}
