<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00100amendBooking
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if (!$thisJRUser->userIsManager) {
            return;
        }

        if (isset($_REQUEST[ 'selectedProperty' ]) && in_array(intval($_REQUEST[ 'selectedProperty' ]), $thisJRUser->authorisedProperties)) {
            $selectedProperty = jomresGetParam($_REQUEST, 'selectedProperty', 0);
            if ($selectedProperty > 0 && $thisJRUser->currentproperty != $selectedProperty) {
                $thisJRUser->set_currentproperty($selectedProperty);
                $qString = $_SERVER[ 'QUERY_STRING' ];
                jomresRedirect(jomresURL('index.php?'.$qString."&selectedProperty=$selectedProperty"));
            }
        }
    }

    /**
     * Must be included in every mini-component.
     #
     * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
     */
    public function getRetVals()
    {
        return null;
    }
}
