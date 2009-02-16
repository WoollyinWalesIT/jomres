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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000removeplugin
	{
	function j16000removeplugin()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site;
		$debugging=false;
		$pluginName=jomresGetParam( $_REQUEST, 'plugin', '' );
		if ($pluginName == "subsc<x>riptions")
			$pluginName = "subscriptions";
		if (dropPlugin($pluginName))
			echo "Plugin removed";
		else
			echo "Plugin could not be removed";
		
		$registry = new minicomponent_registry(false);
		$registry->regenerate_registry();
		
		if (!$debugging) jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."&task=showplugins");
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

