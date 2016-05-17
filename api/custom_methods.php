<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

	Flight::map('json', function($data, $code = 200, $encode = true, $charset = 'utf-8') {
		logging::log_message(' Replied with code '.$code.' and contents '.json_encode($data));
		$json = ($encode) ? json_encode($data) : $data;
		Flight::response()
			->status($code)
			->header('Content-Type', 'application/json; charset='.$charset)
			->write($json)
			->send();
	});
	
 	Flight::map('halt', function($code = 200, $message = '') {
		$message = ' Halted run '.$code.' with message '.$message;
		logging::log_message($message);
		Flight::response()
            ->status($code)
            ->write($message)
            ->send();
	}); 
	
