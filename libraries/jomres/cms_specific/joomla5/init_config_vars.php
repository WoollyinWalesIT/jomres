<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
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
use Joomla\CMS\Factory;
use Joomla\CMS\Language\LanguageHelper;
use Joomla\CMS\Uri\Uri;

require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'configuration.php';
$CONFIG = new JConfig();

$uri = Uri::getInstance();
$jomresConfig_live_site = rtrim(Uri::root(), '/');

if (defined('API_STARTED')) {
	$jomresConfig_live_site = str_replace('/jomres/api', '', $jomresConfig_live_site);
}

$jomresConfig_lang = 'en-GB';
$jomresConfig_lang_shortcode = 'en';
if (!defined('AUTO_UPGRADE')) {
	$jomresConfig_lang = Factory::getLanguage()->getTag();
	
	//get lang short code
	$languages = LanguageHelper::getLanguages('lang_code');


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
