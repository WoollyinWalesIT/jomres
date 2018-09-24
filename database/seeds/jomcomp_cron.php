<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.13.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "TRUNCATE TABLE `#__jomcomp_cron`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomcomp_cron table', 'danger');
	
	return;
}

$jomres_cron = jomres_singleton_abstract::getInstance('jomres_cron');

$jomres_cron->addJob('session_files_cleanup', 'D', '');
$jomres_cron->addJob('error_logs_cleanup', 'D', '');
$jomres_cron->addJob('geolocation_cleanup', 'D', '');
$jomres_cron->addJob("api_tokens_cleanup","D","");
$jomres_cron->addJob('version_check', 'D', '');
$jomres_cron->addJob('booking_data_archive_cleanup', 'D', '');
$jomres_cron->addJob('gdpr_cleanup', 'D', '');

