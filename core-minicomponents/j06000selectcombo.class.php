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

class j06000selectcombo
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        jr_import('jomSearch');
        /*
        if( !function_exists('json_encode') )
            {
            require_once(JOMRESPATH_BASE.JRDS.'libraries'.JRDS.'json'.JRDS.'JSON.php');
            function json_encode($data)
                {
                $json = new Services_JSON();
                return( $json->encode($data) );
                }
            }
        */
        $allPropertyLocations = prepGeographicSearch();
        $filter = jomresGetParam($_REQUEST, '_name', '');
        $q = jomresGetParam($_REQUEST, '_value', '');
        $searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);

        if ($filter == 'country') {
            $regions = array();
            $regions[ ] = $searchAll;
            foreach ($allPropertyLocations as $locations) {
                foreach ($locations as $location) {
                    $t = $location[ 'region' ];
                    if ($location[ 'country' ] == $q) {
                        $regions[ $t ] = jomres_decode($t);
                    }
                    // else if ($q==$searchAll)
                    // $regions[$t]=$t;
                }
            }
            if (!empty($regions)) {
                $ret_array = array_unique($regions);
            }
        }

        if ($filter == 'region') {
            $towns = array();
            $towns[ ] = $searchAll;
            foreach ($allPropertyLocations as $locations) {
                foreach ($locations as $location) {
                    $t = $location[ 'property_town' ];
                    if ($location[ 'region' ] == $q) {
                        $towns[ $t ] = jomres_decode($t);
                    }
                    // else if ($q==$searchAll)
                    // $towns[$t]=$t;
                }
            }
            if (!empty($towns)) {
                $ret_array = array_unique($towns);
            }
        }
        $ret_json = array();

        foreach ($ret_array as $key => $val) {
            $ret_json[ ] = array($key => $val);
        }
        $ret_string = json_encode($ret_json);

        echo $ret_string;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
