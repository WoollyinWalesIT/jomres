<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000translate_lang_file_strings
{
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

        foreach ($jomres_language_definitions->definitions[ $language_context ] as $const => $def) {
            $output[] = jr_gettext($const, $def);
        }

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
