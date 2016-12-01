<?php
/**
* Core file.
*
* @author Vince Wooll <sales@jomres.net>
*
 * @version Jomres 9.8.20
 *
* @copyright	2005-2013 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
**/
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

if (!defined('_JOMRES_INITCHECK')) {
    define('_JOMRES_INITCHECK', 1);
}

if (isset($_REQUEST ['layout'])) {
    $_REQUEST ['task'] = 'search';
    $_REQUEST ['calledByModule'] = 'mod_jomsearch_m0';

    switch ($_REQUEST ['layout']) {
        case 'countries':
            $_REQUEST ['country'] = $_REQUEST ['selected_country'];
            break;
        case 'regions':
            $_REQUEST ['region'] = $_REQUEST ['selected_region'];
            break;
        case 'towns':
            $_REQUEST ['town'] = $_REQUEST ['selected_town'];
            break;
        case 'propertytypes':
            $_REQUEST ['ptype'] = $_REQUEST ['selected_ptype'];
            break;
        default:
            break;
        }
}

if (!defined('JOMRES_ROOT_DIRECTORY')) {
    if (file_exists(dirname(__FILE__).'/../../jomres_root.php')) {
        require_once dirname(__FILE__).'/../../jomres_root.php';
    } else {
        define('JOMRES_ROOT_DIRECTORY', 'jomres');
    }
}

require_once dirname(__FILE__).'/../../'.JOMRES_ROOT_DIRECTORY.'/jomres.php';
