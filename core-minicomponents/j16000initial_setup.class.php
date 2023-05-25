<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
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

class j16000initial_setup
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$this->siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$this->jrConfig = $this->siteConfig->get();

		$output = array();
		$pageoutput = array();

		if (!isset($this->jrConfig["initial_setup_step_1_completed"]) || $this->jrConfig["initial_setup_step_1_completed"] == "0") {
			$output['INTRO'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE');

			$output['MESSAGE'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE');

			$output['ACCEPT'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT');
			$output['DENY'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY');

			$output['STEP'] = 'initial_setup_step_1';

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('initial_setup_step_1.html');
			$tmpl->displayParsedTemplate();
			return;
		}

		if (!isset($this->jrConfig["initial_setup_step_2_completed"]) || $this->jrConfig["initial_setup_step_2_completed"] == "0") {
			$output['INTRO'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE');
			$output['MESSAGE'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE');
			$output['SINGLE'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE');
			$output['MULTIPLE'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY');

			$output['STEP'] = 'initial_setup_step_2';

			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('initial_setup_step_2.html');
			$tmpl->displayParsedTemplate();
			return;
		}

		if (!isset($this->jrConfig["initial_setup_step_3_completed"]) || $this->jrConfig["initial_setup_step_3_completed"] == "0") {
			$output['INTRO'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE');
			$output['MESSAGE'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE');

			$output['BS0'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0');
			$output['BS2'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2');
			$output['BS3'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3');
			$output['BS4'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4');
			$output['BS5'] = jr_gettext('_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5', '_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5');

			$output['STEP'] = 'initial_setup_step_3';

			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('initial_setup_step_3.html');
			$tmpl->displayParsedTemplate();
			return;
		}
		// All done,
		$this->siteConfig->update_setting('initial_setup_done', 1);
		$this->siteConfig->save_config();
		do {
			sleep(1); // Writing the file could take a moment
			clearstatcache();
			$config_last_modified = filemtime($this->siteConfig->config_file);
		} while ($config_last_modified <= $this->siteConfig->config_last_modified);

		sleep(2);

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
