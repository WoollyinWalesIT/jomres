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

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06002save_normalmode_tariffs
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		date_default_timezone_set('UTC'); // Must be left in place, without it the date range selectors will not work properly on servers with different timezones.
		
		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();
		
		if ($mrConfig['tariffmode'] != '0' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property')) {
			return;
		}
		
		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data($defaultProperty);
		
		//rooms object
		jr_import('jrportal_rooms');
		$jrportal_rooms = new jrportal_rooms();
		$jrportal_rooms->propertys_uid = $defaultProperty;
		
		//rates object
		jr_import('jrportal_rates');
		
		//SRPs
		if ($mrConfig[ 'singleRoomProperty' ] == '1') {
			$jrportal_rates = new jrportal_rates();
			
			$jrportal_rates->property_uid 	= $defaultProperty;
			
			//rate details
			$jrportal_rates->tarifftype_id 	= (int)jomresGetParam($_POST, 'tarifftypeid', 0);
			$jrportal_rates->rates_uid 		= (int)jomresGetParam($_POST, 'rates_uid', 0);
			$jrportal_rates->roomclass_uid 	= (int)jomresGetParam($_POST, 'roomtype', $jrportal_rates->rates_defaults['roomclass_uid']);
			$jrportal_rates->maxpeople 		= (int)jomresGetParam($_POST, 'max_people', $jrportal_rates->rates_defaults['maxpeople']);
			$jrportal_rates->validfrom 		= date("Y/m/d");
			$jrportal_rates->validto 		= date("Y/m/d", strtotime('+10 years'));
			
			$roomrateperday 				= jomresGetParam($_POST, 'roomrateperday', (float)$jrportal_rates->rates_defaults['roomrateperday']);
			$jrportal_rates->roomrateperday = convert_entered_price_into_safe_float($roomrateperday);
			
			//room details
			$jrportal_rooms->room_uid 		= (int)jomresGetParam($_POST, 'room_uid', 0);
			$jrportal_rooms->room_classes_uid = $jrportal_rates->roomclass_uid;
			$jrportal_rooms->max_people 	= $jrportal_rates->maxpeople;
			
			//save or update the selected room
			if ($jrportal_rooms->room_uid > 0) {
				$jrportal_rooms->commit_update_room();
			} else {
				$jrportal_rooms->commit_new_room();
			}
			
			//save new or update existing tariff
			//we use save_rate_legacy only for advanced and normal tariff editing modes, micromanage uses save_rate()
			$jrportal_rates->save_rate_legacy();
		} else { //MRPs
			$posted_number_of_rooms 	= jomresGetParam($_POST, 'numberofRooms', array());
			$posted_existing_room_uids 	= jomresGetParam($_POST, 'existingrooms', array());
			$posted_rates_uid 			= jomresGetParam($_POST, 'rates_uid', array());
			$posted_tarifftype_id 		= jomresGetParam($_POST, 'tarifftypeid', array());
			$posted_roomrateperday 		= jomresGetParam($_POST, 'roomrateperday', array());
			$posted_max_people 			= jomresGetParam($_POST, 'max_people', array());
			$posted_maxpeople_tariff 	= jomresGetParam($_POST, 'maxpeople_tariff', array());
			
			//we`ll go through each room types assigned to this property, no need to parse possible junk data sent in the POST
			foreach ($basic_property_details->this_property_room_classes as $k => $v) {
				$number_of_rooms = 0;
				$existing_room_uids = array();
				$existing_room_uids_count = 0;
				$rates_uid = 0;
				$tarifftype_id = 0;
				$roomrateperday = 0;
				$max_people = 1;
				$maxpeople_tariff = 1;
				
				//reset rates object
				$jrportal_rates = new jrportal_rates();
				$jrportal_rates->property_uid = $defaultProperty;
				
				//number of rooms selected
				if (isset($posted_number_of_rooms[$k])) {
					$number_of_rooms = (int)$posted_number_of_rooms[$k];
				}
				
				//get existing room uids
				if (isset($posted_existing_room_uids[$k])) {
					$existing_rooms = $posted_existing_room_uids[$k];
					
					if ($existing_rooms != '') {
						$existing_room_uids = explode(',', $existing_rooms);
					}
					
					$existing_room_uids_count = count($existing_room_uids);
				}
				
				//rates_uid (each room type has just one rate uid in Normal and Advanced modes, only Micromanage can have more)
				if (isset($posted_rates_uid[$k])) {
					$rates_uid = (int)$posted_rates_uid[$k];
				}
				
				//tarifftype id
				if (isset($posted_tarifftype_id[$k])) {
					$tarifftype_id = (int)$posted_tarifftype_id[$k];
				}
				
				//roomrateperday
				if (isset($posted_roomrateperday[$k])) {
					$roomrateperday = convert_entered_price_into_safe_float($posted_roomrateperday[$k]);
				}
				
				//max people per room
				if (isset($posted_max_people[$k])) {
					$max_people = (int)$posted_max_people[$k];
				}
				
				//max peoople in tariff
				if (isset($posted_maxpeople_tariff[$k])) {
					$maxpeople_tariff = (int)$posted_maxpeople_tariff[$k];
				}
				
				if ($number_of_rooms > 0) {
					//update rooms (delete or create new ones if needed)
					if ($existing_room_uids_count > $number_of_rooms) {
						$number_of_rooms_to_delete = $existing_room_uids_count - $number_of_rooms;
						
						$i = 0;
						foreach ($existing_room_uids as $r_uid) {
							if ($i < $number_of_rooms_to_delete) {
								$jrportal_rooms->room_uid = $r_uid;
								
								if ($jrportal_rooms->delete_room()) {
									$i++;
								}
							}
						}
					} elseif ($existing_room_uids_count < $number_of_rooms) {
						$number_of_rooms_to_add = $number_of_rooms - $existing_room_uids_count;
						
						//mass create rooms
						if ($number_of_rooms_to_add > 0) {
							$jrportal_rooms->rooms_generator['propertys_uid'] = $defaultProperty;
							$jrportal_rooms->rooms_generator['number_of_rooms'] = $number_of_rooms_to_add;
							$jrportal_rooms->rooms_generator['room_classes_uid'] = $k;
							$jrportal_rooms->rooms_generator['max_people'] = $max_people;
							$jrportal_rooms->rooms_generator['delete_existing_rooms'] = false;
							
							$jrportal_rooms->commit_new_rooms();
						}
					}
					
					//rate details
					$jrportal_rates->tarifftype_id 	= $tarifftype_id;
					$jrportal_rates->rates_uid 		= $rates_uid;
					$jrportal_rates->roomclass_uid 	= $k;
					$jrportal_rates->maxpeople 		= $maxpeople_tariff;
					$jrportal_rates->roomrateperday = $roomrateperday;
					$jrportal_rates->validfrom 		= date("Y/m/d");
					$jrportal_rates->validto 		= date("Y/m/d", strtotime('+10 years'));
					
					$jrportal_rates->save_rate_legacy();
				} else { //we need to delete rooms and tariffs for this room type, because the user selected number of rooms to be 0
					$i = 0;
					
					//delete all rooms of this type if possible (if rooms don`t have any upcoming bookings)
					if ($existing_room_uids_count > 0) {
						foreach ($existing_room_uids as $r_uid) {
							$jrportal_rooms->room_uid = $r_uid;

							if ($jrportal_rooms->delete_room()) {
								$i++;
							}
						}
					}

					//delete rate for this room type, but only if all rooms of this type could be deleted (don`t have any upcoming bookings)
					if ($existing_room_uids_count > 0 && $existing_room_uids_count == $i) {
						$jrportal_rates->tarifftype_id 	= $tarifftype_id;
						$jrportal_rates->rates_uid 		= $rates_uid;
						$jrportal_rates->delete_rate();
					}
				}
			}
		}
		
		$saveMessage = jr_gettext('_JOMRES_MR_AUDIT_UPDATE_TARIFF', '_JOMRES_MR_AUDIT_UPDATE_TARIFF', false);
		
		$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messaging->set_message($saveMessage);

		$webhook_notification						   	= new stdClass();
		$webhook_notification->webhook_event			= 'property_state_change';
		$webhook_notification->webhook_event_description= 'A catchall webhook notification which notes that the property state has changed. Primarily designed for caching features to remove/refresh cache elements';
		$webhook_notification->data					 	= new stdClass();
		$webhook_notification->data->property_uid	   	= $defaultProperty;
		add_webhook_notification($webhook_notification);

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL . "&task=edit_tariffs_normal"), $saveMessage);
	}


	public function getRetVals()
	{
		return null;
	}
}
