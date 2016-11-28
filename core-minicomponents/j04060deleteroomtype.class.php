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

class j04060deleteroomtype
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $roomClassUid = intval(jomresGetParam($_REQUEST, 'roomClassUid', 0));
        $defaultProperty = getDefaultProperty();
        $saveMessage = jr_gettext('_JOMRES_COM_MR_ROOMCLASS_DELETED', '_JOMRES_COM_MR_ROOMCLASS_DELETED', false);
        // First we need to check that the room type isn't recorded against any rooms or tariffs. If it is, we can't move forward
        $safeToDelete = true;
        $query = "SELECT room_classes_uid FROM #__jomres_rooms WHERE room_classes_uid = '".(int) $roomClassUid."' AND propertys_uid = '".(int) $defaultProperty."' LIMIT 1";
        $propertyFeaturesList = doSelectSql($query);
        if (count($propertyFeaturesList)) {
            $safeToDelete = false;
            trigger_error(jr_gettext('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', false), E_USER_ERROR);
            echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', false)."'); ; </script>\n";
        }
        $query = "SELECT roomclass_uid FROM #__jomres_rates WHERE roomclass_uid = '".(int) $roomClassUid."' AND property_uid = '".(int) $defaultProperty."' LIMIT 1";
        $propertyFeaturesList = doSelectSql($query);
        if (count($propertyFeaturesList)) {
            $safeToDelete = false;
            trigger_error(jr_gettext('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', false), E_USER_ERROR);
            echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', false)."'); ; </script>\n";
        }
        if ($safeToDelete) {
            $c = jomres_singleton_abstract::getInstance('jomres_array_cache');
            $c->eraseAll();

            $query = "DELETE FROM #__jomres_room_classes  WHERE room_classes_uid = '".(int) $roomClassUid."' AND property_uid = '".(int) $defaultProperty."'";
            if (doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', false))) {
                returnToPropertyConfig($saveMessage);
            }
            trigger_error('Unable to delete from room classes table, mysql db failure', E_USER_ERROR);
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
