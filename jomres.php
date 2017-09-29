<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.13
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

@ignore_user_abort(true);
$currTimeLimit = ini_get('max_execution_time');
set_time_limit($currTimeLimit); // This setting is absolutely required for systems that will use channel management functionality as deferred notifications to Beds24 can take quite a while. Ideally we'd set this to 0 however some installations, particularly Wordpress installations that may be on "budget" and or shared hosting packages might throw at minimum a warning about setting the limit to 0. We'll try instead to set it to the max execution time and hope that that's enough. It will be in 99% of cases.


if (isset($_REQUEST['task']) && isset($_REQUEST['field'])) { // Booking engine heartbeat is used to keep the session alive, but doesn't do anything else. We'll kill it dead right off the bat.
    if ($_REQUEST['task'] == 'handlereq' && $_REQUEST['field'] == 'heartbeat') {
        die();
    }
}

ob_start('removeBOM');

// Added X-Clacks Overhead. If you're a fan of Sir Terry, leave it in. If you're not, take it out
header('X-Clacks-Overhead: GNU Terry Pratchett');

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

    //language object - load default language file for context
    $jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
    $jomres_language->get_language();

    //custom text object - load all custom text
    $customTextObj = jomres_singleton_abstract::getInstance('custom_text');
	
	//trigger 00001 event
	$MiniComponents->triggerEvent('00001');

    //trigger 00002 event
    $MiniComponents->triggerEvent('00002');

    //user object
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

	//silently remove all access rights for this user if he is a manager/receptionist with no properties
    if (empty($thisJRUser->authorisedProperties) && $thisJRUser->userIsManager) {
		$jomres_users = jomres_singleton_abstract::getInstance('jomres_users');
		$jomres_users->delete_user( $thisJRUser->id );
		$thisJRUser->reset_manager_to_non_manager();
    }

    //jomres timezones - mostly unused with an exception
    jr_import('jomres_timezones');
    $tz = new jomres_timezones();

    //we don`t want robots to index fullscreen mode or ajax requests
    if (isset($_REQUEST[ 'tmpl' ]) && $_REQUEST[ 'tmpl' ] == get_showtime('tmplcomponent')) {
        jomres_cmsspecific_setmetadata('robots', 'noindex,nofollow');
    }

    //trigger 00003 event
    $MiniComponents->triggerEvent('00003');

    //jomres cron object
    $cron = jomres_singleton_abstract::getInstance('jomres_cron');
    if ($cron->method == 'Minicomponent' && !AJAXCALL) {
        $cron->triggerJobs();
    }

    //temp booking handler object, init jomres session
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $tmpBookingHandler->initBookingSession();

    $jomressession = $tmpBookingHandler->getJomressession();
    set_showtime('jomressession', $jomressession);

    //set some showtimes we`ll need later
    $popup = (int)jomresGetParam($_REQUEST, 'popup', 0);
    $no_html = (int)jomresGetParam($_REQUEST, 'no_html', 0);
    $task = str_replace('&#60;x&#62;', '', jomresGetParam($_REQUEST, 'task', ''));

    if ($task == "savePlugin") { // 9.9 task names were changed, and savePlugin was renumbered and renamed to save_plugin. As many 3rd party gateways will use savePlugin (and it may never be updated ) we'll change the task name here so that they continue to work.
        $task = "save_plugin";
    }
    if ($task == "editGateway") { // 9.9 task names were changed, and editGateway was renumbered and renamed to editgateway. As many 3rd party gateways will use editGateway (and it may never be updated ) we'll change the task name here so that they continue to work.
        $task = "editgateway";
    }
	
    set_showtime('task', $task);
    set_showtime('no_html', $no_html);
    set_showtime('popup', $popup);

    if ($no_html == 1) {
        define('JOMRES_NOHTML', 1);
    } else {
        define('JOMRES_NOHTML', 0);
    }

    //currency conversion object
    $jomres_currency_exchange_rates = jomres_singleton_abstract::getInstance('jomres_currency_exchange_rates');
	
	//set currency code to the appropriate one for the detected location
	$jomres_geolocation = jomres_singleton_abstract::getInstance('jomres_geolocation');
	$jomres_geolocation->auto_set_user_currency_code();

    //if this cms user has booked in the past and doesn`t have profile details saved yet, we`ll update his profile details aautomatically based on his guest details from one of the previous bookings he`s made
    if (get_showtime('task') != 'error') {
        $defaultProperty = (int) $thisJRUser->currentproperty;

        if (!$thisJRUser->userIsManager && $thisJRUser->userIsRegistered) {
            if (!isset($_REQUEST['jsid'])) { // Don't want to reset mos userid if jsid is set. jsid is sent back by gateways and if we set mos id to the gateway's session, we'll never be able to  associate the booking with the guest
                $tmpBookingHandler->updateGuestField('mos_userid', $thisJRUser->id);
            }

            if (get_showtime('task') != 'handlereq' && get_showtime('task') != 'completebk' && get_showtime('task') != 'processpayment' && get_showtime('task') != 'confirmbooking') {
                if ($thisJRUser->profile_id == 0) {
                    $query = "SELECT guests_uid,firstname,surname,house,street,town,postcode,county,country,tel_landline,tel_mobile,email,discount FROM #__jomres_guests WHERE mos_userid = '".(int) $thisJRUser->id."' LIMIT 1";
                    $guestData = doSelectSql($query, 2);

                    if ($guestData) {
                        $query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`,`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`email`) VALUES ('".(int) $thisJRUser->id."','$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$email')";
                        doInsertSql($query, '');

                        $tmpBookingHandler->updateGuestField('guests_uid', $guestData[ 'id' ]);
                        $tmpBookingHandler->updateGuestField('firstname', $guestData[ 'firstname' ]);
                        $tmpBookingHandler->updateGuestField('surname', $guestData[ 'surname' ]);
                        $tmpBookingHandler->updateGuestField('house', $guestData[ 'house' ]);
                        $tmpBookingHandler->updateGuestField('street', $guestData[ 'street' ]);
                        $tmpBookingHandler->updateGuestField('town', $guestData[ 'town' ]);
                        $tmpBookingHandler->updateGuestField('region', $guestData[ 'county' ]);
                        $tmpBookingHandler->updateGuestField('country', $guestData[ 'country' ]);
                        $tmpBookingHandler->updateGuestField('postcode', $guestData[ 'postcode' ]);
                        $tmpBookingHandler->updateGuestField('tel_landline', $guestData[ 'tel_landline' ]);
                        $tmpBookingHandler->updateGuestField('tel_mobile', $guestData[ 'tel_mobile' ]);
                        $tmpBookingHandler->updateGuestField('email', $guestData[ 'email' ]);
                    } else {
                        $user_details = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($thisJRUser->id);
                        $tmpBookingHandler->updateGuestField('email', $user_details[ $thisJRUser->id ][ 'email' ]);
                    }
                }
            }
        }
    } else {
        $thisJRUser = new stdClass();
        $thisJRUser->jomres_manager_id = 0;
        $thisJRUser->userid = 0;
        $thisJRUser->username = '';
        $thisJRUser->accesslevel = 0;
        $thisJRUser->currentproperty = 0;
        $thisJRUser->authorisedProperties = array();
        $thisJRUser->userIsSuspended = false;
        $thisJRUser->userIsRegistered = false;
        $thisJRUser->userIsManager = false;
        $thisJRUser->superPropertyMaager = false;
    }

    //handle suspended managers
    if ($thisJRUser->userIsSuspended) {
        jr_import('jomres_suspensions');
        $jomres_suspensions = new jomres_suspensions();
        $jomres_suspensions->set_manager_id($thisJRUser->userid);
        if ($jomres_suspensions->suspended_manager_denied_task(get_showtime('task'))) {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=cpanel'), '');
        }
    }

    //get the current property uid if set
    $property_uid = (int) detect_property_uid();

    $mrConfig = getPropertySpecificSettings($property_uid);

    if ($property_uid > 0) {
        set_showtime('property_uid', $property_uid);

        //basci property details object
        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($property_uid);

        if (get_showtime('task') == 'viewproperty') {
            set_showtime('last_viewed_property_uid', $property_uid); // showtime's property_uid variable can change, for example in the property list the property uid will change while the system is viewing different properties and finding language strings for each. We'll set a specific variable here that can be reliably be used to take the user back to the last viewed property. Typically for cancel buttons, we can use the patTemplate common definition COMMON_LAST_VIEWED_PROPERTY_UID to allow cancel buttons to take us back to the last viewed property without having to specifically code for it in the script calling the template.
            $tmpBookingHandler->user_settings[ 'last_viewed_property_uid' ] = $property_uid;
        }

        //since we have a property uid, we also have a property type, so let`s set a showtime
        set_showtime('property_type', $current_property_details->property_type);
        set_showtime('ptype_id', $current_property_details->ptype_id);

        //load property type specific language file if $property_type is set
        $jomres_language->get_language($current_property_details->property_type);

        //sanity checks
        if (!$thisJRUser->userIsManager && $current_property_details->published == 0 && get_showtime('task') != '') {
            if (!AJAXCALL && $no_html == 0) {
                jr_import('jomres_sanity_check');
                $warning = new jomres_sanity_check(false);
                echo $warning->construct_warning(jr_gettext('_JOMRES_PROPERTYNOTOUBLISHED', '_JOMRES_PROPERTYNOTOUBLISHED', false));
                $property_uid = 0;
                $task = '';
                set_showtime('task', '');
                set_showtime('property_type', '');
                set_showtime('property_uid', 0);
            }
        }

        //redirect to new property uid if different than manager`s current property
        if ($thisJRUser->userIsManager && $thisJRUser->currentproperty != $property_uid && in_array($property_uid, $thisJRUser->authorisedProperties)) {
            $thisJRUser->set_currentproperty($property_uid);
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL), '');
        }
    } else {
        if (isset($tmpBookingHandler->user_settings[ 'last_viewed_property_uid' ])) {
            set_showtime('last_viewed_property_uid', (int) $tmpBookingHandler->user_settings[ 'last_viewed_property_uid' ]);
        }
    }

    if (!AJAXCALL && $no_html == 0) {
		//add javascript to head
        $MiniComponents->triggerEvent('00004');
		
		//core menu items
		$MiniComponents->specificEvent('09995', 'menu', array()); //core menu items
    }

    //TODO find a better place
    set_showtime('include_room_booking_functionality', true);
	
	//register jomres frontend widgets
	if ($thisJRUser->userIsManager) {
		$MiniComponents->triggerEvent('09990');
	}

    //trigger 00005 event
    $MiniComponents->triggerEvent('00005');

    //trigger 00006 event
	if (!AJAXCALL && $no_html == 0) {
		$MiniComponents->triggerEvent('00006');

		//trigger 00060 event. Run out of trigger points. Illogically now, 60 triggers the top template, 61 the bottom template.
		$MiniComponents->triggerEvent('00060', array('tz' => $tz));

		//trigger 00012 event
		$componentArgs = array();
		$componentArgs[ 'property_uid' ] = $property_uid;
		$MiniComponents->triggerEvent('00012', $componentArgs); // Optional other stuff to do before switch is done.
	}

    //handle tasks
	if ($MiniComponents->eventSpecificlyExistsCheck('06000', get_showtime('task'))) {
		$MiniComponents->specificEvent('06000', get_showtime('task'));
	} elseif ($MiniComponents->eventSpecificlyExistsCheck('06001', get_showtime('task')) && $thisJRUser->accesslevel >= 50) { // Receptionist and manager tasks
		$MiniComponents->specificEvent('06001', get_showtime('task'));
	} elseif ($MiniComponents->eventSpecificlyExistsCheck('06002', get_showtime('task')) && $thisJRUser->accesslevel >= 70) { // Manager only tasks (higher than receptionist)
		$MiniComponents->specificEvent('06002', get_showtime('task'));
	} elseif ($MiniComponents->eventSpecificlyExistsCheck('06005', get_showtime('task')) && $thisJRUser->accesslevel >= 1) { // Registered only user tasks
		$MiniComponents->specificEvent('06005', get_showtime('task'));
	} else {
		no_task_set($property_uid);
	}

	if (!AJAXCALL && $no_html == 0) {
		$MiniComponents->triggerEvent('00061'); // Run out of trigger points. Illogically now, 60 triggers the top template, 61 the bottom template.
	}

    //reset language and property type
    $jomres_language_definitions = jomres_singleton_abstract::getInstance('jomres_language_definitions');
    $jomres_language_definitions->reset_lang_and_property_type();

    //trigger 99994 event
	$MiniComponents->triggerEvent('99994');

	//generate the cpanel menu
    if (!AJAXCALL && $no_html == 0 && !isset($_REQUEST[ 'popup' ])) {
        echo $MiniComponents->specificEvent('09997', 'menu', array());
    }
	
	//trigger 99998 event - jomres feedback messages
	if (!AJAXCALL && $no_html == 0) {
		$MiniComponents->triggerEvent('99998');
	}

    //trigger 99999 event: Optional end run scripts
    $componentArgs = array();
    $MiniComponents->triggerEvent('99999', $componentArgs);

    //close/save jomres session
    $tmpBookingHandler->close_jomres_session();

    if (!AJAXCALL && $no_html == 0 && $jrConfig[ 'errorChecking' ] == '1') {
        foreach ($MiniComponents->log as $log) {
            echo 'Log :'.$log.'<br>';
        }
    }

    // After updating jquery ui to 1.9.3 we started seeing a problem where the entire site would be reloaded into the jquery tabs.
    // http://stackoverflow.com/questions/13837304/jquery-ui-non-ajax-tab-loading-whole-website-into-itself
    // according to http://bugs.jqueryui.com/ticket/7822 this problem will not be "fixed" in jquery, so we'll need to remove the base tag from Joomla's output
    // This page http://www.jelte.nl/nieuws/24-joomla-remove-base-href suggests removing the base tag for SEO reasons
    // More reading https://groups.google.com/forum/?fromgroups=#!topic/joomla-devel/HOHzzne5HYo
    if (this_cms_is_joomla()) {
        $document = JFactory::getDocument();
        $document->setBase(null);
    }

    //done
    endrun();
    if (AJAXCALL) {
        doDBClose();
    }

    //mostly not used these days
    if (defined('JOMRES_RETURNDATA')) {
        $contents = ob_get_contents();
        $contents = $head_contents.$contents;
        define('JOMRES_RETURNDATA_CONTENT', $contents);
        unset($contents);
        ob_end_clean();
    } else {
        ob_end_flush();
    }
} catch (Exception $e) {
	$MiniComponents->triggerEvent('99994');
		
	//generate the cpanel menu
	if (!AJAXCALL && $no_html == 0 && !isset($_REQUEST[ 'popup' ])) {
        echo $MiniComponents->specificEvent('09997', 'menu', array());
    }

    $componentArgs = array();
    $MiniComponents->triggerEvent('99999', $componentArgs); // Optional end run scripts

    output_fatal_error($e);
}

