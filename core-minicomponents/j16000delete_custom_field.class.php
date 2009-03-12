<?php
/**
#
 * Mini-component core file: 
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

class j16000delete_custom_field 
	{
	function j16000delete_custom_field()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
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