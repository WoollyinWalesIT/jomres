<?php
// include our OAuth2 Server object

require_once __DIR__.'/server.php';

// Handle a request for an OAuth2.0 Access Token and send the response to the client
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
$response = $server->getResponse();
if ($response->getStatusCode() != 200)
	{
	logging::log_message($client_id." attempted to login but failed. Reason : ".$response->getParameter('error_description') , "WARNING" );
	}
die();