<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_property_payment_methods
{
	public function __construct()
	{
		$this->multi_query_result = array();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_gateways_multi($property_uids)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if (!is_array($property_uids) && (int) $property_uids > 0) {
			$property_uids = array($property_uids);
		}
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$noimage = $jomres_media_centre_images->multi_query_images["noimage-small"];

		// First we need to extract those uids that are not already in the $this->multi_query_result var, this (may) reduce the number of properties we need to query
		$temp_array = array();
		foreach ($property_uids as $id) {
			if (!array_key_exists($id, $this->multi_query_result)) {
				$temp_array[ ] = $id;
			}
		}
		$property_uids = $temp_array;
		unset($temp_array);

		if (!empty($property_uids)) {
			$query = "SELECT id,prid,plugin FROM #__jomres_pluginsettings WHERE setting = 'active' AND value = '1' AND prid IN (".jomres_implode($property_uids).') ';
			$propertyData = doSelectSql($query);

			foreach ($propertyData as $data) {
				$result = $MiniComponents->specificEvent('03108', $data->plugin, null);
                if (!is_null($result)) {
                    $tmpgatewaydir = $result[ 'filepath' ];
                    $gatewaydir = str_replace(JOMRESCONFIG_ABSOLUTE_PATH, get_showtime('live_site').'/', $tmpgatewaydir);
                    $gatewaydir = str_replace('\\', '/', $gatewaydir);

                    $this->multi_query_result[ $data->prid ][$data->plugin]['gateway'] = $data->plugin;
                    $this->multi_query_result[ $data->prid ][$data->plugin]['gateway_name'] = $result[ 'gatewayname' ];

					$image = $noimage;
					if (file_exists($tmpgatewaydir.'j00510'.$data->plugin.'.gif')) {
						$image = $gatewaydir.'j00510'.$data->plugin.'.gif';
					} elseif (file_exists($tmpgatewaydir.'j00510'.$data->plugin.'.png')) {
						$image = $gatewaydir.'j00510'.$data->plugin.'.png';
					} elseif (file_exists($tmpgatewaydir.'j00510'.$data->plugin.'.jpg')) {
						$image = $gatewaydir.'j00510'.$data->plugin.'.jpg';
					}
                    $this->multi_query_result[ $data->prid ][$data->plugin]['gateway_image'] = $image;
                }

			}

			//some properties don`t have gateways enabled, so we`ll set $this->multi_query_result to '' for them, otherwise the mysql query will be executed again
			foreach ($property_uids as $uid) {
				if (!isset($this->multi_query_result[$uid])) {
					$this->multi_query_result[ $uid ]['XXX'] = array();
					$this->multi_query_result[ $uid ]['XXX']['gateway'] = '';
					$this->multi_query_result[ $uid ]['XXX']['gateway_name'] = '';
					$this->multi_query_result[ $uid ]['XXX']['gateway_image'] = '';
				}
			}
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_property_gateways($property_uid)
	{
		if (empty($this->multi_query_result[ $property_uid ])) {
			$this->get_gateways_multi($property_uid);
		}

		return $this->multi_query_result[ $property_uid ];
	}
}
