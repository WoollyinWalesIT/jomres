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

class j06000feature_not_available
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $attempted_task = jomresGetParam($_REQUEST, 'attempted_task', '');
        $output = array();
        $pageoutput = array();

        $output[ 'SORRY' ] = 'Sorry, that feature is not available, are you missing a plugin?<br/>';
        $output[ 'MISSINGTASK' ] = 'You tried to run the <strong>'.$attempted_task.'</strong> task, however to do that you need a special plugin. If you are logged into the administrator area, please visit the following page to see the missing plugin : ';
        $plugin_name = $this->get_task_pluginnames($attempted_task);
        $readable_name = ucwords(str_replace('_', ' ', $plugin_name));
        $output[ 'PLUGIN_MANAGER_LINK' ] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins#'.$plugin_name.'" target="_blank">'.$readable_name.'</a>';

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        $tmpl->readTemplatesFromInput('plugin_not_installed.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    public function get_task_pluginnames($attempted_task)
    {
        switch ($attempted_task) {
            case 'listBlackBookings':
                $plugin_name = 'black_bookings';
                break;
            case 'bookGuestIn':
                $plugin_name = 'book_guest_in_out';
                break;
            case 'bookGuestOut':
                $plugin_name = 'book_guest_in_out';
                break;
            case 'listCustomerTypes':
                $plugin_name = 'guest_types';
                break;
            case 'listCoupons':
                $plugin_name = 'coupons';
                break;
            case 'listExtras':
                $plugin_name = 'optional_extras';
                break;
            case 'deleteProperty':
                $plugin_name = 'property_creation_plugins';
                break;
            default:
                $plugin_name = 'hellifiknow';
        }

        return $plugin_name;
    }

    public function getRetVals()
    {
        return null;
    }
}
