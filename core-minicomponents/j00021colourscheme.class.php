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
	 * Loads the appropriate Jomres specific css files for the configured version of Bootstrap.
	 *
	 */

class j00021colourscheme
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

		if (!using_bootstrap()) {
			if (!this_cms_is_wordpress()) {
				$css_file = 'jomrescss.css';
			} else {
				$css_file = 'jomrescss_wordpress.css';
			}
		} else {
			if (jomres_cmsspecific_areweinadminarea()) {
				switch (_JOMRES_DETECTED_CMS) {
					case 'joomla4':
						$css_file = 'jomrescss_bootstrap5.css';
						break;
					default:
						$css_file = 'jomrescss_bootstrap.css';
						break;
				}
			} else {
				switch (jomres_bootstrap_version()) {
					case '2':
						$css_file = 'jomrescss_bootstrap.css';
						break;
					case '3':
						$css_file = 'jomrescss_bootstrap3.css';
						break;
					case '4':
						$css_file = 'jomrescss_bootstrap4.css';
						break;
					case '5':
						$css_file = 'jomrescss_bootstrap5.css';
						break;
					default:
						$css_file = 'jomrescss_bootstrap.css';
						break;
				}
			}
		}

        $override_directory = get_override_directory().'custom_code'.JRDS;

        if (file_exists( $override_directory.JRDS.$css_file)) {
            jomres_cmsspecific_addheaddata('css', jomres_get_relative_path_to_file($override_directory).'/', $css_file);
        } else {
            jomres_cmsspecific_addheaddata('css', JOMRES_CSS_RELPATH, $css_file);
        }
	}

	//Must be included in every mini-component.
	public function getRetVals()
	{
		return null;
	}
}
