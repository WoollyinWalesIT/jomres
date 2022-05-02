<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000removeplugin
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$debugging = false;
		$pluginName = jomresGetParam($_REQUEST, 'plugin', '');
		if ($pluginName == 'subsc<x>riptions') {
			$pluginName = 'subscriptions';
		}
		if (!dropPlugin($pluginName)) {
			echo 'Plugin could not be removed';
		}

		$registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
		unlink ( $registry->registry_file );
		unlink ( JOMRES_TEMP_ABSPATH.'registry_classes.php' );

		if (!$debugging) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins#'.$pluginName));
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
