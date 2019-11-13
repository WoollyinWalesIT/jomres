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


// https://github.com/WoollyinWalesIT/jomres/issues/272

$query = "TRUNCATE TABLE `#__jomres_oauth_access_tokens`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_oauth_access_tokens table', 'danger');
	
	return;
}
