<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000showplugins
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
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		if (!class_exists('ZipArchive')) {
			echo "Error : The ZipArchive class does not exist. This is needed to extract files so please ensure that PHP is built with this PHP extension installed. If you cannot do that, your hosts will be able to help.";
			return;
		}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		$force_plugin_manager_reinstallation = false;
		var_dump($MiniComponents->registeredClasses['16000']['showplugins']['real_filepath']);exit;
		// Jomres 9.10 specific code, we need to check to see if the task == showplugins, and if so double check the plugin manager's version. If it's < 1.9 we need to force an update of the plugin manager before the plugin manager script can be shown
		// Without this check and force of the reinstallation of the plugin manager, users will only be able to update the 40 or so plugins one by one, which would be a significant annoyance.
		// Todo remove sometime after January 2019
		if (isset($MiniComponents->registeredClasses['16000']['showplugins']['real_filepath'])) { // admin.php has found that the installed version of the plugin manager is 1.8 or less, and has forced us to run the Core plugin manager script, not the plugin version. 
			if (file_exists($MiniComponents->registeredClasses['16000']['showplugins']['real_filepath']."plugin_info.php") ) {
				require_once($MiniComponents->registeredClasses['16000']['showplugins']['real_filepath']."plugin_info.php");
				$plugin_info_plugin_manager = new plugin_info_plugin_manager();
				$bang = explode("." , $plugin_info_plugin_manager->data['version'] );
				if ( $bang [0] <= 2 ) {
					if ($bang [1] <= 8) {
						$force_plugin_manager_reinstallation = true;
					}
				}
			}
		}
		
		$key_validation = jomres_singleton_abstract::getInstance('jomres_check_support_key');
		$key_validation->check_license_key(true); //only needed if we want to force a recheck
		
		$this->key_valid = $key_validation->key_valid;
		
		if ($key_validation->is_trial_license == '1' && !extension_loaded('IonCube Loader') && trim($key_validation->key_hash) != '' && $this->key_valid ) {
			jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN.'&task=loader_wizard');
		}

		if ($key_validation->is_trial_license == '1' && ioncube_loader_version() < 6 ) {
			echo "Error, your Ioncube Loader version is too low. You have ".ioncube_loader_version()." installed and you need at least version 6";
			return;
		}
		
		if ($key_validation->is_trial_license == '1') {
			if (function_exists('ioncube_loader_version')) {
				$ioncubeVersion = ioncube_loader_version();
				$ioncubeMajorVersion = (int) substr($ioncubeVersion, 0, strpos($ioncubeVersion, '.'));
				$ioncubeMinorVersion = (int) substr($ioncubeVersion, strpos($ioncubeVersion, '.') + 1);
				if ($ioncubeMajorVersion < 5 || ($ioncubeMajorVersion == 0 && $ioncubeMinorVersion < 21)) {
					echo "<p class='alert alert-warning'>Uh oh, Ioncube loaders are installed, however they may be too old to run these scripts.</p><p>Please visit <a href='http://www.ioncube.com/loaders.php' target='_blank'>Ioncube's website</a> to download the most current versions of the loader wizard. This will walk you through installing the loaders. Alternatively, ask your hosts for help.</p>";
					return;
				}
			}
		}

		if ( 
			(!file_exists(JOMRES_COREPLUGINS_ABSPATH.'plugin_manager'.JRDS.'plugin_info.php'))  ||
			$force_plugin_manager_reinstallation === true
			) { // We will need to install the plugin manager, plugin force a registry rebuild, then redirect to this page again.
			
			if (!isset($_REQUEST['install']) ) {
				
				$output = array();
				$output['ENCODING_MESSAGE'] = '';

				if ($key_validation->is_trial_license && $this->key_valid) {
					if (function_exists('ioncube_loader_version')) {
						$ioncubeVersion = ioncube_loader_version();
						$ioncubeMajorVersion = (int) substr($ioncubeVersion, 0, strpos($ioncubeVersion, '.'));
						$ioncubeMinorVersion = (int) substr($ioncubeVersion, strpos($ioncubeVersion, '.') + 1);
						if ($ioncubeMajorVersion < 5 || ($ioncubeMajorVersion == 0 && $ioncubeMinorVersion < 21)) {
							$tmpl = new patTemplate();
							$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
							$tmpl->addRows('pageoutput', $pageoutput);
							$tmpl->readTemplatesFromInput('plugin_manager_ioncube_wrong_version.html');
							$output['ENCODING_MESSAGE'] = $tmpl->getParsedTemplate();
						}
					} else {
						$pageoutput[ ] = array();
						$tmpl = new patTemplate();
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
						$tmpl->addRows('pageoutput', $pageoutput);
						$tmpl->readTemplatesFromInput('plugin_manager_no_ioncube.html');
						$output['ENCODING_MESSAGE'] = $tmpl->getParsedTemplate();
						}
					}
				
				if ($force_plugin_manager_reinstallation == true) {
					$output['INSTALLATION_MESSAGE'] = jr_gettext('PLUGINMANAGER_REINSTALL', 'PLUGINMANAGER_REINSTALL', false);
				}
				else {
					$output['INSTALLATION_MESSAGE'] = jr_gettext('PLUGINMANAGER_INSTALL', 'PLUGINMANAGER_INSTALL', false);
				}
				$output['PLUGINMANAGER_INSTALL_BUTTON'] = jr_gettext('PLUGINMANAGER_INSTALL_BUTTON', 'PLUGINMANAGER_INSTALL_BUTTON', false);
				
				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('plugin_manager_install.html');
				$tmpl->displayParsedTemplate();
				return;
			} else {
				$updateDirPath = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'updates'.JRDS.'plugin_manager'.JRDS;
				$newfilename = $updateDirPath.'plugin_manager.vnw';
				$destinationPath = JOMRES_COREPLUGINS_ABSPATH.JRDS.'plugin_manager';
				
				// Need to ensure that the download and plugin paths are clean, so we'll delete/recreate them each time we run.
				if (is_dir($updateDirPath) ) {
					$this->empty_dir($updateDirPath);
				} else {
					mkdir($updateDirPath, 0755, true); 
				}
				
				if (is_dir($destinationPath) ) {
					$this->empty_dir($destinationPath);
				} else {
					mkdir($destinationPath, 0755, true); 
				}
				
				$newFile = $updateDirPath.'plugin_manager.vnw';
				
				$file_handle = fopen($newFile, 'wb');
				if ($file_handle == false) {
					$error_messsage[ 'ERROR' ] = "Couldn't create new file $newFile. Possible file permission problem?";
					if ($autoupgrade) {
						return false;
					}
				}

				$v = explode('.', PHP_VERSION);
				$vprts = array(
					'major' => $v[0],
					'minor' => $v[1],
					'release' => $v[2], );
				$php_version = $vprts['major'].'.'.$vprts['minor'];
		
				$base_uri = 'http://plugins.jomres4.net/';
				$query_string = 'index.php?r=gp&cms='._JOMRES_DETECTED_CMS.'&vnw=1&plugin=plugin_manager&jomresver='. $jrConfig[ 'version' ].'&key='.$key_validation->key_hash.'&php_version='.$php_version;

				try {
					$client = new GuzzleHttp\Client([
						'base_uri' => $base_uri
					]);

					logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');
					
					$response = $client->request('GET', $query_string, ['sink' => $file_handle]);
				}
				catch (Exception $e) {
					$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
					$jomres_user_feedback->construct_message(array('message'=>"Could not download plugin manager", 'css_class'=>'alert-danger alert-error'));
				}

				if (is_resource($file_handle)) {
					fclose($file_handle);
				}
				
				if ( filesize($newFile) == 0 ) {
					echo "Error, the download file size is set to zero, therefore it cannot be unpacked or used. Has this hosting account run out of disk space?" ;
					return;
				}
				
				$zip = new ZipArchive();
				$res = $zip->open($newFile);

				if ($res === true) {
					$zip->extractTo($updateDirPath.'unpacked');

					// Identify directories
					$source = $updateDirPath.'unpacked'.JRDS.'plugin_manager'.JRDS;
					$destination = $updateDirPath.'unpacked'.JRDS;
					$result = dirmv($updateDirPath.'unpacked', JOMRES_COREPLUGINS_ABSPATH.'plugin_manager', true, $funcloc = JRDS);
					}
				$zip->close();

				$this->empty_dir($updateDirPath);
				
				$registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
				unlink ( $registry->registry_file );
				unlink ( JOMRES_TEMP_ABSPATH.'registry_classes.php' );
			
				emptyDir(JOMRES_CACHE_ABSPATH);
				
				jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
			}
		} else { // Key valid however plugin manager not called?
			
			// Empty the temp dir
			emptyDir(JOMRES_TEMP_ABSPATH);
			// redirect to showplugins
			jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
		}
	}

	function empty_dir($src) {
		$it = new RecursiveDirectoryIterator($src, RecursiveDirectoryIterator::SKIP_DOTS);
		$files = new RecursiveIteratorIterator($it,
					RecursiveIteratorIterator::CHILD_FIRST);
		foreach($files as $file) {
			if ($file->isDir()){
				rmdir($file->getRealPath());
			} else {
				unlink($file->getRealPath());
			}
		}
	}

	public function getRetVals()
	{
		return null;
	}
}
