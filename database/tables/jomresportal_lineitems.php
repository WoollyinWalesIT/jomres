<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 *
 * @package Jomres\Core\Database
 *
 * Database creation during installation
 *
 **/
$query = "
CREATE TABLE IF NOT EXISTS `#__jomresportal_lineitems` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`description` VARCHAR(255),
	`init_price` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`init_qty` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`init_discount` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`init_total` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`init_total_inclusive` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`tax_code` VARCHAR(255),
	`tax_description` VARCHAR(255),
	`tax_rate` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`inv_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`is_payment`  TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`payment_method` VARCHAR(255),
	`transaction_id` VARCHAR(255),
	`management_url` VARCHAR(2000), 
	PRIMARY KEY  (`id`),
	INDEX `inv_id` (`inv_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomresportal_lineitems table', 'danger');
}
