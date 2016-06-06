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
	
	return true;
	}

function load_jomres_environment()
	{
	//site config object
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig   = $siteConfig->get();
	
	//language object - load default language file/context 
	$jomreslang = jomres_singleton_abstract::getInstance( 'jomres_language' );
	$jomreslang->get_language($jrConfig[ 'language_context' ]);

	//user object
	$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	
	//include room booking functionality showtime, default true
	set_showtime( 'include_room_booking_functionality', true );
	
	//booking object
	$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

	if (is_null($tmpBookingHandler->jomressession) || $tmpBookingHandler->jomressession == '')
		{
		$tmpBookingHandler->initBookingSession(get_showtime('jomressession'));
		$jomressession  = $tmpBookingHandler->getJomressession();
		set_showtime( 'jomressession', $jomressession );
		}

	$property_uid = detect_property_uid();
	
	//load property type specific language file
	if ($property_uid > 0)
		{
		set_showtime( 'property_uid', $property_uid );
		
		$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);
		
		set_showtime('property_type', $current_property_details->ptype_id);
		set_showtime( 'this_property_published', $current_property_details->published );

		$jomreslang->get_language($current_property_details->property_type);
		}

	$customTextObj = jomres_singleton_abstract::getInstance('custom_text');

	jr_import( 'jomres_currency_exchange_rates' );
	$exchange_rates = new jomres_currency_exchange_rates( "GBP" );

	$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
	$MiniComponents->triggerEvent('00003'); // 
	init_javascript(); // 00004 is triggered in this function now.
	$MiniComponents->triggerEvent('00005');
	$componentArgs = array();
	$MiniComponents->triggerEvent('99999',$componentArgs); // Javascript and CSS caching handling is needed 
	$componentArgs = array();
	
	return true;
	}