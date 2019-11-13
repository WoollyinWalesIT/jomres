<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "TRUNCATE TABLE `#__jomresportal_c_rates`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomresportal_c_rates table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomresportal_c_rates` (`id`, `title`, `type`, `value`, `currencycode`, `tax_rate`) VALUES
(1, 'default', 2, 10, 'EUR', 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomresportal_c_rates table', 'danger');
}
