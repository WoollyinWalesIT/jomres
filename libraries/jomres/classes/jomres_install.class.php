<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
class jomres_install
{
	protected $messages;
	
	protected $action;
	
	protected $trashtables;
	
	protected $legacy;
	
	protected $siteConfig;
	
	protected $jrConfig;
	
	protected $filesystem;
	
	protected $allowed_image_extensions;
	
	protected $minicomponent_registry;
	
	/**
	 *
	 *
	 *
	 */

	public function __construct($action = 'install', $trashtables = false, $legacy = false)
	{
		//first let`s check the php version
		if (version_compare(phpversion(), '5.6', '<')) {
			throw new Exception('Oops, it looks like you`re running a version of PHP lower than 5.6. Jomres requires at least PHP 7.4 and will not run on earlier versions');
		}

		if (!defined('AUTO_UPGRADE')) {
			define('AUTO_UPGRADE', 1); //TODO: rename this
		}
		
		
		if (!defined('JRDS')) {
			define('JRDS', DIRECTORY_SEPARATOR);
		}

		//actions can be install, uninstall, update
		$this->action = $action;
		
		//trash tables on uninstall or not
		$this->trashtables = $trashtables;
		
		//perform legacy update routines
		$this->legacy = $legacy;
		
		//allowed image file extensions
		//this is used when copying files from jomres core images dir to uploadedimages dir, so we can skip index.html, or files of some other types
		$this->allowed_image_extensions = array('jpg', 'jpeg', 'gif', 'png');
		
		//messages array
		$this->messages = array();
		
		//create jomres root dir file (if doesn`t exist) and define jomres root dir
		//if we uninstall it will be deleted later
		$this->createJomresRootDirFile();
		
		//jomres integration.php, so we can use jomres features
		require_once __DIR__ .  '/../../../integration.php';
		
		//if this cms is WordPress and we`re running the installer from Jomres itself,
		//the mysqli db connection the installer uses won`t be available, so we`ll have to manually initialize the db connection.
		//TODO: try to use $wpdb insetad
		if (this_cms_is_wordpress()) {
			$jomres_database = jomres_singleton_abstract::getInstance('jomres_database');
			$jomres_database->init();
		}
		
		//jomres site config
		$this->siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$this->jrConfig = $this->siteConfig->get();

		//trashtables can be true (drop all jomres tables) or false (keep tables when uninstalling)
		if ($this->jrConfig['delete_all_data_on_uninstall'] == '1') {
			$this->trashtables = true;
		}
		
		//jomres filesystem
		//mount the site root dir, not the jomres dir, so we can have access to jomres_root.php file if we need to create or delete it
		$this->filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem', JOMRESCONFIG_ABSOLUTE_PATH)->getFilesystem();
		
		//minicomponents registry
		$this->minicomponent_registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
		
		//jomres version checks, to double check the installer action
		if (!$this->checkJomresVersion()) {
			return false;
		}

		//it`s showtime
		switch ($this->action) {
			case 'install':
				$this->install();
				break;
			case 'update':
				$this->update();
				break;
			case 'uninstall':
				$this->uninstall();
				break;
			default:
				break;
		}
	}
	
	//jomres version checks, to double check the installer action
		
	/**
	 *
	 *
	 *
	 */

