<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	#[AllowDynamicProperties]
class j00005data_sources
{
	function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable=false;
			return;
		}

		if (file_exists(get_showtime('ePointFilepath').'language'.JRDS.get_showtime('lang').'.php')) {
				require_once(get_showtime('ePointFilepath').'language'.JRDS.get_showtime('lang').'.php');
		} else {
			if (file_exists(get_showtime('ePointFilepath').'language'.JRDS.'en-GB.php')) {
				require_once(get_showtime('ePointFilepath').'language'.JRDS.'en-GB.php');
			}
		}


		jr_import('jomres_data_source_maintainer');
		$jomres_data_source_maintainer = new jomres_data_source_maintainer();

		//admin menu item
		$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');
		$jomres_menu->add_admin_item(50, jr_gettext('DATA_SOURCES_TITLE', 'DATA_SOURCES_TITLE', false), $task = 'data_sources', 'fa-star');

		$manager_uid = 0;
		$url = 'Data sources plugin'; // We don't need to set a url, the endpoint is local and it's handled locally

		jr_import("webhooks");
		$webhooks = new webhooks($manager_uid);
		$all_webhooks = $webhooks->get_all_webhooks();
		if (!empty($all_webhooks)) {
			foreach ($all_webhooks as $key => $val) {
				if ($val['settings']['url'] == $url) {
					return true; // A webhook for this site already exists, we will not create a new one
				}
			}
		}

		$integration_id = 0;

		$webhooks->set_setting($integration_id, 'url', $url);
		$webhooks->set_setting($integration_id, 'authmethod', 'data_sources');
		$webhooks->webhooks[$integration_id ]['enabled'] = 1;

		$webhooks->commit_integration($integration_id);
	}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
	{
		return null;
	}
}
