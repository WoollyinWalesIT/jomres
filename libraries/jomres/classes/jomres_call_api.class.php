<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// This allows Jomres to call it's own API. As more functionality is added to the API then there are times that that will be the choice of connection.

class jomres_call_api
{
    private static $configInstance;
    private $token;
    private $server;

    public function __construct()
    {
        $this->init();
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function __clone()
    {
        trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
    }

    private function init() {
        // If the user is registered, we'll create a new API client and secret for that user if needed. That way, any calls done to the API will be traceable back to that user.
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if ( $thisJRUser->accesslevel > 1 ) { // The user's registered or greater
            $auth_deets = $this->init_manager();
            $client_id = $auth_deets['client_id'];
            $client_secret = $auth_deets['client_secret'];
        } else {
            $query = "SELECT client_id,client_secret FROM #__jomres_oauth_clients WHERE client_id = 'system' LIMIT 1";
            $result = doSelectSql($query, 2);
            if (count($result) == 2) {
                $client_id = $result['client_id'];
                $client_secret = $result['client_secret'];
            }
        }

        $MiniComponents = jomres_getSingleton('mcHandler');
        if (isset($MiniComponents->registeredClasses['06005oauth']) && isset($client_secret) && trim($client_secret) != '' ) {
            $this->server = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/';
            $data = array('grant_type' => 'client_credentials', 'client_id' => $client_id, 'client_secret' => $client_secret);
            $token_request = $this->query_api('POST', '/', $data);
            $response = json_decode($token_request['response']);

            if (isset($response->access_token)) {
                $this->token = $response->access_token;
            } else {
                throw new Exception($response->error_description);
            }
        }
    }

    private function init_manager() {
        // We need to see if there's a user in the database, if there's not we'll create them. 
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $query = "SELECT client_id,scope FROM #__jomres_oauth_clients WHERE client_id = '".$thisJRUser->username."' LIMIT 1";
        $result = doSelectSql($query);
        if (count($result) == 0) {
            $query = "INSERT INTO #__jomres_oauth_clients 
                (`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id`) 
                VALUES 
                ('".$thisJRUser->username."','".createNewAPIKey()."','',null,'*',".$thisJRUser->id.")";
            if (!doInsertSql($query, jr_gettext('_OAUTH_CREATED', '_OAUTH_CREATED', false))) {
               throw new Exception('Unable to update oauth client details, mysql db failure');
            }
        }
        $query = "SELECT client_secret FROM #__jomres_oauth_clients WHERE client_id = '".$thisJRUser->username."' LIMIT 1";
        $client_secret = doSelectSql($query, 1);
        return array ( "client_id" => $thisJRUser->username ,"client_secret" => $client_secret );
    }

    public function send_request($method = '', $request = '', $data = array()) {
        if ($this->token != '') {
            $response = $this->query_api($method, $request, $data);
            if ($response['response_code'] == '200' || $response['response_code'] == '204') {
                return json_decode($response['response']);
            } else {
                throw new Exception('Call to API resulted in response code '.$response['response_code'].' and message '.$response['response']);
            }
        } else {
            throw new Exception('Could not call API as token not setup. Is the API Core installed?');
        }
    }

    private function query_api($method = 'GET', $request = '', $data = array())
    {
        $ch = curl_init($this->server.$request);

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
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer '.$this->token,
                'Accept: application/json',
                ));
        }

        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        $status = curl_getinfo($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return array('response_code' => $response_code, 'response' => $result, 'status' => $status);
    }
}
