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
$jomres_cron->addJob('syndication_get_syndicate_domains', 'D', '');
$jomres_cron->addJob('syndication_get_syndicate_properties', 'M', '');
$jomres_cron->addJob('syndication_check_syndicate_domains', 'QH', '');
$jomres_cron->addJob('syndication_check_syndicate_properties', 'QH', '');
