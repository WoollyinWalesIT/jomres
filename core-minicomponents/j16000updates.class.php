<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.2.2
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * @package Jomres\Core\Minicomponents
	 */

class j16000updates
{
	/**
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 */

	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$this->updateServer = 'http://updates.jomres4.net';
		$this->updateFolder = JOMRESPATH_BASE.JRDS.'updates';
		$this->nightly_url = 'http://updates.jomres4.net/nightly/';
		$this->development_production = $jrConfig['development_production'];
		$this->test_download = false;

		if (!class_exists('ZipArchive')) {
			echo 'Error, ZipArchive not available on this server. Please ask your hosts to rebuild PHP with --enable-zip';
			return;
		}

		if (!$this->checkUpdateDirectory()) {
			throw new Exception("Can't create update folder $this->updateFolder");
		}

		$local_archive = $this->updateFolder.'/jomres.zip';

		$out = fopen($local_archive, 'wb');
		if ($out == false) {
			throw new Exception("Couldn't create new file $local_archive. Possible file permission problem?");
		}

		if (!isset($_REQUEST['do_update'])) {
			$this_version = get_jomres_current_version();
			$latest_version = get_latest_jomres_version();

			$output[ 'NIGHTLY_WARNING' ] = '';
			if ($this->development_production == 'development') {
				$output[ 'NIGHTLY_WARNING' ] = simple_template_output(JOMRES_TEMPLATEPATH_ADMINISTRATOR, $template = 'update_nightly_warning.html', jr_gettext('JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', 'JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', false));
			}

			$output[ '_JOMRES_VERSIONCHECK_THISJOMRESVERSION' ]		= jr_gettext('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', false);
			$output[ '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION' ]	= jr_gettext('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', false);
			$output[ 'JOMRES_UPDATE_MESSAGE_LINK' ]					= jr_gettext('JOMRES_UPDATE_MESSAGE_LINK', 'JOMRES_UPDATE_MESSAGE_LINK', false);
			$output[ 'JOMRES_UPDATES_TITLE' ]						= jr_gettext('JOMRES_UPDATES_TITLE', 'JOMRES_UPDATES_TITLE', false);
			$output[ 'JOMRES_UPDATES_INFO' ]						= jr_gettext('JOMRES_UPDATES_INFO', 'JOMRES_UPDATES_INFO', false);

			$output['THIS_VERSION']		= $this_version;
			$output['LATEST_VERSION']	= $latest_version;
			$output['URL']	= JOMRES_SITEPAGE_URL_ADMIN.'&task=updates&do_update=1';

			if (isset($_REQUEST['echo'])) {
				echo $output[ '_JOMRES_VERSIONCHECK_THISJOMRESVERSION' ].' '.$output['THIS_VERSION'].'<br/>';
				echo $output[ '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION' ].' '.$output['LATEST_VERSION'].'<br/>';

				echo '<a href="'.$output['URL'].'" class="btn btn-primary" >'.$output[ 'JOMRES_UPDATE_MESSAGE_LINK' ].'</a>';
			} else {
				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('upgrade_warning.html');
				$tmpl->displayParsedTemplate();
			}
		} else {
			$this->do_download_and_unzip($local_archive);
			if (!$this->test_download) {
				$this->do_dir_move();
			}
			unlink($local_archive);

			if (!$this->test_download) {
				// jomres_install handles database updates,
				jr_import('jomres_install');
				$jomres_install = new jomres_install('update');
			}
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');
		}
	}

	private function do_dir_move()
	{
		dirmv($this->updateFolder.JRDS.'unpacked'.JRDS, JOMRESPATH_BASE, true);
	}

	private function do_download_and_unzip($local_archive)
	{
		$latest_version = get_latest_jomres_version();
		$remote_archive = $this->updateServer.'/jomres/'.$latest_version.'/ioncube';

		if ($this->development_production == 'development') {
			$remote_archive = $this->nightly_url;
		}

		$this->get_online_file($remote_archive, $local_archive);

		if (!file_exists($local_archive)) {
			throw new Exception("File failed to download ");
		}
		if (file_exists($local_archive) && filesize($local_archive) == 0) {
			throw new Exception("File downloaded, but filesize is 0. Either this server has run out of disk space or the hosting package does not allow downloading of zip files from remote servers.");
		}

		$zip = new ZipArchive();
		$res = $zip->open($local_archive);

		// Unzip all the contents of the zipped file to this folder
		if (mkdir($this->updateFolder.JRDS.'unpacked') && $res === true) {
			$zip->extractTo($this->updateFolder.JRDS.'unpacked');
			$zip->close();
			return true;
		} else {
			throw new Exception('Error creating unpack folder '. $this->updateFolder.JRDS.'unpacked');
		}
	}

	private function get_online_file($remote_archive, $local_archive)
	{
		$currTimeLimit = 60;
		if (strpos(@ini_get('disable_functions'), 'set_time_limit') === false) {
			$currTimeLimit = ini_get('max_execution_time');
			set_time_limit($currTimeLimit);
		}

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $remote_archive);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, $currTimeLimit);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		$data = curl_exec($ch);
		$download_error = curl_error($ch);

		curl_close($ch);

		if (strstr($download_error, "Operation timed out")) {
			throw new Exception("Package file download timed out! ".$download_error);
		}

		$file = fopen($local_archive, "w+");

		fputs($file, $data);
		fclose($file);
		return true;
	}

	public function checkUpdateDirectory()
	{
		if (!is_dir($this->updateFolder)) {
			if (!mkdir($this->updateFolder)) {
				throw new Exception('Error, unable to make folder '.$this->updateFolder." automatically therefore cannot store updates downloaded from the update server. Please create the folder manually and ensure that it's writable by the web server");
			}
		} else {
			if (!is_writable($this->updateFolder)) {
				return false;
			}
		}
		emptyDir($this->updateFolder);

		return true;
	}

	public function getRetVals()
	{
		return null;
	}
}
