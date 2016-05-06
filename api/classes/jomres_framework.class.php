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

class jomres_framework 
	{
	public function __construct() 
		{
		}
	
	public function initialise_framework()
		{
		$this->bootstrap_jomres_framework();
		}
	
	private function bootstrap_jomres_framework()
		{

		define('JPATH_BASE', '../../');
		require_once ( JPATH_BASE .'/includes/defines.php' );
		require_once ( JPATH_BASE .'/includes/framework.php' );

		/* Create the Application */
		$app = JFactory::getApplication('site');
		
		if (file_exists(dirname(__FILE__).'/../../../jomres_root.php'))
			require_once (dirname(__FILE__).'/../../../jomres_root.php');
		else die();

		require_once(JOMRES_ROOT_DIRECTORY.'/../../integration.php');

		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		
		$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		if (is_null($tmpBookingHandler->jomressession))
			{
			$tmpBookingHandler->initBookingSession(get_showtime('jomressession'));
			$jomressession  = $tmpBookingHandler->getJomressession();
			}

		$property_uid = detect_property_uid();
		if ($property_uid > 0)
			{
			$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data($property_uid);
			$query="SELECT ptype_desc FROM #__jomres_ptypes WHERE id = ".(int)$current_property_details->ptype_id;
			$propertytype = doSelectSql($query,1);
			$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
			$jomreslang->get_language($propertytype);
			}
		else
			{
			$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
			$jomreslang->get_language('');
			}

		$customTextObj =jomres_singleton_abstract::getInstance('custom_text');

		jr_import( 'jomres_currency_exchange_rates' );
		$exchange_rates = new jomres_currency_exchange_rates( "GBP" );

		if (!defined('JOMRES_IMAGELOCATION_ABSPATH'))
			{
			define('JOMRES_IMAGELOCATION_ABSPATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS);
			define('JOMRES_IMAGELOCATION_RELPATH',get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/');
			}

		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		$MiniComponents->triggerEvent('00003'); // 
		init_javascript(); // 00004 is triggered in this function now.
		$MiniComponents->triggerEvent('00005');
		$componentArgs=array();
		$MiniComponents->triggerEvent('99999',$componentArgs); // Javascript and CSS caching handling is needed 
		$componentArgs=array();
		}
	}