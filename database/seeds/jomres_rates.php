<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.5
 *
 * @copyright	2005-2020 Vince Wooll
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
$query = "TRUNCATE TABLE `#__jomres_rates`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_rates table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_rates` (`rates_uid`, `rate_title`, `rate_description`, `validfrom`, `validto`, `roomrateperday`, `mindays`, `maxdays`, `minpeople`, `maxpeople`, `roomclass_uid`, `ignore_pppn`, `allow_ph`, `allow_we`, `property_uid`) VALUES 
(1, 'Double room rate', 'Double room rate', '2018/01/01', '2028/01/01', 110, 1, 1000, 1, 4, 1, 0, 1, 1, 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_rates table', 'danger');
}
