<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j99994webhook_watcher
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
	 
	function __construct()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		if ( get_showtime('task') == 'background_process') {
			return;
		}
		
		$property_uid 	= (int)get_showtime("property_uid");

		$manager_id 	= 0;
		$all_webhooks 	= array();
		
		logging::log_message("Webhook watcher start." , 'Webhooks', 'DEBUG'  );

		if ($property_uid == 0 ) {
			logging::log_message("Webhook watcher. Property uid not found. Returning. " , 'Webhooks', 'DEBUG'  );
			return;
		}
	   
		$property_manager_xref = get_showtime('property_manager_xref');

		if (is_null($property_manager_xref)) {
			$property_manager_xref = build_property_manager_xref_array();
		}

		if (array_key_exists($property_uid,  $property_manager_xref)) {
			$manager_id = (int)$property_manager_xref[ $property_uid ];
		}
		
		if ( $manager_id == 0 ) { // The function will try to find the manager id for a property. If it cannot be found the function will return the first super property manager's id will be returned. It's a last-ditch attempt to find a manager's id for a property. In the case of Beds24 calls, if there are more than one super property manager, and if the the first super property manager isn't registered with Beds24 then bookings still will not be sent.
			$manager_id = (int)find_manager_id_for_property_uid($property_uid);
		}

		if ( $manager_id == 0 ) {
			logging::log_message("Webhook watcher. Manager id cannot be found for property. Returning. " , 'Webhooks', 'DEBUG'  );
			return;
		}
		
		jr_import("webhooks");
		$webhooks = new webhooks($manager_id);
		$all_webhooks = $webhooks->get_all_webhooks();

		$webhook_messages = get_showtime('webhook_messages');
		if (is_array($webhook_messages)) {
			$webhook_messages = array_unique( $webhook_messages, SORT_REGULAR ); // Remove duplicate objects
		}

		// We need to check for property uid being set. Regardless of what happens afterwards our first task is to clear the cmf rest api cache directory for this property of any files so that subsequent rest api calls can get fresh uptodate data.
		// Next we'll add the webhook messages to the webhook events table
		// Finally we'll run the sanity check class which will mark a property as incomplete if something is missing, and unpublish it if it's published

		$channel_data = array();
		if (class_exists("Flight") && (int)Flight::get('user_id') > 0 ) {
			$channel_data['channel_id'] = Flight::get('channel_id');
			$channel_data['channel_name'] = Flight::get('channel_name');
			$channel_data['user_id'] = (int)Flight::get('user_id');
		}
		
		if (!empty($all_webhooks) && !empty($webhook_messages) ) {
			jr_import('jomres_sanity_check');
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
			foreach ( $webhook_messages as $webhook ) {
				
				// Clear the CMF api cache directory
 				if ( isset($webhook->data->property_uid) && $webhook->data->property_uid > 0  ) {
					$temp_path = JOMRES_TEMP_ABSPATH."cmf_rest_api".JRDS.(int)$webhook->data->property_uid;
					if (is_dir($temp_path)) {
						emptyDir($temp_path);
					}
					
				// Now to add the event to the webhook events table
				
				if (isset($webhook->data->property_uid) && (int)$webhook->data->property_uid > 0  ) {



					$query = "INSERT INTO `#__jomres_webhook_events` (
						`property_uid` ,
						`user_performing_action` ,
						`channel_data` ,
						`date_added` ,
						`webhook_event_title` ,
						`webhook_event`
					) VALUES (
						".(int)$webhook->data->property_uid." ,
						".$thisJRUser->id." ,
						'".serialize($channel_data)."' ,
						'".date('Y-m-d H:i:s')."' , 
						'".$webhook->webhook_event."' ,
						'".serialize($webhook)."'
					)";

					doInsertSql($query);

					// Rerun the sanity check and unpublish a property if required
					$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
					$jrConfig = $siteConfig->get();
					if ( isset($jrConfig['automatic_unpublish_incomplete_properties']) && $jrConfig['automatic_unpublish_incomplete_properties'] == "1" ) {

						$jomres_sanity_check = new jomres_sanity_check( true , $webhook->data->property_uid );
						$jomres_sanity_check->do_sanity_checks( true );
						$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
						$jomres_properties->propertys_uid = $webhook->data->property_uid;

						if ( !empty($jomres_sanity_check->warnings_stack) ) {
							$jomres_properties->unpublish_property();
							$jomres_sanity_check->mark_as_incomplete();
							if ( isset($jrConfig['force_reapproval_on_automatic_unpublish']) && $jrConfig['force_reapproval_on_automatic_unpublish'] == "1") {
								$jomres_properties->unapprove_property();
								}
							}
						} // End sanity checking
					}
				}
			}
		}
		
		if (!empty($all_webhooks) && !empty($webhook_messages) ) {
			logging::log_message("Preparing deferred messages " , 'Webhooks', 'DEBUG'  );
			foreach ( $all_webhooks as $webhook ) {
				$webhook['webhook_messages'] = $webhook_messages;
				
				
				if ($webhook['enabled'] == true ) {
					
					$webhook['channel_data'] = $channel_data;
					
					$watcher_authmethod = "watcher_authmethod_process_".$webhook['settings']['authmethod'];

					// Trigger number 07310 is for tasks that *have* to be carried out now. 07320 is for tasks that can be deferred slightly
					
					 //logging::log_message("Looking for j07310".$watcher_authmethod, 'Webhooks', 'DEBUG');
					if ( $MiniComponents->eventSpecificlyExistsCheck( '07310', $watcher_authmethod ) ) {
						//logging::log_message("Starting call to authmethod ".$webhook['settings']['url'], 'Webhooks', 'DEBUG');
						$MiniComponents->specificEvent('07310', $watcher_authmethod, $webhook );
					}
					
					jr_import('jomres_deferred_tasks');
					$jomres_deferred_tasks = new jomres_deferred_tasks();
					$jomres_deferred_tasks->construct_background_message( "07320" , $watcher_authmethod , serialize($webhook) );
					$jomres_deferred_tasks->dispatch_mesage();
				}
			}
		} else {
			logging::log_message("No webhooks to be triggered " , 'Webhooks', 'DEBUG'  );
		}
	}


	function getRetVals()
		{
		return null;
		}
	}
