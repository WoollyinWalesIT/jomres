<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.23
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000logout
{
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
                // Get the return url from the request and validate that it is internal.
                $return = JRequest::getVar('return', '', 'method', 'base64');
                $return = base64_decode($return);
                if (!JURI::isInternal($return)) {
                    $return = '';
                }

                // Redirect the user.
                $app->redirect(JRoute::_(get_showtime('live_site').'/index.php?option=com_jomres', false));
            } else {
                $app->redirect(JRoute::_('index.php?option=com_users&view=login', false));
            }
        } else {
            jomresRedirect(jomresURL(get_showtime('live_site').'/'.jomres_cmsspecific_getlogout_task()));
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
