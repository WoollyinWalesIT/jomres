<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.3.1
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	class data_source_priceranges extends jomres_data_source_base
	{
		public function build_data_cache_file()
		{

			$data = array();
			foreach ($this->cms_languages as $lang) {
				$data[$lang] = [];
			}

			$increments = 10;

			$query = 'SELECT DISTINCT roomrateperday FROM #__jomres_rates,#__jomres_propertys WHERE #__jomres_rates.property_uid = #__jomres_propertys.propertys_uid AND #__jomres_propertys.published = 1 ORDER by #__jomres_rates.roomrateperday';
			$rateList = doSelectSql($query);

			$query = 'SELECT DISTINCT property_key FROM #__jomres_propertys WHERE published = 1 ORDER by property_key';
			$realestateList = doSelectSql($query);

			$result = array();

			$allTariffs = array();
			foreach ($rateList as $rate) {
				$allTariffs[ ] = $rate->roomrateperday;
			}

			foreach ($realestateList as $rate) {
				if ((float) $rate->property_key > 0.00) {
					$allTariffs[ ] = $rate->property_key;
				}
			}

			sort($allTariffs);

			if ( isset($allTariffs[ 0 ])) {
				$highest = end($allTariffs);
				$lowest = reset($allTariffs);
				// Found during testing, when one property has the price 100,000,000 and the increments is left to the default 20, you'll get an out of memory error.
				// This is because you'll have up to half a million possible ranges. Here we'll test highest/increments. If the result is > 100 we'll have to set the increments to something a bit more sensible to stave off out of memory errors.
				if ($highest / $increments > 10000) {
					$increments = $increments * 1000;
				}

				$ranges = ds_ranges(0, $highest, $increments);
				foreach ($ranges as $range) {
					$startRange = $range;
					$endRange = $range + $increments;
					$rangeHasElements = false;
					foreach ($allTariffs as $t) {
						if ($t > $startRange && $t <= $endRange) {
							$rangeHasElements = true;
						}
					}
					if ($rangeHasElements) {
						$result[ ] = $startRange.'-'.$endRange;
					}
				}
				$count = count($allTariffs) - 1;
				$highest = $allTariffs[ $count ];
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


function ds_ranges($start, $end, $step = 1)
	{
		if ( $step == 0 ) {
			$step = 100;
		}
		$range = array();
		for ($i = $start; $i < $end; $i += $step) {
			if (!(($i - $start) % $step)) {
				$range[ ] = $i;
			}
		}

		return $range;
	}