<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.23
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

$scriptname = str_replace('/', '', $_SERVER[ 'PHP_SELF' ]);

require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'wp-config.php';

if (isset($_REQUEST[ 'no_html' ])) {
    $no_html = (int) $_REQUEST[ 'no_html' ];
} else {
    $no_html = 0;
}

$jomresConfig_live_site = get_option('siteurl');
if (defined('API_STARTED')) {
    $jomresConfig_live_site = str_replace('/jomres/api', '', $jomresConfig_live_site);
}

$scriptname = str_replace('/', '', $_SERVER['PHP_SELF']);

$jomresConfig_lang = 'en-GB';
if (!strstr($scriptname, 'install_jomres.php')) {
    $jomresConfig_lang = str_replace('_', '-', get_locale());
}

$showtime = jomres_getSingleton('showtime');

$showtime->error_reporting = 0;

$showtime->lang = $jomresConfig_lang;
$showtime->live_site = $jomresConfig_live_site;
$showtime->offline = false;
$showtime->db = DB_NAME;
$showtime->user = DB_USER;
$showtime->password = DB_PASSWORD;
$showtime->host = DB_HOST;
$showtime->secret = AUTH_SALT;

global $wpdb; //wp global
$showtime->dbprefix = $wpdb->prefix;

$showtime->sitename = get_option('blogname');
$showtime->mailer = 'mail';
$showtime->smtpuser = get_option('mailserver_login');
$showtime->smtppass = get_option('mailserver_pass');
$showtime->smtphost = get_option('mailserver_url');
$showtime->smtpport = get_option('mailserver_port');
//$showtime->gzip = get_option('gzipcompression');
$showtime->gzip = '0'; //this is not used in wp

if (get_option('permalink_structure') != '') {
    $showtime->sef = '1';  // Sef urls are enabled.
} else {
    $showtime->sef = '0';
}
