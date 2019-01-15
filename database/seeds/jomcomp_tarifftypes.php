<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "TRUNCATE TABLE `#__jomcomp_tarifftypes`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomcomp_tarifftypes table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomcomp_tarifftypes` (`id`, `name`, `description`, `property_uid`) VALUES
(1, 'Double room rate', NULL, 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomcomp_tarifftypes table', 'danger');
}
