<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
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
	 *
	 */

class j16000jomres_update_check
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

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}
		$this->retVals = '';

		$this_version = get_jomres_current_version();
		$latest_version = get_latest_jomres_version();

		if (empty($latest_version)) {
			$this->retVals = false;
		} else {
			$current_version_is_uptodate = check_jomres_version();

			if (!$current_version_is_uptodate) {
				$output = array();
				$pageoutput = array();

				$output[ 'JOMRES_UPDATE_URL' ] = JOMRES_SITEPAGE_URL_ADMIN.'&task=updates';
				$output[ 'JOMRES_UPDATE_MESSAGE_TITLE' ] = jr_gettext('JOMRES_UPDATE_MESSAGE_TITLE', 'JOMRES_UPDATE_MESSAGE_TITLE', false);
				$output[ 'JOMRES_UPDATE_MESSAGE_MESSAGE' ] = jr_gettext('JOMRES_UPDATE_MESSAGE_MESSAGE', 'JOMRES_UPDATE_MESSAGE_MESSAGE', false);
				$output[ 'JOMRES_UPDATE_MESSAGE_LINK' ] = jr_gettext('JOMRES_UPDATE_MESSAGE_LINK', 'JOMRES_UPDATE_MESSAGE_LINK', false);

				$pageoutput[] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('jomres_update_check.html');

				if ($output_now) {
					$tmpl->displayParsedTemplate();
				} else {
					$this->retVals = $tmpl->getParsedTemplate();
				}
				$this->retVals = true;
			} else {
				$this->retVals = false;
			}
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
