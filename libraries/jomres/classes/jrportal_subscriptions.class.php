<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jrportal_subscriptions
	{
	function jrportal_subscriptions()
		{
		$this->id					= 0;
		$this->cms_user_id			= 0;
		$this->gateway_subscription_id	= '';
		$this->package_id			= 0;
		$this->name					= '';
		$this->description			= '';
		$this->frequency			= "M";
		$this->trial_period			= 0;
		$this->trial_amount			= 0.00;
		$this->full_amount			= 0.00;
		$this->rooms_limit			= 0;
		$this->property_limit		= 0;
		$this->status				= 0;
		$this->raised_date				= 0;

		$this->error				= null;
		}
		


	function getSubscription()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`cms_user_id`,`gateway_subscription_id`,`package_id`,`name`,`description`,`frequency`,`trial_period`,`trial_amount`,`full_amount`,`rooms_limit`,`property_limit`,`status`,`raised_date`
				FROM #__jomresportal_subscriptions WHERE `id`=".(int)$this->id." LIMIT 1";

			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= (int)$r->id;
					$this->cms_user_id			= (int)$r->cms_user_id;
					$this->gateway_subscription_id= (string)$r->gateway_subscription_id;
					$this->package_id			= (int)$r->package_id;
					$this->name					= (string)$r->name;
					$this->description			= (string)$r->description;
					$this->frequency			= (string)$r->frequency;
					$this->trial_period			= (int)$r->trial_period;
					$this->trial_amount			= (float)$r->trial_amount;
					$this->full_amount			= (float)$r->full_amount;
					$this->rooms_limit			= (float)$r->rooms_limit;
					$this->property_limit		= (float)$r->property_limit;
					$this->status				= (int)$r->status;
					$this->raised_date			= (int)$r->raised_date;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					error_logging(  "No Subscriptions were found with that id ".$query);
					return false;
					}
				if (count($result)> 1)
					{
					error_logging(  "More than one Subscription was found with that id");
					return false;
					}
				}
			}
		else
			{
			error_logging(  "ID of Subscriptions not available");
			return false;
			}
		}

	function commitSubscription()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_subscriptions
				(
				`cms_user_id`,
				`gateway_subscription_id`,
				`package_id`,
				`name`,
				`description`,
				`frequency`,
				`trial_period`,
				`trial_amount`,
				`full_amount`,
				`rooms_limit`,
				`property_limit`,
				`status`,
				`raised_date`
				)
				VALUES
				(
				'".(int)$this->cms_user_id."',
				'".(string)$this->gateway_subscription_id."',
				'".(int)$this->package_id."',
				'".(string)$this->name."',
				'".(string)$this->description."',
				'".(string)$this->frequency."',
				'".(int)$this->trial_period."',
				'".(float)$this->trial_amount."',
				'".(float)$this->full_amount."',
				'".(int)$this->rooms_limit."',
				'".(int)$this->property_limit."',
				'".(int)$this->status."',
				'".date( 'Y-m-d H:i:s' )."'
				)";
			
			$result=doInsertSql($query,"");
			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				error_logging(  "ID of Subscription could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Subscription already available. Are you sure you are creating a new Commission rate?");
		return false;
		}
		

	function commitUpdateSubscription()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_subscriptions SET
				`cms_user_id` 			= '".(int)$this->cms_user_id."',
				`gateway_subscription_id`= '".(string)$this->gateway_subscription_id."',
				
				`package_id` 			= '".(int)$this->package_id."',
				`name` 					= '".(string)$this->name."',
				`description` 			= '".(string)$this->description."',
				`frequency` 			= '".(string)$this->frequency."',
				`trial_period` 			= '".(int)$this->trial_period."',
				`trial_amount` 			= '".(float)$this->trial_amount."',
				`full_amount` 			= '".(float)$this->full_amount."',
				`rooms_limit` 			= '".(int)$this->rooms_limit."',
				`property_limit` 		= '".(int)$this->property_limit."',
				`status` 				= '".(int)$this->status."'
				WHERE `id`=".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				return true;
			else
				{
				error_logging(  "ID of Subscription could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Subscription not available");
		return false;
		}

	function deleteSubscription()
		{
		if ($this->id > 0 )
			{
			$query="DELETE FROM #__jomresportal_subscriptions WHERE `id` = ".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				{
				return true;
				}
			else
				{
				error_logging(  "Could not delete Subscription.");
				return false;
				}
			}
		error_logging(  "ID of Subscription not available");
		return false;
		}
	}

?>