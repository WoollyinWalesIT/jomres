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

class j16000enable_usage_reporting
{
    public function __construct($componentArgs)
    {

        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $enable_usage = (int) jomresGetParam($_REQUEST, 'enable_usage', '0');
        saveSiteConfig(array('send_tracking_data' => $enable_usage));

        file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'usage_reporting_request.txt', ''); // So that we don't constantly nag for this setting

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN), 'Configuration saved');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
