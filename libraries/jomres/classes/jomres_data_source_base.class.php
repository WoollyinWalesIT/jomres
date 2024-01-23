<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
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
class jomres_data_source_base
{
	/**
	 *
	 *
	 *
	 */

	public function __construct($cache_directory = '', $source_type = '')
	{
		$this->data = array();
		$this->file_save_location =  $cache_directory;
		$this->type = $source_type;
		$this->file_name = 'data_source_'.$source_type.'.json';

		$this->cms_languages = $this->get_installed_cms_languages();
		if (empty($this->cms_languages) && this_cms_is_wordpress()) {
			$this->cms_languages[] = "en-US";
		}
	}

	// Get the languages installed on the host CMS
	public function get_installed_cms_languages()
	{
		$languages = [];

		if (this_cms_is_joomla()) {
			$query = "SELECT `lang_code` FROM #__languages";
			$installed_languages = doSelectSql($query);
			foreach ($installed_languages as $lang) {
				$languages[]=$lang->lang_code;
			}
		} else {
			$installed_languages = get_available_languages();
			foreach ($installed_languages as $lang) {
				$languages[] = str_replace("_", "-", $lang);
			}
		}
		return $languages;
	}


	/**
	 *
	 *
	 *
	 */
	public function save_data_source()
	{
		if (!isset($this->data) || empty($this->data)) {
			return false;
		}
		if (is_null($this->type)) {
			return false;
		}

		$contents = json_encode($this->data);
		file_put_contents($this->file_save_location.$this->file_name, $contents);
		return $this->file_name;
	}
}
