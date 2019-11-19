<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
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

class j16000list_error_logs
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
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
			$jrConfig['log_path'] = dirname(__FILE__).'/../logs/';
		}

		$jrConfig['log_path'] = fix_path($jrConfig['log_path']);

		$system_log_files = array();
		$error_log_files = array();
		if (is_dir($jrConfig['log_path'])) {
			$files = scandir_getfiles($jrConfig['log_path']);

			foreach ($files as $file) {
				if ($file != '.' && $file != '..') {
					$bang = explode('.', $file);

					$mtime = filemtime($jrConfig['log_path'].$file);
					if (isset($bang[2]) && $bang[2] == 'log' && !isset($bang[3])) {
						$system_log_files[$mtime.$file] = array('filename' => $file, 'mtime' => $mtime);
					} elseif (isset($bang[1]) && $bang[1] == 'html') {
						$interval = strtotime('-2 weeks');
						if ($mtime <= $interval) {
							// echo "pretending to delete ".$file."<br>";
							// unlink($jrConfig['log_path'].$file);
						} else {
							$error_log_files[$mtime] = array('filename' => $file, 'mtime' => $mtime);
						}
					}
				}
			}
		}

		ksort($error_log_files);
		$output = array();
		$pageoutput = array();
		$error_rows = array();
		$system_rows = array();

		$output['TABLE_NAME'] = 'system_rows';

		$output[ 'PAGETITLE' ] = jr_gettext('JOMRES_COM_A_AVAILABLELOGS', 'JOMRES_COM_A_AVAILABLELOGS', false);
		$output[ '_JOMRES_ERROR_DEBUGGING_FILE' ] = jr_gettext('_JOMRES_ERROR_DEBUGGING_FILE', '_JOMRES_ERROR_DEBUGGING_FILE', false);
		$output[ '_JOMRES_MR_AUDIT_LISTING_DATE' ] = jr_gettext('_JOMRES_MR_AUDIT_LISTING_DATE', '_JOMRES_MR_AUDIT_LISTING_DATE', false);

		foreach ($system_log_files as $file) {
			$r = array();
			$r[ 'FILENAME' ] = $file['filename'];
			$r[ 'CREATED' ] = date('Y/m/d H:i:s', $file['mtime']);

			$system_rows[ ] = $r;
		}

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');

		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('list_error_logs.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $system_rows);
		$tmpl->displayParsedTemplate();

		$output = array();
		$pageoutput = array();

		$output[ 'PAGETITLE' ] = jr_gettext('JOMRES_COM_A_AVAILABLELOGS', 'JOMRES_COM_A_AVAILABLELOGS', false);
		$output[ '_JOMRES_ERROR_DEBUGGING_FILE' ] = jr_gettext('_JOMRES_ERROR_DEBUGGING_FILE', '_JOMRES_ERROR_DEBUGGING_FILE', false);
		$output[ '_JOMRES_MR_AUDIT_LISTING_DATE' ] = jr_gettext('_JOMRES_MR_AUDIT_LISTING_DATE', '_JOMRES_MR_AUDIT_LISTING_DATE', false);

		$output['TABLE_NAME'] = 'error_rows';

		foreach ($error_log_files as $file) {
			$r = array();
			$r[ 'FILENAME' ] = $file['filename'];
			$r[ 'CREATED' ] = date('Y/m/d H:i:s', $file['mtime']);

			$error_rows[ ] = $r;
		}

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('list_error_logs.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $error_rows);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
