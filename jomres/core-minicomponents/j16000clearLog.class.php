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
		global $jrConfig,$jomresConfig_absolute_path,$jomresConfig_absolute_path,$logFiles;
		$jomres_systemLog_path=$jomresConfig_absolute_path.$jrConfig['jomres_systemLog_path'];
		$logfile = jomresGetParam( $_REQUEST, 'logfile',	'' );
		if (file_exists($jomres_systemLog_path.$logFiles[$logfile]) && is_writable($jomres_systemLog_path.$logFiles[$logfile]) )
			{
			if (unlink ($jomres_systemLog_path.$logFiles[$logfile]) )
				$msg= "Deleted";
			else
				$msg= "Not deleted. Check that the web server can has write access";
			}
		jomresRedirect( "index2.php?option=com_jomres&task=listLogs", $msg);
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}