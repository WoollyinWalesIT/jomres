<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// At this point in the update process the guest and manager PII will have been converted to encrypted PII. Next we will make use of the jrportal_invoice classes new methods to convert all current invoice's data to compatible encrypted data.

$query = "SELECT id FROM #__jomresportal_invoices";
$invoice_ids = doSelectSql($query);

jr_import('jrportal_invoice');
$jrportal_invoice = new jrportal_invoice();
	
if (!empty($invoice_ids)) {
	foreach ($invoice_ids as $invoice_id ) {
		try {
			$jrportal_invoice->id = $invoice_id;
			$jrportal_invoice->convert_pii_data();
		} catch (Exception $e)  {
			error_logging('Failed to convert invoice id '.$invoice_id );
		}
		
	}
}
