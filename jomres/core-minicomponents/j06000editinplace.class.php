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


class j06000editinplace 
	{
	function j06000editinplace()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig;
		$property_uid=(int)getDefaultProperty();
		if ($jrConfig['allowHTMLeditor'] == "1")
			{
			$customText = jomresGetParam( $_POST, 'newtext', "" , _MOS_ALLOWHTML );
			$theConstant = jomresGetParam( $_POST, 'theConstant', '' );
			}
		else
			{
			$customText = jomresGetParam( $_POST, 'newtext', '','string' );
			$theConstant = jomresGetParam( $_POST, 'theConstant', '' );
			}
		$result=updateCustomText($theConstant,$customText,$property_uid);
		if ($result)
			echo $customText;
		else
			echo "Something burped";
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>