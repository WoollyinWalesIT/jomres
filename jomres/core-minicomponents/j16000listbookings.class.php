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

class j16000listbookings
	{
	function j16000listbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$pageoutput = array ();
		$output     = array ();
		$rows       = array ();

		$property_uid_array = array ();

		$output[ 'HPROPERTYID' ]                   = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID", _JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID,false );
		$output[ 'HGUESTID' ]                      = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID", _JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID,false );
		$output[ 'HAFFILIATEID' ]                  = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID", _JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID,false );
		$output[ 'HINVOICEID' ]                    = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID", _JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID,false );
		$output[ 'HBOOKINGTOTAL' ]                 = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL", _JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL,false );
		$output[ 'HCONTRACTID' ]                   = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID", _JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID,false );
		$output[ 'HCONTRACTNUMBER' ]               = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER", _JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER,false );
		$output[ 'HCURRENCYCODE' ]                 = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE", _JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE,false );
		$output[ 'HCREATED' ]                      = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_CREATED", _JRPORTAL_LISTBOOKINGS_HEADER_CREATED,false );
		$output[ 'HARCHIVED' ]                     = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED", _JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED,false );
		$output[ 'HARCHIVEDDATE' ]                 = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED", _JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED,false );
		$output[ 'LIVESITE' ]                      = get_showtime( 'live_site' );
		$output[ '_JRPORTAL_CPANEL_LISTBOOKINGS' ] = jr_gettext( "_JRPORTAL_CPANEL_LISTBOOKINGS", _JRPORTAL_CPANEL_LISTBOOKINGS,false );

		jr_import( 'jrportal_booking_functions' );
		$bookingsFunctions = new jrportal_booking_functions();
		$bookingsArray     = $bookingsFunctions->getBookings( "" );
		$counter           = 0;
		
		$jomresPropertyList = get_showtime('published_properties_in_system');
		
		$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->get_property_name_multi($jomresPropertyList);

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext( "_JRPORTAL_CANCEL", _JRPORTAL_CANCEL,false ) );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		foreach ( $bookingsArray as $r )
			{
			$counter++;
			$rw            = array ();
			$rw[ 'STYLE' ] = "";
			if ( $this->bc_is_even( $counter ) ) $rw[ 'STYLE' ] = 'class="alt"';
			$puid                  = $r[ 'property_uid' ];
			$rw[ 'PROPERTY_UID' ]  = $current_property_details->property_names[ $puid ];
			$rw[ 'GUEST_ID' ]      = $r[ 'guest_id' ];
			$rw[ 'AFFILIATE_ID' ]  = $r[ 'affiliate_id' ];
			$rw[ 'INVOICE_ID' ]    = $r[ 'invoice_id' ];
			$rw[ 'BOOKING_TOTAL' ] = $r[ 'booking_total' ];
			$rw[ 'CONTRACT_ID' ]   = $r[ 'contract_id' ];
			$rw[ 'TAG' ]           = $r[ 'tag' ];
			$rw[ 'CURRENCY_CODE' ] = $r[ 'currency_code' ];
			$rw[ 'CREATED' ]       = $r[ 'created' ];
			$rw[ 'ARCHIVED' ]      = $r[ 'archived' ];
			$rw[ 'ARCHIVED_DATE' ] = $r[ 'archived_date' ];
			$rows[ ]               = $rw;
			}
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'admin_list_bookings.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );

		$tmpl->displayParsedTemplate();
		}

	function bc_is_even( $int_str )
		{
		return (int) !( $int_str & 1 );
		/* 		if (strlen($int_str)>0)
					{
					if (bcmod($int_str, 2)==='0')
						return true;
					else
						return false;
					}
				else	// error
					return 0; */
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}

	}