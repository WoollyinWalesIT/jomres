<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000removeplugin
	{
	function __construct()
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

		$registry = jomres_singleton_abstract::getInstance( 'minicomponent_registry' );
		$registry->regenerate_registry();

		if ( !$debugging ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=showplugins#" . $pluginName ) );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

