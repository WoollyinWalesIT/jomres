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

class jomres_pageview_record
	{
	function __construct()
		{
		if ( !AJAXCALL )
			{
			$this->record = array();
			$this->record['task']				= $this->set_task();
			$this->record['property_uid']		= (int)$this->set_property_uid();
			$this->record['ip']					= $this->set_ip();
			$this->record['country_code']		= $this->set_country_code();
			$this->record['date_time']			= date("Y-m-d H:i:s");
			$this->record['user_id']			= (int)$this->set_user_id();
			$this->record['user_is_manager']	= (int)$this->set_user_is_manager();
			$this->record['user_is_registered']	= (int)$this->set_user_is_registered();

			$this->record_pageview();
			}
		}
	
	function record_pageview()
		{
		$query ="
			INSERT INTO #__jomres_pageviews (
			`task`,
			`property_uid`,
			`ip`,
			`country_code`,
			`date_time`,
			`user_id`,
			`user_is_manager`,
			`user_is_registered`
			) VALUES (
			'".$this->record['task']."',
			".$this->record['property_uid'].",
			'".$this->record['ip']."',
			'".$this->record['country_code']."',
			'".$this->record['date_time']."',
			".$this->record['user_id'].",
			".$this->record['user_is_manager'].",
			".$this->record['user_is_registered']."
			)
			";
			
			
		doInsertSql( $query, '' );
		
		}
		
	function set_task()
		{
		return get_showtime("task");
		}
		
	function set_property_uid()
		{
		$thisJRUser			= jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( $thisJRUser->userIsManager )
			return getDefaultProperty();
		else
			return detect_property_uid();
		}
		
	function set_ip()
		{
		return jomres_get_client_ip();
		}
		
	function set_country_code()
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		if (isset($tmpBookingHandler->user_settings['geolocated_country']))
			return $tmpBookingHandler->user_settings['geolocated_country'];
		else
			return "";
		}
		
	function set_user_id()
		{
		$thisJRUser			= jomres_singleton_abstract::getInstance( 'jr_user' );
		return $thisJRUser->id;
		}
		
	function set_user_is_manager()
		{
		$thisJRUser			= jomres_singleton_abstract::getInstance( 'jr_user' );
		return $thisJRUser->userIsManager;
		}
		
	function set_user_is_registered()
		{
		$thisJRUser			= jomres_singleton_abstract::getInstance( 'jr_user' );
		if ($thisJRUser->id > 0)
			return true;
		else
			return false;
		}
	

	}

?>