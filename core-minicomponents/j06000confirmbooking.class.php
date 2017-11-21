<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000confirmbooking
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
			$MiniComponents->triggerEvent('02990');
		} // Trigger the booking confirmation page
		else {
			if (($mrConfig[ 'visitorscanbookonline' ] == '1') && (!$thisJRUser->userIsManager)) {
				if (!$thisJRUser->userIsRegistered && $mrConfig[ 'registeredUsersOnlyCanBook' ] == '1') {
					$MiniComponents->triggerEvent('02280');
				} else {
					$MiniComponents->triggerEvent('02990');
				} // Trigger the booking confirmation page
			}
		}
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
