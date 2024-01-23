<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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

class j16000jomres_income_overview
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

		//income
		$subscriptions_income = array();
		$commission_income = array();
		$reviews_details = array();
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

		if (is_null($result['bookings_total'])) {
			$result['bookings_total'] = 0;
		}

		$output['BOOKINGS_INCOME'] = output_price(abs($result['bookings_total']));
		$output['BOOKINGS_INCOME_LABEL_CLASS'] = 'label-blue';

		$output['_JOMRES_INCOME_PAID_AMOUNTS'] = jr_gettext('_JOMRES_INCOME_PAID_AMOUNTS', '_JOMRES_INCOME_PAID_AMOUNTS', false);
		
		$output['_JOMRES_STATUS_BOOKINGS'] = jr_gettext('_JOMRES_STATUS_BOOKINGS', '_JOMRES_STATUS_BOOKINGS', false);
		
		
		if ((int) $jrConfig['useSubscriptions'] == 1) {
			$r = array();

			if (!isset($result['subscriptions_total'])) {
				$result['subscriptions_total'] = 0;
			}

			$r['SUBSCRIPTIONS_INCOME'] = output_price(abs($result['subscriptions_total']));
			$r['SUBSCRIPTIONS_INCOME_LABEL_CLASS'] = 'label-blue';

			$subscriptions_income[] = $r;
		}

		if ((int) $jrConfig['use_commission'] == 1) {
			$r = array();
            if ( is_null($result['commission_total'])) {
                $result['commission_total'] = 0.00;
            }
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
		$tmpl->readTemplatesFromInput('jomres_income_overview.html');

		if ($output_now) {
			$tmpl->displayParsedTemplate();
		} else {
			$this->retVals = $tmpl->getParsedTemplate();
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
