<?php
/**
* Jomres CMS Agnostic Plugin.
*
* @author Woollyinwales IT <sales@jomres.net>
*
 * @version Jomres 9.11.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

class j02990add_tourist_tax
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        //if this is a secret key payment (for an approved booking enquiry) we don`t need to add the tourist tax again
		$sk = jomresGetParam($_REQUEST, 'sk', '');

        if ($sk != '') {
            return;
        }

        $tourist_tax = 0.00;

        $mrConfig = getPropertySpecificSettings();
        if (!isset($mrConfig['tourist_tax'])) {
            $mrConfig['tourist_tax'] = '0';
        }
        if (!isset($mrConfig['tourist_tax_ispercentage'])) {
            $mrConfig['tourist_tax_ispercentage'] = '1';
        }
        if (!isset($mrConfig['tourist_tax_wholebooking'])) {
            $mrConfig['tourist_tax_wholebooking'] = '0';
        }

        $mrConfig['tourist_tax'] = (float) $mrConfig['tourist_tax'];

        $bkg = $MiniComponents->triggerEvent('05000'); // Create the booking object

        $bkg->remove_third_party_extra('tourist_tax', 0);

        if ($mrConfig['tourist_tax_ispercentage'] == '1') {
            if ($mrConfig['tourist_tax_wholebooking'] == '1') {
                $base_cost = $bkg->room_total + $bkg->extrasvalue + $bkg->single_person_suppliment;
            } else {
                $base_cost = $bkg->room_total;
            }

            $tourist_tax = ($base_cost / 100) * $mrConfig['tourist_tax'];
        } else {
            $tourist_tax = $mrConfig['tourist_tax'];
        }

        if ($tourist_tax > 0) {
            $bkg->add_third_party_extra('tourist_tax', 0, jr_gettext('_JOMRES_TOURIST_TAX_TITLE', '_JOMRES_TOURIST_TAX_TITLE', false), $tourist_tax, 0);
        }

        $bkg->generateBilling();
        $bkg->storeBookingDetails();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
