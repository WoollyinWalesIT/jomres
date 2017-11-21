<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j99999live_scrolling_javascript
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        if (AJAXCALL) {
            $endrun_javascript_for_eval_by_live_scrolling = get_showtime('endrun_javascript_for_eval_by_live_scrolling');

            if (!empty($endrun_javascript_for_eval_by_live_scrolling) && get_showtime('task') == 'ajax_list_properties') {
                $javascript = '^';

                foreach ($endrun_javascript_for_eval_by_live_scrolling as $js) {
                    $javascript .= $js;
                }
                echo $javascript;
            }
        }
    }

    public function getRetVals()
    {
        return null;
    }
}
