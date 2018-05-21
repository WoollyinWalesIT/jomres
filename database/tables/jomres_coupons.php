<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_coupons` (
	`coupon_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`coupon_code` VARCHAR(255),
	`valid_from` DATE,
	`valid_to` DATE,
	`amount` DOUBLE(11,2),
	`is_percentage` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`rooms_only` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`booking_valid_from` DATE,
	`booking_valid_to` DATE,
	`guest_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`coupon_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_coupons table', 'danger');
}
