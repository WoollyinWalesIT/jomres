<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000delete_template
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $id = jomresGetParam($_REQUEST, 'id', '');

        $query = "DELETE FROM  #__jomres_custom_templates WHERE `uid`= '".$id."'";
        $result = doInsertSql($query, '');

        if ($templatename == 'jomrescss.css') {
            unlink(JOMRESPATH_BASE.JRDS.'temp'.JRDS.'jomrescss.css');
        }

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listTemplates'), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
