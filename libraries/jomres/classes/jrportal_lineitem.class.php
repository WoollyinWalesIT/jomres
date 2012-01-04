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

class jrportal_lineitem
	{
	function jrportal_lineitem()
		{
		$this->id					= 0;
		$this->name					= '';
		$this->description			= '';
		$this->init_price			= 0.00;
		$this->init_qty				= 0;
		$this->init_discount		= 0.00;
		$this->init_total			= 0.00;
		$this->init_total_inclusive			= 0.00;
		$this->recur_price			= 0.00;
		$this->recur_qty			= 0;
		$this->recur_discount		= 0.00;
		$this->recur_total			= 0.00;
		$this->tax_code				= 0;
		$this->tax_description		= "";
		$this->tax_rate				= 0.00;
		$this->inv_id				= 0;
		$this->error				= null;
		}


	function getLineItem()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`name`,`description`,`init_price`,`init_qty`, `init_discount`,`init_total`,`init_total_inclusive`,`recur_price`,
				`recur_qty`,`recur_discount`,`recur_total`,`tax_code`,`tax_description`,`tax_rate`,`inv_id`
				FROM #__jomresportal_lineitems WHERE `id`='$this->id' LIMIT 1";

			$result=doSelectSql($query);
			//var_dump($result);exit;
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= $r->id;
					$this->name					= $r->name;
					$this->description			= $r->description;
					$this->init_price			= $r->init_price;
					$this->init_qty				= $r->init_qty;
					$this->init_discount		= $r->init_discount;
					$this->init_total			= $r->init_total;
					$this->init_total_inclusive	= $r->init_total_inclusive;
					$this->recur_price			= $r->recur_price;
					$this->recur_qty			= $r->recur_qty;
					$this->recur_discount		= $r->recur_discount;
					$this->recur_total			= $r->recur_total;
					$this->tax_code				= $r->tax_code;
					$this->tax_description		= $r->tax_description;
					$this->tax_rate				= $r->tax_rate;
					$this->inv_id				= $r->inv_id;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					error_logging( "No Line Items were found with that id");
					return false;
					}
				if (count($result)> 1)
					{
					error_logging(  "More than one Line Item rate was found with that id");
					return false;
					}
				}
			}
		else
			{
			error_logging(  "ID of Line item rate not available");
			return false;
			}
		}

	function commitLineItem()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_lineitems
				(
				`id`,
				`name`,
				`description`,
				`init_price`,
				`init_qty`,
				`init_discount`,
				`init_total`,
				`init_total_inclusive`,
				`recur_price`,
				`recur_qty`,
				`recur_discount`,
				`recur_total`,
				`tax_code`,
				`tax_description`,
				`tax_rate`,
				`inv_id`
				)
				VALUES
				(
				".(int)$this->id.",
				'".(string)$this->name."',
				'".(string)$this->description."',
				".(float)$this->init_price.",
				".(int)$this->init_qty.",
				".(float)$this->init_discount.",
				".(float)$this->init_total.",
				".(float)$this->init_total_inclusive.",
				".(float)$this->recur_price.",
				".(int)$this->recur_qty.",
				".(float)$this->recur_discount.",
				".(float)$this->recur_total.",
				'".(string)$this->tax_code."',
				'".(string)$this->tax_description."',
				".(float)$this->tax_rate.",
				".(int)$this->inv_id."
				)";
			$result=doInsertSql($query,"");
			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				error_logging(  "ID of Line Item could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Line Item already available. Are you sure you are creating a new Commission rate?");
		return false;
		}

	function commitUpdateLineItem()
		{
		if ($this->id > 0 )
			{

			$query="UPDATE #__jomresportal_lineitems SET
				`name` 					= '".(string)$this->name."',
				`description` 			= '".(string)$this->description."',
				`init_price` 			= ".(float)$this->init_price.",
				`init_qty` 				= ".(int)$this->init_qty.",
				`init_discount` 		= ".(float)$this->init_discount.",
				`init_total` 			= ".(float)$this->init_total.",
				`init_total_inclusive`	= ".(float)$this->init_total_inclusive.",
				`recur_price` 			= ".(float)$this->recur_price.",
				`recur_qty` 			= ".(int)$this->recur_qty.",
				`recur_discount` 		= ".(float)$this->recur_discount.",
				`recur_total` 			= ".(float)$this->recur_total.",
				`tax_code` 				= '".(string)$this->tax_code."',
				`tax_description` 		= '".(string)$this->tax_description."',
				`tax_rate` 				= ".(float)$this->tax_rate.",
				`inv_id` 				= ".(int)$this->inv_id."

				WHERE `id`=".(int)$this->id;
			return $result=doInsertSql($query,"");
			}
		error_logging(  "ID of Line Item not available");
		return false;
		}

	}

?>