<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j99999handlereq_javascript
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $mrConfig = getPropertySpecificSettings();

        if (AJAXCALL && get_showtime('task') == 'handlereq' && $mrConfig[ 'booking_form_rooms_list_style' ] == '1') {
            $endrun_javascript_for_eval_by_handlereq = get_showtime('endrun_javascript_for_eval_by_handlereq');

            if (count($endrun_javascript_for_eval_by_handlereq) > 0) {
                $javascript = '';
                foreach ($endrun_javascript_for_eval_by_handlereq as $js) {
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
