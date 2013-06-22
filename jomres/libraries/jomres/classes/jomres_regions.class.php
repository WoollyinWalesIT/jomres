<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_regions
    {

    function jomres_regions()
        {
        $this->regions = array ();
        $this->get_regions();
        }

    function get_regions()
        {
        $performance_monitor = jomres_singleton_abstract::getInstance( 'jomres_performance_monitor' );
        $performance_monitor->set_point( "Setting up regions. Let's ensure we're not doing this more than once." );

        $siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
        $jrConfig   = $siteConfig->get();
        if ( !isset( $jrConfig[ 'region_names_are_translatable' ] ) ) $jrConfig[ 'region_names_are_translatable' ] = 0;

        $query      = "SELECT id,countrycode,regionname FROM #__jomres_regions ORDER BY countrycode,regionname";
        $regionList = doSelectSql( $query );
        if ( count( $regionList ) > 0 )
            {
            foreach ( $regionList as $region )
                {
                if ( $jrConfig[ 'region_names_are_translatable' ] == 1 ) $this->regions[ $region->id ] = array ( "id" => $region->id, "countrycode" => $region->countrycode, "regionname" => jr_gettext( "_JOMRES_CUSTOMTEXT_REGIONS_" . $region->id, $region->regionname, false, false ) );
                else
                $this->regions[ $region->id ] = array ( "id" => $region->id, "countrycode" => $region->countrycode, "regionname" => $region->regionname );
                }
            }
        $performance_monitor->set_point( "Region generation done." );

        return $this->regions;
        }

    function get_country_regions( $countrycode )
        {
        foreach ( $this->regions as $region )
            {
            if ( $region[ 'countrycode' ] == $countrycode ) return $region;
            }

        return false;
        }

    function get_region_by_id( $id )
        {
        return $this->regions[ $id ];
        }
    }


?>