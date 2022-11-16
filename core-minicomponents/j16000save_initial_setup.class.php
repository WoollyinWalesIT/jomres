<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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

class j16000save_initial_setup
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

		$this->siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$this->jrConfig = $this->siteConfig->get();

		$config_last_modified = 0;

		if (isset($_REQUEST['step'])) {
			switch ($_REQUEST['step']) {
				case 'initial_setup_step_1':
					$this->siteConfig->set_setting('collect_analytics_allowed', (int)$_REQUEST['collect_analytics_allowed']);
					$this->siteConfig->set_setting('initial_setup_step_1_completed', 1);

					break;
				case 'initial_setup_step_2':
					$this->siteConfig->set_setting('is_single_property_installation', (int)$_REQUEST['is_single_property_installation']);
					$this->siteConfig->set_setting('initial_setup_step_2_completed', 1);
					break;
				case 'initial_setup_step_3':
					$setting = '';
					if ((int)$_REQUEST['bootstrap_version'] == '2') {
						$setting = ''; // The first template set, back in 2011, didn't include the version although later versions do
					} else {
						$setting = (string)(int)$_REQUEST['bootstrap_version'];
					}
					$this->siteConfig->set_setting('bootstrap_version', $setting);
					$this->siteConfig->set_setting('initial_setup_step_3_completed', 1);
					break;
			}
		}

		$this->siteConfig->save_config();
/*		do {
			sleep(1); // Writing the file could take a moment
			clearstatcache();
			$config_last_modified = filemtime($this->siteConfig->config_file);
		} while ( $config_last_modified <= $this->siteConfig->config_last_modified);

		sleep(2);*/

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=initial_setup'), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
