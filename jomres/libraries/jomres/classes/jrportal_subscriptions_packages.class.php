<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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