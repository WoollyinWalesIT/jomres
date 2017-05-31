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

// Allows Jomres to determine gateway settings

class gateway_plugin_settings
{
    public $gateway_settings;

    public function __construct()
    {

    }

    public function get_settings_for_property_uid($property_uid = 0 )
    {

        $property_gateway_settings = array();
        $global_gateway_settings = array();
        $overriding_gateways = array();

        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        $MiniComponents->triggerEvent('00509');

        if (!isset($MiniComponents->miniComponentData['00509'])) { // No gateways installed
            $this->gateway_settings = array();
            }
        else {

            $gateway_array = $MiniComponents->miniComponentData[ '00509' ];

            $installed_gateways = array();
            if (!empty($gateway_array)) {
                foreach ($gateway_array as $gateway_name => $settings_to_ignore ) {
                    $installed_gateways[] = $gateway_name;
                    }

                $query = "SELECT `plugin`,`setting`,`value` FROM #__jomres_pluginsettings WHERE `plugin` IN ( ".jomres_implode($installed_gateways, false).' ) AND prid = 0';
                $plugin_settings = doSelectSql($query);

                if (!empty($plugin_settings)) {
                    foreach ($plugin_settings as $setting ) {
                        $gateway_name = $setting->plugin;
                        if ( $setting->setting == 'override' && $setting->value == '1' ) {
                            $overriding_gateways[]=$gateway_name;
                            }

                        $global_gateway_settings[$gateway_name][$setting->setting] = $setting->value;
                        }
                    }

                if ($property_uid > 0 ) {
                    $query = "SELECT `plugin`,`setting`,`value` FROM #__jomres_pluginsettings WHERE `plugin` IN ( ".jomres_implode($installed_gateways, false).' ) AND prid = '.(int)$property_uid;
                    $plugin_settings = doSelectSql($query);

                    if (!empty($plugin_settings)) {
                        foreach ($plugin_settings as $setting ) {
                            $gateway_name = $setting->plugin;
                            if (!in_array ($gateway_name , $overriding_gateways ) ) {
                                $property_gateway_settings[$gateway_name][$setting->setting] = $setting->value;
                                }
                            }
                        }
                    }

                foreach ($installed_gateways as $gateway ) {
                    $balance_payments_supported = false;

                    if ( isset (
                        $global_gateway_settings[$gateway] ) && 
                            ( 
                            isset($global_gateway_settings[$gateway]['override']) && 
                            $global_gateway_settings[$gateway]['override'] =="1"
                            )
                        ) {               
                        $this->gateway_settings[$gateway] = $global_gateway_settings[$gateway];
                        }
                    elseif ( isset ($property_gateway_settings[$gateway] ) ) {
                        if (!isset( $property_gateway_settings[$gateway]['active']) ) {
                            $property_gateway_settings[$gateway]['active'] = "0";
                            }
                            
                        $this->gateway_settings[$gateway] = $property_gateway_settings[$gateway];
                        }
                    else {
                        $this->gateway_settings[$gateway] = array("active" => 0 , "override" => 0 );
                        }
                    
                    if (isset($gateway_array[$gateway]['balance_payments_supported']) && $gateway_array[$gateway]['balance_payments_supported'] == "1") {
                        $balance_payments_supported = true;
                        }
                    
                    
                    
                    $this->gateway_settings[$gateway]['balance_payments_supported'] = $balance_payments_supported;
                    $this->gateway_settings[$gateway]['config_links'] = array("button" => $gateway_array[$gateway]['button'] , "link" => $gateway_array[$gateway]['link'] );
                    }
                foreach ($gateway_array as $gw_name => $gw ) { // Some gateways ( currently, only Stripe but potential is for others too ) will not have an "active" setting as they're per manager, not per property. If the 00509 script responds with a connected setting then we'll set the gateway as active.
                    if (isset($gw['connected']) && $gw['connected'] == true ) {
                        $this->gateway_settings[$gw_name]['active'] = true;
                        }
                    }
                }
            }
        return $this->gateway_settings;
    }

}

