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
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_currency_conversion
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$jomres_currency_exchange_rates = jomres_singleton_abstract::getInstance('jomres_currency_exchange_rates');

		if (!empty($jomres_currency_exchange_rates->rates)) {
			$this->rates = $jomres_currency_exchange_rates->rates;
		} else {
			$this->rates = array();
			$this->rates[ 'GBP' ] = array();
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function this_code_can_be_converted($target_code)
	{
		$valid = false;
		foreach ($this->rates as $base => $c) {
			if (array_key_exists($target_code, $c)) {
				$valid = true;
			}
		}

		return $valid;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function convert_sum($figure, $base, $foreign)
	{
		$base_rate = $this->rates[ 'GBP' ][ $base ];
		$foreign_rate = $this->rates[ 'GBP' ][ $foreign ];
		$sum_in_gbp = $figure / $base_rate;
		$foreign_sum = $sum_in_gbp * $foreign_rate;

		return $foreign_sum;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_exchange_rate_dropdown($base = '', $alternate_template = false)
	{
		if ($base == '') {
			$base = 'GBP';
		}
		if (!$this->check_currency_code_valid($base)) {
			$base = 'GBP';
		}

		$currency_codes = jomres_singleton_abstract::getInstance('currency_codes');
		
		$fmts = array();
		$rows = array();
		foreach ($this->rates[ 'GBP' ] as $currency_code => $rate) {
			if ($this->check_currency_code_valid($currency_code)) {
				$text = $currency_codes->codes[ $currency_code ];
				$fmts[ ] = jomresHTML::makeOption($currency_code, $text);

				if ($currency_code == $base) {
					$selected = 'selected="selected"';
				} else {
					$selected = '';
				}

				$rows[$currency_code] = array('CURRENCY_CODE' => $currency_code, 'TEXT' => $text, 'SELECTED' => $selected);
			}
		}

		$javascript = 'onChange="switch_exchange_rate(\''.JOMRES_SITEPAGE_URL_AJAX.'\',this.value);"';
		if ($alternate_template && using_bootstrap()) {
			$output = array();
			$pageoutput = array();

			$output['FIRST'] = '';
			if (isset($rows[$base]['TEXT'])) {
				$output['FIRST'] = $rows[$base]['TEXT'];
			}

			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('currency_dropdown.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$dropdown = $tmpl->getParsedTemplate();
		} else {
			$dropdown = jomresHTML::selectList($fmts, 'user_current_currency_code', 'class="inputbox" size="1" '.$javascript, 'value', 'text', $base);
		}

		return $dropdown;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function check_currency_code_valid($code)
	{
		$valid = false;
		foreach ($this->rates as $base => $c) {
			if (array_key_exists($code, $c)) {
				$valid = true;
			}
		}

		return $valid;
	}
}
