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

class j09997menu
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		// Stops the main menu from being generated twice. TODO: is this still needed?
        if (get_showtime('mainmenu_alreadyrun')) {
            return;
        }
        set_showtime('mainmenu_alreadyrun', true);

		$this->ret_vals = '';
		$menu_sections = array();
		
		$management_view = jomresGetParam($_REQUEST, 'tmpl', false);
		
		$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');
		$jomres_menu->generate_menu();

		//section params are in $jomres_menu->sections[section_id]
		//menu items params are in $jomres_menu->items[task]
		//now let`s generate the menu output
		foreach ($jomres_menu->menu as $section_id => $tasks) {
			$pageoutput = array();
			$rows = array();
            $output = array();

			foreach ($tasks as $task) {
				$r = array();
				
				//menu item name
				$r['MENU_NAME'] = jr_ucwords($jomres_menu->items[$task]['title']);

				//menu item url
				if ($jomres_menu->items[$task]['is_url']) {
					$r['LINK'] = $task;
				} elseif ($task != 'blank') {
					$r['LINK'] = jomresUrl(JOMRES_SITEPAGE_URL.'&task='.$task);
				} else {
					$r['LINK'] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=dashboard');
				}
				
				//menu item icon
				$r['ICON_CLASS'] = $jomres_menu->items[$task]['icon'];

				//menu item target
				$r[ 'TARGET' ] = '';
                if ($jomres_menu->items[$task]['external']) {
                    $r[ 'TARGET' ] = ' target="_blank" ';
                }
				
				//menu item disabled class
				$r[ 'DISABLED_CLASS' ] = '';
                if ($jomres_menu->items[$task]['disabled']) {
                    $r[ 'LINK' ] = '#';
                    $r[ 'DISABLED_CLASS' ] = 'disabled';
                }
				
				//menu item badges TODO: find a better way or remove this completely
				$r[ 'BADGES' ] = '';
				
				/* if (!$jomres_menu->items[$task]['is_url']) {
					$items_requiring_attention = get_number_of_items_requiring_attention_for_menu_option($task);
					
					if (!empty($items_requiring_attention)) {
						foreach ($items_requiring_attention as $colour => $number) {
							if ($number > 0) {
								$tmpl = new patTemplate();
								$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
								$tmpl->readTemplatesFromInput('frontend_menu_badge_'.$colour.'.html');
								$tmpl->addRows('items_requiring_attention', array(array('NUMBER' => $number)));
								$r[ 'BADGES' ] = $tmpl->getParsedTemplate();
							}
						}
					}
				} */
				
				//active menu item
				$r[ 'ACTIVE' ] = '';
				
				if (get_showtime('task') == $task) {
                    $r[ 'ACTIVE' ] = 'active';
                } elseif (get_showtime('task') == '' && $task == 'blank' && !$jomres_menu->items[$task]['external']) {
                    $r[ 'ACTIVE' ] = 'active';
                }
				
				$rows[] = $r;
			}
            
			$output[ 'CATEGORY' ] = jr_ucwords($jomres_menu->sections[$section_id]['title']);
            $output[ 'ID_CATEGORY' ] = 'cpanel-category-'.$section_id;

            $pageoutput[ ] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            if (!$management_view) {
                $tmpl->readTemplatesFromInput('mainmenu_options_alternate.html');
            } else {
                $tmpl->readTemplatesFromInput('management_mainmenu_options.html');
            }
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $menu_sections[][ 'SECTION' ] = $tmpl->getParsedTemplate();
		}
		
		$output = array();
        $pageoutput = array();
		
		//dropdowns
		$output[ 'PROPERTYNAME' ] = get_showtime('menuitem_propertyname');
        $output[ 'MENUITEM_TIMEZONE_DROPDOWN' ] = get_showtime('menuitem_timezone_dropdown');
        $output[ 'MENUITEM_TIMEZONEBLURB' ] = get_showtime('menuitem_timezoneblurb');
        $output[ 'MENUITEM_MANAGEMENT_VIEW_DROPDOWN' ] = get_showtime('menuitem_management_view_dropdown');
        $output[ 'MENUITEM_EDITING_MODE_DROPDOWN' ] = get_showtime('menuitem_editing_mode_dropdown');
        $output[ 'MENUITEM_LANGDROPDOWN' ] = get_showtime('menuitem_langdropdown');
		
		//labels
		$output[ '_JOMRES_CONTROLPANEL' ] = jr_gettext('_JOMRES_CONTROLPANEL', '_JOMRES_CONTROLPANEL', false);
        $output[ '_JOMRES_MENU_SHOW' ] = jr_gettext('_JOMRES_MENU_SHOW', '_JOMRES_MENU_SHOW', false);
        $output[ '_JOMRES_MENU_HIDE' ] = jr_gettext('_JOMRES_MENU_HIDE', '_JOMRES_MENU_HIDE', false);
		$output['_JOMRES_BOOKING_NUMBER'] = jr_gettext('_JOMRES_BOOKING_NUMBER', '_JOMRES_BOOKING_NUMBER', false);
		
		//booking number search
        $output['TAG_SEARCH_URL'] = jomresUrl(JOMRES_SITEPAGE_URL_NOSEF.'&task=list_bookings');
        
		//user feedback
		$output['USER_FEEDBACK'] = get_showtime('user_feedback');
		
		//navbar location
		if (!isset($jrConfig[ 'navbar_location' ])) {
            $jrConfig[ 'navbar_location' ] = 'component_area';
        }
		
		$output['NAVBAR_LOCATION'] = '';
        if ($jrConfig[ 'navbar_location' ] != 'component_area') {
            $output['NAVBAR_LOCATION'] = $jrConfig[ 'navbar_location' ];
        }

		//navbar inverse
        if (!isset($jrConfig[ 'navbar_inverse' ])) {
            $jrConfig[ 'navbar_inverse' ] = 0;
        }

        $output['NAVBAR_INVERSE'] = 'navbar-default';
        if ($jrConfig[ 'navbar_inverse' ] != 0) {
            $output['NAVBAR_INVERSE'] = 'navbar-inverse';
        }

		//jomres menu div id
        $output['MENU_LOCATION'] = 'jomres_alternate_menu_position';
        if (get_showtime('menu_location_div_id')) {
             $output['MENU_LOCATION'] = trim(get_showtime('menu_location_div_id'));
        }
		
		$pageoutput[] = $output;

		$tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        if (!$management_view) {
            $tmpl->readTemplatesFromInput('mainmenu_wrapper_alternate.html');
        } else {
            $tmpl->readTemplatesFromInput('management_menu_wrapper.html');
        }
		$tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('menu_sections', $menu_sections);
        $this->ret_vals = $tmpl->getParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
