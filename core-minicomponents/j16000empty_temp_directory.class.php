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

class j16000empty_temp_directory
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


		$this->filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem', JOMRESCONFIG_ABSOLUTE_PATH)->getFilesystem();
	
		if ($this->filesystem->deleteDir('local://'.str_replace(JOMRESCONFIG_ABSOLUTE_PATH, '', JOMRES_TEMP_ABSPATH))) {
			if ($this->filesystem->createDir('local://'.str_replace(JOMRESCONFIG_ABSOLUTE_PATH, '', JOMRES_TEMP_ABSPATH))) {
				echo jr_gettext("EMPTY_TEMP_DIR_DONE", "EMPTY_TEMP_DIR_DONE", false);
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
