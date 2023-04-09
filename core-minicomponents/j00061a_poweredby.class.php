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
	 * Shows the Powered By link to jomres.net at the bottom of the page.
	 *
	 */

class j00061a_poweredby
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
		if (AJAXCALL) {
			return;
		}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig['show_powered_by'])) {
			$jrConfig['show_powered_by'] = '0';
		}

		$menuoff = get_showtime('menuoff');
		if ($menuoff === true) {
			return;
		}

		if (!defined('JOMRES_TEMPLATEPATH_FRONTEND'))  {
			define('JOMRES_TEMPLATEPATH_FRONTEND', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap5'.JRDS.'frontend');
		}

		if ($jrConfig[ 'show_powered_by' ] == '1') {
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('poweredby.html');
			$tmpl->displayParsedTemplate();
		}
	}

/**
 * Must be included in every mini-component.
 */

	public function getRetVals()
	{
		return null;
	}
}
