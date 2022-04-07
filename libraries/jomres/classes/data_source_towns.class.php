<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.3.0
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	class data_source_towns extends jomres_data_source_base
	{
		public function build_data_cache_file()
		{

			$data = array();
			foreach ($this->cms_languages as $lang) {
				$data[$lang] = [];
			}

			$query = "SELECT  `constant` , `customtext` , `language`
		FROM  #__jomres_custom_text
		RIGHT JOIN #__jomres_propertys
		ON #__jomres_custom_text.property_uid = #__jomres_propertys.propertys_uid
		WHERE #__jomres_propertys.published = 1 AND 
		#__jomres_custom_text.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN_%'";
			$custom_town_names_result = doSelectSql($query);

			$custom_town_names = array();
			if (!empty($custom_town_names_result)) {
				foreach ($custom_town_names_result as $custom) {
					$custom_town_names[$custom->language][$custom->constant] = $custom->customtext;
				}
			}

			if (!empty($custom_town_names)) {
				foreach ($custom_town_names as $language => $towns) {
					foreach ( $towns as $town ) {
						if (is_array($data[$language])) {
							if (!in_array($town , $data[$language] )) {
								$data[$language][] = $town;
							}
						} else {
							$data[$language] = [];
							$data[$language][] = $town;
						}
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