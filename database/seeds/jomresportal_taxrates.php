<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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
 * Seed data for various tables
 *
 **/
$query = "TRUNCATE TABLE `#__jomresportal_taxrates`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomresportal_taxrates table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomresportal_taxrates` (`id`, `code`, `description`, `rate`, `is_eu_country`) VALUES
(1, '01', 'VAT', 20, 0);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomresportal_taxrates table', 'danger');
}
