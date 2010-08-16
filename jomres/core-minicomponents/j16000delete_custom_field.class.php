<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000delete_custom_field 
	{
	function j16000delete_custom_field()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		
		$uid		= intval(jomresGetParam( $_REQUEST, 'uid', 0 ));
		
		if ($uid>0)
			{
			$query = "DELETE FROM #__jomres_custom_fields WHERE `uid`= '".$uid."'";
			$result = doInsertSql($query,'');

			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listCustomFields'), "" );
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>