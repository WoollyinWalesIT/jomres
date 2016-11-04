<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Formatter\LineFormatter;

class logging 
	{
	public function __construct()
		{
		}

	public static function log_message ( $message  , $channel = "Core" , $level = "DEBUG" )
		{
		$username = "Unknown";
		if (!defined('JOMRESCONFIG_ABSOLUTE_PATH')) // For performance reasons the API doesn't include the rest of the framework unless called in an API Feature. As a result, we'll check here to see if a core system path is set. If it's not, we'll call configuration.php directly instead of using the framework to include it
			{
			include( '../configuration.php');
			if (!defined('JOMRES_ROOT_DIRECTORY'))
				{
				if (file_exists(dirname(__FILE__).'/../../jomres_root.php'))
					require_once (dirname(__FILE__).'/../../jomres_root.php');
				else
					define ( 'JOMRES_ROOT_DIRECTORY' , "jomres" ) ;
				}
			
			require_once( '../../' . DIRECTORY_SEPARATOR . JOMRES_ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'libraries'.DIRECTORY_SEPARATOR.'http_build_url.php');
			}
		else
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();
			$scriptname = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
			if ( !strstr( $scriptname, 'install_jomres.php' ) )
				{
				$thisJRUser        = jomres_singleton_abstract::getInstance( 'jr_user' );
				if ($thisJRUser->username !== false )
					$username =  $thisJRUser->username;
				}
			else
				$username = "Installer";
			}

		
		
		if ( !isset($jrConfig['log_path']) || $jrConfig['log_path'] == '' )
			$jrConfig['log_path'] = dirname(dirname(dirname(__FILE__)) ).'/logs/';
		
		$jrConfig['log_path'] = rtrim($jrConfig['log_path'], '/');
		$jrConfig['log_path'] = rtrim($jrConfig['log_path'], '\\');
		$jrConfig['log_path'] .= DIRECTORY_SEPARATOR;
		
		$log_file = str_replace(" ","_",$channel).".application.log";

		
		if ($jrConfig[ 'development_production' ] == "production" && $level == "DEBUG") // In Production, we don't want to see DEBUG level stuff.
			return;

		$url = '';
		if (isset($_SERVER['REQUEST_URI'])) 
			{
			$full = true;
			$parse = parse_url(
				(isset($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'off') ? 'https://' : 'http://') .
				(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '')) . (($full) ? $_SERVER['REQUEST_URI'] : null)
			);
			$parse['port'] = $_SERVER["SERVER_PORT"]; // Setup protocol for sure (80 is default)
			$url = http_build_url('', $parse);
			$url = filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
			}
		
		$message = $username." ~~ ".$message." ~~ ".session_id()." ~~ ".$url ;
		
		
		$formatter = new LineFormatter( "%datetime% ~~ %channel%.%level_name%: ~~ %message% ~~ %context% ~~ %extra% ::::: \n" );

		$stream_handler = new StreamHandler($jrConfig['log_path'].$log_file, Logger::DEBUG);
		$stream_handler->setFormatter($formatter);
		
		$logger = new Logger($channel);
		$logger->pushProcessor(new \Monolog\Processor\WebProcessor);
		$logger->pushHandler(
			$stream_handler
			);

		$syslog_disabled = true;
		$disabled = explode(',', ini_get('disable_functions'));
		if (!in_array(' openlog', $disabled) && !in_array('openlog', $disabled)  && !in_array(' syslog', $disabled)  && !in_array('syslog', $disabled))
			{
			$syslog_disabled = false;
			}

		if (!$syslog_disabled)
			{
			if ( 
				!isset($jrConfig['syslog_host']) || 
				trim($jrConfig['syslog_host']) =="" || 
				!isset($jrConfig['syslog_port']) || 
				trim($jrConfig['syslog_port']) =="" 
				)
				{
				$syslogHandler = new SyslogHandler(
					'jomres', 
					LOG_USER
					);
				}
			else
				{
				$syslogHandler = new SyslogUdpHandler( 
					(string)$jrConfig['syslog_host'] ,
					(int)$jrConfig['syslog_port'] ,
					LOG_USER
					);
				}
			$output = "%channel%.%level_name%: %message%";
			$syslog_formatter = new LineFormatter($output);
			$syslogHandler->setFormatter($syslog_formatter);
			$logger->pushHandler($syslogHandler);
			}
		
		$logger->pushProcessor(function ($record) {
			$record['extra']['transaction_id'] = TRANSACTION_ID; // Transaction id is used to identify the caller ( microtime ) so that we can associate logs with actions
			return $record;
			});
		
		$context = array (  );
		
		switch ( $level )
			{
			default:
			case 'DEBUG':
				if ( $jrConfig['development_production'] == "development" )
					{
					$logger->addDebug($message , $context ); // Detailed debug information.
					}
				break;
			case 'INFO':
				$logger->addInfo($message , $context ); // Interesting events. Examples: User logs in, SQL logs.
				break;
			case 'NOTICE':
				$logger->addNotice($message , $context ); // Normal but significant events.
				break;
			case 'WARNING':
				$logger->addWarning($message , $context ); // Exceptional occurrences that are not errors. Examples: Use of deprecated APIs, poor use of an API, undesirable things that are not necessarily wrong.
				break;
			case 'ERROR':
				$logger->addError($message , $context ); // Runtime errors that do not require immediate action but should typically be logged and monitored.
				break;
			case 'CRITICAL':
				$logger->addCritical($message , $context ); // Critical conditions. Example: Application component unavailable, unexpected exception.
				break;
			case 'ALERT':
				$logger->addAlert($message , $context ); // Action must be taken immediately. Example: Entire website down, database unavailable, etc. This should trigger the SMS alerts and wake you up.
				break;
			case 'EMERGENCY':
				$logger->addEmergency($message , $context ); //Emergency: system is unusable.
				break;
			}
		}
	}