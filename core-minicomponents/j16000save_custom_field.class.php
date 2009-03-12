<?php
/**
#
 * Mini-component core file: Saves Optional Extra details
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

class j16000save_custom_field {
	function j16000save_custom_field()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}

		$uid				= intval(jomresGetParam( $_REQUEST, 'uid', 0 ));
		$fieldname				= jomresGetParam( $_REQUEST, 'fieldname', '' );
		$default_value 		= jomresGetParam( $_REQUEST, 'default_value', '' );
		$description 		= jomresGetParam( $_REQUEST, 'description', '' );
		$required			= intval(jomresGetParam( $_REQUEST, 'required', 0 ));

		$fieldname=ereg_replace("[^A-Za-z0-9]", "", $fieldname);
		
		$custom_fields = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();

		if (array_key_exists($uid,$allCustomFields) )
			$query = "UPDATE #__jomres_custom_fields SET fieldname='".$fieldname."',default_value='".$default_value."',`description`='".$description."',required=".$required." WHERE uid = ".$uid;
		else
			$query = "INSERT INTO #__jomres_custom_fields (`fieldname`,`default_value`,`description`,`required`) VALUES ( '".$fieldname."','".$default_value."','".$description."','".$required."')";
		$result = doInsertSql($query,'');

		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=listCustomFields"), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>