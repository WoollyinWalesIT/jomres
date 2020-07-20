<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.0
 *
 * @copyright	2005-2020 Vince Wooll
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

class jomres_child_policies
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( $property_uid = 0 )
	{
		if ( $property_uid == 0 ) {
			throw new Exception('Error: Property uid not set ');
		}

		$this->property_uid = $property_uid;

		$this->mrConfig = getPropertySpecificSettings( $this->property_uid );

		if ( isset($this->mrConfig['child_policies']) ) {
			$this->child_policies = unserialize(base64_decode($this->mrConfig['child_policies']));
		} else {
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data ( $this->property_uid );

			$occupancy_levels = array();
			if (!empty($current_property_details->room_types)) {
				foreach ($current_property_details->room_types as $room_type_id => $room_type ) {
					$occupancy_levels [$room_type_id] = array (
						"room_type_name"	=> $room_type['abbv'] ,
						"max_adults"		=> 0 ,
						"max_children"		=> 0 ,
						"max_occupancy"		=> 0
					);
				}
			}
			$this->child_policies = array ( "child_min_age" => 0 , "occupancy_levels" => $occupancy_levels );
		}
	}

	public function save_child_policies()
	{

		$policies = base64_encode(serialize($this->child_policies));

		$query = "SELECT uid FROM #__jomres_settings WHERE property_uid = '".(int) $this->property_uid."' and akey = 'child_policies' ";
		$result = doSelectSql($query);
		if (empty($result)) {
			$query = "INSERT INTO #__jomres_settings (`property_uid`,`akey`,`value`) VALUES (".(int) $this->property_uid." , 'child_policies' , '".$policies."')";
		} else {
			$query = "UPDATE #__jomres_settings SET `value`='".$policies."' WHERE `property_uid` = ".(int)  $this->property_uid." and `akey` = 'child_policies' ";
		}
		doInsertSql($query);
	}

}
