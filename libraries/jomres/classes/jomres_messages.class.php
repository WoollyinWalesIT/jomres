<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.27
 *
 * @copyright	2005-2017 Vince Wooll
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
            $this->jomres_messages = $_COOKIE[ 'jomres_messages' ];
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

    public function set_message($message)
    {
        $counter = count($this->jomres_messages) + 1;
        $index = 'jomres_messages['.$counter.']';
        setcookie($index, htmlspecialchars($message), time() + 5, '/');
    }
}
