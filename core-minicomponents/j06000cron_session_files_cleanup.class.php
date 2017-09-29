<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.13
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000cron_session_files_cleanup
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $jomresConfig_secret = get_showtime('secret');
        $secret = base64_decode(jomresGetParam($_REQUEST, 'secret', ''));

        if ($secret == $jomresConfig_secret) {
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
		
			if ($jrConfig['session_handler'] == 'file') {
				$session_path = JOMRES_SESSIONS_ABSPATH;
				$files = scandir_getfiles_recursive($session_path);

				if (!empty($files)) {
					foreach ($files as $f) {
						if ($f != '.htaccess' && $f != 'web.config' && time() - filemtime($f) >= 24 * 60 * 60) { // 1 day
							unlink($f);
						}
					}
				}
			} else {
				//we`ll cleaan up all sessions older than 1 day
				$query = "DELETE FROM #__jomres_sessions WHERE `last_changed` <= DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 1 DAY)";
				doInsertSql($query, '');
			}
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
