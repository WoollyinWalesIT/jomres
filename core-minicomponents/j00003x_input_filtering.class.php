<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.23
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00003x_input_filtering
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
        if (!isset($jrConfig[ 'inputs_allowing_html' ])) {
            $jrConfig[ 'inputs_allowing_html' ] = 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers';
        }

        $showtime_inputs = get_showtime('inputs_allowing_html');
        $site_config_inputs = explode(' ', $jrConfig[ 'inputs_allowing_html' ]);
        if (count($showtime_inputs) > 0 && count($site_config_inputs) > 0) {
            $inputs_allowing_html = array_merge($showtime_inputs, $site_config_inputs);
        } else {
            if (count($site_config_inputs) > 0) {
                $inputs_allowing_html = $site_config_inputs;
            } elseif (count($showtime_inputs) > 0) {
                $inputs_allowing_html = $showtime_inputs;
            } else {
                $inputs_allowing_html = array();
            }
        }

        set_showtime('inputs_allowing_html', $inputs_allowing_html);
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
