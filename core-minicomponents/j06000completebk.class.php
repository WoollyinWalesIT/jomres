<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000completebk
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$plugin = jomresGetParam($_REQUEST, 'plugin', '');
		
		$bookingdata = gettempBookingdata();
		
		$MiniComponents->triggerEvent('00609', array('bookingdata' => $bookingdata)); // Optional
		
		$MiniComponents->specificEvent('00610', $plugin); //Incoming
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
