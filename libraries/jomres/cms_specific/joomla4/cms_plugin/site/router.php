<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.6.0
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/
	defined('_JEXEC') or die('');

	/**
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 */

	if (!defined('_JOMRES_INITCHECK')) {
		define('_JOMRES_INITCHECK', 1);
	}

	if (!defined('JOMRES_ROOT_DIRECTORY')) {
		if (file_exists(dirname(__FILE__).'/../../jomres_root.php')) {
			require_once dirname(__FILE__).'/../../jomres_root.php';
		} else {
			define('JOMRES_ROOT_DIRECTORY', 'jomres');
		}
	}



	include_once __DIR__.DIRECTORY_SEPARATOR.'router'.DIRECTORY_SEPARATOR.'base.php';

	// You can have a custom router.php script. If one isn't found then system will default back to the Core router.php script
	// Searches first in the current Joomla template's /html/com_jomres/custom_code directory, then the remote_plugins directory (houses 3rd party plugins) and then finally it will look in the core-plugins directory.

	$app = JFactory::getApplication();
	$joomla_templateName = $app->getTemplate('template')->template;
	$path_to_template = JOMRESCONFIG_ABSOLUTE_PATH . "templates" .DIRECTORY_SEPARATOR. $joomla_templateName ;
	$override_path = $path_to_template .DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'com_jomres'.DIRECTORY_SEPARATOR.'custom_code'.DIRECTORY_SEPARATOR;

	$custom_router_found = false;
	if (file_exists($override_path.'router.php')) {
		$custom_router_found = true;
		include_once $override_path.'router.php';
	} else {
		$files = load_custom_router_scanAllDir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'remote_plugins');
		if (!empty($files)){
			foreach ($files as $filename) {
				$bang = explode(DIRECTORY_SEPARATOR , $filename);
				if (end($bang) === 'router.php') {
					$custom_router_found = true;
					include_once (JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'remote_plugins'.DIRECTORY_SEPARATOR.$filename);
					break;
				}
			}
		}

		if (!$custom_router_found) {
			$files = load_custom_router_scanAllDir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'core-plugins');
			if (!empty($files)){
				foreach ($files as $filename) {
					$bang = explode(DIRECTORY_SEPARATOR , $filename);
					if (end($bang) === 'router.php') {
						$custom_router_found = true;
						include_once (JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'core-plugins'.DIRECTORY_SEPARATOR.$filename);
						break;
					}
				}
			}
		}

	}

	if (!$custom_router_found) {
		include_once __DIR__.DIRECTORY_SEPARATOR.'router'.DIRECTORY_SEPARATOR.'router.php';
	}

	// Moved from older version of com_jomres/router/router.php into this file. Sets up the framework so that we can have custom routers
	require_once dirname(__FILE__).'/../../'.JOMRES_ROOT_DIRECTORY.'/framework.php';

	function JomresBuildRoute(&$query)
	{
		$router = new JomresRouter();

		return $router->build($query);
	}

	function JomresParseRoute($segments)
	{
		$router = new JomresRouter();

		return $router->parse($segments);
	}

	function load_custom_router_scanAllDir($dir) {
		$result = array();
		foreach(scandir($dir) as $filename) {
			if ($filename[0] === '.') continue;
			$filePath = $dir . DIRECTORY_SEPARATOR . $filename;
			if (is_dir($filePath)) {
				foreach (load_custom_router_scanAllDir($filePath) as $childFilename) {
					$result[] = $filename . DIRECTORY_SEPARATOR . $childFilename;
				}
			} else {
				$result[] = $filename;
			}
		}
		return $result;
	}