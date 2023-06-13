<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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
	 * Defines common language strings that can be used in any patTemplate template file without having been first set in the script calling the template file. The main purpose of this was to make it possible for third party plugin developers to create their own language definitions that could be used anywhere in their template files, if so required.
	 *
	 */

class j00005x_custom_css_template
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

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (AJAXCALL) {
			return;
		}

		if (defined('JOMRES_API_CMS_ROOT')) {
			return;
		}

		if (!this_cms_is_wordpress()) {
			return;
		}

		if ( $jrConfig['bootstrap_version'] != '0') { // It's wordpress that doesn't use a bootstrap theme
			return;
		}

		if (defined('WORDPRESS_NON_BOOTSTRAP_TWEAKS')) {
			//set_showtime('wordpress_non_bootstrap_tweaks' ,  '' );
			return;
		}



		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('wordpress_non_bootstrap_tweaks.html');
		$parsed_template =  $tmpl->getParsedTemplate();
		define('WORDPRESS_NON_BOOTSTRAP_TWEAKS' , $parsed_template );
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
