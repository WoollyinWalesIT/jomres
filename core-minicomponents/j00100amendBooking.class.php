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

		$selectedProperty = (int)jomresGetParam($_REQUEST, 'selectedProperty', 0);
        
		if ($selectedProperty > 0 && in_array($selectedProperty, $thisJRUser->authorisedProperties)) {
            
            if ($selectedProperty > 0 && $thisJRUser->currentproperty != $selectedProperty) {
                $thisJRUser->set_currentproperty($selectedProperty);
                $qString = $_SERVER[ 'QUERY_STRING' ];
                jomresRedirect(jomresURL('index.php?'.$qString."&selectedProperty=$selectedProperty"));
            }
        }
    }

    //Must be included in every mini-component.
    public function getRetVals()
    {
        return null;
    }
}
