<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
 *
 * @copyright	2005-2020 Vince Wooll
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

		if ( !isset($this->jrConfig["initial_setup_step_1_completed"]) || $this->jrConfig["initial_setup_step_1_completed"] == "0" ) {

			$output['INTRO'] = 'Can we collect information about how you use Jomres?';

			$output['MESSAGE'] = 'We would like to collect information about how you use Jomres. No personally identifyable information will be stored, usage will be anonymised and only used to help us to understand how people use Jomres.';

			$output['ACCEPT'] = " Yep, that's ok ";
			$output['DENY'] = " No, I don't agree ";

			$output['STEP'] = 'initial_setup_step_1';

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('initial_setup_step_1.html');
			$tmpl->displayParsedTemplate();
			return;
		}

		if ( !isset($this->jrConfig["initial_setup_step_2_completed"]) || $this->jrConfig["initial_setup_step_2_completed"] == "0" ) {

			$output['INTRO'] = 'Will you be taking bookings for more than one property?';

			$output['MESSAGE'] = 'Jomres can be used for single or multi-property sites. If you will be taking bookings for just one property then many options will be redundant and potentially confusing. You can change this setting later in the Settings > Site Configuration > Portal functionality tab.';

			$output['SINGLE'] = " Just one property ";
			$output['MULTIPLE'] = " I will be listing more than one property ";

			$output['STEP'] = 'initial_setup_step_2';

			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('initial_setup_step_2.html');
			$tmpl->displayParsedTemplate();
			return;

		}


		// All done,
		$this->siteConfig->update_setting('initial_setup_done', 1 );
		$this->siteConfig->save_config();
		do {
			sleep(1); // Writing the file could take a moment
			clearstatcache();
			$config_last_modified = filemtime($this->siteConfig->config_file);
		} while ( $config_last_modified <= $this->siteConfig->config_last_modified);

		sleep(2);

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN ), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
