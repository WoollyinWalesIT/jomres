<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001deletenote
{
	public function __construct()
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
		$note_id = jomresGetParam($_REQUEST, 'note_id', 0);
		$contract_uid = jomresGetParam($_REQUEST, 'contract_uid', 0);
		if ($note_id == 0 || $contract_uid == 0) {
			echo 'Error with note id or contract id';

			return;
		}
		$defaultProperty = getDefaultProperty();
		$auditMessage = jr_gettext('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', false, false);
		$query = "DELETE FROM #__jomcomp_notes WHERE `id`='".(int) $note_id."' AND `property_uid`='".(int) $defaultProperty."' LIMIT 1";
		if (doInsertSql($query, $auditMessage)) {
			
			$webhook_notification						   = new stdClass();
			$webhook_notification->webhook_event			= 'booking_note_deleted';
			$webhook_notification->webhook_event_description = 'Logs when booking notes are deleted.';
			$webhook_notification->data					 = new stdClass();
			$webhook_notification->data->contract_uid	   = $contract_uid;
			$webhook_notification->data->property_uid	   = $defaultProperty;
			$webhook_notification->data->note_id			= $note_id;
			add_webhook_notification($webhook_notification);
			
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL."&task=edit_booking&contract_uid=$contract_uid"), '');
		} else {
			echo 'Error deleting note';
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
