<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
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
 * Seed data for various tables
 *
 **/
$query = "TRUNCATE TABLE `#__jomcomp_tarifftype_rate_xref`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomcomp_tarifftype_rate_xref table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomcomp_tarifftype_rate_xref` (`id`, `tarifftype_id`, `tariff_id`, `roomclass_uid`, `property_uid`) VALUES
(1, 1, 1, 1, 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomcomp_tarifftype_rate_xref table', 'danger');
}
