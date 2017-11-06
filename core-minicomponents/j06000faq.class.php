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

class j06000faq
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $this->retVals = '';

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $kb = jomres_singleton_abstract::getInstance('jomres_knowledgebase');

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if ($thisJRUser->userIsManager) {
            if ($output_now) {
                echo $kb->get_manager_faq();
            } else {
                $this->retVals = $kb->get_manager_faq();
            }
        } else {
            if ($output_now) {
                echo $kb->get_guest_faq();
            } else {
                $this->retVals = $kb->get_guest_faq();
            }
        }
    }

    public function getRetVals()
    {
        return $this->retVals;
    }
}
