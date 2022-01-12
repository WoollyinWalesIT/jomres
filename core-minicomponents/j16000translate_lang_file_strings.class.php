<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
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
		
		$javascript = 'onchange="switch_language_context(this.value);"';

		echo '<h2 class="page-header">'.jr_gettext('_JOMRES_TOUCHTEMPLATES', '_JOMRES_TOUCHTEMPLATES', false).' - '.get_showtime('lang').'</h2>';
		
		echo '<p>'.jr_gettext('_JOMRES_COM_LANGUAGE_CONTEXT', '_JOMRES_COM_LANGUAGE_CONTEXT', false) . ' ' . $jomres_property_types->getPropertyTypeDescDropdown($language_context, 'language_context', $javascript).'</p>';

		$output = array();

		foreach ($jomres_language_definitions->definitions[$jrConfig['language_context']] as $const => $def) {
			$output[] = $const." ".jr_gettext($const, $def);
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
