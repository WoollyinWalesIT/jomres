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
		}

	function getInvoice()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`cms_user_id`,`status`,`raised_date`,`due_date`,`paid`,`subscription`,`init_total`,
				`recur_total`,`recur_frequency`,`recur_dayofmonth`,`currencycode`,`subscription_id`,`contract_id`,`property_uid`
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
				`property_uid`
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
				'$this->property_uid'
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
				`property_uid` 		= '$this->property_uid'
				WHERE `id`='$this->id'";
				//echo $query;
			
			return doInsertSql($query,"");
			}
		error_logging( "ID of Invoice not available");
		return false;
		}

	}

?>