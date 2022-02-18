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

class j16000save_property_category
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

		$jomres_property_categories = jomres_singleton_abstract::getInstance('jomres_property_categories');
		
		$jomres_property_categories->id = (int)jomresGetParam($_POST, 'id', 0);
		$jomres_property_categories->title = jomresGetParam($_POST, 'title', '');
		$jomres_property_categories->description = jomresGetParam($_POST, 'description', '');
		
		if ($jomres_property_categories->title != '') {
			if ($jomres_property_categories->id > 0) {
				$jomres_property_categories->commit_update_property_category();
			} else {
				$jomres_property_categories->commit_new_property_category();
			}
		} else {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_property_category'), 'Please enter a category title');
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_categories'), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
