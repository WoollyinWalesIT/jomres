<?php
/**
#
 * Mini-component : Includes the cron class and triggers any cron jobs
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################




class j06000cronjobs
	{
	function j06000cronjobs ()
		{
		global $ePointFilepath,$jomresConfig_secret;
		$secret = jomresGetParam($_REQUEST,"secret","");
		if ($secret == $jomresConfig_secret)
			{
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