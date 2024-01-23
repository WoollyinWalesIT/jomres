<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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

class j16000list_invoices_ajax
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
		
		$startDate = jomresGetParam($_GET, 'startDate', '');
		$endDate = jomresGetParam($_GET, 'endDate', '');
		$invoice_type = (int) jomresGetParam($_GET, 'invoice_type', '0');
		$invoice_status = (int) jomresGetParam($_GET, 'invoice_status', '4');
		$cms_user_id = (int) jomresGetParam($_GET, 'cms_user_id', '0');

		$rows = array();

		//set the table coulmns, in the exact orcer in which they`re displayed in the table
		$aColumns = array('a.id', 'a.id', 'c.enc_firstname', 'c.enc_surname', 'b.name', 'a.raised_date', 'a.due_date', 'a.paid', 'b.init_total_inclusive', 'a.init_total');

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

		$clause = 'WHERE ';

		//date interval filter
		if ($startDate != '' && $endDate != '') {
			if ($invoice_type == 3) {
				$clause .= "( a.raised_date <= '1970-01-01 00:00:01')";
			} else {
				$clause .= "( DATE_FORMAT(a.raised_date, '%Y/%m/%d') BETWEEN DATE_FORMAT('".$startDate."', '%Y/%m/%d') AND DATE_FORMAT('".$endDate."', '%Y/%m/%d') ) ";
			}
		}

		//booking/commission/subscription invoices
		switch ($invoice_type) {
			case 1:
				$clause .= 'AND a.is_commission = 1 ';
				break;
			case 2:
				$clause .= 'AND a.subscription = 1 ';
				break;
			default:
				$clause .= 'AND ( a.subscription = 1 OR a.is_commission = 1 ) ';
				break;
		}

		//status
		if ($invoice_status != 4) {
			$clause .= 'AND a.status = '.(int) $invoice_status.' ';
		}

		//users invoices
		if ($cms_user_id > 0) {
			$clause .= 'AND a.cms_user_id = '.(int) $cms_user_id.' ';
		}

		/*
		 * Build and execute the query
		 */

		$query = 'SET SQL_BIG_SELECTS=1';
		doInsertSql($query);

		$query = "SELECT SQL_CALC_FOUND_ROWS 
					a.id, 
					a.cms_user_id, 
					a.status, 
					a.raised_date, 
					a.due_date, 
					a.paid, 
					a.init_total, 
					a.currencycode,
					a.contract_id, 
					a.subscription,
					a.is_commission, 
					GROUP_CONCAT(DISTINCT b.name SEPARATOR '<br>') AS line_items, 
					SUM( CASE WHEN b.init_total_inclusive < 0 THEN 0 ELSE b.init_total_inclusive END ) AS grand_total,
					c.enc_firstname, 
					c.enc_surname 
				FROM #__jomresportal_invoices a 
					CROSS JOIN #__jomresportal_lineitems b ON a.id = b.inv_id 
					LEFT JOIN #__jomres_guest_profile c ON ( c.cms_user_id IS NULL OR a.cms_user_id = c.cms_user_id ) "
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

			switch ($p->status) {
				case 0:
					$label_class = 'label-red badge bg-danger';
					break;
				case 1:
					$label_class = 'label-green badge bg-success';
					break;
				case 2:
					$label_class = 'label-black badge bg-dark';
					break;
				case 3:
					$label_class = 'label-orange badge bg-warning text-dark';
					break;
				default:
					$label_class = 'label-grey badge bg-secondary';
					break;
			}

			// There are some differences between J3 & J4 and the font awesome icons
			$font_awesome_tariffs = 'fa-usd';
			$font_awesome_edit = 'fa-pencil-square-o';

			if (jomres_bootstrap_version() == '5') {
				$font_awesome_tariffs = 'fa-dollar-sign';
				$font_awesome_edit = 'fas fa-edit';
			}

			$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
			$toolbar->newToolbar();
			$toolbar->addItem($font_awesome_edit, 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=view_invoice&id='.$p->id), jr_gettext('COMMON_VIEW', 'COMMON_VIEW', false));
			if ($p->status != 1 && $p->raised_date > '1970-01-01 00:00:01') {
				$toolbar->addSecondaryItem($font_awesome_tariffs, '', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=mark_invoice_paid&id='.$p->id), jr_gettext('_JOMRES_INVOICE_MARKASPAID', '_JOMRES_INVOICE_MARKASPAID', false));
			}
			$r[] = $toolbar->getToolbar();


			$r[] = '<span class="label '.$label_class.'">'.$p->id.'</span>';

			if ($p->enc_firstname == '') {
				$r[] = '-';
			} else {
				$r[] = '<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices&cms_user_id='.$p->cms_user_id).'">'.$jomres_encryption->decrypt($p->enc_firstname).'</a>';
			}

			if ($p->enc_surname == '') {
				$r[] = '-';
			} else {
				$r[] = '<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices&cms_user_id='.$p->cms_user_id).'">'.$jomres_encryption->decrypt($p->enc_surname).'</a>';
			}

			$translated_line_items = '';
			$line_items = explode('<br>', $p->line_items);
			foreach ($line_items as $item) {
				if ($item != '') {
					$translated_line_items .= jr_gettext($item, $item, false).'<br>';
				}
			}
			$r[] = substr($translated_line_items, 0, -4);

			if ($p->raised_date != '1970-01-01 00:00:01') {
				$r[] = $p->raised_date;
			} else {
				$r[] = '';
			}
			
			if ($p->due_date != '1970-01-01 00:00:01') {
				$r[] = $p->due_date;
			} else {
				$r[] = '';
			}
			
			if ($p->paid != '1970-01-01 00:00:01') {
				$r[] = $p->paid;
			} else {
				$r[] = '';
			}
			
			$r[] = output_price($p->grand_total, $p->currencycode);
			$r[] = output_price($p->init_total, $p->currencycode);

			$output['data'][] = $r;
		}

		/*
		 * Return the json encoded data to populate the table rows
		 */
		echo json_encode($output);
		exit;
	}


	public function getRetVals()
	{
		return null;
	}
}
