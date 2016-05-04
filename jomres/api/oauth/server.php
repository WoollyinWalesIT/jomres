<?php

define( '_JEXEC', 1 );
require_once( realpath(dirname(__FILE__) . '../../../../') . DIRECTORY_SEPARATOR . 'configuration.php' );
$CONFIG = new JConfig();

$dbtype		= $CONFIG->dbtype;
$db			= $CONFIG->db;
$host		= $CONFIG->host;
$dbprefix	= $CONFIG->dbprefix;
$dsn		= 'mysql:dbname='.$db.';host='.$host ;
$username	= $CONFIG->user;
$password	= $CONFIG->password;


$tables = array (
	'client_table' => $dbprefix.'jomres_oauth_clients',
	'access_token_table' => $dbprefix.'jomres_oauth_access_tokens',
	'refresh_token_table' => $dbprefix.'jomres_oauth_refresh_tokens',
	'code_table' => $dbprefix.'jomres_oauth_authorization_codes',
	'user_table' => $dbprefix.'jomres_oauth_users',
	'jwt_table'  => $dbprefix.'jomres_oauth_jwt',
	'jti_table'  => $dbprefix.'oauth_jti',
	'scope_table'  => $dbprefix.'jomres_oauth_scopes',
	'public_key_table'  => $dbprefix.'oauth_public_keys',
	);

// error reporting (this is a demo, after all!)
ini_set('display_errors',1);error_reporting(E_ALL);

// Autoloading (composer is preferred, but for this example let's just do this)
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'OAuth2'.DIRECTORY_SEPARATOR.'Autoloader.php');
OAuth2\Autoloader::register();

// $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"
$storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password), $tables);

// Pass a storage object or array of storage objects to the OAuth2 server class
$server = new OAuth2\Server($storage  );

// Add the "Client Credentials" grant type (it is the simplest of the grant types)
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));

// Add the "Authorization Code" grant type (this is where the oauth magic happens)
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));