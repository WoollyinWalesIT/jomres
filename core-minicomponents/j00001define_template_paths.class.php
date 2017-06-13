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

class j00001define_template_paths
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        if (!isset($jrConfig[ 'bootstrap_version' ])) {
            $jrConfig[ 'bootstrap_version' ] = '';
        }

        if (!defined('JOMRES_TEMPLATEPATH_FRONTEND')) {
            if (!using_bootstrap()) {
                define('JOMRES_TEMPLATEPATH_FRONTEND', JOMRESPATH_BASE.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'frontend');
            } else {
                define('JOMRES_TEMPLATEPATH_FRONTEND', JOMRESPATH_BASE.JRDS.'templates'.JRDS.'bootstrap'.$jrConfig[ 'bootstrap_version' ].JRDS.'frontend');
            }
        }

        if (!defined('JOMRES_TEMPLATEPATH_BACKEND')) {
            if (!using_bootstrap()) {
                define('JOMRES_TEMPLATEPATH_BACKEND', JOMRESPATH_BASE.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'backend');
            } else {
                define('JOMRES_TEMPLATEPATH_BACKEND', JOMRESPATH_BASE.JRDS.'templates'.JRDS.'bootstrap'.$jrConfig[ 'bootstrap_version' ].JRDS.'backend');
            }
        }

        if (!defined('JOMRES_TEMPLATEPATH_ADMINISTRATOR')) {
            if (!using_bootstrap()) {
                define('JOMRES_TEMPLATEPATH_ADMINISTRATOR', JOMRESPATH_BASE.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'administrator');
            } else {
                define('JOMRES_TEMPLATEPATH_ADMINISTRATOR', JOMRESPATH_BASE.JRDS.'templates'.JRDS.'bootstrap'.JRDS.'administrator');
            }
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
