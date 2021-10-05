<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
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
CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`cms_user_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`package_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`status` TINYINT(1) NOT NULL DEFAULT 0,
	`raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`expiration_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`invoice_id` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`id`),
	INDEX `cms_user_id` (`cms_user_id`),
	INDEX `expiration_date` (`expiration_date`),
	INDEX `status` (`status`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomresportal_subscriptions table', 'danger');
}
