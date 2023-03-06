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
	#[AllowDynamicProperties]
class j99994module_data_cache
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

		$webhook_messages = get_showtime('webhook_messages');

		if (!empty($webhook_messages)) {
			$webhook_messages = array_unique($webhook_messages, SORT_REGULAR); // Remove duplicate objects

			// The Save normal mode tariffs features will add two webhooks, rooms_multiple_added & tariffs_updated. We don´t need to run them both as this script does both at the same time, so we´ll check to see if both of these webhooks are set, and if they are we´ll discard one.
			$messages = array();
			foreach ($webhook_messages as $webhook_notification) {
				$messages[] = $webhook_notification->webhook_event;
			}

			foreach ($webhook_messages as $webhook_notification) {
				$data = $webhook_notification->data;

				if (isset($data) && $data !== false && isset($webhook_notification->webhook_event)) { // The data, whatever it is, has been collected, let's process it
					$data->task = $webhook_notification->webhook_event;
					switch ($data->task) {
						case 'property_deleted':
						case 'property_published':
						case 'property_unpublished':
						case 'property_saved':
						case 'property_updated':
						case 'property_state_change':
						case 'property_favourited':
							$cache_dir = JOMRES_TEMP_ABSPATH.'get_property_module_data';
							if (!is_dir($cache_dir)) {
								mkdir($cache_dir);
							}
							if (!is_dir($cache_dir)) {
								throw new Exception("Unable to create cache directoy ".$cache_dir);
							}

							$contents = get_directory_contents($cache_dir);
							if (!empty($contents)) {
								foreach ($contents as $file_name) {
									if ( $file_name != "." && $file_name != ".." ) {
										$bang = explode( "_" , $file_name);
										if (isset($bang[0]) && is_numeric($bang[0])) {
											$file_property_uid = $bang[0];
											if ($file_property_uid == $data->property_uid ) {
												unlink($cache_dir.JRDS.$file_name);
											}
										}
									}
								}
							}

							$cache_file = $cache_dir.JRDS.'cache_file_'.(int)$data->property_uid.'.html';
							if (file_exists($cache_file)) {
								unlink($cache_file);
							}
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
