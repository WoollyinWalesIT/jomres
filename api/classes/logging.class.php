<?php
/**
 *
 *  @package Jomres\Core\REST_API
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogHandler;

use Monolog\Handler\SyslogUdpHandler;
use Monolog\Formatter\LineFormatter;

use Monolog\Handler\HandlerInterface;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Handler\BrowserConsoleHandler;
use Monolog\Processor\WebProcessor;
	
	/**
	 *
     * Allows logging via the Monolog library.
     *
     * Started out as being intended just for REST API logging, but now is used throughout Jomres, not just API calls.
	 *
	 */

class logging
{
	/**
	*
	* Constructor
	*
	*/
    public function __construct()
    {
    }

	/**
	*
	* Uses monolog to log activity within Jomres
	*
	*/
    public static function log_message($message, $channel = 'Core', $level = 'DEBUG' , $further_info_dump = '')
    {
        $username = 'Unknown';
        if (!defined('JOMRESCONFIG_ABSOLUTE_PATH')) { // For performance reasons the API doesn't include the rest of the framework unless called in an API Feature. As a result, we'll check here to see if a core system path is set. If it's not, we'll call configuration.php directly instead of using the framework to include it
            include '../configuration.php';
            if (!defined('JOMRES_ROOT_DIRECTORY')) {
                if (file_exists(dirname(__FILE__).'/../../jomres_root.php')) {
                    require_once dirname(__FILE__).'/../../jomres_root.php';
                } else {
                    define('JOMRES_ROOT_DIRECTORY', 'jomres');
                }
            }
        } else {
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $jrConfig = $siteConfig->get();

            if (!defined('AUTO_UPGRADE')) {
				if (get_showtime('jr_user_ready')) {
					$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
					if ($thisJRUser->username !== false) {
						$username = $thisJRUser->username;
					}
				} else {
					$username = 'Startup';
				}
            } else {
                $username = 'Installer';
            }
        }

        if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
            $jrConfig['log_path'] = dirname(dirname(dirname(__FILE__))).'/logs/';
        }

        $jrConfig['log_path'] = rtrim($jrConfig['log_path'], '/');
        $jrConfig['log_path'] = rtrim($jrConfig['log_path'], '\\');
        $jrConfig['log_path'] .= DIRECTORY_SEPARATOR;

		if (!is_dir($jrConfig['log_path'])) {
			@mkdir($jrConfig['log_path']);
		}
		
		if (!is_dir($jrConfig['log_path'])) { // We won't throw an error, we just wont try to write to the log file.
			return;
		}
		
        $log_file = str_replace(' ', '_', $channel).'.application.log';

        if (!isset($jrConfig[ 'development_production' ])) { // Probably installing
            return;
        }

        if ($jrConfig[ 'development_production' ] == 'production' && $level == 'DEBUG') { // In Production, we don't want to see DEBUG level stuff.
            return;
        }

        $url = '';
        if (isset($_SERVER['REQUEST_URI'])) {
            $full = true;
            $parse = parse_url(
                (isset($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'off') ? 'https://' : 'http://').
                (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '')).(($full) ? $_SERVER['REQUEST_URI'] : null)
            );
			
			if (isset($_SERVER['SERVER_PORT'])) { // CLI not isset variable fix
				$parse['port'] = $_SERVER['SERVER_PORT']; // Setup protocol for sure (80 is default)
			} else {
				$parse['port'] = '80';
			}
            
