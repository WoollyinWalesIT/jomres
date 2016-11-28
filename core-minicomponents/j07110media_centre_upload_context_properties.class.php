<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j07110media_centre_upload_context_properties
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        // We will check to see if this user can upload property images
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!$thisJRUser->userIsManager) {
            return;
        }

        $upload_context = jomresGetParam($_REQUEST, 'upload_context', 'properties');

        $arr = array();
        $arr [ 'resource_type_gathering_trigger'] = '03379';
        $arr [ 'resource_id_gathering_trigger'] = '03381';
        $arr [ 'post_upload_processing_trigger'] = '03382';
        $arr [ 'get_existing_images_trigger'] = '03383';
        $arr [ 'allowed_file_types'] = '(jpe?g|png)';
        $arr [ 'upload_root_abs_path'] = JOMRES_IMAGELOCATION_ABSPATH.getDefaultProperty().JRDS;
        $arr [ 'upload_root_rel_path'] = JOMRES_IMAGELOCATION_RELPATH.getDefaultProperty().'/';
        $arr [ 'resource_subdirectories_used'] = true;
        $arr [ 'url_context'] = '&upload_context='.$upload_context;
        $arr [ 'context'] = $upload_context;
        $arr [ 'upload_context_title'] = jr_gettext('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY', '_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY');

        $this->ret_vals ['properties'] = $arr;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
