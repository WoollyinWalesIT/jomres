<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j07010commission_lineitem_insert {
	function j07010commission_lineitem_insert($componentArgs)
		{
		$bookingObj				= $componentArgs['bookingObj'];
		$userObjsArray			= $componentArgs['userObjsArray'];
		$property_name			= $componentArgs['property_name'];

		if (count($userObjsArray)>0)
			{
			$client = $userObjsArray[0];
			$user_id=$client->jos_id;
			$tax_code_id=1;
			$default_discount=0.00;

			$username=$client->username;
			$commissionRate=0.00;
			$commission=0.00;
			jr_import('jrportal_crate_functions');
			$crateFunctions=new jrportal_crate_functions();
			if (count($crateFunctions->getAllCrates())==0)
				{
				error_logging( "Error, no commission rates created. Cannot continue with commission line item insert.");
				return false;
				}
			$crate=$crateFunctions->getCrateForPropertyuid($bookingObj->property_uid);
			if (count($crate)==0)
				{
				error_logging( "Error, no commission rate for this property. Cannot continue with commission line item insert.");
				return false;
				}

			$rateType=(int)$crate['type']; // Type 1  = flat Type 2 = percentage
			$commissionRate=floatval($crate['value']);
			$currencyCode=$crate['currencycode'];
			
			$booking_total=$bookingObj->booking_total;

			if ($rateType==1)
				$commission=$commissionRate;
			else
				$commission=($booking_total/100)*$commissionRate;

			$query="INSERT INTO #__jomresportal_orphan_lineitems (
				`cms_user_id`,
				`name`,
				`description`,
				`init_price`,
				`init_qty`,
				`init_discount`,
				`recur_price`,
				`recur_qty`,
				`recur_discount`,
				`tax_code_id`
				)
				VALUES (
				".(int)$user_id.",
				'Commission',
				'".(string)$property_name."',
				".(float)$commission.",
				'1',
				".(float)$default_discount.",
				0.00,
				0.00,
				0.00,
				".(int)$tax_code_id."
				)";
			$id=doInsertSql($query,"");
			if ($id)
				{
				$this->id=$id;
				return true;
				}
			else
				{
				error_logging( "ID of Commission orphan line item could not be found after apparent successful insert");
				return false;
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>