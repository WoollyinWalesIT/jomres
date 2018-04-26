<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_invoice
{
    public function __construct()
    {
        $this->init_invoice();
        $this->init_lineitem();
		
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
	
    }

    public function init_invoice()
    {
        $this->id = 0;
        $this->cms_user_id = 0;
        $this->status = 0;
        $this->raised_date = date('Y-m-d H:i:s');
        $this->due_date = $this->raised_date;
        $this->paid = '1970-01-01 00:00:01';
        $this->subscription = 0;
        $this->init_total = 0.00;
        $this->currencycode = 'GBP';
        $this->subscription_id = 0;
        $this->contract_id = 0;
        $this->property_uid = 0;
        $this->is_commission = 0;
        $this->charging_business_is_in_eu = false; // If the seller isn't in the EU then we'll ignore the VAT question and just charge tax anyway.
        $this->vat_will_be_charged = true;
    }

    public function init_lineitem()
    {
        $this->lineitem = array();
        $this->lineitem['id'] = 0;
        $this->lineitem['name'] = '';
        $this->lineitem['description'] = '';
        $this->lineitem['init_price'] = 0.00;
        $this->lineitem['init_qty'] = 0.00;
        $this->lineitem['init_discount'] = 0.00;
        $this->lineitem['init_total'] = 0.00;
        $this->lineitem['init_total_inclusive'] = 0.00;
        $this->lineitem['tax_code'] = '';
        $this->lineitem['tax_description'] = '';
        $this->lineitem['tax_rate '] = 0.00;
        $this->lineitem['inv_id'] = 0;
        $this->lineitem['is_payment'] = 0;
		$this->lineitem['payment_method'] = '';
		$this->lineitem['transaction_id'] = '';
		$this->lineitem['management_url'] = '';
		
    }

    //Create a new invoice
    public function create_new_invoice($invoice_data, $line_items = array())
    {
        if (empty($line_items)) {
            error_logging('No line items passed for new invoice.');

            return false;
        }

        $this->cms_user_id = (int) $invoice_data[ 'cms_user_id' ];

        if (isset($invoice_data[ 'raised_date' ])) {
            $this->due_date = $invoice_data[ 'raised_date' ];
        }

        if (isset($invoice_data[ 'due_date' ])) {
            $this->due_date = $invoice_data[ 'due_date' ];
        }

        if (isset($invoice_data[ 'subscription' ])) {
            $this->subscription = (int) $invoice_data[ 'subscription' ];
        }

        if (isset($invoice_data[ 'subscription_id' ])) {
            $this->subscription_id = (int) $invoice_data[ 'subscription_id' ];
        }

        if (isset($invoice_data[ 'is_commission' ])) {
            $this->is_commission = (int) $invoice_data[ 'is_commission' ];
        }

        if (isset($invoice_data[ 'currencycode' ])) {
            $this->currencycode = $invoice_data[ 'currencycode' ];
        }

        if (isset($invoice_data[ 'status' ])) {
            $this->status = (int) $invoice_data[ 'status' ];
        }

        //insert the new invoice
        $this->commitNewInvoice();

		$this->create_pii_buyer();
		$this->create_pii_seller();
		
        foreach ($line_items as $line_item_data) {
            $this->add_line_item($line_item_data);
        }

        //update the invoice with new totals after inserting the line items
        $this->commitUpdateInvoice();
    }

	// Intended for use by the update script of 9.11, it converts an invoice user's PII from open data to encrypted once handed an invoice id
	public function convert_pii_data()
	{
		if ($this->id == 0 ) {
			throw new Exception("Cannot convert invoice, invoice id not set.");
		}
		
		$buyer_result = $this->create_pii_buyer();
		$seller_result = $this->create_pii_seller();

		if (!$buyer_result || !$seller_result ) {
			if ( !$buyer_result ) {
				error_logging('Could not convert invoice id '.$this->id.' buyer PII data' );
			}
			if ( !$seller_result ) {
				error_logging('Could not convert invoice id '.$this->id.' seller PII data' );
			}
		}
		
	}
	
	// Personally Identifable information will be stored in the buyer table
	private function create_pii_buyer()
	{
		$invoice_id = $this->id;
		
        $query = "SELECT
					`enc_firstname`,
					`enc_surname`,
					`enc_house`,
					`enc_street`,
					`enc_town`,
					`enc_county`, 
					`enc_country`, 
					`enc_postcode`, 
					`enc_tel_landline`,
					`enc_tel_mobile`,
					`enc_email`,
					`enc_vat_number`
				FROM `#__jomres_guest_profile` WHERE cms_user_id = ".(int) $this->cms_user_id."
				";
		$user_details = doSelectSql($query , 2 );

		$query = "INSERT INTO #__jomres_invoice_pii_buyers 
			(
				`invoice_id`,
				`enc_firstname`,
				`enc_surname`,
				`enc_house`,
				`enc_street`,
				`enc_town`,
				`enc_county`, 
				`enc_country`, 
				`enc_postcode`, 
				`enc_tel_landline`,
				`enc_tel_mobile`,
				`enc_email`,
				`enc_vat_number`
			)
			VALUES
			(
			".(int)$this->id.",
			'".$user_details['enc_firstname']."',
			'".$user_details['enc_surname']."',
			'".$user_details['enc_house']."',
			'".$user_details['enc_street']."',
			'".$user_details['enc_town']."',
			'".$user_details['enc_county']."',
			'".$user_details['enc_country']."',
			'".$user_details['enc_postcode']."',
			'".$user_details['enc_tel_landline']."',
			'".$user_details['enc_tel_mobile']."',
			'".$user_details['enc_email']."',
			'".$user_details['enc_vat_number']."'
			)";

		$result = doInsertSql($query, "");
		return $result;
	}
	
	private function create_pii_seller()
	{
		$invoice_id = $this->id;
		 if ((int) $this->contract_id > 0) { // It's a booking invoice, therefore the seller is the property manager
			$mrConfig = getPropertySpecificSettings($this->property_uid);
			$manager_id = find_manager_id_for_property_uid($this->property_uid);
			
			$query = "SELECT
						`enc_firstname`,
						`enc_surname`
					FROM `#__jomres_guest_profile` WHERE cms_user_id = ".(int)$manager_id."
					";
			$manager_details = doSelectSql($query , 2 );
			if (!$manager_details === false ) {
				$manager_details = $this->jomres_encryption->decrypt($manager_details['enc_firstname'])." ".$this->jomres_encryption->decrypt($manager_details['enc_surname']);
			} else {
				$manager_details = "";
			}

			$user_details = array();
			
			$user_details['enc_firstname']	=$this->jomres_encryption->encrypt($mrConfig['property_business_name']);
			$user_details['enc_surname']	=$this->jomres_encryption->encrypt($manager_details);
			$user_details['enc_house']		=$this->jomres_encryption->encrypt($mrConfig['property_business_houseno']);
			$user_details['enc_street']		=$this->jomres_encryption->encrypt($mrConfig['property_business_street']);
			$user_details['enc_town']		=$this->jomres_encryption->encrypt($mrConfig['property_business_town']);
			$user_details['enc_county']		=$this->jomres_encryption->encrypt($mrConfig['property_business_region']);
			$user_details['enc_country']	=$this->jomres_encryption->encrypt($mrConfig['property_business_country']);
			$user_details['enc_postcode']	=$this->jomres_encryption->encrypt($mrConfig['property_business_postcode']);
			$user_details['enc_tel_landline']=$this->jomres_encryption->encrypt($mrConfig['property_business_telephone']);
			$user_details['enc_tel_mobile']	='';
			$user_details['enc_email']		=$this->jomres_encryption->encrypt($mrConfig['property_business_email']);
			$user_details['enc_vat_number']	=$this->jomres_encryption->encrypt($mrConfig['property_vat_number']);
			
        } else { //this is a commission/subscription invoice, therefore the seller is the "site" owner
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			
			$user_details = array();
			
			$user_details['enc_firstname']	=$this->jomres_encryption->encrypt( $jrConfig[ 'business_name' ] );
			$user_details['enc_surname']	= '';
			$user_details['enc_house']		=$this->jomres_encryption->encrypt( $jrConfig[ 'business_address' ] );
			$user_details['enc_street']		=$this->jomres_encryption->encrypt( $jrConfig[ 'business_street' ] );
			$user_details['enc_town']		=$this->jomres_encryption->encrypt( $jrConfig[ 'business_town' ] );
			$user_details['enc_county']		=$this->jomres_encryption->encrypt( $jrConfig[ 'business_region' ] );
			$user_details['enc_country']	=$this->jomres_encryption->encrypt( $jrConfig[ 'business_country' ] );
			$user_details['enc_postcode']	=$this->jomres_encryption->encrypt( $jrConfig[ 'business_postcode' ] );
			$user_details['enc_tel_landline']=$this->jomres_encryption->encrypt( $jrConfig[ 'business_telephone' ] );
			$user_details['enc_tel_mobile']	='';
			$user_details['enc_email']		=$this->jomres_encryption->encrypt( $jrConfig[ 'business_email' ] );
			$user_details['enc_vat_number']	=$this->jomres_encryption->encrypt( $jrConfig[ 'business_vat_number' ] );
        }
		
		$query = "INSERT INTO #__jomres_invoice_pii_sellers
			(
				`invoice_id`,
				`enc_firstname`,
				`enc_surname`,
				`enc_house`,
				`enc_street`,
				`enc_town`,
				`enc_county`, 
				`enc_country`, 
				`enc_postcode`, 
				`enc_tel_landline`,
				`enc_tel_mobile`,
				`enc_email`,
				`enc_vat_number`
			)
			VALUES
			(
			".(int)$this->id.",
			'".$user_details['enc_firstname']."',
			'".$user_details['enc_surname']."',
			'".$user_details['enc_house']."',
			'".$user_details['enc_street']."',
			'".$user_details['enc_town']."',
			'".$user_details['enc_county']."',
			'".$user_details['enc_country']."',
			'".$user_details['enc_postcode']."',
			'".$user_details['enc_tel_landline']."',
			'".$user_details['enc_tel_mobile']."',
			'".$user_details['enc_email']."',
			'".$user_details['enc_vat_number']."'
			)";

		$result = doInsertSql($query, "");
		return $result;
	}
	
	
    //Add a new line item
    public function add_line_item($line_item_data)
    {
        if (!$this->check_line_item_data($line_item_data)) {
            error_logging('Line item test failed');

            return false;
        }

        $this->lineitem['id'] = 0;

        $jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

        if ($jrportal_taxrate->gather_data($line_item_data[ 'tax_code_id' ])) {
            $this->lineitem['tax_rate'] = $jrportal_taxrate->rate;
            $this->lineitem['tax_code'] = $jrportal_taxrate->code;
            $this->lineitem['tax_description'] = $jrportal_taxrate->description;
        } else {
            $this->lineitem['tax_rate'] = 0.00;
            $this->lineitem['tax_code'] = '';
            $this->lineitem['tax_description'] = '';
        }

        $this->lineitem['name'] = $line_item_data[ 'name' ];
        $this->lineitem['description'] = $line_item_data[ 'description' ];
        $this->lineitem['init_price'] = $line_item_data[ 'init_price' ];
        $this->lineitem['init_qty'] = $line_item_data[ 'init_qty' ];
        $this->lineitem['init_discount'] = $line_item_data[ 'init_discount' ];

        if (isset($line_item_data[ 'is_payment' ])) {
            $this->lineitem['is_payment'] = (int) $line_item_data[ 'is_payment' ];
        } else {
			$this->lineitem['is_payment'] = 0;
		}
		if (!isset($line_item_data[ 'payment_method' ])) {
			$line_item_data[ 'payment_method' ] = '';
			$line_item_data[ 'management_url' ] = '';
			$line_item_data[ 'transaction_id' ] = '';
		}
			
		
		$this->lineitem['payment_method']	= $line_item_data[ 'payment_method' ];
		$this->lineitem['management_url']	= $line_item_data[ 'management_url' ];
		$this->lineitem['transaction_id']	= $line_item_data[ 'transaction_id' ];
		
        $this->lineitem['inv_id'] = $this->id;

        $i_total = ($this->lineitem['init_price'] * $this->lineitem['init_qty']) + $this->lineitem['init_discount'];
		
        $this->lineitem['init_total'] = number_format($i_total, 2, '.', '');

        if ($this->vat_will_be_charged) {
            $init_total_tax = $this->lineitem['tax_rate'] * ($i_total / 100);
        } else {
            $init_total_tax = 0;
        }

        $this->lineitem['init_total_inclusive'] = number_format($i_total + $init_total_tax, 2, '.', '');

        $this->init_total = number_format($this->init_total + $i_total + $init_total_tax, 2, '.', '');

        //insert the new line item
        $this->commitLineItem();
    }

    //Update an existing invoice by deleting all line items and inserting new ones
    public function update_invoice($invoice_data, $line_items = array())
    {
        $query = 'DELETE FROM #__jomresportal_lineitems WHERE inv_id ='.$this->id;
        $result = doInsertSql($query.'');

        if (!isset($invoice_data[ 'id' ])) {
            error_logging('Invoice id not set');

            return false;
        } else {
            $this->id = $invoice_data[ 'id' ];
        }

        $this->getInvoice();

        if (isset($invoice_data[ 'status' ])) {
            $this->status = (int) $invoice_data[ 'status' ];
        }

        if (isset($invoice_data[ 'due_date' ])) {
            $this->due_date = $invoice_data[ 'due_date' ];
        }

        if (isset($invoice_data[ 'cms_user_id' ])) {
            $this->cms_user_id = (int) $invoice_data[ 'cms_user_id' ];
        }

        if (isset($invoice_data[ 'currencycode' ])) {
            $this->currencycode = $invoice_data[ 'currencycode' ];
        }

        $this->init_total = 0.00;

        foreach ($line_items as $item) {
            $this->add_line_item($item);
        }

        $this->commitUpdateInvoice();
    }

    //Update line item, not currently used. It`ll stay here for now, just in case we`ll add invoice editing features in the future
    public function update_line_item($line_item_data)
    {
        //We;re expecting to see the id,  init_qty, init_discount
        if (!isset($line_item_data[ 'id' ])) {
            error_logging('Line item id not set');

            return false;
        }

        $jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

        if ( isset($line_item_data[ 'tax_code_id' ]) && $jrportal_taxrate->gather_data($line_item_data[ 'tax_code_id' ])) {
            $this->lineitem['tax_rate'] = (float) $jrportal_taxrate->rate;
            $this->lineitem['tax_code'] = $jrportal_taxrate->code;
            $this->lineitem['tax_description'] = $jrportal_taxrate->description;
        } else {
            $this->lineitem['tax_rate'] = 0.00;
            $this->lineitem['tax_code'] = '';
            $this->lineitem['tax_description'] = '';
        }

        $this->lineitem['id'] = $line_item_data[ 'id' ];
        $this->getLineItem();

        $this->lineitem['init_qty'] = $line_item_data[ 'init_qty' ];
        $this->lineitem['init_discount'] = $line_item_data[ 'init_discount' ];
        $this->lineitem['is_payment'] = (int) $line_item_data[ 'is_payment' ];
		$this->lineitem['payment_method'] = (string) $line_item_data[ 'payment_method' ];
		$this->lineitem['transaction_id'] = (int) $line_item_data[ 'transaction_id' ];
		$this->lineitem['management_url'] = (int) $line_item_data[ 'management_url' ];
		
		
        $i_total = ($this->lineitem['init_price'] * $this->lineitem['init_qty']) - $this->lineitem['init_discount'];
		
		$this->lineitem['init_total'] = number_format($i_total, 2, '.', '');

        if ($this->vat_will_be_charged) {
            $init_total_tax = $this->lineitem['tax_rate'] * ($i_total / 100);
        } else {
            $init_total_tax = 0;
        }

        $this->lineitem['init_total_inclusive'] = number_format($i_total + $init_total_tax, 2, '.', '');

        $this->init_total = number_format($this->init_total + $i_total + $init_total_tax, 2, '.', '');

        $this->commitUpdateLineItem();
    }

    //Check the line item data and if it doesn`t have a name, return false and don`t insert the line item
    public function check_line_item_data($line_item_data)
    {
        if (!isset($line_item_data[ 'name' ]) || $line_item_data[ 'name' ] == '') {
            error_logging('Line item test failed on item name');

            return false;
        }

        return true;
    }

    //Get the invoice details
    public function getInvoice()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

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
						`vat_will_be_charged`
					FROM #__jomresportal_invoices 
					WHERE `id`= " . (int)$this->id . " 
					LIMIT 1";

        $result = doSelectSql($query);

        if ($result && count($result) == 1) {
            foreach ($result as $r) {
                $this->id = $r->id;
                $this->cms_user_id = $r->cms_user_id;
                $this->status = $r->status;
                $this->raised_date = $r->raised_date;
                $this->due_date = $r->due_date;
                $this->paid = $r->paid;
                $this->subscription = $r->subscription;
                $this->init_total = $r->init_total;
                $this->currencycode = $r->currencycode;
                $this->subscription_id = $r->subscription_id;
                $this->contract_id = $r->contract_id;
                $this->property_uid = $r->property_uid;
                $this->is_commission = $r->is_commission;
                $this->vat_will_be_charged = $r->vat_will_be_charged;
            }
            $this->set_vat_charging_flag();

            return true;
        } else {
            if (empty($result)) {
                error_logging('No Invoices were found with that id');

                return false;
            }
            if (count($result) > 1) {
                error_logging('More than one Invoice was found with that id');

                return false;
            }
        }
    }

    //Get the line item details
    public function getLineItem()
    {
        if ((int) $this->lineitem['id'] == 0) {
            error_logging('Line item id not set');

            return false;
        }

        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $query = "SELECT `id`,
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
						`is_payment`,
						`payment_method`,
						`transaction_id`,
						`management_url`
					FROM #__jomresportal_lineitems 
					WHERE `id` = " . (int)$this->lineitem['id'] . " 
						AND `inv_id` = " . (int)$this->id . "
					LIMIT 1";

        $result = doSelectSql($query);

        if ($result && count($result) == 1) {
            foreach ($result as $r) {
                $this->lineitem['id'] = $r->id;
                $this->lineitem['name'] = $r->name;
                $this->lineitem['description'] = $r->description;
                $this->lineitem['init_price'] = $r->init_price;
                $this->lineitem['init_qty'] = $r->init_qty;
                $this->lineitem['init_discount'] = $r->init_discount;
                $this->lineitem['init_total'] = $r->init_total;
                $this->lineitem['init_total_inclusive'] = $r->init_total_inclusive;
                $this->lineitem['tax_code'] = $r->tax_code;
                $this->lineitem['tax_description'] = $r->tax_description;
                $this->lineitem['tax_rate'] = $r->tax_rate;
                $this->lineitem['inv_id'] = $r->inv_id;
                $this->lineitem['is_payment'] = $r->is_payment;
				$this->lineitem['payment_method'] = $r->payment_method;
				$this->lineitem['transaction_id'] = $r->transaction_id;
				$this->lineitem['management_url'] = $r->management_url;
				
            }

            return true;
        } else {
            if (empty($result)) {
                error_logging('No Line Items were found with that id');

                return false;
            }
            if (count($result) > 1) {
                error_logging('More than one Line Item rate was found with that id');

                return false;
            }
        }
		
		return false;
    }

    //Insert a new invoice with no line items
    public function commitNewInvoice()
    {
        $this->set_vat_charging_flag();

        if ($this->id < 1) {
            $query = 'INSERT INTO #__jomresportal_invoices
							(
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
							`vat_will_be_charged`
							)
							VALUES
							(
							 ' .(int) $this->cms_user_id.',
							 ' .(int) $this->status.",
							'$this->raised_date',
							'$this->due_date',
							'$this->paid',
							".(int) $this->subscription.",
							'$this->init_total',
							'$this->currencycode',
							".(int) $this->subscription_id.',
							' .(int) $this->contract_id.',
							' .(int) $this->property_uid.',
							' .(int) $this->is_commission.',
							' .(int) $this->vat_will_be_charged.'
							)';

            $invoice_id = doInsertSql($query, '');

            if ((int) $invoice_id > 0) {
                $this->id = (int) $invoice_id;
                
                $webhook_notification                               = new stdClass();
                $webhook_notification->webhook_event                = 'invoice_created';
                $webhook_notification->webhook_event_description    = 'Logs when an invoice is created.';
                $webhook_notification->webhook_event_plugin         = 'core';
                $webhook_notification->data                         = new stdClass();
                $webhook_notification->data->property_uid           = $this->property_uid;
                $webhook_notification->data->invoice_uid            = $this->id;
                add_webhook_notification($webhook_notification);
            
                return true;
            } else {
                error_logging('ID of Invoice could not be found after apparent successful insert');

                return false;
            }
        }
        error_logging('ID of Invoice already available. Are you sure you are creating a new Invoice?');

        return false;
    }

    //Insert a new line item
    public function commitLineItem()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        if ($this->lineitem['id'] < 1) {
            $query = 'INSERT INTO #__jomresportal_lineitems
				(
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
				`is_payment`,
				`payment_method`,
				`transaction_id`,
				`management_url`
				)
				VALUES
				(
				"'.$this->lineitem['name'].'",
				"'.$this->lineitem['description'].'",
				' .$this->lineitem['init_price'].',
				' .$this->lineitem['init_qty'].',
				' .$this->lineitem['init_discount'].',
				' .$this->lineitem['init_total'].',
				' .$this->lineitem['init_total_inclusive'].",
				'".$this->lineitem['tax_code']."',
				'".$this->lineitem['tax_description']."',
				" .$this->lineitem['tax_rate'].',
				' .(int) $this->id.',
				' .(int) $this->lineitem['is_payment'].',
				"' .$this->lineitem['payment_method'].'",
				"' .$this->lineitem['transaction_id'].'",
				"' .$this->lineitem['management_url'].'"
				)';

            $lineitem_id = doInsertSql($query, '');

            if ((int) $lineitem_id > 0) {
				$this->last_added_line_item_id = $lineitem_id;
                $this->lineitem['id'] = (int) $lineitem_id;
            
                return true;
            } else {
                error_logging('ID of Line Item could not be found after apparent successful insert');

                return false;
            }
        }
        error_logging('ID of Line Item already available. Are you sure you are creating a new line item?');

        return false;
    }

    //Update an existing invoice
    public function commitUpdateInvoice()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $this->set_vat_charging_flag();

        $query = 'UPDATE #__jomresportal_invoices SET
						`cms_user_id`		= '.(int) $this->cms_user_id.',
						`status`			= '.(int) $this->status.",
						`raised_date`		= '$this->raised_date',
						`due_date`			= '$this->due_date',
						`paid`				= '$this->paid',
						`subscription`		= ".(int) $this->subscription.',
						`init_total`		= '.$this->init_total.",
						`currencycode` 		= '$this->currencycode',
						`subscription_id` 	= ".(int) $this->subscription_id.',
						`contract_id` 		= '.(int) $this->contract_id.',
						`property_uid` 		= '.(int) $this->property_uid.',
						`is_commission`		= '.(int) $this->is_commission.',
						`vat_will_be_charged` = '.(int) $this->vat_will_be_charged."
					WHERE `id`= " . (int)$this->id;

        $webhook_notification                               = new stdClass();
		$webhook_notification->webhook_event                = 'invoice_updated';
		$webhook_notification->webhook_event_description    = 'Logs when an invoice is updated.';
		$webhook_notification->webhook_event_plugin         = 'core';
		$webhook_notification->data                         = new stdClass();
		$webhook_notification->data->property_uid           = $this->property_uid;
		$webhook_notification->data->invoice_uid            = $this->id;
		add_webhook_notification($webhook_notification);
                
        return doInsertSql($query, '');
    }

    //Update existing line item
    public function commitUpdateLineItem()
    {
        if ((int) $this->lineitem['id'] == 0) {
            error_logging('Line item id not set');

            return false;
        }
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $query = "UPDATE #__jomresportal_lineitems SET
						`name` 					= '".$this->lineitem['name']."',
						`description` 			= '".$this->lineitem['description']."',
						`init_price` 			= ".$this->lineitem['init_price'].',
						`init_qty` 				= ' .$this->lineitem['init_qty'].',
						`init_discount` 		= ' .$this->lineitem['init_discount'].',
						`init_total` 			= ' .$this->lineitem['init_total'].',
						`init_total_inclusive`	= ' .$this->lineitem['init_total_inclusive'].",
						`tax_code` 				= '".$this->lineitem['tax_code']."',
						`tax_description` 		= '".$this->lineitem['tax_description']."',
						`tax_rate` 				= ".$this->lineitem['tax_rate'].',
						`inv_id` 				= ' .(int) $this->id.',
						`is_payment`			= ' .(int) $this->lineitem['is_payment'].',
						`payment_method`			= "' .(string) $this->lineitem['payment_method'].'",
						`transaction_id`			= "' .(string) $this->lineitem['transaction_id'].'",
						`management_url`			= "' .(string) $this->lineitem['management_url'].'"
					WHERE `id`=' .(int)$this->lineitem['id'];
        return doInsertSql($query, '');
    }

    //Delete a line item by id
    public function deleteLineItemById($line_item_id = 0)
    {
        if ((int) $line_item_id < 1) {
            error_logging('Line item id not set');

            return false;
        }

        $query = 'DELETE FROM #__jomresportal_lineitems WHERE `id` = '.$line_item_id;
        
        return doInsertSql($query, '');
    }

    //Get the invoice booking number by contract uid. TODO: Is this really needed here? We already have a _jomres_contracts query in j06005view_invoice.class.php.
    public function get_invoice_booking_number($contract_uid = 0)
    {
        if ((int) $contract_uid == 0) {
            error_logging('Contract uid not set');

            return false;
        }

        $query = 'SELECT tag FROM #__jomres_contracts WHERE contract_uid = '.(int) $contract_uid;

        return doSelectSql($query, 1);
    }

    //Check if we'll charge VAT or not for this b2b invoice and set the flag
    public function b2b_transaction_is_vat_to_be_charged()
    {
        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        // VAT for hotel bookings is complicated by cross border issues, the whole subject is very difficult so at this point it's much easier to say that if it's a hotel booking, then
        // we will always charge VAT. Change bookings_can_be_vat_exempt to true to allow bookings to be exempt.

        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        $bookings_can_be_vat_exempt = false;
        if ($this->subscription == 0 && $this->is_commission == 0) {
            if (!$bookings_can_be_vat_exempt) {
                $this->vat_will_be_charged = true;

                return;
            }
        }

        jr_import('vat_number_validation');

        if ($this->subscription == 0 && $this->is_commission == 1) { // It's a site -> property transaction (commission), let's get the property's vat details.
            $buyer_validation = new vat_number_validation();
            $buyer_validation->get_subject('buyer_registered_byprofile_id', array('profile_id' => $this->cms_user_id));

            $seller_validation = new vat_number_validation();
            $seller_validation->get_subject('site', array());
        } elseif ($this->subscription == 1 && $this->is_commission == 0) { // It's a site -> property transaction (subscription), let's get the manager's vat details.
            $buyer_validation = new vat_number_validation();
            $buyer_validation->get_subject('buyer_registered_byprofile_id', array('profile_id' => $this->cms_user_id));

            $seller_validation = new vat_number_validation();
            $seller_validation->get_subject('site', array());
        } else { // It's a Property -> buyer transaction
            $buyer_validation = new vat_number_validation();
            $buyer_validation->get_subject('buyer_registered_byprofile_id', array('profile_id' => $this->cms_user_id));

            $seller_validation = new vat_number_validation();
            $seller_validation->get_subject('property', array('property_uid' => $this->property_uid));
        }

        $euro_countries = $buyer_validation->get_euro_countries();

        // Test case
        // $seller_validation->vat_number_validated = "0";
        // $seller_validation->vat_number_validated = "1";
        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        // You can't charge vat if you're not vat registered (In the UK, presumably it's the same across the EU).
        if ($seller_validation->vat_number_validated == '0') {
            $this->vat_will_be_charged = false;

            return;
        }

        // From this point onwards we know that the seller is using a valid VAT number.

        // Test case
        // $buyer_validation->country = "GB"; $this->charging_business_is_in_eu = false; // buyer is in EU, seller is not
        // $buyer_validation->country = "GB"; $this->charging_business_is_in_eu = true; // buyer is in EU, seller is in EU
        // $buyer_validation->country = "US"; $this->charging_business_is_in_eu = false; // buyer is not in EU, seller is not in EU
        // $buyer_validation->country = "US"; $this->charging_business_is_in_eu = true; // buyer is not in EU, seller is in EU
        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        // The buyer isn't in an EU country, but the seller is, we will not charge them VAT
        if (!array_key_exists($buyer_validation->country, $euro_countries) && $this->charging_business_is_in_eu) {
            $this->vat_will_be_charged = false;

            return;
        }

        // Test case
        // $buyer_validation->country = "GB"; $seller_validation->country = "FR"; // buyer is in GB, seller is in FR
        // $buyer_validation->country = "GB"; $seller_validation->country = "GB"; // buyer is in GB, seller is in GB
        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        // They're in the same country,  VAT'll be charged
        if ($buyer_validation->country == $seller_validation->country) {
            $this->vat_will_be_charged = true;

            return;
        }

        // Test case
        // $buyer_validation->country = "GB"; $this->charging_business_is_in_eu = true; $buyer_validation->country ="GB"; $seller_validation->country ="DE"; $buyer_validation->vat_number_validated = false;
        // $buyer_validation->country = "GB"; $this->charging_business_is_in_eu = true; $buyer_validation->country ="GB"; $seller_validation->country ="DE"; $buyer_validation->vat_number_validated = true; // buyer is in EU, seller is in EU

        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        // They're both in the EU, but in different countries, and the buyer is not using a registered VAT number, VAT will be charged
        if (
            array_key_exists($buyer_validation->country, $euro_countries) &&
            $this->charging_business_is_in_eu &&
            $buyer_validation->country != $seller_validation->country &&
            $buyer_validation->vat_number_validated == '0'
            ) {
            $this->vat_will_be_charged = true;

            return;
        }

        // They're both in the EU, and in different countries. The buyer's VAT number has been Validated. The seller's VAT number has been Validated. VAT will not be charged.
        if (
            array_key_exists($buyer_validation->country, $euro_countries) &&
            $this->charging_business_is_in_eu &&
            $buyer_validation->country != $seller_validation->country &&
            $buyer_validation->vat_number_validated == '1'
            ) {
            $this->vat_will_be_charged = false;

            return;
        }
    }

    //Check if we'll charge VAT or not for this invoice and set the flag
    public function set_vat_charging_flag()
    {
        jr_import('vat_number_validation');
        $validation = new vat_number_validation(0);
        $euro_countries = $validation->get_euro_countries();

        if ($this->subscription == 0 && $this->is_commission == 0) {
            $validation = new vat_number_validation();
            $validation->get_subject('property', array('property_uid' => $this->property_uid));
        } else { // It's not a booking for a hotel, instead it's a website -> property manager invoice of some description
            $validation = new vat_number_validation();
            $validation->get_subject('site');
        }
        $seller_business_country = $validation->country;

        if (array_key_exists($seller_business_country, $euro_countries)) {
            $this->charging_business_is_in_eu = true;
        } else {
            $this->charging_business_is_in_eu = false;
        }

        if ($this->cms_user_id == 0) { // There's no cms user id stored, ergo we will not have VAT details for this user so we must charge VAT
            $this->vat_will_be_charged = true;
        } else {
            if (!$this->charging_business_is_in_eu) {
                $this->vat_will_be_charged = true; // We don't (yet) have a mechanism for handling other trading blocs, so we'll just enable VAT to be charged for all non-european countries for now.
            } else {
                $this->b2b_transaction_is_vat_to_be_charged();
            }
        }
    }

    // Invoice status:
    // 0 unpaid
    // 1 paid
    // 2 cancelled
    // 3 pending

    //Mark an invoice as paid
    public function mark_invoice_paid()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $this->status = 1;
        $this->paid = date('Y-m-d H:i:s');

        $today = outputDate(date('Y/m/d'));

        $balance = $this->get_line_items_balance();

		$payment_method = get_showtime("gateway_payment_method");
		$management_url = get_showtime("gateway_management_url");
		$transaction_id = get_showtime("gateway_transaction_id");
				
		if (is_null($payment_method))
			$payment_method = '';
		if (is_null($management_url))
			$management_url = '';
		if (is_null($transaction_id))
			$transaction_id = '';
		
        $line_items = array();
        if (number_format($balance, 2, '.', '') > 0.00) {
            $line_item_data = array('tax_code_id' => 0,
									'name' => '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT',
									'description' => '('.$today.')',
									'init_price' => 0 - number_format($balance, 2, '.', ''),
									'init_qty' => 1,
									'init_discount' => 0,
									'is_payment' => 1,
									'payment_method' => $payment_method,
									'management_url' => $management_url,
									'transaction_id' => $transaction_id
                                     );
		
            $this->add_line_item($line_item_data);
        }

        $this->commitUpdateInvoice();
        
        return true;
    }

    //Mark an invoice as pending
    public function mark_invoice_pending()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $this->status = 3;
        $this->paid = '1970-01-01 00:00:01';

        $this->commitUpdateInvoice();
        
        return true;
    }

    //Mark an invoice as unpaid
    public function mark_invoice_unpaid()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        //delete payment items from the line items table
        $query = 'DELETE FROM #__jomresportal_lineitems WHERE `inv_id` = '.(int) $this->id.' AND `is_payment` = 1 ';
        $result = doInsertSql($query, '');

        $this->status = 0;
        $this->paid = '1970-01-01 00:00:01';

        $this->commitUpdateInvoice();
        
        return true;
    }

    //Mark an invoice as cancelled
    public function mark_invoice_cancelled()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $this->status = 2;

        $this->commitUpdateInvoice();
        
        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'invoice_cancelled';
        $webhook_notification->webhook_event_description    = 'Logs when an invoice is marked as cancelled.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $this->property_uid;
        $webhook_notification->data->invoice_uid            = $this->id;
        add_webhook_notification($webhook_notification);
    }

    //Mark an invoice as issued
    public function mark_invoice_issued()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $this->raised_date = date('Y-m-d H:i:s');
        $this->due_date = $this->raised_date;
        $this->paid = '1970-01-01 00:00:01';

        $this->commitUpdateInvoice();
        
        return true;
    }

    //Get the line items balance
    public function get_line_items_balance()
    {
        if ((int) $this->id == 0) {
            error_logging('Invoice id not set');

            return false;
        }

        $query = 'SELECT SUM(init_total_inclusive) FROM #__jomresportal_lineitems WHERE inv_id = '.(int)$this->id;
		$balance = doSelectSql($query, 1);

		if ($balance) {
			return number_format($balance, 2, '.', '');
		}
		
		return false;
    }

    public function get_invoice_id_by_contract_uid($contract_uid = 0)
    {
        if ((int) $contract_uid == 0) {
            error_logging('Contract uid not set');

            return false;
        }

        $query = 'SELECT id FROM #__jomresportal_invoices WHERE `contract_id`='.(int) $contract_uid.' LIMIT 1 ';

        return (int) doSelectSql($query, 1);
    }
}
