<?php
/**
 * Custom Flight methods that format json responses
 *
 * Customised methods for the Flight framework that is used by the REST API functionality. These methods allow us to include logging through Monolog. Also formats the API response in an envelope
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 */

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\REST_API
	 *
	 * Responds with JSON encoded values returned from individual REST API feature plugins
	 *
	 */

    Flight::map('json', function ($response_name, $data, $code = 200, $encode = true, $charset = 'utf-8') {
		if (class_exists('mcHandler')) {  // The framework has been included, therefore there's a chance a webhook has been triggered. Let's fire up the watcher to respond to any events
			$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
			$MiniComponents->triggerEvent('99994');
		}
        logging::log_message(' Replied with code '.$code, 'API', 'DEBUG' , ' Replied with code '.$code.' and contents'.json_encode($data));
        $response = new stdClass();
        $response->data[$response_name] = $data;
        $response->meta['code'] = $code;
        $json = json_encode($response);
        Flight::response()
            ->status($code)
            ->header('Content-Type', 'application/json; charset='.$charset)
            ->write($json)
            ->send();
			exit;
    });
	
	/**
	 * 
	 * Halts execution of an API feature plugin with an error code. Typically used when the user doesn't have relevant permissions or they have sent faulty data and we cannot continue
	 *
	 */

    Flight::map('halt', function ($code = 200, $message = '') {

		
        $log = ' Halted run '.$code.' with message '.$message;
        logging::log_message($log, 'API', 'DEBUG');
        $response = new stdClass();
        $response->meta['code'] = $code;
        $response->meta['error_message'] = $message;
        $json = json_encode($response);
        Flight::response()
            ->status($code)
            ->write($json)
            ->send();
			exit;
    });
