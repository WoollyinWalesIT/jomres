<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.26
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000saveGlobalRoomClass
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');

        $jomres_room_types->room_type['room_classes_uid'] = (int) jomresGetParam($_POST, 'roomClassUid', 0);
        $jomres_room_types->room_type['room_class_abbv'] = jomresGetParam($_POST, 'room_class_abbv', '');
        $jomres_room_types->room_type['room_class_full_desc'] = jomresGetParam($_POST, 'room_class_full_desc', '');
        $jomres_room_types->room_type['ptype_xref'] = jomresGetParam($_POST, 'ptype_ids', array());
        $jomres_room_types->room_type['image'] = jomresGetParam($_POST, 'image', '');

        $jomres_room_types->save_room_type();

        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');
        $c->eraseAll();

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listGlobalroomTypes'), jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', false));
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
