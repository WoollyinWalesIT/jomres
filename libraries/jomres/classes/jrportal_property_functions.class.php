<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.5
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_property_functions // Functions supplied as a class so that they can be extended easily without rewriting  the functions
{
    public function getAllJomresProperties($limit = false, $limitstart = false)
    {
        $retResult = array();
        $caveat = '';
        if ($limit && $limitstart) {
            $caveat = ' LIMIT '.$limitstart.','.$limit;
        }
        $query = 'SELECT propertys_uid,property_name,property_street,property_town,property_region,property_country,property_postcode,published
		FROM #__jomres_propertys ' .$caveat;
        //echo $query;exit;
        $result = doSelectSql($query);
        if (!empty($result)) {
            foreach ($result as $r) {
                if (is_numeric($r->property_region)) {
                    $jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
                    $property_region = jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$r->property_region, $jomres_regions->get_region_name($r->property_region), true, false);
                } else {
                    $property_region = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION'.$r->property_region, $r->property_region, false);
                }
                $retResult[ $r->propertys_uid ][ 'id' ] = $r->propertys_uid;
                $retResult[ $r->propertys_uid ][ 'property_name' ] = stripslashes($r->property_name);
                $retResult[ $r->propertys_uid ][ 'property_street' ] = stripslashes($r->property_street);
                $retResult[ $r->propertys_uid ][ 'property_town' ] = stripslashes($r->property_town);
                $retResult[ $r->propertys_uid ][ 'property_region' ] = stripslashes($property_region);
                $retResult[ $r->propertys_uid ][ 'property_country' ] = $r->property_country;
                $retResult[ $r->propertys_uid ][ 'property_postcode' ] = stripslashes($r->property_postcode);
                $retResult[ $r->propertys_uid ][ 'published' ] = $r->published;
            }
        }

        return $retResult;
    }
}
