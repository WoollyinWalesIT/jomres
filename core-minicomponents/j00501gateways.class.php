<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
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
        $paypal_settings = jomres_singleton_abstract::getInstance('jrportal_paypal_settings');
        $paypal_settings->get_paypal_settings();

        $MiniComponents->triggerEvent('00509', $componentArgs);

        if (isset($MiniComponents->miniComponentData[ '00509' ])) {
            $outputArray = $MiniComponents->miniComponentData[ '00509' ];
        }

        if ($paypal_settings->paypalConfigOptions[ 'override' ] == '0' && !is_null($outputArray)) {
            $lists = $componentArgs[ 'lists' ];

            $configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false));

            $configurationPanel->setleft();
            $configurationPanel->setmiddle();
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_GATEWAY_ENABLED', '_JOMRES_COM_A_GATEWAY_ENABLED', false));
            $configurationPanel->insertSetting();

            $settingArray = array();
            foreach ($outputArray as $gateway_name => $gw) {
                $query = "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = '".$gateway_name."' ";
                $settingsList = doSelectSql($query);
                if (count($settingsList) > 0) {
                    foreach ($settingsList as $set) {
                        $settingArray[$gateway_name][ $set->setting ] = trim($set->value);
                    }
                }
            }

            foreach ($outputArray as $gateway_name => $gw) {
                if (!isset($settingArray[$gateway_name]['override'])) {
                    $settingArray[$gateway_name]['override'] = 0;
                }

                if (!isset($settingArray[$gateway_name]) || $settingArray[$gateway_name]['override'] != '1') {
                    $configurationPanel->setleft($gw[ 'button' ]);
                    $configurationPanel->setmiddle($gw[ 'link' ]);
                    $configurationPanel->setright($gw[ 'active' ]);
                    $configurationPanel->insertSetting();
                } elseif (isset($gw[ 'custom_output' ])) {
                    $configurationPanel->setleft();
                    $configurationPanel->setmiddle($gw[ 'custom_output' ]);
                    $configurationPanel->setright();
                    $configurationPanel->insertSetting();
                }
            }
            $configurationPanel->endPanel();
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
