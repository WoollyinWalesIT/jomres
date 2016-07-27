<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

ob_start( "removeBOM" );

@ini_set( "max_execution_time", "480" );

// Added X-Clacks Overhead. If you're a fan of Sir Terry, leave it in. If you're not, take it out
header("X-Clacks-Overhead: GNU Terry Pratchett");

require_once( dirname( __FILE__ ) . '/integration.php' );

try
	{
	logging::log_message('Jomres started' , "Core" );
	//minicomponents object
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	
	//site config object
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	
	//performace monitorning start
	$performance_monitor = jomres_singleton_abstract::getInstance( 'jomres_performance_monitor' );
	if ( $jrConfig[ 'errorChecking' ] == "1" ) 
		$performance_monitor->switch_on();
	else
		$performance_monitor->switch_off();
	
	//get all properties in system.
	$jomres_properties = jomres_singleton_abstract::getInstance( 'jomres_properties' );
	$jomres_properties->get_all_properties();
	
	//language object - load default language file for context
	$jomres_language = jomres_singleton_abstract::getInstance( 'jomres_language' );
	$jomres_language->get_language();
	
	//custom text object - load all custom text
	$customTextObj = jomres_singleton_abstract::getInstance( 'custom_text' );
	
	//trigger 00002 event
	$MiniComponents->triggerEvent( '00002' );
	
	//user object
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

	//TODO: here we can add a query to automatically remove the manager that has 0 properties
	if ( count($thisJRUser->authorisedProperties) == 0 && $thisJRUser->userIsManager )
		{
		throw new Exception( "This manager " .  jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id( (int) $thisJRUser->id ) . "  hasn't got any properties.");
		}

	//jomres timezones - mostly unused with an exception
	jr_import( 'jomres_timezones' );
	$tz = new jomres_timezones();

	//set jomres in wrapped mode to be ready for iframes
	if ( isset( $_REQUEST[ 'is_wrapped' ] ) && $_REQUEST[ 'is_wrapped' ] == "1")
		{
		$jrConfig[ 'isInIframe' ] = "1";
		}

	//TODO: remove this when all jrConfig values have a default in site_settings.php
	if ( !isset( $jrConfig[ 'full_access_control' ] ) ) 
		$jrConfig[ 'full_access_control' ] = "0";

	//we don`t want robots to index fullscreen mode or ajax requests
	if ( isset( $_REQUEST[ 'tmpl' ] ) && $_REQUEST[ 'tmpl' ] == get_showtime("tmplcomponent") )
		{
		jomres_cmsspecific_setmetadata( "robots", "noindex,nofollow" );
		}

	//trigger 00003 event
	$MiniComponents->triggerEvent( '00003' ); //

	//jomres cron object
	$cron = jomres_singleton_abstract::getInstance( 'jomres_cron' );
	if ( $cron->method == "Minicomponent" && !AJAXCALL)
		{
		$cron->triggerJobs();
		$cron->displayDebug();
		}

	//temp booking handler object, init jomres session
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	$tmpBookingHandler->initBookingSession();
	
	$jomressession = $tmpBookingHandler->getJomressession();
	set_showtime( 'jomressession', $jomressession );

	//set some showtimes we`ll need later
	$plugin  = jomresGetParam( $_REQUEST, 'plugin', "" );
	$popup   = intval( jomresGetParam( $_REQUEST, 'popup', 0 ) );
	$no_html = (int) jomresGetParam( $_REQUEST, 'no_html', 0 );
	$task    = str_replace( "&#60;x&#62;", "", jomresGetParam( $_REQUEST, 'task', "" ));

	set_showtime( 'task', $task );
	set_showtime( 'no_html', $no_html );
	set_showtime( 'popup', $popup );

	if ( $no_html == 1 ) 
		define ( "JOMRES_NOHTML", 1 );
	else
		define ( "JOMRES_NOHTML", 0 );

	//currency conversion object
	jr_import( 'jomres_currency_exchange_rates' );
	$exchange_rates = new jomres_currency_exchange_rates( "GBP" );

	//if this cms user has booked in the past and doesn`t have profile details saved yet, we`ll update his profile details aautomatically based on his guest details from one of the previous bookings he`s made
	if ( get_showtime( 'task' ) != "error" )
		{
		$defaultProperty 	= (int) $thisJRUser->currentproperty;
		$accessLevel   		= $thisJRUser->accesslevel;
		
		if ( !$thisJRUser->userIsManager && $thisJRUser->userIsRegistered )
			{
			if (!isset($_REQUEST['jsid'])) // Don't want to reset mos userid if jsid is set. jsid is sent back by gateways and if we set mos id to the gateway's session, we'll never be able to  associate the booking with the guest
				$tmpBookingHandler->updateGuestField( 'mos_userid', $thisJRUser->id );
			
			if ( get_showtime( 'task' ) != "handlereq" && get_showtime( 'task' ) != "completebk" && get_showtime( 'task' ) != "processpayment" && get_showtime( 'task' ) != "confirmbooking" )
				{
				if ( $thisJRUser->profile_id == 0 )
					{
					$query = "SELECT guests_uid,firstname,surname,house,street,town,postcode,county,country,tel_landline,tel_mobile,email,discount FROM #__jomres_guests WHERE mos_userid = '" . (int) $thisJRUser->id . "' LIMIT 1";
					$guestData = doSelectSql( $query, 2 );
					
					if ( $guestData )
						{
						$query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`,`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`email`) VALUES ('" . (int) $thisJRUser->id . "','$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$email')";
						doInsertSql( $query, '' );
	
						$tmpBookingHandler->updateGuestField( 'guests_uid', $guestData[ 'id' ] );
						$tmpBookingHandler->updateGuestField( 'firstname', $guestData[ 'firstname' ] );
						$tmpBookingHandler->updateGuestField( 'surname', $guestData[ 'surname' ] );
						$tmpBookingHandler->updateGuestField( 'house', $guestData[ 'house' ] );
						$tmpBookingHandler->updateGuestField( 'street', $guestData[ 'street' ] );
						$tmpBookingHandler->updateGuestField( 'town', $guestData[ 'town' ] );
						$tmpBookingHandler->updateGuestField( 'region', $guestData[ 'county' ] );
						$tmpBookingHandler->updateGuestField( 'country', $guestData[ 'country' ] );
						$tmpBookingHandler->updateGuestField( 'postcode', $guestData[ 'postcode' ] );
						$tmpBookingHandler->updateGuestField( 'tel_landline', $guestData[ 'tel_landline' ] );
						$tmpBookingHandler->updateGuestField( 'tel_mobile', $guestData[ 'tel_mobile' ] );
						$tmpBookingHandler->updateGuestField( 'email', $guestData[ 'email' ] );
						}
					else
						{
						$user_details = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id( $thisJRUser->id );
						$tmpBookingHandler->updateGuestField( 'email', $user_details[ $thisJRUser->id ][ 'email' ] );
						}
					}
				}
			}
		$tmpBookingHandler->saveGuestData();
		}
	else
		{
		$thisJRUser                       = new stdClass;
		$thisJRUser->userid               = false;
		$thisJRUser->username             = false;
		$thisJRUser->userIsManager        = false;
		$thisJRUser->accesslevel          = false;
		$thisJRUser->defaultproperty      = false;
		$thisJRUser->currentproperty      = false;
		$thisJRUser->authorisedProperties = array ();
		}

	//handle suspended managers
	if ( $thisJRUser->userIsSuspended )
		{
		jr_import( 'jomres_suspensions' );
		$jomres_suspensions = new jomres_suspensions();
		$jomres_suspensions->set_manager_id( $thisJRUser->userid );
		if ( $jomres_suspensions->suspended_manager_denied_task( get_showtime( 'task' ) ) ) 
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=dashboard" ), "" );
		}

	//get the current property uid if set
	$property_uid = (int)detect_property_uid();

	$mrConfig = getPropertySpecificSettings( $property_uid );

	if ( $property_uid > 0 )
		{
		set_showtime( 'property_uid', $property_uid );
		
		//basci property details object
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($property_uid);
		
		if ( get_showtime( 'task' ) == "viewproperty" )
			{
			set_showtime( 'last_viewed_property_uid', $property_uid ); // showtime's property_uid variable can change, for example in the property list the property uid will change while the system is viewing different properties and finding language strings for each. We'll set a specific variable here that can be reliably be used to take the user back to the last viewed property. Typically for cancel buttons, we can use the patTemplate common definition COMMON_LAST_VIEWED_PROPERTY_UID to allow cancel buttons to take us back to the last viewed property without having to specifically code for it in the script calling the template.
			$tmpBookingHandler->user_settings[ 'last_viewed_property_uid' ] = $property_uid;
			}
		
		$tmpBookingHandler->saveBookingData();
		
		//since we have a property uid, we also have a property type, so let`s set a showtime
		set_showtime( 'property_type', $current_property_details->property_type );
		set_showtime( 'ptype_id', $current_property_details->ptype_id );
		
		//load property type specific language file if $property_type is set
		$jomres_language->get_language( $current_property_details->property_type );
		
		//sanity checks
		if ( !$thisJRUser->userIsManager && $current_property_details->published == 0 && get_showtime( 'task' ) != "" )
			{
			if ( !AJAXCALL )
				{
				jr_import( 'jomres_sanity_check' );
				$warning = new jomres_sanity_check( false );
				echo $warning->construct_warning( jr_gettext( '_JOMRES_PROPERTYNOTOUBLISHED', '_JOMRES_PROPERTYNOTOUBLISHED', false ) );
				$property_uid = 0;
				$task = "";
				set_showtime( 'task', '' );
				set_showtime( 'property_type', '' );
				set_showtime( 'property_uid', 0 );
				}
			}
		
		//redirect to new property uid if different than manager`s current property
		if ( $thisJRUser->userIsManager && $thisJRUser->currentproperty != $property_uid && in_array( $property_uid, $thisJRUser->authorisedProperties ) )
			{
			$thisJRUser->set_currentproperty( $property_uid );
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL ), "" );
			}
		}
	else
		{
		if (isset($tmpBookingHandler->user_settings[ 'last_viewed_property_uid' ]))
			set_showtime( 'last_viewed_property_uid', (int)$tmpBookingHandler->user_settings[ 'last_viewed_property_uid' ] );
		}

	//add javascript to head
	if ( !AJAXCALL )
		init_javascript();
	
	//TODO find a better place 
	set_showtime( 'include_room_booking_functionality', true );
	
	//trigger 00005 event
	$MiniComponents->triggerEvent( '00005' );
	
	//trigger 00006 event
	$MiniComponents->triggerEvent( '00006' );

	//trigger 00060 event. Run out of trigger points. Illogically now, 60 triggers the top template, 61 the bottom template.
	$MiniComponents->triggerEvent( '00060', array ( 'tz' => $tz ) );

	//trigger 00012 event
	$componentArgs = array ();
	$componentArgs[ 'property_uid' ] = $property_uid;
	$MiniComponents->triggerEvent( '00012', $componentArgs ); // Optional other stuff to do before switch is done.

	//TDO remove this when all jrConfig var will have default values in site_config.php
	if ( !isset( $jrConfig[ 'errorChecking' ] ) ) 
		$jrConfig[ 'errorChecking' ] = 0;

	//handle tasks
	logging::log_message('Starting task '.get_showtime( 'task' ) , "Core" );
	if ( get_showtime( 'numberOfPropertiesInSystem' ) > 0 )
		{
		switch ( get_showtime( 'task' ) )
			{
			#########################################################################################
			case 'handlereq':
				$MiniComponents->triggerEvent( '05010' );
				break;
			#########################################################################################
			case 'dobooking':
				if ( $thisJRUser->userIsManager ) 
					$MiniComponents->triggerEvent( '05020' );
				else
					{
					if ( ( $mrConfig[ 'visitorscanbookonline' ] == "1" ) && ( !$thisJRUser->userIsManager ) )
						{
						if ( !$thisJRUser->userIsRegistered && $mrConfig[ 'registeredUsersOnlyCanBook' ] == "1" )
							{
							$MiniComponents->triggerEvent( '02280' );
							}
						else
							$MiniComponents->triggerEvent( '05020' );
						}
					else
						$MiniComponents->specificEvent( '00600', "contactowner" ); // Alternative if online bookings by guests is disabled
					}
				break;
			#########################################################################################
			case 'confirmbooking':
				if ( $thisJRUser->userIsManager ) 
					$MiniComponents->triggerEvent( '02990' ); // Trigger the booking confirmation page
				else
					{
					if ( ( $mrConfig[ 'visitorscanbookonline' ] == "1" ) && ( !$thisJRUser->userIsManager ) )
						{
						if ( !$thisJRUser->userIsRegistered && $mrConfig[ 'registeredUsersOnlyCanBook' ] == "1" ) 
							$MiniComponents->triggerEvent( '02280' );
						else
							$MiniComponents->triggerEvent( '02990' ); // Trigger the booking confirmation page
						}
					}
				break;
			#########################################################################################
			case 'completebk':
				$bookingdata = gettempBookingdata();
				$MiniComponents->triggerEvent( '00609', array ( 'bookingdata' => $bookingdata ) ); // Optional
				$MiniComponents->specificEvent( '00610', $plugin ); //Incoming
				break;
			#########################################################################################
			case 'processpayment':
				request_log();
				$tag = set_booking_number();

				$plugin = jomres_validate_gateway_plugin();

				$query = "SELECT id FROM #__jomres_booking_data_archive WHERE `tag` = '".$tag."'";
				$result = doSelectSql($query);
				if (count($result)==0)
					{
					$tmpbooking = $tmpBookingHandler->tmpbooking;
					$tmpguest = $tmpBookingHandler->tmpguest;
					
					$data  = array ( 'tmpbooking' => $tmpbooking, 'tmpguest' => $tmpguest );
					$data = str_replace("'", "''", serialize( $data ));
					
					$query = "INSERT INTO #__jomres_booking_data_archive SET `data`='" . $data . "',`date`='" . date( 'Y-m-d H:i:s' ) . "', `tag` = '".$tag."'";
					doInsertSql( $query, '' );
					}
				
				$bookingdata = gettempBookingdata();
				$MiniComponents->triggerEvent( '00599', array ( 'bookingdata' => $bookingdata ) ); // Optional

				// We'll let bookings of 0 value passed the gateway plugin handling as some users offer 100% discounts via coupons
				if ( $bookingdata[ 'contract_total' ] == 0.00 ) 
					$plugin = "NA";

				$paypal_settings = jomres_singleton_abstract::getInstance( 'jrportal_paypal_settings' );
				$paypal_settings->get_paypal_settings();

				if ( $plugin != "NA" )
					{
					$query = "SELECT id,plugin FROM #__jomres_pluginsettings WHERE (prid = " . (int) $property_uid . " OR prid = 0)  AND `plugin` = '" . (string) $plugin . "' AND setting = 'active' AND value = '1'";
					$gatewayDeets = doSelectSql( $query );

					if ( count( $gatewayDeets ) > 0 || $paypal_settings->paypalConfigOptions[ 'override' ] == "1" )
						{
						if ( $paypal_settings->paypalConfigOptions[ 'override' ] == "1" ) 
							$plugin = "paypal";
						
						$interrupted = intval( jomresGetParam( $_POST, 'interrupted', 0 ) );
						$interruptOutgoingFile = false;
						
						if ( $MiniComponents->eventFileLocate( '00600', $plugin ) ) 
							$interruptOutgoingFile = 'j00600' . $plugin . '.class.php';

						$outgoingFile = 'j00605' . $plugin . '.class.php';

						if ( $interruptOutgoingFile && $interrupted == 0 ) 
							$MiniComponents->specificEvent( '00600', $plugin, array ( 'bookingdata' => $bookingdata, 'property_uid' => $property_uid ) ); //Interrupt outgoing
						else
							$MiniComponents->specificEvent( '00605', $plugin, array ( 'bookingdata' => $bookingdata, 'property_uid' => $property_uid ) ); //outgoing
						}
					else
						{
						insertInternetBooking( get_showtime( 'jomressession' ), $depositPaid = false, $confirmationPageRequired = true, $customTextForConfirmationForm = "" );
						}
					}
				else
					{
					insertInternetBooking( get_showtime( 'jomressession' ), $depositPaid = false, $confirmationPageRequired = true, $customTextForConfirmationForm = "" );
					}
				break;
			#########################################################################################
			case 'slideshow':
				$MiniComponents->triggerEvent( '01060' ); //
				break;
			#########################################################################################
			case 'saveCustomerTypeOrder':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02110' );
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'publishCustomerType':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02112' ); //publishCustomerType();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'listCustomerTypes':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02114' ); //listCustomerTypes();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'editCustomerType':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02116' ); //editCustomerType();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveCustomerType':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02118' ); //saveCustomerType();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'deleteCustomerType':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02120' ); //deleteCustomerType();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'registerProp_step1':
				if ( $thisJRUser->userIsRegistered || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02300' );
				else
					echo jr_gettext( '_JOMRES_REGISTRATION_NOTALLOWED', '_JOMRES_REGISTRATION_NOTALLOWED', false );
				break;
			#########################################################################################
			case 'registerProp_step3':
				if ( $thisJRUser->userIsRegistered || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02320' );
				break;
			#########################################################################################
			case 'editGateway':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->specificEvent( '00510', $plugin );
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'savePlugin':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '03310' );
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'publishProperty':
			if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '03340' );
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'editCustomText':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '03360' );
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveCustomText':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '03370' );
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'editProperty':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '04200' ); //
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'deleteProperty':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '04910' ); //
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveProperty':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '04900' ); //
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'listBlackBookings':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02130' ); //listBlackBookings();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'newBlackBooking':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02134' ); //newBlackBooking();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'viewBlackBooking':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02132' ); //viewBlackBooking();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveBBooking':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02136' ); //saveBBooking();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'deleteBlackBooking':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02138' ); //deleteBlackBooking();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'publishExtra':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02140' ); //publishExtra();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'listExtras':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02142' ); //listExtras();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'editExtra':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02144' ); //editExtra();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveExtra':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02146' ); // saveExtra();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'deleteExtra':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02148' ); //deleteExtra();
				else
					userHasBeenLoggedOut();
					break;
			#########################################################################################
			case 'archiveAudit':
				if ( ( $thisJRUser->userIsManager && $accessLevel == 2 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02252' ); //archiveAudit();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'addServiceToBill':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02150' ); //addServiceToBill();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'invoiceForm':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02192' ); //invoiceForm();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveCancellation':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02162' ); //saveCancellation();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'cancelBooking':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02160' ); //cancelBooking();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'editBooking':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02260' ); //editBooking();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'listguests':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02220' ); //listGuests();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'editGuest':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02222' ); //editGuest();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveGuest':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02224' ); //saveGuest();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'deleteGuest':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02226' ); //deleteGuest();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'editDeposit':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02200' ); //editDeposit();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'saveDeposit':
				if ( ( $thisJRUser->userIsManager && $accessLevel >= 1 ) || $jrConfig[ 'full_access_control' ] == "1" ) 
					$MiniComponents->triggerEvent( '02202' ); //saveDeposit();
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'tagSearch':
				if ( $thisJRUser->userIsManager || $jrConfig[ 'full_access_control' ] == "1" )
					{
					$componentArgs = array ();
					$componentArgs[ 'tag' ] = $tag;
					$MiniComponents->triggerEvent( '00020', $componentArgs ); //tagSearch();
					}
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'showTariffs':
				property_header( $property_uid );
				$MiniComponents->triggerEvent( '01020' ); //showTariffs();
				break;
			#########################################################################################
			case 'listProperties':
				$MiniComponents->triggerEvent( '01004', $componentArgs ); // optional
				$MiniComponents->triggerEvent( '01005', $componentArgs ); // optional
				$MiniComponents->triggerEvent( '01006', $componentArgs ); // optional
				$MiniComponents->triggerEvent( '01007', $componentArgs ); // optional
				$componentArgs = array ();
				if (isset($tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ]))
					$componentArgs[ 'propertys_uid' ] = $tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ];
				$MiniComponents->triggerEvent( '01010', $componentArgs ); // listPropertys
				break;
			#########################################################################################
			case 'preview':
				if ( $thisJRUser->userIsManager )
					{
					property_header( $property_uid );
					$componentArgs = array ();
					$componentArgs[ 'property_uid' ] = $property_uid;
					$MiniComponents->specificEvent( '06000', 'view_property',array('property_uid'=>$property_uid));
					}
				else
					userHasBeenLoggedOut();
				break;
			#########################################################################################
			case 'error':
				$componentArgs = array ();
				$MiniComponents->triggerEvent( '02270', $componentArgs );
				break;
			#########################################################################################
			default:
				if ( $jrConfig[ 'full_access_control' ] == "1" )
					{
					if ( $MiniComponents->eventSpecificlyExistsCheck( '06000', get_showtime( 'task' ) ) ) 
						$MiniComponents->specificEvent( '06000', get_showtime( 'task' ) );
					elseif ( $MiniComponents->eventSpecificlyExistsCheck( '06001', get_showtime( 'task' ) ) )
						{
						if ( get_showtime( 'task' ) == "dashboard")
							{
							$MiniComponents->triggerEvent( '00013' ); // Show dashboard
							$MiniComponents->specificEvent( '06001', get_showtime( 'task' ) );
							$MiniComponents->triggerEvent( '00014' ); // Optional Post dashboard
							}
						else
							{
							$MiniComponents->specificEvent( '06001', get_showtime( 'task' ) );
							}
						}
					elseif ( $MiniComponents->eventSpecificlyExistsCheck( '06002', get_showtime( 'task' ) ) ) 
						$MiniComponents->specificEvent( '06002', get_showtime( 'task' ) );
					elseif ( $MiniComponents->eventSpecificlyExistsCheck( '06005', get_showtime( 'task' ) ) ) 
						$MiniComponents->specificEvent( '06005', get_showtime( 'task' ) );
					else 
						no_task_set($property_uid);
					}
				else
					{
					if ( $MiniComponents->eventSpecificlyExistsCheck( '06000', get_showtime( 'task' ) ) ) 
						$MiniComponents->specificEvent( '06000', get_showtime( 'task' ) ); // Custom task
					else if ( $MiniComponents->eventSpecificlyExistsCheck( '06001', get_showtime( 'task' ) ) && $thisJRUser->userIsManager ) // Receptionist and manager tasks
						{
						if ( get_showtime( 'task' ) == "dashboard")
							{
							$MiniComponents->triggerEvent( '00013' ); // Show dashboard
							$MiniComponents->specificEvent( '06001', get_showtime( 'task' ) );
							$MiniComponents->triggerEvent( '00014' ); // Optional Post dashboard
							}
						else
							{
							$MiniComponents->specificEvent( '06001', get_showtime( 'task' ) );
							}
						}
					elseif ( $MiniComponents->eventSpecificlyExistsCheck( '06002', get_showtime( 'task' ) ) && $thisJRUser->userIsManager && $accessLevel == 2 ) // Manager only tasks
						$MiniComponents->specificEvent( '06002', get_showtime( 'task' ) ); // Custom task
					else if ( $MiniComponents->eventSpecificlyExistsCheck( '06005', get_showtime( 'task' ) ) && $thisJRUser->userIsRegistered ) // Registered only user tasks
						$MiniComponents->specificEvent( '06005', get_showtime( 'task' ) ); // Custom task
					else 
						no_task_set($property_uid);
					}
				break;
			} //end switch

		if ( !$no_html )
			{
			$MiniComponents->triggerEvent( '00061' ); // Run out of trigger points. Illogically now, 60 triggers the top template, 61 the bottom template.
			}
		}
	else
		{
		logging::log_message('Error, no properties installed' , "Core" , "EMERGENCY" );
		if ( $MiniComponents->eventSpecificlyExistsCheck( '06000', get_showtime( 'task' ) ) ) 
			$MiniComponents->specificEvent( '06000', get_showtime( 'task' ) );
		else
			echo "Error, no properties installed. Before you can use Jomres you need to have at least 1 property installed, this is achieved by running <a href=\"" . get_showtime( 'live_site' ) . "/install_jomres.php\"></a>install_jomres.php.";
		}

	//reset language and property type
	$jomres_language_definitions = jomres_singleton_abstract::getInstance( 'jomres_language_definitions' );
	$jomres_language_definitions->reset_lang_and_property_type();

	//trigger 99994 event
	$MiniComponents->triggerEvent( '99994' );
	
	$performance_monitor->set_point( "pre-menu generation" );

	if ( defined('JOMRES_NOHTML') && JOMRES_NOHTML != 1 && !isset( $_REQUEST[ 'popup' ]) )
		{
		//trigger 99995 event
		$MiniComponents->triggerEvent( '99995' );
		}

	$performance_monitor->set_point( "post-menu generation" );
	
	//trigger 99999 event: Optional end run scripts
	$componentArgs = array();
	$MiniComponents->triggerEvent( '99999', $componentArgs );

	//close/save jomres session
	$tmpBookingHandler->close_jomres_session();

	$performance_monitor->set_point( "end run" );
	
	//show performance monitor report
	$performance_monitor->output_report();

	if ( $no_html == 0 && $jrConfig[ 'errorChecking' ] == 1 )
		{
		foreach ( $MiniComponents->log as $log ) echo "Log :" . $log . "<br>";
		}
	
	//close modal wrapper TODO: maybe find something better?
	if ($_REQUEST['modal_wrap'] == "1")
		{
		echo simple_template_output(JOMRES_TEMPLATEPATH_FRONTEND,'modal_wrap_end.html');
		}

	// After updating jquery ui to 1.9.3 we started seeing a problem where the entire site would be reloaded into the jquery tabs.
	// http://stackoverflow.com/questions/13837304/jquery-ui-non-ajax-tab-loading-whole-website-into-itself
	// according to http://bugs.jqueryui.com/ticket/7822 this problem will not be "fixed" in jquery, so we'll need to remove the base tag from Joomla's output
	// This page http://www.jelte.nl/nieuws/24-joomla-remove-base-href suggests removing the base tag for SEO reasons
	// More reading https://groups.google.com/forum/?fromgroups=#!topic/joomla-devel/HOHzzne5HYo
	if ( this_cms_is_joomla() )
		{
		$document = JFactory::getDocument();
		$document->setBase( null );
		}

	//jomres usage reporting
	jr_import("jomres_usage_reporting");
	$tracking = new jomres_usage_reporting();

	//done
	endrun();
	
	//jomres page views - huge resource eater
	jr_import("jomres_pageview_record");
	$jomres_pageview_record = new jomres_pageview_record();
	
	//mostly not used these days
	if ( defined( "JOMRES_RETURNDATA" ) )
		{
		$contents = ob_get_contents();
		$contents = $head_contents . $contents;
		define( "JOMRES_RETURNDATA_CONTENT", $contents );
		unset( $contents );
		ob_end_clean();
		}
	else
		ob_end_flush();
	}
