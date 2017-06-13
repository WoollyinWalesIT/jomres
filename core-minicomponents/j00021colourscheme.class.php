<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.4
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00021colourscheme
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        if (!using_bootstrap()) {
            if (!this_cms_is_wordpress()) {
                $css_file = 'jomrescss.css';
            } else {
                $css_file = 'jomrescss_wordpress.css';
            }
        } else {
            if (jomres_bootstrap_version() == '2' || jomres_cmsspecific_areweinadminarea()) {
                $css_file = 'jomrescss_bootstrap.css';
            } else {
                $css_file = 'jomrescss_bootstrap3.css';
            }
        }

        jomres_cmsspecific_addheaddata('css', JOMRES_CSS_RELPATH, $css_file);
    }

    //Must be included in every mini-component.
    public function getRetVals()
    {
        return null;
    }
}
