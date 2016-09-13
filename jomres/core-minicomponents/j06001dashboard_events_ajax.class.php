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

class j06001dashboard_events_ajax {
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$this->retVals = null;
		$property_uid = jomresGetParam($_GET, 'property_uid', 0);
		if ( $property_uid == 0 )
			$property_uid = getDefaultProperty();
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !in_array( $property_uid, $thisJRUser->authorisedProperties ) ) return;
		
		$mrConfig = getPropertySpecificSettings( $property_uid );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) return;
		
		$output_now = true;
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = (bool)$componentArgs[ 'output_now' ];
		
		$contracts=array();
		$guest_uids=array();
		$guests=array();
		$result=array();
		
		$img_pending     = "label label-grey";
		$img_arrivetoday = "label label-orange";
		$img_resident    = "label label-green";
		$img_departtoday = "label label-blue";
		$img_stillhere   = "label label-purple";
		$img_late        = "label label-red";
		$img_bookedout   = "label label-teal";
		$img_black		 = "label label-black";
		
		$from=jomresGetParam($_GET, 'start', '');
		$to=jomresGetParam($_GET, 'end', '');
		
		$from=date('Y/m/d',strtotime($from));
		$to=date('Y/m/d',strtotime($to));

		$query= "SELECT a.contract_uid,
						DATE_FORMAT(a.arrival, '%Y-%m-%d') AS arrival,
						DATE_FORMAT(a.departure, '%Y-%m-%d') AS departure,
						a.guest_uid,
						a.deposit_paid,
						a.booked_in,
						a.bookedout,
						a.rates_uid,
						a.tag,
						b.room_uid,
						b.black_booking 
					FROM #__jomres_contracts a
					LEFT JOIN #__jomres_room_bookings b ON a.contract_uid = b.contract_uid AND b.property_uid = '" . (int) $property_uid . "' 
					WHERE ( a.property_uid = '" . (int) $property_uid . "' AND a.cancelled != '1' ) 
					AND ( 
						 ( DATE_FORMAT('" . $from . "', '%Y/%m/%d') 
									   BETWEEN DATE_FORMAT(a.arrival, '%Y/%m/%d') 
									   AND DATE_FORMAT(a.departure, '%Y/%m/%d') ) 
						OR ( DATE_FORMAT('" . $to . "', '%Y/%m/%d') 
									 	BETWEEN DATE_FORMAT(a.arrival, '%Y/%m/%d') 
										AND DATE_FORMAT(a.departure, '%Y/%m/%d') )
						OR ( DATE_FORMAT(a.arrival, '%Y/%m/%d') 
									 	BETWEEN DATE_FORMAT('" . $from . "', '%Y/%m/%d') 
										AND DATE_FORMAT('" . $to . "', '%Y/%m/%d') )
						OR ( DATE_FORMAT(a.departure, '%Y/%m/%d') 
									 	BETWEEN DATE_FORMAT('" . $from . "', '%Y/%m/%d') 
										AND DATE_FORMAT('" . $to . "', '%Y/%m/%d') )
						) ";
		
		$query.="GROUP BY a.contract_uid,b.room_uid ";

		$contractList = doSelectSql( $query );
		if ( count( $contractList ) > 0 )
			{
			$today = date( "Y/m/d" );
			
			foreach ( $contractList as $contract )
				{
				$guest_uids[]=$contract->guest_uid;
				$room_uids[$contract->contract_uid][]=$contract->room_uid;
				}
			if ( count( $guest_uids ) > 0 )
				{			
				$query = "SELECT guests_uid,firstname,surname FROM #__jomres_guests WHERE guests_uid IN (".jomres_implode($guest_uids).") ";
				$guestsList = doSelectSql( $query );

				foreach ( $guestsList as $g )
					{
					$guests[$g->guests_uid]=ucfirst(jomres_decode($g->firstname)). ' ' . ucfirst(jomres_decode($g->surname));
					}
				}

			foreach ( $contractList as $c )
				{
				$id=$c->contract_uid.'_'.$c->room_uid;
				$resource = $c->room_uid;
				$start = date("Y-m-d", strtotime($c->arrival))."T12:00:00";
				$end = date("Y-m-d", strtotime($c->departure))."T11:59:59";
				
				if ((int)$mrConfig[ 'wholeday_booking' ] == 1)
					{
					$start = date("Y-m-d", strtotime($c->arrival))."T00:00:01";
					$end = date("Y-m-d", strtotime($c->departure))."T23:59:59";
					}
				
				if ((int)$c->black_booking == 1)
					$url=JOMRES_SITEPAGE_URL_NOSEF.'&task=viewBlackBooking&contract_uid='.$c->contract_uid.'&thisProperty='.$property_uid;
				else
					$url=JOMRES_SITEPAGE_URL_NOSEF.'&task=editBooking&contract_uid='.$c->contract_uid.'&thisProperty='.$property_uid;
				
				$date_elements = explode( "/", $today );
				$unixToday     = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
				$date_elements = explode( "-", $c->arrival );
				$unixArrival   = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
				$date_elements = explode( "-", $c->departure );
				$unixDeparture = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
				
				$imgToShow = $img_pending;
				if ( $unixArrival == $unixToday && $c->booked_in != "1" ) $imgToShow = $img_arrivetoday;
				if ( $unixDeparture == $unixToday && $c->booked_in == "1" ) $imgToShow = $img_departtoday;
				if ( $unixArrival < $unixToday && $c->booked_in != "1" ) $imgToShow = $img_late;
				if ( $unixDeparture > $unixToday && $c->booked_in == "1" ) $imgToShow = $img_resident;
				if ( $unixDeparture < $unixToday && $c->booked_in == "1" ) $imgToShow = $img_stillhere;
				if ( $c->bookedout == "1" ) $imgToShow = $img_bookedout;
				if ((int)$c->black_booking == 1)
					$imgToShow = $img_black;
				
				//the guest is still here even if the departure date has passed, so let`s adjust the event size. If it overlaps with other booking, it will be clearly visible in the dashboard. Receptionists can then amend bookings.
				if ($imgToShow == $img_stillhere)
					{
					if ((int)$mrConfig[ 'wholeday_booking' ] == 0)
						$end = date("Y-m-d", strtotime($today))."T11:59:59";
					else
						$end = date("Y-m-d", strtotime($today))."T23:59:59";
					}

				$title='';
				if (isset($guests[$c->guest_uid]) && $guests[$c->guest_uid] != '')
					$title=$guests[$c->guest_uid];
				else
					$title=jr_gettext( '_JOMRES_COM_AVLCAL_BLACK_KEY', '_JOMRES_COM_AVLCAL_BLACK_KEY',false );

				$description='';
				if (isset($guests[$c->guest_uid]) && $guests[$c->guest_uid] !='' )
					$description.=jr_gettext( '_JOMRES_BOOKING_NUMBER', '_JOMRES_BOOKING_NUMBER',false ) . ': ' . $c->tag . '<br/>';
				$description.=jr_gettext( '_JOMRES_HFROM', '_JOMRES_HFROM',false ).': '.outputDate($c->arrival) . '<br/>';
				$description.=jr_gettext( '_JOMRES_HTO', '_JOMRES_HTO',false ).': '.outputDate($c->departure);
				
				if ((int)$resource > 0)
					$contracts[] = array ( 
										"id"=>$id, 
										"resourceId"=>$resource,
										"start" => $start, 
										"end" => $end, 
										"title" => $title, 
										"url"=>$url, 
										"className"=>$imgToShow, 
										"description"=>$description,
										"contract_uid"=>$c->contract_uid,
										"room_uid"=>$c->room_uid,
										"this_contract_room_uids"=>$room_uids[$c->contract_uid]
										);
				}
			}
		else
			{
			$contracts = array();
			}
		
		if ( $output_now )
			echo json_encode($contracts);
		else
			$this->retVals = json_encode($contracts);
		}
	
	function getRetVals()
		{
		return $this->retVals;
		}
	}
