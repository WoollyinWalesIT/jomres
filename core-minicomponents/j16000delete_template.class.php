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

class j16000delete_template 
	{
	function j16000delete_template()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		
		$templatename		= jomresGetParam( $_REQUEST, 'templatename', '' );

		$query = "DELETE FROM  #__jomres_custom_templates WHERE `template_name`= '".$templatename."'";
		$result = doInsertSql($query,'');
		
		if ($templatename=="jomrescss.css")
			unlink(JOMRESPATH_BASE.JRDS."temp".JRDS."jomrescss.css");
		
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listTemplates'), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>