<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
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
CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices_transactions` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`invoice_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`transaction_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`time_added` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`gateway_id` VARCHAR(255),
	`payment_result` TEXT,
	`payment_currency` CHAR(3) NOT NULL DEFAULT 'GBP',
	`payment_amount` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`payment_fees` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`payment_ref` VARCHAR(255),
	`notes` TEXT,
	PRIMARY KEY (`id`),
	INDEX `invoice_id` (`invoice_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomresportal_invoices_transactions table', 'danger');
}
