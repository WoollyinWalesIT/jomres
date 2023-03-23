<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * The very first minicomponent to be run. Doesn't do anything, but does allow us to check that everything is running.
	 *
	 */

class j00001start
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;


		}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ( (bool) $jrConfig['api_capable'] === true ) {
			if (!$MiniComponents->eventSpecificlyExistsCheck('00005', 'api_feature_cmf')) {
				$MiniComponents->specificEvent('16000', 'addplugin', array('plugin' => 'api_feature_cmf', 'autoupgrade' => true));
			}
			if (!$MiniComponents->eventSpecificlyExistsCheck('00005', 'channelmanagement_framework')) {
				$MiniComponents->specificEvent('16000', 'addplugin', array('plugin' => 'channelmanagement_framework', 'autoupgrade' => true));
			}
		}

	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
	public function getRetVals()
	{
		return null;
	}
}
