<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000savePfeature
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

		$jomres_property_features = jomres_singleton_abstract::getInstance('jomres_property_features');
		
        $jomres_property_features->id					= (int)jomresGetParam($_POST, 'id', 0);
        $jomres_property_features->abbv					= jomresGetParam($_POST, 'feature_abbv', '');
        $jomres_property_features->desc					= jomresGetParam($_POST, 'feature_description', '');
        $jomres_property_features->ptype_xref			= jomresGetParam($_POST, 'ptype_ids', array());
        $jomres_property_features->image				= jomresGetParam($_POST, 'image', '');
        $jomres_property_features->cat_id				= (int) jomresGetParam($_POST, 'cat_id', 0);
		$jomres_property_features->include_in_filters	= (int) jomresGetParam($_POST, 'include_in_filters', 0);
		
		if ($jomres_property_features->abbv != '') {
			if ($jomres_property_features->id == 0) {
				$jomres_property_features->commit_new_property_feature();
			} else {
				$jomres_property_features->commit_update_property_feature();
			}
		} else {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeature&id=' . $jomres_property_features->id), '');
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listPfeatures'), jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', false));
    }

    // This must be included in every Event/Mini-component
	public function getRetVals()
    {
        return null;
    }
}
