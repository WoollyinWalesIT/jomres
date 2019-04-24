<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class basic_invoice_details
{
	public function __construct()
	{
		$this->invoice = array();
		$this->status_note = '0 - unpaid , 1 - paid , 2 - cancelled , 3 - pending ';
	}

	public function gatherData($invoice_id = 0)
	{
		if ($invoice_id == 0) {
			throw new Exception('Error: Invoice id not set.');
		}

		if (!array_key_exists($invoice_id, $this->invoice)) {
			$this->get_invoice($invoice_id);
			$this->get_line_items($invoice_id);
		}

		$this->id = $this->invoice[$invoice_id]['id'];
		$this->cms_user_id = $this->invoice[$invoice_id]['cms_user_id'];
		$this->status = $this->invoice[$invoice_id]['status'];
		$this->raised_date = $this->invoice[$invoice_id]['raised_date'];
		$this->due_date = $this->invoice[$invoice_id]['due_date'];
		$this->paid = $this->invoice[$invoice_id]['paid'];
		$this->subscription = $this->invoice[$invoice_id]['subscription'];
		$this->init_total = $this->invoice[$invoice_id]['init_total'];
		$this->currencycode = $this->invoice[$invoice_id]['currencycode'];
		$this->subscription_id = $this->invoice[$invoice_id]['subscription_id'];
		$this->contract_id = $this->invoice[$invoice_id]['contract_id'];
		$this->property_uid = $this->invoice[$invoice_id]['property_uid'];
		$this->is_commission = $this->invoice[$invoice_id]['is_commission'];
		$this->vat_will_be_charged = $this->invoice[$invoice_id]['vat_will_be_charged'];
		$this->lineitems = $this->invoice[$invoice_id]['lineitems'];
		$this->invoice_number = $this->invoice[$invoice_id]['invoice_number'];

		//Grand total is the sum of all line items (positive or negative), except payments line items.
		//Amount already paid is the sum of the payment line items.
		$this->grand_total_ex_tax = 0.00;
		$this->grand_total_inc_tax = 0.00;
		$this->grand_total_tax = 0.00;
		$this->amount_already_paid = 0.00;
		$this->balance = 0.00;

		if (!empty($this->lineitems)) {
			foreach ($this->lineitems as $li) {
				if ($li[ 'is_payment' ] == 0) {
					$this->grand_total_ex_tax += $li[ 'init_total' ];
					if ($this->vat_will_be_charged) {
						$this->grand_total_inc_tax += $li[ 'init_total_inclusive' ];
						$tax_amount = $li[ 'init_total_inclusive' ] - $li[ 'init_total' ];
					} else {
						$this->grand_total_inc_tax += $li[ 'init_total' ];
						$tax_amount = 0;
					}
					$this->grand_total_tax += $tax_amount;
				} else {
					$this->amount_already_paid += $li[ 'init_total_inclusive' ];
				}
			}
		}

		$this->balance = $this->grand_total_inc_tax + $this->amount_already_paid;

		return true;
	}

	//Get the invoice details
	public function get_invoice($invoice_id)
	{
		$query = "SELECT `id`,
						`cms_user_id`,
						`status`,
						`raised_date`,
						`due_date`,
						`paid`,
						`subscription`,
						`init_total`,
						`currencycode`,
						`subscription_id`,
						`contract_id`,
						`property_uid`,
						`is_commission`,
						`vat_will_be_charged`,
						`invoice_number`
					FROM #__jomresportal_invoices 
					WHERE `id`= $invoice_id 
					LIMIT 1";

		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			$this->invoice[$r->id]['id'] = $r->id;
			$this->invoice[$r->id]['cms_user_id'] = $r->cms_user_id;
			$this->invoice[$r->id]['status'] = $r->status;
			$this->invoice[$r->id]['raised_date'] = $r->raised_date;
			$this->invoice[$r->id]['due_date'] = $r->due_date;
			$this->invoice[$r->id]['paid'] = $r->paid;
			$this->invoice[$r->id]['subscription'] = $r->subscription;
			$this->invoice[$r->id]['init_total'] = $r->init_total;
			$this->invoice[$r->id]['currencycode'] = $r->currencycode;
			$this->invoice[$r->id]['subscription_id'] = $r->subscription_id;
			$this->invoice[$r->id]['contract_id'] = $r->contract_id;
			$this->invoice[$r->id]['property_uid'] = $r->property_uid;
			$this->invoice[$r->id]['is_commission'] = $r->is_commission;
			$this->invoice[$r->id]['vat_will_be_charged'] = $r->vat_will_be_charged;
			$this->invoice[$r->id]['invoice_number'] = $r->invoice_number;
		}

		return true;
	}

	//Get the line items for invoice id
	public function get_line_items($invoice_id)
	{
		$query = 'SELECT 
						`id`,
						`name`,
						`description`,
						`init_price`,
						`init_qty`,
						`init_discount`,
						`init_total`,
						`init_total_inclusive`,
						`tax_code`,
						`tax_description`,
						`tax_rate`,
						`inv_id`,
						`is_payment` ,
						`payment_method`,
						`transaction_id`,
						`management_url`
					FROM #__jomresportal_lineitems 
					WHERE `inv_id` = ' .(int) $invoice_id;
		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'id' ] = $r->id;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'name' ] = $r->name;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'description' ] = $r->description;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'init_price' ] = $r->init_price;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'init_qty' ] = $r->init_qty;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'init_discount' ] = $r->init_discount;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'init_total' ] = $r->init_total;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'init_total_inclusive' ] = $r->init_total_inclusive;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'tax_code' ] = $r->tax_code;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'tax_description' ] = $r->tax_description;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'tax_rate' ] = $r->tax_rate;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'inv_id' ] = $r->inv_id;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'is_payment' ] = $r->is_payment;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'payment_method' ] = $r->payment_method;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'transaction_id' ] = $r->transaction_id;
			$this->invoice[$invoice_id]['lineitems'][ $r->id ][ 'management_url' ] = $r->management_url;
			
			if ($this->invoice[$invoice_id]['vat_will_be_charged'] && $r->init_total_inclusive > 0 && $r->is_payment == 0) {
				$this->invoice[$invoice_id]['lineitems'][ $r->id ]['tax_amount'] = $r->init_total_inclusive - $r->init_total;
			} else {
				$this->invoice[$invoice_id]['lineitems'][ $r->id ]['tax_amount'] = 0;
			}
		}

		return true;
	}
}
