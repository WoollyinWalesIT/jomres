<?php
/**
 *
 *  @package Jomres\Core\REST_API
 *
 * Allows REST API features to call the same server to facillitate reuse of existing REST API features
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
*
* Call a local REST API feature. Will only work if the original OAuth2 key pair are authorised to call the specific API function (in scope)
*
*/
class call_self
{
	/**
	*
	* Constructor. Sets up endpoints based on the original information
	*
	*/
    public function __construct()
    {
        $this->token = Flight::get('token');
        $request = Flight::request();
        $url = isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
        $url .= '://'.$_SERVER['SERVER_NAME'];
        $url .= in_array($_SERVER['SERVER_PORT'], array('80', '443')) ? '' : ':'.$_SERVER['SERVER_PORT'];
        $url .= $request->base;
        $this->self_url = $url.'/';
    }

	/**
	*
	* Uses the Call class to call the local server
	*
	*/
    public function call($elements = array())
    {
        if (empty($elements)) {
            throw new Exception('Error, no request elements set ');
        }

/* 		if (Flight::get("original_call") == "/".$elements["request"])
            throw new Exception("Error, recursion. "); */

        $call = new call();

        $options = array(
            'server' => $this->self_url,
            'token' => $this->token,
            'method' => $elements['method'],
            'request' => $elements['request'],
            'data' => $elements['data'],
            );

        $response = $call->call_server($options);

        return $response['result'];
    }
}
