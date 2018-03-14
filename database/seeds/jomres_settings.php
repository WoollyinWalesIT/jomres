<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "TRUNCATE TABLE `#__jomres_settings`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_settings table', 'danger');
	
	return;
}

include JOMRESPATH_BASE.JRDS.'jomres_config.php';

$clause = '';

foreach ($mrConfig as $k => $v) {
	$clause .= "(0, '".$k."', '".$v."'), ";
}

$clause = rtrim($clause, ', ');

$query = "INSERT INTO `#__jomres_settings` (`property_uid`, `akey`, `value`) VALUES $clause";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert default property settings in the #__jomres_settings table', 'danger');
}
