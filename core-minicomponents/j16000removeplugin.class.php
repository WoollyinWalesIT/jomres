<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000removeplugin
	{
	function j16000removeplugin()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$debugging  = false;
		$pluginName = jomresGetParam( $_REQUEST, 'plugin', '' );
		if ( $pluginName == "subsc<x>riptions" ) $pluginName = "subscriptions";
		if ( !dropPlugin( $pluginName ) ) echo "Plugin could not be removed";

		jr_import( 'minicomponent_registry' );
		$registry = new minicomponent_registry( false );
		$registry->regenerate_registry();

		if ( !$debugging ) jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN . "&task=showplugins#" . $pluginName );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

