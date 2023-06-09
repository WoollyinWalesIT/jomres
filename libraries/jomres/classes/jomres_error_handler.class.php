<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
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
class jomres_error_handler extends Exception
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$this->debugging = false;
		if ($jrConfig['development_production'] == 'development') {
			$this->debugging = true;
		}
	}

	public function output_error($e, $extra_info)
	{
		if ($this->debugging) {
			$this->output_dev_mode_debugging($e, $extra_info);
		} else {
			$this->output_production_mode_debugging($e, $extra_info);
		}
	}

	private function output_dev_mode_debugging($e, $extra_info)
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$cms_files_we_are_not_interested_in = jomres_cmsspecific_error_logging_cms_files_to_not_backtrace();

		if (is_int($e)) {
			$backtrace = debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS , 10 );
			$rows=array();
			$found = false;
			foreach ($backtrace as $trace) {
				$r = array();
				if (isset($trace[ 'file' ]) && $found ) {
					$file = $trace[ 'file' ];
					$bang = explode(JRDS, $file);

					$r['FILES'] = sprintf("\n%s:%s %s::%s", $trace['file'], $trace['line'], $trace['class'], $trace['function']).'<br/>';
					$rows[] = $r;
				}
				if (isset($trace['function']) && $trace['function'] === 'output_fatal_error' ) {
					$found = true;
				}
			}
			unset($backtrace);

		//	var_dump($rows);
		//	exit;


			$link = getCurrentUrl();
			//$link =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$cleaned_link = jomres_sanitise_string($link);

			$output = array('MESSAGE' => $extra_info);

			$output['IP_NUMBER'] = jomres_get_client_ip();

			$output['DATETIME'] = date('Y-m-d H:i:s');

			if (!defined('JOMRES_TEMPLATEPATH_FRONTEND'))  {
				define('JOMRES_TEMPLATEPATH_FRONTEND', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap5'.JRDS.'frontend');
			}

			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);

			$tmpl->readTemplatesFromInput('error_developer.html');
			$tmpl->addRows('rows', $rows);
			$tmpl->addRows('pageoutput', $pageoutput);
			$error_html = $tmpl->getParsedTemplate();

			if (!is_dir(JOMRES_SYSTEMLOG_PATH)) {
				mkdir(JOMRES_SYSTEMLOG_PATH);
			}

			$filename = generateJomresRandomString(30).'.html';

			file_put_contents(JOMRES_SYSTEMLOG_PATH.$filename, $error_html);

			if ($jrConfig['development_production'] == 'development') {
				echo $error_html;
			} else {
				$pageoutput = array(array('_JOMRES_ERROR' => jr_gettext('_JOMRES_ERROR', '_JOMRES_ERROR', false), '_JOMRES_ERROR_MESSAGE' =>  $e->getMessage() ));
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('error_production.html');
				$tmpl->addRows('pageoutput', $pageoutput);
				echo $tmpl->getParsedTemplate();
			}

			$url = '<a href = "'.JOMRES_SITEPAGE_URL_NOSEF.'&task=show_logfile&logfile='.$filename.'"> Logfile </a>'.
				$error_html
			;

			if ($jrConfig[ 'sendErrorEmails' ] == '1') {
				sendAdminEmail('Error logged '.$output['MESSAGE'], $url);
			}

			logging::log_message('Error logged '.$output['MESSAGE'].' '.$url, 'Core', 'ERROR');

			//debug_print_backtrace();
		} else {
			if (is_string($e)) {
				$response = $e;
			} else {
				if ($e->getMessage() != '' ) {
					$response = $e->getMessage();

					$response .= "Exception: " . $response;
					$response .= "The exception was created in file: " . $e->getFile();
					$response .= "The exception was created on line: " . $e->getLine();
				}
			}
		}
	}

	private function output_production_mode_debugging($e, $extra_info)
	{
		$link = getCurrentUrl();
		$cleaned_link = jomres_sanitise_string($link);

		if (is_object($e)) {
			$output = array(
				'URL' => $cleaned_link,
				'MESSAGE' => $e->getMessage(),
				'EXTRA_INFO' => $extra_info,
				'FILE' => $e->getFile(),
				'LINE' => $e->getLine(),
				'TRACE' => nl2br($e->getTraceAsString()),
				'_JOMRES_ERROR_DEBUGGING_MESSAGE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_MESSAGE', '_JOMRES_ERROR_DEBUGGING_MESSAGE', false),
				'_JOMRES_ERROR_DEBUGGING_FILE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_FILE', '_JOMRES_ERROR_DEBUGGING_FILE', false),
				'_JOMRES_ERROR_DEBUGGING_LINE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_LINE', '_JOMRES_ERROR_DEBUGGING_LINE', false),
				'_JOMRES_ERROR_DEBUGGING_TRACE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_TRACE', '_JOMRES_ERROR_DEBUGGING_TRACE', false),
			);
		} else {
			$output = array('MESSAGE' => $extra_info);
		}

		$pageoutput = array(array('_JOMRES_ERROR' => jr_gettext('_JOMRES_ERROR', '_JOMRES_ERROR', false), '_JOMRES_ERROR_MESSAGE' => $output['MESSAGE'] ));
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('error_production.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		echo $tmpl->getParsedTemplate();
	}


	private function callStack($stacktrace) {
		print str_repeat("=", 50) ."\n";
		$i = 1;
		foreach($stacktrace as $node) {
			print "$i. ".basename($node['file']) .":" .$node['function'] ."(" .$node['line'].")\n";
			$i++;
		}
	}

}
