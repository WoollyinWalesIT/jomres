<?php
/**
 *
 * @package Jomres\Core\REST_API
 *
 * Gathers database connection information from CMS configuration files
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */


if (!defined('JOMRES_API_CMS_ROOT')) {
	define('JOMRES_API_CMS_ROOT', dirname(dirname(dirname(dirname(__FILE__)))));
	define('JOMRES_API_JOMRES_ROOT', dirname(dirname(dirname(__FILE__))));
}

if (file_exists(JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'configuration.php')) {
	if (!defined('_JEXEC')) {
		define('_JEXEC', 1);
	}
	require_once JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'configuration.php';

	$CONFIG = new JConfig();

	$db = $CONFIG->db;
	$host = $CONFIG->host;
	$dbprefix = $CONFIG->dbprefix;
	$dsn = 'mysql:dbname='.$db.';host='.$host;
	$username = $CONFIG->user;
	$password = $CONFIG->password;
} elseif (file_exists(JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'wp-config.php')) {
	$db_details = array();

	$wp_config_file = file(JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'wp-config.php');
	$settings = array('DB_NAME','DB_USER','DB_PASSWORD','DB_HOST');

	foreach ( $wp_config_file as $line ) {
		if (strpos($line, '$table_prefix') !== false) {
			$dbprefix = explode(' = ',$line)[1];
			$dbprefix = str_replace('\'', '', $dbprefix);
			$dbprefix = trim(str_replace(';', '', $dbprefix));
		}
	}

	$db_details = get_wordpress_data(JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'wp-config.php');

	$db = $db_details['db_name'];
	$host = $db_details['db_host'];
	$dsn = 'mysql:dbname='.$db.';host='.$host;
	$username = $db_details['db_user'];
	$password = $db_details['db_password'];
} else {
	die(json_encode('Cant find configuration file.')); // No findie el config file!
}

define('JOMRES_API_DB_NAME', $db);
define('JOMRES_API_DB_HOST', $host);
define('JOMRES_API_DB_USERNAME', $username);
define('JOMRES_API_DB_PASSWORD', $password);
define('JOMRES_API_DB_DB_PREFIX', $dbprefix);


function get_wordpress_data( $file_location ) {
	$content = @file_get_contents( $file_location  );

	if( ! $content ) {
		return false;
	}

	$params = [
		'db_name' => "/define.+?'DB_NAME'.+?'(.*?)'.+/",
		'db_user' => "/define.+?'DB_USER'.+?'(.*?)'.+/",
		'db_password' => "/define.+?'DB_PASSWORD'.+?'(.*?)'.+/",
		'db_host' => "/define.+?'DB_HOST'.+?'(.*?)'.+/",
	];

	$return = [];

	foreach( $params as $key => $value ) {

		$found = preg_match_all( $value, $content, $result );

		if( $found ) {
			$return[ $key ] = $result[ 1 ][ 0 ];
		} else {
			$return[ $key ] = false;
		}

	}

	return $return;
}