	private function checkJomresVersion()
	{
		//if we uninstall, just return true
		if ($this->action == 'uninstall') {
			return true;
		}

		//BC: if Jomres db version is 0 (versions older than 9.10.0 don`t have this setting), Jomres is either not installed, or an update from a version older than 9.10.0 (when the new installer was introduced)
		if ($this->jrConfig['jomres_db_version'] == '0') { //triggers only on updates from older versions than 9.10.0 when this setting was introduced.
			if ($this->jomresTablesAndDataExist()) {
				$this->action = 'update';
				
				//perform legacy update routines too
				$this->legacy = true;
			} else {
				$this->action = 'install';
			}
			
			return true;
		} else { //the new way
			//file version is higher than the db version, perform update routines
			if (version_compare($this->jrConfig['version'], $this->jrConfig['jomres_db_version'], '>')) {
				if ($this->jomresTablesAndDataExist()) {
					//jomres tables exist, perform update
					$this->action = 'update';
				} else {
					//unusual case when files exist but db tables are not
					$this->action = 'install';
				}
				
				return true;
			}

			//file version is lower than the db version, this is an error, so do nothing and better ask for support
			//TODO: maybe just update and be done with it? the code is here, just replace actions
			if (isset($_REQUEST['task']) && $_REQUEST['task'] == 'updates') { // This class wasn't built to handle the updater script, so we'll just go ahead and update as Aladar suggested
				$this->action = 'update';
			} else {
				if (version_compare($this->jrConfig['version'], $this->jrConfig['jomres_db_version'], '<')) {
					if ($this->jomresTablesAndDataExist()) {
						//jomres tables exist, perform update
						$this->action = 'donothing';
					} else {
						//unusual case when files exist but db tables are not
						$this->action = 'donothing';
					}

					throw new Exception('Error, your Jomres plugin version is lower than the Jomres database version, are you sure you`re not downgrading?');
				}

				//if versions match just run update routines again
				if (version_compare($this->jrConfig['version'], $this->jrConfig['jomres_db_version'], '=')) {
					if ($this->jomresTablesAndDataExist()) {
						//jomres tables exist, perform update
						$this->action = 'update';
					} else {
						//unusual case when files exist but db tables are not
						$this->action = 'install';
					}
				}
			}
		}
		
		return true;
	}
	
	//check if jomres is installed by trying to select data from #__jomres_propertys table
	//if db tables exist, it means jomres is installed or was installed previously
		
	/**
	 *
	 *
	 *
	 */

	private function jomresTablesAndDataExist()
	{
		try {
			$query = "SELECT `table_name` FROM information_schema.tables WHERE 
						`table_schema` = '".get_showtime('db')."'
						AND (`table_name` LIKE '#__jomres_%' 
						OR `table_name` LIKE '#__jomcomp_%' 
						OR `table_name` LIKE '#__jomresportal_%') ";

			$result = doSelectSql($query);
			
			if (empty($result)) {
				//jomres tables don`t exist
				return false;
			}
			
			//if tables exist, let`s check if at least a property is created, if not, we`ll consider that Jomres is not installed
			$query = "SELECT * FROM `#__jomres_propertys` LIMIT 1 ";
			$result = doSelectSql($query);
			
			if (empty($result)) {
				//jomres data doesn`t exist
				return false;
			}
		} catch (Exception $e) {
			return false;
		}
		
		//jomres tables and data exists
		return true;
	}
	
	//fresh installs
		
	/**
	 *
	 *
	 *
	 */

	private function install()
	{
		try {
			//cms specific pre-installation
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_pre_installation.php')) {
				include _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_pre_installation.php';
			}
			
			//save initial configuration.php
			$this->siteConfig->save_config();
			
			//check and create dirs if necessary
			$this->createDirs();
			
			//copy sample images and icons
			$this->copySampleImages();
			
			//create db tables
			$this->createDefaultDbTables();
			
			//rebuild registry before seeding content
			//importing images to db requires the minicomponent registry to discover resource types
			$this->minicomponent_registry->regenerate_registry();
			
			//remove obsolete files
			$this->remove_obsolete_files();
			
			//seed default/demo content
			$this->seedDefaultContent();
			
			//cms specific installation
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_installation.php')) {
				include _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_installation.php';
			}
			
			//run plugins installation scripts
			//$this->installPlugins();

			$this->siteConfig->update_setting('compatability_property_configuration', 0);

			$this->siteConfig->update_setting('initial_setup_done', 0);
			$this->siteConfig->update_setting('admin_options_level', 0);

			//update db version so we can check this on future updates or db sanity check
			if (empty($this->messages)) {
				$this->siteConfig->update_setting('jomres_db_version', $this->jrConfig['version']);
			}
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	//update existing installation
		
	/**
	 *
	 *
	 *
	 */

