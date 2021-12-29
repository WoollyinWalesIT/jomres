<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2021 Vince Wooll
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
		$this->siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$this->jrConfig = $this->siteConfig->get();

		if ($user_id == 'system' ) {
			$this->user = new stdClass();
			$this->user->accesslevel = 101;
			$this->user->username = 'system';
			$this->user->userid = 999999999;
		} else {
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
			$this->user->accesslevel = $thisJRUser->accesslevel;
			$this->user->username = $thisJRUser->username;
			$this->user->userid = $thisJRUser->id;
		}
		$this->system_token = $this->siteConfig->get_setting('system_token');

		if (!isset($this->system_token)) {
			$this->token = '';
		} else {
			$this->token = $this->system_token;
		}

		$this->retry_count = 0;

		$this->server = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/';
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

		if ($this->token == '') {
			$MiniComponents = jomres_getSingleton('mcHandler');
			if (isset($MiniComponents->registeredClasses['06005']['oauth']) && isset($client_secret) && trim($client_secret) != '' ) {

				$data = array('grant_type' => 'client_credentials', 'client_id' => $client_id, 'client_secret' => $client_secret);
				$token_request = $this->query_api('POST', '', $data);
				$response = json_decode($token_request['response']);

				if (is_null($response)) {
					// Uh oh, could be a 403 forbidden response, let's try to json decode $token_request
/*                    if (is_array($token_request)) {
                        $unhappy_response = $token_request['response'];
                    } else {
                        $unhappy_response = json_decode($token_request);
                    }*/


					if ( isset($token_request['response_code']) && $token_request['response_code'] == "403" ) {
						echo "<p class='alert alert-danger'>Error, tried to call API but received a 403 response, please visit the Admin > Jomres > Tools > Rest API test page. You may need to add \"Options +SymLinksIfOwnerMatch\" to the .conf file for this domain. If you don't have access to that file, then SymLinksIfOwnerMatch can be added to .htaccess. Also, check that htaccess.txt has been renamed to .htaccess (if running Joomla). Also check that url rewriting (RewriteEngine On) is enabled (a default copy of .htaccess would normally allow that). </p>";
					} elseif (isset($token_request['response_code']) && $token_request['response_code'] == "500")  {
                        echo "<p class='alert alert-danger'>Error, tried to call API but received a 500 response, please visit the Admin > Jomres > Tools > Rest API test page. Check that url rewriting (RewriteEngine On) is enabled (a default copy of .htaccess would normally allow that). </p>";
                    } else {
                        var_dump($token_request);
                    }
					return false;
				}

				if (isset($response->access_token)) {
					$token = $response->access_token;
					$this->save_token( $token );
				} else {
					throw new Exception($response->error_description);
				}
			}  else {
				throw new Exception("OAuth plugin not installed. At one time it was a separate plugin but now it is in Jomres Core. Is this a very old installation of Jomres?");
			}
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init_manager() {
		// We need to see if there's a user in the database, if there's not we'll create them.

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		// Temporary measure, older Quickstart installations had a client_id much bigger than 999999999 but that was changed, so Quickstart installations with the older id caused errors when they were udpated so now we're just going to hit things with a hammer for a few months until I can do new Quickstarts
		$query = "DELETE FROM #__jomres_oauth_clients WHERE user_id = 99999999999999999999 OR user_id = 4294967295";
		doInsertSql($query);


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
			$response = '';
			do {
				$response = $this->query_api($method, $endpoint, $data , $headers );
			} while ( $response == '' || $response == null );
			if ($response['response_code'] == '200' || $response['response_code'] == '204') {
				return json_decode($response['response']);
			} elseif ($response['response_code'] == '404') {
				return false;
			} else {
				throw new Exception('Call to API '.$endpoint.' resulted in response code '.$response['response_code'].' and message '.$response['response']);
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
		curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout after 30 seconds. On my laptop, which is struggling, had to up this limit to 60 seconds because 30 seconds was resulting in response code 0 (zero)
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
					"Accept: application/json",
                    "Expect:"
					);
				$arr =  array_merge ( $default_headers , $headers ) ;

				curl_setopt($ch, CURLOPT_HTTPHEADER, $arr );
			} else {
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Authorization: Bearer '.$this->token,
					'Accept: application/json',
                    "Expect:"
					));
			}

		}

		curl_setopt($ch,CURLOPT_VERBOSE,true);
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        $headerSent = curl_getinfo($ch, CURLINFO_HEADER_OUT );

		// jomres_call_api is used by the system to call itself and use rest api features
        // For debugging purposes we will store sent and received responses

        $result = curl_exec($ch);
		$status = curl_getinfo($ch);

		$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        logging::log_message("Sending ".$method." to ".$this->server.$endpoint." returned response code ".$response_code , 'jomres_call_api', 'DEBUG' ,  serialize($result) );
        //logging::log_message("Response code : ".$response_code , 'jomres_call_api', 'DEBUG' , $headerSent );
        //logging::log_message("Response ".$result , 'jomres_call_api', 'DEBUG' , $headerSent );
       // logging::log_message("Status ".json_encode($status) , 'jomres_call_api', 'DEBUG' , $headerSent );

        curl_close($ch);

		if ($response_code == 401 ) { // The token isn't valid
			$this->token = ''; // Wipe the token, and then initialise again
			$this->init(); // Get a new token
			$this->retry_count++;
			if ($this->retry_count <= 5) {
				$this->query_api($method , $endpoint , $data , $headers ); // Retry this again
			} else {
				throw new Exception("Cannot get token from self");
			}

		}
		return array('response_code' => $response_code, 'response' => $result, 'status' => $status);
	}

	private function save_token( $token )
	{
		$this->siteConfig->update_setting('system_token', $token );
		$this->token = $this->siteConfig->get_setting('system_token');
		$this->siteConfig->init();
	}
}
