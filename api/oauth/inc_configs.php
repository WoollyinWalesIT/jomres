<?php
/**
 * Gathers database connection information from CMS configuration files 
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
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
    if ($CONFIG->error_reporting == 'development') {
        define('PRODUCTION', true);
        } else {
        define('PRODUCTION', false);
        }
} elseif (file_exists(JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'wp-config.php')) {
    $db_details = array();
	$wp_config_file = file(JOMRES_API_CMS_ROOT.DIRECTORY_SEPARATOR.'wp-config.php');
	$settings = array('DB_NAME','DB_USER','DB_PASSWORD','DB_HOST');
	
	foreach ( $wp_config_file as $line ) {
		$matches = array();
		if (preg_match('/define\(\'(.*?)\',\s*\'(.*)\'\);/i', $line, $matches)) {
			$name=$matches[1];
			$value=$matches[2];
			if(in_array( $name, $settings ))
				$db_details[$name]= $value;
		}
		if (strpos($line, '$table_prefix') !== false) {
			$dbprefix = explode(' = ',$line)[1];
			$dbprefix = str_replace('\'', '', $dbprefix);
			$dbprefix = trim(str_replace(';', '', $dbprefix));
		}
	}

    $db = $db_details['DB_NAME'];
    $host = $db_details['DB_HOST'];
    $dsn = 'mysql:dbname='.$db.';host='.$host;
    $username = $db_details['DB_USER'];
    $password = $db_details['DB_PASSWORD'];
    define('PRODUCTION', false);
} else {
    die(json_encode('Cant find configuration file.')); // No findie el config file!
}

define('JOMRES_API_DB_NAME', $db);
define('JOMRES_API_DB_HOST', $host);
define('JOMRES_API_DB_USERNAME', $username);
define('JOMRES_API_DB_PASSWORD', $password);
define('JOMRES_API_DB_DB_PREFIX', $dbprefix);
