<?php
/**
 *
 *  @package Jomres\Core\REST_API
 *
 * Handle a request for an OAuth2.0 Access Token and send the response to the client
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.5
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */


require_once __DIR__.'/server.php';

$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
$response = $server->getResponse();
if ($response->getStatusCode() != 200) {
    logging::log_message($client_id.' attempted to login but failed. Reason : '.$response->getParameter('error_description'), 'API', 'WARNING');
}
die();
