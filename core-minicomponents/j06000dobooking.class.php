<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000dobooking
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
		
		$mrConfig = getPropertySpecificSettings();

		if ($thisJRUser->userIsManager) {
			$MiniComponents->triggerEvent('05020');
		} else {
			if (($mrConfig[ 'visitorscanbookonline' ] == '1') && (!$thisJRUser->userIsManager)) {
				if (!$thisJRUser->userIsRegistered && $mrConfig[ 'registeredUsersOnlyCanBook' ] == '1') {
					$MiniComponents->triggerEvent('02280');
				} else {
					$MiniComponents->triggerEvent('05020');
				}
			} else {
				$MiniComponents->specificEvent('00600', 'contactowner');
			} // Alternative if online bookings by guests is disabled
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
