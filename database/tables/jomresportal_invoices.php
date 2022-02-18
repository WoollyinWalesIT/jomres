<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
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
 * Database creation during installation
 *
 **/
$query = "
CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`cms_user_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`guest_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`status` TINYINT(1) NOT NULL DEFAULT 0,
	`raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`due_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`paid` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`subscription` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`init_total` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`recur_total` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`recur_frequency` INT(4) UNSIGNED NOT NULL DEFAULT 0,
	`recur_dayofmonth` INT(4) UNSIGNED NOT NULL DEFAULT 0,
	`currencycode` CHAR(3) NOT NULL DEFAULT 'GBP',
	`subscription_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`contract_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`is_commission` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`vat_will_be_charged` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`invoice_number` VARCHAR(255),
	PRIMARY KEY  (`id`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomresportal_invoices table', 'danger');
}