            $url = http_build_url('', $parse);
            $url = filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
        }

		$micro_time = @microtime(true); // PHP bug, suppress microtime sometimes returning invalid responses
		$now = DateTime::createFromFormat('U.u',$micro_time);
		$formatter = new LineFormatter($now->format("Y-m-d H:i:s")." ~~ %channel%.%level_name%: ~~ %message% ~~ %context% ~~ %extra% ::::: \n");

        $stream_handler = new StreamHandler($jrConfig['log_path'].$log_file, Logger::DEBUG);
        $stream_handler->setFormatter($formatter);

		$timezone = new \DateTimeZone(date_default_timezone_get() ?: 'UTC');
        if ( defined('AJAXCALL') && !AJAXCALL && !defined("API_STARTED") ) {
            if ($jrConfig['development_production'] == 'development' ) {

                $logger = new Logger($channel);
				$logger->setTimezone($timezone);
                $logger->pushProcessor(new \Monolog\Processor\WebProcessor); // pushing the web server preprocessor
                $browserHandler = new \Monolog\Handler\BrowserConsoleHandler(\Monolog\Logger::DEBUG);
                $logger->pushHandler($browserHandler);
               // $logger->addDebug($message, array ("info_dump" => $further_info_dump) );
                $logger->debug($message);
            }
        }

        $message = $username.' ~~ '.$message.' ~~ '.session_id().' ~~ '.$url;

		$loggerTimeFormat = "Y-m-d H:i:s.u";
		$loggerFormat = "[%datetime%] %level_name% %message% %context% %extra%\n";
		$formatter = new LineFormatter($loggerFormat, $loggerTimeFormat);

        $logger = new Logger($channel);
		$logger->setTimezone($timezone);

		$logger->useMicrosecondTimestamps(true);
        $logger->pushProcessor(new \Monolog\Processor\WebProcessor());

        $logger->pushHandler(
            $stream_handler
            );

        $syslog_disabled = true;
        $disabled = explode(',', ini_get('disable_functions'));
        if (!in_array(' openlog', $disabled) && !in_array('openlog', $disabled) && !in_array(' syslog', $disabled) && !in_array('syslog', $disabled)) {
            $syslog_disabled = false;
        }

        if (!$syslog_disabled) {
            if (
                !isset($jrConfig['syslog_host']) ||
                trim($jrConfig['syslog_host']) == '' ||
                !isset($jrConfig['syslog_port']) ||
                trim($jrConfig['syslog_port']) == ''
                ) {
                $syslogHandler = new SyslogHandler(
                    'jomres',
                    LOG_USER
                    );
            } else {
                $syslogHandler = new SyslogUdpHandler(
                    (string) $jrConfig['syslog_host'],
                    (int) $jrConfig['syslog_port'],
                    LOG_USER
                    );
            }
            $output = '%channel%.%level_name%: %message%';
            $syslog_formatter = new LineFormatter($output);
            $syslogHandler->setFormatter($syslog_formatter);
            $logger->pushHandler($syslogHandler);
        }

        $logger->pushProcessor(function ($record) {
            $record['extra']['transaction_id'] = TRANSACTION_ID; // Transaction id is used to identify the caller ( microtime ) so that we can associate logs with actions
            return $record;
        });

        $trace = '';
        if ( $level == 'DEBUG') {
            $backtrace = debug_backtrace();
            if (isset($backtrace[1])) {
            	$index = 1;
			} else {
            	$index = 0;
			}

            $trace = "<br/> File ".$backtrace[$index]['file'].
				" Line ".$backtrace[$index]['line'].
				" Function ".$backtrace[$index]['function']."<br/> ";
			$index ++;
			if (isset($backtrace[$index]['file'])) {
				$trace .= " File " . $backtrace[$index]['file'] . " Line " . $backtrace[$index]['line'] . " Function " . $backtrace[$index]['function'] . "<br/> ";
			}
			$index ++;
			if (isset($backtrace[$index]['file'])) {
				$trace .= " File ".$backtrace[$index]['file']." Line ".$backtrace[$index]['line']. " Function ".$backtrace[$index]['function']."<br/> ";
			}
            
        }
        $context = array( 'info_dump' => $further_info_dump.$trace);

        switch ($level) {
            default:
            case 'DEBUG':
                if ($jrConfig['development_production'] == 'development') {
                    $logger->debug($message, $context); // Detailed debug information.
                }
                break;
            case 'INFO':
                $logger->info($message, $context); // Interesting events. Examples: User logs in, SQL logs.
                break;
            case 'NOTICE':
                $logger->notice($message, $context); // Normal but significant events.
                break;
            case 'WARNING':
                $logger->warning($message, $context); // Exceptional occurrences that are not errors. Examples: Use of deprecated APIs, poor use of an API, undesirable things that are not necessarily wrong.
                break;
            case 'ERROR':
                $logger->error($message, $context); // Runtime errors that do not require immediate action but should typically be logged and monitored.
                break;
            case 'CRITICAL':
                $logger->critical($message, $context); // Critical conditions. Example: Application component unavailable, unexpected exception.
                break;
            case 'ALERT':
                $logger->alert($message, $context); // Action must be taken immediately. Example: Entire website down, database unavailable, etc. This should trigger the SMS alerts and wake you up.
                break;
            case 'EMERGENCY':
                $logger->emergency($message, $context); //Emergency: system is unusable.
                break;
            }

    }
}
