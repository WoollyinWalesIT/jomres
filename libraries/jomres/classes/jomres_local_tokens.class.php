<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

	#[AllowDynamicProperties]

class jomres_local_tokens
{

	/**
	 *
	 * Allows plugins and functionality to create API tokens that are specific to them, silently.
	 *
	 */

	public function __construct()
	{
		$this->token = null;
		$this->user_id = 0;

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$this->system_api_capable = (bool) $jrConfig['api_capable'];

	}
	
	/**
	 *
	 * Get the token for the named item. If it doesn't exist, it will be created, if the user id is valid
	 *
	 * Token name : string, the name of the token, which will be stored in the user parameters in guest_profile table
	 * Itentifier : The human friendly name of the token
	 * Scope : The scope that the api feature requires that the api have permission to access (see scopes.json files)
	 *
	 */
	public function get_token( $token_name = '' , $identifier = '' , $scope = '' )
	{
		// No point in continuing if the system doesn't support the REST API functionality
		if (!$this->system_api_capable) {
			return false;
		}

		if ($this->user_id === 0 ) {
			throw new Exception("user id not set");
		}

		if ($token_name === '' ) {
			throw new Exception("plugin token name not set");
		}

		if ($identifier === '' ) {
			throw new Exception("plugin token identifier not set");
		}

		if ($scope === '' ) {
			throw new Exception("scope not set");
		}

		$query = 'SELECT
						`params`
					FROM #__jomres_guest_profile 
					WHERE `cms_user_id` = ' .(int) $this->user_id.' ';

		$result = doSelectSql($query,1);

		if (!empty($result)) {
			$params = json_decode($result, true);
		} else {
			$params = array();
		}

		if (!isset($params[$token_name]) ) {
			$IDENTIFIER=$identifier;
			$CLIENT_ID=generateJomresRandomString( 15 );
			$CLIENT_SECRET =createNewAPIKey();
			$TOKEN_REQUEST_URL = get_showtime( 'live_site' ).'/jomres/api/';

			$query = "INSERT INTO #__jomres_oauth_clients 
					(`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id` , `identifier` ) 
					VALUES 
					('".$CLIENT_ID."','".$CLIENT_SECRET."','',null,'".$scope."',".(int)$this->user_id." , '".$IDENTIFIER."' )";
			$result = doInsertSql($query);

			if ($result == true ) {
				$data = array('grant_type' => 'client_credentials', 'client_id' => $CLIENT_ID, 'client_secret' => $CLIENT_SECRET , 'token_url' => $TOKEN_REQUEST_URL );

				$token_request_response = $this->request_access_token ($data);

				$json_decoded = json_decode($token_request_response);

				if ($json_decoded != false) {
					$query = "SELECT  `params` FROM #__jomres_guest_profile WHERE `cms_user_id` = " . (int)$this->user_id;
					$user_params_check = doSelectSql($query);
					if (empty($user_params_check)) {
						$query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`) VALUES ( '".(int) $this->user_id."' )";
						doInsertSql($query , '' );
					}

					$params[$token_name] = $json_decoded->access_token;
					$query = "UPDATE #__jomres_guest_profile SET `params` = '".json_encode($params)."' WHERE `cms_user_id` = " . (int)$this->user_id;
					if (!doInsertSql($query, '')) {
						throw new Exception("Error: User params update failed");
					}
					return $json_decoded->access_token;
				}
			}
		} else {
			// We need to check that the token is still valid. If not, we need to request a new one
			$expired = $this->check_token_expired($params[$token_name]);

			if ($expired) { // The token is expired, we need to get a new one. First we'll find the client id and secret, and if they don't exist, we'll generate new ones
				$query = "SELECT client_id , client_secret FROM #__jomres_oauth_clients  WHERE scope = '".$scope."' AND user_id = ".$this->user_id ;
				$client_select = doSelectSql($query,2);
				$TOKEN_REQUEST_URL = get_showtime('live_site') . '/jomres/api/';
				$IDENTIFIER =  $identifier;

				if (empty($client_select)) {
					$CLIENT_ID = generateJomresRandomString(15);
					$CLIENT_SECRET = createNewAPIKey();
					$query = "INSERT INTO #__jomres_oauth_clients 
					(`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id` , `identifier` ) 
					VALUES 
					('" . $CLIENT_ID . "','" . $CLIENT_SECRET . "','',null,'".$scope."'," . (int)$this->user_id . " , '" . $IDENTIFIER . "' )";
					$result = doInsertSql($query);

					if ($result == true) {
						$data = array('grant_type' => 'client_credentials', 'client_id' => $CLIENT_ID, 'client_secret' => $CLIENT_SECRET, 'token_url' => $TOKEN_REQUEST_URL);
						$token_request_response = $this->request_access_token($data);
						$json_decoded = json_decode($token_request_response);
						if ($json_decoded != false) {
							$query = "SELECT  `params` FROM #__jomres_guest_profile WHERE `cms_user_id` = " . (int)$this->user_id;
							$user_params_check = doSelectSql($query);
							if (empty($user_params_check)) {
								$query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`) VALUES ( '".(int) $this->user_id."' )";
								doInsertSql($query , '' );
							}

							$params[$token_name] = $json_decoded->access_token;
							$query = "UPDATE #__jomres_guest_profile SET `params` = '".json_encode($params)."' WHERE `cms_user_id` = " . (int)$this->user_id;
							if (!doInsertSql($query, '')) {
								throw new Exception("Error: User params update failed");
							}
							return $json_decoded->access_token;
						}
					}
				} else {
					$query = "SELECT  `params` FROM #__jomres_guest_profile WHERE `cms_user_id` = " . (int)$this->user_id;
					$user_params_check = doSelectSql($query);
					if (empty($user_params_check)) {
						$query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`) VALUES ( '".(int) $this->user_id."' )";
						doInsertSql($query , '' );
					}

					$CLIENT_ID = $client_select['client_id'];
					$CLIENT_SECRET = $client_select['client_secret'];

					$data = array('grant_type' => 'client_credentials', 'client_id' => $CLIENT_ID, 'client_secret' => $CLIENT_SECRET, 'token_url' => $TOKEN_REQUEST_URL);

					$token_request_response = $this->request_access_token($data);
					$json_decoded = json_decode($token_request_response);

					if ($json_decoded != false) {
						$params[$token_name] = $json_decoded->access_token;
						$query = "UPDATE #__jomres_guest_profile SET `params` = '".json_encode($params)."' WHERE `cms_user_id` = " . (int)$this->user_id;
						if (!doInsertSql($query, '')) {
							throw new Exception("Error: User params update failed");
						}
						return $json_decoded->access_token;
					}
				}
			} else {
				return $params[$token_name];
			}
		}
	}

		/**
		 *
		 *
		 *
		 */

	public function check_token_expired($token = '' )
	{
		$query = "SELECT client_id FROM #__jomres_oauth_access_tokens WHERE 
            		access_token = '". $token."' 
            		AND user_id = ".$this->user_id."
            		AND expires >= CURRENT_TIMESTAMP";
		$result = doSelectSql($query);

		$expired = false;
		if (empty($result)) {
			$expired = true;
		}
		return $expired;
		}

	/**
	 *
	 *
	 *
	 */
		private function request_access_token ($data)
		{
			$ch = curl_init($data['token_url']);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($ch,CURLOPT_VERBOSE,true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			//$headerSent = curl_getinfo($ch, CURLINFO_HEADER_OUT );
			$result = curl_exec($ch);
			//$status = curl_getinfo($ch);
			//$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			return $result;
		}

}
