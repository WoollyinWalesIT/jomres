<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.5
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000showplugins
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

        jr_import('jomres_check_support_key');
        $key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
        $this->key_valid = $key_validation->key_valid;
        if ($key_validation->is_trial_license == '1' && !extension_loaded('IonCube Loader') && trim($key_validation->key_hash) != '' && $this->key_valid ) {
            jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN.'&task=loader_wizard');
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
	
		if ( !file_exists(JOMRES_COREPLUGINS_ABSPATH.'plugin_manager'.JRDS.'plugin_info.php') && $this->key_valid ) { // The plugin manager plugin is not installed, we will need to install the plugin manager plugin force a registry rebuild, then redirect to this page again.
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
				
				include JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'jomres_config.php';
				$queryServer = 'http://plugins.jomres4.net/index.php?r=gp&cms='._JOMRES_DETECTED_CMS.'&vnw=1&plugin=plugin_manager&jomresver='. $mrConfig[ 'version' ].'&key='.$key_validation->key_hash;

				$arrContextOptions=array(
					"ssl"=>array(
						"verify_peer"=>false,
						"verify_peer_name"=>false,
					),
				);

				$newFile = $updateDirPath.'plugin_manager.vnw';
				
				file_put_contents($newFile, file_get_contents($queryServer, false, stream_context_create($arrContextOptions)));
				
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
		} else { // Key not valid
				$loaders_available = false;
				if (function_exists('ioncube_loader_version')) {
					$loaders_available = true;
				}
				
				$output = array();
				
				$output['SUBSCRIPTION_LICENSES'] = '';
				if ($loaders_available) { // show the subscriptions available
					$pageoutput = array();
					$tmpl = new patTemplate();
					$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
					$tmpl->addRows('pageoutput', $pageoutput);
					$tmpl->readTemplatesFromInput('plugin_manager_licenses_subscriptions.html');
					$output['SUBSCRIPTION_LICENSES'] = $tmpl->getParsedTemplate();
				} 
				
				//if ($output['SUBSCRIPTION_LICENSES'] == '') {
					$pageoutput = array();
					$tmpl = new patTemplate();
					$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
					$tmpl->addRows('pageoutput', $pageoutput);
					$tmpl->readTemplatesFromInput('plugin_manager_licenses_full.html');
					$output['FULL_LICENSES'] = $tmpl->getParsedTemplate();
				//}
				
				$pageoutput = array();
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('plugin_manager_licenses_trial.html');
				$output['TRIAL'] = $tmpl->getParsedTemplate();
				
				$pageoutput = array();
				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('plugin_manager_invalid_key.html');
				$tmpl->displayParsedTemplate();
				return;
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
	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
