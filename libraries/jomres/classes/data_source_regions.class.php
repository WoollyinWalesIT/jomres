<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.7.1
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	#[AllowDynamicProperties]
/**
 *
 * @package Jomres\Core\Classes
 *
 * Class to build a list of regions, and their names in the current language.
 *
 * @since 9.9.4
 *
 * Data source functionality is regenerated when a property is updated. While it can be used by other features, it's primary purpose is to provide a list of keywords for the autocomplete search feature.
 *
 */
class data_source_regions extends jomres_data_source_base
{
	public function build_data_cache_file()
	{

		$data = array();
		foreach ($this->cms_languages as $lang) {
			$data[$lang] = [];
		}

		$query = "SELECT  `constant` , `customtext` , `language` FROM #__jomres_custom_text WHERE `constant` LIKE '_JOMRES_CUSTOMTEXT_REGIONS_%'";
		$custom_region_names_result = doSelectSql($query);

		$custom_region_names = array();
		if (!empty($custom_region_names_result)) {
			foreach ($custom_region_names_result as $custom) {
				$custom_region_names[$custom->language][$custom->constant] = $custom->customtext;
			}
		}

		$query = "SELECT `id`,`countrycode`,`regionname` FROM #__jomres_regions WHERE `id` IN (SELECT DISTINCT `property_region` FROM #__jomres_propertys WHERE published = 1 ) ORDER BY `regionname`";
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $region) {
				foreach ($this->cms_languages as $lang) {
					if (isset($custom_region_names[$lang])) {
						$const = "_JOMRES_CUSTOMTEXT_REGIONS_".$region->id;
						if (isset($custom_region_names[$lang][$const])) {
							$region_name = $custom_region_names[$lang][$const];
						} else {
							$region_name = $region->regionname;
						}
					} else {
						$region_name = $region->regionname;
					}

					$data[$lang][] = array( 'countrycode' => strtoupper($region->countrycode), 'regionname' => $region_name);
				}
			}

			$this->data = $data;

			$this->save_data_source();
		}
	}
}

/*
 * array(3) {
  ["en-GB"]=>
  array(2) {
	[0]=>
	array(2) {
	  ["countrycode"]=>
	  string(2) "TH"
	  ["countryname"]=>
	  string(8) "Thailand"
	}
	[1]=>
	array(2) {
	  ["countrycode"]=>
	  string(2) "GB"
	  ["countryname"]=>
	  string(22) "United Kingdom ENGLISH"
	}
  }
  ["es-ES"]=>
  array(2) {
	[0]=>
	array(2) {
	  ["countrycode"]=>
	  string(2) "TH"
	  ["countryname"]=>
	  string(8) "Thailand"
	}
	[1]=>
	array(2) {
	  ["countrycode"]=>
	  string(2) "GB"
	  ["countryname"]=>
	  string(22) "United Kingdom SPANISH"
	}
  }
  ["fr-FR"]=>
  array(2) {
	[0]=>
	array(2) {
	  ["countrycode"]=>
	  string(2) "TH"
	  ["countryname"]=>
	  string(8) "Thailand"
	}
	[1]=>
	array(2) {
	  ["countrycode"]=>
	  string(2) "GB"
	  ["countryname"]=>
	  string(21) "United Kingdom FRENCH"
	}
  }
}

 */
