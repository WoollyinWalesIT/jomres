<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j16000run_installation_scripts
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		define('JOMRES_INSTALLER',1);
        if (!empty($MiniComponents->miniComponentDirectories)) {
            echo '<div class="alert alert-info">'.jr_gettext('_JOMRES_RUN_PLUGIN_INSTALLATION_SCRIPTS_INFO','_JOMRES_RUN_PLUGIN_INSTALLATION_SCRIPTS_INFO').'</div>';
            foreach ($MiniComponents->miniComponentDirectories as $plugin_directory) {
                $dir_contents = scandir($plugin_directory);
                if (!empty($dir_contents)) {
                    if (in_array('plugin_install.php',$dir_contents)) {
                       echo 'requiring file '.$plugin_directory.'plugin_install.php'.'<br/>';
                       require_once($plugin_directory.'plugin_install.php');

                    }
                }
            }

        }
        echo 'Finished';
	}

  

	function getRetVals()
	{
		return null;
	}
}
