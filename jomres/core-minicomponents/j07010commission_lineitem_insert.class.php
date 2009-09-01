<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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