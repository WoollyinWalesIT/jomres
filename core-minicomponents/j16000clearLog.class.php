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

class j16000clearLog
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $logFiles = get_showtime('logFiles');
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $logfile = jomresGetParam($_REQUEST, 'logfile', '');
        echo 'Attempting to delete '.JOMRES_SYSTEMLOG_PATH.$logFiles[ $logfile ].'<br/>';
        if (file_exists(JOMRES_SYSTEMLOG_PATH.$logFiles[ $logfile ]) && is_writable(JOMRES_SYSTEMLOG_PATH.$logFiles[ $logfile ])) {
            if (unlink(JOMRES_SYSTEMLOG_PATH.$logFiles[ $logfile ])) {
                $msg = 'Deleted';
            } else {
                $msg = 'Not deleted. Check that the web server can has write access';
            }
        }
        echo $msg;
        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=showLog&logfile='.$logfile), $msg);
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
