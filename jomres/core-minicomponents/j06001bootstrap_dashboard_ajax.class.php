<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Delete an optional extra
 #
* @package Jomres
#
 */
class j06001bootstrap_dashboard_ajax {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j06001bootstrap_dashboard_ajax()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$property_uid = jomresGetParam($_GET, 'property_uid', 0);
		if ( $property_uid == 0 ) return;
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !in_array( $property_uid, $thisJRUser->authorisedProperties ) ) return;
		
		$mrConfig = getPropertySpecificSettings( $property_uid );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) return;
		
		$contracts=array();
		$guest_uids=array();
		$guests=array();
		$result=array();
		
		$room_uid=(int)jomresGetParam($_GET, 'room_uid', '');
		$from=jomresGetParam($_GET, 'from', '');
		$to=jomresGetParam($_GET, 'to', '');
		
		$from=date('Y/m/d',$from/1000);
		$to=date('Y/m/d',$to/1000);
		
		$query = "SELECT a.contract_uid,a.deposit_paid,a.arrival,a.departure,a.guest_uid,a.deposit_paid,a.booked_in,a.bookedout,a.rooms_tariffs 
					FROM #__jomres_contracts a, #__jomres_room_bookings b  
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
		
		if ($room_uid!=0)
			$query.="AND (
						   a.contract_uid = b.contract_uid AND b.room_uid = '" . (int)$room_uid . "' 
						   AND (DATE_FORMAT(b.date, '%Y/%m/%d') 
											BETWEEN DATE_FORMAT('" . $from . "', '%Y/%m/%d') 
											AND DATE_FORMAT('" . $to . "', '%Y/%m/%d')) 
						   ) ";
		
		$query.="GROUP BY a.contract_uid ";
		
		$contractList = doSelectSql( $query );
		if ( count( $contractList ) > 0 )
			{
			foreach ( $contractList as $contract )
				{
				$guest_uids[]=$contract->guest_uid;
				}
			if ( count( $guest_uids ) > 0 )
				{
				$g_ids= genericOr( $guest_uids, 'guests_uid' );
			
				$query = "SELECT guests_uid,firstname,surname FROM #__jomres_guests WHERE $g_ids ";
				$guestsList = doSelectSql( $query );

				foreach ( $guestsList as $g )
					{
					$guests[$g->guests_uid]=ucfirst(jomres_decode($g->firstname)). ' ' . ucfirst(jomres_decode($g->surname));
					}
				}

			foreach ( $contractList as $c )
				{
				$id=$c->contract_uid;
				$start=1000 * strtotime($c->arrival. " UTC");
				$end=1000 * strtotime($c->departure. " UTC");
				
				$end=$end-86399999; //departure date should be marked as available
				
				if ($guests[$c->guest_uid]!='')
					$title=$guests[$c->guest_uid] . ' (' . outputDate($c->arrival) . ' - ' . outputDate($c->departure) . ' )';
				else
					$title=jr_gettext( '_JOMRES_COM_AVLCAL_BLACK_KEY', _JOMRES_COM_AVLCAL_BLACK_KEY,false ) . ' (' . outputDate($c->arrival) . ' - ' . outputDate($c->departure) . ' )';
				$class="event-special";
				if ($c->rooms_tariffs == '')
					$class="event-inverse";
				else
					{
					if ($c->deposit_paid ==1)
						$class="event-important";
					else
						$class="event-warning";
					if ($c->booked_in == 1)
						$class="event-success";
					if ($c->bookedout == 1)
						$class="event-info";
					}

				$url=jomresUrl(JOMRES_SITEPAGE_URL.'&task=editBooking&contract_uid='.$c->contract_uid);
				
				if ( $end>(1000*strtotime($from. " UTC")) ) //don`t pass events that end on $from (first day of the calendar view)
					$contracts[] = array ( "id"=>$id, "start" => $start, "end" => $end, "title" => $title, "class"=>$class, "url"=>$url );
				}
			$result['success']='1';
			$result['result']=$contracts;
			}
		else
			{
			$result['success']='0';
			$result['error']="No bookings for the selected period";
			$result['result']=array();
			}
		
		echo json_encode($result);
		}
	
	function getRetVals()
		{
		return null;
		}
	}
?>