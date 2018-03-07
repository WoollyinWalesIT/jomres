<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "TRUNCATE TABLE `#__jomresportal_properties_crates_xref`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomresportal_properties_crates_xref table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomresportal_properties_crates_xref` (`id`, `property_id`, `crate_id`) VALUES
(1, 1, 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomresportal_properties_crates_xref table', 'danger');
}
