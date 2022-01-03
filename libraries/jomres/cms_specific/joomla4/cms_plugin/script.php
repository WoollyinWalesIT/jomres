<?php
// No direct access to this file

// Joomla 4

defined('_JEXEC') or die('');

use Joomla\Archive\Archive;
	
	/**
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 */

class com_jomresInstallerScript //http://joomla.stackexchange.com/questions/5687/script-not-running-on-plugin-installation
{	
	/**
	 * 
	 *
	 *
	 */

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
		
		//check disk space
		/* $disk_free_space = $this->free_space();

		if ( $disk_free_space < 300 ) {
			JError::raiseWarning(null, 'There is not enough disk space available to download and extract Jomres.');
			
			return false;
		} */
		
		//set the jomres download url
		$url = 'http://updates.jomres4.net/getlatest.php?includebeta=true';
		$nightly_url = 'http://updates.jomres4.net/nightly/';
		
		$debugging = JFactory::getConfig()->get('debug');
		$nightly = false;
		
		if ( $debugging == '1' ) {
			$nightly = true;
		} elseif ( file_exists(JPATH_ROOT . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'configuration.php') ) {
			include JPATH_ROOT . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'configuration.php';
			
			if ( $jrConfig['development_production'] == 'development' ) {
				$nightly = true;
			}
		}

		//get the latest jomres version download url
		$response = $http->get($url);

		if (strlen($response->body) == 0) {
			return false;
		}

		//all fine so far, let` start the download
		if (!$nightly) {
			$archivename = JInstallerHelper::downloadPackage($response->body);
		} else {
			$archivename = JInstallerHelper::downloadPackage($nightly_url);
		}
		
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
		
		//create /tmp/jomres dir
		try 
		{
			JFolder::create( $extraction_path );
		} 
		catch (Exception $e)
		{
			JError::raiseWarning(null, 'Something went wrong when trying to create dir ' . $extraction_path);

			return false;
		}
		
		//create /jomres dir
		try 
		{
			JFolder::create( $jomres_path );
		} 
		catch (Exception $e)
		{
			JError::raiseWarning(null, 'Something went wrong when trying to create dir ' . $jomres_path . '. Using FTP, create the directory manually then re-run the installer, many times this will solve the problem.');

			return false;
		}

		//Unzip Jomres
		try
		{
			$archive = new Archive;

			$extract = $archive->extract($tmp_path . DIRECTORY_SEPARATOR . $archivename, $extraction_path);
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
	 	
	/**
	 * 
	 *
	 *
	 */

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
 	
	/**
	 * 
	 *
	 *
	 */

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
 	
	/**
	 * 
	 *
	 *
	 */

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
 	
	/**
	 * 
	 *
	 *
	 */

	function postflight($type, $parent) 
	{
		//
	}
		
	/**
	 * 
	 *
	 *
	 */

	function free_space( $path = JPATH_ROOT ) 
	{
		$space = @disk_free_space( $path );
		
		if ( $space === false || is_null( $space ) ) {
			return 0;
		}
		
		//convert to MB
		$space = round( $space / 1024 / 1024 );
		
		return $space;
	}
}
