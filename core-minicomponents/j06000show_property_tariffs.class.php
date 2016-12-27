<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_tariffs
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                'task' => 'show_property_tariffs',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS',
                'arguments' => array(0 => array(
                        'argument' => 'property_uid',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID',
                        'arg_example' => '1',
                        ),
                    ),
                );

            return;
        }
        $this->retVals = '';

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = (int) $componentArgs[ 'property_uid' ];
        } elseif (isset($_REQUEST['property_uid'])) {
            $property_uid = (int) $_REQUEST['property_uid'];
        } else {
            return;
        }

        if (!user_can_view_this_property($property_uid)) {
            return;
        }

        $output_now = true;
        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = (bool) $componentArgs[ 'output_now' ];
        }

        //if ($output_now)
        //	property_header( $property_uid );

        $output = array();

        $MiniComponents->specificEvent('01020', 'showtariffs', $componentArgs);

        if ($output_now) {
            echo $MiniComponents->miniComponentData[ '01020' ][ 'showtariffs' ];
        } else {
            $this->retVals = $MiniComponents->miniComponentData[ '01020' ][ 'showtariffs' ];
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
