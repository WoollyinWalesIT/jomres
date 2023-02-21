<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 */

require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'configuration.php';
$CONFIG = new JConfig();

if (!defined('AUTO_UPGRADE')) {
	//JFactory::getConfig()->setValue('config.caching', 0);
	//JRegistry::set('config.caching', 0);
	if (class_exists('JURI')) {
		$jomresConfig_live_site = @JURI::root();
	} else {
		$detect_os = strtoupper($_SERVER[ 'SERVER_SOFTWARE' ]); // converted to uppercase
		$IIS = strpos($detect_os, 'IIS');
		if ($IIS > 0) { // Win NT, therefore $_SERVER['REQUEST_URI'] == null
			$path_info = $_SERVER[ 'PATH_INFO' ];
			$_URI = explode('/', $path_info);
		} else {
			if (!strpos("/", $_SERVER[ 'REQUEST_URI' ])) {
				list($path, $args) = $_SERVER[ 'REQUEST_URI' ];
			} else {
				list($path, $args) = explode('?', $_SERVER[ 'REQUEST_URI' ]);
			}

			$_URI = explode('/', $path);
		}
		array_shift($_URI);
		$_URI = array_slice($_URI, 0, count($_URI) - 1);
		array_unshift($_URI, $_SERVER[ 'SERVER_NAME' ]);

		$jomresConfig_live_site = 'http://'.implode('/', $_URI);
	}
} else {
	$detect_os = strtoupper($_SERVER[ 'SERVER_SOFTWARE' ]); // converted to uppercase
	$IIS = strpos($detect_os, 'IIS');
	if ($IIS > 0) { // Win NT, therefore $_SERVER['REQUEST_URI'] == null
		$path_info = $_SERVER[ 'PATH_INFO' ];
		$_URI = explode('/', $path_info);
	} else {
		@list($path, $args) = explode('?', $_SERVER[ 'REQUEST_URI' ]);
		$_URI = explode('/', $path);
	}
	array_shift($_URI);
	$_URI = array_slice($_URI, 0, count($_URI) - 1);
	array_unshift($_URI, $_SERVER[ 'SERVER_NAME' ]);

	$jomresConfig_live_site = 'http://'.implode('/', $_URI);
}

if ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
	$jomresConfig_live_site = str_replace('http://', 'https://', $jomresConfig_live_site);
}

$jomresConfig_live_site = str_replace('/administrator/', '', $jomresConfig_live_site);
$jomresConfig_live_site = str_replace('/administrator', '', $jomresConfig_live_site);
if (substr($jomresConfig_live_site, -1) == '/') {
	$jomresConfig_live_site = substr($jomresConfig_live_site, 0, -1);
}

if (defined('API_STARTED')) {
	$jomresConfig_live_site = str_replace('/jomres/api', '', $jomresConfig_live_site);
}

$jomresConfig_lang = 'en-GB';
$jomresConfig_lang_shortcode = 'en';
if (!defined('AUTO_UPGRADE')) {
	$jomresConfig_lang = JFactory::getLanguage()->getTag();
	
	//get lang short code
	$languages = JLanguageHelper::getLanguages('lang_code');
	
	if (isset($languages[$jomresConfig_lang])) {
		$jomresConfig_lang_shortcode = $languages[$jomresConfig_lang]->sef;
	}
}

$showtime = jomres_singleton_abstract::getInstance('showtime');

$showtime->error_reporting = $CONFIG->error_reporting;
$showtime->dbtype = $CONFIG->dbtype;
$showtime->lang = $jomresConfig_lang;
$showtime->lang_shortcode = $jomresConfig_lang_shortcode;
$showtime->live_site = $jomresConfig_live_site;
$showtime->offline = $CONFIG->offline;
$showtime->db = $CONFIG->db;
$showtime->sitename = $CONFIG->sitename;
$showtime->lifetime = $CONFIG->lifetime;
$showtime->MetaDesc = $CONFIG->MetaDesc;
$showtime->MetaAuthor = $CONFIG->MetaAuthor;
$showtime->debug = $CONFIG->debug;
$showtime->mailer = $CONFIG->mailer;
$showtime->mailfrom = $CONFIG->mailfrom;
$showtime->fromname = $CONFIG->fromname;
$showtime->sendmail = $CONFIG->sendmail;
$showtime->smtpauth = $CONFIG->smtpauth;
$showtime->smtpuser = $CONFIG->smtpuser;
$showtime->smtppass = $CONFIG->smtppass;
$showtime->smtphost = $CONFIG->smtphost;
$showtime->smtpsecure = $CONFIG->smtpsecure;
$showtime->smtpport = $CONFIG->smtpport;
$showtime->secret = $CONFIG->secret;
$showtime->dbprefix = $CONFIG->dbprefix;
$showtime->user = $CONFIG->user;
$showtime->password = $CONFIG->password;
$showtime->db = $CONFIG->db;
$showtime->host = $CONFIG->host;
$showtime->helpurl = $CONFIG->helpurl;
$showtime->editor = $CONFIG->editor;
$showtime->caching = $CONFIG->caching;
$showtime->cachetime = $CONFIG->cachetime;
$showtime->offset = $CONFIG->offset;
$showtime->sef = $CONFIG->sef;
$showtime->gzip = $CONFIG->gzip;
