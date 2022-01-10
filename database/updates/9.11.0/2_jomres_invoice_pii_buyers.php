<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
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
$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_invoice_pii_buyers` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`invoice_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`enc_firstname` BLOB,
	`enc_surname` BLOB,
	`enc_house` BLOB,
	`enc_street` BLOB,
	`enc_town` BLOB,
	`enc_county` BLOB,
	`enc_country` BLOB,
	`enc_postcode` BLOB,
	`enc_tel_landline` BLOB,
	`enc_tel_mobile` BLOB,
	`enc_email` BLOB,
	`enc_vat_number` BLOB,
	PRIMARY KEY(`id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_invoice_pii_buyers table', 'danger');
}
