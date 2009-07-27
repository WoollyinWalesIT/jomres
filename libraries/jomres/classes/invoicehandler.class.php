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

// Status:
// 0 unpaid
// 1 paid
// 2 cancelled

class invoicehandler extends jrportal_invoice
	{

	function create_new_invoice($invoice_data, $line_items=array() )
		{
		global $jrConfig;
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
		$this->init_total = 0.00;
		$this->recur_total = 0.00;
		
		if (!isset($invoice_data['id']) )
			{
			error_logging("Couldn't id while updating invoice");
			return false;
			}
		else
			$this->id=$invoice_data['id'];
		$this->getInvoice();
		
		if (!isset($invoice_data['status']) )
			$this->status=$default_status;
		else
			$this->status=(int)$invoice_data['status'];

		if (!isset($invoice_data['due_date']) )
			$this->due_date=  date( 'Y-m-d H:i:s' );
		else
			$this->due_date=$invoice_data['due_date'];
			
		foreach ($line_items as $item)
			{
			$this->add_line_item($item);
			}
		$this->commitUpdateInvoice();
		}
		
	function update_line_item($line_item_data)
		{
		/*
		We;re expecting to see the id,  init_qty, init_discount, recur_qty & recur_discount
		*/

		$line_item = new jrportal_lineitem();
		if (!isset($line_item_data['id']) )
			{
			error_logging("Couldn't id while updating line item");
			return false;
			}
		$line_item->id=$line_item_data['id'];
		$line_item->getLineItem();

		$line_item->init_qty			= $line_item_data['init_qty'];
		$line_item->init_discount		= $line_item_data['init_discount'];

		$line_item->recur_qty			= $line_item_data['recur_qty'];
		$line_item->recur_discount		= $line_item_data['recur_discount'];

		$i_total = ((float)$line_item->init_price*(int)$line_item->init_qty)-(float)$line_item->init_discount;
		$init_toal_tax=number_format($i_total/100*$line_item->tax_rate,2, '.', '');
		$line_item->init_total = $i_total + $init_toal_tax;
		$this->init_total = number_format($this->init_total + $line_item->init_total,2, '.', '');
		
		$r_total = ((float)$line_item->recur_price*(int)$line_item->recur_qty)-(float)$line_item->recur_discount;
		$recur_toal_tax=number_format(($r_total/100)*$line_item->tax_rate,2, '.', '');
		$line_item->recur_total = $r_total + $recur_toal_tax;
		$this->recur_total = number_format($this->recur_total + $line_item->recur_total,2, '.', '');
		
		$line_item->commitUpdateLineItem();
		
		}
		
	function add_line_item($line_item_data)
		{
		$result=$this->check_line_item_data($line_item_data);
		
		if ($result)
			{
			$taxrate = new jrportal_taxrate();
			$taxrate->id = $line_item_data['tax_code_id'];

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
			$init_toal_tax=number_format($i_total/100*$line_item->tax_rate,2, '.', '');
			$line_item->init_total = $i_total + $init_toal_tax;

			$this->init_total = $this->init_total + $line_item->init_total;

			$r_total = ((float)$line_item->recur_price*(int)$line_item->recur_qty)-(float)$line_item->recur_discount;
			$recur_total_tax=number_format(($r_total/100)*$line_item->tax_rate,2, '.', '');
			$line_item->recur_total = $r_total + $recur_total_tax;

			$this->recur_total = $this->recur_total + $line_item->recur_total;

			$line_item->commitLineItem();
			}
		else
			error_logging("Line item test failed");
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
		$this->commitUpdateInvoice();
		}
		
	function mark_invoice_pending()
		{
		$this->status=3;
		$this->commitUpdateInvoice();
		}
		
	function mark_invoice_cancelled()
		{
		$this->status=2;
		$this->commitUpdateInvoice();
		}
	}

?>