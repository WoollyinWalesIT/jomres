<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.13.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// Must do this here, because if we cannot create the encryption key, we cannot encode the user's data
try 
	{
	jr_import('jomres_encryption');
	$jomres_encryption = new jomres_encryption();
	}
	catch (Exception $e) 
	{
		echo $e->getMessage();
		return;
	}

$profiles_cols_added = false;

$query = "SHOW COLUMNS FROM #__jomres_guest_profile LIKE 'enc_firstname'";
$colExists = doSelectSql( $query );
if (count($colExists) < 1)
	{
		
	// It's about time we got rid of these old columns
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `car_regno`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `ccard_no`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `ccard_issued`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `ccard_expiry`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `ccard_iss_no`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `ccard_name`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `ccv`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guest_profile` DROP `type`";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_firstname` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_surname` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_house` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_street` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_town` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_county` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_country` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_postcode` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_tel_landline` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_tel_mobile` BLOB ";
	doInsertSql($query,"");
	 
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_email` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_vat_number` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guest_profile` ADD `enc_preferences` BLOB ";
	doInsertSql($query,"");
	
	$profiles_cols_added = true;
	}
	

$guests_cols_added = false;

$query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'enc_firstname'";
$colExists = doSelectSql( $query );
if (count($colExists) < 1)
	{
	// It's about time we got rid of these old columns
	$query = "ALTER TABLE `#__jomres_guests` DROP `car_regno`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `ccard_no`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `ccard_issued`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `ccard_expiry`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `ccard_iss_no`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `ccard_name`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `ccv`";
	doInsertSql($query,"");
	$query = "ALTER TABLE `#__jomres_guests` DROP `type`";
	doInsertSql($query,"");

	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_firstname` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_surname` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_house` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_street` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_town` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_county` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_country` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_postcode` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_tel_landline` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_tel_mobile` BLOB ";
	doInsertSql($query,"");
	 
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_email` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_vat_number` BLOB ";
	doInsertSql($query,"");
	
	$query = "ALTER TABLE `#__jomres_guests` ADD `enc_preferences` BLOB ";
	doInsertSql($query,"");

	$guests_cols_added = true;
	}
	
// Guest profiles table
if ($profiles_cols_added) {
	$query = "SELECT `id` , `firstname` , `surname` , `house` , `street` , `town` , `county` , `country` , `postcode` , `tel_landline` , `tel_mobile` , `email` , `vat_number` , `preferences`  FROM `#__jomres_guest_profile` ";
	$all_guests = doSelectSql($query);
	if (!empty($all_guests)) {
		foreach ($all_guests as $guest ) {
			try 
			{
				$query = "UPDATE #__jomres_guest_profile SET 
					`firstname` = '', 
					`surname` = '', 
					`house` = '', 
					`street` = '', 
					`town` = '', 
					`county` = '', 
					`country` = '', 
					`postcode` = '', 
					`tel_landline` = '', 
					`tel_mobile` = '', 
					`email` = '', 
					`tel_fax` = '', 
					`vat_number` = '', 
					`preferences` = '',
					`enc_firstname`='".$jomres_encryption->encrypt($guest->firstname)."',
					`enc_surname`='".$jomres_encryption->encrypt($guest->surname)."',
					`enc_house`='".$jomres_encryption->encrypt($guest->house)."',
					`enc_street`='".$jomres_encryption->encrypt($guest->street)."',
					`enc_town`='".$jomres_encryption->encrypt($guest->town)."',
					`enc_county`='".$jomres_encryption->encrypt($guest->county)."',
					`enc_country`='".$jomres_encryption->encrypt($guest->country)."',
					`enc_postcode`='".$jomres_encryption->encrypt($guest->postcode)."',
					`enc_tel_landline`='".$jomres_encryption->encrypt($guest->tel_landline)."',
					`enc_tel_mobile`='".$jomres_encryption->encrypt($guest->tel_mobile)."',
					`enc_email`='".$jomres_encryption->encrypt($guest->email)."',
					`enc_vat_number`='".$jomres_encryption->encrypt($guest->vat_number)."'
					WHERE id = ".(int)$guest->id;
				$result = doInsertSql($query , '' );
			}
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
	
		}
	}
}

// Geusts table
jr_import( 'jrportal_guests' );

if ($guests_cols_added) {
	$query = "SELECT `guests_uid` , `firstname` , `surname` , `house` , `street` , `town` , `county` , `country` , `postcode` , `tel_landline` , `tel_mobile` , `email` , `property_uid` , `vat_number` , `preferences`  FROM `#__jomres_guests` ";
	$all_guests = doSelectSql($query);
	if (!empty($all_guests)) {
		foreach ($all_guests as $guest ) {
			try 
			{
				$jrportal_guests = new jrportal_guests();
				$jrportal_guests->id = $guest->guests_uid;
				$jrportal_guests->property_uid = $guest->property_uid;
				
				$jrportal_guests->get_guest();

				$jrportal_guests->firstname		= $guest->firstname;
				$jrportal_guests->surname		= $guest->surname;
				$jrportal_guests->house			= $guest->house;
				$jrportal_guests->street		= $guest->street;
				$jrportal_guests->town			= $guest->town;
				$jrportal_guests->region		= $guest->county;
				$jrportal_guests->country		= $guest->country;
				$jrportal_guests->postcode		= $guest->postcode;
				$jrportal_guests->tel_landline	= $guest->tel_landline;
				$jrportal_guests->tel_mobile	= $guest->tel_mobile;
				$jrportal_guests->email			= $guest->email;
				$jrportal_guests->vat_number	= $guest->vat_number;

				$jrportal_guests->commit_update_guest();
			}
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
	
		}
	}
}


