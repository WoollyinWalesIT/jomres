<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j16000plugin_manager_check
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

			return;
		}
		
		$ioncube_found = false;
		if (extension_loaded('ionCube Loader') == true) {
			$ioncube_found = true;
		} else {
			foreach (get_loaded_extensions() as $number => $extension_name) {
				if ((strpos(strtolower($extension_name), "ioncube")) === false) {
					// do nothing
				} else {
					$ioncube_found = true;
				}
			}
		}

		
		$this->retVals = '';

		if (!file_exists(JOMRES_COREPLUGINS_ABSPATH.'plugin_manager'.JRDS.'plugin_info.php')) {
			if (isset($componentArgs[ 'output_now' ])) {
				$output_now = $componentArgs[ 'output_now' ];
			} else {
				$output_now = true;
			}
			
			$output = array();
			$pageoutput = array();
			
			if ($ioncube_found) {
				/*$output['INTRO'] = 'The Plugin Manager is required to install and use Jomres plugins. If you do not intend to install any plugins then do not install the manager.';

				$output['MESSAGE'] = 'The Plugin Manager is not installed, you must install it through the Plugin Manager page to use Jomres Core plugins or install third party plugins. You do not need a Jomres license to install third party plugins.';

				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('plugin_manager_warning.html');*/

				return '';
			} else {
				$output['INTRO'] = 'Ioncube loaders are not installed on this system.';
				
				$output['MESSAGE'] = 'Ioncube loaders are required to be installed to download plugins or connect to the Jomres Platform. You do NOT need the plugin manager to use Jomres Core. <strong>Without plugins the Core system is still a functional booking system</strong>, but you will not be able to install any plugins.';

				$output['MESSAGE2'] = 'If you attempt to install the plugin manager without the loaders installed, you will not be able to use Jomres at all until you manually delete the files in /jomres/core-plugins/plugin_manager and delete the contents of the /jomres/temp/ directory. In many cases you can install the ioncube loaders through your cPanel php settings area, but if you can\'t or if you are in any doubt, please contact your hosting service who will be able to talk you through the process. <strong>If you have an older (Essential one-off, Developer, Developer Renewal or Lifetime) license you do not need the loaders to install the plugin manager.</strong>';

				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('plugin_manager_no_ioncube.html');
			}

			if ($output_now) {
				$tmpl->displayParsedTemplate();
			} else {
				$this->retVals = $tmpl->getParsedTemplate();
			}
		}
	}

	
	

	public function getRetVals()
	{
		return $this->retVals;
	}
}
