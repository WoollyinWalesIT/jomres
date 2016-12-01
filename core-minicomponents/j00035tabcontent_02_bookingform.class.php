<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00035tabcontent_02_bookingform
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $property_uid = (int) $componentArgs[ 'property_uid' ];
        $mrConfig = getPropertySpecificSettings($property_uid);
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $this->retVals = null;

        if ($mrConfig[ 'registeredUsersOnlyCanBook' ] == '1' && $thisJRUser->id == 0) {
            return;
        }

        // Booking form tab
        if ($mrConfig[ 'is_real_estate_listing' ] == 0 && $jrConfig[ 'show_booking_form_in_property_details' ] == '1' && $mrConfig[ 'visitorscanbookonline' ] == '1' && !isset($_REQUEST[ 'jr_printable' ])) {
            define('DOBOOKING_IN_DETAILS', 1);

            $MiniComponents->specificEvent('05020', 'dobooking', array());

            $book_now_text = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM', '_JOMRES_FRONT_MR_MENU_BOOKAROOM', false, false);

            if ($mrConfig[ 'singleRoomProperty' ] == '1') {
                $book_now_text = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', false, false);
            }

            $anchor = jomres_generate_tab_anchor($book_now_text);
            $tab = array('TAB_ANCHOR' => $anchor, 'TAB_TITLE' => $book_now_text, 'TAB_CONTENT' => BOOKING_FORM_FOR_PROPERTY_DETAILS, 'TAB_ID' => 'tour_target_property_details_booking_form');
            $this->retVals = $tab;
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
