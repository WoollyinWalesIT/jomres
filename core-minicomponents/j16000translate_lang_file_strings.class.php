<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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

class j16000translate_lang_file_strings
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
		if (!translation_user_check()) {
			return;
		}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		if ($jrConfig['language_context'] == '') {
			$jrConfig['language_context'] = '0';
		}
		
		$language_context = jomresGetParam($_GET, 'language_context', $jrConfig['language_context']);
		set_showtime('property_type', $language_context);

		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
		
		$jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');

		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
		$jomres_language->get_language('faq');
		$jomres_language->get_language('shotcodes');
		$jomres_language->get_language('video_tutorials');

/*		$javascript = 'onchange="switch_language_context(this.value);"';

		echo '<h2 class="page-header">'.jr_gettext('_JOMRES_TOUCHTEMPLATES', '_JOMRES_TOUCHTEMPLATES', false).' - '.get_showtime('lang').'</h2>';
		
		echo '<p>'.jr_gettext('_JOMRES_COM_LANGUAGE_CONTEXT', '_JOMRES_COM_LANGUAGE_CONTEXT', false) . ' ' . $jomres_property_types->getPropertyTypeDescDropdown($language_context, 'language_context', $javascript).'</p>';*/

		echo simple_template_output(JOMRES_TEMPLATEPATH_ADMINISTRATOR, $template = 'translate_lang_file_strings_header.html', jr_gettext( '_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', '_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO' , false ));


		$output = array();

		foreach ($jomres_language_definitions->definitions[$jrConfig['language_context']] as $const => $def) {
			if ( $const != '_JOMRES_COM_MR_YES ' && $const != '_JOMRES_COM_MR_NO ' && $const != '_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO ') {
				$output[] = $const." <br/><br/>".jr_gettext($const, $def)."<br/>";
			}

		}

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
