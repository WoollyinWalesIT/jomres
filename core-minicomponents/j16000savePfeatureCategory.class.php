<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.15
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000savePfeatureCategory
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

		$jomres_property_features_categories = jomres_singleton_abstract::getInstance('jomres_property_features_categories');
		
        $jomres_property_features_categories->id = (int)jomresGetParam($_POST, 'id', 0);
        $jomres_property_features_categories->title = jomresGetParam($_POST, 'title', '');
		
		if ($jomres_property_features_categories->title != '') {
			if ($jomres_property_features_categories->id > 0) {
				$jomres_property_features_categories->commit_update_property_features_category();
			} else {
				$jomres_property_features_categories->commit_new_property_features_category();
			}
		} else {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeatureCategory'), 'Please enter a category title');
		}

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listPfeaturesCategories'), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
