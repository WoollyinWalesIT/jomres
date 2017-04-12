<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000save_languageChoiceSelection
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        // A slightly ugly way of doing things, but it saves us from having to make yet another database enquiry, this time to find out the available languages.
        $language_selection = jomresGetParam($_POST, 'idarray', array());

        $jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
        $jomres_language->set_active_languages($language_selection);

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=chooseLanguages'), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
