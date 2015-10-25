<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_sanity_check
	{
	function __construct( $autorun = true )
		{
		if ( get_showtime( 'no_html', $no_html ) == 1 || get_showtime( 'popup', $popup ) == 1 ) return;
		if ( $autorun )
			{
			$this->warnings     = "";
			$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$this->jrConfig     = $siteConfig->get();
			$this->mrConfig     = getPropertySpecificSettings();
			$this->property_uid = getDefaultProperty();
			}
		}

	function do_sanity_checks()
		{
		$this->warnings .= $this->check_approved();
		$this->warnings .= $this->check_suspended();
		if ( $this->mrConfig[ 'singleRoomProperty' ] == 1 ) 
			$this->warnings .= $this->check_srp_room_exists();
		$this->warnings .= $this->checks_guest_types_pppn();
		if ( $this->mrConfig[ 'is_real_estate_listing' ] == 0 ) 
			$this->warnings .= $this->checks_tariffs_exist();

			
		$this->warnings .= $this->check_editing_mode();
		$this->warnings .= $this->check_published();

		return $this->warnings;
		}

	function construct_warning( $message_array )
		{
		$message = $message_array['MESSAGE'];
		$warning = "";
		$warning .= jr_gettext( '_JOMRES_WARNINGS_DANGERWILLROBINSON', _JOMRES_WARNINGS_DANGERWILLROBINSON, false );
		$warning .= $message ;
		if (isset($message_array['LINK']))
			{
			$pageoutput	= array();
			$output		= array();
			
			$output['LINK']			= $message_array['LINK'];
			$output['BUTTON_TEXT']	= $message_array['BUTTON_TEXT'];
			
			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'sanity_checks_button.html' );
			$warning .= $tmpl->getParsedTemplate();
			}
		return '<p>'.$warning.'</p>';
		}

	function check_approved()
		{
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( get_showtime( "property_uid" ) );
		if ( !$current_property_details->approved )
			{
			$message = jr_gettext( '_JOMRES_APPROVALS_NOT_APPROVED_YET', _JOMRES_APPROVALS_NOT_APPROVED_YET, false );

			return $this->construct_warning( array( "MESSAGE" => $message ) );
			}
		}

	function check_suspended()
		{
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$published  = get_showtime( 'this_property_published' );
		if ( $thisJRUser->userIsSuspended )
			{
			$message = jr_gettext( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', _JOMRES_SUSPENSIONS_MANAGER_SUSPENDED, false );

			return $this->construct_warning( array( "MESSAGE" => $message ) );
			}
		}

	function checks_guest_types_pppn()
		{
		$ignore_on_tasks = array ( 'listCustomerTypes', 'editCustomerType', 'saveCustomerType', 'deleteCustomerType', 'saveCustomerTypeOrder' );
		if ( !in_array( get_showtime( 'task' ), $ignore_on_tasks ) )
			{
			$query  = "SELECT `id` FROM `#__jomres_customertypes` where property_uid = " . (int) $this->property_uid . " AND published = 1";
			$result = doSelectSql( $query );
			if ( (int) $this->mrConfig[ 'perPersonPerNight' ] == 1 && count( $result ) == 0 )
				{
				$message = jr_gettext( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', _JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES, false );
				$link = jomresURL( JOMRES_SITEPAGE_URL . '&task=listCustomerTypes');
				$button_text = jr_gettext( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', _JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES, false );

				return $this->construct_warning( array( "MESSAGE" => $message , "LINK" => $link , "BUTTON_TEXT" => $button_text ) );
				}
			}

		return "";
		}

	function checks_tariffs_exist()
		{
		if ( !get_showtime( 'include_room_booking_functionality' ) ) return "";
		$ignore_on_tasks = array ( 'propertyadmin', 'editTariff', 'saveTariff','edit_tariff_micromanage', 'list_tariffs_micromanage', 'list_tariffs_advanced', 'edit_tariff_advanced' , 'edit_tariffs_normal');
		if ( !in_array( get_showtime( 'task' ), $ignore_on_tasks ) )
			{
			$query  = "SELECT `rates_uid` FROM `#__jomres_rates` where property_uid = " . (int) $this->property_uid . "";
			$result = doSelectSql( $query );
			if ( count( $result ) == 0 )
				{
				$message = jr_gettext( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', _JOMRES_WARNINGS_TARIFFS_NOTARIFFS, false );
				
				$property_uid=getDefaultProperty();
				$mrConfig=getPropertySpecificSettings($property_uid);

				if ($mrConfig['tariffmode']=='0')
					{
					$link = jomresURL( JOMRES_SITEPAGE_URL . '&task=edit_tariffs_normal');
					$button_text = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_TITLE', _JOMRES_COM_MR_LISTTARIFF_TITLE, false, false ) . " &amp; " . jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOM', _JOMRES_COM_MR_VRCT_TAB_ROOM, false, false );
					}
				elseif ($mrConfig['tariffmode']=='1')
					{
					$link = jomresURL( JOMRES_SITEPAGE_URL . '&task=list_tariffs_advanced');
					$button_text = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_TITLE', _JOMRES_COM_MR_LISTTARIFF_TITLE, false );
					}
				else
					{
					$link = jomresURL( JOMRES_SITEPAGE_URL . '&task=list_tariffs_micromanage');
					$button_text = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_TITLE', _JOMRES_COM_MR_LISTTARIFF_TITLE, false );
					}

				return $this->construct_warning( array( "MESSAGE" => $message  , "LINK" => $link , "BUTTON_TEXT" => $button_text) );
				}
			}

		return "";
		}

	function check_editing_mode()
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$thisJRUser        = jomres_singleton_abstract::getInstance( 'jr_user' );

		if ( $this->jrConfig[ 'editingModeAffectsAllProperties' ] == "1" && $tmpBookingHandler->user_settings[ 'editing_on' ] == true && $thisJRUser->superPropertyManager )
			{
			$message = jr_gettext( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', _JOMRES_WARNINGS_GLOBALEDITINGMODE, false );

			return $this->construct_warning( array( "MESSAGE" => $message ) );
			}
		}

	function check_published()
		{
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$published  = get_showtime( 'this_property_published' );
		if ( isset( $published ) && $published != "1" && $thisJRUser->userIsManager )
			{
			$message = jr_gettext( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', _JOMRES_SANITY_CHECK_NOT_PUBLISHED, false );
			$link = jomresURL( JOMRES_SITEPAGE_URL . '&task=publishProperty&property_uid=' . get_showtime('property_uid'));
			$button_text = jr_gettext( '_JOMRES_COM_MR_VRCT_PUBLISH', _JOMRES_COM_MR_VRCT_PUBLISH, false );

			return $this->construct_warning( array( "MESSAGE" => $message , "LINK" => $link , "BUTTON_TEXT" => $button_text ) );
			}
		}
		
	function check_srp_room_exists()
		{
		if (get_showtime("task") != "edit_srp_room_type")
			{
			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$current_property_details->gather_data( get_showtime( "property_uid" ) );
			if ( is_null($current_property_details->rooms) )
				{
				$message = jr_gettext( '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', _JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK, false );
				$link = jomresURL( JOMRES_SITEPAGE_URL . '&task=edit_srp_room_type&property_uid=' . get_showtime('property_uid'));
				$button_text = jr_gettext( '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', _JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK, false );
				return $this->construct_warning( array( "MESSAGE" => $message , "LINK" => $link , "BUTTON_TEXT" => $button_text ) );
				}
			}
		}
		
	}

?>