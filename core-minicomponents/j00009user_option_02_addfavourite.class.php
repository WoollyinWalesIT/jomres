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

class j00009user_option_02_addfavourite
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }
        $property_uid = (int) jomresGetParam($_REQUEST, 'property_uid', 0);
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if ($thisJRUser->userIsRegistered && !$thisJRUser->userIsManager) {
            if (jomresGetParam($_REQUEST, 'task', '') == 'viewproperty') {
                $query = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int) $property_uid."' AND my_id='".(int) $thisJRUser->id."'";
                $favourite = doSelectSql($query, 1);
                if (!$favourite) {
                    $this->cpanelButton = jomres_mainmenu_option(JOMRES_SITEPAGE_URL.'&task=muaddtofavourites&no_html=1&amp;property_uid='.$property_uid, '', jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES', '_JOMCOMP_MYUSER_ADDTOFAVOURITES', false, false), null, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', false, false));
                }
            }
        }
    }

    public function touch_template_language()
    {
        $output = array();
        $output[ ] = jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES', '_JOMCOMP_MYUSER_ADDTOFAVOURITES');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        if (isset($this->cpanelButton)) {
            return $this->cpanelButton;
        } else {
            return null;
        }
    }
}
