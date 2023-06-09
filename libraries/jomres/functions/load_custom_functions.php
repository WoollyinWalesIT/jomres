<?php

	/**
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.7.1
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/*
	 * This script allows you to have customised versions of Jomres functions in your own 'custom_functions.php' file
	 *
	 * custom_functions.php file(s) are included before the Jomres functions.php script, and before the CMS specific functions script.
	 *
	 * Priorities :
	 * First it will attempt to find custom_functions.php in the theme's/template's  html/com_jomres/custom_code directory.
	 * Next in jomres/core-plugins
	 * Finally in jomres/remote_plugins
	 *
	 * All Jomres functions that users are likely to want to override are wrapped in an if (!function_exists('xxx')) check, so you can safely have your custom versions of functions without needing to modify the Core.
	 *
	 * Joomla : Users with multiple templates in their Joomla installation should have only one copy of custom_functions.php in their Templates directories.
	 *
	 * Tests with Postman suggests that the directory searching adds appx 100ms to the time it takes for a response to be generated. I'll monitor this. If it causes problems I'll use the registry regeneration process to create a registry of custom_functions files like we do with minicomponent scripts and classes.
	 *
	 */


if (!defined('JOMRES_OVERRIDE_PATH')) {
    if (_JOMRES_DETECTED_CMS !== 'wordpress') {

        if (!defined('API_STARTED')) {
            $app = JFactory::getApplication();
            $joomla_templateName = $app->getTemplate('template')->template;
        } else { // Joomla will throw an error if we try to do this via the api, so on API calls, we'll have to search for the file "manually"
            $files = load_custom_functions_scanAllDir(JPATH_ROOT.'templates');
            if (!empty($files)){ // I'll be amazed if it is
                foreach ($files as $filename) {
                    $bang = explode(DIRECTORY_SEPARATOR , $filename);
                    if (end($bang) === 'custom_functions.php') {
                        array_pop($bang);
                        $joomla_templateName = $bang[0];
                    }
                }
            }
        }
        $path_to_template = JOMRESCONFIG_ABSOLUTE_PATH . "templates" .JRDS. $joomla_templateName ;
        $override_path = $path_to_template .JRDS . 'html' . JRDS . 'com_jomres'.JRDS;
    } else {
        $path_to_template =  get_theme_file_path();
        $override_path = $path_to_template . JRDS . 'html' . JRDS . 'com_jomres'.JRDS;
    }

    define('JOMRES_OVERRIDE_PATH',$override_path);


    if (file_exists($override_path.JRDS.'custom_code'.JRDS.'custom_functions.php')) {
        require_once($override_path.JRDS.'custom_code'.JRDS.'custom_functions.php');
    }

	$files = load_custom_functions_scanAllDir(JOMRES_REMOTEPLUGINS_ABSPATH);
	if (!empty($files)){
		foreach ($files as $filename) {
			$bang = explode(DIRECTORY_SEPARATOR , $filename);
			if (end($bang) === 'custom_functions.php') {
				require_once ($filename);
			}
		}
	}

    $files = load_custom_functions_scanAllDir(JOMRES_COREPLUGINS_ABSPATH);
    if (!empty($files)){
        foreach ($files as $filename) {
            $bang = explode(DIRECTORY_SEPARATOR , $filename);
            if (end($bang) === 'custom_functions.php') {
                require_once ($filename);
            }
        }
    }


}

function load_custom_functions_scanAllDir($dir) {
    $result = array();

	if (!is_dir($dir)) return $result;

    foreach(scandir($dir) as $filename) {
        if ($filename[0] === '.') continue;
        $filePath = $dir . DIRECTORY_SEPARATOR . $filename;
        if (is_dir($filePath)) {
            foreach (load_custom_functions_scanAllDir($filePath) as $childFilename) {
                $result[] = $filename . DIRECTORY_SEPARATOR . $childFilename;
            }
        } else {
            $result[] = $filename;
        }
    }
    return $result;
}