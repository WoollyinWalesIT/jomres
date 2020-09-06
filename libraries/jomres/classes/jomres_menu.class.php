<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
 *
 * @copyright	2005-2020 Vince Wooll
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

class jomres_menu
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		//frontend menu
		$this->sections = array();
		$this->items = array();
		$this->menu = array();
		
		//admin menu
		$this->admin_sections = array();
		$this->admin_items = array();
		$this->admin_menu = array();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function add_section($section_id = 1, $title = '')
	{
		if ($title == '') {
			return false;
		}
		
		$this->sections[$section_id] = array(
			'title' => $title
		);
		
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function add_admin_section($section_id = 1, $title = '')
	{
		if ($title == '') {
			return false;
		}
		
		$this->admin_sections[$section_id] = array(
			'title' => $title
		);
		
		return true;
	}
	
	/* 
	Core frontend sections
	1 => 'Dashboard';
	10 => 'Account';
	20 => 'Properties'
	30 => 'Bookings'
	40 => 'Guests'
	50 => 'Invoices'
	60 => 'Reports'
	70 => 'Misc'
	80 => 'Settings'
	90 => 'Help'
	*/
		
	/**
	 * 
	 *
	 *
	 */

	public function add_item($section_id = 70, $title = '', $task = '', $icon = 'fa-cog', $is_url = false, $external = false, $disabled = false)
	{
		if ($title == '') {
			return false;
		}
		
		if ((int)$section_id == 0) {
			$section_id = 70; //we`ll place menu items that don`t have a section id in the Misc core section
		}

		if ($task == '') {
			$task = 'blank';
			
			//check to see if we already have the blank task defined (cpanel frontpage), so we won`t set it again
			//this also makes sure that plugins can`t override this by mistake
			if (isset($this->items[$task])) {
				return true;
			}
		}

		//check if this user can access this task
		if (!$external) {
			$task_name = '';

			if ($is_url) {
				$query_string = parse_url($task, PHP_URL_QUERY);
				parse_str($query_string, $query_params);
				
				if (isset($query_params['task'])) {
					$task_name = $query_params['task'];
				}
			} else {
				$task_name = $task;
			}

			$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');
			
			if (!$jomres_access_control->this_user_can($task_name)) {
				return false;
			}
		}
		
		//add menu item
		$this->items[$task] = array(
			'section_id' => $section_id,
			'title' => $title,
			'icon' => $icon,
			'is_url' => $is_url,
			'external' => $external, 
			'disabled' => $disabled
		);
		
		return true;
	}
	
	/* 
	Core admin sections
	1 => 'Dashboard';
	10 => 'Users';
	20 => 'Commission'
	30 => 'Subscriptions'
	40 => 'Invoices'
	50 => 'Portal'
	60 => 'Translations'
	70 => 'Tools'
	80 => 'Reports'
	90 => 'Settings'
	100 => 'Help' 
	*/
		
	/**
	 * 
	 *
	 *
	 */

	public function add_admin_item($section_id = 70, $title = '', $task = '', $icon = 'fa-cog', $is_url = false, $external = false, $disabled = false)
	{
		if ($title == '') {
			return false;
		}
		
		if ((int)$section_id == 0) {
			$section_id = 70; //we`ll place menu items that don`t have a section id in the Tools core section
		}
		
		if ($task == '') {
			$task = 'blank';
			
			//check to see if we already have the blank task defined (cpanel frontpage), so we won`t set it again
			//this also makes sure that plugins can`t override this by mistake
			if (isset($this->admin_items[$task])) {
				return true;
			}
		}
		
		//add admin menu item
		$this->admin_items[$task] = array(
			'section_id' => $section_id,
			'title' => $title,
			'icon' => $icon, 
			'external' => $external,
			'is_url' => $is_url,
			'disabled' => $disabled
		);
		
		return true;
	}
	
	//generate frontend cpanel menu
		
	/**
	 * 
	 *
	 *
	 */

	public function generate_menu()
	{
		if (empty($this->sections) || empty($this->items)) {
			return true;
		}
		
		foreach ($this->items as $task => $params) {
			$section_id = $params['section_id'];
			
			if (!isset($this->sections[$section_id])) {
				$section_id = 70; //section not defined, so default to misc
			}
			
			$this->menu[$section_id][] = $task;
		}
		
		ksort($this->menu);
		
		return true;
	}
	
	//generate admin cpanel menu
		
	/**
	 * 
	 *
	 *
	 */

	public function generate_admin_menu()
	{
		if (empty($this->admin_sections) || empty($this->admin_items)) {
			return true;
		}
		
		foreach ($this->admin_items as $task => $params) {
			$section_id = $params['section_id'];
			
			if (!isset($this->admin_sections[$section_id])) {
				$section_id = 70; //section not defined, so default to misc
			}
			
			$this->admin_menu[$section_id][] = $task;
		}
		
		ksort($this->admin_menu);
		
		return true;
	}
}
