<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000clearLog
	{
	function j16000clearLog()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig,$logFiles;
		$logfile = jomresGetParam( $_REQUEST, 'logfile',	'' );
		echo "Attempting to delete ".JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]."<br/>";
		if (file_exists(JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]) && is_writable(JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]) )
			{
			if (unlink (JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]) )
				$msg= "Deleted";
			else
				$msg= "Not deleted. Check that the web server can has write access";
			}
		echo $msg;
		jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=showLog&logfile=".$logfile, $msg);
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}