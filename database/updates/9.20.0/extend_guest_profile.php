<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 *
 * @package Jomres\Core\Database
 *
 * Database modification during updates
 *
 **/
$profiles_cols_added = false;

$query = "SHOW COLUMNS FROM #__jomres_guest_profile LIKE 'enc_drivers_license'";
$colExists = doSelectSql( $query );
if (count($colExists) < 1)
	{
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_drivers_license` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_passport_number` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_iban` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_about_me` BLOB ";
	doInsertSql($query,"");
	
	$profiles_cols_added = true;
	}
	


