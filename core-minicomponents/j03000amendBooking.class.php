<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j03000amendBooking
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
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

        if (!$thisJRUser->userIsManager) {
            return;
        }
        if ((isset($tmpBookingHandler->tmpbooking[ 'amend_contract' ])) && ($tmpBookingHandler->tmpbooking[ 'amend_contract' ] == true)) {
            if (isset($tmpBookingHandler->tmpbooking[ 'override_contract_total' ]) && ($tmpBookingHandler->tmpbooking[ 'override_contract_total' ] != '')) {
                $tmpBookingHandler->tmpbooking[ 'contract_total' ] = $tmpBookingHandler->tmpbooking[ 'override_contract_total' ];
            }
            if (isset($tmpBookingHandler->tmpbooking[ 'override_contract_deposit' ]) && ($tmpBookingHandler->tmpbooking[ 'override_contract_deposit' ] != '')) {
                $tmpBookingHandler->tmpbooking[ 'deposit_required' ] = $tmpBookingHandler->tmpbooking[ 'override_contract_deposit' ];
            }
        }
    }

    /**
     * Must be included in every mini-component.
     #
     * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
     */
    public function getRetVals()
    {
        return null;
    }
}
