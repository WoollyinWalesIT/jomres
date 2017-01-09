<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000jomres_overview
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

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $output = array();
        $pageoutput = array();

        //total properties
        $output['TOTAL_PROPERTIES'] = (int) get_showtime('numberOfPropertiesInSystem');
        $output['TOTAL_PROPERTIES_LABEL_CLASS'] = 'label-blue';

        //total published properties
        $output['TOTAL_PUBLISHED'] = count(get_showtime('published_properties_in_system'));
        $output['TOTAL_PUBLISHED_LABEL_CLASS'] = 'label-green';

        //total unpublished properties
        $output['TOTAL_UNPUBLISHED'] = (int) get_showtime('numberOfPropertiesInSystem') - count(get_showtime('published_properties_in_system'));
        if ($output['TOTAL_UNPUBLISHED'] > 0) {
            $output['TOTAL_UNPUBLISHED_LABEL_CLASS'] = 'label-orange';
        } else {
            $output['TOTAL_UNPUBLISHED_LABEL_CLASS'] = 'label-green';
        }

        //total approved and not approved properties
        $query = 'SELECT COUNT(`propertys_uid`) AS cnt FROM #__jomres_propertys WHERE `approved` = 0 ';
        $result = (int) doSelectSql($query, 1);

        $output['TOTAL_APPROVED'] = (int) get_showtime('numberOfPropertiesInSystem') - $result;
        $output['TOTAL_APPROVED_LABEL_CLASS'] = 'label-green';

        $output['TOTAL_NOTAPPROVED'] = $result;
        if ($output['TOTAL_NOTAPPROVED'] > 0) {
            $output['TOTAL_NOTAPPROVED_LABEL_CLASS'] = 'label-orange';
        } else {
            $output['TOTAL_NOTAPPROVED_LABEL_CLASS'] = 'label-green';
        }

        //income
        $subscriptions_income = array();
        $commission_income = array();
        $this_year = date('Y');

        $query = "SELECT 
						SUM( CASE WHEN b.contract_id > 0 THEN ( CASE WHEN a.init_total_inclusive < 0 THEN 0 ELSE a.init_total_inclusive END) END ) AS bookings_total, 
						SUM( CASE WHEN b.subscription_id > 0 THEN ( CASE WHEN a.init_total_inclusive < 0 THEN 0 ELSE a.init_total_inclusive END) END ) AS subscriptions_total,  
						SUM( CASE WHEN b.is_commission > 0 THEN ( CASE WHEN a.init_total_inclusive < 0 THEN 0 ELSE a.init_total_inclusive END) END ) AS commission_total 
					FROM 
						#__jomresportal_lineitems a, 
						#__jomresportal_invoices b 
					WHERE 
						a.inv_id = b.id 
						AND DATE_FORMAT(b.paid, '%Y') = '".$this_year."' ";
        $result = doSelectSql($query, 2);

        $output['BOOKINGS_INCOME'] = output_price(abs($result['bookings_total']));
        $output['BOOKINGS_INCOME_LABEL_CLASS'] = 'label-blue';

        if ((int) $jrConfig['useSubscriptions'] == 1) {
            $r = array();

            $r['SUBSCRIPTIONS_INCOME'] = output_price(abs($result['subscriptions_total']));
            $r['SUBSCRIPTIONS_INCOME_LABEL_CLASS'] = 'label-blue';

            $subscriptions_income[] = $r;
        }

        if ((int) $jrConfig['use_commission'] == 1) {
            $r = array();

            $r['COMMISSION_INCOME'] = output_price(abs($result['commission_total']));
            $r['COMMISSION_INCOME_LABEL_CLASS'] = 'label-blue';

            $commission_income[] = $r;
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('subscriptions_income', $subscriptions_income);
        $tmpl->addRows('commission_income', $commission_income);
        $tmpl->readTemplatesFromInput('jomres_overview.html');

        if ($output_now) {
            $tmpl->displayParsedTemplate();
        } else {
            $this->retVals = $tmpl->getParsedTemplate();
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
