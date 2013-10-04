<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

function build_product_tour_javascript_file()
	{
	if (get_showtime("task") == "")
		{
		$task = "dashboard";
		}
	else
		{
		$task = get_showtime("task");
		}
	
	$target_ids = array();
	switch ( $task )
		{
		case "dashboard":
			$target_ids['tour_target_main_menu']					= 'bottom' ;
			$target_ids['tour_target_property_name']				= 'left' ;
			$target_ids['tour_target_timezone_dropdown']			= 'right' ;
			$target_ids['tour_target_lang_dropdown']				= 'right' ;
			$target_ids['tour_target_editing_mode_dropdown']		= 'right' ;
			$target_ids['tour_target_content']						= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "switch_active_property":
			$target_ids['tour_target_switcher_active_property_initials'] = 'top' ;
			$target_ids['found_properties'] 						= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "preview":
			$target_ids['tour_target_property_header']				= 'top' ;
			$target_ids['gallerywrapper']							= 'top' ;
			$target_ids['tour_target_property_details_buttons'] 	= 'top' ;
			$target_ids['tour_target_inline_calendar']				= 'left' ;
			$target_ids['tour_target_property_details_main_details']= 'top' ;
			$target_ids['tour_target_property_details_moreinfo']	= 'top' ;
			$target_ids['tour_target_property_details_booking_form']= 'top' ;
			$target_ids['mapTab']									= 'top' ;
			$target_ids['tour_target_reviews_list'] 				= 'top' ;
			$target_ids['tour_target_rooms_list']					= 'top' ;
			$target_ids['tour_target_property_details_tariffs'] 	= 'top' ;
			$target_ids['tour_target_local_attractions']			= 'top' ;
			$target_ids['tour_target_local_events']					= 'top' ;
			$target_ids['jomres_auction_house_content_body']		= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "hotelSettings":
			$target_ids['tab_Bookingrooms'] 						= 'top' ;
			$target_ids['tab_Yourbusinessdetails']					= 'top' ;
			$target_ids['tab_Externallink']							= 'top' ;
			$target_ids['tab_Gateways']								= 'top' ;
			$target_ids['tab_Misc']									= 'top' ;
			$target_ids['tab_Propertydetails']						= 'top' ;
			$target_ids['tab_Required']								= 'top' ;
			$target_ids['tab_SRPs']									= 'top' ;
			$target_ids['tab_Supplements']							= 'top' ;
			$target_ids['tab_TariffsCurrency']						= 'top' ;
			$target_ids['tab_Touristtax']							= 'top' ;
			$target_ids['tab_Micromanage']							= 'top' ;
			$target_ids['tab_Wiseprice']							= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listyourproperties":
			$target_ids['tour_target_frontend_list_properties']		= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "registerProp_step1":
			$target_ids['tour_target_registration_1']				= 'top' ;
			$target_ids['tour_target_registration_1_country'] 		= 'left' ;
			$target_ids['tour_target_registration_1_property_type']	= 'left' ;
			$target_ids['tour_target_registration_1_process']		= 'left' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "registerProp_step2":
			$target_ids['tour_target_registration_2']				= 'top' ;
			$target_ids['tour_target_registration_2_mrpsrp']		= 'left' ;
			$target_ids['tour_target_registration_2_name_address']	= 'left' ;
			$target_ids['tour_target_registration_2_stars']			= 'left' ;
			$target_ids['tour_target_registration_2_latlong']		= 'left' ;
			$target_ids['tour_target_registration_2_features']		= 'left' ;
			$target_ids['tour_target_registration_2_description']	= 'left' ;
			$target_ids['tour_target_registration_2_realestate_description'] = 'left' ;
			$target_ids['tour_target_registration_2_policies']		= 'left' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listLiveBookings":
			$target_ids['tour_target_listall_bookings']				= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listNewBookings":
			$target_ids['tour_target_listnew_bookings']				= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listoldbookings":
			$target_ids['tour_target_listold_bookings']				= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listguests":
			$target_ids['tour_target_list_guests']					= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listguests":
			$target_ids['tour_target_list_guests']					= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "dobooking":
			$target_ids['tour_target_booking_overrides']			= 'left' ;
			$target_ids['tour_target_booking_coupons']				= 'left' ;
			$target_ids['tour_target_booking_particulars']			= 'left' ;
			$target_ids['tour_target_booking_room_features']		= 'left' ;
			$target_ids['tour_target_booking_extras']				= 'left' ;
			$target_ids['tour_target_booking_existing_guests']		= 'left' ;
			$target_ids['tour_target_booking_required']				= 'left' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listguests":
			$target_ids['tour_target_list_guests']					= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listBlackBookings":
			$target_ids['tour_target_list_blackbookings']			= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "editProperty":
			$target_ids['tour_target_registration_2_name_address']	= 'left' ;
			$target_ids['tour_target_registration_2_stars']			= 'left' ;
			$target_ids['tour_target_registration_2_latlong']		= 'left' ;
			$target_ids['tour_target_registration_2_features']		= 'left' ;
			$target_ids['tour_target_registration_2_description']	= 'left' ;
			$target_ids['tour_target_registration_2_realestate_description']= 'left' ;
			$target_ids['tour_target_registration_2_policies']		= 'left' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "propertyadmin":
			$target_ids['tour_target_listtariffs_normal_mrp']		= 'top' ;
			$target_ids['tour_target_listtariffs_normal_srp']		= 'top' ;
			$target_ids['tour_target_roomsandtariffs_mrp']			= 'top' ;
			$target_ids['tour_target_roomsandtariffs_srp']			= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listCustomerTypes":
			$target_ids['tour_target_guest_types']					= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listCoupons":
			$target_ids['tour_target_coupons']						= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "listExtras":
			$target_ids['tour_target_extras']						= 'top' ;
			$target_ids['tour_target_table_tools']					= 'top' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;
		case "media_centre":
			$target_ids['tour_target_mediacentre_introduction']		= 'top' ;
			$target_ids['tour_target_mediacentre_resourcepicker']	= 'left' ;
			$target_ids['tour_target_mediacentre_existingimages']	= 'left' ;
			$target_ids['tour_target_mediacentre_selectedimages']	= 'right' ;
			$target_ids['tour_target_mediacentre_uploadcontrols']	= 'right' ;
			$target_ids['tour_target_end']							= 'top' ;
		break;




		default:
			//We could add code here to find information from plugins
		break;
		}

/* 
		case "XXXXX":
			$target_ids['xxxxxxxxxxxxx']					= 'left' ;
			$target_ids['xxxxxxxxxxxxx']					= 'left' ;
		break;
		 */
		
	build_tour( $target_ids , $task );
	}


function build_tour( $target_ids = array() , $task )
	{
	if (count ($target_ids) == 0 )
		{
		return;
		}
	
	$rows = array();

	foreach ($target_ids as $key=>$val )
		{
		$r = array();
		
		$r['ID']           = $key;
		$r['POSITION']     = $val;
		$r['TITLE']        = jr_gettext ( "TOUR_ID_".strtoupper($key)."_TITLE" , '' , false );
		$r['DESCRIPTION']  = jr_gettext ( "TOUR_ID_".strtoupper($key)."_CONTENT" , '' , false );
			
		$rows[] = $r;
		}

	$pageoutput[ ] = $output;
	$tmpl          = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->addRows( 'rows', $rows );
	$tmpl->readTemplatesFromInput( 'product_tour_template.html' );

	$result = $tmpl->getParsedTemplate();
	
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'temp' . JRDS . 'product_tours' . JRDS))
		{
		mkdir (JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'temp' . JRDS . 'product_tours' . JRDS);
		}
	$file = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'temp' . JRDS . 'product_tours' . JRDS . $task.'_' . get_showtime("lang").'-tour.js';
	file_put_contents( $file , $result );
	}

?>