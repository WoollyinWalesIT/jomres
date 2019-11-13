<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002save_business_settings
{
	public function __construct($componentArgs)
	{

		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$property_uid = (int)getDefaultProperty();
		
		if ($property_uid > 0) {
			savePropertyConfiguration();
		}
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL."&task=business_settings&property_uid=$property_uid"), '');
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
