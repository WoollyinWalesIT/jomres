<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001delete_guest
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $id = jomresGetParam($_REQUEST, 'id', 0);
        $defaultProperty = getDefaultProperty();
        
		jr_import( 'jrportal_guests' );
		$jrportal_guests = new jrportal_guests();
		$jrportal_guests->id = $id;
		$jrportal_guests->property_uid = $defaultProperty;
		
		if ($jrportal_guests->delete_guest()) {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listguests'), jr_gettext('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', false));
        } else {
            echo jr_gettext('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', false);
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
