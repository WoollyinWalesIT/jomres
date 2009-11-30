<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################




class j06000cronjobs
	{
	function j06000cronjobs ()
		{
		$jomresConfig_secret = get_showtime('secret');
		$secret = jomresGetParam($_REQUEST,"secret","");
		if ($secret == $jomresConfig_secret)
			{
			jr_import('jomres_cron');
			$cron = new jomres_cron();
			if ($cron->method == "Cron")
				{
				$cron->triggerJobs();
				$cron->displayDebug();
				}
			}
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return array('filepath'=>$this->filepath,'gatewayname'=>$this->gatewayname);
		}		
	}
	
?>