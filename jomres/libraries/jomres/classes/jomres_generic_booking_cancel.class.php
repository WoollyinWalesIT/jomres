<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_generic_booking_cancel
	{
	public function jomres_generic_booking_cancel()
		{
		$this->init();
		return true;
		}
	
	public function cancel_booking()
		{
		$cancellationSuccessful = false;
		try
			{
			$this->validate();
			$cancellationSuccessful = $this->apply_cancellation();
			return $cancellationSuccessful;
			}
		catch(Exception $e)
			{
			return $e->getMessage();
			}
		}
	
	private function validate()
		{
		if ( $this->contract_uid == 0 )
			{
			throw new Exception("Error contract_uid is not valid");
			}
		if ( $this->property_uid == 0 )
			{
			throw new Exception("Error property_uid is not valid");
			}
		
		$query = "SELECT contract_uid, booked_in, bookedout, cancelled FROM #__jomres_contracts WHERE contract_uid = '" . (int)$this->contract_uid . "' ";
		$contractDetails = doSelectSql( $query );
		foreach ($contractDetails as $d)
			{
			if ( $d->contract_uid == 0)
				{
				throw new Exception(" Error contract_uid ".$this->contract_uid." doesn`t exists in the database");
				}
			if ( $d->booked_in == 1)
				{
				throw new Exception(" Error, guest is checked in");
				}
			if ( $d->bookedout == 1)
				{
				throw new Exception(" Error, guest already checked out");
				}
			if ( $d->cancelled == 1)
				{
				throw new Exception(" Error, booking is already cancelled");
				}
			}

		return true;
		}
	
	private function init()
		{
		$this->property_uid = 0;		// 1 ***** Required *****
		$this->contract_uid = 0;		// (int) ***** Required *****
		$this->reason = "";				// (string)
		$this->note = "";				// (string)
		
		return true;
		}
	
	private function apply_cancellation() 
		{
		//delete from room bookings table
		$query 	= "DELETE FROM #__jomres_room_bookings 
					WHERE contract_uid = '" . (int) $this->contract_uid . "'
					AND property_uid = '" . (int) $this->property_uid . "'
					";
		if ( !doInsertSql( $query, "" ) )
			{
			throw new Exception("Unable to delete from room bookings table, mysql db failure.");
			}
		
		//update contract details (set as cancelled)
		$query = "UPDATE #__jomres_contracts 
					SET `cancelled`='1', 
						`cancelled_timestamp` = '" . date( 'Y-m-d H:i:s' ) . "', 
						`cancelled_reason` = '" . $this->reason . "'
					WHERE contract_uid = '" . (int) $this->contract_uid . "'
					AND property_uid = '" . (int) $this->property_uid . "' 
					";
		if ( !doInsertSql( $query, "" ) )
			{
			throw new Exception("Unable to update cancellations data for contract" . (int) $this->contract_uid . ", mysql db failure.");
			}
		
		//insert booking note (if set)
		if ( $this->note != "" )
			{
			$query = "INSERT INTO #__jomcomp_notes 
									(`contract_uid`,
									`note`,
									`timestamp`,
									`property_uid`
									) 
							VALUES ('" . (int) $this->contract_uid . "',
									'" . $this->note . "',
									'" . date( 'Y-m-d H:i:s' ) . "',
									'" . (int) $this->property_uid . "'
									)
							";
			if ( !doInsertSql( $query, "" ) )
				{
				throw new Exception("Unable to insert booking note for contract" . (int) $this->contract_uid . ", mysql db failure.");
				}
			}
		
		//update invoice details (set as cancelled)
		$query = "SELECT id FROM #__jomresportal_invoices 
					WHERE contract_id = " . (int) $this->contract_uid . " 
					LIMIT 1
					";
		$invoice_uid = doSelectSql( $query, 1 );
		if ( $invoice_uid > 0 )
			{
			jr_import( "invoicehandler" );
			$invoice = new invoicehandler();
			$invoice->id = $invoice_uid;
			$invoice->getInvoice();
			$invoice->mark_invoice_cancelled();
			}

		return true;
		}

	}
