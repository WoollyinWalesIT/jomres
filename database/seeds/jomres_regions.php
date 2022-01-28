<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.3
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
$query = "TRUNCATE TABLE `#__jomres_regions`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_regions table', 'danger');
	
	return;
}

import_regions();
