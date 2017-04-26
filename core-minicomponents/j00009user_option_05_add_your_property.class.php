<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00009user_option_05_add_your_property
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
        if ($thisJRUser->userIsManager) { // No point in putting the "add your property" link to the toolbar if the user's already a manager.
        return;
        }
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        if ($jrConfig[ 'selfRegistrationAllowed' ] == '1') {
            $this->cpanelButton = jomres_mainmenu_option(JOMRES_SITEPAGE_URL.'&task=new_property', '', jr_gettext('_JOMRES_USER_LISTMYPROPERTY', '_JOMRES_USER_LISTMYPROPERTY', false, false), null, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', false, false));
        }
    }

    public function touch_template_language()
    {
        $output = array();
        $output[ ] = jr_gettext('_JOMRES_USER_LISTMYPROPERTY', '_JOMRES_USER_LISTMYPROPERTY');
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
