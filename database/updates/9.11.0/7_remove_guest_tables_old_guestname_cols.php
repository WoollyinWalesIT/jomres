<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
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
$query = "SHOW COLUMNS FROM #__jomres_guest_profile LIKE 'firstname'";
$colExists = doSelectSql( $query );
if (count($colExists) > 0)
	{

	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `firstname`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `surname`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `house`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `street`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `town`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `county`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `country`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `postcode`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `tel_landline`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `tel_mobile`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `tel_fax`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `preferences`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `email`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `vat_number`";
	doInsertSql($query,"");
	}


$query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'firstname'";
$colExists = doSelectSql( $query );
if (count($colExists) > 0)
	{

	$query = "ALTER TABLE `#__jomres_guests` DROP `firstname`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `surname`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `house`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `street`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `town`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `county`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `country`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `postcode`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `tel_landline`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `tel_mobile`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `tel_fax`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `preferences`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `email`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `vat_number`";
	doInsertSql($query,"");
	}



