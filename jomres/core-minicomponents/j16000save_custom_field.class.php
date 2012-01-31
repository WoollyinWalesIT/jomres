<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000save_custom_field {
	function j16000save_custom_field()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
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

		$fieldname=preg_replace('/[^A-Za-z0-9_-]+/', "", $fieldname);
		
		jr_import('jomres_custom_field_handler');
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