<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
#[AllowDynamicProperties]
/**
 * @package Jomres\Core\Minicomponents
 *
 *
 */

class j06000show_property_map
{

    /**
     *
     * Constructor
     *
     * Main functionality of the Minicomponent
     *
     *
     *
     */

    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                'task' => 'show_property_map',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP',
                'arguments' => array(0 => array(
                    'argument' => 'property_uid',
                    'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID',
                    'arg_example' => '1',
                ),
                    1 => array(
                        'argument' => 'map_zoom',
                        'arg_info' => '_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM',
                        'arg_example' => '10',
                    ),
                ),
            );

            return;
        }

        $this->retVals = '';

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (!isset($jrConfig["google_maps_api_key"]) || trim($jrConfig["google_maps_api_key"]) == '') {
            echo "<div class='alert alert-danger'>Google maps api key is not set. Go to Administrator > Jomres > Settings > Site Configuration > Integrations tab and save your Google maps keys there.</div>";
            return;
        }

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = (int)$componentArgs[ 'property_uid' ];
        } else {
            $property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
        }

        if ($property_uid == 0) {
            return;
        }

        if (!user_can_view_this_property($property_uid)) {
            return;
        }

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $mrConfig = getPropertySpecificSettings($property_uid);

        jomres_set_page_title( $property_uid ,  jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', false) );

        $mw = 300;
        $mh = $jrConfig['map_height'];
        if ((int)jomresGetParam($_REQUEST, 'property_uid', 0) > 0) {
            if (isset($_REQUEST[ 'mw' ])) {
                $mw = (int) $_REQUEST[ 'mw' ];
            }
            if (isset($_REQUEST[ 'mh' ])) {
                $mh = (int) $_REQUEST[ 'mh' ];
            }
            if (isset($_REQUEST[ 'output_now' ])) {
                $output_now = (bool) jomresGetParam($_REQUEST, 'output_now', 1);
            }
        } else {
            if (isset($componentArgs[ 'mw' ])) {
                $mw = (int) $componentArgs[ 'mw' ];
            }
            if (isset($componentArgs[ 'mh' ])) {
                $mh = (int) $componentArgs[ 'mh' ];
            }
            if (isset($componentArgs[ 'output_now' ])) {
                $output_now = (bool) $componentArgs[ 'output_now' ];
            }
        }

        $componentArgs = array('property_uid' => $property_uid, 'width' => $mw, 'height' => $mh);
        $MiniComponents->specificEvent('01050', 'x_geocoder', $componentArgs);

        if ($output_now) {
            echo $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];
        } else {
            $this->retVals = $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];
        }
    }


    public function getRetVals()
    {
        return $this->retVals;
    }
}
