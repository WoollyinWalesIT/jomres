<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 * @version Jomres 10.2.0
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class data_source_countries extends jomres_data_source_base
{
	public function build_data_cache_file()
	{

		$data = array();
		foreach ($this->cms_languages as $lang) {
			$data[$lang] = [];
		}

		$query = "SELECT  `constant` , `customtext` , `language` FROM #__jomres_custom_text WHERE `constant` LIKE '_JOMRES_CUSTOMTEXT_COUNTRIES_%'";
		$custom_country_names_result = doSelectSql($query);

		$custom_country_names = array();
		if (!empty($custom_country_names_result)) {
			foreach ($custom_country_names_result as $custom) {
				$custom_country_names[$custom->language][$custom->constant] = $custom->customtext;
			}
		}

		$query = "SELECT `id`,`countrycode`,`countryname` FROM #__jomres_countries WHERE `countrycode` IN (SELECT DISTINCT `property_country` FROM #__jomres_propertys WHERE published = 1) ORDER BY `countryname`";
		$result = doSelectSql($query);

		$default_language = get_showtime('lang');
		if (!empty($result)) {
			foreach ($result as $country) {
				foreach ($this->cms_languages as $lang) {

					if (isset($custom_country_names[$lang])) {
						$const = "_JOMRES_CUSTOMTEXT_COUNTRIES_".$country->id;
						if (isset($custom_country_names[$lang][$const] )) {
							$country_name = $custom_country_names[$lang][$const];
						} else {
							$country_name = $country->countryname;
						}
					} else {
						$country_name = $country->countryname;
					}

					$data[$lang][] = array( 'countrycode' => strtoupper($country->countrycode), 'countryname' => $country_name);

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