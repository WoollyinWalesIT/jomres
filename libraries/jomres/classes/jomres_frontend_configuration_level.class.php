<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_frontend_configuration_level
{
    public function get_buttons()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if ($jrConfig[ 'minimalconfiguration' ] == '1' && !$thisJRUser->superPropertyManager) {
            return;
        }

        $response = '';

        $output = array();
        $pageoutput = array();

        $output['EXTENDED_CONFIGURATION'] = jr_gettext('EXTENDED_CONFIGURATION', 'EXTENDED_CONFIGURATION', false, false);
        $output['SIMPLE_CONFIGURATION'] = jr_gettext('SIMPLE_CONFIGURATION', 'SIMPLE_CONFIGURATION', false, false);

        $output['EXTENDED_CONFIGURATION_LINK'] = JOMRES_SITEPAGE_URL.'&task=set_config_level&val=0';
        $output['SIMPLE_CONFIGURATION_LINK'] = JOMRES_SITEPAGE_URL.'&task=set_config_level&val=1';

        $output['EXTENDED_BUTTON_CLASS'] = 'default ';
        $output['SIMPLE_BUTTON_CLASS'] = 'primary ';

        if (!$thisJRUser->simple_configuration) {
            $output['EXTENDED_BUTTON_CLASS'] = 'primary ';
            $output['SIMPLE_BUTTON_CLASS'] = 'default ';
        }

        $pageoutput[] = $output;

        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->readTemplatesFromInput('frontend_configuration_level_snippet.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $response = $tmpl->getParsedTemplate();

        return $response;
    }

    public function remove_querystring_var($key)
    {
        foreach ($_GET as $variable => $value) {
            if ($variable != $key) {
                $url .= $variable.'='.$value.'&amp;';
            }
        }
        $url = rtrim($url, '&amp;');

        return $url;
    }
}
