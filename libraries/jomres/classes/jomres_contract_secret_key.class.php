<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
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

class jomres_contract_secret_key
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
	}
	
	/**
	 *
	 *
	 *
	 */

	public function generate_secret_key()
	{
		// This generates a random key that's emailed to the client so that non-registered users can also pay for bookings. This is in support of the booking enquiries feature
		$keeplooking = true;
		while ($keeplooking) :
			$secret_key = generateJomresRandomString(50);
			$query = "SELECT secret_key FROM #__jomres_contracts WHERE secret_key = '".$secret_key."' LIMIT 1";
			$contract_list = doSelectSql($query);
			if (empty($contract_list)) {
				$keeplooking = false;
			}
		endwhile;

		return $secret_key;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function save_secret_key($secret_key, $contract_uid)
	{
		if (trim($secret_key) == '') {
			throw new Exception('Secret key not set', 2);
		}
		if (trim($contract_uid) == '') {
			throw new Exception('Contract uid not set');
		}
		try {
			$query = "UPDATE #__jomres_contracts SET `secret_key` = '".$secret_key."' WHERE `contract_uid` = ".$contract_uid;
			$result = doSelectSql($query);
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function get_secret_key_for_contract_id($contract_uid)
	{
		$query = "SELECT `secret_key` FROM #__jomres_contracts WHERE `contract_uid` = '".$contract_uid."' LIMIT 1";
		$secret_key = doSelectSql($query, 1);
		if (!$secret_key) {
			throw new Exception('Contract UID not recognised');
		}

		return $secret_key;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function get_contract_id_for_secret_key($secret_key)
	{
		$query = "SELECT `contract_uid` FROM #__jomres_contracts WHERE `secret_key` = '".$secret_key."' LIMIT 1";
		$contract_uid = doSelectSql($query, 1);
		if (!$contract_uid) {
			throw new Exception('Secret key not recognised');
		}

		return $contract_uid;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function validate_secret_key($secret_key)
	{
		$query = "SELECT `secret_key` FROM #__jomres_contracts WHERE `secret_key` = '".$secret_key."' ";
		$secret_keys = doSelectSql($query);
		if (empty($secret_keys)) {
			return false;
		}

		return true;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function check_secret_key_used($secret_key)
	{
		$query = "SELECT `secret_key_used` FROM #__jomres_contracts WHERE `secret_key` = '".$secret_key."' LIMIT 1";
		$secret_key_used = doSelectSql($query, 1);
		if ((bool) $secret_key_used) {
			return true;
		} else {
			return false;
		}
	}
}