	private function update()
	{
		try {
			//cms specific pre-installation
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_pre_installation.php')) {
				include _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_pre_installation.php';
			}
			
			//save initial configuration.php
			//this file is already created from when installing Jomres, but we`ll just save it again to be sure
			$this->siteConfig->save_config();
			
			//check and create dirs if necessary
			//they were already created when installing the first time, but let`s double check
			$this->createDirs();
			
			//create default db tables
			//tables should already exist, so most probably they won`t need to be created again
			$this->createDefaultDbTables();
			
			//rebuild registry before seeding content
			//importing images to db requires the minicomponent registry to discover resource types
			$this->minicomponent_registry->regenerate_registry();
			
			//remove obsolete files
			$this->remove_obsolete_files();
			
			//run legacy update routines
			//these are executed if we`re updating from a Jomres version lower than 9.10.0
			if ($this->legacy) {
				$this->runLegacyUpdates();
			}

			//run update routines
			$this->runUpdates();
			
			//cms specific update
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_upgrade.php')) {
				include _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_upgrade.php';
			}
			
			//run plugins installation scripts
			//plugins should already be installed, so most probably their tables won`t need to be created again
			//$this->installPlugins();

			$this->siteConfig->update_setting('initial_setup_done', 1);
			if (!isset($this->jrConfig['admin_options_level'])) { // The previous version of Jomres was pre-9.24 so the admin_options_level setting will not exist, we'll give full access here, but if the setting already exists we will not change it
				$this->siteConfig->update_setting('admin_options_level', 2);
			}

			//update db version so we can check this on future updates or sanity checks
			if (empty($this->messages)) {
				$this->siteConfig->update_setting('jomres_db_version', $this->jrConfig['version']);
			}
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	//uninstall action
		
	/**
	 *
	 *
	 *
	 */

	private function uninstall()
	{
		try {
			if (!$this->trashtables) {
				return true;
			}
			
			//drop all jomres tables
			$this->dropDbTables();
			
			//delete the jomres dir
			$this->deleteFiles();
			
			return true;
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	//create jomres root dir file and define jomres root dir
		
	/**
	 *
	 *
	 *
	 */

	private function createJomresRootDirFile()
	{
		$path = dirname(dirname(dirname(dirname(__FILE__))));
		$dir = basename($path);
		$dir = basename($dir);

		$file_contents = "<?php
defined('_JOMRES_INITCHECK') or die('');
if (!defined('JOMRES_ROOT_DIRECTORY')) {
	define('JOMRES_ROOT_DIRECTORY' , '".$dir."');
}
";
		/*if (!file_exists(dirname($path) . '/jomres_root.php')) {
			@file_put_contents(dirname($path) . '/jomres_root.php', $file_contents);
		}

		if (file_exists(dirname($path) . '/jomres_root.php')) {
			require_once(dirname($path) . '/jomres_root.php');
		}*/
		
		if (!defined('JOMRES_ROOT_DIRECTORY')) {
			define('JOMRES_ROOT_DIRECTORY', 'jomres');
		}

		return true;
	}

	//check and create jomres dirs
		
	/**
	 *
	 *
	 *
	 */

	private function createDirs()
	{
		//sessions dir
		if (!is_dir(JOMRES_SESSIONS_ABSPATH)) {
			if (!@mkdir(JOMRES_SESSIONS_ABSPATH)) {
				throw new Exception('Error, unable to make folder '.JOMRES_SESSIONS_ABSPATH." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.");
			}
		}

		//temp dir
		if (!is_dir(JOMRES_TEMP_ABSPATH)) {
			if (!@mkdir(JOMRES_TEMP_ABSPATH)) {
				throw new Exception('Error, unable to make folder '.JOMRES_TEMP_ABSPATH." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.");
			}
		}

		//cache dir
		if (!is_dir(JOMRES_CACHE_ABSPATH)) {
			if (!@mkdir(JOMRES_CACHE_ABSPATH)) {
				throw new Exception('Error, unable to make folder '.JOMRES_CACHE_ABSPATH." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.");
			}
		}

		//updates dir
		if (!is_dir(JOMRES_UPDATES_ABSPATH)) {
			if (!@mkdir(JOMRES_UPDATES_ABSPATH)) {
				throw new Exception('Error, unable to make folder '.JOMRES_UPDATES_ABSPATH." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.");
			}
		}
		
		//core plugins dir
		if (!is_dir(JOMRES_COREPLUGINS_ABSPATH)) {
			if (!@mkdir(JOMRES_COREPLUGINS_ABSPATH)) {
				throw new Exception('Error, unable to make folder '.'core-plugins'.JOMRES_COREPLUGINS_ABSPATH." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.");
			}
		}

		//remote_plugins dir
		if (!is_dir(JOMRES_REMOTEPLUGINS_ABSPATH)) {
			if (!@mkdir(JOMRES_REMOTEPLUGINS_ABSPATH)) {
				throw new Exception('Error, unable to make folder '.'remote_plugins'.JOMRES_REMOTEPLUGINS_ABSPATH." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.");
			}
		}

		//uploadedimages dir
		if (!is_dir(JOMRES_IMAGELOCATION_ABSPATH)) {
			if (!@mkdir(JOMRES_IMAGELOCATION_ABSPATH)) {
				throw new Exception('Error, unable to make folder '.JOMRES_IMAGELOCATION_ABSPATH." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.");
			}
		}

		return true;
	}
	
	//create fresh install db tables
		
	/**
	 *
	 *
	 *
	 */

	private function createDefaultDbTables()
	{
		try {
			foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'tables'.JRDS.'*.php') as $filename) {
				include $filename;
			}
		} catch (Exception $e) {
			throw new Exception('Error, unable to create default db tables. '.$e->getMessage());
		}
	}
	
