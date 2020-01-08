<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// This allows Jomres to call it's own API. As more functionality is added to the API then there are times that that will be the choice of connection.

	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_call_api
{
	private $token;
	public $server;

	public function __construct( $user_id = 'system' )
	{
		if ($user_id == 'system' ) {
			$this->user = new stdClass();
			$this->user->accesslevel = 101;
			$this->user->username = 'system';
			$this->user->userid = 99999999999999;
		} else {
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
			$this->user->accesslevel = $thisJRUser->accesslevel;
			$this->user->username = $thisJRUser->username;
			$this->user->userid = $thisJRUser->id;
		}
		
		$this->init();
		
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function init() {
		// If the user is registered, we'll create a new API client and secret for that user if needed. That way, any calls done to the API will be traceable back to that user.
		if ( $this->user->accesslevel > 1 ) { // The user's registered or greater
			$auth_deets = $this->init_manager();
			$client_id = $auth_deets['client_id'];
			$client_secret = $auth_deets['client_secret'];
		}

		$MiniComponents = jomres_getSingleton('mcHandler');
		if (isset($MiniComponents->registeredClasses['06005']['oauth']) && isset($client_secret) && trim($client_secret) != '' ) {
			$this->server = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/';
			$data = array('grant_type' => 'client_credentials', 'client_id' => $client_id, 'client_secret' => $client_secret);
			$token_request = $this->query_api('POST', '', $data);
			$response = json_decode($token_request['response']);

			if (isset($response->access_token)) {
				$this->token = $response->access_token;
			} else {
				throw new Exception($response->error_description);
			}
		}  else {
				throw new Exception("OAuth plugin not installed. At one time it was a separate plugin but now it is in Jomres Core. Is this a very old installation of Jomres?");
			}
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function init_manager() {
		// We need to see if there's a user in the database, if there's not we'll create them. 
		$query = "SELECT client_id,scope FROM #__jomres_oauth_clients WHERE client_id = '".$this->user->username."' LIMIT 1";
		$result = doSelectSql($query);
		if (empty($result)) {
			$query = "INSERT INTO #__jomres_oauth_clients 
				(`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id`) 
				VALUES 
				('".$this->user->username."','".createNewAPIKey()."','',null,'*',".$this->user->userid.")";
			if (!doInsertSql($query, jr_gettext('_OAUTH_CREATED', '_OAUTH_CREATED', false))) {
			   throw new Exception('Unable to update oauth client details, mysql db failure');
			}
		}
		$query = "SELECT client_secret FROM #__jomres_oauth_clients WHERE client_id = '".$this->user->username."' LIMIT 1";
		$client_secret = doSelectSql($query, 1);
		return array ( "client_id" => $this->user->username ,"client_secret" => $client_secret );
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function send_request($method = '', $endpoint = '', $data = array() ,  $headers = array() ) {
		if ($this->token != '') {
			$response = $this->query_api($method, $endpoint, $data , $headers );
			if ($response['response_code'] == '200' || $response['response_code'] == '204') {
				return json_decode($response['response']);
			} else {
				throw new Exception('Call to API resulted in response code '.$response['response_code'].' and message '.$response['response']);
			}
		} else {
			throw new Exception('Could not call API as token not setup. Is the API Core installed?');
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function query_api($method = 'GET', $endpoint = '', $data = array() , $headers = array() )
	{
		$ch = curl_init($this->server.$endpoint);
		
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
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

		if (isset($this->token) && $this->token != '') {
			
			if (isset($headers) && count($headers) > 0 ) {
				$default_headers = array (
					"Authorization: Bearer ".$this->token ,
					"Accept: application/json"
					);
				$arr =  array_merge ( $default_headers , $headers ) ;
				curl_setopt($ch, CURLOPT_HTTPHEADER, $arr );
			} else {
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Authorization: Bearer '.$this->token,
					'Accept: application/json',
					));
			}

		}
		
		curl_setopt($ch,CURLOPT_VERBOSE,true);
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		
		$result = curl_exec($ch);
		$status = curl_getinfo($ch);
		
		$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		return array('response_code' => $response_code, 'response' => $result, 'status' => $status);
	}
	
}
