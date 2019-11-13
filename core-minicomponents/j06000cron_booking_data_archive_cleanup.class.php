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

class j06000cron_booking_data_archive_cleanup
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

			$query = "DELETE FROM #__jomres_booking_data_archive WHERE `date` <= DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 59 DAY)";
			doInsertSql($query, '');

	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
