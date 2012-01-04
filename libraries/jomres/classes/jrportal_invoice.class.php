<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jrportal_invoice
	{
	function jrportal_invoice()
		{
		$this->id					= 0;
		$this->cms_user_id			= 0;
		$this->status				= 0;
		$this->raised_date			= '';
		$this->due_date				= '';
		$this->paid					= '';
		$this->subscription			= false;
		$this->init_total			= 0.00;
		$this->recur_total			= 0.00;
		$this->recur_frequency		= '';
		$this->recur_dayofmonth		= 0;
		$this->currencycode			= "GBP";
		$this->subscription_id		= 0;
		$this->contract_id			= 0;
		$this->property_uid			= 0;
		$this->is_commission		= 0;
		}

	function getInvoice()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`cms_user_id`,`status`,`raised_date`,`due_date`,`paid`,`subscription`,`init_total`,
				`recur_total`,`recur_frequency`,`recur_dayofmonth`,`currencycode`,`subscription_id`,`contract_id`,`property_uid`,`is_commission`
				FROM #__jomresportal_invoices WHERE `id`='$this->id' LIMIT 1";

			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= $r->id;
					$this->cms_user_id			= $r->cms_user_id;
					$this->status				= $r->status;
					$this->raised_date			= $r->raised_date;
					$this->due_date				= $r->due_date;
					$this->paid					= $r->paid;
					$this->subscription			= $r->subscription;
					$this->init_total			= $r->init_total;
					$this->recur_total			= $r->recur_total;
					$this->recur_frequency		= $r->recur_frequency;
					$this->recur_dayofmonth		= $r->recur_dayofmonth;
					$this->currencycode			= $r->currencycode;
					$this->subscription_id		= $r->subscription_id;
					$this->contract_id			= $r->contract_id;
					$this->property_uid			= $r->property_uid;
					$this->is_commission		= $r->is_commission;
					
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					error_logging( "No Invoices were found with that id");
					return false;
					}
				if (count($result)> 1)
					{
					error_logging("More than one Invoice was found with that id");
					return false;
					}
				}
			}
		else
			{
			error_logging( "ID of Invoice not available");
			return false;
			}

		}

	function commitNewInvoice()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_invoices
				(
				`cms_user_id`,
				`status`,
				`raised_date`,
				`due_date`,
				`paid`,
				`subscription`,
				`init_total`,
				`recur_total`,
				`recur_frequency`,
				`recur_dayofmonth`,
				`currencycode`,
				`subscription_id`,
				`contract_id`,
				`property_uid`,
				`is_commission`
				)
				VALUES
				(
				'$this->cms_user_id',
				'$this->status',
				'$this->raised_date',
				'$this->due_date',
				'$this->paid',
				'$this->subscription',
				'$this->init_total',
				'$this->recur_total',
				'$this->recur_frequency',
				'$this->recur_dayofmonth',
				'$this->currencycode',
				'$this->subscription_id',
				'$this->contract_id',
				'$this->property_uid',
				".(int)$this->is_commission."
				)";
			$id=doInsertSql($query,"");
			if ($id)
				{
				$this->id=$id;
				return true;
				}
			else
				{
				error_logging( "ID of Invoice could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging( "ID of Invoice already available. Are you sure you are creating a new Invoice?");
		return false;
		}

	function commitUpdateInvoice()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_invoices SET
				`cms_user_id`		= '$this->cms_user_id',
				`status`			= '$this->status',
				`raised_date`		= '$this->raised_date',
				`due_date`			= '$this->due_date',
				`paid`				= '$this->paid',
				`subscription`		= '$this->subscription',
				`init_total`		= '$this->init_total',
				`recur_total`		= '$this->recur_total',
				`recur_frequency`	= '$this->recur_frequency',
				`recur_dayofmonth`	= '$this->recur_dayofmonth',
				`currencycode` 		= '$this->currencycode',
				`subscription_id` 	= '$this->subscription_id',
				`contract_id` 		= '$this->contract_id',
				`property_uid` 		= '$this->property_uid',
				`is_commission`		= '$this->is_commission'
				
				
				WHERE `id`='$this->id'";
			return doInsertSql($query,"");
			}
		error_logging( "ID of Invoice not available");
		return false;
		}

	function get_invoice_balance()
		{
		if ($this->id > 0 )
			{
			$bal = 0.0;
			$query = "SELECT * FROM #__jomresportal_lineitems WHERE inv_id = ".(int)$this->id;
			$result=doSelectSql($query);
			if (count($result)>0)
				{
				foreach ($result as $r)
					{
					$bal = $bal+(float)$r->init_total;
					}
				}
			return $bal;
			}
		else
			return false;
		}
	}

?>