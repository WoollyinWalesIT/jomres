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

class j06001savenote
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

        $newtext = jomresGetParam($_POST, 'newtext', '');
        $contract_uid = jomresGetParam($_POST, 'contract_uid', 0);
        $note_id = jomresGetParam($_POST, 'note_id', 0);
        $defaultProperty = getDefaultProperty();
        $datetime = date('Y-m-d H-i-s');

        $auditMessage = jr_gettext('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', false, false);
        if ($note_id == 0) {
            $query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','$newtext','$datetime','".(int) $defaultProperty."')";
            $note_id = doInsertSql($query, $auditMessage);
        } else {
            $auditMessage = jr_gettext('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', false, false);
            $query = "UPDATE #__jomcomp_notes SET `note`='$newtext',`timestamp`='$datetime' WHERE id = '".(int) $note_id."' AND property_uid = '".(int) $defaultProperty."'";
            doInsertSql($query, $auditMessage);
        }

        $query = 'SELECT contract_uid FROM #__jomcomp_notes WHERE id = '.(int) $note_id.'';
        $contract_uid = doSelectSql($query, 1);

        if ($contract_uid) {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=editBooking&contract_uid='.$contract_uid));
        } else {
            echo 'Error saving note';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
