<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
 *
 * @package Jomres\Core\Classes
 *
 */

class booking_engine_adults_dropdown
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( $bkg  )
	{
		$this->available_rooms = $bkg->available_rooms_for_selected_dates;
		$this->property_uid = $bkg->property_uid;
		$this->available_rooms = array_unique($bkg->available_rooms_for_selected_dates);
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function calculate_child_prices ( )
	{

	// $this->child_numbers 	child_numbers
	}

	
}
