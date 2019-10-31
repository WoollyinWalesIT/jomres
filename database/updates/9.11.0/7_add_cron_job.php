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

$jomres_cron = jomres_singleton_abstract::getInstance('jomres_cron');
$jomres_cron->addJob('booking_data_archive_cleanup', 'D', '');
$jomres_cron->addJob('gdpr_cleanup', 'D', '');
