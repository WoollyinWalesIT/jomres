<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
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

class j06001mark_booking_noshow
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
			$this->template_touchable = true;

			return;
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager) {
			return;
		}

		$contract_uid = intval(jomresGetParam($_REQUEST, 'contract_uid', 0));

		if ($contract_uid == 0) {
			return;
		}

		$property_uid = getDefaultProperty();

		$query = 'UPDATE  #__jomres_contracts  SET noshow_flag = 1 WHERE contract_uid = '.$contract_uid.' AND property_uid = '.(int) $property_uid; 

		$result = doInsertSql($query, jr_gettext('BOOKING_NOSHOW_AUDIT_LOG', 'BOOKING_NOSHOW_AUDIT_LOG', false, false)  );

		$MiniComponents->specificEvent('06001', 'save_cancellation', array( 'contract_uid' => $contract_uid , 'reason' => jr_gettext('BOOKING_NOSHOW_AUDIT_LOG', 'BOOKING_NOSHOW_AUDIT_LOG', false, false) , 'property_uid' => $property_uid ));
		
		$webhook_notification								= new stdClass();
		$webhook_notification->webhook_event				= 'booking_marked_noshow';
		$webhook_notification->webhook_event_description	= 'Logs when a booking is marked as No Show';
		$webhook_notification->webhook_event_plugin			= 'core';  // Doesn't do anything at this time.
		$webhook_notification->data							= new stdClass();
		$webhook_notification->data->property_uid			= $property_uid;  // You will need to find a test property's property uid
		$webhook_notification->data->contract_uid			= $contract_uid;  // You will need to find a test bookings contract uid
		add_webhook_notification($webhook_notification);

		addBookingNote($contract_uid, $property_uid, jr_gettext('BOOKING_NOSHOW_AUDIT_LOG', 'BOOKING_NOSHOW_AUDIT_LOG', false, false));
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$contract_uid), '');
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return null;
	}
}
