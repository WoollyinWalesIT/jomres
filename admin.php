<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

//#################################################################
defined('_JOMRES_INITCHECK') or die('');
defined('_JOMRES_INITCHECK_ADMIN') or die('');
//#################################################################

ob_start('removeBOMadmin');

@ini_set('max_execution_time', '480');

//TODO: remove these too
global $thisJRUser, $htmlFuncs;

require_once dirname(__FILE__).'/integration.php';

try {
    //minicomponents object
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

    //site config object
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    //performance monitor
    $performance_monitor = jomres_singleton_abstract::getInstance('jomres_performance_monitor');
    if ($jrConfig[ 'errorChecking' ] == '1') {
        $performance_monitor->switch_on();
    } else {
        $performance_monitor->switch_off();
    }

    //get all properties in system.
    $jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
    $jomres_properties->get_all_properties();

    //language object - load default language file for context
    $jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
    $jomres_language->get_language();

    //custom text object
    $customTextObj = jomres_singleton_abstract::getInstance('custom_text');

    //trigger 00002 event
    $MiniComponents->triggerEvent('00002');

    //user object
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

    logging::log_message('Jomres admin started', 'Core', 'INFO');

    //input filtering
    $MiniComponents->triggerEvent('00003');

    //cron jobs
    $cron = jomres_singleton_abstract::getInstance('jomres_cron');
    if ($cron->method == 'Minicomponent' && !AJAXCALL) {
        $cron->triggerJobs();
        $cron->displayDebug();
    }

    //session
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $tmpBookingHandler->initBookingSession();

    $jomressession = $tmpBookingHandler->getJomressession();
    set_showtime('jomressession', $jomressession);

    //set task showtime
    $task = jomresGetParam($_REQUEST, 'task', '');
    $task = str_replace('&#60;x&#62;', '', $task);
    set_showtime('task', $task);

    //currency conversion object
    $jomres_currency_exchange_rates = jomres_singleton_abstract::getInstance('jomres_currency_exchange_rates');

    //clean up temp js files if we`re saving the site config
    if ($task == 'save_site_settings') {
        // We're going to silently delete any .js files in the temp dir. This is a basic cleanup, if a server's moved from A to B or an upgrade changes something then we'll delete .js files that might cause problems if they're wrong. Any .js files that don't exist are automatically recreated so this will ensure that the js remains fresh.
        $javascript_files_in_temp_dir = scandir_getfiles(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS, $extension = 'js');
        foreach ($javascript_files_in_temp_dir as $file) {
            unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$file);
        }
    }

    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'admin'.JRDS.'functions'.JRDS.'siteconfig.functions.php';

    //add javascript to head
    if (!AJAXCALL) {
        init_javascript();
    }

    //00005 trigger point
    $MiniComponents->triggerEvent('00005');

    if (!AJAXCALL) {
        // Dates back to Jomres v4. Could be removed, but we'll leave it in for those users upgrading from v4, as v4 spanned two years
        if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'plugins')) {
            emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'plugins');
            rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'plugins');
            if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'plugins')) {
                echo '<font color="red" face="arial" size="1">Warning: directory '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'plugins still exists. Please delete it.</font><br/>';
            }
            emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'cache'.JRDS);
        }

        $pageoutput = array();
        $output = array();

        $htmlFuncs = jomres_singleton_abstract::getInstance('html_functions');

        //cpanel main menu
        $MiniComponents->triggerEvent('10002'); // 10002 scripts build the menu options
        $MiniComponents->getAllEventPointsData('10002');
        $MiniComponents->triggerEvent('10003'); // 10003 builds the menu arrays
        $output[ 'CONTROL_PANEL_MENU' ] = $MiniComponents->miniComponentData[ '10004' ][ 'generate_control_panel' ]; // 10004 Builds the actual menu items

        //frequently asked questions
        $output['_JOMRES_FAQ'] = jr_gettext('_JOMRES_FAQ', '_JOMRES_FAQ', false);

        //manage properties button
        $output['HMANAGE_PROPERTIES'] = jr_gettext('_JOMRES_MANAGE_PROPERTIES', '_JOMRES_MANAGE_PROPERTIES', false);

        //obsolete files warnings
        $ouput[ 'OBSOLETE_FILES_WARNINGS' ] = '';
        jr_import('jomres_obsolete_file_handling');
        $obsolete_files = new jomres_obsolete_file_handling();
        $obsolete_files->set_default_obs_files_array();
        $obsolete_files->add_obs_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres_webinstall.php');

        if ($jrConfig[ 'development_production' ] != 'development') {
            $obsolete_files->add_obs_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'install_jomres.php');
        }

        if ($obsolete_files->ready_to_go()) {
            $output[ 'OBSOLETE_FILES_WARNINGS' ] = $obsolete_files->remove_obs_files();
        }

        //language dropdown
        $output[ 'LANGDROPDOWN' ] = $jomres_language->get_languageselection_dropdown();

        $output[ 'BACKTOTOP' ] = jr_gettext('BACKTOTOP', 'BACKTOTOP', false);

        if (using_bootstrap()) {
            $output[ 'USING_BOOTSTRAP' ] = 'true';
        } else {
            $output[ 'USING_BOOTSTRAP' ] = 'false';
        }

        jr_import('jomres_check_support_key');
        //if ($_REQUEST['task'] != "showplugins")
        //	{
            $key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
        $output['LICENSE_WARNING'] = $MiniComponents->specificEvent('16000', 'show_license_message', array('output_now' => false, 'as_modal' => false));
        //	}

        if ($jrConfig['use_bootstrap_in_frontend'] == '0') {
            $output['BOOTSTRAP_WARNING'] = $MiniComponents->specificEvent('16000', 'show_bootstrap_warning', array('output_now' => false));
        }

        //output top area
        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('administrator_content_area_top.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    //set statistics cookies
    if (isset($_REQUEST[ 'statoption' ])) {
        $statoption = jomresGetParam($_REQUEST, 'statoption', '');
        setcookie('statoption', $statoption, time() + 60 * 60);
    }

    if (isset($_REQUEST[ 'periodoption' ])) {
        $periodoption = jomresGetParam($_REQUEST, 'periodoption', '');
        setcookie('periodoption', $periodoption, time() + 60 * 60);
    }

    // admins_first_run();

    //task
    switch (get_showtime('task')) {
        case 'cpanel':
        default:
            if ($MiniComponents->eventSpecificlyExistsCheck('16000', get_showtime('task'))) {
                $MiniComponents->specificEvent('16000', get_showtime('task')); // task exists, execute it
            } else {
                $MiniComponents->triggerEvent('10001'); //task doesn`t exist, go to cpanel frontpage
            }
            break;
        }

    //output bottom area
    if (!AJAXCALL) {
        $performance_monitor->set_point('end run');
        $performance_monitor->output_report();

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('administrator_content_area_bottom.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    $componentArgs = array();
    $MiniComponents->triggerEvent('99999', $componentArgs);

    //done
    endrun();
} catch (Exception $e) {
    output_fatal_error($e);
}

if (defined('JOMRES_RETURNDATA')) {
    $contents = ob_get_contents();
    $contents = $head_contents.$contents;
    define('JOMRES_RETURNDATA_CONTENT', $contents);
    unset($contents);
    ob_end_clean();
} else {
    ob_end_flush();
}

// Jomres 4.7.8 strips BOM from all areas of the output, not just the beginning.
function removeBOMadmin($str = '')
{
    $bom = pack('CCC', 0xef, 0xbb, 0xbf);
    $str = str_replace($bom, '', $str);

    // if(substr($str, 0,3) == pack("CCC",0xef,0xbb,0xbf))
    // {
    // $str=substr($str, 3);
    // }
    return $str;
}
