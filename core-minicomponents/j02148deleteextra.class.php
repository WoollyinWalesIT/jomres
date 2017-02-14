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

class j02148deleteextra
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $uid = jomresGetParam($_REQUEST, 'uid', 0);
        $defaultProperty = getDefaultProperty();
        $saveMessage = jr_gettext('_JOMRES_COM_MR_EXTRA_DELETED', '_JOMRES_COM_MR_EXTRA_DELETED', false);
        //$jomres_messaging = new jomres_messages();
        $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
        $jomres_messaging->set_message($saveMessage);
        $query = "DELETE FROM #__jomres_extras WHERE uid = '".(int) $uid."' AND property_uid = '".(int) $defaultProperty."'";
        if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_DELETE_EXTRA', '_JOMRES_MR_AUDIT_DELETE_EXTRA', false))) {
            trigger_error('Unable to delete from extras table, mysql db failure', E_USER_ERROR);
        }
        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listExtras'), $saveMessage);
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
