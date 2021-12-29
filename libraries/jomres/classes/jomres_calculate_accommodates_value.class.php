<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_calculate_accommodates_value
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( $property_uid = 0  )
	{
		if ( $property_uid == 0 ) {
			throw new Exception('Error: Property uid not set ');
		}

		$this->property_uid = $property_uid;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function calculate_accommodates_value ( ) {

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

		if ( isset($current_property_details->multi_query_result[$this->property_uid] )) { // gather_data_multi will get the rooms_max_people value, but if we delete a room, then the singleton's existing value will already be set to we need to unset the data and re-gather it
			unset($current_property_details->multi_query_result[$this->property_uid]);
		}

		$current_property_details->gather_data_multi ( array( $this->property_uid ) );

		$mrConfig = getPropertySpecificSettings($this->property_uid , true );

		$accommodates_adults = 0;
		if ( isset($current_property_details->multi_query_result[$this->property_uid][ 'rooms_max_adults' ])) {
			foreach ($current_property_details->multi_query_result[$this->property_uid][ 'rooms_max_adults' ] as $room ) {
				foreach ( $room as $room_id => $sleeps ) {
					$accommodates_adults += $sleeps;
				}
			}
		}

		$accommodates_children = 0;
		if ( isset($current_property_details->multi_query_result[$this->property_uid][ 'rooms_max_children' ])) {
			foreach ($current_property_details->multi_query_result[$this->property_uid][ 'rooms_max_children' ] as $room ) {
				foreach ( $room as $room_id => $sleeps ) {
					$accommodates_children += $sleeps;
				}
			}
		}

		if (!isset($mrConfig['accommodates'])) {
			$query = "INSERT INTO #__jomres_settings 
			(
			`property_uid`,
			`akey`,
			`value`
			) 
			VALUES 
			(
			".(int) $this->property_uid.",
			'accommodates',
			".($accommodates_adults + $accommodates_children)."
			)";
		} else {
			$query = "UPDATE #__jomres_settings SET `value` = ".($accommodates_adults + $accommodates_children)." WHERE `property_uid` = ".(int) $this->property_uid." AND `akey` = 'accommodates' ";
		}
        $mrConfig = getPropertySpecificSettings($this->property_uid , true );

		if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', false))) {
			throw new Exception('Error: accommodates setting insert failed.');
		}

		if (!isset($mrConfig['accommodates_adults'])) {
			$query = "INSERT INTO #__jomres_settings 
			(
			`property_uid`,
			`akey`,
			`value`
			) 
			VALUES 
			(
			".(int) $this->property_uid.",
			'accommodates_adults',
			".$accommodates_adults."
			)";
		} else {
			$query = "UPDATE #__jomres_settings SET `value` = ".$accommodates_adults." WHERE `property_uid` = ".(int) $this->property_uid." AND `akey` = 'accommodates_adults' ";
		}

		if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', false))) {
			throw new Exception('Error: accommodates_adults setting insert failed.');
		}

		if (!isset($mrConfig['accommodates_children'])) {
			$query = "INSERT INTO #__jomres_settings 
			(
			`property_uid`,
			`akey`,
			`value`
			) 
			VALUES 
			(
			".(int) $this->property_uid.",
			'accommodates_children',
			".$accommodates_children."
			)";
		} else {
			$query = "UPDATE #__jomres_settings SET `value` = ".$accommodates_children." WHERE `property_uid` = ".(int) $this->property_uid." AND `akey` = 'accommodates_children' ";
		}


		if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', false))) {
			throw new Exception('Error: accommodates_children setting insert failed.');
		}

	}

	
}
