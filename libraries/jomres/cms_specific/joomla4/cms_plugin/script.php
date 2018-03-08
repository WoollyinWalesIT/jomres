<?php
// No direct access to this file
defined('_JEXEC') or die('');

class com_jomresInstallerScript //http://joomla.stackexchange.com/questions/5687/script-not-running-on-plugin-installation
{
    function preflight($type, $parent) 
	{
		@ignore_user_abort(true);
		@set_time_limit(0);

		//this is an uninstall, so we simply return true
		if ($type == 'uninstall') {
			return true;
		}
		
		// Clear Joomla system cache.
		/** @var JCache|JCacheController $cache */
		$cache = JFactory::getCache();
		$cache->clean('_system');

		// Remove all compiled files from APC cache.
		if (function_exists('apc_clear_cache')) {
			@apc_clear_cache();
		}
		
		if (!defined('_JOMRES_INITCHECK')) {
			define('_JOMRES_INITCHECK',1);
		}
		
		//define Jomres root dir
		if (!defined('JOMRES_ROOT_DIRECTORY')) {
			if (file_exists(JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php')) {
				require_once JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php';
			} else {
				define('JOMRES_ROOT_DIRECTORY', 'jomres');
			}
		}
		
		// Let's get on with the business of downloading Jomres. If we can`t get the latest version info (maybe becuase of a firewall preventing communication with updates.jomres4.net), we`ll abort by returning false
		try {
			$http = Joomla\CMS\Http\HttpFactory::getHttp();
		}
		catch (Exception $e) {
			JError::raiseWarning(null, 'Jomres requires minimum Joomla version 3.8 to run. Please update Joomla first.');
			
			return false;
		}
		
		$url = 'http://updates.jomres4.net/getlatest.php?includebeta=true';
		if ( file_exists('JOMRES_ROOT_DIRECTORY'. DIRECTORY_SEPARATOR .'configuration.php') ) {
			require_once JOMRESCONFIG_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'configuration.php';
			if ( $jrConfig['development_production'] == 'development' ) {
				$url .= '&development=1';
			}
		}

		$response = $http->get($url);

		if (strlen($response->body) == 0) {
			return false;
		}
		
		//all fine so far, let` start the download
		$archivename = JInstallerHelper::downloadPackage($response->body);
		
		//was the package downloaded?
		if (!$archivename)
		{
			JError::raiseWarning(null, 'Something went wrong downloading Jomres. Quitting');

			return false;
		}
		
		//clean the archive name
		$archivename = JPath::clean($archivename);

		//set paths
		$tmp_path = JFactory::getConfig()->get('tmp_path');
		
		if ($tmp_path == '') {
			$tmp_path = JPATH_ROOT . DIRECTORY_SEPARATOR . 'tmp';
		}
		
		$jomres_path = JPATH_ROOT . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY;
		$extraction_path = $tmp_path . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY;

		//Unzip Jomres
		try
		{
			$extract = JArchive::extract($tmp_path . DIRECTORY_SEPARATOR . $archivename, $extraction_path);
		}
		catch (Exception $e)
		{
			JError::raiseWarning(null, 'Something went wrong when trying to unzip the archive.');

			return false;
		}

		if (!$extract)
		{
			JError::raiseWarning(null, 'Something went wrong when unzipping the archive.');

			return false;
		}
		
		//move the extracted files to /jomres dir
		try 
		{
			JFolder::copy($extraction_path, $jomres_path, '', $force = true);
		} 
		catch (Exception $e)
		{
			JError::raiseWarning(null, 'Something went wrong when trying to move the extracted Jomres files.');

			return false;
		}
		
		//cleanup the extracted files
		try
		{
			JInstallerHelper::cleanupInstall($archivename, $extraction_path);
		}
		catch (Exception $e)
		{
			JError::raiseWarning(null, 'Something went wrong when trying to cleanup jomres tmp files.');

			return false;
		}
	}
     
    function install($parent) 
	{
		if (!defined('_JOMRES_INITCHECK')) {
			define('_JOMRES_INITCHECK',1);
		}

		//define Jomres root dir
		if (!defined('JOMRES_ROOT_DIRECTORY')) {
			if (file_exists(JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php')) {
				require_once JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php';
			} else {
				define('JOMRES_ROOT_DIRECTORY', 'jomres');
			}
		}

		try {
			require_once JPATH_ROOT . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY . '/libraries/jomres/classes/jomres_install.class.php';

			$jomres_install = new jomres_install('install');
			
			$messages = $jomres_install->getMessages();

			foreach ($messages as $m) {
				JError::raiseWarning(null, $m);
			}
		}
		catch (Exception $e) {
			JError::raiseWarning(null, 'Something went wrong when running the Jomres installation script.');

			return false;
		}
	}
 
    function update($parent) 
	{
		if (!defined('_JOMRES_INITCHECK')) {
			define('_JOMRES_INITCHECK',1);
		}

		//define Jomres root dir
		if (!defined('JOMRES_ROOT_DIRECTORY')) {
			if (file_exists(JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php')) {
				require_once JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php';
			} else {
				define('JOMRES_ROOT_DIRECTORY', 'jomres');
			}
		}

		try {
			require_once JPATH_ROOT . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY . '/libraries/jomres/classes/jomres_install.class.php';

			$jomres_install = new jomres_install('update');
			
			$messages = $jomres_install->getMessages();

			foreach ($messages as $m) {
				JError::raiseWarning(null, $m);
			}
		}
		catch (Exception $e) {
			JError::raiseWarning(null, 'Something went wrong when running the Jomres installation script.');

			return false;
		}
	}
 
    function uninstall($parent) 
	{
		if (!defined('_JOMRES_INITCHECK')) {
			define('_JOMRES_INITCHECK',1);
		}

		//define Jomres root dir
		if (!defined('JOMRES_ROOT_DIRECTORY')) {
			if (file_exists(JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php')) {
				require_once JPATH_ROOT . DIRECTORY_SEPARATOR . 'jomres_root.php';
			} else {
				define('JOMRES_ROOT_DIRECTORY', 'jomres');
			}
		}

		try {
			require_once JPATH_ROOT . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY . '/libraries/jomres/classes/jomres_install.class.php';

			$jomres_install = new jomres_install('uninstall');
			
			$messages = $jomres_install->getMessages();

			foreach ($messages as $m) {
				JError::raiseWarning(null, $m);
			}
		}
		catch (Exception $e) {
			JError::raiseWarning(null, 'Something went wrong when running the Jomres installation script.');

			return false;
		}
	}
 
    function postflight($type, $parent) 
	{
		//
	}
}
