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

$query = "TRUNCATE TABLE `#__jomres_images`;";

if (doInsertSql($query)) {
	$this->siteConfig->update_setting('images_imported_to_db', '0');
} else {
	$this->setMessage('Error, unable to truncate #__jomres_images table', 'danger');
}

jr_import('jomres_media_centre_images_dbimport');

$jomres_media_centre_images_dbimport = new jomres_media_centre_images_dbimport(array(1), true);

if ($jomres_media_centre_images_dbimport->run()) {
	$this->siteConfig->update_setting('images_imported_to_db', '1');
} else {
	$this->setMessage('Error, unable to insert image details to database', 'danger');
}
