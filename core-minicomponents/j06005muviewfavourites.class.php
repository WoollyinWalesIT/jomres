<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005muviewfavourites
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

        if (isset($tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ])) {
            $shortlist_items = $tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ];
        } else {
            $shortlist_items = array();
        }

        $query = 'SELECT `property_uid` FROM #__jomcomp_mufavourites WHERE `my_id` = '.(int) $thisJRUser->id.' AND property_uid > 0';
        $propys = doSelectSql($query);
        if (!empty($propys)) {
            foreach ($propys as $p) {
                if (!in_array($p->property_uid, $shortlist_items)) {
                    $shortlist_items[] = (int) $p->property_uid;
                }
            }

            $MiniComponents->triggerEvent('01004', $componentArgs); // optional
            $MiniComponents->triggerEvent('01005', $componentArgs); // optional
            $MiniComponents->triggerEvent('01006', $componentArgs); // optional
            $MiniComponents->triggerEvent('01007', $componentArgs); // optional
            $componentArgs[ 'propertys_uid' ] = $shortlist_items;
            $componentArgs[ 'live_scrolling_enabled' ] = true;
            $MiniComponents->triggerEvent('01010', $componentArgs); // listPropertys
        } else {
            echo jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', $editable = false, $isLink = false);
        }
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ 'H1' ] = jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE');
        $output[ 'HPTYPES' ] = jr_gettext('_JOMCOMP_MYUSER_PROPERTYTYPE', '_JOMCOMP_MYUSER_PROPERTYTYPE');
        $output[ 'HPNAME' ] = jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME');
        $r[ 'REMOVETEXT' ] = jr_gettext('_JOMCOMP_MYUSER_REMOVE', '_JOMCOMP_MYUSER_REMOVE');
        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
