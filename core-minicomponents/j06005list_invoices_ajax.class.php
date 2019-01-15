<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005list_invoices_ajax
{
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
		$mrConfig = getPropertySpecificSettings($defaultProperty);

		$startDate = jomresGetParam($_GET, 'startDate', '');
		$endDate = jomresGetParam($_GET, 'endDate', '');
		$invoice_type = (int) jomresGetParam($_GET, 'invoice_type', '0');
		$invoice_status = (int) jomresGetParam($_GET, 'invoice_status', '4');
		$guest_id = (int) jomresGetParam($_GET, 'guest_id', '0');
		$show_all = (int) jomresGetParam($_GET, 'show_all', '0');

		if ($guest_id != 0) {
			$show_all = 1;
		}

		$rows = array();

		//set the table coulmns, in the exact orcer in which they`re displayed in the table
		$aColumns = array('a.id', 'a.id', 'd.tag', 'a.property_uid', 'c.enc_firstname', 'c.enc_surname', 'b.name', 'a.raised_date', 'a.due_date', 'a.paid', 'b.init_total_inclusive', 'a.init_total', 'a.status' , 'a.invoice_number');

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
			$sWhere .= ')';
		}

		/*
		 * Prefilter
		 */

		if ($thisJRUser->userIsRegistered && !$thisJRUser->userIsManager && !$thisJRUser->superPropertyManager) {
			$clause = 'WHERE ';
		} elseif ($thisJRUser->userIsManager) {
			if ($show_all == 1) {
				$clause = 'WHERE a.property_uid IN (0,'.jomres_implode($thisJRUser->authorisedProperties).') AND ';
			} else {
				$clause = 'WHERE ( a.property_uid = 0 OR a.property_uid = '.(int) $defaultProperty.' ) AND ';
			}
		}

		//date interval filter
		if ($startDate != '' && $endDate != '') {
			$clause .= "( DATE_FORMAT(a.raised_date, '%Y/%m/%d') BETWEEN DATE_FORMAT('".$startDate."', '%Y/%m/%d') AND DATE_FORMAT('".$endDate."', '%Y/%m/%d') ) ";
		}

		//booking/commission/subscription invoices
		switch ($invoice_type) {
			case 1:
				$clause .= 'AND ( a.contract_id != 0 AND a.subscription = 0 AND a.is_commission = 0 ) ';
				break;
			case 2:
				if ($thisJRUser->accesslevel > 50) { //higher than receptionist
					$clause .= 'AND ( a.is_commission = 1 AND a.cms_user_id = '.(int) $thisJRUser->id.' ) ';
				} else {
					$clause .= 'AND ( a.subscription = 0 AND a.is_commission = 0 ) ';
				}
				break;
			case 3:
				if ($thisJRUser->userIsRegistered && $thisJRUser->accesslevel != 50) { //user is registered but other than receptionist
					$clause .= 'AND ( a.subscription = 1 AND a.cms_user_id = '.(int) $thisJRUser->id.' ) ';
				} else {
					$clause .= 'AND ( a.subscription = 0 AND a.is_commission = 0 ) ';
				}
				break;
			default:
				if ($thisJRUser->userIsRegistered && !$thisJRUser->userIsManager && !$thisJRUser->superPropertyManager) {
					$clause .= 'AND a.cms_user_id = '.(int) $thisJRUser->id.' ';
				}
				if ($thisJRUser->accesslevel == 50) { //user is receptionist
					$clause .= 'AND ( a.subscription = 0 AND a.is_commission = 0 ) ';
				} else {
					$clause .= 'AND ( a.subscription = 0 OR ( a.subscription = 1 AND a.cms_user_id = '.(int) $thisJRUser->id.' ) ) AND ( a.is_commission = 0 OR ( a.is_commission = 1 AND a.cms_user_id = '.(int) $thisJRUser->id.' ) ) ';
				}
				break;
			}

		//status
		if ($invoice_status != 4) {
			$clause .= 'AND a.status = '.$invoice_status.' ';
		}

		//users invoices - not used
		if ($thisJRUser->userIsRegistered && !$thisJRUser->userIsManager && !$thisJRUser->superPropertyManager) {
			$clause .= 'AND a.cms_user_id = '.(int) $thisJRUser->id.' ';
		}

		//specific guest
		if ($guest_id != 0) {
			$clause .= 'AND d.guest_uid = '.$guest_id.' ';
		}

		/*
		 * Build and execute the query
		 */

		$query = 'SET SQL_BIG_SELECTS=1';
		doInsertSql($query);

		$query = "SELECT SQL_CALC_FOUND_ROWS 
					a.id, 
					a.cms_user_id, 
					a.guest_id, 
					a.status, 
					a.raised_date, 
					a.due_date, 
					a.paid, 
					a.init_total, 
					a.currencycode,
					a.contract_id, 
					a.subscription,
					a.property_uid,
					a.is_commission, 
					a.invoice_number, 
					GROUP_CONCAT(DISTINCT b.name SEPARATOR '<br>') AS line_items, 
					SUM( CASE WHEN b.init_total_inclusive < 0 THEN 0 ELSE b.init_total_inclusive END ) AS grand_total, 
					d.tag,
					d.currency_code,
					d.approved,
					( CASE WHEN a.subscription = 1 OR a.is_commission = 1 THEN e.enc_firstname ELSE c.enc_firstname END ) AS firstname, 
					( CASE WHEN a.subscription = 1 OR a.is_commission = 1 THEN e.enc_surname ELSE c.enc_surname END ) AS surname  
				FROM #__jomresportal_invoices a 
					JOIN #__jomresportal_lineitems b ON a.id = b.inv_id 
					LEFT JOIN #__jomres_contracts d ON a.id = d.invoice_uid 
					LEFT JOIN #__jomres_guests c ON (( a.guest_id != 0 AND a.guest_id = c.guests_uid ) 
													OR ( d.guest_uid != 0 AND d.guest_uid = c.guests_uid ))  
					LEFT JOIN #__jomres_guest_profile e ON a.cms_user_id = e.cms_user_id "
				.$clause
				.' '.$sWhere
				.' GROUP BY a.id '
				.$sOrder
				.' '.$sLimit;
		$jomresInvoicesList = doSelectSql($query);

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

		foreach ($jomresInvoicesList as $p) {
			$r = array();

			$thisProperty = '';
			if ($show_all == 1 && ((int) $p->property_uid != (int) $defaultProperty)) {
				$thisProperty = '&thisProperty='.$p->property_uid;
			}

			switch ($p->status) {
					case 0:
						$label_class = 'label-red';
						break;
					case 1:
						$label_class = 'label-green';
						break;
					case 2:
						$label_class = 'label-black';
						break;
					case 3:
						$label_class = 'label-orange';
						break;
					default:
						$label_class = 'label-grey';
						break;
					}

			if (!using_bootstrap()) {
				$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit', jomresURL(JOMRES_SITEPAGE_URL.'&task=view_invoice'.'&id='.$p->id.$thisProperty), jr_gettext('COMMON_VIEW', 'COMMON_VIEW', false));
				$r[] = $jrtb .= $jrtbar->endTable();
			} else {
				$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
				$toolbar->newToolbar();
				$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$p->id.$thisProperty), jr_gettext('COMMON_VIEW', 'COMMON_VIEW', false));
				if ((int) $p->contract_id != 0 && (int) $p->status != 1) {
					if ($thisJRUser->userIsManager && $p->approved == 1) {
						$toolbar->addSecondaryItem('fa fa-check', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=mark_booking_invoice_paid&id='.$p->id.$thisProperty), jr_gettext('_JOMRES_INVOICE_MARKASPAID', '_JOMRES_INVOICE_MARKASPAID', false));
						$toolbar->addSecondaryItem('fa fa-pencil-square-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$p->contract_id.$thisProperty), jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING', '_JOMCOMP_MYUSER_VIEWBOOKING', false));
					}
					if ($thisJRUser->userIsRegistered && !$thisJRUser->userIsManager && !$thisJRUser->superPropertyManager) {
						$toolbar->addSecondaryItem('fa fa-file-text', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=muviewbooking&contract_uid='.$p->contract_id.$thisProperty), jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING', '_JOMCOMP_MYUSER_VIEWBOOKING', false));
					}
				}
				$toolbar->addSecondaryItem('fa fa-print', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=view_invoice&popup=1&id='.$p->id.$thisProperty.'&tmpl='.get_showtime('tmplcomponent')), jr_gettext('COMMON_PRINT', 'COMMON_PRINT', false));
				$r[] = $toolbar->getToolbar();
			}

			$r[] = '<span class="label '.$label_class.'">'.$p->id.'</span>';

			if ($p->tag != '') {
				$r[] = $p->tag;
			} else {
				$r[] = '-';
			}

			if ($p->property_uid != 0) {
				$r[] = jomres_decode(getPropertyName($p->property_uid));
			} else {
				$r[] = '-';
			}

			if ($p->firstname == '' && $p->surname == '') {
				$r[] = '-';
				$r[] = '-';
			} else {
				$r[] = $jomres_encryption->decrypt($p->firstname);
				$r[] = $jomres_encryption->decrypt($p->surname);
			}	

			$translated_line_items = '';
			$line_items = explode('<br>', $p->line_items);
			foreach ($line_items as $item) {
				if ($item != '') {
					$translated_line_items .= jr_gettext($item, $item, false).'<br>';
				}
			}
			$r[] = substr($translated_line_items, 0, -4);

			if ($p->raised_date != '1970-01-01 00:00:01')
				$r[] = $p->raised_date;
			else
				$r[] = '';
			
			if ($p->due_date != '1970-01-01 00:00:01')
				$r[] = $p->due_date;
			else
				$r[] = '';
			
			if ($p->paid != '1970-01-01 00:00:01')
				$r[] = $p->paid;
			else
				$r[] = '';
			
			$r[] = output_price($p->grand_total, $p->currencycode , false );
			$r[] = output_price($p->init_total, $p->currencycode , false );

			//gateways stuff
			if ((int) $p->status == 3) {
				if (
					(!$thisJRUser->userIsManager && !$thisJRUser->superPropertyManager && $p->contract_id > 0 && $p->approved == 1) || //booking invoice
					($p->contract_id == 0 && ($p->subscription > 0 || $p->is_commission > 0)) //subscription/commission invoice
					) {
					if (!using_bootstrap()) {
						$r[] = '<a href="'.JOMRES_SITEPAGE_URL_NOSEF.'&task=list_gateways_for_invoice&invoice_id='.$p->id.'">'.jr_gettext('_JRPORTAL_INVOICES_PAYNOW', '_JRPORTAL_INVOICES_PAYNOW', false).'</a>';
					} else {
						$r[] = '<a href="'.JOMRES_SITEPAGE_URL_NOSEF.'&task=list_gateways_for_invoice&invoice_id='.$p->id.'" class="btn btn-success btn-sm"><i class="fa fa-credit-card"></i> '.jr_gettext('_JRPORTAL_INVOICES_PAYNOW', '_JRPORTAL_INVOICES_PAYNOW', false).'</a>';
					}
				} else {
					$r[] = '';
				}
			} else {
				$r[] = '';
			}
			
			$r[] = $p->invoice_number;
			
			$output['data'][] = $r;
		}

		/*
		 * Return the json encoded data to populate the table rows
		 */
		echo json_encode($output);
		exit;
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
