<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.21
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j07310watcher_authmethod_process_data_sources
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		// This script will collate and send information to the remote site using the authentication information provided in the componentArgs variable.
		$ePointFilepath=get_showtime('ePointFilepath');
		$this->retVals = false;

		$webhook_messages = $componentArgs['webhook_messages'];
		


		if (
			!empty($webhook_messages) ) {
			$webhook_messages = array_unique( $webhook_messages, SORT_REGULAR ); // Remove duplicate objects

			// The Save normal mode tariffs features will add two webhooks, rooms_multiple_added & tariffs_updated. We don´t need to run them both as this script does both at the same time, so we´ll check to see if both of these webhooks are set, and if they are we´ll discard one.
			$messages = array();
			foreach ( $webhook_messages as $webhook_notification ) {
				$messages[] = $webhook_notification->webhook_event;
			}

			foreach ( $webhook_messages as $webhook_notification ) {

				$data = $webhook_notification->data;

				if (isset($data) && $data !== false && isset($webhook_notification->webhook_event) ) { // The data, whatever it is, has been collected, let's process it
					$data->task = $webhook_notification->webhook_event;
					switch ( $data->task )
					{
						case 'property_deleted':
						case 'property_published':
						case 'property_unpublished':
						case 'property_saved':
						case 'property_updated':
							$jomres_data_source_maintainer = new jomres_data_source_maintainer();
							$jomres_data_source_maintainer->build_all_libraries();
							break;
					}
				}
			}
		}

	//logging::log_message("Completed Watcher's run." , 'data_sources', 'DEBUG' , '' );
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
	