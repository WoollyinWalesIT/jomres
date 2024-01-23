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
	 * Imports MRP or SRP calendar for display in the booking form, builds a button to trigger the form in a modal
	 *
	 */

class j05020dobooking
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
	 
	public function __construct($componentArgs = array())
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = true;

			return;
		}
		$property_uid = get_showtime('property_uid');
		$mrConfig = getPropertySpecificSettings();
		$calendar = '';
		if (get_showtime('include_room_booking_functionality') && $mrConfig['showAvailabilityCalendar'] == '1') {
			if ($mrConfig[ 'singleRoomProperty' ]) {
				$calendar = $MiniComponents->specificEvent('06000', 'srp_calendar', array('output_now' => false, 'property_uid' => $property_uid, 'months_to_show' => 24, 'show_just_month' => false));
			} elseif ($mrConfig[ 'showRoomsInPropertyDetails' ]) {
				$calendar = $MiniComponents->specificEvent('06000', 'mrp_calendar', array('output_now' => false, 'property_uid' => $property_uid, 'months_to_show' => 24, 'show_just_month' => false));
			}
		}
		set_showtime('booking_form_calendar', $calendar);


		jomres_set_page_title( $property_uid ,  jr_gettext('_JOMRES_COM_MR_QUICKRESDESC', '_JOMRES_COM_MR_QUICKRESDESC', false) );

		require_once JOMRES_FUNCTIONS_ABSPATH.'dobooking.php';

		if (!defined('DOBOOKING_IN_DETAILS')) {
			jomres_cmsspecific_setmetadata('robots', 'noindex,nofollow');
		}

		echo '<script type="text/javascript">jomresJquery(document).ready(function(){jomresJquery("#availability_calendar_model").appendTo("body");});</script>';
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
