<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000cronjobs
	{
	function __construct()
		{
		$jomresConfig_secret = get_showtime( 'secret' );
		$secret              = base64_decode(jomresGetParam( $_REQUEST, "secret", "" ));
		
		if ( $secret == $jomresConfig_secret )
			{
			jr_import( 'jomres_cron' );
			$cron = new jomres_cron();
			if ( $cron->method == "Cron" )
				{
				$cron->triggerJobs();
				$cron->displayDebug();
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return array ( 'filepath' => $this->filepath, 'gatewayname' => $this->gatewayname );
		}
	}
