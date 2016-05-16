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

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class logging 
	{
	public function __construct()
		{
		}
	
	public static function log_message ( $message )
		{
		$logger = new Logger('api');
		$logger->pushHandler(new StreamHandler('../temp/monolog/jomres_api.log', Logger::DEBUG));
		$logger->addInfo(TRANSACTION_ID." ".$message);
		}
	}