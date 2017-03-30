<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.21
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000switch_exchange_rate
{
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
        jr_import('jomres_currency_conversion');
        $conversion = new jomres_currency_conversion();
        if (!$conversion->check_currency_code_valid($tmpBookingHandler->user_settings[ 'current_exchange_rate' ])) {
            $tmpBookingHandler->user_settings[ 'current_exchange_rate' ] = 'GBP';
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
