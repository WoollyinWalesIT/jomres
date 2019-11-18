<?php
/**
 *
 *  @package Jomres\Core\REST_API
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */

 	
	/**
	 * 
     * Parses PUT form variables and puts them into the $GLOBALS variable if required for use by api features
     *
     * PHP doesn't natively handle PUT requests, however standard REST API functionality is to use PUT method requests when performing updates. I haven't been as consistent with this as I should have been to date, however in the case of updating tariffs it's absolutely required to allow PUT requests to behave as forms therefore...
     * To get around that we will parse the "input" of PUT method requests and put them into $GLOBALS['PUT']. Api features can then access $GLOBALS['PUT'] to then get $_PUT for their own use, in just the same way as they would $_POST. Whilst technically using the "global" function is marginally, a teeny bit quicker, using $_PUT = $GLOBALS['PUT']; is much more consistent with how form fields are used in PHP, and it makes it obvious that we are working with super globals. This consistency will prove it's worth a few years down the road.
     * The parts formatting section of this script was originally posted on Stack Overflow to show a user how to parse PUT requests for file uploading. As there is currently no intention of allowing file uploads (but things might change) I have commented the line after case 'userfile': to prevent file uploads through the API.
	 *
	 */

if ($_SERVER['REQUEST_METHOD']==="PUT") {
	$raw_data = file_get_contents('php://input');
	if ($raw_data != '' ) {
		$boundary = substr($raw_data, 0, strpos($raw_data, "\r\n"));

		// Fetch each part
		$parts = array_slice(explode($boundary, $raw_data), 1);
		$data = array();

		if (!empty($parts)) {
			foreach ($parts as $part) {
				// If this is the last part, break
				if ($part == "--\r\n") break; 

				// Separate content from headers
				$part = ltrim($part, "\r\n");
				list($raw_headers, $body) = explode("\r\n\r\n", $part, 2);

				// Parse the headers list
				$raw_headers = explode("\r\n", $raw_headers);
				$headers = array();
				foreach ($raw_headers as $header) {
					list($name, $value) = explode(':', $header);
					$headers[strtolower($name)] = ltrim($value, ' '); 
				} 

				// Parse the Content-Disposition to get the field name, etc.
				if (isset($headers['content-disposition'])) {
					$filename = null;
					preg_match(
						'/^(.+); *name="([^"]+)"(; *filename="([^"]+)")?/', 
						$headers['content-disposition'], 
						$matches
					);
					list(, $type, $name) = $matches;
					isset($matches[4]) and $filename = $matches[4]; 

					// handle your fields here
					switch ($name) {
						// this is a file upload
						case 'userfile':
							 //file_put_contents($filename, $body);
							 break;

						// default for all other files is to populate $data
						default: 
							parse_str ($name, $test);
							$var_name = key($test);
							if (is_array($test[$var_name])) { // If it's an array itself then we will populate the $data[$var_name] with the array contents, which is consistent with how $_POSTed arrays are handled
								$index =  key($test[$var_name]);
								$data[$var_name][$index] = substr($body, 0, strlen($body) - 2);
							} else {
								$data[$name] = substr($body, 0, strlen($body) - 2);
							}
							 break;
					} 
				}
			}
		}
	} else {
		$data = array();
	}
	$GLOBALS['PUT'] = $data;
	
}
