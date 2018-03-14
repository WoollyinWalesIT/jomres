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
CREATE TABLE IF NOT EXISTS `#__jomres_invoice_payment_ref` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`invoice_id`  INT UNSIGNED NOT NULL DEFAULT 0,
	`gateway` VARCHAR(255),
	`paid` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY	(`id`),
	INDEX `invoice_id` (`invoice_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_invoice_payment_ref table', 'danger');
}
