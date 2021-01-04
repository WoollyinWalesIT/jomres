<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
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
/*
Unapproval reasons
	admin  // Admin blocked the domain, we will not retry it later
	system // The system blocked the domain, perhaps because of connectivity problems, the system will try at a later date to connect to it (todo)
*/

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_syndication_domains` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`domain` text,
	`api_url` text,
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
