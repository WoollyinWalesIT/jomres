<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jrportal_subscriptions_packages
	{
	function jrportal_subscriptions_packages()
		{
		$this->id					= 0;
		$this->name					= '';
		$this->description			= '';
		$this->published			= 0;
		$this->frequency			= "M";
		$this->trial_period			= 0;
		$this->trial_amount			= 0.00;
		$this->full_amount			= 0.00;
		$this->rooms_limit			= 0;
		$this->property_limit		= 0;
		$this->tax_code_id			= 0;

		$this->error				= null;
		}

	function getSubscriptionPackage()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`name`,`description`,`published`,`frequency`,`trial_period`,`trial_amount`,`full_amount`,`rooms_limit`,`property_limit`,`tax_code_id`
				FROM #__jomresportal_subscriptions_packages WHERE `id`=".(int)$this->id." LIMIT 1";

			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= (int)$r->id;
					$this->name					= (string)$r->name;
					$this->description			= (string)$r->description;
					$this->published			= (int)$r->published;
					$this->frequency			= (string)$r->frequency;
					$this->trial_period			= (int)$r->trial_period;
					$this->trial_amount			= (float)$r->trial_amount;
					$this->full_amount			= (float)$r->full_amount;
					$this->rooms_limit			= (int)$r->rooms_limit;
					$this->property_limit		= (int)$r->property_limit;
					$this->tax_code_id			= (int)$r->tax_code_id;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					error_logging(  "No Subscription packages were found with that id");
					return false;
					}
				if (count($result)> 1)
					{
					error_logging(  "More than one Subscription package was found with that id");
					return false;
					}
				}
			}
		else
			{
			error_logging(  "ID of Subscription packages not available");
			return false;
			}

		}

	function commitSubscriptionPackage()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_subscriptions_packages
				(
				`name`,
				`description`,
				`published`,
				`frequency`,
				`trial_period`,
				`trial_amount`,
				`full_amount`,
				`rooms_limit`,
				`property_limit`,
				`tax_code_id`
				)
				VALUES
				(
				'".(string)$this->name."',
				'".(string)$this->description."',
				'".(int)$this->published."',
				'".(string)$this->frequency."',
				'".(int)$this->trial_period."',
				'".(float)$this->trial_amount."',
				'".(float)$this->full_amount."',
				'".(int)$this->rooms_limit."',
				'".(int)$this->property_limit."',
				'".(int)$this->tax_code_id."'
				)";
			
			$result=doInsertSql($query,"");
			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				error_logging(  "ID of Subscription package could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Subscription package already available. Are you sure you are creating a new Commission rate?");
		return false;
		}
		

	function commitUpdateSubscriptionPackage()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_subscriptions_packages SET
				`name` 					= '".(string)$this->name."',
				`description` 			= '".(string)$this->description."',
				`published` 			= '".(int)$this->published."',
				`frequency` 			= '".(string)$this->frequency."',
				`trial_period` 			= '".(int)$this->trial_period."',
				`trial_amount` 			= '".(float)$this->trial_amount."',
				`full_amount` 			= '".(float)$this->full_amount."',
				`rooms_limit` 			= '".(int)$this->rooms_limit."',
				`property_limit` 		= '".(int)$this->property_limit."',
				`tax_code_id` 			= '".(int)$this->tax_code_id."'
				WHERE `id`=".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				return true;
			else
				{
				error_logging(  "ID of Subscription package could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Subscription package not available");
		return false;
		}

	function deleteSubscriptionPackage()
		{
		if ($this->id > 0 )
			{
			$query="DELETE FROM #__jomresportal_subscriptions_packages WHERE `id` = ".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				{
				return true;
				}
			else
				{
				error_logging(  "Could not delete Subscription package.");
				return false;
				}
			}
		error_logging(  "ID of Subscription package not available");
		return false;
		}
	}

?>