<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
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

class j16000export_definitions
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

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

		echo '<h2 class="page-header">Export language file definitions - '.get_showtime('lang').'</h2>';
		
		echo '<p>'.jr_gettext('_JOMRES_EXPORT_DEFINITIONS_INFO', '_JOMRES_EXPORT_DEFINITIONS_INFO', false).'</p>';
		
		echo '<p>'.jr_gettext('_JOMRES_COM_LANGUAGE_CONTEXT', '_JOMRES_COM_LANGUAGE_CONTEXT', false) . ' ' . $jomres_property_types->getPropertyTypeDescDropdown($language_context, 'language_context', $javascript).'</p>';

		$definitions = array();
		foreach ($jomres_language_definitions->definitions[ $jrConfig['language_context'] ] as $const => $def) {
			$definitions[ $const ] = jr_gettext($const, $def, false);
		}

		$output_string = '
<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################
';
		foreach ($definitions as $const => $string) {
			str_replace("\'", "'", $string);
			$string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
			$output_string .= 'jr_define("'.$const.'","'.$string.'");
';
		}

		echo '<textarea style="width: 100%;height: 900px;" >'.$output_string.'</textarea>';
	}


	public function getRetVals()
	{
		return null;
	}
}
