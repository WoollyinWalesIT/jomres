<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
 * @package Jomres\Core\Database
 *
 * Database modification during updates
 *
 **/
// Let's check that the buyer's table isn't populated. If it is not, then we are able to convert invoices.
$query = "SELECT id FROM `#__jomres_invoice_pii_buyers` LIMIT 1";
$populated = doSelectSql($query);
if (!empty($populated)) {
	return ;
} 

// At this point in the update process the guest and manager PII will have been converted to encrypted PII. Next we will make use of the jrportal_invoice classes new methods to convert all current invoice's data to compatible encrypted data.

$query = "SELECT id FROM #__jomresportal_invoices";
$invoice_ids = doSelectSql($query);

jr_import('jrportal_invoice');
$jrportal_invoice = new jrportal_invoice();
	
$all_contracts_guest_uids = array();
$query = "SELECT  contract_uid , guest_uid FROM #__jomres_contracts";
$contracts = doSelectSql($query);

if (!empty($contracts)) {
	foreach ($contracts as $contract ) {
		$all_contracts_guest_uids [ $contract->contract_uid ] = $contract->guest_uid;
	}
}
 
$all_guests = array();
$query = "SELECT
		`guests_uid`,
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
	FROM `#__jomres_guests`";
$guests = doSelectSql($query );
if (!empty( $guests )) {
	foreach ($guests as $guest ) {
		$all_guests [ $guest->guests_uid ] = $guest;
	}
}
 
if (!empty($invoice_ids)) {
	foreach ($invoice_ids as $invoice_id ) {
		try {
			$jrportal_invoice->id = $invoice_id->id;
			$jrportal_invoice->getInvoice();
			
			$alternative_data = false;
			if ( $jrportal_invoice->cms_user_id == 0 && $jrportal_invoice->contract_id > 0 && isset($all_contracts_guest_uids[$jrportal_invoice->contract_id]) ) {
				$guest_uid = $all_contracts_guest_uids[$jrportal_invoice->contract_id];
				$alternative_data =  (array)$all_guests[$guest_uid];
				}

			$jrportal_invoice->convert_pii_data($alternative_data);
		} catch (Exception $e)  {
			error_logging('Failed to convert invoice id '.$invoice_id->id );
		}
		
	}
}
