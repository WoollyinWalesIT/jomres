<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.5.4
	 *
	 * @copyright	2005-2022 Vince Wooll
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

			// Plugin manager not installed

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$key_validation = jomres_singleton_abstract::getInstance('jomres_check_support_key');
			$key_validation->check_license_key(true);
			$this->key_valid = $key_validation->key_valid;
			if (!$this->key_valid) {
				echo '<span class="alert alert-danger">'.jr_gettext('_JOMRES_SUPPORTKEY_DESC_INVALID', '_JOMRES_SUPPORTKEY_DESC_INVALID', false).'</span>';
				return;
			}

			if (
				(!file_exists(JOMRES_COREPLUGINS_ABSPATH.'plugin_manager'.JRDS.'plugin_info.php'))) { // We will need to install the plugin manager, plugin force a registry rebuild, then redirect to this page again.

				if (!isset($_REQUEST['install']) ) {
					$output = array();
					$output['ENCODING_MESSAGE'] = '';

					$output['INSTALLATION_MESSAGE'] = jr_gettext('PLUGINMANAGER_INSTALL', 'PLUGINMANAGER_INSTALL', false);

					$output['PLUGINMANAGER_INSTALL_BUTTON'] = jr_gettext('PLUGINMANAGER_INSTALL_BUTTON', 'PLUGINMANAGER_INSTALL_BUTTON', false);

					$pageoutput[ ] = $output;
					$tmpl = new patTemplate();
					$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
					$tmpl->addRows('pageoutput', $pageoutput);
					$tmpl->readTemplatesFromInput('plugin_manager_install.html');
					$tmpl->displayParsedTemplate();

					return;

				} else {

					if ( substr(JOMRESCONFIG_ABSOLUTE_PATH,-1) != '/' ) {
						$absolute_path = JOMRESCONFIG_ABSOLUTE_PATH."/";
					}  else {
						$absolute_path = JOMRESCONFIG_ABSOLUTE_PATH."/";
					}

					$updateDirPath = $absolute_path.JOMRES_ROOT_DIRECTORY.JRDS.'updates'.JRDS.'plugin_manager'.JRDS;
					$newfilename = $updateDirPath.'plugin_manager.vnw';
					$destinationPath = JOMRES_COREPLUGINS_ABSPATH.'plugin_manager';

					// Need to ensure that the download and plugin paths are clean, so we'll delete/recreate them each time we run.
					if (is_dir($updateDirPath) ) {
						$this->empty_dir($updateDirPath);
					} else {
						createPath($updateDirPath);
					}

					if (is_dir($destinationPath) ) {
						$this->empty_dir($destinationPath);
					} else {
						createPath($destinationPath);
					}

					$newFile = $updateDirPath.'plugin_manager.vnw';

					$file_handle = fopen($newFile, 'wb');
					if ($file_handle == false) {
						$error_messsage[ 'ERROR' ] = "Couldn't create new file $newFile. Possible file permission problem?";
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

					jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
				}
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

	/**
	 * recursively create a long directory path
	 */
	function createPath($path) {
		if (is_dir($path))
			return true;
		$prev_path = substr($path, 0, strrpos($path, '/', -2) + 1 );
		$return = createPath($prev_path);
		return ($return && is_writable($prev_path)) ? mkdir($path) : false;
	}