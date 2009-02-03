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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * remote availability
 #
* @package Jomres
#
 */
class j00012managelogs {
	/**
	#
	 * remote availability
	#
	 */
	function j00012managelogs()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$maxFileSize=1024*1024;
		$logFiles=array('system'=>'jomres_system_log.xml','request'=>'jomres_request_log.xml','gateway'=>'jomres_gateway_log.xml','booking'=>'jomres_booking_log.xml','error'=>'jomres_error_log.xml','jrportalquery'=>'jrportalquery_log.xml');
		$jomres_systemLog_path=JOMRES_SYSTEMLOG_PATH;
		foreach ($logFiles as $file)
			{
			//echo $jomres_systemLog_path.$file;exit;
			if (file_exists($jomres_systemLog_path."/".$file) )
				{
				$size=filesize ($jomres_systemLog_path."/".$file);
				if ($size > $maxFileSize)
					{
					$newFileName=date("U").'_'.$file;
					rename($jomres_systemLog_path."/".$file,$jomres_systemLog_path."/".$newFileName);
					}
				}
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 */
	function getRetVals()
		{
		return null;
		}
	}

?>