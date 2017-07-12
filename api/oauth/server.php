<?php

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
$db = new PDO("mysql:dbname=$db;host=$host", JOMRES_API_DB_USERNAME, JOMRES_API_DB_PASSWORD);
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
$storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => JOMRES_API_DB_USERNAME, 'password' => JOMRES_API_DB_PASSWORD), $tables);

// Pass a storage object or array of storage objects to the OAuth2 server class
$server = new OAuth2\Server($storage , 
	array(
		'access_lifetime' => 60*60*24*365, // 365 days
		'refresh_token_lifetime' => 2700000,
		'allow_implicit' => true,
		'enforce_state' => false
		)
	);

// Add the "Client Credentials" grant type (it is the simplest of the grant types)
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));

// Add the "Authorization Code" grant type (this is where the oauth magic happens)
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));
