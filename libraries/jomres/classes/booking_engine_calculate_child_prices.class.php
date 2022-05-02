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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
 *
 * @package Jomres\Core\Classes
 *
 */

class booking_engine_calculate_child_prices
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( $bkg  )
	{
		$this->property_uid		= $bkg->property_uid;
		$this->child_numbers	= $bkg->child_numbers;
		$this->stay_days		= $bkg->stayDays;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function calculate_child_prices ( )
	{
		jr_import('jomres_child_rates');
		$jomres_child_rates = new jomres_child_rates($this->property_uid);

		$child_prices = array();
		$child_prices['total_price'] = 0;
		if ( !empty($this->child_numbers)) {
			foreach ($this->child_numbers as $id=>$number_of_children) {
				if ( isset($jomres_child_rates->child_rates[$id])) {
					if ($jomres_child_rates->child_rates[$id]['model'] == 'per_stay') {
						$price = $jomres_child_rates->child_rates[$id]['price'] * $number_of_children;
					} else {
						$price =  ($jomres_child_rates->child_rates[$id]['price'] * $number_of_children) * $this->stay_days;
					}

				}

				$child_prices['total_price'] =$child_prices['total_price'] + $price;
				$child_prices[$id] = array ( "rate" =>  $jomres_child_rates->child_rates[$id], "price" => $price , "number_of_children" => $number_of_children) ;
			}
		}
		return $child_prices;
	}

	
}
