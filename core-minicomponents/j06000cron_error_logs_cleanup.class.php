<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06000cron_error_logs_cleanup
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		
		$maxFileSize = 1024 * 1024;

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			
		if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
			$jrConfig['log_path'] = JOMRES_SYSTEMLOG_PATH;
		}
	
			$jrConfig['log_path'] = rtrim($jrConfig['log_path'], '/');
			$jrConfig['log_path'] = rtrim($jrConfig['log_path'], '\\');
			$jrConfig['log_path'] .= JRDS;
			
			$log_path = $jrConfig['log_path'];

			$files = scandir_getfiles($log_path);

		if (!empty($files)) {
			foreach ($files as $f) {
				//zip logs bigger than 1MB
				$bang = explode('.', $f);
				if (isset($bang[2]) && $bang[2] == 'log') {
					$size = filesize(($log_path.$f));
					if ($size > $maxFileSize) {
						$newFileName = date('U').'_'.$f.'.zip';
						$zip = new ZipArchive();
						$zip->open($log_path.$newFileName, ZipArchive::CREATE);
						$zip->addFile($log_path.$f, $f);
						$zip->close();

						unlink($log_path.$f);
					}
				}
					
				//delete files older than a month
				if ($f != '.htaccess' && $f != 'web.config' && time() - filemtime($log_path.$f) >= 30 * 24 * 60 * 60) { // 30 days
					unlink($log_path.$f);
				}
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
