<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * @package Jomres\Core\Classes
*
* Methods for cleaning up various sets of data, primarily for GDPR compliance
*
*/
class jomres_gdpr_cleanup
{
	public function __construct()
	{
		
	}

	/**
	*
	* Removes a row from a table
	*
	*/
	private function clean_table($table = '' , $id = 0 ) 
	{
		if ($table == '' ) {
			throw new Exception('Error: clean_table tablename not set ');
		}
		if ((int)$id == 0 ) {
			throw new Exception('Error: clean_table row id not set ');
		}
		
		$valid_tables = 
		array (
			"jomres_contracts" => "contract_uid",
			"jomcomp_notes" => "contract_uid",
			"jomres_room_bookings" => "contract_uid",
			
			"jomres_invoice_pii_buyers" => "invoice_id",
			"jomres_invoice_pii_sellers" => "invoice_id",
			"jomresportal_invoices" => "id",
			"jomresportal_lineitems" => "inv_id",
			"jomresportal_invoices_transactions" => "invoice_id"
		);
		
		if (array_key_exists($table , $valid_tables)) {
			$query = "DELETE FROM #__".$table." WHERE `".$valid_tables[$table]."` = ".(int)$id." LIMIT 1";
			return doInsertSql($query);
		} else {
			throw new Exception('Error: invalid table name passed');
		}
	}
		
	/**
	 * 
	 *
	 *
	 */

	public function cleanup_booking($contract_uid = 0 , $invoice_id = 0 )
	{
		if ( (int)$contract_uid == 0 ) {
			throw new Exception('Error: contract_uid not set ');
		}
		if ( (int)$invoice_id == 0 ) {
			throw new Exception('Error: invoice_id not set ');
		}
		
		try
		{
			$this->clean_table( 'jomres_contracts' ,		$contract_uid );
			$this->clean_table( 'jomcomp_notes' ,			$contract_uid );
			$this->clean_table( 'jomres_room_bookings' ,	$contract_uid );
			$this->cleanup_invoice($invoice_id);
		} catch (Exception $e)  {
			error_logging('Failed to cleanup invoice id '.$invoice_id.' because : '.$e->getMessage() );
		}
	}
	
	/**
	*
	* Cleans up an invoice, typically passed by cron job functionality as the invoice is found to be greater than 1 year old. Cleans up invoice table, invoice items, the two PII tables. Could also be called by Right to Forget functionality.
	*
	*/
	public function cleanup_invoice($invoice_id)
	{
		if ( (int)$invoice_id == 0 ) {
			throw new Exception('Error: invoice_id not set ');
		}
		try
		{
			$this->clean_table( 'jomres_invoice_pii_buyers' ,			$invoice_id );
			$this->clean_table( 'jomres_invoice_pii_sellers' ,			$invoice_id );
			$this->clean_table( 'jomresportal_invoices' ,				$invoice_id );
			$this->clean_table( 'jomresportal_invoices_transactions' ,	$invoice_id );
			$this->clean_table( 'jomresportal_lineitems' ,				$invoice_id );
		} catch (Exception $e)  {
			error_logging('Failed to cleanup invoice id '.$invoice_id.' because : '.$e->getMessage() );
		}
	}
	


}
