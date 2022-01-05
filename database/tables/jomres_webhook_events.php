<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
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
CREATE TABLE IF NOT EXISTS `#__jomres_webhook_events` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`user_performing_action` INT UNSIGNED NOT NULL DEFAULT 0,
	`channel_data` text,
	`date_added` datetime default NULL ,
	`webhook_event_title` VARCHAR(255),
	`webhook_event` text,
	PRIMARY KEY(`id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_webhook_events table', 'danger');
}
