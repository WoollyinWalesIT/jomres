<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j99994webhook_watcher
	{
	function __construct()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

        $property_uid 	= (int)get_showtime("property_uid");
		$manager_id 	= 0;
		$all_webhooks 	= array();

		if ($property_uid == 0 ) {
			return;
		}
       
        $property_manager_xref = get_showtime('property_manager_xref');
        
		if (is_null($property_manager_xref)) {
            $property_manager_xref = build_property_manager_xref_array();
        }

		if (array_key_exists($property_uid,  $property_manager_xref)) {
			$manager_id = (int)$property_manager_xref[ $property_uid ];
		}

		if ( $manager_id == 0 ) {
			return;
		}
		
		jr_import("webhooks");
		$webhooks = new webhooks($manager_id);
		$all_webhooks = $webhooks->get_all_webhooks();

        $webhook_messages = get_showtime('webhook_messages');
		if (is_array($webhook_messages)) {
			$webhook_messages = array_unique( $webhook_messages, SORT_REGULAR ); // Remove duplicate objects
		}
		
        
		if (!empty($all_webhooks) && !empty($webhook_messages) ) {
            logging::log_message("Preparing deferred messages " , 'Core', 'DEBUG'  );
			foreach ( $all_webhooks as $webhook ) {
                $webhook['webhook_messages'] = $webhook_messages;
                if ($webhook['enabled'] == true ) {
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
		}
    }

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
