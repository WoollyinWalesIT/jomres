<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_sms_clickatellhandler
{
    public function __construct($property_uid)
    {
        //http://api.clickatell.com/http/sendmsg?api_id=xxxx&user=xxxx&password=xxxx&to=xxxx&text=xxxx
        $this->clickatell_api_url = 'http://api.clickatell.com/http/sendmsg?';
        $sms_clickatell_settings = new jrportal_sms_clickatell_settings();
        $this->settings = $sms_clickatell_settings->get_sms_clickatell_settings();
        $this->queryResult = false;
        $this->getVars = '';
        $this->errorText = array();
    }

    public function sendQuery()
    {
        if (strlen($this->clickatell_api_url) == 0) {
            $this->setErrorText("Remote server's url not set");

            return false;
        }

        $fields_string = '';
        $fields_string .= 'api_id='.urlencode($this->settings[ 'api_id' ]);
        $fields_string .= '&user='.urlencode($this->settings[ 'username' ]);
        $fields_string .= '&password='.urlencode($this->settings[ 'password' ]).'&';
        if (count($this->getVars) > 0) {
            foreach ($this->getVars as $key => $value) {
                $fields_string .= $key.'='.urlencode($value).'&';
            }
            rtrim($fields_string, '&');
        } else {
            return false;
        }
        //open connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->clickatell_api_url.$fields_string);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Jomres');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Without this the response is true, whereas we want the actual contents of the response
        //execute post
        $result = curl_exec($ch);
        // check if any error occured
        if (curl_errno($ch)) {
            $this->setErrorText(curl_error($ch));

            return false;
        } else {
            $this->queryResult = $result;
        }
        //close connection
        curl_close($ch);

        return true;
    }

    public function addField($key, $val)
    {
        $this->getVars[ $key ] = $val;
    }

    public function getResponse()
    {
        return $this->queryResult;
    }

    public function setErrorText($text)
    {
        $this->errorText[ ] = $text;
    }
}
