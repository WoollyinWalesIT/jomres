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

class j16000purchase_plugins
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        jr_import('jomres_check_support_key');
        $key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
        $key_validation->remove_plugin_licenses_file();

        $items = jomresGetParam($_REQUEST, 'items', '');
        $total = (float) jomresGetParam($_REQUEST, 'total', 0);
        $username = jomresGetParam($_REQUEST, 'username', '');
        $password = jomresGetParam($_REQUEST, 'password', '');
        if ($username == '' || $password == '') {
            $output[ 'MESSAGE' ] = "Sorry, you didn't enter your username and/or your password.";
            $template = 'purchase_failure.html';
        } else {
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $jrConfig = $siteConfig->get();

            saveSiteConfig(array('license_server_username' => $username, 'license_server_password' => $password));

            $request = 'request=create_invoice&username='.$username.'&password='.$password.'&items='.$items;
            $response = query_shop($request);
            if ($response->success) {
                if ($total == 0) {
                    $output[ 'MESSAGE' ] = 'Thank you for your request, you will be able to install the plugin(s) you requested through the plugin manager.';
                } else {
                    $output[ 'MESSAGE' ] = 'Thank you for your purchase, a link to the invoice has been created and emailed to you. When the invoice has been paid you will be able to use the Jomres Plugin Manager to install the plugin(s).';
                }
                $template = 'purchase_success.html';
            } else {
                $output[ 'MESSAGE' ] = 'Sorry, there was a problem creating the invoice, please double check your License Server username and password are correct.';
                $template = 'purchase_failure.html';
            }
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);

        $tmpl->readTemplatesFromInput($template);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
