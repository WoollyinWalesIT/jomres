<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.0.0
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

class j06000logout
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$tmpBookingHandler->resetTempBookingData();
		$tmpBookingHandler->resetTempGuestData();
		$tmpBookingHandler->resetCart();

		if (this_cms_is_joomla()) {
			$app = JFactory::getApplication();
			$error = $app->logout();
			// Check if the log out succeeded.
			if (!($error instanceof Exception)) {
 				// Redirect the user.
				$app->redirect(JRoute::_(get_showtime('live_site').'/index.php?option=com_jomres', false));
			} else {
				$app->redirect(JRoute::_('index.php?option=com_users&view=login', false));
			}
		} else {
			jomresRedirect(jomresURL(get_showtime('live_site').'/'.jomres_cmsspecific_getlogout_task()));
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
