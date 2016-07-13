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

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

if (file_exists(dirname(__FILE__).'/../jomres_root.php'))
	require_once (dirname(__FILE__).'/../jomres_root.php');
else 
	die();
	
if (defined('API_STARTED'))
	{
	//we need to include cms specific files
	load_cms_environment();
	}

require_once(dirname(__FILE__).'/integration.php');

//jomres framework
load_jomres_environment();
	
function load_cms_environment()
	{
	if (file_exists(dirname(__FILE__).'/../configuration.php'))
		{
		define('JPATH_BASE', dirname(__FILE__) . '/../' );
		require_once ( JPATH_BASE . 'includes/defines.php' );
		require_once ( JPATH_BASE . 'includes/framework.php' );

		/* Create the Application */
		$app = JFactory::getApplication('site');
		}
	elseif (file_exists(dirname(__FILE__).'/../wp-config.php'))
		{
		define('WP_USE_THEMES', false);
		/** Loads the WordPress Environment */
		require_once ( dirname(__FILE__) . '/../wp-load.php');
		}
	else
		die("Could not detect CMS. Exitting.");
	
	return true;
	}

function load_jomres_environment()
	{
	$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
	
	//site config object
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig   = $siteConfig->get();
	
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
	$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
	
	//00003 trigger point - input filtering
	$MiniComponents->triggerEvent('00003');
	
	//booking object
	$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

	//jomres session
	if ( is_null($tmpBookingHandler->jomressession) || $tmpBookingHandler->jomressession == '' )
		{
		$tmpBookingHandler->initBookingSession(get_showtime('jomressession'));
		$jomressession = $tmpBookingHandler->getJomressession();
		set_showtime( 'jomressession', $jomressession );
		}
	
	//currency exchange rates
	jr_import( 'jomres_currency_exchange_rates' );
	$exchange_rates = new jomres_currency_exchange_rates( "GBP" );

	$property_uid = (int)detect_property_uid();
	
	$mrConfig = getPropertySpecificSettings( $property_uid );

	//load property type specific language file
	if ( $property_uid > 0 )
		{
		set_showtime( 'property_uid', $property_uid );
		
		$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		//since we have a property uid, we also have a property type, so let`s set a showtime
		set_showtime( 'property_type', $current_property_details->property_type );
		
		//load property type specific language file if $property_type is set
		$jomres_language->get_language( $current_property_details->property_type );
		}
	
	//00004 is triggered in this function now
	if ( !AJAXCALL )
		init_javascript();
	
	//TODO find a better place 
	set_showtime( 'include_room_booking_functionality', true );
	
	//00005 trigger point
	$MiniComponents->triggerEvent( '00005' );
	
	//99999 trigger point
	$MiniComponents->triggerEvent('99999', array());
	
	return true;
	}
