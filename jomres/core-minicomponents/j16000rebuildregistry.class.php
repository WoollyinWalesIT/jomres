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

class j16000rebuildregistry
	{
	function j16000rebuildregistry()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
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

