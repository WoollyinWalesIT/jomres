<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

// Status:
// 0 unpaid
// 1 paid
// 2 cancelled

jr_import('jrportal_invoice');

class invoicehandler extends jrportal_invoice
	{

	function create_new_invoice($invoice_data, $line_items=array() )
		{
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$default_status = 0;
		$default_subscription=0;
		$default_currencycode=$jrConfig['globalCurrencyCode'];

		$this->init_total = 0.00;
		$this->recur_total = 0.00;
/*
		$query="SELECT name FROM #__users WHERE id = ".(int)$invoice_data['cms_user_id']." ";
		$result=doSelectSql($query);
		if (count($result)< 1 || count($result)> 1)
			{
			error_logging("Could not reliably determine that user exists in database.");
			return false;
			}
*/
		if (count($line_items)<1)
			{
			error_logging( "No line items passed for adding to invoice.");
			return false;
			}
			
		$this->cms_user_id= (int)$invoice_data['cms_user_id'];
		if (!isset($invoice_data['is_commission']))
			$this->is_commission= 0;
		else
			$this->is_commission= (int)$invoice_data['is_commission'];
			
		if (!isset($invoice_data['status']) )
			$this->status=$default_status;
		else
			$this->status=(int)$invoice_data['status'];

		$this->raised_date= date( 'Y-m-d H:i:s' );
		if (!isset($invoice_data['due_date']) )
			$this->due_date= $this->raised_date;
		else
			$this->due_date=$invoice_data['due_date'];

		if (!isset($invoice_data['subscription']) )
			$this->subscription=$default_subscription;
		else
			$this->subscription=(int)$invoice_data['subscription'];

		if (!isset($invoice_data['currencycode']) )
			$this->currencycode=$default_currencycode;
		else
			$this->currencycode=$invoice_data['currencycode'];

		if (!isset($invoice_data['recur_frequency']) )
			$this->recur_frequency="0";
		else
			$this->recur_frequency=$invoice_data['recur_frequency'];
		
		if (!isset($invoice_data['recur_dayofmonth']) )
			$this->recur_dayofmonth=0;
		else
			$this->recur_dayofmonth=$invoice_data['recur_dayofmonth'];

		$this->commitNewInvoice();

		foreach ($line_items as $item)
			{
			$this->add_line_item($item);
			}
		$this->commitUpdateInvoice();
		}
		
	function update_invoice($invoice_data, $line_items=array())
		{
		$query = "DELETE FROM #__jomresportal_lineitems WHERE inv_id =".$this->id;
		$result = doInsertSql($query."");

		
		if (!isset($invoice_data['id']) )
			{
			error_logging("Couldn't id while updating invoice");
			return false;
			}
		else
			$this->id=$invoice_data['id'];
		$this->getInvoice();
		
		$this->init_total = 0.00;
		$this->recur_total = 0.00;
		
		if (!isset($invoice_data['status']) )
			$this->status=$default_status;
		else
			$this->status=(int)$invoice_data['status'];

		if (!isset($invoice_data['due_date']) )
			$this->due_date=  date( 'Y-m-d H:i:s' );
		else
			$this->due_date=$invoice_data['due_date'];
		//var_dump($line_items);
		foreach ($line_items as $item)
			{
			$this->add_line_item($item);
			//echo $this->init_total."<br>";
			}
		$this->commitUpdateInvoice();
		}
	
	
	
	
	function update_line_item($line_item_data)
		{
		/*
		We;re expecting to see the id,  init_qty, init_discount, recur_qty & recur_discount
		*/

		jr_import('jrportal_lineitem');
		$line_item = new jrportal_lineitem();
		if (!isset($line_item_data['id']) )
			{
			error_logging("Couldn't find id while updating line item");
			return false;
			}
			
		jr_import("jrportal_taxrate");
		$taxrate = new jrportal_taxrate();
		$taxrate->id = $line_item_data['tax_code_id'];
		
		jr_import("jrportal_lineitem");
		$line_item = new jrportal_lineitem();
		if ($taxrate->getTaxRate())
			{
			$line_item->tax_rate			= (float)$taxrate->rate;
			$line_item->tax_code			= $taxrate->code;
			$line_item->tax_description		= $taxrate->description;
			}
		else
			{
			$line_item->tax_rate			= 0.00;
			$line_item->tax_code			= "";
			$line_item->tax_description		= "";
			}

		$line_item->id=$line_item_data['id'];
		$line_item->getLineItem();

		$line_item->init_qty			= $line_item_data['init_qty'];
		$line_item->init_discount		= $line_item_data['init_discount'];

		$line_item->recur_qty			= $line_item_data['recur_qty'];
		$line_item->recur_discount		= $line_item_data['recur_discount'];

		$i_total = ((float)$line_item->init_price*(int)$line_item->init_qty)-(float)$line_item->init_discount;
		$line_item->init_total = $i_total;
		$init_toal_tax=number_format($i_total/100*$line_item->tax_rate,2, '.', '');
		$line_item->init_total_inclusive = $i_total + $init_toal_tax;
		
		$this->init_total = $this->init_total + $line_item->init_total_inclusive;

		$r_total = ((float)$line_item->recur_price*(int)$line_item->recur_qty)-(float)$line_item->recur_discount;
		$recur_toal_tax=number_format(($r_total/100)*$line_item->tax_rate,2, '.', '');
		$line_item->recur_total = $r_total + $recur_toal_tax;
		$this->recur_total = number_format($line_item->recur_total ,2, '.', '');
		
		$line_item->commitUpdateLineItem();
		
		}
		
	function add_line_item($line_item_data)
		{
		$result=$this->check_line_item_data($line_item_data);
		
		if ($result)
			{
			jr_import("jrportal_taxrate");
			$taxrate = new jrportal_taxrate();
			$taxrate->id = $line_item_data['tax_code_id'];

			jr_import("jrportal_lineitem");
			$line_item = new jrportal_lineitem();
			if ($taxrate->getTaxRate())
				{
				$line_item->tax_rate			= (float)$taxrate->rate;
				$line_item->tax_code			= $taxrate->code;
				$line_item->tax_description		= $taxrate->description;
				}
			else
				{
				$line_item->tax_rate			= 0.00;
				$line_item->tax_code			= "";
				$line_item->tax_description		= "";
				}

			$line_item->name				= $line_item_data['name'];
			$line_item->description			= $line_item_data['description'];
			$line_item->init_price			= $line_item_data['init_price'];
			$line_item->init_qty			= $line_item_data['init_qty'];
			$line_item->init_discount		= $line_item_data['init_discount'];
			$line_item->recur_price			= $line_item_data['recur_price'];
			$line_item->recur_qty			= $line_item_data['recur_qty'];
			$line_item->recur_discount		= $line_item_data['recur_discount'];

			$line_item->inv_id				= $this->id;

			$i_total = ((float)$line_item->init_price*(int)$line_item->init_qty)-(float)$line_item->init_discount;
			$line_item->init_total = $i_total;
			$init_toal_tax=number_format($i_total/100*$line_item->tax_rate,2, '.', '');
			$line_item->init_total_inclusive = $i_total + $init_toal_tax;
			
			$this->init_total = $this->init_total + $line_item->init_total_inclusive;

			$r_total = ((float)$line_item->recur_price*(int)$line_item->recur_qty)-(float)$line_item->recur_discount;
			$recur_total_tax=number_format(($r_total/100)*$line_item->tax_rate,2, '.', '');
			$line_item->recur_total = $r_total + $recur_total_tax;

			$this->recur_total = $this->recur_total + $line_item->recur_total;
			$line_item->commitLineItem();
			}
		else
			{
			error_logging("Line item test failed");
			}
		}

	function check_line_item_data($line_item_data)
		{
		//var_dump($line_item_data);exit;
		if (!isset($line_item_data['name']) || $line_item_data['name']=="" )
			{
			error_logging("Line item test failed on item name");
			return false;
			}
		/*
		if (!isset($line_item_data['tax_code_id']) || $line_item_data['tax_code_id']=="" )
			{
			error_logging("Line item test failed on tax_code_id");
			return false;
			}
		*/
		return true;
		}
		
		
	function mark_invoice_paid()
		{
		$this->status=1;
		$this->paid=date( 'Y-m-d H:i:s' );
		$balance = $this->get_line_items_balance();
		$line_items= array();
		if (number_format($balance,2, '.', '') > 0.00)
			{
			$line_item_data = array (
				'tax_code_id'=>0,
				'name'=>jr_gettext('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT',_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT,false,false),
				'description'=>'',
				'init_price'=>"-".number_format($balance,2, '.', ''),
				'init_qty'=>"1",
				'init_discount'=>"0",
				'recur_price'=>"0.00",
				'recur_qty'=>"0",
				'recur_discount'=>"0.00"
				);
			$this->add_line_item($line_item_data);
			}
		$this->commitUpdateInvoice();
		
		}
		
	function mark_invoice_pending()
		{
		$this->status=3;
		$this->paid=date( 'Y-m-d H:i:s' );
		$balance = $this->get_line_items_balance();
		//var_dump($balance);exit;
		$this->commitUpdateInvoice();
		}
		
	function mark_invoice_cancelled()
		{
		$this->status=2;
		$this->commitUpdateInvoice();
		}
	
/* 	function mark_invoice_unpaid()
		{
		$this->status=0;
		$this->commitUpdateInvoice();
		} */

	function get_line_items_balance()
		{
		$query = "SELECT * FROM #__jomresportal_lineitems WHERE inv_id = ".(int)$this->id;
		$result=doSelectSql($query);
		if (count($result)==0)
			return false;
		$bal = 0.0;
		foreach ($result as $r)
			{
			$bal = $bal+(float)$r->init_total_inclusive;
			}
		return $bal;
		}
	}

?>