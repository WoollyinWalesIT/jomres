<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.0
 *
 * @copyright	2005-2019 Vince Wooll
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
		$this->country_regions = false;
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		if (!isset($jrConfig[ 'region_names_are_translatable' ])) {
			$jrConfig[ 'region_names_are_translatable' ] = 0;
		}
		
		$this->region_names_are_translatable = (bool)$jrConfig[ 'region_names_are_translatable' ];
		
		$this->get_used_property_regions();
	}

	//get all regions used by properties, no need to get all others at this point
	public function get_used_property_regions()
	{
		if (is_array($this->regions)) {
			return true;
		}
		
		$this->regions = array();

		$query = "SELECT `id`, `countrycode`, `regionname` FROM #__jomres_regions WHERE `id` IN (SELECT DISTINCT `property_region` FROM #__jomres_propertys) ORDER BY `countrycode`,`regionname`";
		$result = doSelectSql($query);
		
		if (!empty($result)) {
			foreach ($result as $region) {
				if ($this->region_names_are_translatable) {
					$this->regions[ $region->id ] = array('id' => $region->id, 'countrycode' => $region->countrycode, 'regionname' => jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$region->id, $region->regionname, false, false));
				} else {
					$this->regions[ $region->id ] = array('id' => $region->id, 'countrycode' => $region->countrycode, 'regionname' => $region->regionname);
				}
			}
		}
		
		unset($result);

		return true;
	}
	
	//get all regions, used only when we need to get all regions from db
	public function get_all_regions()
	{
		if (!defined('ALL_REGIONS_SET')) {
			define('ALL_REGIONS_SET', 1);
		} else {
			return true;
		}

		$this->regions = array();

		$query = "SELECT `id`, `countrycode`, `regionname` FROM #__jomres_regions ORDER BY `countrycode`,`regionname`";
		$result = doSelectSql($query);
		
		if (!empty($result)) {
			foreach ($result as $region) {
				if ($this->region_names_are_translatable) {
					$this->regions[ $region->id ] = array('id' => $region->id, 'countrycode' => $region->countrycode, 'regionname' => jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$region->id, $region->regionname, false, false));
				} else {
					$this->regions[ $region->id ] = array('id' => $region->id, 'countrycode' => $region->countrycode, 'regionname' => $region->regionname);
				}
			}
		}
		
		unset($result);

		return true;
	}

	//this is mostly used when generating the ajax region dropdown
	public function get_country_regions($country_code = '')
	{
		if ($country_code == '') {
			return false;
		}
		
		if (isset($this->country_regions[$country_code])) {
			return $this->country_regions[$country_code];
		}
		
		$this->country_regions[$country_code] = array();
		
		$query = "SELECT `id`, `regionname` FROM #__jomres_regions WHERE `countrycode` = '$country_code' ORDER BY `regionname`";
		$result = doSelectSql($query);
		
		if (!empty($result)) {
			foreach ($result as $region) {
				if ($this->region_names_are_translatable) {
					$this->country_regions[ $country_code ][ $region->id ] = jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$region->id, $region->regionname, false, false);
				} else {
					$this->country_regions[ $country_code ][ $region->id ] = $region->regionname;
				}
			}
		}
		
		unset($result);

		return $this->country_regions[$country_code];
	}

	//get region details by region id
	public function get_region($id = 0)
	{
		if ((int)$id == 0) {
			return '';
		}

		if (isset($this->regions[ $id ])) {
			return $this->regions[ $id ];
		} else {
			$query = "SELECT `id`, `countrycode`, `regionname` FROM #__jomres_regions WHERE `id` = ".(int)$id;
			$result = doSelectSql($query);
			
			if (!empty($result)) {
				foreach ($result as $region) {
					if ($this->region_names_are_translatable) {
						$this->regions[ $id ] = array('countrycode' => $region->countrycode, 'regionname' => jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$region->id, $region->regionname, false, false));
					} else {
						$this->regions[ $id ] = array('countrycode' => $region->countrycode, 'regionname' => $region->regionname);
					}
				}
			} else {
				return null;
				// throw new Exception('Tried to get region with non-existant id');
			}
			
			return $this->regions[ $id ];
		}
	}
	
	//get region name by region id, mostly used when we need to display a region name
	public function get_region_name($id = 0)
	{
		if ((int)$id == 0) {
			return '';
		}

		if (isset($this->regions[ $id ])) {
			return $this->regions[ $id ]['regionname'];
		} else {
			$region_details = $this->get_region($id);
			
			if (isset($region_details['regionname'])) {
				return $region_details['regionname'];
			} else {
				// Can't throw an error here, users with existing properties with incorrect regions ( often because site admin has deleted regions ) will cause a fatal error. Instead we'll return null and give the calling script the option to unpublish the property instead.
				return null;
				// throw new Exception('Tried to get region with non-existant id');
			}
		}
	}
	
	//get region name by region id, mostly used when we need to display a region name
	public function get_region_id($region_name = '')
	{
		$region_name = jomres_cmsspecific_stringURLSafe($region_name);

		if ($region_name == '') {
			throw new Exception('Tried to get region id for empty region name');
		}

		$this->get_all_regions();

		foreach ($this->regions as $r) {
			if (strcasecmp(jomres_cmsspecific_stringURLSafe($r[ 'regionname' ]), $region_name) == 0) {
				return (int) $r[ 'id' ];
			}
		}
	}
}
