<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

function jr_define($constant, $string)
{
    $jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');
    $jomres_language_definitions->define($constant, $string);
}

function jr_get_defined($constant, $default = '')
{
    if (!defined($constant)) {
        $jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');
        $result = $jomres_language_definitions->get_defined($constant);

        if ($result === false && $default != '') {
            $result = $default;
        }

        return $result;
    } else {
        return constant($constant);
    }
}

function jr_gettext($theConstant, $theValue, $okToEdit = true, $isLink = false)
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();
	
	$editing = false;

    if (!jomres_cmsspecific_areweinadminarea()) {
        $property_uid = (int) get_showtime('property_uid');
    } else {
        $property_uid = 0;
    }

    $customTextObj = jomres_singleton_abstract::getInstance('custom_text');

    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

    // If jr_user isn't ready yet, calling jomres_singleton_abstract::getInstance('jr_user') will cause php to stop due to recursion, so we'll check that jr_user's been set up before we do anything else
    if (get_showtime('jr_user_ready')) {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if (!isset($tmpBookingHandler->user_settings[ 'editing_on' ])) {
            $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
        }

        if (!$thisJRUser->userIsManager) {
            $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
        }

        if ($thisJRUser->userIsManager && $thisJRUser->accesslevel <= 50) { //receptionist or lower
            $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
        }

        $editing = $tmpBookingHandler->user_settings[ 'editing_on' ];
    } else {
        $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
    }

    $br = '';
    if (get_showtime('task') == 'editCustomTextAll') {
        $br = '<br />';
    }

    if (isset($customTextObj->global_custom_text[$theConstant])) {
        $theText = stripslashes($customTextObj->global_custom_text[$theConstant]);
    } else {
		if (!isset($customTextObj->properties_custom_text[$property_uid])) {
			$customTextObj->get_custom_text_for_property($property_uid);
		}
		if (isset($customTextObj->properties_custom_text[$property_uid][$theConstant])) {
			$theText = stripslashes($customTextObj->properties_custom_text[$property_uid][$theConstant]);
		} else {
			$theText = jr_get_defined($theConstant, $theValue);
		}
	}
	
	$theText = jomres_decode($theText);

    if ($thisJRUser->userIsManager) {
		$task = jomresGetParam($_REQUEST, 'task', '');

        if ($task != '' && jomres_cmsspecific_areweinadminarea()) {
            if (($task == 'touch_templates' || $task == 'translate_locales' || $task == 'translate_lang_file_strings') && $thisJRUser->userIsManager) {
                $property_uid = 0;
                $jrConfig[ 'editingModeAffectsAllProperties' ] = '1';
                $editing = true;
            }
        }

        // Disabled in 9.8.19. This version introduces Markdown for non-super-managers. As a result we want super managers to continue using HTML if they want.
        // This switch makes things confusing, as disabling the html editors will prevent html in language files from being used.
        /* if ($jrConfig[ 'allowHTMLeditor' ] != '1') {
            $theText = jomres_remove_HTML($theText);
        } */

        if ($thisJRUser->userIsManager && ($editing || ($jrConfig[ 'editingModeAffectsAllProperties' ] == '1' && $thisJRUser->superPropertyManager)) && $okToEdit && $thisJRUser->accesslevel > 50) {
            if (strlen(trim($theText)) == 0 || strtolower(trim($theText)) == '<span></span>' || strtolower(trim($theText)) == '<span> </span>' || strtolower(trim($theText)) == '<span>  </span>') {
                $theText = '';
            }

            $indexphp = 'index.php';
            $title = ' title="'.jr_get_defined('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Edit item').'" ';

            if ($isLink) {
                //do nothing
            } else {
                if (!isset($_REQUEST[ 'no_html' ])) {
                    $_REQUEST[ 'no_html' ] = 0;
                }

                if ($editing && $_REQUEST[ 'no_html' ] != '1') {
                    if (jomres_cmsspecific_areweinadminarea()) {
                        $url = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=editinplace&lang='.get_showtime('lang');
                    } else {
                        $url = JOMRES_SITEPAGE_URL_AJAX.'&task=editinplace';
                    }

                    $theText = '<a href="#" id="'.$theConstant.'" data-type="text" data-pk="'.$theConstant.'" data-url="'.$url.'" data-original-title="'.htmlspecialchars($theText).'">'.htmlspecialchars($theText).'</a>
					<script>jQuery(document).ready(function () {jomresJquery(\'#' .$theConstant.'\').editable();});</script>';
                } else {
                    //do nothing
                }
            }
        }
    }
    
    return $theText;
}
