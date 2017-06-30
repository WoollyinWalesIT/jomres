<?php

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

$tables = array(
    'client_table' => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_clients',
    'access_token_table' => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_access_tokens',
    'refresh_token_table' => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_refresh_tokens',
    'code_table' => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_authorization_codes',
    // 'user_table' => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_users', // We don't use this
    // 'jwt_table'  => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_jwt',  // We don't use this
    // 'jti_table'  => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_jti', // We don't use this
    'scope_table' => JOMRES_API_DB_DB_PREFIX.'jomres_oauth_scopes',  // We don't use this, but the OAuth2 class does
    //'public_key_table'  => JOMRES_API_DB_DB_PREFIX.'oauth_public_keys', // We don't use this
    );

$existing_tables = array();
$db = new PDO("mysql:dbname=$db;host=$host", $username, $password);
$result = $db->query('show tables');
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    $existing_tables[] = $row[0];
}
unset($db);
foreach ($tables as $table) {
    if (!in_array($table, $existing_tables)) {
        header('Content-Type', 'application/json; charset=utf-8');
        $obj = new stdClass();
        $obj->success = false;
        $obj->data = array('Error, API not installed');
        echo json_encode($obj);
        die();
    }
}

// error reporting
ini_set('display_errors', 1); error_reporting(E_ALL);

// Autoloading (composer is preferred, but for this example let's just do this)
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'OAuth2'.DIRECTORY_SEPARATOR.'Autoloader.php';
OAuth2\Autoloader::register();

// $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"
$storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password), $tables);

// Pass a storage object or array of storage objects to the OAuth2 server class
$server = new OAuth2\Server($storage , 
	array(
		'access_lifetime' => 60*60*24*14, // 14 days
		'refresh_token_lifetime' => 2700000,
		'allow_implicit' => true,
		'enforce_state' => false
		)
	);

// Add the "Client Credentials" grant type (it is the simplest of the grant types)
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));

// Add the "Authorization Code" grant type (this is where the oauth magic happens)
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));
