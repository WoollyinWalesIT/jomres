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

// 

/**
 * @package Jomres\Core\Functions
 *
 * The purpose of this function is to allow us to override the booking number programatically.
 *
 */
function set_booking_number()
{
	$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
	if (!isset($tmpBookingHandler->tmpbooking[ 'booking_number' ]) || trim($tmpBookingHandler->tmpbooking[ 'booking_number' ]) == '' || $tmpBookingHandler->tmpbooking[ 'booking_number' ] == 0) {
		$keeplooking = true;
		while ($keeplooking):
			$cartnumber = mt_rand(10000000, 99999999);
		$query = "SELECT `contract_uid` FROM #__jomres_contracts WHERE `tag` = '".$cartnumber."' LIMIT 1";
		$bklist = doSelectSql($query);
		if (empty($bklist)) {
			$keeplooking = false;
		}
		endwhile;
		$tmpBookingHandler->tmpbooking[ 'booking_number' ] = $cartnumber;
	} else {
		$cartnumber = $tmpBookingHandler->tmpbooking[ 'booking_number' ];
	}

	return $cartnumber;
}
