<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
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
CREATE TABLE IF NOT EXISTS `#__jomres_guest_reviews` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`cms_user_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`guests_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`review` TEXT,
	`last_changed` datetime default NULL ,
	PRIMARY KEY(`id`),
	INDEX `cms_user_id` (`cms_user_id`),
	INDEX `guests_uid` (`guests_uid`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_guest_reviews table', 'danger');
}
