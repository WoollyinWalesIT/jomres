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

class j06001list_bookings_ajax
	{
	function j06001list_bookings_ajax()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$defaultProperty=getDefaultProperty();
		
		$startDate		= jomresGetParam($_GET,'startDate','');
		$endDate		= jomresGetParam($_GET,'endDate','');
		$deposit_status = (int)jomresGetParam($_GET,'deposit_status','2');
		$resident_status= (int)jomresGetParam($_GET,'resident_status','2');
		$booking_status = (int)jomresGetParam($_GET,'booking_status','2');
		$show_all		= (int)jomresGetParam($_GET,'show_all','0');
		$tag			= (int)jomresGetParam($_GET,'tag','0');

		$img_pending     = "label label-grey";
		$img_arrivetoday = "label label-orange";
		$img_resident    = "label label-green";
		$img_late        = "label label-red";
		$img_departtoday = "label label-blue";
		$img_stillhere   = "label label-purple";
		$img_bookedout   = "label label-teal";
		$img_cancelled   = "label label-black";

		$rows = array ();
		
		//set the table coulmns, in the exact orcer in which they`re displayed in the table
		$aColumns = array( 'a.contract_uid', 'a.contract_uid','a.tag','a.property_uid','a.arrival','a.departure','b.firstname','b.surname','b.tel_landline','b.tel_mobile','b.email','a.contract_total','a.deposit_required','a.deposit_paid','a.special_reqs','a.invoice_uid','a.timestamp');
		
		/*
		 * Paging
		 */
		$sLimit = "";
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
			{
			$sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".intval( $_GET['iDisplayLength'] );
			}
		
		/*
		 * Ordering
		 */
		$sOrder = "";
		if ( isset( $_GET['iSortCol_0'] ) )
			{
			$sOrder = "ORDER BY  ";
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
				{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
					{
					$sOrder .= "".$aColumns[ intval( $_GET['iSortCol_'.$i] ) ]." ".
						($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
					}
				}
			
			$sOrder = substr_replace( $sOrder, "", -2 );
			if ( $sOrder == "ORDER BY" )
				{
				$sOrder = "";
				}
			}
		
		/* 
		 * Filtering
		 * NOTE this does not match the built-in DataTables filtering which does it
		 * word by word on any field. It's possible to do here, but concerned about efficiency
		 * on very large tables, and MySQL's regex functionality is very limited
		 */
		$sWhere = "";
		if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
			{
			$sWhere = "AND (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
				$sWhere .= "".$aColumns[$i]." LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
				}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
			}
		
		/*
		 * Prefilter
		 */
		if ($show_all == 1)
			$clause = "WHERE a.property_uid IN (" . implode( ',',$thisJRUser->authorisedProperties ) . ") AND a.tag IS NOT NULL ";
		else
			$clause = "WHERE a.property_uid = '".(int)$defaultProperty."' AND a.tag IS NOT NULL ";
		
		//date interval filter
		if ($startDate != '' && $endDate != '' && $tag == 0)
			{
			$clause .= "AND ( ( DATE_FORMAT(a.arrival, '%Y/%m/%d') BETWEEN DATE_FORMAT('" . $startDate . "', '%Y/%m/%d') AND DATE_FORMAT('" . $endDate . "', '%Y/%m/%d') ) ";
			$clause .= "OR ( DATE_FORMAT(a.departure, '%Y/%m/%d') BETWEEN DATE_FORMAT('" . $startDate . "', '%Y/%m/%d') AND DATE_FORMAT('" . $endDate . "', '%Y/%m/%d') ) ) ";
			}
		
		//booked out or cancelled bookings
		if ($deposit_status != 2)
			$clause .="AND a.deposit_paid = '".$deposit_status."' ";

		if ($resident_status != 2)
			{
			if ($resident_status == 1)
				$clause .="AND ( a.booked_in = '1' AND a.bookedout = '0' ) ";
			elseif ($resident_status == '0')
				$clause .="AND a.bookedout = '1' ";
			elseif ($resident_status == '3')
				$clause .="AND ( a.booked_in = '0' AND a.bookedout = '0' ) ";
			}
		
		if ($booking_status != 2)
			{
			if ($booking_status == 0)
				$clause .="AND ( a.cancelled = '0' AND a.bookedout = '0' ) ";
			elseif ($booking_status == 1)
				$clause .="AND a.cancelled = '1' ";
			}
		
		if ($tag != 0)
			$clause .="AND a.tag LIKE '%".$tag."%' ";
		
		/*
		 * Build and execute the query
		 */
		$query = "SELECT SQL_CALC_FOUND_ROWS 
						a.contract_uid, 
						a.arrival, 
						a.departure, 
						a.contract_total, 
						a.tag, 
						a.booked_in, 
						a.bookedout, 
						a.deposit_required, 
						a.deposit_paid, 
						a.special_reqs, 
						a.timestamp, 
						a.cancelled, 
						a.invoice_uid,
						a.property_uid,
						b.firstname, 
						b.surname, 
						b.tel_landline, 
						b.tel_mobile, 
						b.email
					FROM #__jomres_contracts a 
						LEFT JOIN #__jomres_guests b ON a.guest_uid = b.guests_uid " 
					. $clause 
					. ' ' . $sWhere 
					. ' ' . $sOrder 
					. ' ' . $sLimit;
		$jomresContractsList = doSelectSql( $query );
		
		/*
		 * Total number of rows
		 */
		$query = "SELECT FOUND_ROWS()";
		$mp=(int)doSelectSql( $query,1 );
		if ( $mp == 0 )
			{
			$output = array(
				"sEcho" => intval($_GET['sEcho']),
				"iTotalRecords" => 0,
				"iTotalDisplayRecords" => 0,
				"aaData" => array()
				);
			echo json_encode( $output );
			exit;
			}
		
		/*
		 * Start building the output array. The columns data should be built in the exact order in which they`ll be displayed in the table.
		 */
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
			"iTotalRecords" => $mp,
			"iTotalDisplayRecords" => $mp,
			"aaData" => array()
		);
		foreach ( $jomresContractsList as $p )
			{
			$r         = array ();
			
			$imgToShow = $img_pending;
			$today     = date( "Y/m/d" );
			$arrival   = $p->arrival;
			$departure = $p->departure;
			$bookedIn  = $p->booked_in;
			$bookedOut  = $p->bookedout;
			$cancelled  = $p->cancelled;
	
			$date_elements = explode( "/", $today );
			$unixToday     = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			$date_elements = explode( "/", $arrival );
			$unixArrival   = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			$date_elements = explode( "/", $departure );
			$unixDeparture = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			if ( $unixArrival == $unixToday && $bookedIn != "1" ) $imgToShow = $img_arrivetoday;
			if ( $unixDeparture == $unixToday && $bookedIn == "1" ) $imgToShow = $img_departtoday;
			if ( $unixArrival < $unixToday && $bookedIn != "1" ) $imgToShow = $img_late;
			if ( $unixDeparture > $unixToday && $bookedIn == "1" ) $imgToShow = $img_resident;
			if ( $unixDeparture < $unixToday && $bookedIn == "1" ) $imgToShow = $img_stillhere;
			if ( $bookedOut == "1" ) $imgToShow = $img_bookedout;
			if ( $cancelled == "1" ) $imgToShow = $img_cancelled;
			
			$thisProperty='';
			if ($show_all == 1 && ((int)$p->property_uid != (int)$defaultProperty))
				$thisProperty='&thisProperty='.$p->property_uid;
			
			if (!using_bootstrap())
				{
				$jrtbar    = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
				$jrtb      = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem( 'edit', jomresURL( JOMRES_SITEPAGE_URL . '&task=editBooking' . '&contract_uid=' . $p->contract_uid . $thisProperty ), jr_gettext( 'COMMON_EDIT', COMMON_EDIT, false ) );
				if ( $p->cancelled == 0 )
					{
					if ( $p->booked_in == 0 )
						$jrtb .= $jrtbar->toolbarItem( 'bookGuestIn', jomresURL( JOMRES_SITEPAGE_URL . '&task=bookGuestIn' . '&contract_uid=' . $p->contract_uid  . $thisProperty ), jr_gettext( '_JOMRES_FRONT_MR_BOOKIN_TITLE', _JOMRES_FRONT_MR_BOOKIN_TITLE, false ) );
					elseif( $p->bookedout == 0 )
						$jrtb .= $jrtbar->toolbarItem( 'bookGuestOut', jomresURL( JOMRES_SITEPAGE_URL . '&task=bookGuestOut' . '&contract_uid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', _JOMRES_FRONT_MR_BOOKOUT_TITLE, false ) );
					}
				$r[]     = $jrtb .= $jrtbar->endTable();
				}
			else
				{
				$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
				$toolbar->newToolbar();
				$toolbar->addSecondaryItem( 'icon-screen', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=editBooking&contract_uid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', _JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS, false ) );
				if ( $p->cancelled == 0 )
					{
					if ( $p->booked_in == 0 )
						$toolbar->addItem( 'icon-plus', 'btn btn-default ', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=bookGuestIn&contract_uid=' . $p->contract_uid . $thisProperty), jr_gettext( '_JOMRES_ACTION_CHECKIN', _JOMRES_ACTION_CHECKIN, false ) );
					elseif( $p->bookedout == 0 )
						$toolbar->addItem( 'icon-minus', 'btn btn-success', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=bookGuestOut&contract_uid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMRES_ACTION_CHECKOUT', _JOMRES_ACTION_CHECKOUT, false ) );
					elseif( $p->bookedout == 1 )
						$toolbar->addItem( 'icon-ok', 'btn  btn-default disabled', '', 'javascript:void();', jr_gettext( '_JOMRES_STATUS_CHECKEDOUT', _JOMRES_STATUS_CHECKEDOUT, false ) );
					if( $p->bookedout == 0 )
						{
						$toolbar->addSecondaryItem( 'icon-edit', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=amendBooking&contractUid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMRES_CONFIRMATION_AMEND', _JOMRES_CONFIRMATION_AMEND, false ) );
						$toolbar->addSecondaryItem( 'icon-cart', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=addServiceToBill&contract_uid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMRES_COM_ADDSERVICE_TITLE', _JOMRES_COM_ADDSERVICE_TITLE, false ) );
						}
					if ( $p->deposit_paid == 0 && $p->bookedout == 0 && $p->cancelled == 0)
						$toolbar->addSecondaryItem( 'icon-cart', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=editDeposit&contractUid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', _JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE, false ) );
					if ( $p->booked_in == 0 )
						$toolbar->addSecondaryItem( 'icon-cancel', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=cancelBooking&contract_uid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', _JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING, false ) );
					}
				elseif( $p->cancelled == 1 )
					{
					$toolbar->addItem( 'icon-cancel', 'btn disabled', '', 'javascript:void();', jr_gettext( '_JOMRES_STATUS_CANCELLED', _JOMRES_STATUS_CANCELLED, false ) );
					}
				$toolbar->addSecondaryItem( 'icon-list-view', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=view_invoice&id=' . $p->invoice_uid . $thisProperty ), jr_gettext( '_JOMRES_MANAGER_SHOWINVOICE', _JOMRES_MANAGER_SHOWINVOICE, false ) );
				$toolbar->addSecondaryItem( 'icon-edit', '', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=addnote&contract_uid=' . $p->contract_uid . $thisProperty ), jr_gettext( '_JOMCOMP_BOOKINGNOTES_ADD', _JOMCOMP_BOOKINGNOTES_ADD, false ) );
				$r[]=$toolbar->getToolbar();
				}
			
			$r[] = $p->contract_uid;
			
			$r[] = '<span class="'.$imgToShow.'">'.$p->tag.'</span>';
			
			$r[] = getPropertyName($p->property_uid);
			$r[] = outputDate( $p->arrival );
			$r[] = outputDate( $p->departure );
			$r[] = jomres_decode( $p->firstname );
			$r[] = jomres_decode( $p->surname );
			$r[] = jomres_decode( $p->tel_landline );
			$r[] = jomres_decode( $p->tel_mobile );
			$r[] = jomres_decode( $p->email );
			$r[] = output_price( $p->contract_total );
			$r[] = output_price( $p->deposit_required );
			
			if ((int)$p->deposit_paid == 1)
				$r[] = jr_gettext( '_JOMRES_STATUS_PAID', _JOMRES_STATUS_PAID, false );
			else
				$r[] = jr_gettext( '_JOMRES_STATUS_NOTPAID', _JOMRES_STATUS_NOTPAID, false );

			$r[] = jomres_decode( $p->special_reqs );
			$r[] = $p->invoice_uid;
			$r[] = $p->timestamp;
			
			$output['aaData'][]                = $r;
			}
		
		/*
		 * Return the json encoded data to populate the table rows
		 */
		echo json_encode( $output );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>