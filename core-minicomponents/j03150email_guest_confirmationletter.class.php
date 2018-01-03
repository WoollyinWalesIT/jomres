<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.17
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j03150email_guest_confirmationletter
{
    public function __construct($componentArgs)
    {

        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $default_template = JOMRES_TEMPLATEPATH_BACKEND.JRDS.'email_guest_confirmationletter.html';

        $this->ret_vals = array('type' => 'email_guest_confirmationletter', 'name' => jr_gettext('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', '_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', false), 'desc' => jr_gettext('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', '_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', false), 'default_template' => $default_template);
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
