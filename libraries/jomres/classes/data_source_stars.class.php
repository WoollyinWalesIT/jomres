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
	 * Class to build a list of stars and the number of properties that have that number of stars.
	 *
	 * @since 9.9.4
	 *
	 * Data source functionality is regenerated when a property is updated. While it can be used by other features, it's primary purpose is to provide a list of stars for the autocomplete search feature.
	 *
	 */

class data_source_stars extends jomres_data_source_base
{
	public function build_data_cache_file()
	{

		$data = array();
		foreach ($this->cms_languages as $lang) {
			$data[$lang] = [];
		}

		$stars_array=array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0);
		$query = "SELECT stars FROM #__jomres_propertys WHERE published = 1";
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($this->cms_languages as $lang) {
				$tmp_arr = [];
				foreach ($result as $s) {
					if (is_null($s->stars)) {
						$s->stars = 0;
					}

					$no = $s->stars;
					if (!isset($stars_array[$no])) {
						$stars_array[$no] = 0;
					}
					if (!isset($tmp_arr[$no])) {
						$tmp_arr[$no] = 0;
					}
					$tmp_arr[$no]++;
				}

				foreach ($stars_array as $key => $val) { // We want all possible star results to appear in the array, even if empty
					if (!array_key_exists($key, $tmp_arr)) {
						$tmp_arr[$key] = 0;
					}
				}

				ksort($tmp_arr);

				$data[$lang] = $tmp_arr;
			}
		}
		$this->data = $data;
		$this->save_data_source();
	}
}
