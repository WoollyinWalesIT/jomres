<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-alpha1
 *
 * @copyright	2005-2018 Vince Wooll
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
            $query = 'SELECT `constant` AS language_constant, `customtext`, `property_uid`, `language_context` FROM #__jomres_custom_text WHERE `property_uid` IN ('.jomres_implode($property_uids).") AND `language` = '".$this->lang."'";
            $customTextList = doSelectSql($query);

            if ($customTextList) {
                foreach ($customTextList as $text) {
                    $theConstant = str_replace('sc<x>ript', 'script', $text->language_constant);

                    if ($text->property_uid == 0) { //it`s a global custom text
                        $this->global_custom_text[$text->language_context][ $theConstant ] = stripslashes($text->customtext);
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
	
	//update custom text
	function updateCustomText($theConstant, $theValue, $audit = true, $property_uid = null, $language_context = '0')
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		$testStr = trim(strip_tags_except($theValue));
		$crsEtc = array("\t", "\n", "\r");
		$testStr = str_replace($crsEtc, '', $testStr);
		
		if (
			strlen($testStr) == 0 &&
			$theConstant != '_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION' &&
			$theConstant != '_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS'
			) {
			return false;
		}
		
		if (!isset($property_uid)) {
			if ($jrConfig[ 'editingModeAffectsAllProperties' ] == '1' && $thisJRUser->superPropertyManager == true) {
				$property_uid = 0;
			} else {
				$property_uid = (int)getDefaultProperty();
			}
		}

		$query = "SELECT `customtext` FROM #__jomres_custom_text 
						WHERE `constant` = '".$theConstant."' 
						AND `property_uid` = ".(int) $property_uid." 
						AND `language` = '".get_showtime('lang')."' 
						AND `language_context` = '".$language_context."'";
		$result = doSelectSql($query);
		
		if (strlen($theValue) == 0) {
			$query = "DELETE FROM #__jomres_custom_text 
							WHERE `constant` = '".$theConstant."' 
							AND `property_uid` = ".(int) $property_uid." 
							AND `language` = '".get_showtime('lang')."' 
							AND `language_context` = '".$language_context."'";
		} else {
			if (empty($result)) {
				$query = "INSERT INTO #__jomres_custom_text 
									(
									`constant`,
									`customtext`,
									`property_uid`,
									`language`,
									`language_context`
									) 
								VALUES (
									'".$theConstant."',
									'".$theValue."',
									".(int)$property_uid.",
									'".get_showtime('lang')."', 
									'".$language_context."'
									)";
			} else {
				$query = "UPDATE #__jomres_custom_text 
								SET `customtext`='".$theValue."' 
								WHERE `constant` = '".$theConstant."' 
								AND `property_uid` = ".(int)$property_uid." 
								AND `language` = '".get_showtime('lang')."' 
								AND `language_context` = '".$language_context."'";
			}
		}

		$audit_msg = '';
		if ($audit) {
			$audit_msg = jr_gettext('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', false);
		}

		if (!doInsertSql($query, $audit_msg)) {
			throw new Exception('Error: Custom text insert failed.');
		}

		return true;
	}
}
