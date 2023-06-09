<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06002translating
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$custom_text = jomres_singleton_abstract::getInstance('custom_text');
		if (!empty($custom_text->selected_languages)) {
			$languages_to_offer = $custom_text->selected_languages;
		} else {
			$languages_to_offer = [];
			foreach ($custom_text->all_languages as $key => $val) {
				$languages_to_offer[] = $key;
			}
		}


		$MiniComponents->triggerEvent('04950');
		$definitions = $MiniComponents->miniComponentData['04950'];

		if (!empty($definitions)) {
			foreach ($definitions as $plugin => $sections) {
				if (!empty($sections)) {
					foreach ($sections as $section_title => $contents) {
						$pageoutput = array();
						$output = array();
						$rows = array();

						$output['SECTION'] = $section_title;
						$last_subtitle = '';
						foreach ($contents as $subtitle => $elements) {
							if (!empty($elements)) {
								foreach ($elements as $content) {
									if (is_numeric($subtitle)) {
										$subtitle = '';
									}

									$current_content = $content['definition'];
									if ($content['translate_label'] == true) {  // Sometimes the script will pass back a label's definition, sometimes just a language string that we need to create a label from. This setting will allow this
										$label = jr_gettext($content['label'], $content['label'], false) ;
									} else {
										$label = $content['label'];
									}

									$current_content = str_replace("&lt;p&gt;", '', $current_content);
									$current_content = str_replace("&lt;/p&gt;", '', $current_content);
									$current_content = str_replace("<p>", '', $current_content);
									$current_content = str_replace("</p>", '', $current_content);
									$current_content = str_replace("&amp;#39;", "'", $current_content);

									$r = array();
									$r['DEFINITION'] = $label;
									$r['CURRENT_TEXT'] = $current_content;
									if ($subtitle != $last_subtitle) {
										$r['SUBTITLE'] = $subtitle;
									}
									$last_subtitle = $subtitle;

									$rows[]=$r;
								}
							}
						}

						$pageoutput[] = $output;
						$tmpl = new patTemplate();
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
						$tmpl->readTemplatesFromInput('translating_section.html');
						$tmpl->addRows('pageoutput', $pageoutput);
						$tmpl->addRows('rows', $rows);
						$translation_sections[] = [ 'section' => $tmpl->getParsedTemplate() ];
					}
				}
			}
		}

		$pageoutput = array();
		$output = array();

		$languages = array();
		foreach ($custom_text->all_languages as $key => $val) {
			if (in_array($key, $languages_to_offer)) {
				$selected = '';
				if ($key == get_showtime('lang')) {
					$selected = 'selected="selected"';
				}
				$languages[] = [ 'LANGUAGE_CODE' => $key , 'LANGUAGE_NAME' =>$val , 'SELECTED' => $selected];
			}
		}



		$output['JOMRES_TRANSLATIONS_TITLE'] = jr_gettext('JOMRES_TRANSLATIONS_TITLE', 'JOMRES_TRANSLATIONS_TITLE', false);
		$output['JOMRES_TRANSLATIONS_LEAD'] = jr_gettext('JOMRES_TRANSLATIONS_LEAD', 'JOMRES_TRANSLATIONS_LEAD', false);
		$output['JOMRES_TARGET_LANGUAGE'] = jr_gettext('JOMRES_TARGET_LANGUAGE', 'JOMRES_TARGET_LANGUAGE', false);
		$output['CURRENT_LANGUAGE'] = get_showtime('lang');

		$output[ 'MARKDOWN_BUTTON' ] = $MiniComponents->specificEvent('06000', 'show_markdown_modal', array('output_now' => false));

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('translating.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('languages', $languages);
		$tmpl->addRows('rows', $translation_sections);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
