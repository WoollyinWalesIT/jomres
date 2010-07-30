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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000rebuildregistry
	{
	function j16000rebuildregistry()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		jr_import('minicomponent_registry');
		$registry = new minicomponent_registry(true);
		$registry->regenerate_registry();
		if ($registry->error_detected)
			echo _JOMRES_REGISTRYREBUILD_FAILURE;
		else
			echo _JOMRES_REGISTRYREBUILD_SUCCESS;
		echo "<br/>";
		echo _JOMRES_REGISTRYREBUILD_NOTES;
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

