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
CREATE TABLE IF NOT EXISTS `#__jomres_custom_text` (
	`uid` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`constant` VARCHAR(100),
	`customtext` TEXT,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`language` CHAR(5) NOT NULL DEFAULT 'en-GB',
	`language_context` VARCHAR(50) NOT NULL DEFAULT '0',
	PRIMARY KEY (`uid`),
	UNIQUE INDEX `const_puid_lang_langcontext` (`constant`, `property_uid`, `language`, `language_context`),
	INDEX `property_uid` (`property_uid`),
	INDEX `language` (`language`),
	INDEX `language_context` (`language_context`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_custom_text table', 'danger');
}
