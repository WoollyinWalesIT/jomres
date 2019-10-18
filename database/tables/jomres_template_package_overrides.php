<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "CREATE TABLE IF NOT EXISTS  #__jomres_template_package_overrides (
		`id` INT(11) auto_increment,
		`template_name` VARCHAR(100) NOT NULL,
		`path` VARCHAR(1000) NOT NULL,
		PRIMARY KEY (`id`)
	)";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_template_package_overrides table', 'danger');
}
