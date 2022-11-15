<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

//#################################################################
defined('_JOMRES_INITCHECK') or die('');
defined('_JOMRES_INITCHECK_ADMIN') or die('');
//#################################################################

/**
 * Administrator area main script.
 * 
 * Builds the administrator area page.
 * 
 **/
 
ob_start('removeBOMadmin');

@ini_set('max_execution_time', '480');

require_once dirname(__FILE__).'/integration.php';

try {
	//minicomponents object
	$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

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

    //trigger 07090 event (see README/md)
    $MiniComponents->triggerEvent('07090');

	//language object - load default language file for context
	$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
    $jomres_language->init();
	$jomres_language->get_language();

	//custom text object
	$customTextObj = jomres_singleton_abstract::getInstance('custom_text');
	
	//trigger 00001 event
	$MiniComponents->triggerEvent('00001');

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

		//language dropdown
		$output[ 'LANGDROPDOWN' ] = $jomres_language->get_languageselection_dropdown();



		//bootstrap
		$output[ 'USING_BOOTSTRAP' ] = 'true';


		// Review message
		$output['REVIEW_REQUEST'] = $MiniComponents->specificEvent('16000', 'show_reviews_message', array('output_now' => false));

		// Feedback message
		$output['FEEDBACK_REQUEST'] = $MiniComponents->specificEvent('16000', 'show_feedback_message', array('output_now' => false));

		//output top area
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);

		if (_JOMRES_DETECTED_CMS == 'joomla3') {
			$tmpl->readTemplatesFromInput('administrator_content_area_top_vertical.html');
		} else {
			$tmpl->readTemplatesFromInput('administrator_content_area_top.html');
		}
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}

	if (!isset( $jrConfig['initial_setup_done'])) {
		$jrConfig['initial_setup_done'] = 0;
	}

	//task
	if ( $jrConfig['initial_setup_done'] == '0' && get_showtime('task') != 'save_initial_setup') {
		$MiniComponents->specificEvent('16000','initial_setup'); // let's rock and roll
	} else {
		if ($MiniComponents->eventSpecificlyExistsCheck('16000', get_showtime('task'))) {
			$MiniComponents->specificEvent('16000', get_showtime('task')); // task exists, execute it
		} else {
			$MiniComponents->triggerEvent('10001'); //task doesn`t exist, go to cpanel frontpage
		}
	}

	//output bottom area
	if (!AJAXCALL) {
//		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		if (_JOMRES_DETECTED_CMS == 'joomla3') {
			$tmpl->readTemplatesFromInput('administrator_content_area_bottom_vertical.html');
		} else {
			$tmpl->readTemplatesFromInput('administrator_content_area_bottom.html');
		}
		$tmpl->addRows('pageoutput', array() );
		$tmpl->displayParsedTemplate();
	}

	//trigger 99994 event for webhooks
	$MiniComponents->triggerEvent('99994');

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