catch (Exception $e) 
	{
	$MiniComponents->triggerEvent( '99994' );
	
	$performance_monitor->set_point( "pre-menu generation" );
	if ( !defined( 'JOMRES_NOHTML' ) && !isset( $_REQUEST[ 'popup' ] ) ) // Generate the main menu
		{
		$MiniComponents->triggerEvent( '99995' );
		}
	$performance_monitor->set_point( "post-menu generation" );
	
	$componentArgs = array();
	$MiniComponents->triggerEvent( '99999', $componentArgs ); // Optional end run scripts
	
	output_fatal_error( $e );
	}

// Script stops here

function no_task_set($property_uid = 0)
	{
	$thisJRUser     = jomres_singleton_abstract::getInstance( 'jr_user' );
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	
	if ( ( isset( $_REQUEST[ 'calledByModule' ] ) || isset( $_REQUEST[ 'plistpage' ] ) ) && $thisJRUser->userIsManager )
		{
		jomresShowSearch();
		}
	else
		{
		if ( $thisJRUser->userIsManager )
			{
			$MiniComponents->triggerEvent( '00013' ); // Show dashboard
			$MiniComponents->specificEvent( '06001', "dashboard" );
			$MiniComponents->triggerEvent( '00014' ); // Optional Post dashboard
			}
		elseif ( get_showtime( 'numberOfPropertiesInSystem' ) == 1 && $jrConfig[ 'is_single_property_installation' ] == "0" )
			{
			set_showtime( 'task', "viewproperty" );
			$componentArgs                   = array ();
			$componentArgs[ 'property_uid' ] = $property_uid;
			$MiniComponents->specificEvent( '06000', 'viewproperty', $componentArgs );
			}
		elseif ( $jrConfig[ 'is_single_property_installation' ] == "1" )
			{
			$all_property_uids = get_showtime( 'all_properties_in_system' );
			set_showtime( 'property_uid', $all_property_uids[ 0 ] );
			$MiniComponents->triggerEvent( '05020' );
			}
		else
			{
			set_showtime( "task", "" );
			jomresShowSearch();
			}
		}
	}

// Jomres 4.7.8 strips BOM from all areas of the output, not just the beginning.
function removeBOM( $str = "" )
	{
	$bom = pack( "CCC", 0xef, 0xbb, 0xbf );
	$str = str_replace( $bom, "", $str );

	return $str;
	}
