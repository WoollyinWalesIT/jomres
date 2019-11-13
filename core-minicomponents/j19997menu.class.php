<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * Core Minicomponent 
	 *
	 * 
	 */

class j19997menu
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$this->ret_vals = '';
		$menu_sections = array();
		
		$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');
		$jomres_menu->generate_admin_menu();
		
		if (empty($jomres_menu->admin_menu)) {
			return;
		}

		//section params are in $jomres_menu->admin_sections[section_id]
		//menu items params are in $jomres_menu->admin_items[task]
		//now let`s generate the menu output
		foreach ($jomres_menu->admin_menu as $section_id => $tasks) {
			$pageoutput = array();
			$rows = array();
			$output = array();
			
			$output[ 'COLLAPSE_IN' ] = '';

			foreach ($tasks as $task) {
				$r = array();
				
				//menu item name
				$r['MENU_NAME'] = $jomres_menu->admin_items[$task]['title'];

				//menu item url
				if ($jomres_menu->admin_items[$task]['is_url']) {
					$r['LINK'] = $task;
				} elseif ($task != 'blank') {
					$r['LINK'] = jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task='.$task);
				} else {
					$r['LINK'] = jomresUrl(JOMRES_SITEPAGE_URL_ADMIN);
				}
				
				//menu item icon
				$r['ICON_CLASS'] = $jomres_menu->admin_items[$task]['icon'];

				//menu item target
				$r[ 'TARGET' ] = '';
				if ($jomres_menu->admin_items[$task]['external']) {
					$r[ 'TARGET' ] = ' target="_blank" ';
				}
				
				//menu item disabled class
				$r[ 'DISABLED_CLASS' ] = '';
				if ($jomres_menu->admin_items[$task]['disabled']) {
					$r[ 'LINK' ] = '#';
					$r[ 'DISABLED_CLASS' ] = 'disabled';
				}
				
				//menu item badges TODO: find a better way or remove this completely
				$r[ 'BADGES' ] = '';

				if (!$jomres_menu->admin_items[$task]['is_url'] && get_showtime('task') != 'addplugin') {
					$items_requiring_attention = get_number_of_items_requiring_attention_for_menu_option($task);
					
					if (!empty($items_requiring_attention)) {
						foreach ($items_requiring_attention as $colour => $number) {
							if ($number > 0) {
								$tmpl = new patTemplate();
								$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
								$tmpl->readTemplatesFromInput('menu_badge_'.$colour.'.html');
								$tmpl->addRows('items_requiring_attention', array(array('NUMBER' => $number)));
								$r[ 'BADGES' ] = $tmpl->getParsedTemplate();
							}
						}
					}
				}
				
				//active menu item
				$r[ 'ACTIVE' ] = '';
				
				if (get_showtime('task') == $task) {
					$r[ 'ACTIVE' ] = 'active';
					$output[ 'COLLAPSE_IN' ] = 'in';
				} elseif (get_showtime('task') == '' && $task == 'blank' && !$jomres_menu->admin_items[$task]['external']) {
					$r[ 'ACTIVE' ] = 'active';
					$output[ 'COLLAPSE_IN' ] = 'in';
				}
				
				$rows[] = $r;
			}
			
			$output[ 'CATEGORY' ] = $jomres_menu->admin_sections[$section_id]['title'];
			$output[ 'ID' ] = 'cpanel-category-'.$section_id;

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			if (this_cms_is_joomla() && _JOMRES_DETECTED_CMS == 'joomla3' ) {
				$tmpl->readTemplatesFromInput('control_panel_menu_options_vertical.html');
			} else {
				$tmpl->readTemplatesFromInput('control_panel_menu_options_horizontal.html');
			}
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$menu_sections[][ 'SECTION' ] = $tmpl->getParsedTemplate();
		}
		
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		
		if (this_cms_is_joomla() && _JOMRES_DETECTED_CMS == 'joomla3') {
			$tmpl->readTemplatesFromInput('control_panel_menu_wrapper_vertical.html');
		} else {
			$tmpl->readTemplatesFromInput('control_panel_menu_wrapper_horizontal.html');
		}
		$tmpl->addRows('menu_sections', $menu_sections);
		$this->ret_vals = $tmpl->getParsedTemplate();
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->ret_vals;
	}
}
