<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.18
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000rebuildregistry
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
        $registry->regenerate_registry();

        if (!using_bootstrap()) {
            if ($registry->error_detected) {
                echo jr_gettext('_JOMRES_REGISTRYREBUILD_FAILURE', '_JOMRES_REGISTRYREBUILD_FAILURE', false);
            } else {
                echo jr_gettext('_JOMRES_REGISTRYREBUILD_SUCCESS', '_JOMRES_REGISTRYREBUILD_SUCCESS', false);
            }
            echo '<br />';
            echo jr_gettext('_JOMRES_REGISTRYREBUILD_NOTES', '_JOMRES_REGISTRYREBUILD_NOTES', false);
        } else {
            if ($registry->error_detected) {
                echo '
				<div class="alert alert-block alert-error">
					<h4 class="alert-heading">' .jr_gettext('_JOMRES_REGISTRYREBUILD_FAILURE', '_JOMRES_REGISTRYREBUILD_FAILURE', false).'</h4>
					<p>' .jr_gettext('_JOMRES_REGISTRYREBUILD_NOTES', '_JOMRES_REGISTRYREBUILD_NOTES', false).'</p>
				</div>
				';
            } else {
                echo '
				<div class="alert alert-block alert-success">
					<h4 class="alert-heading">' .jr_gettext('_JOMRES_REGISTRYREBUILD_SUCCESS', '_JOMRES_REGISTRYREBUILD_SUCCESS', false).'</h4>
					<p>' .jr_gettext('_JOMRES_REGISTRYREBUILD_NOTES', '_JOMRES_REGISTRYREBUILD_NOTES', false).'</p>
				</div>
				';
            }
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
