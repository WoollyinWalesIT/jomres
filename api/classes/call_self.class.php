<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class call_self
{
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
