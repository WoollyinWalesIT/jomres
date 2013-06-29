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

class j16000edit_invoice
	{
	function j16000edit_invoice()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$output     = array ();
		$pageoutput = array ();
		$rows       = array ();

		$id = intval( jomresGetParam( $_REQUEST, 'id', 0 ) );
		jr_import( 'invoicehandler' );
		$invoice = new invoicehandler();
		if ( $id > 0 )
			{
			$invoice->id = $id;
			$invoice->getInvoice();
			}

		$output[ 'PAGETITLE' ]     = jr_gettext( "_JRPORTAL_INVOICES_TITLE", _JRPORTAL_INVOICES_TITLE );
		$output[ 'LIVESITE' ]      = get_showtime( 'live_site' );
		$output[ 'HUSER' ]         = jr_gettext( "_JRPORTAL_INVOICES_USER", _JRPORTAL_INVOICES_USER );
		$output[ 'HSTATUS' ]       = jr_gettext( "_JRPORTAL_INVOICES_STATUS", _JRPORTAL_INVOICES_STATUS );
		$output[ 'HRAISED' ]       = jr_gettext( "_JRPORTAL_INVOICES_RAISED", _JRPORTAL_INVOICES_RAISED );
		$output[ 'HDUE' ]          = jr_gettext( "_JRPORTAL_INVOICES_DUE", _JRPORTAL_INVOICES_DUE );
		$output[ 'HSUBSCRIPTION' ] = jr_gettext( "_JRPORTAL_INVOICES_SUBSCRIPTION", _JRPORTAL_INVOICES_SUBSCRIPTION );
		$output[ 'HINITTOTAL' ]    = jr_gettext( "_JRPORTAL_INVOICES_INITTOTAL", _JRPORTAL_INVOICES_INITTOTAL );
		$output[ 'HRECURTOTAL' ]   = jr_gettext( "_JRPORTAL_INVOICES_RECUR_TOTAL", _JRPORTAL_INVOICES_RECUR_TOTAL );
		$output[ 'HFREQ' ]         = jr_gettext( "_JRPORTAL_INVOICES_RECUR_FREQUENCY", _JRPORTAL_INVOICES_RECUR_FREQUENCY );
		$output[ 'HDOM' ]          = jr_gettext( "_JRPORTAL_INVOICES_RECUR_DOMONTH", _JRPORTAL_INVOICES_RECUR_DOMONTH );

		$output[ 'LIPAGETITLE' ]              = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS", _JRPORTAL_INVOICES_LINEITEMS );
		$output[ 'HLI_NAME' ]                 = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_NAME", _JRPORTAL_INVOICES_LINEITEMS_NAME );
		$output[ 'HLI_DESCRIPTION' ]          = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION", _JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION );
		$output[ 'HCURRENCYCODE' ]            = jr_gettext( "_JRPORTAL_INVOICES_CURRENCYCODE", _JRPORTAL_INVOICES_CURRENCYCODE );
		$output[ 'HLI_INIT_PRICE' ]           = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE", _JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE );
		$output[ 'HLI_INIT_QTY' ]             = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY", _JRPORTAL_INVOICES_LINEITEMS_INIT_QTY );
		$output[ 'HLI_INIT_DISCOUNT' ]        = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT", _JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT );
		$output[ 'HLI_INIT_TOTAL' ]           = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL", _JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL );
		$output[ 'HLI_INIT_TOTAL_INCLUSIVE' ] = jr_gettext( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', _JOMRES_LINEITEM_TOTAL_INCLUDINGTAX );
		$output[ 'HLI_RECUR_PRICE' ]          = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE", _JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE );
		$output[ 'HLI_RECUR_QTY' ]            = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY", _JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY );
		$output[ 'HLI_RECUR_DISCOUNT' ]       = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT", _JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT );
		$output[ 'HLI_RECUR_TOTAL' ]          = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL", _JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL );
		$output[ 'HLI_TAX_CODE' ]             = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE", _JRPORTAL_INVOICES_LINEITEMS_TAX_CODE );
		$output[ 'HLI_TAX_DESCRIPTION' ]      = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION", _JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION );
		$output[ 'HLI_TAX_RATE' ]             = jr_gettext( "_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE", _JRPORTAL_INVOICES_LINEITEMS_TAX_RATE );

		if ( $id > 0 )
			{
			$output[ 'ID' ] = $invoice->id;
			if ( $invoice->status != 1 ) $output[ 'STATUS' ] = invoices_makeInvoiceStatusDropdown( $invoice->status );
			else
			$output[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID );

			$output[ 'USER' ]                               = jr_gettext( "_JRPORTAL_INVOICES_USER", _JRPORTAL_INVOICES_USER );
			$output[ '_JOMRES_ADMIN_LISTALLUSERSINVOICES' ] = jr_gettext( "_JOMRES_ADMIN_LISTALLUSERSINVOICES", _JOMRES_ADMIN_LISTALLUSERSINVOICES );

			jr_import( 'jrportal_user_functions' );
			$user_obj                      = new jrportal_user_functions();
			$user_deets                    = $user_obj->getJoomlaUserDetailsForJoomlaId( $invoice->cms_user_id );
			$output[ 'USERSINVOICESLINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_usersinvoices&id=' . $invoice->cms_user_id . '">' . $user_deets[ 'name' ] . '</a>';
			$output[ 'RAISED' ]            = $invoice->raised_date;
			$output[ 'DUE' ]               = $invoice->due_date;
			if ( $invoice->subscription == "1" ) $output[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_YES", _JOMRES_COM_MR_YES );
			else
			$output[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_NO", _JOMRES_COM_MR_NO );
			$output[ 'INITTOTAL' ] = $invoice->init_total;

			$output[ 'RECURTOTAL' ]   = $invoice->recur_total;
			$output[ 'FREQ' ]         = $invoice->recur_frequency;
			$output[ 'CURRENCYCODE' ] = $invoice->currencycode;

			$lineitems = invoices_getalllineitems_forinvoice( $id );
			$counter   = 0;
			if ( count( $lineitems ) > 0 )
				{
				foreach ( $lineitems as $li )
					{
					$r                              = array ();
					$r[ 'ID' ]                      = $li[ 'id' ];
					$r[ 'LI_NAME' ]                 = $li[ 'name' ];
					$r[ 'LI_DESCRIPTION' ]          = $li[ 'description' ];
					$r[ 'LI_INIT_PRICE' ]           = $li[ 'init_price' ];
					$r[ 'LI_INIT_QTY' ]             = $li[ 'init_qty' ];
					$r[ 'LI_INIT_DISCOUNT' ]        = $li[ 'init_discount' ];
					$r[ 'LI_INIT_TOTAL' ]           = $li[ 'init_total' ];
					$r[ 'LI_INIT_TOTAL_INCLUSIVE' ] = $li[ 'init_total_inclusive' ];
					$r[ 'LI_RECUR_PRICE' ]          = $li[ 'recur_price' ];
					$r[ 'LI_RECUR_QTY' ]            = $li[ 'recur_qty' ];
					$r[ 'LI_RECUR_DISCOUNT' ]       = $li[ 'recur_discount' ];
					$r[ 'LI_RECUR_TOTAL' ]          = $li[ 'recur_total' ];
					$r[ 'LI_TAX_CODE' ]             = $li[ 'tax_code' ];
					$r[ 'LI_TAX_DESCRIPTION' ]      = $li[ 'tax_description' ];
					$r[ 'LI_TAX_RATE' ]             = $li[ 'tax_rate' ];
					$r[ 'LI_INV_ID' ]               = $li[ 'inv_id' ];
					$r[ 'COUNTER' ]                 = $counter;
					$counter++;
					$r[ 'CURRENCYCODE' ] = $invoice->currencycode;
					$rows[ ]             = $r;
					}
				}
			}
		else
			{
			$output[ 'ID' ] = $invoice->id;

			$output[ 'STATUS' ] = invoices_makeInvoiceStatusDropdown( $invoice->status );
			$output[ 'USER' ]   = jr_gettext( "_JRPORTAL_INVOICES_USER", _JRPORTAL_INVOICES_USER );
			jr_import( 'jrportal_user_functions' );
			$user_obj                      = new jrportal_user_functions();
			$user_deets                    = $user_obj->getJoomlaUserDetailsForJoomlaId( $invoice->cms_user_id );
			$output[ 'USERSINVOICESLINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_usersinvoices&id=' . $invoice->cms_user_id . '">' . $user_deets[ 'name' ] . '</a>';
			$output[ 'RAISED' ]            = $invoice->raised_date;
			$output[ 'DUE' ]               = $invoice->due_date;
			if ( $invoice->subscription == "1" ) $output[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_YES", _JOMRES_COM_MR_YES );
			else
			$output[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_NO", _JOMRES_COM_MR_NO );
			$output[ 'INITTOTAL' ]    = $invoice->init_total;
			$output[ 'RECURTOTAL' ]   = $invoice->recur_total;
			$output[ 'FREQ' ]         = $invoice->recur_frequency;
			$output[ 'CURRENCYCODE' ] = $invoice->currencycode;

			$r[ 'ID' ]                      = $li[ 'id' ];
			$r[ 'LI_NAME' ]                 = $li[ 'name' ];
			$r[ 'LI_DESCRIPTION' ]          = $li[ 'description' ];
			$r[ 'LI_INIT_PRICE' ]           = $li[ 'init_price' ];
			$r[ 'LI_INIT_QTY' ]             = $li[ 'init_qty' ];
			$r[ 'LI_INIT_DISCOUNT' ]        = $li[ 'init_discount' ];
			$r[ 'LI_INIT_TOTAL' ]           = $li[ 'init_total' ];
			$r[ 'LI_INIT_TOTAL_INCLUSIVE' ] = $li[ 'init_total_inclusive' ];
			$r[ 'LI_RECUR_PRICE' ]          = $li[ 'recur_price' ];
			$r[ 'LI_RECUR_QTY' ]            = $li[ 'recur_qty' ];
			$r[ 'LI_RECUR_DISCOUNT' ]       = $li[ 'recur_discount' ];
			$r[ 'LI_RECUR_TOTAL' ]          = $li[ 'recur_total' ];
			$r[ 'LI_TAX_CODE' ]             = $li[ 'tax_code' ];
			$r[ 'LI_TAX_DESCRIPTION' ]      = $li[ 'tax_description' ];
			$r[ 'LI_TAX_RATE' ]             = $li[ 'tax_rate' ];
			$r[ 'LI_INV_ID' ]               = $li[ 'inv_id' ];
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_invoice' );
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=list_invoices", '' );
		//$jrtb .= $jrtbar->toolbarItem('delete',"index.php?option=com_jomres&task=delete_invoice".jomresURLToken()."&no_html=1&id=".$id,'');
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'JOMRESTOKEN' ]               = '<input type="hidden" name="jomrestoken" value="' . jomresSetToken() . '"><input type="hidden" name="no_html" value="1"/>';
		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );

		if ( $id > 0 ) $tmpl->readTemplatesFromInput( 'edit_invoice.html' );
		else
		$tmpl->readTemplatesFromInput( 'new_invoice.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>