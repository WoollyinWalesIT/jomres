<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.17
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_messages
{
    public function __construct()
    {
        $this->jomres_messages = array();
        
		if (isset($_COOKIE[ 'jomres_messages' ])) {
			$messages = $_COOKIE[ 'jomres_messages' ];
			
			foreach ($messages as $msg_id => $msg) {
				$this->jomres_messages[$msg_id] = json_decode(stripslashes($msg), true);
			}
        }
    }

    public function get_messages()
    {
        foreach ($this->jomres_messages as $key => $val) {
            $index = 'jomres_messages['.$key.']';
            setcookie($index, '', time() - 3600);
        }

        return $this->jomres_messages;
    }

    public function set_message($message = '', $class = 'alert-info')
    {
		if ($message == '') {
			return false;
		}
		
        $counter = count($this->jomres_messages) + 1;
        $index = 'jomres_messages['.$counter.']';
		$data = array(
			'message' => htmlspecialchars($message),
			'class' => htmlspecialchars($class)
		);
        
		setcookie($index, json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE), time() + 5, '/');
		
		return true;
    }
}
