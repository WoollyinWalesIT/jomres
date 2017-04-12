<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000translate_locales
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
        echo '<h2>'.jr_gettext('_JOMRES_TOUCHTEMPLATES', '_JOMRES_TOUCHTEMPLATES', false).'</h2>';
        echo '<br/><h3>'.get_showtime('lang').'</h3><br/>';

        $output = array();

        $query = 'SELECT id,countrycode,countryname FROM #__jomres_countries ORDER BY countryname';
        $countryList = doSelectSql($query);
        if (!empty($countryList)) {
            foreach ($countryList as $country) {
                $output[ ] = jr_gettext('_JOMRES_CUSTOMTEXT_COUNTRIES_'.$country->id, $country->countryname);
            }
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        if ($jrConfig[ 'region_names_are_translatable' ] == '1') {
            $query = 'SELECT id,countrycode,regionname FROM #__jomres_regions ORDER BY countrycode,regionname';
            $regionList = doSelectSql($query);
            if (!empty($regionList)) {
                foreach ($regionList as $region) {
                    $output[ ] = jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$region->id, $region->regionname);
                }
            }
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
