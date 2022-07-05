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
			$this->child_policies = array ( "child_min_age" => 0  );
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
