<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06001list_bookings_ajax
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
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$defaultProperty = getDefaultProperty();

		$startDate = jomresGetParam($_GET, 'startDate', '');
		$endDate = jomresGetParam($_GET, 'endDate', '');
		$deposit_status = (int) jomresGetParam($_GET, 'deposit_status', '2');
		$resident_status = (int) jomresGetParam($_GET, 'resident_status', '2');
		$booking_status = (int) jomresGetParam($_GET, 'booking_status', '2');
		$show_all = (int) jomresGetParam($_GET, 'show_all', '0');
		$tag = (int) jomresGetParam($_GET, 'tag', '0');
		$guest_uid = (int) jomresGetParam($_GET, 'guest_uid', '0');

		$img_pending = 'label label-grey badge bg-secondary';
		$img_arrivetoday = 'label label-orange badge bg-warning text-dark';
		$img_resident = 'label label-green badge bg-success';
		$img_late = 'label label-red badge bg-danger';
		$img_departtoday = 'label label-blue badge bg-info text-dark';
		$img_stillhere = 'label label-purple badge bg-success text-dark';
		$img_bookedout = 'label label-teal badge bg-light text-dark';
		$img_cancelled = 'label label-black badge bg-dark';

		$rows = array();

		//set the table columns, in the exact order in which they`re displayed in the table
		$aColumns = array('a.contract_uid', 'a.contract_uid', 'a.tag', 'a.property_uid', 'a.arrival', 'a.departure', 'b.enc_firstname', 'b.enc_surname', 'b.enc_tel_landline', 'b.enc_tel_mobile', 'b.enc_email', 'a.contract_total', 'a.deposit_required', 'a.deposit_paid', 'a.special_reqs', 'a.invoice_uid', 'a.timestamp', 'a.last_changed', 'a.approved', 'a.username', 'c.invoice_number', 'a.referrer');

		//set columns count
		$n = count($aColumns);

		/*
		 * Paging
		 */
		$sLimit = '';
		if (isset($_GET['start']) && $_GET['start'] != '-1') {
			$sLimit = 'LIMIT '.(int)$_GET['start'].', '.(int)$_GET['length'];
		}

		/*
		 * Ordering
		 */
		$sOrder = '';
		if (isset($_GET['jr_order'])) {
			$sOrder = 'ORDER BY ';
			for ($i = 0; $i < $n; ++$i) {
				if (isset($_GET['jr_order'][$i]['column'])) {
					$column_id = (int)$_GET['jr_order'][$i]['column'];
					$sOrder .= ''.$aColumns[$column_id].' '.($_GET['jr_order'][$i]['dir'] === 'asc' ? 'ASC' : 'DESC').', ';
				}
			}
			if ($sOrder == 'ORDER BY ') {
				$sOrder = '';
			} else {
				$sOrder = rtrim($sOrder, ', ');
			}
		}

		/*
		 * Filtering
		 * NOTE this does not match the built-in DataTables filtering which does it
		 * word by word on any field. It's possible to do here, but concerned about efficiency
		 * on very large tables, and MySQL's regex functionality is very limited
		 */
		$sWhere = '';
		$search = jomresGetParam($_GET, 'jr_search', array());
		if (isset($search['value']) && $search['value'] != '') {
			$sWhere = 'AND (';
			for ($i = 0; $i < $n; ++$i) {
				$sWhere .= ''.$aColumns[$i]." LIKE '%".$search['value']."%' OR ";
			}
			$sWhere = rtrim($sWhere, ' OR ');
		}
		
		$guest_matches = search_property_guests_by_string($search['value'], $defaultProperty, $thisJRUser->id, $show_all);
		if (isset($guest_matches['guest_uids']) && !empty($guest_matches['guest_uids'])) {
			$sWhere .= ' OR ';
			$count = count($guest_matches['guest_uids']);
			for ($i = 0; $i < $count; ++$i) {
				$sWhere .= "b.guests_uid = '".$guest_matches['guest_uids'][$i]."' OR ";
			}
			$sWhere = rtrim($sWhere, ' OR ');
		}

		if ($sWhere != '') {
			$sWhere .= ')';
		}

		/*
		 * Prefilter
		 */
		if ($show_all == 1) {
			$clause = 'WHERE a.property_uid IN ('.jomres_implode($thisJRUser->authorisedProperties).') AND a.contract_total > 0 ';
		} else {
			$clause = "WHERE a.property_uid = '".(int) $defaultProperty."' AND a.contract_total > 0 ";
		}

		//date interval filter
		if ($startDate != '' && $endDate != '' && $tag == 0) {
			$clause .= "AND ( ( DATE_FORMAT(a.arrival, '%Y/%m/%d') BETWEEN DATE_FORMAT('".$startDate."', '%Y/%m/%d') AND DATE_FORMAT('".$endDate."', '%Y/%m/%d') ) ";
			$clause .= "OR ( DATE_FORMAT(a.departure, '%Y/%m/%d') BETWEEN DATE_FORMAT('".$startDate."', '%Y/%m/%d') AND DATE_FORMAT('".$endDate."', '%Y/%m/%d') ) ) ";
		}

		//booked out or cancelled bookings
		if ($deposit_status != 2) {
			$clause .= "AND a.deposit_paid = '".$deposit_status."' ";
		}

		if ($resident_status != 2) {
			if ($resident_status == 1) {
				$clause .= "AND ( a.booked_in = '1' AND a.bookedout = '0' ) ";
			} elseif ($resident_status == '0') {
				$clause .= "AND a.bookedout = '1' ";
			} elseif ($resident_status == '3') {
				$clause .= "AND ( a.booked_in = '0' AND a.bookedout = '0' ) ";
			}
		}

		if ($booking_status != 2) {
			if ($booking_status == 0) {
				$clause .= "AND ( a.cancelled = '0' AND a.bookedout = '0' ) ";
			} elseif ($booking_status == 1) {
				$clause .= "AND a.cancelled = '1' ";
			}
		}

		if ($tag != 0) {
			$clause .= "AND a.tag LIKE '%".$tag."%' ";
		}
		
		if ($guest_uid != 0) {
			$clause .= "AND a.guest_uid = ".$guest_uid." ";
		}

		/*
		 * Build and execute the query
		 */

		$query = 'SET SQL_BIG_SELECTS=1';
		doInsertSql($query);

		$query = 'SELECT SQL_CALC_FOUND_ROWS 
						a.contract_uid, 
						a.arrival, 
						a.departure, 
						a.contract_total, 
						a.tag,
						a.currency_code,
						a.booked_in, 
						a.bookedout, 
						a.deposit_required, 
						a.deposit_paid, 
						a.special_reqs, 
						a.timestamp, 
						a.cancelled,
						a.username,
						a.invoice_uid,
						a.property_uid,
						a.approved,
						a.referrer,
						a.last_changed,
						b.guests_uid,
						b.mos_userid,
						b.enc_firstname, 
						b.enc_surname, 
						b.enc_tel_landline, 
						b.enc_tel_mobile, 
						b.enc_email,
						c.invoice_number
					FROM #__jomres_contracts a 
						LEFT JOIN #__jomres_guests b ON a.guest_uid = b.guests_uid 
						LEFT JOIN #__jomresportal_invoices c ON a.invoice_uid  = c.id  '
					.$clause
					.' '.$sWhere
					.' '.$sOrder
					.' '.$sLimit;
		$jomresContractsList = doSelectSql($query);

		/*
		 * Total number of rows
		 */
		$query = 'SELECT FOUND_ROWS()';
		$mp = (int) doSelectSql($query, 1);
		if ($mp == 0) {
			$output = array(
				'draw' => (int)$_GET['draw'],
				'recordsTotal' => 0,
				'recordsFiltered' => 0,
				'data' => array(),
				);
			echo json_encode($output);
			exit;
		}

		/*
		 * Start building the output array. The columns data should be built in the exact order in which they`ll be displayed in the table.
		 */
		$output = array(
			'draw' => (int)$_GET['draw'],
			'recordsTotal' => $mp,
			'recordsFiltered' => $mp,
			'data' => array(),
		);

		foreach ($jomresContractsList as $p) {
			$r = array();

			$imgToShow = $img_pending;
			$today = date('Y/m/d');
			$arrival = $p->arrival;
			$departure = $p->departure;
			$bookedIn = $p->booked_in;
			$bookedOut = $p->bookedout;
			$cancelled = $p->cancelled;

			$date_elements = explode('/', $today);
			$unixToday = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			$date_elements = explode('/', $arrival);
			$unixArrival = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			$date_elements = explode('/', $departure);
			$unixDeparture = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			if ($unixArrival == $unixToday && $bookedIn != '1') {
				$imgToShow = $img_arrivetoday;
			}
			if ($unixDeparture == $unixToday && $bookedIn == '1') {
				$imgToShow = $img_departtoday;
			}
			if ($unixArrival < $unixToday && $bookedIn != '1') {
				$imgToShow = $img_late;
			}
			if ($unixDeparture > $unixToday && $bookedIn == '1') {
				$imgToShow = $img_resident;
			}
			if ($unixDeparture < $unixToday && $bookedIn == '1') {
				$imgToShow = $img_stillhere;
			}
			if ($bookedOut == '1') {
				$imgToShow = $img_bookedout;
			}
			if ($cancelled == '1') {
				$imgToShow = $img_cancelled;
			}

			$thisProperty = '';
			if ($show_all == 1 && ((int) $p->property_uid != (int) $defaultProperty)) {
				$thisProperty = '&thisProperty='.$p->property_uid;
			}


				$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
				$toolbar->newToolbar();
				$toolbar->addSecondaryItem('fa fa-pencil-square-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', false));
				if ($p->cancelled == 0) {
					if ($p->booked_in == 0 && isset($MiniComponents->registeredClasses['06001']['checkin'])) {
						if ($p->approved == 1) {
							$toolbar->addItem('fa fa-sign-in', 'btn btn-default ', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=checkin&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_ACTION_CHECKIN', '_JOMRES_ACTION_CHECKIN', false));
						} else {
							$toolbar->addItem('fa fa-sign-in', 'btn btn-default disabled', '', 'javascript:void();', jr_gettext('_JOMRES_ACTION_CHECKIN', '_JOMRES_ACTION_CHECKIN', false));
						}
					} elseif ($p->bookedout == 0 && isset($MiniComponents->registeredClasses['06001']['checkin'])) {
						$toolbar->addItem('fa fa-sign-out', 'btn btn-success', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=checkout&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_ACTION_CHECKOUT', '_JOMRES_ACTION_CHECKOUT', false));
						$toolbar->addSecondaryItem('fa fa-undo', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=undo_checkin&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_ACTION_UNDO_CHECKIN', '_JOMRES_ACTION_UNDO_CHECKIN', false));
					} elseif ($p->bookedout == 1) {
						$toolbar->addItem('fa fa-check', 'btn  btn-default disabled', '', 'javascript:void();', jr_gettext('_JOMRES_STATUS_CHECKEDOUT', '_JOMRES_STATUS_CHECKEDOUT', false));
						$toolbar->addSecondaryItem('fa fa-undo', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=undo_checkout&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_ACTION_UNDO_CHECKOUT', '_JOMRES_ACTION_UNDO_CHECKOUT', false));
					} else {
						$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-default ', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', false));
					}
					if ($p->bookedout == 0) {
						if ($p->approved == 0 && isset($MiniComponents->registeredClasses['00005']['booking_enquiries'])) {
							$toolbar->addSecondaryItem('fa fa-check', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=approve_enquiry&contractUid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_BOOKING_APPROVE_INQUIRY', '_JOMRES_BOOKING_APPROVE_INQUIRY', false));
							$toolbar->addSecondaryItem('fa fa-times', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=reject_enquiry&contractUid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_BOOKING_REJECT_INQUIRY', '_JOMRES_BOOKING_REJECT_INQUIRY', false));
						}
						$toolbar->addSecondaryItem('fa fa-pencil-square-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=amendBooking&contractUid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_CONFIRMATION_AMEND', '_JOMRES_CONFIRMATION_AMEND', false));
						$toolbar->addSecondaryItem('fa fa-usd', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=add_service_to_bill&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE', '_JOMRES_COM_ADDSERVICE_TITLE', false));
					}
					if ($p->deposit_paid == 0 && $p->bookedout == 0 && $p->cancelled == 0) {
						$toolbar->addSecondaryItem('fa fa-usd', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_deposit&contractUid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', false));
					}
					if ($p->booked_in == 0) {
						$toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=cancel_booking&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', false));
						$toolbar->addSecondaryItem('fa fa-exclamation', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=mark_booking_noshow&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('BOOKING_NOSHOW_MENU', 'BOOKING_NOSHOW_MENU', false));
					}
					if (isset($MiniComponents->registeredClasses['00005']['jomres_ical'])) {
						$toolbar->addSecondaryItem('fa fa-calendar', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=ical_export_contract&contract_uid='.$p->contract_uid.'&property_uid='.$p->property_uid), jr_gettext('_JOMRES_ICAL_EVENT', '_JOMRES_ICAL_EVENT', false));
					}
				} elseif ($p->cancelled == 1) {
					$toolbar->addItem('fa fa-times', 'btn disabled', '', 'javascript:void();', jr_gettext('_JOMRES_STATUS_CANCELLED', '_JOMRES_STATUS_CANCELLED', false));
				}
				$toolbar->addSecondaryItem('fa fa-file-text', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$p->invoice_uid.$thisProperty), jr_gettext('_JOMRES_MANAGER_SHOWINVOICE', '_JOMRES_MANAGER_SHOWINVOICE', false));
				$toolbar->addSecondaryItem('fa fa-pencil-square-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=addnote&contract_uid='.$p->contract_uid.$thisProperty), jr_gettext('_JOMCOMP_BOOKINGNOTES_ADD', '_JOMCOMP_BOOKINGNOTES_ADD', false));
				$r[] = $toolbar->getToolbar();


			$r[] = $p->contract_uid;

			$r[] = '<span class="'.$imgToShow.'">'.$p->tag.'</span>';

			$r[] = getPropertyName($p->property_uid);
			$r[] = outputDate($p->arrival);
			$r[] = outputDate($p->departure);
			$r[] = '<a href="'.jomresUrl(JOMRES_SITEPAGE_URL.'&task=show_user_profile&cms_user_id='.$p->mos_userid).'" target="_blank">'.jomres_decode($jomres_encryption->decrypt($p->enc_firstname)).'</a>';
			$r[] = '<a href="'.jomresUrl(JOMRES_SITEPAGE_URL.'&task=show_user_profile&cms_user_id='.$p->mos_userid).'" target="_blank">'.jomres_decode($jomres_encryption->decrypt($p->enc_surname)).'</a>';
			$r[] = jomres_decode($jomres_encryption->decrypt($p->enc_tel_landline));
			$r[] = jomres_decode($jomres_encryption->decrypt($p->enc_tel_mobile));
			$r[] = jomres_decode($jomres_encryption->decrypt($p->enc_email));
			$r[] = output_price($p->contract_total, $p->currency_code, false);
			$r[] = output_price($p->deposit_required, $p->currency_code, false);

			if ((int) $p->deposit_paid == 1) {
				$r[] = jr_gettext('_JOMRES_STATUS_PAID', '_JOMRES_STATUS_PAID', false);
			} else {
				$r[] = jr_gettext('_JOMRES_STATUS_NOTPAID', '_JOMRES_STATUS_NOTPAID', false);
			}

			$r[] = jomres_decode($p->special_reqs);
			if ($p->invoice_number != '') {
				$r[] = $p->invoice_number;
			} else {
				$r[] = $p->invoice_uid;
			}
			
			$r[] = $p->timestamp;
			$r[] = $p->last_changed;

			if ((int) $p->approved == 1) {
				$r[] = '<span class="label label-green badge bg-success ">'.jr_gettext('_JOMRES_STATUS_APPROVED', '_JOMRES_STATUS_APPROVED', false).'</span>';
			} elseif ((int) $p->approved == 0) {
				$r[] = '<span class="label label-orange badge bg-warning text-dark">'.jr_gettext('_JOMRES_STATUS_INQUIRY', '_JOMRES_STATUS_INQUIRY', false).'</span>';
			} else {
				$r[] = '<span class="label label-red badge bg-danger">'.jr_gettext('_JOMRES_STATUS_REJECTED', '_JOMRES_STATUS_REJECTED', false).'</span>';
			}
			
			$r[] = $p->username;
			$r[] = $p->referrer;

			$output['data'][] = $r;
		}

		/*
		 * Return the json encoded data to populate the table rows
		 */
		echo json_encode($output);
	}


	public function getRetVals()
	{
		return null;
	}
}
