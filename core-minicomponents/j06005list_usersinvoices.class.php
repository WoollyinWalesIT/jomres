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

class j06005list_usersinvoices
	{
	function j06005list_usersinvoices()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$infoIcon   = '<img src="' . get_showtime( 'live_site' ) . '/jomres/images/SymbolInformation.png" alt="info"/>';
		$status     = jomresGetParam( $_REQUEST, 'status', "" );
		$id         = $thisJRUser->id;

		if ( $thisJRUser->userIsRegistered )
			{
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
			}

			$invoices = invoices_getinvoicesfor_juser( $id, $stat );

			$invoice_id_array = array ();
			foreach ( $invoices as $invoice )
				{
				$invoice_id_array[ ] = $invoice[ 'id' ];
				}
			$invoices_items = invoices_getalllineitems_forinvoice_ids( $invoice_id_array );

			$output     = array ();
			$pageoutput = array ();
			$rows       = array ();

			$output[ 'PAGETITLE' ]     = jr_gettext( '_JRPORTAL_INVOICES_TITLE', _JRPORTAL_INVOICES_TITLE, false );
			$output[ 'HUSER' ]         = jr_gettext( '_JRPORTAL_INVOICES_USER', _JRPORTAL_INVOICES_USER );
			$output[ 'HSTATUS' ]       = jr_gettext( '_JRPORTAL_INVOICES_STATUS', _JRPORTAL_INVOICES_STATUS );
			$output[ 'HRAISED' ]       = jr_gettext( '_JRPORTAL_INVOICES_RAISED', _JRPORTAL_INVOICES_RAISED );
			$output[ 'HDUE' ]          = jr_gettext( '_JRPORTAL_INVOICES_DUE', _JRPORTAL_INVOICES_DUE );
			$output[ 'HPAID' ]         = jr_gettext( '_JRPORTAL_INVOICES_STATUS_PAID', _JRPORTAL_INVOICES_STATUS_PAID );
			$output[ 'HSUBSCRIPTION' ] = jr_gettext( '_JRPORTAL_INVOICES_SUBSCRIPTION', _JRPORTAL_INVOICES_SUBSCRIPTION );
			$output[ 'HINITTOTAL' ]    = jr_gettext( '_JRPORTAL_INVOICES_INITTOTAL', _JRPORTAL_INVOICES_INITTOTAL );
			$output[ 'HRECURTOTAL' ]   = jr_gettext( '_JRPORTAL_INVOICES_RECUR_TOTAL', _JRPORTAL_INVOICES_RECUR_TOTAL );
			$output[ 'HFREQ' ]         = jr_gettext( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', _JRPORTAL_INVOICES_RECUR_FREQUENCY );
			$output[ 'HDOM' ]          = jr_gettext( '_JRPORTAL_INVOICES_RECUR_DOMONTH', _JRPORTAL_INVOICES_RECUR_DOMONTH );
			$output[ 'HCURRENCYCODE' ] = jr_gettext( '_JRPORTAL_INVOICES_CURRENCYCODE', _JRPORTAL_INVOICES_CURRENCYCODE );

			if ( using_bootstrap() )
				{
				$output[ 'TASK_FILTER_ANY' ]                     = JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&id=' . $id;
				$output[ '_JOMRES_FRONT_ROOMSMOKING_EITHER' ]    = jr_gettext( "_JOMRES_FRONT_ROOMSMOKING_EITHER", _JOMRES_FRONT_ROOMSMOKING_EITHER );
				$output[ 'TASK_FILTER_UNPAID' ]                  = JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=unpaid&id=' . $id;
				$output[ '_JRPORTAL_INVOICES_STATUS_UNPAID' ]    = jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID );
				$output[ 'TASK_FILTER_PAID' ]                    = JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=paid&id=' . $id;
				$output[ '_JRPORTAL_INVOICES_STATUS_PAID' ]      = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID );
				$output[ 'TASK_FILTER_CANCELLED' ]               = JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=cancelled&id=' . $id;
				$output[ '_JRPORTAL_INVOICES_STATUS_CANCELLED' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED );
				$output[ 'TASK_FILTER_PENDING' ]                 = JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=pending&id=' . $id;
				$output[ '_JRPORTAL_INVOICES_STATUS_PENDING' ]   = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING );
				}
			else
				{
				$output[ 'TASK_FILTER_ANY' ]       = '<a href="' . JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&id=' . $id . '">' . jr_gettext( '_JOMRES_FRONT_ROOMSMOKING_EITHER', _JOMRES_FRONT_ROOMSMOKING_EITHER ) . '</a>';
				$output[ 'TASK_FILTER_UNPAID' ]    = '<a href="' . JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=unpaid&id=' . $id . '">' . jr_gettext( '_JRPORTAL_INVOICES_STATUS_UNPAID', _JRPORTAL_INVOICES_STATUS_UNPAID ) . '</a>';
				$output[ 'TASK_FILTER_PAID' ]      = '<a href="' . JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=paid&id=' . $id . '">' . jr_gettext( '_JRPORTAL_INVOICES_STATUS_PAID', _JRPORTAL_INVOICES_STATUS_PAID ) . '</a>';
				$output[ 'TASK_FILTER_CANCELLED' ] = '<a href="' . JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=cancelled&id=' . $id . '">' . jr_gettext( '_JRPORTAL_INVOICES_STATUS_CANCELLED', _JRPORTAL_INVOICES_STATUS_CANCELLED ) . '</a>';
				$output[ 'TASK_FILTER_PENDING' ]   = '<a href="' . JOMRES_SITEPAGE_URL . '&task=list_usersinvoices&status=pending&id=' . $id . '">' . jr_gettext( '_JRPORTAL_INVOICES_STATUS_PENDING', _JRPORTAL_INVOICES_STATUS_PENDING ) . '</a>';
				}

			if ( count( $invoices ) > 0 )
				{
				foreach ( $invoices as $invoice )
					{
					$r = array ();

					$inv_id           = $invoice[ 'id' ];
					$invoice_items    = $invoices_items[ $inv_id ];
					$item_name_string = "";
					foreach ( $invoice_items as $invoice_item )
						{
						if ( $item_name_string != "Commission<br/>" ) // We can filter out other line items as Commission only needs to be named once in the invoices list. Also, invoices of commission should not have other items added to them.
						$item_name_string .= $invoice_item[ 'name' ] . "<br/>";
						}
					$r[ 'ITEMS' ] = $item_name_string;
					$r[ 'ID' ]    = $invoice[ 'id' ];

					jr_import( 'jrportal_user_functions' );
					$user_obj    = new jrportal_user_functions();
					$user_deets  = $user_obj->getJoomlaUserDetailsForJoomlaId( $invoice[ 'cms_user_id' ] );
					$r[ 'USER' ] = $user_deets[ 'name' ];
					if ( $invoice[ 'status' ] == "0" ) $r[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_UNPAID', _JRPORTAL_INVOICES_STATUS_UNPAID );
					elseif ( $invoice[ 'status' ] == "1" ) $r[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_PAID', _JRPORTAL_INVOICES_STATUS_PAID );
					elseif ( $invoice[ 'status' ] == "2" ) $r[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_CANCELLED', _JRPORTAL_INVOICES_STATUS_CANCELLED );
					else
					$r[ 'STATUS' ] = jr_gettext( '_JRPORTAL_INVOICES_STATUS_PENDING', _JRPORTAL_INVOICES_STATUS_PENDING );
					$r[ 'RAISED' ] = $invoice[ 'raised_date' ];
					$r[ 'DUE' ]    = $invoice[ 'due_date' ];
					$r[ 'PAID' ]   = $invoice[ 'paid' ];
					if ( $invoice[ 'subscription' ] == "1" ) $r[ 'SUBSCRIPTION' ] = jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES );
					else
					$r[ 'SUBSCRIPTION' ] = jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO );
					$r[ 'INITTOTAL' ]    = output_price( $invoice[ 'init_total' ], $invoice[ 'currencycode' ], false, true );
					$r[ 'RECURTOTAL' ]   = output_price( $invoice[ 'recur_total' ], $invoice[ 'currencycode' ], false, true );
					$r[ 'FREQ' ]         = $invoice[ 'recur_frequency' ];
					$r[ 'CURRENCYCODE' ] = $invoice[ 'currencycode' ];
					$settingArray        = get_plugin_settings( "paypal", $invoice[ 'property_uid' ] );

					$jrportal_paypal_settings = jomres_singleton_abstract::getInstance( 'jrportal_paypal_settings' );
					$paypal_settings          = $jrportal_paypal_settings->get_paypal_settings();

					if ( ( isset( $settingArray[ 'active' ] ) && $settingArray[ 'active' ] == "1" ) || ( $invoice[ 'subscription' ] == 1 && $paypal_settings[ 'email' ] != "" && $invoice[ 'status' ] != "1" ) || ( $invoice[ 'is_commission' ] == 1 && $paypal_settings[ 'email' ] != "" && $invoice[ 'status' ] != "1" ) )
						{
						if ( $invoice[ 'status' ] != "1" ) $r[ 'PAYNOW' ] = '<a href="' . JOMRES_SITEPAGE_URL . '&task=immediatepay&id=' . $invoice[ 'id' ] . '"><img src = "' . get_showtime( 'live_site' ) . '/jomres/images/btn_paynow_SM.gif" /></a>';
						}
					$r[ 'EDITLINK' ]  = '<a href="' . JOMRES_SITEPAGE_URL . '&task=view_invoice&id=' . $invoice[ 'id' ] . '">' . $infoIcon . '</a>';
					$r[ 'EDIT_TEXT' ] = jr_gettext( 'COMMON_VIEW', COMMON_VIEW, false );
					$r[ 'EDIT_URL' ]  = JOMRES_SITEPAGE_URL . '&task=view_invoice&id=' . $invoice[ 'id' ];
					$rows[ ]          = $r;
					}
				}

			$output[ 'JOMRES_SITEPAGE_URL' ] = JOMRES_SITEPAGE_URL;
			$output[ 'LIVESITE' ]            = get_showtime( 'live_site' );

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'frontend_list_invoices.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}