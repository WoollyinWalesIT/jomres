<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_syndication_properties` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`syndication_domain_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`view_property_url` text,
	`booking_form_url` text,
	`propertys_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`name` text,
	`multi_room_property` text,
	`lat` VARCHAR(12),
	`long` VARCHAR(12),
	`metadescription` text,
	`thumbnail_location` text,
	`date_added` datetime default NULL ,
	`last_checked` datetime default NULL ,
	`approved` BOOL NOT NULL DEFAULT '1',
	`unapproval_reason` VARCHAR(12),
	PRIMARY KEY(`id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_invoice_pii_buyers table', 'danger');
}
