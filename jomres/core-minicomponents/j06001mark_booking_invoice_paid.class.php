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

/**
#
 *
#
 * @package Jomres
#
 */
class j06001mark_booking_invoice_paid
	{
	/**
	#
	 * Constructor:
	#
	 */
	function j06001mark_booking_invoice_paid()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !$thisJRUser->userIsManager ) return;

		$id = intval( jomresGetParam( $_REQUEST, 'id', 0 ) );

		$property_uid = getDefaultProperty();
		$query        = "SELECT contract_id FROM #__jomresportal_invoices WHERE id = " . $id . " AND property_uid = " . (int) $property_uid; // Need to associate the invoice id and the property uid. If we don't, then it could be a commission type invoice, which is not associated with a property uid and we don't want managers marking them as paid.
		$result       = doSelectSql( $query, 1 );
		if ( !$result )
			{
			trigger_error( "Unable to view invoice, cannot corrolate id with property uid.", E_USER_ERROR );

			return;
			}

		if ( $id == 0 ) return;

		jr_import( 'invoicehandler' );
		$invoice_handler     = new invoicehandler();
		$invoice_handler->id = $id;

		$invoice_handler->getInvoice();

		$invoice_handler->mark_invoice_paid();

		addBookingNote( $invoice_handler->contract_id, $property_uid, jr_gettext( '_JOMRES_INVOICE_MARKEDASPAID', _JOMRES_INVOICE_MARKEDASPAID, false, false ) );
		jomresRedirect( JOMRES_SITEPAGE_URL . '&task=view_invoice&id=' . $id, "" );
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', _JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>