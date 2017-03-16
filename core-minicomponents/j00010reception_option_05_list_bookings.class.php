<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.28
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00010reception_option_05_list_bookings
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }
        $property_uid = getDefaultProperty();
        $mrConfig = getPropertySpecificSettings($property_uid);
        $this->cpanelButton = '';

        if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
            return;
        }

        $this->cpanelButton = jomres_mainmenu_option(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_bookings'), 'ListBookings.png', jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', false, false), null, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', false, false));
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->cpanelButton;
    }
}
