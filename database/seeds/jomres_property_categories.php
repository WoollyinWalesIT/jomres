<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "TRUNCATE TABLE `#__jomres_property_categories`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_property_categories table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_property_categories` (`id`, `title`, `description`) VALUES
(1, 'Vacation Rentals', 'This is the rentals category description'),
(2, 'Tours', 'This is the tours category description'),
(3, 'Long Term Rentals', 'Long term rentals category description'),
(4, 'Real Estate', 'Real estate category description');
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_property_categories table', 'danger');
}
