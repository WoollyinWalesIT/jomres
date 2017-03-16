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

class j00009user_option_01_myfavourites
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
        $this->cpanelButton = '';
        if ($thisJRUser->userIsRegistered) {
            //it`s not worth it to have a query just to show this menu. better show it for all. When there is no data a blank table will be displayed.
            //$query      = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE my_id='" . (int) $thisJRUser->id . "'";
            //$favourites = doSelectSql( $query );
            //if ( count( $favourites ) > 0 )
                //{
                $this->cpanelButton = jomres_mainmenu_option(JOMRES_SITEPAGE_URL.'&task=muviewfavourites', '', jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES', '_JOMCOMP_MYUSER_VIEWFAVOURITES', false, false), null, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', false, false));
                //}
        }
    }

    public function touch_template_language()
    {
        $output = array();
        $output[ ] = jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES', '_JOMCOMP_MYUSER_VIEWFAVOURITES');
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
