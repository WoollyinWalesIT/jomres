<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomresportal_sms_clickatell_messages` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255),
	`number` VARCHAR(25),
	`message` VARCHAR(255),
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`send_time` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`ack` INT(3) UNSIGNED NOT NULL DEFAULT 0,
	`apiMsgid` VARCHAR(255),
	PRIMARY KEY (`id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomresportal_sms_clickatell_messages table', 'danger');
}
