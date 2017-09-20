<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.11
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00035tabcontent_01_more_info
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $this->retVals = '';

        $property_uid = (int) $componentArgs[ 'property_uid' ];
        $mrConfig = getPropertySpecificSettings($property_uid);

        $output = array();

        if ((int) $mrConfig[ 'is_real_estate_listing' ] == 1) {
            return;
        }

        //property more info
        $output['HPROPERTY_MOREINFO'] = jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', false);
        $output['PROPERTY_MOREINFO'] = $MiniComponents->specificEvent('06000', 'show_property_moreinfo', array('output_now' => false, 'property_uid' => $property_uid));

        $anchor = jomres_generate_tab_anchor($output[ 'HPROPERTY_MOREINFO' ]);
        $tab = array('TAB_ANCHOR' => $anchor, 'TAB_TITLE' => $output[ 'HPROPERTY_MOREINFO' ], 'TAB_CONTENT' => $output['PROPERTY_MOREINFO'], 'TAB_ID' => 'tour_target_property_details_moreinfo');
        $this->retVals = $tab;
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
