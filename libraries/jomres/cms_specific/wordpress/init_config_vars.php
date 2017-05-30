<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

if (!defined('WPINC')) {
	require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'wp-config.php';
}

if (isset($_REQUEST[ 'no_html' ])) {
    $no_html = (int) $_REQUEST[ 'no_html' ];
} else {
    $no_html = 0;
}

$jomresConfig_live_site = get_option('siteurl');
if (defined('API_STARTED')) {
    $jomresConfig_live_site = str_replace('/jomres/api', '', $jomresConfig_live_site);
}

$jomresConfig_lang = 'en-GB';
if (!defined('AUTO_UPGRADE')) {
    $jomresConfig_lang = str_replace('_', '-', get_locale());
}

$showtime = jomres_getSingleton('showtime');

$showtime->error_reporting = 0;

$showtime->lang = $jomresConfig_lang;
$showtime->live_site = $jomresConfig_live_site;
$showtime->offline = false;

global $wpdb; //wp global
$showtime->db = $wpdb->dbname;
$showtime->user = $wpdb->dbuser;
$showtime->password = $wpdb->dbpassword;
$showtime->host = $wpdb->dbhost;
$showtime->secret = AUTH_SALT;
$showtime->dbprefix = $wpdb->prefix;

$showtime->sitename = get_option('blogname');
$showtime->mailer = 'mail';
$showtime->smtpuser = get_option('mailserver_login');
$showtime->smtppass = get_option('mailserver_pass');
$showtime->smtphost = get_option('mailserver_url');
$showtime->smtpport = get_option('mailserver_port');
$showtime->smtpauth = 0;
$showtime->smtpsecure = '';
//$showtime->gzip = get_option('gzipcompression');
$showtime->gzip = '0'; //this is not used in wp

if (get_option('permalink_structure') != '') {
    $showtime->sef = '1';  // Sef urls are enabled.
} else {
    $showtime->sef = '0';
}
