<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
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

require_once dirname(__FILE__).'/integration.php';

try {
    //minicomponents object
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
	
	//trigger 00001 event
	$MiniComponents->triggerEvent('00001');

    //site config object
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();
	
	//request log
	if ($jrConfig['development_production'] == 'development') {
		request_log();
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

    //input filtering
    $MiniComponents->triggerEvent('00003');

    //cron jobs
    $cron = jomres_singleton_abstract::getInstance('jomres_cron');
    if ($cron->method == 'Minicomponent' && !AJAXCALL) {
        $cron->triggerJobs();
    }

    //session
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $tmpBookingHandler->initBookingSession();

    $jomressession = $tmpBookingHandler->getJomressession();
    set_showtime('jomressession', $jomressession);

    //set task showtime
    $task = jomresGetParam($_REQUEST, 'task', 'cpanel');
    $task = str_replace('&#60;x&#62;', '', $task);
    set_showtime('task', $task);

    //currency conversion object
    $jomres_currency_exchange_rates = jomres_singleton_abstract::getInstance('jomres_currency_exchange_rates');
	
	//set currency code to the appropriate one for the detected location
	$jomres_geolocation = jomres_singleton_abstract::getInstance('jomres_geolocation');
	$jomres_geolocation->auto_set_user_currency_code();

    require_once JOMRES_FUNCTIONS_ABSPATH.'siteconfig.functions.php';

	if (!AJAXCALL) {
		//add javascript to head
		$MiniComponents->triggerEvent('00004');
		
		//core frontend menu items
		$MiniComponents->specificEvent('09995', 'menu', array()); //Rod really needs them
		
		//core admin menu items
		$MiniComponents->specificEvent('19995', 'menu', array());
	}

    //00005 trigger point
    $MiniComponents->triggerEvent('00005');

    if (!AJAXCALL) {
        $pageoutput = array();
        $output = array();
		
		//generate the cpanel menu
		$MiniComponents->specificEvent('19997', 'menu', array());
		$output[ 'CONTROL_PANEL_MENU' ] = $MiniComponents->miniComponentData[ '19997' ][ 'menu' ];

        //frequently asked questions
        $output['_JOMRES_FAQ'] = jr_gettext('_JOMRES_FAQ', '_JOMRES_FAQ', false);

		//video tutorials
		$jomres_video_tutorials = jomres_singleton_abstract::getInstance('jomres_video_tutorials');
		$jomres_video_tutorials->property_uid = 0;
		$output[ 'VIDEO_TUTORIALS' ] = $jomres_video_tutorials->build_modal();
        
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

		//check jomres support key
        $output['LICENSE_WARNING'] = $MiniComponents->specificEvent('16000', 'show_license_message', array('output_now' => false, 'as_modal' => false));

		//bootstrap
		$output[ 'USING_BOOTSTRAP' ] = 'true';

        if ($jrConfig['use_bootstrap_in_frontend'] == '0') {
            $output['BOOTSTRAP_WARNING'] = $MiniComponents->specificEvent('16000', 'show_bootstrap_warning', array('output_now' => false));
        }

        //output top area
        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		if (this_cms_is_joomla()) {
			$tmpl->readTemplatesFromInput('administrator_content_area_top_vertical.html');
		} else {
			$tmpl->readTemplatesFromInput('administrator_content_area_top.html');
		}
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    //admins_first_run();

    //task
    if ($MiniComponents->eventSpecificlyExistsCheck('16000', get_showtime('task'))) {
		$MiniComponents->specificEvent('16000', get_showtime('task')); // task exists, execute it
	} else {
		$MiniComponents->triggerEvent('10001'); //task doesn`t exist, go to cpanel frontpage
	}

    //output bottom area
    if (!AJAXCALL) {
        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		if (this_cms_is_joomla()) {
			$tmpl->readTemplatesFromInput('administrator_content_area_bottom_vertical.html');
		} else {
			$tmpl->readTemplatesFromInput('administrator_content_area_bottom.html');
		}
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }
	
	//trigger 99998 event - jomres feedback messages
	if (!AJAXCALL) {
		$MiniComponents->triggerEvent('99998');
	}

    $componentArgs = array();
    $MiniComponents->triggerEvent('99999', $componentArgs);
	
	//close/save jomres session
    $tmpBookingHandler->close_jomres_session();

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
