<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000new_manager_api_key
	{
	function j16000new_manager_api_key()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$userid = jomresGetParam( $_REQUEST, 'id', 0 );
		if ($userid > 0)
			{
			$apikey=createNewAPIKey();
			$query = "UPDATE #__jomres_managers SET `apikey`='".$apikey."' WHERE userid = ".$userid;
			if (doInsertSql($query,'') )
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=editProfile&id=".(int)$userid,_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE );
			else
				echo "Erm looks like an sql failure, couldn't update the Manager's API key";
			}
		
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}