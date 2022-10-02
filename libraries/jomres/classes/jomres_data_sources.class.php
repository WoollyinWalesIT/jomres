<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 *
	 *
	 *
	 */

class jomres_data_sources
{
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$this->language = get_showtime('lang');
		$this->cwd = dirname(__FILE__);
		$this->data_cache_directory = JOMRES_TEMP_ABSPATH.'data_cache'.JRDS;

		if (!is_dir($this->data_cache_directory)) {
			if (!mkdir($this->data_cache_directory)) {
				throw new Exception("Error, could not make data_cache directory ".$this->data_cache_directory);
			}
		}
	}



	/**
	 *
	 * Respond with all possible data source types.
	 *
	 * For this first iteration we will just include geographic locations but we could in future find keywords in property descriptions/addresses etc and maintain a list of those too.
	 *
	 */
	public function get_data_source_types()
	{
		$sources = array();
		$sources[] = 'countries';
		$sources[] = 'regions';
		$sources[] = 'towns';
		$sources[] = 'keywords';
		$sources[] = 'stars';
		$sources[] = 'guestnumbers';
		$sources[] = 'priceranges';
		return $sources;
	}


	public function get_data($language = '', $type = '')
	{
		if ($language == '') {
			throw new Exception("Error, language not sent ");
		}

		if ($type == '') {
			throw new Exception("Error, data source type not sent ");
		}

		$available_data_sources = $this->get_data_source_types();
		if (!in_array($type, $available_data_sources)) {
			throw new Exception("Error, invalid data source type requested ");
		}

		$requested_file = $this->data_cache_directory.'data_source_'.$type.'.json';

		if (!file_exists($requested_file)) {
			return array();
		}
		$contents = (array)json_decode(file_get_contents($requested_file));

		if (!isset($contents[$language])) {
			return array();
		}
		return $contents[$language];
	}
}
