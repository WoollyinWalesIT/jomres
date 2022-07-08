<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.5.2
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

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
						$no = $s->stars;
						if (!isset($stars_array[$no]))
							$stars_array[$no] = 0;
						$tmp_arr[$no]++;
					}

					foreach ($stars_array as $key=>$val) { // We want all possible star results to appear in the array, even if empty
						if (!array_key_exists($key ,$tmp_arr )) {
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
