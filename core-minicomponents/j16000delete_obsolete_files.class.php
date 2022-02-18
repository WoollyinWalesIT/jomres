<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
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

class j16000delete_obsolete_files
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
		
		jr_import('jomres_obsolete_file_handling');
		$obsolete_files = new jomres_obsolete_file_handling();

		if ($obsolete_files->remove_obsolete_files()) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=obsolete_files_check'), '');
		} else {
			echo 'Could not delete obsolete files, please do ti manually.';
		}
	}

   //Must be included in every mini-component.
	public function getRetVals()
	{
		return null;
	}
}
