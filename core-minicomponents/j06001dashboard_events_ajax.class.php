<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06001dashboard_events_ajax
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$this->retVals = null;
		
		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();
		
		$property_uid = jomresGetParam($_GET, 'property_uid', 0);
		if ($property_uid == 0) {
			$property_uid = getDefaultProperty();
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
			return;
		}

		$mrConfig = getPropertySpecificSettings($property_uid);
		if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
			return;
		}

		$output_now = true;
		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool) $componentArgs[ 'output_now' ];
		}

		$contracts = array();
		$guest_uids = array();
		$guests = array();
		$guest_contacts = array();
		$result = array();

		if (jomres_bootstrap_version() == 4 ) {
			$img_pending = 'badge badge-info';
			$img_arrivetoday = 'badge badge-primary';
			$img_resident = 'badge badge-success';
			$img_departtoday = 'badge badge-secondary';
			$img_stillhere = 'badge badge-warning';
			$img_late = 'badge badge-danger';
			$img_bookedout = 'badge badge-light';
			$img_black = 'badge badge-dark';
		} else {
			$img_pending = 'label label-grey';
			$img_arrivetoday = 'label label-orange';
			$img_resident = 'label label-green';
			$img_departtoday = 'label label-blue';
			$img_stillhere = 'label label-purple';
			$img_late = 'label label-red';
			$img_bookedout = 'label label-teal';
			$img_black = 'label label-black';
		}



		$from = jomresGetParam($_GET, 'start', '');
		$to = jomresGetParam($_GET, 'end', '');

		$from = date('Y/m/d', strtotime($from));
		$to = date('Y/m/d', strtotime($to));

        $query = SET_GLOBAL_STRING.
            "SELECT a.contract_uid,
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
					LEFT JOIN #__jomres_room_bookings b ON a.contract_uid = b.contract_uid AND b.property_uid = '" .(int) $property_uid."' 
					WHERE ( a.property_uid = '" .(int) $property_uid."' AND a.cancelled != '1' ) 
					AND ( 
						 ( DATE_FORMAT('" .$from."', '%Y/%m/%d') 
									   BETWEEN DATE_FORMAT(a.arrival, '%Y/%m/%d') 
									   AND DATE_FORMAT(a.departure, '%Y/%m/%d') ) 
						OR ( DATE_FORMAT('" .$to."', '%Y/%m/%d') 
									 	BETWEEN DATE_FORMAT(a.arrival, '%Y/%m/%d') 
										AND DATE_FORMAT(a.departure, '%Y/%m/%d') )
						OR ( DATE_FORMAT(a.arrival, '%Y/%m/%d') 
									 	BETWEEN DATE_FORMAT('" .$from."', '%Y/%m/%d') 
										AND DATE_FORMAT('" .$to."', '%Y/%m/%d') )
						OR ( DATE_FORMAT(a.departure, '%Y/%m/%d') 
									 	BETWEEN DATE_FORMAT('" .$from."', '%Y/%m/%d') 
										AND DATE_FORMAT('" .$to."', '%Y/%m/%d') )
						) ";

		$query .= 'GROUP BY a.contract_uid,b.room_uid ';

		$contractList = doSelectSql($query);

		if (!empty($contractList)) {
			

			$all_booking_notes = array();
			$query = "SELECT `contract_uid` , `note` ,`timestamp` FROM #__jomcomp_notes WHERE property_uid = " .(int) $property_uid ;
			$notesList = doSelectSql ( $query );
			if (!empty($notesList)) {
				foreach ($notesList as $note ) {
					if ( trim($note->note) != "" ) {
						$all_booking_notes[$note->contract_uid][] = $note;
					}
					
				}
			}

			$all_black_booking_reasons = array();
			$query = "SELECT `contract_uid` , `special_reqs` FROM #__jomres_contracts WHERE property_uid = " .(int) $property_uid ;
			$notesList = doSelectSql ( $query );
			if (!empty($notesList)) {
				foreach ($notesList as $note ) {
					if ( trim($note->special_reqs) != "" ) {
						$all_black_booking_reasons[$note->contract_uid][] = $note->special_reqs;
					}
					
				}
			}

			$today = date('Y/m/d');

			foreach ($contractList as $contract) {
				$guest_uids[] = $contract->guest_uid;
				$room_uids[$contract->contract_uid][] = $contract->room_uid;
			}
			if (!empty($guest_uids)) {
				$query = 'SELECT guests_uid , enc_firstname , enc_surname , enc_tel_landline , enc_email  FROM #__jomres_guests WHERE guests_uid IN ('.jomres_implode($guest_uids).') ';
				$guestsList = doSelectSql($query);

				foreach ($guestsList as $g) {
					$guests[$g->guests_uid] = ucfirst(jomres_decode($jomres_encryption->decrypt($g->enc_firstname))).' '.ucfirst(jomres_decode($jomres_encryption->decrypt($g->enc_surname)));
					$guest_contacts[$g->guests_uid] = array ("telephone" => jomres_decode($jomres_encryption->decrypt($g->enc_tel_landline)) , "email" => restore_task_specific_email_address(jomres_decode($jomres_encryption->decrypt($g->enc_email))) );
				}
			}

			foreach ($contractList as $c) {
				$id = $c->contract_uid.'_'.$c->room_uid;
				$resource = $c->room_uid;
				$start = date('Y-m-d', strtotime($c->arrival)).'T12:00:00';
				$end = date('Y-m-d', strtotime($c->departure)).'T11:59:59';

				if ((int) $mrConfig[ 'wholeday_booking' ] == 1) {
					$start = date('Y-m-d', strtotime($c->arrival)).'T00:00:01';
					$end = date('Y-m-d', strtotime($c->departure)).'T23:59:59';
				}

				if ( !is_channel_property($property_uid)) {
					if ((int) $c->black_booking == 1) {
						$url = JOMRES_SITEPAGE_URL_NOSEF.'&task=show_black_booking&contract_uid='.$c->contract_uid.'&thisProperty='.$property_uid;
					} else {
						$url = JOMRES_SITEPAGE_URL_NOSEF.'&task=edit_booking&contract_uid='.$c->contract_uid.'&thisProperty='.$property_uid;
					}
				} else {
					$url = '';
				}


				$date_elements = explode('/', $today);
				$unixToday = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
				$date_elements = explode('-', $c->arrival);
				$unixArrival = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
				$date_elements = explode('-', $c->departure);
				$unixDeparture = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);

				$imgToShow = $img_pending;
				if ($unixArrival == $unixToday && $c->booked_in != '1') {
					$imgToShow = $img_arrivetoday;
				}
				if ($unixDeparture == $unixToday && $c->booked_in == '1') {
					$imgToShow = $img_departtoday;
				}
				if ($unixArrival < $unixToday && $c->booked_in != '1') {
					$imgToShow = $img_late;
				}
				if ($unixDeparture > $unixToday && $c->booked_in == '1') {
					$imgToShow = $img_resident;
				}
				if ($unixDeparture < $unixToday && $c->booked_in == '1') {
					$imgToShow = $img_stillhere;
				}
				if ($c->bookedout == '1') {
					$imgToShow = $img_bookedout;
				}
				if ((int) $c->black_booking == 1) {
					$imgToShow = $img_black;
				}

				//the guest is still here even if the departure date has passed, so let`s adjust the event size. If it overlaps with other booking, it will be clearly visible in the dashboard. Receptionists can then amend bookings.
				if ($imgToShow == $img_stillhere) {
					if ((int) $mrConfig[ 'wholeday_booking' ] == 0) {
						$end = date('Y-m-d', strtotime($today)).'T11:59:59';
					} else {
						$end = date('Y-m-d', strtotime($today)).'T23:59:59';
					}
				}

				$title = '';
				if (isset($guests[$c->guest_uid]) && $guests[$c->guest_uid] != '') {
					$title = $guests[$c->guest_uid];
				} else {
					$title = jr_gettext('_JOMRES_COM_AVLCAL_BLACK_KEY', '_JOMRES_COM_AVLCAL_BLACK_KEY', false);
				}

				$description = '';
				if (isset($guests[$c->guest_uid]) && $guests[$c->guest_uid] != '') {
					$description .= jr_gettext('_JOMRES_BOOKING_NUMBER', '_JOMRES_BOOKING_NUMBER', false).': '.$c->tag.'<br/>';
				}
				$description .= jr_gettext('_JOMRES_HFROM', '_JOMRES_HFROM', false).': '.outputDate($c->arrival).'<br/>';
				$description .= jr_gettext('_JOMRES_HTO', '_JOMRES_HTO', false).': '.outputDate($c->departure).'<br/><br/>';
				
				if (isset($guest_contacts[$c->guest_uid])) {
					$description .= jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false).': '.$guest_contacts[$c->guest_uid]['email'].'<br/>';
					$description .= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', false).': '.$guest_contacts[$c->guest_uid]['telephone'].'';
				}
				
				
				if (isset($all_booking_notes[$c->contract_uid]) ) {
					$description .= '<hr/>';
					foreach ( $all_booking_notes[$c->contract_uid] as $note ) {
						 $description .= $note->timestamp.' '.sanitiseOverlibOutput($note->note).'<br/>';
					}
				}
				
				if (isset($all_black_booking_reasons[$c->contract_uid]) ) {
					$description .= '<hr/>';
					foreach ( $all_black_booking_reasons[$c->contract_uid] as $note ) {
						 $description .= sanitiseOverlibOutput($note).'<br/>';
					}
				}

				
				if ((int) $resource > 0) {
					$contracts[] = array(
										'id' => $id,
										'resourceId' => $resource,
										'start' => $start,
										'end' => $end,
										'title' => $title,
										'url' => $url,
										'className' => $imgToShow,
										'description' => $description,
										'contract_uid' => $c->contract_uid,
										'room_uid' => $c->room_uid,
										'this_contract_room_uids' => $room_uids[$c->contract_uid],
										);
				}
			}
		} else {
			$contracts = array();
		}

		if ($output_now) {
			echo json_encode($contracts);
		} else {
			$this->retVals = json_encode($contracts);
		}
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
