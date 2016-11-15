<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.18
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

    private function init()
    {
        $MiniComponents = jomres_getSingleton('mcHandler');
        if (isset($MiniComponents->registeredClasses['06005oauth'])) {
            $query = "SELECT client_id,client_secret FROM #__jomres_oauth_clients WHERE client_id = 'system' LIMIT 1";
            $result = doSelectSql($query, 2);
            if (count($result) == 2) {
                $client_id = $result['client_id'];
                $client_secret = $result['client_secret'];
            }
            $this->server = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/';
            $data = array('grant_type' => 'client_credentials', 'client_id' => $client_id, 'client_secret' => $client_secret);
            $token_request = $this->query_api('POST', '/', $data);
            $response = json_decode($token_request['response']);
            if (isset($response->access_token)) {
                $this->token = $response->access_token;
            }
        }
    }

    public function send_request($method = '', $request = '', $data = array())
    {
        if ($this->token != '') {
            $response = $this->query_api($method, $request, $data);
            if ($response['response_code'] == '200' || $response['response_code'] == '204') {
                return json_decode($response['response']);
            } else {
                throw new Exception('Call to API resulted in response code '.$response['response_code'].' and message '.$response['response']);
            }
        } else {
            throw new Exception('Could not call API as token not setup. Is the API Core installed? If not, install the API Core plugin and visit the App Key Management page at least once to setup the System user. You can find the App Key page under My Account when logged into the fronend of Jomres.');
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
