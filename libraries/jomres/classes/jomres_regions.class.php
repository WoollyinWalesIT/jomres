<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_regions
{
    public function __construct()
    {
        $this->regions = false;
        $this->get_regions();
    }

    public function get_regions()
    {
        $performance_monitor = jomres_singleton_abstract::getInstance('jomres_performance_monitor');
        $performance_monitor->set_point("Setting up regions. Let's ensure we're not doing this more than once.");

		if (is_array($this->regions)) {
			return true;
		}
		
		$this->regions = array();

        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');

        if ($c->isCached('regions')) {
            $performance_monitor->set_point('Setting regions from cache.');
            $this->regions = $c->retrieve('regions');
        } else {
            $performance_monitor->set_point('Setting regions from db.');
            
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $jrConfig = $siteConfig->get();
            
			if (!isset($jrConfig[ 'region_names_are_translatable' ])) {
                $jrConfig[ 'region_names_are_translatable' ] = 0;
            }

            $query = "SELECT `id`,`countrycode`,`regionname` FROM #__jomres_regions ORDER BY `countrycode`,`regionname`";
            $result = doSelectSql($query);
            
			if (!empty($result)) {
                foreach ($result as $region) {
                    if ((int)$jrConfig[ 'region_names_are_translatable' ] == 1) {
                        $this->regions[ $region->id ] = array('id' => $region->id, 'countrycode' => $region->countrycode, 'regionname' => jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$region->id, $region->regionname, false, false));
                    } else {
                        $this->regions[ $region->id ] = array('id' => $region->id, 'countrycode' => $region->countrycode, 'regionname' => $region->regionname);
                    }
                }
            }
			
			unset($result);
            
			$c->store('regions', $this->regions);
        }

        $performance_monitor->set_point('Region generation done.');

        return true;
    }

    public function get_country_regions($countrycode)
    {
        foreach ($this->regions as $region) {
            if ($region[ 'countrycode' ] == $countrycode) {
                return $region;
            }
        }

        return false;
    }

    public function get_region_by_id($id)
    {
        if (isset($this->regions[ $id ])) {
            return $this->regions[ $id ];
        } else {
            throw new Exception('Tried to get region with non-existant id');
        }
    }
}
