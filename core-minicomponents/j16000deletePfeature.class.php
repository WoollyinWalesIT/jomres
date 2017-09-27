<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.12
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000deletePfeature
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
		
        $ids = jomresGetParam($_POST, 'idarray', array());
        
		if (is_array($ids) && !empty($ids)) {
			$messages = $jomres_property_features->delete_property_features($ids);
			
			if ($messages != '') {
				echo $messages;
			}
		}
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listPfeatures'), jr_gettext('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', false));
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
