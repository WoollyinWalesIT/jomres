<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.3
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000export_definitions
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        echo '<h2 class="page-header">Export language file definitions</h2>';
        echo '<p>'.jr_gettext('_JOMRES_EXPORT_DEFINITIONS_INFO', '_JOMRES_EXPORT_DEFINITIONS_INFO', false, false).'</p>';

        $definitions = array();
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if ($jrConfig[ 'language_context' ] != '') {
            $language_context = $jrConfig[ 'language_context' ];
        } else {
            $language_context = 0;
        }

        $jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');

        foreach ($jomres_language_definitions->definitions[ $language_context ] as $const => $def) {
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

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
