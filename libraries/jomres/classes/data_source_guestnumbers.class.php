<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.7.2
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
	 * Class to build a list of guest numbers, and their names in the current language.
	 *
	 * @since 9.9.4
	 *
	 * Data source functionality is regenerated when a property is updated. While it can be used by other features, it's primary purpose is to provide a list of guest numbers for the property guest numbers dropdowns autocomplete search feature. See get_search_form_element_autocomplete() in jomres/core-plugins/jomres_search_form_elements/jomres_search_form_elements.php for an example of how this data source is used.
	 *
	 */

class data_source_guestnumbers extends jomres_data_source_base
{
	public function build_data_cache_file()
	{

		$data = array();
		foreach ($this->cms_languages as $lang) {
			$data[$lang] = [];
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($jrConfig[ 'guestnumbersearch' ] == 'equal') {
			$query = 'SELECT DISTINCT maxpeople FROM #__jomres_rates ORDER by maxpeople ASC';
			$rateList = doSelectSql($query);
			foreach ($rateList as $rate) {
				$result[ ] = $rate->maxpeople;
			}
		} else {
			$query = 'SELECT MAX(maxpeople) FROM #__jomres_rates LIMIT 1';
			$maxpeople = (int)doSelectSql($query, 1);

			if ($maxpeople > 100) {
				$maxpeople = 100;
			}

			for ($i = 1; $i <= $maxpeople; ++$i) {
				$result[] = $i;
			}
		}

		if (!empty($result)) {
			foreach ($this->cms_languages as $lang) {
				$data[$lang] = $result;
			}
		}
		$this->data = $data;
		$this->save_data_source();
	}
}
