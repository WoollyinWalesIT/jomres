<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jrportal_subscriptions
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		//subscription packages (all)
		$this->allPackages = array();

		//subscription renewal packages (all)
		$this->allRenewalPackages = array();

		//subscription package
		$this->package = array();

		$this->package['id'] = 0;
		$this->package['name'] = '';
		$this->package['description'] = '';
		$this->package['published'] = 0;
		$this->package['frequency'] = 365; //(int) number of days, allows more flexibility when creating packages
		$this->package['full_amount'] = 0.00;
		$this->package['tax_code_id'] = 0;
		$this->package['currencycode'] = 'GBP';
		$this->package['renewal_price'] = 0.00;
		$this->package['params'] = array();

		//subscription renewal package
		$this->renewal = array();

		$this->renewal['id'] = 0;
		$this->renewal['name'] = '';
		$this->renewal['description'] = '';
		$this->renewal['published'] = 0;
		$this->renewal['frequency'] = 365; //(int) number of days, allows more flexibility when creating packages
		$this->renewal['full_amount'] = 0.00;
		$this->renewal['tax_code_id'] = 0;
		$this->renewal['currencycode'] = 'GBP';
		$this->renewal['renewal_price'] = 0.00;
		$this->renewal['params'] = array();

		//subscription
		$this->subscription = array();

		$this->subscription['id'] = 0;
		$this->subscription['cms_user_id'] = 0;
		$this->subscription['package_id'] = 0;
		$this->subscription['status'] = 0;
		$this->subscription['raised_date'] = '1970-01-01 00:00:01';
		$this->subscription['expiration_date'] = '1970-01-01 00:00:01';
		$this->subscription['invoice_id'] = 0;

		//subscribers
		//not needed anymore as we have the cms user id in subscriptions so we can get the subscriber details from the profiles table.

		//all user subscriptions including renewals
		$this->userSubscriptions = array();
	}
	
	/**
	 *
	 *
	 *
	 */

	//Subscription packages functions
	public function getSubscriptionPackage()
	{
		if ($this->package['id'] < 1) {
			error_logging('ID of Subscription packages not set');

			return false;
		}

		$query = 'SELECT 
						`id`,
						`name`,
						`description`,
						`published`,
						`frequency`,
						`full_amount`,
						`tax_code_id`,
						`currencycode`,
						`renewal_price`,
						`params`
					FROM #__jomresportal_subscriptions_packages 
					WHERE `id` = ' .(int) $this->package['id'].' 
					LIMIT 1';
		$result = doSelectSql($query);

		if ($result && count($result) == 1) {
			foreach ($result as $r) {
				$this->package['id'] = (int) $r->id;
				$this->package['name'] = (string) $r->name;
				$this->package['description'] = (string) $r->description;
				$this->package['published'] = (int) $r->published;
				$this->package['frequency'] = (int) $r->frequency;
				$this->package['full_amount'] = (float) $r->full_amount;
				$this->package['tax_code_id'] = (int) $r->tax_code_id;
				$this->package['currencycode'] = (string) $r->currencycode;
				$this->package['renewal_price'] = (float) $r->renewal_price;
				$this->package['params'] = unserialize($r->params);
			}

			return true;
		} else {
			if (empty($result)) {
				error_logging('No Subscription packages were found with that id');

				return false;
			}
			if (count($result) > 1) {
				error_logging('More than one Subscription package was found with that id');

				return false;
			}
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function commitSubscriptionPackage()
	{
		if ($this->package['id'] > 0) {
			error_logging('ID of Subscription package already available. Are you sure you are creating a new subscription package?');

			return false;
		}

		$query = "INSERT INTO #__jomresportal_subscriptions_packages
								(
								`name`,
								`description`,
								`published`,
								`frequency`,
								`full_amount`,
								`tax_code_id`,
								`currencycode`,
								`renewal_price`,
								`params`
								)
							VALUES
								(
								'" .(string) $this->package['name']."',
								'" .(string) $this->package['description']."',
								" .(int) $this->package['published'].',
								' .(int) $this->package['frequency'].',
								' .(float) $this->package['full_amount'].',
								' .(int) $this->package['tax_code_id'].",
								'" .(string) $this->package['currencycode']."',
								" .(float) $this->package['renewal_price'].",
								'" .serialize($this->package['params'])."'
								)";
		$result = doInsertSql($query, '');

		if ($result) {
			$this->package['id'] = $result;

			return true;
		} else {
			error_logging('ID of Subscription package could not be found after apparent successful insert');

			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function commitUpdateSubscriptionPackage()
	{
		if ($this->package['id'] < 1) {
			error_logging('ID of Subscription package not set');

			return false;
		}
		$query = "UPDATE #__jomresportal_subscriptions_packages SET
						`name` 					= '" .(string) $this->package['name']."',
						`description` 			= '" .(string) $this->package['description']."',
						`published` 			= " .(int) $this->package['published'].',
						`frequency` 			= ' .(int) $this->package['frequency'].',
						`full_amount` 			= ' .(float) $this->package['full_amount'].',
						`tax_code_id` 			= ' .(int) $this->package['tax_code_id'].",
						`currencycode` 			= '" .(string) $this->package['currencycode']."',
						`renewal_price` 		= " .(float) $this->package['renewal_price'].",
						`params` 				= '" .serialize($this->package['params'])."' 
					WHERE `id` = " .(int) $this->package['id'];
		$result = doInsertSql($query, '');

		if ($result) {
			return true;
		} else {
			error_logging('ID of Subscription package could not be found after apparent successful insert');

			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function deleteSubscriptionPackage()
	{
		if ($this->package['id'] < 1) {
			error_logging('ID of Subscription package not set');

			return false;
		}

		$query = 'DELETE FROM #__jomresportal_subscriptions_packages WHERE `id` = '.(int) $this->package['id'];
		$result = doInsertSql($query, '');

		if ($result) {
			return true;
		} else {
			error_logging('Could not delete Subscription package.');

			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	//subscriptions functions
	public function getSubscription()
	{
		if ($this->subscription['id'] < 1) {
			error_logging('ID of Subscriptions not set');

			return false;
		}

		$query = 'SELECT 
						`id`,
						`cms_user_id`,
						`package_id`,
						`status`,
						`raised_date`,
						`expiration_date`,
						`invoice_id`
					FROM #__jomresportal_subscriptions 
					WHERE `id` = ' .(int) $this->subscription['id'].' 
					LIMIT 1';
		$result = doSelectSql($query);

		if ($result && count($result) == 1) {
			foreach ($result as $r) {
				$this->subscription['id'] = (int) $r->id;
				$this->subscription['cms_user_id'] = (int) $r->cms_user_id;
				$this->subscription['package_id'] = (int) $r->package_id;
				$this->subscription['status'] = (int) $r->status;
				$this->subscription['raised_date'] = $r->raised_date;
				$this->subscription['expiration_date'] = $r->expiration_date;
				$this->subscription['invoice_id'] = (int) $r->invoice_id;
			}

			return true;
		} else {
			if (empty($result)) {
				error_logging('No Subscriptions were found with that id '.$query);

				return false;
			}
			if (count($result) > 1) {
				error_logging('More than one Subscription was found with that id');

				return false;
			}
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function commitSubscription()
	{
		if ($this->subscription['id'] > 0) {
			error_logging('ID of Subscription already available. Are you sure you are creating a new subscription?');

			return false;
		}

		$query = 'INSERT INTO #__jomresportal_subscriptions
						(
						`cms_user_id`,
						`package_id`,
						`status`,
						`raised_date`,
						`expiration_date`,
						`invoice_id`
						)
					VALUES
						(
						' .(int) $this->subscription['cms_user_id'].',
						' .(int) $this->subscription['package_id'].',
						' .(int) $this->subscription['status'].",
						'" .$this->subscription['raised_date']."',
						'" .$this->subscription['expiration_date']."',
						" .(int) $this->subscription['invoice_id'].'
						)';
		$result = doInsertSql($query, '');

		if ($result) {
			$this->subscription['id'] = $result;

			return true;
		} else {
			error_logging('ID of Subscription could not be found after apparent successful insert');

			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function commitUpdateSubscription()
	{
		if ($this->subscription['id'] < 1) {
			error_logging('ID of Subscription not set');

			return false;
		}

		$query = 'UPDATE #__jomresportal_subscriptions SET
						`cms_user_id` 				= ' .(int) $this->subscription['cms_user_id'].',
						`package_id` 				= ' .(int) $this->subscription['package_id'].',
						`status` 					= ' .(int) $this->subscription['status'].",
						`raised_date` 				= '" .$this->subscription['raised_date']."',
						`expiration_date` 			= '" .$this->subscription['expiration_date']."',
						`invoice_id` 				= " .(int) $this->subscription['invoice_id'].'
					WHERE `id` = ' .(int) $this->subscription['id'];
		$result = doInsertSql($query, '');

		if ($result) {
			return true;
		} else {
			error_logging('ID of Subscription could not be found after apparent successful insert');

			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function deleteSubscription()
	{
		if ($this->subscription['id'] < 1) {
			error_logging('ID of Subscription not set');

			return false;
		}

		$query = 'DELETE FROM #__jomresportal_subscriptions WHERE `id` = '.(int) $this->subscription['id'];
		$result = doInsertSql($query, '');

		if ($result) {
			return true;
		} else {
			error_logging('Could not delete Subscription.');

			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function subscriptionPackageIsUsed()
	{
		if ($this->package['id'] < 1) {
			error_logging('ID of Subscription package not set');

			return false;
		}

		$query = 'SELECT `id` FROM #__jomresportal_subscriptions WHERE `package_id` = '.(int) $this->package['id'].' LIMIT 1 ';
		$result = doSelectSql($query, 1);

		if ((int) $result > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function getSubscriptionsForCmsUserId($cms_user_id = 0)
	{
		if ($cms_user_id < 1) {
			error_logging('CMS user ID not set');

			return false;
		}

		$query = 'SELECT 
						id, 
						cms_user_id,
						package_id, 
						status, 
						raised_date, 
						expiration_date, 
						invoice_id 
					FROM #__jomresportal_subscriptions 
					WHERE cms_user_id = '.(int) $cms_user_id;
		$this->userSubscriptions = doSelectSql($query);

		return true;
	}
}//end class
