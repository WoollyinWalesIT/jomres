<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_invoices
	{
	function j16000list_invoices()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$editIcon = '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" alt="editicon"/>';
		jr_import( 'jrportal_user_functions' );
		$user_obj = new jrportal_user_functions();
		jr_import( 'invoicehandler' );

		$status = jomresGetParam( $_REQUEST, 'status', "" );


		switch ( $status )
		{
			case "unpaid":
				$stat = 0;
				break;
			case "paid":
				$stat = 1;
				break;
			case "cancelled":
				$stat = 2;
				break;
			case "pending":
				$stat = 3;
				break;
			default:
				$stat = null;
				break;
		}

		$invoices = invoices_getallinvoices( true, $stat );


		$guest_ids = array ();
		foreach ( $invoices as $inv )
			{
			$id               = $inv[ 'guest_id' ];
			$guest_ids[ $id ] = $id;
			}

		$guests    = array ();
		$query     = "SELECT guests_uid,firstname,surname,mos_userid  FROM #__jomres_guests WHERE guests_uid IN (".implode(',',$guest_ids).") ";
		$guestList = doSelectSql( $query );
		if ( count( $guestList ) > 0 )
			{
			foreach ( $guestList as $guest )
				{
				$guests[ $guest->guests_uid ][ 'guests_uid' ]  = $guest->guests_uid;
				$guests[ $guest->guests_uid ][ 'firstname' ]   = $guest->firstname;
				$guests[ $guest->guests_uid ][ 'surname' ]     = $guest->surname;
				$guests[ $guest->guests_uid ][ 'cms_user_id' ] = $guest->mos_userid;
				}
			}

		$output     = array ();
		$pageoutput = array ();
		$rows       = array ();

		$invoice_id_array = array ();
		foreach ( $invoices as $invoice )
			{
			$invoice_id_array[ ] = $invoice[ 'id' ];
			}
		$invoices_items = invoices_getalllineitems_forinvoice_ids( $invoice_id_array );

		$output[ 'PAGETITLE' ]     = jr_gettext( "_JRPORTAL_INVOICES_TITLE", _JRPORTAL_INVOICES_TITLE,false );
		$output[ 'HUSER' ]         = jr_gettext( "_JRPORTAL_INVOICES_USER", _JRPORTAL_INVOICES_USER,false );
		$output[ 'HSTATUS' ]       = jr_gettext( "_JRPORTAL_INVOICES_STATUS", _JRPORTAL_INVOICES_STATUS,false );
		$output[ 'HRAISED' ]       = jr_gettext( "_JRPORTAL_INVOICES_RAISED", _JRPORTAL_INVOICES_RAISED,false );
		$output[ 'HDUE' ]          = jr_gettext( "_JRPORTAL_INVOICES_DUE", _JRPORTAL_INVOICES_DUE,false );
		$output[ 'HPAID' ]         = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false );
		$output[ 'HSUBSCRIPTION' ] = jr_gettext( "_JRPORTAL_INVOICES_SUBSCRIPTION", _JRPORTAL_INVOICES_SUBSCRIPTION,false );
		$output[ 'HINITTOTAL' ]    = jr_gettext( "_JRPORTAL_INVOICES_INITTOTAL", _JRPORTAL_INVOICES_INITTOTAL,false );
		$output[ 'HRECURTOTAL' ]   = jr_gettext( "_JRPORTAL_INVOICES_RECUR_TOTAL", _JRPORTAL_INVOICES_RECUR_TOTAL,false );
		$output[ 'HFREQ' ]         = jr_gettext( "_JRPORTAL_INVOICES_RECUR_FREQUENCY", _JRPORTAL_INVOICES_RECUR_FREQUENCY,false );
		$output[ 'HDOM' ]          = jr_gettext( "_JRPORTAL_INVOICES_RECUR_DOMONTH", _JRPORTAL_INVOICES_RECUR_DOMONTH,false );
		$output[ 'HCURRENCYCODE' ] = jr_gettext( "_JRPORTAL_INVOICES_CURRENCYCODE", _JRPORTAL_INVOICES_CURRENCYCODE,false );
		$output[ 'LIVESITE' ]      = get_showtime( 'live_site' );

		if ( !using_bootstrap() )
			{
			$output[ 'TASK_FILTER_ANY' ]       = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices">' . jr_gettext( "_JOMRES_FRONT_ROOMSMOKING_EITHER", _JOMRES_FRONT_ROOMSMOKING_EITHER,false ) . '</a>';
			$output[ 'TASK_FILTER_UNPAID' ]    = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=unpaid">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID,false ) . '</a>';
			$output[ 'TASK_FILTER_PAID' ]      = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=paid">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false ) . '</a>';
			$output[ 'TASK_FILTER_CANCELLED' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=cancelled">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED,false ) . '</a>';
			$output[ 'TASK_FILTER_PENDING' ]   = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=pending">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING,false ) . '</a>';
			}
		else
			{
			$output[ 'TASK_FILTER_ANY' ]                     = JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices';
			$output[ '_JOMRES_FRONT_ROOMSMOKING_EITHER' ]    = jr_gettext( "_JOMRES_FRONT_ROOMSMOKING_EITHER", _JOMRES_FRONT_ROOMSMOKING_EITHER,false );
			$output[ 'TASK_FILTER_UNPAID' ]                  = JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=unpaid';
			$output[ '_JRPORTAL_INVOICES_STATUS_UNPAID' ]    = jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID,false );
			$output[ 'TASK_FILTER_PAID' ]                    = JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=paid';
			$output[ '_JRPORTAL_INVOICES_STATUS_PAID' ]      = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false );
			$output[ 'TASK_FILTER_CANCELLED' ]               = JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=cancelled';
			$output[ '_JRPORTAL_INVOICES_STATUS_CANCELLED' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED,false );
			$output[ 'TASK_FILTER_PENDING' ]                 = JOMRES_SITEPAGE_URL_ADMIN . '&task=list_invoices&status=pending';
			$output[ '_JRPORTAL_INVOICES_STATUS_PENDING' ]   = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING,false );
			}

		$already_found_users = array ();

		foreach ( $invoices as $invoice )
			{
			$r = array ();

			$invoicehandler     = new invoicehandler();
			$invoicehandler->id = (int) $invoice[ 'id' ];
			$invoicehandler->getInvoice();
			$balance = $invoicehandler->init_total;

			$r[ 'ID' ]        = $invoice[ 'id' ];
			$inv_id           = $invoice[ 'id' ];
			$invoice_items    = $invoices_items[ $inv_id ];
			$item_name_string = "";
			foreach ( $invoice_items as $invoice_item )
				{
				if ( $item_name_string != "Commission<br/>" ) // We can filter out other line items as Commission only needs to be named once in the invoices list. Also, invoices of commission should not have other items added to them.
				$item_name_string .= $invoice_item[ 'name' ] . "<br/>";
				}
			$r[ 'ITEMS' ] = $item_name_string;

			if ( $invoice[ 'cms_user_id' ] > 0 ) // We prefer, where possible, to get the _current_ user details, rather than those stored when the booking was made, as it's possible that their details have been changed since the booking was taken, however as the system allows users to make bookings without registering we also need to be able to fall back to the guest's table names if the guest is an unregistered user.
				{
				$cms_user_id = $invoice[ 'cms_user_id' ];
				if ( !isset( $already_found_users[ $cms_user_id ] ) )
					{
					$user_deets                          = $user_obj->getJoomlaUserDetailsForJoomlaId( $cms_user_id );
					$already_found_users[ $cms_user_id ] = $user_deets;
					}
				else
				$user_deets = $already_found_users[ $cms_user_id ];
				}
			else
				{
				if ( $invoice[ 'guest_id' ] > 0 ) 
					{
					$guest_name = $guests[ $invoice[ 'guest_id' ] ][ 'firstname' ] . " " . $guests[ $invoice[ 'guest_id' ] ][ 'surname' ];
					}
				else
					{
					$guest_name = jr_gettext( "_JOMRES_MR_AUDIT_UNKNOWNUSER", _JOMRES_MR_AUDIT_UNKNOWNUSER,false );
					}
				$user_deets = array ( 'cms_user_id' => 0, 'name' => $guest_name );
				}


			if ( $invoice[ 'cms_user_id' ] == 0 ) 
				{
				$r[ 'USER' ] = $user_deets[ 'name' ];
				}
			else
				{
				$r[ 'USER' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=list_usersinvoices&id=' . $invoice[ 'cms_user_id' ] . '">' . $user_deets[ 'name' ] . '</a>';
				}
			if ( $invoice[ 'status' ] == "0" ) 
				{
				$r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID,false );
				}
			elseif ( $invoice[ 'status' ] == "1" ) 
				{
				$r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false );
				}
			elseif ( $invoice[ 'status' ] == "2" ) 
				{
				$r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED,false );
				}
			else
				{
				$r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING,false );
				}
			$r[ 'RAISED' ] = $invoice[ 'raised_date' ];
			$r[ 'DUE' ]    = $invoice[ 'due_date' ];
			$r[ 'PAID' ]   = $invoice[ 'paid' ];
			if ( $invoice[ 'subscription' ] == "1" ) 
				{
				$r[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_YES", _JOMRES_COM_MR_YES,false );
				}
			else
				{
				$r[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_NO", _JOMRES_COM_MR_NO,false );
				}
			$r[ 'INITTOTAL' ]    = output_price( $balance, $invoice[ 'currencycode' ] );
			$r[ 'RECURTOTAL' ]   = output_price( $invoice[ 'recur_total' ], $invoice[ 'currencycode' ] );
			$r[ 'FREQ' ]         = $invoice[ 'recur_frequency' ];
			$r[ 'CURRENCYCODE' ] = $invoice[ 'currencycode' ];

			$r[ 'EDITLINK' ]  = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_invoice&id=' . $invoice[ 'id' ] . '">' . $editIcon . '</a>';
			$r[ 'EDIT_TEXT' ] = jr_gettext( 'COMMON_VIEW', COMMON_VIEW, false );
			$r[ 'EDIT_URL' ]  = JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_invoice&id=' . $invoice[ 'id' ];
			$rows[ ]          = $r;
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		//$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=edit_invoice"),'');
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL_ADMIN ), '' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ]             = $jrtb;
		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_invoices.html' );
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