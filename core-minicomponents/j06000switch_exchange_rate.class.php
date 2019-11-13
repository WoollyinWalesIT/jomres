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
	
	/**
	 * Core Minicomponent.
	 *
	 * 
	 */

class j06000switch_exchange_rate
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
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$current_exchange_rate = jomresGetParam($_REQUEST, 'currency_code', '');
		if ($current_exchange_rate != '') {
			$tmpBookingHandler->user_settings[ 'current_exchange_rate' ] = $current_exchange_rate;
		}
		if (!isset($tmpBookingHandler->user_settings[ 'current_exchange_rate' ])) {
			$tmpBookingHandler->user_settings[ 'current_exchange_rate' ] = 'GBP';
		}
		
		$jomres_currency_conversion = jomres_singleton_abstract::getInstance('jomres_currency_conversion');

		if (!$jomres_currency_conversion->check_currency_code_valid($tmpBookingHandler->user_settings[ 'current_exchange_rate' ])) {
			$tmpBookingHandler->user_settings[ 'current_exchange_rate' ] = 'GBP';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
