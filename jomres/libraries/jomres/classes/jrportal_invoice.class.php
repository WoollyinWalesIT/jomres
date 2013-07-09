<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jrportal_invoice
	{
	function jrportal_invoice()
		{
		$this->id               = 0;
		$this->cms_user_id      = 0;
		$this->status           = 0;
		$this->raised_date      = '';
		$this->due_date         = '';
		$this->paid             = '';
		$this->subscription     = false;
		$this->init_total       = 0.00;
		$this->recur_total      = 0.00;
		$this->recur_frequency  = '';
		$this->recur_dayofmonth = 0;
		$this->currencycode     = "GBP";
		$this->subscription_id  = 0;
		$this->contract_id      = 0;
		$this->property_uid     = 0;
		$this->is_commission    = 0;

		$this->charging_business_is_in_eu = false; // If the seller isn't in the EU then we'll ignore the VAT question and just charge tax anyway.

		$this->vat_will_be_charged = true;
		}

	function getInvoice()
		{
		if ( $this->id > 0 )
			{
			$query = "SELECT
				`id`,`cms_user_id`,`status`,`raised_date`,`due_date`,`paid`,`subscription`,`init_total`,
				`recur_total`,`recur_frequency`,`recur_dayofmonth`,`currencycode`,`subscription_id`,`contract_id`,`property_uid`,`is_commission`
				FROM #__jomresportal_invoices WHERE `id`='$this->id' LIMIT 1";

			$result = doSelectSql( $query );
			if ( $result && count( $result ) == 1 )
				{
				foreach ( $result as $r )
					{
					$this->id               = $r->id;
					$this->cms_user_id      = $r->cms_user_id;
					$this->status           = $r->status;
					$this->raised_date      = $r->raised_date;
					$this->due_date         = $r->due_date;
					$this->paid             = $r->paid;
					$this->subscription     = $r->subscription;
					$this->init_total       = $r->init_total;
					$this->recur_total      = $r->recur_total;
					$this->recur_frequency  = $r->recur_frequency;
					$this->recur_dayofmonth = $r->recur_dayofmonth;
					$this->currencycode     = $r->currencycode;
					$this->subscription_id  = $r->subscription_id;
					$this->contract_id      = $r->contract_id;
					$this->property_uid     = $r->property_uid;
					$this->is_commission    = $r->is_commission;
					$this->vat_will_be_charged = $r->vat_will_be_charged;
					}
				$this->set_vat_charging_flag();
				return true;
				}
			else
				{
				if ( count( $result ) == 0 )
					{
					error_logging( "No Invoices were found with that id" );

					return false;
					}
				if ( count( $result ) > 1 )
					{
					error_logging( "More than one Invoice was found with that id" );

					return false;
					}
				}
			}
		else
			{
			error_logging( "ID of Invoice not available" );

			return false;
			}

		}

	function commitNewInvoice()
		{
		$this->set_vat_charging_flag();
		if ( $this->id < 1 )
			{
			$query = "INSERT INTO #__jomresportal_invoices
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
				`property_uid`,
				`is_commission`,
				`vat_will_be_charged`
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
				'$this->property_uid',
				" . (int) $this->is_commission . ",
				'$this->vat_will_be_charged'
				)";
			$id    = doInsertSql( $query, "" );
			if ( $id )
				{
				$this->id = $id;

				return true;
				}
			else
				{
				error_logging( "ID of Invoice could not be found after apparent successful insert" );

				return false;
				}
			}
		error_logging( "ID of Invoice already available. Are you sure you are creating a new Invoice?" );

		return false;
		}

	function commitUpdateInvoice()
		{
		$this->set_vat_charging_flag();
		if ( $this->id > 0 )
			{
			$query = "UPDATE #__jomresportal_invoices SET
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
				`property_uid` 		= '$this->property_uid',
				`is_commission`		= '$this->is_commission',
				`vat_will_be_charged` = '$this->vat_will_be_charged'
				WHERE `id`='$this->id'";

			return doInsertSql( $query, "" );
			}
		error_logging( "ID of Invoice not available" );

		return false;
		}

	function get_invoice_balance()
		{
		if ( $this->id > 0 )
			{
			$bal    = 0.0;
			$query  = "SELECT * FROM #__jomresportal_lineitems WHERE inv_id = " . (int) $this->id;
			$result = doSelectSql( $query );
			if ( count( $result ) > 0 )
				{
				foreach ( $result as $r )
					{
					$bal = $bal + (float) $r->init_total;
					}
				}

			return $bal;
			}
		else
		return false;
		}


	function get_invoice_booking_number()
		{
		if ( (int) $this->contract_id > 0 )
			{
			$query  = "SELECT tag FROM #__jomres_contracts WHERE contract_uid = " . (int) $this->contract_id;
			$result = doSelectSql( $query, 1 );
			if ( $result ) return $result;
			else
			return false;
			}
		else
		return false;
		}

	function b2b_transaction_is_vat_to_be_charged()
		{
		////////////////////////////////////////////////////////////////////////////////////////////////////////
		//
		// VAT for hotel bookings is complicated by cross border issues, the whole subject is very difficult so at this point it's much easier to say that if it's a hotel booking, then 
		// we will always charge VAT. Change bookings_can_be_vat_exempt to true to allow bookings to be exempt.
		// 
		////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		$bookings_can_be_vat_exempt = false;
		if ($this->subscription_id == "0" && $this->is_commission == "0")
			{
			if (!$bookings_can_be_vat_exempt)
				{
				$this->vat_will_be_charged = true;
				return;
				}
			}
		
		
		
		jr_import('vat_number_validation');
		
		if ($this->subscription_id == "1" || $this->is_commission == "1") // It's a site -> property transaction, let's get the property's vat details.
			{
			$buyer_validation = new vat_number_validation( );
			$buyer_validation->get_subject("property",array( "property_uid"=>$this->property_uid ));

			$seller_validation = new vat_number_validation( );
			$seller_validation->get_subject( "site" , array() );
			}
		else // It's a Property -> buyer transaction
			{
			$buyer_validation = new vat_number_validation( );
			$buyer_validation->get_subject("buyer_registered_byprofile_id",array( "profile_id"=>$this->cms_user_id ));
			
			$seller_validation = new vat_number_validation( );
			$seller_validation->get_subject( "property" , array( "property_uid"=>$this->property_uid ) );
			}

		$euro_countries      =$buyer_validation->get_euro_countries();


		// Test case
		// $seller_validation->vat_number_validated = "0";
		// $seller_validation->vat_number_validated = "1";
		////////////////////////////////////////////////////////////////////////////////////////////////////////

		// You can't charge vat if you're not vat registered (In the UK, presumably it's the same across the EU).
		if ($seller_validation->vat_number_validated == "0")
			{
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
		if (!array_key_exists($buyer_validation->country,$euro_countries) && $this->charging_business_is_in_eu )
			{
			$this->vat_will_be_charged = false;
			return;
			}


		// Test case
		// $buyer_validation->country = "GB"; $seller_validation->country = "FR"; // buyer is in GB, seller is in FR
		// $buyer_validation->country = "GB"; $seller_validation->country = "GB"; // buyer is in GB, seller is in GB
		////////////////////////////////////////////////////////////////////////////////////////////////////////


		// They're in the same country,  VAT'll be charged
		if ( $buyer_validation->country == $seller_validation->country)
			{
			$this->vat_will_be_charged = true;
			return;
			}

		// Test case
		// $buyer_validation->country = "GB"; $this->charging_business_is_in_eu = true; $buyer_validation->country ="GB"; $seller_validation->country ="DE"; $buyer_validation->vat_number_validated = false;
		// $buyer_validation->country = "GB"; $this->charging_business_is_in_eu = true; $buyer_validation->country ="GB"; $seller_validation->country ="DE"; $buyer_validation->vat_number_validated = true; // buyer is in EU, seller is in EU

		////////////////////////////////////////////////////////////////////////////////////////////////////////

		// They're both in the EU, but in different countries, and the buyer is not using a registered VAT number, VAT will be charged
		if (
			array_key_exists($buyer_validation->country,$euro_countries) &&
			$this->charging_business_is_in_eu &&
			$buyer_validation->country != $seller_validation->country &&
			$buyer_validation->vat_number_validated == "0"
			)
			{
			$this->vat_will_be_charged = true;
			return;
			}
			

		// They're both in the EU, and in different countries. The buyer's VAT number has been Validated. The seller's VAT number has been Validated. VAT will not be charged.
		if (
			array_key_exists($buyer_validation->country,$euro_countries) &&
			$this->charging_business_is_in_eu &&
			$buyer_validation->country != $seller_validation->country &&
			$buyer_validation->vat_number_validated == "1"
			)
			{
			$this->vat_will_be_charged = false;
			return;
			}
		}
		
	function set_vat_charging_flag()
		{
		jr_import('vat_number_validation');
		$validation = new vat_number_validation( 0 );
		$euro_countries      =$validation->get_euro_countries();
				
		if ($this->subscription_id == "0" && $this->is_commission == "0")
			{
			$validation = new vat_number_validation();
			$validation->get_subject("property",array("property_uid"=>$this->property_uid));
			}
		else // It's not a booking for a hotel, instead it's a website -> property manager invoice of some description
			{
			$validation = new vat_number_validation();
			$validation->get_subject("site",array("property_uid"=>$this->property_uid));
			}
		$seller_business_country = $validation->country;

		if (array_key_exists($seller_business_country,$euro_countries))
			$this->charging_business_is_in_eu = true;
		else
			$this->charging_business_is_in_eu = false;
				
				
		if ($this->cms_user_id == 0) // There's no cms user id stored, ergo we will not have VAT details for this user so we must charge VAT
			{
			$this->vat_will_be_charged = true;
			}
		else
			{
			if (!$this->charging_business_is_in_eu)
				{
				$this->vat_will_be_charged = true; // We don't (yet) have a mechanism for handling other trading blocs, so we'll just enable VAT to be charged for all non-european countries for now.
				}
			else
				{
				$this->b2b_transaction_is_vat_to_be_charged();
				}
			}
		}
	}

?>