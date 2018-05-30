<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00501gateways
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $mrConfig = getPropertySpecificSettings();
        if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
            return;
        }
        $configurationPanel = $componentArgs[ 'configurationPanel' ];

        jr_import("gateway_plugin_settings");
        $plugin_settings = new gateway_plugin_settings();
        $gateway_settings = $plugin_settings->get_settings_for_property_uid( get_showtime('property_uid') );

        if (empty($gateway_settings)) { // No gateways installed
            return;
            }

        $lists = $componentArgs[ 'lists' ];

            $configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false));

            $configurationPanel->setleft();
            $configurationPanel->setmiddle();
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_GATEWAY_ENABLED', '_JOMRES_COM_A_GATEWAY_ENABLED', false));
            $configurationPanel->insertSetting();

            foreach ($gateway_settings as $gateway_name => $gw) {
                if (!isset($plugin_settings->gateway_settings[$gateway_name]['override'])) {
                    $plugin_settings->gateway_settings[$gateway_name]['override'] = 0;
                    }

                if ( $plugin_settings->gateway_settings[$gateway_name]['override'] != '1') {
                    $configurationPanel->setleft($gw['config_links'][ 'button' ]);
                    $configurationPanel->setmiddle($gw['config_links'][ 'link' ]);
                    
                    /* if ($gw['balance_payments_supported'] == true )
                        $balances = jr_gettext('GATWAYS_BALANCE_PAYMENTS','GATWAYS_BALANCE_PAYMENTS',false)." : ".(jr_gettext('_JOMRES_COM_MR_YES','_JOMRES_COM_MR_YES',false));
                    else
                        $balances = jr_gettext('GATWAYS_BALANCE_PAYMENTS','GATWAYS_BALANCE_PAYMENTS',false)." : ".(jr_gettext('_JOMRES_COM_MR_NO','_JOMRES_COM_MR_NO',false)); */
                    
                    if ( $gw[ 'active' ] == "1" )
                        $configurationPanel->setright(jr_gettext('_JOMRES_COM_MR_YES','_JOMRES_COM_MR_YES',false));
                    else
                        $configurationPanel->setright(jr_gettext('_JOMRES_COM_MR_NO','_JOMRES_COM_MR_NO',false));
             
                    $configurationPanel->insertSetting();
                    }
                }
            $configurationPanel->endPanel();

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
