<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.3
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000show_license_message
{
    public function __construct($componentArgs)
    {
        jr_import('minicomponent_registry');
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        $this->retVals = '';
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }
        if (defined('LICENSE_EXPIRED_MESSAGE')) {
            $this->retVals = LICENSE_EXPIRED_MESSAGE;
        } else {
            $this->retVals = '';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
