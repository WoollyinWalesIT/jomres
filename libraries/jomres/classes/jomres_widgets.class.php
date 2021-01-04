<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
 *
 * @copyright	2005-2021 Vince Wooll
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

class jomres_widgets
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->widgets = array();
		$this->this_page_widgets = array();
		$this->default_widgets = array();
	}
	
	/**
	 * 
	 *
	 *
	 */

	//register widget
	public function register_widget($eventPoint = '', $eventName = '', $title = '', $default = false)
	{
		if ($title == '' || $eventName == '' || $eventPoint == '') {
			return false;
		}
		
		if (isset($this->widgets[$eventName])) {
			return true;
		}
		
		$this->widgets[$eventName] = array(
			'eventPoint' => $eventPoint,
			'title' => $title
		);
		
		if ($default) {
			$this->default_widgets[$eventName] = $this->widgets[$eventName];
		}
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//unregister widget
	public function unregister_widget($eventName = '')
	{
		if ($eventName == '') {
			return false;
		}
		
		if (isset($this->widgets[$eventName])) {
			unset($this->widgets[$eventName]);
		}
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//unregister widget
	public function unregister_default_widget($eventName = '')
	{
		if ($eventName == '') {
			return false;
		}
		
		if (isset($this->default_widgets[$eventName])) {
			unset($this->default_widgets[$eventName]);
		}
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//generate this page widgets list
	public function get_widgets()
	{
		if (!empty($this->this_page_widgets)) {
			return true;
		}
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		if (!$thisJRUser->userIsManager) {
			return false;
		}
		
		if (isset($thisJRUser->params['widgets']) && !empty($thisJRUser->params['widgets'])) {
			foreach ($thisJRUser->params['widgets'] as $widget => $w) {
				if (isset($this->widgets[$widget])) { //check if widget is still registered
					$this->this_page_widgets[$widget] = array(
															'column' => $w['column'],
															'position' => $w['position']
															);
				}
			}
		} else {
			$i = 1;
			
			foreach ($this->default_widgets as $widget => $w) {
				if (isset($this->widgets[$widget])) {
					$this->this_page_widgets[$widget] = array(
													'column' => $i, 
													'position' => 0
													);
				
				$i++;
				}
			}
			
			$thisJRUser->params['widgets'] = $this->this_page_widgets;
		}
		
		array_multisort($this->this_page_widgets);

		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//generate the widgets dropdown TODO: make it a dropdown with checkboxes
	public function get_widgets_dropdown()
	{
		if (empty($this->widgets)) {
			return false;
		}
		
		//get this page widgets
		$this->get_widgets();
		
		//build dropdown
		$checked_options_js = array();

		$widgets_dropdown = '
		<div class="button-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span> '.jr_gettext('_JOMRES_SELECT_WIDGETS', '_JOMRES_SELECT_WIDGETS', false).' <span class="caret"></span></button>
			<ul id="jr_widgets_dropdown" class="dropdown-menu">
			';
		
		foreach ($this->widgets as $widget => $w) {
			$checked = '';
			
			if (isset($this->this_page_widgets[$widget])) {
				$checked = 'checked';
				$checked_options_js[] = $widget;
			}
			
			$widgets_dropdown .= '
				<li><a href="#" data-value="'.$widget.'" tabIndex="-1"><input type="checkbox" '.$checked.'/> '.$w['title'].'</a></li>
				';
		}
		
		$widgets_dropdown .='
			</ul>
		</div>
		<script type="text/javascript">
			var jr_widgets_selected = [' . jomres_implode($checked_options_js, false) . ']
		</script>
		';
		
		return $widgets_dropdown;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//toggle widget
	public function toggle_widget($widget = '', $enabled = 0, $column = 1, $order = array() )
	{
		if ($widget == '') {
			return false;
		}
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		if (!$thisJRUser->userIsManager) {
			return false;
		}
		
		//save widget params to manager params
		if ($enabled == 0) {
			if (isset($thisJRUser->params['widgets'][$widget])) {
				unset($thisJRUser->params['widgets'][$widget]);
			}
		} else {
			$position = 0;
			foreach ($thisJRUser->params['widgets'] as $key=>$current_widget ) {
				if ($current_widget['column'] == $column) {
					$new_pos = (int)array_search("jr_widget_".$key, $order);
					$thisJRUser->params['widgets'][$key]['position'] = $new_pos;
					$thisJRUser->params['widgets'][$key]['column'] = $column;
					if ($widget == $key ) {
						$position = $new_pos;
					}
				}
			}
			
			$thisJRUser->params['widgets'][$widget] = array(
				'column' => $column,
				'position' => $position
			);
			
		}

		//save user profile params
		$thisJRUser->update_params();
		
		return true;
	}
}
