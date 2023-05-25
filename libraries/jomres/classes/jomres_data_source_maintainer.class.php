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

	/**
	 *
	 *
	 *
	 */
	#[AllowDynamicProperties]
class jomres_data_source_maintainer
{
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		jr_import('jomres_data_source_base');

		$this->cwd = dirname(__FILE__);
		$this->data_cache_directory = JOMRES_TEMP_ABSPATH.'data_cache'.JRDS;

		if (!is_dir($this->data_cache_directory)) {
			if (!mkdir($this->data_cache_directory)) {
				throw new Exception("Error, could not make data_cache_directory directory ".$this->data_cache_directory);
			}
		}

		if ($this->is_libraries_dir_empty()) {
			$this->build_all_libraries();
		}
	}

	/**
	 *
	 *
	 *
	 */

	public function build_all_libraries()
	{
		//$this->prep_custom_text();

		jr_import('jomres_data_sources');
		$jomres_data_sources = new jomres_data_sources();
		$data_types = $jomres_data_sources->get_data_source_types();
		foreach ($data_types as $type) {
			$filename = 'data_source_'.$type.'.class.php';
			if (file_exists($this->cwd.JRDS.$filename)) {
				$class_name = 'data_source_'.$type;
				require_once($this->cwd.JRDS.$filename);
				$temp_class = new $class_name($this->data_cache_directory, $type);
				$temp_class->build_data_cache_file();
			} else {
				throw new Exception("Error, data source parser script ".$this->cwd.JRDS.$filename . " does not exist ");
			}
		}
	}

	public function build_library($type)
	{
		$filename = 'data_source_'.$type.'.class.php';
		if (file_exists($this->cwd.JRDS.$filename)) {
			$class_name = 'data_source_'.$type;
			require_once($this->cwd.JRDS.$filename);
			$temp_class = new $class_name($this->data_cache_directory, $type);
			$temp_class->build_data_cache_file();
		} else {
			throw new Exception("Error, data source parser script ".$this->cwd.JRDS.$filename . " does not exist ");
		}
	}

	/**
	 *
	 * If the directory is empty, we will start the data collation process
	 *
	 */
	private function is_libraries_dir_empty()
	{
		$contents = get_directory_contents($this->data_cache_directory);
		if (count($contents) == 2) { // it's empty
			return true;
		}
		return false;
	}

	/*
	 *
	 * By default the custom text tables may not be populated by "translated" language strings. Without them the searches for regions and countries won't work so first we will import any countries and regions we need to import, into the custom text table.
	 *
	 */
	/*private function prep_custom_text()
	{
		$jomres_data_source_base = new jomres_data_source_base();
		$languages = $jomres_data_source_base->get_installed_cms_languages();
		$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
		$jomres_countries->get_all_countries();
		$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
		$jomres_regions->get_all_regions();

		// Time consuming, but only needs to be done once
		foreach ($languages as $lang) {
			$query = "SELECT `constant` FROM #__jomres_custom_text WHERE `constant` LIKE '_JOMRES_CUSTOMTEXT_COUNTRIES%' AND `language` = '".$lang."'";
			$result = doSelectSql($query);

			// Quickly parse the current customisations so that we can easily compare them in the next loop
			$existing_countries = array();
			if (!empty($result)) {
				foreach ($result as $custom_country) {
					$bang = explode ( "_" , $custom_country->constant );
					$existing_countries[] = $bang[4];
				}
			}


			foreach ( $jomres_countries->countries as $vanilla_country ) {
				if (!in_array($vanilla_country['id'],$existing_countries)) {
					$theConstant = '_JOMRES_CUSTOMTEXT_COUNTRIES_'.$vanilla_country['id'];
					$query = "INSERT INTO #__jomres_custom_text
									(
									`constant`,
									`customtext`,
									`property_uid`,
									`language`,
									`language_context`
									)
								VALUES (
									'".$theConstant."',
									'".$vanilla_country['countryname']."',
									'0',
									'".$lang."',
									'0'
									)";
					doInsertSql($query);
				}
			}

			$query = "SELECT `constant` FROM #__jomres_custom_text WHERE `constant` LIKE '_JOMRES_CUSTOMTEXT_REGIONS%' AND `language` = '".$lang."'";
			$result = doSelectSql($query);

			// Quickly parse the current customisations so that we can easily compare them in the next loop
			$existing_regions = array();
			if (!empty($result)) {
				foreach ($result as $custom_region) {
					$bang = explode ( "_" , $custom_region->constant );
					$existing_regions[] = $bang[4];
				}
			}

			foreach ( $jomres_regions->regions as $vanilla_region ) {
				if (!in_array($vanilla_region['id'],$existing_regions)) {
					$theConstant = '_JOMRES_CUSTOMTEXT_REGIONS_'.$vanilla_region['id'];
					$query = "INSERT INTO #__jomres_custom_text
									(
									`constant`,
									`customtext`,
									`property_uid`,
									`language`,
									`language_context`
									)
								VALUES (
									'".$theConstant."',
									'".$vanilla_region['regionname']."',
									'0',
									'".$lang."',
									'0'
									)";
					doInsertSql($query);
				}
			}
		}


	}*/
}
