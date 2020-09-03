<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
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

class jomres_child_rates
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

		$this->default_model = 'per_night';

		if ( isset($this->mrConfig['child_rates']) ) {
			$this->child_rates = unserialize(base64_decode($this->mrConfig['child_rates']));
		} else {
			$this->child_rates = array ( );
		}

		uasort($this->child_rates, function($a, $b) {
			return $a['age_from'] <=> $b['age_from'];
		});
	}

	public function set_child_rate ( $id = 0 , $age_from = 0 , $age_to = 0 , $price = 0.00 , $model = 'per_night')
	{

		if ( $age_to == 0 ) {
			throw new Exception('Age to must be greater than 0 ');
		}

		if ($id == 0 ) {
			$last_key = array_key_last ($this->child_rates);
			$id = $last_key + 1;
		}

		$this->child_rates[$id] = array ( "id" => $id , "age_from" => (int)$age_from , "age_to" => (int)$age_to , "price" => (float)$price , "model" => (string)$model );


	}

	public function save_child_rates()
	{

		$rates = base64_encode(serialize($this->child_rates));

		$query = "SELECT uid FROM #__jomres_settings WHERE property_uid = '".(int) $this->property_uid."' and akey = 'child_rates' ";
		$result = doSelectSql($query);
		if (empty($result)) {
			$query = "INSERT INTO #__jomres_settings (`property_uid`,`akey`,`value`) VALUES (".(int) $this->property_uid." , 'child_rates' , '".$rates."')";
		} else {
			$query = "UPDATE #__jomres_settings SET `value`='".$rates."' WHERE `property_uid` = ".(int)  $this->property_uid." and `akey` = 'child_rates' ";
		}
		doInsertSql($query);
	}

	public function delete_child_rate($id)
	{
		unset($this->child_rates[$id]);
	}

	public function check_for_overlapping_ages()
	{
		if (!empty($this->child_rates) ) {

		}
	}

	public function build_rate_model_dropdown( $rate_id = 0 )
	{
		if ( $rate_id == 0 ) {
			$current_model = $this->default_model ;
		} else {
			$current_model = $this->child_rates[$rate_id]['model'];
		}

		$output = array();

		$output[ 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_DESC' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_DESC', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_DESC', false);

		$options = array();
		$options[] = jomresHTML::makeOption('per_night', jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', false));
		$options[] = jomresHTML::makeOption('per_stay', jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', false));
		return jomresHTML::selectList($options, 'model', 'class="inputbox" size="1"', 'value', 'text', $current_model , true );

	}
}
