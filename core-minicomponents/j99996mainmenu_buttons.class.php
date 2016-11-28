<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j99996mainmenu_buttons
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        
        $this->ret_vals = '';
        
        $jomres_mainmenu_thirdparty_options = get_showtime('jomres_mainmenu_thirdparty_options');
        $jomres_mainmenu_reception_options = get_showtime('jomres_mainmenu_reception_options');
        $jomres_mainmenu_manager_options = get_showtime('jomres_mainmenu_manager_options');
        $jomres_mainmenu_user_options = get_showtime('jomres_mainmenu_user_options');

        $control_panel_buttons_categorised = array();
        if (count($jomres_mainmenu_thirdparty_options) > 0) {
            foreach ($jomres_mainmenu_thirdparty_options as $button) {
                if (isset($button[ 'OPTIONS' ]) && $button[ 'OPTIONS' ] != '') {
                    $category = jr_strtolower($button[ 'OPTIONS' ][ 'category' ]);
                    $control_panel_buttons_categorised[ $category ][ ] = $button[ 'OPTIONS' ];
                }
            }
        }

        if (count($jomres_mainmenu_reception_options) > 0) {
            foreach ($jomres_mainmenu_reception_options as $button) {
                if (isset($button[ 'OPTIONS' ]) && $button[ 'OPTIONS' ] != '') {
                    $category = jr_strtolower($button[ 'OPTIONS' ][ 'category' ]);
                    $control_panel_buttons_categorised[ $category ][ ] = $button[ 'OPTIONS' ];
                }
            }
        }

        if (count($jomres_mainmenu_manager_options) > 0) {
            foreach ($jomres_mainmenu_manager_options as $button) {
                if (isset($button[ 'OPTIONS' ]) && $button[ 'OPTIONS' ] != '') {
                    $category = jr_strtolower($button[ 'OPTIONS' ][ 'category' ]);
                    $control_panel_buttons_categorised[ $category ][ ] = $button[ 'OPTIONS' ];
                }
            }
        }

        if (count($jomres_mainmenu_user_options) > 0) {
            foreach ($jomres_mainmenu_user_options as $button) {
                if (isset($button[ 'OPTIONS' ]) && $button[ 'OPTIONS' ] != '') {
                    $category = jr_strtolower($button[ 'OPTIONS' ][ 'category' ]);
                    $control_panel_buttons_categorised[ $category ][ ] = $button[ 'OPTIONS' ];
                }
            }
        }

        ksort($control_panel_buttons_categorised);

        // We need to find the dashboard category in this array, extract it then put it at the beginning.
        $dashboard_category = jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', false, false);
        if (isset($control_panel_buttons_categorised[ $dashboard_category ])) {
            $dashboard_category_contents = $control_panel_buttons_categorised[ $dashboard_category ];
            unset($control_panel_buttons_categorised[ $dashboard_category ]);
            $new_arr = array($dashboard_category => $dashboard_category_contents);
            foreach ($control_panel_buttons_categorised as $key => $val) {
                $new_arr[ $key ] = $val;
            }
            $control_panel_buttons_categorised = $new_arr;
        }
        $management_view = jomresGetParam($_REQUEST, 'tmpl', false);

        if (count($control_panel_buttons_categorised) > 0) {
            $this->ret_vals = $MiniComponents->triggerEvent('99997', array('jomres_mainmenu_buttons_categorised' => $control_panel_buttons_categorised, 'management_view' => $management_view));
            
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
