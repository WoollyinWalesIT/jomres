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

class j10001control_panel
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        if (AJAXCALL) {
            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $output = array();
        $page_output = array();

        //Usage reporting setting
        $output['USAGE_REPORTING'] = $MiniComponents->specificEvent('16000', 'usage_reporting_request', array('output_now' => false, 'show_as_panel' => true));

        //list properties
        $output['PROPERTIES_TABLE'] = $MiniComponents->specificEvent('16000', 'listproperties', array('output_now' => false, 'show_as_panel' => true));

        //jomres news
        $output['JOMRES_NEWS'] = $MiniComponents->specificEvent('16000', 'jomres_news', array('output_now' => false));

        //jomres system info
        $output['JOMRES_SYSTEM_INFO'] = $MiniComponents->specificEvent('16000', 'jomres_system_info', array('output_now' => false));

        //jomres writability check
        $output['JOMRES_OVERVIEW'] = $MiniComponents->specificEvent('16000', 'jomres_overview', array('output_now' => false));

        //bookings chart
        $output['BOOKINGS_CHART'] = $MiniComponents->specificEvent('16000', 'chart_bookings', array('output_now' => false));

        //commissions chart
        $output['COMMISSIONS_CHART'] = '';
        if (isset($MiniComponents->registeredClasses['16000chart_commission']) && (int) $jrConfig['use_commission'] == 1) {
            $output['COMMISSIONS_CHART'] = $MiniComponents->specificEvent('16000', 'chart_commission', array('output_now' => false));
        }

        //subscriptions chart
        $output['SUBSCRIPTIONS_CHART'] = '';
        if (isset($MiniComponents->registeredClasses['16000chart_subscriptions']) && (int) $jrConfig['useSubscriptions'] == 1) {
            $output['SUBSCRIPTIONS_CHART'] = $MiniComponents->specificEvent('16000', 'chart_subscriptions', array('output_now' => false));
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->readTemplatesFromInput('control_panel.html');
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
