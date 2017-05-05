<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_menu
{
    private static $configInstance;

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

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function add_admin_section($section_id = 1, $title = '', $icon = 'fa-cog')
	{
		if ($title == '') {
			return false;
		}
		
		$this->admin_sections[$section_id] = array(
			'title' => $title, 
			'icon' => $icon
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
	public function add_admin_item($section_id = 70, $title = '', $task = '', $icon = 'fa-cog', $external = false, $disabled = false)
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
		
		$this->admin_items[$task] = array(
			'section_id' => $section_id,
			'title' => $title,
			'icon' => $icon, 
			'external' => $external, 
			'disabled' => $disabled
		);
		
		return true;
	}
	
	public function generate_admin_menu()
	{
		if (empty($this->admin_sections) || empty($this->admin_items)) {
			return true;
		}
		
		foreach ($this->admin_items as $task => $params) {
			$this->admin_menu[$params['section_id']][] = $task;
		}
		
		ksort($this->admin_menu);
		
		return true;
	}
}
