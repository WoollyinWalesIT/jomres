<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000processpayment
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$property_uid = (int)$tmpBookingHandler->tmpbooking['property_uid'];
		$bookingdata = gettempBookingdata();
		
		request_log();
		
		if ($bookingdata[ 'ok_to_book' ] == false ) {
			die("Naughty bot");
		}
		
		$tag = set_booking_number();

		$plugin = jomres_validate_gateway_plugin();

		$query = "SELECT `id` FROM #__jomres_booking_data_archive WHERE `tag` = '".$tag."'";
		$result = doSelectSql($query);
		if (empty($result)) {
			$data = array('tmpbooking' => $tmpBookingHandler->tmpbooking, 'tmpguest' => $tmpBookingHandler->tmpguest);
			$data = str_replace("'", "''", serialize($data));

			$query = "INSERT INTO #__jomres_booking_data_archive SET `data`='".$data."',`date`='".date('Y-m-d H:i:s')."', `tag` = '".$tag."'";
			doInsertSql($query, '');
		}

		$MiniComponents->triggerEvent('00599', array('bookingdata' => $tmpBookingHandler->tmpbooking)); // Optional


		
		// We'll let bookings of 0 value passed the gateway plugin handling as some users offer 100% discounts via coupons
		if ($bookingdata[ 'contract_total' ] == 0.00) {
			$plugin = 'NA';
		}

		if ($plugin != 'NA') {
			$query = 'SELECT id,plugin FROM #__jomres_pluginsettings WHERE (prid = '.(int) $property_uid." OR prid = 0)  AND `plugin` = '".(string) $plugin."' AND setting = 'active' AND value = '1'";
			$gatewayDeets = doSelectSql($query);

			if (!empty($gatewayDeets)) {

				$interrupted = intval(jomresGetParam($_POST, 'interrupted', 0));
				$interruptOutgoingFile = false;

				if ($MiniComponents->eventFileLocate('00600', $plugin)) {
					$interruptOutgoingFile = 'j00600'.$plugin.'.class.php';
				}

				$outgoingFile = 'j00605'.$plugin.'.class.php';

				if ($interruptOutgoingFile && $interrupted == 0) {
					$MiniComponents->specificEvent('00600', $plugin, array('bookingdata' => $bookingdata, 'property_uid' => $property_uid));
				} //Interrupt outgoing
				else {
					$MiniComponents->specificEvent('00605', $plugin, array('bookingdata' => $bookingdata, 'property_uid' => $property_uid));
				} //outgoing
			} else {
				insertInternetBooking(get_showtime('jomressession'), $depositPaid = false, $confirmationPageRequired = true, $customTextForConfirmationForm = '');
			}
		} else {
			insertInternetBooking(get_showtime('jomressession'), $depositPaid = false, $confirmationPageRequired = true, $customTextForConfirmationForm = '');
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