// Script stops here

function no_task_set($property_uid = 0)
{
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();
	
	$calledByModule = jomresGetParam($_REQUEST, 'calledByModule', '');

    if (($calledByModule != '' || isset($_REQUEST[ 'plistpage' ])) && $thisJRUser->userIsManager) {
        $MiniComponents->specificEvent('06000', "search");
    } else {
        if ($thisJRUser->userIsManager) {
            $MiniComponents->specificEvent('06001', 'cpanel');
        } elseif (get_showtime('numberOfPropertiesInSystem') == 1 && $jrConfig[ 'is_single_property_installation' ] == '0') {
            set_showtime('task', 'viewproperty');
            $componentArgs = array();
            $componentArgs[ 'property_uid' ] = $property_uid;
            $MiniComponents->specificEvent('06000', 'viewproperty', $componentArgs);
        } elseif ($jrConfig[ 'is_single_property_installation' ] == '1') {
            $all_property_uids = get_showtime('all_properties_in_system');
            set_showtime('property_uid', $all_property_uids[ 0 ]);
            $MiniComponents->triggerEvent('05020');
        } else {
            set_showtime('task', '');
            $MiniComponents->specificEvent('06000', "search");
        }
    }
}
// Jomres 4.7.8 strips BOM from all areas of the output, not just the beginning.
function removeBOM($str = '')
{
    $bom = pack('CCC', 0xef, 0xbb, 0xbf);
    $str = str_replace($bom, '', $str);

    return $str;
}
