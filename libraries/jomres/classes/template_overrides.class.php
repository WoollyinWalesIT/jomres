<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class template_overrides
{
	public function __construct()
	{
		$this->template_overrides = array();
		$this->get_all_overrides();
	}

	// Get all room types details
	public function get_all_overrides()
	{
		$query = 'SELECT `template_name`, `path` FROM #__jomres_template_package_overrides';
		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			if (file_exists(JOMRESPATH_BASE.$r->path.$r->template_name) ) {
				$this->template_overrides[$r->template_name]['template_name']		= $r->template_name;
				$this->template_overrides[$r->template_name]['path']				= $r->path;
			} else {
				$bs_version = jomres_bootstrap_version();
				if ( file_exists (JOMRESPATH_BASE.$r->path."templates".JRDS."bootstrap".$bs_version.JRDS.$r->template_name) ) {
					$template_path = $r->path."templates".JRDS."bootstrap".$bs_version.JRDS;
					$this->template_overrides[$r->template_name]['template_name']		= $r->template_name;
					$this->template_overrides[$r->template_name]['path']				= $template_path;
				
				}
			}
		}

		return true;
	}

	//Save new or existing resource type
	public function save_template_override($template_name)
	{
		$query = "SELECT `template_name` FROM #__jomres_template_package_overrides WHERE  `template_name` = '".$template_name."'";
		$result = doSelectSql($query);
		
		if (empty($result)) {
			$query = "INSERT INTO #__jomres_template_package_overrides 
				(
				`template_name`,
				`path`
				)
				VALUES 
				(
				'".$template_name."',
				'".$this->template_overrides[$template_name]['path']."'
				)
				";
		} else {
			$query = "UPDATE #__jomres_template_package_overrides 
						SET 
							`template_name` 		= '".$template_name."', 
							`path` 					= '".$this->template_overrides[$template_name]['path']."'
						WHERE `template_name` ='" .$template_name."'";
		}

		if (doInsertSql($query, false)) {
			return true;
		} else {
			throw new Exception('Error: Failed to update template overrides.');
		}
	}

	//Delete resource type
	public function delete_override($template_name)
	{
		$success = true;
		$query = "DELETE FROM #__jomres_template_package_overrides WHERE `template_name` = '".$template_name."'";
		if (!doInsertSql($query, false)) {
			$success = false;
		}
		return $success;
	}
}
