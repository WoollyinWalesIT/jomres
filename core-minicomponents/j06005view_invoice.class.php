<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005view_invoice
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

		$invoice_id				= intval( jomresGetParam( $_REQUEST, 'id', 0 ) );
		$popup         			= intval( jomresGetParam( $_REQUEST, 'popup', 0 ) );
		$bypass_security_check 	= false;
		$return_template       	= false;
		$output        			= array();
		$pageoutput    			= array();
		$rows          			= array();
		$transaction_rows		= array();
		$this->retVals			= '';

		if ( isset( $componentArgs[ 'internal_call' ] ) && $componentArgs[ 'internal_call' ] == true ) // This plugin is being called by another script, typically the emailer functionality, therefore we'll bypass the access checking further down
			{
			$bypass_security_check = true;
			$invoice_id            = $componentArgs[ 'invoice_id' ];
			$return_template       = true;
			$popup                 = 1;
			}
		
		if ( $invoice_id == 0 ) //no invoice id passed, so nothing to display
			return;

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		
		$invoice = jomres_singleton_abstract::getInstance( 'basic_invoice_details' );
		$invoice->gatherData($invoice_id);
		
		if ($invoice->raised_date <= '1970-01-01 00:00:01')
			return;

		//Some security checks TODO: Is this really necessary here?
		if ( !$bypass_security_check )
			{
			if ( (int) $invoice->contract_id > 0 ) // It's a booking invoice being viewed either by the guest or a property manager for the appropriate property
				{
				if ( $thisJRUser->userIsManager )
					{
					$property_uid = getDefaultProperty();
					$query = "SELECT contract_id FROM #__jomresportal_invoices WHERE id = " . $invoice->id . " AND property_uid = " . (int) $property_uid;
					$result = doSelectSql( $query, 1 );
					if ( !$result )
						{
						trigger_error( "Unable to view invoice, cannot corrolate id with property uid.", E_USER_ERROR );
						return;
						}
					}
				else
					{
					$query  = "SELECT id FROM #__jomresportal_invoices WHERE `cms_user_id`= " . (int) $thisJRUser->id . " AND `id` = " . (int) $invoice->id . " ";
					$result = doSelectSql( $query );
					if ( count( $result ) < 1 || count( $result ) > 1 )
						{
						trigger_error( "Unable to view invoice, either invoice id not found, or invoice id tampered with.", E_USER_ERROR );
						return;
						}
					}
				}
			else // Let's check that this property manager can view this commission/subscription invoice
				{
				if ( $thisJRUser->id != $invoice->cms_user_id )
					{
					trigger_error( "Unable to view invoice, either invoice id not found, or invoice id tampered with.", E_USER_ERROR );
					return;
					}
				}
			}
		//end security checks. If everything is fine so far, let`s move forward.
		
		if ( (int) $invoice->contract_id > 0 ) // It's a booking invoice being viewed either by the guest or a property manager for the appropriate property
			{
			$mrConfig = getPropertySpecificSettings($invoice->property_uid);
			
			//get the contract details
			//We won`t use the basic contract details here since it gets too much data for what we need
			$query = "SELECT guest_uid, tag, approved FROM #__jomres_contracts WHERE contract_uid = " . $invoice->contract_id . " AND property_uid = " . $invoice->property_uid;
			$contractData = doSelectSql( $query,2 );
			
			if ( !$contractData )
				{
				trigger_error( "Unable to get the contract details.", E_USER_ERROR );
				return;
				}

			$output[ 'CLIENT_DETAILS_TEMPLATE' ]   = $MiniComponents->specificEvent( '06005', 'show_guest_details', array ( 'guest_uid' => $contractData['guest_uid'] ) );
			$output[ 'BUSINESS_DETAILS_TEMPLATE' ] = $MiniComponents->specificEvent( '06000', 'show_hotel_details', array ( 'property_uid' => $invoice->property_uid ) );
			
			$output[ 'BOOKING_NUMBER' ] = $contractData['tag'];
			$output[ '_JOMRES_BOOKING_NUMBER' ] = jr_gettext( '_JOMRES_BOOKING_NUMBER', '_JOMRES_BOOKING_NUMBER' );
			}
		else //this is a commission/subscription invoice
			{
			$output[ 'BUSINESS_DETAILS_TEMPLATE' ] = $MiniComponents->specificEvent( '06000', 'show_site_business', array () );
			$output[ 'CLIENT_DETAILS_TEMPLATE' ] = $MiniComponents->specificEvent( '06005', 'show_manager_details', array ( 'manager_profile_id' => $invoice->cms_user_id ) );
			}

		if ( $popup != 1 )
			{
			$output[ 'PRINTLINK' ] = JOMRES_SITEPAGE_URL_NOSEF . '&tmpl=' .get_showtime("tmplcomponent") . '&popup=1&task=view_invoice&id=' . $invoice->id;
			$output[ 'PRINTTEXT' ] = jr_gettext( '_JOMRES_COM_INVOICE_PRINT', '_JOMRES_COM_INVOICE_PRINT', false);
			}

		$output[ 'PAGETITLE' ]     = jr_gettext( '_JOMRES_COM_INVOICE_TITLE', '_JOMRES_COM_INVOICE_TITLE' );
		$output[ 'HINVOICE_TRANSACTIONS' ] = jr_gettext( '_INVOICE_TRANSACTIONS', '_INVOICE_TRANSACTIONS' );
		$output[ 'HUSER' ]         = jr_gettext( '_JRPORTAL_INVOICES_USER', '_JRPORTAL_INVOICES_USER' );
		$output[ 'HSTATUS' ]       = jr_gettext( '_JRPORTAL_INVOICES_STATUS', '_JRPORTAL_INVOICES_STATUS' );
		$output[ 'HRAISED' ]       = jr_gettext( '_JRPORTAL_INVOICES_RAISED', '_JRPORTAL_INVOICES_RAISED' );
		$output[ 'HDUE' ]          = jr_gettext( '_JRPORTAL_INVOICES_DUE', '_JRPORTAL_INVOICES_DUE' );
		$output[ 'HINITTOTAL' ]    = jr_gettext( '_JRPORTAL_INVOICES_INITTOTAL', '_JRPORTAL_INVOICES_INITTOTAL' );
		$output[ 'HCURRENCYCODE' ] = jr_gettext( '_JRPORTAL_INVOICES_CURRENCYCODE', '_JRPORTAL_INVOICES_CURRENCYCODE' );
		$output[ 'HINVOICENO' ]    = jr_gettext( '_JOMRES_INVOICE_NUMBER', '_JOMRES_INVOICE_NUMBER' );

		$markaspaid_link = array ();
		if ( $thisJRUser->userIsManager && (int) $invoice->property_uid > 0 && (int) $invoice->status != 1 )
			{
			$markaspaid = jr_gettext( '_JOMRES_INVOICE_MARKASPAID', '_JOMRES_INVOICE_MARKASPAID', false, false );
			$markaspaid_link[] = array ( 'MARKASPAID_LINK' => JOMRES_SITEPAGE_URL_NOSEF . '&task=mark_booking_invoice_paid&no_html=1&id=' . $invoice->id, 'MARKASPAID_TEXT' => $markaspaid );
			}
		
		$markaspending_link = array ();
		if ( $thisJRUser->userIsManager && (int) $invoice->property_uid > 0 && (int) $invoice->status == 1 )
			{
			$markaspending = jr_gettext( '_JOMRES_INVOICE_MARKASPENDING', '_JOMRES_INVOICE_MARKASPENDING', false, false );
			$markaspending_link[] = array ( 'MARKASPENDING_LINK' => JOMRES_SITEPAGE_URL_NOSEF . '&task=mark_booking_invoice_pending&no_html=1&id=' . $invoice->id, 'MARKASPENDING_TEXT' => $markaspending );
			}

		$viewbooking_link = array ();
		if ( $thisJRUser->userIsManager && (int) $invoice->contract_id > 0 )
			{
			$viewbooking = jr_gettext( '_JOMCOMP_MYUSER_VIEWBOOKING', '_JOMCOMP_MYUSER_VIEWBOOKING', false, false );
			$viewbooking_link[] = array ( 'VIEWBOOKING_LINK' => JOMRES_SITEPAGE_URL . '&task=editBooking&contract_uid=' . $invoice->contract_id, 'VIEWBOOKING_TEXT' => $viewbooking );
			}

		$output[ 'ID' ] = $invoice->id;

		// Invoice status:
		// 0 unpaid
		// 1 paid
		// 2 cancelled
		// 3 pending
		switch ($invoice->status) {
			case 0 :
				$output[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_UNPAID', '_JRPORTAL_INVOICES_STATUS_UNPAID' );
				break;
			case 1 : 
				$output[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_PAID', '_JRPORTAL_INVOICES_STATUS_PAID' );
				break;
			case 2 : 
				$output[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_CANCELLED', '_JRPORTAL_INVOICES_STATUS_CANCELLED' );
				break;
			default :
				$output[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_PENDING', '_JRPORTAL_INVOICES_STATUS_PENDING',false );
		}

		$output[ 'USER' ]   = jr_gettext( '_JRPORTAL_INVOICES_USER', '_JRPORTAL_INVOICES_USER',false );
		$output[ 'RAISED' ] = $invoice->raised_date;
		$output[ 'DUE' ]    = $invoice->due_date;
		
		// See note at the end of this line!
		$output[ 'INITTOTAL' ] = output_price( $invoice->init_total, $invoice->currencycode, true, true ); // This is now wrong. The init total is calculated when the invoice is generated, but recent VAT related changes mean that on older invoices which were created before the VAT changes were added, it's possible that this sum is incorrect. The newer GRAND_TOTAL_INC_TAX output variable is correct, as it's adjusted according to the VAT rules, so we'll replace INITTOTAL with GRAND_TOTAL_INC_TAX in invoice template files.

		$output[ 'CURRENCYCODE' ] = $invoice->currencycode;

		$output[ 'LIPAGETITLE' ]              = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS', '_JRPORTAL_INVOICES_LINEITEMS' );
		$output[ 'HLI_NAME' ]                 = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_NAME', '_JRPORTAL_INVOICES_LINEITEMS_NAME' );
		$output[ 'HLI_DESCRIPTION' ]          = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION' );
		$output[ 'HCURRENCYCODE' ]            = jr_gettext( '_JRPORTAL_INVOICES_CURRENCYCODE', '_JRPORTAL_INVOICES_CURRENCYCODE' );
		$output[ 'HLI_INIT_PRICE' ]           = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE' );
		$output[ 'HLI_INIT_QTY' ]             = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY' );
		$output[ 'HLI_INIT_DISCOUNT' ]        = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT' );
		$output[ 'HLI_INIT_TOTAL' ]           = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL' );
		$output[ 'HLI_INIT_TOTAL_INCLUSIVE' ] = jr_gettext( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX' );
		$output[ 'HLI_TAX_CODE' ]        	  = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', false );
		$output[ 'HLI_TAX_DESCRIPTION' ] 	  = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION' );
		$output[ 'HLI_TAX_RATE' ]        	  = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE' );
		$output[ 'HLI_TAX_AMOUNT' ]        	  = jr_gettext( '_JOMRES_COM_FRONT_ROOMTAX', '_JOMRES_COM_FRONT_ROOMTAX' );
		
		$immediate_pay               = array ();
		if ( (int)$invoice->status == 3 )
			{
			if ( 
				(!$thisJRUser->userIsManager && !$thisJRUser->superPropertyManager && $invoice->contract_id > 0 && $invoice->is_commission == 0 && $invoice->subscription == 0 && $contractData['approved'] == 1) || //booking invoice viewed by guest
				($invoice->contract_id == 0 && ($invoice->is_commission > 0 || $invoice->subscription > 0)) //subscription or commission invoice viewed by a manager
				)
				{ 
				//TODO clean this up and display gateway images or something
				$ip                          = array ();
				$ip[ 'IMMEDIATE' ]           = jr_gettext( '_JRPORTAL_INVOICES_PAYNOW_DESC', '_JRPORTAL_INVOICES_PAYNOW_DESC' );
				$ip[ 'PAYNOW' ]           	 = jr_gettext( '_JRPORTAL_INVOICES_PAYNOW', '_JRPORTAL_INVOICES_PAYNOW' );
				$ip[ 'INV_ID' ]              = $invoice->id;
				$ip[ 'LIVESITE' ]            = get_showtime( 'live_site' ) . '/';
				$immediate_pay[ ]            = $ip;
				}
			}

		if ( count( $invoice->lineitems ) > 0 )
			{
			foreach ( $invoice->lineitems as $li )
				{
				$r                              = array ();
				$r[ 'ID' ]                      = $li[ 'id' ];
				$r[ 'LI_NAME' ]                 = jr_gettext($li[ 'name' ], $li[ 'name' ], false);
				$r[ 'LI_DESCRIPTION' ]          = $li[ 'description' ];
				$r[ 'LI_INIT_PRICE' ]           = output_price( $li[ 'init_price' ], $invoice->currencycode, false, true );
				$r[ 'LI_INIT_QTY' ]             = $li[ 'init_qty' ];
				$r[ 'LI_INIT_DISCOUNT' ]        = output_price( $li[ 'init_discount' ], $invoice->currencycode, false, true );
				$r[ 'LI_INIT_TOTAL' ]           = output_price( $li[ 'init_total' ], $invoice->currencycode, false, true );
				
				if ($invoice->vat_will_be_charged)
					{
					$r[ 'LI_INIT_TOTAL_INCLUSIVE' ] = output_price( $li[ 'init_total_inclusive' ], $invoice->currencycode, false, true );
					$r[ 'LI_TAX_RATE' ] = $li[ 'tax_rate' ];
					}
				else
					{
					$r[ 'LI_INIT_TOTAL_INCLUSIVE' ] = output_price( $li[ 'init_total' ], $invoice->currencycode, false, true );
					$r[ 'LI_TAX_RATE' ] = 0;
					}

				$r[ 'LI_TAX_CODE' ]        = $li[ 'tax_code' ];
				$r[ 'LI_TAX_DESCRIPTION' ] = $li[ 'tax_description' ];
				$r[ 'LI_TAX_AMOUNT' ] 	   = output_price( $li[ 'tax_amount' ], $invoice->currencycode, false, true );
				$r[ 'LI_INV_ID' ]          = $li[ 'inv_id' ];
				$r[ 'CURRENCYCODE' ]	   = $invoice->currencycode;
				
				if ((int)$li[ 'is_payment' ] == 0)
					$rows[] = $r;
				else
					$transaction_rows[] = $r;
				}
			}


		$output[ 'JOMRES_GRANDTOTAL_TOTAL_TAX' ] = jr_gettext( 'JOMRES_GRANDTOTAL_TOTAL_TAX', 'JOMRES_GRANDTOTAL_TOTAL_TAX' );
		$output[ 'JOMRES_GRANDTOTAL_EX_TAX' ]    = jr_gettext( 'JOMRES_GRANDTOTAL_EX_TAX', 'JOMRES_GRANDTOTAL_EX_TAX' );
		$output[ 'JOMRES_GRANDTOTAL_INC_TAX' ]   = jr_gettext( 'JOMRES_GRANDTOTAL_INC_TAX', 'JOMRES_GRANDTOTAL_INC_TAX' );

		$output[ 'GRAND_TOTAL_INC_TAX' ] = output_price( $invoice->grand_total_inc_tax, $invoice->currencycode, false, true );
		$output[ 'GRAND_TOTAL_EX_TAX' ]  = output_price( $invoice->grand_total_ex_tax, $invoice->currencycode, false, true );
		$output[ 'GRAND_TOTAL_TAX' ]     = output_price( $invoice->grand_total_tax, $invoice->currencycode, false, true );
		$output[ 'OUTSTANDING_TOTAL' ]   = output_price( $invoice->balance, $invoice->currencycode, false, true );

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		
		if ( $popup == 1 ) 
			$tmpl->readTemplatesFromInput( 'printable_invoice.html' );
		else
			$tmpl->readTemplatesFromInput( 'frontend_view_invoice.html' );
		
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->addRows( 'transaction_rows', $transaction_rows );
		$tmpl->addRows( 'markaspaid_link', $markaspaid_link );
		$tmpl->addRows( 'markaspending_link', $markaspending_link );
		$tmpl->addRows( 'viewbooking_link', $viewbooking_link );

		if ( $invoice->init_total > 0.00 )
			{
			$tmpl->addRows( 'immediate_pay', $immediate_pay );
			}
		
		if ( !$return_template ) 
			$tmpl->displayParsedTemplate();
		else
			$this->retVals = $tmpl->getParsedTemplate();
		}

	function touch_template_language()
		{
		$output[ ] = jr_gettext( '_JOMRES_COM_INVOICE_PRINT', '_JOMRES_COM_INVOICE_PRINT' );
		$output[ ] = jr_gettext( '_JOMRES_COM_INVOICE_TITLE', '_JOMRES_COM_INVOICE_TITLE' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_TITLE', '_JRPORTAL_INVOICES_TITLE' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS', '_JRPORTAL_INVOICES_STATUS' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_RAISED', '_JRPORTAL_INVOICES_RAISED' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_DUE', '_JRPORTAL_INVOICES_DUE' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_SUBSCRIPTION', '_JRPORTAL_INVOICES_SUBSCRIPTION' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_INITTOTAL', '_JRPORTAL_INVOICES_INITTOTAL' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_CURRENCYCODE', '_JRPORTAL_INVOICES_CURRENCYCODE' );
		$output[ ] = jr_gettext( '_JOMRES_INVOICE_NUMBER', '_JOMRES_INVOICE_NUMBER' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_USER', '_JRPORTAL_INVOICES_USER' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS', '_JRPORTAL_INVOICES_LINEITEMS' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_NAME', '_JRPORTAL_INVOICES_LINEITEMS_NAME' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_CURRENCYCODE', '_JRPORTAL_INVOICES_CURRENCYCODE' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_UNPAID', '_JRPORTAL_INVOICES_STATUS_UNPAID' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_PAID', '_JRPORTAL_INVOICES_STATUS_PAID' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_CANCELLED', '_JRPORTAL_INVOICES_STATUS_CANCELLED' );
		$output[ ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_PENDING', '_JRPORTAL_INVOICES_STATUS_PENDING');
		$output[ ] = jr_gettext( '_JOMRES_INVOICE_MARKASPAID', '_JOMRES_INVOICE_MARKASPAID' );
		$output[ ] = jr_gettext( '_JOMRES_INVOICE_MARKEDASPAID', '_JOMRES_INVOICE_MARKEDASPAID' );
		$output[ ] = jr_gettext( '_JOMCOMP_MYUSER_VIEWBOOKING', '_JOMCOMP_MYUSER_VIEWBOOKING' );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
