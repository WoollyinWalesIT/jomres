<?php
/**
 * Custom Flight methods that format json responses
 *
 * Customised methods for the Flight framework that is used by the REST API functionality. These methods allow us to include logging through Monolog. Also formats the API response in an envelope
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.4
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

		$envelope_data = Flight::response_envelope_data();

		if (class_exists('mcHandler')) {  // The framework has been included, therefore there's a chance a webhook has been triggered. Let's fire up the watcher to respond to any events
			$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
			$MiniComponents->triggerEvent('99994');
			
			if ( defined("FORCE_JOMRES_SESSION") && FORCE_JOMRES_SESSION == true ) {
				$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
				$tmpBookingHandler->close_jomres_session();
			}
		}

		logging::log_message(' Replied with code '.$code, 'API', 'DEBUG' , ' Replied with code '.$code.' and contents'.json_encode($data));
		$response = new stdClass();
		$response->data[$response_name] = $data;
		$response->meta['code'] = $code;
		$response->meta['site'] = $envelope_data;

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

	Flight::map('halt', function ($code = 204, $message = '' , $charset = 'utf-8' ) {

		$envelope_data = Flight::response_envelope_data();
		
		$code = 200;
		$log = ' Halted run '.$code.' with message '.$message;
		logging::log_message($log, 'API', 'DEBUG');

		$response = new stdClass();
		$response->code = $code;
		$response->meta['site'] = $envelope_data;
		$response->error_message = $message;

		$json = json_encode($response);
		Flight::response()
			->status($code)
			->header('Content-Type', 'application/json; charset='.$charset)
			->write($json)
			->send();
			exit;
	});

	Flight::map( 'response_envelope_data' , function () {

		$request = Flight::request();

		$data = [];

		$property_uid = Flight::get('response_envelope_property_uid');

		if ( (int) $property_uid > 0 && function_exists("get_showtime") ) {
			$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$basic_property_details->gather_data($property_uid);
			$data['property_name'] =  str_replace('&#39;', "'", $basic_property_details->property_name);
		}

		$live_site = '';
		if (function_exists("get_showtime")) {
			$data['live_site'] = get_showtime("live_site");
		}

		$data['base'] = $request->base;
		$data['url'] = $request->url;
		$data['method'] = $request->method;

		return $data;
	});
