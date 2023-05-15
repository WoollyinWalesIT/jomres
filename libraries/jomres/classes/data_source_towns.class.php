<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.7.0
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
	 * Class to build a list of towns in the current language
	 *
	 * @since 9.9.4
	 *
	 * Data source functionality is regenerated when a property is updated. While it can be used by other features, it's primary purpose is to provide a list of towns for the autocomplete search feature.
	 *
	 */

class data_source_towns extends jomres_data_source_base
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

		/*$query = "SELECT  `constant` , `customtext` , `language`
		FROM  #__jomres_custom_text
		RIGHT JOIN #__jomres_propertys
		ON #__jomres_custom_text.property_uid = #__jomres_propertys.propertys_uid
		WHERE #__jomres_propertys.published = 1 AND 
		#__jomres_custom_text.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN_%'";
		$custom_town_names_result = doSelectSql($query);*/

        $query = "SELECT DISTINCT (CASE WHEN (a.propertys_uid = b.property_uid 
			    AND b.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN%' ) 
				THEN b.customtext 
				ELSE a.property_town 
				END) AS property_town,
				a.property_region,
				a.property_country, 
				b.language,
				b.constant
				FROM #__jomres_propertys a
				LEFT JOIN #__jomres_custom_text b ON (a.propertys_uid = b.property_uid 
				AND b.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN%' )
				WHERE a.published = '1' 
				ORDER BY property_town ASC ";
        $result = doSelectSql($query);

        $jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');


        if (!empty($result)) {
            foreach ($result as $town) {
                foreach ($this->cms_languages as $lang) {
                    if (isset($custom_region_names[$lang])) {
                        $const = "_JOMRES_CUSTOMTEXT_REGIONS_".$town->property_region;
                        if (isset($custom_region_names[$lang][$const])) {
                            $region_name = $custom_region_names[$lang][$const];
                        } else {
                            $region_name = $region_name=jr_gettext("_JOMRES_CUSTOMTEXT_REGIONS_".$town->property_region,$jomres_regions->get_region_name($town->property_region),false,false);
                        }
                    } else {
                        $region_name = $region_name=jr_gettext("_JOMRES_CUSTOMTEXT_REGIONS_".$town->property_region,$jomres_regions->get_region_name($town->property_region),false,false);
                    }

                    if ($town->language == $lang) {
                        $data[$lang][] = array( 'countrycode' => strtoupper($town->property_country), 'regionname' => $region_name , 'region_id' => $town->property_region,'townname' => $town->property_town );
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