	//seed fresh install tales with default content
		
	/**
	 *
	 *
	 *
	 */

	private function seedDefaultContent()
	{
		try {
			foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'seeds'.JRDS.'*.php') as $filename) {
				include $filename;
			}
		} catch (Exception $e) {
			throw new Exception('Error, unable to seed default content. '.$e->getMessage());
		}
	}
	
	//run all plugins installation scripts
		
	/**
	 *
	 *
	 *
	 */

	private function installPlugins()
	{
		//needed by plugin installation scripts to allow execution
		define('JOMRES_INSTALLER', 1);
		
		//search all core-plugins and run their installation scripts
		try {
			foreach (glob(JOMRESPATH_BASE.'core-plugins'.JRDS.'*', GLOB_ONLYDIR) as $dir) {
				if (file_exists($dir.JRDS.'plugin_install.php')) {
					include $dir.JRDS.'plugin_install.php';
				}
			}
		} catch (Exception $e) {
			throw new Exception('Error, unable to run core plugins installation scripts. '.$e->getMessage());
		}
		
		//search all core-plugins and run their installation scripts
		try {
			foreach (glob(JOMRESPATH_BASE.'remote_plugins'.JRDS.'*', GLOB_ONLYDIR) as $dir) {
				if (file_exists($dir.JRDS.'plugin_install.php')) {
					include $dir.JRDS.'plugin_install.php';
				}
			}
		} catch (Exception $e) {
			throw new Exception('Error, unable to run remote plugins installation scripts. '.$e->getMessage());
		}
	}
	
	//update routines
		
	/**
	 *
	 *
	 *
	 */

	private function runUpdates()
	{
		//search all update dirs, compare their names with the jomres_db_version (latest version to which was updated) and if there are new versions, perform updates
		try {
			foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'updates'.JRDS.'*', GLOB_ONLYDIR) as $dir) {
				if (version_compare(basename($dir), $this->jrConfig['jomres_db_version'], '>')) {
					foreach (glob($dir.JRDS.'*.php') as $filename) {
						include $filename;
					}
				}
			}
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	//legacy update routines
		
	/**
	 *
	 *
	 *
	 */

	private function runLegacyUpdates()
	{
		try {
			foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'legacy'.JRDS.'*.php') as $filename) {
				include $filename;
			}
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	//copy sample images on fresh installs
		
	/**
	 *
	 *
	 *
	 */

	private function copySampleImages()
	{
		//copy property feature icons
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/pfeatures/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/')) {
			throw new Exception('Error, unable to copy property feature icons');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/pfeatures/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/medium/')) {
			throw new Exception('Error, unable to copy property feature medium icons');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/pfeatures/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/thumbnail/')) {
			throw new Exception('Error, unable to copy property feature thumbnail icons');
		}
		
		//copy room type icons
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/rmtypes/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/')) {
			throw new Exception('Error, unable to copy room type icons');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/rmtypes/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/medium/')) {
			throw new Exception('Error, unable to copy medium room type medium icons');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/rmtypes/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/thumbnail/')) {
			throw new Exception('Error, unable to copy small room type medium icons');
		}
		
		//copy markers
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/markers/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/markers/')) {
			throw new Exception('Error, unable to copy marker icons');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/markers/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/markers/medium/')) {
			throw new Exception('Error, unable to copy marker medium icons');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/markers/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/markers/thumbnail/')) {
			throw new Exception('Error, unable to copy marker thumbnail icons');
		}
	}
	
	//copy utility function
		
	/**
	 *
	 *
	 *
	 */

	private function performCopy($source = '', $target = '')
	{
		if ($source == '' || $target == '') {
			return false;
		}
		
		$contents = $this->filesystem->listContents('local://'.$source);

		foreach ($contents as $fileNode) {
			if (in_array(strtolower($fileNode['extension']), $this->allowed_image_extensions)) {
				try {
					if (! $this->filesystem->has('local://'.$target.$fileNode['basename'])) {
						$this->filesystem->copy('local://'.$fileNode['path'], 'local://'.$target.$fileNode['basename']);
					}
				} catch (Exception $e) {
					throw new Exception('Error, unable to copy ' . 'local://'.$fileNode['path'] . ' to ' . 'local://'.$target.$fileNode['basename']);
				}
			}
		}
		
		return true;
	}
	
	//remove obsolete files and regenerate registry
		
	/**
	 *
	 *
	 *
	 */

	private function remove_obsolete_files()
	{
		jr_import('jomres_obsolete_file_handling');
		$jomres_obsolete_file_handling = new jomres_obsolete_file_handling();
		
		//remove obsolete files
		$jomres_obsolete_file_handling->remove_obsolete_files();
		
		//regenerate registry (again)
		$this->minicomponent_registry->regenerate_registry();
		
		return true;
	}
	
	//drop jomres tables
		
	/**
	 *
	 *
	 *
	 */

	private function dropDbTables()
	{
		$query = "SELECT `table_name` FROM information_schema.tables WHERE 
					`table_schema` = '".get_showtime('db')."'
					AND (`table_name` LIKE '#__jomres_%' 
					OR `table_name` LIKE '#__jomcomp_%' 
					OR `table_name` LIKE '#__jomresportal_%') ";
		
		$result = doSelectSql($query);

		foreach ($result as $r) {
			$query = 'DROP TABLE IF EXISTS '.$r->TABLE_NAME;
			if (!doInsertSql($query, '')) {
				throw new Exception('Error, unable to drop table '.$r->TABLE_NAME);
			}
		}

		return true;
	}
	
	//delete all jomres files
		
	/**
	 *
	 *
	 *
	 */

	private function deleteFiles()
	{
		//delete jomres dir
		if (is_dir(JOMRES_ROOT_DIRECTORY)) {
			$this->filesystem->deleteDir('local://'.JOMRES_ROOT_DIRECTORY);
		}

		
		//delete jomres_root file
		if ($this->filesystem->exists('local://jomres_root.php')) {
			$this->filesystem->delete('local://jomres_root.php');
		}

		
		return true;
	}
	
	//build installation error messages
		
	/**
	 *
	 *
	 *
	 */

	public function setMessage($message = '', $class_style = 'info')
	{
		if (trim($message) == '') {
			return false;
		}
		
		$class = 'alert-'.$class_style;
		
		$this->messages[] = '<p class="alert '.$class.'">'.$message.'</p>';
	}
	
	//get installation messages/errors
		
	/**
	 *
	 *
	 *
	 */

	public function getMessages()
	{
		return $this->messages;
	}
}
