<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * 
 *
 *
 */
class basic_subscription_details
{
	/**
	 * 
	 *
	 *
	 */
	public function __construct()
	{
		$this->subscription = array();

		$this->package = array();
	}

	/**
	 * 
	 *
	 *
	 */

	public function gatherData($cms_user_id = 0)
	{
		if ($cms_user_id == 0) {
			throw new Exception('Error: CMS user id not set.');
		}

		//check if we already have this cms user id subscription details
		if (!empty($this->subscription)) {
			return true;
		}
		
		$this->subscription['id'] = 0;

		$query = 'SELECT 
						a.id AS subscription_id,
						a.cms_user_id,
						a.package_id,
						a.status,
						a.raised_date,
						a.expiration_date,
						a.invoice_id,
						b.id,
						b.name,
						b.description,
						b.published,
						b.frequency,
						b.full_amount,
						b.tax_code_id,
						b.currencycode,
						b.renewal_price,
						b.params 
					FROM #__jomresportal_subscriptions a 
						LEFT JOIN #__jomresportal_subscriptions_packages b ON a.package_id = b.id 
					WHERE a.cms_user_id = ' .(int) $cms_user_id."
						AND a.status = 1 
						AND DATE_FORMAT(a.expiration_date, '%Y-%m-%d') >= DATE_FORMAT(NOW(), '%Y-%m-%d') 
					LIMIT 1 ";
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $s) {
				$this->subscription['id'] = $s->subscription_id;
				$this->subscription['cms_user_id'] = $s->cms_user_id;
				$this->subscription['package_id'] = $s->package_id;
				$this->subscription['status'] = $s->status;
				$this->subscription['raised_date'] = $s->raised_date;
				$this->subscription['expiration_date'] = $s->expiration_date;
				$this->subscription['invoice_id'] = $s->invoice_id;

				$this->package['id'] = $s->id;
				$this->package['name'] = $s->name;
				$this->package['description'] = $s->description;
				$this->package['published'] = $s->published;
				$this->package['full_amount'] = $s->full_amount;
				$this->package['tax_code_id'] = $s->tax_code_id;
				$this->package['currencycode'] = $s->currencycode;
				$this->package['renewal_price'] = $s->renewal_price;
				$this->package['params'] = unserialize($s->params);
			}

			return true;
		} else {
			return false;
		}
	}
}
