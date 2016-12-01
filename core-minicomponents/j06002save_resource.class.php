<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002save_resource
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $defaultProperty = getDefaultProperty();

        $mrConfig = getPropertySpecificSettings();

        jr_import('jrportal_rooms');
        $jrportal_rooms = new jrportal_rooms();

        $jrportal_rooms->propertys_uid = $defaultProperty;
        $jrportal_rooms->room_uid = (int) jomresGetParam($_POST, 'roomUid', 0);
        $jrportal_rooms->room_classes_uid = (int) jomresGetParam($_POST, 'roomClasses', 0);
        $jrportal_rooms->max_people = (int) jomresGetParam($_POST, 'max_people', 0);
        $jrportal_rooms->room_name = getEscaped(jomresGetParam($_POST, 'room_name', ''));
        $jrportal_rooms->room_number = getEscaped(jomresGetParam($_POST, 'room_number', ''));
        $jrportal_rooms->room_floor = getEscaped(jomresGetParam($_POST, 'room_floor', ''));
        $jrportal_rooms->singleperson_suppliment = (float) jomresGetParam($_POST, 'singleperson_suppliment', 0.0);
        $jrportal_rooms->room_features_uid = jomresGetParam($_POST, 'features_list', array());

        if ($jrportal_rooms->room_uid > 0) {
            $jrportal_rooms->commit_update_room();
        } else {
            $jrportal_rooms->commit_new_room();
        }

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
