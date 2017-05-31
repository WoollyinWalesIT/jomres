<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.3
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class custom_text
{
    private static $configInstance;

    public function __construct()
    {
        $this->lang = get_showtime('lang');
        $this->global_custom_text = false;
        $this->properties_custom_text = false;

        //get the global custom text
        $this->gather_data(array(0));
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

    public function reset_current_lang($lang = '')
    {
        if ($lang == '') {
            $lang = get_showtime('lang');
        }

        $this->lang = $lang;
        $this->global_custom_text = false;
        $this->properties_custom_text = false;

        //get the global custom text
        $this->gather_data(array(0));
    }

    public function gather_data($property_uids = array())
    {
        if (empty($property_uids)) {
            return false;
        }

        if (!is_array($this->global_custom_text)) {
            $this->global_custom_text = array();
        }

        if (!is_array($this->properties_custom_text)) {
            $this->properties_custom_text = array();
        }

        //filter the properties for which we`ve already got the custom text in $this->properties_custom_text
        $tmp_array = array();
        foreach ($property_uids as $uid) {
            if (!isset($this->properties_custom_text[$uid])) {
                $tmp_array[] = $uid;
				//we`ll define this here, so even if empty, we know that we`ve gone through this property uid before
				$this->properties_custom_text[$uid] = array();
            }
        }
        $property_uids = $tmp_array;

        if (!empty($property_uids)) {
            $query = 'SELECT `constant` AS language_constant, `customtext`, `property_uid` FROM #__jomres_custom_text WHERE `property_uid` IN ('.jomres_implode($property_uids).") AND `language` = '".$this->lang."'";
            $customTextList = doSelectSql($query);

            if ($customTextList) {
                foreach ($customTextList as $text) {
                    $theConstant = str_replace('sc<x>ript', 'script', $text->language_constant);

                    if ($text->property_uid == 0) { //it`s a global custom text
                        $this->global_custom_text[ $theConstant ] = stripslashes($text->customtext);
                    } else { //it`s a property specific custom text
                        $this->properties_custom_text[ $text->property_uid ][ $theConstant ] = stripslashes($text->customtext);
                    }
                }
            }
        }

        return true;
    }

    //Legacy function: we`ll keep it here because it`s used in various places
    public function get_custom_text_for_property($property_uid = 0)
    {
		if ($property_uid == 0)
			return true;
		
		if (isset($this->properties_custom_text[ $property_uid ]))
			return true;
		else
			$this->gather_data(array($property_uid));
		
        return true;
    }
}
