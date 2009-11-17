<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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
		$MiniComponents =jomres_getSingleton('mcHandler');
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