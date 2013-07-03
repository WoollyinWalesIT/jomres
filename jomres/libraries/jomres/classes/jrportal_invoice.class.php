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
		$this->guest_id         = 0;
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

		$this->property_is_in_eu = false; // If the property isn't in the EU then we'll ignore the VAT question and just charge tax anyway.

		$this->vat_will_be_charged = true;
		}

	function getInvoice()
		{
		if ( $this->id > 0 )
			{
			$query = "SELECT
				`id`,`cms_user_id`,`guest_id`,`status`,`raised_date`,`due_date`,`paid`,`subscription`,`init_total`,
				`recur_total`,`recur_frequency`,`recur_dayofmonth`,`currencycode`,`subscription_id`,`contract_id`,`property_uid`,`is_commission`
				FROM #__jomresportal_invoices WHERE `id`='$this->id' LIMIT 1";

			$result = doSelectSql( $query );
			if ( $result && count( $result ) == 1 )
				{
				foreach ( $result as $r )
					{
					$this->id               = $r->id;
					$this->cms_user_id      = $r->cms_user_id;
					$this->guest_id         = $r->guest_id;
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

					}

				$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
				$current_property_details->gather_data( $this->property_uid );

				jr_import('vat_number_validation');
				$validation = new vat_number_validation( 0 );
				$euro_countries      =$validation->get_euro_countries();

				if (array_key_exists($current_property_details->property_country_code,$euro_countries))
					$this->property_is_in_eu = true;
				else
					$this->property_is_in_eu = false;

				if (!$this->property_is_in_eu)
					{
					$this->vat_will_be_charged = true; // We don't (yet) have a mechanism for handling other trading blocs, so we'll just enable VAT to be charged for all non-european countries for now.
					}
				else
					{
					$this->b2b_transaction_is_vat_to_be_charged();
					}

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
		if ( $this->id < 1 )
			{
			$query = "INSERT INTO #__jomresportal_invoices
				(
				`cms_user_id`,
				`guest_id`,
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
				`is_commission`
				)
				VALUES
				(
				'$this->cms_user_id',
				'$this->guest_id',
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
				" . (int) $this->is_commission . "
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
		if ( $this->id > 0 )
			{
			$query = "UPDATE #__jomresportal_invoices SET
				`cms_user_id`		= '$this->cms_user_id',
				`guest_id`			= '$this->guest_id',
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
				`is_commission`		= '$this->is_commission'


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
		$mrConfig     = getPropertySpecificSettings( $this->property_uid );
		jr_import('vat_number_validation');
		$guest_validation = new vat_number_validation( $this->guest_id ); // We'll call this validation object the guest validation obj here to make clear who/what it's referring to.
		$guest_validation->id_is_cms_id = false;
		$guest_validation->get_vat_number_and_validation_state();
		$euro_countries      =$guest_validation->get_euro_countries();

		// Test case
		// $mrConfig['vat_number_validated'] = "0";
		// $mrConfig['vat_number_validated'] = "1";
		////////////////////////////////////////////////////////////////////////////////////////////////////////

		// You can't charge vat if you're not vat registered (In the UK, presumably it's the same across the EU).
		if ($mrConfig['vat_number_validated'] == "0")
			{
			$this->vat_will_be_charged = false;
			}

		// From this point onwards we know that the property is using a valid VAT number.

		// Test case
		// $guest_validation->guest_country = "GB"; $this->property_is_in_eu = false; // Guest is in EU, property is not
		// $guest_validation->guest_country = "GB"; $this->property_is_in_eu = true; // Guest is in EU, property is in EU
		// $guest_validation->guest_country = "US"; $this->property_is_in_eu = false; // Guest is not in EU, property is not in EU
		// $guest_validation->guest_country = "US"; $this->property_is_in_eu = true; // Guest is not in EU, property is in EU
		////////////////////////////////////////////////////////////////////////////////////////////////////////

		// The guest isn't in an EU country, but the property is, we will not charge them VAT
		if (!array_key_exists($guest_validation->guest_country,$euro_countries) && $this->property_is_in_eu )
			{
			$this->vat_will_be_charged = false;
			}

 		$guest_vat_number_country_code = substr( $guest_validation->vat_number, 0, 2 );
		$property_vat_number_country_code = substr( $mrConfig['property_vat_number'], 0, 2 );

		// Test case
		// $guest_vat_number_country_code = "GB"; $property_vat_number_country_code = "FR"; // Guest is in GB, property is in FR
		//  $guest_vat_number_country_code = "GB"; $property_vat_number_country_code = "GB"; // Guest is in GB, property is in GB
		////////////////////////////////////////////////////////////////////////////////////////////////////////

		// They're in the same country,  VAT'll be charged
		if ( $guest_vat_number_country_code == $property_vat_number_country_code)
			{
			$this->vat_will_be_charged = true;
			}

		// Test case
		// $guest_validation->guest_country = "GB"; $this->property_is_in_eu = true; $guest_vat_number_country_code ="GB"; $property_vat_number_country_code ="DE"; $guest_validation->vat_number_validated = false;
		// $guest_validation->guest_country = "GB"; $this->property_is_in_eu = true; $guest_vat_number_country_code ="GB"; $property_vat_number_country_code ="DE"; $guest_validation->vat_number_validated = true; // Guest is in EU, property is in EU

		////////////////////////////////////////////////////////////////////////////////////////////////////////

		// They're both in the EU, but in different countries, and the guest is not using a registered VAT number, VAT will be charged
		if (
			array_key_exists($guest_validation->guest_country,$euro_countries) &&
			$this->property_is_in_eu &&
			$guest_vat_number_country_code != $property_vat_number_country_code &&
			$guest_validation->vat_number_validated == false
			)
			{
			$this->vat_will_be_charged = true;
			}


		// They're both in the EU, and in different countries. The guest's VAT number has been Validated. The Property's VAT number has been Validated. VAT will not be charged.
		if (
			array_key_exists($guest_validation->guest_country,$euro_countries) &&
			$this->property_is_in_eu &&
			$guest_vat_number_country_code != $property_vat_number_country_code &&
			$guest_validation->vat_number_validated == true
			)
			{
			$this->vat_will_be_charged = false;
			}
		}
	}

?>