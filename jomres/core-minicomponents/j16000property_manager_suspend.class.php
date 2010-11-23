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

class j16000property_manager_suspend {
	function j16000property_manager_suspend()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$id				= intval(jomresGetParam( $_REQUEST, 'userid', 0 ));

		jr_import('jomres_suspensions');
		$jomres_suspensions=new jomres_suspensions();
		$jomres_suspensions->set_manager_id($id);
		$jomres_suspensions->suspend_manager();
		$jomres_suspensions->unpublish_managers_properties();

		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=managers_choose"), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>