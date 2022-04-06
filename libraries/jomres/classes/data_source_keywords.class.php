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

class data_source_keywords extends jomres_data_source_base
{
	public function build_data_cache_file()
	{

		$data = array();
		foreach ($this->cms_languages as $lang) {
			$data[$lang] = [];
		}

		$query = "SELECT  `constant` , `customtext` , `language` FROM #__jomres_custom_text WHERE 
																				`constant` LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION_%' OR 
 																				`constant` LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES_%' OR 
                                                                                `constant` LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES_%' OR  
                                                                                `constant` LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS_%' OR  
                                                                                `constant` LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS_%' OR  
                                                                                `constant` LIKE 'JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT_%'";
		$custom_descriptions_result = doSelectSql($query);

		$custom_descriptions = array();
		if (!empty($custom_descriptions_result)) {
			foreach ($custom_descriptions_result as $custom) {
				if (!isset($custom_descriptions[$custom->language])) {
					$custom_descriptions[$custom->language] = array();
				}
				$keywords = $this->extract_key_words(  $custom->customtext );
				$custom_descriptions[$custom->language] = array_merge ( $keywords , $custom_descriptions[$custom->language] );
			}
		}

		if (!empty($custom_descriptions)) {
			foreach ($custom_descriptions as $language => $keywords) {
				foreach ( $keywords as $keyword ) {
					$data[$language][] = $keyword;
				}
			}
			$this->data = $data;
			$this->save_data_source();
		}
	}

	function extract_key_words($string) {
		mb_internal_encoding('UTF-8');
		$stopwords = array();
		$string = preg_replace('/[\pP]/u', '', trim(preg_replace('/\s\s+/iu', '', mb_strtolower($string))));
		$matchWords = array_filter(explode(' ',$string) , function ($item) use ($stopwords) { return !($item == '' || in_array($item, $stopwords) || mb_strlen($item) <= 2 || is_numeric($item));});
		$wordCountArr = array_count_values($matchWords);
		arsort($wordCountArr);
		return array_keys(array_slice($wordCountArr, 0, 10));
	}

}
