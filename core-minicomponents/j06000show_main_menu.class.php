<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_main_menu
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                'task' => 'show_main_menu',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU',
                'arguments' => array()
                );

            return;
        }
        
       set_showtime('menu_location_div_id' , 'main_menu_location');
       
       echo '<div id="main_menu_location"></div>';
       echo $MiniComponents->triggerEvent('99995');
        
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
