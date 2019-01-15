<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000delete_property_category
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$jomres_property_categories = jomres_singleton_abstract::getInstance('jomres_property_categories');
		
		$jomres_property_categories->id = (int)jomresGetParam($_REQUEST, 'id', 0);

		if ($jomres_property_categories->id > 0) {
			if ($jomres_property_categories->delete_property_category()) {
				jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_categories'), 'Category deleted');
			} else {
				jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_categories'), 'Could not delete category, it may still be assigned to some property features');
			}
		}
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_categories'), '');
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
