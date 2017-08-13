<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000rerun_plugin_installer_script
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $plugin = jomresGetParam($_REQUEST, 'plugin', '');
		
		foreach ($MiniComponents->registeredClasses as $trigger=>$plugins) {
			foreach ( $plugins as $plugin_name => $plugin_info ) {
				if ($plugin_name == $plugin ) {
					$path = $MiniComponents->registeredClasses[$trigger][$plugin_name]['filepath'];
					if (file_exists($path."plugin_install.php")) {
						define("JOMRES_INSTALLER",1);
						require($path."plugin_install.php");
						jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins'), 'Install script has been re-run');
					} else {
						echo "Oops, the file ".$path."plugin_install.php"." does not exist";
					}
				}
			}
		}
		
/* 		if (file_exists()) {
			
		} */

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins'), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
