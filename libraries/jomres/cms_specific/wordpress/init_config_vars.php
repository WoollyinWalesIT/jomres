<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

if (!defined('WPINC')) {
	require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'wp-config.php';
}




$jomresConfig_live_site = get_site_url('siteurl');
if (defined('API_STARTED')) {
	$jomresConfig_live_site = str_replace('/jomres/api', '', $jomresConfig_live_site);
}

$jomresConfig_lang = 'en-GB';
$jomresConfig_lang_shortcode = 'en';
if (!defined('AUTO_UPGRADE')) {
	$jomresConfig_lang = str_replace('_', '-', get_locale());
	
	//get lang short code
	//TODO: this is unreliable at this point, for example for pt-BR and pt-PT, because the language code is always pt.
	//later in the code in cms_specific_urls.php the correct shortcode will be set
	$jomresConfig_lang_shortcode = substr($jomresConfig_lang, 0, 2);
}

include(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php');

if ($jrConfig['bootstrap_version'] == 0 && AJAXCALL === false && !is_admin() ) {
    // If theme is not bootstrap based, we can still include BS and hope that everything works (highly dependant on the theme)
    // JS
    wp_enqueue_script('prefix_bootstrap' , '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery') );

    // CSS
    wp_register_style('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('prefix_bootstrap');
    wp_register_style('prefix_bootstrap_theme', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css');
    wp_enqueue_style('prefix_bootstrap_theme');
}

add_filter( 'wp_editor_settings', function($settings) {
    $settings['media_buttons']=FALSE;
    return $settings;
});

$showtime = jomres_getSingleton('showtime');

$showtime->error_reporting = 0;

$showtime->lang = $jomresConfig_lang;
$showtime->lang_shortcode = $jomresConfig_lang_shortcode;
$showtime->live_site = $jomresConfig_live_site;
$showtime->offline = false;

global $wpdb; //wp global
$showtime->db       = $wpdb->dbname;
$showtime->user     = $wpdb->dbuser;
$showtime->password = $wpdb->dbpassword;
$showtime->host     = $wpdb->dbhost;
$showtime->secret   = AUTH_SALT;
$showtime->dbprefix = $wpdb->prefix;

$showtime->sitename = get_option('blogname');
$showtime->mailer   = 'mail';
$showtime->mailfrom = get_option('admin_email');
$showtime->fromname = get_option('blogname');
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
