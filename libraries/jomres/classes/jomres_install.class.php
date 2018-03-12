<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

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

	public function __construct($action = 'install', $trashtables = false, $legacy = false)
    {
		//first let`s check the php version
		if (version_compare(phpversion(), '5.6', '<')) {
			$this->setMessage('Oops, it looks like you`re running a version of PHP lower than 5.6. Jomres requires at least PHP 5.6 and will not run on earlier versions', 'danger');

			return false;
		}

		define('AUTO_UPGRADE', 1); //TODO: rename this
		
		//define('PROD_DEV', 'development');
		define('PROD_DEV', 'production');
		
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
	private function checkJomresVersion()
	{
		//if we uninstall, just return true
		if ($this->action == 'uninstall') {
			return true;
		}

		//BC: if Jomres db version is 0 (versions older than 9.10.0 don`t have this setting), Jomres is either not installed, or an update from a version older than 9.10.0 (when the new installer was introduced)
		if ($this->jrConfig['jomres_db_version'] == '0') { //triggers only on updates from older versions than 9.10.0 when this setting was introduced.
			if ($this->jomresTablesExist()) {
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
				
				if ($this->jomresTablesExist()) {
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
			if (version_compare($this->jrConfig['version'], $this->jrConfig['jomres_db_version'], '<')) {
				if ($this->jomresTablesExist()) {
					//jomres tables exist, perform update
					$this->action = 'donothing';
				} else {
					//unusual case when files exist but db tables are not
					$this->action = 'donothing';
				}
				
				$this->setMessage('Error, your Jomres plugin version is lower than the Jomres database version, are you sure you`re not downgrading?', 'danger');
				
				return false;
			}

			//if versions match just run update routines again
			if (version_compare($this->jrConfig['version'], $this->jrConfig['jomres_db_version'], '=')) {
				if ($this->jomresTablesExist()) {
					//jomres tables exist, perform update
					$this->action = 'update';
				} else {
					//unusual case when files exist but db tables are not
					$this->action = 'install';
				}
			}
		}
		
		return true;
	}
	
	//check if jomres is installed by trying to select data from #__jomres_propertys table
	//if db tables exist, it means jomres is installed or was installed previously
	private function jomresTablesExist()
	{
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
		
		//jomres tables exist
		return true;
	}
	
	//fresh installs
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
			$this->installPlugins();
			
			//set to production
			$this->siteConfig->update_setting('development_production', PROD_DEV);
			
			//update db version so we can check this on future updates or db sanity check
			if (empty($this->messages)) {
				$this->siteConfig->update_setting('jomres_db_version', $this->jrConfig['version']);
			}
		}
		catch (Exception $e) {
			$this->setMessage($e->getMessage(), 'danger');
			
			return false;
		}
	}
	
	//update existing installation
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
			$this->installPlugins();
			
			//set to production
			$this->siteConfig->update_setting('development_production', PROD_DEV);
			
			//update db version so we can check this on future updates or sanity checks
			if (empty($this->messages)) {
				$this->siteConfig->update_setting('jomres_db_version', $this->jrConfig['version']);
			}
		} 
		catch (Exception $e) {
			$this->setMessage($e->getMessage(), 'danger');
			
			return false;
		}
	}
	
	//uninstall action
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
		} 
		catch (Exception $e) {
			$this->setMessage($e->getMessage(), 'danger');
			
			return false;
		}
	}
	
	//create jomres root dir file and define jomres root dir
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
		if (!file_exists(dirname($path) . '/jomres_root.php')) {
			@file_put_contents(dirname($path) . '/jomres_root.php', $file_contents);
		}

		if (file_exists(dirname($path) . '/jomres_root.php')) {
			require_once(dirname($path) . '/jomres_root.php');
		}
		
		if (!defined('JOMRES_ROOT_DIRECTORY')) {
			define('JOMRES_ROOT_DIRECTORY', 'jomres');
		}

		return true;
	}

	//check and create jomres dirs
    private function createDirs()
    {
		//sessions dir
		if (!is_dir(JOMRES_SESSIONS_ABSPATH)) {
			if (!@mkdir(JOMRES_SESSIONS_ABSPATH)) {
				$this->setMessage('Error, unable to make folder '.JOMRES_SESSIONS_ABSPATH." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}

		//temp dir
		if (!is_dir(JOMRES_TEMP_ABSPATH)) {
			if (!@mkdir(JOMRES_TEMP_ABSPATH)) {
				$this->setMessage('Error, unable to make folder '.JOMRES_TEMP_ABSPATH." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}

		//cache dir
		if (!is_dir(JOMRES_CACHE_ABSPATH)) {
			if (!@mkdir(JOMRES_CACHE_ABSPATH)) {
				$this->setMessage('Error, unable to make folder '.JOMRES_CACHE_ABSPATH." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}

		//updates dir
		if (!is_dir(JOMRES_UPDATES_ABSPATH)) {
			if (!@mkdir(JOMRES_UPDATES_ABSPATH)) {
				$this->setMessage('Error, unable to make folder '.JOMRES_UPDATES_ABSPATH." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}
		
		//core plugins dir
		if (!is_dir(JOMRES_COREPLUGINS_ABSPATH)) {
			if (!@mkdir(JOMRES_COREPLUGINS_ABSPATH)) {
				$this->setMessage('Error, unable to make folder '.'core-plugins'.JOMRES_COREPLUGINS_ABSPATH." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}

		//remote_plugins dir
		if (!is_dir(JOMRES_REMOTEPLUGINS_ABSPATH)) {
			if (!@mkdir(JOMRES_REMOTEPLUGINS_ABSPATH)) {
				$this->setMessage('Error, unable to make folder '.'remote_plugins'.JOMRES_REMOTEPLUGINS_ABSPATH." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}

		//uploadedimages dir
		if (!is_dir(JOMRES_IMAGELOCATION_ABSPATH)) {
			if (!@mkdir(JOMRES_IMAGELOCATION_ABSPATH)) {
				$this->setMessage('Error, unable to make folder '.JOMRES_IMAGELOCATION_ABSPATH." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
			}
		}
		
		return true;
    }
	
	//create fresh install db tables
	private function createDefaultDbTables()
	{
		foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'tables'.JRDS.'*.php') as $filename) {
			include $filename;
		}
	}
	
	//seed fresh install tales with default content
	private function seedDefaultContent()
	{
		foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'seeds'.JRDS.'*.php') as $filename) {
			include $filename;
		}
	}
	
	//run all plugins installation scripts
	private function installPlugins()
	{
		//needed by plugin installation scripts to allow execution
		define('JOMRES_INSTALLER', 1);
		
		//search all core-plugins and run their installation scripts
		foreach (glob(JOMRESPATH_BASE.'core-plugins'.JRDS.'*', GLOB_ONLYDIR) as $dir) {
			if (file_exists($dir.JRDS.'plugin_install.php')) {
				include $dir.JRDS.'plugin_install.php';
			}
		}
		
		//search all core-plugins and run their installation scripts
		foreach (glob(JOMRESPATH_BASE.'remote_plugins'.JRDS.'*', GLOB_ONLYDIR) as $dir) {
			if (file_exists($dir.JRDS.'plugin_install.php')) {
				include $dir.JRDS.'plugin_install.php';
			}
		}
	}
	
	//update routines
	private function runUpdates()
	{
		//search all update dirs, compare their names with the jomres_db_version (latest version to which was updated) and if there are new versions, perform updates
		foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'updates'.JRDS.'*', GLOB_ONLYDIR) as $dir) {
			if (version_compare(basename($dir), $this->jrConfig['jomres_db_version'], '>')) {
				foreach (glob($dir.JRDS.'*.php') as $filename) {
					include $filename;
				}
			}
		}
	}
	
	//legacy update routines
	private function runLegacyUpdates()
	{
		foreach (glob(JOMRESPATH_BASE.'database'.JRDS.'legacy'.JRDS.'*.php') as $filename) {
			include $filename;
		}
	}
	
	//copy sample images on fresh installs
	private function copySampleImages()
	{
		//copy property feature icons
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/pfeatures/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/')) {
			$this->setMessage('Error, unable to copy property feature icons', 'danger');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/pfeatures/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/medium/')) {
			$this->setMessage('Error, unable to copy property feature medium icons', 'danger');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/pfeatures/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/thumbnail/')) {
			$this->setMessage('Error, unable to copy property feature thumbnail icons', 'danger');
		}
		
		//copy room type icons
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/rmtypes/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/')) {
			$this->setMessage('Error, unable to room type icons', 'danger');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/rmtypes/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/medium/')) {
			$this->setMessage('Error, unable to room type medium icons', 'danger');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/icons/rmtypes/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/thumbnail/')) {
			$this->setMessage('Error, unable to room type thumbnail icons', 'danger');
		}
		
		//copy markers
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/markers/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/markers/')) {
			$this->setMessage('Error, unable to copy marker icons', 'danger');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/markers/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/markers/medium/')) {
			$this->setMessage('Error, unable to copy marker medium icons', 'danger');
		}
		
		if (!$this->performCopy(JOMRES_ROOT_DIRECTORY.'/assets/images/markers/', JOMRES_ROOT_DIRECTORY.'/uploadedimages/markers/thumbnail/')) {
			$this->setMessage('Error, unable to copy marker thumbnail icons', 'danger');
		}
	}
	
	//copy utility function
	private function performCopy($source = '', $target = '')
	{
		if ($source == '' || $target == '') {
			return false;
		}
		
		$contents = $this->filesystem->listContents('local://'.$source);

		foreach ($contents as $fileNode) {
			if (in_array(strtolower($fileNode['extension']), $this->allowed_image_extensions)) {
				try {
					if ( ! $this->filesystem->has('local://'.$target.$fileNode['basename'])) {
						$this->filesystem->copy('local://'.$fileNode['path'], 'local://'.$target.$fileNode['basename']);
					}
				}
				catch (Exception $e) {
					$this->setMessage('Error, unable to copy ' . 'local://'.$fileNode['path'] . ' to ' . 'local://'.$target.$fileNode['basename'], 'danger');
					
					return false;
				}
			}
		}
		
		return true;
	}
	
	//remove obsolete files and regenerate registry
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
	private function dropDbTables()
	{
		$query = "SELECT `table_name` FROM information_schema.tables WHERE 
					`table_schema` = '".get_showtime('db')."'
					AND (`table_name` LIKE '#__jomres_%' 
					OR `table_name` LIKE '#__jomcomp_%' 
					OR `table_name` LIKE '#__jomresportal_%') ";
		
		$result = doSelectSql($query);

		foreach ($result as $r) {
			$query = 'DROP TABLE IF EXISTS '.$r->table_name;
			if (!doInsertSql($query, '')) {
				$this->setMessage( 'Error, unable to drop table '.$r->table_name);
			}
		}

		return true;
	}
	
	//delete all jomres files
	private function deleteFiles()
	{
		//delete jomres dir
		$this->filesystem->deleteDir('local://'.JOMRES_ROOT_DIRECTORY);
		
		//delete jomres_root file
		$this->filesystem->delete('local://jomres_root.php');
		
		return true;
	}
	
	//build installation error messages
	public function setMessage($message = '', $class_style = 'info')
	{
		if (trim($message) == '') {
			return false;
		}
		
		$class = 'alert-'.$class_style;
		
		$this->messages[] = '<p class="alert '.$class.'">'.$message.'</p>';
	}
	
	//get installation messages/errors
	public function getMessages()
	{
		return $this->messages;
	}
}
