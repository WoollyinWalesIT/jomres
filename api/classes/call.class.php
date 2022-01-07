<?php
/**
 *
 *  @package Jomres\Core\REST_API
 *
 * Calls a remote API when handed a REST API set of options
 * 
 * @todo Test and confirm it is still functional. Convert to use Guzzle
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * 
	 * Allows the REST API to call another server via OAuth2
	 *
	 */

class call
{	
	/**
	 * 
	 * Constructor
	 *
	 */

	public function __construct()
	{
	}

	/**
	*
	* Calls the remote server
	*
	*/
	public function call_server($options = array() )
	{
		if (empty($options)) {
			throw new Exception('Error, no request elements set ');
		}

		$server = $options['server'];
		$token = $options['token']['access_token'];
		$method = $options['method'];
		$request = $options['request'];
		$data = $options['data'];

		$ch = curl_init($server.$request);

		if (isset($options['headers']) && count($options['headers']) > 0 ) {
			$default_headers = array (
				"Authorization: Bearer ".$token ,
				"Accept: application/json"
				);
			$arr =  array_merge ( $default_headers , $options['headers'] ) ;
			curl_setopt($ch, CURLOPT_HTTPHEADER, $arr );
		} else {
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Authorization : Bearer '.$token,
				'Accept: application/json',
				));
		}
		
		switch ($method) {
			//########################################################################################
			case 'POST':
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
				break;
			case 'DELETE':
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
				break;
			case 'PUT':
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
				break;
			default:
				break;
			}


			
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		
		$result = curl_exec($ch);
		$status = curl_getinfo($ch );
		$errors = curl_error($ch);
		$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);
		return array('result' => $result, 'status' => $status);
	}
}
