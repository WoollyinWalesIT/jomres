<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.7
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001dashboard_get_guest_details_ajax
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $property_uid = jomresGetParam($_GET, 'property_uid', 0);
        if ($property_uid == 0) {
            $property_uid = getDefaultProperty();
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
            return;
        }

        $existing_id = (int) jomresGetParam($_GET, 'existing_id', 0);

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $guestDeets = array();

        if ($existing_id == 0) {
            echo json_encode($guestDeets);
            exit;
        }

        $query = 'SELECT 
						`guests_uid` AS existing_id,
						`mos_userid`,
						`surname`,
						`firstname`,
						`house`,
						`street`,
						`town`,
						`county`,
						`country`,
						`postcode`,
						`tel_landline`,
						`tel_mobile`,
						`email`
					FROM #__jomres_guests 
					WHERE `property_uid` IN (' .jomres_implode($thisJRUser->authorisedProperties).') 
						AND `guests_uid` = '.(int) $existing_id.'  
					LIMIT 1 ';
        $guestDeets = doSelectSql($query, 2);

        echo json_encode($guestDeets);
        exit;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
