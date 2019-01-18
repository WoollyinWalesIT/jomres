<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501languages
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];

		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
		$languagesArray = $jomres_language->define_langfile_to_languages_array();
	
		$selected_languages = array();
		if ($jrConfig['selected_languages'] != '') {
			$selected_languages = explode(',',$jrConfig['selected_languages']);
		}
		
		$configurationPanel->startPanel(jr_gettext('_JOMRES_COM_CHOOSELANGUAGES', '_JOMRES_COM_CHOOSELANGUAGES', false));
		
		$configurationPanel->insertDescription(jr_gettext('_JOMRES_COM_CHOOSELANGUAGES_INFO', '_JOMRES_COM_CHOOSELANGUAGES_INFO', false));
		
		foreach ($languagesArray as $key => $val) {
			$selected = '';

			if (in_array($key, $selected_languages)) {
				$selected = ' checked="yes" ';
			}

			$configurationPanel->setleft($key);
			$configurationPanel->setmiddle('<input type="checkbox" id="cb'.$key.'" name="cfgArr_selected_languages[]" value="'.$key.'" '.$selected.'>');
			$configurationPanel->setright($val);
			$configurationPanel->insertSetting();
		}
		
		$configurationPanel->endPanel();
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
