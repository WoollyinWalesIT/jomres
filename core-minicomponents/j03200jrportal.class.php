<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.17
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j03200jrportal
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        if ($MiniComponents->eventFileExistsCheck('07005')) {
            $propertys_uids = $MiniComponents->triggerEvent('07005');
        } // Optional minicomponent trigger, eg for system cleanups or other pre-booking activity

        if ($MiniComponents->eventFileExistsCheck('07010')) {
            $MiniComponents->triggerEvent('07010', $componentArgs);
        } // Allows us to run post insertion functionality for importing into foreign systems. Currently used for inserting commission line items
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
