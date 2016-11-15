<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.18
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000media_centre_resources_ajax
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        // Let's the appropriate upload context details
        $MiniComponents->triggerEvent('07100');
        $upload_context = get_showtime('upload_context');

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!$thisJRUser->userIsManager) {
            return;
        }

        $defaultProperty = getDefaultProperty();
        $resource_type = jomresGetParam($_REQUEST, 'resource_type', '');
        if ($resource_type != '') {
            if ($MiniComponents->eventSpecificlyExistsCheck($upload_context [ 'resource_id_gathering_trigger' ], $resource_type)) {
                $result = $MiniComponents->specificEvent($upload_context [ 'resource_id_gathering_trigger' ], $resource_type);
                echo $result;
            }
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
