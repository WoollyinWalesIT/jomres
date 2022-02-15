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
 * Database creation during installation
 *
 **/
$query = "
CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings` (
	`rating_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`item_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`user_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`review_title` VARCHAR(255),
	`review_description` TEXT,
	`pros` TEXT,
	`cons` TEXT,
	`rating` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`rating_ip` VARCHAR(20),
	`rating_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`published` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`contract_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`user_name` VARCHAR(255),
	PRIMARY KEY (`rating_id`),
	INDEX `item_id` (`item_id`),
	INDEX `published` (`published`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_reviews_ratings table', 'danger');
}
