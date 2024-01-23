<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
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

class j06000webhooks_core_documentation
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
	 
	function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array (
				"task" => "webhooks_core_documentation",
				"info" => "_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS",
				"arguments" => array ()
				);
			return;
		}
		$ePointFilepath=get_showtime('ePointFilepath');
		
		$ePointLiveSite=get_showtime('eLiveSite')."/templates/".find_plugin_template_directory()."/";
		$path = JOMRES_TEMPLATEPATH_BACKEND;
		$output = array();
		$pageoutput = array();
		
		$output['EPOINTLIVESITE'] = $ePointLiveSite;
		$output['CONTENTS'] = file_get_contents($path.JRDS."webhook_api_documentation_contents.html");
		$methods =  file_get_contents($path.JRDS."webhook_api_doc.html");
		
		$output['CONTENTS'] = str_replace("[METHODS]", $methods, $output['CONTENTS']);
		$output['CONTENTS'] = str_replace("[LIVE_SITE]", get_showtime("live_site"), $output['CONTENTS']);

		$output['SIDEBAR'] = file_get_contents($path.JRDS."webhook_api_documentation_sidebar.html");

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot($path);
		$tmpl->readTemplatesFromInput('webhook_api_documentation_index.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}




	function getRetVals()
	{
		return null;
	}
}
