<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.8.0
	 *
	 * @copyright	2005-2024 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * @package Jomres\Core\Functions
	 *
	 * Define a string
	 *
	 *          In the past Jomres used Constants in language files. That's not the case now, however the variable name remains the same.
	 *
	 */
	if (!function_exists('jr_define')) {
		function jr_define($constant, $string)
		{
			$jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');
			$jomres_language_definitions->define($constant, $string);
		}
	}


	/**
	 * @package Jomres\Core\Functions
	 *
	 *          What's the string value stored against the (originally, but not now) constant.
	 *
	 */
	if (!function_exists('jr_get_defined')) {
		function jr_get_defined($constant, $default = '')
		{
			if (!defined($constant)) {
				$jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');
				$result = $jomres_language_definitions->get_defined($constant, $default);

				if ($result === false && $default != '') {
					$result = $default;
				}

				return $result;
			} else {
				return constant($constant);
			}
		}
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *          All output strings are passed through this function for processing.
	 *
	 *          Performs several functions.
	 *
	 *          theConstant and theValue are normally one and the same, nowadays
	 *          If oktoedit, then editinplace can be used
	 *          If is link is largely defunct, but if set to True then don't offer editinplace
	 *
	 *          Gets language definitions, finds relevant strings, and if required fires up the editinplace javascript that allows property managers to customise strings just for their properties
	 */
	if (!function_exists('jr_gettext')) {
		function jr_gettext($theConstant, $theValue, $okToEdit = true, $isLink = false)
		{
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');

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

				if ($thisJRUser->userIsManager && $thisJRUser->accesslevel < 70) { //lower than manager
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

			$language_context = get_showtime('property_type');

			if (is_null($language_context) && isset($jrConfig['language_context']) && $jrConfig['language_context'] != '0') {
				$language_context = $jrConfig['language_context'];
			}

			if (isset($jrConfig[ 'prioritise_sitewide_label_definitions' ]) && $jrConfig[ 'prioritise_sitewide_label_definitions' ] == "1") {
				if (isset($customTextObj->global_custom_text[$language_context][$theConstant])) {
					$theText = $customTextObj->global_custom_text[$language_context][$theConstant];
				} elseif (isset($customTextObj->global_custom_text['0'][$theConstant])) {
					$theText = $customTextObj->global_custom_text['0'][$theConstant];

				} else {
					if (!isset($customTextObj->properties_custom_text[$property_uid])) {
						$customTextObj->get_custom_text_for_property($property_uid);
					}
					if (isset($customTextObj->properties_custom_text[$property_uid][$theConstant])) {
						$theText = $customTextObj->properties_custom_text[$property_uid][$theConstant];
					} else {
						$theText = jr_get_defined($theConstant, $theValue);
					}
				}
			} else {
				if (!isset($customTextObj->properties_custom_text[$property_uid])) {
					$customTextObj->get_custom_text_for_property($property_uid);
				}
				if (isset($customTextObj->properties_custom_text[$property_uid][$theConstant])) {
					$theText = $customTextObj->properties_custom_text[$property_uid][$theConstant];
				} else {
					if (isset($customTextObj->global_custom_text[$language_context][$theConstant])) {
						$theText = $customTextObj->global_custom_text[$language_context][$theConstant];
					} else {
						if (isset($customTextObj->global_custom_text['0'][$theConstant])) {
							$theText = $customTextObj->global_custom_text['0'][$theConstant];
						} else {
							$theText = jr_get_defined($theConstant, $theValue);
						}
					}
				}
			}


			$theText = jomres_decode($theText);

			if (get_showtime('jr_user_ready') && $thisJRUser->userIsManager) {
				$task = jomresGetParam($_REQUEST, 'task', '');

				if ($task != '' && jomres_cmsspecific_areweinadminarea()) {
					if (($task == 'touch_templates' || $task == 'translate_locales' || $task == 'translate_lang_file_strings') && $thisJRUser->userIsManager) {
						$property_uid = 0;
						$jrConfig[ 'editingModeAffectsAllProperties' ] = '1';
						$editing = true;
					}
				}

				if (get_showtime('task') == 'translating' && $okToEdit == true) {
					$editing = true;
				}

				if ($thisJRUser->userIsManager && ($editing || ($jrConfig[ 'editingModeAffectsAllProperties' ] == '1')) && $okToEdit && $thisJRUser->accesslevel > 50) {
					if (strlen(trim($theText)) == 0 || strtolower(trim($theText)) == '<span></span>' || strtolower(trim($theText)) == '<span> </span>' || strtolower(trim($theText)) == '<span>  </span>') {
						$theText = '';
					}

					$indexphp = 'index.php';
					$title = ' title="'.jr_get_defined('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Edit item').'" ';

					if ($isLink) {
						//do nothing
					} else {
						if ($editing && (int)jomresGetParam($_REQUEST, 'no_html', 0) == 0) {
							if (jomres_cmsspecific_areweinadminarea()) {
								$url = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=editinplace&lang='.get_showtime('lang').'&language_context='.$jomres_language_definitions->ptype;
							} else {
								$url = JOMRES_SITEPAGE_URL_AJAX.'&task=editinplace';
							}

							$lang_var_check ='';
							if (!defined('JOMRES_TARGET_LANG_CHECK_SHOWN')) {
								$lang_var_check = '
						if (typeof jomres_target_language === "undefined"){
							var jomres_target_language = "'.get_showtime('lang').'";
							}';
								define('JOMRES_TARGET_LANG_CHECK_SHOWN', 1);
							}
							$data_type = 'text';
							if (strlen($theText) > 50) {
								$data_type = 'textarea';
							}
							$theText = '
					
					<a href="#" id="'.$theConstant.'" data-type="'.$data_type.'" data-pk="'.$theConstant.'" data-url="'.$url.'" data-original-title="'.htmlspecialchars($theText).'">'.htmlspecialchars($theText).'</a>
					<script>	
					'.$lang_var_check.'			
					document.addEventListener(\'DOMContentLoaded\', function(){jomresJquery(\'#' .$theConstant.'\').editable(
					   {
					   inputclass: "x-editable-textarea",
						params: function(params) {
                           val = params.value;
							//originally params contain pk, name and value
							var params = {};
							params.value = val;
							params.pk = "'.$theConstant.'";
							params.jomres_target_language = jomres_target_language;
							return params;
							}
						}
					);}, false);
					</script>';
						} else {
							//do nothing
						}
					}
				}
			}

			return $theText;
		}
	}

