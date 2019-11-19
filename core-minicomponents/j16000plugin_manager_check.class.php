<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
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
		foreach ( get_loaded_extensions() as $number => $extension_name ) { 
			if ( (strpos( strtolower($extension_name) , "ioncube" )) === false)  { 
				// do nothing 
			} else { 
				$ioncube_found = true; 
			} 
		} 
		
		
		$this->retVals = '';

		if ( !file_exists(JOMRES_COREPLUGINS_ABSPATH.'plugin_manager'.JRDS.'plugin_info.php') ) {
			if (isset($componentArgs[ 'output_now' ])) {
				$output_now = $componentArgs[ 'output_now' ];
			} else {
				$output_now = true;
			}
			
			$output = array();
			$pageoutput = array();
			
			if ($ioncube_found) {
				$output['INTRO'] = 'The Plugin Manager is required to install and use Jomres plugins. If you do not intend to install any plugins then do not install the manager.';
				
				$output['MESSAGE'] = 'The Plugin Manager is not installed, you must install it through the Plugin Manager page to use Jomres Core plugins or install third party plugins. You do not need a Jomres license to install third party plugins.';

				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('plugin_manager_warning.html');
			} else {
				$output['INTRO'] = 'The Plugin Manager is required to install and use Jomres plugins. If you do not intend to install any plugins then do not install the manager.';
				
				$output['MESSAGE'] = 'The Plugin Manager is not installed, however the ioncube loaders do not appear to be installed on this server. If you have a <a href="https://www.jomres.net/pricing" target="_blank">one-off license for Jomres</a>, that is not a problem, save your license key in Settings > Site Configuration, if you haven\'t done so already and go ahead and install the manager. <a href="https://www.jomres.net/manual/60-jomres-manual/intro/383-jomres-licensing-explained#one-off-licenses" target="_blank"> The unencoded version</a> of the plugin manager will be installed.<br/><br/> ';

				$output['MESSAGE2'] = 'If you attempt to install the plugin manager without the loaders installed, you will not be able to use Jomres at all until you manually delete the files in /jomres/core-plugins/plugin_manager and delete the contents of the /jomres/temp/ directory. In many cases you can install the ioncube loaders through your cPanel php settings area, but if you can\'t or if you are in any doubt, please contact your hosting service who will be able to talk you through the process.';
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
