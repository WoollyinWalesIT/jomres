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

class j16000save_template_override
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$template_overrides = jomres_singleton_abstract::getInstance('template_overrides');
		
		$template_name			= (string) jomresGetParam($_POST, 'template_name', '');
		$template_path			= (string) jomresGetParam($_POST, 'template_path', '');

		// Older template override plugins had templates in the template root. We are extending here to allow copies of the files to exist in bootstrap specific version directories.
		if (!file_exists($template_path.$template_name)) {
			$bs_version = jomres_bootstrap_version();
			if (file_exists(JOMRESPATH_BASE.$template_path."templates".JRDS."bootstrap".$bs_version.JRDS.$template_name)) {
				$template_path = $template_path."templates".JRDS."bootstrap".$bs_version.JRDS;
			}
		}

		$template_overrides->template_overrides[$template_name]['template_name']	= $template_name;
		$template_overrides->template_overrides[$template_name]['path']				= addslashes($template_path);

		$template_overrides->save_template_override($template_name);
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_template_overrides'), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
